<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {{ $data['title'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </div>
        </div>
        <dl
            class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base/7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach ($data['features'] as $feature)
                <div>
                    <dt class="font-semibold text-gray-900">
                        {{ $feature['title'] }}
                    </dt>
                    <dd class="mt-1 text-gray-600">
                        {!! $feature['description'] !!}
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>
</div>
