<div class="bg-white py-24 md:py-32 lg:py-40">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {{ $data['heading'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </div>
        </div>
        <ul role="list"
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 xl:col-span-2">
            @foreach ($data['team_members'] as $member)
                <li>
                    <img class="aspect-[3/2] w-full rounded-2xl object-cover"
                        src="{{ $member['image'] ? Storage::url($member['image']) : 'https://placehold.co/200x200?text=' . $member['name'] }}"
                        alt="">
                    <h3 class="mt-6 text-lg/8 font-semibold text-gray-900">{{ $member['name'] }}</h3>
                    <p class="text-base/7 text-gray-600">{{ $member['title'] }}</p>
                    <p class="mt-4 text-base/7 text-gray-600">
                        {{ $member['description'] }}
                    </p>
                    <ul role="list" class="mt-6 flex gap-x-6">
                        @foreach ($member['social_links'] as $link)
                            <li>
                                <a href="{{ $link['url'] }}" class="text-gray-400 hover:text-gray-300" target="_blank">
                                    <flux:icon name="{{ $link['platform'] }}" class="size-5" />
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</div>
