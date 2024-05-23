<x-layout>

    <x-slot:heading>
        {{ __("Search Results For ") }} "{{ $search }}"
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-6">
                <x-forms.button url="{{ route('diseases.index') }}" like="link">{{ __("Back to Diseases") }}</x-forms.button>
            </div>

            <div class="mt-10">
                <x-forms.form action="{{ route('search.disease') }}">
                    <x-forms.input label="{{ __('Looking for something else?') }}" name="searchDisease" placeholder="{{ __('Find a specific disease') }}" />
                    <x-forms.button type="submit" like="button">{{ __("Search") }}</x-forms.button>
                </x-forms.form>
            </div>

            <ul role="list" class="divide-y divide-gray-100">
                @foreach ($diseases as $disease)

                <x-disease.item diseaseRoute="{{ route('diseases.show', $disease) }}" diseaseName="{{ $disease->name }}"
                    diseaseUpdatedAt="{{ $disease->updated_at->diffForHumans() }}" />

                @endforeach
            </ul>
        </div>
    </div>

</x-layout>
