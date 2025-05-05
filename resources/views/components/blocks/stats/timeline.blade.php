<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-8 overflow-hidden lg:mx-0 lg:max-w-none lg:grid-cols-4">
            @foreach ($data['stats'] as $stat)
                <div>
                    <time datetime="2021-08" class="flex items-center text-sm/6 font-semibold text-indigo-600">
                        <svg viewBox="0 0 4 4" class="mr-4 size-1 flex-none" aria-hidden="true">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                        </svg>
                        {{ $stat['value'] }}
                        <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0"
                            aria-hidden="true"></div>
                    </time>
                    <p class="mt-6 text-lg/8 font-semibold tracking-tight text-gray-900">
                        {!! $stat['title'] !!}
                    </p>
                    <div class="mt-1 text-base/7 text-gray-600">
                        {!! $stat['description'] !!}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
