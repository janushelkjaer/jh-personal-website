@php
    $data = $attributes['info']['data'];
@endphp

<div class="py-6 prose">
    <x-markdown theme="github-dark">
        {!! $data['content'] !!}
    </x-markdown>
</div>
