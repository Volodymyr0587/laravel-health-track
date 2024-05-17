<x-layout>

    <x-slot:heading>
        {{ __("Notes") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can view, search a notes (your personal thoughts, plans, etc). Or press the button 'Create note' to go to the form.") }}</x-hint>

            <div class="mt-6 mb-6">
                <x-forms.button url="{{ route('notes.create') }}" like="link">{{ __('Create Note') }}</x-forms.button>

                <div class="mt-10">
                    <x-forms.form action="{{ route('search.note') }}">
                        <x-forms.input label="{{ __('Search For Note') }}" name="searchNote" placeholder="{{ __('Find a specific note') }}" />
                        <x-forms.button type="submit" like="button">{{ __("Searсh") }}</x-forms.button>
                    </x-forms.form>
                </div>
            </div>

            <ul role="list" class="divide-y divide-gray-100">
                @forelse ($notes as $note)
                <x-note.item noteRoute="{{ route('notes.show', $note) }}" noteName="{{ $note->name }}"
                noteUpdatedAt="{{ $note->updated_at->diffForHumans() }}" />
                @empty
                <x-hint>{{ __("You currently have no notes. Use the 'Create Note' button.") }}</x-hint>
                @endforelse
            </ul>

            <div class="mt-2">
                {{ $notes->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

</x-layout>
