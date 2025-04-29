<div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:ml-auto lg:pl-4 lg:pt-4">
                <div class="lg:max-w-lg">
                    <h2 class="text-base/7 font-semibold text-indigo-600">
                        {{ $data['pre_title'] }}
                    </h2>
                    <div class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                        {!! $data['title'] !!}
                    </div>
                    <div class="mt-6 prose dark:prose-invert text-lg">
                        {!! $data['content'] !!}
                    </div>
                    <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                        @foreach ($data['features'] as $feature)
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <div class="absolute left-1 top-1 text-indigo-600">
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
                    </dl>
                </div>
            </div>
            <div class="flex items-start justify-end lg:order-first">
                <img src="{{ $data['mockup_image'] }}" alt="{{ $data['title'] }}"
                    class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                    width="2432" height="1442">
            </div>
        </div>
    </div>
</div>
