@extends('layouts.app', [
    'title' => 'Mentions légales - RG Plomberie',
    'description' => 'Mentions légales, informations éditeur, hébergement, données personnelles et confidentialité du site RG Plomberie.'
])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/cinematic-legal.css') }}">
@endpush

@section('content')

    <section class="legal-hero">
        <div class="legal-hero-bg" style="background-image: url('{{ asset('assets/img/rg/works/work-4.jpg') }}');"></div>
        <div class="legal-hero-overlay"></div>

        <div class="container legal-hero-content">
            <span class="section-label">Informations légales</span>

            <h1>
                Mentions légales<br>
                & confidentialité.
            </h1>

            <p>
                Retrouvez les informations relatives à l’éditeur du site, à l’hébergement,
                à la propriété intellectuelle et au traitement des données personnelles.
            </p>
        </div>
    </section>

    <section class="legal-main">
        <div class="container legal-grid">

            <aside class="legal-summary">
                <span>RG Plomberie</span>

                <h2>Informations légales du site.</h2>

                <p>
                    Cette page présente les informations obligatoires relatives au site RG Plomberie
                    et à l’utilisation des données transmises via le formulaire de contact.
                </p>

                <div class="legal-summary-tags">
                    <strong>Éditeur</strong>
                    <strong>Hébergement</strong>
                    <strong>Confidentialité</strong>
                    <strong>Cookies</strong>
                </div>
            </aside>

            <div class="legal-content">

                <article class="legal-card">
                    <span>01</span>

                    <h2>Éditeur du site</h2>

                    <p>
                        Le présent site est édité par :
                    </p>

                    <ul>
                        <li><strong>Nom commercial :</strong> RG Plomberie</li>
                        <li><strong>Raison sociale :</strong> RG Plomberie</li>
                        <li><strong>Statut juridique :</strong> Information à compléter par l’entreprise</li>
                        <li><strong>SIRET :</strong> Information à compléter par l’entreprise</li>
                        <li><strong>Adresse du siège :</strong> Information à compléter par l’entreprise</li>
                        <li><strong>Téléphone :</strong> 06 27 99 76 46</li>
                        <li><strong>Email :</strong> Information à compléter par l’entreprise</li>
                    </ul>
                </article>

                <article class="legal-card">
                    <span>02</span>

                    <h2>Directeur de la publication</h2>

                    <p>
                        Le directeur de la publication est le représentant légal de RG Plomberie.
                    </p>

                    <ul>
                        <li><strong>Nom :</strong> Information à compléter par l’entreprise</li>
                        <li><strong>Qualité :</strong> Représentant légal de RG Plomberie</li>
                    </ul>
                </article>

                <article class="legal-card">
                    <span>03</span>

                    <h2>Hébergement</h2>

                    <p>
                        Le site est hébergé par le prestataire d’hébergement choisi pour la mise en ligne.
                    </p>

                    <ul>
                        <li><strong>Hébergeur :</strong> Information à compléter selon l’hébergeur final</li>
                        <li><strong>Adresse :</strong> Information à compléter selon l’hébergeur final</li>
                        <li><strong>Téléphone :</strong> Information à compléter selon l’hébergeur final</li>
                        <li><strong>Site internet :</strong> Information à compléter selon l’hébergeur final</li>
                    </ul>
                </article>

                <article class="legal-card">
                    <span>04</span>

                    <h2>Conception et développement</h2>

                    <p>
                        Le site a été conçu et développé par :
                    </p>

                    <ul>
                        <li><strong>Développeuse :</strong> Rizlene Berrag</li>
                        <li><strong>Prestation :</strong> Conception, développement web, intégration et mise en ligne</li>
                        <li><strong>Technologies :</strong> Laravel, Blade, CSS, JavaScript</li>
                    </ul>
                </article>

                <article class="legal-card">
                    <span>05</span>

                    <h2>Propriété intellectuelle</h2>

                    <p>
                        L’ensemble des contenus présents sur ce site, incluant notamment les textes,
                        images, éléments graphiques, logos, icônes, animations, structure et code,
                        est protégé par le droit de la propriété intellectuelle.
                    </p>

                    <p>
                        Toute reproduction, représentation, modification, diffusion ou exploitation,
                        totale ou partielle, sans autorisation préalable, est interdite.
                    </p>
                </article>

                <article class="legal-card">
                    <span>06</span>

                    <h2>Données personnelles</h2>

                    <p>
                        Le site peut collecter des données personnelles via le formulaire de contact,
                        notamment le nom, le téléphone, l’adresse email, la ville, le type de besoin
                        et le message transmis.
                    </p>

                    <p>
                        Ces données sont utilisées uniquement afin de répondre aux demandes envoyées
                        via le formulaire ou par téléphone. Elles ne sont pas vendues ni transmises
                        à des tiers à des fins commerciales.
                    </p>

                    <ul>
                        <li><strong>Responsable du traitement :</strong> RG Plomberie</li>
                        <li><strong>Finalité :</strong> Réponse aux demandes de contact, devis ou intervention</li>
                        <li><strong>Base légale :</strong> Consentement de l’utilisateur et/ou demande précontractuelle</li>
                        <li><strong>Destinataire :</strong> RG Plomberie</li>
                        <li><strong>Durée de conservation :</strong> 3 ans maximum après le dernier échange, sauf obligation légale contraire</li>
                    </ul>
                </article>

                <article class="legal-card">
                    <span>07</span>

                    <h2>Droits des utilisateurs</h2>

                    <p>
                        Conformément à la réglementation applicable en matière de protection des données,
                        l’utilisateur peut demander l’accès, la rectification ou la suppression des données
                        personnelles le concernant.
                    </p>

                    <p>
                        Pour exercer ces droits, l’utilisateur peut contacter RG Plomberie via le formulaire
                        de contact du site ou par téléphone au <strong>06 27 99 76 46</strong>.
                    </p>

                    <p>
                        L’utilisateur dispose également du droit d’introduire une réclamation auprès de la CNIL
                        si nécessaire.
                    </p>
                </article>

                <article class="legal-card">
                    <span>08</span>

                    <h2>Cookies et mesure d’audience</h2>

                    <p>
                        Le site peut utiliser des cookies strictement nécessaires à son bon fonctionnement
                        ou à la sécurité de la navigation.
                    </p>

                    <p>
                        Aucun cookie publicitaire ou outil de suivi avancé n’est utilisé sans information préalable.
                        Si un outil de mesure d’audience ou de publicité est ajouté ultérieurement,
                        un mécanisme de consentement adapté devra être mis en place.
                    </p>
                </article>

                <article class="legal-card">
                    <span>09</span>

                    <h2>Responsabilité</h2>

                    <p>
                        RG Plomberie s’efforce de fournir des informations fiables et mises à jour.
                        Toutefois, des erreurs, omissions ou informations devenues inexactes peuvent exister.
                    </p>

                    <p>
                        Les informations présentes sur le site sont données à titre indicatif.
                        Pour toute demande précise, le visiteur est invité à contacter directement l’entreprise.
                    </p>
                </article>

                <article class="legal-card">
                    <span>10</span>

                    <h2>Médiation de la consommation</h2>

                    <p>
                        En cas de litige avec un consommateur, et après démarche préalable écrite auprès
                        de l’entreprise, le client peut avoir recours gratuitement à un médiateur de la consommation.
                    </p>

                    <p>
                        Les coordonnées du médiateur compétent devront être complétées par l’entreprise
                        avant la mise en ligne définitive du site.
                    </p>

                    <ul>
                        <li><strong>Médiateur :</strong> Information à compléter par l’entreprise</li>
                        <li><strong>Adresse :</strong> Information à compléter par l’entreprise</li>
                        <li><strong>Site :</strong> Information à compléter par l’entreprise</li>
                    </ul>
                </article>

                <article class="legal-card last-update">
                    <span>MAJ</span>

                    <h2>Dernière mise à jour</h2>

                    <p>
                        Dernière mise à jour de cette page :
                        <strong>{{ date('d/m/Y') }}</strong>
                    </p>
                </article>

            </div>
        </div>
    </section>

@endsection
