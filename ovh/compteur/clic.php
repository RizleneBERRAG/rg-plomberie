<?php
// Reçoit un clic « Appeler » ou une demande par SMS envoyé par le site (navigator.sendBeacon)
// et ajoute 1 au total du jour. Rien d'autre n'est enregistré.

require __DIR__ . '/commun.php';

header('Content-Type: text/plain; charset=utf-8');
header('Cache-Control: no-store');
header('X-Robots-Tag: noindex');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}

// Seules les pages du site peuvent compter un clic.
$origine = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
if (!preg_match('#^https://(www\.)?rgplomberie\.com(/|$)#', $origine)) {
    http_response_code(403);
    exit;
}

$type = isset($_POST['t']) ? (string) $_POST['t'] : '';
$provenance = isset($_POST['s']) ? (string) $_POST['s'] : '';
$page = isset($_POST['p']) ? (string) $_POST['p'] : '/';

if (!in_array($type, COMPTEUR_TYPES, true)) {
    http_response_code(400);
    exit;
}
if (!in_array($provenance, COMPTEUR_PROVENANCES, true)) {
    $provenance = 'autre';
}
if (!preg_match('#^/[a-z0-9/\-]{0,60}$#', $page)) {
    $page = '/';
}

$jour = (new DateTime('now', new DateTimeZone('Europe/Paris')))->format('Y-m-d');
http_response_code(compteur_ajouter($jour, $type, $page, $provenance) ? 204 : 500);
