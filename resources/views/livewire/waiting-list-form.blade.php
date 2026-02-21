<?php

use App\Models\WaitingList;
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;

new class extends Component
{
    #[Validate('required|email|unique:waiting_lists,email')]
    public string $email = '';

    #[Validate('nullable|string|max:255')]
    public string $name = '';

    #[Validate('required|in:windows,linux,both')]
    public string $platform = 'both';

    public bool $submitted = false;

    public function submit(): void
    {
        $this->validate();

        WaitingList::create([
            'email' => $this->email,
            'name' => $this->name,
            'platform' => $this->platform,
            'locale' => app()->getLocale(),
            'source' => request()->header('referer'),
        ]);

        $this->submitted = true;
    }
};
?>

<div class="w-full max-w-md mx-auto">
    @if($submitted)
        <div class="bg-gradient-to-r from-green-500/20 to-emerald-500/20 border border-green-500/30 rounded-2xl p-8 text-center backdrop-blur-sm">
            <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-2">{{ __('waiting_list.success_title') }}</h3>
            <p class="text-gray-300">{{ __('waiting_list.success_message') }}</p>
        </div>
    @else
        <form wire:submit="submit" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">{{ __('waiting_list.name') }}</label>
                <input
                    type="text"
                    id="name"
                    wire:model="name"
                    placeholder="{{ __('waiting_list.name_placeholder') }}"
                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent backdrop-blur-sm transition-all"
                >
                @error('name') <span class="text-red-400 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">{{ __('waiting_list.email') }} *</label>
                <input
                    type="email"
                    id="email"
                    wire:model="email"
                    placeholder="{{ __('waiting_list.email_placeholder') }}"
                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent backdrop-blur-sm transition-all"
                    required
                >
                @error('email') <span class="text-red-400 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-300 mb-2">{{ __('waiting_list.platform') }}</label>
                <div class="flex flex-wrap gap-3">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" wire:model="platform" value="windows" class="text-purple-500 focus:ring-purple-500 bg-white/10 border-white/20">
                        <span class="text-white flex items-center gap-1">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M0 3.449L9.75 2.1v9.451H0m10.949-9.602L24 0v11.4H10.949M0 12.6h9.75v9.451L0 20.699M10.949 12.6H24V24l-12.9-1.801"/></svg>
                            Windows
                        </span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" wire:model="platform" value="linux" class="text-purple-500 focus:ring-purple-500 bg-white/10 border-white/20">
                        <span class="text-white flex items-center gap-1">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12.504 0c-.155 0-.315.008-.48.021-4.226.333-3.105 4.807-3.17 6.298-.076 1.092-.3 1.953-1.05 3.02-.885 1.051-2.127 2.75-2.716 4.521-.278.832-.41 1.684-.287 2.489a.424.424 0 00-.11.135c-.26.268-.45.6-.663.839-.199.199-.485.267-.797.4-.313.136-.658.269-.864.68-.09.189-.136.394-.132.602 0 .199.027.4.055.536.058.399.116.728.04.97-.249.68-.28 1.145-.106 1.484.174.334.535.47.94.601.81.2 1.91.135 2.774.6.926.466 1.866.67 2.616.47.526-.116.97-.464 1.208-.946.587-.003 1.23-.269 2.26-.334.699-.058 1.574.267 2.577.2.025.134.063.198.114.333l.003.003c.391.778 1.113 1.132 1.884 1.071.771-.06 1.592-.536 2.257-1.306.631-.765 1.683-1.084 2.378-1.503.348-.199.629-.469.649-.853.023-.4-.2-.811-.714-1.376v-.097l-.003-.003c-.17-.2-.25-.535-.338-.926-.085-.401-.182-.786-.492-1.046h-.003c-.059-.054-.123-.067-.188-.135a.357.357 0 00-.19-.064c.431-1.278.264-2.55-.173-3.694-.533-1.41-1.465-2.638-2.175-3.483-.796-1.005-1.576-1.957-1.56-3.368.026-2.152.236-6.133-3.544-6.139zm.529 3.405h.013c.213 0 .396.062.584.198.19.135.33.332.438.533.105.259.158.459.166.724 0-.02.006-.04.006-.06v.105a.086.086 0 01-.004-.021l-.004-.024a1.807 1.807 0 01-.15.706.953.953 0 01-.213.335.71.71 0 00-.088-.042c-.104-.045-.198-.064-.284-.133a1.312 1.312 0 00-.22-.066c.05-.06.146-.133.183-.198.053-.128.082-.264.088-.402v-.02a1.21 1.21 0 00-.061-.4c-.045-.134-.101-.2-.183-.333-.084-.066-.167-.132-.267-.132h-.016c-.093 0-.176.03-.262.132a.8.8 0 00-.205.334 1.18 1.18 0 00-.09.4v.019c.002.089.008.179.02.267-.193-.067-.438-.135-.607-.202a1.635 1.635 0 01-.018-.2v-.02a1.772 1.772 0 01.15-.768c.082-.22.232-.406.43-.533a.985.985 0 01.594-.2zm-2.962.059h.036c.142 0 .27.048.399.135.146.129.264.288.344.465.09.199.14.4.153.667v.004c.007.134.006.2-.002.266v.08c-.03.007-.056.018-.083.024-.152.055-.274.135-.393.2.012-.09.013-.18.003-.267v-.015c-.012-.133-.04-.2-.082-.333a.613.613 0 00-.166-.267.248.248 0 00-.183-.064h-.021c-.071.006-.13.04-.186.132a.552.552 0 00-.12.27.944.944 0 00-.023.33v.015c.012.135.037.2.08.334.046.134.098.2.166.268.01.009.02.018.034.024-.07.057-.117.07-.176.136a.304.304 0 01-.131.068 2.62 2.62 0 01-.275-.402 1.772 1.772 0 01-.155-.667 1.759 1.759 0 01.08-.668 1.43 1.43 0 01.283-.535c.128-.133.26-.2.418-.2zm1.37 1.706c.332 0 .733.065 1.216.399.293.2.523.269 1.052.468h.003c.255.136.405.266.478.399v-.131a.571.571 0 01.016.47c-.123.31-.516.643-1.063.842v.002c-.268.135-.501.333-.52.537-.02.135.09.334.382.468.366.2.845.4 1.4.601.549.2 1.2.197 1.63.534.478.398.547.933.455 1.536-.09.537-.298 1.136-.61 1.605-.24.4-.536.801-.926 1.069-.39.267-.9.4-1.499.534-.63.137-1.092-.067-1.399-.467-.31-.399-.472-.934-.65-1.537-.177-.601-.225-1.134-.384-1.67-.17-.537-.47-.867-.949-1.202-.45-.334-.966-.664-1.16-.467-.215.199-.18.668-.12 1.136.06.468.145 1.002.015 1.47-.13.469-.406 1.2-.975 1.402a.76.76 0 01-.095.03c-.004.001-.008.001-.013.002-.26.063-.54.043-.762-.106-.236-.16-.41-.466-.47-.932-.074-.59.053-1.138.336-1.605.3-.534.614-.934.933-1.202.399-.334.7-.464.807-.597.067-.067.067-.132.001-.199-.268-.199-.668-.467-1.002-.733-.332-.266-.665-.532-.865-.799-.2-.267-.25-.398-.233-.535.016-.135.099-.332.298-.535.267-.2.467-.398.63-.598.164-.2.229-.332.196-.468-.033-.135-.134-.332-.343-.465-.21-.133-.453-.133-.716-.2-.268-.135-.483-.2-.715-.333-.232-.133-.36-.332-.362-.465-.005-.131.113-.463.578-.534.29-.07.465-.07.615-.067zM22.05 13.98c.188-.004.368.078.48.266.127.198.17.465.018.798-.48 1.001-1.47 1.8-2.406 2.199-.71.33-1.455.397-2.14.332l.013.001-.011-.001c.09-.59.25-1.193.46-1.739a1.43 1.43 0 011.034-.934c.33-.133.786-.4 1.067-.2.278.135.518.469.632.734l.082.132c.01.001.02-.003.027-.006l.057-.018c.098-.033.14-.066.09-.199-.166-.4-.434-.866-.76-1.198a.411.411 0 01-.103-.132.04.04 0 01.01-.024c.188-.135.5-.066.697-.068zM1.885 14.48c.284.005.574.134.66.532.082.467-.265.868-.662 1.135-.392.267-.8.399-1.116.732-.383.402-.626.868-.654 1.403-.028.534.2.866.51 1.135.27.267.54.4.788.533.224.2.353.333.29.468-.07.135-.254.199-.526.199-.274 0-.62-.066-.9-.332-.28-.266-.555-.733-.65-1.401-.093-.668.03-1.336.255-1.937a3.15 3.15 0 011.01-1.402c.301-.2.523-.399.674-.531.15-.133.29-.267.41-.4l.068-.068a.528.528 0 01.171-.066h.173z"/></svg>
                            Linux
                        </span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" wire:model="platform" value="both" class="text-purple-500 focus:ring-purple-500 bg-white/10 border-white/20" checked>
                        <span class="text-white">{{ __('waiting_list.both') }}</span>
                    </label>
                </div>
            </div>

            <button
                type="submit"
                wire:loading.attr="disabled"
                class="w-full py-4 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-500 hover:to-pink-500 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg hover:shadow-purple-500/25 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center gap-2"
            >
                <span wire:loading.remove>{{ __('waiting_list.join_button') }}</span>
                <span wire:loading class="flex items-center gap-2">
                    <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    {{ __('waiting_list.submitting') }}
                </span>
            </button>
        </form>
    @endif
</div>
