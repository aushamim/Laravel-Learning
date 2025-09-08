@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2 ml-1">
    <span class="w-2 h-2 bg-gray-600 inline-block"></span>
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>
