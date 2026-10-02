@extends('layouts.app', [
    'title' => 'Page introuvable — RG Plomberie',
    'description' => 'La page demandée est introuvable. Revenez à l’accueil de RG Plomberie ou appelez directement le 06 27 99 76 46.',
    'robots' => 'noindex, follow'
])

@section('content')
    <section class="page-head">
        <img class="page-head__bg" src="{{ asset('assets/img/rg/chantiers/camions-rg-plomberie.webp') }}" width="1654" height="608" alt="" aria-hidden="true">
        <div class="wrap notfound">
            <p class="kicker">Erreur 404</p>
            <h1>Cette page a pris une mauvaise conduite.</h1>
            <p>Le lien est incorrect ou la page a été déplacée. Revenez à l’accueil ou appelez directement RG Plomberie.</p>
            <div class="actions">
                <a class="btn btn--red btn--big" href="tel:+33627997646">06 27 99 76 46</a>
                <a class="btn btn--line btn--big" href="{{ route('home') }}">Retour à l’accueil</a>
            </div>
        </div>
    </section>
@endsection
