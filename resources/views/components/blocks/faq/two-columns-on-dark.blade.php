<div class="bg-neutral-900">
    <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8">
        <h2 class="text-4xl font-semibold tracking-tight text-white sm:text-5xl">{{ $data['heading'] }}</h2>
        <div class="mt-6 max-w-2xl text-base/7 text-neutral-300">{!! $data['content'] !!}</div>
        <div class="mt-20">
            <dl class="space-y-16 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:gap-x-10">
                @foreach ($data['faq_items'] as $faq_item)
                    <div>
                        <dt class="text-base/7 font-semibold text-white">{{ $faq_item['question'] }}</dt>
                        <dd class="mt-2 text-base/7 text-neutral-300">{{ $faq_item['answer'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
