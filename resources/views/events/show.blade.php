<x-layout>

    <x-slot:heading>
        {{ $event->name }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">


                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">{{ __("Hint") }}</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Here you can create an event (visit to the
                            doctor, routine examination, tests, etc.)</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-5">
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->name }}</p>
                            </div>

                            <div class="sm:col-span-5">
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->location }}</p>
                            </div>

                            <div class="sm:col-span-5">
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ \Carbon\Carbon::parse($event->event_time)->format('d-m-Y H:i:s') }}</p>
                            </div>

                            <div class="col-span-full">
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->description }}</p>
                            </div>

                            <div class="sm:col-span-5">
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->price }}</p>
                            </div>

                            <div class="sm:col-span-5">
                                <p class="block text-sm font-medium leading-6 text-gray-900">{{ $event->attachment ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    @can('edit', $event)
                    <a href="{{ route('events.edit', $event) }}" class="text-sm font-semibold leading-6 text-gray-900">Edit</a>
                    @endcan
                </div>
        </div>
    </div>

</x-layout>
