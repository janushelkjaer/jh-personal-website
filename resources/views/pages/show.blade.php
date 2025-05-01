<x-layouts.app title="{{ $page->title }}">

    @if ($page->slug !== 'home')
        <div class="py-3 -mt-8 -mx-8 bg-zinc-100 dark:bg-neutral-800">
            <div class="max-w-7xl mx-auto px-8">
                <flux:breadcrumbs>
                    <flux:breadcrumbs.item href="{{ route('home') }}" icon="home" />
                    <flux:breadcrumbs.item>{{ $page->title }}</flux:breadcrumbs.item>
                </flux:breadcrumbs>
            </div>
        </div>
    @endif

    @if ($page->slug !== 'home')
        <div class="bg-white py-24 sm:py-32 dark:bg-neutral-900 -mx-8">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-5xl  tracking-tight text-gray-900 dark:text-white sm:text-7xl font-semibold ">
                        {{ $page->title }}</h2>
                    <p class="mt-8 text-pretty text-lg font-medium text-gray-500 dark:text-neutral-400 sm:text-xl/8">Anim
                        aute id magna aliqua
                        ad
                        ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam
                        occaecat
                        fugiat.</p>
                </div>
            </div>
        </div>
    @endif


    <div class="flex flex-col  items-center -mx-6  xl:-mx-8">
        @if ($page->content)



            @foreach ($page->content as $key => $blockComponent)
                <div class="py-1 w-full bg-neutral-50 dark:bg-neutral-900">
                    {{-- <div>
                        {{ $blockComponent['type'] }}
                    </div> --}}
                    <x-dynamic-component :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
                </div>
            @endforeach

        @endif
    </div>

</x-layouts.app>
