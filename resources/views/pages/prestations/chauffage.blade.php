@php
    $service = [
        'meta_title' => 'Chauffage - RG Plomberie',
        'meta_description' => 'RG Plomberie intervient dans le Rhône pour le chauffage : dépannage, remplacement, entretien et confort thermique.',
        'kicker' => 'Chauffage',
        'title' => 'Retrouver<br>le confort<br>thermique.',
        'lead' => 'Un chauffage fiable apporte du confort, de la sécurité et de la tranquillité. RG Plomberie intervient sur les besoins liés aux équipements de chauffage.',
        'hero' => 'assets/img/rg/works/work-5.jpg',

        'intro_title' => 'Un confort thermique qui doit rester maîtrisé.',
        'intro_text' => 'Une panne de chauffage ou un équipement vieillissant peut vite perturber le quotidien. RG Plomberie accompagne les demandes de dépannage, de remplacement, d’entretien ou d’amélioration du confort thermique.',
        'tags' => ['Dépannage', 'Remplacement', 'Entretien', 'Confort', 'Performance'],

        'features_title' => 'Les interventions chauffage prises en charge.',
        'features' => [
            [
                'title' => 'Dépannage chauffage',
                'text' => 'Comprendre la panne, identifier l’origine du problème et proposer une solution adaptée.'
            ],
            [
                'title' => 'Remplacement d’équipement',
                'text' => 'Remplacer un élément vieillissant, défectueux ou non adapté au besoin du client.'
            ],
            [
                'title' => 'Entretien et contrôle',
                'text' => 'Préserver la fiabilité de l’installation et vérifier son bon fonctionnement.'
            ],
            [
                'title' => 'Optimisation du confort',
                'text' => 'Améliorer le confort intérieur selon le logement, l’usage et les attentes du client.'
            ],
        ],

        'proof_image' => 'assets/img/rg/works/work-5.jpg',
        'proof_alt' => 'Intervention chauffage RG Plomberie',
        'proof_title' => 'Une intervention claire et rassurante.',
        'proof_text' => 'Le chauffage est un poste sensible : le client attend une réponse sérieuse, une solution cohérente et un résultat fiable.',
        'proof_points' => [
            'Diagnostic clair',
            'Solution adaptée',
            'Installation contrôlée',
            'Confort retrouvé'
        ],

        'gallery_title' => 'Des interventions chauffage propres et maîtrisées.',
        'gallery' => [
            ['src' => 'assets/img/rg/works/work-5.jpg', 'alt' => 'Intervention chauffage RG Plomberie 1'],
            ['src' => 'assets/img/rg/works/work-6.jpg', 'alt' => 'Intervention chauffage RG Plomberie 2'],
            ['src' => 'assets/img/rg/works/work-7.jpg', 'alt' => 'Intervention chauffage RG Plomberie 3'],
            ['src' => 'assets/img/rg/works/work-8.jpg', 'alt' => 'Intervention chauffage RG Plomberie 4'],
        ],

        'cta_kicker' => 'Besoin chauffage',
        'cta_title' => 'Votre chauffage ne fonctionne plus ou doit être remplacé ?',
        'cta_text' => 'Expliquez votre situation à RG Plomberie pour obtenir une réponse adaptée.',
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
