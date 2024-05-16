<x-layout>

    <div class="p-4 sm:ml-64">

        <x-slot:heading>
            {{ __("Register") }}
        </x-slot:heading>

        <x-forms.form method="POST" action="/register">
            <x-forms.input label="{{ __('First Name') }}" name="first_name" />
            <x-forms.input label="{{ __('Last Name') }}" name="last_name" />
            <x-forms.input label="{{ __('Email') }}" name="email" type="email" />
            <x-forms.input label="{{ __('Password') }}" name="password" type="password" />
            <x-forms.input label="{{ __('Password Confirmation') }}" name="password_confirmation" type="password" />

            <x-forms.button like="button">{{ __("Create Account") }}</x-forms.button>
            <p>{{ __("Already have an account?") }} <a href="{{ route('login') }}" class="text-blue-500 underline">{{ __("Log in now") }}.</a></p>
        </x-forms.form>

    </div>

</x-layout>
