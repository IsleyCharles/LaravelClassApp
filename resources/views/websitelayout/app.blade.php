<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni System</title>

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-100">

    <!-- Navbar (Optional) -->
    <nav class="bg-red-600 text-white p-4">
        <div class="max-w-6xl mx-auto flex justify-between">
            <a href="{{ url('/') }}" class="text-xl font-bold">Alumni System</a>
            <a href="{{ route('login') }}" class="hover:underline">Login</a>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

</body>
</html>
