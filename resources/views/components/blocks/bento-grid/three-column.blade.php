<div class="bg-gray-50 py-24 sm:py-32">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-center text-base/7 font-semibold text-indigo-600">{{ $data['pre_title'] }}</h2>
        <p
            class="mx-auto mt-2 max-w-lg text-balance text-center text-4xl font-semibold tracking-tight text-gray-950 sm:text-5xl">
            {{ $data['title'] }}</p>
        <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                    <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                            {{ $data['cards'][0]['pre_heading'] }}</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            {{ $data['cards'][0]['heading'] }}</p>
                    </div>
                    <div
                        class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm">
                        <div
                            class="absolute inset-x-10 bottom-0 top-10 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                            <img class="size-full object-cover object-top"
                                src="{{ Storage::url($data['cards'][0]['image']) }}" alt="">
                        </div>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]">
                </div>
            </div>
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                            {{ $data['cards'][1]['pre_heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            {{ $data['cards'][1]['heading'] }}
                        </p>
                    </div>
                    <div
                        class="flex flex-1 items-center justify-center px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2">
                        <img class="w-full max-lg:max-w-xs" src="{{ Storage::url($data['cards'][1]['image']) }}"
                            alt="">
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem]">
                </div>
            </div>
            <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                <div class="absolute inset-px rounded-lg bg-white"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                            {{ $data['cards'][2]['pre_heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            {{ $data['cards'][2]['heading'] }}
                        </p>
                    </div>
                    <div class="flex flex-1 items-center [container-type:inline-size] max-lg:py-6 lg:pb-2">
                        <img class="h-[min(152px,40cqw)] object-cover"
                            src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-security.png"
                            alt="">
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5"></div>
            </div>
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                    <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                            {{ $data['cards'][3]['pre_heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                            {{ $data['cards'][3]['heading'] }}
                        </p>
                    </div>
                    <div class="relative min-h-[30rem] w-full grow">
                        <div
                            class="absolute bottom-0 left-10 right-0 top-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl">
                            <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                                    <div
                                        class="border-b border-r border-b-white/20 border-r-white/10 bg-white/5 px-4 py-2 text-white">
                                        example.js</div>
                                    <div class="border-r border-gray-600/10 px-4 py-2">example.js</div>
                                </div>
                            </div>
                            <div class="px-6 pb-14 pt-6">
                                <!-- Your code example -->
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                </div>
            </div>
        </div>
    </div>
</div>
