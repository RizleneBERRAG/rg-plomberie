import fs from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";

const branch = process.argv[2];

if (!branch || !/^[a-zA-Z0-9._-]+$/.test(branch)) {
    throw new Error("Indiquez un nom de branche simple, sans slash.");
}

const scriptDirectory = path.dirname(fileURLToPath(import.meta.url));
const root = path.resolve(scriptDirectory, "..");
const input = path.join(root, "docs", "index.html");
const output = path.join(root, "preview", "index.html");
const assetBase = "https://raw.githack.com/RizleneBERRAG/rg-plomberie/" + branch + "/docs/";

function previewUrl(relativePath) {
    if (relativePath === "") {
        return assetBase + "index.html";
    }

    return assetBase + relativePath + (relativePath.endsWith("/") ? "index.html" : "");
}

let html = fs.readFileSync(input, "utf8");

html = html.replace(/(href|src)="\/rg-plomberie\/([^"]*)"/g, function (_, attribute, relativePath) {
    return attribute + '="' + previewUrl(relativePath) + '"';
});

fs.mkdirSync(path.dirname(output), { recursive: true });
fs.writeFileSync(output, html, "utf8");

console.log("Prévisualisation de branche générée : preview/index.html");
