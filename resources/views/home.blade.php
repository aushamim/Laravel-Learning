<x-layout>
    <h1>Home Page</h1>

    <div class="mt-4">
        <x-slot:title>Home</x-slot:title>

        <h2 class="my-3 text-xl font-semibold">Available Jobs</h2>

        <ul>
            @foreach ($jobs as $job)
                <li>
                    <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}: {{ $job['salary'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
