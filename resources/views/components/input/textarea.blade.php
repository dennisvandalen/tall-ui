@props([
    'disabled' => false,
    'target' => 'submit',
])

@if($attributes->has('$wire:target'))
    @php
        $target = $attributes->get('$wire:target');
    @endphp
@endif

<textarea
    wire:loading.attr="disabled"
    wire:target="{{ $target }}"
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'disabled:opacity-70 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>{{ $slot }}</textarea>
