<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="logo.avif" type="image/x-icon">
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900">

    <!-- Navbar -->
    <nav class="bg-red-600 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold tracking-wide hover:text-red-300 transition">{{ config('app.name') }}</a>
            <div class="space-x-6">
                <a href="/" class="hover:text-red-300 transition">Home</a>
                <a href="/showMembers" class="hover:text-red-300 transition">Members</a>
                <a href="/about" class="hover:text-red-300 transition">About</a>
                <a href="/login" class="hover:text-red-300 transition">Login</a>
                <a href="/register" class="bg-white text-red-600 px-4 py-2 rounded-lg shadow hover:bg-red-500 hover:text-white transition">Register</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto p-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-red-700 text-white text-center p-4 mt-10 shadow-lg">
        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </footer>

</body>

</html>
