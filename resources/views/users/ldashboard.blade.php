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

<!-- Main Content Area -->
@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Welcome Section -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Welcome back, {{ Auth::user()->name }} 👋</h1>
        <p class="text-gray-600 mt-2">Here’s what’s new in the alumni community.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-blue-100 p-5 rounded-lg shadow text-center">
            <p class="text-lg font-semibold text-blue-800">Available Jobs</p>
            <p class="text-2xl font-bold text-blue-900 mt-1">{{ $jobCount }}</p>
        </div>
        <div class="bg-green-100 p-5 rounded-lg shadow text-center">
            <p class="text-lg font-semibold text-green-800">Blog Posts</p>
            <p class="text-2xl font-bold text-green-900 mt-1">{{ $blogCount }}</p>
        </div>
        <div class="bg-yellow-100 p-5 rounded-lg shadow text-center">
            <p class="text-lg font-semibold text-yellow-800">Total Alumni</p>
            <p class="text-2xl font-bold text-yellow-900 mt-1">{{ $alumniCount }}</p>
        </div>
    </div>

    <!-- Jobs Section -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">🎯 Available Jobs</h2>
        @forelse($jobs as $job)
            <div class="border border-gray-200 p-4 rounded mb-4 hover:shadow transition">
                <h3 class="text-lg font-semibold text-blue-700">{{ $job->title }}</h3>
                <p class="text-gray-600">{{ Str::limit($job->description, 100) }}</p>
                <a href="#" class="text-sm text-blue-500 mt-2 inline-block">View Details</a>
            </div>
        @empty
            <p class="text-gray-600">No jobs available at the moment. Please check back later.</p>
        @endforelse
    </div>

    <!-- Feedback Form -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">💬 Share Your Feedback</h2>
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <textarea name="feedback" rows="4" class="w-full p-3 border border-gray-300 rounded mb-3" placeholder="Write your feedback here..." required></textarea>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Submit Feedback</button>
        </form>
    </div>
</div>
@endsection

@endsection