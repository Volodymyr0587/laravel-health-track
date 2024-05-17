<x-layout>

    <x-slot:heading>
        {{ __("Edit Note") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can edit a note") }}</x-hint>

            <x-forms.form action="{{ route('notes.update', $note) }}" method="POST">
                @method('PATCH')

                <x-forms.input label="Note Name" name="name" value="{{ $note->name }}" />
                <x-forms.textarea label="Note Body" name="body" value="{{ $note->body }}" />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('notes.show', $note) }}" like="link">Cancel</x-forms.button>
                    @can('editNote', $note)
                    <x-forms.button type="submit" like="button">Update</x-forms.button>
                    @endcan
                </div>
            </x-forms.form>

            @can('editNote', $note)
            <div class="mt-8 mb-12 space-y-4">
                <p class="text-xl font-bold text-red-600">Danger zone</p>
                <form action="{{ route('notes.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-forms.button type="submit" like="button"
                        onclick="return confirm('Are you sure you want to delete the record?')"
                        class="bg-red-600 hover:bg-red-500 dark:bg-red-600 dark:hover:bg-red-500">
                        Delete
                    </x-forms.button>
                </form>
            </div>
            @endcan
        </div>
    </div>

</x-layout>
