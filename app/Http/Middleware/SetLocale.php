<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    protected array $supportedLocales = [
        'en', 'sv', 'de', 'fr', 'es', 'pt', 'it', 'nl', 'pl', 'ru',
        'zh', 'ja', 'ko', 'ar', 'hi', 'th', 'vi', 'id', 'tr',
        'da', 'no', 'fi', 'is',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $locale = null;

        // 1. Check URL parameter (for SEO/Google crawling)
        if ($request->has('lang') && in_array($request->get('lang'), $this->supportedLocales)) {
            $locale = $request->get('lang');
            session(['locale' => $locale]);
        }

        // 2. Check session
        if (! $locale) {
            $locale = session('locale');
        }

        // 3. Fallback to browser language detection
        if (! $locale) {
            $browserLocale = substr($request->server('HTTP_ACCEPT_LANGUAGE', 'en'), 0, 2);
            $locale = in_array($browserLocale, $this->supportedLocales) ? $browserLocale : 'en';
            session(['locale' => $locale]);
        }

        if (in_array($locale, $this->supportedLocales)) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
