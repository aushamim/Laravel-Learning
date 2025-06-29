@props(['jobs' => []])

<table>
    <thead>
        <tr>
            <th class="py-2 px-4 border border-gray-300">Position</th>
            <th class="py-2 px-4 border border-gray-300">Yearly Salary</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jobs as $job)
            <tr>
                <td class="py-2 px-4 border border-gray-300">
                    <a href="/jobs/{{ $job['id'] }}" class="hover:text-blue-500 duration-300">{{ $job['title'] }}</a>
                </td>
                <td class="py-2 px-4 border border-gray-300">{{ $job['salary'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
