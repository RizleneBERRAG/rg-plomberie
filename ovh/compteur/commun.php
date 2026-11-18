<?php
// Compteur anonyme des demandes de contact : fonctions partagées par clic.php et stats.php.
// Il ne garde aucune adresse IP, aucun cookie, aucun identifiant : seulement des totaux
// par jour, par type de demande, par page et par provenance.

const COMPTEUR_TYPES = ['appel', 'sms', 'ordinateur'];
const COMPTEUR_PROVENANCES = ['pub', 'google', 'direct', 'autre'];
const COMPTEUR_MAX_PAR_JOUR = 500;

// Les totaux sont rangés hors du dossier www quand l'hébergement le permet, sinon dans un
// sous-dossier fermé au public.
function compteur_dossier()
{
    $dehors = dirname(__DIR__, 2) . '/compteur-donnees';
    if (is_dir($dehors) || @mkdir($dehors, 0700, true)) {
        return $dehors;
    }
    $dedans = __DIR__ . '/donnees';
    if (!is_dir($dedans)) {
        @mkdir($dedans, 0700, true);
    }
    if (!is_file($dedans . '/.htaccess')) {
        @file_put_contents($dedans . '/.htaccess', "Require all denied\n");
    }
    return $dedans;
}

function compteur_fichier()
{
    return compteur_dossier() . '/totaux.json';
}

function compteur_lire()
{
    $contenu = @file_get_contents(compteur_fichier());
    $totaux = $contenu ? json_decode($contenu, true) : null;
    return is_array($totaux) ? $totaux : [];
}

// Ajoute 1 au total du jour, sous verrou pour ne rien perdre si deux clics arrivent ensemble.
function compteur_ajouter($jour, $type, $page, $provenance)
{
    $poignee = @fopen(compteur_fichier(), 'c+');
    if (!$poignee) {
        return false;
    }
    flock($poignee, LOCK_EX);
    $contenu = stream_get_contents($poignee);
    $totaux = $contenu ? json_decode($contenu, true) : [];
    if (!is_array($totaux)) {
        $totaux = [];
    }
    if (!isset($totaux[$jour])) {
        $totaux[$jour] = [];
    }
    if (array_sum($totaux[$jour]) < COMPTEUR_MAX_PAR_JOUR) {
        $cle = $type . '|' . $page . '|' . $provenance;
        $totaux[$jour][$cle] = (isset($totaux[$jour][$cle]) ? $totaux[$jour][$cle] : 0) + 1;
    }
    ksort($totaux);
    ftruncate($poignee, 0);
    rewind($poignee);
    fwrite($poignee, json_encode($totaux, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    fflush($poignee);
    flock($poignee, LOCK_UN);
    fclose($poignee);
    return true;
}
