@extends('layouts.app', [
    'title' => 'RG Plomberie — Plombier chauffagiste à Lyon et dans le Rhône',
    'description' => 'RG Plomberie intervient à Lyon, dans le Rhône et l’Est lyonnais pour vos travaux de plomberie, chauffage, climatisation, VMC et dépannage.'
])

@section('content')
    <section class="home-hero">
        <img
            class="home-hero__background"
            src="{{ asset('assets/img/rg/web/hero-team.webp') }}"
            width="847"
            height="486"
            alt="Techniciens intervenant sur une installation de plomberie et de chauffage"
            fetchpriority="high"
        >
        <span class="home-hero__wash" aria-hidden="true"></span>

        <div class="container home-hero__grid">
            <div class="home-hero__copy" data-reveal>
                <div class="hero-status">
                    <span><i aria-hidden="true"></i> Artisan plombier-chauffagiste depuis 2017</span>
                    <span>Janneyrias · Rhône · Est lyonnais</span>
                </div>

                <p class="eyebrow eyebrow--light">Plomberie · Chauffage · Climatisation · VMC</p>
                <h1>
                    <span>Votre confort.</span>
                    <span class="home-hero__accent">Notre savoir-faire.</span>
                    <span>Un travail propre.</span>
                </h1>
                <p class="lead">
                    Installation, rénovation, entretien ou dépannage : RG Plomberie apporte
                    une réponse claire et adaptée aux particuliers comme aux professionnels.
                </p>
                <div class="button-row">
                    <a class="button button--primary" href="{{ route('contact') }}">
                        Parler de mon projet <span aria-hidden="true">↗</span>
                    </a>
                    <a class="button button--outline-light" href="tel:+33627997646">
                        06 27 99 76 46
                    </a>
                </div>
            </div>

            <aside class="hero-expertise" aria-label="Expertises RG Plomberie" data-reveal>
                <p>Nos interventions</p>
                <a href="{{ route('prestations.plomberie') }}">
                    <span>01</span>
                    <div><strong>Plomberie</strong><small>Réseaux, sanitaires, eau chaude</small></div>
                    <i aria-hidden="true">↗</i>
                </a>
                <a href="{{ route('prestations.chauffage') }}">
                    <span>02</span>
                    <div><strong>Chauffage</strong><small>Installation, entretien, panne</small></div>
                    <i aria-hidden="true">↗</i>
                </a>
                <a href="{{ route('prestations.climatisation') }}">
                    <span>03</span>
                    <div><strong>Climatisation</strong><small>Pose, mise en service, maintenance</small></div>
                    <i aria-hidden="true">↗</i>
                </a>
                <a href="{{ route('prestations.vmc') }}">
                    <span>04</span>
                    <div><strong>Ventilation</strong><small>VMC et renouvellement de l’air</small></div>
                    <i aria-hidden="true">↗</i>
                </a>
            </aside>
        </div>

        <a class="hero-scroll" href="#expertises">
            <span aria-hidden="true"></span> Découvrir RG Plomberie
        </a>
    </section>

    <section class="proof-strip" aria-label="Repères sur l’entreprise">
        <div class="container proof-strip__grid">
            <article>
                <strong>Depuis 2017</strong>
                <span>Une entreprise installée localement</span>
            </article>
            <article>
                <strong>4 expertises</strong>
                <span>Un interlocuteur pour votre confort</span>
            </article>
            <article>
                <strong>Zone locale</strong>
                <span>Rhône, Métropole et Est lyonnais</span>
            </article>
            <article>
                <strong>Échange direct</strong>
                <span>Un numéro pour cadrer le besoin</span>
            </article>
        </div>
    </section>

    <section class="section services-section" id="expertises">
        <div class="container">
            <header class="section-heading section-heading--split" data-reveal>
                <div>
                    <p class="eyebrow">Nos métiers</p>
                    <h2>Une réponse claire,<br>quel que soit le besoin.</h2>
                </div>
                <p>
                    Réparer ce qui doit l’être, remplacer lorsque c’est nécessaire et concevoir
                    des installations fiables, lisibles et simples à entretenir.
                </p>
            </header>

            <div class="service-grid">
                <a class="service-card" href="{{ route('prestations.plomberie') }}" data-reveal>
                    <span class="service-card__media">
                        <img src="{{ asset('assets/img/rg/web/bathroom-4.webp') }}" width="1168" height="784" alt="Équipements sanitaires dans une salle de bains" loading="lazy">
                    </span>
                    <span class="service-card__shade" aria-hidden="true"></span>
                    <span class="service-card__number">01</span>
                    <div class="service-card__content">
                        <h3>Plomberie</h3>
                        <p>Fuites, réseaux, chauffe-eau, robinetterie et sanitaires.</p>
                    </div>
                    <span class="service-card__arrow" aria-hidden="true">↗</span>
                </a>

                <a class="service-card" href="{{ route('prestations.chauffage') }}" data-reveal>
                    <span class="service-card__media">
                        <img src="{{ asset('assets/img/rg/web/heating-technician.webp') }}" width="1168" height="784" alt="Technicien intervenant sur un équipement de chauffage" loading="lazy">
                    </span>
                    <span class="service-card__shade" aria-hidden="true"></span>
                    <span class="service-card__number">02</span>
                    <div class="service-card__content">
                        <h3>Chauffage</h3>
                        <p>Installation, remplacement, entretien et recherche de panne.</p>
                    </div>
                    <span class="service-card__arrow" aria-hidden="true">↗</span>
                </a>

                <a class="service-card" href="{{ route('prestations.climatisation') }}" data-reveal>
                    <span class="service-card__media">
                        <img src="{{ asset('assets/img/rg/web/air-conditioning.webp') }}" width="1168" height="784" alt="Intervention sur une unité extérieure de climatisation" loading="lazy">
                    </span>
                    <span class="service-card__shade" aria-hidden="true"></span>
                    <span class="service-card__number">03</span>
                    <div class="service-card__content">
                        <h3>Climatisation</h3>
                        <p>Pose, mise en service, nettoyage et maintenance.</p>
                    </div>
                    <span class="service-card__arrow" aria-hidden="true">↗</span>
                </a>

                <a class="service-card" href="{{ route('prestations.vmc') }}" data-reveal>
                    <span class="service-card__media">
                        <img src="{{ asset('assets/img/rg/web/ventilation.webp') }}" width="1168" height="784" alt="Installation technique de ventilation dans un bâtiment" loading="lazy">
                    </span>
                    <span class="service-card__shade" aria-hidden="true"></span>
                    <span class="service-card__number">04</span>
                    <div class="service-card__content">
                        <h3>Ventilation</h3>
                        <p>VMC, renouvellement de l’air et traitement de l’humidité.</p>
                    </div>
                    <span class="service-card__arrow" aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </section>

    <section class="section section--ink comparison-section">
        <div class="container comparison-layout">
            <div class="comparison-copy" data-reveal>
                <p class="eyebrow eyebrow--light">Avant / Après</p>
                <h2>Un résultat visible,<br>pas un effet d’annonce.</h2>
                <p>
                    Faites glisser le séparateur pour comparer l’état initial et une proposition
                    de rénovation pensée dans le même espace.
                </p>
                <div class="comparison-controls" data-compare-controls>
                    <button type="button" data-compare-set="0">Afficher l’avant</button>
                    <button type="button" data-compare-set="100">Afficher l’après</button>
                </div>
                <p class="media-note">
                    Démonstration visuelle de la fonctionnalité. Ce duo sera remplacé par deux
                    photographies prises au même angle sur un chantier RG Plomberie.
                </p>
            </div>

            <div class="comparison-frame" data-reveal>
                <div class="compare" data-compare style="--position: 52%;">
                    <img
                        class="compare__base"
                        src="{{ asset('assets/img/rg/web/before-bathroom.webp') }}"
                        width="1168"
                        height="784"
                        alt="Salle de bain avant rénovation"
                        loading="lazy"
                    >
                    <div class="compare__after" data-compare-after>
                        <img
                            src="{{ asset('assets/img/rg/web/after-bathroom-projection.webp') }}"
                            width="1168"
                            height="784"
                            alt="Projection de la même salle de bain après rénovation"
                            loading="lazy"
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
                        value="52"
                        aria-label="Comparer la salle de bain avant et après rénovation"
                    >
                </div>
                <p class="comparison-frame__hint"><span aria-hidden="true">↔</span> Faites glisser pour comparer</p>
            </div>
        </div>
    </section>

    <section class="section projects-section">
        <div class="container">
            <header class="section-heading" data-reveal>
                <p class="eyebrow">Types d’intervention</p>
                <h2>Le technique se voit<br>dans les finitions.</h2>
                <p>
                    Salle de bains, production d’eau chaude, chauffage, climatisation ou
                    ventilation : chaque intervention est pensée pour durer et rester lisible.
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

    <section class="section section--sand method-section">
        <div class="container method-layout">
            <div class="method-intro" data-reveal>
                <p class="eyebrow">Notre méthode</p>
                <h2>Un chantier cadré, du premier échange aux finitions.</h2>
                <p>Une bonne intervention commence par les bonnes questions et se termine par un résultat compréhensible.</p>
            </div>
            <ol class="method-list">
                <li data-reveal>
                    <span>01</span>
                    <div><h3>Comprendre</h3><p>Le besoin, l’équipement, la ville et les contraintes sont précisés.</p></div>
                </li>
                <li data-reveal>
                    <span>02</span>
                    <div><h3>Diagnostiquer</h3><p>La situation est analysée avant de proposer une solution adaptée.</p></div>
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
                <p class="eyebrow">Avis publics</p>
                <h2>La confiance se vérifie à la source.</h2>
            </div>
            <div>
                <p>
                    Les retours affichés sur une fiche publique sont plus utiles que des
                    témoignages anonymes recopiés sur un site.
                </p>
                <a class="button button--outline" href="https://www.google.com/maps/search/?api=1&amp;query=RG+PLOMBERIE+06+27+99+76+46" rel="noopener noreferrer" target="_blank">
                    Consulter les avis publics <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div>
                <p class="eyebrow eyebrow--light">Votre projet</p>
                <h2>Un besoin précis ?<br>Parlons-en simplement.</h2>
                <p>Indiquez votre ville, le type d’intervention et, si possible, préparez quelques photos.</p>
            </div>
            <div class="cta-panel__actions">
                <a class="button button--light" href="{{ route('contact') }}">Décrire mon projet</a>
                <a class="cta-phone" href="tel:+33627997646">06 27 99 76 46</a>
            </div>
        </div>
    </section>
@endsection
