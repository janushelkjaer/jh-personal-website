<div class="bg-neutral-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                {{ $data['heading'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-neutral-300">
                {!! $data['content'] !!}
            </div>
        </div>
        <ul role="list"
            class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($data['team_members'] as $member)
                <li>
                    <img class="aspect-[14/13] w-full rounded-2xl object-cover"
                        src="{{ $member['image'] ? Storage::url($member['image']) : 'https://placehold.co/200x200?text=' . $member['name'] }}"
                        alt="">
                    <h3 class="mt-6 text-lg/8 font-semibold tracking-tight text-white">
                        {{ $member['name'] }}
                    </h3>
                    <p class="text-base/7 text-neutral-300">
                        {{ $member['title'] }}
                    </p>
                    <p class="text-sm/6 text-neutral-500">
                        {{ $member['description'] }}
                    </p>

                    <ul role="list" class="mt-6 flex gap-x-6">
                        @foreach ($member['social_links'] as $link)
                            <li>
                                <a href="{{ $link['url'] }}" class="text-neutral-400 hover:text-neutral-300"
                                    target="_blank">
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
