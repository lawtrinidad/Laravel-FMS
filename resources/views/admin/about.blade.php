@extends('layouts.app') {{-- Extend your main layout --}}

@section('title', 'About IskoLAr') {{-- Set the page title --}}

@section('content')
<div class="container mx-auto p-6 bg-white shadow-lg rounded-lg mt-8 max-w-4xl">
    <!-- About Section -->
    <h1 class="text-3xl font-bold border-b-2 pb-2 mb-4">About</h1>

    <div class="flex flex-col md:flex-row gap-6">
        <div class="w-full md:w-1/2">
            <img src="{{ asset('images/pup_building.png') }}" alt="PUP Building" class="rounded-lg shadow-md">
        </div>

        <div class="w-full md:w-1/2">
            <h2 class="text-xl font-bold">THE FUTURE OF FILE SHARING AT PUP</h2>
            <p class="text-gray-700 mt-2">
                <strong>IskoLAr</strong> (Iskolar Library and Archive) is a secure file repository system developed exclusively for the Polytechnic University of the Philippines (PUP) administration. 
                Designed to streamline document management, IskoLAr provides a centralized platform for storing, organizing, and accessing institutional records, research archives, and administrative files.
            </p>
        </div>
    </div>

    <!-- Scrollable Creators Section -->
    <div class="mt-8">
        <h2 class="text-xl font-bold text-center">MEET THE CREATORS</h2>
        <p class="text-center text-gray-600">A team dedicated to improving digital record management for PUP.</p>

        <!-- Scrollable Container -->
        <div class="mt-6 overflow-y-auto max-h-60 border rounded-lg p-4 bg-gray-50">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-center">
                @foreach($creators as $creator)
                <div>
                    <div class="w-20 h-20 bg-gray-300 rounded-full mx-auto"></div>
                    <p class="font-semibold mt-2">{{ $creator['name'] }}</p>
                    <p class="text-sm text-gray-500">{{ $creator['role'] ?? 'No Role' }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <p class="mt-4 text-center text-gray-600">
            Together, we built IskoLAr to enhance administrative efficiency and provide a reliable digital repository for PUP.
        </p>
    </div>
</div>
@endsection
