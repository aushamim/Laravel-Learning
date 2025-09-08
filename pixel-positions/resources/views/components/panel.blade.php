@php
    $defaultClasses = 'p-4 bg-gray-100 rounded-xl border border-transparent hover:border-blue-600 group transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $defaultClasses]) }}>
    {{ $slot }}
</div>
