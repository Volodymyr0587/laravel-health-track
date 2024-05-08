<x-layout>

    <x-slot:heading>
        {{ __("Health Events") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-4">
                <a href="{{ route('events.create') }}">{{ __('Create Event') }}</a>
            </div>


            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                @foreach ($events as $event)

                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->location }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ \Carbon\Carbon::parse($event->event_time)->format('d-m-Y H:i:s') }}</p>
                    {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->description ?? 'No description' }}</p> --}}
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->price == 0 ? 'Free' : $event->price }}</p>
                    <a href="{{ route('events.show', $event) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-200 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>

                </div>

                @endforeach

            </div>




        </div>
    </div>

</x-layout>
