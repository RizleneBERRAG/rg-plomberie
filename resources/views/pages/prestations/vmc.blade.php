@extends('layouts.app', [
    'title' => 'VMC et ventilation à Lyon et dans l’Est lyonnais — RG Plomberie',
    'description' => 'Installation, remplacement et entretien de VMC à Lyon et dans l’Est lyonnais : humidité, bruit, air mal renouvelé. Devis gratuit.'
])

@section('content')
    <section class="page-head">
        <img class="page-head__bg" src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="" aria-hidden="true">
        <div class="wrap page-head__in">
            <div data-reveal>
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><a href="{{ route('prestations') }}">Prestations</a><span aria-hidden="true">/</span><span>VMC</span></nav>
                <p class="kicker">Ventilation · 04</p>
                <h1>Un air renouvelé. <em>Un bâti préservé.</em></h1>
                <p class="page-head__lead">Diagnostic, installation, remplacement et entretien de ventilation mécanique contrôlée.</p>
                <div class="actions">
                    <a class="btn btn--red btn--big" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>06 27 99 76 46</a>
                    <a class="btn btn--line btn--big" href="{{ route('contact') }}#demande"><svg class="ic" aria-hidden="true"><use href="#i-sms"></use></svg>Demande par SMS</a>
                </div>
            </div>
            <figure class="page-head__photo page-head__photo--illus" data-reveal>
                <img src="{{ asset('assets/img/rg/web/ventilation.webp') }}" width="1168" height="784" alt="Réseau de ventilation mécanique (visuel d’illustration)" fetchpriority="high">
                <figcaption>Visuel d’illustration</figcaption>
            </figure>
        </div>
    </section>

    <section class="block">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Qualité de l’air</p><h2>Ventiler sans créer de nouveaux désordres.</h2></div>
            <div class="prose" data-reveal>
                <p>Une ventilation insuffisante favorise l’humidité, les odeurs et la dégradation de certaines surfaces.</p>
                <p>Le système doit être adapté au logement, correctement raccordé et complété par des entrées d’air cohérentes pour assurer une circulation réelle.</p>
            </div>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap">
            <div class="cards" data-reveal>
                <article><span>01</span><h3>Diagnostic</h3><p>Humidité, débit, bruit et état des bouches.</p></article>
                <article><span>02</span><h3>Installation</h3><p>Pose du groupe, des gaines, des bouches et des sorties.</p></article>
                <article><span>03</span><h3>Remplacement</h3><p>Reprise d’un système ancien ou insuffisant.</p></article>
                <article><span>04</span><h3>Réseau</h3><p>Contrôle du cheminement, des raccords et de l’isolation.</p></article>
                <article><span>05</span><h3>Bouches</h3><p>Nettoyage, remplacement et vérification du passage d’air.</p></article>
                <article><span>06</span><h3>Entretien</h3><p>Maintenance régulière pour un fonctionnement correct.</p></article>
            </div>
        </div>
    </section>

    <section class="block block--ink">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Points de contrôle</p><h2>Une VMC ne se résume pas à un moteur.</h2></div>
            <ul class="checks" data-reveal>
                    <li><strong>Entrées d’air</strong><span>Passage d’air cohérent entre les pièces.</span></li>
                    <li><strong>Gaines</strong><span>Réseau étanche, organisé et adapté.</span></li>
                    <li><strong>Extraction</strong><span>Bouches positionnées dans les pièces humides.</span></li>
                    <li><strong>Sortie</strong><span>Rejet extérieur correctement prévu.</span></li>
            </ul>
        </div>
    </section>

    <section class="block">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Questions fréquentes</p><h2>Comprendre les symptômes.</h2></div>
            <div class="faq" data-reveal>
                <details><summary>De la condensation signifie-t-elle que la VMC est en panne ?</summary><p>Pas toujours : entrées d’air obstruées, gaine débranchée, débit insuffisant ou usages du logement peuvent aussi être en cause.</p></details>
                <details><summary>Pourquoi une VMC devient-elle bruyante ?</summary><p>L’encrassement, les vibrations, le réseau de gaines ou l’usure du groupe peuvent être en cause. Un contrôle permet de localiser le problème.</p></details>
                <details><summary>À quelle fréquence nettoyer les bouches ?</summary><p>Un contrôle visuel régulier est conseillé ; la fréquence exacte dépend du système et des recommandations du fabricant.</p></details>
            </div>
        </div>
    </section>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Humidité, bruit ou air mal renouvelé ?</h2>
            <p>Devis gratuit. Décrivez les symptômes, l’artisan vous rappelle.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="{{ route('contact') }}#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
