@php
    $data = $attributes['data'];
    $style = 'hero_03';

    $heroImage01 = asset('images/jh/vodcasting-01.png'); // https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80
    $heroImage02 = asset('images/jh/working-on-computer-03.png'); // https://images.unsplash.com/photo-1485217988980-11786ced9454?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80
    $heroImage03 = asset('images/jh/phone-02.png'); // https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80
    $heroImage04 = asset('images/jh/teaching-01.png'); // https://images.unsplash.com/photo-1670272504528-790c24957dda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=left&w=400&h=528&q=80
    $heroImage05 = asset('images/jh/drawing-board-01.png'); // https://images.unsplash.com/photo-1670272505284-8faba1c31f7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80
@endphp




@if ($style == 'hero_03')
    <div class=" relative overflow-hidden bg-zinc-50 dark:bg-zinc-900 py-24 -mx-8 -mt-12">

        <div class="mx-auto max-w-7xl lg:px-8">
            <flux:card class="overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-4">
                    <div class="col-span-4 ">
                        <div class="max-w-3xl  p-6 space-y-3 prose dark:prose-invert">
                            {{-- <h2 class="text-base font-semibold leading-7"></h2> --}}
                            <p class="mt-2 text-4xl font-medium tracking-tight leading-[1.3] text-balance sm:text-6xl ">
                                {!! $data['hero_title'] !!}

                            </p>
                        </div>
                        <div class="max-w-3xl  p-6 space-y-3">
                            <div class="prose dark:prose-invert">
                                {!! $data['hero_content'] !!}
                            </div>
                        </div>
                        <div class=" flex gap-3 p-6">
                            @foreach ($data['buttons'] as $button)
                                <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                                    :href="$button['url']" :icon-trailing="$button['icon']">
                                    {{ $button['label'] }}
                                </flux:button>
                            @endforeach
                        </div>
                        {{-- <div class="grid grid-cols-1 gap-4 md:grid-cols-2 max-w-2xl p-6">
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
                                            class="bg-pink-800 border-pink-700 hover:bg-pink-700 hover:border-pink-600 dark:bg-pink-500 dark:border-pink-400 dark:hover:bg-pink-400">
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
                        </div> --}}
                    </div>
                    <div class="col-span-1 relative -mb-6" aria-hidden="true">
                        <div
                            class="overflow-hidden size-[30rem] lg:size-[34rem] xl:size-[20rem] bg-neutral-50 dark:bg-neutral-900 rounded   right-0 top-0 absolute flex items-center justify-center shadow-inner">
                            {{-- <x-app-logo-icon class="size-64 rounded-full" /> --}}
                            {{-- <img src="{{ asset('images/jh-002.png') }}" alt="Janus Helkjær"
                                class="w-full h-full object-cover object-top relative z-10"> --}}
                            {{-- <div
                                class="ms-1 grid flex-1 text-start text-sm bg-neutral-100 py-2 px-2 rounded shadow-inner">
                                <span class="mb-0.5 truncate leading-none font-semibold text-lg">jh</span>
                            </div> --}}
                            <span class="mb-0.5 truncate leading-none font-semibold text-8xl">jh</span>
                            {{-- <div>
                                <img src="{{ asset('images/jh-001.png') }}" alt="Janus Helkjær"
                                    class="w-full h-full object-cover relative z-10">
                            </div> --}}
                        </div>
                        {{-- <img src="{{ asset('images/jh-002.png') }}" alt="Janus Helkjær"
                            class="w-full h-full object-cover relative z-10"> --}}
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
            <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" />
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
