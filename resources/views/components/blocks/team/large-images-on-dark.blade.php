<div class="bg-neutral-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
        <div class="mx-auto max-w-2xl">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                {{ $data['heading'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-neutral-400">
                {!! $data['content'] !!}
            </div>
        </div>
        <ul role="list"
            class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
            @foreach ($data['team_members'] as $member)
                <li class="rounded-2xl bg-neutral-800 px-8 py-10">
                    <img class="mx-auto size-48 rounded-full md:size-56 object-cover"
                        src="{{ $member['image'] ? Storage::url($member['image']) : 'https://   placehold.co/200x200?text=' . $member['name'] }}"
                        alt="">
                    <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-white">{{ $member['name'] }}</h3>
                    <p class="text-sm/6 text-neutral-400">{{ $member['title'] }}</p>
                    <ul role="list" class="mt-6 flex justify-center gap-x-6">
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

            <!-- More people... -->
        </ul>
    </div>
</div>
