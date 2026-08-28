@extends('layouts.app', [
    'title' => 'Page introuvable — RG Plomberie',
    'description' => 'La page demandée est introuvable. Revenez à l’accueil de RG Plomberie ou utilisez la page de contact.'
    'robots' => 'noindex, follow'
])

@section('content')
    <section class="not-found">
        <div class="container not-found__grid">
            <div data-reveal>
                <p class="eyebrow eyebrow--light">Erreur 404</p>
                <h1>Cette page a pris<br>une mauvaise conduite.</h1>
                <p>Le lien est incorrect ou la page a été déplacée. Revenez à l’accueil ou contactez directement RG Plomberie.</p>
                <div class="button-row">
                    <a class="button button--light" href="{{ route('home') }}">Retour à l’accueil</a>
                    <a class="button button--outline-light" href="{{ route('contact') }}">Nous contacter</a>
                </div>
            </div>
            <div class="not-found__number" aria-hidden="true">404</div>
        </div>
    </section>
@endsection
