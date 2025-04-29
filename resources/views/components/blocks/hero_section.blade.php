@php
    $data = $attributes['info']['data'];

    $style = $data['style'];

@endphp

@if ($style)
    <div class="-mx-8">
        <x-dynamic-component :component="'blocks.hero.' . $style" :data="$data" />
    </div>
@endif
