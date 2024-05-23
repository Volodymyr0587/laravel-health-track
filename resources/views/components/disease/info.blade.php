@props(['labelName', 'diseaseField'])

<div class="sm:col-span-5">
    <x-note.label>{{ __($labelName) }}</x-.label>
    <div class="flex items-center space-x-5">
        <p {{ $attributes->merge(['class' => 'block text-lg leading-6 text-gray-900 dark:text-white']) }}>{{ $diseaseField }}</p>
        <div>
            {{ $slot }}
        </div>
    </div>

    <hr class="mt-4">
</div>
