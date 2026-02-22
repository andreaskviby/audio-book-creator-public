<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy', function () {
    return view('pages.privacy-policy');
})->name('privacy');

Route::get('/terms', function () {
    return view('pages.terms-of-service');
})->name('terms');

Route::get('/language/{locale}', function (string $locale) {
    $supported = ['en', 'sv', 'de', 'fr', 'es', 'pt', 'it', 'nl', 'pl', 'ru', 'zh', 'ja', 'ko', 'ar', 'hi', 'th', 'vi', 'id', 'tr', 'da', 'no', 'fi', 'is'];

    if (in_array($locale, $supported)) {
        session(['locale' => $locale]);
    }

    return redirect()->back();
})->name('language.switch');
