<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="relative font-sans antialiased text-gray-900">
        <div class="hidden sm:block w-screen h-screen">
            <img src="{{ asset('storage/memories.jpg') }}" class="object-cover w-full h-full" alt="Background Image">
            <div class="absolute inset-0 bg-black opacity-25"></div>
        </div>
        <div class="absolute inset-0 flex items-center justify-center min-h-screen px-6 py-8 md:grid md:grid-cols-2 md:gap-10">
            <div class="hidden px-16 md:block">
                <a href="/">
                    <x-application-logo class="w-20 h-20 text-white fill-current" />
                </a>
            </div>

            <div class="flex items-center w-full h-full justify-self-center sm:max-w-md">
                <div class="w-full px-2 py-6 sm:px-8 sm:py-12 bg-white rounded-md">
                    {{ $slot }} 
                </div>
            </div>
        </div>
    </body>
</html>
