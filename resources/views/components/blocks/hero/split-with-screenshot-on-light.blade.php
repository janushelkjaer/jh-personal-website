<div class="relative isolate overflow-hidden bg-white">
    <svg class="absolute inset-0 -z-10 size-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
        aria-hidden="true">
        <defs>
            <pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" x="50%" y="-1"
                patternUnits="userSpaceOnUse">
                <path d="M.5 200V.5H200" fill="none" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" />
    </svg>
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:shrink-0 lg:pt-8">
            <x-app-logo-icon class="h-12" />
            <div class="mt-24 sm:mt-32 lg:mt-16">
                @if (1 == 2)
                    <a href="#" class="inline-flex space-x-6">
                        <span
                            class="rounded-full bg-indigo-600/10 px-3 py-1 text-sm/6 font-semibold text-indigo-600 ring-1 ring-inset ring-indigo-600/10">What's
                            new</span>
                        <span class="inline-flex items-center space-x-2 text-sm/6 font-medium text-gray-600">
                            <span>Just shipped v1.0</span>
                            <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                @endif
            </div>
            <h1 class="mt-10 text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                {!! $data['hero_title'] !!}
            </h1>
            <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8 lg:min-w-xl">
                {!! $data['hero_content'] !!}
            </p>
            <div class="mt-10 flex items-center gap-x-6">
                @foreach ($data['buttons'] as $button)
                    <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                        :href="$button['url']" :icon-trailing="$button['icon']">
                        {{ $button['label'] }}
                    </flux:button>
                @endforeach
            </div>
        </div>
        <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
            <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                <div
                    class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                    <img src="{{ $data['mockup_image'] }}" alt="App screenshot" width="2432" height="1442"
                        class="w-[76rem] rounded-md shadow-2xl ring-1 ring-gray-900/10 h-[45rem] object-cover object-top">
                </div>
            </div>
        </div>
    </div>
</div>
