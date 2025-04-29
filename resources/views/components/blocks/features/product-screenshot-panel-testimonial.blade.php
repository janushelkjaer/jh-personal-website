{{-- <div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl md:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:grid-cols-2 lg:items-start">
            <div class="px-6 lg:px-0 lg:pr-4 lg:pt-4">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-lg">
                    <h2 class="text-base/7 font-semibold text-accent">
                        {{ $data['pre_title'] }}
                    </h2>
                    <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                        {{ $data['title'] }}
                    </p>
                    <p class="mt-6 text-lg/8 text-gray-600">
                        {!! $data['content'] !!}
                    </p>
                    <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                        @foreach ($data['features'] as $feature)
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <div class="absolute left-1 top-1 text-accent">
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
            <div class="sm:px-6 lg:px-0">
                <div
                    class="relative isolate overflow-hidden bg-indigo-500 px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-16 sm:pr-0 sm:pt-16 lg:mx-0 lg:max-w-none">
                    <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white"
                        aria-hidden="true"></div>
                    <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                        <img src="{{ $data['mockup_image'] }}" alt="{{ $data['title'] }}" width="2432" height="1442"
                            class="-mb-12 w-[57rem] max-w-none rounded-tl-xl bg-gray-800 ring-1 ring-white/10">
                    </div>
                    <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl"
                        aria-hidden="true"></div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
            <div class="lg:pr-4 lg:pt-4">
                <div class="lg:max-w-lg">
                    <h2 class="text-base/7 font-semibold text-accent-content">
                        {{ $data['pre_title'] }}
                    </h2>
                    <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                        {{ $data['title'] }}
                    </p>
                    <div class="mt-6 text-lg/8 text-gray-600">
                        {!! $data['content'] !!}
                    </div>
                    <div class="mt-8">
                        @foreach ($data['buttons'] as $button)
                            <flux:button :variant="$button['variant']" :href="$button['url']"
                                :icon-trailing="$button['icon']">
                                {{ $button['label'] }}
                            </flux:button>
                        @endforeach
                    </div>
                    <figure class="mt-16 border-l border-gray-200 pl-8 text-gray-600">
                        <blockquote class="text-base/7">
                            <p>“{{ $data['testimonial_quote'] }}”</p>
                        </blockquote>
                        <figcaption class="mt-6 flex gap-x-4 text-sm/6">
                            <img src="{{ $data['testimonial_image'] }}" alt=""
                                class="size-6 flex-none rounded-full">
                            <div><span class="font-semibold text-gray-900">{{ $data['testimonial_name'] }}</span> –
                                {{ $data['testimonial_title'] }}</div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png"
                alt="Product screenshot"
                class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:ml-0"
                width="2432" height="1442">
        </div>
    </div>
</div>
