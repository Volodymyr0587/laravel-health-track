<div {{ $attributes->merge(["class" => ""]) }}>
    <h2 class="text-base font-semibold leading-7 text-gray-900">{{ __("Hint") }}</h2>
    <div class="inline-flex items-center gap-x-2">
        {{-- <span class="w-2 h-2 bg-healthtrack-light dark:bg-healthtrack-dark inline-block"></span> --}}
        <p class="mt-1 text-sm leading-6 text-gray-600">{{ $slot }}</p>
    </div>
</div>
