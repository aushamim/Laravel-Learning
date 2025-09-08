<x-layout>
    @if (!empty(request('q')))
        <x-page-heading>Search</x-page-heading>

        <x-forms.form action="/search" class="mt-6 mb-10">
            <x-forms.input type="text" name="q" placeholder="Web Developer..." :value="request('q')" />
        </x-forms.form>
    @endif

    @if (!empty(request('q')))
        <x-section-heading>Results</x-section-heading>
    @else
        <x-page-heading>Results</x-page-heading>
    @endif

    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :job="$job" />
        @endforeach
    </div>
</x-layout>
