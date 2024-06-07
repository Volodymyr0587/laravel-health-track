<x-layout>

    <x-slot:heading>
        {{ __("Medical Events") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can view, search an events (visit to the doctor, routine examination, tests, etc.). Or press the button 'Create Event' to go to the form.") }}</x-hint>

            <div class="mt-6 mb-6">
                <x-forms.button url="{{ route('events.create') }}" like="link">{{ __('Create Event') }}</x-forms.button>

                <div class="mt-10">
                    <x-forms.form action="{{ route('search') }}">
                        <x-forms.input label="{{ __('Search For Event') }}" name="search" placeholder="{{ __('Find a specific event') }}" />
                        <x-forms.button type="submit" like="button">{{ __("Search") }}</x-forms.button>
                    </x-forms.form>
                </div>
            </div>

            <ul role="list" class="divide-y divide-gray-100">
                @forelse ($events as $event)
                <x-event.item eventRoute="{{ route('events.show', $event) }}" eventName="{{ $event->name }}"
                    eventLocation="{{ $event->location }}"
                    eventTime="{{ to_day_date_time_string($event->event_time, $locale = session()->get('locale')) }}"
                    eventPrice="{{ $event->price }}" eventUpdatedAt="{{ $event->updated_at->diffForHumans() }}" />
                @empty
                <x-hint>{{ __("You currently have no events. Use the 'Create Event' button.") }}</x-hint>
                @endforelse
            </ul>

            <div class="mt-2">
                {{ $events->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

</x-layout>
