@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <span class="w-2 h-2 bg-healthtrack-light dark:bg-healthtrack-dark inline-block"></span>
    <label class="font-medium" for="{{ $name }}">{{ __($label) }}</label>
</div>
