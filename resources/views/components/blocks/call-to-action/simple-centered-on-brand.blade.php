<div class="bg-indigo-700">
    <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                {{ $data['title'] }}
            </h2>
            <div class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-indigo-200">
                {!! $data['content'] !!}
            </div>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                @foreach ($data['buttons'] as $button)
                    <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                        :href="$button['url']" :icon-trailing="$button['icon']">
                        {{ $button['label'] }}
                    </flux:button>
                @endforeach
            </div>
        </div>
    </div>
</div>
