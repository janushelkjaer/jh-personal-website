<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-base/7 font-semibold text-white">
                {{ $data['pre_title'] }}
            </h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                {{ $data['title'] }}
            </p>
            <div class="mt-6 text-lg/8 text-gray-300">
                {!! $data['content'] !!}
            </div>
        </div>
        <dl
            class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base/7 text-gray-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-16">
            @foreach ($data['features'] as $feature)
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-white">
                        <div class="absolute left-1 top-1 size-5 rounded text-white">
                            <flux:icon name="{{ $feature['icon'] }}" variant="solid" class="size-5" />
                        </div>
                        {{ $feature['title'] }}
                    </dt>
                    <dd class="inline">
                        {!! $feature['description'] !!}
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>
</div>
