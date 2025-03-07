@extends('websitelayout.app')

@section('content')

<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-4xl font-bold text-red-700 mb-4 text-center">Our Members</h1>
    <p class="mb-6 text-gray-700 text-center">
        Welcome to the <span class="text-red-600 font-semibold">Alumni System!</span> Connect, network, and stay updated with your fellow alumni.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($members as $member)
            <div class="bg-white shadow-lg rounded-lg p-6 border border-red-300 transition-transform transform hover:scale-105">
                <h5 class="text-xl font-semibold text-red-800">{{ $member->name }}</h5>
                <h4 class="text-gray-600">{{ $member->email }}</h4>
                <p class="text-gray-700 mt-2">{{ $member->bio }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-6 flex justify-center">
        {{ $members->links() }}
    </div>
</div>

@endsection
