@props(['url' => null, 'like'])

@if($like === 'button')
    <button {{ $attributes->merge(['class' => 'bg-healthtrack-light hover:bg-healthtrack-light-hover dark:bg-healthtrack-dark dark:hover:bg-healthtrack-dark-hover transition duration-150 ease-in-out text-white shadow-sm rounded-md py-2 px-6 font-bold']) }}>
        {{ $slot }}
    </button>
@elseif($like === 'link')
    <a href="{{ $url }}" {{ $attributes->merge(['class' => 'bg-healthtrack-light hover:bg-healthtrack-light-hover dark:bg-healthtrack-dark dark:hover:bg-healthtrack-dark-hover transition duration-150 ease-in-out text-white shadow-sm rounded-md py-2 px-6 font-bold']) }}>
        {{ $slot }}
    </a>
@endif
