document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll("[data-gallery-item]");

    if (!items.length) return;

    const lightbox = document.createElement("div");
    lightbox.className = "rg-lightbox";
    lightbox.innerHTML = `
        <button class="rg-lightbox-close" type="button" aria-label="Fermer l’image">×</button>
        <img class="rg-lightbox-image" src="" alt="">
    `;

    document.body.appendChild(lightbox);

    const image = lightbox.querySelector(".rg-lightbox-image");
    const close = lightbox.querySelector(".rg-lightbox-close");

    const openLightbox = (src, alt) => {
        image.src = src;
        image.alt = alt || "Image RG Plomberie";

        lightbox.classList.add("is-open");
        document.body.classList.add("lightbox-open");
    };

    const closeLightbox = () => {
        lightbox.classList.remove("is-open");
        document.body.classList.remove("lightbox-open");

        setTimeout(() => {
            if (!lightbox.classList.contains("is-open")) {
                image.src = "";
                image.alt = "";
            }
        }, 250);
    };

    items.forEach((item) => {
        const img = item.querySelector("img");

        if (!img) return;

        item.setAttribute("role", "button");
        item.setAttribute("tabindex", "0");

        item.addEventListener("click", () => {
            openLightbox(img.src, img.alt);
        });

        item.addEventListener("keydown", (event) => {
            if (event.key === "Enter" || event.key === " ") {
                event.preventDefault();
                openLightbox(img.src, img.alt);
            }
        });
    });

    close.addEventListener("click", closeLightbox);

    lightbox.addEventListener("click", (event) => {
        if (event.target === lightbox) {
            closeLightbox();
        }
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeLightbox();
        }
    });
});
