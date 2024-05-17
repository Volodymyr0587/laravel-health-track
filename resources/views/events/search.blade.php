<x-layout>

    <x-slot:heading>
        {{ __("Search Results For ") }} "{{ $search }}"
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-6">
                <x-forms.button url="{{ route('events.index') }}" like="link">{{ __("Back to Events") }}</x-forms.button>
            </div>

            <div class="mt-10">
                <x-forms.form action="{{ route('search') }}">
                    <x-forms.input label="{{ __('Looking for something else?') }}" name="search" placeholder="{{ __('Find a specific event') }}" />
                    <x-forms.button type="submit" like="button">{{ __("Search") }}</x-forms.button>
                </x-forms.form>
            </div>

            <ul role="list" class="divide-y divide-gray-100">
                @foreach ($events as $event)

                <x-event.item eventRoute="{{ route('events.show', $event) }}" eventName="{{ $event->name }}"
                    eventLocation="{{ $event->location }}"
                    eventTime="{{ \Carbon\Carbon::parse($event->event_time)->format('d-m-Y H:i:s') }}"
                    eventPrice="{{ $event->price }}" eventUpdatedAt="{{ $event->updated_at->diffForHumans() }}" />

                @endforeach
            </ul>
        </div>
    </div>

</x-layout>
