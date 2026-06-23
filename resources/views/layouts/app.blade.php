<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'RG Plomberie - Plomberie, chauffage, climatisation dans le Rhône' }}</title>
    <meta name="description" content="{{ $description ?? 'RG Plomberie - plomberie, chauffage, climatisation, VMC et dépannage dans le Rhône.' }}">

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <meta name="theme-color" content="#d80714">
    <meta name="msapplication-TileColor" content="#050505">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        (function () {
            const savedTheme = localStorage.getItem("rg-theme");
            document.documentElement.dataset.theme = savedTheme || "dark";
        })();
    </script>


    <link rel="stylesheet" href="{{ asset('assets/css/cinematic-global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cinematic-header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cinematic-footer.css') }}">

    @stack('styles')

    <link rel="stylesheet" href="{{ asset('assets/css/cinematic-motion.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cinematic-theme.css') }}">

    <link rel="canonical" href="{{ url()->current() }}">

    @php
        $localBusinessSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Plumber',
            '@id' => url('/') . '#rg-plomberie',
            'name' => 'RG Plomberie',
            'url' => url('/'),
            'telephone' => '+33627997646',
            'image' => asset('assets/img/rg/logo.png'),
            'logo' => asset('assets/img/rg/logo.png'),
            'description' => 'RG Plomberie intervient dans le Rhône pour la plomberie, le chauffage, la climatisation, la VMC, le dépannage, l’installation et l’entretien.',
            'priceRange' => '€€',
            'areaServed' => [
                [
                    '@type' => 'AdministrativeArea',
                    'name' => 'Rhône',
                ],
                [
                    '@type' => 'City',
                    'name' => 'Lyon',
                ],
                [
                    '@type' => 'City',
                    'name' => 'Villeurbanne',
                ],
                [
                    '@type' => 'City',
                    'name' => 'Vénissieux',
                ],
                [
                    '@type' => 'City',
                    'name' => 'Bron',
                ],
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Prestations RG Plomberie',
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Plomberie',
                            'url' => route('prestations.plomberie'),
                        ],
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Chauffage',
                            'url' => route('prestations.chauffage'),
                        ],
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Climatisation',
                            'url' => route('prestations.climatisation'),
                        ],
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'VMC',
                            'url' => route('prestations.vmc'),
                        ],
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Dépannage plomberie, chauffage, climatisation et VMC',
                            'url' => route('depannage'),
                        ],
                    ],
                ],
            ],
            'contactPoint' => [
                [
                    '@type' => 'ContactPoint',
                    'telephone' => '+33627997646',
                    'contactType' => 'customer service',
                    'areaServed' => 'FR',
                    'availableLanguage' => ['fr'],
                ],
            ],
        ];
    @endphp

    <script type="application/ld+json">
        {!! json_encode($localBusinessSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
</head>
<body>

<div class="site-preloader" id="sitePreloader">
    <div class="site-preloader-inner">
        <span class="preloader-line"></span>
        <img src="{{ asset('assets/img/rg/logo.png') }}" alt="Logo RG Plomberie" class="preloader-logo">
        <strong>RG PLOMBERIE</strong>
        <small>Plomberie • Chauffage • Climatisation • VMC</small>
    </div>
</div>

<header class="site-header" data-header>
    <div class="header-topbar">
        <div class="container header-topbar-inner">
            <div class="topbar-status">
                <span class="topbar-pulse"></span>
                <strong>RG Plomberie</strong>
                <em>Rhône 69</em>
            </div>

            <div class="topbar-services">
                <span>Dépannage</span>
                <span>Installation</span>
                <span>Entretien</span>
            </div>
        </div>
    </div>

    <div class="container header-inner">
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-media">
                <img src="{{ asset('assets/img/rg/logo.png') }}" alt="Logo RG Plomberie">
            </span>

            <span class="brand-text">
                <strong>RG Plomberie</strong>
                <small>Plomberie • Chauffage • Climatisation</small>
            </span>
        </a>

        <nav class="main-nav" aria-label="Navigation principale">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('entreprise') }}">Entreprise</a>
            <a href="{{ route('prestations') }}">Prestations</a>
            <a href="{{ route('realisations') }}">Réalisations</a>
            <a href="{{ route('depannage') }}">Dépannage</a>
        </nav>

        <div class="header-actions">
            <a href="tel:+33627997646" class="header-phone">06 27 99 76 46</a>

            <a href="{{ route('contact') }}" class="header-cta">
                Demander un devis
            </a>

            <button
                class="menu-toggle"
                data-menu-toggle
                type="button"
                aria-label="Ouvrir le menu"
                aria-expanded="false"
            >
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    <div class="mobile-menu" data-mobile-menu aria-hidden="true">
        <div class="mobile-menu-top">
            <span class="mobile-menu-title">Menu</span>

            <button
                class="mobile-menu-close"
                type="button"
                data-menu-close
                aria-label="Fermer le menu"
            >
                <span></span>
                <span></span>
            </button>
        </div>

        <div class="mobile-menu-links">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('entreprise') }}">Entreprise</a>
            <a href="{{ route('prestations') }}">Prestations</a>
            <a href="{{ route('realisations') }}">Réalisations</a>
            <a href="{{ route('depannage') }}">Dépannage</a>

            <a href="{{ route('contact') }}" class="mobile-devis">
                Demander un devis
            </a>

            <a href="tel:+33627997646" class="mobile-call">
                Appeler maintenant
            </a>
        </div>
    </div>
</header>

<button class="theme-switch" type="button" data-theme-toggle aria-label="Basculer le thème">
    <span class="theme-switch-thumb">
        <span class="theme-switch-icon" data-theme-icon></span>
    </span>

    <span class="sr-only" data-theme-label>Activer le mode clair</span>
</button>

<main>
    @yield('content')
</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <div class="footer-brand-top">
                    <span class="footer-logo">
                        <img src="{{ asset('assets/img/rg/logo.png') }}" alt="Logo RG Plomberie">
                    </span>

                <div>
                    <strong>RG Plomberie</strong>
                    <small>Plomberie • Chauffage • Climatisation • VMC</small>
                </div>
            </div>

            <p>
                Installation, dépannage, entretien et remplacement dans le Rhône.
                Un site pensé comme une vitrine immersive pour montrer le sérieux du travail.
            </p>
        </div>

        <div class="footer-links">
            <span>Navigation</span>
            <a href="{{ route('entreprise') }}">Entreprise</a>
            <a href="{{ route('prestations') }}">Prestations</a>
            <a href="{{ route('realisations') }}">Réalisations</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div class="footer-links">
            <span>Contact</span>
            <a href="tel:+33627997646">06 27 99 76 46</a>
            <a href="{{ route('depannage') }}">Dépannage</a>
            <a href="{{ route('mentions') }}">Mentions légales</a>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/js/cinematic-header.js') }}?v=50"></script>
<script src="{{ asset('assets/js/cinematic-motion.js') }}?v=50"></script>
<script src="{{ asset('assets/js/cinematic-gallery.js') }}?v=50"></script>
<script src="{{ asset('assets/js/cinematic-before-after.js') }}?v=90"></script>
<script src="{{ asset('assets/js/cinematic-theme.js') }}?v=50"></script>

@stack('scripts')
</body>
</html>
