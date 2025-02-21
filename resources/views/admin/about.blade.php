@extends('layouts.app')

@section('content')
    <div class="content-container" style="height: 100vh; overflow-y: auto; padding-right: 15px;">
        <div class="container mt-5" style="font-family: 'Raleway', sans-serif;">
            <!-- About Section -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">About IskoLAr</h2>
            </div>
            <hr style="height: 2px; background-color: gray; width: 100%">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/about.png') }}" alt="PUP Building" class="aboutpic">
                </div>
                <div class="col-md-6" id="Iskoliosis">
                    <h3 class="fw-bold text-primary">The Future of File Sharing at PUP</h3>
                    <p class="text-muted">
                        <strong>IskoLAr</strong> (Iskolar Library and Archive) is a secure file repository system developed exclusively for the Polytechnic University of the Philippines (PUP) administration. Designed to streamline document management, IskoLAr provides a centralized platform for storing, organizing, and accessing institutional records, research archives, and administrative files. With robust security features and efficient categorization, it ensures data integrity, quick retrieval, and seamless collaboration among university staff. By enhancing digital record-keeping, IskoLAr supports PUP’s commitment to efficiency, organization, and academic excellence.
                    </p>
                </div>
            </div>

            <!-- Meet the Creators Section -->
            <div class="mt-5 text-center">
                <h3 class="fw-bold">Meet the Creators</h3>
                <p class="text-muted">A dedicated team improving digital record management for PUP.</p>
            </div>

            <!-- Scrollable Creators Container -->
            <div class="mt-4 d-flex flex-wrap justify-content-center gap-4 overflow-auto p-3 border rounded" style="max-height: 350px;">
                @foreach($creators as $creator)
                    <div class="card shadow-sm rounded text-center p-3" style="width: 220px; font-family: 'Raleway', sans-serif;">
                        <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 70px; height: 70px;">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5 class="mt-3 fw-bold">{{ $creator['name'] }}</h5>
                        <p class="text-muted">{{ $creator['role'] ?? 'Contributor' }}</p>
                    </div>
                @endforeach
            </div>

            <p class="mt-4 text-center text-muted">
                Together, we built IskoLAr to enhance administrative efficiency and provide a reliable digital repository for PUP.
            </p>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap');

        html, body {
            height: 100vh;
            overflow: hidden;
            font-family: 'Raleway', sans-serif;
        }

        .card {
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }

        .aboutpic {
            width:90%;
            margin-left: 10%;
        }

        /* Ensure only content inside the main section is scrollable */
        .content-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow-y: auto;
            padding: 20px;
        }

        #Iskoliosis{
            margin-top: 50%;
        }
    </style>
@endsection
