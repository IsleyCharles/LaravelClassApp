<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white p-5">
            <h2 class="text-2xl font-bold">Admin Panel</h2>
            <ul class="mt-6">
                <li class="py-2 px-4 hover:bg-blue-700 rounded"><a href="/dashboard">Dashboard</a></li>
                <li class="py-2 px-4 hover:bg-blue-700 rounded"><a href="{{ route('members.index') }}">Members</a></li>
                <li class="py-2 px-4 hover:bg-blue-700 rounded"><a href="#">Users</a></li>
                <li class="py-2 px-4 hover:bg-blue-700 rounded"><a href="#">Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <div class="bg-white shadow p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">{{ config('app.name') }}</h1>
                <div class="flex items-center space-x-4">

                    <form action="{{ route('profile.edit') }}" method="get">
                        @csrf
                        <button>Admin</button>
                    </form>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
                    </form>

                </div>
            </div>
            <!-- content here -->
            @yield('content')

        </div>
    </div>
</body>

</html>