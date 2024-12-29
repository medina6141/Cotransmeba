<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <title>{{ config('app.name') }}</title>

        <meta
            content="Somos una corporación para la transformación del tejido social del medio y bajo Atrato para el desarrollo
            de la región."
            name="description">

        <link href="/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png" />
        <link href="/favicon.svg" rel="icon" type="image/svg+xml" />
        <link href="/favicon.ico" rel="shortcut icon" />
        <link href="/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
        <meta content="Cotransmeba" name="apple-mobile-web-app-title" />
        <link href="/site.webmanifest" rel="manifest" />

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=Inter:400,500,600,800&display=swap" rel="stylesheet" />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="overflow-x-hidden font-sans antialiased" x-data="app">
        {{-- The navbar with `sticky` and `full-width` --}}
        <x-nav @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false" class="top-0 z-30" full-width
            x-bind:class="{
                'bg-base-100 drop-shadow-lg sticky border-b border-base-300': stickyMenu,
                'absolute inset-x-0': !stickyMenu
            }">

            <x-slot:brand>
                {{-- Brand --}}
                <div class="mr-14"><x-logo :onlyIcon="true" class="h-auto w-12" /></div>
                <x-button class="btn-ghost btn-sm mr-3 md:max-lg:btn-circle" icon="o-envelope" label="Contacto"
                    link="#contact" no-wire-navigate responsive />
                {{-- <x-button class="btn-ghost btn-sm md:max-lg:btn-circle" label="Notifications" icon="o-bell"
                    link="###" responsive /> --}}
            </x-slot:brand>

            {{-- Right side actions --}}
            <x-slot:actions>
                <div
                    class="absolute -right-12 -top-12 hidden h-40 w-40 rounded-full bg-gradient-to-bl from-orange-600 via-orange-600/90 to-orange-600/50 shadow-xl md:block">
                </div>
                <x-theme-toggle @theme-changed="()=>{setLogo()}" class="btn btn-circle btn-ghost text-white" />
            </x-slot:actions>
        </x-nav>
        <main>
            {{ $slot }}
        </main>
        <footer class="mt-10">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="mx-auto text-center">
                    <x-logo class="h-auto w-56" id="2"></x-logo>
                </div>
                <hr class="my-6 border-gray-200 dark:border-gray-700 sm:mx-auto lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 dark:text-gray-400 sm:text-center">© {{ date('Y') }} <a
                            class="hover:underline" href="{{ config('app.url') }}">Cotransmeba™</a>. Todos los derechos
                        reservados.
                    </span>
                    <div class="mt-4 flex sm:mt-0 sm:justify-center">
                        <a class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
                            href="https://www.facebook.com/profile.php?id=61563412627201" target="_blank">
                            <svg aria-hidden="true" class="h-4 w-4" fill="currentColor" viewBox="0 0 8 19"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a class="ms-5 text-gray-500 hover:text-gray-900 dark:hover:text-white"
                            href="https://www.instagram.com/cotransmeba" target="_blank">
                            <svg class="h-4 w-4" fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <x-toast />
        @livewireScriptConfig
    </body>

</html>
