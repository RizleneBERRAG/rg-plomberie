@extends('layouts.app', [
    'title' => 'Dépannage plomberie et chauffage dans le Rhône — RG Plomberie',
    'description' => 'Fuite, panne de chauffage, eau chaude, climatisation ou VMC : contactez RG Plomberie pour vérifier la disponibilité d’une intervention.'
])

@section('content')
    <section class="emergency-hero">
        <div class="container emergency-hero__grid">
            <div class="emergency-hero__copy" data-reveal>
                <nav class="breadcrumb breadcrumb--light" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Dépannage</span>
                </nav>
                <p class="eyebrow eyebrow--light">Dépannage</p>
                <h1>Un problème urgent ?<br>Commençons par l’essentiel.</h1>
                <p class="lead">Appelez directement pour décrire la situation et vérifier la disponibilité d’une intervention.</p>
                <a class="emergency-number" href="tel:+33627997646">
                    <small>Appeler RG Plomberie</small>
                    <strong>06 27 99 76 46</strong>
                </a>
                <p class="availability-note">La disponibilité dépend du secteur, de la nature de la panne et du planning en cours.</p>
            </div>
            <div class="emergency-hero__panel" data-reveal>
                <p>Avant l’appel</p>
                <ol>
                    <li><span>1</span><strong>Localisez</strong> la fuite ou l’équipement concerné.</li>
                    <li><span>2</span><strong>Coupez l’eau</strong> si vous savez le faire sans risque.</li>
                    <li><span>3</span><strong>Éloignez-vous</strong> de tout appareil électrique mouillé.</li>
                    <li><span>4</span><strong>Préparez</strong> l’adresse, les symptômes et quelques photos.</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <header class="section-heading" data-reveal>
                <p class="eyebrow">Situations courantes</p>
                <h2>Qualifier la panne pour gagner du temps.</h2>
                <p>Le premier échange permet d’évaluer le niveau d’urgence et les premières informations nécessaires.</p>
            </header>
            <div class="emergency-grid">
                <article data-reveal><span>01</span><h3>Fuite d’eau</h3><p>Écoulement visible, raccord défectueux, flexible, robinet ou canalisation.</p><a href="tel:+33627997646">Appeler <span aria-hidden="true">→</span></a></article>
                <article data-reveal><span>02</span><h3>Plus d’eau chaude</h3><p>Ballon, production d’eau chaude ou problème de raccordement.</p><a href="{{ route('contact') }}">Décrire le problème <span aria-hidden="true">→</span></a></article>
                <article data-reveal><span>03</span><h3>Chauffage en panne</h3><p>Absence de chauffe, pression anormale, bruit ou défaut affiché.</p><a href="tel:+33627997646">Appeler <span aria-hidden="true">→</span></a></article>
                <article data-reveal><span>04</span><h3>Évacuation ralentie</h3><p>Écoulement lent, remontée ou odeur inhabituelle sur un équipement.</p><a href="{{ route('contact') }}">Faire une demande <span aria-hidden="true">→</span></a></article>
                <article data-reveal><span>05</span><h3>Climatisation</h3><p>Unité qui ne démarre plus, bruit, fuite ou baisse de performance.</p><a href="{{ route('contact') }}">Décrire le défaut <span aria-hidden="true">→</span></a></article>
                <article data-reveal><span>06</span><h3>Ventilation</h3><p>VMC bruyante, arrêtée ou ventilation devenue insuffisante.</p><a href="{{ route('contact') }}">Faire une demande <span aria-hidden="true">→</span></a></article>
            </div>
        </div>
    </section>

    <section class="section section--sand">
        <div class="container call-checklist">
            <div data-reveal>
                <p class="eyebrow">Pendant l’appel</p>
                <h2>Les cinq informations utiles.</h2>
            </div>
            <ol data-reveal>
                <li><span>01</span>Votre nom et un numéro joignable</li>
                <li><span>02</span>L’adresse exacte de l’intervention</li>
                <li><span>03</span>Le type d’équipement concerné</li>
                <li><span>04</span>Les symptômes et leur ancienneté</li>
                <li><span>05</span>Les actions déjà effectuées</li>
            </ol>
        </div>
    </section>

    <section class="section section--ink">
        <div class="container editorial-split">
            <div data-reveal><p class="eyebrow eyebrow--light">Transparence</p><h2>Une urgence ne justifie pas une promesse impossible.</h2></div>
            <div class="prose prose--light" data-reveal>
                <p>Le site ne promet ni intervention immédiate ni disponibilité 24 h/24 sans confirmation. L’appel sert d’abord à vérifier si RG Plomberie peut intervenir dans votre secteur et dans quel délai.</p>
                <p>Si la situation présente un danger immédiat, contactez les services d’urgence ou le gestionnaire du réseau concerné.</p>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-panel" data-reveal>
            <div><p class="eyebrow eyebrow--light">Besoin rapide</p><h2>Le téléphone reste le chemin le plus court.</h2><p>Décrivez ce que vous voyez, entendez ou constatez.</p></div>
            <div class="cta-panel__actions"><a class="button button--light" href="tel:+33627997646">Appeler maintenant</a><a class="cta-phone" href="{{ route('contact') }}">Formulaire</a></div>
        </div>
    </section>
@endsection
