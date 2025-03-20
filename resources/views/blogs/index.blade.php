@extends('websitelayout.app')

@section('content')

<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-4xl font-bold text-red-700 mb-4 text-center">Alumni Blogs</h1>
    <p class="mb-6 text-gray-700 text-center">Read inspiring stories and updates from fellow alumni.</p>

    <!-- Button to Create a Blog -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('blogs.create') }}" class="bg-red-600 text-white px-4 py-2 rounded shadow hover:bg-red-700 transition">
                + New Blog
            </a>
        </div>

    <!-- Blog List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($blogs as $blog)
            <div class="bg-white shadow-lg rounded-lg p-6 border border-red-300 transition-transform transform hover:scale-105">
                <h2 class="text-xl font-semibold text-red-800">{{ $blog->title }}</h2>
                <p class="text-gray-600 text-sm">By {{ $blog->author->name }} • {{ $blog->created_at->format('M d, Y') }}</p>
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
