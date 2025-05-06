<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="mx-auto grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:grid-cols-5">
            @foreach ($data['logos'] as $logo)
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1 invert"
                    src="{{ Storage::url($logo['image']) }}" alt="{{ $logo['name'] }}" width="158" height="48">
            @endforeach
        </div>
        <div class="mt-16 flex justify-center">
            <p class="relative rounded-full bg-gray-800 px-4 py-1.5 text-sm/6 text-gray-300">
                <span class="hidden md:inline">{{ $data['cta_text'] }}</span>
                <a href="{{ $data['cta_url'] }}" class="font-semibold text-white"><span class="absolute inset-0"
                        aria-hidden="true"></span> {{ $data['cta_label'] }} <span aria-hidden="true">&rarr;</span></a>
            </p>
        </div>
    </div>
</div>
