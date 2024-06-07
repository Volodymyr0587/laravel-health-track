<x-layout>

    <x-slot:heading>
        {{ __("Create Event") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can create an event (visit to the doctor, routine examination, tests, etc.)") }}</x-hint>

            <x-forms.form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">

                <x-forms.input label="Event name" name="name" placeholder="{{ __('A visit to the family doctor') }}" />
                <x-forms.input label="Event location" name="location" placeholder="{{ __('Volyn Regional Clinical Hospital, ave. Presidenta Hrushevskyi, 21 Lutsk') }}" />
                <x-forms.input label="Event date and time" name="event_time" type="datetime-local" />
                <x-forms.textarea label="Event description" name="description"  />
                <p class="text-gray-600 dark:text-gray-400">
                    {{ __('Characters entered:') }} <span id="charCount">0</span> {{ __('Limit: ') }} 1000
                </p>
                <x-forms.input label="Event price (if free, leave the field empty)" name="price" placeholder="750.00" />
                <x-forms.input class="text-gray-500" label="File upload (Referral to a doctor, etc)" name="attachment" type="file" />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('events.index') }}" like="cancel">{{ __("Cancel") }}</x-forms.button>
                    @auth
                    <x-forms.button type="submit" like="button">{{ __("Create") }}</x-forms.button>
                    @endauth
                </div>
            </x-forms.form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputField = document.getElementById('description');
            const charCountDisplay = document.getElementById('charCount');

            inputField.addEventListener('input', function () {
                const charCount = inputField.value.length;
                charCountDisplay.textContent = charCount;

                // Change color if charCount exceeds 1000
                if (charCount > 1000) {
                    charCountDisplay.classList.add('text-red-500');
                } else {
                    charCountDisplay.classList.remove('text-red-500');
                }
            });
        });
    </script>

</x-layout>
