@extends('websitelayout.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-4xl font-bold text-red-700 mb-4 text-center">Create a Blog Post</h1>
    <p class="mb-6 text-gray-700 text-center">Share your experiences, updates, and stories with fellow alumni.</p>

    <!-- Blog Submission Form -->
    <div class="bg-white shadow-lg rounded-lg p-6 border border-red-300 mb-6">
        <h2 class="text-xl font-semibold text-red-800 mb-4">Write a Blog</h2>
        <form action="{{ route('blogs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Title</label>
                <input type="text" name="title" class="w-full border-gray-300 rounded p-2" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Content</label>
                <textarea name="content" rows="5" class="w-full border-gray-300 rounded p-2" required></textarea>
            </div>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Post Blog</button>
        </form>
    </div>
</div>
@endsection
