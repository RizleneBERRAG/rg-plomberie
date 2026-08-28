@extends('layouts.app', [
    'title' => 'Climatisation à Lyon et dans le Rhône — RG Plomberie',
    'description' => 'Installation, mise en service, entretien et dépannage de climatisation à Lyon, dans le Rhône et l’Est lyonnais.'
])

@section('content')
    <section class="service-hero">
        <div class="container service-hero__grid">
            <div class="service-hero__copy" data-reveal>
                <nav class="breadcrumb" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span>
                    <a href="{{ route('prestations') }}">Prestations</a><span aria-hidden="true">/</span><span>Climatisation</span>
                </nav>
                <p class="eyebrow">Climatisation · 03</p>
                <h1>Un confort maîtrisé.<br>Été comme hiver.</h1>
                <p class="lead">Étude, pose, mise en service et entretien de systèmes de climatisation.</p>
                <div class="button-row">
                    <a class="button button--primary" href="{{ route('contact') }}">Étudier mon projet</a>
                    <a class="button button--outline" href="tel:+33627997646">Appeler</a>
                </div>
            </div>
            <figure class="service-hero__media" data-reveal>
                <img src="{{ asset('assets/img/rg/web/air-conditioning.webp') }}" width="1168" height="784" alt="Technicien intervenant sur une unité extérieure de climatisation" fetchpriority="high">
                <figcaption>Dimensionnement · Pose · Maintenance</figcaption>
            </figure>
        </div>
    </section>

    <section class="section">
        <div class="container service-intro">
            <div data-reveal><p class="eyebrow">Confort été / hiver</p><h2>Une implantation pensée pour le lieu.</h2></div>
            <div class="prose" data-reveal>
                <p>Le choix d’une climatisation dépend du volume, de l’isolation, de l’exposition, de l’usage et des possibilités techniques de pose.</p>
                <p>L’objectif est d’obtenir un confort régulier avec une intégration propre, une utilisation simple et un accès raisonnable pour l’entretien.</p>
            </div>
        </div>
        <div class="container intervention-grid">
            <article data-reveal><span>01</span><h3>Étude</h3><p>Volumes, usages, contraintes de pose et cheminements.</p></article>
            <article data-reveal><span>02</span><h3>Installation</h3><p>Pose des unités, raccordements et évacuation des condensats.</p></article>
            <article data-reveal><span>03</span><h3>Mise en service</h3><p>Contrôles, réglages et prise en main de l’équipement.</p></article>
            <article data-reveal><span>04</span><h3>Nettoyage</h3><p>Entretien des filtres, unités et éléments accessibles.</p></article>
            <article data-reveal><span>05</span><h3>Maintenance</h3><p>Vérification du fonctionnement et des performances.</p></article>
            <article data-reveal><span>06</span><h3>Dépannage</h3><p>Lecture des symptômes et recherche de défaut.</p></article>
        </div>
    </section>

    <section class="section section--ink">
        <div class="container media-split">
            <figure class="media-split__image" data-reveal>
                <img src="{{ asset('assets/img/rg/web/hvac-installation.webp') }}" width="996" height="664" alt="Pose d’une unité intérieure de climatisation" loading="lazy">
                <figcaption>Unité intérieure — visuel d’illustration</figcaption>
            </figure>
            <div class="media-split__copy" data-reveal>
                <p class="eyebrow eyebrow--light">Intégration</p>
                <h2>Performant ne doit pas vouloir dire envahissant.</h2>
                <ul class="feature-list">
                    <li><strong>Implantation</strong><span>Diffusion d’air et esthétique du volume.</span></li>
                    <li><strong>Cheminement</strong><span>Raccordements organisés et discrets.</span></li>
                    <li><strong>Condensats</strong><span>Évacuation anticipée et contrôlée.</span></li>
                    <li><strong>Entretien</strong><span>Accès préservé pour les opérations futures.</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container faq-layout">
            <header data-reveal><p class="eyebrow">Questions fréquentes</p><h2>Avant l’installation.</h2></header>
            <div class="faq-list" data-reveal>
                <details><summary>Comment savoir combien d’unités sont nécessaires ?</summary><p>Une étude du logement, des volumes et des usages est nécessaire. Une puissance ou un nombre d’unités ne se déduit pas uniquement de la surface.</p></details>
                <details><summary>Où placer l’unité extérieure ?</summary><p>Le choix tient compte de l’accès, du bruit, de la ventilation, des règles du bâtiment et du cheminement des raccordements.</p></details>
                <details><summary>Pourquoi l’entretien est-il important ?</summary><p>Il contribue à la qualité de l’air, au bon fonctionnement et à la longévité de l’installation.</p></details>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div><p class="eyebrow eyebrow--light">Climatisation</p><h2>Un projet à dimensionner ?</h2><p>Présentez les pièces concernées, leur surface et vos attentes de confort.</p></div>
            <div class="cta-panel__actions"><a class="button button--light" href="{{ route('contact') }}">Étudier mon projet</a><a class="cta-phone" href="tel:+33627997646">06 27 99 76 46</a></div>
        </div>
    </section>
@endsection
