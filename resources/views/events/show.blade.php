<x-layout>

    <x-slot:heading>
        {{ $event->name }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">


                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">{{ __("Hint") }}</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">{{ __("Here you can see the details of your event") }}</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-5">
                                <h3 class="mb-2 text-bold text-sm text-green-500">{{ __("Event name") }}</h3>
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->name }}</p>
                                <hr>
                            </div>

                            <div class="sm:col-span-5">
                                <h3 class="mb-2 text-bold text-sm text-green-500">{{ __("Event location") }}</h3>
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->location }}</p>
                                <hr>
                            </div>

                            <div class="sm:col-span-5">
                                <h3 class="mb-2 text-bold text-sm text-green-500">{{ __("Event date and time") }}</h3>
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ \Carbon\Carbon::parse($event->event_time)->format('d-m-Y H:i:s') }}</p>
                                <hr>
                            </div>

                            <div class="col-span-full">
                                <h3 class="mb-2 text-bold text-sm text-green-500">{{ __("Event description") }}</h3>
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->description }}</p>
                                <hr>
                            </div>

                            <div class="sm:col-span-5">
                                <h3 class="mb-2 text-bold text-sm text-green-500">{{ __("Event price") }}</h3>
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->price }}</p>
                                <hr>
                            </div>

                            <div class="sm:col-span-5">
                                <h3 class="mb-2 text-bold text-sm text-green-500">{{ __("Event attachment") }}</h3>
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->attachment ?? '' }}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-5">
                    <div class="mt-4">
                        <a href="{{ route('events.index') }}"
                        class="rounded-md bg-gray-600 px-2 py-2 mr-6 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Cancel</a>
                         @can('edit', $event)
                        <a href="{{ route('events.edit', $event) }}" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Edit</a>
                        @endcan
                    </div>
                </div>

        </div>
    </div>

</x-layout>
