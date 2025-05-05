<div class="bg-indigo-100">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:justify-between lg:px-8">
        <h2 class="max-w-2xl text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
            {!! $data['title'] !!}
        </h2>
        <div class="mt-10 flex items-center gap-x-6 lg:mt-0 lg:shrink-0">
            @foreach ($data['buttons'] as $button)
                <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                    :href="$button['url']" :icon-trailing="$button['icon']">
                    {{ $button['label'] }}
                </flux:button>
            @endforeach
        </div>
    </div>
</div>
