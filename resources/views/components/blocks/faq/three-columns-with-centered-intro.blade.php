<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-semibold tracking-tight text-neutral-900 sm:text-5xl">{{ $data['heading'] }}</h2>
            <div class="mt-6 text-base/7 text-neutral-600">{!! $data['content'] !!}</div>
        </div>
        <div class="mt-20">
            <dl class="space-y-16 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:grid-cols-3 lg:gap-x-10">
                @foreach ($data['faq_items'] as $faq_item)
                    <div>
                        <dt class="text-base/7 font-semibold text-neutral-900">{{ $faq_item['question'] }}</dt>
                        <dd class="mt-2 text-base/7 text-neutral-600">{{ $faq_item['answer'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
