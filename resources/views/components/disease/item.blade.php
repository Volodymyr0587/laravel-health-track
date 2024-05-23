@props(['diseaseRoute', 'diseaseName', 'diseaseUpdatedAt'])

<li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
        <x-svg.disease />
        <div class="min-w-0 flex-auto">
            <p class="text-base truncate font-semibold leading-6 text-healthtrack-light dark:text-white">{{ $diseaseName }}</p>
            <a href="{{ $diseaseRoute }}"
                class="mt-1 truncate text-sm leading-5 text-blue-600 transition-all duration-150 ease-in-out hover:underline hover:font-bold ">
                {{ __("Show details...") }}
            </a>
        </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <p class="mt-1 text-xs leading-5 text-gray-500">{{ __("Cerated") }} {{ $diseaseUpdatedAt }}</p>
    </div>
</li>
