<x-layouts.app>
    <section class="py-24 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-8 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                {{ __('terms.title') }}
            </h1>
            <p class="text-gray-400 mb-12">{{ __('terms.last_updated') }}: {{ __('terms.update_date') }}</p>

            <div class="prose prose-invert prose-lg max-w-none space-y-8">
                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.acceptance_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('terms.acceptance_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.license_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">{{ __('terms.license_intro') }}</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>{{ __('terms.license_personal') }}</li>
                        <li>{{ __('terms.license_non_transferable') }}</li>
                        <li>{{ __('terms.license_no_reverse') }}</li>
                        <li>{{ __('terms.license_no_redistribute') }}</li>
                    </ul>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.content_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">{{ __('terms.content_intro') }}</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>{{ __('terms.content_ownership') }}</li>
                        <li>{{ __('terms.content_rights') }}</li>
                        <li>{{ __('terms.content_responsibility') }}</li>
                    </ul>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.api_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">{{ __('terms.api_intro') }}</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>{{ __('terms.api_keys') }}</li>
                        <li>{{ __('terms.api_costs') }}</li>
                        <li>{{ __('terms.api_terms') }}</li>
                    </ul>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.payment_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">{{ __('terms.payment_intro') }}</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>{{ __('terms.payment_onetime') }}</li>
                        <li>{{ __('terms.payment_refund') }}</li>
                        <li>{{ __('terms.payment_activation') }}</li>
                    </ul>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.prohibited_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">{{ __('terms.prohibited_intro') }}</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>{{ __('terms.prohibited_illegal') }}</li>
                        <li>{{ __('terms.prohibited_infringe') }}</li>
                        <li>{{ __('terms.prohibited_reverse') }}</li>
                        <li>{{ __('terms.prohibited_circumvent') }}</li>
                        <li>{{ __('terms.prohibited_share') }}</li>
                    </ul>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.disclaimer_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('terms.disclaimer_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.limitation_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('terms.limitation_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.termination_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('terms.termination_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.changes_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('terms.changes_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.governing_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('terms.governing_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('terms.contact_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('terms.contact_text') }}</p>
                    <p class="text-gray-300 mt-4">
                        <a href="mailto:andreaskviby@gmail.com" class="text-purple-400 hover:text-purple-300 transition-colors">
                            andreaskviby@gmail.com
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
