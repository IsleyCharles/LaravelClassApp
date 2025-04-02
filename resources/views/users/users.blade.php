@extends('websitelayout.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <!-- Custom Navigation Bar for Logged-In Users -->
    @if(auth()->check())
        <nav class="bg-white shadow-md p-4 mb-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-red-700">Alumni Users Dashboard</h1>
            <ul class="flex space-x-4">
                <li><a href="{{ route('user-.dashboard') }}" class="text-red-700 font-semibold hover:underline">Home</a></li>
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

    <!-- Blog List -->
    <h2 class="text-3xl font-bold text-red-700 mb-4">All Blogs</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($blogs as $blog)
            <div class="bg-white shadow-lg rounded-lg p-6 border border-red-300 transition-transform transform hover:scale-105">
                <h3 class="text-xl font-semibold text-red-800">{{ $blog->title }}</h3>
                <p class="text-gray-600 text-sm">By {{ $blog->author->name ?? 'Unknown' }} • {{ $blog->created_at->format('M d, Y') }}</p>
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
