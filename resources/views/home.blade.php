<x-layout>
    {{-- Page Title --}}
    <x-slot:title>Home</x-slot:title>

    <h1>Home Page</h1>

    <div class="mt-4">
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
