@extends('layouts.app', [
    'title' => 'Entreprise - RG Plomberie',
    'description' => 'Découvrez RG Plomberie, entreprise spécialisée en plomberie, chauffage, climatisation, VMC et dépannage dans le Rhône.'
])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/cinematic-entreprise.css') }}">
@endpush

@section('content')

    <section class="company-hero">
        <div class="company-hero-bg" style="background-image: url('{{ asset('assets/img/rg/works/work-8.jpg') }}');"></div>
        <div class="company-hero-overlay"></div>

        <div class="container company-hero-content">
            <span class="section-label">Entreprise</span>

            <h1>
                Une entreprise locale.<br>
                Une exigence visible.
            </h1>

            <p>
                RG Plomberie intervient dans le Rhône pour accompagner les particuliers et professionnels
                dans leurs besoins en plomberie, chauffage, climatisation, VMC et dépannage.
            </p>

            <div class="company-hero-actions">
                <a href="{{ route('prestations') }}" class="btn btn-primary">Découvrir les prestations</a>
                <a href="{{ route('realisations') }}" class="btn btn-ghost">Voir les réalisations</a>
            </div>
        </div>
    </section>

    <section class="company-manifesto section-dark">
        <div class="container company-manifesto-grid">
            <div>
                <span class="section-label">Savoir-faire</span>

                <h2>Un métier technique au service du confort quotidien.</h2>
            </div>

            <div class="company-manifesto-text">
                <p>
                    Une installation de plomberie, de chauffage, de climatisation ou de ventilation joue un rôle
                    essentiel dans le confort d’un logement ou d’un local professionnel. RG Plomberie intervient
                    avec une approche sérieuse, claire et soignée.
                </p>

                <p>
                    Chaque demande est traitée avec attention : comprendre la situation, identifier la bonne solution
                    et réaliser une intervention propre, fiable et adaptée au besoin du client.
                </p>
            </div>
        </div>
    </section>

    <section class="company-values">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Exigence</span>

                <h2>Trois engagements au cœur de chaque intervention.</h2>
            </div>

            <div class="company-values-grid">
                <article class="company-value-card">
                    <span>01</span>

                    <h3>Clarté</h3>

                    <p>
                        Chaque intervention commence par une compréhension du besoin :
                        problème rencontré, équipement concerné et solution adaptée.
                    </p>
                </article>

                <article class="company-value-card">
                    <span>02</span>

                    <h3>Propreté</h3>

                    <p>
                        RG Plomberie accorde une attention particulière au rendu final :
                        installation lisible, finitions nettes et chantier respecté.
                    </p>
                </article>

                <article class="company-value-card">
                    <span>03</span>

                    <h3>Confiance</h3>

                    <p>
                        L’objectif est d’apporter une réponse claire, professionnelle et rassurante,
                        que ce soit pour un dépannage, une installation ou un entretien.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="company-scene section-dark">
        <div class="container company-scene-grid">
            <div class="company-scene-media">
                <img src="{{ asset('assets/img/rg/works/work-1.jpg') }}" alt="Intervention RG Plomberie dans le Rhône">
            </div>

            <div class="company-scene-content">
                <span class="section-label">Méthode</span>

                <h2>Comprendre, intervenir, livrer un résultat propre.</h2>

                <p>
                    Fuite, panne, remplacement, installation ou entretien : chaque situation demande une lecture précise.
                    RG Plomberie prend le temps d’identifier le besoin afin d’apporter une réponse adaptée et durable.
                </p>

                <ul>
                    <li>Analyse de la demande et du contexte d’intervention</li>
                    <li>Identification du domaine concerné : plomberie, chauffage, climatisation ou VMC</li>
                    <li>Proposition d’une solution claire et cohérente</li>
                    <li>Intervention soignée avec attention portée aux finitions</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="company-timeline">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Accompagnement</span>

                <h2>Un parcours simple, du premier contact à l’intervention.</h2>
            </div>

            <div class="company-timeline-list">
                <article class="company-timeline-item">
                    <span>01</span>

                    <div>
                        <h3>Premier échange</h3>

                        <p>
                            Le besoin est présenté par téléphone ou via le formulaire :
                            dépannage, installation, entretien ou remplacement.
                        </p>
                    </div>
                </article>

                <article class="company-timeline-item">
                    <span>02</span>

                    <div>
                        <h3>Analyse du besoin</h3>

                        <p>
                            Les informations utiles sont recueillies : ville, type d’équipement,
                            urgence éventuelle, photos et contraintes du chantier.
                        </p>
                    </div>
                </article>

                <article class="company-timeline-item">
                    <span>03</span>

                    <div>
                        <h3>Solution adaptée</h3>

                        <p>
                            RG Plomberie oriente vers la solution la plus cohérente selon la situation,
                            le niveau d’urgence et le type d’intervention.
                        </p>
                    </div>
                </article>

                <article class="company-timeline-item">
                    <span>04</span>

                    <div>
                        <h3>Intervention</h3>

                        <p>
                            Le travail est réalisé avec soin, en privilégiant la propreté,
                            la fiabilité et la qualité du rendu final.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="company-zone section-dark">
        <div class="container company-zone-grid">
            <div>
                <span class="section-label">Zone d’intervention</span>

                <h2>Une présence locale dans le Rhône.</h2>

                <p>
                    RG Plomberie intervient dans le Rhône et le secteur lyonnais pour les besoins
                    en plomberie, chauffage, climatisation, VMC et dépannage, auprès des particuliers
                    comme des professionnels.
                </p>

                <a href="{{ route('contact') }}" class="btn btn-primary">Demander une intervention</a>
            </div>

            <div class="company-zone-panel">
                <strong>69</strong>

                <span>Rhône</span>

                <p>
                    Une entreprise locale, proche de ses clients, avec une intervention adaptée
                    aux besoins du secteur.
                </p>
            </div>
        </div>
    </section>

    <section class="company-gallery">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Réalisations</span>

                <h2>Des interventions visibles à travers les détails.</h2>
            </div>

            <div class="company-gallery-grid">
                <article class="company-gallery-card large" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-2.jpg') }}" alt="Chantier RG Plomberie 1">
                </article>

                <article class="company-gallery-card" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-3.jpg') }}" alt="Chantier RG Plomberie 2">
                </article>

                <article class="company-gallery-card" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-4.jpg') }}" alt="Chantier RG Plomberie 3">
                </article>

                <article class="company-gallery-card wide" data-gallery-item>
                    <img src="{{ asset('assets/img/rg/works/work-5.jpg') }}" alt="Chantier RG Plomberie 4">
                </article>
            </div>
        </div>
    </section>

    <section class="company-cta">
        <div class="container company-cta-box">
            <div>
                <span class="section-label">Contact</span>

                <h2>Un besoin en plomberie, chauffage, climatisation ou VMC ?</h2>

                <p>
                    Présentez votre demande à RG Plomberie pour obtenir une réponse adaptée :
                    dépannage, installation, remplacement, entretien ou demande de devis.
                </p>
            </div>

            <div class="company-cta-actions">
                <a href="tel:+33627997646" class="mega-phone small">06 27 99 76 46</a>
                <a href="{{ route('contact') }}" class="btn btn-primary">Contacter RG Plomberie</a>
            </div>
        </div>
    </section>

@endsection
