<x-sidebar.layout>
            @auth
            <li>
                <div class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group">
                    <x-svg.user />
                    <span class="ms-3 font-bold">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span>
                </div>
            </li>
            @endauth
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <x-svg.dashboard />
                    <span class="flex-1 ms-3 whitespace-nowrap">{{ __("Dashboard") }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('events.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <x-svg.health-events />
                    <span class="flex-1 ms-3 whitespace-nowrap">{{ __('Health events') }}</span>
                    <span
                        class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">{{
                        auth()->user()?->events()->count() ?? '' }}</span>
                </a>
            </li>

            <li>
                <a href="{{ route('attachments.index') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <x-svg.attachments />
                    <span class="flex-1 ms-3 whitespace-nowrap">{{ __("Attachments") }}</span>
                    <span
                        class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300"></span>
                </a>
            </li>

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
