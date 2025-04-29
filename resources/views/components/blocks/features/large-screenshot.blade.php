<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl sm:text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600">
                {{ $data['pre_title'] }}
            </h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-balance sm:text-5xl">
                {{ $data['title'] }}
            </p>
            <p class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </p>
        </div>
    </div>
    <div class="relative overflow-hidden pt-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <img src="{{ $data['mockup_image'] }}" alt="{{ $data['title'] }}"
                class="mb-[-12%] rounded-xl shadow-2xl ring-1 ring-gray-900/10" width="2432" height="1442">
            <div class="relative" aria-hidden="true">
                <div class="absolute -inset-x-20 bottom-0 bg-gradient-to-t from-white pt-[7%]"></div>
            </div>
        </div>
    </div>
    <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8">
        <dl
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base/7 text-gray-600 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">
            @foreach ($data['features'] as $feature)
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <div class="absolute left-1 top-1 text-indigo-600">
                            <flux:icon name="{{ $feature['icon'] }}" variant="solid" class="size-5" />
                        </div>
                        {{ $feature['title'] }}
                    </dt>
                    <dd class="inline">
                        {{ $feature['description'] }}
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>
</div>
