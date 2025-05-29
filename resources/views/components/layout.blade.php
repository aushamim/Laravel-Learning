<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    {{-- Tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <nav class="bg-gray-200 border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap d">Laravel Test</span>
            </a>
            
            <ul class="font-medium flex flex-col mt-4 border md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                    <x-nav-link href="/">Home</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="/about">About</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="/contact">Contact</x-nav-link>
                </li>
            </ul>
        </div>
    </nav>

    
    <main class="max-w-screen-xl mx-auto p-4">
        {{ $slot }}
    </main>
</body>
</html>