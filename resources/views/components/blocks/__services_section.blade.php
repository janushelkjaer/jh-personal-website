@php
    $data = $attributes['info']['data'];

    $title = $data['title'];
    $subtitle = $data['subtitle'];
    $content = $data['content'];

    $services = \App\Models\Service::all();

@endphp
<section id="secondary-features" aria-label="Features for building a portfolio" class="py-20 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl sm:text-center">
            <h2 class="text-3xl font-medium tracking-tight text-gray-900">{{ $title }}</h2>
            <p class="mt-2 text-lg text-gray-600">{{ $subtitle }}</p>
        </div>
        <ul role="list"
            class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 text-sm sm:mt-20 sm:grid-cols-2 md:gap-y-10 lg:max-w-none lg:grid-cols-3">

            @foreach ($services as $service)
                @php
                    $mediaItems = $service->getMedia('services');
                    $publicFullUrl = isset($mediaItems[0])
                        ? $mediaItems[0]->getFullUrl()
                        : 'https://placehold.co/540x540?text=' . $service->title;

                @endphp
                <li class="rounded-2xl border border-gray-200 p-8">
                    <div class="w-12 h-12 relative">
                        <img src="{{ $publicFullUrl }}" alt="{{ $service->title }}"
                            class="w-12 h-12 object-contain absolute top-0 left-0 -mt-1 ml-1">
                        <svg viewBox="0 0 32 32" aria-hidden="true" class="h-12 w-12">
                            {{-- <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9 0a4 4 0 00-4 4v24a4 4 0 004 4h14a4 4 0 004-4V4a4 4 0 00-4-4H9zm0 2a2 2 0 00-2 2v24a2 2 0 002 2h14a2 2 0 002-2V4a2 2 0 00-2-2h-1.382a1 1 0 00-.894.553l-.448.894a1 1 0 01-.894.553h-6.764a1 1 0 01-.894-.553l-.448-.894A1 1 0 0010.382 2H9z"
                            fill="#737373"></path>
                        <path d="M12 25l8-8m0 0h-6m6 0v6" stroke="#171717" stroke-width="2" stroke-linecap="round">
                        </path> --}}
                            <circle cx="16" cy="16" r="16" fill="#A3A3A3" fill-opacity="0.2"></circle>
                        </svg>
                    </div>
                    <h3 class="mt-6 font-semibold text-gray-900 text-base">{{ $service->title }}</h3>
                    <p class="mt-2 text-gray-700">{!! $service->short_description !!}</p>

                    <flux:button href="{{ route('services.show', $service->slug) }}" icon-trailing="arrow-right">
                        {{ __('navigation.view_more') }}
                    </flux:button>
                </li>
            @endforeach
        </ul>
    </div>
</section>
