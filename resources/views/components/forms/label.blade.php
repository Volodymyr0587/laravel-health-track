@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <span class="w-2 h-2 bg-green-500 inline-block"></span>
    <label class="font-medium" for="{{ $name }}">{{ $label }}</label>
</div>
