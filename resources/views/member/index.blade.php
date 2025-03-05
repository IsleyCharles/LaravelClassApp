@extends('adminlayout.app')

@section('content')
@if (session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
    {{ session('success') }}
</div>
@endif

<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Members Page</h1>

    <button class="bg-amber-400 px-4 py-2 rounded-md text-white">
        <a href="{{ route('members.create') }}">Create Member</a>
    </button>

    <p class="mb-6 text-gray-600">Welcome to the Alumni System! Connect, network, and stay updated with your fellow alumni.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($members as $member)
        <div class="p-4 border rounded-lg shadow-md bg-white">
            <h5 class="text-lg font-semibold">{{ $member->name }}</h5>
            <p class="text-gray-500">{{ $member->email }}</p>
            <p class="text-gray-700">{{ $member->bio }}</p>

            <div class="mt-3 flex space-x-2">
                <a href="{{ route('members.edit', $member->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md">Edit</a>

                <form action="{{ route('members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
