<x-layout>

    <x-slot:heading>
        {{ $disease->name }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <x-hint>{{ __("Here you can see the details of your disease") }}</x-hint>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <x-disease.info label-name="{{ __('Disease name') }}" disease-field="{{ $disease->name }}" />
                        <x-disease.info label-name="{{ __('Disease description') }}" disease-field="{{ $disease->description }}" />

                        @foreach ($disease->treatments as $treatment)
                            <x-disease.info labelName="{{ __('Treatment') }} {{ $loop->iteration }}" diseaseField="{{ $treatment->name }}" />
                        @endforeach


                    </div>
                </div>
            </div>

            <x-back-edit-buttons>
                    <x-forms.button url="{{ route('diseases.index') }}" like="link">{{ __("Back to Diseases") }}</x-forms.button>

                    @can('editDisease', $disease)
                    <x-forms.button url="{{ route('diseases.edit', $disease) }}" like="link">{{ __("Edit") }}</x-forms.button>
                    @endcan
            </x-back-edit-buttons>
        </div>
    </div>

</x-layout>
