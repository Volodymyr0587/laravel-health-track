@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <span class="w-2 h-2 bg-healthtrack-light-hover inline-block"></span>
    <label class="font-medium dark:text-healthtrack-light-hover" for="{{ $name }}">{{ __($label) }}</label>
</div>
