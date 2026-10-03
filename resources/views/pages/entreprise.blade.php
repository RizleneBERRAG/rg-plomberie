@extends('layouts.app', [
    'title' => 'L’entreprise — RG Plomberie, artisan plombier chauffagiste depuis 2017',
    'description' => 'RG Plomberie, artisan plombier chauffagiste installé à Janneyrias depuis 2017 : plomberie, chauffage, clim et VMC. Vous parlez directement à l’artisan.'
])

@section('content')
    <section class="ent-hero">
        <div class="wrap ent-hero__in">
            <div class="ent-hero__text">
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>L’entreprise</span></nav>
                <p class="kicker hero__kicker"><span class="hero__kicker-line" aria-hidden="true"></span><strong>L’entreprise</strong><span class="hero__kicker-sep" aria-hidden="true"></span><span>Janneyrias · depuis 2017</span></p>
                <h1 class="ent-hero__title"><span class="ent-line"><span class="ent-w" style="--i: 0"><span>Un</span></span> <span class="ent-w" style="--i: 1"><span>artisan,</span></span></span> <span class="ent-line"><span class="ent-w ent-w--red" style="--i: 2"><span>un</span></span> <span class="ent-w ent-w--red" style="--i: 3"><span>numéro</span></span> <span class="ent-w ent-w--red" style="--i: 4"><span>direct,</span></span></span> <span class="ent-line"><span class="ent-w" style="--i: 5"><span>un</span></span> <span class="ent-w" style="--i: 6"><span>travail</span></span> <span class="ent-w" style="--i: 7"><span>qui</span></span> <span class="ent-w" style="--i: 8"><span>dure.</span></span></span></h1>
                <p class="ent-hero__lead">RG Plomberie est une entreprise artisanale installée dans l’Est lyonnais depuis 2017 : plomberie, chauffage, climatisation, pompe à chaleur et VMC. Vous parlez directement à l’artisan, sans plateforme ni centre d’appel.</p>
                <div class="actions">
                    <a class="btn btn--red btn--big" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>06 27 99 76 46</a>
                    <a class="btn btn--line btn--big" href="{{ route('contact') }}#demande"><svg class="ic" aria-hidden="true"><use href="#i-sms"></use></svg>Demande par SMS</a>
                </div>
            </div>
            <figure class="ent-hero__media">
                <img src="{{ asset('assets/img/rg/chantiers/sdb-marbre.webp') }}" width="1200" height="1600" alt="Salle de bains effet marbre réalisée par RG Plomberie" fetchpriority="high">
                <figcaption>Chantier RG Plomberie</figcaption>
                <div class="ent-badge" aria-hidden="true">
                    <svg viewBox="0 0 200 200">
                        <defs><path id="ent-badge-path" d="M100,100 m-76,0 a76,76 0 1,1 152,0 a76,76 0 1,1 -152,0"/></defs>
                        <text><textPath href="#ent-badge-path" textLength="474" lengthAdjust="spacing">ARTISAN · EST LYONNAIS · DEPUIS 2017 · RG PLOMBERIE ·</textPath></text>
                    </svg>
                    <span class="ent-badge__core"><small>depuis</small><strong>2017</strong></span>
                </div>
            </figure>
        </div>
    </section>

    <section class="reel" data-reel aria-label="Les camions RG Plomberie">
        <div class="reel__sticky">
            <figure class="reel__frame">
                <img src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="Les deux camions floqués RG Plomberie" loading="lazy">
            </figure>
            <p class="reel__caption"><span>Sur les routes de l’Est lyonnais</span><strong>depuis 2017.</strong></p>
        </div>
    </section>

    <section class="block block--ink counters" data-counters>
        <div class="wrap">
            <ul class="counters__list">
                <li><strong><span data-count-since="2017">9</span> ans</strong><span>d’activité dans l’Est lyonnais</span></li>
                <li><strong><span data-count="4.9" data-decimals="1">4,9</span>/5</strong><span>de note moyenne sur Google</span></li>
                <li><strong><span data-count="67">67</span></strong><span>avis clients publiés</span></li>
                <li><strong><span data-count="12">12</span></strong><span>communes desservies autour de Janneyrias</span></li>
            </ul>
        </div>
    </section>

    <section class="block values" data-values>
        <div class="wrap values__in">
            <div class="values__side">
                <p class="kicker">Notre façon de travailler</p>
                <h2>Ce qui doit rester constant.</h2>
                <p class="values__lead">Derrière une installation fiable, il y a d’abord un diagnostic juste. Le même soin est porté à ce qu’on ne voit plus après le chantier qu’aux finitions visibles au quotidien.</p>
                <p class="values__count" aria-hidden="true"><b data-values-count>01</b> / 04</p>
            </div>
            <ol class="values__list">
                <li class="values__item" data-value="0"><span class="values__n">01</span><h3>Clarté</h3><p>Un besoin reformulé, une solution expliquée, un devis gratuit avant de commencer.</p></li>
                <li class="values__item" data-value="1"><span class="values__n">02</span><h3>Propreté</h3><p>Une intervention organisée, respectueuse du lieu et du rendu final.</p></li>
                <li class="values__item" data-value="2"><span class="values__n">03</span><h3>Fiabilité</h3><p>Des choix cohérents avec l’installation existante et l’usage attendu.</p></li>
                <li class="values__item" data-value="3"><span class="values__n">04</span><h3>Suivi</h3><p>Des explications utiles pour comprendre et entretenir les équipements.</p></li>
            </ol>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap idcard">
            <div class="idcard__card" data-reveal>
                <p class="kicker">Fiche d’identité</p>
                <h2>Une entreprise, des coordonnées vérifiables.</h2>
                <dl class="idcard__list">
                        <div><dt>Raison sociale</dt><dd>RG PLOMBERIE</dd></div>
                        <div><dt>Forme</dt><dd>SASU au capital de 5 000 €</dd></div>
                        <div><dt>SIREN</dt><dd>833 160 617</dd></div>
                        <div><dt>Création</dt><dd>2017</dd></div>
                        <div><dt>Siège</dt><dd>4 B chemin de la Batterie, 38280 Janneyrias</dd></div>
                        <div><dt>Activités</dt><dd>Plomberie, chauffage, climatisation, pompe à chaleur, VMC, dépannage</dd></div>
                        <div><dt>Avis Google</dt><dd>4,9/5 sur 67 avis</dd></div>
                </dl>
            </div>
            <figure class="idcard__photo" data-reveal>
                <img src="{{ asset('assets/img/rg/chantiers/hammam.webp') }}" width="1600" height="1200" alt="Hammam en mosaïque réalisé par RG Plomberie" loading="lazy">
                <figcaption>Chantier RG Plomberie · hammam en mosaïque</figcaption>
            </figure>
        </div>
    </section>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Besoin d’un artisan ?</h2>
            <p>Devis gratuit. Expliquez la situation simplement.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="{{ route('contact') }}#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
