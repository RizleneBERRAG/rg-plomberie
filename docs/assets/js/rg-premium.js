(function () {
    "use strict";

    document.documentElement.classList.add("js");

    var reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    var header = document.querySelector("[data-header]");
    var nav = document.querySelector("[data-nav]");
    var navToggle = document.querySelector("[data-nav-toggle]");

    function updateHeader() {
        if (header) {
            header.classList.toggle("is-scrolled", window.scrollY > 12);
        }
    }

    updateHeader();
    window.addEventListener("scroll", updateHeader, { passive: true });

    function closeNavigation() {
        if (!nav || !navToggle) {
            return;
        }
        nav.classList.remove("is-open");
        navToggle.setAttribute("aria-expanded", "false");
        document.body.classList.remove("nav-open");
        var label = navToggle.querySelector(".sr-only");
        if (label) {
            label.textContent = "Ouvrir le menu";
        }
    }

    if (nav && navToggle) {
        navToggle.addEventListener("click", function () {
            var open = navToggle.getAttribute("aria-expanded") === "true";
            nav.classList.toggle("is-open", !open);
            navToggle.setAttribute("aria-expanded", String(!open));
            document.body.classList.toggle("nav-open", !open);
            var label = navToggle.querySelector(".sr-only");
            if (label) {
                label.textContent = open ? "Ouvrir le menu" : "Fermer le menu";
            }
        });

        nav.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", closeNavigation);
        });

        window.addEventListener("resize", function () {
            if (window.innerWidth > 920) {
                closeNavigation();
            }
        });
    }

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            closeNavigation();
        }
    });

    var currentPath = window.location.pathname.replace(/index\.html$/, "").replace(/\/+$/, "/");
    document.querySelectorAll("[data-nav-key]").forEach(function (link) {
        var key = link.getAttribute("data-nav-key");
        var linkPath = new URL(link.href, window.location.href).pathname.replace(/index\.html$/, "").replace(/\/+$/, "/");
        var active = currentPath === linkPath;
        if (key === "prestations" && currentPath.indexOf("/prestations/") !== -1) {
            active = true;
        }
        if (active) {
            link.setAttribute("aria-current", "page");
        } else {
            link.removeAttribute("aria-current");
        }
    });

    var revealItems = Array.prototype.slice.call(document.querySelectorAll("[data-reveal]"));
    if (reducedMotion || !("IntersectionObserver" in window)) {
        revealItems.forEach(function (item) {
            item.classList.add("is-visible");
        });
    } else {
        var revealObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: "0px 0px -8% 0px",
            threshold: 0.08
        });
        revealItems.forEach(function (item) {
            revealObserver.observe(item);
        });
    }

    document.querySelectorAll("[data-compare]").forEach(function (compare) {
        var range = compare.querySelector("[data-compare-range]");
        var animationFrame = null;

        if (!range) {
            return;
        }

        function setPosition(value) {
            var safeValue = Math.max(0, Math.min(100, Number(value)));
            compare.style.setProperty("--position", safeValue + "%");
            range.value = String(safeValue);
        }

        function animatePosition(target) {
            if (reducedMotion) {
                setPosition(target);
                return;
            }

            if (animationFrame) {
                window.cancelAnimationFrame(animationFrame);
            }

            var start = Number(range.value);
            var distance = target - start;
            var startedAt = performance.now();
            var duration = 520;

            function frame(now) {
                var progress = Math.min(1, (now - startedAt) / duration);
                var eased = 1 - Math.pow(1 - progress, 3);
                setPosition(start + distance * eased);
                if (progress < 1) {
                    animationFrame = window.requestAnimationFrame(frame);
                }
            }

            animationFrame = window.requestAnimationFrame(frame);
        }

        range.addEventListener("input", function () {
            if (animationFrame) {
                window.cancelAnimationFrame(animationFrame);
            }
            setPosition(range.value);
        });

        var section = compare.closest("section");
        if (section) {
            section.querySelectorAll("[data-compare-set]").forEach(function (button) {
                button.addEventListener("click", function () {
                    animatePosition(Number(button.getAttribute("data-compare-set")));
                    range.focus({ preventScroll: true });
                });
            });
        }

        setPosition(range.value);
    });

    var lightbox = document.querySelector("[data-lightbox]");
    var lightboxImage = lightbox ? lightbox.querySelector("[data-lightbox-image]") : null;
    var lightboxCaption = lightbox ? lightbox.querySelector("[data-lightbox-caption]") : null;
    var lightboxClose = lightbox ? lightbox.querySelector("[data-lightbox-close]") : null;

    if (lightbox && lightboxImage && typeof lightbox.showModal === "function") {
        document.querySelectorAll("[data-lightbox-trigger]").forEach(function (trigger) {
            trigger.addEventListener("click", function () {
                var source = trigger.querySelector("img");
                if (!source) {
                    return;
                }
                lightboxImage.src = source.currentSrc || source.src;
                lightboxImage.alt = source.alt;
                lightboxCaption.textContent = trigger.getAttribute("data-caption") || source.alt;
                lightbox.showModal();
            });
        });

        if (lightboxClose) {
            lightboxClose.addEventListener("click", function () {
                lightbox.close();
            });
        }

        lightbox.addEventListener("click", function (event) {
            if (event.target === lightbox) {
                lightbox.close();
            }
        });

        lightbox.addEventListener("close", function () {
            lightboxImage.removeAttribute("src");
        });
    }

    function copyText(text, button) {
        function confirmCopy() {
            var previous = button.textContent;
            button.textContent = "Message copié";
            window.setTimeout(function () {
                button.textContent = previous;
            }, 1800);
        }

        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(confirmCopy);
            return;
        }

        var helper = document.createElement("textarea");
        helper.value = text;
        helper.setAttribute("readonly", "");
        helper.style.position = "fixed";
        helper.style.opacity = "0";
        document.body.appendChild(helper);
        helper.select();
        document.execCommand("copy");
        helper.remove();
        confirmCopy();
    }

    document.querySelectorAll("form[data-static-contact]").forEach(function (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();

            if (!form.reportValidity()) {
                return;
            }

            var data = new FormData(form);
            if (String(data.get("website") || "").trim() !== "") {
                return;
            }

            var serviceSelect = form.querySelector("[name='service']");
            var service = serviceSelect.options[serviceSelect.selectedIndex].text;
            var message = [
                "Bonjour RG Plomberie,",
                "",
                "Je suis " + data.get("name") + " et je vous contacte pour : " + service + ".",
                "Ville : " + data.get("city"),
                "Téléphone : " + data.get("phone"),
                data.get("email") ? "E-mail : " + data.get("email") : "",
                "",
                "Ma demande :",
                data.get("message")
            ].filter(Boolean).join("\n");

            var result = form.querySelector("[data-contact-result]");
            if (!result) {
                return;
            }

            result.innerHTML = "";
            result.hidden = false;

            var title = document.createElement("h3");
            title.textContent = "Votre message est prêt.";
            var explanation = document.createElement("p");
            explanation.textContent = "La version statique du site ne transmet aucune donnée à un serveur. Envoyez ce texte par SMS ou copiez-le avant d’appeler.";
            var preview = document.createElement("pre");
            preview.textContent = message;
            var actions = document.createElement("div");
            actions.className = "static-result-actions";

            var sms = document.createElement("a");
            sms.className = "button button--primary";
            sms.href = "sms:+33627997646?body=" + encodeURIComponent(message);
            sms.textContent = "Envoyer par SMS";

            var copy = document.createElement("button");
            copy.type = "button";
            copy.className = "button button--outline";
            copy.textContent = "Copier le message";
            copy.addEventListener("click", function () {
                copyText(message, copy);
            });

            actions.appendChild(sms);
            actions.appendChild(copy);
            result.appendChild(title);
            result.appendChild(explanation);
            result.appendChild(preview);
            result.appendChild(actions);
            result.scrollIntoView({ behavior: reducedMotion ? "auto" : "smooth", block: "nearest" });
        });
    });
}());
