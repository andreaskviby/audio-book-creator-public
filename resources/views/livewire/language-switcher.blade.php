<?php

use Livewire\Volt\Component;

new class extends Component
{
    public string $currentLocale;

    public array $languages = [
        'en' => ['name' => 'English', 'flag' => '🇬🇧'],
        'sv' => ['name' => 'Svenska', 'flag' => '🇸🇪'],
        'de' => ['name' => 'Deutsch', 'flag' => '🇩🇪'],
        'fr' => ['name' => 'Français', 'flag' => '🇫🇷'],
        'es' => ['name' => 'Español', 'flag' => '🇪🇸'],
        'pt' => ['name' => 'Português', 'flag' => '🇵🇹'],
        'it' => ['name' => 'Italiano', 'flag' => '🇮🇹'],
        'nl' => ['name' => 'Nederlands', 'flag' => '🇳🇱'],
        'pl' => ['name' => 'Polski', 'flag' => '🇵🇱'],
        'ru' => ['name' => 'Русский', 'flag' => '🇷🇺'],
        'zh' => ['name' => '中文', 'flag' => '🇨🇳'],
        'ja' => ['name' => '日本語', 'flag' => '🇯🇵'],
        'ko' => ['name' => '한국어', 'flag' => '🇰🇷'],
        'ar' => ['name' => 'العربية', 'flag' => '🇸🇦'],
        'hi' => ['name' => 'हिन्दी', 'flag' => '🇮🇳'],
        'th' => ['name' => 'ไทย', 'flag' => '🇹🇭'],
        'vi' => ['name' => 'Tiếng Việt', 'flag' => '🇻🇳'],
        'id' => ['name' => 'Indonesia', 'flag' => '🇮🇩'],
        'tr' => ['name' => 'Türkçe', 'flag' => '🇹🇷'],
        'da' => ['name' => 'Dansk', 'flag' => '🇩🇰'],
        'no' => ['name' => 'Norsk', 'flag' => '🇳🇴'],
        'fi' => ['name' => 'Suomi', 'flag' => '🇫🇮'],
        'is' => ['name' => 'Íslenska', 'flag' => '🇮🇸'],
    ];

    public function mount(): void
    {
        $this->currentLocale = app()->getLocale();
    }

    public function setLocale(string $locale): void
    {
        session(['locale' => $locale]);
        $this->redirect(request()->header('Referer', '/'));
    }
};
?>

<div
    x-data="{ open: false }"
    @click.away="open = false"
    class="relative"
>
    <button
        @click="open = !open"
        class="flex items-center gap-2 px-3 py-2 rounded-lg bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/10 transition-all"
    >
        <span class="text-lg">{{ $languages[$currentLocale]['flag'] ?? '🌐' }}</span>
        <span class="text-white text-sm hidden sm:inline">{{ $languages[$currentLocale]['name'] ?? 'Language' }}</span>
        <svg class="w-4 h-4 text-white/70 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute right-0 mt-2 w-56 max-h-96 overflow-y-auto rounded-xl bg-gray-900/95 backdrop-blur-xl border border-white/10 shadow-2xl z-50"
    >
        <div class="p-2 grid grid-cols-2 gap-1">
            @foreach($languages as $code => $lang)
                <button
                    wire:click="setLocale('{{ $code }}')"
                    class="flex items-center gap-2 px-3 py-2 rounded-lg text-left text-sm transition-all {{ $currentLocale === $code ? 'bg-purple-600 text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}"
                >
                    <span class="text-base">{{ $lang['flag'] }}</span>
                    <span class="truncate">{{ $lang['name'] }}</span>
                </button>
            @endforeach
        </div>
    </div>
</div>
