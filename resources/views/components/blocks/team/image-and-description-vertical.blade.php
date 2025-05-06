<div class="bg-white py-24 md:py-32">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-20 px-6 lg:px-8 xl:grid-cols-5">
        <div class="max-w-2xl xl:col-span-2">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {{ $data['heading'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </div>
        </div>
        <ul role="list" class="divide-y divide-gray-200 xl:col-span-3">
            @foreach ($data['team_members'] as $member)
                <li class="flex flex-col gap-10 py-12 first:pt-0 last:pb-0 sm:flex-row">
                    <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover"
                        src="{{ $member['image'] ? Storage::url($member['image']) : 'https://placehold.co/200x200?text=' . $member['heading'] }}"
                        alt="">
                    <div class="max-w-xl flex-auto">
                        <h3 class="text-lg/8 font-semibold tracking-tight text-gray-900">{{ $member['name'] }}</h3>
                        <p class="text-base/7 text-gray-600">{{ $member['title'] }}</p>
                        <p class="mt-6 text-base/7 text-gray-600">
                            {{ $member['description'] }}
                        </p>
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
            <!-- More people... -->
        </ul>
    </div>
</div>
