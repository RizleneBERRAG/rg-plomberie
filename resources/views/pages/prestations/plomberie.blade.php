@extends('layouts.app', [
    'title' => 'Plombier à Lyon et dans l’Est lyonnais — RG Plomberie',
    'description' => 'Fuite d’eau, sanitaires, robinetterie, chauffe-eau, débouchage et rénovation de salle de bains à Lyon et dans l’Est lyonnais. Devis gratuit.'
])

@section('content')
    <section class="page-head">
        <img class="page-head__bg" src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="" aria-hidden="true">
        <div class="wrap page-head__in">
            <div data-reveal>
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><a href="{{ route('prestations') }}">Prestations</a><span aria-hidden="true">/</span><span>Plomberie</span></nav>
                <p class="kicker">Plomberie · 01</p>
                <h1>Des réseaux fiables. <em>Des finitions nettes.</em></h1>
                <p class="page-head__lead">Fuites, sanitaires, robinetterie, chauffe-eau, évacuations : dépannage, remplacement et rénovation des équipements de plomberie.</p>
                <div class="actions">
                    <a class="btn btn--red btn--big" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>06 27 99 76 46</a>
                    <a class="btn btn--line btn--big" href="{{ route('contact') }}#demande"><svg class="ic" aria-hidden="true"><use href="#i-sms"></use></svg>Demande par SMS</a>
                </div>
            </div>
            <figure class="page-head__photo" data-reveal>
                <img src="{{ asset('assets/img/rg/chantiers/hammam-800.webp') }}" width="800" height="600" alt="Hammam en mosaïque réalisé par RG Plomberie" fetchpriority="high">
                <figcaption>Chantier RG Plomberie · hammam</figcaption>
            </figure>
        </div>
    </section>

    <section class="block">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Champ d’intervention</p><h2>Du raccord discret à la rénovation complète.</h2></div>
            <div class="prose" data-reveal>
                <p>Une fuite, une pression irrégulière ou un équipement vieillissant peut révéler un problème localisé comme un réseau à reprendre.</p>
                <p>Le diagnostic permet de choisir entre réparation, remplacement et rénovation, avec une attention particulière portée à l’accessibilité et à l’entretien futur.</p>
            </div>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap">
            <div class="cards" data-reveal>
                <article><span>01</span><h3>Fuites</h3><p>Recherche d’origine, réparation et contrôle après remise en eau.</p></article>
                <article><span>02</span><h3>Sanitaires</h3><p>Pose ou remplacement de WC, vasques, douches et baignoires.</p></article>
                <article><span>03</span><h3>Robinetterie</h3><p>Mitigeurs, mécanismes, raccords et équipements de coupure.</p></article>
                <article><span>04</span><h3>Eau chaude</h3><p>Diagnostic, réparation et remplacement de chauffe-eau et ballon.</p></article>
                <article><span>05</span><h3>Évacuations</h3><p>Débouchage d’évier, de douche et de WC, reprise des écoulements.</p></article>
                <article><span>06</span><h3>Salle de bains</h3><p>Rénovation et installation complète des équipements sanitaires.</p></article>
            </div>
        </div>
    </section>

    <section class="block block--ink">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Points de contrôle</p><h2>Ce qui compte derrière le résultat.</h2></div>
            <ul class="checks" data-reveal>
                    <li><strong>Étanchéité</strong><span>Raccords et évacuations vérifiés après remise en eau.</span></li>
                    <li><strong>Accessibilité</strong><span>Organes utiles laissés accessibles pour la maintenance.</span></li>
                    <li><strong>Cohérence</strong><span>Équipements adaptés à la pression et au réseau existant.</span></li>
                    <li><strong>Finition</strong><span>Implantation lisible et raccords soignés.</span></li>
            </ul>
        </div>
    </section>

    <section class="block">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Questions fréquentes</p><h2>Avant de nous appeler.</h2></div>
            <div class="faq" data-reveal>
                <details><summary>Que préparer pour une fuite ?</summary><p>Indiquez l’emplacement, depuis quand le problème est visible et si vous pouvez couper l’arrivée d’eau. Une photo aide beaucoup au diagnostic.</p></details>
                <details><summary>Intervenez-vous pour une rénovation de salle de bains ?</summary><p>Oui : RG Plomberie prend en charge la plomberie et les équipements sanitaires (douche, baignoire, vasque, WC, robinetterie). Le périmètre précis est défini ensemble.</p></details>
                <details><summary>Le devis peut-il être établi sans visite ?</summary><p>Certaines demandes simples se qualifient à distance, avec des photos. Une visite reste nécessaire lorsque l’existant ou l’accès doivent être vérifiés. Le devis est gratuit.</p></details>
            </div>
        </div>
    </section>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Une fuite ou un projet sanitaire ?</h2>
            <p>Devis gratuit. Décrivez la situation, l’artisan vous rappelle.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="{{ route('contact') }}#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
