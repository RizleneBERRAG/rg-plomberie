@extends('layouts.app', [
    'title' => 'Contact et devis - RG Plomberie',
    'description' => 'Contactez RG Plomberie pour une demande de devis ou une intervention en plomberie, chauffage, climatisation, VMC ou dépannage dans le Rhône.'
])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/cinematic-contact.css') }}">
@endpush

@section('content')

    <section class="contact-hero">
        <div class="contact-hero-bg" style="background-image: url('{{ asset('assets/img/rg/works/work-8.jpg') }}');"></div>
        <div class="contact-hero-overlay"></div>

        <div class="container contact-hero-grid">
            <div class="contact-hero-content">
                <span class="section-label">Contact / Devis</span>

                <h1>
                    Expliquez votre besoin.<br>
                    RG Plomberie vous répond.
                </h1>

                <p>
                    Plomberie, chauffage, climatisation, VMC ou dépannage :
                    envoyez votre demande avec vos coordonnées, votre ville et les informations utiles
                    pour préparer une réponse adaptée.
                </p>

                <div class="contact-hero-actions">
                    <a href="tel:+33627997646" class="btn btn-primary">Appeler maintenant</a>
                    <a href="#formulaire" class="btn btn-ghost">Remplir le formulaire</a>
                </div>
            </div>

            <aside class="contact-direct-card">
                <span>Contact direct</span>

                <a href="tel:+33627997646" class="contact-direct-phone">
                    06 27 99 76 46
                </a>

                <p>
                    Pour une urgence, privilégiez l’appel. Pour une demande de devis,
                    le formulaire permet de détailler précisément votre besoin.
                </p>

                <div class="contact-direct-tags">
                    <strong>Rhône 69</strong>
                    <strong>Dépannage</strong>
                    <strong>Devis</strong>
                </div>
            </aside>
        </div>
    </section>

    <section class="contact-main" id="formulaire">
        <div class="container contact-main-grid">

            <div class="contact-form-card">
                <div class="contact-form-head">
                    <span class="section-label">Formulaire</span>

                    <h2>Demander un devis ou une intervention.</h2>

                    <p>
                        Remplissez les informations principales. Plus la demande est précise,
                        plus RG Plomberie pourra comprendre rapidement votre situation.
                    </p>

                    @if (session('success'))
                        <div class="form-alert success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="form-alert error">
                            <strong>Le formulaire contient une erreur.</strong>
                            <span>Vérifiez les champs obligatoires puis réessayez.</span>
                        </div>
                    @endif
                </div>

                <form class="contact-form" action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <div class="form-grid">
                        <label class="form-field">
                            <span>Nom complet</span>
                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Votre nom"
                                required
                            >
                        </label>

                        <label class="form-field">
                            <span>Téléphone</span>
                            <input
                                type="tel"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="06 00 00 00 00"
                                required
                            >
                        </label>
                    </div>

                    <div class="form-grid">
                        <label class="form-field">
                            <span>Email</span>
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="votre@email.fr"
                            >
                        </label>

                        <label class="form-field">
                            <span>Ville</span>
                            <input
                                type="text"
                                name="city"
                                value="{{ old('city') }}"
                                placeholder="Lyon, Vénissieux, Villeurbanne..."
                                required
                            >
                        </label>
                    </div>

                    <label class="form-field">
                        <span>Type de besoin</span>

                        <select name="service" required>
                            <option value="">Sélectionner une prestation</option>
                            <option value="plomberie" @selected(old('service') === 'plomberie')>Plomberie</option>
                            <option value="chauffage" @selected(old('service') === 'chauffage')>Chauffage</option>
                            <option value="climatisation" @selected(old('service') === 'climatisation')>Climatisation</option>
                            <option value="vmc" @selected(old('service') === 'vmc')>VMC</option>
                            <option value="depannage" @selected(old('service') === 'depannage')>Dépannage urgent</option>
                            <option value="autre" @selected(old('service') === 'autre')>Autre demande</option>
                        </select>
                    </label>

                    <label class="form-field">
                        <span>Votre message</span>

                        <textarea
                            name="message"
                            rows="7"
                            placeholder="Décrivez votre besoin, le problème rencontré, la pièce concernée, depuis quand cela dure..."
                            required
                        >{{ old('message') }}</textarea>
                    </label>

                    <label class="form-check">
                        <input
                            type="checkbox"
                            name="privacy"
                            value="1"
                            required
                            @checked(old('privacy'))
                        >

                        <span>
                            J’accepte que mes informations soient utilisées uniquement pour répondre à ma demande.
                        </span>
                    </label>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            Envoyer la demande
                        </button>

                        <a href="tel:+33627997646" class="btn btn-ghost">
                            Appeler
                        </a>
                    </div>
                </form>
            </div>

            <aside class="contact-side">
                <article class="contact-side-card urgent">
                    <span>Urgence</span>

                    <h3>Besoin rapide ?</h3>

                    <p>
                        En cas de fuite, panne de chauffage, problème d’eau chaude ou situation bloquante,
                        l’appel est le moyen le plus efficace.
                    </p>

                    <a href="tel:+33627997646">06 27 99 76 46</a>
                </article>

                <article class="contact-side-card">
                    <span>Zone</span>

                    <h3>Rhône 69</h3>

                    <p>
                        RG Plomberie intervient dans le Rhône auprès des particuliers et professionnels.
                    </p>
                </article>

                <article class="contact-side-card">
                    <span>À préparer</span>

                    <h3>Pour gagner du temps</h3>

                    <ul>
                        <li>Votre ville</li>
                        <li>Le type de panne ou de projet</li>
                        <li>Des photos si possible</li>
                        <li>Vos disponibilités</li>
                    </ul>
                </article>
            </aside>

        </div>
    </section>

    <section class="contact-map-section section-dark">
        <div class="container contact-map-grid">
            <div class="contact-map-content">
                <span class="section-label">Zone d’intervention</span>

                <h2>RG Plomberie intervient dans le Rhône.</h2>

                <p>
                    La carte permet de visualiser le secteur d’intervention. Pour une demande précise,
                    indiquez votre ville dans le formulaire ou directement par téléphone.
                </p>

                <div class="contact-map-points">
                    <span>Lyon</span>
                    <span>Villeurbanne</span>
                    <span>Vénissieux</span>
                    <span>Bron</span>
                    <span>Rhône 69</span>
                </div>
            </div>

            <div class="contact-map-card">
                <div id="rgContactMap" class="contact-map" data-map-lazy>
                    <button type="button" class="contact-map-placeholder" data-map-load>
                        <span>Zone d’intervention</span>

                        <strong>Rhône 69</strong>

                        <p>
                            Cliquez pour afficher la carte interactive et visualiser la zone
                            d’intervention RG Plomberie.
                        </p>

                        <em>
                            Afficher la carte interactive
                        </em>
                    </button>
                </div>
                <div class="contact-map-placeholder">
                        <span>Zone d’intervention</span>
                        <strong>Rhône 69</strong>
                        <p>
                            Affichez la carte interactive pour visualiser la zone d’intervention RG Plomberie.
                        </p>

                        <button type="button" class="btn btn-primary" data-map-load>
                            Afficher la carte
                        </button>
                    </div>
                </div>
                <div class="contact-map-badge">
                    <strong>Rhône 69</strong>
                    <span>Zone d’intervention</span>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-reviews section-dark">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Avis clients</span>

                <h2>La confiance se construit aussi avec les retours clients.</h2>

                <p>
                    Des retours qui mettent en avant la réactivité, la propreté des interventions
                    et le sérieux du travail réalisé.
                </p>
            </div>

            <div class="contact-reviews-grid">
                <article class="review-card">
                    <div class="review-stars">★★★★★</div>

                    <p>
                        Intervention rapide et travail propre. Les explications étaient claires
                        et le résultat très satisfaisant.
                    </p>

                    <strong>Client particulier</strong>
                    <span>Plomberie</span>
                </article>

                <article class="review-card">
                    <div class="review-stars">★★★★★</div>

                    <p>
                        Très professionnel, ponctuel et efficace. Le problème a été identifié
                        rapidement et l’installation remise au propre.
                    </p>

                    <strong>Client Rhône 69</strong>
                    <span>Dépannage</span>
                </article>

                <article class="review-card">
                    <div class="review-stars">★★★★★</div>

                    <p>
                        Bon contact, intervention sérieuse et rendu net.
                        Je recommande pour les travaux de chauffage et plomberie.
                    </p>

                    <strong>Client local</strong>
                    <span>Chauffage</span>
                </article>
            </div>
        </div>
    </section>

    <section class="contact-final">
        <div class="container contact-final-box">
            <div>
                <span class="section-label">Prêt à échanger ?</span>

                <h2>Un devis, une urgence ou une question technique ?</h2>

                <p>
                    Contactez RG Plomberie pour présenter votre besoin et obtenir une réponse adaptée
                    à votre situation.
                </p>
            </div>

            <div class="contact-final-actions">
                <a href="tel:+33627997646" class="mega-phone small">06 27 99 76 46</a>
                <a href="#formulaire" class="btn btn-primary">Faire une demande</a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/cinematic-map.js') }}?v=80"></script>
@endpush
