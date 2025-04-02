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
@endsection