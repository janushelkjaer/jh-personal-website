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
                <p class="mt-2 text-lg/8 text-gray-600">Recent posts from my blog.</p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">


                @foreach ($posts as $post)
                    <x-blog-post-card :post="$post" />
                @endforeach
                <!-- More posts... -->
            </div>
        </div>
    </div>
@endif
