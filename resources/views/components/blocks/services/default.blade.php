<div class=" my-12 -mx-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl pt-12 pb-12">
            <h2 class="text-base font-semibold leading-7 text-yellow-600">{{ $data['title'] }}
            </h2>
            {{-- <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                {{ $attributes['info']['data']['subheading'] }}</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">
                {{ $attributes['info']['data']['content'] }}
            </p> --}}
        </div>

        <div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 p-6 rounded-xl">
                @foreach (\App\Models\Service::all() as $service)
                    <div class="flex-1">
                        <flux:card class="h-full flex flex-col space-y-3">
                            <img src="{{ $service->image }}" alt="">
                            <flux:heading>{{ $service->title }}</flux:heading>
                            <flux:subheading>{{ $service->description }}</flux:subheading>
                            <flux:spacer />
                            <flux:separator />
                            <div class="">
                                <flux:button icon-trailing="arrow-right"
                                    href="{{ route('services.show', $service->slug) }}">
                                    Click Here</flux:button>
                            </div>
                        </flux:card>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

{{-- <div class=" py-24 sm:py-32 mt-32">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-center text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
        <p
            class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">
            Everything you need to deploy your app</p>
        <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Mobile
                            friendly</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Anim aute id magna aliqua
                            ad
                            ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                    </div>
                    <div class="@container relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
                        <div
                            class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                            <img class="size-full object-cover object-top"
                                src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-mobile-friendly.png"
                                alt="">
                        </div>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 lg:rounded-l-[2rem]">
                </div>
            </div>
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Performance
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit maiores impedit.</p>
                    </div>
                    <div
                        class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                        <img class="w-full max-lg:max-w-xs"
                            src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-performance.png"
                            alt="">
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-t-[2rem]">
                </div>
            </div>
            <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                <div class="absolute inset-px rounded-lg bg-white"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Security
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Morbi viverra dui mi arcu
                            sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                    </div>
                    <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                        <img class="h-[min(152px,40cqw)] object-cover"
                            src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-security.png"
                            alt="">
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5"></div>
            </div>
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Powerful
                            APIs</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Sit quis amet rutrum tellus
                            ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                    </div>
                    <div class="relative min-h-[30rem] w-full grow">
                        <div
                            class="absolute top-10 right-0 bottom-0 left-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl">
                            <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                                    <div
                                        class="border-r border-b border-r-white/10 border-b-white/20 bg-white/5 px-4 py-2 text-white">
                                        NotificationSetting.jsx</div>
                                    <div class="border-r border-gray-600/10 px-4 py-2">App.jsx</div>
                                </div>
                            </div>
                            <div class="px-6 pt-6 pb-14">
                                <!-- Your code example -->
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                </div>
            </div>
        </div>
    </div>
</div> --}}


{{-- <div class="flex-1">
    <flux:card class="h-full flex flex-col space-y-3">
        <img src="" alt="">
        <flux:heading>Workflow Templates</flux:heading>
        <flux:subheading>Templates for n8n, Zapier, Notion, </flux:subheading>
        <flux:spacer />
        <flux:separator />
        <div class="">
            <flux:button icon-trailing="arrow-right">Click Here</flux:button>
        </div>
    </flux:card>
</div>
<div class="flex-1">
    <flux:card class="h-full flex flex-col space-y-3">
        <flux:heading>Courses</flux:heading>
        <flux:subheading>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga facere
            tenetur doloremque veritatis deserunt.</flux:subheading>
        <flux:spacer />
        <flux:separator />
        <div class="">
            <flux:button icon-trailing="arrow-right">Click Here</flux:button>
        </div>
    </flux:card>
</div>
<div class="flex-1">
    <flux:card class="h-full flex flex-col space-y-3">
        <flux:heading>Products</flux:heading>
        <flux:subheading>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga facere
            tenetur doloremque veritatis deserunt.</flux:subheading>
        <flux:spacer />
        <flux:separator />
        <div class="">
            <flux:button icon-trailing="arrow-right">Click Here</flux:button>
        </div>
    </flux:card>
</div>
<div class="flex-1">
    <flux:card class="h-full flex flex-col space-y-3">
        <img src="" alt="">
        <flux:heading>Performance & UX Analyses</flux:heading>
        <flux:subheading>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga facere
            tenetur doloremque veritatis deserunt.</flux:subheading>
        <flux:spacer />
        <flux:separator />
        <div class="">
            <flux:button icon-trailing="arrow-right">Click Here</flux:button>
        </div>
    </flux:card>
</div>
<div class="flex-1">
    <flux:card class="h-full flex flex-col space-y-3">
        <flux:heading>Services</flux:heading>
        <flux:subheading>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga facere
            tenetur doloremque veritatis deserunt.</flux:subheading>
        <flux:spacer />
        <flux:separator />
        <div class="">
            <flux:button icon-trailing="arrow-right" href="/services">Click
                Here</flux:button>
        </div>
    </flux:card>
</div>
<div class="flex-1">
    <flux:card class="h-full flex flex-col space-y-3">
        <flux:heading>Design Templates</flux:heading>
        <flux:subheading>Webflow, Framer & Shopify</flux:subheading>
        <flux:spacer />
        <flux:separator />
        <div class="">
            <flux:button icon-trailing="arrow-right">Click Here</flux:button>
        </div>
    </flux:card>
</div> --}}
