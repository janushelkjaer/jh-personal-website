@php
    $testimonials = $data['testimonials'];

    $firstTestimonial = array_shift($testimonials);

    $cols = array_chunk($testimonials, ceil(count($testimonials) / 4));

    #dd($cols);

    $firstCol = array_shift($cols);
    $secondCol = array_shift($cols);
    $thirdCol = array_shift($cols);
    $fourthCol = array_shift($cols);
@endphp
<div class="relative isolate bg-white pb-32 pt-24 sm:pt-32">
    <div class="absolute inset-x-0 top-1/2 -z-10 -translate-y-1/2 transform-gpu overflow-hidden opacity-30 blur-3xl"
        aria-hidden="true">
        <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="absolute inset-x-0 top-0 -z-10 flex transform-gpu overflow-hidden pt-32 opacity-25 blur-3xl sm:pt-40 xl:justify-end"
        aria-hidden="true">
        <div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600">{{ $data['pre_heading'] }}</h2>
            <p class="mt-2 text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {{ $data['heading'] }}</p>
        </div>
        <div
            class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm/6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
            <figure
                class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
                <blockquote class="p-6 text-lg font-semibold tracking-tight text-gray-900 sm:p-12 sm:text-xl/8">
                    <p>“{{ $firstTestimonial['quote'] }}”</p>
                </blockquote>
                <figcaption
                    class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t border-gray-900/10 px-6 py-4 sm:flex-nowrap">
                    <img class="size-10 flex-none rounded-full bg-gray-50 object-cover object-center"
                        src="{{ $firstTestimonial['image'] ? Storage::url($firstTestimonial['image']) : 'https://placehold.co/200x200?text=' . $firstTestimonial['name'] }}"
                        alt="">
                    <div class="flex-auto">
                        <div class="font-semibold">{{ $firstTestimonial['name'] }}</div>
                        <div class="text-gray-600">{{ $firstTestimonial['description'] }}</div>
                    </div>
                    <img class="h-10 w-auto flex-none" src="{{ Storage::url($firstTestimonial['logo']) }}"
                        alt="">
                </figcaption>
            </figure>
            <div class="space-y-8 xl:contents xl:space-y-0">
                <div class="space-y-8 xl:row-span-2">
                    @if (isset($firstCol) && count($firstCol) > 0)
                        @foreach ($firstCol as $testimonial)
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>“{{ $testimonial['quote'] }}”</p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50 object-cover object-center"
                                        src="{{ $testimonial['image'] ? Storage::url($testimonial['image']) : 'https://placehold.co/200x200?text=' . $testimonial['name'] }}"
                                        alt="">
                                    <div>
                                        <div class="font-semibold">{{ $testimonial['name'] }}</div>
                                        <div class="text-gray-600">{{ $testimonial['description'] }}</div>
                                    </div>
                                </figcaption>
                            </figure>
                        @endforeach
                    @endif
                    <!-- More testimonials... -->
                </div>
                <div class="space-y-8 xl:row-start-1">
                    @if (isset($secondCol) && count($secondCol) > 0)
                        @foreach ($secondCol as $testimonial)
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>“{{ $testimonial['quote'] }}”</p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50 object-cover object-center"
                                        src="{{ $testimonial['image'] ? Storage::url($testimonial['image']) : 'https://placehold.co/200x200?text=' . $testimonial['name'] }}"
                                        alt="">
                                    <div>
                                        <div class="font-semibold">{{ $testimonial['name'] }}</div>
                                        <div class="text-gray-600">{{ $testimonial['description'] }}</div>
                                    </div>
                                </figcaption>
                            </figure>
                        @endforeach
                    @endif

                    <!-- More testimonials... -->
                </div>
            </div>
            <div class="space-y-8 xl:contents xl:space-y-0">
                <div class="space-y-8 xl:row-start-1">

                    @if (isset($thirdCol) && count($thirdCol) > 0)
                        @foreach ($thirdCol as $testimonial)
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>“{{ $testimonial['quote'] }}”</p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50 object-cover object-center"
                                        src="{{ $testimonial['image'] ? Storage::url($testimonial['image']) : 'https://placehold.co/200x200?text=' . $testimonial['name'] }}"
                                        alt="">
                                    <div>
                                        <div class="font-semibold">{{ $testimonial['name'] }}</div>
                                        <div class="text-gray-600">{{ $testimonial['description'] }}</div>
                                    </div>
                                </figcaption>
                            </figure>
                        @endforeach
                    @endif

                    <!-- More testimonials... -->
                </div>
                <div class="space-y-8 xl:row-span-2">

                    @if (isset($fourthCol) && count($fourthCol) > 0)
                        @foreach ($fourthCol as $testimonial)
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>“{{ $testimonial['quote'] }}”</p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50 object-cover object-center"
                                        src="{{ $testimonial['image'] ? Storage::url($testimonial['image']) : 'https://placehold.co/200x200?text=' . $testimonial['name'] }}"
                                        alt="">
                                    <div>
                                        <div class="font-semibold">{{ $testimonial['name'] }}</div>
                                        <div class="text-gray-600">{{ $testimonial['description'] }}</div>
                                    </div>
                                </figcaption>
                            </figure>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
