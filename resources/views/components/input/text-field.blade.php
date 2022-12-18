@props([
    'autocomplete' => '',
    'label' => null,
])

<div class="col-span-6 sm:col-span-4">
    @if($label)
        <x-jet-label class="mt-2" for="{{ $attributes->wire('model')->value() }}" value="{{ __($label) }}"/>
    @endif
    <x-ui::input.text {{ $attributes }}
                      id="{{ $attributes->wire('model')->value() }}"
                      type="text"
                      class="block w-full"
                      autocomplete="{{ $autocomplete }}"/>
    <x-jet-input-error for="{{ $attributes->wire('model')->value() }}" class="mt-2"/>
</div>
