<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
        <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $data['heading'] }}</h2>
        <dl class="mt-20 divide-y divide-gray-900/10">
            @foreach ($data['faq_items'] as $faq_item)
                <div class="py-8 first:pt-0 last:pb-0 lg:grid lg:grid-cols-12 lg:gap-8">
                    <dt class="text-base/7 font-semibold text-gray-900 lg:col-span-5">{{ $faq_item['question'] }}</dt>
                    <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-base/7 text-gray-600">{!! $faq_item['answer'] !!}</p>
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>
</div>
