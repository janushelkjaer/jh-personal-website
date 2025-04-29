<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-5">
            <h2 class="col-span-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {{ $data['title'] }}
            </h2>
            <dl class="col-span-3 grid grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2">
                @foreach ($data['features'] as $feature)
                    <div>
                        <dt class="text-base/7 font-semibold text-gray-900">
                            <div class="mb-6 flex size-10 items-center justify-center rounded-lg bg-accent">
                                <div class="size-6 text-white">
                                    <flux:icon name="{{ $feature['icon'] }}" variant="solid" class="size-6" />
                                </div>
                            </div>
                            {{ $feature['title'] }}
                        </dt>
                        <dd class="mt-1 text-base/7 text-gray-600">
                            {!! $feature['description'] !!}
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
