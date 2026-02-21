<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/language/{locale}', function (string $locale) {
    $supported = ['en', 'sv', 'de', 'fr', 'es', 'pt', 'it', 'nl', 'pl', 'ru', 'zh', 'ja', 'ko', 'ar', 'hi', 'th', 'vi', 'id', 'tr', 'da', 'no', 'fi', 'is'];

    if (in_array($locale, $supported)) {
        session(['locale' => $locale]);
    }

    return redirect()->back();
})->name('language.switch');
