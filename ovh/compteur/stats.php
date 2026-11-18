<?php
// Page privée des totaux du compteur, pour le récap mensuel.
// Accès : /compteur/stats.php?k=<clé> (la clé est écrite dans cle.php à l'export du site).

require __DIR__ . '/commun.php';
$cleAttendue = require __DIR__ . '/cle.php';

header('X-Robots-Tag: noindex, nofollow');
header('Cache-Control: no-store');

$cleRecue = isset($_GET['k']) ? (string) $_GET['k'] : '';
if (!is_string($cleAttendue) || strlen($cleAttendue) < 16 || !hash_equals($cleAttendue, $cleRecue)) {
    http_response_code(404);
    exit;
}

$fuseau = new DateTimeZone('Europe/Paris');
$mois = isset($_GET['mois']) && preg_match('/^\d{4}-\d{2}$/', $_GET['mois']) ? $_GET['mois'] : (new DateTime('now', $fuseau))->format('Y-m');

$totaux = compteur_lire();
$parType = array_fill_keys(COMPTEUR_TYPES, 0);
$parProvenance = array_fill_keys(COMPTEUR_PROVENANCES, 0);
$parPage = [];
$parJour = [];
$moisDisponibles = [];

foreach ($totaux as $jour => $lignes) {
    $moisDisponibles[substr($jour, 0, 7)] = true;
    if (strpos($jour, $mois) !== 0) {
        continue;
    }
    foreach ($lignes as $cle => $nombre) {
        list($type, $page, $provenance) = array_pad(explode('|', $cle), 3, 'autre');
        $parType[$type] = (isset($parType[$type]) ? $parType[$type] : 0) + $nombre;
        $parProvenance[$provenance] = (isset($parProvenance[$provenance]) ? $parProvenance[$provenance] : 0) + $nombre;
        $parPage[$page] = (isset($parPage[$page]) ? $parPage[$page] : 0) + $nombre;
        if (!isset($parJour[$jour])) {
            $parJour[$jour] = array_fill_keys(COMPTEUR_TYPES, 0);
        }
        $parJour[$jour][$type] += $nombre;
    }
}
arsort($parPage);
krsort($parJour);
krsort($moisDisponibles);

$libellesType = ['appel' => 'Appuis sur « Appeler »', 'sms' => 'Demandes envoyées par SMS', 'ordinateur' => 'Demandes préparées sur ordinateur'];
$libellesProvenance = ['pub' => 'Publicité Google Ads', 'google' => 'Google (recherche ou fiche)', 'direct' => 'Accès direct', 'autre' => 'Autre site'];
$total = array_sum($parType);

function e($texte)
{
    return htmlspecialchars((string) $texte, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title>Compteur des demandes – RG Plomberie</title>
<style>
    :root { --ink: #0e0e10; --red: #d71920; --line: #e4e1da; --soft: #f6f4ef; }
    * { box-sizing: border-box; }
    body { margin: 0; font: 16px/1.5 system-ui, -apple-system, "Segoe UI", sans-serif; color: var(--ink); background: var(--soft); }
    main { max-width: 860px; margin: 0 auto; padding: 24px 16px 48px; }
    h1 { font-size: 1.5rem; margin: 0 0 4px; }
    h2 { font-size: 1.05rem; margin: 28px 0 10px; }
    .note { color: #555; margin: 0 0 20px; }
    .mois { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 20px; }
    .mois a { padding: 4px 12px; border: 1px solid var(--line); border-radius: 4px; background: #fff; color: var(--ink); text-decoration: none; }
    .mois a.actif { background: var(--ink); color: #fff; border-color: var(--ink); }
    .chiffres { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; }
    .chiffre { background: #fff; border: 1px solid var(--line); border-left: 4px solid var(--red); padding: 12px 14px; }
    .chiffre b { display: block; font-size: 1.8rem; line-height: 1.1; }
    table { width: 100%; border-collapse: collapse; background: #fff; border: 1px solid var(--line); }
    th, td { padding: 8px 12px; border-bottom: 1px solid var(--line); text-align: left; }
    td.n, th.n { text-align: right; font-variant-numeric: tabular-nums; }
    .vide { background: #fff; border: 1px solid var(--line); padding: 16px; }
</style>
</head>
<body>
<main>
    <h1>Demandes de contact depuis le site</h1>
    <p class="note">Totaux anonymes : aucune adresse IP, aucun cookie. Un appui sur « Appeler » n’est pas forcément un appel abouti.</p>

    <?php if ($moisDisponibles) : ?>
    <nav class="mois" aria-label="Mois">
        <?php foreach (array_keys($moisDisponibles) as $m) : ?>
        <a href="?k=<?= e($cleRecue) ?>&amp;mois=<?= e($m) ?>"<?= $m === $mois ? ' class="actif"' : '' ?>><?= e($m) ?></a>
        <?php endforeach; ?>
    </nav>
    <?php endif; ?>

    <?php if (!$total) : ?>
    <p class="vide">Aucune demande comptée pour <?= e($mois) ?>.</p>
    <?php else : ?>
    <div class="chiffres">
        <div class="chiffre"><b><?= $total ?></b>demandes en <?= e($mois) ?></div>
        <?php foreach ($parType as $type => $nombre) : ?>
        <div class="chiffre"><b><?= $nombre ?></b><?= e($libellesType[$type]) ?></div>
        <?php endforeach; ?>
    </div>

    <h2>D’où venaient les visiteurs</h2>
    <table>
        <?php foreach ($parProvenance as $provenance => $nombre) : ?>
        <tr><td><?= e($libellesProvenance[$provenance]) ?></td><td class="n"><?= $nombre ?></td></tr>
        <?php endforeach; ?>
    </table>

    <h2>Depuis quelle page</h2>
    <table>
        <?php foreach ($parPage as $page => $nombre) : ?>
        <tr><td><?= e($page) ?></td><td class="n"><?= $nombre ?></td></tr>
        <?php endforeach; ?>
    </table>

    <h2>Jour par jour</h2>
    <table>
        <tr><th>Jour</th><th class="n">Appeler</th><th class="n">SMS</th><th class="n">Ordinateur</th></tr>
        <?php foreach ($parJour as $jour => $types) : ?>
        <tr><td><?= e($jour) ?></td><td class="n"><?= $types['appel'] ?></td><td class="n"><?= $types['sms'] ?></td><td class="n"><?= $types['ordinateur'] ?></td></tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</main>
</body>
</html>
