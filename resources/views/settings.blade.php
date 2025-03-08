@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 shadow-lg rounded-lg border border-red-300 mt-10">
    <h2 class="text-2xl font-bold text-center text-red-700 mb-6">Settings</h2>

    <!-- Update Profile Form -->
    <form method="POST" action="{{ route('settings.updateProfile') }}" class="mb-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-red-700 font-semibold">Name</label>
            <input id="name" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500 rounded-lg p-2" 
                   type="text" name="name" value="{{ auth()->user()->name }}" required />
        </div>

        <div class="mt-4">
            <label for="email" class="block text-red-700 font-semibold">Email</label>
            <input id="email" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500 rounded-lg p-2" 
                   type="email" name="email" value="{{ auth()->user()->email }}" required />
        </div>

        <button type="submit" class="mt-4 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg w-full">
            Update Profile
        </button>
    </form>

    <!-- Change Password Form -->
    <form method="POST" action="{{ route('settings.updatePassword') }}" class="mb-6">
        @csrf
        @method('PUT')

        <div>
            <label for="current_password" class="block text-red-700 font-semibold">Current Password</label>
            <input id="current_password" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500 rounded-lg p-2"
                   type="password" name="current_password" required />
        </div>

        <div class="mt-4">
            <label for="new_password" class="block text-red-700 font-semibold">New Password</label>
            <input id="new_password" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500 rounded-lg p-2"
                   type="password" name="new_password" required />
        </div>

        <div class="mt-4">
            <label for="new_password_confirmation" class="block text-red-700 font-semibold">Confirm New Password</label>
            <input id="new_password_confirmation" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500 rounded-lg p-2"
                   type="password" name="new_password_confirmation" required />
        </div>

        <button type="submit" class="mt-4 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg w-full">
            Change Password
        </button>
    </form>

    <!-- Delete Profile -->
    <form method="POST" action="{{ route('settings.deleteProfile') }}" onsubmit="return confirm('Are you sure you want to delete your account? This action is irreversible.');">
        @csrf
        @method('DELETE')

        <button type="submit" class="mt-4 bg-red-800 hover:bg-red-900 text-white px-4 py-2 rounded-lg w-full">
            Delete Account
        </button>
    </form>
</div>
@endsection
