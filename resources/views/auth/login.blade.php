<x-layout>
    <x-slot:title>Log In</x-slot:title>

    <h1 class="text-2xl font-semibold">Log In</h1>

    <div class="mt-4">
        <form method="POST" action="/login">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form.form-field>
                            <x-form.form-label for="email">Email</x-form.form-label>
                            <div class="mt-2">
                                <x-form.form-input type="email" name="email" id="email" required/>
                                <x-form.form-error name="email" />
                            </div>
                        </x-form.form-field>

                        <x-form.form-field>
                            <x-form.form-label for="password">Password</x-form.form-label>
                            <div class="mt-2">
                                <x-form.form-input type="password" name="password" id="password" required/>
                                <x-form.form-error name="password" />
                            </div>
                        </x-form.form-field>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form.form-button> Log In </x-form.form-button>
            </div>
        </form>
    </div>
</x-layout>
