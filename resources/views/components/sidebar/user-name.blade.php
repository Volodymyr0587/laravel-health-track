@props(['firstName', 'lastName'])

<li class="flex items-center space-x-3">
    <span {{ $attributes->merge(['class' => 'ms-2 whitespace-nowrap']) }}>{{ $slot }}</span>
    <div class="flex flex-col font-bold text-lg items-start p-0 ml-2 text-gray-900 rounded-lg dark:text-white">
        <span class="break-all">{{ $firstName }}</span>
        <span class="break-all">{{ $lastName }}</span>
    </div>
</li>
