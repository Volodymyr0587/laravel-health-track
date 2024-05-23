<x-layout>

    <x-slot:heading>
        {{ __("Edit Tretment") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can edit a treatment details") }}</x-hint>

            <x-forms.form action="{{ route('treatments.update', $treatment) }}" method="POST">
                @method('PATCH')

                <x-forms.select label="Disease" id="disease_id" name="disease_id">
                    @foreach($diseases as $id => $name)
                    {{-- <option value="{{ $id }}">{{ $name }}</option> --}}
                    <option value="{{ $id }}" {{ $id == $treatment->disease_id ? 'selected' : '' }}>
                        {{ $name }}
                    </option>
                    @endforeach
                </x-forms.select>

                <x-forms.input label="{{ __('Treatment name') }}" name="name" value="{{ $treatment->name }}" />
                <x-forms.textarea label="{{ __('Treatment description') }}" name="description" value="{{ $treatment->description }}" />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('treatments.show', $treatment) }}" like="link">{{ __("Cancel") }}</x-forms.button>
                    @can('editTreatment', $treatment)
                    <x-forms.button type="submit" like="button">{{ __("Update") }}</x-forms.button>
                    @endcan
                </div>
            </x-forms.form>

            @can('editTreatment', $treatment)
            <div class="mt-8 mb-12 space-y-4">
                <p class="text-xl font-bold text-red-600">{{ __("Danger zone") }}</p>
                <form action="{{ route('treatments.destroy', $treatment) }}" method="POST">
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
