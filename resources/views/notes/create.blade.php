<x-layout>

    <x-slot:heading>
        {{ __("Create Note") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can create a note (your personal thoughts, plans, etc)") }}</x-hint>

            <x-forms.form action="{{ route('notes.store') }}" method="POST">

                <x-forms.input label="Note Name" name="name" placeholder="Useful physical exercises to improve the condition of the spine" />

                <x-forms.textarea label="Note Body" name="body"  />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('notes.index') }}" like="link">Cancel</x-forms.button>
                    @auth
                    <x-forms.button type="submit" like="button">Create</x-forms.button>
                    @endauth
                </div>
            </x-forms.form>
        </div>
    </div>

</x-layout>
