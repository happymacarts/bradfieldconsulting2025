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
        <link
            rel="icon"
            type="image/png"
            href="{{ asset("/images/favicon-96x96.png") }}"
        />
        <meta
            property="og:image"
            content="{{ asset("/images/favicon-96x96.png") }}"
        />
        <meta
            property="og:image:width"
            content="96"
        />
        <meta
            property="og:image:height"
            content="96"
        />
        <meta
            property="og:url"
            content="https://bradfieldconsulting.com/"
        />
        <meta
            property="og:title"
            content="{{ config("app.name", "Laravel") }}"
        />

        <meta
            property="og:description"
            content="Bradfield Consulting, Inc. is a 100% woman and minority-owned remote bookkeeping, tax planning, preparation, and filing service dedicated to empowering small businesses with financial expertise and advocacy."
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

        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-WR1L9RLKFT"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-5D3QXY2BM6');
            gtag('config', 'G-WR1L9RLKFT');
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
                            <div id="mc_embed_shell">
                                <div id="mc_embed_signup">
                                    <form
                                        action="https://bradfieldconsulting.us14.list-manage.com/subscribe/post?u=d75493173ff7f0ed40a6cae8f&amp;id=cb698b19c9&amp;f_id=0050b4e5f0"
                                        method="post"
                                        id="mc-embedded-subscribe-form"
                                        name="mc-embedded-subscribe-form"
                                        class="validate"
                                        target="_self"
                                        novalidate=""
                                    >
                                        <div id="mc_embed_signup_scroll">
                                            <h4 class="text-xl">Subscribe</h4>
                                            <div
                                                id="mce-responses"
                                                class="clear foot"
                                            >
                                                <div
                                                    class="response"
                                                    id="mce-error-response"
                                                    style="display: none"
                                                ></div>
                                                <div
                                                    class="response"
                                                    id="mce-success-response"
                                                    style="display: none"
                                                ></div>
                                            </div>
                                            <div
                                                aria-hidden="true"
                                                style="position: absolute; left: -5000px"
                                            >
                                                /* real people should not fill this in and expect good things - do not
                                                remove this or risk form bot signups */
                                                <input
                                                    type="text"
                                                    name="b_d75493173ff7f0ed40a6cae8f_cb698b19c9"
                                                    tabindex="-1"
                                                    value=""
                                                />
                                            </div>
                                            <div class="optionalParent">
                                                <div class="clear foot">
                                                    <div class="block items-center gap-4 md:flex md:flex-row">
                                                        <x-wireui-input
                                                            id="mce-EMAIL"
                                                            name="EMAIL"
                                                            class="required email my-2 rounded"
                                                            placeholder="add email for updates"
                                                            icon="envelope-open"
                                                        >
                                                            <x-slot name="append">
                                                                <x-wireui-button
                                                                    name="subscribe"
                                                                    id="mc-embedded-subscribe"
                                                                    type="submit"
                                                                    class="h-full outline-transparent"
                                                                    icon="arrow-right"
                                                                    rounded="rounded-r-md"
                                                                    primary
                                                                />
                                                            </x-slot>
                                                        </x-wireui-input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a
                            class="inline flex cursor-pointer gap-2 text-lg text-primary-800 underline hover:no-underline"
                            underline="always"
                            onclick="Calendly.initPopupWidget({url: 'https://calendly.com/biztaxconsult/free_consult'});return false;"
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
                    <div class="hidden md:block">
                        <p class="text-gray-500 dark:text-gray-400">
                            V.
                            {{
                                config(
                                    "app.version-description",
                                    "2025-02-05",
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
