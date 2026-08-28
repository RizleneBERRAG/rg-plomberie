@extends('layouts.app', [
    'title' => 'Réalisations et avant / après — RG Plomberie',
    'description' => 'Découvrez les univers d’intervention RG Plomberie et un comparateur avant / après interactif pour vos projets de rénovation.'
])

@section('content')
    <section class="page-hero page-hero--compact">
        <div class="container page-hero__grid">
            <div class="page-hero__copy" data-reveal>
                <nav class="breadcrumb" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Réalisations</span>
                </nav>
                <p class="eyebrow">Réalisations</p>
                <h1>Le travail se juge<br>dans les détails.</h1>
                <p class="lead">
                    Une galerie pensée pour montrer les typologies d’ouvrages, les finitions
                    et, demain, chaque transformation réelle sous le même angle.
                </p>
                <a class="button button--primary" href="{{ route('contact') }}">Parler de mon projet</a>
            </div>
            <figure class="page-hero__media" data-reveal>
                <img src="{{ asset('assets/img/rg/web/bathroom-1.webp') }}" width="1600" height="1067" alt="Salle de bains avec douche et baignoire" fetchpriority="high">
                <figcaption>Sanitaire · Agencement · Finitions</figcaption>
            </figure>
        </div>
    </section>

    <section class="section section--ink">
        <div class="container comparison-layout">
            <div class="comparison-copy" data-reveal>
                <p class="eyebrow eyebrow--light">Avant / Après</p>
                <h2>Un geste simple.<br>Une lecture immédiate.</h2>
                <p>Le comparateur conserve exactement la même zone à l’écran pour rendre la transformation compréhensible.</p>
                <div class="comparison-controls" data-compare-controls>
                    <button type="button" data-compare-set="0">Avant</button>
                    <button type="button" data-compare-set="100">Après</button>
                </div>
                <p class="media-note">Le visuel « après » est une projection. Le module est prêt à recevoir un vrai duo de photos chantier prises au même cadrage.</p>
            </div>
            <div class="comparison-frame" data-reveal>
                <div class="compare" data-compare style="--position: 50%;">
                    <img class="compare__base" src="{{ asset('assets/img/rg/web/before-bathroom.webp') }}" width="1168" height="784" alt="Salle de bain avant rénovation" loading="eager">
                    <div class="compare__after" data-compare-after>
                        <img src="{{ asset('assets/img/rg/web/after-bathroom-projection.webp') }}" width="1168" height="784" alt="Projection de la salle de bain après rénovation" loading="eager">
                    </div>
                    <span class="compare__label compare__label--before">Avant</span>
                    <span class="compare__label compare__label--after">Après</span>
                    <span class="compare__line" aria-hidden="true"><i></i></span>
                    <input class="compare__range" data-compare-range type="range" min="0" max="100" value="50" aria-label="Comparer avant et après">
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <header class="section-heading section-heading--split" data-reveal>
                <div><p class="eyebrow">Galerie</p><h2>Des univers d’intervention variés.</h2></div>
                <div>
                    <p>Cette première galerie utilise des visuels de présentation. Elle doit être enrichie progressivement avec les photos datées et autorisées des chantiers RG Plomberie.</p>
                    <p class="source-note">Cliquez sur une image pour l’afficher en grand.</p>
                </div>
            </header>

            <div class="gallery-grid">
                <button type="button" class="gallery-item gallery-item--large" data-lightbox-trigger data-caption="Salle de bains — visuel de présentation" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/bathroom-2.webp') }}" width="1600" height="897" alt="Salle de bains lumineuse avec baignoire et douche" loading="lazy">
                    <span>Salle de bains <small>Sanitaire</small></span>
                </button>
                <button type="button" class="gallery-item" data-lightbox-trigger data-caption="Douche et baignoire — visuel de présentation" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/bathroom-3.webp') }}" width="1600" height="1068" alt="Salle de bains avec douche vitrée et baignoire" loading="lazy">
                    <span>Pièce d’eau <small>Rénovation</small></span>
                </button>
                <button type="button" class="gallery-item" data-lightbox-trigger data-caption="Meuble vasque — visuel de présentation" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/bathroom-4.webp') }}" width="1600" height="1068" alt="Salle de bains avec meuble vasque et baignoire" loading="lazy">
                    <span>Équipements <small>Plomberie</small></span>
                </button>
                <button type="button" class="gallery-item" data-lightbox-trigger data-caption="Maintenance chauffage — visuel de présentation" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/heating-technician.webp') }}" width="1168" height="784" alt="Maintenance d’un équipement de chauffage" loading="lazy">
                    <span>Chauffage <small>Maintenance</small></span>
                </button>
                <button type="button" class="gallery-item gallery-item--wide" data-lightbox-trigger data-caption="Installation technique — visuel de présentation" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/hero-team.webp') }}" width="847" height="486" alt="Intervention sur un réseau de plomberie et chauffage" loading="lazy">
                    <span>Installation <small>Réseaux</small></span>
                </button>
                <button type="button" class="gallery-item" data-lightbox-trigger data-caption="Climatisation extérieure — visuel de présentation" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/air-conditioning.webp') }}" width="1168" height="784" alt="Pose d’une unité extérieure de climatisation" loading="lazy">
                    <span>Climatisation <small>Unité extérieure</small></span>
                </button>
                <button type="button" class="gallery-item" data-lightbox-trigger data-caption="Ventilation — visuel de présentation" data-reveal>
                    <img src="{{ asset('assets/img/rg/web/ventilation.webp') }}" width="1168" height="784" alt="Réseau de ventilation mécanique" loading="lazy">
                    <span>Ventilation <small>VMC</small></span>
                </button>
            </div>
        </div>
    </section>

    <section class="section section--sand">
        <div class="container editorial-split">
            <div data-reveal><p class="eyebrow">Conseil photo</p><h2>Construire une preuve chantier vraiment crédible.</h2></div>
            <div class="prose" data-reveal>
                <p>Pour chaque intervention importante : une photo avant, une photo pendant et une photo après, prises au même endroit, avec le même cadrage et la même orientation.</p>
                <p>Ajouter ensuite le type de travaux, la commune, le contexte et l’autorisation du client. Le comparateur est déjà prêt pour ces futurs contenus.</p>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div><p class="eyebrow eyebrow--light">Votre projet</p><h2>Quel résultat souhaitez-vous obtenir ?</h2><p>Envoyez votre besoin, vos contraintes et les photos de l’existant.</p></div>
            <div class="cta-panel__actions"><a class="button button--light" href="{{ route('contact') }}">Présenter mon projet</a><a class="cta-phone" href="tel:+33627997646">06 27 99 76 46</a></div>
        </div>
    </section>
@endsection
