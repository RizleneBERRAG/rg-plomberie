@extends('layouts.app', [
    'title' => 'RG Plomberie — Plombier chauffagiste à Lyon et dans l’Est lyonnais',
    'description' => 'RG Plomberie, plombier chauffagiste à Lyon et dans l’Est lyonnais depuis 2017 : dépannage, installation et entretien en plomberie, chauffage, climatisation et VMC. Devis gratuit.'
])

@section('content')
    <section class="hero hero--light">
        <div class="hero__main">
            <div class="wrap hero__in">
                <div class="hero__text">
                    <p class="kicker hero__kicker" data-intro style="--i: 0"><span class="hero__kicker-line" aria-hidden="true"></span><strong>Plombier chauffagiste</strong><span class="hero__kicker-sep" aria-hidden="true"></span><span>Janneyrias · Est lyonnais</span></p>
                    <h1 class="hero__title"><span class="hero__l1">Votre plombier chauffagiste</span> <span class="hero__l2">dans l’Est lyonnais.</span></h1>
                    <p class="hero__lead" data-intro style="--i: 5">Dépannage, installation et entretien en plomberie, chauffage, climatisation, pompe à chaleur et VMC. Vous parlez directement à l’artisan.</p>
                    <div class="actions hero__actions" data-intro style="--i: 6">
                        <a class="btn btn--red btn--big" href="#demande">Décrire mon projet <svg class="ic hero__up" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
                        <a class="btn btn--line btn--big" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>06 27 99 76 46</a>
                    </div>
                    <a class="hero__rating" href="{{ route('avis') }}" data-intro style="--i: 7"><span class="hero__stars" aria-hidden="true">★★★★★</span><strong>4,9/5</strong><span>sur 67 avis Google</span><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
                </div>
            </div>
            <figure class="hero__case">
                <div class="hero__frame">
                    <div class="compare" data-compare data-compare-intro style="--position: 52%;">
                        <img src="{{ asset('assets/img/rg/web/transformations/heating-before.webp') }}" width="1586" height="992" alt="Local technique avec une installation de chauffage vieillissante, avant rénovation (visuel d’illustration)" fetchpriority="high">
                        <div class="compare__after">
                            <img src="{{ asset('assets/img/rg/web/transformations/heating-after.webp') }}" width="1586" height="992" alt="Le même local après rénovation de l’installation de chauffage (visuel d’illustration)">
                        </div>
                        <span class="compare__tag compare__tag--before">Avant</span>
                        <span class="compare__tag compare__tag--after">Après</span>
                        <span class="compare__line" aria-hidden="true"><i></i></span>
                        <input class="compare__range" data-compare-range type="range" min="0" max="100" value="52" aria-label="Comparer l’installation de chauffage avant et après rénovation">
                    </div>
                </div>
                <figcaption class="hero__card">
                    <span class="hero__card-kicker">Depuis 2017</span>
                    <strong>Plomberie · Chauffage<br>Climatisation · VMC</strong>
                    <small>Visuel d’illustration</small>
                </figcaption>
            </figure>
        </div>

        <div class="hero__bar">
            <ul class="wrap hero__trust">
                <li style="--i: 8"><svg class="ic" aria-hidden="true"><use href="#i-tool"></use></svg><span><strong>Artisan depuis 2017</strong><small>Contact direct avec l’artisan</small></span></li>
                <li style="--i: 9"><svg class="ic" aria-hidden="true"><use href="#i-doc"></use></svg><span><strong>Devis gratuit</strong><small>Sans engagement</small></span></li>
                <li style="--i: 10"><svg class="ic" aria-hidden="true"><use href="#i-clock"></use></svg><span><strong>Le jour même</strong><small>Selon le planning</small></span></li>
                <li style="--i: 11"><svg class="ic" aria-hidden="true"><use href="#i-pin"></use></svg><span><strong>Lyon et Est lyonnais</strong><small>Basé à Janneyrias</small></span></li>
            </ul>
        </div>
    </section>

    <section class="block">
        <div class="wrap">
            <header class="head head--row" data-reveal>
                <div>
                    <p class="kicker">Prestations</p>
                    <h2>Un seul artisan pour l’eau, la chaleur et l’air.</h2>
                </div>
                <a class="link" href="{{ route('prestations') }}">Toutes les prestations <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </header>
            <div class="panels" data-panels data-reveal>
                <a class="panel is-open" href="{{ route('prestations.plomberie') }}" data-panel>
                    <img class="panel__img" src="{{ asset('assets/img/rg/prestations/plomberie.webp') }}" width="760" height="840" alt="" loading="lazy">
                    <span class="panel__shade" aria-hidden="true"></span>
                    <span class="panel__n" aria-hidden="true">01</span>
                    <span class="panel__tag panel__tag--real" aria-hidden="true">Chantier RG Plomberie</span>
                    <span class="panel__side" aria-hidden="true"><svg class="ic"><use href="#i-drop"></use></svg>Plomberie</span>
                    <span class="panel__body">
                        <svg class="panel__ic ic" aria-hidden="true"><use href="#i-drop"></use></svg>
                        <strong class="panel__t">Plomberie</strong>
                        <span class="panel__d">Fuites, sanitaires, robinetterie, chauffe-eau, évacuations bouchées.</span>
                        <span class="panel__go">Découvrir la prestation <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span>
                    </span>
                </a>
                <a class="panel" href="{{ route('prestations.chauffage') }}" data-panel>
                    <img class="panel__img" src="{{ asset('assets/img/rg/prestations/chauffage.webp') }}" width="760" height="840" alt="" loading="lazy">
                    <span class="panel__shade" aria-hidden="true"></span>
                    <span class="panel__n" aria-hidden="true">02</span>
                    <span class="panel__tag" aria-hidden="true">Visuel d’illustration</span>
                    <span class="panel__side" aria-hidden="true"><svg class="ic"><use href="#i-radiator"></use></svg>Chauffage</span>
                    <span class="panel__body">
                        <svg class="panel__ic ic" aria-hidden="true"><use href="#i-radiator"></use></svg>
                        <strong class="panel__t">Chauffage</strong>
                        <span class="panel__d">Chaudière, radiateurs, thermostat : entretien annuel, panne, remplacement.</span>
                        <span class="panel__go">Découvrir la prestation <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span>
                    </span>
                </a>
                <a class="panel" href="{{ route('prestations.climatisation') }}" data-panel>
                    <img class="panel__img" src="{{ asset('assets/img/rg/prestations/climatisation.webp') }}" width="760" height="840" alt="" loading="lazy">
                    <span class="panel__shade" aria-hidden="true"></span>
                    <span class="panel__n" aria-hidden="true">03</span>
                    <span class="panel__tag" aria-hidden="true">Visuel d’illustration</span>
                    <span class="panel__side" aria-hidden="true"><svg class="ic"><use href="#i-snow"></use></svg>Climatisation</span>
                    <span class="panel__body">
                        <svg class="panel__ic ic" aria-hidden="true"><use href="#i-snow"></use></svg>
                        <strong class="panel__t">Climatisation et pompe à chaleur</strong>
                        <span class="panel__d">Installation, mise en service, entretien et dépannage.</span>
                        <span class="panel__go">Découvrir la prestation <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span>
                    </span>
                </a>
                <a class="panel" href="{{ route('prestations.vmc') }}" data-panel>
                    <img class="panel__img" src="{{ asset('assets/img/rg/prestations/vmc.webp') }}" width="760" height="840" alt="" loading="lazy">
                    <span class="panel__shade" aria-hidden="true"></span>
                    <span class="panel__n" aria-hidden="true">04</span>
                    <span class="panel__tag" aria-hidden="true">Visuel d’illustration</span>
                    <span class="panel__side" aria-hidden="true"><svg class="ic"><use href="#i-air"></use></svg>VMC</span>
                    <span class="panel__body">
                        <svg class="panel__ic ic" aria-hidden="true"><use href="#i-air"></use></svg>
                        <strong class="panel__t">VMC</strong>
                        <span class="panel__d">Installation, entretien et remplacement pour un air sain.</span>
                        <span class="panel__go">Découvrir la prestation <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span>
                    </span>
                </a>
                <a class="panel" href="{{ route('realisations') }}" data-panel>
                    <img class="panel__img" src="{{ asset('assets/img/rg/prestations/salle-de-bains.webp') }}" width="760" height="840" alt="" loading="lazy">
                    <span class="panel__shade" aria-hidden="true"></span>
                    <span class="panel__n" aria-hidden="true">05</span>
                    <span class="panel__tag panel__tag--real" aria-hidden="true">Chantier RG Plomberie</span>
                    <span class="panel__side" aria-hidden="true"><svg class="ic"><use href="#i-tool"></use></svg>Salle de bains</span>
                    <span class="panel__body">
                        <svg class="panel__ic ic" aria-hidden="true"><use href="#i-tool"></use></svg>
                        <strong class="panel__t">Salle de bains</strong>
                        <span class="panel__d">Douche, baignoire, vasque, WC : rénovation et installation.</span>
                        <span class="panel__go">Voir les réalisations <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></span>
                    </span>
                </a>
            </div>
            <div class="panels-track" aria-hidden="true"><i data-panels-thumb></i></div>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap">
            <header class="head head--row" data-reveal>
                <div>
                    <p class="kicker">Réalisations</p>
                    <h2>Des chantiers, pas des promesses.</h2>
                </div>
                <a class="link" href="{{ route('realisations') }}">Voir les réalisations <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </header>
            <div class="vitrine" data-vitrine data-reveal>
                <div class="vitrine__media">
                    <div class="vitrine__frame">
                        <img class="vitrine__slide is-active" src="{{ asset('assets/img/rg/vitrine/hammam.webp') }}" width="900" height="1080" alt="Hammam en mosaïque avec banquette carrelée, réalisé par RG Plomberie" loading="lazy" data-vitrine-slide>
                        <img class="vitrine__slide" src="{{ asset('assets/img/rg/vitrine/vasque.webp') }}" width="900" height="1080" alt="Meuble vasque suspendu et baignoire îlot, réalisés par RG Plomberie" loading="lazy" data-vitrine-slide>
                        <img class="vitrine__slide" src="{{ asset('assets/img/rg/vitrine/marbre.webp') }}" width="900" height="1080" alt="Salle de bains effet marbre avec baignoire îlot, réalisée par RG Plomberie" loading="lazy" data-vitrine-slide>
                        <span class="vitrine__tag">Photo de chantier RG Plomberie</span>
                        <span class="vitrine__count" aria-hidden="true"><b data-vitrine-count>01</b> / 03</span>
                    </div>
                </div>
                <div class="vitrine__side">
                    <ol class="vitrine__list" aria-label="Chantiers présentés">
                    <li>
                        <button class="vitrine__item is-active" type="button" aria-pressed="true" data-vitrine-item>
                            <span class="vitrine__n">01</span>
                            <span class="vitrine__name">Hammam en mosaïque</span>
                            <span class="vitrine__tags">Hammam · Plomberie</span>
                            <span class="vitrine__more"><span>Banquette et murs en mosaïque, douchette, évacuation au sol et éclairage d’ambiance.</span></span>
                            <span class="vitrine__bar" aria-hidden="true"><i></i></span>
                        </button>
                    </li>
                    <li>
                        <button class="vitrine__item" type="button" aria-pressed="false" data-vitrine-item>
                            <span class="vitrine__n">02</span>
                            <span class="vitrine__name">Meuble vasque suspendu</span>
                            <span class="vitrine__tags">Salle de bains · Sanitaires</span>
                            <span class="vitrine__more"><span>Meuble vasque suspendu, mitigeur, miroir rétroéclairé et baignoire îlot.</span></span>
                            <span class="vitrine__bar" aria-hidden="true"><i></i></span>
                        </button>
                    </li>
                    <li>
                        <button class="vitrine__item" type="button" aria-pressed="false" data-vitrine-item>
                            <span class="vitrine__n">03</span>
                            <span class="vitrine__name">Salle de bains effet marbre</span>
                            <span class="vitrine__tags">Salle de bains · Rénovation</span>
                            <span class="vitrine__more"><span>Baignoire îlot et robinetterie sur pied, sèche-serviettes, éclairage LED encastré.</span></span>
                            <span class="vitrine__bar" aria-hidden="true"><i></i></span>
                        </button>
                    </li>
                    </ol>
                    <div class="vitrine__nav">
                        <button class="vitrine__arrow" type="button" data-vitrine-prev><span class="sr-only">Chantier précédent</span><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
                        <button class="vitrine__arrow" type="button" data-vitrine-next><span class="sr-only">Chantier suivant</span><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
                        <p class="vitrine__note">Photos de chantiers RG Plomberie.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block block--ink" id="demande">
        <div class="wrap lead-box">
            <div class="lead-box__copy" data-reveal>
                <p class="kicker">Demande d’intervention</p>
                <h2>Décrivez le problème, l’artisan vous rappelle.</h2>
                <p>Votre demande part par SMS, directement sur le portable de RG Plomberie. Pour une urgence, appelez.</p>
                <a class="phone-tile" href="tel:+33627997646"><small>Appel direct</small><strong>06 27 99 76 46</strong></a>
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

    <section class="block">
        <div class="wrap">
            <header class="head head--row" data-reveal>
                <div><p class="kicker">Avis clients</p><h2>La parole aux clients.</h2></div>
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
                    <blockquote>Du premier contact jusqu’à la mise en service, tout a été parfaitement géré : grande réactivité, travail particulièrement soigné.</blockquote>
                    <figcaption><span class="review__initial" aria-hidden="true">C</span><span><strong>Céline M.</strong><small>Climatisation · avis Google</small></span></figcaption>
                </figure>
                <figure class="review">
                    <blockquote>Un vrai professionnel digne de ce nom : dépanne en urgence malgré un emploi du temps de ministre.</blockquote>
                    <figcaption><span class="review__initial" aria-hidden="true">L</span><span><strong>Loïc</strong><small>Dépannage · avis Google</small></span></figcaption>
                </figure>
                <figure class="review">
                    <blockquote>Le plombier que tout le monde devrait avoir dans ses contacts. Efficace, très pro.</blockquote>
                    <figcaption><span class="review__initial" aria-hidden="true">D</span><span><strong>Damien S.</strong><small>Avis Google</small></span></figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="block block--soft">
        <div class="wrap zone">
            <div class="zone__text" data-reveal>
                <p class="kicker">Secteur</p>
                <h2>Lyon et l’Est lyonnais.</h2>
                <p>Siège à Janneyrias. Votre commune n’est pas listée ? Appelez, on vous dit tout de suite si le déplacement est possible.</p>
                <ul class="zone__list" data-zone-list>
                    <li><button type="button" data-town="janneyrias" data-name="Janneyrias" data-km="0"><span>Janneyrias</span><small>Siège</small></button></li>
                    <li><button type="button" data-town="pusignan" data-name="Pusignan" data-km="3"><span>Pusignan</span><small>3 km</small></button></li>
                    <li><button type="button" data-town="jonage" data-name="Jonage" data-km="7"><span>Jonage</span><small>7 km</small></button></li>
                    <li><button type="button" data-town="meyzieu" data-name="Meyzieu" data-km="8"><span>Meyzieu</span><small>8 km</small></button></li>
                    <li><button type="button" data-town="genas" data-name="Genas" data-km="9"><span>Genas</span><small>9 km</small></button></li>
                    <li><button type="button" data-town="chassieu" data-name="Chassieu" data-km="11"><span>Chassieu</span><small>11 km</small></button></li>
                    <li><button type="button" data-town="decines" data-name="Décines-Charpieu" data-km="12"><span>Décines-Charpieu</span><small>12 km</small></button></li>
                    <li><button type="button" data-town="saint-priest" data-name="Saint-Priest" data-km="14"><span>Saint-Priest</span><small>14 km</small></button></li>
                    <li><button type="button" data-town="vaulx" data-name="Vaulx-en-Velin" data-km="15"><span>Vaulx-en-Velin</span><small>15 km</small></button></li>
                    <li><button type="button" data-town="bron" data-name="Bron" data-km="15"><span>Bron</span><small>15 km</small></button></li>
                    <li><button type="button" data-town="villeurbanne" data-name="Villeurbanne" data-km="18"><span>Villeurbanne</span><small>18 km</small></button></li>
                    <li><button type="button" data-town="lyon" data-name="Lyon" data-km="21"><span>Lyon</span><small>21 km</small></button></li>
                </ul>
                <p class="zone__note">Distances à vol d’oiseau depuis Janneyrias.</p>
            </div>
            <figure class="zone__map" data-zone-map data-reveal>
                <svg class="zone__svg" viewBox="0 0 1000 573" role="img" aria-labelledby="zone-carte-titre">
                    <title id="zone-carte-titre">Carte du secteur : Janneyrias et les communes desservies, de Lyon à l’Est lyonnais</title>
                    <g class="zone__grid"><line x1="184" y1="0" x2="184" y2="573"/><line x1="368" y1="0" x2="368" y2="573"/><line x1="552" y1="0" x2="552" y2="573"/><line x1="736" y1="0" x2="736" y2="573"/><line x1="920" y1="0" x2="920" y2="573"/><line x1="0" y1="184" x2="1000" y2="184"/><line x1="0" y1="368" x2="1000" y2="368"/><line x1="0" y1="552" x2="1000" y2="552"/></g>
                    <path class="zone__area-edge" d="M120 234 L371 149 L733 79 L910 258 L440 486 Z"/>
                    <path class="zone__area" d="M120 234 L371 149 L733 79 L910 258 L440 486 Z"/>
                    <circle class="zone__ring" cx="910" cy="258" r="736"/>
                    <circle class="zone__ring" cx="910" cy="258" r="368"/>
                    <text class="zone__ring-label" x="585" y="431">10 km</text>
                    <text class="zone__ring-label" x="218" y="510">20 km</text>
                    <g class="zone__routes">
                    <path class="zone__spoke" d="M910 258 L120 234"/>
                    <path class="zone__route" data-route="lyon" d="M910 258 L120 234" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L258 198"/>
                    <path class="zone__route" data-route="villeurbanne" d="M910 258 L258 198" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L371 149"/>
                    <path class="zone__route" data-route="vaulx" d="M910 258 L371 149" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L352 313"/>
                    <path class="zone__route" data-route="bron" d="M910 258 L352 313" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L482 187"/>
                    <path class="zone__route" data-route="decines" d="M910 258 L482 187" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L610 198"/>
                    <path class="zone__route" data-route="meyzieu" d="M910 258 L610 198" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L502 315"/>
                    <path class="zone__route" data-route="chassieu" d="M910 258 L502 315" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L606 342"/>
                    <path class="zone__route" data-route="genas" d="M910 258 L606 342" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L440 486"/>
                    <path class="zone__route" data-route="saint-priest" d="M910 258 L440 486" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L733 79"/>
                    <path class="zone__route" data-route="jonage" d="M910 258 L733 79" pathLength="1"/>
                    <path class="zone__spoke" d="M910 258 L791 240"/>
                    <path class="zone__route" data-route="pusignan" d="M910 258 L791 240" pathLength="1"/>
                    </g>
                    <g class="zone__scale" transform="translate(32 539)"><path d="M0 -6 V6 M0 0 H184 M184 -6 V6"/><text x="92" y="-12" text-anchor="middle">5 km</text></g>
                    <g class="zone__north" transform="translate(962 46)"><path d="M0 -26 L10 4 L0 -2 L-10 4 Z"/><text y="26" text-anchor="middle">N</text></g>
            <g class="zone__pt zone__pt--major" data-town="lyon" data-name="Lyon" data-km="21" transform="translate(120 234)" tabindex="0" role="button" aria-label="Lyon, 21 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="0" y="-24" text-anchor="middle">Lyon</text></g>
            <g class="zone__pt" data-town="villeurbanne" data-name="Villeurbanne" data-km="18" transform="translate(258 198)" tabindex="0" role="button" aria-label="Villeurbanne, 18 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="0" y="-24" text-anchor="middle">Villeurbanne</text></g>
            <g class="zone__pt" data-town="vaulx" data-name="Vaulx-en-Velin" data-km="15" transform="translate(371 149)" tabindex="0" role="button" aria-label="Vaulx-en-Velin, 15 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="0" y="-24" text-anchor="middle">Vaulx-en-Velin</text></g>
            <g class="zone__pt" data-town="bron" data-name="Bron" data-km="15" transform="translate(352 313)" tabindex="0" role="button" aria-label="Bron, 15 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="0" y="36" text-anchor="middle">Bron</text></g>
            <g class="zone__pt" data-town="decines" data-name="Décines-Charpieu" data-km="12" transform="translate(482 187)" tabindex="0" role="button" aria-label="Décines-Charpieu, 12 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="0" y="-24" text-anchor="middle">Décines-Charpieu</text></g>
            <g class="zone__pt" data-town="meyzieu" data-name="Meyzieu" data-km="8" transform="translate(610 198)" tabindex="0" role="button" aria-label="Meyzieu, 8 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="16" y="-14" text-anchor="start">Meyzieu</text></g>
            <g class="zone__pt" data-town="chassieu" data-name="Chassieu" data-km="11" transform="translate(502 315)" tabindex="0" role="button" aria-label="Chassieu, 11 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="0" y="36" text-anchor="middle">Chassieu</text></g>
            <g class="zone__pt" data-town="genas" data-name="Genas" data-km="9" transform="translate(606 342)" tabindex="0" role="button" aria-label="Genas, 9 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="0" y="36" text-anchor="middle">Genas</text></g>
            <g class="zone__pt" data-town="saint-priest" data-name="Saint-Priest" data-km="14" transform="translate(440 486)" tabindex="0" role="button" aria-label="Saint-Priest, 14 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="0" y="36" text-anchor="middle">Saint-Priest</text></g>
            <g class="zone__pt" data-town="jonage" data-name="Jonage" data-km="7" transform="translate(733 79)" tabindex="0" role="button" aria-label="Jonage, 7 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="16" y="6" text-anchor="start">Jonage</text></g>
            <g class="zone__pt" data-town="pusignan" data-name="Pusignan" data-km="3" transform="translate(791 240)" tabindex="0" role="button" aria-label="Pusignan, 3 km de Janneyrias"><circle class="zone__hit" r="22"/><circle class="zone__dot" r="7"/><text class="zone__label" x="0" y="-24" text-anchor="middle">Pusignan</text></g>
            <g class="zone__pt zone__pt--hq" data-town="janneyrias" data-name="Janneyrias" data-km="0" transform="translate(910 258)" tabindex="0" role="button" aria-label="Janneyrias, siège de RG Plomberie">
                <rect class="zone__ping" x="-13" y="-13" width="26" height="26"/>
                <rect class="zone__hq" x="-13" y="-13" width="26" height="26"/><rect class="zone__hq-in" x="-4.5" y="-4.5" width="9" height="9"/>
                <text class="zone__label zone__label--hq" x="0" y="44" text-anchor="middle">Janneyrias</text>
                <text class="zone__sub" x="0" y="66" text-anchor="middle">Siège</text>
            </g>
                    <g class="zone__badges">
                    <g class="zone__badge" data-badge="lyon" transform="translate(515 246)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">21 km</text></g></g>
                    <g class="zone__badge" data-badge="villeurbanne" transform="translate(584 228)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">18 km</text></g></g>
                    <g class="zone__badge" data-badge="vaulx" transform="translate(667 209)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">15 km</text></g></g>
                    <g class="zone__badge" data-badge="bron" transform="translate(603 288)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">15 km</text></g></g>
                    <g class="zone__badge" data-badge="decines" transform="translate(696 222)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">12 km</text></g></g>
                    <g class="zone__badge" data-badge="meyzieu" transform="translate(700 216)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">8 km</text></g></g>
                    <g class="zone__badge" data-badge="chassieu" transform="translate(720 239)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">11 km</text></g></g>
                    <g class="zone__badge" data-badge="genas" transform="translate(770 343)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">9 km</text></g></g>
                    <g class="zone__badge" data-badge="saint-priest" transform="translate(675 372)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">14 km</text></g></g>
                    <g class="zone__badge" data-badge="jonage" transform="translate(822 168)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">7 km</text></g></g>
                    <g class="zone__badge" data-badge="pusignan" transform="translate(827 245)"><g class="zone__badge-in"><rect x="-34" y="-16" width="68" height="32"/><text y="6" text-anchor="middle">3 km</text></g></g>
                    </g>
                </svg>
                <div class="zone__card" data-zone-card>
                    <div class="zone__card-text" aria-live="polite">
                        <span class="zone__card-kicker" data-zone-kicker>Depuis Janneyrias</span>
                        <strong data-zone-name>Choisissez une commune</strong>
                        <span data-zone-dist>Sur la carte ou dans la liste, pour voir la distance.</span>
                    </div>
                    <div class="zone__card-actions">
                        <a class="btn btn--red" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>Appeler</a>
                        <a class="btn btn--outline" href="#demande" data-zone-sms><svg class="ic ic--fill" aria-hidden="true"><use href="#i-sms"></use></svg><span data-zone-sms-label>Demande par SMS</span></a>
                    </div>
                </div>
            </figure>
        </div>
    </section>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Besoin d’un plombier ?</h2>
            <p>Devis gratuit. Intervention le jour même selon le planning.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
