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
    <div class="px-6">
        <div class="relative overflow-hidden bg-zinc-50 dark:bg-zinc-900 lg:py-24 xl:-mx-8 xl:-mt-12">

            <div class="mx-auto max-w-7xl lg:px-8">
                <flux:card>
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-4">
                        <div class="lg:col-span-4 p-6 ">
                            <div class="max-w-3xl  p-6 space-y-3 prose dark:prose-invert">
                                {{-- <h2 class="text-base font-semibold leading-7"></h2> --}}
                                <p
                                    class="mt-2 text-4xl font-medium tracking-tight leading-[1.3] text-balance sm:text-6xl ">
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

                        </div>
                        <div class="hidden lg:block lg:col-span-1 relative -mb-6" aria-hidden="true">
                            <div
                                class="overflow-hidden size-[12rem] lg:size-[20rem] xl:size-[20rem] bg-neutral-50 dark:bg-neutral-900 rounded right-0 top-0 absolute flex items-center justify-center shadow-inner">
                                <span class="mb-0.5 truncate leading-none font-semibold text-8xl">jh</span>
                            </div>
                        </div>
                    </div>
                </flux:card>
            </div>
        </div>
    </div>
@endif
