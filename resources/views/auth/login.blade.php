<x-layout>

    <div class="p-4 sm:ml-64">

        <x-slot:heading>
            {{ __("Log In") }}
        </x-slot:heading>

        <x-forms.form method="POST" action="/login">
            <x-forms.input label="{{ __('Email') }}" name="email" type="email" />
            <x-forms.input label="{{ __('Password') }}" name="password" type="password" />

            <x-forms.button like="button">{{ __("Log In") }}</x-forms.button>
            <p class="dark:text-white">{{ __("Still don't have an account?") }} <a href="{{ route('register') }}" class="text-blue-500 underline">{{ __("Register now") }}.</a></p>
        </x-forms.form>

    </div>

</x-layout>
