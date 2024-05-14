@props(['routeName', 'label', 'badge' => false])

<li>
    <a href="{{ route($routeName) }}"
       class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
        {{ $slot }}
        <span {{ $attributes->merge(['class' => 'flex-1 ms-3 whitespace-nowrap']) }}>{{ $label }}</span>
        @if($badge)
            <span
                class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">{{ $badge }}</span>
        @endif
    </a>
</li>
