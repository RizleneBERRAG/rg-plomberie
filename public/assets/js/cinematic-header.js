(() => {
    const initHeader = () => {
        const body = document.body;
        const html = document.documentElement;

        const preloader = document.getElementById("sitePreloader");
        const header = document.querySelector("[data-header], .site-header");
        const toggle = document.querySelector("[data-menu-toggle], .menu-toggle");
        const mobileMenu = document.querySelector("[data-mobile-menu], .mobile-menu");
        const closeButtons = document.querySelectorAll("[data-menu-close]");

        const hidePreloader = () => {
            if (!preloader) return;

            preloader.classList.add("is-hidden");

            setTimeout(() => {
                if (preloader.parentNode) {
                    preloader.remove();
                }
            }, 850);
        };

        window.addEventListener("load", () => {
            setTimeout(hidePreloader, 700);
        });

        setTimeout(hidePreloader, 2200);

        const updateHeader = () => {
            if (!header) return;
            header.classList.toggle("is-scrolled", window.scrollY > 40);
        };

        updateHeader();

        window.addEventListener("scroll", updateHeader, {
            passive: true
        });

        const closeMenu = () => {
            body.classList.remove("menu-open");
            html.classList.remove("menu-open");

            if (mobileMenu) {
                mobileMenu.classList.remove("is-open");
                mobileMenu.setAttribute("aria-hidden", "true");
            }

            if (toggle) {
                toggle.classList.remove("is-active");
                toggle.setAttribute("aria-expanded", "false");
                toggle.setAttribute("aria-label", "Ouvrir le menu");
            }
        };

        const openMenu = () => {
            body.classList.add("menu-open");
            html.classList.add("menu-open");

            if (mobileMenu) {
                mobileMenu.classList.add("is-open");
                mobileMenu.setAttribute("aria-hidden", "false");
            }

            if (toggle) {
                toggle.classList.add("is-active");
                toggle.setAttribute("aria-expanded", "true");
                toggle.setAttribute("aria-label", "Fermer le menu");
            }
        };

        const toggleMenu = () => {
            if (body.classList.contains("menu-open")) {
                closeMenu();
            } else {
                openMenu();
            }
        };

        if (toggle) {
            toggle.setAttribute("type", "button");
            toggle.setAttribute("aria-expanded", "false");
            toggle.setAttribute("aria-label", "Ouvrir le menu");
        }

        if (mobileMenu) {
            mobileMenu.setAttribute("aria-hidden", "true");
        }

        document.addEventListener("click", (event) => {
            const clickedToggle = event.target.closest("[data-menu-toggle], .menu-toggle");

            if (!clickedToggle) return;

            event.preventDefault();
            event.stopPropagation();

            toggleMenu();
        });

        closeButtons.forEach((button) => {
            button.addEventListener("click", (event) => {
                event.preventDefault();
                event.stopPropagation();
                closeMenu();
            });
        });

        if (mobileMenu) {
            mobileMenu.querySelectorAll("a").forEach((link) => {
                link.addEventListener("click", closeMenu);
            });
        }

        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape") {
                closeMenu();
            }
        });

        window.addEventListener("resize", () => {
            if (window.innerWidth > 1180) {
                closeMenu();
            }
        });
    };

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initHeader);
    } else {
        initHeader();
    }
})();
