@props(['labelName', 'profileField'])

<div class="sm:col-span-5">
    <x-health-profile.label>{{ __($labelName) }}</x-health-profile.label>
    <div class="flex items-center space-x-5">
        <p {{ $attributes->merge(['class' => 'block text-lg leading-6 text-gray-900 dark:text-gray-300']) }}>{{ __($profileField) }}</p>
    </div>
    <hr class="my-4">
</div>
