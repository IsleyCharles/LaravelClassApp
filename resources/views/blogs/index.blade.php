@extends('websitelayout.app')

@section('content')

<div class="max-w-6xl mx-auto p-6">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md p-4 mb-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-red-700">Alumni System</h1>
        <ul class="flex space-x-4">
            <li><a href="{{ route('blogs.index') }}" class="text-red-700 font-semibold hover:underline">Blogs</a></li>
            <li><a href="{{ route('events.index') }}" class="text-red-700 font-semibold hover:underline">Events</a></li>
            <li><a href="{{ route('resources.index') }}" class="text-red-700 font-semibold hover:underline">Resources</a></li>
            <li><a href="{{ route('about.index') }}" class="text-red-700 font-semibold hover:underline">About</a></li>
            @if(auth()->check())
                @if(auth()->user()->is_admin)
                    <li><a href="{{ route('admin.dashboard') }}" class="text-red-700 font-semibold hover:underline">Admin Panel</a></li>
                @endif
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-700 font-semibold hover:underline">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('admin.login') }}" class="text-red-700 font-semibold hover:underline">Admin Login</a></li>
            @endif
        </ul>
    </nav>

    <h1 class="text-4xl font-bold text-red-700 mb-4 text-center">Alumni Blogs</h1>
    <p class="mb-6 text-gray-700 text-center">Read inspiring stories and updates from fellow alumni.</p>

    <!-- Button to Create a Blog -->
    <div class="flex justify-end mb-4">
        @if(auth()->check())
            <a href="{{ route('blogs.create') }}" class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 transition">
                + New Blog
            </a>
        @else
            <button onclick="showLoginPopup()" class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 transition">
                + New Blog
            </button>

            <script>
                function showLoginPopup() {
                    alert("You must be logged in to post a blog!");
                    window.location.href = "{{ route('login') }}";
                }
            </script>
        @endif
    </div>

    <!-- Popup Modal for Login -->
    <div id="loginPopup" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <p class="text-lg font-semibold mb-4">You must be logged in to post a blog.</p>
            <a href="{{ route('login') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Login</a>
            <button onclick="document.getElementById('loginPopup').classList.add('hidden')" class="text-red-600 font-semibold hover:underline">
                Cancel
            </button>
        </div>
    </div>

    <!-- Blog List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($blogs as $blog)
            <div class="bg-white shadow-lg rounded-lg p-6 border border-red-300 transition-transform transform hover:scale-105">
                <h2 class="text-xl font-semibold text-red-800">{{ $blog->title }}</h2>
                <p class="text-gray-700 mt-2">{{ Str::limit($blog->content, 100) }}</p>
                <a href="{{ route('blogs.show', $blog->id) }}" class="text-red-600 font-semibold hover:underline">Read More</a>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center">
        {{ $blogs->links() }}
    </div>
</div>

@endsection
