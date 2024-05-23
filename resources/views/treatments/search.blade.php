<x-layout>

    <x-slot:heading>
        {{ __("Search Results For ") }} "{{ $search }}"
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-6">
                <x-forms.button url="{{ route('treatments.index') }}" like="link">{{ __("Back to Treatments") }}</x-forms.button>
            </div>

            <div class="mt-10">
                <x-forms.form action="{{ route('search.treatment') }}">
                    <x-forms.input label="{{ __('Looking for something else?') }}" name="searchTreatment" placeholder="{{ __('Find a specific treatment') }}" />
                    <x-forms.button type="submit" like="button">{{ __("Search") }}</x-forms.button>
                </x-forms.form>
            </div>

            <ul role="list" class="divide-y divide-gray-100">
                @foreach ($treatments as $treatment)

                <x-treatment.item treatmentRoute="{{ route('treatments.show', $treatment) }}" treatmentName="{{ $treatment->name }}"
                    treatmentUpdatedAt="{{ $treatment->updated_at->diffForHumans() }}" />

                @endforeach
            </ul>
        </div>
    </div>

</x-layout>
