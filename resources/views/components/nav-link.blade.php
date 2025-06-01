@props(['active' => false])

<a href={{ $attributes->get('href') }}
    class="{{ $active ? 'underline underline-offset-4 decoration-2 decoration-gray-600' : '' }} block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100">
    {{ $slot }}
</a>
