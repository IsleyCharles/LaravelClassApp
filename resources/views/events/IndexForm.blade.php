@extends('websitelayout.app')

@section('content')

<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-bold text-red-700 mb-4 text-center">Events Page</h1>

    <!-- Receive session message -->
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    @if(auth()->check() && auth()->user()->is_admin)
    <a href="{{ route('events.create') }}" class="inline-block mb-5">
        <button class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 transition">Create an event</button>
    </a>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($events as $event)
        <div class="bg-white shadow-lg rounded-lg p-6 border border-red-300 transition-transform transform hover:scale-105">
            <h5 class="text-xl font-semibold text-red-800">{{ $event->title }}</h5>
            <p class="text-gray-700 mt-2"><strong>Location:</strong> {{ $event->location }}</p>
            <p class="text-gray-600 text-sm">Event ID: {{ $event->id }}</p>
            @if(auth()->check())
                <p>
                    <a href="{{ route('events.show', $event->id) }}" class="text-red-600 font-semibold hover:underline">View Details</a>
                </p>
            @else
                <p>
                    <a href="{{ route('login') }}" class="text-red-600 font-semibold hover:underline">Login to see more</a>
                </p>
            @endif
        </div>
        @endforeach
    </div>
</div>

@endsection