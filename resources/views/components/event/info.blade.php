@props(['labelName', 'eventField'])

<div class="sm:col-span-5">
    <x-event.label>{{ __($labelName) }}</x-event.label>
    <div class="flex items-center space-x-5">
        <p class="block text-lg leading-6 text-gray-900">{{ $eventField }}</p>
        <div>
            {{ $slot }}
        </div>
    </div>

    <hr class="mt-4">
</div>
