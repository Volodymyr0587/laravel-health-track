<x-layout>

    <x-slot:heading>
        {{ __("Search Results For ") }} "{{ $search }}"
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-6">
                <x-forms.button url="{{ route('events.index') }}" like="link">Back to Events</x-forms.button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                @foreach ($events as $event)

                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $event->name}}
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->location }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{
                        \Carbon\Carbon::parse($event->event_time)->format('d-m-Y H:i:s') }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->price == 0 ? 'Free' :
                        $event->price }}</p>
                    <x-forms.button url="{{ route('events.show', $event) }}" like="link">
                        {{ __('Event Details') }}
                    </x-forms.button>
                </div>

                @endforeach
            </div>
        </div>
    </div>

</x-layout>
