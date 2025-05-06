<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-xl">
            <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
                {{ $data['heading'] }}
            </h2>
            <div class="mt-6 text-lg/8 text-gray-600">
                {!! $data['content'] !!}
            </div>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ($data['team_members'] as $member)
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="size-16 rounded-full object-cover"
                            src="{{ $member['image'] ? Storage::url($member['image']) : 'https://placehold.co/200x200?text=' . $member['name'] }}"
                            alt="">
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">
                                {{ $member['name'] }}
                            </h3>
                            <p class="text-sm/6 font-semibold text-indigo-600">
                                {{ $member['title'] }}
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
