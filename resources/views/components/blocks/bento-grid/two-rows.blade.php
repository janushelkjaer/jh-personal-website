<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-base/7 font-semibold text-indigo-600">{{ $data['pre_title'] }}</h2>
        <p class="mt-2 max-w-lg text-pretty text-4xl font-semibold tracking-tight text-gray-950 sm:text-5xl">
            {{ $data['title'] }}</p>
        <div class="mt-10 grid grid-cols-1 gap-4 sm:mt-16 lg:grid-cols-6 lg:grid-rows-2">
            <div class="relative lg:col-span-3">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem] lg:rounded-tl-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)] lg:rounded-tl-[calc(2rem+1px)]">
                    <img class="h-80 object-cover object-left" src="{{ Storage::url($data['cards'][0]['image']) }}"
                        alt="">
                    <div class="p-10 pt-4">
                        <h3 class="text-sm/4 font-semibold text-indigo-600">{{ $data['cards'][0]['pre_heading'] }}</h3>
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">
                            {{ $data['cards'][0]['heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600">
                            {{ $data['cards'][0]['text'] }}
                        </p>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem] lg:rounded-tl-[2rem]">
                </div>
            </div>
            <div class="relative lg:col-span-3">
                <div class="absolute inset-px rounded-lg bg-white lg:rounded-tr-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-tr-[calc(2rem+1px)]">
                    <img class="h-80 object-cover object-left lg:object-right"
                        src="{{ Storage::url($data['cards'][1]['image']) }}" alt="">
                    <div class="p-10 pt-4">
                        <h3 class="text-sm/4 font-semibold text-indigo-600">{{ $data['cards'][1]['pre_heading'] }}</h3>
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">
                            {{ $data['cards'][1]['heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600">
                            {{ $data['cards'][1]['text'] }}
                        </p>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-tr-[2rem]">
                </div>
            </div>
            <div class="relative lg:col-span-2">
                <div class="absolute inset-px rounded-lg bg-white lg:rounded-bl-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-bl-[calc(2rem+1px)]">
                    <img class="h-80 object-cover object-left" src="{{ Storage::url($data['cards'][2]['image']) }}"
                        alt="">
                    <div class="p-10 pt-4">
                        <h3 class="text-sm/4 font-semibold text-indigo-600">Speed</h3>
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">
                            {{ $data['cards'][2]['heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600">
                            {{ $data['cards'][2]['text'] }}
                        </p>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-bl-[2rem]">
                </div>
            </div>
            <div class="relative lg:col-span-2">
                <div class="absolute inset-px rounded-lg bg-white"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                    <img class="h-80 object-cover" src="{{ Storage::url($data['cards'][3]['image']) }}" alt="">
                    <div class="p-10 pt-4">
                        <h3 class="text-sm/4 font-semibold text-indigo-600">
                            {{ $data['cards'][3]['pre_heading'] }}
                        </h3>
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">
                            {{ $data['cards'][3]['heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600">
                            {{ $data['cards'][3]['text'] }}
                        </p>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5"></div>
            </div>
            <div class="relative lg:col-span-2">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-br-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-br-[calc(2rem+1px)]">
                    <img class="h-80 object-cover" src="{{ Storage::url($data['cards'][4]['image']) }}" alt="">
                    <div class="p-10 pt-4">
                        <h3 class="text-sm/4 font-semibold text-indigo-600">
                            {{ $data['cards'][4]['pre_heading'] }}
                        </h3>
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">
                            {{ $data['cards'][4]['heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600">
                            {{ $data['cards'][4]['text'] }}
                        </p>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-br-[2rem]">
                </div>
            </div>
        </div>
    </div>
</div>
