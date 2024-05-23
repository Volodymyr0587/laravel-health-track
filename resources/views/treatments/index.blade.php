<x-layout>

    <x-slot:heading>
        {{ __("Treatment") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can view, search your treatment. Or press the button 'Create treatment' to go to the form.") }}</x-hint>

            <div class="mt-6 mb-6">
                <x-forms.button url="{{ route('treatments.create') }}" like="link">{{ __('Create Treatment') }}</x-forms.button>

                <div class="mt-10">
                    <x-forms.form action="{{ route('search.treatment') }}">
                        <x-forms.input label="{{ __('Search For Treatment') }}" name="searchTreatment" placeholder="{{ __('Find a specific treatment') }}" />
                        <x-forms.button type="submit" like="button">{{ __("Search") }}</x-forms.button>
                    </x-forms.form>
                </div>
            </div>

            <ul role="list" class="divide-y divide-gray-100">
                @forelse ($treatments as $treatment)
                <x-treatment.item treatmentRoute="{{ route('treatments.show', $treatment) }}" treatmentName="{{ $treatment->name }}"
                treatmentUpdatedAt="{{ $treatment->updated_at->diffForHumans() }}" />
                @empty
                <x-hint>{{ __("You currently have no treatments. Use the 'Create Treatment' button.") }}</x-hint>
                @endforelse
            </ul>

            <div class="mt-2">
                {{ $treatments->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

</x-layout>
