@php
    $data = $attributes['info']['data'];
    $posts = \App\Models\Post::all()->sortByDesc('published_at')->take($data['per_page']);

    #dd($posts->shift());

@endphp

@if ($posts->count() > 0)
    <div class="py-24 sm:py-32 relative">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">From the blog
                </h2>
                <p class="mt-2 text-lg/8 text-gray-600">Learn how to grow your business with our expert advice.</p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">


                @foreach ($posts as $post)
                    @php
                        $mediaItems = $post->getMedia('posts');
                        $publicFullUrl = isset($mediaItems[0]) ? $mediaItems[0]->getFullUrl() : '';

                    @endphp
                    {{-- <article class="flex flex-col items-start justify-between">
                        <div class="relative w-full">
                            <img src="{{ $publicFullUrl }}" alt=""
                                class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div class="max-w-xl">
                            <div class="mt-8 flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                                <a href="#"
                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                    <a href="{{ route('routes.article', $post->slug) }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error
                                    voluptates
                                    culpa
                                    eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                                    exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
                                <img src="{{ $post->author->gravatar }}" alt=""
                                    class="size-10 rounded-full bg-gray-100">
                                <div class="text-sm/6">
                                    <p class="font-semibold text-gray-900">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            {{ $post->author->name }}
                                        </a>
                                    </p>
                                    <p class="text-gray-600">Founder / CEO</p>
                                </div>
                            </div>
                        </div>
                    </article> --}}
                    <flux:card class="space-y-3 flex flex-col">
                        <a href="{{ route('posts.show', $post->slug) }}"
                            class="relative w-full hover:opacity-80 transition-opacity duration-300">
                            <img src="{{ $publicFullUrl }}" alt=""
                                class="aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </a>
                        <div class="flex-1">
                            <span class="text-xs text-gray-500">{{ $post->created_at->format('M d, Y') }}</span>
                            <flux:heading>{{ $post->title }}</flux:heading>
                            <flux:subheading>{{ $post->excerpt }}</flux:subheading>
                        </div>
                        <div class="flex justify-end mt-auto align-bottom">
                            <flux:button icon-trailing="arrow-right" href="{{ route('posts.show', $post->slug) }}">
                                {{ __('navigation.read_post') }}
                            </flux:button>
                        </div>
                    </flux:card>
                @endforeach
                <!-- More posts... -->
            </div>
        </div>
    </div>
@endif
