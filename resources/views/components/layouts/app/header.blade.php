@php
    use Datlechin\FilamentMenuBuilder\Models\Menu;

    $headerMenu = Menu::location('header-' . app()->getLocale());

@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <!-- Google Tag Manager (noscript) --><!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5SKMLGG" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <flux:header container sticky class="border-b border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-900 z-50">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <a href="{{ route('home') }}"
            class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0 {{ $headerMenu && $headerMenu->menuItems && count($headerMenu->menuItems) > 0 ? '' : 'pt-2' }}"
            wire:navigate>
            <x-app-logo />
        </a>

        <flux:navbar class="-mb-px max-lg:hidden">

            @if ($headerMenu && $headerMenu->menuItems && count($headerMenu->menuItems) > 0)

                @foreach ($headerMenu->menuItems as $item)
                    @if ($item->children && count($item->children) > 0)
                        <flux:dropdown class="max-lg:hidden">
                            <flux:navbar.item icon:trailing="chevron-down">
                                {{ $item->title }}
                            </flux:navbar.item>
                            <flux:navmenu>
                                @foreach ($item->children as $child)
                                    <flux:navmenu.item href="{{ $child->url }}"
                                        wire:current="request()->routeIs($child->url)" wire:navigate>
                                        {{ $child->title }}
                                    </flux:navmenu.item>
                                @endforeach
                            </flux:navmenu>
                        </flux:dropdown>
                    @else
                        <flux:navbar.item href="{{ $item->url }}" wire:current="request()->routeIs($item->url)"
                            wire:navigate>
                            {{ $item->title }}
                        </flux:navbar.item>
                    @endif
                @endforeach
            @endif


        </flux:navbar>

        <flux:spacer />

        <flux:navbar class="me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">
            @if (env('APP_ENV') == 'local')
                <flux:button size="sm"
                    href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale() == 'en' ? 'da' : 'en') }}"
                    variant="filled" class="uppercase text-xs">
                    {{ app()->getLocale() == 'en' ? 'da' : 'en' }}
                </flux:button>
            @endif
            {{-- <flux:button variant="primary" icon="hand-raised" href="/contact">Work With Me
            </flux:button> --}}
            {{-- <flux:tooltip :content="__('Search')" position="bottom">
                <flux:navbar.item class="!h-10 [&>div>svg]:size-5" icon="magnifying-glass" href="#"
                    :label="__('Search')" />
            </flux:tooltip> --}}
            <flux:separator vertical variant="subtle" class="mx-3" />
            <flux:tooltip :content="__('LinkedIn')" position="bottom">
                <flux:navbar.item class="!h-10 [&>div>svg]:size-5" icon="linkedin"
                    href="https://www.linkedin.com/in/janushelkjaer" target="_blank" :label="__('LinkedIn')" />
            </flux:tooltip>

            {{-- <flux:tooltip :content="__('YouTube')" position="bottom">
                <flux:navbar.item class="!h-10 [&>div>svg]:size-5" icon="youtube"
                    href="https://www.youtube.com/janushelkjaer" target="_blank" :label="__('YouTube')" />
            </flux:tooltip> --}}
            <flux:separator vertical variant="subtle" class="mx-3" />
            <flux:tooltip :content="__('Dark Mode')" position="bottom">
                <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
                    aria-label="Toggle dark mode" />
            </flux:tooltip>
        </flux:navbar>


    </flux:header>

    <!-- Mobile Menu -->
    <flux:sidebar stashable sticky
        class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('home') }}" class="ms-1 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
            <x-app-logo />
        </a>

        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Platform')">
                <flux:navlist.item icon="layout-grid" wire:href="route('home')"
                    wire:current="request()->routeIs('home')" wire:navigate>
                    {{ __('Home') }}
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

    </flux:sidebar>

    <div class="w-full">
        {{ $slot }}
    </div>



    @if (1 == 1)
        <footer class="bg-neutral-100 w-full -mt-8">
            <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
                {{-- <flux:separator subtle="1"  /> --}}
                {{-- <nav class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6" aria-label="Footer">
                        <a href="#" class="text-gray-600 hover:text-gray-900">About</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Blog</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Jobs</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Press</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Accessibility</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Partners</a>
                    </nav> --}}
                {{-- <div class="mt-16 flex justify-center gap-x-10">
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">Facebook</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">Instagram</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">X</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">GitHub</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <span class="sr-only">YouTube</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div> --}}
                <p class="mt-10 text-center text-sm/6 text-gray-600">&copy; {{ date('Y') }} Janus Helkjær,
                    Inc. All
                    rights
                    reserved.
                    {{-- <span class="mx-1">|</span> CVR: DK 36373040 --}}
                </p>
            </div>
        </footer>
    @endif

    @fluxScripts
</body>

</html>
