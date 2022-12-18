@props([
    'disabled' => false,
    'target' => 'submit',
])

@if($attributes->has('$wire:target'))
    @php
        $target = $attributes->get('$wire:target');
    @endphp
@endif

<button
    wire:target="{{ $target }}"
    wire:loading.attr="disabled"
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
