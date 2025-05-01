@php
    $data = $attributes['info']['data'];

    # dd($data);

@endphp
@if ($data && count($data) > 0)
    <div class="py-6 my-12 lg:my-24 bg-neutral-50  shadow-inner border border-neutral-200 rounded-lg max-w-5xl mx-auto">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="pb-6">
                <flux:heading id="what-you-will-learn" size="lg" level="2">What You Will Learn</flux:heading>
            </div>


            @if ($data && count($data) > 0)
                <div class="grid  gap-3 {{ count($data) % 2 == 0 ? 'lg:grid-cols-2' : 'lg:grid-cols-3' }}">
                    @foreach ($data as $item)
                        <div>
                            <flux:card class="space-y-3 h-full">
                                <div class="flex items-center">
                                    <div class="mr-3">
                                        <flux:icon.check-circle />
                                    </div>
                                    <div>
                                        <flux:heading size="md">{{ $item['heading'] }}</flux:heading>
                                    </div>
                                </div>

                                <flux:text>
                                    <p>{{ $item['text'] }}</p>
                                </flux:text>
                            </flux:card>
                        </div>
                    @endforeach

                </div>
            @endif

        </div>
    </div>
@endif
