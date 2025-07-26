<x-layout>
    <x-slot:title>Job - {{ $job->title }}</x-slot:title>

    <h1 class="text-2xl font-semibold">Job Information</h1>

    <div class="mt-4">
        <div class="flex gap-2">
            <b>Title: </b>
            <p>{{ $job->title }}</p>
        </div>
        <div class="flex gap-2">
            <b>Salary: </b>
            <p class="flex items-center">
                {{ $job->salary }}
                <span class="text-xs font-semibold">/yr</span>
            </p>
        </div>
    </div>

    @can('edit', $job)
        <div class="mt-4">
            <x-button href="/jobs/{{ $job['id'] }}/edit">Edit Job</x-button>
        </div>
    @endcan
</x-layout>
