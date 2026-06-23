document.addEventListener("DOMContentLoaded", () => {
    const sliders = document.querySelectorAll("[data-cinematic-before-after]");

    if (!sliders.length) return;

    const clamp = (value, min, max) => {
        return Math.min(Math.max(value, min), max);
    };

    sliders.forEach((slider) => {
        const inner = slider.querySelector(".before-after-placeholder-inner");
        const beforeLayer =
            slider.querySelector("[data-before-layer]") ||
            slider.querySelector(".before-after-placeholder-before");

        const afterLayer =
            slider.querySelector("[data-after-layer]") ||
            slider.querySelector(".before-after-placeholder-after");

        const divider =
            slider.querySelector("[data-ba-divider]") ||
            slider.querySelector(".before-after-divider");

        if (!inner || !beforeLayer || !afterLayer || !divider) return;

        let isDragging = false;
        let currentPosition = 50;

        const applyPosition = (position) => {
            currentPosition = clamp(position, 2, 98);

            inner.style.setProperty("--ba-position", `${currentPosition}%`, "important");
            slider.style.setProperty("--ba-position", `${currentPosition}%`, "important");

            /**
             * Ici on affiche la couche "après" de gauche vers la droite.
             * À 50%, on voit 50% après / 50% avant.
             */
            afterLayer.style.setProperty(
                "clip-path",
                `inset(0 ${100 - currentPosition}% 0 0)`,
                "important"
            );

            divider.style.setProperty("left", `${currentPosition}%`, "important");
            inner.setAttribute("aria-valuenow", Math.round(currentPosition));
        };

        const getPositionFromEvent = (event) => {
            const rect = inner.getBoundingClientRect();
            const clientX = event.clientX;
            const x = clientX - rect.left;

            return (x / rect.width) * 100;
        };

        const startDrag = (event) => {
            event.preventDefault();

            isDragging = true;

            slider.classList.add("is-dragging");
            inner.classList.add("is-dragging");

            applyPosition(getPositionFromEvent(event));
        };

        const moveDrag = (event) => {
            if (!isDragging) return;

            event.preventDefault();
            applyPosition(getPositionFromEvent(event));
        };

        const stopDrag = () => {
            if (!isDragging) return;

            isDragging = false;

            slider.classList.remove("is-dragging");
            inner.classList.remove("is-dragging");
        };

        inner.setAttribute("role", "slider");
        inner.setAttribute("tabindex", "0");
        inner.setAttribute("aria-label", "Comparateur avant après");
        inner.setAttribute("aria-valuemin", "0");
        inner.setAttribute("aria-valuemax", "100");

        applyPosition(50);

        inner.addEventListener("pointerdown", startDrag);
        divider.addEventListener("pointerdown", startDrag);

        window.addEventListener("pointermove", moveDrag, { passive: false });
        window.addEventListener("pointerup", stopDrag);
        window.addEventListener("pointercancel", stopDrag);

        inner.addEventListener("click", (event) => {
            applyPosition(getPositionFromEvent(event));
        });

        inner.addEventListener("keydown", (event) => {
            if (event.key === "ArrowLeft") {
                event.preventDefault();
                applyPosition(currentPosition - 5);
            }

            if (event.key === "ArrowRight") {
                event.preventDefault();
                applyPosition(currentPosition + 5);
            }

            if (event.key === "Home") {
                event.preventDefault();
                applyPosition(2);
            }

            if (event.key === "End") {
                event.preventDefault();
                applyPosition(98);
            }
        });
    });
});
