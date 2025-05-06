<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-center gap-x-8 gap-y-16 lg:grid-cols-2">
            <div class="mx-auto w-full max-w-xl lg:mx-0">
                <h2 class="text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                    {{ $data['heading'] }}
                </h2>
                <div class="mt-6 text-lg/8 text-gray-300">{!! $data['content'] !!}</div>
                <div class="mt-8 flex items-center gap-x-6">
                    @foreach ($data['buttons'] as $button)
                        <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                            :href="$button['url']" :icon-trailing="$button['icon']">
                            {{ $button['label'] }}
                        </flux:button>
                    @endforeach
                </div>
            </div>
            <div
                class="mx-auto grid w-full max-w-xl grid-cols-2 items-center gap-y-12 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:pl-8">
                @foreach ($data['logos'] as $logo)
                    <img class="max-h-12 w-full object-contain object-left invert"
                        src="{{ Storage::url($logo['image']) }}" alt="{{ $logo['name'] }}" width="105" height="48">
                @endforeach
            </div>
        </div>
    </div>
</div>
