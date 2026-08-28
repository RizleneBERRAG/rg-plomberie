@extends('layouts.app', [
    'title' => 'Mentions légales et confidentialité — RG Plomberie',
    'description' => 'Mentions légales, identité de l’éditeur, hébergement et politique de confidentialité du site RG Plomberie.'
])

@section('content')
    <section class="legal-hero">
        <div class="container" data-reveal>
            <nav class="breadcrumb breadcrumb--light" aria-label="Fil d’Ariane">
                <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Mentions légales</span>
            </nav>
            <p class="eyebrow eyebrow--light">Informations légales</p>
            <h1>Mentions légales<br>& confidentialité.</h1>
            <p>Identité de l’éditeur, hébergement, propriété intellectuelle et traitement des données.</p>
        </div>
    </section>

    <section class="section legal-section">
        <div class="container legal-layout">
            <aside class="legal-summary" data-reveal>
                <p class="eyebrow">Sommaire</p>
                <nav aria-label="Sommaire des mentions légales">
                    <a href="#editeur">Éditeur</a>
                    <a href="#hebergement">Hébergement</a>
                    <a href="#donnees">Données personnelles</a>
                    <a href="#cookies">Cookies</a>
                    <a href="#mediation">Médiation</a>
                </nav>
                <p class="legal-update">Mise à jour : {{ date('d/m/Y') }}</p>
            </aside>

            <div class="legal-content">
                <article id="editeur" data-reveal>
                    <span>01</span>
                    <h2>Éditeur du site</h2>
                    <dl>
                        <div><dt>Raison sociale</dt><dd>RG PLOMBERIE</dd></div>
                        <div><dt>Forme juridique</dt><dd>SASU — société par actions simplifiée unipersonnelle</dd></div>
                        <div><dt>Capital social</dt><dd>5 000 €</dd></div>
                        <div><dt>SIREN</dt><dd>833 160 617</dd></div>
                        <div><dt>SIRET du siège</dt><dd>833 160 617 00035</dd></div>
                        <div><dt>RCS</dt><dd>833 160 617 R.C.S. Vienne</dd></div>
                        <div><dt>TVA intracommunautaire</dt><dd>FR25 833160617</dd></div>
                        <div><dt>Adresse</dt><dd>4 B chemin de la Batterie, 38280 Janneyrias, France</dd></div>
                        <div><dt>Téléphone</dt><dd><a href="tel:+33627997646">06 27 99 76 46</a></dd></div>
                        <div><dt>Contact électronique</dt><dd><a href="{{ route('contact') }}">Formulaire de contact du site</a></dd></div>
                    </dl>
                </article>

                <article data-reveal>
                    <span>02</span>
                    <h2>Direction de la publication</h2>
                    <p>Le directeur de la publication est Raphaël Giguet, président et représentant légal de RG PLOMBERIE.</p>
                </article>

                <article id="hebergement" data-reveal>
                    <span>03</span>
                    <h2>Hébergement</h2>
                    <p>Dans sa version publiée via GitHub Pages, le site est hébergé par :</p>
                    <dl>
                        <div><dt>Hébergeur</dt><dd>GitHub, Inc.</dd></div>
                        <div><dt>Adresse</dt><dd>88 Colin P Kelly Jr Street, San Francisco, CA 94107, États-Unis</dd></div>
                        <div><dt>Site</dt><dd><a href="https://github.com" rel="noopener noreferrer" target="_blank">github.com</a></dd></div>
                    </dl>
                    <p class="legal-callout">À actualiser si le site est déplacé vers un autre hébergeur ou relié à une infrastructure différente.</p>
                </article>

                <article data-reveal>
                    <span>04</span>
                    <h2>Conception et développement</h2>
                    <p>Conception, direction artistique, intégration et développement : Rizlene Berrag. Technologies principales : Laravel, Blade, HTML, CSS et JavaScript.</p>
                </article>

                <article data-reveal>
                    <span>05</span>
                    <h2>Propriété intellectuelle</h2>
                    <p>Les textes, éléments graphiques, structure, code et contenus propres à ce site sont protégés par le droit de la propriété intellectuelle. Toute reproduction ou exploitation non autorisée est interdite.</p>
                    <p>Certains visuels de présentation ne constituent pas des photographies de chantiers RG Plomberie. Leur remplacement par des contenus dont les droits et autorisations sont documentés est recommandé avant toute campagne commerciale.</p>
                </article>

                <article id="donnees" data-reveal>
                    <span>06</span>
                    <h2>Données personnelles</h2>
                    <p>Le formulaire peut recueillir le nom, le téléphone, l’adresse e-mail, la ville, le type de besoin et le message transmis.</p>
                    <dl>
                        <div><dt>Responsable</dt><dd>RG PLOMBERIE</dd></div>
                        <div><dt>Finalité</dt><dd>Répondre aux demandes de contact, de devis et d’intervention</dd></div>
                        <div><dt>Base légale</dt><dd>Mesures précontractuelles demandées par la personne et, le cas échéant, consentement</dd></div>
                        <div><dt>Destinataire</dt><dd>RG PLOMBERIE et ses prestataires techniques strictement nécessaires</dd></div>
                        <div><dt>Conservation</dt><dd>Durée nécessaire au traitement, puis au maximum trois ans après le dernier échange, sauf obligation légale différente</dd></div>
                    </dl>
                    <p>Vous pouvez demander l’accès, la rectification, l’effacement, la limitation ou l’opposition lorsque ces droits s’appliquent, via le <a href="{{ route('contact') }}">formulaire</a> ou par téléphone. Vous pouvez également saisir la <a href="https://www.cnil.fr" rel="noopener noreferrer" target="_blank">CNIL</a>.</p>
                </article>

                <article id="cookies" data-reveal>
                    <span>07</span>
                    <h2>Cookies et services tiers</h2>
                    <p>La version actuelle n’intègre ni outil publicitaire, ni mesure d’audience, ni carte interactive tierce. Elle n’installe donc pas de cookie publicitaire. Les liens externes s’ouvrent uniquement à la demande de l’utilisateur.</p>
                    <p>Tout ajout futur d’un service nécessitant un consentement devra être accompagné d’une information et d’un mécanisme adaptés avant son activation.</p>
                </article>

                <article data-reveal>
                    <span>08</span>
                    <h2>Responsabilité</h2>
                    <p>Les informations sont fournies à titre général et peuvent évoluer. Un diagnostic et un devis adaptés restent nécessaires avant toute intervention. RG PLOMBERIE ne peut garantir l’absence totale d’erreur ou l’accessibilité permanente du site.</p>
                </article>

                <article id="mediation" data-reveal>
                    <span>09</span>
                    <h2>Médiation de la consommation</h2>
                    <p>Après une réclamation écrite préalable restée sans solution, un consommateur peut recourir gratuitement au médiateur de la consommation dont relève l’entreprise.</p>
                    <p class="legal-callout"><strong>Action requise avant mise en production commerciale :</strong> RG PLOMBERIE doit confirmer le médiateur auquel elle a effectivement adhéré, puis renseigner ici son nom, son adresse et son site. Cette donnée ne peut pas être déduite d’un registre public sans risque d’erreur.</p>
                </article>
            </div>
        </div>
    </section>
@endsection
