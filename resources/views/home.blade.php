<x-layout>
    {{-- Page Title --}}
    <x-slot:title>Home</x-slot:title>

    <h1 class="text-2xl font-semibold">Home Page</h1>

    <div class="mt-4">
        <x-joblist :jobs="$jobs" />
    </div>
</x-layout>
