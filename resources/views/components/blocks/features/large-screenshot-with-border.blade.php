<div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="max-w-2xl text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-balance sm:text-6xl">
            {{ $data['title'] }}
        </p>
        <div
            class="relative mt-16 aspect-[2432/1442] h-[36rem] sm:h-auto sm:w-[calc(theme(maxWidth.7xl)-theme(spacing.16))]">
            <div
                class="absolute -inset-2 rounded-[calc(theme(borderRadius.xl)+theme(spacing.2))] shadow-sm ring-1 ring-black/5">
            </div>
            <img alt="{{ $data['title'] }}" src="{{ $data['mockup_image'] }}"
                class="h-full rounded-xl shadow-2xl ring-1 ring-black/10 object-cover w-full">
        </div>
    </div>
</div>
