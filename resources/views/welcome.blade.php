<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- Vite - Assets Import --}}
        @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <h1 class="title">Laravel | Vite Bundling Assets</h1>
        </header>
    </body>
</html>
