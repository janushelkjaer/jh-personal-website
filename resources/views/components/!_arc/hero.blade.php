@php
    $data = $attributes['info']['data'];
    $style = 'hero_03';

    $heroImage01 = asset('images/jh/vodcasting-01.png'); // https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80
    $heroImage02 = asset('images/jh/working-on-computer-03.png'); // https://images.unsplash.com/photo-1485217988980-11786ced9454?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80
    $heroImage03 = asset('images/jh/phone-02.png'); // https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80
    $heroImage04 = asset('images/jh/teaching-01.png'); // https://images.unsplash.com/photo-1670272504528-790c24957dda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=left&w=400&h=528&q=80
    $heroImage05 = asset('images/jh/drawing-board-01.png'); // https://images.unsplash.com/photo-1670272505284-8faba1c31f7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80
@endphp


<header class="overflow-hidden bg-slate-100 lg:bg-transparent lg:px-5 -mx-8 -mt-12">
    <div
        class="mx-auto grid max-w-6xl grid-cols-1 grid-rows-[auto_1fr] gap-y-16 pt-16 md:pt-20 lg:grid-cols-12 lg:gap-y-20 lg:px-3 lg:pt-20 lg:pb-36 xl:py-32">
        <div class="relative flex items-end lg:col-span-5 lg:row-span-2">
            <div
                class="absolute -top-20 right-1/2 -bottom-12 left-0 z-10 rounded-br-6xl bg-yellow-500 text-white/20 md:bottom-8 lg:-inset-y-32 lg:right-full lg:left-[-100vw] lg:-mr-40">
                <svg aria-hidden="true" class="absolute inset-0 h-full w-full">
                    <defs>
                        <pattern id=":S1:" width="128" height="128" patternUnits="userSpaceOnUse" x="100%"
                            y="100%" patternTransform="translate(112 64)">
                            <path d="M0 128V.5H128" fill="none" stroke="currentColor"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#:S1:)"></rect>
                </svg>
            </div>
            <div class="relative z-10 mx-auto flex w-64 rounded-xl bg-slate-600 shadow-xl md:w-80 lg:w-auto"><img
                    alt="" width="960" height="1284" class="w-full" style="color:transparent"
                    src="{{ asset('images/book-cover.webp') }}" /></div>
        </div>
        <div class="relative px-4 sm:px-6 lg:col-span-7 lg:pr-0 lg:pb-14 lg:pl-16 xl:pl-20">
            <div
                class="hidden lg:absolute lg:-top-32 lg:right-[-100vw] lg:bottom-0 lg:left-[-100vw] lg:block lg:bg-slate-100">
            </div>
            <figure class="relative mx-auto max-w-md text-center lg:mx-0 lg:text-left">
                <div class="flex justify-center text-blue-600 lg:justify-start">
                    <div class="flex gap-1"><svg aria-hidden="true" viewBox="0 0 20 20" class="h-5 w-5 fill-current">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg><svg aria-hidden="true" viewBox="0 0 20 20" class="h-5 w-5 fill-current">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg><svg aria-hidden="true" viewBox="0 0 20 20" class="h-5 w-5 fill-current">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg><svg aria-hidden="true" viewBox="0 0 20 20" class="h-5 w-5 fill-current">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg><svg aria-hidden="true" viewBox="0 0 20 20" class="h-5 w-5 fill-current">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg></div>
                </div>
                <blockquote class="mt-2">
                    <p class="font-display text-xl font-medium text-slate-900">“This method of designing icons is
                        genius. I wish I had known this method a lot sooner.”</p>
                </blockquote>
                <figcaption class="mt-2 text-sm text-slate-500"><strong
                        class="font-semibold text-blue-600 before:content-[&#x27;—_&#x27;]">Stacey Solomon</strong>,
                    Founder at Retail Park</figcaption>
            </figure>
        </div>
        <div class="bg-white pt-16 lg:col-span-7 lg:bg-transparent lg:pt-0 lg:pl-16 xl:pl-20">
            <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                <h1 class="font-display text-5xl font-extrabold text-slate-900 sm:text-6xl">Get lost in the world of
                    icon design.</h1>
                <p class="mt-4 text-3xl text-slate-600">A book and video course that teaches you how to design your
                    own
                    icons from scratch.</p>
                <div class="mt-8 flex gap-4"><a
                        class="inline-flex justify-center rounded-md py-1 px-4 text-base font-semibold tracking-tight shadow-sm focus:outline-hidden bg-blue-600 text-white hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:bg-blue-700 active:text-white/80 disabled:opacity-30 disabled:hover:bg-blue-600"
                        color="blue" variant="solid" href="#free-chapters">Get sample chapter</a><a
                        class="inline-flex justify-center rounded-md border py-[calc(--spacing(1)-1px)] px-[calc(--spacing(4)-1px)] text-base font-semibold tracking-tight focus:outline-hidden border-blue-300 text-blue-600 hover:border-blue-400 hover:bg-blue-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:text-blue-600/70 disabled:opacity-40 disabled:hover:border-blue-300 disabled:hover:bg-transparent"
                        variant="outline" color="blue" href="#pricing">Buy book</a></div>
            </div>
        </div>
    </div>
