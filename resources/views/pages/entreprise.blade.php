@extends('layouts.app', [
    'title' => 'L’entreprise — RG Plomberie',
    'description' => 'Découvrez RG Plomberie, artisan plombier-chauffagiste créé en 2017, intervenant dans le Rhône et l’Est lyonnais.'
])

@section('content')
    <section class="page-hero">
        <div class="container page-hero__grid">
            <div class="page-hero__copy" data-reveal>
                <nav class="breadcrumb" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Entreprise</span>
                </nav>
                <p class="eyebrow">L’entreprise</p>
                <h1>La technique,<br>sans approximation.</h1>
                <p class="lead">
                    RG Plomberie est une entreprise artisanale créée en 2017, spécialisée
                    en plomberie, chauffage, sanitaire, climatisation et ventilation.
                </p>
                <div class="button-row">
                    <a class="button button--primary" href="{{ route('contact') }}">Présenter mon besoin</a>
                    <a class="button button--outline" href="{{ route('prestations') }}">Voir les prestations</a>
                </div>
            </div>
            <figure class="page-hero__media" data-reveal>
                <img src="{{ asset('assets/img/rg/web/hero-bathroom.webp') }}" width="900" height="675" alt="Salle de bains contemporaine, exemple d’univers d’intervention" fetchpriority="high">
                <figcaption>Plomberie · Sanitaire · Confort thermique</figcaption>
            </figure>
        </div>
    </section>

    <section class="identity-band">
        <div class="container identity-band__grid">
            <div><span>Création</span><strong>2017</strong></div>
            <div><span>Forme</span><strong>SASU artisanale</strong></div>
            <div><span>Siège</span><strong>Janneyrias</strong></div>
            <div><span>Interventions</span><strong>Rhône & Est lyonnais</strong></div>
        </div>
    </section>

    <section class="section">
        <div class="container editorial-split">
            <div data-reveal>
                <p class="eyebrow">Positionnement</p>
                <h2>Un artisan que l’on appelle pour résoudre, installer et durer.</h2>
            </div>
            <div class="prose" data-reveal>
                <p>
                    Derrière une installation fiable, il y a d’abord un diagnostic juste.
                    RG Plomberie prend en compte l’existant, l’usage du lieu et les contraintes
                    techniques avant de recommander une intervention.
                </p>
                <p>
                    Le même niveau d’attention est porté aux éléments que l’on ne voit plus
                    après le chantier qu’aux finitions visibles au quotidien.
                </p>
            </div>
        </div>
    </section>

    <section class="section section--sand">
        <div class="container">
            <header class="section-heading" data-reveal>
                <p class="eyebrow">Engagements</p>
                <h2>Ce qui doit rester constant.</h2>
            </header>
            <div class="value-grid">
                <article data-reveal>
                    <span>01</span>
                    <h3>Clarté</h3>
                    <p>Un besoin reformulé, une solution expliquée et un interlocuteur identifiable.</p>
                </article>
                <article data-reveal>
                    <span>02</span>
                    <h3>Propreté</h3>
                    <p>Une intervention organisée, respectueuse du lieu et attentive au rendu final.</p>
                </article>
                <article data-reveal>
                    <span>03</span>
                    <h3>Fiabilité</h3>
                    <p>Des choix cohérents avec l’installation existante et l’usage attendu.</p>
                </article>
                <article data-reveal>
                    <span>04</span>
                    <h3>Suivi</h3>
                    <p>Des explications utiles pour comprendre et entretenir les équipements.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section section--ink">
        <div class="container media-split">
            <figure class="media-split__image" data-reveal>
                <img src="{{ asset('assets/img/rg/web/heating-technician.webp') }}" width="1168" height="784" alt="Technicien effectuant un contrôle sur un appareil de chauffage" loading="lazy">
                <figcaption>Diagnostic · Entretien · Dépannage</figcaption>
            </figure>
            <div class="media-split__copy" data-reveal>
                <p class="eyebrow eyebrow--light">Organisation</p>
                <h2>Une intervention en quatre temps.</h2>
                <ol class="compact-steps">
                    <li><span>1</span><p><strong>Qualification</strong> du besoin par téléphone ou formulaire.</p></li>
                    <li><span>2</span><p><strong>Analyse</strong> des symptômes, photos et contraintes.</p></li>
                    <li><span>3</span><p><strong>Proposition</strong> adaptée au niveau d’urgence.</p></li>
                    <li><span>4</span><p><strong>Réalisation</strong> et explication du travail effectué.</p></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container zone-panel" data-reveal>
            <div>
                <p class="eyebrow">Secteur</p>
                <h2>Une entreprise proche du terrain.</h2>
                <p>
                    Le siège social est situé à Janneyrias. Les interventions sont organisées
                    sur déplacement dans le Rhône, la métropole lyonnaise et l’Est lyonnais,
                    selon la nature du besoin et les disponibilités.
                </p>
                <a class="text-link" href="{{ route('contact') }}">Vérifier votre secteur <span aria-hidden="true">→</span></a>
            </div>
            <div class="zone-panel__map" aria-label="Secteurs habituels">
                <span>Lyon</span>
                <span>Villeurbanne</span>
                <span>Décines</span>
                <span>Bron</span>
                <span>Meyzieu</span>
                <span>Janneyrias</span>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div>
                <p class="eyebrow eyebrow--light">Besoin d’un artisan ?</p>
                <h2>Expliquez la situation simplement.</h2>
                <p>Ville, équipement concerné, urgence et photos : nous allons droit à l’essentiel.</p>
            </div>
            <div class="cta-panel__actions">
                <a class="button button--light" href="{{ route('contact') }}">Demander un devis</a>
                <a class="cta-phone" href="tel:+33627997646">06 27 99 76 46</a>
            </div>
        </div>
    </section>
@endsection
