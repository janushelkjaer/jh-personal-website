@php
    $data = $attributes['info']['data'];

    $style = $data['style'];

@endphp

@if ($style)
    <div>
        <x-dynamic-component :component="'blocks.contact.' . $style" :data="$data" />
    </div>
@endif
