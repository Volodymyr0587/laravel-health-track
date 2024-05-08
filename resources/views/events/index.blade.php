<x-layout>

    <x-slot:heading>
        {{ __("Health Events") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">


            <div class="grid grid-cols-3 gap-4 mb-4">
                @foreach ($events as $event)
                <div class="flex items-center justify-center h-24 rounded bg-green-100 dark:bg-green-500">
                    <p class="text-2xl text-gray-600 dark:text-gray-900">
                        {{ $event->name }}
                    </p>
                </div>
                @endforeach
            </div>

        </div>
    </div>

</x-layout>
