document.addEventListener("DOMContentLoaded", () => {
    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    const revealSelectors = [
        ".hero-copy",
        ".hero-side-panel",
        ".cinematic-intro-text",
        ".cinematic-stats article",
        ".section-heading",
        ".film-card",
        ".service-cinematic-card",
        ".before-after-signature-text",
        ".before-after-placeholder",
        ".gallery-card",
        ".emergency-cinematic-box",
        ".contact-cinematic-visual",
        ".contact-cinematic-panel",

        ".page-cinematic-content",
        ".realisations-intro-grid > *",
        ".before-project-cinematic",
        ".gallery-full-grid .gallery-card",
        ".realisations-cta-box",

        ".prestations-intro-grid > *",
        ".service-chapter",
        ".prestations-process-card",
        ".prestations-gallery-card",
        ".prestations-cta-box",

        ".service-detail-hero-content",
        ".service-detail-intro-grid > *",
        ".service-detail-feature",
        ".service-detail-proof-media",
        ".service-detail-proof-content",
        ".service-detail-process-card",
        ".service-detail-gallery-card",
        ".service-detail-cta-box",

        ".company-hero-content",
        ".company-manifesto-grid > *",
        ".company-value-card",
        ".company-scene-media",
        ".company-scene-content",
        ".company-timeline-item",
        ".company-zone-grid > *",
        ".company-gallery-card",
        ".company-cta-box",

        ".depannage-hero-content",
        ".depannage-call-panel",
        ".depannage-alert-box",
        ".depannage-type-card",
        ".depannage-process-title",
        ".depannage-process-list article",
        ".depannage-split-media",
        ".depannage-split-content",
        ".depannage-zone-box",
        ".depannage-faq-list article",
        ".depannage-final-box",

        ".contact-hero-content",
        ".contact-direct-card",
        ".contact-form-card",
        ".contact-side-card",
        ".contact-map-content",
        ".contact-map-card",
        ".review-card",
        ".contact-final-box",

        ".legal-hero-content",
        ".legal-summary",
        ".legal-card",

        ".error-404-content",
        ".error-404-panel"
    ];

    const revealElements = document.querySelectorAll(revealSelectors.join(","));

    revealElements.forEach((element, index) => {
        element.classList.add("motion-ready");
        element.style.setProperty("--motion-delay", `${Math.min(index * 35, 320)}ms`);
    });

    if (prefersReducedMotion) {
        revealElements.forEach((element) => {
            element.classList.add("motion-visible");
        });
        return;
    }

    if ("IntersectionObserver" in window) {
        const revealObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;

                    entry.target.classList.add("motion-visible");
                    revealObserver.unobserve(entry.target);
                });
            },
            {
                threshold: 0.14,
                rootMargin: "0px 0px -8% 0px"
            }
        );

        revealElements.forEach((element) => {
            revealObserver.observe(element);
        });
    } else {
        revealElements.forEach((element) => {
            element.classList.add("motion-visible");
        });
    }

    /* ================================
       GLOW CINÉMATIQUE SOURIS
    ================================ */

    const glow = document.createElement("div");
    glow.className = "rg-cursor-glow";
    document.body.appendChild(glow);

    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    let glowX = mouseX;
    let glowY = mouseY;

    const moveGlow = () => {
        glowX += (mouseX - glowX) * 0.12;
        glowY += (mouseY - glowY) * 0.12;

        glow.style.transform = `translate3d(${glowX}px, ${glowY}px, 0) translate(-50%, -50%)`;

        requestAnimationFrame(moveGlow);
    };

    window.addEventListener("pointermove", (event) => {
        mouseX = event.clientX;
        mouseY = event.clientY;

        document.documentElement.style.setProperty("--pointer-x", `${event.clientX}px`);
        document.documentElement.style.setProperty("--pointer-y", `${event.clientY}px`);
    });

    requestAnimationFrame(moveGlow);

    /* ================================
       HERO PARALLAX
    ================================ */

    const parallaxLayers = document.querySelectorAll(
        ".hero-layer-1, .hero-layer-2, .page-cinematic-bg, .company-hero-bg, .depannage-hero-bg, .contact-hero-bg, .legal-hero-bg, .service-detail-bg"
    );

    let parallaxX = 0;
    let parallaxY = 0;
    let currentParallaxX = 0;
    let currentParallaxY = 0;

    window.addEventListener("pointermove", (event) => {
        if (window.innerWidth < 900) return;

        const x = event.clientX / window.innerWidth - 0.5;
        const y = event.clientY / window.innerHeight - 0.5;

        parallaxX = x * 18;
        parallaxY = y * 18;
    });

    const animateParallax = () => {
        currentParallaxX += (parallaxX - currentParallaxX) * 0.08;
        currentParallaxY += (parallaxY - currentParallaxY) * 0.08;

        parallaxLayers.forEach((layer, index) => {
            const strength = index % 2 === 0 ? 1 : -0.65;

            layer.style.transform = `
                scale(1.07)
                translate3d(${currentParallaxX * strength}px, ${currentParallaxY * strength}px, 0)
            `;
        });

        requestAnimationFrame(animateParallax);
    };

    requestAnimationFrame(animateParallax);

    /* ================================
       CARTES VIVANTES AU SURVOL
    ================================ */

    const tiltCards = document.querySelectorAll(
        ".film-card, .service-cinematic-card, .gallery-card, .gallery-full-grid .gallery-card, .prestations-gallery-card, .service-detail-gallery-card, .company-gallery-card, .review-card, .company-value-card, .prestations-process-card, .service-detail-feature, .depannage-type-card, .contact-side-card, .legal-card"
    );

    tiltCards.forEach((card) => {
        card.classList.add("rg-tilt-card");

        card.addEventListener("pointermove", (event) => {
            if (window.innerWidth < 900) return;

            const rect = card.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;

            const rotateY = ((x / rect.width) - 0.5) * 8;
            const rotateX = ((y / rect.height) - 0.5) * -8;

            card.style.setProperty("--tilt-x", `${rotateX}deg`);
            card.style.setProperty("--tilt-y", `${rotateY}deg`);
            card.style.setProperty("--tilt-glow-x", `${x}px`);
            card.style.setProperty("--tilt-glow-y", `${y}px`);
            card.classList.add("is-tilting");
        });

        card.addEventListener("pointerleave", () => {
            card.style.setProperty("--tilt-x", "0deg");
            card.style.setProperty("--tilt-y", "0deg");
            card.classList.remove("is-tilting");
        });
    });

    /* ================================
       BOUTONS MAGNÉTIQUES
    ================================ */

    const magneticItems = document.querySelectorAll(".btn, .mega-phone, .chapter-link");

    magneticItems.forEach((item) => {
        item.classList.add("rg-magnetic");

        item.addEventListener("pointermove", (event) => {
            if (window.innerWidth < 900) return;

            const rect = item.getBoundingClientRect();
            const x = event.clientX - rect.left - rect.width / 2;
            const y = event.clientY - rect.top - rect.height / 2;

            item.style.transform = `translate3d(${x * 0.12}px, ${y * 0.18}px, 0)`;
        });

        item.addEventListener("pointerleave", () => {
            item.style.transform = "translate3d(0, 0, 0)";
        });
    });

    /* ================================
       CHIFFRES ANIMÉS
    ================================ */

    const numberElements = document.querySelectorAll(".cinematic-stats strong");

    const animateNumber = (element) => {
        const text = element.textContent.trim();
        const number = parseInt(text.replace(/\D/g, ""), 10);

        if (Number.isNaN(number)) return;

        const suffix = text.replace(/[0-9]/g, "");
        const duration = 1100;
        const start = performance.now();

        const step = (timestamp) => {
            const progress = Math.min((timestamp - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const value = Math.round(number * eased);

            element.textContent = `${value}${suffix}`;

            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                element.textContent = text;
            }
        };

        requestAnimationFrame(step);
    };

    if ("IntersectionObserver" in window) {
        const numberObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;

                    animateNumber(entry.target);
                    numberObserver.unobserve(entry.target);
                });
            },
            {
                threshold: 0.55
            }
        );

        numberElements.forEach((element) => {
            numberObserver.observe(element);
        });
    }

    /* ================================
       SCROLL PROGRESS GLOBAL
    ================================ */

    const updateScrollProgress = () => {
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
        const progress = maxScroll > 0 ? window.scrollY / maxScroll : 0;

        document.documentElement.style.setProperty("--scroll-progress", progress.toFixed(4));

        requestAnimationFrame(updateScrollProgress);
    };

    requestAnimationFrame(updateScrollProgress);
});
