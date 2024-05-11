<x-layout>

    <x-slot:heading>
        {{ $event->name }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">{{ __("Hint") }}</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">{{ __("Here you can see the details of your event")}}</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <x-event.info label-name="Event name" event-field="{{ $event->name }}" />
                        <x-event.info label-name="Event location" event-field="{{ $event->location }}" />
                        <x-event.info label-name="Event date and time" event-field="{{ \Carbon\Carbon::parse($event->event_time)->format('d-m-Y H:i:s') }}" />
                        <x-event.info label-name="Event description" event-field="{{ $event->description }}" />
                        <x-event.info label-name="Event price" event-field="{{ $event->price }}" />
                        <x-event.info label-name="Event attachment" event-field="{{ $event->attachment ?? '' }}" />

                    </div>
                </div>
            </div>

            <div class="sm:col-span-5">
                <div class="mt-4 space-x-2">
                    <x-forms.button url="{{ route('events.index') }}" like="link">Back to Events</x-forms.button>

                    @can('edit', $event)
                    <x-forms.button url="{{ route('events.edit', $event) }}" like="link">Edit</x-forms.button>
                    @endcan
                </div>
            </div>
        </div>
    </div>

</x-layout>
