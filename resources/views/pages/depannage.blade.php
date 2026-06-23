@extends('layouts.app', [
    'title' => 'Dépannage plomberie, chauffage et climatisation - RG Plomberie',
    'description' => 'RG Plomberie intervient dans le Rhône pour les dépannages en plomberie, chauffage, climatisation, VMC et eau chaude.'
])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/cinematic-depannage.css') }}">
@endpush

@section('content')

    <section class="depannage-hero">
        <div class="depannage-hero-bg" style="background-image: url('{{ asset('assets/img/rg/works/work-3.jpg') }}');"></div>
        <div class="depannage-hero-overlay"></div>

        <div class="container depannage-hero-grid">
            <div class="depannage-hero-content">
                <span class="section-label">Dépannage Rhône 69</span>

                <h1>
                    Une panne ?<br>
                    Une fuite ?<br>
                    Besoin d’agir vite.
                </h1>

                <p>
                    RG Plomberie intervient pour les situations urgentes ou bloquantes :
                    fuite d’eau, panne de chauffage, problème d’eau chaude, climatisation,
                    ventilation ou installation à reprendre.
                </p>

                <div class="depannage-hero-actions">
                    <a href="tel:+33627997646" class="btn btn-primary">Appeler maintenant</a>
                    <a href="{{ route('contact') }}" class="btn btn-ghost">Demander une intervention</a>
                </div>
            </div>

            <aside class="depannage-call-panel">
                <span>Contact direct</span>

                <a href="tel:+33627997646" class="depannage-phone">
                    06 27 99 76 46
                </a>

                <p>
                    Pour une urgence, l’appel reste le moyen le plus rapide.
                    Indiquez votre ville, le type de panne et ajoutez des photos si la situation le permet.
                </p>

                <div class="depannage-call-tags">
                    <strong>Fuite</strong>
                    <strong>Chauffage</strong>
                    <strong>Eau chaude</strong>
                    <strong>VMC</strong>
                </div>
            </aside>
        </div>
    </section>

    <section class="depannage-alert">
        <div class="container depannage-alert-box">
            <span class="depannage-alert-dot"></span>

            <div>
                <strong>Un problème technique peut vite s’aggraver.</strong>

                <p>
                    En cas de fuite importante, coupez l’arrivée d’eau si possible.
                    En cas d’odeur suspecte ou de doute sur un équipement, évitez toute manipulation
                    et contactez un professionnel.
                </p>
            </div>
        </div>
    </section>

    <section class="depannage-types section-dark">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Types d’intervention</span>

                <h2>Les dépannages les plus fréquents.</h2>

                <p>
                    RG Plomberie intervient sur les problèmes du quotidien comme sur les situations plus urgentes,
                    avec une approche claire pour identifier le besoin et organiser une réponse adaptée.
                </p>
            </div>

            <div class="depannage-types-grid">
                <article class="depannage-type-card">
                    <span>01</span>

                    <h3>Fuite d’eau</h3>

                    <p>
                        Fuite visible, écoulement anormal, humidité, raccordement défectueux
                        ou installation à sécuriser.
                    </p>
                </article>

                <article class="depannage-type-card">
                    <span>02</span>

                    <h3>Eau chaude</h3>

                    <p>
                        Perte d’eau chaude, ballon d’eau chaude, équipement défaillant
                        ou remplacement à prévoir.
                    </p>
                </article>

                <article class="depannage-type-card">
                    <span>03</span>

                    <h3>Chauffage</h3>

                    <p>
                        Chauffage à l’arrêt, confort thermique insuffisant, panne ou besoin
                        de remplacement d’équipement.
                    </p>
                </article>

                <article class="depannage-type-card">
                    <span>04</span>

                    <h3>Climatisation</h3>

                    <p>
                        Problème de fonctionnement, entretien, nettoyage, perte de performance
                        ou système à contrôler.
                    </p>
                </article>

                <article class="depannage-type-card">
                    <span>05</span>

                    <h3>VMC</h3>

                    <p>
                        Ventilation insuffisante, humidité, bruit anormal, air stagnant
                        ou équipement à remplacer.
                    </p>
                </article>

                <article class="depannage-type-card urgent">
                    <span>Urgence</span>

                    <h3>Besoin rapide</h3>

                    <p>
                        Une demande précise permet de mieux comprendre la situation :
                        ville, problème rencontré, photos et disponibilité.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="depannage-process">
        <div class="container depannage-process-grid">
            <div class="depannage-process-title">
                <span class="section-label">Déroulé</span>

                <h2>Une urgence doit rester simple à expliquer.</h2>

                <p>
                    Quelques informations suffisent souvent à mieux comprendre la situation
                    et à préparer une intervention adaptée.
                </p>
            </div>

            <div class="depannage-process-list">
                <article>
                    <span>01</span>

                    <div>
                        <h3>Décrire le problème</h3>
                        <p>Fuite, panne, absence d’eau chaude, chauffage, climatisation ou ventilation.</p>
                    </div>
                </article>

                <article>
                    <span>02</span>

                    <div>
                        <h3>Préciser la localisation</h3>
                        <p>Ville, secteur, logement, local professionnel ou zone concernée dans le Rhône.</p>
                    </div>
                </article>

                <article>
                    <span>03</span>

                    <div>
                        <h3>Ajouter des photos</h3>
                        <p>Les photos permettent souvent d’identifier plus rapidement le type de problème.</p>
                    </div>
                </article>

                <article>
                    <span>04</span>

                    <div>
                        <h3>Organiser l’intervention</h3>
                        <p>L’intervention est organisée selon l’urgence, les disponibilités et le besoin technique.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="depannage-split section-dark">
        <div class="container depannage-split-grid">
            <div class="depannage-split-media">
                <img src="{{ asset('assets/img/rg/works/work-1.jpg') }}" alt="Dépannage RG Plomberie">
            </div>

            <div class="depannage-split-content">
                <span class="section-label">Réflexes utiles</span>

                <h2>Avant d’appeler, quelques informations peuvent aider.</h2>

                <ul>
                    <li>Votre ville ou secteur d’intervention</li>
                    <li>Le type de problème rencontré</li>
                    <li>Depuis quand la panne est présente</li>
                    <li>Des photos ou vidéos si la situation le permet</li>
                    <li>Votre disponibilité pour une intervention</li>
                </ul>

                <a href="tel:+33627997646" class="btn btn-primary">Appeler RG Plomberie</a>
            </div>
        </div>
    </section>

    <section class="depannage-zone">
        <div class="container depannage-zone-box">
            <div>
                <span class="section-label">Zone d’intervention</span>

                <h2>Dépannage dans le Rhône.</h2>

                <p>
                    RG Plomberie intervient dans le Rhône pour les besoins liés à la plomberie,
                    au chauffage, à la climatisation, à la ventilation et à l’eau chaude.
                </p>
            </div>

            <div class="depannage-zone-number">
                <strong>69</strong>
                <span>Rhône</span>
            </div>
        </div>
    </section>

    <section class="depannage-faq section-dark">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Questions fréquentes</span>

                <h2>Les réponses utiles avant de contacter.</h2>
            </div>

            <div class="depannage-faq-list">
                <article>
                    <h3>Que faire en cas de fuite d’eau ?</h3>

                    <p>
                        Coupez l’arrivée d’eau si possible, évitez d’aggraver la situation,
                        puis contactez un professionnel en précisant l’emplacement de la fuite.
                    </p>
                </article>

                <article>
                    <h3>Faut-il appeler ou remplir le formulaire ?</h3>

                    <p>
                        Pour une urgence, l’appel est préférable. Pour une demande moins pressée,
                        le formulaire permet de détailler la situation.
                    </p>
                </article>

                <article>
                    <h3>Quelles informations préparer ?</h3>

                    <p>
                        Votre nom, votre ville, votre téléphone, le type de panne, votre disponibilité
                        et des photos si vous en avez.
                    </p>
                </article>

                <article>
                    <h3>Les dépannages concernent seulement la plomberie ?</h3>

                    <p>
                        Non. Les demandes peuvent aussi concerner le chauffage, la climatisation,
                        la VMC, l’eau chaude ou une installation à reprendre.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="depannage-final-cta">
        <div class="container depannage-final-box">
            <div>
                <span class="section-label">Intervention</span>

                <h2>Expliquez votre problème, RG Plomberie vous répond.</h2>

                <p>
                    Une fuite, une panne ou une installation à reprendre ?
                    Contactez RG Plomberie pour une réponse claire et adaptée à votre situation.
                </p>
            </div>

            <div class="depannage-final-actions">
                <a href="tel:+33627997646" class="mega-phone small">06 27 99 76 46</a>
                <a href="{{ route('contact') }}" class="btn btn-primary">Demander une intervention</a>
            </div>
        </div>
    </section>

@endsection
