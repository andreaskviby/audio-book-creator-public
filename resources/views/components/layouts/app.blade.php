<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('app.title') }} - {{ __('app.tagline') }}</title>
    <meta name="description" content="{{ __('app.description') }}">

    <meta property="og:title" content="{{ __('app.title') }}">
    <meta property="og:description" content="{{ __('app.description') }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="{{ app()->getLocale() }}">

    {{-- SEO: Hreflang tags for all supported languages --}}
    @php
    $languages = ['en', 'sv', 'de', 'fr', 'es', 'pt', 'it', 'nl', 'pl', 'ru', 'zh', 'ja', 'ko', 'ar', 'hi', 'th', 'vi', 'id', 'tr', 'da', 'no', 'fi', 'is'];
    $baseUrl = config('app.url');
    @endphp
    <link rel="canonical" href="{{ $baseUrl }}">
    @foreach($languages as $lang)
    <link rel="alternate" hreflang="{{ $lang }}" href="{{ $baseUrl }}?lang={{ $lang }}">
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ $baseUrl }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased bg-gray-950 text-white min-h-screen">
    <div class="fixed inset-0 bg-gradient-to-br from-purple-900/20 via-gray-950 to-pink-900/20 pointer-events-none"></div>
    <div class="fixed inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%239C92AC\" fill-opacity=\"0.03\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] pointer-events-none"></div>

    <div class="relative z-10">
        <nav class="fixed top-0 left-0 right-0 z-50 bg-gray-950/80 backdrop-blur-xl border-b border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <a href="/" class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Audio Book Creator</span>
                    </a>

                    <div class="hidden md:flex items-center gap-8">
                        <a href="#features" class="text-gray-300 hover:text-white transition-colors">{{ __('nav.features') }}</a>
                        <a href="#how-it-works" class="text-gray-300 hover:text-white transition-colors">{{ __('nav.how_it_works') }}</a>
                        <a href="#languages" class="text-gray-300 hover:text-white transition-colors">{{ __('nav.languages') }}</a>
                        <a href="#download" class="text-gray-300 hover:text-white transition-colors">{{ __('nav.download') }}</a>
                    </div>

                    <div class="flex items-center gap-4">
                        <x-language-switcher />
                        <a href="#download" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-500 hover:to-pink-500 rounded-lg font-medium transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                            {{ __('nav.download') }}
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <main class="pt-16">
            {{ $slot }}
        </main>

        <footer class="border-t border-white/10 bg-gray-950/50 backdrop-blur-xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="md:col-span-2">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <span class="text-xl font-bold">Audio Book Creator</span>
                        </div>
                        <p class="text-gray-400 max-w-md">{{ __('footer.description') }}</p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">{{ __('footer.product') }}</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#features" class="hover:text-white transition-colors">{{ __('nav.features') }}</a></li>
                            <li><a href="#how-it-works" class="hover:text-white transition-colors">{{ __('nav.how_it_works') }}</a></li>
                            <li><a href="#download" class="hover:text-white transition-colors">{{ __('nav.download') }}</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">{{ __('footer.support') }}</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#" class="hover:text-white transition-colors">{{ __('footer.documentation') }}</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">{{ __('footer.contact') }}</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">{{ __('footer.privacy') }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-white/10 mt-8 pt-8 text-center text-gray-500">
                    <p>&copy; {{ date('Y') }} Audio Book Creator. {{ __('footer.rights') }}</p>
                </div>
            </div>
        </footer>
    </div>

    @livewireScripts
</body>
</html>
