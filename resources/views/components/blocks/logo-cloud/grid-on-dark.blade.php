<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="-mx-6 grid grid-cols-2 gap-0.5 overflow-hidden sm:mx-0 sm:rounded-2xl md:grid-cols-3">
            @foreach ($data['logos'] as $logo)
                <div class="bg-white/5 p-8 sm:p-10">
                    <img class="max-h-12 w-full object-contain invert" src="{{ Storage::url($logo['image']) }}"
                        alt="{{ $logo['name'] }}" width="158" height="48">
                </div>
            @endforeach
        </div>
    </div>
</div>
