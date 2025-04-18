<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div >
            <!-- <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> -->

            <nav>
    <div class="container">

        <div class="logo">
            <a href="{{ url('/products') }}">Restaurante Mantequilla</a>
        </div>

        <div class="menu">
            <a href="{{ url('/products') }}">Menu</a>
        </div>

        <div class="auth">
            @auth

                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('admin.contacts') }}">Messages</a>
                @endif

                <a href="{{ route('contact.create') }}">Contact</a>

                <form action="{{ route('logout') }}" method="POST" class="inline" style="display:inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>

    </div>
</nav>


            <div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
