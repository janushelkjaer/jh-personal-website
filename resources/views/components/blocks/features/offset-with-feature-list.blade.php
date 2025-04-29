<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-5">
            <div class="col-span-2">
                <h2 class="text-base/7 font-semibold text-accent">{{ $data['pre_title'] }}</h2>
                <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                    {{ $data['title'] }}</p>
                <div class="mt-6 text-base/7 text-gray-600">{!! $data['content'] !!}</div>
            </div>
            <dl
                class="col-span-3 grid grid-cols-1 gap-x-8 gap-y-10 text-base/7 text-gray-600 sm:grid-cols-2 lg:gap-y-16">

                @foreach ($data['features'] as $feature)
                    <div class="relative pl-9">
                        <dt class="font-semibold text-gray-900">
                            <div class="absolute left-0 top-1 size-5 bg-accent">
                                <flux:icon name="{{ $feature['icon'] }}" variant="solid" class="size-5" />
                            </div>
                            {{ $feature['title'] }}
                        </dt>
                        <dd class="mt-2">{!! $feature['description'] !!}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
