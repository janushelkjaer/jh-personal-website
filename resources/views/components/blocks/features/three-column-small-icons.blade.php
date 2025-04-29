<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">
                {{ $data['title'] }}
            </p>
            <div class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </div>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                @foreach ($data['features'] as $feature)
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900">
                            <div class="size-5 flex-none text-indigo-400">
                                <flux:icon name="{{ $feature['icon'] }}" variant="solid" class="size-5" />
                            </div>
                            {{ $feature['title'] }}
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600">
                            <div class="flex-auto">
                                {!! $feature['description'] !!}
                            </div>
                            <div class="mt-6">
                                @foreach ($feature['buttons'] as $button)
                                    <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                                        :href="$button['url']" :icon-trailing="$button['icon']">
                                        {{ $button['label'] }}
                                    </flux:button>
                                @endforeach
                            </div>
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
