<x-filament-panels::page>

    <div wire:loading>
        Generating response...
    </div>

    <div class="p-6 shadow rounded-lg bg-white dark:bg-gray-800 mb-12 prose max-w-none">

        @if ($response)
            <div class="p3">

                @php
                    echo '<pre>';
                    print_r($response);
                    echo '</pre>';
                @endphp
            </div>
        @endif


    </div>


    <div>
        <label for="prompt">Post Prompt</label>
        <input type="text" id="prompt" wire:model="prompt" class="border rounded p-2 mb-4 w-full">
        <button wire:click="generatePost">Generate Post</button>
    </div>

</x-filament-panels::page>
