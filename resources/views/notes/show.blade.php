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

                        <x-note.info label-name="Note name" note-field="{{ $note->name }}" />
                        <x-note.info label-name="Note content" note-field="{{ $note->body }}" />


                    </div>
                </div>
            </div>

            <div class="sm:col-span-5">
                <div class="mt-4 space-x-2">
                    <x-forms.button url="{{ route('notes.index') }}" like="link">Back to Notes</x-forms.button>

                    @can('editNote', $note)
                    <x-forms.button url="{{ route('notes.edit', $note) }}" like="link">Edit</x-forms.button>
                    @endcan
                </div>
            </div>
        </div>
    </div>

</x-layout>
