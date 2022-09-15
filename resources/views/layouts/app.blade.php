<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Pet Directory') }}</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="antialiased">
    <div class="mx-auto text-center sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>
