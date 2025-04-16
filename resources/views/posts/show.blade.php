<x-layouts.app title="{{ $post->title }}">
    @php
        $mediaItems = $post->getMedia('posts');
        $publicFullUrl = isset($mediaItems[0]) ? $mediaItems[0]->getFullUrl() : '';
    @endphp




    <flux:card>
        <ul>
            <li>
                Title
            </li>
            <li>
                Intro / anecdote
            </li>
            <li> What You Will Learn</li>
            <li> Main Content (3-5 sections)</li>
            <li> Concepts Explained</li>
            <li> Examples of practical application</li>
            <li> Key TakeAways (3-5)</li>
            <li> Summary</li>
            <li> CTA</li>
            <li> Other Resources (internal links)</li>
            <li> References</li>
        </ul>
    </flux:card>




    <flux:separator class="my-12" />


    @if (1 == 2)
        <div class="-mx-8 -mt-8 z-30 relative">
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
    <div class="bg-white">
        <div class="mx-auto px-4 pb-16 sm:px-6 sm:pb-24 lg:max-w-7xl lg:px-8">
            <!-- Product -->
            <div class="lg:grid lg:grid-cols-7 lg:grid-rows-1 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16">
                <!-- Product image -->
                <div class="lg:col-span-4 lg:row-end-1">
                    <img src="{{ $publicFullUrl }}"
                        alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles."
                        class="aspect-[4/3] w-full rounded-lg bg-gray-100 object-cover">
                </div>

                <!-- Product details -->
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

                    <p class="mt-6 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptates
                        dolorum officiis iste, nesciunt sed facere nulla magni saepe animi laudantium natus
                        accusantium,
                        tempore quia repudiandae dolorem a. Perferendis, excepturi deleniti?</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
                        <button type="button"
                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Pay
                            $220</button>
                        <button type="button"
                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-50 px-8 py-3 text-base font-medium text-indigo-700 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Preview</button>
                    </div>

                    <div class="mt-10 border-t border-gray-200 pt-10">
                        <h3 class="text-sm font-medium text-gray-900">Highlights</h3>
                        <div class="mt-4">
                            <ul role="list"
                                class="list-disc space-y-1 pl-5 text-sm/6 text-gray-500 marker:text-gray-300">
                                <li class="pl-2">200+ SVG icons in 3 unique styles</li>
                                <li class="pl-2">Compatible with Figma, Sketch, and Adobe XD</li>
                                <li class="pl-2">Drawn on 24 x 24 pixel grid</li>
                            </ul>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>


    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <figure class="mt-16">
            <img class="aspect-video rounded-xl bg-gray-50 object-cover"
                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;w=1310&amp;h=873&amp;q=80&amp;facepad=3"
                alt="">
            <figcaption class="mt-4 flex gap-x-2 text-sm/6 text-gray-500">
                <svg class="mt-0.5 size-5 flex-none text-gray-300" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z"
                        clip-rule="evenodd"></path>
                </svg>
                Faucibus commodo massa rhoncus, volutpat.
            </figcaption>
        </figure>
    </div>


    <div class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl md:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:grid-cols-2 lg:items-start">
                <div class="px-6 lg:px-0 lg:pr-4 lg:pt-4">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-lg">
                        <h2 class="text-base/7 font-semibold text-yellow-00">Deploy faster</h2>
                        <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                            {{ $post->title }}</h1>
                        <p class="mt-6 text-lg/8 text-gray-600">{{ $post->intro }}
                        </p>


                        <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 size-5 text-yellow-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Push to deploy.
                                </dt>
                                <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                                    impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                </dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 size-5 text-yellow-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    SSL certificates.
                                </dt>
                                <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui
                                    lorem cupidatat commodo.</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 size-5 text-yellow-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path
                                            d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                        <path fill-rule="evenodd"
                                            d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Database backups.
                                </dt>
                                <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                    magna sit morbi lobortis.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="sm:px-6 lg:px-0">
                    <div
                        class="relative isolate overflow-hidden bg-yellow-500 px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-16 sm:pr-0 sm:pt-16 lg:mx-0 lg:max-w-none max-h-[48rem]">
                        <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white"
                            aria-hidden="true"></div>
                        <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                            <img src="{{ $publicFullUrl }}" alt="Product screenshot" width="2432" height="1442"
                                class="-mb-12 w-[57rem] max-w-none rounded-tl-xl bg-gray-800 ring-1 ring-white/10 ">
                        </div>
                        <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl"
                            aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>
        <x-markdown class="prose prose-lg mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            {{ $post->body }}
        </x-markdown>
    </div>


    <div class="flex justify-center w-full">
        @if ($post->content)

            @foreach ($post->content as $key => $blockComponent)
                <div>
                    {{ $blockComponent['type'] }}
                </div>
                <div class="py-1 w-full">
                    <x-dynamic-component :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
                </div>
            @endforeach

        @endif
    </div>



    {{-- 
    <div class="bg-white px-6 py-32 lg:px-8">



        <div class="mx-auto max-w-3xl text-base/7 text-gray-700">



            <p class="text-base/7 font-semibold text-indigo-600">Introducing</p>
            <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">JavaScript
                for
                beginners</h1>
            <p class="mt-6 text-xl/8">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu,
                sit
                dui
                mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas ac. Diam nulla orci at in
                viverra
                scelerisque eget. Eleifend egestas fringilla sapien.</p>
            <div class="mt-10 max-w-2xl">
                <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed
                    amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus
                    varius
                    sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim.
                    Mattis mauris semper sed amet vitae sed turpis id.</p>
                <ul role="list" class="mt-8 max-w-xl space-y-8 text-gray-600">
                    <li class="flex gap-x-3">
                        <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong class="font-semibold text-gray-900">Data types.</strong> Lorem ipsum, dolor
                            sit
                            amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste
                            dolor
                            cupiditate blanditiis ratione.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong class="font-semibold text-gray-900">Loops.</strong> Anim aute id magna aliqua
                            ad
                            ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</span>
                    </li>
                    <li class="flex gap-x-3">
                        <svg class="mt-1 size-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong class="font-semibold text-gray-900">Events.</strong> Ac tincidunt sapien
                            vehicula
                            erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</span>
                    </li>
                </ul>
                <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id
                    blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris
                    varius
                    vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel
                    integer orci.</p>
                <h2 class="mt-16 text-pretty text-3xl font-semibold tracking-tight text-gray-900">From beginner to
                    expert in 3 hours</h2>
                <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis
                    arcu
                    ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat vulputate nibh.
                    Maecenas
                    pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi.
                    Pellentesque
                    nam sed nullam sed diam turpis ipsum eu a sed convallis diam.</p>
                <figure class="mt-10 border-l border-indigo-600 pl-9">
                    <blockquote class="font-semibold text-gray-900">
                        <p>“Vel ultricies morbi odio facilisi ultrices accumsan donec lacus purus. Lectus nibh
                            ullamcorper ac dictum justo in euismod. Risus aenean ut elit massa. In amet aliquet eget
                            cras. Sem volutpat enim tristique.”</p>
                    </blockquote>
                    <figcaption class="mt-6 flex gap-x-4">
                        <img class="size-6 flex-none rounded-full bg-gray-50"
                            src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div class="text-sm/6"><strong class="font-semibold text-gray-900">Maria Hill</strong> –
                            Marketing Manager</div>
                    </figcaption>
                </figure>
                <p class="mt-10">Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis
                    mauris
                    semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra
                    tellus varius sit neque erat velit.</p>
            </div>

            @if ($post->content)

                @foreach ($post->content as $key => $blockComponent)
                    <div class="py-1">
                        <x-dynamic-component :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
                    </div>
                @endforeach

            @endif


            <div class="mt-16 max-w-2xl">
                <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900">Everything you need to
                    get
                    up and running</h2>
                <p class="mt-6">Purus morbi dignissim senectus mattis adipiscing. Amet, massa quam varius orci
                    dapibus
                    volutpat cras. In amet eu ridiculus leo sodales cursus tristique. Tincidunt sed tempus ut
                    viverra
                    ridiculus non molestie. Gravida quis fringilla amet eget dui tempor dignissim. Facilisis auctor
                    venenatis varius nunc, congue erat ac. Cras fermentum convallis quam.</p>
                <p class="mt-8">Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis
                    mauris
                    semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra
                    tellus varius sit neque erat velit.</p>
            </div>
        </div>
    </div>

     --}}


    {{-- <div class="bg-white">
        <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="relative isolate overflow-hidden  px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
                <h2 class="text-balance text-4xl font-semibold tracking-tight sm:text-5xl">Boost your
                    productivity today</h2>
                <p class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-gray-300">Incididunt sint fugiat pariatur
                    cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                        started</a>
                    <a href="#" class="text-sm/6 font-semibold">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- cta -->

    <x-dynamic-component component="blocks.cta" :info="[]" />






    </x-app-layout>
