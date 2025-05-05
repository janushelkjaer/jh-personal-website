<div class="bg-gray-900 py-24 sm:py-32">
    <div class="relative isolate">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="mx-auto flex max-w-2xl flex-col gap-16 bg-white/5 px-6 py-16 ring-1 ring-white/10 sm:rounded-3xl sm:p-8 lg:mx-0 lg:max-w-none lg:flex-row lg:items-center lg:py-20 xl:gap-x-20 xl:px-20">
                <img class="h-96 w-full flex-none rounded-2xl object-cover shadow-xl lg:aspect-square lg:h-auto lg:max-w-sm"
                    src="{{ Storage::url($data['image']) }}" alt="{{ $data['title'] }}">
                <div class="w-full flex-auto">
                    <h2 class="text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                        {!! $data['title'] !!}
                    </h2>
                    <div class="mt-6 text-pretty text-lg/8 text-gray-300">
                        {!! $data['content'] !!}
                    </div>
                    @if ($data['key_points'] && count($data['key_points']) > 0)
                        <ul role="list"
                            class="mt-10 grid grid-cols-1 gap-x-8 gap-y-3 text-base/7 text-white sm:grid-cols-2">
                            @foreach ($data['key_points'] as $key_point)
                                <li class="flex gap-x-3">
                                    <svg class="h-7 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $key_point['title'] }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="mt-10 flex gap-x-6">
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
        <div class="absolute inset-x-0 -top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
            aria-hidden="true">
            <div class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
            </div>
        </div>
    </div>
</div>