</header>

@if ($style == 'hero_03')
    <div class=" relative overflow-hidden bg-zinc-50 py-24 -mx-8 -mt-12">

        <div class="mx-auto max-w-7xl lg:px-8">
            <flux:card class="overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-4">
                    <div class="col-span-3 ">
                        <div class="max-w-3xl  p-6 space-y-3">
                            <h2 class="text-base font-semibold leading-7 text-pink-800">Using Tech As a Tool</h2>
                            <p class="mt-2 text-4xl font-medium tracking-tight text-balance text-gray-950 sm:text-6xl ">
                                I
                                like to <strong class="underline">solve problems</strong>.
                                I can help solve Yours.

                            </p>
                        </div>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 max-w-2xl p-6">
                            <div class="col-span-1 ">
                                <flux:card class="space-y-3 h-full relative z-20">
                                    <div>
                                        <flux:icon.bolt class="size-6" />
                                    </div>
                                    <div>
                                        <flux:heading>Templates</flux:heading>
                                        <flux:subheading>Templates for n8n, Zapier, Notion, </flux:subheading>
                                    </div>
                                    <flux:spacer />
                                    <flux:separator />
                                    <div class="">
                                        <flux:button icon-trailing="arrow-right" variant="primary"
                                            class="bg-pink-800 border-pink-700 hover:bg-pink-700 hover:border-pink-600">
                                            View
                                            Options
                                        </flux:button>
                                    </div>
                                </flux:card>
                            </div>
                            <div class="col-span-1 ">
                                <flux:card class="space-y-3 h-full relative z-20">
                                    <div>
                                        <flux:icon.bolt class="size-6" />
                                    </div>
                                    <div>
                                        <flux:heading>Work With Me</flux:heading>
                                        <flux:subheading>Templates for n8n, Zapier, Notion, </flux:subheading>
                                    </div>
                                    <flux:spacer />
                                    <flux:separator />
                                    <div class="">
                                        <flux:button icon="hand-raised">Let's Work Together
                                        </flux:button>
                                    </div>
                                </flux:card>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 relative -mb-6" aria-hidden="true">
                        {{-- <div
                            class="size-[30rem] lg:size-[34rem] xl:size-[36rem] bg-yellow-500 rounded-full lg:-mr-32 lg:-mt-32 right-0 top-0 absolute">
                        </div> --}}
                        <img src="{{ asset('images/jh-002.png') }}" alt="Janus Helkjær"
                            class="w-full h-full object-cover relative z-10">
                    </div>
                </div>
            </flux:card>
        </div>
    </div>


    @if (1 == 2)
        <div class=" relative overflow-hidden bg-zinc-50 py-24 -mx-8 -mt-12">
            {{-- <svg class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" />
        </svg> --}}
            <div class="mx-auto max-w-7xl lg:px-8">
                <div
                    class="border rounded-lg shadow-lg relative min-h-[36rem] overflow-hidden grid grid-cols-1 lg:grid-cols-5 gap-4 bg-white">
                    <div class="col-span-3 ">
                        <div class="max-w-3xl  p-6 space-y-3">
                            <h2 class="text-base font-semibold leading-7 text-pink-800">Using Tech As a Tool</h2>
                            <p class="mt-2 text-4xl font-medium tracking-tight text-balance text-gray-950 sm:text-6xl ">
                                I
                                like to <strong class="underline">solve problems</strong>.
                                I can help solve Yours.

                            </p>
                        </div>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 max-w-2xl p-6">
                            <div class="col-span-1 ">
                                <flux:card class="space-y-3 h-full relative z-20">
                                    <div>
                                        <flux:icon.bolt class="size-6" />
                                    </div>
                                    <div>
                                        <flux:heading>Templates</flux:heading>
                                        <flux:subheading>Templates for n8n, Zapier, Notion, </flux:subheading>
                                    </div>
                                    <flux:spacer />
                                    <flux:separator />
                                    <div class="">
                                        <flux:button icon-trailing="arrow-right" variant="primary"
                                            class="bg-pink-800 border-pink-700 hover:bg-pink-700 hover:border-pink-600">
                                            View
                                            Options
                                        </flux:button>
                                    </div>
                                </flux:card>
                            </div>
                            <div class="col-span-1 ">
                                <flux:card class="space-y-3 h-full relative z-20">
                                    <div>
                                        <flux:icon.bolt class="size-6" />
                                    </div>
                                    <div>
                                        <flux:heading>Work With Me</flux:heading>
                                        <flux:subheading>Templates for n8n, Zapier, Notion, </flux:subheading>
                                    </div>
                                    <flux:spacer />
                                    <flux:separator />
                                    <div class="">
                                        <flux:button icon="hand-raised">Let's Work Together
                                        </flux:button>
                                    </div>
                                </flux:card>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 relative" aria-hidden="true">
                        {{-- <div
                        class="size-[30rem] lg:size-[34rem] xl:size-[36rem] bg-yellow-400 rounded-full lg:-mr-24 lg:-mt-24 right-0 top-0 absolute">
                    </div> --}}
                        <div
                            class="relative lg:absolute bottom-0 lg:right-0 z-10 w-full max-w-[24rem] ml-auto lg:ml-auto">
                            <img src="{{ asset('images/jh-002.png') }}" alt="Janus Helkjær"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 absolute z-10 bottom-0 lg:left-0 right-0 w-64 mb-12 ml:auto">

                            <flux:card>
                                <flux:heading>Janus Helkjær</flux:heading>
                                <flux:subheading>Digital Product Builder</flux:subheading>
                            </flux:card>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endif


