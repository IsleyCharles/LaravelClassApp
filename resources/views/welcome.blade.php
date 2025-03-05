@extends('websitelayout.app')

@section('content')

<h1 class="text-3xl font-bold mb-4"> Our Members</h1>
<p class="mb-6 text-gray-700">Welcome to the Alumni System! Connect, network, and stay updated with your fellow alumni.</p>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($members as $member)
        <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
            <h5 class="text-xl font-semibold text-gray-900">{{ $member->name }}</h5>
            <h4 class="text-gray-600">{{ $member->email }}</h4>
            <p class="text-gray-700 mt-2">{{ $member->bio }}</p>
        </div>
    @endforeach
</div>

{{ $members->links() }}
@endsection