<x-layout>

    <x-slot:heading>
        {{ __("Health Profile") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can view and edit you health profile.") }}</x-hint>

            <div class="mt-6 mb-6">
                <x-forms.button url="{{ route('healthProfile.edit', $healthProfile) }}" like="link">{{ __('Edit Profile') }}</x-forms.button>
            </div>

            <div class="mb-20">

                <x-health-profile.info labelName="{{ __('Date of birth') }}" profileField="{{ $healthProfile->date_of_birth ?? __('Not specified') }}" />

                <x-health-profile.info labelName="{{ __('Height (cm)') }}" profileField="{{ $healthProfile->height ?? 'Not specified' }}" />

                <x-health-profile.info labelName="{{ __('Weight (kg)') }}" profileField="{{ $healthProfile->weight ?? 'Not specified' }}" />

                <x-health-profile.info labelName="{{ __('Blood group and rhesus factor') }}" profileField="{{ $healthProfile->blood_group ?? 'Not specified' }}" />

                <x-health-profile.info labelName="{{ __('Pulse') }}" profileField="{{ $healthProfile->pulse ?? 'Not specified' }}" />

                <x-health-profile.info labelName="{{ __('Blood pressure systolic') }}" profileField="{{ $healthProfile->blood_pressure_systolic ?? 'Not specified' }}" />

                <x-health-profile.info labelName="{{ __('Blood pressure diastolic') }}" profileField="{{ $healthProfile->blood_pressure_diastolic ?? 'Not specified' }}" />

                @php
                    $allergies = $healthProfile->allergies ? implode(", ", $healthProfile->allergies) : 'Not specified';
                    $chronic_diseases = $healthProfile->chronic_diseases ? implode(", ", $healthProfile->chronic_diseases) : 'Not specified';
                    $surgical_interventions = $healthProfile->surgical_interventions ? implode(", ", $healthProfile->surgical_interventions) : 'Not specified';
                @endphp

                <x-health-profile.info labelName="{{ __('Allergies') }}" :profileField="$allergies" />

                <x-health-profile.info labelName="{{ __('Chronic diseases') }}" :profileField="$chronic_diseases" />

                <x-health-profile.info labelName="{{ __('Surgical interventions') }}" :profileField="$surgical_interventions" />

                <x-health-profile.info labelName="{{ __('Cigarettes per day') }}" profileField="{{ $healthProfile->cigarettes_per_day ?? 'Not specified' }}" />

                <x-health-profile.info labelName="{{ __('Alcohol beer per week (milliliters)') }}" profileField="{{ $healthProfile->alcohol_beer_per_week ?? 'Not specified' }}" />

                <x-health-profile.info labelName="{{ __('Alcohol wine per week (milliliters)') }}" profileField="{{ $healthProfile->alcohol_wine_per_week ?? 'Not specified' }}" />

                <x-health-profile.info labelName="{{ __('Alcohol stronger than wine per week (milliliters)') }}" profileField="{{ $healthProfile->alcohol_spirits_per_week ?? 'Not specified' }}" />

            </div>
        </div>
    </div>

</x-layout>

