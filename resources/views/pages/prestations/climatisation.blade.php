@extends('layouts.app', [
    'title' => 'Climatisation et pompe à chaleur, Est lyonnais — RG Plomberie',
    'description' => 'Installation de climatisation, mise en service de pompe à chaleur, entretien et dépannage à Lyon et dans l’Est lyonnais. Devis gratuit.'
])

@section('content')
    <section class="page-head">
        <img class="page-head__bg" src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="" aria-hidden="true">
        <div class="wrap page-head__in">
            <div data-reveal>
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><a href="{{ route('prestations') }}">Prestations</a><span aria-hidden="true">/</span><span>Climatisation et PAC</span></nav>
                <p class="kicker">Climatisation et pompe à chaleur · 03</p>
                <h1>Un confort maîtrisé. <em>Été comme hiver.</em></h1>
                <p class="page-head__lead">Étude, pose, mise en service, entretien et dépannage de climatisations et de pompes à chaleur.</p>
                <div class="actions">
                    <a class="btn btn--red btn--big" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>06 27 99 76 46</a>
                    <a class="btn btn--line btn--big" href="{{ route('contact') }}#demande"><svg class="ic" aria-hidden="true"><use href="#i-sms"></use></svg>Demande par SMS</a>
                </div>
            </div>
            <figure class="page-head__photo page-head__photo--illus" data-reveal>
                <img src="{{ asset('assets/img/rg/web/air-conditioning.webp') }}" width="1168" height="784" alt="Intervention sur une unité extérieure de climatisation (visuel d’illustration)" fetchpriority="high">
                <figcaption>Visuel d’illustration</figcaption>
            </figure>
        </div>
    </section>

    <section class="block">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Confort été / hiver</p><h2>Une implantation pensée pour le lieu.</h2></div>
            <div class="prose" data-reveal>
                <p>Le choix d’une climatisation ou d’une pompe à chaleur dépend du volume, de l’isolation, de l’exposition, de l’usage et des possibilités techniques de pose.</p>
                <p>L’objectif : un confort régulier, une intégration propre, une utilisation simple et un accès raisonnable pour l’entretien.</p>
            </div>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap">
            <div class="cards" data-reveal>
                <article><span>01</span><h3>Étude</h3><p>Volumes, usages, contraintes de pose et cheminements.</p></article>
                <article><span>02</span><h3>Installation</h3><p>Pose des unités, raccordements et évacuation des condensats.</p></article>
                <article><span>03</span><h3>Mise en service</h3><p>Contrôles, réglages et prise en main, y compris pour les pompes à chaleur.</p></article>
                <article><span>04</span><h3>Nettoyage</h3><p>Entretien des filtres, unités et éléments accessibles.</p></article>
                <article><span>05</span><h3>Maintenance</h3><p>Vérification du fonctionnement et des performances.</p></article>
                <article><span>06</span><h3>Dépannage</h3><p>Panne, bruit, fuite : lecture des symptômes et recherche de défaut.</p></article>
            </div>
        </div>
    </section>

    <section class="block block--ink">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Points de contrôle</p><h2>Performant ne doit pas vouloir dire envahissant.</h2></div>
            <ul class="checks" data-reveal>
                    <li><strong>Implantation</strong><span>Diffusion de l’air et esthétique de la pièce.</span></li>
                    <li><strong>Cheminement</strong><span>Raccordements organisés et discrets.</span></li>
                    <li><strong>Condensats</strong><span>Évacuation anticipée et contrôlée.</span></li>
                    <li><strong>Entretien</strong><span>Accès préservé pour les opérations futures.</span></li>
            </ul>
        </div>
    </section>

    <section class="block">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Questions fréquentes</p><h2>Avant l’installation.</h2></div>
            <div class="faq" data-reveal>
                <details><summary>Comment savoir combien d’unités sont nécessaires ?</summary><p>Une étude du logement, des volumes et des usages est nécessaire : la puissance ne se déduit pas uniquement de la surface.</p></details>
                <details><summary>Où placer l’unité extérieure ?</summary><p>Le choix tient compte de l’accès, du bruit, de la ventilation, des règles du bâtiment et du cheminement des raccordements.</p></details>
                <details><summary>Pourquoi l’entretien est-il important ?</summary><p>Il contribue à la qualité de l’air, au bon fonctionnement et à la longévité de l’installation.</p></details>
            </div>
        </div>
    </section>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Un projet de clim ou de pompe à chaleur ?</h2>
            <p>Devis gratuit. Indiquez les pièces concernées et vos attentes.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="{{ route('contact') }}#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
