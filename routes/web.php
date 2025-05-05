<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services/web-design', function () {
    return view('/services/web-design');
})->name('services.web-design');

Route::get('/services/software-development', function () {
    return view('/services/software-development');
})->name('services.software-development');

Route::get('/services/seo-optimization', function () {
    return view('/services/seo-optimization');
})->name('services.seo-optimization');

Route::get('/services/brand-design', function () {
    return view('/services/brand-design');
})->name('services.brand-design');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::post('/contact-us', [EmailController::class, 'contact'])->name('contactAction');

