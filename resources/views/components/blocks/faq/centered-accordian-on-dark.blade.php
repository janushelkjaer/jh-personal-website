<div class="bg-neutral-900">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
        <div class="mx-auto max-w-4xl">
            <h2 class="text-4xl font-semibold tracking-tight text-white sm:text-5xl">{{ $data['heading'] }}</h2>
            <dl class="mt-16 divide-y divide-white/10">
                @foreach ($data['faq_items'] as $faq_item)
                    <div x-data="{ open: false }" class="py-6 first:pt-0 last:pb-0">
                        <dt>
                            <button type="button" x-description="Expand/collapse question button"
                                class="flex w-full items-start justify-between text-left text-white cursor-pointer"
                                aria-controls="faq-0" @click="open = !open" aria-expanded="true"
                                x-bind:aria-expanded="open.toString()">
                                <span class="text-base/7 font-semibold">{!! $faq_item['question'] !!}</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg x-description="Icon when question is collapsed." x-state:on="Item expanded"
                                        x-state:off="Item collapsed" class="size-6 hidden" :class="{ 'hidden': open }"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                    </svg>
                                    <svg x-description="Icon when question is expanded." x-state:on="Item expanded"
                                        x-state:off="Item collapsed" class="size-6" :class="{ 'hidden': !(open) }"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq-0" x-show="open">
                            <p class="text-base/7 text-neutral-300">{!! $faq_item['answer'] !!}</p>
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>
