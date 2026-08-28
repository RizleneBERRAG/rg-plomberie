@extends('layouts.app', [
    'title' => 'Plomberie à Lyon et dans le Rhône — RG Plomberie',
    'description' => 'Recherche de fuite, sanitaires, robinetterie, chauffe-eau et rénovation de plomberie à Lyon, dans le Rhône et l’Est lyonnais.'
])

@section('content')
    <section class="service-hero">
        <div class="container service-hero__grid">
            <div class="service-hero__copy" data-reveal>
                <nav class="breadcrumb" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span>
                    <a href="{{ route('prestations') }}">Prestations</a><span aria-hidden="true">/</span><span>Plomberie</span>
                </nav>
                <p class="eyebrow">Plomberie · 01</p>
                <h1>Des réseaux fiables.<br>Des finitions nettes.</h1>
                <p class="lead">Dépannage, remplacement, création de réseau et rénovation des équipements sanitaires.</p>
                <div class="button-row">
                    <a class="button button--primary" href="{{ route('contact') }}">Demander une intervention</a>
                    <a class="button button--outline" href="tel:+33627997646">Appeler</a>
                </div>
            </div>
            <figure class="service-hero__media" data-reveal>
                <img src="{{ asset('assets/img/rg/web/bathroom-3.webp') }}" width="1600" height="1068" alt="Salle de bains avec vasque, douche et baignoire" fetchpriority="high">
                <figcaption>Sanitaire · Réseaux · Eau chaude</figcaption>
            </figure>
        </div>
    </section>

    <section class="section">
        <div class="container service-intro">
            <div data-reveal>
                <p class="eyebrow">Champ d’intervention</p>
                <h2>Du raccord discret à la rénovation complète.</h2>
            </div>
            <div class="prose" data-reveal>
                <p>Une fuite, une pression irrégulière ou un équipement vieillissant peut révéler un problème localisé comme un réseau à reprendre.</p>
                <p>Le diagnostic permet de choisir entre réparation, remplacement et rénovation, avec une attention particulière portée à l’accessibilité et à l’entretien futur.</p>
            </div>
        </div>
        <div class="container intervention-grid">
            <article data-reveal><span>01</span><h3>Fuites</h3><p>Recherche d’origine, réparation et contrôle après remise en eau.</p></article>
            <article data-reveal><span>02</span><h3>Sanitaires</h3><p>Pose ou remplacement de WC, vasques, douches et baignoires.</p></article>
            <article data-reveal><span>03</span><h3>Robinetterie</h3><p>Mitigeurs, mécanismes, raccords et équipements de coupure.</p></article>
            <article data-reveal><span>04</span><h3>Eau chaude</h3><p>Diagnostic, remplacement et raccordement de chauffe-eau.</p></article>
            <article data-reveal><span>05</span><h3>Réseaux</h3><p>Création, modification ou remise au propre des alimentations.</p></article>
            <article data-reveal><span>06</span><h3>Rénovation</h3><p>Coordination des équipements de plomberie dans une pièce d’eau.</p></article>
        </div>
    </section>

    <section class="section section--ink">
        <div class="container media-split">
            <figure class="media-split__image" data-reveal>
                <img src="{{ asset('assets/img/rg/web/bathroom-1.webp') }}" width="1600" height="1067" alt="Salle de bains rénovée avec douche et baignoire" loading="lazy">
                <figcaption>Exemple d’univers sanitaire — visuel d’illustration</figcaption>
            </figure>
            <div class="media-split__copy" data-reveal>
                <p class="eyebrow eyebrow--light">Points de contrôle</p>
                <h2>Ce qui compte derrière le résultat.</h2>
                <ul class="feature-list">
                    <li><strong>Étanchéité</strong><span>Raccords et évacuations vérifiés.</span></li>
                    <li><strong>Accessibilité</strong><span>Organes utiles accessibles pour la maintenance.</span></li>
                    <li><strong>Cohérence</strong><span>Équipements adaptés à la pression et au réseau.</span></li>
                    <li><strong>Finition</strong><span>Implantation lisible et raccords soignés.</span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container faq-layout">
            <header data-reveal><p class="eyebrow">Questions fréquentes</p><h2>Avant de nous appeler.</h2></header>
            <div class="faq-list" data-reveal>
                <details><summary>Que préparer pour une fuite ?</summary><p>Indiquez l’emplacement, depuis quand le problème est visible et si vous pouvez couper l’arrivée d’eau. Des photos sont très utiles.</p></details>
                <details><summary>Intervenez-vous pour une rénovation de salle de bains ?</summary><p>RG Plomberie peut prendre en charge les lots relevant de la plomberie et des équipements sanitaires. Le périmètre précis est défini après échange.</p></details>
                <details><summary>Le devis peut-il être établi sans visite ?</summary><p>Certaines demandes simples peuvent être qualifiées à distance. Une visite reste nécessaire lorsque l’existant ou l’accessibilité doivent être vérifiés.</p></details>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div><p class="eyebrow eyebrow--light">Plomberie</p><h2>Une fuite ou un projet sanitaire ?</h2><p>Décrivez la situation et joignez les informations utiles au premier échange.</p></div>
            <div class="cta-panel__actions"><a class="button button--light" href="{{ route('contact') }}">Faire une demande</a><a class="cta-phone" href="tel:+33627997646">06 27 99 76 46</a></div>
        </div>
    </section>
@endsection
