@php
    $data = $attributes['info']['data'];

    $style = $data['style'];

@endphp

@if ($style)
    <div class="">
        <x-dynamic-component :component="'blocks.bento-grid.' . $style" :data="$data" />
    </div>
@endif
