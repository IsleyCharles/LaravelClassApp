@extends('adminlayout.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Add New Member</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        @method('PATCH')
        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                Name
            </label>
            <input type="text" id="name" name="name" value="{{ old('name', $member->name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                Email
            </label>
            <input type="email" id="email" name="email" value="{{ old('email', $member->email) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
        </div>

        <!-- Graduation Year -->
        <div class="mb-4">
            <label for="graduation_year" class="block text-gray-700 text-sm font-bold mb-2">
                Graduation Year
            </label>
            <input type="number" id="graduation_year" name="graduation_year" value="{{ old('graduation_year', $member->graduation_year) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <!-- Bio -->
        <div class="mb-6">
            <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">
                Bio
            </label>
            <textarea id="bio" name="bio" placeholder="{{ old('bio', $member->bio) }}" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Save Member
            </button>
        </div>
    </form>
</div>
@endsection
