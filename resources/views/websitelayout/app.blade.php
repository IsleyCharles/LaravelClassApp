<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-50">
    <nav class="bg-red-600 text-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ url('/') }}" class="text-2xl font-bold">Alumni System</a>
                <div class="hidden md:flex space-x-6">
                    <a href="{{ url('/') }}" class="hover:underline">Home</a>
                    <a href="{{ route('blogs.index') }}" class="text-white hover:text-red-300">Blogs</a>
                    <a href="{{ route('events.index') }}" class="hover:underline">Events</a>
                    <a href="{{ route('resources.index') }}" class="hover:underline">Resources</a>
                    <a href="{{ route('about.index') }}" class="hover:underline">About</a>
                </div>
                <div class="hidden md:flex space-x-4">
                    <a href="{{ route('login') }}" class="bg-white text-red-600 px-4 py-2 rounded shadow hover:bg-red-200 transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 transition">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-6">
        @yield('content')
    </div>
</body>
</html>
