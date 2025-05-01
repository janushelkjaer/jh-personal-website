<x-layouts.app :title="__('Blog')">

    <div class="py-3 -mt-8 -mx-8 bg-zinc-100 dark:bg-neutral-800">
        <div class="max-w-7xl mx-auto px-8">
            <flux:breadcrumbs>
                <flux:breadcrumbs.item href="{{ route('home') }}" icon="home" />
                <flux:breadcrumbs.item>Blog</flux:breadcrumbs.item>
            </flux:breadcrumbs>
        </div>
    </div>

    {{-- <div class="max-w-7xl mx-auto pt-12">
        <div class="pb-6 flex justify-between">
            <div class="prose dark:prose-invert">
                <h1 class="leading-tight -mb-3">{{ $category->title ?? 'Blog' }}</h1>
                <p class="text-gray-500">
                    {{ $category->description ?? 'I write about app development, marketing, tech tools and AI.' }}</p>
            </div>
            <div class="flex items-end gap-2">

                <flux:button icon="squares-2x2" />

            </div>
        </div>
        <flux:separator />

    </div> --}}

    <div class="bg-white py-24 sm:py-32 dark:bg-neutral-900 -mx-8">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-gray-900 dark:text-white sm:text-7xl">
                    {{ $category->title ?? 'Blog' }}
                </h2>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-500 dark:text-neutral-400 sm:text-xl/8">
                    {{ $category->description ?? 'I write about app development, marketing, tech tools and AI.' }}</p>
            </div>
        </div>
    </div>



    <div class="max-w-7xl mx-auto py-12">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            <div class="col-span-1  p-6 rounded">

                <div class="space-y-3">
                    <flux:heading>Categories</flux:heading>

                    <flux:navlist class="w-64">
                        <flux:navlist.item href="{{ route('posts.index') }}">All Posts</flux:navlist.item>
                        <flux:separator class="my-3" variant="subtle" />
                        @foreach ($categories as $category)
                            <flux:navlist.item href="{{ route('categories.show', $category->slug) }}">
                                {{ $category->title }}
                            </flux:navlist.item>
                        @endforeach


                        {{-- <flux:navlist.group heading="Account" expandable>
                            <flux:navlist.item href="#">Profile</flux:navlist.item>
                            <flux:navlist.item href="#">Settings</flux:navlist.item>
                            <flux:navlist.item href="#">Billing</flux:navlist.item>
                        </flux:navlist.group> --}}
                    </flux:navlist>
                </div>
            </div>
            <div class="col-span-3">
                @if ($posts->count() > 0)

                    <div class="grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 ">
                        @foreach ($posts as $post)
                            @php
                                $mediaItems = $post->getMedia('posts');
                                $publicFullUrl = isset($mediaItems[0]) ? $mediaItems[0]->getFullUrl() : '';

                            @endphp

                            <flux:card class="space-y-3 flex flex-col">
                                <a href="{{ route('posts.show', $post->slug) }}"
                                    class="relative w-full hover:opacity-80 transition-opacity duration-300">
                                    <img src="{{ $publicFullUrl }}" alt=""
                                        class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                                </a>
                                <div class="flex-1 space-y-3 prose dark:prose-invert pb-3">
                                    <span
                                        class="text-xs text-gray-500">{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</span>
                                    <flux:heading>{{ $post->title }}</flux:heading>
                                    <flux:text class="text-neutral-500 text-sm">{{ $post->excerpt }}</flux:text>
                                </div>
                                <div class="flex justify-start mt-auto align-bottom">
                                    <flux:button icon-trailing="arrow-right" variant="primary"
                                        href="{{ route('posts.show', $post->slug) }}">
                                        {{ __('navigation.read_post') }}
                                    </flux:button>
                                </div>
                            </flux:card>
                        @endforeach
                        {{-- @foreach ($posts as $key => $post)
                            @php
                                $mediaItems = $post->getMedia('posts');
                                $publicFullUrl = isset($mediaItems[0]) ? $mediaItems[0]->getFullUrl() : '';
                            @endphp
                            <flux:card class="flex flex-col md:flex-row">
                                <a href="{{ route('posts.show', $post->slug) }}"
                                    class="block hover:opacity-75 transition-opacity duration-300 border-neutral-300 border rounded shadow-inner">
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
                        @endforeach --}}
                    </div>
                @else
                    <div class="bg-neutral-50 p-3 rounded-lg">
                        <flux:text>No posts found.</flux:text>
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-layouts.app>
{{--
