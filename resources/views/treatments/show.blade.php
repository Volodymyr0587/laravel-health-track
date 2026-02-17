<x-layout>

    <x-slot:heading>
        {{ $treatment->name }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <x-hint>{{ __("Here you can see the details of your treatment") }}</x-hint>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <x-treatment.info label-name="{{ __('Treatment name') }}" treatment-field="{{ $treatment->name }}" />
                        <x-treatment.info label-name="{{ __('Treatment for') }}" treatment-field="{{ $treatment->disease->name }}" />
                        <x-treatment.info label-name="{{ __('Treatment description') }}" treatment-field="{{ $treatment->description }}" />
                        <x-treatment.info label-name="{{ __('Treatment start date') }}" treatment-field="{{ $treatment->started_at }}" />
                        <x-treatment.info label-name="{{ __('Treatment end date') }}" treatment-field="{{ $treatment->ended_at }}" />
                        <x-treatment.info label-name="{{ __('Treatment price') }}" treatment-field="{{ $treatment->price }}" />

                    </div>
                </div>
            </div>

            <x-back-edit-buttons>
                <x-forms.button url="{{ route('treatments.index') }}" like="link">{{ __("Back to Treatments") }}</x-forms.button>

                @can('editTreatment', $treatment)
                <x-forms.button url="{{ route('treatments.edit', $treatment) }}" like="link">{{ __("Edit") }}</x-forms.button>
                @endcan
            </x-back-edit-buttons>
        </div>
    </div>

</x-layout>
