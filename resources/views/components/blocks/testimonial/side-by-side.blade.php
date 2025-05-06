<section class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            @foreach ($data['testimonials'] as $key => $testimonial)
                @php
                    $styleClasses =
                        $key % 2 == 0
                            ? 'pb-10 sm:pb-16 lg:pb-0 lg:pr-8 xl:pr-20'
                            : 'border-t border-gray-900/10 pt-10 sm:pt-16 lg:border-l lg:border-t-0 lg:pl-8 lg:pt-0 xl:pl-20';
                @endphp

                <div class="flex flex-col {{ $styleClasses }}">
                    <img class="h-12 self-start" src="{{ Storage::url($testimonial['logo']) }}" alt="">
                    <figure class="mt-10 flex flex-auto flex-col justify-between">
                        <blockquote class="text-lg/8 text-gray-900">
                            <p>“{{ $testimonial['quote'] }}”</p>
                        </blockquote>
                        <figcaption class="mt-10 flex items-center gap-x-6">
                            <img class="size-14 rounded-full bg-gray-50 object-cover object-center"
                                src="{{ Storage::url($testimonial['image']) }}" alt="">
                            <div class="text-base">
                                <div class="font-semibold text-gray-900">{{ $testimonial['name'] }}</div>
                                <div class="mt-1 text-gray-500">{{ $testimonial['description'] }}</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</section>
