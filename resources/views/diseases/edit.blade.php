<x-layout>

    <x-slot:heading>
        {{ __("Edit Disease") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can edit a disease details") }}</x-hint>

            <x-forms.form action="{{ route('diseases.update', $disease) }}" method="POST">
                @method('PATCH')

                <x-forms.input label="{{ __('Disease name') }}" name="name" value="{{ $disease->name }}" />
                <x-forms.textarea label="{{ __('Disease description') }}" name="description" value="{{ $disease->description }}" />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('diseases.show', $disease) }}" like="link">{{ __("Cancel") }}</x-forms.button>
                    @can('editDisease', $disease)
                    <x-forms.button type="submit" like="button">{{ __("Update") }}</x-forms.button>
                    @endcan
                </div>
            </x-forms.form>

            @can('editDisease', $disease)
            <div class="mt-8 mb-12 space-y-4">
                <p class="text-xl font-bold text-red-600">{{ __("Danger zone") }}</p>
                <form action="{{ route('diseases.destroy', $disease) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-forms.button type="submit" like="button"
                        onclick="return confirm('{{ __('Are you sure you want to delete the record?') }}')"
                        class="bg-red-600 hover:bg-red-500 dark:bg-red-600 dark:hover:bg-red-500">
                        {{ __("Delete") }}
                    </x-forms.button>
                </form>
            </div>
            @endcan
        </div>
    </div>

</x-layout>
