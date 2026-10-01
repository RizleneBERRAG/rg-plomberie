<?php
/*
 * Réception du formulaire « Être rappelé » de la page RG Plomberie.
 * Fonctionne sur un hébergement mutualisé OVH avec la fonction mail() de PHP.
 *
 * Avant la mise en ligne :
 * - DESTINATAIRE : l'adresse qui reçoit les demandes (celle que le client lit sur son téléphone) ;
 * - EXPEDITEUR : une adresse du domaine hébergé, sinon OVH refuse ou classe en indésirable.
 */

date_default_timezone_set('Europe/Paris');
ini_set('display_errors', '0');

const DESTINATAIRE = '';
const EXPEDITEUR = 'site@rgplomberie.com';
const DEMANDES_MAX_PAR_HEURE = 5;

const PROBLEMES = [
    'fuite' => 'Fuite d’eau',
    'eau-chaude' => 'Plus d’eau chaude',
    'chauffage' => 'Chauffage en panne',
    'evacuation' => 'Évacuation qui s’écoule mal',
    'clim-pac' => 'Climatisation ou pompe à chaleur',
    'vmc' => 'VMC',
    'travaux' => 'Installation ou rénovation',
    'autre' => 'Autre',
];

$attendJson = strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false;

function repondre(bool $envoye, int $statut, string $message, bool $attendJson): void
{
    http_response_code($statut);

    if ($attendJson) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => $envoye, 'message' => $message], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Sans JavaScript : une page de confirmation minimale.
    header('Content-Type: text/html; charset=utf-8');
    $titre = $envoye ? 'Demande envoyée, merci.' : 'La demande n’a pas pu être envoyée.';
    echo '<!doctype html><html lang="fr"><head><meta charset="utf-8">'
        . '<meta name="viewport" content="width=device-width, initial-scale=1">'
        . '<meta name="robots" content="noindex"><title>RG Plomberie</title></head>'
        . '<body style="margin:0;padding:40px 20px;font-family:system-ui,sans-serif;background:#f4f4f2;color:#0b0b0c">'
        . '<main style="max-width:520px;margin:0 auto">'
        . '<h1 style="font-size:1.6rem">' . htmlspecialchars($titre, ENT_QUOTES, 'UTF-8') . '</h1>'
        . '<p>' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '</p>'
        . '<p><a href="tel:+33627997646" style="display:inline-block;padding:14px 20px;background:#d71920;color:#fff;font-weight:800;text-decoration:none">Appeler le 06 27 99 76 46</a></p>'
        . '<p><a href="./">Retour à la page</a></p>'
        . '</main></body></html>';
    exit;
}

function champ(string $nom, int $longueurMax, bool $multiligne = false): string
{
    $valeur = trim((string) ($_POST[$nom] ?? ''));
    $valeur = $multiligne
        ? preg_replace("/\r\n?/", "\n", $valeur)
        : preg_replace('/[\r\n\t]+/', ' ', $valeur);

    return mb_substr((string) $valeur, 0, $longueurMax, 'UTF-8');
}

function trop_de_demandes(): bool
{
    $adresse = $_SERVER['REMOTE_ADDR'] ?? 'inconnue';
    $fichier = sys_get_temp_dir() . '/rgp-rappel-' . sha1($adresse);
    $maintenant = time();

    $envois = [];
    if (is_readable($fichier)) {
        $envois = array_filter(
            array_map('intval', explode(',', (string) file_get_contents($fichier))),
            function ($moment) use ($maintenant) {
                return $moment > $maintenant - 3600;
            }
        );
    }

    if (count($envois) >= DEMANDES_MAX_PAR_HEURE) {
        return true;
    }

    $envois[] = $maintenant;
    @file_put_contents($fichier, implode(',', $envois), LOCK_EX);

    return false;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    repondre(false, 405, 'Ce formulaire s’envoie depuis la page RG Plomberie.', $attendJson);
}

$telephoneDirect = 'Vous pouvez appeler directement le 06 27 99 76 46.';

if (DESTINATAIRE === '') {
    repondre(false, 503, 'Le formulaire n’est pas encore relié à une adresse de réception. ' . $telephoneDirect, $attendJson);
}

// Robots : champ piège rempli, ou formulaire envoyé en moins de deux secondes.
$debut = (int) ($_POST['t'] ?? 0);
if (champ('website', 200) !== '' || ($debut > 0 && (microtime(true) * 1000) - $debut < 2000)) {
    repondre(true, 200, 'Demande envoyée.', $attendJson);
}

$nom = champ('nom', 80);
$telephone = champ('telephone', 20);
$commune = champ('commune', 80);
$probleme = champ('probleme', 20);
$details = champ('details', 1500, true);
$chiffres = preg_replace('/\D+/', '', $telephone);

if ($nom === '' || $commune === '' || !isset(PROBLEMES[$probleme]) || strlen($chiffres) < 9 || strlen($chiffres) > 15) {
    repondre(false, 422, 'Merci d’indiquer votre nom, un numéro de téléphone valide, votre commune et le problème. ' . $telephoneDirect, $attendJson);
}

if (trop_de_demandes()) {
    repondre(false, 429, 'Plusieurs demandes ont déjà été envoyées. ' . $telephoneDirect, $attendJson);
}

$libelle = PROBLEMES[$probleme];
$sujet = 'Rappel demandé : ' . $libelle . ' à ' . $commune . ' (' . $telephone . ')';

$corps = implode("\n", [
    'Nouvelle demande de rappel depuis le site.',
    '',
    'Nom : ' . $nom,
    'Téléphone : ' . $telephone,
    'Commune : ' . $commune,
    'Problème : ' . $libelle,
    '',
    'Détails :',
    $details !== '' ? $details : '(aucun)',
    '',
    'Reçue le ' . date('d/m/Y à H:i') . '.',
]);

$entetes = implode("\r\n", [
    'From: =?UTF-8?B?' . base64_encode('Site RG Plomberie') . '?= <' . EXPEDITEUR . '>',
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'Content-Transfer-Encoding: 8bit',
]);

$envoye = mail(DESTINATAIRE, '=?UTF-8?B?' . base64_encode($sujet) . '?=', $corps, $entetes);

if (!$envoye) {
    repondre(false, 500, 'L’envoi a échoué. ' . $telephoneDirect, $attendJson);
}

repondre(true, 200, 'RG Plomberie vous rappelle au numéro indiqué.', $attendJson);
