<x-layout>

    <div class="p-4 sm:ml-64">

        <x-slot:heading>
            Login
        </x-slot:heading>

        <x-forms.form method="POST" action="/login">
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />

            <x-forms.button like="button">Log In</x-forms.button>
            <p>{{ __("Still don't have an account?") }} <a href="{{ route('register') }}" class="text-blue-500 underline">{{ __("Register now") }}.</a></p>
        </x-forms.form>

    </div>

</x-layout>
