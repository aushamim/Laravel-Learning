<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>

    {{-- Resources --}}
    @vite(['resources/js/app.js'])
</head>

<body class="font-hanken-grotesk pb-16">
    <nav class="px-40 flex justify-between items-center border-b-2 border-gray-100">
        <div>
            <a href="/" class="flex items-center">
                <img class="size-14" src="{{ Vite::asset('resources/images/logo.png') }}" alt="Pixel Positions Logo">
                <p class="text-xl font-semibold text-purple-700">PixPos</p>
            </a>
        </div>

        <div class="flex items-center gap-6 font-semibold text-gray-600">
            <a href="#" class="hover:text-purple-500 duration-300">Jobs</a>
            <a href="#" class="hover:text-purple-500 duration-300">Careers</a>
            <a href="#" class="hover:text-purple-500 duration-300">Salaries</a>
            <a href="#" class="hover:text-purple-500 duration-300">Companies</a>
        </div>

        @auth
            <div class="flex items-center gap-6 font-semibold text-gray-600">
                <a href="/jobs/create" class="hover:text-purple-500 duration-300">Post a Job</a>

                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="hover:text-purple-500 duration-300">Log Out</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="flex items-center gap-6 font-semibold text-gray-600">
                <a href="/login" class="hover:text-purple-500 duration-300">Log In</a>
                <a href="/register" class="hover:text-purple-500 duration-300">Sign Up</a>
            </div>
        @endguest
    </nav>

    <main class="mt-10 max-w-[1200px] mx-auto">
        {{ $slot }}
    </main>
</body>

</html>
