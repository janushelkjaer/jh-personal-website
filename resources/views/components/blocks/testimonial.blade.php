@php
    $data = $attributes['info']['data'];
@endphp

<figure class="mt-10 border-l border-indigo-600 pl-9">
    <blockquote class="font-semibold text-gray-900">
        <p>“{{ $data['quote'] }}”</p>
    </blockquote>
    @if ($data['author'])
        <figcaption class="mt-6 flex gap-x-4">
            @if ($data['image_url'])
                <img class="h-6 w-6 flex-none rounded-full bg-gray-50" src="{{ Storage::url($data['image_url']) }}"
                    alt="">
            @endif
            <div class="text-sm leading-6"><strong class="font-semibold text-gray-900">{{ $data['author'] }}</strong>
                @if ($data['author_role'] && $data['author_organization'])
                    –
                    {{ $data['author_role'] }}, {{ $data['author_organization'] }}
                @endif
            </div>
        </figcaption>
    @endif
</figure>
