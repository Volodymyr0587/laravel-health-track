<x-layout>

    <div class="p-4 sm:ml-64">

        <x-slot:heading>
            Register
        </x-slot:heading>

        <x-forms.form method="POST" action="/register">
            <x-forms.input label="First Name" name="first_name" />
            <x-forms.input label="Last Name" name="last_name" />
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
            <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

            <x-forms.button type="button">Create Account</x-forms.button>
        </x-forms.form>

    </div>

</x-layout>
