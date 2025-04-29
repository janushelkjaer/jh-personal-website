<x-layouts.app title="{{ $post->title }}">
    @php
        $mediaItems = $post->getMedia('posts');
        $publicFullUrl = isset($mediaItems[0])
            ? $mediaItems[0]->getFullUrl()
            : 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;w=1310&amp;h=873&amp;q=80&amp;facepad=3';
    @endphp

    <div class="py-3 -mt-8 -mx-8 bg-zinc-100">
        <div class="max-w-7xl mx-auto px-8">
            <flux:breadcrumbs>
                <flux:breadcrumbs.item href="{{ route('home') }}" icon="home" />
                <flux:breadcrumbs.item href="{{ route('posts.index') }}">Blog</flux:breadcrumbs.item>
                <flux:breadcrumbs.item>{{ $post->title }}</flux:breadcrumbs.item>
            </flux:breadcrumbs>
        </div>
    </div>

    @if (1 == 2)
        <div class="-mx-8 -mt-8 z-30 relative ">
            <div>
                <img class="h-32 w-full object-cover lg:h-48"
                    src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                    alt="">
            </div>
            <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
                <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                    <div class="flex">
                        <img class="size-24 rounded-full ring-4 ring-white sm:size-32"
                            src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                            alt="">
                    </div>
                    <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                    </div>
                </div>
                <div class="mt-6 hidden min-w-0 flex-1 sm:block md:hidden">
                    <h1 class="truncate text-2xl font-bold text-gray-900">Ricardo Cooper</h1>
                </div>
            </div>
        </div>
    @endif








    <div class="bg-zinc-50 -mx-8 shadow-inner border-b border-zinc-100">
        <div class="mx-auto px-4 sm:px-6 py-12 lg:max-w-7xl lg:px-8">
            <!-- Product -->
            <div class="lg:grid lg:grid-cols-7 lg:grid-rows-1 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16">
                <!-- Product image -->
                <div class="lg:col-span-4 lg:row-end-1">
                    <img src="{{ $publicFullUrl }}"
                        alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles."
                        class="aspect-[4/3] w-full rounded-lg bg-gray-100 object-cover">
                </div>

                <div
                    class="mx-auto mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-none">
                    <div class="flex flex-col-reverse">
                        <div class="mt-4">
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                                {{ $post->title }}
                            </h1>

                            <h2 id="information-heading" class="sr-only">Product information</h2>
                            <p class="mt-2 text-sm text-gray-500">Last Updated <time
                                    datetime="2021-06-05">{{ $post->updated_at->format('d-m-Y') }}</time></p>
                        </div>


                    </div>

                    <flux:text class="py-3">
                        {!! nl2br($post->intro) !!}
                    </flux:text>

                    {{-- <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
                        <button type="button"
                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Pay
                            $220</button>
                        <button type="button"
                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-50 px-8 py-3 text-base font-medium text-indigo-700 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Preview</button>
                    </div> --}}

                    <flux:separator class="my-6" variant="subtle" />

                    <div class="">

                        <flux:card>
                            <flux:heading class="mb-3">Table Of Contents</flux:heading>
                            <flux:text>
                                <ul class="list-disc space-y-1 pl-3">
                                    {{-- <li>
                Title
            </li>
            <li>
                Intro / anecdote
            </li> --}}
                                    <li><a href="#what-you-will-learn">What You Will Learn</a></li>
                                    <li> Main Content (3-5 sections)
                                        <ul class="list-disc pl-3 space-y-1">
                                            <li> Concepts Explained</li>
                                            <li> Examples of practical application</li>
                                        </ul>

                                    </li>

                                    <li><a href="#key-takeaways">Key TakeAways</a></li>
                                    <li> Summary</li>
                                    <li> CTA</li>
                                    <li> Other Resources (internal links)</li>
                                    <li> References</li>
                                </ul>
                            </flux:text>
                        </flux:card>

                    </div>


                </div>


            </div>
        </div>
    </div>



    <x-dynamic-component component="blocks.what-you-will-learn" :info="[]" />



    <div class="flex flex-col justify-center items-center max-w-3xl mx-auto">
        @if ($post->content)

            @foreach ($post->content as $key => $blockComponent)
                {{-- <div>
                    {{ $blockComponent['type'] }}
                </div> --}}
                <div class="py-1 w-full">
                    <x-dynamic-component :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
                </div>
            @endforeach

        @endif
    </div>


    <x-dynamic-component component="blocks.key_takeaways" :info="['data' => $post->key_takeaways]" />




    <!-- Examples of practical application -->


    <div class="py-12 lg:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="pb-6">
                <flux:heading><span class="text-4xl">Summary</span></flux:heading>
                <flux:text>
                    {{ $post->summary }}
                </flux:text>
            </div>
        </div>
    </div>

    <!-- cta -->

    <x-dynamic-component component="blocks.cta" :info="[]" />






    </x-app-layout>
