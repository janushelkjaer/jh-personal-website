@php
    $items = $attributes['info']['data'];

@endphp

@if ($items && count($items) > 0)
    <div class="bg-neutral-50 py-6 lg:py-6 shadow-inner border border-neutral-200 rounded-lg max-w-4xl mx-auto">
        <div class="mx-auto max-w-2xl ">
            <flux:heading size="lg" id="key-takeaways"><span class="font-bold">Key
                    Takeaways</span></flux:heading>
            <ul role="list" class="mt-8 max-w-xl space-y-6 text-gray-600">

                @foreach ($items as $key => $item)
                    <li class=" gap-x-3">
                        <div class="flex gap-x-3">
                            <div>
                                <flux:icon name="check-circle" class="h-6 w-6 text-yellow-600" />
                            </div>

                            <div>
                                <div>
                                    <flux:heading class="font-bold">{{ $item['heading'] }}</flux:heading>
                                </div>

                                {{-- @svg($item['icon'], 'mt-1 h-5 w-5 flex-none text-indigo-600') --}}

                                <flux:text>
                                    {!! $item['text'] !!}
                                </flux:text>
                            </div>
                        </div>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
@endif
