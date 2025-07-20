<x-layout>
    <x-slot:title>Create Job</x-slot:title>

    <h1 class="text-2xl font-semibold">Create Job</h1>

    <div class="mt-4">
        <form method="POST" action="/jobs">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">We need a handful of details from you.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form.form-field>
                            <x-form.form-label for="title">Title</x-form.form-label>
                            <div class="mt-2">
                                <x-form.form-input type="text" name="title" id="title" placeholder="Shift Leader" />
                                <x-form.form-error name="title" />
                            </div>
                        </x-form.form-field>

                        <x-form.form-field>
                            <x-form.form-label for="salary">Salary</x-form.form-label>
                            <div class="mt-2">
                                <x-form.form-input type="text" name="salary" id="salary" placeholder="$50,000" />
                                <x-form.form-error name="salary" />
                            </div>
                        </x-form.form-field>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <x-form.form-button> Save </x-form.form-button>
            </div>
        </form>
    </div>
</x-layout>
