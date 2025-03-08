<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-red-700 text-white p-5 flex flex-col justify-between">
            <div>
                <h2 class="text-2xl font-bold text-center">Admin Panel</h2>
                <ul class="mt-6 space-y-3">
                    <li class="py-2 px-4 hover:bg-red-600 rounded transition"><a href="/dashboard">Dashboard</a></li>
                    <li class="py-2 px-4 hover:bg-red-600 rounded transition"><a href="{{ route('members.index') }}">Add Members</a></li>
                    <li class="py-2 px-4 hover:bg-red-600 rounded transition"><a href="#">About</a></li>
                    <li class="py-2 px-4 hover:bg-red-600 rounded transition"><a href="{{ route('settings') }}">Settings</a>

                </ul>
            </div>

            <!-- Logout Button at Bottom -->
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="w-full bg-white text-red-700 px-4 py-2 rounded shadow hover:bg-red-200 transition">Logout</button>
            </form>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <div class="bg-white shadow-md p-4 flex justify-between items-center border-b">
                <h1 class="text-2xl font-bold text-red-700">{{ config('app.name') }}</h1>
                <div class="flex items-center space-x-4">
                    
                    <form action="{{ route('profile.edit') }}" method="get">
                        @csrf
                        <button class="text-red-700 font-medium hover:underline">Admin</button>
                    </form>

                </div>
            </div>

            <!-- Page Content -->
            <div class="p-6">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
