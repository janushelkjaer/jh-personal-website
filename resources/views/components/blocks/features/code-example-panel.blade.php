<div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl md:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:grid-cols-2 lg:items-start">
            <div class="px-6 md:px-0 lg:pr-4 lg:pt-4">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-lg">
                    <h2 class="text-base/7 font-semibold text-accent">
                        {{ $data['pre_title'] }}
                    </h2>
                    <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                        {{ $data['title'] }}
                    </p>
                    <div class="mt-6 text-lg/8 text-gray-600">
                        {!! $data['content'] !!}
                    </div>
                    <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                        @foreach ($data['features'] as $feature)
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <div class="absolute left-1 top-1 size-5 text-accent">
                                        <flux:icon name="{{ $feature['icon'] }}" variant="solid" class="size-5" />
                                    </div>
                                    {{ $feature['title'] }}
                                </dt>
                                <dd class="inline">
                                    {!! $feature['description'] !!}
                                </dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            </div>
            <div class="sm:px-6 lg:px-0">
                <div
                    class="relative isolate overflow-hidden bg-accent px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pl-16 sm:pr-0 sm:pt-16 lg:mx-0 lg:max-w-none">
                    <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-accent opacity-20 ring-1 ring-inset ring-white"
                        aria-hidden="true"></div>
                    <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                        <div class="w-screen overflow-hidden rounded-tl-xl bg-gray-900 ring-1 ring-white/10">
                            <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                                    <div
                                        class="border-b border-r border-b-white/20 border-r-white/10 bg-white/5 px-4 py-2 text-white">
                                        index.php</div>
                                    <div class="border-r border-gray-600/10 px-4 py-2">component.php</div>
                                </div>
                            </div>
                            <div class="">
                                <!-- Your code example -->
                                <x-markdown theme="github-dark" class="">{!! $data['code_example'] !!}</x-markdown>
                            </div>
                        </div>
                    </div>
                    <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl"
                        aria-hidden="true"></div>
                </div>
            </div>
        </div>
    </div>
</div>
