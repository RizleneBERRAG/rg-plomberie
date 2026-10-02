# RG Plomberie

Site vitrine de RG Plomberie, entreprise artisanale spécialisée en plomberie, chauffage, climatisation et ventilation dans le Rhône et l’Est lyonnais.

Charte « Chantier », validée le 1er octobre 2026 parmi trois ébauches : noir, photo des camions, rouge franc, titres massifs en Archivo et texte en Inter. Tout est à plat : aucun dégradé, aucun halo, aucune ombre portée, aucun bouton en gélule.

## Points forts

- Pages distinctes : accueil, entreprise, prestations (plomberie, chauffage, climatisation et pompe à chaleur, VMC), réalisations, dépannage, avis, contact, mentions légales
- Vraies photos de chantiers et des camions ; les visuels générés sont toujours signalés « visuel d’illustration »
- Comparateur avant / après au doigt, à la souris et au clavier
- Demande d’intervention par SMS (`#demande` sur l’accueil et la page Contact), sans serveur ni donnée enregistrée
- Menu et barre d’appel pensés pour le téléphone, sans débordement horizontal
- Polices hébergées sur le site (aucun appel à Google Fonts), aucun cookie
- Métadonnées SEO, Open Graph, sitemap, données structurées (horaires, communes desservies)

## Architecture

Le dépôt contient deux sorties cohérentes :

- resources/views : vues Blade utilisées par Laravel
- docs : export statique publié par GitHub Pages (aperçu)
- dist : export statique pour l’hébergement OVH (`npm run build:ovh`, non versionné)

Les fichiers réellement chargés par le site sont :

- public/assets/css/rg-site.css
- public/assets/js/rg-site.js
- public/assets/fonts (Archivo et Inter, variables)
- public/assets/img/rg (logo officiel, photos de chantiers, visuels d’illustration)

L’export statique est produit depuis les vues Blade par scripts/build-static.mjs. Cela évite de maintenir manuellement deux versions différentes.

## Installation Laravel

Prérequis : PHP 8.2+, Composer et une configuration de messagerie.

    composer install
    cp .env.example .env
    php artisan key:generate
    touch database/database.sqlite
    php artisan migrate
    php artisan serve

Renseigner au minimum les variables de messagerie dans .env :

    MAIL_MAILER=smtp
    MAIL_HOST=
    MAIL_PORT=
    MAIL_USERNAME=
    MAIL_PASSWORD=
    MAIL_FROM_ADDRESS=
    MAIL_FROM_NAME="RG Plomberie"
    MAIL_TO_ADDRESS=
    MAIL_TO_NAME="RG Plomberie"

Le formulaire Laravel ne doit pas être considéré comme opérationnel tant qu’un envoi de test réel n’a pas été reçu sur l’adresse configurée.

## Export GitHub Pages

Node.js suffit ; aucune dépendance npm n’est nécessaire.

    npm run build
    npm run check

La commande build reconstruit entièrement docs à partir des vues, copie uniquement les assets utilisés et régénère le sitemap, robots.txt et le manifeste.

La commande check vérifie notamment :

- le nombre de pages ;
- la présence d’un seul H1 par page ;
- les titres et descriptions ;
- les URL canoniques ;
- l’absence de syntaxe Blade dans docs ;
- les liens internes et assets ;
- les attributs alt, width et height des images ;
- la page 404 en noindex ;
- le poids total des assets publiés.

## Mise en ligne sur OVH (www.rgplomberie.com)

Le site publié est l’export statique des vues Blade : aucune base de données, aucun `.env`, aucun `vendor` sur l’hébergement.

    npm run build:ovh
    npm run check:ovh
    python scripts/deploy-landing.py --source dist --host ftp.cluster129.hosting.ovh.net --user rgploml

- `build:ovh` produit `dist/` (ignoré par Git) avec des chemins à la racine, les adresses en `https://www.rgplomberie.com/`, le sitemap, le `robots.txt` et un `.htaccess` (une seule adresse en `https://www.`, page 404, compression, cache).
- Le script envoie `dist/` dans `www/` par SFTP ; le mot de passe est demandé au lancement et n’est jamais stocké.
- La fiche Google pointe vers `https://www.rgplomberie.com/#demande` (bouton de réservation et produits) : l’accueil doit garder une section `id="demande"`.

`npm run build` reste la commande de l’aperçu GitHub Pages (`docs/`, sous `/rg-plomberie/`).

## Demandes par SMS

L’hébergement ne fait tourner aucun serveur de formulaire. Le formulaire d’accueil (`#demande`) et celui de la page Contact préparent un message que le visiteur envoie lui-même par SMS au 06 27 99 76 46 :

- sur téléphone, l’application SMS s’ouvre avec le message déjà rédigé ;
- sur ordinateur, le numéro et le message à copier s’affichent.

Rien n’est transmis au site ni enregistré. Le contrôleur Laravel (`ContactController`, envoi par e-mail) reste disponible si le site est un jour déployé en Laravel avec une messagerie configurée et testée.

## Page unique de dépannage

Le dossier landing contient la première page mise en ligne pour récolter des demandes en attendant le site complet. Le site complet la remplace à la racine ; elle reste publiée à l’adresse `/urgence/`, hors index, dans `docs/` comme dans `dist/`.

    python scripts/deploy-landing.py --host ftp.cluster129.hosting.ovh.net --user rgploml

envoie de nouveau la seule page de dépannage dans `www/` (à n’utiliser que pour revenir à cette version).

## Photos

- `public/assets/img/rg/chantiers` : vraies photos de chantiers RG Plomberie (salles de bains, hammam) et des camions, reprises de la fiche Google.
- `public/assets/img/rg/web` : visuels d’illustration générés. Ils sont toujours signalés comme tels sur le site (« visuel d’illustration ») et ne doivent jamais être présentés comme des chantiers de l’entreprise.

## Contenus à confirmer

Avant une mise en production commerciale définitive :

1. confirmer le médiateur de la consommation auquel RG Plomberie a adhéré ;
2. après la mise en ligne, envoyer une vraie demande par SMS depuis un téléphone pour vérifier sa réception ;
3. remplacer peu à peu les visuels d’illustration par des photos de chantiers fournies par le client ;
4. remplacer la projection avant / après par deux photos réelles prises au même cadrage ;
5. demander au client de nouvelles photos de chantiers (avant / après au même cadrage si possible).

Le visuel assets/img/rg/web/after-bathroom-projection.webp est une transformation générée à partir de la photo avant. Le site le signale comme projection et ne le présente pas comme un chantier réel.

## Identité publique utilisée

- RG PLOMBERIE
- SASU au capital de 5 000 €
- SIREN 833 160 617
- SIRET du siège 833 160 617 00035
- Siège : 4 B chemin de la Batterie, 38280 Janneyrias
- Président : Raphaël Giguet
- Téléphone : 06 27 99 76 46

Ces informations doivent être revérifiées lorsqu’un changement juridique ou d’adresse intervient.

## Développement

Conception et développement : Rizlene Berrag.
