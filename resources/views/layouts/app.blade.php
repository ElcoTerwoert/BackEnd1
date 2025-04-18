<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
 <!-- Navbar -->
 <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <div class="text-white text-lg">
                <a href="{{ url('/') }}" class="font-semibold">Restaurant Name</a>
            </div>
            
            <div class="space-x-4">
                <!-- Menu button visible for all users -->
                <a href="{{ url('/products') }}" class="text-white hover:bg-gray-700 p-2 rounded">Menu</a>

                <!-- Show login/register or logout based on authentication status -->
                @auth
                    <!-- Logged in: Show logout -->
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-white hover:bg-gray-700 p-2 rounded">Logout</button>
                    </form>
                @else
                    <!-- Not logged in: Show login and register -->
                    <a href="{{ route('login') }}" class="text-white hover:bg-gray-700 p-2 rounded">Login</a>
                    <a href="{{ route('register') }}" class="text-white hover:bg-gray-700 p-2 rounded">Register</a>
                @endauth
            </div>
        </div>
    </nav>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
