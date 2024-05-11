@props(['labelName', 'eventField'])

<div class="sm:col-span-5">
    <x-event.label>{{ __($labelName) }}</x-event.label>
    <p class="block text-lg leading-6 text-gray-900">{{ $eventField }}</p>
    <hr>
</div>
