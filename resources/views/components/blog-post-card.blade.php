@props(['post'])

@php
    $mediaItems = $post->getMedia('posts');
    $publicFullUrl = isset($mediaItems[0])
        ? $mediaItems[0]->getFullUrl()
        : 'https://placehold.co/600x400?text=' . $post->title . '';

@endphp

<flux:card class="space-y-3 flex flex-col">
    <a href="{{ route('posts.show', $post->slug) }}"
        class="relative w-full hover:opacity-80 transition-opacity duration-300">

        <div class="w-full h-full shadow-inner p-3 rounded-lg bg-neutral-100  flex items-center justify-center">
            <div class="aspect-[4/3] rounded-lg  overflow-hidden">
                <img src="{{ $publicFullUrl }}" alt="{{ $post->title }}"
                    class="h-full w-full rounded-lg bg-neutral-100 object-cover">
            </div>
        </div>
    </a>
    <div class="flex-1 space-y-3 prose dark:prose-invert pb-3">
        <span class="text-xs text-gray-500">{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</span>
        <flux:heading>{{ $post->title }}</flux:heading>
        <flux:text class="text-neutral-500 text-sm">{{ $post->excerpt }}</flux:text>
    </div>
    <div class="flex justify-start mt-auto align-bottom">
        <flux:button icon-trailing="arrow-right" variant="primary" href="{{ route('posts.show', $post->slug) }}">
            {{ __('navigation.read_post') }}
        </flux:button>
    </div>
</flux:card>
