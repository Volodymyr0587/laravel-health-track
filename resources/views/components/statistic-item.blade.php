@props(['label', 'count'])

<div {{ $attributes->merge(['class' => 'grid grid-rows-2 items-center gap-x-2 py-2']) }}>
    <div>{{ $slot }}</div>
    <p class="text-base font-semibold leading-6 text-healthtrack-dark dark:text-white">
        {{ $label }}:
    </p>
    <span class="text-lg bg-healthtrack-light text-healthtrack-dark-hover dark:text-healthtrack-dark font-medium me-2 px-2.5 py-0.5 rounded-full">
        {{ $count }}
    </span>
</div>
