@extends('layouts.app', [
    'title' => 'Avis clients - RG Plomberie',
    'description' => 'Avis clients RG Plomberie pour les interventions en plomberie, chauffage, climatisation et VMC.'
])

@section('content')

    <section class="page-hero">
        <div class="container">
            <span class="page-kicker">Avis clients</span>
            <h1>La confiance se construit avec des preuves.</h1>
            <p>
                Les avis réels seront ajoutés depuis Google ou transmis par le client.
                Pour l’aperçu, on prépare une présentation propre et crédible.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container review-list">

            <article class="review-item">
                <div class="review-stars">★★★★★</div>
                <p>
                    Intervention sérieuse, travail propre et explications claires.
                    Le résultat est conforme à la demande.
                </p>
                <strong>Client vérifié</strong>
            </article>

            <article class="review-item">
                <div class="review-stars">★★★★★</div>
                <p>
                    Professionnel réactif, ponctuel et efficace.
                    Le chantier a été laissé propre.
                </p>
                <strong>Client vérifié</strong>
            </article>

            <article class="review-item">
                <div class="review-stars">★★★★★</div>
                <p>
                    Très bon contact, devis clair et intervention maîtrisée.
                    Je recommande l’entreprise.
                </p>
                <strong>Client vérifié</strong>
            </article>

        </div>
    </section>

@endsection
