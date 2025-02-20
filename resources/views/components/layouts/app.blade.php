<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <x-tall-toast />
    <x-tall-layout>
        <x-slot:header>
            <x-tall-layout.header>
                <x-slot:right>
                    <x-tall-dropdown text="Hello, {{ auth()->user()->name }}!">
                        <form method="POST" action="#">
                            @csrf
                            <x-tall-dropdown.items text="Logout"
                                onclick="event.preventDefault(); this.closest('form').submit();" />
                        </form>
                    </x-tall-dropdown>
                </x-slot:right>
            </x-tall-layout.header>
        </x-slot:header>

        <x-slot:menu>
            <x-tall-side-bar>
                <x-tall-side-bar.item text="Home" icon="home" :route="route('dashboard')" />
                <x-tall-side-bar.item text="Settings" icon="cog"    />
            </x-tall-side-bar>
        </x-slot:menu>

        {{ $slot }}
        
    </x-tall-layout>

    @livewireScripts
    @stack('scripts')
</body>

</html>
