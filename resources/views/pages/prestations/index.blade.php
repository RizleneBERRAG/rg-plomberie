@extends('layouts.app', [
    'title' => 'Prestations — plomberie, chauffage, climatisation et VMC — RG Plomberie',
    'description' => 'Plomberie, chauffage, climatisation, pompe à chaleur et VMC à Lyon et dans l’Est lyonnais : dépannage, entretien et installation. Devis gratuit.'
])

@section('content')
    <section class="page-head">
        <img class="page-head__bg" src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="" aria-hidden="true">
        <div class="wrap page-head__in">
            <div data-reveal>
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Prestations</span></nav>
                <p class="kicker">Prestations</p>
                <h1>Un seul artisan pour <em>l’eau, la chaleur et l’air</em>.</h1>
                <p class="page-head__lead">Plomberie, chauffage, climatisation, pompe à chaleur et VMC : dépannage, entretien et installation à Lyon et dans l’Est lyonnais.</p>
                <div class="actions">
                    <a class="btn btn--red btn--big" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>06 27 99 76 46</a>
                    <a class="btn btn--line btn--big" href="{{ route('contact') }}#demande"><svg class="ic" aria-hidden="true"><use href="#i-sms"></use></svg>Demande par SMS</a>
                </div>
            </div>
            <figure class="page-head__photo" data-reveal>
                <img src="{{ asset('assets/img/rg/chantiers/sdb-vasque-800.webp') }}" width="600" height="800" alt="Salle de bains avec meuble vasque suspendu, réalisée par RG Plomberie" fetchpriority="high">
                <figcaption>Chantier RG Plomberie</figcaption>
            </figure>
        </div>
    </section>

    <section class="block">
        <div class="wrap">
            <header class="head" data-reveal><p class="kicker">Nos métiers</p><h2>Choisissez votre besoin.</h2></header>
            <ul class="svc" data-reveal>
                <li><a href="{{ route('prestations.plomberie') }}">
                    <span class="svc__n">01</span><svg class="svc__ic ic" aria-hidden="true"><use href="#i-drop"></use></svg>
                    <h3>Plomberie</h3><p>Fuites, sanitaires, robinetterie, chauffe-eau, évacuations bouchées.</p>
                    <span class="svc__go"><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span></a></li>
                <li><a href="{{ route('prestations.chauffage') }}">
                    <span class="svc__n">02</span><svg class="svc__ic ic" aria-hidden="true"><use href="#i-radiator"></use></svg>
                    <h3>Chauffage</h3><p>Chaudière, radiateurs, thermostat : entretien annuel, panne, remplacement.</p>
                    <span class="svc__go"><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span></a></li>
                <li><a href="{{ route('prestations.climatisation') }}">
                    <span class="svc__n">03</span><svg class="svc__ic ic" aria-hidden="true"><use href="#i-snow"></use></svg>
                    <h3>Climatisation et pompe à chaleur</h3><p>Installation, mise en service, entretien et dépannage.</p>
                    <span class="svc__go"><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span></a></li>
                <li><a href="{{ route('prestations.vmc') }}">
                    <span class="svc__n">04</span><svg class="svc__ic ic" aria-hidden="true"><use href="#i-air"></use></svg>
                    <h3>VMC</h3><p>Installation, entretien et remplacement pour un air sain.</p>
                    <span class="svc__go"><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span></a></li>
                <li><a href="{{ route('depannage') }}">
                    <span class="svc__n">05</span><svg class="svc__ic ic" aria-hidden="true"><use href="#i-tool"></use></svg>
                    <h3>Dépannage</h3><p>Fuite, panne d’eau chaude ou de chauffage : appelez, l’artisan répond.</p>
                    <span class="svc__go"><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span></a></li>
            </ul>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap">
            <header class="head" data-reveal><p class="kicker">Pour chaque demande</p><h2>Le bon niveau d’intervention.</h2><p>Un dépannage, un entretien et une rénovation ne se préparent pas de la même façon : la première étape est de bien comprendre le besoin.</p></header>
            <div class="cards" data-reveal>
                <article><span>01</span><h3>Dépannage</h3><p>Identifier l’origine, sécuriser et remettre en service lorsque c’est possible.</p></article>
                <article><span>02</span><h3>Entretien</h3><p>Contrôler, nettoyer et anticiper les dysfonctionnements des équipements.</p></article>
                <article><span>03</span><h3>Installation</h3><p>Dimensionner une solution cohérente et soigner son intégration.</p></article>
            </div>
        </div>
    </section>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Vous hésitez ?</h2>
            <p>Décrivez simplement le symptôme : l’artisan vous oriente. Devis gratuit.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="{{ route('contact') }}#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
