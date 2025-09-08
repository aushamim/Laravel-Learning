<x-layout>
    <x-slot:title>Job</x-slot:title>

    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-semibold">All Jobs</h1>

        <x-button href="/jobs/create">Create Job</x-button>
    </div>

    <div class="mt-4">
        <x-joblist :jobs="$jobs" />
    </div>
</x-layout>
