@extends('layouts.app', [
    'title' => 'RG Plomberie — Plombier chauffagiste à Lyon et dans le Rhône',
    'description' => 'RG Plomberie intervient à Lyon, dans le Rhône et l’Est lyonnais pour vos travaux de plomberie, chauffage, climatisation, VMC et dépannage.'
])

@section('content')
    <section class="home-hero">
        <div class="home-hero__background" data-compare-scope>
            <div class="compare compare--hero-background" data-compare style="--position: 54%;">
                <img
                    class="compare__base"
                    src="{{ asset('assets/img/rg/web/transformations/heating-before.webp') }}"
                    width="1586"
                    height="992"
                    alt="Local technique avec une installation de chauffage vieillissante avant rénovation"
                    fetchpriority="high"
                >
                <div class="compare__after" data-compare-after>
                    <img
                        src="{{ asset('assets/img/rg/web/transformations/heating-after.webp') }}"
                        width="1586"
                        height="992"
                        alt="Projection du même local après rénovation de l’installation de chauffage"
                        fetchpriority="high"
                    >
                </div>
                <span class="compare__label compare__label--before">Avant</span>
                <span class="compare__label compare__label--after">Après</span>
                <span class="compare__line" aria-hidden="true"><i></i></span>
                <input
                    class="compare__range"
                    data-compare-range
                    type="range"
                    min="0"
                    max="100"
                    value="54"
                    aria-label="Comparer l’installation de chauffage avant et après rénovation"
                >
            </div>
            <div class="hero-background__controls" aria-label="Choisir la vue">
                <button type="button" data-compare-set="0">Avant</button>
                <button type="button" data-compare-set="100">Après</button>
            </div>
        </div>
        <div class="home-hero__overlay" aria-hidden="true"></div>

        <div class="container home-hero__stage">
            <div class="home-hero__copy" data-reveal>
                <div class="home-hero__eyebrow">
                    <span></span>
                    <p>Plombier-chauffagiste</p>
                    <small>Janneyrias · Est lyonnais</small>
                </div>
                <h1>Des installations fiables,<em>un travail soigné.</em></h1>
                <p class="lead">
                    Installation, rénovation, entretien ou dépannage : RG Plomberie accompagne
                    particuliers et professionnels avec un travail précis, propre et durable.
                </p>
                <div class="button-row">
                    <a class="button button--primary" href="{{ route('contact') }}">
                        Décrire mon projet <span aria-hidden="true">↗</span>
                    </a>
                    <a class="button button--outline" href="tel:+33627997646">
                        06 27 99 76 46
                    </a>
                </div>
            </div>

            <div class="home-hero__signature" data-reveal>
                <span>Depuis 2017</span>
                <strong>Plomberie · Chauffage<br>Climatisation · VMC</strong>
            </div>
        </div>
    </section>

    <section class="proof-strip" aria-label="Repères sur l’entreprise">
        <div class="container proof-strip__grid">
            <article>
                <strong>2017</strong>
                <span>Année de création</span>
            </article>
            <article>
                <strong>4</strong>
                <span>Expertises techniques</span>
            </article>
            <article>
                <strong>Local</strong>
                <span>Rhône & Est lyonnais</span>
            </article>
            <article>
                <strong>Direct</strong>
                <span>Un numéro pour échanger</span>
            </article>
        </div>
    </section>

    <section class="section" id="prestations">
        <div class="container">
            <header class="section-heading section-heading--split" data-reveal>
                <div>
                    <p class="eyebrow">Nos métiers</p>
                    <h2>Quatre expertises.<br>Une seule exigence.</h2>
                </div>
                <p>
                    Réparer ce qui doit l’être, remplacer lorsque c’est nécessaire
                    et concevoir une installation claire, durable et simple à entretenir.
                </p>
            </header>

            <div class="service-grid">
                <a class="service-card" href="{{ route('prestations.plomberie') }}" data-reveal>
                    <span class="service-card__number">01</span>
                    <div>
                        <h3>Plomberie</h3>
                        <p>Fuites, sanitaires, robinetterie, chauffe-eau et réseaux.</p>
                    </div>
                    <span class="service-card__arrow" aria-hidden="true">↗</span>
                </a>
                <a class="service-card" href="{{ route('prestations.chauffage') }}" data-reveal>
                    <span class="service-card__number">02</span>
                    <div>
                        <h3>Chauffage</h3>
                        <p>Installation, remplacement, entretien et recherche de panne.</p>
                    </div>
                    <span class="service-card__arrow" aria-hidden="true">↗</span>
                </a>
                <a class="service-card" href="{{ route('prestations.climatisation') }}" data-reveal>
                    <span class="service-card__number">03</span>
                    <div>
                        <h3>Climatisation</h3>
                        <p>Pose, mise en service, nettoyage et maintenance.</p>
                    </div>
                    <span class="service-card__arrow" aria-hidden="true">↗</span>
                </a>
                <a class="service-card" href="{{ route('prestations.vmc') }}" data-reveal>
                    <span class="service-card__number">04</span>
                    <div>
                        <h3>Ventilation</h3>
                        <p>VMC, renouvellement de l’air et traitement de l’humidité.</p>
                    </div>
                    <span class="service-card__arrow" aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </section>

    <section class="section transformations-section">
        <div class="container">
            <header class="section-heading section-heading--split" data-reveal>
                <div>
                    <p class="eyebrow">Avant / Après</p>
                    <h2>Le soin du détail,<br>avant tout.</h2>
                </div>
                <div>
                    <p>Deux univers, une même exigence : intégrer proprement les équipements et livrer des finitions nettes.</p>
                    <p class="transformations-section__hint"><span aria-hidden="true">↔</span> Faites glisser chaque image pour comparer.</p>
                </div>
            </header>

            <div class="transformation-grid">
                <article class="transformation-card" data-reveal data-compare-scope>
                    <div class="transformation-card__meta">
                        <div><span>01</span><p>Rénovation sanitaire</p></div>
                        <strong>Salle de bains</strong>
                    </div>
                    <div class="compare compare--card" data-compare style="--position: 48%;">
                        <img class="compare__base" src="{{ asset('assets/img/rg/web/transformations/bathroom-before.webp') }}" width="1536" height="1024" alt="Salle de bains vieillissante avant rénovation" loading="lazy">
                        <div class="compare__after" data-compare-after>
                            <img src="{{ asset('assets/img/rg/web/transformations/bathroom-after.webp') }}" width="1536" height="1024" alt="Projection de la même salle de bains après rénovation" loading="lazy">
                        </div>
                        <span class="compare__label compare__label--before">Avant</span>
                        <span class="compare__label compare__label--after">Après</span>
                        <span class="compare__line" aria-hidden="true"><i></i></span>
                        <input class="compare__range" data-compare-range type="range" min="0" max="100" value="48" aria-label="Comparer la salle de bains avant et après rénovation">
                    </div>
                    <div class="transformation-card__footer">
                        <p>Réseaux · Sanitaires · Finitions</p>
                        <div class="transformation-card__controls">
                            <button type="button" data-compare-set="0">Avant</button>
                            <button type="button" data-compare-set="100">Après</button>
                        </div>
                    </div>
                </article>

                <article class="transformation-card" data-reveal data-compare-scope>
                    <div class="transformation-card__meta">
                        <div><span>02</span><p>Confort thermique</p></div>
                        <strong>Climatisation</strong>
                    </div>
                    <div class="compare compare--card" data-compare style="--position: 52%;">
                        <img class="compare__base" src="{{ asset('assets/img/rg/web/transformations/ac-before.webp') }}" width="1536" height="1024" alt="Ancienne climatisation murale avant remplacement" loading="lazy">
                        <div class="compare__after" data-compare-after>
                            <img src="{{ asset('assets/img/rg/web/transformations/ac-after.webp') }}" width="1536" height="1024" alt="Projection du même intérieur avec une climatisation moderne" loading="lazy">
                        </div>
                        <span class="compare__label compare__label--before">Avant</span>
                        <span class="compare__label compare__label--after">Après</span>
                        <span class="compare__line" aria-hidden="true"><i></i></span>
                        <input class="compare__range" data-compare-range type="range" min="0" max="100" value="52" aria-label="Comparer la climatisation avant et après remplacement">
                    </div>
                    <div class="transformation-card__footer">
                        <p>Pose · Raccordements · Mise en service</p>
                        <div class="transformation-card__controls">
                            <button type="button" data-compare-set="0">Avant</button>
                            <button type="button" data-compare-set="100">Après</button>
                        </div>
                    </div>
                </article>
            </div>

            <p class="ai-visual-note">Visuels d’illustration générés par IA pour présenter des exemples de transformation. Ils ne constituent pas des photographies de chantiers RG Plomberie.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <header class="section-heading" data-reveal>
                <p class="eyebrow">Types d’intervention</p>
                <h2>Du technique au visible.</h2>
                <p>
                    Une sélection visuelle des univers sur lesquels l’entreprise intervient :
                    salle de bains, production d’eau chaude, chauffage, climatisation et ventilation.
                </p>
            </header>

            <div class="project-grid">
                <button class="project-card project-card--wide" type="button" data-lightbox-trigger data-caption="Rénovation de salle de bains — visuel d’illustration" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/bathroom-1.webp') }}" width="1600" height="1067" alt="Salle de bains avec douche, baignoire et meuble vasque" loading="lazy">
                    <span><small>Salle de bains</small><strong>Réseaux & équipements sanitaires</strong></span>
                </button>
                <button class="project-card" type="button" data-lightbox-trigger data-caption="Entretien d’un équipement de chauffage — visuel d’illustration" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/heating-technician.webp') }}" width="1168" height="784" alt="Technicien contrôlant un équipement de chauffage" loading="lazy">
                    <span><small>Chauffage</small><strong>Contrôle & maintenance</strong></span>
                </button>
                <button class="project-card" type="button" data-lightbox-trigger data-caption="Installation d’une climatisation — visuel d’illustration" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/air-conditioning.webp') }}" width="1168" height="784" alt="Technicien intervenant sur une unité extérieure de climatisation" loading="lazy">
                    <span><small>Climatisation</small><strong>Installation & mise en service</strong></span>
                </button>
            </div>

            <div class="section-action">
                <a class="text-link" href="{{ route('realisations') }}">Voir toute la galerie <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <section class="section section--sand">
        <div class="container method-layout">
            <div class="method-intro" data-reveal>
                <p class="eyebrow">Méthode</p>
                <h2>Un chantier cadré, du premier échange aux finitions.</h2>
                <p>Une bonne intervention commence par les bonnes questions et se termine par un résultat compréhensible.</p>
            </div>
            <ol class="method-list">
                <li data-reveal>
                    <span>01</span>
                    <div><h3>Comprendre</h3><p>Besoin, urgence, équipement, ville et contraintes sont précisés.</p></div>
                </li>
                <li data-reveal>
                    <span>02</span>
                    <div><h3>Diagnostiquer</h3><p>La situation est analysée avant de proposer la solution adaptée.</p></div>
                </li>
                <li data-reveal>
                    <span>03</span>
                    <div><h3>Intervenir</h3><p>Le travail est réalisé avec attention pour l’existant et les finitions.</p></div>
                </li>
                <li data-reveal>
                    <span>04</span>
                    <div><h3>Expliquer</h3><p>Vous savez ce qui a été fait et comment préserver l’installation.</p></div>
                </li>
            </ol>
        </div>
    </section>

    <section class="section review-prompt">
        <div class="container review-prompt__grid" data-reveal>
            <div>
                <p class="eyebrow">Réputation</p>
                <h2>Des avis à consulter à la source.</h2>
            </div>
            <div>
                <p>
                    Plutôt que d’afficher des témoignages anonymes, le site vous dirige vers
                    la fiche publique de l’entreprise pour consulter les retours disponibles.
                </p>
                <a class="button button--outline" href="https://www.google.com/maps/search/?api=1&query=RG+PLOMBERIE+06+27+99+76+46" rel="noopener noreferrer" target="_blank">
                    Consulter les avis publics <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div>
                <p class="eyebrow eyebrow--light">Votre projet</p>
                <h2>Parlons de votre installation.</h2>
                <p>Indiquez votre ville, le besoin et, si possible, préparez quelques photos.</p>
            </div>
            <div class="cta-panel__actions">
                <a class="button button--light" href="{{ route('contact') }}">Demander un devis</a>
                <a class="cta-phone" href="tel:+33627997646">06 27 99 76 46</a>
            </div>
        </div>
    </section>
@endsection
