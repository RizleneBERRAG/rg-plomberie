@extends('layouts.app', [
    'title' => 'Page introuvable - RG Plomberie',
    'description' => 'La page demandée est introuvable. Retournez vers l’accueil ou contactez RG Plomberie.'
])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/cinematic-error.css') }}">
@endpush

@section('content')

    <section class="error-404">
        <div class="error-404-bg" style="background-image: url('{{ asset('assets/img/rg/works/work-2.jpg') }}');"></div>
        <div class="error-404-overlay"></div>

        <div class="container error-404-grid">
            <div class="error-404-content">
                <span class="section-label">Erreur 404</span>

                <h1>
                    Cette page<br>
                    n’existe pas.
                </h1>

                <p>
                    Le lien que vous avez suivi semble incorrect ou la page a été déplacée.
                    Vous pouvez revenir à l’accueil ou contacter RG Plomberie directement.
                </p>

                <div class="error-404-actions">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        Retour à l’accueil
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-ghost">
                        Demander un devis
                    </a>
                </div>
            </div>

            <aside class="error-404-panel">
                <span>RG Plomberie</span>

                <strong>404</strong>

                <p>
                    Une mauvaise adresse, ça arrive.
                    Pour une demande en plomberie, chauffage, climatisation ou VMC,
                    le bon chemin est juste ici.
                </p>

                <a href="tel:+33627997646">
                    06 27 99 76 46
                </a>
            </aside>
        </div>
    </section>

@endsection
