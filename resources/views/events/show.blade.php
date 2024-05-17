<x-layout>

    <x-slot:heading>
        {{ $event->name }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <x-hint>{{ __("Here you can see the details of your event") }}</x-hint>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <x-event.info label-name="Event name" event-field="{{ $event->name }}" />
                        <x-event.info label-name="Event location" event-field="{{ $event->location }}" />
                        <x-event.info label-name="Event date and time" event-field="{{ to_day_date_time_string($event->event_time, $locale=session()->get('locale')) }}" />
                        <x-event.info label-name="Event description" event-field="{{ $event->description }}" />
                        <x-event.info label-name="Event price" event-field="{{ $event->price }}" />
                        @foreach ($event->getMedia('attachments') as $media)
                            <x-event.info label-name="Event attachment {{ $loop->iteration }}" event-field="{{ $media->file_name }}">
                                <x-forms.button url="{{ route('events.downloadAttachment', ['event' => $event, 'media' => $media]) }}" like="link">
                                    Download
                                </x-forms.button>
                            </x-event.info>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="sm:col-span-5">
                <div class="mt-4 space-x-2">
                    <x-forms.button url="{{ route('events.index') }}" like="link">{{ __("Back to Events") }}</x-forms.button>

                    @can('edit', $event)
                    <x-forms.button url="{{ route('events.edit', $event) }}" like="link">{{ __("Edit") }}</x-forms.button>
                    @endcan
                </div>
            </div>
        </div>
    </div>

</x-layout>
