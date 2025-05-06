<div class="bg-white py-32">
    <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
        <div class="mx-auto max-w-2xl">
            <h2 class="text-34l text-balance font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {{ $data['heading'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </div>
        </div>
        <ul role="list"
            class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach ($data['team_members'] as $member)
                <li>
                    <img class="mx-auto size-56 rounded-full object-cover"
                        src="{{ $member['image'] ? Storage::url($member['image']) : 'https://placehold.co/200x200?text=' . $member['name'] }}"
                        alt="">
                    <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-gray-900">{{ $member['name'] }}</h3>
                    <p class="text-sm/6 text-gray-600">{{ $member['title'] }}</p>
                    <ul role="list" class="mt-6 flex justify-center gap-x-6">
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
