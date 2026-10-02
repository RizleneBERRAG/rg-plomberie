(function () {
    "use strict";

    document.documentElement.classList.add("js");

    var phone = "+33627997646";
    var phoneLabel = "06 27 99 76 46";
    var reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    // Sur ordinateur, on affiche le message à copier : l'envoi de SMS se fait depuis un téléphone.
    var isDesktop = window.matchMedia("(hover: hover) and (pointer: fine)").matches;

    /* En-tête : barre pleine au défilement, retirée en descendant, filet de lecture */

    var header = document.querySelector("[data-top]");
    var lastY = window.scrollY;
    var ticking = false;

    function isMenuOpen() {
        return document.body.classList.contains("menu-open");
    }

    function onScroll() {
        var y = window.scrollY;
        var max = document.documentElement.scrollHeight - window.innerHeight;
        ticking = false;
        header.classList.toggle("is-solid", y > 12);
        header.style.setProperty("--read", max > 0 ? Math.min(1, y / max).toFixed(4) : "0");
        if (!isMenuOpen() && !header.classList.contains("is-mega")) {
            // Il se retire après le haut de page quand on descend, revient dès qu'on remonte.
            if (y > lastY + 4 && y > 320) {
                header.classList.add("is-hidden");
            } else if (y < lastY - 4 || y <= 320) {
                header.classList.remove("is-hidden");
            }
        }
        lastY = y;
    }

    if (header) {
        onScroll();
        window.addEventListener("scroll", function () {
            if (!ticking) {
                ticking = true;
                window.requestAnimationFrame(onScroll);
            }
        }, { passive: true });
        window.addEventListener("resize", onScroll);
        header.addEventListener("focusin", function () {
            header.classList.remove("is-hidden");
        });
    }

    /* Bandeau : ouvert ou fermé en ce moment, d'après les horaires de la fiche (heure de Paris) */

    var openStatuses = Array.prototype.slice.call(document.querySelectorAll("[data-open-status]"));
    if (openStatuses.length && window.Intl) {
        // Minutes depuis minuit : lun. – jeu. 7 h 30 – 19 h 30, ven. 7 h 30 – 18 h, sam. 8 h – 18 h.
        var openHours = { 1: [450, 1170], 2: [450, 1170], 3: [450, 1170], 4: [450, 1170], 5: [450, 1080], 6: [480, 1080] };
        var dayNames = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
        var dayIndex = { Sun: 0, Mon: 1, Tue: 2, Wed: 3, Thu: 4, Fri: 5, Sat: 6 };
        var clock = new Intl.DateTimeFormat("en-GB", { timeZone: "Europe/Paris", weekday: "short", hour: "2-digit", minute: "2-digit", hourCycle: "h23" });
        var hourLabel = function (minutes) {
            var h = Math.floor(minutes / 60);
            var m = minutes % 60;
            return h + " h" + (m ? " " + (m < 10 ? "0" : "") + m : "");
        };
        var updateStatus = function () {
            var parts = {};
            clock.formatToParts(new Date()).forEach(function (part) {
                parts[part.type] = part.value;
            });
            var day = dayIndex[parts.weekday];
            var now = Number(parts.hour) * 60 + Number(parts.minute);
            var today = openHours[day];
            var isOpen = Boolean(today && now >= today[0] && now < today[1]);
            var text = "";
            if (isOpen) {
                text = "Ouvert · jusqu’à " + hourLabel(today[1]);
            } else {
                for (var i = 0; i < 8; i += 1) {
                    var next = (day + i) % 7;
                    var slot = openHours[next];
                    if (!slot || (i === 0 && now >= slot[0])) {
                        continue;
                    }
                    text = "Fermé · réouvre " + (i === 0 ? "aujourd’hui" : i === 1 ? "demain" : dayNames[next]) + " à " + hourLabel(slot[0]);
                    break;
                }
            }
            openStatuses.forEach(function (status) {
                status.classList.toggle("is-open", isOpen);
                status.classList.toggle("is-closed", !isOpen);
                status.querySelector("[data-open-text]").textContent = text;
            });

        };
        updateStatus();
        window.setInterval(updateStatus, 60000);
    }

    /* Panneau « Prestations » : au survol, ou au clic sur la flèche */

    var mega = document.querySelector("[data-mega]");
    var megaToggle = document.querySelector("[data-mega-toggle]");
    var megaTimer = 0;

    // Les photos du panneau ne se chargent qu'à sa première ouverture.
    function loadMegaPhotos() {
        if (!mega || mega.hasAttribute("data-loaded")) {
            return;
        }
        mega.setAttribute("data-loaded", "");
        mega.querySelectorAll("img[data-src]").forEach(function (img) {
            img.addEventListener("load", function () {
                img.classList.add("is-loaded");
            }, { once: true });
            img.src = img.getAttribute("data-src");
            img.removeAttribute("data-src");
        });
    }

    function setMega(open) {
        window.clearTimeout(megaTimer);
        if (open) {
            loadMegaPhotos();
        }
        header.classList.toggle("is-mega", open);
        megaToggle.setAttribute("aria-expanded", String(open));
        if (open) {
            header.classList.remove("is-hidden");
        }
    }

    if (header && mega && megaToggle) {
        var hoverable = window.matchMedia("(hover: hover)");
        mega.addEventListener("mouseenter", function () {
            loadMegaPhotos();
            if (hoverable.matches) {
                window.clearTimeout(megaTimer);
                megaTimer = window.setTimeout(function () {
                    setMega(true);
                }, 90);
            }
        });
        mega.addEventListener("mouseleave", function () {
            if (hoverable.matches) {
                window.clearTimeout(megaTimer);
                megaTimer = window.setTimeout(function () {
                    setMega(false);
                }, 220);
            }
        });
        megaToggle.addEventListener("click", function () {
            setMega(megaToggle.getAttribute("aria-expanded") !== "true");
        });
        mega.addEventListener("focusout", function (event) {
            if (!mega.contains(event.relatedTarget)) {
                setMega(false);
            }
        });
        document.addEventListener("keydown", function (event) {
            if (event.key === "Escape" && header.classList.contains("is-mega")) {
                setMega(false);
                megaToggle.focus();
            }
        });
    }

    /* Menu plein écran (tablette et téléphone) */

    var burgers = Array.prototype.slice.call(document.querySelectorAll("[data-burger]"));
    var menu = document.querySelector("[data-menu]");

    function setMenu(open, focusTarget) {
        if (!menu || open === isMenuOpen()) {
            return;
        }
        burgers.forEach(function (button) {
            var label = button.querySelector(".burger__label");
            button.setAttribute("aria-expanded", String(open));
            button.querySelector(".sr-only").textContent = open ? "Fermer le menu" : "Ouvrir le menu";
            if (label) {
                label.textContent = open ? "Fermer" : "Menu";
            }
        });
        document.body.classList.toggle("menu-open", open);
        if (open) {
            menu.scrollTop = 0;
            header.classList.remove("is-hidden");
        }
        if (focusTarget) {
            focusTarget.focus({ preventScroll: true });
        }
    }

    if (burgers.length && menu) {
        burgers.forEach(function (button) {
            button.addEventListener("click", function (event) {
                // Ouvert au clavier, le menu reçoit le focus sur son premier lien.
                var byKeyboard = event.detail === 0;
                setMenu(!isMenuOpen(), byKeyboard && !isMenuOpen() ? menu.querySelector("a") : null);
            });
        });
        menu.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                setMenu(false);
            });
        });
        document.addEventListener("keydown", function (event) {
            if (!isMenuOpen()) {
                return;
            }
            if (event.key === "Escape") {
                setMenu(false, burgers[0]);
                return;
            }
            // Tant que le menu est ouvert, la tabulation reste entre l'en-tête et le menu.
            if (event.key === "Tab") {
                var stops = Array.prototype.slice.call(header.querySelectorAll(".logo, .top__call, [data-burger], [data-menu] a"));
                var index = stops.indexOf(document.activeElement);
                var next = index === -1 ? 0 : (index + (event.shiftKey ? -1 : 1) + stops.length) % stops.length;
                event.preventDefault();
                stops[next].focus();
            }
        });
        // Repassé en grand écran, le menu plein écran se referme.
        window.matchMedia("(min-width: 1081px)").addEventListener("change", function (query) {
            if (query.matches) {
                setMenu(false);
            }
        });
    }

    /* Page en cours dans le menu */

    var here = location.pathname.replace(/index\.html$/, "");
    document.querySelectorAll("[data-nav-key]").forEach(function (link) {
        var target = new URL(link.href, location.href).pathname.replace(/index\.html$/, "");
        var active = here === target || (link.getAttribute("data-nav-key") === "prestations" && here.indexOf("/prestations/") !== -1);
        if (active) {
            link.setAttribute("aria-current", "page");
        }
    });

    /* Un seul trait rouge glisse d'un lien du menu à l'autre, puis revient sur la page en cours */

    var glide = document.querySelector("[data-glide]");
    var glideList = document.querySelector("[data-glide-list]");
    if (glide && glideList) {
        var glideLinks = Array.prototype.slice.call(glideList.querySelectorAll(".nav__link"));
        var glideHome = glideList.querySelector('.nav__link[aria-current="page"]');
        var glideTarget = null;
        var moveGlide = function (link) {
            if (!link || !link.offsetWidth) {
                glide.style.opacity = "0";
                return;
            }
            var box = link.getBoundingClientRect();
            var origin = glide.closest("[data-top]").getBoundingClientRect();
            glide.style.width = box.width + "px";
            glide.style.transform = "translateX(" + (box.left - origin.left) + "px)";
            glide.style.opacity = "1";
        };
        // Recalé sans animation (polices chargées, fenêtre redimensionnée) sur le lien visé ou la page en cours.
        var placeGlide = function () {
            glide.style.transition = "none";
            moveGlide(glideTarget || glideHome);
            void glide.offsetWidth;
            glide.style.transition = "";
        };
        glideLinks.forEach(function (link) {
            link.addEventListener("mouseenter", function () {
                glideTarget = link;
                moveGlide(link);
            });
            link.addEventListener("focus", function () {
                glideTarget = link;
                moveGlide(link);
            });
        });
        glideList.addEventListener("mouseleave", function () {
            glideTarget = null;
            moveGlide(glideHome);
        });
        // Dans le panneau Prestations, le trait reste sous « Prestations ».
        glideList.addEventListener("mouseover", function (event) {
            var item = event.target.closest(".nav__mega");
            if (item && glideTarget !== item.querySelector(".nav__link")) {
                glideTarget = item.querySelector(".nav__link");
                moveGlide(glideTarget);
            }
        });
        window.addEventListener("resize", placeGlide);
        placeGlide();
        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.then(placeGlide);
        }
    }

    /* Apparition au défilement */

    var reveal = Array.prototype.slice.call(document.querySelectorAll("[data-reveal]"));
    if (reducedMotion || !("IntersectionObserver" in window)) {
        reveal.forEach(function (item) {
            item.classList.add("is-visible");
        });
    } else {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                }
            });
        }, { rootMargin: "0px 0px -6% 0px", threshold: 0.06 });
        reveal.forEach(function (item) {
            observer.observe(item);
        });
    }

    /* Comparateur avant / après : glisser au doigt ou à la souris, flèches au clavier.
       Options : data-compare-hover (à la souris, la séparation suit le pointeur sans cliquer),
       data-compare-peek (petit balayage quand il arrive à l'écran), data-compare-intro (accueil). */

    var easeInOut = function (t) {
        return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
    };
    var finePointer = window.matchMedia("(hover: hover) and (pointer: fine)");

    var setupCompare = function (compare) {
        var range = compare.querySelector("[data-compare-range]");
        var pointer = null;
        var frame = 0;
        var rest = 50;
        if (!range || compare.compareApi) {
            return compare.compareApi;
        }

        function set(value) {
            var safe = Math.max(0, Math.min(100, Number(value)));
            compare.style.setProperty("--position", safe + "%");
            range.value = String(safe);
        }

        function stop() {
            window.cancelAnimationFrame(frame);
            frame = 0;
        }

        // Déplacement fluide de la séparation d'un point à un autre (ou par étapes).
        function animate(stops, duration) {
            stop();
            if (reducedMotion) {
                set(stops[stops.length - 1]);
                return;
            }
            var path = [Number(range.value)].concat(stops);
            var began = 0;
            var step = function (now) {
                began = began || now;
                var progress = Math.min(1, (now - began) / duration) * (path.length - 1);
                var index = Math.min(path.length - 2, Math.floor(progress));
                var local = progress - index;
                set(path[index] + (path[index + 1] - path[index]) * easeInOut(local));
                frame = progress < path.length - 1 ? window.requestAnimationFrame(step) : 0;
            };
            frame = window.requestAnimationFrame(step);
        }

        function fromPointer(event) {
            var box = compare.getBoundingClientRect();
            if (box.width) {
                stop();
                set(((event.clientX - box.left) / box.width) * 100);
            }
        }

        compare.addEventListener("pointerdown", function (event) {
            if (event.target.closest("button")) {
                return;
            }
            if (event.pointerType === "mouse" && event.button !== 0) {
                return;
            }
            pointer = { id: event.pointerId, x: event.clientX, y: event.clientY, moved: false, cancelled: false };
            if (event.pointerType !== "touch") {
                fromPointer(event);
            }
        });

        compare.addEventListener("pointermove", function (event) {
            // À la souris, avec data-compare-hover, la séparation suit le pointeur sans cliquer.
            if (!pointer && event.pointerType === "mouse" && compare.hasAttribute("data-compare-hover") && finePointer.matches) {
                fromPointer(event);
                return;
            }
            if (!pointer || pointer.id !== event.pointerId || pointer.cancelled) {
                return;
            }
            var dx = event.clientX - pointer.x;
            var dy = event.clientY - pointer.y;
            // Au doigt, un geste vertical laisse défiler la page.
            if (event.pointerType === "touch" && !pointer.moved) {
                if (Math.abs(dy) > 7 && Math.abs(dy) > Math.abs(dx)) {
                    pointer.cancelled = true;
                    return;
                }
                if (Math.abs(dx) < 5) {
                    return;
                }
            }
            pointer.moved = true;
            fromPointer(event);
        });

        compare.addEventListener("pointerleave", function (event) {
            // La souris repart : la séparation revient en douceur à sa position de repos.
            if (event.pointerType === "mouse" && compare.hasAttribute("data-compare-hover") && finePointer.matches && !pointer) {
                animate([rest], 650);
            }
        });

        function end(event) {
            if (pointer && pointer.id === event.pointerId && !pointer.moved && !pointer.cancelled) {
                fromPointer(event);
            }
            pointer = null;
        }

        compare.addEventListener("pointerup", end);
        compare.addEventListener("pointercancel", function () {
            pointer = null;
        });
        range.addEventListener("input", function () {
            stop();
            set(range.value);
        });
        set(range.value);

        compare.compareApi = {
            set: set,
            animate: animate,
            rest: function (value) {
                rest = value;
            }
        };
        return compare.compareApi;
    };

    document.querySelectorAll("[data-compare]").forEach(function (compare) {
        var api = setupCompare(compare);
        var interrupted = false;
        compare.addEventListener("pointerdown", function () {
            interrupted = true;
        });

        // Sur l'accueil, la poignée fait un aller-retour une fois dévoilée.
        if (compare.hasAttribute("data-compare-intro") && api) {
            window.setTimeout(function () {
                if (!interrupted) {
                    api.animate([32, 70, 52], 2400);
                }
            }, 1700);
        }

        // Petit balayage la première fois que le comparateur arrive à l'écran.
        if (compare.hasAttribute("data-compare-peek") && api && !reducedMotion && "IntersectionObserver" in window) {
            var peek = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        peek.disconnect();
                        window.setTimeout(function () {
                            if (!interrupted) {
                                api.animate([22, 78, 50], 2200);
                            }
                        }, 250);
                    }
                });
            }, { threshold: 0.6 });
            peek.observe(compare);
        }
    });

    /* Réalisations : boutons Avant / 50-50 / Après sous chaque comparateur */

    document.querySelectorAll("[data-ba-card]").forEach(function (card) {
        var compare = card.querySelector("[data-compare]");
        var buttons = Array.prototype.slice.call(card.querySelectorAll("[data-compare-show]"));
        buttons.forEach(function (button) {
            button.addEventListener("click", function () {
                var value = Number(button.getAttribute("data-compare-show"));
                if (compare && compare.compareApi) {
                    compare.compareApi.rest(value);
                    compare.compareApi.animate([value], 700);
                }
                buttons.forEach(function (other) {
                    other.setAttribute("aria-pressed", String(other === button));
                });
            });
        });
    });

    /* Réalisations : filtres par métier */

    var baFilters = Array.prototype.slice.call(document.querySelectorAll("[data-ba-filter]"));
    if (baFilters.length) {
        var baCards = Array.prototype.slice.call(document.querySelectorAll("[data-ba-card]"));
        baFilters.forEach(function (button) {
            button.addEventListener("click", function () {
                var cat = button.getAttribute("data-ba-filter");
                baFilters.forEach(function (other) {
                    other.setAttribute("aria-pressed", String(other === button));
                });
                baCards.forEach(function (card, i) {
                    var show = cat === "all" || card.getAttribute("data-cat") === cat;
                    card.hidden = !show;
                    card.classList.remove("is-in");
                    if (show) {
                        card.style.setProperty("--d", i * 70 + "ms");
                        void card.offsetWidth;
                        card.classList.add("is-in");
                    }
                });
            });
        });
    }

    /* Réalisations : visionneuse plein écran (avant / après et photos), flèches et clavier */

    var lb = document.querySelector("[data-lb]");
    if (lb) {
        var lbStage = lb.querySelector("[data-lb-stage]");
        var lbTitle = lb.querySelector("[data-lb-title-out]");
        var lbCount = lb.querySelector("[data-lb-count]");
        var lbClose = lb.querySelector("[data-lb-close]");
        var lbItems = [];
        var lbIndex = 0;
        var lbReturn = null;

        var visibleItems = function () {
            return Array.prototype.slice.call(document.querySelectorAll("[data-lb-item]")).filter(function (item) {
                return !item.closest("[hidden]");
            });
        };

        var renderLb = function () {
            var source = lbItems[lbIndex];
            var clone;
            lbStage.innerHTML = "";
            if (source.hasAttribute("data-compare")) {
                clone = source.cloneNode(true);
                clone.removeAttribute("data-compare-peek");
                clone.removeAttribute("data-lb-item");
                clone.compareApi = null;
                clone.style.setProperty("--position", "50%");
                Array.prototype.slice.call(clone.querySelectorAll("[data-lb-open]")).forEach(function (button) {
                    button.remove();
                });
                clone.querySelector("[data-compare-range]").value = "50";
                clone.classList.add("lb__compare");
                lbStage.appendChild(clone);
                var api = setupCompare(clone);
                if (api) {
                    api.animate([30, 70, 50], 1800);
                }
            } else {
                var img = source.querySelector("img").cloneNode(true);
                img.removeAttribute("loading");
                img.className = "lb__photo";
                lbStage.appendChild(img);
            }
            lbTitle.textContent = source.getAttribute("data-lb-title") || "";
            lbCount.textContent = lbIndex + 1 + " / " + lbItems.length;
            lb.classList.remove("is-swap");
            void lb.offsetWidth;
            lb.classList.add("is-swap");
        };

        var openLb = function (item) {
            lbItems = visibleItems();
            lbIndex = Math.max(0, lbItems.indexOf(item));
            lbReturn = document.activeElement;
            lb.hidden = false;
            document.body.classList.add("lb-open");
            renderLb();
            window.requestAnimationFrame(function () {
                lb.classList.add("is-open");
            });
            lbClose.focus({ preventScroll: true });
        };

        var closeLb = function () {
            lb.classList.remove("is-open");
            document.body.classList.remove("lb-open");
            window.setTimeout(function () {
                lb.hidden = true;
                lbStage.innerHTML = "";
            }, reducedMotion ? 0 : 300);
            if (lbReturn) {
                lbReturn.focus({ preventScroll: true });
            }
        };

        var stepLb = function (delta) {
            lbIndex = (lbIndex + delta + lbItems.length) % lbItems.length;
            renderLb();
        };

        document.querySelectorAll("[data-lb-open]").forEach(function (button) {
            button.addEventListener("click", function (event) {
                event.stopPropagation();
                openLb(button.closest("[data-lb-item]"));
            });
        });
        // Les photos de chantier s'ouvrent aussi d'un simple clic sur l'image.
        document.querySelectorAll("figure[data-lb-item]").forEach(function (figure) {
            figure.addEventListener("click", function () {
                openLb(figure);
            });
        });
        lb.querySelector("[data-lb-prev]").addEventListener("click", function () {
            stepLb(-1);
        });
        lb.querySelector("[data-lb-next]").addEventListener("click", function () {
            stepLb(1);
        });
        lbClose.addEventListener("click", closeLb);
        lb.addEventListener("click", function (event) {
            if (event.target === lb || event.target === lbStage) {
                closeLb();
            }
        });
        document.addEventListener("keydown", function (event) {
            if (lb.hidden) {
                return;
            }
            if (event.key === "Escape") {
                closeLb();
            } else if (event.key === "ArrowRight" && !event.target.matches("[data-compare-range]")) {
                stepLb(1);
            } else if (event.key === "ArrowLeft" && !event.target.matches("[data-compare-range]")) {
                stepLb(-1);
            }
        });
    }

    /* Prestations en panneaux : le panneau survolé ou visé au clavier s'ouvre */

    document.querySelectorAll("[data-panels]").forEach(function (group) {
        var panels = Array.prototype.slice.call(group.querySelectorAll("[data-panel]"));
        var wide = window.matchMedia("(min-width: 921px)");
        var touch = window.matchMedia("(hover: none)");
        var thumb = group.parentNode.querySelector("[data-panels-thumb]");

        function open(panel) {
            panels.forEach(function (item) {
                item.classList.toggle("is-open", item === panel);
            });
        }

        panels.forEach(function (panel) {
            panel.addEventListener("mouseenter", function () {
                if (wide.matches) {
                    open(panel);
                }
            });
            panel.addEventListener("focus", function () {
                open(panel);
            });
            // Sur une tablette en paysage, un premier toucher ouvre le panneau, le second suit le lien.
            panel.addEventListener("click", function (event) {
                if (wide.matches && touch.matches && !panel.classList.contains("is-open")) {
                    event.preventDefault();
                    open(panel);
                }
            });
        });

        // Au téléphone, un filet rouge montre où l'on en est dans le carrousel.
        if (thumb) {
            var update = function () {
                var total = group.scrollWidth || 1;
                thumb.style.width = (group.clientWidth / total) * 100 + "%";
                thumb.style.left = (group.scrollLeft / total) * 100 + "%";
            };
            group.addEventListener("scroll", update, { passive: true });
            window.addEventListener("resize", update);
            update();
        }
    });

    /* Vitrine des réalisations : un chantier à la fois, la suite vient d'elle-même */

    document.querySelectorAll("[data-vitrine]").forEach(function (vitrine) {
        var slides = Array.prototype.slice.call(vitrine.querySelectorAll("[data-vitrine-slide]"));
        var items = Array.prototype.slice.call(vitrine.querySelectorAll("[data-vitrine-item]"));
        var count = vitrine.querySelector("[data-vitrine-count]");
        var current = 0;
        var leaveTimer = 0;

        function show(index) {
            var next = (index + items.length) % items.length;
            var previous = slides[current];
            if (next === current) {
                return;
            }
            window.clearTimeout(leaveTimer);
            slides.forEach(function (slide) {
                slide.classList.remove("is-leaving");
            });
            // L'ancienne photo reste dessous le temps que la nouvelle la recouvre.
            previous.classList.remove("is-active");
            previous.classList.add("is-leaving");
            slides[next].classList.add("is-active");
            leaveTimer = window.setTimeout(function () {
                previous.classList.remove("is-leaving");
            }, 1000);
            items.forEach(function (item, i) {
                item.classList.toggle("is-active", i === next);
                item.setAttribute("aria-pressed", String(i === next));
            });
            slides.forEach(function (slide, i) {
                slide.setAttribute("aria-hidden", String(i !== next));
            });
            if (count) {
                count.textContent = "0" + (next + 1);
            }
            current = next;
        }

        slides.forEach(function (slide, i) {
            slide.setAttribute("aria-hidden", String(i !== 0));
        });
        items.forEach(function (item, i) {
            item.addEventListener("click", function () {
                show(i);
            });
        });
        vitrine.querySelector("[data-vitrine-prev]").addEventListener("click", function () {
            show(current - 1);
        });
        vitrine.querySelector("[data-vitrine-next]").addEventListener("click", function () {
            show(current + 1);
        });
        // Quand le filet rouge du chantier actif arrive au bout, on passe au suivant.
        vitrine.addEventListener("animationend", function (event) {
            if (event.animationName === "vitrine-progress") {
                show(current + 1);
            }
        });
        // Le défilement ne tourne que lorsque la vitrine est à l'écran.
        if ("IntersectionObserver" in window) {
            new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    vitrine.classList.toggle("is-playing", entry.isIntersecting);
                    // Les photos suivantes se chargent dès que la vitrine arrive, pour un balayage sans attente.
                    if (entry.isIntersecting) {
                        slides.forEach(function (slide) {
                            slide.loading = "eager";
                        });
                    }
                });
            }, { threshold: 0.4 }).observe(vitrine);
        }
    });

    /* Secteur : carte interactive. Survoler ou choisir une commune trace le trajet depuis
       Janneyrias, affiche la distance et prépare la demande par SMS pour cette commune. */

    var zoneMap = document.querySelector("[data-zone-map]");
    var zoneList = document.querySelector("[data-zone-list]");
    if (zoneMap && zoneList) {
        var picked = null;
        var hovered = null;
        var narrow = window.matchMedia("(max-width: 920px)");
        var zoneParts = Array.prototype.slice.call(document.querySelectorAll("[data-town], [data-route], [data-badge]"));
        var zoneButtons = Array.prototype.slice.call(zoneList.querySelectorAll("button[data-town]"));
        var zonePoints = Array.prototype.slice.call(zoneMap.querySelectorAll("[data-town]"));
        var zoneKicker = zoneMap.querySelector("[data-zone-kicker]");
        var zoneName = zoneMap.querySelector("[data-zone-name]");
        var zoneDist = zoneMap.querySelector("[data-zone-dist]");
        var zoneSms = zoneMap.querySelector("[data-zone-sms]");
        var zoneSmsLabel = zoneMap.querySelector("[data-zone-sms-label]");
        var shown = "";

        var townData = function (town) {
            var source = zoneList.querySelector('[data-town="' + town + '"]');
            return source ? { name: source.getAttribute("data-name"), km: source.getAttribute("data-km") } : null;
        };

        var renderZone = function () {
            var town = hovered || picked;
            var data = town ? townData(town) : null;
            zoneParts.forEach(function (part) {
                var key = part.getAttribute("data-town") || part.getAttribute("data-route") || part.getAttribute("data-badge");
                part.classList.toggle("is-hot", key === town);
                part.classList.toggle("is-picked", key === picked);
            });
            zoneButtons.forEach(function (button) {
                button.setAttribute("aria-pressed", String(button.getAttribute("data-town") === picked));
            });
            if (shown === (town || "")) {
                return;
            }
            shown = town || "";
            if (!data) {
                zoneKicker.textContent = "Depuis Janneyrias";
                zoneName.textContent = "Choisissez une commune";
                zoneDist.textContent = "Sur la carte ou dans la liste, pour voir la distance.";
                zoneSmsLabel.textContent = "Demande par SMS";
            } else if (town === "janneyrias") {
                zoneKicker.textContent = "Siège";
                zoneName.textContent = "Janneyrias";
                zoneDist.textContent = "Le point de départ de RG Plomberie.";
                zoneSmsLabel.textContent = "Demande par SMS";
            } else {
                zoneKicker.textContent = "Depuis Janneyrias";
                zoneName.textContent = data.name;
                zoneDist.textContent = data.km + " km à vol d’oiseau";
                zoneSmsLabel.textContent = "Demande pour " + data.name;
            }
        };

        var pick = function (town) {
            picked = town;
            renderZone();
            // Au téléphone, la carte est au-dessus de la liste : on la ramène à l'écran.
            if (narrow.matches && zoneList.contains(document.activeElement)) {
                var box = zoneMap.getBoundingClientRect();
                if (box.top < 0 || box.bottom > window.innerHeight) {
                    zoneMap.scrollIntoView({ behavior: reducedMotion ? "auto" : "smooth", block: "center" });
                }
            }
        };

        zoneButtons.concat(zonePoints).forEach(function (item) {
            var town = item.getAttribute("data-town");
            item.addEventListener("mouseenter", function () {
                hovered = town;
                renderZone();
            });
            item.addEventListener("mouseleave", function () {
                hovered = null;
                renderZone();
            });
            item.addEventListener("focus", function () {
                hovered = town;
                renderZone();
            });
            item.addEventListener("blur", function () {
                hovered = null;
                renderZone();
            });
            item.addEventListener("click", function () {
                pick(town);
            });
            // Les points de la carte se choisissent aussi au clavier.
            if (!zoneButtons.includes(item)) {
                item.addEventListener("keydown", function (event) {
                    if (event.key === "Enter" || event.key === " ") {
                        event.preventDefault();
                        pick(town);
                    }
                });
            }
        });

        // La demande par SMS part avec la commune déjà remplie.
        zoneSms.addEventListener("click", function () {
            var town = picked || hovered;
            var field = document.querySelector("[data-lead-form] [name='commune']");
            if (field && town && town !== "janneyrias") {
                field.value = townData(town).name;
                field.dispatchEvent(new Event("input", { bubbles: true }));
            }
        });
    }

    /* Dépannage : « Décrire par SMS » coche la panne dans la demande et y amène */

    document.querySelectorAll("[data-pick]").forEach(function (button) {
        button.addEventListener("click", function () {
            var target = document.getElementById("demande");
            var value = button.getAttribute("data-pick");
            var radio = target && target.querySelector('input[name="probleme"][value="' + (window.CSS && CSS.escape ? CSS.escape(value) : value) + '"]');
            if (!radio) {
                return;
            }
            radio.checked = true;
            radio.dispatchEvent(new Event("change", { bubbles: true }));
            target.scrollIntoView({ behavior: reducedMotion ? "auto" : "smooth", block: "start" });
            target.classList.remove("is-picked");
            void target.offsetWidth;
            target.classList.add("is-picked");
            window.setTimeout(function () {
                var town = target.querySelector("[name='commune']");
                if (town && !town.value) {
                    town.focus({ preventScroll: true });
                }
            }, reducedMotion ? 0 : 750);
        });
    });

    /* Dépannage : le trait des étapes se trace quand elles arrivent à l'écran */

    var timeline = document.querySelector("[data-timeline]");
    if (timeline) {
        if (reducedMotion || !("IntersectionObserver" in window)) {
            timeline.classList.add("is-on");
        } else {
            var timelineWatch = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        timeline.classList.add("is-on");
                        timelineWatch.disconnect();
                    }
                });
            }, { threshold: 0.4 });
            timelineWatch.observe(timeline);
        }
    }

    /* L'entreprise : la photo des camions s'ouvre jusqu'au plein écran au défilement */

    var reel = document.querySelector("[data-reel]");
    if (reel) {
        if (reducedMotion) {
            reel.style.setProperty("--p", "1");
        } else {
            var reelTicking = false;
            var updateReel = function () {
                var box = reel.getBoundingClientRect();
                var travel = box.height - window.innerHeight;
                var progress = travel > 0 ? Math.min(1, Math.max(0, -box.top / travel)) : 1;
                reelTicking = false;
                reel.style.setProperty("--p", progress.toFixed(3));
            };
            window.addEventListener("scroll", function () {
                if (!reelTicking) {
                    reelTicking = true;
                    window.requestAnimationFrame(updateReel);
                }
            }, { passive: true });
            window.addEventListener("resize", updateReel);
            updateReel();
        }
    }

    /* L'entreprise : les compteurs défilent quand ils arrivent à l'écran */

    var counters = document.querySelector("[data-counters]");
    if (counters) {
        var countItems = Array.prototype.slice.call(counters.querySelectorAll("[data-count], [data-count-since]"));
        countItems.forEach(function (item) {
            if (item.hasAttribute("data-count-since")) {
                var years = new Date().getFullYear() - Number(item.getAttribute("data-count-since"));
                item.setAttribute("data-count", String(years));
                item.textContent = String(years);
            }
        });
        var runCounters = function () {
            countItems.forEach(function (item) {
                var target = Number(item.getAttribute("data-count"));
                var decimals = Number(item.getAttribute("data-decimals") || 0);
                var began = 0;
                var step = function (now) {
                    began = began || now;
                    var t = Math.min(1, (now - began) / 1600);
                    var eased = 1 - Math.pow(1 - t, 3);
                    item.textContent = (target * eased).toFixed(decimals).replace(".", ",");
                    if (t < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            });
        };
        if (!reducedMotion && "IntersectionObserver" in window) {
            var counterWatch = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        counterWatch.disconnect();
                        runCounters();
                    }
                });
            }, { threshold: 0.5 });
            counterWatch.observe(counters);
        }
    }

    /* L'entreprise : l'engagement au centre de l'écran s'allume */

    var valuesBlock = document.querySelector("[data-values]");
    if (valuesBlock) {
        var valueItems = Array.prototype.slice.call(valuesBlock.querySelectorAll("[data-value]"));
        var valueCount = valuesBlock.querySelector("[data-values-count]");
        var lightValue = function (item) {
            valueItems.forEach(function (other) {
                other.classList.toggle("is-active", other === item);
            });
            if (valueCount) {
                valueCount.textContent = "0" + (Number(item.getAttribute("data-value")) + 1);
            }
        };
        if (valueItems.length) {
            lightValue(valueItems[0]);
        }
        if ("IntersectionObserver" in window) {
            var valueWatch = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        lightValue(entry.target);
                    }
                });
            }, { rootMargin: "-45% 0px -45% 0px" });
            valueItems.forEach(function (item) {
                valueWatch.observe(item);
            });
        }
    }

    /* Demande par SMS */

    function element(tag, className, text) {
        var node = document.createElement(tag);
        if (className) {
            node.className = className;
        }
        if (text) {
            node.textContent = text;
        }
        return node;
    }

    function copy(text, button) {
        function done() {
            button.textContent = "Message copié";
        }
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(done, function () {});
            return;
        }
        var helper = document.createElement("textarea");
        helper.value = text;
        document.body.appendChild(helper);
        helper.select();
        document.execCommand("copy");
        helper.remove();
        done();
    }

    document.querySelectorAll("[data-lead-form]").forEach(function (form) {
        var result = form.querySelector("[data-lead-result]");

        form.addEventListener("submit", function (event) {
            event.preventDefault();
            var data = new FormData(form);
            var problem = data.get("probleme");
            var town = String(data.get("commune") || "").trim();
            var firstName = String(data.get("prenom") || "").trim();
            result.innerHTML = "";

            if (!problem) {
                result.appendChild(element("p", "form__error", "Choisissez votre problème dans la liste."));
                form.querySelector("[name='probleme']").focus();
                return;
            }
            if (!town) {
                result.appendChild(element("p", "form__error", "Indiquez votre commune."));
                form.querySelector("[name='commune']").focus();
                return;
            }

            var message = [
                "Bonjour RG Plomberie,",
                "j'ai besoin d'une intervention pour " + problem + ", à " + town + ".",
                "Pouvez-vous me rappeler ?" + (firstName ? " " + firstName : ""),
                "(demande envoyée depuis le site)"
            ].join("\n");

            var box = element("div", "form__ok");
            if (isDesktop) {
                box.appendChild(element("strong", "", "Sur ordinateur, appelez le " + phoneLabel + "."));
                box.appendChild(element("p", "", "L’envoi par SMS se fait depuis un téléphone. Voici votre message, prêt à être envoyé :"));
                box.appendChild(element("pre", "", message));
                var button = element("button", "btn btn--outline", "Copier le message");
                button.type = "button";
                button.addEventListener("click", function () {
                    copy(message, button);
                });
                box.appendChild(button);
                result.appendChild(box);
                return;
            }

            box.appendChild(element("strong", "", "Votre application SMS s’ouvre…"));
            box.appendChild(element("p", "", "Appuyez sur Envoyer pour transmettre votre demande. Si rien ne s’ouvre, appelez le " + phoneLabel + "."));
            result.appendChild(box);
            window.location.href = "sms:" + phone + "?&body=" + encodeURIComponent(message);
        });
    });
}());
