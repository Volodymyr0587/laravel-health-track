<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Health Track</title>
</head>
<body>

    <x-show-hide-sidebar-button />

    <x-sidebar />

    <header class="bg-white shadow sm:ml-16 md:ml-64 lg:ml-16">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-healthtrack-light dark:text-healthtrack-dark">{{ $heading }}</h1>
        </div>
    </header>

    {{ $slot }}

    </body>
</html>
