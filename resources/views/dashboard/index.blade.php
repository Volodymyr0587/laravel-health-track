<x-layout>

    <x-slot:heading>
        {{ __("Dashboard") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">

            <x-hint>{{ __("Hi") }}, {{ $user->fullName }}. {{ __("Here you can view your statistics") }}</x-hint>

            <div class="mt-6 mb-6">



            </div>


        </div>
    </div>

</x-layout>
