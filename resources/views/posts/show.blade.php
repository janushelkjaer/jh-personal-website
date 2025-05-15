<x-layouts.app title="{{ $post->title }}">
    @php
        $mediaItems = $post->getMedia('posts');
        $publicFullUrl = isset($mediaItems[0])
            ? $mediaItems[0]->getFullUrl()
            : 'https://placehold.co/600x400?text=' . $post->title . '';

        $colors = ['lime', 'blue', 'red', 'green', 'yellow', 'purple', 'orange', 'pink'];
    @endphp

    <div class="py-3 -mt-8 -mx-8 bg-neutral-50 dark:bg-neutral-800 shadow-inner border-b border-neutral-100">
        <div class="max-w-7xl mx-auto px-8">
            <flux:breadcrumbs>
                <flux:breadcrumbs.item href="{{ route('home') }}" icon="home" />
                <flux:breadcrumbs.item href="{{ route('posts.index') }}">Blog</flux:breadcrumbs.item>
                <flux:breadcrumbs.item>{{ $post->title }}</flux:breadcrumbs.item>
            </flux:breadcrumbs>
        </div>
    </div>




    <div class="bg-white -mx-8 shadow-inner border-b-4 border-neutral-100">
        <div class="mx-auto px-4 sm:px-6 py-12 lg:max-w-7xl lg:px-8">
            <!-- Product -->
            <div class="lg:grid lg:grid-cols-7 lg:grid-rows-1 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16">
                <!-- Product image -->
                <div class="lg:col-span-4 lg:row-end-1">
                    <div
                        class="w-full h-full shadow-inner p-3 rounded-lg bg-neutral-100  flex items-center justify-center">
                        <div class="aspect-[4/3] rounded-lg overflow-hidden">
                            <img src="{{ $publicFullUrl }}" alt="{{ $post->title }}"
                                class="h-full w-full rounded-lg bg-neutral-100 object-cover">
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-none">
                    <div class="flex flex-col-reverse">
                        <div class="mt-4">
                            <div class="py-1 prose dark:prose-invert">
                                <flux:text class="text-neutral-500 text-xs"><time
                                        datetime="{{ $post->published_at->format('Y-m-d') }}">{{ $post->published_at->format('Y-m-d') }}</time>
                                </flux:text>
                            </div>
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl pb-1">
                                {{ $post->title }}
                            </h1>

                            <div class="py-1">
                                @foreach ($post->categories as $category)
                                    <flux:badge size="sm" :color="$colors[array_rand($colors)]" as="button"
                                        variant="pill" class="cursor-pointer" wire:navigate
                                        href="{{ route('categories.show', ['category' => $category->slug]) }}">
                                        {{ $category->title }}</flux:badge>
                                @endforeach
                            </div>

                        </div>


                    </div>

                    <div class="prose dark:prose-invert prose-sm py-3">
                        <flux:text>
                            {!! $post->intro !!}
                        </flux:text>
                    </div>

                    {{-- <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
                        <button type="button"
                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Pay
                            $220</button>
                        <button type="button"
                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-50 px-8 py-3 text-base font-medium text-indigo-700 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Preview</button>
                    </div> --}}

                    {{-- <flux:separator class="my-6" variant="subtle" />
                    --}}

                    <div class="">

                        <flux:card>
                            <flux:heading class="mb-3">Table Of Contents</flux:heading>
                            <flux:text>
                                <ul class="list-disc space-y-2 pl-3">

                                    <li><a
                                            href="#what-you-will-learn">{{ app()->getLocale() == 'en' ? 'What You Will Learn' : 'Hvad du lærer i denne artikel' }}</a>
                                    </li>
                                    <li> <a href="#main-content"
                                            class="">{{ app()->getLocale() == 'en' ? 'Main Content' : 'Hovedindhold' }}</a>
                                        <ul class="list-disc pl-3 space-y-2 py-1" id="main-content-toc"></ul>

                                    </li>

                                    <li><a
                                            href="#key-takeaways">{{ app()->getLocale() == 'en' ? 'Key TakeAways' : 'Nøgleindsigter' }}</a>
                                    </li>
                                    <li> <a href="#summary">{{ app()->getLocale() == 'en' ? 'Summary' : 'Resumé' }}</a>
                                    </li>
                                    {{-- <li> CTA</li>
                                    <li> Other Resources (internal links)</li> --}}
                                    @if ($post->references)
                                        <li> <a
                                                href="#references">{{ app()->getLocale() == 'en' ? 'References' : 'Referencer' }}</a>
                                        </li>
                                    @endif
                                </ul>
                            </flux:text>
                        </flux:card>

                    </div>


                </div>


            </div>
        </div>
    </div>





    <x-kugleland-content-block component="blocks.what-you-will-learn" :info="['data' => $post->what_you_will_learn]" />



    <div class="flex flex-col justify-center items-center max-w-3xl mx-auto" id="main-content">
        @if ($post->body)

            <div class="max-w-7xl mx-auto">
                <div class="">
                    <div class="py-12 prose dark:prose-invert max-w-3xl mx-auto">
                        <x-markdown theme="material-theme">
                            {!! $post->body !!}
                        </x-markdown>
                    </div>
                </div>
            </div>
        @else
            @foreach ($post->content as $key => $blockComponent)
                <div class="py-1 w-full">
                    <x-kugleland-content-block :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
                </div>
            @endforeach

        @endif
    </div>


    <x-kugleland-content-block component="blocks.key_takeaways" :info="['data' => $post->key_takeaways]" />




    <!-- Examples of practical application -->


    <div class="py-12 lg:py-24">
        <div class="mx-auto max-w-4xl">
            <div class="pb-6  border-t border-neutral-200 pt-6 bg-neutral-50 rounded-lg p-6">
                <div class="prose dark:prose-invert ">
                    <flux:heading size="xl" level="2" id="summary">Summary</flux:heading>

                    <x-markdown theme="material-theme">
                        {!! $post->summary !!}
                    </x-markdown>
                </div>
            </div>
        </div>
    </div>


    @if ($post->references)
        <div class="py-12 lg:py-24">
            <div class="mx-auto max-w-4xl">
                <div class="border-t border-neutral-200 p-6 w-full">
                    <div class="prose dark:prose-invert ">
                        <flux:heading size="lg" level="3" id="references">References</flux:heading>

                        <x-markdown theme="material-theme">
                            {!! $post->references !!}
                        </x-markdown>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const headings = Array.from(document.querySelector('#main-content').getElementsByTagName("h2"));
            const mainContentToc = document.getElementById("main-content-toc");
            headings.forEach(heading => {
                const listElement = document.createElement('li');
                const link = document.createElement('a');
                link.href = `#${heading.id}`;
                link.textContent = heading.textContent;
                listElement.appendChild(link);
                mainContentToc.appendChild(listElement);
            });
        });
    </script>


    </x-app-layout>
