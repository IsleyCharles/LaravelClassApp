@extends('adminlayout.app')

@section('content')
<!-- Content Area -->
<div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 shadow-lg rounded-lg border-l-8 border-red-600 transition-transform transform hover:scale-105">
        <h3 class="text-lg font-semibold text-red-700">Total Members</h3>
        <p class="text-3xl font-bold text-gray-800">{{ $totalmembers }}</p>
    </div>
    
    <div class="bg-white p-6 shadow-lg rounded-lg border-l-8 border-red-600 transition-transform transform hover:scale-105">
        <h3 class="text-lg font-semibold text-red-700">Active Sessions</h3>
        <p class="text-3xl font-bold text-gray-800">456</p>
    </div>
    
    <div class="bg-white p-6 shadow-lg rounded-lg border-l-8 border-red-600 transition-transform transform hover:scale-105">
        <h3 class="text-lg font-semibold text-red-700">Revenue</h3>
        <p class="text-3xl font-bold text-gray-800">$12,345</p>
    </div>
</div>
@endsection
