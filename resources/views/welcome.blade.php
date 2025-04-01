@extends('websitelayout.app')

@section('content')

<!-- Hero Section with Image Carousel -->
<section x-data="{ currentSlide: 1 }" class="relative">
    <div class="relative w-full h-[450px] overflow-hidden">
        <!-- Carousel Images -->
        <div class="absolute inset-0 transition-all duration-700" :class="currentSlide === 1 ? 'opacity-100' : 'opacity-0'">
            <img src="{{ asset('images/alumni1.jpg') }}" alt="Alumni Event 1" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 transition-all duration-700" :class="currentSlide === 2 ? 'opacity-100' : 'opacity-0'">
            <img src="{{ asset('images/alumni2.jpg') }}" alt="Alumni Event 2" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 transition-all duration-700" :class="currentSlide === 3 ? 'opacity-100' : 'opacity-0'">
            <img src="{{ asset('images/alumni3.jpg') }}" alt="Alumni Event 3" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- Overlay Text -->
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white bg-black bg-opacity-50">
        <h1 class="text-5xl font-bold">Welcome to the Alumni System</h1>
        <p class="text-lg mt-2">Reconnect, share experiences, and grow together.</p>
        <a href="{{ url('/register') }}" class="mt-4 bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-800 transition">Join Us Today</a>
    </div>

    <!-- Carousel Controls -->
    <div class="absolute inset-x-0 bottom-4 flex justify-center space-x-2">
        <button @click="currentSlide = 1" class="w-3 h-3 rounded-full bg-white" :class="{ 'bg-red-600': currentSlide === 1 }"></button>
        <button @click="currentSlide = 2" class="w-3 h-3 rounded-full bg-white" :class="{ 'bg-red-600': currentSlide === 2 }"></button>
        <button @click="currentSlide = 3" class="w-3 h-3 rounded-full bg-white" :class="{ 'bg-red-600': currentSlide === 3 }"></button>
    </div>
</section>

<!-- Features Section -->
<section class="max-w-6xl mx-auto py-12 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
    <div class="bg-white p-6 shadow-lg rounded-lg border border-red-300 hover:scale-105 transition">
        <h3 class="text-xl font-semibold text-red-800">Networking</h3>
        <p class="text-gray-700 mt-2">Connect with alumni across various industries.</p>
    </div>
    <div class="bg-white p-6 shadow-lg rounded-lg border border-red-300 hover:scale-105 transition">
        <h3 class="text-xl font-semibold text-red-800">Events</h3>
        <p class="text-gray-700 mt-2">Stay updated with upcoming alumni events and reunions.</p>
    </div>
    <div class="bg-white p-6 shadow-lg rounded-lg border border-red-300 hover:scale-105 transition">
        <h3 class="text-xl font-semibold text-red-800">Career Opportunities</h3>
        <p class="text-gray-700 mt-2">Access job listings and mentorship programs.</p>
    </div>
</section>

<!-- Call to Action -->
<section class="text-center py-12 bg-gradient-to-r from-gray-200 to-gray-300">
    <h2 class="text-3xl font-bold text-red-700">Join Our Growing Alumni Network</h2>
    <p class="text-gray-700 mt-2">Be part of a vibrant and supportive community.</p>
    <a href="{{ url('/register') }}" class="mt-6 inline-block bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-700 transition">Sign Up Now</a>
</section>

<!-- Footer with Social Media Links -->
<footer class="bg-gray-900 text-white py-6">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center">
        <p class="text-sm">&copy; {{ date('Y') }} Alumni System. All Rights Reserved.</p>
        <div class="flex space-x-4">
            <a href="#" class="hover:text-red-500">
                <i class="fab fa-facebook fa-lg"></i>
            </a>
            <a href="#" class="hover:text-red-500">
                <i class="fab fa-twitter fa-lg"></i>
            </a>
            <a href="#" class="hover:text-red-500">
                <i class="fab fa-linkedin fa-lg"></i>
            </a>
            <a href="#" class="hover:text-red-500">
                <i class="fab fa-instagram fa-lg"></i>
            </a>
        </div>
    </div>
</footer>

<!-- Font Awesome for Social Icons -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

<!-- Alpine.js for Carousel -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

@endsection
