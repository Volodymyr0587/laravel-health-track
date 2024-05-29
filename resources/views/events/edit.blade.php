<x-layout>

    <x-slot:heading>
        {{ __("Edit Event") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can edit an event") }}</x-hint>

            <x-forms.form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')

                <x-forms.input label="Event name" name="name" value="{{ $event->name }}" />
                <x-forms.input label="Event location" name="location" value="{{ $event->location }}" />
                <x-forms.input label="Event date and time" name="event_time" type="datetime-local" value="{{ $event->event_time }}" />
                <x-forms.textarea label="Event description" name="description" value="{{ $event->description }}" />
                <x-forms.input label="Event price (if free, leave the field empty)" name="price" value="{{ $event->price }}" />
                <x-forms.input class="text-gray-500" label="File upload (Referral to a doctor, etc)" name="attachment" type="file" value="{{ $event->attachment }}" />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('events.show', $event) }}" like="cancel">{{ __("Cancel") }}</x-forms.button>
                    @can('edit', $event)
                    <x-forms.button type="submit" like="button">{{ __("Update") }}</x-forms.button>
                    @endcan
                </div>
            </x-forms.form>

            @can('edit', $event)
            <div class="mt-8 mb-12 space-y-4">
                <p class="text-xl font-bold text-red-600">{{ __("Danger zone") }}</p>
                <form action="{{ route('events.destroy', $event) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-forms.button type="submit" like="button"
                        onclick="return confirm('{{ __('Are you sure you want to delete the record?') }} {{ __('All files associated with the event will also be deleted.') }}')"
                        class="bg-red-600 hover:bg-red-500 dark:bg-red-600 dark:hover:bg-red-500">
                        {{ __("Delete") }}
                    </x-forms.button>
                </form>
            </div>
            @endcan
        </div>
    </div>

</x-layout>
