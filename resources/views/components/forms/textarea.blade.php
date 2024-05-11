@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-md  border border-green/10 py-1.5 px-3 w-full',
        'value' => old($name, $attributes['value'] ?? '')
    ];
@endphp

<x-forms.field :$label :$name>
    <textarea {{ $attributes($defaults) }}>{{ old($name, $attributes['value'] ?? '') }}</textarea>
</x-forms.field>
