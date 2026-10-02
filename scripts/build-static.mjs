import fs from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";

const scriptDirectory = path.dirname(fileURLToPath(import.meta.url));
const root = path.resolve(scriptDirectory, "..");
const publicDirectory = path.join(root, "public");
const viewsDirectory = path.join(root, "resources", "views");

// Deux sorties : l'aperçu GitHub Pages (docs/, sous /rg-plomberie/) et le site publié
// sur l'hébergement OVH (dist/, à la racine de www.rgplomberie.com) avec --target=ovh.
const targets = {
    pages: { directory: "docs", basePath: "/rg-plomberie/", siteUrl: "https://rizleneberrag.github.io/rg-plomberie/" },
    ovh: { directory: "dist", basePath: "/", siteUrl: "https://www.rgplomberie.com/" }
};
const targetArgument = process.argv.find(function (argument) {
    return argument.startsWith("--target=");
});
const targetName = targetArgument ? targetArgument.slice("--target=".length) : "pages";
if (!(targetName in targets)) {
    throw new Error("Cible inconnue : " + targetName + " (pages ou ovh).");
}
const target = targets[targetName];
const docsDirectory = path.join(root, target.directory);
const basePath = target.basePath;
const siteUrl = target.siteUrl;
const lastModified = "2026-10-01";

const routePaths = {
    home: "",
    entreprise: "entreprise/",
    prestations: "prestations/",
    "prestations.plomberie": "prestations/plomberie/",
    "prestations.chauffage": "prestations/chauffage/",
    "prestations.climatisation": "prestations/climatisation/",
    "prestations.vmc": "prestations/vmc/",
    realisations: "realisations/",
    depannage: "depannage/",
    avis: "avis/",
    contact: "contact/",
    "contact.send": "contact/",
    mentions: "mentions-legales/"
};

const pages = [
    { view: "pages/home.blade.php", route: "home", output: "index.html", priority: "1.00", frequency: "weekly" },
    { view: "pages/entreprise.blade.php", route: "entreprise", output: "entreprise/index.html", priority: "0.80", frequency: "monthly" },
    { view: "pages/prestations/index.blade.php", route: "prestations", output: "prestations/index.html", priority: "0.90", frequency: "monthly" },
    { view: "pages/prestations/plomberie.blade.php", route: "prestations.plomberie", output: "prestations/plomberie/index.html", priority: "0.85", frequency: "monthly" },
    { view: "pages/prestations/chauffage.blade.php", route: "prestations.chauffage", output: "prestations/chauffage/index.html", priority: "0.85", frequency: "monthly" },
    { view: "pages/prestations/climatisation.blade.php", route: "prestations.climatisation", output: "prestations/climatisation/index.html", priority: "0.85", frequency: "monthly" },
    { view: "pages/prestations/vmc.blade.php", route: "prestations.vmc", output: "prestations/vmc/index.html", priority: "0.85", frequency: "monthly" },
    { view: "pages/realisations.blade.php", route: "realisations", output: "realisations/index.html", priority: "0.75", frequency: "monthly" },
    { view: "pages/depannage.blade.php", route: "depannage", output: "depannage/index.html", priority: "0.90", frequency: "weekly" },
    { view: "pages/avis.blade.php", route: "avis", output: "avis/index.html", priority: "0.60", frequency: "monthly" },
    { view: "pages/contact.blade.php", route: "contact", output: "contact/index.html", priority: "0.90", frequency: "monthly" },
    { view: "pages/mentions-legales.blade.php", route: "mentions", output: "mentions-legales/index.html", priority: "0.30", frequency: "yearly" },
    { view: "errors/404.blade.php", route: null, output: "404.html", noindex: true }
];

function ensureParent(filePath) {
    fs.mkdirSync(path.dirname(filePath), { recursive: true });
}

function write(filePath, content) {
    ensureParent(filePath);
    fs.writeFileSync(filePath, content, "utf8");
}

function copy(source, target) {
    ensureParent(target);
    fs.copyFileSync(source, target);
}

