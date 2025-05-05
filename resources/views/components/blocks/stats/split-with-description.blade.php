<div class="bg-white py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {!! $data['title'] !!}
            </h2>
            <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                    <div class="text-xl/8 text-gray-600">
                        {!! $data['pre_title'] !!}
                    </div>
                    <div class="mt-10 max-w-xl text-base/7 text-gray-700 prose">
                        {!! $data['content'] !!}
                    </div>
                </div>
                <div class="lg:flex lg:flex-auto lg:justify-center">
                    <dl class="w-64 space-y-8 xl:w-80">
                        @foreach ($data['stats'] as $stat)
                            <div class="flex flex-col-reverse gap-y-4">
                                <dt class="text-base/7 text-gray-600">{{ $stat['title'] }}</dt>
                                <dd class="text-5xl font-semibold tracking-tight text-gray-900">{{ $stat['value'] }}
                                </dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
