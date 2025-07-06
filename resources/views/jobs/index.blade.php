<x-layout>
    <x-slot:title>Job</x-slot:title>

    <h1 class="text-2xl font-semibold">All Jobs</h1>

    <div class="mt-4">
        <x-joblist :jobs="$jobs" />
    </div>
</x-layout>
