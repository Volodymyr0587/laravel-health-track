@props(['url' => null, 'like'])

@if($like === 'button')
    <button {{ $attributes->merge(['class' => 'bg-healthtrack-light hover:bg-healthtrack-light-hover dark:bg-healthtrack-button-dark dark:hover:healthtrack-button-dark-hover transition duration-150 ease-in-out text-white shadow-sm rounded-md py-2 px-4 font-bold']) }}>
        {{ $slot }}
    </button>
@elseif($like === 'link')
    <a href="{{ $url }}" {{ $attributes->merge(['class' => 'bg-healthtrack-light hover:bg-healthtrack-light-hover dark:bg-healthtrack-button-dark dark:hover:healthtrack-button-dark-hover transition duration-150 ease-in-out text-white shadow-sm rounded-md py-2 px-4 font-bold']) }}>
        {{ $slot }}
    </a>
@elseif($like === 'cancel')
<a href="{{ $url }}" {{ $attributes->merge(['class' => 'bg-gray-500 hover:bg-gray-400 transition duration-150 ease-in-out text-white shadow-sm rounded-md py-2 px-4 font-bold']) }}>
    {{ $slot }}
</a>
@endif
