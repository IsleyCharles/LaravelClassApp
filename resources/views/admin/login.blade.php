@extends('adminlayout.app')

@section('content')
<div class="max-w-md mx-auto p-6">
    <h1 class="text-2xl font-bold text-red-700 mb-4">Admin Login</h1>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="flex justify-between items-center">
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Login</button>
        </div>
    </form>
</div>
@endsection