<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Navigation Bar -->
    @guest
    <nav class="bg-gradient-to-r from-red-700 to-red-500 text-white shadow-lg mt-4">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ url('/') }}" class="text-2xl font-bold">Alumni System</a>
                <div class="hidden md:flex space-x-6">
                    <a href="{{ url('/') }}" class="hover:underline">Home</a>
                    <a href="{{ route('blogs.index') }}" class="hover:underline">Blogs</a>
                    <a href="{{ url('/events') }}" class="hover:underline">Events</a>
                    <a href="{{ url('/resources') }}" class="hover:underline">Resources</a>
                    <a href="{{ url('/about') }}" class="hover:underline">About</a>
                </div>
                <div class="hidden md:flex space-x-4">
                    <a href="{{ route('login') }}" class="bg-white text-red-600 px-4 py-2 rounded shadow hover:bg-red-200 transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-red-700 text-white px-4 py-2 rounded shadow hover:bg-red-800 transition">Register</a>
                </div>
            </div>
        </div>
    </nav>
    @endguest

    <div class="container mx-auto mt-6">
        @yield('content')
    </div>
</body>
</html>
