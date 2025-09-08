<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form action="/jobs" method="POST" class="mt-6">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$10,0000" />
        <x-forms.input label="Location" name="location" placeholder="Bangladesh" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com/job/1" />
        <x-forms.checkbox label="Featured (costs extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="php, laravel" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
