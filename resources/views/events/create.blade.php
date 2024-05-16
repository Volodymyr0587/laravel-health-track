<x-layout>

    <x-slot:heading>
        {{ __("Create Event") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can create an event (visit to the doctor, routine examination, tests, etc.)") }}</x-hint>

            <x-forms.form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">

                <x-forms.input label="Event Name" name="name" placeholder="A visit to the family doctor" />
                <x-forms.input label="Event Location" name="location" placeholder="Volyn Regional Clinical Hospital, ave. Presidenta Hrushevskyi, 21 Lutsk" />
                <x-forms.input label="Event Date and Time" name="event_time" type="datetime-local" />
                <x-forms.textarea label="Event Description" name="description"  />
                <x-forms.input label="Event Price (if free, leave the field empty)" name="price" placeholder="750.00" />
                <x-forms.input label="File upload (Referral to a doctor, etc)" name="attachment" type="file" />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('events.index') }}" like="link">Cancel</x-forms.button>
                    @auth
                    <x-forms.button type="submit" like="button">Create</x-forms.button>
                    @endauth
                </div>
            </x-forms.form>
        </div>
    </div>

</x-layout>
