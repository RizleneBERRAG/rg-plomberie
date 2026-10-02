@extends('layouts.app', [
    'title' => 'Chauffagiste à Lyon et dans l’Est lyonnais — RG Plomberie',
    'description' => 'Entretien de chaudière, dépannage de chauffage, radiateurs, thermostat et remplacement d’équipement à Lyon et dans l’Est lyonnais. Devis gratuit.'
])

@section('content')
    <section class="page-head">
        <img class="page-head__bg" src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="" aria-hidden="true">
        <div class="wrap page-head__in">
            <div data-reveal>
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><a href="{{ route('prestations') }}">Prestations</a><span aria-hidden="true">/</span><span>Chauffage</span></nav>
                <p class="kicker">Chauffage · 02</p>
                <h1>La bonne température. <em>Au bon rendement.</em></h1>
                <p class="page-head__lead">Entretien annuel de chaudière, dépannage, radiateurs, régulation et remplacement de votre système de chauffage.</p>
                <div class="actions">
                    <a class="btn btn--red btn--big" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>06 27 99 76 46</a>
                    <a class="btn btn--line btn--big" href="{{ route('contact') }}#demande"><svg class="ic" aria-hidden="true"><use href="#i-sms"></use></svg>Demande par SMS</a>
                </div>
            </div>
            <figure class="page-head__photo page-head__photo--illus" data-reveal>
                <img src="{{ asset('assets/img/rg/web/heating-technician.webp') }}" width="1168" height="784" alt="Contrôle d’un équipement de chauffage (visuel d’illustration)" fetchpriority="high">
                <figcaption>Visuel d’illustration</figcaption>
            </figure>
        </div>
    </section>

    <section class="block">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Confort thermique</p><h2>Comprendre l’installation avant d’agir.</h2></div>
            <div class="prose" data-reveal>
                <p>Un défaut de chauffe peut venir de la production, de la régulation, de la circulation ou des émetteurs.</p>
                <p>RG Plomberie recherche l’origine du dysfonctionnement et propose une action proportionnée : réglage, entretien, réparation ou remplacement. L’entretien annuel d’une chaudière est obligatoire.</p>
            </div>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap">
            <div class="cards" data-reveal>
                <article><span>01</span><h3>Panne</h3><p>Qualification des symptômes et recherche de l’origine.</p></article>
                <article><span>02</span><h3>Entretien</h3><p>Entretien annuel de chaudière, contrôles et nettoyage.</p></article>
                <article><span>03</span><h3>Radiateurs</h3><p>Raccordement, purge, équilibrage et remplacement.</p></article>
                <article><span>04</span><h3>Régulation</h3><p>Vérification des commandes, du thermostat et de la programmation.</p></article>
                <article><span>05</span><h3>Remplacement</h3><p>Contrôle ou remplacement des équipements de chauffage.</p></article>
                <article><span>06</span><h3>Optimisation</h3><p>Amélioration du confort et du fonctionnement global.</p></article>
            </div>
        </div>
    </section>

    <section class="block block--ink">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Méthode</p><h2>Ne pas remplacer par réflexe.</h2></div>
            <ul class="checks" data-reveal>
                    <li><strong>Symptômes</strong><span>Température, bruit, pression et historique.</span></li>
                    <li><strong>Diagnostic</strong><span>Lecture globale de la production et du réseau.</span></li>
                    <li><strong>Solution</strong><span>Réparation ou remplacement argumenté, devis gratuit.</span></li>
                    <li><strong>Réglages</strong><span>Explications utiles après remise en service.</span></li>
            </ul>
        </div>
    </section>

    <section class="block">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Questions fréquentes</p><h2>Préparer le diagnostic.</h2></div>
            <div class="faq" data-reveal>
                <details><summary>Quelles informations transmettre en cas de panne ?</summary><p>Le type d’appareil, les voyants ou codes affichés, la pression, les bruits éventuels et la date d’apparition du problème.</p></details>
                <details><summary>Intervenez-vous pour remplacer un équipement ?</summary><p>Oui, après vérification de l’existant, du besoin de chauffage et des contraintes de raccordement.</p></details>
                <details><summary>Une baisse de performance impose-t-elle un remplacement ?</summary><p>Pas nécessairement. Un entretien, un réglage ou un défaut sur le réseau peut expliquer la baisse de confort.</p></details>
            </div>
        </div>
    </section>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Une panne ou un entretien à prévoir ?</h2>
            <p>Devis gratuit. Pensez à l’entretien avant les premiers froids.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="{{ route('contact') }}#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
