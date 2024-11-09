<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dog Lovers App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css">
    @endif
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800">
    <div class="min-h-screen flex flex-col items-center justify-center p-6">
        <!-- Header Logo -->
        <header class="flex flex-col items-center mb-10">
            <svg class="h-16 w-auto text-[#FF2D20] mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 65" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.34 0c1.44 0 2.85.38 4.09 1.1l19.56 11.3a7.91 7.91 0 0 1 4.1 7.1v22.6a7.9 7.9 0 0 1-4.1 7.1l-19.56 11.3a7.9 7.9 0 0 1-8.19 0l-19.56-11.3A7.91 7.91 0 0 1 2 42.1v-22.6a7.91 7.91 0 0 1 4.1-7.1L25.66 1.1A7.9 7.9 0 0 1 30.34 0zm1.42 5.93c-.82-.47-1.84-.47-2.66 0L11.5 15.5a3.1 3.1 0 0 0-1.6 2.8v22.6c0 1.14.62 2.2 1.6 2.8l17.6 10.17c.82.48 1.84.48 2.66 0L50.5 43.7c.98-.57 1.6-1.63 1.6-2.8v-22.6c0-1.15-.62-2.2-1.6-2.8L31.76 5.93z" fill="currentColor"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.66 18.1c1.3-.75 2.92-.75 4.23 0l10.92 6.32a3.1 3.1 0 0 1 1.58 2.7v12.7a3.1 3.1 0 0 1-1.58 2.7l-10.92 6.32c-1.3.75-2.92.75-4.23 0l-10.92-6.32a3.1 3.1 0 0 1-1.58-2.7V27.1a3.1 3.1 0 0 1 1.58-2.7l10.92-6.32zm1.42 2.66a.9.9 0 0 0-.95 0L18.2 27.1a.9.9 0 0 0-.47.8v12.7c0 .33.18.63.47.8l10.92 6.32c.28.17.67.17.95 0l10.92-6.32c.29-.17.47-.47.47-.8V27.9a.9.9 0 0 0-.47-.8l-10.92-6.32z" fill="currentColor"/>
            </svg>
            <h1 class="text-4xl font-bold text-gray-900">Dog Lovers App</h1>
        </header>

        <!-- Main Content Section -->
        <main class="text-center max-w-xl">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Welcome to Dog Lovers App</h2>
            <p class="text-lg text-gray-600 mb-8">
                Discover and like your favorite dog breeds. Join our community and see which breeds others adore!
            </p>

            <!-- Buttons for Navigation -->
            <div class="flex justify-center gap-6">
                <a href="/login" class="px-6 py-3 text-lg font-medium rounded-md bg-blue-500 text-white hover:bg-blue-600">
                    Login
                </a>
                <a href="/register" class="px-6 py-3 text-lg font-medium rounded-md border border-gray-300 text-gray-700 hover:bg-gray-100">
                    Register
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-12 text-center text-gray-500">
            <p>&copy; {{ now()->year }} Dog Lovers App. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
