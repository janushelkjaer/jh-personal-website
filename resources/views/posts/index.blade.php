<x-layouts.app :title="__('Blog')">

    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            <div class="col-span-1">
                <flux:navlist class="w-64">
                    <flux:navlist.item href="#" icon="home">Dashboard</flux:navlist.item>
                    <flux:navlist.item href="#" icon="list-bullet">Transactions</flux:navlist.item>

                    <flux:navlist.group heading="Account" expandable>
                        <flux:navlist.item href="#">Profile</flux:navlist.item>
                        <flux:navlist.item href="#">Settings</flux:navlist.item>
                        <flux:navlist.item href="#">Billing</flux:navlist.item>
                    </flux:navlist.group>
                </flux:navlist>
            </div>
            <div class="col-span-3">
                @if ($posts->count() > 0)

                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($posts as $key => $post)
                            @php
                                $mediaItems = $post->getMedia('posts');
                                $publicFullUrl = isset($mediaItems[0]) ? $mediaItems[0]->getFullUrl() : '';
                            @endphp
                            <flux:card class="flex flex-col md:flex-row">
                                <a href="{{ route('posts.show', $post->slug) }}"
                                    class="block hover:opacity-75 transition-opacity duration-300 border-yellow-500 border-4 rounded shadow">
                                    <img src="{{ $publicFullUrl }}" alt="{{ $post->title }}"
                                        class="object-cover rounded shadow  h-48 w-64">
                                </a>
                                <div class="px-6 py-3 flex flex-col w-full">
                                    <flux:heading size="lg">{{ $post->title }}</flux:heading>

                                    <flux:subheading class="mb-4">
                                        {{ $post->created_at->diffForHumans() }}
                                    </flux:subheading>

                                    <flux:subheading class="mb-4">
                                        {{ $post->excerpt }}
                                    </flux:subheading>

                                    <flux:button class="ml-auto mt-auto" icon-trailing="arrow-right"
                                        href="{{ route('posts.show', $post->slug) }}">
                                        {{ __('navigation.read_post') }}
                                    </flux:button>
                                </div>
                            </flux:card>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-warning" role="alert">
                        No posts found.
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-layouts.app>
{{--
