<x-layout>

    <x-slot:heading>
        {{ __("Add Disease") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Here you can add a disease") }}</x-hint>

            <x-forms.form action="{{ route('diseases.store') }}" method="POST">

                <x-forms.input label="{{ __('Disease name') }}" name="name" placeholder="{{ __('Chronic inflammatory demyelinating polyneuropathy') }}" />

                <x-forms.input label="{{ __('Diagnosed at') }}" name="diagnosed_at" type="date" />

                <x-forms.textarea label="{{ __('Disease description') }}" name="description"  />

                <div class="flex space-x-2">
                    <x-forms.button url="{{ route('diseases.index') }}" like="cancel">{{ __("Cancel") }}</x-forms.button>
                    @auth
                    <x-forms.button type="submit" like="button">{{ __("Create") }}</x-forms.button>
                    @endauth
                </div>
            </x-forms.form>
        </div>
    </div>

</x-layout>
