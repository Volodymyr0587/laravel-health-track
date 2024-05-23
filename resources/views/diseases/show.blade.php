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


                    </div>
                </div>
            </div>

            <div class="sm:col-span-5">
                <div class="mt-4 space-x-2">
                    <x-forms.button url="{{ route('diseases.index') }}" like="link">{{ __("Back to Diseases") }}</x-forms.button>

                    @can('editDisease', $disease)
                    <x-forms.button url="{{ route('diseases.edit', $disease) }}" like="link">{{ __("Edit") }}</x-forms.button>
                    @endcan
                </div>
            </div>
        </div>
    </div>

</x-layout>
