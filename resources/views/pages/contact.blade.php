@extends('layouts.app', [
    'title' => 'Contact et demande de devis — RG Plomberie',
    'description' => 'Contactez RG Plomberie pour une demande de devis ou d’intervention en plomberie, chauffage, climatisation ou VMC.'
])

@section('content')
    <section class="contact-hero">
        <div class="container contact-hero__grid">
            <div data-reveal>
                <nav class="breadcrumb" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a><span aria-hidden="true">/</span><span>Contact</span>
                </nav>
                <p class="eyebrow">Contact</p>
                <h1>Décrivez le besoin.<br>Nous cadrons la suite.</h1>
                <p class="lead">Pour une urgence, appelez directement. Pour un projet, indiquez les informations essentielles dans le formulaire.</p>
            </div>
            <a class="contact-phone-card" href="tel:+33627997646" data-reveal>
                <span>Contact direct</span>
                <strong>06 27 99 76 46</strong>
                <small>Appeler RG Plomberie <span aria-hidden="true">→</span></small>
            </a>
        </div>
    </section>

    <section class="section section--sand" id="formulaire">
        <div class="container contact-layout">
            <div class="contact-form-panel" data-reveal>
                <header>
                    <p class="eyebrow">Demande de devis</p>
                    <h2>Les informations utiles.</h2>
                    <p>Les champs marqués d’un astérisque sont obligatoires.</p>
                </header>

                <!-- STATIC-REMOVE-START -->
                @if (session('success'))
                    <div class="form-alert form-alert--success" role="status">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="form-alert form-alert--error" role="alert">
                        <strong>Le formulaire contient des erreurs.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- STATIC-REMOVE-END -->

                <form class="contact-form" method="post" action="{{ route('contact.send') }}" data-contact-form>
                    @csrf
                    <div class="hp-field" aria-hidden="true">
                        <label for="website">Site internet</label>
                        <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-grid">
                        <div class="field">
                            <label for="name">Nom complet <span aria-hidden="true">*</span></label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required maxlength="120">
                        </div>
                        <div class="field">
                            <label for="phone">Téléphone <span aria-hidden="true">*</span></label>
                            <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" autocomplete="tel" inputmode="tel" required maxlength="30">
                        </div>
                        <div class="field">
                            <label for="email">E-mail <small>(facultatif)</small></label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" maxlength="160">
                        </div>
                        <div class="field">
                            <label for="city">Ville <span aria-hidden="true">*</span></label>
                            <input id="city" name="city" type="text" value="{{ old('city') }}" autocomplete="address-level2" required maxlength="120">
                        </div>
                        <div class="field field--full">
                            <label for="service">Type de besoin <span aria-hidden="true">*</span></label>
                            <select id="service" name="service" required>
                                <option value="">Sélectionner</option>
                                <option value="plomberie" @selected(old('service') === 'plomberie')>Plomberie</option>
                                <option value="chauffage" @selected(old('service') === 'chauffage')>Chauffage</option>
                                <option value="climatisation" @selected(old('service') === 'climatisation')>Climatisation</option>
                                <option value="vmc" @selected(old('service') === 'vmc')>VMC / ventilation</option>
                                <option value="depannage" @selected(old('service') === 'depannage')>Dépannage urgent</option>
                                <option value="autre" @selected(old('service') === 'autre')>Autre demande</option>
                            </select>
                        </div>
                        <div class="field field--full">
                            <label for="message">Votre demande <span aria-hidden="true">*</span></label>
                            <textarea id="message" name="message" rows="7" required maxlength="3000" placeholder="Équipement concerné, symptômes ou travaux souhaités, contraintes et disponibilités…">{{ old('message') }}</textarea>
                            <small>Vous pourrez transmettre des photos lors de l’échange.</small>
                        </div>
                    </div>

                    <label class="privacy-check">
                        <input type="checkbox" name="privacy" value="1" required @checked(old('privacy'))>
                        <span>J’accepte que mes informations soient utilisées pour répondre à ma demande. <a href="{{ route('mentions') }}">En savoir plus</a>.</span>
                    </label>

                    <div class="form-actions">
                        <button class="button button--primary" type="submit">Envoyer la demande <span aria-hidden="true">↗</span></button>
                        <p>Ou appelez le <a href="tel:+33627997646">06 27 99 76 46</a>.</p>
                    </div>
                    <div class="static-contact-result" id="contact-result" data-contact-result hidden aria-live="polite"></div>
                </form>
            </div>

            <aside class="contact-sidebar" data-reveal>
                <article>
                    <span>01</span>
                    <h3>Urgence</h3>
                    <p>L’appel permet de qualifier la panne et de vérifier une disponibilité.</p>
                    <a href="tel:+33627997646">Appeler maintenant <span aria-hidden="true">→</span></a>
                </article>
                <article>
                    <span>02</span>
                    <h3>Projet</h3>
                    <p>Précisez les pièces, l’équipement, la commune et l’échéance souhaitée.</p>
                </article>
                <article>
                    <span>03</span>
                    <h3>Photos</h3>
                    <p>Préparez une vue générale, une vue rapprochée et les références de l’appareil.</p>
                </article>
                <article class="contact-sidebar__zone">
                    <span>Zone</span>
                    <h3>Rhône & Est lyonnais</h3>
                    <p>Siège à Janneyrias. Intervention sur déplacement selon la demande.</p>
                </article>
            </aside>
        </div>
    </section>

    <section class="section">
        <div class="container zone-panel" data-reveal>
            <div>
                <p class="eyebrow">Secteur d’intervention</p>
                <h2>Votre commune n’est pas listée ?</h2>
                <p>Les secteurs affichés sont des repères, pas une frontière stricte. Contactez RG Plomberie pour vérifier la faisabilité du déplacement.</p>
                <a class="text-link" href="tel:+33627997646">Vérifier par téléphone <span aria-hidden="true">→</span></a>
            </div>
            <div class="zone-panel__map" aria-label="Exemples de secteurs desservis">
                <span>Lyon</span><span>Villeurbanne</span><span>Bron</span><span>Décines</span><span>Meyzieu</span><span>Janneyrias</span>
            </div>
        </div>
    </section>
@endsection
