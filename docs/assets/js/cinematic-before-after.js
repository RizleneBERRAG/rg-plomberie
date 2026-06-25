document.addEventListener("DOMContentLoaded", () => {
    const sliders = document.querySelectorAll("[data-cinematic-before-after]");

    if (!sliders.length) return;

    const clamp = (value, min, max) => {
        return Math.min(Math.max(value, min), max);
    };

    sliders.forEach((slider) => {
        const inner = slider.querySelector(".before-after-placeholder-inner");

        const afterLayer =
            slider.querySelector("[data-after-layer]") ||
            slider.querySelector(".before-after-placeholder-after");

        const divider =
            slider.querySelector("[data-ba-divider]") ||
            slider.querySelector(".before-after-divider");

        if (!inner || !afterLayer || !divider) return;

        let isDragging = false;
        let currentPosition = 50;

        const applyPosition = (position) => {
            currentPosition = clamp(position, 3, 97);

            inner.style.setProperty("--ba-position", `${currentPosition}%`);
            slider.style.setProperty("--ba-position", `${currentPosition}%`);

            afterLayer.style.setProperty(
                "clip-path",
                `inset(0 ${100 - currentPosition}% 0 0)`
            );

            divider.style.setProperty("left", `${currentPosition}%`);

            inner.setAttribute("aria-valuenow", Math.round(currentPosition));
        };

        const getPosition = (event) => {
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

            applyPosition(getPosition(event));

            if (inner.setPointerCapture && event.pointerId !== undefined) {
                try {
                    inner.setPointerCapture(event.pointerId);
                } catch (error) {
                    // Rien à faire.
                }
            }
        };

        const moveDrag = (event) => {
            if (!isDragging) return;

            event.preventDefault();
            applyPosition(getPosition(event));
        };

        const stopDrag = (event) => {
            if (!isDragging) return;

            isDragging = false;

            slider.classList.remove("is-dragging");
            inner.classList.remove("is-dragging");

            if (inner.releasePointerCapture && event.pointerId !== undefined) {
                try {
                    inner.releasePointerCapture(event.pointerId);
                } catch (error) {
                    // Rien à faire.
                }
            }
        };

        inner.setAttribute("role", "slider");
        inner.setAttribute("tabindex", "0");
        inner.setAttribute("aria-label", "Comparateur avant après");
        inner.setAttribute("aria-valuemin", "0");
        inner.setAttribute("aria-valuemax", "100");

        applyPosition(50);

        inner.addEventListener("pointerdown", startDrag);
        inner.addEventListener("pointermove", moveDrag);
        inner.addEventListener("pointerup", stopDrag);
        inner.addEventListener("pointercancel", stopDrag);
        inner.addEventListener("lostpointercapture", stopDrag);

        inner.addEventListener("click", (event) => {
            applyPosition(getPosition(event));
        });

        inner.addEventListener("keydown", (event) => {
            if (event.key === "ArrowLeft") {
                event.preventDefault();
                applyPosition(currentPosition - 6);
            }

            if (event.key === "ArrowRight") {
                event.preventDefault();
                applyPosition(currentPosition + 6);
            }

            if (event.key === "Home") {
                event.preventDefault();
                applyPosition(3);
            }

            if (event.key === "End") {
                event.preventDefault();
                applyPosition(97);
            }
        });
    });
});
