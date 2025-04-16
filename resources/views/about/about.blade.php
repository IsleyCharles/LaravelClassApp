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
    <h1 class="text-4xl font-bold text-red-700 mb-4 text-center">About Us</h1>
    <p class="text-gray-700 text-center mb-8">
        Welcome to the official alumni network! Our mission is to keep graduates connected and provide career, networking, and educational opportunities.
    </p>

    <!-- Mission & Vision -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-6 border border-gray-300">
        <h2 class="text-2xl font-semibold text-red-800 mb-2">Our Mission</h2>
        <p class="text-gray-600">To foster lifelong connections, professional growth, and a thriving alumni community that supports and inspires one another.</p>
    </div>

    <!-- History -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-6 border border-gray-300">
        <h2 class="text-2xl font-semibold text-red-800 mb-2">Our History</h2>
        <p class="text-gray-600">
            Since our founding in [Year], our alumni network has grown from a small community of graduates into a global network supporting thousands of former students.
        </p>
    </div>

    <!-- What We Offer -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        @foreach([
            ['title' => 'Networking', 'desc' => 'Connect with fellow graduates, mentors, and industry leaders.', 'icon' => 'users'],
            ['title' => 'Career Support', 'desc' => 'Access job listings, internships, and mentorship programs.', 'icon' => 'briefcase'],
            ['title' => 'Events & Reunions', 'desc' => 'Join alumni meetups, reunions, and webinars.', 'icon' => 'calendar'],
            ['title' => 'Learning & Development', 'desc' => 'Enroll in online courses, research groups, and certification programs.', 'icon' => 'book'],
            ['title' => 'Scholarships & Funding', 'desc' => 'Explore grants, funding opportunities, and financial aid.', 'icon' => 'dollar-sign'],
            ['title' => 'Giving Back', 'desc' => 'Mentor students, volunteer, or contribute to alumni projects.', 'icon' => 'heart'],
        ] as $offer)
        <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-300 transition-transform transform hover:scale-105">
            <div class="flex items-center mb-4">
                <i class="fas fa-{{ $offer['icon'] }} text-red-600 text-2xl"></i>
                <h3 class="text-lg font-semibold text-gray-800 ml-2">{{ $offer['title'] }}</h3>
            </div>
            <p class="text-gray-600">{{ $offer['desc'] }}</p>
        </div>
        @endforeach
    </div>

      <!-- Feedback Section -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-bold text-red-700 mb-4">What Alumni Say</h2>
        @forelse($feedbacks as $feedback)
            <blockquote class="italic text-gray-600 mb-4">
                "{{ $feedback->content }}"
            </blockquote>
            <p class="text-gray-800 font-semibold">
                – {{ $feedback->user->name ?? 'Anonymous' }}
            </p>
        @empty
            <p class="text-gray-600">No feedback available at the moment.</p>
        @endforelse
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <textarea name="feedback" rows="4" class="w-full p-3 border border-gray-300 rounded mb-3" placeholder="Write your feedback here..." required></textarea>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Submit Feedback</button>
        </form>
    </div>
  
    <!-- Call to Action -->
    <div class="text-center">
        <a href="{{ route('register') }}" class="bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-700 transition text-lg font-semibold">
            Join Our Alumni Network
        </a>
    </div>
</div>
@endsection
