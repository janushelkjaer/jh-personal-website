@php
    $data = $attributes['info']['data'];

@endphp

@if ($data['items'] && count($data['items']) > 0)
    <ul role="list" class="mt-8 max-w-xl space-y-8 text-gray-600">

        @foreach ($data['items'] as $key => $item)
            <li class="flex gap-x-3">




                @svg($item['icon'], 'mt-1 h-5 w-5 flex-none text-indigo-600')

                <span>
                    {!! $item['text'] !!}
                </span>
            </li>
        @endforeach


    </ul>
@endif
