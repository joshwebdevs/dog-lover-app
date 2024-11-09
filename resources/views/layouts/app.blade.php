<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Dog Lovers App' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-white text-2xl font-bold">Dog Lovers</a>
            <div class="flex space-x-4">
                @auth
                
                    <a href="{{ route('dashboard') }}" class="text-white">Dashboard</a>
                    <a href="{{ route('users') }}" class="text-white">Users</a>
                    <a href="{{ route('profile.show') }}" class="text-white">Profile</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-white">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-white">Login</a>
                    <a href="{{ route('register') }}" class="text-white">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Page Heading (optional) -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    @stack('modals')
    @livewireScripts
</body>
</html>
