<x-layout>

    <x-slot:heading>
        {{ __("All Attachments") }}
    </x-slot:heading>

    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-6">
                <x-hint class="mb-8">{{ __("Here you can view all your files (attachments for health events)") }}</x-hint>
                <x-forms.button url="{{ route('events.index') }}" like="link">{{ __('Back to Events') }}
                </x-forms.button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                @foreach ($events as $event)
                    @if ($event->media->isNotEmpty())
                    <x-event.info label-name="Event name" event-field="{{ $event->name }}" class="font-bold" />

                    <div class="ml-10">
                        @foreach ($event->media as $media)
                        <x-event.info label-name="{{ __('Event attachment') }} {{ $loop->iteration }}"
                            event-field="{{ $media->file_name }}">
                        </x-event.info>
                        <div class="flex flex-row my-5 space-x-2">
                            @can('edit', $event)
                            <x-forms.button
                                url="{{ route('events.downloadAttachment', ['event' => $event->id, 'media' => $media->id]) }}"
                                like="link">
                                {{ __("Download") }}
                            </x-forms.button>
                            <form method="POST" class=""
                                action="{{ route('attachments.destroy', ['event' => $event->id, 'media' => $media->id]) }}">
                                @csrf
                                @method('DELETE')

                                <x-forms.button type="submit" like="button"
                                    onclick="return confirm('Are you sure you want to delete the record?')"
                                    class="bg-red-600 hover:bg-red-500 dark:bg-red-600 dark:hover:bg-red-500">
                                    {{ __("Delete") }}
                                </x-forms.button>
                            </form>

                            @endcan
                        </div>
                        @endforeach
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
