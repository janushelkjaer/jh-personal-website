<x-layouts.app title="{{ $page->title }}">

    <div class="py-3 -mt-8 -mx-8 bg-zinc-100">
        <div class="max-w-7xl mx-auto px-8">
            <flux:breadcrumbs>
                <flux:breadcrumbs.item href="{{ route('home') }}" icon="home" />
                <flux:breadcrumbs.item>{{ $page->title }}</flux:breadcrumbs.item>
            </flux:breadcrumbs>
        </div>
    </div>

    <div class="flex flex-col  items-center w-full">
        @if ($page->content)



            @foreach ($page->content as $key => $blockComponent)
                <div class="py-1 w-full">
                    {{-- <div>
                        {{ $blockComponent['type'] }}
                    </div> --}}
                    <x-dynamic-component :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
                </div>
            @endforeach

        @endif
    </div>

</x-layouts.app>
