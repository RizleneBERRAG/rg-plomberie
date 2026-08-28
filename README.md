# RG Plomberie

Site vitrine de RG Plomberie, entreprise artisanale spécialisée en plomberie, chauffage, climatisation et ventilation dans le Rhône et l’Est lyonnais.

Cette version adopte une direction « artisan premium » : composition structurée, palette ivoire / anthracite / rouge brique, typographie sobre et interactions limitées aux usages qui améliorent réellement l’expérience.

## Points forts

- Comparateur avant / après accessible au clavier et au tactile
- Pages dédiées à la plomberie, au chauffage, à la climatisation et à la VMC
- Galerie avec agrandissement natif
- Navigation responsive et barre d’action mobile
- Formulaire Laravel protégé par validation, limitation de débit et honeypot
- Solution de contact explicite pour la version statique GitHub Pages
- Métadonnées SEO, Open Graph, sitemap et données structurées
- Respect de la préférence de réduction des animations
- Images WebP optimisées et dimensions explicites
- Mentions légales renseignées avec les données publiques vérifiées

## Architecture

Le dépôt contient deux sorties cohérentes :

- resources/views : vues Blade utilisées par Laravel
- docs : export statique publié par GitHub Pages

Les fichiers réellement chargés par le site sont :

- public/assets/css/rg-premium.css
- public/assets/js/rg-premium.js
- public/assets/img/rg/web

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

## Formulaire statique

GitHub Pages ne peut pas exécuter le contrôleur Laravel. Sur la version docs, le formulaire prépare donc localement un message que le visiteur peut :

- envoyer par SMS au 06 27 99 76 46 ;
- copier avant d’appeler.

Aucune donnée n’est envoyée silencieusement à un service tiers. Si l’entreprise souhaite recevoir de vrais formulaires web, il faut déployer Laravel avec la messagerie configurée ou connecter explicitement un prestataire de formulaires.

## Contenus à confirmer

Avant une mise en production commerciale définitive :

1. confirmer le médiateur de la consommation auquel RG Plomberie a adhéré ;
2. tester l’adresse de réception du formulaire Laravel ;
3. remplacer les visuels de présentation par des photos de chantiers autorisées ;
4. remplacer la projection avant / après par deux photos réelles prises au même cadrage ;
5. confirmer le domaine canonique final si un nom de domaine personnalisé est connecté.

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
