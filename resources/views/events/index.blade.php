<x-layout>

    <x-slot:heading>
        {{ __("Health Events") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-6">
                <x-forms.button url="{{ route('events.create') }}" like="link">{{ __('Create Event') }}</x-forms.button>

                <div class="mt-10">
                    <x-forms.form action="{{ route('search') }}">
                        <x-forms.input label="Search For Event" name="search" placeholder="Find a specific event" />
                        <x-forms.button type="submit" like="button">Searh</x-forms.button>
                    </x-forms.form>
                </div>
            </div>

            <ul role="list" class="divide-y divide-gray-100">
                @foreach ($events as $event)
                <x-event.item eventRoute="{{ route('events.show', $event) }}" eventName="{{ $event->name }}"
                    eventLocation="{{ $event->location }}"
                    eventTime="{{ to_day_date_time_string($event->event_time) }}"
                    eventPrice="{{ $event->price }}" eventUpdatedAt="{{ $event->updated_at->diffForHumans() }}" />
                @endforeach
            </ul>

            <div class="mt-2">
                {{ $events->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

</x-layout>
