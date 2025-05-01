<div
    class="relative isolate overflow-hidden py-16 sm:py-24 lg:py-32  bg-neutral-100 border-t border-b border-neutral-200">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
            <div class="max-w-xl lg:max-w-lg space-y-3 prose dark:prose-invert">
                <h2 class="text-4xl font-semibold tracking-tight">{{ $data['title'] }}</h2>
                <flux:text class="">
                    {!! $data['content'] !!}
                </flux:text>
                <div class="mt-6 flex max-w-md gap-x-4">
                    <livewire:newsletter.sign-up />
                </div>
            </div>
            <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                <div class="flex flex-col items-start">
                    <div class="rounded-md">
                        <flux:icon name="envelope" class="size-6" />
                    </div>
                    <dt class="mt-3">
                        <flux:heading>Monthly articles</flux:heading>
                    </dt>
                    <dd class="mt-2">
                        <div class="prose dark:prose-invert">

                            <flux:text>
                                <ul>
                                    <li>2-4 newsletters a month</li>
                                    <li>Free resources</li>
                                    <li>AI prompts, design assets, data-proven strategic ideas</li>
                                </ul>
                            </flux:text>
                        </div>
                    </dd>
                </div>
                <div class="flex flex-col items-start">
                    <div class="rounded-md">
                        <flux:icon name="hand-raised" class="size-6" />
                    </div>
                    <dt class="mt-3">
                        <flux:heading>No spam</flux:heading>
                    </dt>
                    <dd class="mt-2">
                        <div class="prose dark:prose-invert">
                            <flux:text>
                                I promise to never send you spam. I will only send you newsletters and updates about my
                                work.
                            </flux:text>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
