<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl sm:text-center">
            <h2 class="text-3xl text-balance font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {{ $data['heading'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </div>
        </div>
        <ul role="list"
            class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:max-w-4xl lg:gap-x-8 xl:max-w-none">
            @foreach ($data['team_members'] as $member)
                <li class="flex flex-col gap-6 xl:flex-row">
                    <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover"
                        src="{{ $member['image'] ? Storage::url($member['image']) : 'https://placehold.co/200x200?text=' . $member['name'] }}"
                        alt="">
                    <div class="flex-auto">
                        <h3 class="text-lg/8 font-semibold tracking-tight text-gray-900">{{ $member['name'] }}</h3>
                        <p class="text-base/7 text-gray-600">{{ $member['title'] }}</p>
                        <p class="mt-6 text-base/7 text-gray-600">{{ $member['description'] }}</p>

                        <ul role="list" class="mt-6 flex gap-x-6">
                            @foreach ($member['social_links'] as $link)
                                <li>
                                    <a href="{{ $link['url'] }}" class="text-gray-400 hover:text-gray-300"
                                        target="_blank">
                                        <flux:icon name="{{ $link['platform'] }}" class="size-5" />
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </li>
            @endforeach
        </ul>
    </div>
</div>
