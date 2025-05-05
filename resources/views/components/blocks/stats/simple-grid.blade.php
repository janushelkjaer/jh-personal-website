<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <div class="text-center">
                <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                    {!! $data['title'] !!}
                </h2>
                <div class="mt-4 text-lg/8 text-gray-600">
                    {!! $data['content'] !!}
                </div>
            </div>
            <dl
                class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($data['stats'] as $stat)
                    <div class="flex flex-col bg-gray-400/5 p-8">
                        <dt class="text-sm/6 font-semibold text-gray-600">
                            {!! $stat['title'] !!}
                        </dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900">
                            {!! $stat['value'] !!}
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
