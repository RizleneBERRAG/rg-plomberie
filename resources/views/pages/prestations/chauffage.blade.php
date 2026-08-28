@extends('layouts.app', [
    'title' => 'Chauffage à Lyon et dans le Rhône — RG Plomberie',
    'description' => 'Installation, remplacement, entretien et dépannage chauffage à Lyon, dans le Rhône et l’Est lyonnais avec RG Plomberie.'
])

@section('content')
    <section class="service-hero">
        <div class="container service-hero__grid">
            <div class="service-hero__copy" data-reveal>
                <nav class="breadcrumb" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span>
                    <a href="{{ route('prestations') }}">Prestations</a><span aria-hidden="true">/</span><span>Chauffage</span>
                </nav>
                <p class="eyebrow">Chauffage · 02</p>
                <h1>La bonne température.<br>Au bon rendement.</h1>
                <p class="lead">Diagnostic, entretien, remplacement et amélioration de votre système de chauffage.</p>
                <div class="button-row">
                    <a class="button button--primary" href="{{ route('contact') }}">Demander une intervention</a>
                    <a class="button button--outline" href="tel:+33627997646">Appeler</a>
                </div>
            </div>
            <figure class="service-hero__media" data-reveal>
                <img src="{{ asset('assets/img/rg/web/heating-technician.webp') }}" width="1168" height="784" alt="Technicien contrôlant un appareil de chauffage" fetchpriority="high">
                <figcaption>Diagnostic · Entretien · Remplacement</figcaption>
            </figure>
        </div>
    </section>

    <section class="section">
        <div class="container service-intro">
            <div data-reveal><p class="eyebrow">Confort thermique</p><h2>Comprendre l’installation avant d’agir.</h2></div>
            <div class="prose" data-reveal>
                <p>Un défaut de chauffe peut venir de la production, de la régulation, de la circulation ou des émetteurs.</p>
                <p>RG Plomberie recherche l’origine du dysfonctionnement et propose une action proportionnée : réglage, entretien, réparation ou remplacement.</p>
            </div>
        </div>
        <div class="container intervention-grid">
            <article data-reveal><span>01</span><h3>Panne</h3><p>Qualification des symptômes et recherche de l’origine.</p></article>
            <article data-reveal><span>02</span><h3>Production</h3><p>Contrôle ou remplacement des équipements de chauffage.</p></article>
            <article data-reveal><span>03</span><h3>Radiateurs</h3><p>Raccordement, purge, équilibrage et remplacement.</p></article>
            <article data-reveal><span>04</span><h3>Régulation</h3><p>Vérification des commandes et de la programmation.</p></article>
            <article data-reveal><span>05</span><h3>Entretien</h3><p>Contrôles et nettoyage selon le type d’équipement.</p></article>
            <article data-reveal><span>06</span><h3>Optimisation</h3><p>Amélioration du confort et du fonctionnement global.</p></article>
        </div>
    </section>

    <section class="section section--ink">
        <div class="container media-split">
            <figure class="media-split__image" data-reveal>
                <img src="{{ asset('assets/img/rg/web/hero-team.webp') }}" width="847" height="486" alt="Intervention technique sur une installation de chauffage" loading="lazy">
                <figcaption>Contrôle de l’existant avant intervention</figcaption>
            </figure>
            <div class="media-split__copy" data-reveal>
                <p class="eyebrow eyebrow--light">Approche</p>
                <h2>Ne pas remplacer par réflexe.</h2>
                <ul class="feature-list">
                    <li><strong>Symptômes</strong><span>Température, bruit, pression et historique.</span></li>
                    <li><strong>Diagnostic</strong><span>Lecture globale de la production et du réseau.</span></li>
                    <li><strong>Solution</strong><span>Réparation ou remplacement argumenté.</span></li>
                    <li><strong>Réglages</strong><span>Explications utiles après remise en service.</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container faq-layout">
            <header data-reveal><p class="eyebrow">Questions fréquentes</p><h2>Préparer le diagnostic.</h2></header>
            <div class="faq-list" data-reveal>
                <details><summary>Quelles informations transmettre en cas de panne ?</summary><p>Le type d’appareil, les voyants ou codes affichés, la pression, les bruits éventuels et la date d’apparition du problème.</p></details>
                <details><summary>Intervenez-vous pour remplacer un équipement ?</summary><p>Oui, après vérification de l’existant, du besoin de chauffage et des contraintes de raccordement.</p></details>
                <details><summary>Une baisse de performance impose-t-elle un remplacement ?</summary><p>Pas nécessairement. Un entretien, un réglage ou un défaut sur le réseau peut expliquer la baisse de confort.</p></details>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div><p class="eyebrow eyebrow--light">Chauffage</p><h2>Une panne ou un équipement à remplacer ?</h2><p>Appelez pour une demande urgente ou décrivez votre installation dans le formulaire.</p></div>
            <div class="cta-panel__actions"><a class="button button--light" href="{{ route('contact') }}">Faire une demande</a><a class="cta-phone" href="tel:+33627997646">06 27 99 76 46</a></div>
        </div>
    </section>
@endsection
