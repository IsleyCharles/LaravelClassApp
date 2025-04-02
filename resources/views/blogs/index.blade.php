@extends('websitelayout.app')

@section('content')

<!-- Custom Navigation Bar for Logged-In Users -->
@if(auth()->check())
        <nav class="bg-white shadow-md p-4 mb-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-red-700">Alumni Users Dashboard</h1>
            <ul class="flex space-x-4">
                <li><a href="{{ route('user.ldashboard') }}" class="text-red-700 font-semibold hover:underline">Home</a></li>
                <li><a href="{{ route('blogs.index') }}" class="text-red-700 font-semibold hover:underline">All Blogs</a></li>
                <li><a href="{{ route('blogs.create') }}" class="text-red-700 font-semibold hover:underline">Create Blog</a></li>
                <li><a href="{{ url('/events') }}" class="text-red-700 font-semibold hover:underline">Events</a></li>
                <li><a href="{{ url('/resources') }}" class="text-red-700 font-semibold hover:underline">Resources</a></li>
                <li><a href="{{ url('/about') }}" class="text-red-700 font-semibold hover:underline">About</a></li>
                @if(auth()->user()->is_admin)
                    <li><a href="{{ route('admin.dashboard') }}" class="text-red-700 font-semibold hover:underline">Admin Panel</a></li>
                @endif
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-700 font-semibold hover:underline">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    @endif

<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-4xl font-bold text-red-700 mb-4 text-center">Alumni Blogs</h1>
    <p class="mb-6 text-gray-700 text-center">Read inspiring stories and updates from fellow alumni.</p>

    <!-- Button to Create a Blog -->
    <div class="flex justify-end mb-4">
        <!-- @if(auth()->check())
            <a href="{{ route('blogs.create') }}" class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 transition">
                + New Blo5g
            </a>
        @else -->
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
