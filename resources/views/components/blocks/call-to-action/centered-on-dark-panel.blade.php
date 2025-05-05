<div class="bg-white">
    <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
        <div
            class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                {{ $data['title'] }}
            </h2>
            <div class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-gray-300">
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
            <svg viewBox="0 0 1024 1024"
                class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]"
                aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)"
                    fill-opacity="0.7" />
                <defs>
                    <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                        <stop stop-color="#7775D6" />
                        <stop offset="1" stop-color="#E935C1" />
                    </radialGradient>
                </defs>
            </svg>
        </div>
    </div>
</div>
