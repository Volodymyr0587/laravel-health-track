<x-layout>

    <x-slot:heading>
        {{ __("Create Event") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">{{ __("Hint") }}</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Here you can create an event (visit to the
                            doctor, routine examination, tests, etc.)</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-5">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name of the
                                    event</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                        <input type="text" name="name" id="name" autocomplete="name"
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 mx-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="A visit to the family doctor">
                                    </div>

                                    <x-forms.error :error="$errors->first('name')" />
                                </div>
                            </div>

                            <div class="sm:col-span-5">
                                <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Location
                                    of the event</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                        <input type="text" name="location" id="location" autocomplete="location"
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 mx-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="Volyn Regional Clinical Hospital, ave. Presidenta Hrushevskyi, 21
                                            Lutsk, Volyn region, 43000">
                                    </div>

                                    {{-- <x-form-error name="location" /> --}}
                                    <x-forms.error :error="$errors->first('location')" />
                                </div>
                            </div>

                            <div class="sm:col-span-5">
                                <label for="event_time" class="block text-sm font-medium leading-6 text-gray-900">Date
                                    and time of the event</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                        <input type="datetime-local" name="event_time" id="event_time"
                                            autocomplete="event_time"
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 mx-2 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    </div>

                                    {{-- <x-form-error name="event_time" /> --}}
                                    <x-forms.error :error="$errors->first('event_time')" />
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="description"
                                    class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                <div class="mt-2">
                                    <textarea id="description" name="description" rows="3"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>

                                    {{-- <x-form-error name="description" /> --}}
                                    <x-forms.error :error="$errors->first('description')" />


                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Describe the event in a few words
                                    (optional)
                                </p>
                            </div>

                            <div class="sm:col-span-5">
                                <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price (if
                                    free, leave the field empty)</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                        <input type="text" name="price" id="price" autocomplete="price"
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 mx-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="750.00">
                                    </div>

                                    {{-- <x-form-error name="price" /> --}}
                                    <x-forms.error :error="$errors->first('price')" />
                                </div>
                            </div>

                            <div class="sm:col-span-5">
                                <label for="attachment" class="block text-sm font-medium leading-6 text-gray-900">File
                                    upload (Referral to a doctor, etc)</label>
                                <div class="mt-2">
                                    <div class="flex rounded-xs shadow-sm sm:max-w-md">
                                        <input type="file" name="attachment" id="attachment"
                                            class="block w-full text-sm text-gray-900  rounded-lg cursor-pointer ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                    </div>

                                    {{-- <x-form-error name="attachment" /> --}}
                                    <x-forms.error :error="$errors->first('attachment')" />
                                </div>
                            </div>

                            <div class="sm:col-span-5">
                                <div class="mt-6 flex items-center justify-start gap-x-6">
                                    <a href="{{ route('events.index') }}"
                                        class="rounded-md bg-gray-600 px-2 py-2 mr-6 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Cancel</a>
                                    <div>
                                        <x-forms.button>Save</x-forms.button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
