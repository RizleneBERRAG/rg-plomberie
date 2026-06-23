@extends('layouts.app', [
    'title' => 'Prestations - RG Plomberie',
    'description' => 'RG Plomberie intervient dans le Rhône pour la plomberie, le chauffage, la climatisation, la VMC, le dépannage, l’installation et l’entretien.'
])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/cinematic-prestations.css') }}">
@endpush

@section('content')

    <section class="page-cinematic-hero prestations-hero">
        <div class="page-cinematic-bg" style="background-image: url('{{ asset('assets/img/rg/works/work-5.jpg') }}');"></div>
        <div class="page-cinematic-overlay"></div>

        <div class="container page-cinematic-content prestations-hero-content">
            <span class="section-label">Prestations</span>

            <h1>
                Quatre métiers.<br>
                Une même exigence.
            </h1>

            <p>
                Plomberie, chauffage, climatisation et VMC : RG Plomberie intervient sur les installations
                essentielles du confort intérieur avec une approche claire, soignée et durable.
            </p>

            <div class="prestations-hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis</a>
                <a href="{{ route('realisations') }}" class="btn btn-ghost">Voir les réalisations</a>
            </div>
        </div>
    </section>

    <section class="prestations-intro section-dark">
        <div class="container prestations-intro-grid">
            <div>
                <span class="section-label">Approche</span>

                <h2>Des interventions pensées pour être claires, propres et fiables.</h2>
            </div>

            <p>
                Chaque demande mérite une réponse adaptée. RG Plomberie accompagne ses clients
                en identifiant précisément le besoin, en proposant une solution cohérente et en réalisant
                une intervention soignée, que ce soit pour un dépannage, une installation, un remplacement
                ou un entretien.
            </p>
        </div>
    </section>

    <section class="service-chapters">
        <div class="container service-chapters-list">

            <article class="service-chapter">
                <a href="{{ route('prestations.plomberie') }}" class="service-chapter-media">
                    <img src="{{ asset('assets/img/rg/works/work-4.jpg') }}" alt="Prestation plomberie RG Plomberie">
                    <span class="service-chapter-number">01</span>
                </a>

                <div class="service-chapter-content">
                    <span class="section-label">Plomberie</span>

                    <h2>Réparer, raccorder, sécuriser.</h2>

                    <p>
                        Fuite, robinetterie, sanitaire, ballon d’eau chaude, raccordement ou remplacement :
                        la plomberie demande une intervention nette, fiable et durable.
                    </p>

                    <ul>
                        <li>Recherche et réparation de fuite</li>
                        <li>Sanitaire, robinetterie et raccordements</li>
                        <li>Ballon d’eau chaude et équipements associés</li>
                        <li>Remplacement ou remise au propre d’installation</li>
                    </ul>

                    <a href="{{ route('prestations.plomberie') }}" class="chapter-link">
                        Découvrir la plomberie
                    </a>
                </div>
            </article>

            <article class="service-chapter reverse">
                <a href="{{ route('prestations.chauffage') }}" class="service-chapter-media">
                    <img src="{{ asset('assets/img/rg/works/work-5.jpg') }}" alt="Prestation chauffage RG Plomberie">
                    <span class="service-chapter-number">02</span>
                </a>

                <div class="service-chapter-content">
                    <span class="section-label">Chauffage</span>

                    <h2>Retrouver le confort thermique.</h2>

                    <p>
                        Une installation de chauffage doit être fiable, adaptée au logement et correctement entretenue.
                        RG Plomberie intervient pour améliorer le confort thermique et répondre aux besoins de chauffage.
                    </p>

                    <ul>
                        <li>Dépannage chauffage</li>
                        <li>Remplacement d’équipement</li>
                        <li>Entretien et contrôle</li>
                        <li>Optimisation du confort intérieur</li>
                    </ul>

                    <a href="{{ route('prestations.chauffage') }}" class="chapter-link">
                        Découvrir le chauffage
                    </a>
                </div>
            </article>

            <article class="service-chapter">
                <a href="{{ route('prestations.climatisation') }}" class="service-chapter-media">
                    <img src="{{ asset('assets/img/rg/works/work-6.jpg') }}" alt="Prestation climatisation RG Plomberie">
                    <span class="service-chapter-number">03</span>
                </a>

                <div class="service-chapter-content">
                    <span class="section-label">Climatisation</span>

                    <h2>Installer, entretenir, améliorer.</h2>

                    <p>
                        La climatisation participe au confort intérieur toute l’année. RG Plomberie intervient
                        pour la pose, la mise en service, l’entretien et le nettoyage des systèmes.
                    </p>

                    <ul>
                        <li>Installation de climatisation</li>
                        <li>Mise en service</li>
                        <li>Nettoyage et entretien</li>
                        <li>Amélioration du confort été / hiver</li>
                    </ul>

                    <a href="{{ route('prestations.climatisation') }}" class="chapter-link">
                        Découvrir la climatisation
                    </a>
                </div>
            </article>

            <article class="service-chapter reverse">
                <a href="{{ route('prestations.vmc') }}" class="service-chapter-media">
                    <img src="{{ asset('assets/img/rg/works/work-7.jpg') }}" alt="Prestation VMC RG Plomberie">
                    <span class="service-chapter-number">04</span>
                </a>

                <div class="service-chapter-content">
                    <span class="section-label">VMC</span>

                    <h2>Respirer un air plus sain.</h2>

                    <p>
                        Une bonne ventilation protège le logement, améliore le confort intérieur et limite
                        les problèmes d’humidité. RG Plomberie intervient sur l’installation, le remplacement
                        et l’amélioration des systèmes de VMC.
                    </p>

                    <ul>
                        <li>Installation ou remplacement de VMC</li>
                        <li>Ventilation et renouvellement de l’air</li>
                        <li>Lutte contre l’humidité</li>
                        <li>Amélioration du confort intérieur</li>
                    </ul>

                    <a href="{{ route('prestations.vmc') }}" class="chapter-link">
                        Découvrir la VMC
                    </a>
                </div>
            </article>

        </div>
    </section>

    <section class="prestations-process section-dark">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Méthode</span>

                <h2>Une demande claire, une intervention maîtrisée.</h2>
            </div>

            <div class="prestations-process-grid">
                <article class="prestations-process-card">
                    <span>01</span>

                    <h3>Comprendre</h3>

                    <p>
                        Le besoin est identifié avec précision : type d’intervention, niveau d’urgence,
                        ville, équipement concerné et contraintes éventuelles.
                    </p>
                </article>

                <article class="prestations-process-card">
                    <span>02</span>

                    <h3>Diagnostiquer</h3>

                    <p>
                        RG Plomberie analyse la situation afin d’orienter vers la solution la plus adaptée :
                        dépannage, remplacement, entretien ou installation.
                    </p>
                </article>

                <article class="prestations-process-card">
                    <span>03</span>

                    <h3>Intervenir</h3>

                    <p>
                        L’intervention est réalisée avec soin, en privilégiant la propreté,
                        la fiabilité et la qualité du rendu final.
                    </p>
                </article>

                <article class="prestations-process-card">
                    <span>04</span>

                    <h3>Accompagner</h3>

                    <p>
                        Les explications restent claires afin que le client comprenne le travail effectué
                        et les éventuelles recommandations à suivre.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="prestations-gallery">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Images métier</span>

                <h2>Des interventions visibles à travers les détails.</h2>
            </div>

            <div class="prestations-gallery-grid">
                <article class="prestations-gallery-card large" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-1.jpg') }}" alt="Installation plomberie RG Plomberie">

                    <div>
                        <span>Plomberie</span>
                        <strong>Installation propre</strong>
                    </div>
                </article>

                <article class="prestations-gallery-card" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-2.jpg') }}" alt="Chauffage RG Plomberie">

                    <div>
                        <span>Chauffage</span>
                        <strong>Confort thermique</strong>
                    </div>
                </article>

                <article class="prestations-gallery-card" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-3.jpg') }}" alt="Dépannage RG Plomberie">

                    <div>
                        <span>Dépannage</span>
                        <strong>Intervention rapide</strong>
                    </div>
                </article>

                <article class="prestations-gallery-card wide" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-8.jpg') }}" alt="Finition RG Plomberie">

                    <div>
                        <span>Finition</span>
                        <strong>Travail maîtrisé</strong>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="prestations-cta">
        <div class="container prestations-cta-box">
            <div>
                <span class="section-label">Besoin d’une intervention ?</span>

                <h2>Plomberie, chauffage, climatisation ou VMC : parlons de votre besoin.</h2>

                <p>
                    Présentez votre demande à RG Plomberie pour obtenir une réponse adaptée :
                    dépannage, installation, remplacement, entretien ou demande de devis.
                </p>
            </div>

            <div class="prestations-cta-actions">
                <a href="tel:+33627997646" class="mega-phone small">06 27 99 76 46</a>
                <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis</a>
            </div>
        </div>
    </section>

@endsection
