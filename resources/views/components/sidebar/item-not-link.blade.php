@props(['label', 'badge' => false])

<li>
    <div
       class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white">
        {{ $slot }}
        <span {{ $attributes->merge(['class' => 'flex-1 ms-3 whitespace-nowrap']) }}>{{ $label }}</span>
        @if($badge)
            <span
                class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">{{ $badge }}</span>
        @endif
    </div>
</li>