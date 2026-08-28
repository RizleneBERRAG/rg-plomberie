@extends('layouts.app', [
    'title' => 'Avis clients — RG Plomberie',
    'description' => 'Consultez les avis publics sur RG Plomberie à leur source et découvrez les critères de qualité suivis après chaque intervention.'
])

@section('content')
    <section class="page-hero page-hero--text">
        <div class="container page-hero__grid">
            <div class="page-hero__copy" data-reveal>
                <nav class="breadcrumb" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Avis clients</span>
                </nav>
                <p class="eyebrow">Avis clients</p>
                <h1>La confiance se vérifie<br>à la source.</h1>
                <p class="lead">Aucun témoignage générique ni citation inventée : consultez les retours publiés sur la fiche publique de l’entreprise.</p>
                <a class="button button--primary" href="https://www.google.com/maps/search/?api=1&query=RG+PLOMBERIE+06+27+99+76+46" rel="noopener noreferrer" target="_blank">
                    Ouvrir les avis publics <span aria-hidden="true">↗</span>
                </a>
            </div>
            <aside class="review-score-card" data-reveal>
                <span>RG PLOMBERIE</span>
                <strong aria-hidden="true">★★★★★</strong>
                <p>La note et le nombre d’avis évoluent. Ils sont donc consultables directement sur la plateforme qui les héberge.</p>
            </aside>
        </div>
    </section>

    <section class="section section--sand">
        <div class="container">
            <header class="section-heading" data-reveal>
                <p class="eyebrow">Ce qui compte</p>
                <h2>Trois critères concrets.</h2>
            </header>
            <div class="value-grid value-grid--three">
                <article data-reveal><span>01</span><h3>Réactivité</h3><p>La demande est qualifiée rapidement et le niveau d’urgence est expliqué honnêtement.</p></article>
                <article data-reveal><span>02</span><h3>Qualité du travail</h3><p>La solution, l’organisation du chantier et les finitions peuvent être évaluées concrètement.</p></article>
                <article data-reveal><span>03</span><h3>Clarté</h3><p>Le client comprend l’intervention réalisée et les recommandations données.</p></article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container editorial-split">
            <div data-reveal><p class="eyebrow">Après l’intervention</p><h2>Un avis utile est précis.</h2></div>
            <div class="prose" data-reveal>
                <p>Si vous avez fait appel à RG Plomberie, indiquez le type d’intervention, la qualité des explications, le respect du lieu et votre perception du résultat.</p>
                <p>Un retour factuel aide les futurs clients à se faire une idée plus juste qu’une formule générale.</p>
                <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=RG+PLOMBERIE+06+27+99+76+46" rel="noopener noreferrer" target="_blank">Partager ou consulter un avis <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div><p class="eyebrow eyebrow--light">Votre besoin</p><h2>Faites-vous votre propre avis.</h2><p>Présentez la situation et échangez directement avec RG Plomberie.</p></div>
            <div class="cta-panel__actions"><a class="button button--light" href="{{ route('contact') }}">Demander un devis</a><a class="cta-phone" href="tel:+33627997646">06 27 99 76 46</a></div>
        </div>
    </section>
@endsection
