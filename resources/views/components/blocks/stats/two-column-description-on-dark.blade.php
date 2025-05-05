<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
            <p class="text-base/7 font-semibold text-indigo-400">
                {{ $data['pre_title'] }}
            </p>
            <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                {!! $data['title'] !!}
            </h1>
            <div class="mt-10 grid max-w-xl grid-cols-1 gap-8 text-base/7 text-gray-300 lg:max-w-none lg:grid-cols-2">
                {!! $data['content'] !!}
            </div>
            <dl
                class="mt-16 grid grid-cols-1 gap-x-8 gap-y-12 sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mt-28 lg:grid-cols-4">
                @foreach ($data['stats'] as $stat)
                    <div class="flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
                        <dt class="text-base/7 text-gray-300">{{ $stat['title'] }}</dt>
                        <dd class="text-3xl font-semibold tracking-tight text-white">{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
