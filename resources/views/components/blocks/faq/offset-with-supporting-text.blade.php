<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:pt-32 lg:px-8 lg:py-40">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-span-5">
                <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
                    {{ $data['heading'] }}</h2>
                <div class="mt-4 text-pretty text-base/7 text-gray-600">{!! $data['content'] !!}</div>
                @if ($data['buttons'] && count($data['buttons']) > 0)
                    <div class="mt-8">
                        @foreach ($data['buttons'] as $button)
                            <flux:button :href="$button['url']" :variant="$button['variant']" :icon="$button['icon']"
                                :icon-position="$button['icon_position']" :label="$button['label']" />
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="mt-10 lg:col-span-7 lg:mt-0">
                <dl class="space-y-10">
                    @foreach ($data['faq_items'] as $faq_item)
                        <div>
                            <dt class="text-base/7 font-semibold text-gray-900">{{ $faq_item['question'] }}</dt>
                            <dd class="mt-2 text-base/7 text-gray-600">{{ $faq_item['answer'] }}</dd>
                            @if ($faq_item['buttons'] && count($faq_item['buttons']) > 0)
                                <div class="mt-8">
                                    @foreach ($faq_item['buttons'] as $button)
                                        <flux:button :href="$button['url']" :variant="$button['variant']"
                                            :icon="$button['icon']" :label="$button['label']" />
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
</div>
