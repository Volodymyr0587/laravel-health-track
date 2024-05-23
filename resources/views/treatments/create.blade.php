<x-layout>

    <x-slot:heading>
        {{ __("Create Treatment") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can create a treatment for specific disease") }}</x-hint>

            <x-forms.form action="{{ route('treatments.store') }}" method="POST">

                <x-forms.select label="Disease" id="disease_id" name="disease_id">
                    @foreach($diseases as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </x-forms.select>

                <x-forms.input label="{{ __('Treatment name') }}" name="name"
                    placeholder="{{ __('Vitamin B12 intramuscularly') }}" />

                <x-forms.textarea label="{{ __('Treatment description') }}" name="description" />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('treatments.index') }}" like="link">{{ __("Cancel") }}
                    </x-forms.button>
                    @auth
                    <x-forms.button type="submit" like="button">{{ __("Create") }}</x-forms.button>
                    @endauth
                </div>
            </x-forms.form>
        </div>
    </div>

</x-layout>
