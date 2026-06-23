document.addEventListener("DOMContentLoaded", () => {
    const mapElement = document.getElementById("rgContactMap");

    if (!mapElement) return;

    const loadTrigger = mapElement.querySelector("[data-map-load]");

    let mapInitialized = false;
    let leafletPromise = null;

    const loadStylesheet = (href) => {
        return new Promise((resolve, reject) => {
            const existing = document.querySelector(`link[href="${href}"]`);

            if (existing) {
                resolve();
                return;
            }

            const link = document.createElement("link");
            link.rel = "stylesheet";
            link.href = href;

            link.onload = resolve;
            link.onerror = reject;

            document.head.appendChild(link);
        });
    };

    const loadScript = (src) => {
        return new Promise((resolve, reject) => {
            if (typeof L !== "undefined") {
                resolve();
                return;
            }

            const existing = document.querySelector(`script[src="${src}"]`);

            if (existing) {
                existing.addEventListener("load", resolve, { once: true });
                existing.addEventListener("error", reject, { once: true });
                return;
            }

            const script = document.createElement("script");
            script.src = src;
            script.async = true;
            script.defer = true;

            script.onload = resolve;
            script.onerror = reject;

            document.body.appendChild(script);
        });
    };

    const loadLeaflet = () => {
        if (leafletPromise) return leafletPromise;

        leafletPromise = Promise.all([
            loadStylesheet("https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"),
            loadScript("https://unpkg.com/leaflet@1.9.4/dist/leaflet.js")
        ]);

        return leafletPromise;
    };

    const initMap = async () => {
        if (mapInitialized) return;

        mapInitialized = true;
        mapElement.classList.add("is-loading");

        try {
            await loadLeaflet();

            if (typeof L === "undefined") {
                throw new Error("Leaflet non chargé.");
            }

            mapElement.innerHTML = "";

            const lyon = [45.764043, 4.835659];

            const map = L.map(mapElement, {
                zoomControl: false,
                scrollWheelZoom: false,
                dragging: true,
                tap: true
            }).setView(lyon, 11);

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 18,
                attribution: "&copy; OpenStreetMap"
            }).addTo(map);

            L.control.zoom({
                position: "bottomright"
            }).addTo(map);

            const customIcon = L.divIcon({
                className: "rg-map-marker",
                html: `
                    <span class="rg-map-marker-pulse"></span>
                    <span class="rg-map-marker-dot"></span>
                `,
                iconSize: [34, 34],
                iconAnchor: [17, 17]
            });

            L.marker(lyon, { icon: customIcon })
                .addTo(map)
                .bindPopup(`
                    <strong>RG Plomberie</strong><br>
                    Zone d’intervention Rhône 69
                `);

            L.circle(lyon, {
                radius: 18000,
                color: "#d80714",
                weight: 2,
                opacity: 0.55,
                fillColor: "#d80714",
                fillOpacity: 0.08
            }).addTo(map);

            const cityMarkers = [
                { name: "Lyon", coords: [45.764043, 4.835659] },
                { name: "Villeurbanne", coords: [45.7719, 4.8902] },
                { name: "Vénissieux", coords: [45.6970, 4.8858] },
                { name: "Bron", coords: [45.7333, 4.9130] },
                { name: "Caluire-et-Cuire", coords: [45.7947, 4.8463] }
            ];

            cityMarkers.forEach((city) => {
                L.circleMarker(city.coords, {
                    radius: 5,
                    color: "#d80714",
                    weight: 2,
                    fillColor: "#d80714",
                    fillOpacity: 0.8
                })
                    .addTo(map)
                    .bindPopup(`<strong>${city.name}</strong><br>Intervention possible selon demande`);
            });

            setTimeout(() => {
                map.invalidateSize();
                mapElement.classList.remove("is-loading");
                mapElement.classList.add("is-ready");
            }, 350);
        } catch (error) {
            mapInitialized = false;

            mapElement.classList.remove("is-loading");
            mapElement.classList.add("is-error");

            mapElement.innerHTML = `
                <div class="contact-map-error">
                    <strong>Carte temporairement indisponible</strong>
                    <span>Vous pouvez contacter RG Plomberie directement par téléphone ou via le formulaire.</span>
                </div>
            `;
        }
    };

    if (loadTrigger) {
        loadTrigger.addEventListener("click", initMap);
    }

    mapElement.addEventListener("keydown", (event) => {
        if (event.key === "Enter" || event.key === " ") {
            event.preventDefault();
            initMap();
        }
    });
});
