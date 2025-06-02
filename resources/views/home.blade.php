<x-layout>
    <h1>Home Page</h1>

    <div class="mt-4">
        <h2 class="my-3 text-xl font-semibold">Available Jobs</h2>

        @foreach ($jobs as $job)
            <li>{{ $job['title'] }}: {{ $job['salary'] }}</li>
        @endforeach
    </div>
</x-layout>
