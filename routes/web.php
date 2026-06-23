<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'pages.home')->name('home');

Route::view('/entreprise', 'pages.entreprise')->name('entreprise');

Route::view('/prestations', 'pages.prestations.index')->name('prestations');
Route::view('/prestations/plomberie', 'pages.prestations.plomberie')->name('prestations.plomberie');
Route::view('/prestations/chauffage', 'pages.prestations.chauffage')->name('prestations.chauffage');
Route::view('/prestations/climatisation', 'pages.prestations.climatisation')->name('prestations.climatisation');
Route::view('/prestations/vmc', 'pages.prestations.vmc')->name('prestations.vmc');

Route::view('/realisations', 'pages.realisations')->name('realisations');
Route::view('/depannage', 'pages.depannage')->name('depannage');
Route::view('/avis', 'pages.avis')->name('avis');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::view('/mentions-legales', 'pages.mentions-legales')->name('mentions');

Route::get('/sitemap.xml', function () {
    $pages = [
        [
            'url' => url('/'),
            'priority' => '1.00',
            'changefreq' => 'weekly',
        ],
        [
            'url' => route('entreprise'),
            'priority' => '0.80',
            'changefreq' => 'monthly',
        ],
        [
            'url' => route('prestations'),
            'priority' => '0.90',
            'changefreq' => 'monthly',
        ],
        [
            'url' => route('prestations.plomberie'),
            'priority' => '0.85',
            'changefreq' => 'monthly',
        ],
        [
            'url' => route('prestations.chauffage'),
            'priority' => '0.85',
            'changefreq' => 'monthly',
        ],
        [
            'url' => route('prestations.climatisation'),
            'priority' => '0.85',
            'changefreq' => 'monthly',
        ],
        [
            'url' => route('prestations.vmc'),
            'priority' => '0.85',
            'changefreq' => 'monthly',
        ],
        [
            'url' => route('realisations'),
            'priority' => '0.80',
            'changefreq' => 'monthly',
        ],
        [
            'url' => route('depannage'),
            'priority' => '0.90',
            'changefreq' => 'weekly',
        ],
        [
            'url' => route('contact'),
            'priority' => '0.90',
            'changefreq' => 'monthly',
        ],
        [
            'url' => route('mentions'),
            'priority' => '0.30',
            'changefreq' => 'yearly',
        ],
    ];

    $lastmod = now()->toDateString();

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    foreach ($pages as $page) {
        $xml .= "    <url>\n";
        $xml .= '        <loc>' . htmlspecialchars($page['url'], ENT_XML1, 'UTF-8') . "</loc>\n";
        $xml .= '        <lastmod>' . htmlspecialchars($lastmod, ENT_XML1, 'UTF-8') . "</lastmod>\n";
        $xml .= '        <changefreq>' . htmlspecialchars($page['changefreq'], ENT_XML1, 'UTF-8') . "</changefreq>\n";
        $xml .= '        <priority>' . htmlspecialchars($page['priority'], ENT_XML1, 'UTF-8') . "</priority>\n";
        $xml .= "    </url>\n";
    }

    $xml .= '</urlset>';

    return response($xml, 200)
        ->header('Content-Type', 'application/xml; charset=UTF-8');
})->name('sitemap');
