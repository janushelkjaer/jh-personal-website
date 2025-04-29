<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base/7 font-semibold text-accent">
                {{ $data['pre_title'] }}
            </h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">
                {{ $data['title'] }}
            </p>
            <div class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </div>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                @foreach ($data['features'] as $feature)
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex size-10 items-center justify-center rounded-lg bg-accent">
                                <flux:icon name="{{ $feature['icon'] }}" variant="solid" class="size-6 text-white" />
                            </div>
                            {{ $feature['title'] }}
                        </dt>
                        <dd class="mt-2 text-base/7 text-gray-600">
                            {!! $feature['description'] !!}
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