function extractMetadata(blade) {
    const title = blade.match(/'title'\s*=>\s*'([^']+)'/);
    const description = blade.match(/'description'\s*=>\s*'([^']+)'/);
    const robots = blade.match(/'robots'\s*=>\s*'([^']+)'/);

    if (!title || !description) {
        throw new Error("Métadonnées absentes dans une vue.");
    }

    return {
        title: title[1],
        description: description[1],
        robots: robots ? robots[1] : "index, follow"
    };
}

function extractContent(blade) {
    const startMarker = "@section('content')";
    const start = blade.indexOf(startMarker);
    const end = blade.lastIndexOf("@endsection");

    if (start === -1 || end === -1 || end <= start) {
        throw new Error("Section de contenu introuvable.");
    }

    return blade.slice(start + startMarker.length, end).trim();
}

function resolveHelpers(content) {
    return content
        .replace(/\{\{\s*asset\('([^']+)'\)\s*\}\}/g, function (_, assetPath) {
            return basePath + assetPath.replace(/^\/+/, "");
        })
        .replace(/\{\{\s*route\('([^']+)'\)\s*\}\}/g, function (_, routeName) {
            if (!(routeName in routePaths)) {
                throw new Error("Route statique inconnue : " + routeName);
            }
            return basePath + routePaths[routeName];
        })
        .replace(/\{\{\s*date\('Y'\)\s*\}\}/g, "2026")
        .replace(/\{\{\s*date\('d\/m\/Y'\)\s*\}\}/g, "01/10/2026");
}

