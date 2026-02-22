<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-1/2 -right-1/2 w-full h-full bg-gradient-to-br from-purple-600/30 to-transparent rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-1/2 -left-1/2 w-full h-full bg-gradient-to-tr from-pink-600/30 to-transparent rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-500/20 border border-purple-500/30 rounded-full text-purple-300 text-sm mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-purple-500"></span>
                </span>
                {{ __('hero.badge') }}
            </div>

            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                <span class="bg-gradient-to-r from-white via-purple-200 to-pink-200 bg-clip-text text-transparent">{{ __('hero.title_line1') }}</span>
                <br>
                <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-purple-400 bg-clip-text text-transparent">{{ __('hero.title_line2') }}</span>
            </h1>

            <p class="text-xl sm:text-2xl text-gray-400 max-w-3xl mx-auto mb-12">
                {{ __('hero.subtitle') }}
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                <a href="#download" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-500 hover:to-pink-500 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-purple-500/25">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                    </svg>
                    {{ __('hero.download_mac') }}
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="#features" class="inline-flex items-center gap-2 px-8 py-4 border border-white/20 hover:border-white/40 hover:bg-white/5 rounded-xl font-medium text-lg transition-all">
                    {{ __('hero.learn_more') }}
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
            </div>

            <div class="relative max-w-5xl mx-auto" x-data="{
                currentSlide: 0,
                slides: [
                    { src: '/01_main_overview.png', alt: 'Main Overview' },
                    { src: '/02_language_translation.png', alt: 'Language Translation' },
                    { src: '/03_audio_workflow.png', alt: 'Audio Workflow' },
                    { src: '/04_settings.png', alt: 'Settings' },
                    { src: '/05_voice_selection.png', alt: 'Voice Selection' },
                    { src: '/06_help_guide.png', alt: 'Help Guide' }
                ],
                autoPlay: null,
                startAutoPlay() {
                    this.autoPlay = setInterval(() => { this.next() }, 4000);
                },
                stopAutoPlay() {
                    clearInterval(this.autoPlay);
                },
                next() {
                    this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                },
                prev() {
                    this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                }
            }" x-init="startAutoPlay()" @mouseenter="stopAutoPlay()" @mouseleave="startAutoPlay()">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl blur-2xl opacity-30"></div>
                <div class="relative bg-gray-900/80 backdrop-blur-xl rounded-2xl border border-white/10 p-2 shadow-2xl">
                    <div class="flex items-center justify-between px-4 py-2 border-b border-white/10">
                        <div class="flex items-center gap-2">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">Audio Book Creator</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <template x-for="(slide, index) in slides" :key="index">
                                <button @click="currentSlide = index"
                                    :class="currentSlide === index ? 'bg-purple-500' : 'bg-gray-600 hover:bg-gray-500'"
                                    class="w-2 h-2 rounded-full transition-colors"></button>
                            </template>
                        </div>
                    </div>
                    <div class="relative aspect-video bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg overflow-hidden">
                        {{-- Carousel Images --}}
                        <template x-for="(slide, index) in slides" :key="index">
                            <img :src="slide.src"
                                :alt="slide.alt"
                                x-show="currentSlide === index"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95"
                                class="absolute inset-0 w-full h-full object-contain"
                            >
                        </template>

                        {{-- Navigation Arrows --}}
                        <button @click="prev()" class="absolute left-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-black/50 hover:bg-black/70 rounded-full flex items-center justify-center transition-colors group">
                            <svg class="w-6 h-6 text-white group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button @click="next()" class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-black/50 hover:bg-black/70 rounded-full flex items-center justify-center transition-colors group">
                            <svg class="w-6 h-6 text-white group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Slide Caption --}}
                <div class="mt-4 text-center">
                    <p class="text-gray-400 text-sm" x-text="slides[currentSlide].alt"></p>
                </div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section id="features" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold mb-4">{{ __('features.title') }}</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">{{ __('features.subtitle') }}</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Feature 1: AI Analysis --}}
                <div class="group p-8 bg-gradient-to-br from-gray-900 to-gray-900/50 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all duration-300 hover:transform hover:scale-[1.02]">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ __('features.ai_analysis.title') }}</h3>
                    <p class="text-gray-400">{{ __('features.ai_analysis.description') }}</p>
                </div>

                {{-- Feature 2: Premium Voices --}}
                <div class="group p-8 bg-gradient-to-br from-gray-900 to-gray-900/50 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all duration-300 hover:transform hover:scale-[1.02]">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ __('features.premium_voices.title') }}</h3>
                    <p class="text-gray-400">{{ __('features.premium_voices.description') }}</p>
                </div>

                {{-- Feature 3: Multi-language --}}
                <div class="group p-8 bg-gradient-to-br from-gray-900 to-gray-900/50 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all duration-300 hover:transform hover:scale-[1.02]">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ __('features.multi_language.title') }}</h3>
                    <p class="text-gray-400">{{ __('features.multi_language.description') }}</p>
                </div>

                {{-- Feature 4: Audio Tags --}}
                <div class="group p-8 bg-gradient-to-br from-gray-900 to-gray-900/50 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all duration-300 hover:transform hover:scale-[1.02]">
                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ __('features.audio_tags.title') }}</h3>
                    <p class="text-gray-400">{{ __('features.audio_tags.description') }}</p>
                </div>

                {{-- Feature 5: Voice Cloning --}}
                <div class="group p-8 bg-gradient-to-br from-gray-900 to-gray-900/50 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all duration-300 hover:transform hover:scale-[1.02]">
                    <div class="w-14 h-14 bg-gradient-to-br from-violet-500 to-purple-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ __('features.voice_cloning.title') }}</h3>
                    <p class="text-gray-400">{{ __('features.voice_cloning.description') }}</p>
                </div>

                {{-- Feature 6: PDF & EPUB --}}
                <div class="group p-8 bg-gradient-to-br from-gray-900 to-gray-900/50 rounded-2xl border border-white/10 hover:border-purple-500/50 transition-all duration-300 hover:transform hover:scale-[1.02]">
                    <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-rose-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">{{ __('features.file_support.title') }}</h3>
                    <p class="text-gray-400">{{ __('features.file_support.description') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- How It Works Section --}}
    <section id="how-it-works" class="py-24 relative bg-gray-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold mb-4">{{ __('how_it_works.title') }}</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">{{ __('how_it_works.subtitle') }}</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl font-bold">1</div>
                    <h3 class="text-xl font-bold mb-2">{{ __('how_it_works.step1.title') }}</h3>
                    <p class="text-gray-400">{{ __('how_it_works.step1.description') }}</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl font-bold">2</div>
                    <h3 class="text-xl font-bold mb-2">{{ __('how_it_works.step2.title') }}</h3>
                    <p class="text-gray-400">{{ __('how_it_works.step2.description') }}</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl font-bold">3</div>
                    <h3 class="text-xl font-bold mb-2">{{ __('how_it_works.step3.title') }}</h3>
                    <p class="text-gray-400">{{ __('how_it_works.step3.description') }}</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl font-bold">4</div>
                    <h3 class="text-xl font-bold mb-2">{{ __('how_it_works.step4.title') }}</h3>
                    <p class="text-gray-400">{{ __('how_it_works.step4.description') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Languages Section --}}
    <section id="languages" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold mb-4">{{ __('languages.title') }}</h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">{{ __('languages.subtitle') }}</p>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                @php
                $languages = [
                    '🇬🇧' => 'English', '🇨🇳' => '中文', '🇪🇸' => 'Español', '🇸🇦' => 'العربية',
                    '🇫🇷' => 'Français', '🇷🇺' => 'Русский', '🇵🇹' => 'Português', '🇩🇪' => 'Deutsch',
                    '🇯🇵' => '日本語', '🇮🇳' => 'हिन्दी', '🇰🇷' => '한국어', '🇮🇹' => 'Italiano',
                    '🇹🇷' => 'Türkçe', '🇳🇱' => 'Nederlands', '🇵🇱' => 'Polski', '🇹🇭' => 'ไทย',
                    '🇻🇳' => 'Tiếng Việt', '🇮🇩' => 'Indonesia', '🇸🇪' => 'Svenska', '🇩🇰' => 'Dansk',
                    '🇳🇴' => 'Norsk', '🇫🇮' => 'Suomi', '🇮🇸' => 'Íslenska'
                ];
                @endphp
                @foreach($languages as $flag => $name)
                <div class="flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10">
                    <span class="text-xl">{{ $flag }}</span>
                    <span class="text-sm">{{ $name }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Download Section --}}
    <section id="download" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                {{-- Mac Download --}}
                <div class="bg-gradient-to-br from-gray-900 to-gray-900/50 rounded-3xl border border-white/10 p-8 lg:p-12">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 bg-green-500/20 border border-green-500/30 rounded-full text-green-400 text-sm mb-2">
                                <span class="relative flex h-2 w-2">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                                </span>
                                {{ __('download.available_now') }}
                            </div>
                            <h3 class="text-2xl font-bold">{{ __('download.mac_title') }}</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-8">{{ __('download.mac_description') }}</p>

                    {{-- Free Trial Section --}}
                    <div class="bg-gradient-to-br from-green-500/10 to-emerald-500/10 border border-green-500/30 rounded-2xl p-6 mb-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-green-500/20 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="text-green-400 font-bold text-lg">{{ __('download.free_trial') }}</span>
                                <span class="text-white font-bold text-lg"> - {{ __('download.free_trial_pages') }}</span>
                            </div>
                        </div>
                        <p class="text-gray-300 text-sm mb-4">{{ __('download.free_trial_description') }}</p>
                        <p class="text-gray-400 text-xs">{{ __('download.free_includes') }}</p>
                    </div>

                    {{-- Pro Subscription Section --}}
                    <div class="border-t border-white/10 pt-6 mb-6">
                        <p class="text-center text-gray-400 text-sm mb-4">{{ __('download.pro_title') }}</p>
                        <div class="flex items-center justify-center gap-4 flex-wrap">
                            <div class="text-center">
                                <span class="text-3xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">{{ __('download.price_sek') }}</span>
                                <span class="text-gray-400">/{{ __('download.price_note') }}</span>
                            </div>
                            <span class="text-gray-500">{{ __('download.or') }}</span>
                            <div class="text-center">
                                <span class="text-3xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">{{ __('download.price_usd') }}</span>
                                <span class="text-gray-400">/{{ __('download.price_note') }}</span>
                            </div>
                            <span class="text-gray-500">{{ __('download.or') }}</span>
                            <div class="text-center">
                                <span class="text-3xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">{{ __('download.price_eur') }}</span>
                                <span class="text-gray-400">/{{ __('download.price_note') }}</span>
                            </div>
                        </div>
                        <p class="text-gray-400 text-sm text-center mt-3">{{ __('download.price_includes') }}</p>
                    </div>

                    {{-- Money Back Guarantee --}}
                    <div class="flex items-center justify-center gap-2 mb-6 px-4 py-3 bg-green-500/10 border border-green-500/20 rounded-xl">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span class="text-green-400 font-medium">{{ __('download.guarantee') }}</span>
                    </div>

                    <a href="#" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-500 hover:to-pink-500 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-purple-500/25 w-full justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        {{ __('download.download_button') }}
                    </a>
                    <p class="text-center text-gray-500 text-sm mt-4">{{ __('download.requirements') }}</p>
                </div>

                {{-- Windows & Linux Coming Soon --}}
                <div class="bg-gradient-to-br from-purple-900/30 to-pink-900/30 rounded-3xl border border-purple-500/20 p-8 lg:p-12">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex -space-x-2">
                            <div class="w-12 h-12 bg-blue-500/20 border-2 border-gray-900 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-400" viewBox="0 0 24 24" fill="currentColor"><path d="M0 3.449L9.75 2.1v9.451H0m10.949-9.602L24 0v11.4H10.949M0 12.6h9.75v9.451L0 20.699M10.949 12.6H24V24l-12.9-1.801"/></svg>
                            </div>
                            <div class="w-12 h-12 bg-orange-500/20 border-2 border-gray-900 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12.504 0c-.155 0-.315.008-.48.021-4.226.333-3.105 4.807-3.17 6.298-.076 1.092-.3 1.953-1.05 3.02-.885 1.051-2.127 2.75-2.716 4.521-.278.832-.41 1.684-.287 2.489a.424.424 0 00-.11.135c-.26.268-.45.6-.663.839-.199.199-.485.267-.797.4-.313.136-.658.269-.864.68-.09.189-.136.394-.132.602 0 .199.027.4.055.536.058.399.116.728.04.97-.249.68-.28 1.145-.106 1.484.174.334.535.47.94.601.81.2 1.91.135 2.774.6.926.466 1.866.67 2.616.47.526-.116.97-.464 1.208-.946.587-.003 1.23-.269 2.26-.334.699-.058 1.574.267 2.577.2.025.134.063.198.114.333l.003.003c.391.778 1.113 1.132 1.884 1.071.771-.06 1.592-.536 2.257-1.306.631-.765 1.683-1.084 2.378-1.503.348-.199.629-.469.649-.853.023-.4-.2-.811-.714-1.376v-.097l-.003-.003c-.17-.2-.25-.535-.338-.926-.085-.401-.182-.786-.492-1.046h-.003c-.059-.054-.123-.067-.188-.135a.357.357 0 00-.19-.064c.431-1.278.264-2.55-.173-3.694-.533-1.41-1.465-2.638-2.175-3.483-.796-1.005-1.576-1.957-1.56-3.368.026-2.152.236-6.133-3.544-6.139z"/></svg>
                            </div>
                        </div>
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 bg-purple-500/20 border border-purple-500/30 rounded-full text-purple-300 text-sm mb-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ __('download.coming_april') }}
                            </div>
                            <h3 class="text-2xl font-bold">{{ __('download.windows_linux_title') }}</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-8">{{ __('download.windows_linux_description') }}</p>

                    <livewire:waiting-list-form />
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-24 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl sm:text-5xl font-bold mb-6">{{ __('cta.title') }}</h2>
            <p class="text-xl text-gray-400 mb-8">{{ __('cta.subtitle') }}</p>
            <a href="#download" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-500 hover:to-pink-500 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-purple-500/25">
                {{ __('cta.button') }}
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>
</x-layouts.app>
