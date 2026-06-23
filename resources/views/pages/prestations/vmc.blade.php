@php
    $service = [
        'meta_title' => 'VMC - RG Plomberie',
        'meta_description' => 'RG Plomberie intervient dans le Rhône pour la VMC, la ventilation, le renouvellement de l’air et les problèmes d’humidité.',
        'kicker' => 'VMC',
        'title' => 'Respirer<br>un air<br>plus sain.',
        'lead' => 'La ventilation joue un rôle essentiel dans le confort intérieur, la qualité de l’air et la protection du logement contre l’humidité.',
        'hero' => 'assets/img/rg/works/work-7.jpg',

        'intro_title' => 'Une bonne ventilation protège le logement.',
        'intro_text' => 'La VMC permet de renouveler l’air, de limiter l’humidité et d’améliorer le confort intérieur. RG Plomberie intervient pour installer, remplacer ou améliorer un système de ventilation adapté au logement.',
        'tags' => ['Ventilation', 'Qualité de l’air', 'Humidité', 'Renouvellement', 'Confort'],

        'features_title' => 'Les besoins liés à la VMC.',
        'features' => [
            [
                'title' => 'Installation de VMC',
                'text' => 'Mettre en place un système de ventilation adapté au logement ou au local.'
            ],
            [
                'title' => 'Remplacement',
                'text' => 'Remplacer un équipement vieillissant, insuffisant ou mal adapté au besoin.'
            ],
            [
                'title' => 'Humidité',
                'text' => 'Améliorer la ventilation pour limiter les problèmes d’humidité et d’air stagnant.'
            ],
            [
                'title' => 'Qualité de l’air',
                'text' => 'Favoriser un renouvellement d’air plus régulier pour un intérieur plus sain.'
            ],
        ],

        'proof_image' => 'assets/img/rg/works/work-7.jpg',
        'proof_alt' => 'Intervention VMC RG Plomberie',
        'proof_title' => 'Une prestation discrète mais essentielle.',
        'proof_text' => 'La VMC se voit peu, mais elle joue un rôle important dans le confort, la qualité de l’air et la protection du logement.',
        'proof_points' => [
            'Air renouvelé',
            'Humidité limitée',
            'Confort amélioré',
            'Installation adaptée'
        ],

        'gallery_title' => 'Des systèmes discrets mais essentiels.',
        'gallery' => [
            ['src' => 'assets/img/rg/works/work-7.jpg', 'alt' => 'Intervention VMC RG Plomberie 1'],
            ['src' => 'assets/img/rg/works/work-8.jpg', 'alt' => 'Intervention VMC RG Plomberie 2'],
            ['src' => 'assets/img/rg/works/work-5.jpg', 'alt' => 'Intervention VMC RG Plomberie 3'],
            ['src' => 'assets/img/rg/works/work-1.jpg', 'alt' => 'Intervention VMC RG Plomberie 4'],
        ],

        'cta_kicker' => 'Besoin VMC',
        'cta_title' => 'Votre logement manque de ventilation ou présente de l’humidité ?',
        'cta_text' => 'RG Plomberie peut vous accompagner vers une solution de ventilation adaptée à votre situation.',
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
