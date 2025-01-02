<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600|windsong:500&display=swap" rel="stylesheet" />

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

    <!-- Scripts -->
    @stack("head_scripts")
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/d75493173ff7f0ed40a6cae8f/c0f9fdc8e1c3e039592e3c81c.js");</script>
    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white dark:bg-gray-800">
            <livewire:layout.navigation />

            <div class="w-full bg-primary-300">
                {{ $slot }}
            </div>
        </div>

        <a class="transistion-all flex fixed bottom-8 hover:-translate-y-2 right-8 w-10 h-10 text-primary-800 bg-primary-300 opacity-60 justify-center items-center rounded">
            <x-icon id="to-top" name="arrow-up-circle" class="w-full" />
        </a>
        </div>
    </body>
</html>
