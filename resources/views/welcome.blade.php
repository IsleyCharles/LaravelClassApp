@extends('websitelayout.app')

@section('content')

<!-- Navigation Bar -->
<nav class="bg-red-600 text-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <a href="{{ url('/') }}" class="text-2xl font-bold">Alumni System</a>
            <div class="hidden md:flex space-x-6">
                <a href="{{ url('/') }}" class="hover:underline">Home</a>
                <a href="{{ route('blogs.index') }}" class="text-white hover:text-red-300">Blogs</a>
                <a href="{{ url('/events') }}" class="hover:underline">Events</a>
                <a href="{{ url('/resources') }}" class="hover:underline">Resources</a>
                <a href="{{ url('/about') }}" class="hover:underline">About</a>
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('redirect') }}" class="hover:underline">Login</a>
                <a href="{{ route('register') }}" class="bg-white text-red-600 px-4 py-2 rounded shadow hover:bg-red-200 transition">Register</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<header class="bg-gray-100 py-20 text-center">
    <h1 class="text-5xl font-bold text-red-700">Welcome to the Alumni System</h1>
    <p class="text-gray-700 mt-4">Reconnect, share experiences, and grow together.</p>
    <a href="{{ url('/register') }}" class="mt-6 inline-block bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-700 transition">Join Us Today</a>
</header>

<!-- Features Section -->
<section class="max-w-6xl mx-auto py-12 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
    <div class="bg-white p-6 shadow-lg rounded-lg border border-red-300">
        <h3 class="text-xl font-semibold text-red-800">Networking</h3>
        <p class="text-gray-700 mt-2">Connect with alumni across various industries.</p>
    </div>
    <div class="bg-white p-6 shadow-lg rounded-lg border border-red-300">
        <h3 class="text-xl font-semibold text-red-800">Events</h3>
        <p class="text-gray-700 mt-2">Stay updated with upcoming alumni events and reunions.</p>
    </div>
    <div class="bg-white p-6 shadow-lg rounded-lg border border-red-300">
        <h3 class="text-xl font-semibold text-red-800">Career Opportunities</h3>
        <p class="text-gray-700 mt-2">Access job listings and mentorship programs.</p>
    </div>
</section>

<!-- Call to Action -->
<section class="text-center py-12 bg-gray-200">
    <h2 class="text-3xl font-bold text-red-700">Join Our Growing Alumni Network</h2>
    <p class="text-gray-700 mt-2">Be part of a vibrant and supportive community.</p>
    <a href="{{ url('/register') }}" class="mt-6 inline-block bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-700 transition">Sign Up Now</a>
</section>

@endsection
