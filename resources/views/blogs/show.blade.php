@extends('websitelayout.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-4xl font-bold text-red-700 mb-4">{{ $blog->title }}</h1>
    <p class="text-gray-600 text-sm mb-4">By {{ $blog->author->name ?? 'Unknown' }} • {{ $blog->created_at->format('M d, Y') }}</p>
    <div class="text-gray-700 leading-relaxed">
        {!! nl2br(e($blog->content)) !!}
    </div>
    <a href="{{ route('blogs.index') }}" class="text-red-600 font-semibold hover:underline mt-6 block">Back to Blogs</a>
</div>
@endsection