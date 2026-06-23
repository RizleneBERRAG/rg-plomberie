<section class="service-detail-hero">
    <div class="service-detail-bg" style="background-image: url('{{ asset($service['hero']) }}');"></div>
    <div class="service-detail-overlay"></div>

    <div class="container service-detail-hero-content">
        <a href="{{ route('prestations') }}" class="back-link">← Retour aux prestations</a>

        <span class="section-label">{{ $service['kicker'] }}</span>

        <h1>{!! $service['title'] !!}</h1>

        <p>{{ $service['lead'] }}</p>

        <div class="service-detail-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis</a>
            <a href="tel:+33627997646" class="btn btn-ghost">Appeler maintenant</a>
        </div>
    </div>
</section>

<section class="service-detail-intro section-dark">
    <div class="container service-detail-intro-grid">
        <div>
            <span class="section-label">Expertise</span>
            <h2>{{ $service['intro_title'] }}</h2>
        </div>

        <div>
            <p>{{ $service['intro_text'] }}</p>

            <div class="service-detail-tags">
                @foreach($service['tags'] as $tag)
                    <span>{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="service-detail-features">
    <div class="container">
        <div class="section-heading">
            <span class="section-label">Ce qui est pris en charge</span>
            <h2>{{ $service['features_title'] }}</h2>
        </div>

        <div class="service-detail-features-grid">
            @foreach($service['features'] as $index => $feature)
                <article class="service-detail-feature">
                    <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <h3>{{ $feature['title'] }}</h3>
                    <p>{{ $feature['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="service-detail-proof section-dark">
    <div class="container service-detail-proof-grid">
        <div class="service-detail-proof-media">
            <img src="{{ asset($service['proof_image']) }}" alt="{{ $service['proof_alt'] }}">
        </div>

        <div class="service-detail-proof-content">
            <span class="section-label">Méthode</span>
            <h2>{{ $service['proof_title'] }}</h2>
            <p>{{ $service['proof_text'] }}</p>

            <ul>
                @foreach($service['proof_points'] as $point)
                    <li>{{ $point }}</li>
                @endforeach
            </ul>

            <a href="{{ route('realisations') }}" class="chapter-link">Voir les réalisations</a>
        </div>
    </div>
</section>

<section class="service-detail-process">
    <div class="container">
        <div class="section-heading">
            <span class="section-label">Déroulé</span>
            <h2>Une intervention claire, du premier contact au résultat final.</h2>
        </div>

        <div class="service-detail-process-grid">
            <article class="service-detail-process-card">
                <span>01</span>
                <h3>Analyse</h3>
                <p>Comprendre votre besoin, votre installation et le niveau d’urgence.</p>
            </article>

            <article class="service-detail-process-card">
                <span>02</span>
                <h3>Solution</h3>
                <p>Proposer une intervention adaptée : dépannage, entretien, remplacement ou installation.</p>
            </article>

            <article class="service-detail-process-card">
                <span>03</span>
                <h3>Intervention</h3>
                <p>Réaliser un travail propre, lisible et cohérent avec l’existant.</p>
            </article>

            <article class="service-detail-process-card">
                <span>04</span>
                <h3>Résultat</h3>
                <p>Expliquer le travail réalisé et laisser une installation nette.</p>
            </article>
        </div>
    </div>
</section>

<section class="service-detail-gallery section-dark">
    <div class="container">
        <div class="section-heading">
            <span class="section-label">Images</span>
            <h2>{{ $service['gallery_title'] }}</h2>
            <p>Les photos réelles du client remplaceront progressivement ces visuels pour renforcer la crédibilité du site.</p>
        </div>

        <div class="service-detail-gallery-grid">
            @foreach($service['gallery'] as $index => $image)
                <article class="service-detail-gallery-card {{ $index === 0 ? 'large' : '' }}" data-gallery-item>
                    <img src="{{ asset($image['src']) }}" alt="{{ $image['alt'] }}">
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="service-detail-cta">
    <div class="container service-detail-cta-box">
        <div>
            <span class="section-label">{{ $service['cta_kicker'] }}</span>
            <h2>{{ $service['cta_title'] }}</h2>
            <p>{{ $service['cta_text'] }}</p>
        </div>

        <div class="service-detail-cta-actions">
            <a href="tel:+33627997646" class="mega-phone small">06 27 99 76 46</a>
            <a href="{{ route('contact') }}" class="btn btn-primary">Demander un devis</a>
        </div>
    </div>
</section>
