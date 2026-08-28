import fs from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), "..");
const docs = path.join(root, "docs");
const failures = [];

function walk(directory) {
    return fs.readdirSync(directory, { withFileTypes: true }).flatMap(function (entry) {
        const fullPath = path.join(directory, entry.name);
        return entry.isDirectory() ? walk(fullPath) : [fullPath];
    });
}

function fail(file, message) {
    failures.push(path.relative(root, file) + " : " + message);
}

function count(content, expression) {
    return (content.match(expression) || []).length;
}

const htmlFiles = walk(docs).filter(function (file) {
    return file.endsWith(".html");
});

if (htmlFiles.length !== 13) {
    failures.push("Nombre de pages HTML attendu : 13, obtenu : " + htmlFiles.length);
}

htmlFiles.forEach(function (file) {
    const html = fs.readFileSync(file, "utf8");
    const relative = path.relative(docs, file);

    if (count(html, /<h1\b/gi) !== 1) {
        fail(file, "la page doit contenir exactement un h1");
    }
    if (!/<title>[^<]{8,}<\/title>/i.test(html)) {
        fail(file, "titre absent ou trop court");
    }
    if (!/<meta name="description" content="[^"]{40,}"/i.test(html)) {
        fail(file, "description SEO absente ou trop courte");
    }
    if (!/<link rel="canonical" href="https:\/\/[^"]+"/i.test(html)) {
        fail(file, "URL canonique absolue absente");
    }
    if (/(@extends|@section|@endsection|@if|@foreach|\{\{|\{!!)/.test(html)) {
        fail(file, "syntaxe Blade restante");
    }
    if (/===\s*'|required\)>/.test(html)) {
        fail(file, "fragment d’expression Blade restant");
    }
    if (/cinematic|site-preloader|theme-switch/i.test(html)) {
        fail(file, "ancien système visuel encore référencé");
    }
    if (/Information à compléter/i.test(html)) {
        fail(file, "placeholder légal générique restant");
    }

    const ids = Array.from(html.matchAll(/\sid="([^"]+)"/g), function (match) {
        return match[1];
    });
    const duplicates = ids.filter(function (id, index) {
        return ids.indexOf(id) !== index;
    });
    if (duplicates.length) {
        fail(file, "identifiant HTML dupliqué : " + Array.from(new Set(duplicates)).join(", "));
    }

    Array.from(html.matchAll(/<img\b[^>]*>/gi)).forEach(function (match) {
        const tag = match[0];
        if (!/\salt="[^"]*"/i.test(tag)) {
            fail(file, "image sans attribut alt");
        }
        if (!/\swidth="\d+"/i.test(tag) || !/\sheight="\d+"/i.test(tag)) {
            fail(file, "image sans dimensions explicites");
        }
    });

    Array.from(html.matchAll(/\s(?:src|href)="([^"]+)"/g)).forEach(function (match) {
        const reference = match[1].split("#")[0].split("?")[0];
        if (!reference.startsWith("/rg-plomberie/")) {
            return;
        }

        let localPath = reference.slice("/rg-plomberie/".length);
        if (localPath === "" || localPath.endsWith("/")) {
            localPath += "index.html";
        }
        const target = path.join(docs, localPath);
        if (!fs.existsSync(target)) {
            fail(file, "référence interne introuvable : " + reference);
        }
    });

    if (relative === path.join("contact", "index.html") && !/data-static-contact/.test(html)) {
        fail(file, "le formulaire statique n’a pas de gestionnaire local");
    }
    if (relative === "404.html" && !/name="robots" content="noindex, follow"/.test(html)) {
        fail(file, "la page 404 doit être en noindex");
    }
});

["favicon.ico", "favicon.svg", "apple-touch-icon.png", "site.webmanifest", "sitemap.xml"].forEach(function (name) {
    const file = path.join(docs, name);
    if (!fs.existsSync(file) || fs.statSync(file).size === 0) {
        failures.push("Fichier public absent ou vide : docs/" + name);
    }
});

const deliveredAssets = walk(path.join(docs, "assets"));
const deliveredBytes = deliveredAssets.reduce(function (total, file) {
    return total + fs.statSync(file).size;
}, 0);

if (deliveredBytes > 2 * 1024 * 1024) {
    failures.push("Poids des assets publiés supérieur à 2 Mio : " + deliveredBytes);
}

if (failures.length) {
    console.error("Contrôle du site : échec");
    failures.forEach(function (failure) {
        console.error("- " + failure);
    });
    process.exit(1);
}

console.log("Contrôle du site : OK");
console.log("- Pages HTML : " + htmlFiles.length);
console.log("- Assets publiés : " + (deliveredBytes / 1024).toFixed(0) + " Kio");
