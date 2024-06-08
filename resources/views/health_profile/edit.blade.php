<x-layout>

    <x-slot:heading>
        {{ __("Add Data to Health Profile") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can add a data to your health profile") }}</x-hint>

            <x-forms.form action="{{ route('healthProfile.update', $healthProfile) }}" method="POST" class="mb-12">
                @method('PATCH')

                <x-forms.input label="Date of birth" name="date_of_birth" type="date" value="{{ old('date_of_birth', $healthProfile->date_of_birth) }}" />
                <x-forms.input label="Height (cm)" name="height" value="{{ old('height', $healthProfile->height) }}" placeholder="170" />
                <x-forms.input label="Weight (kg)" name="weight" value="{{ old('weight', $healthProfile->weight) }}" placeholder="65" />
                <x-forms.input label="Blood group and rhesus factor" name="blood_group" value="{{ old('blood_group', $healthProfile->blood_group) }}" placeholder="II +" />
                <x-forms.input label="Pulse" name="pulse" value="{{ old('pulse', $healthProfile->pulse) }}" placeholder="70" />
                <x-forms.input label="Blood pressure systolic" name="blood_pressure_systolic" value="{{ old('blood_pressure_systolic', $healthProfile->blood_pressure_systolic) }}" placeholder="120" />
                <x-forms.input label="Blood pressure diastolic" name="blood_pressure_diastolic" value="{{ old('blood_pressure_diastolic', $healthProfile->blood_pressure_diastolic) }}" placeholder="80" />
                <x-forms.textarea label="Allergies" name="allergies" value="{{ old('allergies', $healthProfile->allergies) }}" placeholder="{{ __('Foods, animals, pollen, mold, dust mites, medications, latex, insect stings, etc') }}" />
                <x-forms.textarea label="Chronic diseases" name="chronic_diseases" value="{{ old('chronic_diseases', $healthProfile->chronic_diseases) }}" placeholder="{{ __('Arthritis, asthma, heart disease, depression, etc') }}" />
                <x-forms.textarea label="Surgical interventions" name="surgical_interventions" value="{{ old('surgical_interventions', $healthProfile->surgical_interventions) }}" placeholder="{{ __('Appendectomy, cataract surgery, coronary artery bypass, etc') }}" />
                <x-forms.input label="Cigarettes per day" name="cigarettes_per_day" value="{{ old('cigarettes_per_day', $healthProfile->cigarettes_per_day) }}" placeholder="0" />
                <x-forms.input label="Alcohol beer per week (milliliters)" name="alcohol_beer_per_week" value="{{ old('alcohol_beer_per_week', $healthProfile->alcohol_beer_per_week) }}" placeholder="0" />
                <x-forms.input label="Alcohol wine per week (milliliters)" name="alcohol_wine_per_week" value="{{ old('alcohol_wine_per_week', $healthProfile->alcohol_wine_per_week) }}" placeholder="0" />
                <x-forms.input label="Alcohol stronger than wine per week (milliliters)" name="alcohol_spirits_per_week" value="{{ old('alcohol_spirits_per_week', $healthProfile->alcohol_spirits_per_week) }}" placeholder="0" />




                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('healthProfile.index') }}" like="cancel">{{ __("Cancel") }}</x-forms.button>
                    @auth
                    <x-forms.button type="submit" like="button">{{ __("Update") }}</x-forms.button>
                    @endauth
                </div>
            </x-forms.form>
        </div>
    </div>

</x-layout>
