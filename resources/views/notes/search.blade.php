<x-layout>

    <x-slot:heading>
        {{ __("Search Results For ") }} "{{ $search }}"
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-6">
                <x-forms.button url="{{ route('notes.index') }}" like="link">{{ __("Back to Notes") }}</x-forms.button>
            </div>

            <div class="mt-10">
                <x-forms.form action="{{ route('search.note') }}">
                    <x-forms.input label="{{ __('Looking for something else?') }}" name="searchNote" placeholder="Find a specific event" />
                    <x-forms.button type="submit" like="button">{{ __("Searh") }}</x-forms.button>
                </x-forms.form>
            </div>

            <ul role="list" class="divide-y divide-gray-100">
                @foreach ($notes as $note)

                <x-note.item noteRoute="{{ route('notes.show', $note) }}" noteName="{{ $note->name }}"
                    noteUpdatedAt="{{ $note->updated_at->diffForHumans() }}" />

                @endforeach
            </ul>
        </div>
    </div>

</x-layout>
