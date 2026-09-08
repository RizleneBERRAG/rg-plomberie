<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'RG Plomberie — Plombier chauffagiste dans le Rhône' }}</title>
    <meta name="description" content="{{ $description ?? 'RG Plomberie intervient en plomberie, chauffage, climatisation et VMC dans le Rhône et l’Est lyonnais.' }}">
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}">
    <meta name="theme-color" content="#0b0d10">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="RG Plomberie">
    <meta property="og:title" content="{{ $title ?? 'RG Plomberie — Plombier chauffagiste dans le Rhône' }}">
    <meta property="og:description" content="{{ $description ?? 'Plomberie, chauffage, climatisation et VMC dans le Rhône et l’Est lyonnais.' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/rg/web/hero-team.webp') }}">
    <meta property="og:image:alt" content="Intervention technique en plomberie et chauffage">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@500;600;700;800&amp;display=swap" rel="stylesheet">
    <script>document.documentElement.classList.add('js');</script>
    <link rel="stylesheet" href="{{ asset('assets/css/rg-premium.css') }}?v=2">
    <link rel="stylesheet" href="{{ asset('assets/css/rg-direction.css') }}?v=1">

    @php
        $businessSchema = [
            '@context' => 'https://schema.org',
            '@type' => ['Plumber', 'HVACBusiness'],
            '@id' => url('/') . '#entreprise',
            'name' => 'RG Plomberie',
            'legalName' => 'RG PLOMBERIE',
            'url' => url('/'),
            'telephone' => '+33627997646',
            'image' => asset('assets/img/rg/web/hero-team.webp'),
            'logo' => asset('assets/img/rg/logo-brand.webp'),
            'description' => 'Plomberie, chauffage, climatisation et VMC dans le Rhône et l’Est lyonnais.',
            'foundingDate' => '2017',
            'priceRange' => '€€',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '4 B chemin de la Batterie',
                'postalCode' => '38280',
                'addressLocality' => 'Janneyrias',
                'addressCountry' => 'FR',
            ],
            'areaServed' => [
                ['@type' => 'AdministrativeArea', 'name' => 'Rhône'],
                ['@type' => 'City', 'name' => 'Lyon'],
                ['@type' => 'City', 'name' => 'Décines-Charpieu'],
                ['@type' => 'City', 'name' => 'Villeurbanne'],
                ['@type' => 'City', 'name' => 'Bron'],
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Prestations RG Plomberie',
                'itemListElement' => [
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Plomberie']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Chauffage']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Climatisation']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Ventilation mécanique contrôlée']],
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($businessSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
</head>
<body>
    <a class="skip-link" href="#contenu">Aller au contenu</a>

    <header class="site-header" data-header>
        <div class="container site-header__inner">
            <a class="brand" href="{{ route('home') }}" aria-label="RG Plomberie — Accueil">
                <img class="brand__logo" src="{{ asset('assets/img/rg/logo-brand.webp') }}" width="624" height="416" alt="RG Plomberie">
            </a>

            <button class="nav-toggle" type="button" data-nav-toggle aria-controls="site-navigation" aria-expanded="false">
                <span class="sr-only">Ouvrir le menu</span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </button>

            <nav class="site-nav" id="site-navigation" data-nav aria-label="Navigation principale">
                <a href="{{ route('home') }}" data-nav-key="home">Accueil</a>
                <a href="{{ route('entreprise') }}" data-nav-key="entreprise">Entreprise</a>
                <a href="{{ route('prestations') }}" data-nav-key="prestations">Prestations</a>
                <a href="{{ route('realisations') }}" data-nav-key="realisations">Réalisations</a>
                <a href="{{ route('depannage') }}" data-nav-key="depannage">Dépannage</a>
            </nav>

            <div class="header-actions">
                <a class="header-phone" href="tel:+33627997646">
                    <span>Besoin d’un conseil ?</span>
                    <strong>06 27 99 76 46</strong>
                </a>
                <a class="button button--primary button--compact" href="{{ route('contact') }}">Demander un devis</a>
            </div>
        </div>
    </header>

    <main id="contenu">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-intro">
                <a class="brand brand--footer" href="{{ route('home') }}">
                    <img class="brand__logo" src="{{ asset('assets/img/rg/logo-brand.webp') }}" width="624" height="416" alt="RG Plomberie">
                </a>
                <p>Installation, rénovation, entretien et dépannage en plomberie, chauffage, climatisation et VMC.</p>
                <a class="footer-phone" href="tel:+33627997646">06 27 99 76 46</a>
            </div>

            <div class="footer-column">
                <h2>Navigation</h2>
                <a href="{{ route('entreprise') }}">L’entreprise</a>
                <a href="{{ route('prestations') }}">Les prestations</a>
                <a href="{{ route('realisations') }}">Les réalisations</a>
                <a href="{{ route('avis') }}">Avis clients</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>

            <div class="footer-column">
                <h2>Prestations</h2>
                <a href="{{ route('prestations.plomberie') }}">Plomberie</a>
                <a href="{{ route('prestations.chauffage') }}">Chauffage</a>
                <a href="{{ route('prestations.climatisation') }}">Climatisation</a>
                <a href="{{ route('prestations.vmc') }}">VMC</a>
                <a href="{{ route('depannage') }}">Dépannage</a>
            </div>

            <div class="footer-column footer-column--legal">
                <h2>RG Plomberie</h2>
                <p>SASU au capital de 5 000 €</p>
                <p>SIREN 833 160 617</p>
                <p>Siège : Janneyrias (38280)</p>
                <a href="{{ route('mentions') }}">Mentions légales</a>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>© {{ date('Y') }} RG Plomberie. Tous droits réservés.</p>
            <p>Site conçu et développé par Rizlene Berrag.</p>
        </div>
    </footer>

    <div class="mobile-action-bar" aria-label="Actions rapides">
        <a href="tel:+33627997646">Appeler</a>
        <a href="{{ route('contact') }}">Demander un devis</a>
    </div>

    <dialog class="lightbox" data-lightbox>
        <button class="lightbox__close" type="button" data-lightbox-close aria-label="Fermer l’image">×</button>
        <figure>
            <img src="" width="1100" height="780" alt="" data-lightbox-image>
            <figcaption data-lightbox-caption></figcaption>
        </figure>
    </dialog>

    <script src="{{ asset('assets/js/rg-premium.js') }}?v=2" defer></script>
</body>
</html>