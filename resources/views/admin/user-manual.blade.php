@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold">User Manual</h1>

    <div class="mt-6">
        <h2 class="text-2xl font-bold">Section 1</h2>
        <p class="text-gray-700 mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <div class="mt-6 flex flex-col md:flex-row items-center gap-6">
        <!-- Image -->
        <div class="w-full md:w-1/2">
            <img src="{{ asset('images/user-manual.png') }}" alt="User Manual" class="rounded-lg shadow-md">
        </div>

        <!-- Features List -->
        <div class="w-full md:w-1/2">
            <ul class="list-disc ml-6 text-gray-800">
                <li><strong>Feature</strong></li>
                <li><strong>Feature</strong></li>
            </ul>
            <p class="mt-4 font-semibold">Feature > Step 1 > Function</p>
            <p class="text-gray-600">subtext if needed</p>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="mt-8 flex justify-between">
        <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md">Previous</button>
        <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md">Next</button>
    </div>
</div>
@endsection
