<div {{ $attributes->merge(["class" => ""]) }}>
    <x-forms.button like="button" id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
        class="inline-flex items-center px-2.5 bg-white dark:bg-healthtrack-dark shadow-xl shadow-healthtrack-dark-hover dark:shadow-healthtrack-light-hover hover:bg-healthtrack-light-hover dark:hover:bg-healthtrack-dark-hover"
        type="button">
        <div class="flex items-center">
            @if (session()->get('locale') === 'en')
            <x-svg.gb-flag />
            @else
            <x-svg.uk-flag />
            @endif
            <x-svg.arrow-down />
        </div>
    </x-forms.button>

    <!-- Dropdown menu -->
    <div id="dropdown" class="z-10 hidden bg-white shadow-xl shadow-healthtrack-dark-hover divide-y divide-gray-100 rounded-lg w-32 dark:bg-healthtrack-dark">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="{{ route('setLocale', 'en') }}"
                    class="flex items-center justify-between px-4 py-2  hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span>{{ __("English") }}</span>
                    <x-svg.gb-flag />
                </a>
            </li>
            <li>
                <a href="{{ route('setLocale', 'uk') }}"
                    class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span>{{ __("Ukrainian") }}</span>
                    <x-svg.uk-flag />
                </a>

            </li>
        </ul>
    </div>
</div>
