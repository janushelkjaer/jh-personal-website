@php
    $imageTiles = $data['image_tiles'];
@endphp

<div class="overflow-hidden bg-white py-32">
    <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
            <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                    {!! $data['title'] !!}
                </h2>
                <div class="mt-6 text-xl/8 text-gray-600">
                    {!! $data['pre_title'] !!}
                </div>
                <div class="mt-6 text-base/7 text-gray-600">{!! $data['content'] !!}</div>
                <div class="mt-10 flex gap-x-3">
                    @foreach ($data['buttons'] as $button)
                        <flux:button :variant="($button['variant'] == 'default') ? null: $button['variant']"
                            :href="$button['url']" :icon-trailing="$button['icon']">
                            {{ $button['label'] }}
                        </flux:button>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                    <img src="{{ Storage::url($imageTiles[0]['image']) }}" alt=""
                        class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                </div>
                @if (count($imageTiles) > 1)
                    <div
                        class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                        @if (count($imageTiles) > 1)
                            <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
                                <img src="{{ Storage::url($imageTiles[1]['image']) }}" alt=""
                                    class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                        @endif
                        @if (count($imageTiles) > 2)
                            <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
                                <img src="{{ Storage::url($imageTiles[2]['image']) }}" alt=""
                                    class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                        @endif
                        @if (count($imageTiles) > 3)
                            <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                                <img src="{{ Storage::url($imageTiles[3]['image']) }}" alt=""
                                    class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
