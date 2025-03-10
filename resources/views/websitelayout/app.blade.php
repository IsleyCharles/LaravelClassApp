@extends('websitelayout.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-4xl font-bold text-red-700 mb-4 text-center">Welcome to the Alumni System</h1>
    <p class="mb-6 text-gray-700 text-center">
        Connect, network, and stay updated with your fellow alumni. Our system provides a platform for alumni to stay connected, share experiences, and grow together.
    </p>

    <!-- Add more content here as needed -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Example content blocks -->
        <div class="bg-white shadow-lg rounded-lg p-6 border border-red-300 transition-transform transform hover:scale-105">
            <h5 class="text-xl font-semibold text-red-800">Events</h5>
            <p class="text-gray-700 mt-2">Stay updated with upcoming alumni events and reunions.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 border border-red-300 transition-transform transform hover:scale-105">
            <h5 class="text-xl font-semibold text-red-800">Networking</h5>
            <p class="text-gray-700 mt-2">Connect with alumni from various industries and fields.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 border border-red-300 transition-transform transform hover:scale-105">
            <h5 class="text-xl font-semibold text-red-800">Resources</h5>
            <p class="text-gray-700 mt-2">Access exclusive resources and career opportunities.</p>
        </div>
    </div>
</div>
@endsection