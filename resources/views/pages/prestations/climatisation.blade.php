@php
    $service = [
        'meta_title' => 'Climatisation - RG Plomberie',
        'meta_description' => 'RG Plomberie intervient dans le Rhône pour la climatisation : pose, entretien, mise en service et maintenance.',
        'kicker' => 'Climatisation',
        'title' => 'Installer.<br>Entretenir.<br>Améliorer.',
        'lead' => 'La climatisation participe au confort intérieur toute l’année. RG Plomberie intervient pour une pose propre, un entretien sérieux et une intégration soignée.',
        'hero' => 'assets/img/rg/works/work-6.jpg',

        'intro_title' => 'Une climatisation bien intégrée change le confort du quotidien.',
        'intro_text' => 'Un système de climatisation doit être performant, bien installé et correctement entretenu. RG Plomberie accompagne les demandes de pose, de mise en service, de maintenance et de nettoyage.',
        'tags' => ['Pose', 'Mise en service', 'Entretien', 'Nettoyage', 'Confort été/hiver'],

        'features_title' => 'Les interventions climatisation prises en charge.',
        'features' => [
            [
                'title' => 'Installation de climatisation',
                'text' => 'Réaliser une pose propre et adaptée au logement ou au local professionnel.'
            ],
            [
                'title' => 'Mise en service',
                'text' => 'Contrôler le système et assurer son lancement dans de bonnes conditions.'
            ],
            [
                'title' => 'Entretien et nettoyage',
                'text' => 'Préserver les performances, la qualité de l’air et le bon fonctionnement de l’équipement.'
            ],
            [
                'title' => 'Confort intérieur',
                'text' => 'Améliorer la température intérieure et le confort au quotidien, en été comme en hiver.'
            ],
        ],

        'proof_image' => 'assets/img/rg/works/work-6.jpg',
        'proof_alt' => 'Intervention climatisation RG Plomberie',
        'proof_title' => 'Une pose propre se remarque immédiatement.',
        'proof_text' => 'Une climatisation bien intégrée apporte du confort tout en respectant l’esthétique de l’intérieur.',
        'proof_points' => [
            'Pose soignée',
            'Intégration discrète',
            'Système entretenu',
            'Confort optimisé'
        ],

        'gallery_title' => 'Des poses propres, modernes et maîtrisées.',
        'gallery' => [
            ['src' => 'assets/img/rg/works/work-6.jpg', 'alt' => 'Intervention climatisation RG Plomberie 1'],
            ['src' => 'assets/img/rg/works/work-4.jpg', 'alt' => 'Intervention climatisation RG Plomberie 2'],
            ['src' => 'assets/img/rg/works/work-3.jpg', 'alt' => 'Intervention climatisation RG Plomberie 3'],
            ['src' => 'assets/img/rg/works/work-2.jpg', 'alt' => 'Intervention climatisation RG Plomberie 4'],
        ],

        'cta_kicker' => 'Besoin climatisation',
        'cta_title' => 'Vous souhaitez installer ou entretenir une climatisation ?',
        'cta_text' => 'Contactez RG Plomberie pour présenter votre besoin et obtenir une réponse claire.',
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
