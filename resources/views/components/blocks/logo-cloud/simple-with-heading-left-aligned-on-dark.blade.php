<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <h2 class="text-lg/8 font-semibold text-white">{{ $data['heading'] }}</h2>
            <div
                class="mx-auto mt-10 grid grid-cols-4 items-start gap-x-8 gap-y-10 sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:grid-cols-5">
                @foreach ($data['logos'] as $logo)
                    <img class="col-span-2 max-h-12 w-full object-contain object-left lg:col-span-1 invert"
                        src="{{ Storage::url($logo['image']) }}" alt="{{ $logo['name'] }}" width="158" height="48">
                @endforeach
            </div>
        </div>
    </div>
</div>
