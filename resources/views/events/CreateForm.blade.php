@extends('websitelayout.app')

@section('content')

<div class="container mt-4">
    <h1 class="text-2xl font-bold text-red-700 mb-4 text-center">Create Event</h1>

    <form action="{{ route('events.store') }}" method="POST" class="max-w-md mx-auto p-6 bg-white shadow-md rounded">
        @csrf 
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Enter Post Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded" required>
            @error('title')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="location" class="block text-gray-700">Enter Location</label>
            <input type="text" name="location" id="location" class="w-full p-2 border border-gray-300 rounded" required>
            @error('location')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 transition">Create Event</button>
    </form>
</div>

@endsection