@extends('layouts.app', [
    'title' => 'RG Plomberie - Plomberie, chauffage, climatisation et VMC dans le Rhône',
    'description' => 'RG Plomberie intervient dans le Rhône pour vos besoins en plomberie, chauffage, climatisation, VMC, dépannage, installation et entretien.'
])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/cinematic-home.css') }}">
@endpush

@section('content')

    <section class="hero-cinematic">
        <div class="hero-background">
            <div class="hero-layer hero-layer-1" style="background-image: url('{{ asset('assets/img/rg/hero/hero-1.jpg') }}');"></div>
            <div class="hero-layer hero-layer-2" style="background-image: url('{{ asset('assets/img/rg/hero/hero-2.jpg') }}');"></div>
            <div class="hero-overlay"></div>
            <div class="hero-grid-overlay"></div>
        </div>

        <div class="container hero-content">
            <div class="hero-copy">
                <span class="eyebrow">Rhône 69 • Dépannage • Installation</span>

                <h1>
                    L’exigence<br>
                    d’une installation propre.
                </h1>

                <p>
                    RG Plomberie accompagne les particuliers et professionnels pour leurs besoins
                    en plomberie, chauffage, climatisation et VMC. Chaque intervention est réalisée
                    avec soin, précision et souci du détail.
                </p>

                <div class="hero-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis</a>
                    <a href="{{ route('realisations') }}" class="btn btn-ghost">Voir les réalisations</a>
                </div>
            </div>

            <div class="hero-side-panel">
                <span class="panel-kicker">Interventions</span>

                <div class="hero-side-panel-list">
                    <article>
                        <strong>Plomberie</strong>
                        <p>Fuites, sanitaires, raccordements, robinetterie et ballon d’eau chaude.</p>
                    </article>

                    <article>
                        <strong>Chauffage</strong>
                        <p>Installation, remplacement, entretien et amélioration du confort thermique.</p>
                    </article>

                    <article>
                        <strong>Climatisation</strong>
                        <p>Pose, maintenance, nettoyage et optimisation des performances.</p>
                    </article>

                    <article>
                        <strong>VMC</strong>
                        <p>Ventilation, renouvellement de l’air et amélioration du confort intérieur.</p>
                    </article>
                </div>
            </div>
        </div>

        <div class="hero-bottom-strip">
            <div class="hero-marquee">
                <div class="hero-marquee-track">
                    <div class="hero-marquee-group">
                        <span>Plomberie</span>
                        <span>Chauffage</span>
                        <span>Climatisation</span>
                        <span>VMC</span>
                        <span>Dépannage</span>
                        <span>Installation</span>
                        <span>Entretien</span>
                    </div>

                    <div class="hero-marquee-group" aria-hidden="true">
                        <span>Plomberie</span>
                        <span>Chauffage</span>
                        <span>Climatisation</span>
                        <span>VMC</span>
                        <span>Dépannage</span>
                        <span>Installation</span>
                        <span>Entretien</span>
                    </div>

                    <div class="hero-marquee-group" aria-hidden="true">
                        <span>Plomberie</span>
                        <span>Chauffage</span>
                        <span>Climatisation</span>
                        <span>VMC</span>
                        <span>Dépannage</span>
                        <span>Installation</span>
                        <span>Entretien</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cinematic-intro section-dark">
        <div class="container cinematic-intro-grid">
            <div class="cinematic-intro-text">
                <span class="section-label">Savoir-faire</span>

                <h2>Des interventions soignées, pensées pour durer.</h2>

                <p>
                    Derrière chaque installation, chaque réparation et chaque dépannage, RG Plomberie
                    met en avant une méthode claire : comprendre le besoin, proposer une solution adaptée
                    et réaliser un travail propre, fiable et durable.
                </p>
            </div>

            <div class="cinematic-stats">
                <article>
                    <strong>69</strong>
                    <span>Rhône</span>
                </article>

                <article>
                    <strong>4</strong>
                    <span>Pôles métier</span>
                </article>

                <article>
                    <strong>100%</strong>
                    <span>Travail soigné</span>
                </article>
            </div>
        </div>
    </section>

    <section class="film-strip-section">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Interventions</span>

                <h2>Des chantiers propres, lisibles et maîtrisés.</h2>
            </div>

            <div class="film-strip-grid">
                <article class="film-card large">
                    <img src="{{ asset('assets/img/rg/works/work-1.jpg') }}" alt="Dépannage RG Plomberie">
                    <div class="film-card-content">
                        <span>Intervention 01</span>
                        <strong>Dépannage rapide</strong>
                    </div>
                </article>

                <article class="film-card">
                    <img src="{{ asset('assets/img/rg/works/work-2.jpg') }}" alt="Installation propre RG Plomberie">
                    <div class="film-card-content">
                        <span>Intervention 02</span>
                        <strong>Installation propre</strong>
                    </div>
                </article>

                <article class="film-card">
                    <img src="{{ asset('assets/img/rg/works/work-3.jpg') }}" alt="Finition maîtrisée RG Plomberie">
                    <div class="film-card-content">
                        <span>Intervention 03</span>
                        <strong>Finition maîtrisée</strong>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="services-cinematic section-dark">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Prestations</span>

                <h2>Une expertise complète pour votre confort intérieur.</h2>
            </div>

            <div class="services-cinematic-grid">
                <a href="{{ route('prestations.plomberie') }}" class="service-cinematic-card">
                    <img src="{{ asset('assets/img/rg/works/work-4.jpg') }}" alt="Plomberie RG Plomberie">
                    <div class="service-cinematic-overlay"></div>

                    <div class="service-cinematic-content">
                        <span>01</span>
                        <strong>Plomberie</strong>
                        <p>Fuites, robinetterie, sanitaires, raccordements et ballon d’eau chaude.</p>
                    </div>
                </a>

                <a href="{{ route('prestations.chauffage') }}" class="service-cinematic-card">
                    <img src="{{ asset('assets/img/rg/works/work-5.jpg') }}" alt="Chauffage RG Plomberie">
                    <div class="service-cinematic-overlay"></div>

                    <div class="service-cinematic-content">
                        <span>02</span>
                        <strong>Chauffage</strong>
                        <p>Installation, remplacement, entretien et confort thermique au quotidien.</p>
                    </div>
                </a>

                <a href="{{ route('prestations.climatisation') }}" class="service-cinematic-card">
                    <img src="{{ asset('assets/img/rg/works/work-6.jpg') }}" alt="Climatisation RG Plomberie">
                    <div class="service-cinematic-overlay"></div>

                    <div class="service-cinematic-content">
                        <span>03</span>
                        <strong>Climatisation</strong>
                        <p>Pose, mise en service, maintenance et nettoyage des systèmes.</p>
                    </div>
                </a>

                <a href="{{ route('prestations.vmc') }}" class="service-cinematic-card">
                    <img src="{{ asset('assets/img/rg/works/work-7.jpg') }}" alt="VMC RG Plomberie">
                    <div class="service-cinematic-overlay"></div>

                    <div class="service-cinematic-content">
                        <span>04</span>
                        <strong>VMC</strong>
                        <p>Ventilation, renouvellement de l’air et amélioration du confort intérieur.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="before-after-signature">
        <div class="container before-after-signature-grid">
            <div class="before-after-signature-text">
                <span class="section-label">Avant / Après</span>

                <h2>Un résultat visible dès le premier regard.</h2>

                <p>
                    Les réalisations permettent de visualiser la qualité d’une intervention :
                    installation plus propre, équipements mieux intégrés et finitions plus nettes.
                </p>

                <a href="{{ route('realisations') }}" class="btn btn-primary">Explorer les chantiers</a>
            </div>

            <div class="before-after-placeholder" data-cinematic-before-after>
                <div class="before-after-placeholder-inner">
                    <div
                        class="before-after-placeholder-before"
                        data-before-layer
                        style="background-image: url('{{ asset('assets/img/rg/before-after/before/before-1.jpg') }}');"
                    ></div>

                    <div
                        class="before-after-placeholder-after"
                        data-after-layer
                        style="background-image: url('{{ asset('assets/img/rg/before-after/after/after-1.jpg') }}');"
                    ></div>

                    <span class="before-label">Avant</span>
                    <span class="after-label">Après</span>

                    <div class="before-after-divider" data-ba-divider>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-teaser section-dark">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Galerie</span>

                <h2>Un aperçu des interventions et finitions réalisées.</h2>
            </div>

            <div class="gallery-teaser-grid">
                <article class="gallery-card gallery-large" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-1.jpg') }}" alt="Réalisation RG Plomberie 1">
                </article>

                <article class="gallery-card" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-2.jpg') }}" alt="Réalisation RG Plomberie 2">
                </article>

                <article class="gallery-card" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-3.jpg') }}" alt="Réalisation RG Plomberie 3">
                </article>

                <article class="gallery-card" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-4.jpg') }}" alt="Réalisation RG Plomberie 4">
                </article>

                <article class="gallery-card wide" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-5.jpg') }}" alt="Réalisation RG Plomberie 5">
                </article>
            </div>
        </div>
    </section>

    <section class="emergency-cinematic">
        <div class="container emergency-cinematic-box">
            <div class="emergency-cinematic-text">
                <span class="section-label">Urgence</span>

                <h2>
                    Une fuite ?<br>
                    Une panne ?<br>
                    Un équipement à remplacer ?
                </h2>

                <p>
                    Pour une demande urgente, l’appel reste le moyen le plus rapide.
                    RG Plomberie vous accompagne pour identifier le problème et organiser une intervention adaptée.
                </p>
            </div>

            <div class="emergency-cinematic-action">
                <a href="tel:+33627997646" class="mega-phone">06 27 99 76 46</a>
                <a href="{{ route('depannage') }}" class="btn btn-ghost">Accéder au dépannage</a>
            </div>
        </div>
    </section>

    <section class="contact-cinematic section-dark">
        <div class="container contact-cinematic-grid">
            <div class="contact-cinematic-visual">
                <img src="{{ asset('assets/img/rg/works/work-8.jpg') }}" alt="Contact RG Plomberie">
            </div>

            <div class="contact-cinematic-panel">
                <span class="section-label">Contact</span>

                <h2>Demander un devis ou une intervention.</h2>

                <p>
                    Présentez votre besoin, votre ville et le type d’intervention souhaité.
                    RG Plomberie vous répondra avec une solution adaptée à votre situation.
                </p>

                <div class="contact-shortcuts">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Ouvrir le formulaire</a>
                    <a href="tel:+33627997646" class="btn btn-ghost">Appeler</a>
                </div>
            </div>
        </div>
    </section>

@endsection