function preparePageContent(blade, page) {
    let content = extractContent(blade);

    content = content
        .replace(/<!-- STATIC-REMOVE-START -->[\s\S]*?<!-- STATIC-REMOVE-END -->/g, "")
        .replace(/^\s*@csrf\s*$/gm, "")
        .replace(/\s+value="\{\{\s*old\('[^']+'\)\s*\}\}"/g, "")
        .replace(/\{\{\s*old\('message'\)\s*\}\}/g, "")
        .replace(/\s+@selected\(old\('service'\)\s*===\s*'[^']+'\)/g, "")
        .replace(/\s+@checked\(old\('privacy'\)\)/g, "");

    content = resolveHelpers(content);

    if (page.route === "contact") {
        content = content.replace(
            'method="post" action="' + basePath + routePaths["contact.send"] + '" data-contact-form',
            'method="post" action="#contact-result" data-contact-form data-static-contact'
        );
        content = content.replace("Envoyer la demande", "Préparer ma demande");
    }

    return content;
}

function staticSchema() {
    const cities = [
        "Lyon", "Villeurbanne", "Vaulx-en-Velin", "Bron", "Décines-Charpieu", "Meyzieu",
        "Chassieu", "Genas", "Saint-Priest", "Jonage", "Pusignan", "Janneyrias",
        "Colombier-Saugnieu", "Rillieux-la-Pape", "Caluire-et-Cuire", "Saint-Bonnet-de-Mure", "Saint-Laurent-de-Mure"
    ];

    return {
        "@context": "https://schema.org",
        "@type": ["Plumber", "HVACBusiness"],
        "@id": siteUrl + "#entreprise",
        name: "RG Plomberie",
        legalName: "RG PLOMBERIE",
        url: siteUrl,
        telephone: "+33627997646",
        image: siteUrl + "assets/img/rg/apercu-partage.jpg",
        logo: siteUrl + "assets/img/rg/logo-rg-plomberie.webp",
        description: "Plomberie, chauffage, climatisation et VMC à Lyon et dans l’Est lyonnais. Dépannage, installation et entretien. Devis gratuit.",
        foundingDate: "2017",
        priceRange: "€€",
        address: {
            "@type": "PostalAddress",
            streetAddress: "4 B chemin de la Batterie",
            postalCode: "38280",
            addressLocality: "Janneyrias",
            addressCountry: "FR"
        },
        openingHoursSpecification: [
            { "@type": "OpeningHoursSpecification", dayOfWeek: ["Monday", "Tuesday", "Wednesday", "Thursday"], opens: "07:30", closes: "19:30" },
            { "@type": "OpeningHoursSpecification", dayOfWeek: "Friday", opens: "07:30", closes: "18:00" },
            { "@type": "OpeningHoursSpecification", dayOfWeek: "Saturday", opens: "08:00", closes: "18:00" }
        ],
        areaServed: cities.map(function (city) {
            return { "@type": "City", name: city };
        })
    };
}

function renderLayout(layoutBlade, metadata, canonical, content) {
    let html = layoutBlade;

    html = html
        .replace(/@php[\s\S]*?@endphp/g, "")
        .replace(/<script type="application\/ld\+json">[\s\S]*?<\/script>/, '<script type="application/ld+json">' + JSON.stringify(staticSchema()) + "</script>")
        .replace(/\{\{\s*\$title\s*\?\?\s*'[^']*'\s*\}\}/g, metadata.title)
        .replace(/\{\{\s*\$description\s*\?\?\s*'[^']*'\s*\}\}/g, metadata.description)
        .replace(/\{\{\s*\$robots\s*\?\?\s*'[^']*'\s*\}\}/g, metadata.robots)
        .replace(/\{\{\s*url\(\)->current\(\)\s*\}\}/g, canonical)
        .replace("@yield('content')", content);

    html = resolveHelpers(html);
    html = html.replace(
        'content="' + basePath + 'assets/img/rg/apercu-partage.jpg"',
        'content="' + siteUrl + 'assets/img/rg/apercu-partage.jpg"'
    );

    if (/(@extends|@section|@endsection|@if|@foreach|\{\{|\{!!)/.test(html)) {
        throw new Error("Directive Blade restante dans le rendu statique.");
    }

    return html
        .replace(/[ \t]+$/gm, "")
        .replace(/\n{3,}/g, "\n\n")
        .trim() + "\n";
}

function buildSitemap() {
    const entries = pages.filter(function (page) {
        return page.route;
    }).map(function (page) {
        return [
            "    <url>",
            "        <loc>" + siteUrl + routePaths[page.route] + "</loc>",
            "        <lastmod>" + lastModified + "</lastmod>",
            "        <changefreq>" + page.frequency + "</changefreq>",
            "        <priority>" + page.priority + "</priority>",
            "    </url>"
        ].join("\n");
    });

    return [
        '<?xml version="1.0" encoding="UTF-8"?>',
        '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">',
        entries.join("\n"),
        "</urlset>",
        ""
    ].join("\n");
}

// La page unique de dépannage (landing/) est publiée telle quelle sur OVH.
// L'aperçu GitHub Pages en garde une copie hors index, sans le script d'envoi PHP.
function copyLanding() {
    const landingDirectory = path.join(root, "landing");
    const target = path.join(docsDirectory, "urgence");
    const serverOnly = new Set(["envoi.php", ".htaccess"]);

    fs.cpSync(landingDirectory, target, {
        recursive: true,
        filter: function (source) {
            return !serverOnly.has(path.basename(source));
        }
    });

    const indexPath = path.join(target, "index.html");
    const html = fs.readFileSync(indexPath, "utf8")
        .replace('<meta name="robots" content="index, follow">', '<meta name="robots" content="noindex, nofollow">');
    write(indexPath, html);
}

function copyAssets() {
    const files = [
        "assets/css/rg-site.css",
        "assets/js/rg-site.js",
        "assets/fonts/archivo.woff2",
        "assets/fonts/inter.woff2",
        "assets/img/rg/logo-rg-plomberie.webp",
        "assets/img/rg/logo-rg-plomberie-detoure.webp",
        "assets/img/rg/logo-rg-plomberie-clair.webp",
        "assets/img/rg/apercu-partage.jpg",
        "favicon.svg",
        "favicon.ico",
        "apple-touch-icon.png"
    ];

    files.forEach(function (relativePath) {
        copy(path.join(publicDirectory, relativePath), path.join(docsDirectory, relativePath));
    });

    ["web", "chantiers", "prestations", "vitrine", "avant-apres"].forEach(function (folder) {
        fs.cpSync(
            path.join(publicDirectory, "assets", "img", "rg", folder),
            path.join(docsDirectory, "assets", "img", "rg", folder),
            { recursive: true }
        );
    });

    const manifest = {
        name: "RG Plomberie",
        short_name: "RG Plomberie",
        description: "Plomberie, chauffage, climatisation et VMC dans le Rhône et l’Est lyonnais.",
        start_url: basePath,
        scope: basePath,
        display: "standalone",
        background_color: "#f4f0e8",
        theme_color: "#181816",
        icons: [
            {
                src: basePath + "apple-touch-icon.png",
                sizes: "180x180",
                type: "image/png"
            }
        ]
    };

    write(path.join(docsDirectory, "site.webmanifest"), JSON.stringify(manifest, null, 2) + "\n");
}

// Règles Apache de l'hébergement OVH : une seule adresse (https://www.), page 404, cache.
function htaccess() {
    return [
        "Options -Indexes",
        "DirectoryIndex index.html",
        "AddDefaultCharset UTF-8",
        "ErrorDocument 404 /404.html",
        "",
        "<IfModule mod_rewrite.c>",
        "    RewriteEngine On",
        "    RewriteCond %{SERVER_PORT} 80 [OR]",
        "    RewriteCond %{HTTP_HOST} !^www\\.rgplomberie\\.com$ [NC]",
        "    RewriteRule ^(.*)$ https://www.rgplomberie.com/$1 [R=301,L]",
        "</IfModule>",
        "",
        "<IfModule mod_deflate.c>",
        "    AddOutputFilterByType DEFLATE text/html text/css application/javascript image/svg+xml application/xml text/plain",
        "</IfModule>",
        "",
        "<IfModule mod_expires.c>",
        "    ExpiresActive On",
        "    ExpiresByType text/html \"access plus 0 seconds\"",
        "    ExpiresByType text/css \"access plus 1 week\"",
        "    ExpiresByType application/javascript \"access plus 1 week\"",
        "    ExpiresByType image/webp \"access plus 1 month\"",
        "    ExpiresByType image/jpeg \"access plus 1 month\"",
        "    ExpiresByType image/png \"access plus 1 month\"",
        "    ExpiresByType image/svg+xml \"access plus 1 month\"",
        "    ExpiresByType image/x-icon \"access plus 1 month\"",
        "</IfModule>",
        ""
    ].join("\n");
}

function build() {
    if (path.dirname(docsDirectory) !== root || !["docs", "dist"].includes(path.basename(docsDirectory))) {
        throw new Error("Dossier de sortie inattendu, export annulé.");
    }

    fs.rmSync(docsDirectory, { recursive: true, force: true });
    fs.mkdirSync(docsDirectory, { recursive: true });

    const layoutBlade = fs.readFileSync(path.join(viewsDirectory, "layouts", "app.blade.php"), "utf8");

    pages.forEach(function (page) {
        const blade = fs.readFileSync(path.join(viewsDirectory, page.view), "utf8");
        const metadata = extractMetadata(blade);
        if (page.noindex) {
            metadata.robots = "noindex, follow";
        } else if (targetName === "pages") {
            // L'aperçu GitHub sert à montrer le site au client : il reste hors des résultats Google,
            // pour ne pas faire doublon avec le site officiel.
            metadata.robots = "noindex, nofollow";
        }
        const content = preparePageContent(blade, page);
        const canonical = page.route ? siteUrl + routePaths[page.route] : siteUrl + "404.html";
        const html = renderLayout(layoutBlade, metadata, canonical, content);
        write(path.join(docsDirectory, page.output), html);
    });

    copyAssets();
    copyLanding();
    if (targetName === "pages") {
        write(path.join(docsDirectory, ".nojekyll"), "");
    } else {
        write(path.join(docsDirectory, ".htaccess"), htaccess());
    }
    write(path.join(docsDirectory, "sitemap.xml"), buildSitemap());
    // Sur l'aperçu, pas de plan du site : les pages sont en noindex.
    write(path.join(docsDirectory, "robots.txt"), [
        "User-agent: *",
        "Allow: /",
        ""
    ].concat(targetName === "pages" ? [] : ["Sitemap: " + siteUrl + "sitemap.xml", ""]).join("\n"));

    console.log("Export statique terminé (" + targetName + ", " + target.directory + "/) : " + pages.length + " pages.");
}

build();
