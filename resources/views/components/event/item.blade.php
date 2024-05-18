@props(['eventRoute', 'eventName', 'eventLocation', 'eventTime', 'eventPrice', 'eventUpdatedAt'])

<li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
        <x-svg.heart />
        <div class="min-w-0 flex-auto">
            <p class="text-base truncate font-semibold leading-6 text-healthtrack-light dark:text-white">{{ $eventName }}</p>
            <a href="{{ $eventRoute }}"
                class="mt-1 truncate text-sm leading-5 text-blue-600 transition-all duration-150 ease-in-out hover:underline hover:font-bold ">
                {{ __("Show details...") }}
            </a>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $eventLocation }}</p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ __("Date and time") }}: {{ $eventTime }}</p>
        </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <p class="text-sm leading-6 text-gray-900 dark:text-white">{{ __("Price") }}: {{ $eventPrice }}</p>
        <p class="mt-1 text-xs leading-5 text-gray-500">{{ __("Cerated") }} {{ $eventUpdatedAt }}</p>
    </div>
</li>
