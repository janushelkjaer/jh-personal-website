@php
    $data = $attributes['info']['data'];
@endphp


<div class=" bg-indigo-100 py-6 rounded">
    <div
        class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow border border-gray-50 max-w-md mx-auto">
        <div class="px-4 py-5 sm:px-6">
            <span class="font-medium">{{ $data['prompt_text'] }}</span>
        </div>
        <div class="px-4 py-5 sm:p-6 ">
            <p class="text-sm">{{ $data['description'] }}</p>

        </div>
        <div class="bg-gray-50 px-4 py-4 sm:px-6 flex justify-end">
            <div x-data="{
                link: '{{ $data['prompt_text'] }}',
                copied: false,
                timeout: null,
                copy() {
                    $clipboard(this.link)
            
                    this.copied = true
            
                    clearTimeout(this.timeout)
            
                    this.timeout = setTimeout(() => {
                        this.copied = false
                    }, 1000)
                }
            }">
                <span class="hidden"> <input type="text" value="{{ $data['prompt_text'] }}" readonly /></span>
                <button x-on:click="copy" :class="copied ? 'bg-indigo-600 text-white' : 'bg-white text-gray-700'"
                    class="py-3 px-3 rounded m-1 shadow flex items-center justify-center text-xs transition">
                    {{ __('actions.click_to_copy') }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                    </svg>

                </button>
            </div>
        </div>
    </div>
</div>
