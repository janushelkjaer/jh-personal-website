@php
    $data = $attributes['info']['data'];

    $overlayedText = '';
@endphp

<div class="flex justify-center py-6">
    <figure class="">
        <div class="relative">
            <img class="aspect-video rounded-xl bg-gray-50 object-cover" src="{{ Storage::url($data['url']) }}"
                alt="{{ $data['alt'] }}">


            @if ($overlayedText)
                <div
                    class="z-30 absolute -mt-24 left-0 right-24 bg-white bg-opacity-75 shadow border border-zinc-100 p-3 rounded-r">
                    {{ $data['alt'] }}
                </div>
            @endif

        </div>

        <figcaption class="mt-4 flex gap-x-2 text-sm leading-6 text-gray-500">
            <svg class="mt-0.5 h-5 w-5 flex-none text-gray-300" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z"
                    clip-rule="evenodd" />
            </svg>
            {!! $data['alt'] !!}
        </figcaption>
    </figure>
</div>
