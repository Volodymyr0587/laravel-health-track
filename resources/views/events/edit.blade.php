<x-layout>

    <x-slot:heading>
        {{ __("Edit Event") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <h2 class="text-base font-semibold leading-7 text-gray-900">{{ __("Hint") }}</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">{{ __("Here you can edit an event") }}</p>

            <x-forms.form action="{{ route('events.update', $event) }}" method="PATCH" enctype="multipart/form-data">

                <x-forms.input label="Event Name" name="name" value="{{ $event->name }}" />
                <x-forms.input label="Event Location" name="location" value="{{ $event->location }}" />
                <x-forms.input label="Event Date and Time" name="event_time" type="datetime-local" value="{{ $event->event_time }}" />
                <x-forms.input label="Event Description" name="description" value="{{ $event->description }}" />
                <x-forms.input label="Event Price (if free, leave the field empty)" name="price" value="{{ $event->price }}" />
                <x-forms.input label="File upload (Referral to a doctor, etc)" name="attachment" type="file" value="{{ $event->attachment }}" />

                @can('edit', $event)
                <x-forms.button type="submit" like="button">Update</x-forms.button>
                @endcan

            </x-forms.form>

            <p class="text-xl font-bold text-red-600">Danger zone</p>
            <div class="mt-2 mb-12">
                <form action="{{ route('events.destroy', $event) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        onclick="return confirm('Are you sure you want to delete the record?')"
                        class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete
                        Event</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
