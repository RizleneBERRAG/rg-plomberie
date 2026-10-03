@extends('layouts.app', [
    'title' => 'Dépannage plomberie et chauffage, Est lyonnais — RG Plomberie',
    'description' => 'Fuite, plus d’eau chaude, chauffage en panne, évacuation bouchée : appelez RG Plomberie. Devis gratuit, intervention le jour même selon le planning.'
])

@section('content')
    <section class="dep-hero">
        <div class="wrap dep-hero__in">
            <div class="dep-hero__text">
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Dépannage</span></nav>
                <p class="kicker hero__kicker"><span class="hero__kicker-line" aria-hidden="true"></span><strong>Dépannage</strong><span class="hero__kicker-sep" aria-hidden="true"></span><span>Lyon et Est lyonnais</span></p>
                <h1 class="dep-hero__title">Fuite ou panne ? <em>Un plombier chez vous dès aujourd’hui.</em></h1>
                <p class="dep-hero__lead">RG Plomberie, artisan plombier chauffagiste installé dans l’Est lyonnais depuis 2017. <strong>Vous parlez directement à l’artisan.</strong></p>
                <a class="dep-call" href="tel:+33627997646">
                    <span class="dep-call__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span>
                    <span class="dep-call__text"><small>Appelez maintenant</small><strong>06 27 99 76 46</strong></span>
                </a>
                <p class="dep-status" data-open-status><span class="top__dot" aria-hidden="true"></span><span data-open-text>Du lundi au samedi, dès 7 h 30</span></p>
                <ul class="dep-perks">
                    <li><svg class="ic" aria-hidden="true"><use href="#i-check"></use></svg>Devis gratuit</li>
                    <li><svg class="ic" aria-hidden="true"><use href="#i-check"></use></svg>Intervention le jour même*</li>
                    <li><svg class="ic" aria-hidden="true"><use href="#i-check"></use></svg>4,9/5 sur Google <small>(67 avis)</small></li>
                </ul>
                <p class="dep-fine">* Selon le planning et votre secteur.</p>
            </div>

            <div class="dep-form" id="demande">
                <h2>Demandez votre intervention</h2>
                <p class="dep-form__sub">Gratuit et sans engagement. RG Plomberie vous rappelle.</p>
                <form class="form form--bare" data-lead-form novalidate>
                    <fieldset class="chips">
                        <legend>Quel est le problème ?</legend>
                            <label><input type="radio" name="probleme" value="une fuite d’eau"><span>Fuite d’eau</span></label>
                            <label><input type="radio" name="probleme" value="plus d’eau chaude"><span>Plus d’eau chaude</span></label>
                            <label><input type="radio" name="probleme" value="un chauffage en panne"><span>Chauffage</span></label>
                            <label><input type="radio" name="probleme" value="une évacuation bouchée ou lente"><span>Évacuation</span></label>
                            <label><input type="radio" name="probleme" value="la climatisation ou la pompe à chaleur"><span>Clim / PAC</span></label>
                            <label><input type="radio" name="probleme" value="la VMC"><span>VMC</span></label>
                            <label><input type="radio" name="probleme" value="des travaux (devis)"><span>Travaux / devis</span></label>
                            <label><input type="radio" name="probleme" value="autre chose"><span>Autre</span></label>
                    </fieldset>
                    <div class="fields">
                        <label class="field"><span>Votre commune</span><input name="commune" type="text" autocomplete="address-level2" placeholder="Ex. : Meyzieu" maxlength="80"></label>
                        <label class="field"><span>Prénom <small>(facultatif)</small></span><input name="prenom" type="text" autocomplete="given-name" maxlength="60"></label>
                    </div>
                    <button class="btn btn--red btn--big btn--full" type="submit"><svg class="ic" aria-hidden="true"><use href="#i-sms"></use></svg>Envoyer ma demande par SMS</button>
                    <p class="form__note">Votre application SMS s’ouvre avec le message déjà rédigé : il ne reste qu’à appuyer sur Envoyer.</p>
                    <div class="form__result" data-lead-result aria-live="polite"></div>
                </form>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="wrap">
            <header class="head head--row" data-reveal>
                <div><p class="kicker">Situations courantes</p><h2>Un problème ? Un appel suffit.</h2></div>
                <p class="ba-hint">Appelez, ou décrivez-le par SMS en un clic.</p>
            </header>
            <div class="issues2">
                <article class="issue2" data-reveal>
                    <span class="issue2__ic"><svg class="ic" aria-hidden="true"><use href="#i-drop"></use></svg></span>
                    <h3>Fuite d’eau</h3>
                    <p>Robinet, flexible, raccord, canalisation, chasse d’eau.</p>
                    <div class="issue2__actions">
                        <a class="issue2__call" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>Appeler</a>
                        <button class="issue2__sms" type="button" data-pick="une fuite d’eau">Décrire par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
                    </div>
                </article>
                <article class="issue2" data-reveal>
                    <span class="issue2__ic"><svg class="ic" aria-hidden="true"><use href="#i-temp"></use></svg></span>
                    <h3>Plus d’eau chaude</h3>
                    <p>Chauffe-eau ou ballon en panne, eau tiède, disjoncteur qui saute.</p>
                    <div class="issue2__actions">
                        <a class="issue2__call" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>Appeler</a>
                        <button class="issue2__sms" type="button" data-pick="plus d’eau chaude">Décrire par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
                    </div>
                </article>
                <article class="issue2" data-reveal>
                    <span class="issue2__ic"><svg class="ic" aria-hidden="true"><use href="#i-radiator"></use></svg></span>
                    <h3>Chauffage en panne</h3>
                    <p>Chaudière à l’arrêt, radiateurs froids, pression anormale, code erreur.</p>
                    <div class="issue2__actions">
                        <a class="issue2__call" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>Appeler</a>
                        <button class="issue2__sms" type="button" data-pick="un chauffage en panne">Décrire par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
                    </div>
                </article>
                <article class="issue2" data-reveal>
                    <span class="issue2__ic"><svg class="ic" aria-hidden="true"><use href="#i-drain"></use></svg></span>
                    <h3>Évacuation bouchée</h3>
                    <p>Évier, douche ou WC qui s’écoule mal, remontées, odeurs.</p>
                    <div class="issue2__actions">
                        <a class="issue2__call" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>Appeler</a>
                        <button class="issue2__sms" type="button" data-pick="une évacuation bouchée ou lente">Décrire par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
                    </div>
                </article>
                <article class="issue2" data-reveal>
                    <span class="issue2__ic"><svg class="ic" aria-hidden="true"><use href="#i-snow"></use></svg></span>
                    <h3>Clim et pompe à chaleur</h3>
                    <p>Unité qui ne démarre plus, bruit, fuite, baisse de performance.</p>
                    <div class="issue2__actions">
                        <a class="issue2__call" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>Appeler</a>
                        <button class="issue2__sms" type="button" data-pick="la climatisation ou la pompe à chaleur">Décrire par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
                    </div>
                </article>
                <article class="issue2" data-reveal>
                    <span class="issue2__ic"><svg class="ic" aria-hidden="true"><use href="#i-air"></use></svg></span>
                    <h3>VMC</h3>
                    <p>Ventilation arrêtée, bruyante ou insuffisante.</p>
                    <div class="issue2__actions">
                        <a class="issue2__call" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>Appeler</a>
                        <button class="issue2__sms" type="button" data-pick="la VMC">Décrire par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="block block--ink tips">
        <div class="wrap">
            <header class="head head--row" data-reveal>
                <div><p class="kicker">Avant d’appeler</p><h2>Les bons réflexes.</h2></div>
            </header>
            <ol class="tips__list">
                <li data-reveal><span class="tips__n">01</span><svg class="ic" aria-hidden="true"><use href="#i-valve"></use></svg><h3>Coupez l’eau</h3><p>Au robinet général, souvent près du compteur, si vous savez le faire.</p></li>
                <li data-reveal><span class="tips__n">02</span><svg class="ic" aria-hidden="true"><use href="#i-bolt"></use></svg><h3>Coupez l’électricité</h3><p>Si l’eau approche d’une prise ou d’un appareil.</p></li>
                <li data-reveal><span class="tips__n">03</span><svg class="ic" aria-hidden="true"><use href="#i-shield"></use></svg><h3>Protégez</h3><p>Épongez, éloignez meubles et objets fragiles.</p></li>
                <li data-reveal><span class="tips__n">04</span><svg class="ic" aria-hidden="true"><use href="#i-camera"></use></svg><h3>Prenez une photo</h3><p>Elle aide beaucoup au diagnostic, par SMS.</p></li>
            </ol>
            <p class="tips__warn" data-reveal><svg class="ic" aria-hidden="true"><use href="#i-bolt"></use></svg><span><strong>Odeur de gaz ou risque électrique ?</strong> Contactez d’abord les services d’urgence ou le gestionnaire du réseau concerné.</span></p>
        </div>
    </section>

    <section class="block">
        <div class="wrap">
            <header class="head head--row" data-reveal>
                <div><p class="kicker">Comment ça se passe</p><h2>Simple et rapide.</h2></div>
                <p class="ba-hint">* Selon le planning et votre secteur.</p>
            </header>
            <ol class="timeline" data-timeline>
                <li><span class="timeline__dot">01</span><h3>Vous appelez ou envoyez un SMS</h3><p>Vous décrivez le problème à l’artisan. Une photo aide souvent à y voir clair.</p></li>
                <li><span class="timeline__dot">02</span><h3>Devis gratuit</h3><p>Vous savez ce que vous allez payer avant le début des travaux.</p></li>
                <li><span class="timeline__dot">03</span><h3>Intervention le jour même*</h3><p>Dès que possible, selon le planning et votre secteur.</p></li>
            </ol>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap">
            <header class="head head--row" data-reveal>
                <div><p class="kicker">Avis clients</p><h2>Ils ont appelé, ils recommandent.</h2></div>
                <a class="link" href="{{ route('avis') }}">Tous les avis <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </header>
            <div class="reviews" data-reveal>
                <div class="reviews__score">
                    <p class="reviews__label">Note Google</p>
                    <p class="reviews__note"><strong>4,9</strong><span>/5</span></p>
                    <p class="reviews__stars" aria-hidden="true">★★★★★</p>
                    <p class="reviews__count">Sur 67 avis publiés par ses clients sur Google.</p>
                    <a class="btn btn--red reviews__btn" href="https://www.google.com/maps/search/?api=1&amp;query=RG+Plomberie+Janneyrias" target="_blank" rel="noopener noreferrer">Lire les avis sur Google <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
                </div>
                <figure class="review review--big">
                    <blockquote>Un vrai professionnel digne de ce nom : dépanne en urgence malgré un emploi du temps de ministre.</blockquote>
                    <figcaption><span class="review__initial" aria-hidden="true">L</span><span><strong>Loïc</strong><small>Dépannage · avis Google</small></span></figcaption>
                </figure>
                <figure class="review">
                    <blockquote>Le plombier que tout le monde devrait avoir dans ses contacts. Efficace, très pro.</blockquote>
                    <figcaption><span class="review__initial" aria-hidden="true">D</span><span><strong>Damien S.</strong><small>Avis Google</small></span></figcaption>
                </figure>
                <figure class="review">
                    <blockquote>Du premier contact jusqu’à la mise en service, tout a été parfaitement géré : grande réactivité, travail particulièrement soigné.</blockquote>
                    <figcaption><span class="review__initial" aria-hidden="true">C</span><span><strong>Céline M.</strong><small>Climatisation · avis Google</small></span></figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="wrap dep-zone" data-reveal>
            <div><p class="kicker">Secteur d’intervention</p><h2>Lyon et l’Est lyonnais.</h2></div>
            <div>
                <ul class="dep-towns" aria-label="Communes desservies"><li>Lyon</li><li>Villeurbanne</li><li>Vaulx-en-Velin</li><li>Bron</li><li>Décines-Charpieu</li><li>Meyzieu</li><li>Chassieu</li><li>Genas</li><li>Saint-Priest</li><li>Jonage</li><li>Pusignan</li><li>Janneyrias</li></ul>
                <p class="dep-zone__note">Votre commune n’y est pas ? <a href="tel:+33627997646">Appelez</a>, on vous dit tout de suite si le déplacement est possible.</p>
            </div>
        </div>
    </section>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Besoin d’un plombier maintenant ?</h2>
            <p>Le téléphone reste le plus rapide.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