@if ($style == 'hero_01')
    <div class="relative isolate">
        <svg class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0"
                fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" />
        </svg>
        {{-- <div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48"
            aria-hidden="true">
            <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#f4f4f5] to-[#ffd230] opacity-30"
                style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)">
            </div>
        </div> --}}

        <div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden  lg:ml-24 xl:ml-48"
            aria-hidden="true">
            <div class="
           w-full h-full bg-yellow-400 rounded-full aspect-[1/1]">
                <img src="{{ asset('images/jh/drawing-board-01.png') }}" alt=""
                    class="w-full h-full object-contain mb-10">
            </div>
        </div>

        <div class="overflow-hidden">
            <div class="mx-auto max-w-7xl  px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
                <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                    <div class="relative w-full lg:max-w-xl lg:shrink-0 xl:max-w-2xl">
                        <h1 class="text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                            {!! $data['hero_title'] !!}</h1>
                        <div class="mt-8 text-pretty text-md text-gray-500 sm:max-w-md  lg:max-w-none prose">
                            {!! $data['hero_content'] !!}
                        </div>

                        <div class="mt-10 flex items-center gap-x-6">
                            {{-- <flux:button variant="primary" icon="hand-raised" >
                                {{ __('navigation.work_with_me') }}
                            </flux:button> --}}
                            {{-- <flux:button>
                                {{ __('navigation.newsletter') }}
                            </flux:button> --}}
                        </div>
                    </div>
                    <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                        @if (1 == 2)
                            <div
                                class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                                <div class="relative animate-float group">
                                    <img src="{{ $heroImage01 }}" alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-yellow-400 object-cover shadow-lg group-hover:scale-105 transition-all duration-300">
                                    <div
                                        class="pointer-events-none absolute group-hover:ring-white group-hover:ring-4 transition-all duration-300 inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                            </div>
                            <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                                <div class="relative animate-float group animation-delay-100">
                                    <img src="{{ $heroImage02 }}" alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-blue-400 object-cover shadow-lg group-hover:scale-105 transition-all duration-300">
                                    <div
                                        class="pointer-events-none absolute group-hover:ring-white group-hover:ring-4 transition-all duration-300 inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                                <div class="relative animate-float group animation-delay-200">
                                    <img src="{{ $heroImage03 }}" alt="" alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg group-hover:scale-105 transition-all duration-300">
                                    <div
                                        class="pointer-events-none absolute group-hover:ring-white group-hover:ring-4 transition-all duration-300 inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                            </div>
                            <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                                <div class="relative animate-float group animation-delay-300">
                                    <img src="{{ $heroImage04 }}" alt="" alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg group-hover:scale-105 transition-all duration-300">
                                    <div
                                        class="pointer-events-none absolute group-hover:ring-white group-hover:ring-4 transition-all duration-300 inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                                <div class="relative animate-float group animation-delay-150">
                                    <img src="{{ $heroImage05 }}" alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-white object-cover shadow-lg group-hover:scale-105 transition-all duration-300">
                                    <div
                                        class="pointer-events-none absolute group-hover:ring-white group-hover:ring-4 transition-all duration-300 inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                            </div>
                    </div>
