<x-sidebar.layout>
    @auth
    <li>
        <a href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <x-svg.user />
            <span class="flex-1 ms-3 whitespace-nowrap font-bold">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span>
        </a>
    </li>
    @endauth
    <li>
        <a href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <x-svg.dashboard />
            <span class="flex-1 ms-3 whitespace-nowrap">{{ __("Dashboard") }}</span>
        </a>
    </li>


    <x-sidebar.item routeName="events.index" label="{{ __('Health events') }}" >
        <x-svg.health-events />
    </x-sidebar.item>

    <x-sidebar.item routeName="attachments.index" label="{{ __('Attachments') }}" badge="{{ count_attachments() }}">
        <x-svg.attachments />
    </x-sidebar.item>



    <li>
        <a href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <x-svg.users />
            <span class="flex-1 ms-3 whitespace-nowrap">{{ __("Users") }}</span>
        </a>
    </li>
    <li>
        <a href="#"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <x-svg.products />
            <span class="flex-1 ms-3 whitespace-nowrap">{{ __("Products") }}</span>
        </a>
    </li>
    @guest
    <li>
        <a href="{{ route('login') }}"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <x-svg.sign-in />
            <span class="flex-1 ms-3 whitespace-nowrap">{{ __("Sign In") }}</span>
        </a>
    </li>
    <li>
        <a href="{{ route('register') }}"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <x-svg.sign-up />
            <span class="flex-1 ms-3 whitespace-nowrap">{{ __("Sign Up") }}</span>
        </a>
    </li>
    @endguest

    @auth
    <li
        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
        <x-svg.logout />
        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit" class="flex-1 ms-3 whitespace-nowrap">{{ __("Log Out") }}</button>
        </form>
    </li>
    @endauth

</x-sidebar.layout>
