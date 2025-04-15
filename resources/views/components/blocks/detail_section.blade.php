@php
    $data = $attributes['info']['data'];

    $dynamicClasses = $data['image_position'] == 'right' ? 'lg:pr-8 lg:pt-4' : 'lg:ml-auto lg:pl-4 lg:pt-4';
@endphp

{{ json_encode($data) }}

<div class="overflow-hidden bg-white py-12 sm:py-18">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="{{ $dynamicClasses }}">
                <div class="lg:max-w-lg">
                    <h2 class="text-base font-semibold leading-7 text-primary">
                        {{ $data['supertitle'] }}
                    </h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        {{ $data['title'] }}
                    </p>
                    @if ($data['description'])
                        <div class="mt-6 text-lg leading-8 text-gray-600">
                            {!! $data['description'] !!}
                        </div>
                    @endif
                    @if (count($data['features']) > 0)
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                            @foreach ($data['features'] as $feature)
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <flux:icon.check />
                                        {{ $feature['title'] }}
                                    </dt>
                                    {{ ' ' }}
                                    <dd class="inline">
                                        {{ $feature['description'] }}
                                        {{-- <a :href="feature.button_link"
                                            class="text-sm text-primary font-semibold leading-6"
                                            v-if="feature.button_link">{{ feature . button_text }} <span
                                                aria-hidden="true">→</span></a> --}}
                                        @if ($feature['button_link'])
                                            <flux:button href="{{ $feature['button_link'] }}" variant="primary"
                                                icon="arrow-right">
                                                {{ $feature['button_text'] }}
                                            </flux:button>
                                        @endif
                                    </dd>
                                </div>
                            @endforeach
                        </dl>
                    @endif
                    {{-- <div class="mt-5 text-center" v-if="data.cta_link">
                            <UButton :href="data.cta_link" variant="red" :title="data.cta_button_text" />
                        </div> --}}
                    @if ($data['cta_link'])
                        <flux:button href="{{ $data['cta_link'] }}" variant="primary" icon="arrow-right">
                            {{ $data['cta_button_text'] }}
                        </flux:button>
                    @endif
                </div>
            </div>
            @if ($data['image_position'] == 'right')
                <img src="{{ Storage::url($data['image']) }}" alt="Product screenshot"
                    class="w-48 max-w-sm rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" />
            @else
                <div class="flex items-start justify-end lg:order-first">
                    <div class="flex items-start justify-end lg:order-first">
                        <img src="{{ Storage::url($data['image']) }}" alt="Product screenshot"
                            class="w-48 max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0 max-w-sm" />
                    </div>
            @endif
        </div>
    </div>
</div>

{{-- 
<script setup>
import {CheckIcon} from '@heroicons/vue/20/solid'
import {computed} from "vue";
import UButton from '@/Components/UButton.vue';

const props = defineProps({
    data: Object,
})

const position = props.data.image_position;

const classes = computed(() => {
    return {
        'lg:pr-8 lg:pt-4': position === 'right',
        'lg:ml-auto lg:pl-4 lg:pt-4': position === 'left',
    }
});
</script> --}}
