<x-layout>

    <x-slot:heading>
        {{ $note->name }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <x-hint>{{ __("Here you can see the details of your note") }}</x-hint>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <x-note.info label-name="{{ __('Note name') }}" note-field="{{ $note->name }}" />
                        <x-note.info label-name="{{ __('Note content') }}" note-field="{{ $note->body }}" />
                        <x-note.info label-name="{{ __('Created') }}" note-field="{{ to_day_date_time_string($note->created_at, $locale = session()->get('locale'))}}" />
                        <x-note.info label-name="{{ __('Updated') }}" note-field="{{ to_day_date_time_string($note->updated_at, $locale = session()->get('locale'))}}" />


                    </div>
                </div>
            </div>

            <x-back-edit-buttons>
                <x-forms.button url="{{ route('notes.index') }}" like="link">{{ __("Back to Notes") }}</x-forms.button>

                @can('editNote', $note)
                <x-forms.button url="{{ route('notes.edit', $note) }}" like="link">{{ __("Edit") }}</x-forms.button>
                @endcan
            </x-back-edit-buttons>
        </div>
    </div>

</x-layout>
