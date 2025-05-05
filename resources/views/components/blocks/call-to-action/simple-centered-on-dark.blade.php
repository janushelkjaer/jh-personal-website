<div class="relative isolate overflow-hidden bg-gray-900">
    <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
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
        </div>
    </div>
    <svg viewBox="0 0 1024 1024"
        class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]"
        aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#8d958450-c69f-4251-94bc-4e091a323369)"
            fill-opacity="0.7" />
        <defs>
            <radialGradient id="8d958450-c69f-4251-94bc-4e091a323369">
                <stop stop-color="#7775D6" />
                <stop offset="1" stop-color="#E935C1" />
            </radialGradient>
        </defs>
    </svg>
</div>
