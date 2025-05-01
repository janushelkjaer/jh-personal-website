<div class="w-full">
    @if ($signupSuccess)
        {{-- <div class="bg-green-100 p-4 rounded-md">
            <flux:text>
                You have been subscribed to the newsletter.
            </flux:text>
        </div> --}}
        <flux:callout icon="check-circle" color="lime" inline>
            <flux:callout.heading>You have been subscribed to the newsletter.</flux:callout.heading>

            {{-- <x-slot name="actions">
                <flux:button href="/blog" variant="outline" icon="arrow-right">Check the blog for earlier
                    articles</flux:button>
            </x-slot> --}}
        </flux:callout>
    @else
        <form action="" wire:submit="subscribe" class="flex gap-x-4">
            <div class="space-y-3 w-full">
                <flux:input id="email-address" name="email" type="email" autocomplete="email" wire:model="email"
                    class="min-w-0 flex-auto" placeholder="Your email" />
                <div class="flex gap-x-4">
                    <flux:input id="first-name" name="first-name" type="text" autocomplete="first-name"
                        wire:model="firstName" class="min-w-0 flex-auto" placeholder="Your first name" />
                    <flux:input id="last-name" name="last-name" type="text" autocomplete="last-name"
                        wire:model="lastName" class="min-w-0 flex-auto" placeholder="Your last name" />
                </div>
                {{-- <flux:field>
                <flux:input wire:model="email" type="email" />
                <flux:error name="email" />
            </flux:field> --}}
                <flux:field variant="inline">
                    <flux:checkbox wire:model="terms" />

                    <flux:label>I agree to the&nbsp;<a href="/privacy-policy" target="_blank">privacy policy</a>
                    </flux:label>
                    <flux:error name="terms" />
                </flux:field>
            </div>
            <flux:button type="submit" class="flex-none cursor-pointer" variant="primary" icon-trailing="envelope">
                Subscribe
            </flux:button>
        </form>
    @endif

</div>
