<x-layout>

    <x-slot:heading>
        {{ __("Edit Event") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can edit an event") }}</x-hint>

            <x-forms.form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')

                <x-forms.input label="Event Name" name="name" value="{{ $event->name }}" />
                <x-forms.input label="Event Location" name="location" value="{{ $event->location }}" />
                <x-forms.input label="Event Date and Time" name="event_time" type="datetime-local" value="{{ $event->event_time }}" />
                <x-forms.textarea label="Event Description" name="description" value="{{ $event->description }}" />
                <x-forms.input label="Event Price (if free, leave the field empty)" name="price" value="{{ $event->price }}" />
                <x-forms.input label="File upload (Referral to a doctor, etc)" name="attachment" type="file" value="{{ $event->attachment }}" />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('events.show', $event) }}" like="link">Cancel</x-forms.button>
                    @can('edit', $event)
                    <x-forms.button type="submit" like="button">Update</x-forms.button>
                    @endcan
                </div>
            </x-forms.form>

            @can('edit', $event)
            <div class="mt-8 mb-12 space-y-4">
                <p class="text-xl font-bold text-red-600">Danger zone</p>
                <form action="{{ route('events.destroy', $event) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-forms.button type="submit" like="button"
                        onclick="return confirm('Are you sure you want to delete the record?')"
                        class="bg-red-600 hover:bg-red-500 dark:bg-red-600 dark:hover:bg-red-500">
                        Delete
                    </x-forms.button>
                </form>
            </div>
            @endcan
        </div>
    </div>

</x-layout>
