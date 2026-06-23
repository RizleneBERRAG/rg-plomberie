@php
    $service = [
        'meta_title' => 'Plomberie - RG Plomberie',
        'meta_description' => 'RG Plomberie intervient dans le Rhône pour les fuites, sanitaires, robinetterie, raccordements et ballons d’eau chaude.',
        'kicker' => 'Plomberie',
        'title' => 'Réparer.<br>Raccorder.<br>Sécuriser.',
        'lead' => 'Une intervention de plomberie doit être rapide, propre et durable. RG Plomberie prend en charge les besoins essentiels des logements et locaux professionnels.',
        'hero' => 'assets/img/rg/works/work-4.jpg',

        'intro_title' => 'Une plomberie nette, lisible et fiable.',
        'intro_text' => 'La plomberie est souvent discrète lorsqu’elle fonctionne correctement, mais elle devient prioritaire dès qu’un problème apparaît. RG Plomberie intervient avec méthode pour sécuriser l’installation, corriger le problème et laisser un rendu propre.',
        'tags' => ['Fuite', 'Sanitaire', 'Robinetterie', 'Ballon d’eau chaude', 'Raccordement'],

        'features_title' => 'Les demandes plomberie les plus fréquentes.',
        'features' => [
            [
                'title' => 'Recherche et réparation de fuite',
                'text' => 'Identifier l’origine du problème et intervenir de manière ciblée pour limiter les dégâts.'
            ],
            [
                'title' => 'Sanitaire et robinetterie',
                'text' => 'Installer, remplacer ou remettre en état les équipements sanitaires et les points d’eau.'
            ],
            [
                'title' => 'Ballon d’eau chaude',
                'text' => 'Intervenir sur les équipements liés à l’eau chaude sanitaire selon le besoin rencontré.'
            ],
            [
                'title' => 'Raccordements',
                'text' => 'Réaliser un travail propre sur les arrivées, évacuations et raccords techniques.'
            ],
        ],

        'proof_image' => 'assets/img/rg/works/work-1.jpg',
        'proof_alt' => 'Intervention plomberie RG Plomberie',
        'proof_title' => 'Le détail fait toute la différence.',
        'proof_text' => 'Une installation propre, lisible et correctement raccordée renforce la fiabilité du chantier et la confiance du client.',
        'proof_points' => [
            'Installation plus lisible',
            'Raccordements propres',
            'Résultat sécurisé',
            'Chantier laissé net'
        ],

        'gallery_title' => 'Des installations visibles et rassurantes.',
        'gallery' => [
            ['src' => 'assets/img/rg/works/work-1.jpg', 'alt' => 'Intervention plomberie RG Plomberie 1'],
            ['src' => 'assets/img/rg/works/work-2.jpg', 'alt' => 'Intervention plomberie RG Plomberie 2'],
            ['src' => 'assets/img/rg/works/work-3.jpg', 'alt' => 'Intervention plomberie RG Plomberie 3'],
            ['src' => 'assets/img/rg/works/work-4.jpg', 'alt' => 'Intervention plomberie RG Plomberie 4'],
        ],

        'cta_kicker' => 'Besoin plomberie',
        'cta_title' => 'Une fuite, un sanitaire ou une installation à reprendre ?',
        'cta_text' => 'Contactez RG Plomberie pour expliquer votre besoin et obtenir une réponse adaptée.',
    ];
@endphp

@extends('layouts.app', [
    'title' => $service['meta_title'],
    'description' => $service['meta_description']
])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/cinematic-service-detail.css') }}">
@endpush

@section('content')
    @include('pages.prestations.partials.service-detail', ['service' => $service])
@endsection
