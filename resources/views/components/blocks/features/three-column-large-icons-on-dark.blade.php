<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                {{ $data['title'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-gray-300">
                {!! $data['content'] !!}
            </div>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                @foreach ($data['features'] as $feature)
                    <div class="flex flex-col">
                        <dt class="text-base/7 font-semibold text-white">
                            <div class="mb-6 flex size-10 items-center justify-center rounded-lg bg-indigo-500">
                                <div class="size-6 text-white">
                                    <flux:icon name="{{ $feature['icon'] }}" variant="solid" class="size-6" />
                                </div>
                            </div>
                            {{ $feature['title'] }}
                        </dt>
                        <dd class="mt-1 flex flex-auto flex-col text-base/7 text-gray-300">
                            <p class="flex-auto">
                                {!! $feature['description'] !!}
                            </p>
                            <p class="mt-6">
                                @foreach ($feature['buttons'] as $button)
                                    <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                                        :href="$button['url']" :icon-trailing="$button['icon']">
                                        {{ $button['label'] }}
                                    </flux:button>
                                @endforeach
                            </p>
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
