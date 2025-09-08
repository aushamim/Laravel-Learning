@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="{{ $employer->name }} Image" class="rounded-xl aspect-square object-cover" width="{{ $width }}">
