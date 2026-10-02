@extends('layouts.app', [
    'title' => 'Avis clients — RG Plomberie, 4,9/5 sur Google',
    'description' => 'RG Plomberie est noté 4,9/5 sur Google avec 67 avis. Découvrez ce que disent les clients et consultez tous les avis à leur source.'
])

@section('content')
    <section class="page-head">
        <img class="page-head__bg" src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="" aria-hidden="true">
        <div class="wrap page-head__in">
            <div data-reveal>
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Avis clients</span></nav>
                <p class="kicker">Avis clients</p>
                <h1>4,9/5 sur Google, <em>67 avis</em>.</h1>
                <p class="page-head__lead">Les avis sont publiés par les clients sur la fiche Google de RG Plomberie. En voici quelques-uns ; tous les autres sont à lire à la source.</p>
                <div class="actions"><a class="btn btn--red btn--big" href="https://www.google.com/maps/search/?api=1&amp;query=RG+Plomberie+Janneyrias" target="_blank" rel="noopener noreferrer">Lire tous les avis sur Google <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a></div>
            </div>
            <div class="score-tile" data-reveal>
                <strong>4,9<small>/5</small></strong>
                <span class="stars" aria-hidden="true">★★★★★</span>
                <p>67 avis clients sur Google</p>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="wrap">
            <header class="head" data-reveal><p class="kicker">Ils témoignent</p><h2>Ce que disent nos clients.</h2></header>
            <div class="quotes" data-reveal>
                <figure><blockquote>« Un vrai professionnel digne de ce nom : dépanne en urgence malgré un emploi du temps de ministre. »</blockquote><figcaption>Loïc · dépannage</figcaption></figure>
                <figure><blockquote>« Le plombier que tout le monde devrait avoir dans ses contacts. Efficace, très pro. »</blockquote><figcaption>Damien S.</figcaption></figure>
                <figure><blockquote>« Du premier contact jusqu’à la mise en service, tout a été parfaitement géré : grande réactivité, travail particulièrement soigné. »</blockquote><figcaption>Céline M. · climatisation</figcaption></figure>
            </div>
            <p class="source">Extraits d’avis publiés sur Google.</p>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Après l’intervention</p><h2>Vous avez fait appel à RG Plomberie ?</h2></div>
            <div class="prose" data-reveal>
                <p>Votre avis aide les prochains clients à se faire une idée. Indiquez le type d’intervention, la qualité des explications et votre perception du résultat.</p>
                <p><a class="link" href="https://g.page/r/CcS2Cbh39mnoEAE/review" target="_blank" rel="noopener noreferrer">Laisser un avis sur Google <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a></p>
            </div>
        </div>
    </section>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Faites-vous votre propre avis.</h2>
            <p>Devis gratuit. Échangez directement avec l’artisan.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="{{ route('contact') }}#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
