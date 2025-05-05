<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-base/7 font-semibold text-indigo-400">{{ $data['pre_title'] }}</h2>
        <p class="mt-2 max-w-lg text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">
            {{ $data['title'] }}</p>
        <div class="mt-10 grid grid-cols-1 gap-4 sm:mt-16 lg:grid-cols-6 lg:grid-rows-2">
            <div class="flex p-px lg:col-span-4">
                <div
                    class="overflow-hidden rounded-lg bg-gray-800 ring-1 ring-white/15 max-lg:rounded-t-[2rem] lg:rounded-tl-[2rem] flex-1 px-10 ">
                    <img class="h-80 object-cover object-left w-full rounded-b-lg   "
                        src="{{ Storage::url($data['cards'][0]['image']) }}" alt="">
                    <div class="p-10 -mx-10">
                        <h3 class="text-sm/4 font-semibold text-gray-400">{{ $data['cards'][0]['pre_heading'] }}</h3>
                        <p class="mt-2 text-lg font-medium tracking-tight text-white">{{ $data['cards'][0]['heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-400">{{ $data['cards'][0]['text'] }}</p>
                    </div>
                </div>
            </div>
            <div class="flex p-px lg:col-span-2">
                <div class="overflow-hidden rounded-lg bg-gray-800 ring-1 ring-white/15 lg:rounded-tr-[2rem] flex-1">
                    <img class="h-80 object-cover w-full" src="{{ Storage::url($data['cards'][1]['image']) }}"
                        alt="">
                    <div class="p-10">
                        <h3 class="text-sm/4 font-semibold text-gray-400">{{ $data['cards'][1]['pre_heading'] }}</h3>
                        <p class="mt-2 text-lg font-medium tracking-tight text-white">{{ $data['cards'][1]['heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-400">{{ $data['cards'][1]['text'] }}</p>
                    </div>
                </div>
            </div>
            <div class="flex p-px lg:col-span-2">
                <div class="overflow-hidden rounded-lg bg-gray-800 ring-1 ring-white/15 lg:rounded-bl-[2rem] flex-1">
                    <img class="h-80 object-cover w-full" src="{{ Storage::url($data['cards'][2]['image']) }}"
                        alt="">
                    <div class="p-10">
                        <h3 class="text-sm/4 font-semibold text-gray-400">{{ $data['cards'][2]['pre_heading'] }}</h3>
                        <p class="mt-2 text-lg font-medium tracking-tight text-white">
                            {{ $data['cards'][2]['heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-400">{{ $data['cards'][2]['text'] }}</p>
                    </div>
                </div>
            </div>
            <div class="flex p-px lg:col-span-4">
                <div
                    class="overflow-hidden rounded-lg bg-gray-800 ring-1 ring-white/15 max-lg:rounded-b-[2rem] lg:rounded-br-[2rem] flex-1 pl-10 pt-10">
                    <img class="h-70 object-cover object-left w-full rounded-l-lg"
                        src="{{ Storage::url($data['cards'][3]['image']) }}" alt="">
                    <div class="p-10 -mx-10">
                        <h3 class="text-sm/4 font-semibold text-gray-400">{{ $data['cards'][3]['pre_heading'] }}</h3>
                        <p class="mt-2 text-lg font-medium tracking-tight text-white">
                            {{ $data['cards'][3]['heading'] }}
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-400">{{ $data['cards'][3]['text'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
