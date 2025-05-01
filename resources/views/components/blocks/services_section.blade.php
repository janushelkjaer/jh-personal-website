@php
    $data = $attributes['info']['data'];

    $style = 'default'; // $data['style'];

@endphp

@if ($style)
    <div class="-mx-8">
        <x-dynamic-component :component="'blocks.services.' . $style" :data="$data" />
    </div>
@endif
