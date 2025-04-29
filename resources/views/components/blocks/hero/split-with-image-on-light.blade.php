<div class="relative bg-white">
    <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
        <div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-48 lg:pt-40 xl:col-span-6">
            <div class="mx-auto max-w-lg lg:mx-0">
                <x-app-logo-icon class="h-11" />
                <div class="hidden sm:mt-32 sm:flex lg:mt-16">
                    @if (1 == 2)
                        <div
                            class="relative rounded-full px-3 py-1 text-sm/6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Anim aute id magna aliqua ad ad non deserunt sunt. <a href="#"
                                class="whitespace-nowrap font-semibold text-indigo-600"><span class="absolute inset-0"
                                    aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    @endif
                </div>
                <h1 class="mt-24 text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:mt-10 sm:text-7xl">
                    {!! $data['hero_title'] !!}</h1>
                <div class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
                    {!! $data['hero_content'] !!}
                </div>
                <div class="mt-10 flex items-center gap-x-6">
                    @foreach ($data['buttons'] as $button)
                        <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                            :href="$button['url']" :icon-trailing="$button['icon']">
                            {{ $button['label'] }}
                        </flux:button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
            <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full"
                src="{{ asset('storage/' . $data['mockup_image']) }}" alt="">
        </div>
    </div>
</div>
