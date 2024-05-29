<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Health Track</title>
</head>
<body class="dark:bg-healthtrack-dark">

    <x-sidebar.show-hide-sidebar-button />

    <x-sidebar.sidebar />

    <header class="bg-white dark:bg-healthtrack-dark dark:text-white shadow sm:ml-16 md:ml-64 lg:ml-16 lg:sticky lg:top-0 z-20">
        <div class="flex justify-between mx-auto sm:ml-48 md:ml-2 lg:ml-48 px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-healthtrack-light dark:text-white">{{ $heading }}</h1>
            <x-lang-switcher class="ml-auto"/>
        </div>
    </header>

    {{ $slot }}

    </body>
</html>
