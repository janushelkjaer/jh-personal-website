<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                {{ $data['heading'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </div>
        </div>
        <ul role="list"
            class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
            @foreach ($data['team_members'] as $member)
                <li>
                    <img class="mx-auto size-24 rounded-full object-cover"
                        src="{{ $member['image'] ? Storage::url($member['image']) : 'https://placehold.co/200x200?text=' . $member['name'] }}"
                        alt="">
                    <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-gray-900">
                        {{ $member['name'] }}
                    </h3>
                    <p class="text-sm/6 text-gray-600">
                        {{ $member['title'] }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
</div>