@endif
</div>
</div>
</div>

</div>
@endif

@if ($style == 'hero_02')
    <div class="pb-12">
        <div
            class="p-10 sm:p-10 m-5 rounded-3xl  dark:text-white bg-white text-black flex items-center justify-center overflow-hidden shadow-2xl">
            <div class="w-full max-w-6xl px-4 sm:px-6">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <!-- Left Section: Text Content -->
                    <div class="flex flex-col justify-center text-center md:text-left z-10">
                        <h1
                            class="text-4xl sm:text-4xl md:text-5xl lg:text-8xl font-extrabold uppercase leading-tight tracking-tight">
                            I Help <br> Ideas <br> Come To <br><span class="text-yellow-500 underline">Life</span>
                        </h1>
                        <p class="mt-6 text-base  dark:text-gray-400 text-gray-600 text-balance">
                            I am a solo entrepreneur, who builds digital product businesses and share the process,
                            including coding, entrepreneurship, marketing & A.I.
                        </p>
                        <div class="mt-6 sm:mt-8 flex flex-wrap gap-4">
                            <a href="#get-started"
                                class="rounded-sm p-3 grow text-center bg-yellow-500 text-black font-bold uppercase text-sm tracking-widest hover:bg-yellow-600 transition">
                                Get Started
                            </a>
                            <a href="#learn-more"
                                class="rounded-sm p-3 grow border text-center border-yellow-500 text-yellow-500 font-bold uppercase text-sm tracking-widest hover:bg-yellow-500 hover:text-black transition">
                                Learn More
                            </a>
                        </div>
                    </div>

                    <!-- Right Section: Visual Block -->
                    <div class="relative flex items-center sm:m-10 [perspective:1000px]">
                        {{-- <div
                            class="absolute -top-10 md:-top-20 -left-10 sm:w-32 sm:h-32 lg:w-64 lg:h-64 bg-yellow-500 rotate-12 rounded-lg border-yellow-700 border-b-4 border-r-8 max-sm:hidden">
                        </div>
                        <div
                            class="relative z-10 bg-gray-800 dark:bg-gray-800 p-4 sm:p-6 -right-1/2 -translate-x-1/2 grow text-center shadow-2xl -rotate-2 rounded-xl text-nowrap border-slate-950 border-b-4 border-r-8">
                            <h2 class="text-2xl sm:text-3xl font-bold uppercase text-gray-50 dark:text-gray-50">
                                Bold. Strong. Raw.
                            </h2>
                            <p class="mt-1 text-sm sm:text-base font-light text-gray-400 dark:text-gray-400">
                                Embrace minimalism with maximal impact.
                            </p>
                        </div>
                        <div
                            class="absolute -bottom-10 md:-bottom-20 -right-16 sm:w-32 sm:h-32 lg:w-64 lg:h-64 bg-yellow-500 -rotate-12 rounded-lg border-yellow-700 border-r-4 border-b-8 max-sm:hidden">
                        </div> --}}
                        <div
                            class="font-sans sm:h-[250px] sm:w-[250px] xs:h-[150px] xs:w-[150px] absolute sm:top-[30%] sm:left-[30%] xs:top-[40%] xs:left-[30%] [transform-style:preserve-3d] animate-[roll_5s_infinite]">
                            <div class="box sm:[transform:translateZ(125px)] xs:[transform:translateZ(75px)]">
                                Front</div>
                            <div class="box sm:[transform:translateZ(-125px)] xs:[transform:translateZ(-75px)]">
                                Back</div>
                            <div class="box sm:right-[125px] xs:right-[75px] [transform:rotateY(-90deg)]">
                                Left</div>
                            <div class="box sm:left-[125px] xs:left-[75px] [transform:rotateY(90deg)]">
                                Right</div>
                            <div class="box sm:bottom-[125px] xs:bottom-[75px] [transform:rotateX(90deg)]">
                                Top</div>
                            <div class="box sm:top-[125px] xs:top-[75px] [transform:rotateX(-90deg)]">
                                Bottom</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
