<x-layout>

    <x-slot:heading>
        {{ __("Diseases") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can view, search a diseases. Or press the button 'Add disease' to go to the form.") }}</x-hint>

            <div class="mt-6 mb-6">
                <x-forms.button url="{{ route('diseases.create') }}" like="link">{{ __('Add Disease') }}</x-forms.button>

                <div class="mt-10">
                    <x-forms.form action="{{ route('search.disease') }}">
                        <x-forms.input label="{{ __('Search For Disease') }}" name="searchDisease" placeholder="{{ __('Find a specific disease') }}" />
                        <x-forms.button type="submit" like="button">{{ __("Search") }}</x-forms.button>
                    </x-forms.form>
                </div>
            </div>

            <ul role="list" class="divide-y divide-gray-100">
                @forelse ($diseases as $disease)
                <x-disease.item diseaseRoute="{{ route('diseases.show', $disease) }}" diseaseName="{{ $disease->name }}"
                diseaseUpdatedAt="{{ $disease->updated_at->diffForHumans() }}" />
                @empty
                <x-hint>{{ __("You currently have no diseases. Use the 'Add Disease' button.") }}</x-hint>
                @endforelse
            </ul>

            <div class="mt-2">
                {{ $diseases->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

</x-layout>
