<section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div
        class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
    </div>
    <div
        class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
    </div>
    <div class="mx-auto max-w-2xl lg:max-w-4xl">
        <img class="mx-auto h-12" src="{{ Storage::url($data['testimonials'][0]['logo']) }}" alt="">
        <figure class="mt-10">
            <blockquote class="text-center text-xl/8 font-semibold text-gray-900 sm:text-2xl/9">
                <p>“{{ $data['testimonials'][0]['quote'] }}”</p>
            </blockquote>
            <figcaption class="mt-10">
                <img class="mx-auto size-10 rounded-full object-cover object-top"
                    src="{{ Storage::url($data['testimonials'][0]['image']) }}" alt="">
                <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                    <div class="font-semibold text-gray-900">{{ $data['testimonials'][0]['name'] }}</div>
                    <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="text-gray-600">{{ $data['testimonials'][0]['description'] }}</div>
                </div>
            </figcaption>
        </figure>
    </div>
</section>
