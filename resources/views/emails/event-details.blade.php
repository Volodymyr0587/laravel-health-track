<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Track</title>
</head>
<body>

<section class="max-w-2xl px-6 py-8 mx-auto">
    <header>
        <h1 class="font-bold text-xl">
            Health Track
        </h1>
        <p class="text-base text-healthtrack-dark ">{{ __("Your health is in good hands") }}.</p>
    </header>

    <main class="mt-8">
        <h2 class="text-gray-700 ">Hi, {{ $userName }}.</h2>

        <p class="mt-2 leading-loose text-gray-600">
            These are the details of your event: <a href="{{ url('/events/' . $event->id) }}" class="font-semibold ">{{ $eventName }}</a>.
        </p>

        <p class="mt-2 leading-loose text-gray-600">
            <strong>Time:</strong>  <span class="font-semibold ">{{ $eventTime }}</span>.
        </p>

        <p class="mt-2 leading-loose text-gray-600">
            <strong>Location:</strong>  <span class="font-semibold ">{{ $eventLocation }}</span>.
        </p>

        <p class="mt-2 leading-loose text-gray-600">
            <strong>Price:</strong>  <span class="font-semibold ">{{ $eventPrice }}</span>.
        </p>

        <p class="mt-2 leading-loose text-gray-600">
            <strong>Description:</strong>  <span class="font-semibold ">{{ $eventDescription }}</span>
        </p>


        <p class="mt-8 text-gray-600">
            Thanks, <br>
            Health Track team
        </p>
    </main>


    <footer class="mt-8">
        <p class="mt-3 text-gray-500 dark:text-gray-400">© {{ date('Y') }} HealthTrack. All Rights Reserved.</p>
    </footer>
</section>

</body>
</html>
