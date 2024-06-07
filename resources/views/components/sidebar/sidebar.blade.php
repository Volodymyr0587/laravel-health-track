<x-sidebar.layout>
    @auth
    <x-sidebar.user-name class="font-bold" firstName="{{ auth()->user()->first_name }}" lastName="{{ auth()->user()->last_name }}" >
        <x-svg.user />
    </x-sidebar.user-name>
    @endauth

    <x-sidebar.item routeName="home" label="{{ __('Home') }}">
        <x-svg.home />
    </x-sidebar.item>

    @auth
    <x-sidebar.item routeName="dashboard" label="{{ __('Dashboard') }}" >
        <x-svg.dashboard />
    </x-sidebar.item>
    @endauth

    <x-sidebar.item routeName="events.index" label="{{ __('Medical events') }}" badge="{{ count_events() }}">
        <x-svg.health-events />
    </x-sidebar.item>

    <x-sidebar.item routeName="calendar" label="{{ __('Calendar') }}">
        <x-svg.calendar />
    </x-sidebar.item>

    <x-sidebar.item routeName="attachments.index" label="{{ __('Attachments') }}" badge="{{ count_attachments() }}">
        <x-svg.attachments />
    </x-sidebar.item>

    <x-sidebar.item routeName="diseases.index" label="{{ __('Diseases') }}" badge="{{ count_diseases() }}">
        <x-svg.diseases />
    </x-sidebar.item>

    <x-sidebar.item routeName="treatments.index" label="{{ __('Treatment') }}" badge="{{ count_treatments() }}">
        <x-svg.treatment />
    </x-sidebar.item>

    <x-sidebar.item routeName="notes.index" label="{{ __('Notes') }}" badge="{{ count_notes() }}">
        <x-svg.notes />
    </x-sidebar.item>

    @guest
    <x-sidebar.item routeName="login" label="{{ __('Log In') }}" >
        <x-svg.sign-in />
    </x-sidebar.item>

    <x-sidebar.item routeName="register" label="{{ __('Register') }}" >
        <x-svg.sign-up />
    </x-sidebar.item>
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
