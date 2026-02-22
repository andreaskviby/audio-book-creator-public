<x-layouts.app>
    <section class="py-24 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-8 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                {{ __('privacy.title') }}
            </h1>
            <p class="text-gray-400 mb-12">{{ __('privacy.last_updated') }}: {{ __('privacy.update_date') }}</p>

            <div class="prose prose-invert prose-lg max-w-none space-y-8">
                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('privacy.introduction_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('privacy.introduction_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('privacy.data_collection_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">{{ __('privacy.data_collection_intro') }}</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>{{ __('privacy.data_item_device') }}</li>
                        <li>{{ __('privacy.data_item_usage') }}</li>
                        <li>{{ __('privacy.data_item_license') }}</li>
                    </ul>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('privacy.local_processing_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('privacy.local_processing_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('privacy.third_party_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">{{ __('privacy.third_party_intro') }}</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li><strong>{{ __('privacy.third_party_openai') }}:</strong> {{ __('privacy.third_party_openai_desc') }}</li>
                        <li><strong>{{ __('privacy.third_party_elevenlabs') }}:</strong> {{ __('privacy.third_party_elevenlabs_desc') }}</li>
                        <li><strong>{{ __('privacy.third_party_lemon') }}:</strong> {{ __('privacy.third_party_lemon_desc') }}</li>
                    </ul>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('privacy.data_security_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('privacy.data_security_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('privacy.your_rights_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">{{ __('privacy.your_rights_intro') }}</p>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>{{ __('privacy.right_access') }}</li>
                        <li>{{ __('privacy.right_delete') }}</li>
                        <li>{{ __('privacy.right_export') }}</li>
                        <li>{{ __('privacy.right_optout') }}</li>
                    </ul>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('privacy.changes_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('privacy.changes_text') }}</p>
                </div>

                <div class="bg-gray-900/50 backdrop-blur-xl rounded-2xl p-8 border border-white/10">
                    <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('privacy.contact_title') }}</h2>
                    <p class="text-gray-300 leading-relaxed">{{ __('privacy.contact_text') }}</p>
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
