<section class="bg-white px-6 py-24 sm:py-32 lg:px-8">
    <figure class="mx-auto max-w-2xl">
        <p class="sr-only">5 out of 5 stars</p>
        <div class="flex gap-x-1">
            <svg class="size-5 flex-none {{ $data['testimonials'][0]['rating'] >= 1 ? 'text-amber-500' : 'text-gray-300' }}"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                    clip-rule="evenodd" />
            </svg>
            <svg class="size-5 flex-none {{ $data['testimonials'][0]['rating'] >= 2 ? 'text-amber-500' : 'text-gray-300' }}"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                    clip-rule="evenodd" />
            </svg>
            <svg class="size-5 flex-none {{ $data['testimonials'][0]['rating'] >= 3 ? 'text-amber-500' : 'text-gray-300' }}"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                    clip-rule="evenodd" />
            </svg>
            <svg class="size-5 flex-none {{ $data['testimonials'][0]['rating'] >= 4 ? 'text-amber-500' : 'text-gray-300' }}"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                    clip-rule="evenodd" />
            </svg>
            <svg class="size-5 flex-none {{ $data['testimonials'][0]['rating'] >= 5 ? 'text-amber-500' : 'text-gray-300' }}"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <blockquote class="mt-10 text-xl/8 font-semibold tracking-tight text-gray-900 sm:text-2xl/9">
            <p>“{{ $data['testimonials'][0]['quote'] }}”</p>
        </blockquote>
        <figcaption class="mt-10 flex items-center gap-x-6">
            <img class="size-12 rounded-full bg-gray-50 object-cover object-center"
                src="{{ Storage::url($data['testimonials'][0]['image']) }}"
                alt="{{ $data['testimonials'][0]['name'] }}">
            <div class="text-sm/6">
                <div class="font-semibold text-gray-900">{{ $data['testimonials'][0]['name'] }}</div>
                <div class="mt-0.5 text-gray-600">{{ $data['testimonials'][0]['description'] }}</div>
            </div>
        </figcaption>
    </figure>
</section>
