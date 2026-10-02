@extends('layouts.app', [
    'title' => 'Réalisations — salles de bains et chantiers RG Plomberie',
    'description' => 'Salles de bains, hammam et équipements réalisés par RG Plomberie à Lyon et dans l’Est lyonnais : photos de chantiers et avant / après interactifs.'
])

@section('content')
    <section class="page-head">
        <img class="page-head__bg" src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="" aria-hidden="true">
        <div class="wrap page-head__in">
            <div data-reveal>
                <nav class="crumbs" aria-label="Fil d’Ariane"><a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Réalisations</span></nav>
                <p class="kicker">Réalisations</p>
                <h1>Le travail se juge <em>dans les détails</em>.</h1>
                <p class="page-head__lead">Salles de bains, hammam, équipements sanitaires : quelques chantiers réalisés par RG Plomberie, photographiés sur place.</p>
                <div class="actions">
                    <a class="btn btn--red btn--big" href="tel:+33627997646"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg>06 27 99 76 46</a>
                    <a class="btn btn--line btn--big" href="{{ route('contact') }}#demande"><svg class="ic" aria-hidden="true"><use href="#i-sms"></use></svg>Demande par SMS</a>
                </div>
            </div>
            <figure class="page-head__photo" data-reveal>
                <img src="{{ asset('assets/img/rg/chantiers/hammam-800.webp') }}" width="800" height="600" alt="Hammam en mosaïque réalisé par RG Plomberie" fetchpriority="high">
                <figcaption>Chantier RG Plomberie</figcaption>
            </figure>
        </div>
    </section>

    <section class="block block--soft ba">
        <div class="wrap">
            <header class="head head--row" data-reveal>
                <div>
                    <p class="kicker">Avant / après</p>
                    <h2>Glissez, comparez.</h2>
                    <p>Passez la souris sur une image, ou faites-la glisser au doigt. Ces avant / après sont des visuels d’illustration des transformations réalisées par RG Plomberie ; ses photos de chantiers sont plus bas.</p>
                </div>
                <div class="ba-filters" role="group" aria-label="Filtrer les avant / après">
                    <button type="button" data-ba-filter="all" aria-pressed="true">Tout <span>4</span></button>
                    <button type="button" data-ba-filter="sdb" aria-pressed="false">Salle de bains <span>2</span></button>
                    <button type="button" data-ba-filter="chauffage" aria-pressed="false">Chauffage <span>1</span></button>
                    <button type="button" data-ba-filter="clim" aria-pressed="false">Climatisation <span>1</span></button>
                </div>
            </header>
            <div class="ba-grid" data-ba-grid>
                <article class="ba-card" data-ba-card data-cat="chauffage">
                    <div class="compare ba-card__compare" data-compare data-compare-hover data-compare-peek data-lb-item data-lb-title="Chaufferie remise à neuf" style="--position: 50%;">
                        <img src="{{ asset('assets/img/rg/avant-apres/chaufferie-avant.webp') }}" width="1200" height="800" alt="Local technique avec une ancienne chaudière et une tuyauterie vieillissante (visuel d’illustration)" loading="lazy">
                        <div class="compare__after">
                            <img src="{{ asset('assets/img/rg/avant-apres/chaufferie-apres.webp') }}" width="1200" height="800" alt="Le même local avec une chaudière murale neuve et des réseaux en cuivre refaits (visuel d’illustration)" loading="lazy">
                        </div>
                        <span class="compare__tag compare__tag--before">Avant</span>
                        <span class="compare__tag compare__tag--after">Après</span>
                        <span class="compare__line" aria-hidden="true"><i></i></span>
                        <input class="compare__range" data-compare-range type="range" min="0" max="100" value="50" aria-label="Comparer avant et après : Chaufferie remise à neuf">
                        <button class="ba-card__zoom" type="button" data-lb-open><span class="sr-only">Agrandir : Chaufferie remise à neuf</span><svg class="ic" aria-hidden="true"><use href="#i-expand"></use></svg></button>
                    </div>
                    <div class="ba-card__body">
                        <div class="ba-card__meta"><span class="ba-card__cat">Chauffage</span><span class="ba-card__note">Visuel d’illustration</span></div>
                        <h3>Chaufferie remise à neuf</h3>
                        <p>Chaudière murale neuve, collecteurs et réseaux en cuivre refaits, vase d’expansion remplacé.</p>
                        <div class="ba-switch" role="group" aria-label="Afficher">
                            <button type="button" data-compare-show="100">Avant</button>
                            <button type="button" data-compare-show="50" aria-pressed="true">50 / 50</button>
                            <button type="button" data-compare-show="0">Après</button>
                        </div>
                    </div>
                </article>
                <article class="ba-card" data-ba-card data-cat="sdb">
                    <div class="compare ba-card__compare" data-compare data-compare-hover data-compare-peek data-lb-item data-lb-title="Lavabo et meuble vasque" style="--position: 50%;">
                        <img src="{{ asset('assets/img/rg/avant-apres/lavabo-avant.webp') }}" width="1200" height="800" alt="Lavabo ancien avec tuyauterie apparente (visuel d’illustration)" loading="lazy">
                        <div class="compare__after">
                            <img src="{{ asset('assets/img/rg/avant-apres/lavabo-apres.webp') }}" width="1200" height="800" alt="Le même coin toilette avec un meuble vasque en bois et une vasque neuve (visuel d’illustration)" loading="lazy">
                        </div>
                        <span class="compare__tag compare__tag--before">Avant</span>
                        <span class="compare__tag compare__tag--after">Après</span>
                        <span class="compare__line" aria-hidden="true"><i></i></span>
                        <input class="compare__range" data-compare-range type="range" min="0" max="100" value="50" aria-label="Comparer avant et après : Lavabo et meuble vasque">
                        <button class="ba-card__zoom" type="button" data-lb-open><span class="sr-only">Agrandir : Lavabo et meuble vasque</span><svg class="ic" aria-hidden="true"><use href="#i-expand"></use></svg></button>
                    </div>
                    <div class="ba-card__body">
                        <div class="ba-card__meta"><span class="ba-card__cat">Salle de bains</span><span class="ba-card__note">Visuel d’illustration</span></div>
                        <h3>Lavabo et meuble vasque</h3>
                        <p>Ancien lavabo sur colonne et tuyaux apparents remplacés par un meuble vasque avec mitigeur neuf.</p>
                        <div class="ba-switch" role="group" aria-label="Afficher">
                            <button type="button" data-compare-show="100">Avant</button>
                            <button type="button" data-compare-show="50" aria-pressed="true">50 / 50</button>
                            <button type="button" data-compare-show="0">Après</button>
                        </div>
                    </div>
                </article>
                <article class="ba-card" data-ba-card data-cat="clim">
                    <div class="compare ba-card__compare" data-compare data-compare-hover data-compare-peek data-lb-item data-lb-title="Climatisation remplacée" style="--position: 50%;">
                        <img src="{{ asset('assets/img/rg/avant-apres/climatisation-avant.webp') }}" width="1200" height="800" alt="Séjour avec un ancien climatiseur mural (visuel d’illustration)" loading="lazy">
                        <div class="compare__after">
                            <img src="{{ asset('assets/img/rg/avant-apres/climatisation-apres.webp') }}" width="1200" height="800" alt="Le même séjour avec un climatiseur mural récent (visuel d’illustration)" loading="lazy">
                        </div>
                        <span class="compare__tag compare__tag--before">Avant</span>
                        <span class="compare__tag compare__tag--after">Après</span>
                        <span class="compare__line" aria-hidden="true"><i></i></span>
                        <input class="compare__range" data-compare-range type="range" min="0" max="100" value="50" aria-label="Comparer avant et après : Climatisation remplacée">
                        <button class="ba-card__zoom" type="button" data-lb-open><span class="sr-only">Agrandir : Climatisation remplacée</span><svg class="ic" aria-hidden="true"><use href="#i-expand"></use></svg></button>
                    </div>
                    <div class="ba-card__body">
                        <div class="ba-card__meta"><span class="ba-card__cat">Climatisation</span><span class="ba-card__note">Visuel d’illustration</span></div>
                        <h3>Climatisation remplacée</h3>
                        <p>Ancien climatiseur mural remplacé par une unité récente, plus discrète et plus silencieuse.</p>
                        <div class="ba-switch" role="group" aria-label="Afficher">
                            <button type="button" data-compare-show="100">Avant</button>
                            <button type="button" data-compare-show="50" aria-pressed="true">50 / 50</button>
                            <button type="button" data-compare-show="0">Après</button>
                        </div>
                    </div>
                </article>
                <article class="ba-card" data-ba-card data-cat="sdb">
                    <div class="compare ba-card__compare" data-compare data-compare-hover data-compare-peek data-lb-item data-lb-title="Salle de bains rénovée" style="--position: 50%;">
                        <img src="{{ asset('assets/img/rg/avant-apres/salle-de-bains-avant.webp') }}" width="1200" height="800" alt="Salle de bains en cours de démolition, réseaux à nu (visuel d’illustration)" loading="lazy">
                        <div class="compare__after">
                            <img src="{{ asset('assets/img/rg/avant-apres/salle-de-bains-apres.webp') }}" width="1200" height="800" alt="Salle de bains terminée avec douche, baignoire et meuble vasque (visuel d’illustration)" loading="lazy">
                        </div>
                        <span class="compare__tag compare__tag--before">Avant</span>
                        <span class="compare__tag compare__tag--after">Après</span>
                        <span class="compare__line" aria-hidden="true"><i></i></span>
                        <input class="compare__range" data-compare-range type="range" min="0" max="100" value="50" aria-label="Comparer avant et après : Salle de bains rénovée">
                        <button class="ba-card__zoom" type="button" data-lb-open><span class="sr-only">Agrandir : Salle de bains rénovée</span><svg class="ic" aria-hidden="true"><use href="#i-expand"></use></svg></button>
                    </div>
                    <div class="ba-card__body">
                        <div class="ba-card__meta"><span class="ba-card__cat">Salle de bains</span><span class="ba-card__note">Visuel d’illustration</span></div>
                        <h3>Salle de bains rénovée</h3>
                        <p>Pièce mise à nu, réseaux repris, puis douche vitrée, baignoire et meuble vasque.</p>
                        <div class="ba-switch" role="group" aria-label="Afficher">
                            <button type="button" data-compare-show="100">Avant</button>
                            <button type="button" data-compare-show="50" aria-pressed="true">50 / 50</button>
                            <button type="button" data-compare-show="0">Après</button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="wrap">
            <header class="head head--row" data-reveal>
                <div>
                    <p class="kicker">Nos chantiers</p>
                    <h2>Photos de chantiers RG Plomberie.</h2>
                </div>
                <p class="ba-hint">Touchez une photo pour l’agrandir.</p>
            </header>
            <div class="works2" data-reveal>
                <figure class="works2__item works2__item--wide" data-lb-item data-lb-title="Hammam en mosaïque">
                    <img src="{{ asset('assets/img/rg/chantiers/hammam.webp') }}" width="1600" height="1200" alt="Hammam en mosaïque réalisé par RG Plomberie" loading="lazy">
                    <figcaption><span>Hammam en mosaïque</span><button type="button" data-lb-open><span class="sr-only">Agrandir : Hammam en mosaïque</span><svg class="ic" aria-hidden="true"><use href="#i-expand"></use></svg></button></figcaption>
                </figure>
                <figure class="works2__item" data-lb-item data-lb-title="Meuble vasque suspendu">
                    <img src="{{ asset('assets/img/rg/chantiers/sdb-vasque.webp') }}" width="1200" height="1600" alt="Meuble vasque suspendu et baignoire, réalisés par RG Plomberie" loading="lazy">
                    <figcaption><span>Meuble vasque suspendu</span><button type="button" data-lb-open><span class="sr-only">Agrandir : Meuble vasque suspendu</span><svg class="ic" aria-hidden="true"><use href="#i-expand"></use></svg></button></figcaption>
                </figure>
                <figure class="works2__item" data-lb-item data-lb-title="Salle de bains effet marbre">
                    <img src="{{ asset('assets/img/rg/chantiers/sdb-marbre.webp') }}" width="1200" height="1600" alt="Salle de bains effet marbre avec baignoire îlot, réalisée par RG Plomberie" loading="lazy">
                    <figcaption><span>Salle de bains effet marbre</span><button type="button" data-lb-open><span class="sr-only">Agrandir : Salle de bains effet marbre</span><svg class="ic" aria-hidden="true"><use href="#i-expand"></use></svg></button></figcaption>
                </figure>
            </div>
        </div>
    </section>

    <div class="lb" data-lb hidden>
        <div class="lb__top">
            <p class="lb__title" data-lb-title-out></p>
            <span class="lb__count" data-lb-count></span>
            <button class="lb__btn" type="button" data-lb-close><span class="sr-only">Fermer</span><svg class="ic" aria-hidden="true"><use href="#i-close"></use></svg></button>
        </div>
        <div class="lb__stage" data-lb-stage></div>
        <button class="lb__btn lb__prev" type="button" data-lb-prev><span class="sr-only">Précédent</span><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
        <button class="lb__btn lb__next" type="button" data-lb-next><span class="sr-only">Suivant</span><svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></button>
    </div>

    <section class="final">
        <div class="final__band" aria-hidden="true"><div class="final__track"><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span><span>Plomberie · Chauffage · Climatisation · Pompe à chaleur · VMC · Dépannage ·&nbsp;</span></div></div>
        <div class="wrap final__in">
            <h2>Un projet de salle de bains ?</h2>
            <p>Devis gratuit. Envoyez quelques photos de l’existant.</p>
            <div class="final__cta">
                <a class="final__phone" href="tel:+33627997646"><span class="final__ic"><svg class="ic ic--fill" aria-hidden="true"><use href="#i-phone"></use></svg></span><span><small>Appel direct</small><strong>06 27 99 76 46</strong></span></a>
                <a class="final__sms" href="{{ route('contact') }}#demande">ou faites une demande par SMS <svg class="ic" aria-hidden="true"><use href="#i-arrow"></use></svg></a>
            </div>
        </div>
    </section>
@endsection
