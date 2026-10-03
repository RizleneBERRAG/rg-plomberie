@extends('layouts.app', [
    'title' => 'Contact et devis gratuit — RG Plomberie',
    'description' => 'Appelez RG Plomberie au 06 27 99 76 46 ou envoyez votre demande par SMS : plomberie, chauffage, clim et VMC dans l’Est lyonnais. Devis gratuit.'
])

@section('content')
    <section class="page-head">
        <img class="page-head__bg" src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="" aria-hidden="true">
        <div class="wrap page-head__in page-head__in--solo">
            <div data-reveal>
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Contact</span></nav>
                <p class="kicker">Contact et devis</p>
                <h1>Un besoin, un projet ? <em>Parlons-en.</em></h1>
                <p class="page-head__lead">Pour une urgence, appelez. Pour le reste, envoyez votre demande par SMS en vingt secondes : l’artisan vous rappelle. Le devis est gratuit.</p>
                <div class="actions"><a class="btn btn--red btn--big" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>06 27 99 76 46</a></div>
            </div>
        </div>
    </section>

    <section class="block block--ink" id="demande">
        <div class="wrap lead-box">
            <div class="lead-box__copy" data-reveal>
                <p class="kicker">Demande par SMS</p>
                <h2>Décrivez le problème, l’artisan vous rappelle.</h2>
                <p>Choisissez le problème et votre commune : le message part par SMS, directement sur le portable de RG Plomberie. Vous pourrez y joindre des photos.</p>
                <a class="phone-tile" href="tel:+33627997646"><small>Appel direct</small><strong>06 27 99 76 46</strong></a>
                <dl class="hours">
                    <div><dt>Lun. – jeu.</dt><dd>7 h 30 – 19 h 30</dd></div>
                    <div><dt>Vendredi</dt><dd>7 h 30 – 18 h</dd></div>
                    <div><dt>Samedi</dt><dd>8 h – 18 h</dd></div>
                </dl>
            </div>
            <form class="form" data-lead-form novalidate data-reveal>
                <fieldset class="chips">
                    <legend>Quel est le problème ?</legend>
                    <label><input type="radio" name="probleme" value="une fuite d'eau"><span>Fuite d’eau</span></label>
                    <label><input type="radio" name="probleme" value="plus d'eau chaude"><span>Plus d’eau chaude</span></label>
                    <label><input type="radio" name="probleme" value="un chauffage en panne"><span>Chauffage</span></label>
                    <label><input type="radio" name="probleme" value="une évacuation bouchée ou lente"><span>Évacuation bouchée</span></label>
                    <label><input type="radio" name="probleme" value="la climatisation ou la pompe à chaleur"><span>Clim / pompe à chaleur</span></label>
                    <label><input type="radio" name="probleme" value="la VMC"><span>VMC</span></label>
                    <label><input type="radio" name="probleme" value="des travaux (devis)"><span>Travaux / devis</span></label>
                    <label><input type="radio" name="probleme" value="autre chose"><span>Autre</span></label>
                </fieldset>
                <div class="fields">
                    <label class="field"><span>Votre commune</span><input name="commune" type="text" autocomplete="address-level2" placeholder="Ex. : Meyzieu" maxlength="80"></label>
                    <label class="field"><span>Prénom <small>(facultatif)</small></span><input name="prenom" type="text" autocomplete="given-name" maxlength="60"></label>
                </div>
                <button class="btn btn--red btn--big btn--full" type="submit"><svg class="ic" aria-hidden="true"><use href="#i-sms"></use></svg>Envoyer ma demande par SMS</button>
                <p class="form__note">Votre application SMS s’ouvre avec le message déjà rédigé. Rien n’est enregistré sur le site.</p>
                <div class="form__result" data-lead-result aria-live="polite"></div>
            </form>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap zone-box">
            <header class="head" data-reveal>
                <p class="kicker">Secteur</p>
                <h2>Lyon et l’Est lyonnais.</h2>
                <p>Siège à Janneyrias. Votre commune n’est pas listée ? Appelez, on vous dit tout de suite si le déplacement est possible.</p>
            </header>
            <ul class="towns" data-reveal>
                <li>Lyon</li><li>Villeurbanne</li><li>Vaulx-en-Velin</li><li>Bron</li><li>Décines-Charpieu</li><li>Meyzieu</li>
                <li>Chassieu</li><li>Genas</li><li>Saint-Priest</li><li>Jonage</li><li>Pusignan</li><li>Janneyrias</li>
            </ul>
        </div>
    </section>

    <section class="block">
        <div class="wrap split">
            <div data-reveal><p class="kicker">Pour un projet</p><h2>Préparez trois photos.</h2></div>
            <div class="prose" data-reveal>
                <p>Une vue générale de la pièce, une vue rapprochée de l’équipement et sa plaque signalétique (marque, modèle).</p>
                <p>Indiquez aussi l’échéance souhaitée et les contraintes d’accès : le devis n’en sera que plus juste. RG PLOMBERIE · 4 B chemin de la Batterie, 38280 Janneyrias.</p>
            </div>
        </div>
    </section>
@endsection
