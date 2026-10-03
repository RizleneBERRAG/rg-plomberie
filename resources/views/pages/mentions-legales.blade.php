@extends('layouts.app', [
    'title' => 'Mentions légales et confidentialité — RG Plomberie',
    'description' => 'Mentions légales, identité de l’éditeur, hébergement et politique de confidentialité du site RG Plomberie.'
])

@section('content')
    <section class="page-head">
        <div class="wrap page-head__in page-head__in--solo">
            <div data-reveal>
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Mentions légales</span></nav>
                <p class="kicker">Informations légales</p>
                <h1>Mentions légales <em>et confidentialité</em>.</h1>
                <p class="page-head__lead">Identité de l’éditeur, hébergement, propriété intellectuelle et traitement des données.</p>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="wrap legal">
            <nav class="legal__nav" aria-label="Sommaire des mentions légales">
                <a href="#editeur">Éditeur</a>
                <a href="#hebergement">Hébergement</a>
                <a href="#donnees">Données personnelles</a>
                <a href="#cookies">Cookies</a>
                <a href="#mediation">Médiation</a>
                <p>Mise à jour : {{ date('d/m/Y') }}</p>
            </nav>

            <div class="legal__body">
                <article id="editeur">
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
                    </dl>
                </article>

                <article>
                    <h2>Direction de la publication</h2>
                    <p>Le directeur de la publication est Raphaël Giguet, président et représentant légal de RG PLOMBERIE.</p>
                </article>

                <article id="hebergement">
                    <h2>Hébergement</h2>
                    <p>Le site www.rgplomberie.com est hébergé par :</p>
                    <dl>
                        <div><dt>Hébergeur</dt><dd>OVH SAS</dd></div>
                        <div><dt>Adresse</dt><dd>2 rue Kellermann, 59100 Roubaix, France</dd></div>
                        <div><dt>Site</dt><dd><a href="https://www.ovhcloud.com/fr/" rel="noopener noreferrer" target="_blank">ovhcloud.com</a></dd></div>
                    </dl>
                </article>

                <article>
                    <h2>Conception et développement</h2>
                    <p>Conception, direction artistique, intégration et développement : Rizlene Berrag.</p>
                </article>

                <article>
                    <h2>Propriété intellectuelle</h2>
                    <p>Les textes, éléments graphiques, structure, code et contenus propres à ce site sont protégés par le droit de la propriété intellectuelle. Toute reproduction ou exploitation non autorisée est interdite.</p>
                    <p>Les photographies de chantiers et le logo appartiennent à RG PLOMBERIE. Les visuels signalés « visuel d’illustration » servent uniquement à présenter des exemples de prestations ; ce ne sont pas des photographies de chantiers de l’entreprise.</p>
                </article>

                <article id="donnees">
                    <h2>Données personnelles</h2>
                    <p>Les formulaires du site préparent un message que vous envoyez vous-même par SMS, ou que vous copiez, à RG PLOMBERIE : le site ne transmet ni n’enregistre aucune donnée. Les informations que vous choisissez d’envoyer (problème, commune, prénom, coordonnées, message) sont reçues par RG PLOMBERIE sur son téléphone professionnel.</p>
                    <dl>
                        <div><dt>Responsable</dt><dd>RG PLOMBERIE</dd></div>
                        <div><dt>Finalité</dt><dd>Répondre aux demandes de contact, de devis et d’intervention</dd></div>
                        <div><dt>Base légale</dt><dd>Mesures précontractuelles demandées par la personne</dd></div>
                        <div><dt>Destinataire</dt><dd>RG PLOMBERIE uniquement</dd></div>
                        <div><dt>Conservation</dt><dd>Durée nécessaire au traitement, puis au maximum trois ans après le dernier échange, sauf obligation légale différente</dd></div>
                    </dl>
                    <p>Vous pouvez demander l’accès, la rectification, l’effacement, la limitation ou l’opposition lorsque ces droits s’appliquent, par téléphone au 06 27 99 76 46 ou par courrier au siège. Vous pouvez également saisir la <a href="https://www.cnil.fr" rel="noopener noreferrer" target="_blank">CNIL</a>.</p>
                </article>

                <article id="cookies">
                    <h2>Cookies et services tiers</h2>
                    <p>Le site n’utilise ni outil publicitaire, ni mesure d’audience, ni carte d’un service tiers (la carte du secteur est dessinée sur le site lui-même) : il ne dépose aucun cookie. Les polices de caractères sont hébergées sur le site lui-même. Les liens externes (avis Google, CNIL, hébergeur) s’ouvrent uniquement à votre demande.</p>
                </article>

                <article>
                    <h2>Responsabilité</h2>
                    <p>Les informations sont fournies à titre général et peuvent évoluer. Un diagnostic et un devis adaptés restent nécessaires avant toute intervention. RG PLOMBERIE ne peut garantir l’absence totale d’erreur ou l’accessibilité permanente du site.</p>
                </article>

                <article id="mediation">
                    <h2>Médiation de la consommation</h2>
                    <p>Après une réclamation écrite préalable restée sans solution, un consommateur peut recourir gratuitement au médiateur de la consommation dont relève l’entreprise. Ses coordonnées peuvent être demandées à RG PLOMBERIE par téléphone.</p>
                </article>
            </div>
        </div>
    </section>
@endsection
