@extends('layouts.app', [
    'title' => 'Prestations plomberie, chauffage, climatisation et VMC — RG Plomberie',
    'description' => 'Découvrez les prestations RG Plomberie : plomberie, chauffage, climatisation, VMC, installation, entretien et dépannage dans le Rhône.'
])

@section('content')
    <section class="page-hero page-hero--compact">
        <div class="container page-hero__grid">
            <div class="page-hero__copy" data-reveal>
                <nav class="breadcrumb" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Prestations</span>
                </nav>
                <p class="eyebrow">Prestations</p>
                <h1>Quatre métiers.<br>Un service complet.</h1>
                <p class="lead">
                    De la fuite visible au confort thermique global, RG Plomberie intervient
                    sur les équipements essentiels du logement et des locaux professionnels.
                </p>
                <a class="button button--primary" href="{{ route('contact') }}">Demander une étude</a>
            </div>
            <figure class="page-hero__media" data-reveal>
                <img src="{{ asset('assets/img/rg/web/hvac-installation.webp') }}" width="996" height="664" alt="Pose d’un équipement de climatisation intérieur" fetchpriority="high">
                <figcaption>Installation · Entretien · Dépannage</figcaption>
            </figure>
        </div>
    </section>

    <section class="section">
        <div class="container service-chapters">
            <article class="service-chapter" data-reveal>
                <a class="service-chapter__media" href="{{ route('prestations.plomberie') }}">
                    <img src="{{ asset('assets/img/rg/web/bathroom-2.webp') }}" width="1600" height="897" alt="Salle de bains avec équipements sanitaires" loading="lazy">
                    <span>01</span>
                </a>
                <div class="service-chapter__copy">
                    <p class="eyebrow">Plomberie</p>
                    <h2>Réparer, raccorder, rénover.</h2>
                    <p>Fuites, robinetterie, sanitaires, chauffe-eau, réseaux d’alimentation et évacuations.</p>
                    <ul class="tick-list">
                        <li>Recherche et réparation de fuite</li>
                        <li>Création ou reprise de réseaux</li>
                        <li>Pose d’équipements sanitaires</li>
                    </ul>
                    <a class="text-link" href="{{ route('prestations.plomberie') }}">Voir la plomberie <span aria-hidden="true">→</span></a>
                </div>
            </article>

            <article class="service-chapter service-chapter--reverse" data-reveal>
                <a class="service-chapter__media" href="{{ route('prestations.chauffage') }}">
                    <img src="{{ asset('assets/img/rg/web/heating-technician.webp') }}" width="1168" height="784" alt="Technicien travaillant sur un équipement de chauffage" loading="lazy">
                    <span>02</span>
                </a>
                <div class="service-chapter__copy">
                    <p class="eyebrow">Chauffage</p>
                    <h2>Installer, entretenir, dépanner.</h2>
                    <p>Production de chaleur, eau chaude, radiateurs et amélioration du confort thermique.</p>
                    <ul class="tick-list">
                        <li>Diagnostic de panne</li>
                        <li>Remplacement d’équipement</li>
                        <li>Entretien et contrôle</li>
                    </ul>
                    <a class="text-link" href="{{ route('prestations.chauffage') }}">Voir le chauffage <span aria-hidden="true">→</span></a>
                </div>
            </article>

            <article class="service-chapter" data-reveal>
                <a class="service-chapter__media" href="{{ route('prestations.climatisation') }}">
                    <img src="{{ asset('assets/img/rg/web/air-conditioning.webp') }}" width="1168" height="784" alt="Intervention sur une unité extérieure de climatisation" loading="lazy">
                    <span>03</span>
                </a>
                <div class="service-chapter__copy">
                    <p class="eyebrow">Climatisation</p>
                    <h2>Dimensionner, poser, maintenir.</h2>
                    <p>Solutions de climatisation adaptées aux volumes, à l’usage et au bâtiment existant.</p>
                    <ul class="tick-list">
                        <li>Installation et mise en service</li>
                        <li>Nettoyage et maintenance</li>
                        <li>Diagnostic de fonctionnement</li>
                    </ul>
                    <a class="text-link" href="{{ route('prestations.climatisation') }}">Voir la climatisation <span aria-hidden="true">→</span></a>
                </div>
            </article>

            <article class="service-chapter service-chapter--reverse" data-reveal>
                <a class="service-chapter__media" href="{{ route('prestations.vmc') }}">
                    <img src="{{ asset('assets/img/rg/web/ventilation.webp') }}" width="1168" height="784" alt="Réseau de ventilation mécanique dans une construction" loading="lazy">
                    <span>04</span>
                </a>
                <div class="service-chapter__copy">
                    <p class="eyebrow">VMC</p>
                    <h2>Renouveler l’air correctement.</h2>
                    <p>Installation, remplacement et entretien de systèmes de ventilation mécanique contrôlée.</p>
                    <ul class="tick-list">
                        <li>Diagnostic d’humidité et d’aération</li>
                        <li>Pose ou remplacement de VMC</li>
                        <li>Entretien des bouches et réseaux</li>
                    </ul>
                    <a class="text-link" href="{{ route('prestations.vmc') }}">Voir la VMC <span aria-hidden="true">→</span></a>
                </div>
            </article>
        </div>
    </section>

    <section class="section section--sand">
        <div class="container">
            <header class="section-heading section-heading--split" data-reveal>
                <div>
                    <p class="eyebrow">Pour chaque demande</p>
                    <h2>Le bon niveau d’intervention.</h2>
                </div>
                <p>Un dépannage, un entretien et une rénovation complète ne se préparent pas de la même façon. La première étape consiste à qualifier précisément le besoin.</p>
            </header>
            <div class="value-grid value-grid--three">
                <article data-reveal><span>A</span><h3>Dépannage</h3><p>Identifier l’origine, sécuriser et remettre en service lorsque c’est possible.</p></article>
                <article data-reveal><span>B</span><h3>Entretien</h3><p>Contrôler, nettoyer et anticiper les dysfonctionnements des équipements.</p></article>
                <article data-reveal><span>C</span><h3>Installation</h3><p>Dimensionner une solution cohérente et soigner son intégration.</p></article>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div>
                <p class="eyebrow eyebrow--light">Vous hésitez ?</p>
                <h2>Décrivez simplement le symptôme.</h2>
                <p>RG Plomberie vous aidera à identifier la prestation correspondant à votre situation.</p>
            </div>
            <div class="cta-panel__actions">
                <a class="button button--light" href="{{ route('contact') }}">Faire une demande</a>
                <a class="cta-phone" href="tel:+33627997646">06 27 99 76 46</a>
            </div>
        </div>
    </section>
@endsection
