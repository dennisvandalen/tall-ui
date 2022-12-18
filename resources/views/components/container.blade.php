<div {{ $attributes->class('bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 bg-white border-b border-gray-200 max-w-7xl mx-auto sm:px-6 lg:px-8') }}>
    @if(isset($title))
        <x-ui::h2-title>
            {{ $title }}
        </x-ui::h2-title>
    @endif
    {{ $slot }}
</div>
