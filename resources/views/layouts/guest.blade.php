<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        />
        <meta
            name="csrf-token"
            content="{{ csrf_token() }}"
        />

        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Fonts -->
        <link
            rel="preconnect"
            href="https://fonts.bunny.net"
        />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600|windsong:500&display=swap"
            rel="stylesheet"
        />

        <!-- Styles -->
        @include("partials._style")
        <!-- END headstyles -->

        <!-- Scripts -->
        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (
                localStorage.getItem('color-theme') === 'dark' ||
                (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
            ) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>
        <!-- Google tag (gtag.js) -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-5D3QXY2BM6"
        ></script>

        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-5D3QXY2BM6');
        </script>

        <!-- MailChimp  -->
        <script id="mcjs">
            !(function (c, h, i, m, p) {
                (m = c.createElement(h)),
                    (p = c.getElementsByTagName(h)[0]),
                    (m.async = 1),
                    (m.src = i),
                    p.parentNode.insertBefore(m, p);
            })(
                document,
                'script',
                'https://chimpstatic.com/mcjs-connected/js/users/d75493173ff7f0ed40a6cae8f/c0f9fdc8e1c3e039592e3c81c.js',
            );
        </script>

        @stack("head_scripts")
        <wireui:scripts />
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div
            class="flex min-h-screen flex-col items-center bg-white pt-6 dark:bg-primary-800 sm:justify-center sm:pt-0"
        >
            <header class="sticky top-0 z-50 w-full border-b-2 border-primary-300 dark:border-primary-300">
                <livewire:layout.navigation />
            </header>
            <div class="w-full bg-primary-300">
                {{ $slot }}
            </div>
        </div>

        {{-- Footer --}}
        <footer class="min-h-screen border-t-4 border-primary-600 bg-primary-50 px-4 py-1 text-black lg:p-20">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col justify-between md:flex-row">
                    <div class="logo">
                        <x-bradfield-consulting-logo
                            name="footer_logo"
                            class="w-80"
                            mode="dark"
                            shadow
                            aria-lable="{{ config('app.name') }} Logo"
                        />
                        <address class="flex flex-col">
                            <x-wireui-link
                                icon="envelope-open"
                                class="inline text-left"
                                href="mailto:{{ config('mail.from.address') }}"
                                label="{{config('mail.from.address')}}"
                            />
                            <x-wireui-link
                                icon="phone"
                                class="inline text-left"
                                href="tel:{{ config('app.phone') }}"
                                label="{{config('app.phone')}}"
                            />
                        </address>
                    </div>

                    <div class="quick-links">
                        <h4 class="text-xl">Quick Links</h4>
                        <ul class="flex list-none flex-col divide-y">
                            <x-responsive-nav-link
                                href="/#aboutus"
                                class="text-primary-500"
                            >
                                {{ __("About") }}
                            </x-responsive-nav-link>

                            <x-responsive-nav-link href="/#why">
                                {{ __("Why Us?") }}
                            </x-responsive-nav-link>

                            <x-responsive-nav-link href="/services">
                                {{ __("Services") }}
                            </x-responsive-nav-link>

                            <x-responsive-nav-link href="/#customers">
                                {{ __("Customers") }}
                            </x-responsive-nav-link>

                            <x-responsive-nav-link href="/#connect">
                                {{ __("Connect") }}
                            </x-responsive-nav-link>
                        </ul>
                    </div>

                    <div class="subscribe flex flex-col gap-6">
                        <div>
                            <h4 class="text-xl">Subscribe</h4>
                            {{--
                                <div class="flex gap-0">
                                <x-wireui-input  class="rounded-l rounded-r-none" placeholder="Get updates" name="subscribe"/>
                                <x-wireui-button class="ml-0 border-l-0 rounded-l-none " info icon="arrow-right"/>
                                
                                </div>
                            --}}
                            <x-wireui-input
                                placeholder="add your email"
                                description="To Get updates"
                                icon="envelope-open"
                                type="email"
                            >
                                <x-slot name="append">
                                    <x-wireui-button
                                        class="h-full"
                                        icon="arrow-right"
                                        rounded="rounded-r-md"
                                        info
                                    />
                                </x-slot>
                            </x-wireui-input>
                        </div>
                        <a
                            class="inline flex gap-2 text-lg text-primary-800 underline hover:no-underline"
                            underline="always"
                            onclick="Calendly.initPopupWidget({url: 'https://calendly.com/biztaxconsult'});return false;"
                            target="blank"
                        >
                            <x-wireui-icon name="calendar" />
                            Book a Consultation Now!
                        </a>
                    </div>
                </div>
                {{-- <div class="w-full"> --}}
                <div
                    class="flex flex-col items-center justify-between border-t border-primary-500 p-3 text-sm md:flex md:flex-row md:px-4 md:py-1"
                >
                    <div class="scale-75">
                        @include("partials.social")
                    </div>
                    <div>
                        <span class="text-gray-500 dark:text-gray-400">
                            <span>© {{ date("Y") }} {{ config("app.name") }} All Rights Reserved.</span>
                            <span>CTEC# A327868</span>
                            <span>CAGE# 943W4</span>
                            <span>NAICS# 541213</span>
                        </span>
                    </div>
                    <div>
                        <p class="text-gray-500 dark:text-gray-400">
                            VERSION
                            {{
                                config(
                                    "app.version-description",
                                    "0.1",
                                )
                            }}
                        </p>
                    </div>
                </div>
                {{-- </div> --}}
                <a
                    id="to-top"
                    href="#"
                    class="fixed bottom-8 right-8 z-40 flex h-10 w-10 scale-0 items-center justify-center rounded bg-primary-500/50 text-primary-200 transition-transform duration-200 hover:bottom-9 hover:transition-bottom"
                >
                    <x-wireui-icon
                        name="arrow-up-circle"
                        class="w-full"
                    />
                </a>
            </div>
        </footer>
    </body>
</html>
