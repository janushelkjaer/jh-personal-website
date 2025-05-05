<div class="relative bg-white">
    <img class="h-56 w-full bg-gray-50 object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-1/2"
        src="{{ Storage::url($data['image']) }}" alt="">
    <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
        <div class="px-6 pb-24 pt-16 sm:pb-32 sm:pt-20 lg:col-start-2 lg:px-8 lg:pt-32">
            <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                <h2 class="text-base/8 font-semibold text-accent">
                    {!! $data['pre_title'] !!}
                </h2>
                <div class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                    {!! $data['title'] !!}
                </div>
                <div class="mt-6 text-lg/8 text-gray-600">
                    {!! $data['content'] !!}
                </div>
                <dl class="mt-16 grid max-w-xl grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 xl:mt-16">
                    @foreach ($data['stats'] as $stat)
                        <div class="flex flex-col gap-y-3 border-l border-gray-900/10 pl-6">
                            <dt class="text-sm/6 text-gray-600">
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
</div>
