@props(['jobs' => []])

<div class="space-y-4">
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 hover:border-gray-500 duration-300 rounded-lg">
            <p class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</p>
            <p><b>{{ $job['title'] }}</b> pays {{ $job['salary'] ?? "$0" }} per year.</p>
        </a>
    @endforeach

    <div>
        {{ $jobs->links() }}
    </div>
</div>
