@props(['jobs' => []])

{{-- <table>
    <thead>
        <tr>
            <th class="py-2 px-4 border border-gray-300">Position</th>
            <th class="py-2 px-4 border border-gray-300">Yearly Salary</th>
            <th class="py-2 px-4 border border-gray-300">Employer</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jobs as $job)
            <tr>
                <td class="py-2 px-4 border border-gray-300">
                    <a href="/jobs/{{ $job['id'] }}" class="hover:text-blue-500 duration-300">{{ $job['title'] }}</a>
                </td>
                <td class="py-2 px-4 border border-gray-300">{{ $job['salary'] }}</td>
                <td class="py-2 px-4 border border-gray-300">{{ $job->employer->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table> --}}

<div class="space-y-4">
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 hover:border-gray-500 duration-300 rounded-lg">
            <p class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</p>
            <p><b>{{ $job['title'] }}</b> pays {{ $job['salary'] ?? "$0" }} per year.</p>
        </a>
    @endforeach
</div>
