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
        <div class="bg-white py-24 sm:py-24 dark:bg-neutral-900 -mx-8">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-5xl  tracking-tight text-gray-900 dark:text-white sm:text-7xl font-semibold ">
                        {{ $page->title }}</h2>
                    <div class="mt-8 prose dark:prose-invert">
                        <x-markdown>{!! $page->intro !!}</x-markdown>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="flex flex-col  items-center -mx-6  xl:-mx-8">
        @if ($page->content)



            @foreach ($page->content as $key => $blockComponent)
                <div class="py-1 w-full bg-neutral-50 dark:bg-neutral-900">
                    <x-kugleland-content-block :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
                </div>
            @endforeach

        @endif
    </div>

</x-layouts.app>
