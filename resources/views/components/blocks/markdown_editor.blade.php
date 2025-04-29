@php
    $data = $attributes['info']['data'];
@endphp

<div class="max-w-7xl mx-auto">
    <div class="py-6 prose dark:prose-invert ">
        <x-markdown theme="material-theme">
            {!! $data['content'] !!}
        </x-markdown>
    </div>

</div>
