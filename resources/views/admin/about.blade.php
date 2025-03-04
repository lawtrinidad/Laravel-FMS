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
                    <h3 class="fw-bold text-primary" id="pyutyur">THE FUTURE OF FILE SHARING AT PUP</h3>
                    <p class="text-muted" id="jusqpo">
                        <strong>IskoLAr</strong> (Iskolar Library and Archive) is a secure file repository system developed exclusively for the Polytechnic University of the Philippines (PUP) administration. Designed to streamline document management, IskoLAr provides a centralized platform for storing, organizing, and accessing institutional records, research archives, and administrative files. With robust security features and efficient categorization, it ensures data integrity, quick retrieval, and seamless collaboration among university staff. By enhancing digital record-keeping, IskoLAr supports PUP’s commitment to efficiency, organization, and academic excellence.
                    </p>
                </div>
            </div>

            <br>

            <!-- Meet the Creators Section -->
            <div class="mt-5 text-center" >
                <h3 class="fw-bold">MEET THE CREATORS</h3>
                <p class="text-muted" id="kratur">IskoLAr was developed by a team of passionate and skilled individuals dedicated to improving digital record management for PUP. Our team brings expertise in UI/UX design, software development, and system optimization, ensuring that IskoLAr is user-friendly, secure, and efficient.</p>
            </div>

            <!-- Scrollable Creators Container -->
            <div class="container text-center mt-4">
    <div class="row justify-content-center">
        @foreach($creators as $creator)
            <div class="col-6 col-md-4 col-lg-3 d-flex justify-content-center">
                <div class="card shadow-sm rounded text-center p-3 border gallery-card">
                    <!-- Circular Image -->
                    <div class="profile-container">
                        <img src="{{ asset($creator['img_src']) }}" 
                             alt="{{ $creator['name'] }}" 
                             class="profile-img">
                    </div>

                    <!-- Name & Role -->
                    <h5 class="mt-3 fw-bold">{{ $creator['name'] }}</h5>
                    <p class="text-muted small">{{ $creator['role'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>



            <p class="mt-4 text-center text-muted" id="ender">
            Together, we built IskoLAr with the goal of enhancing administrative efficiency and providing a reliable digital repository for PUP’s academic and institutional records. 🚀
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
            margin-top: 7%;
            width: 500px;
        }
        #pyutyur {
            color: brown;
            font-weight: 500;
        }
        #jusqpo {
            text-align: justify;
        
        }
        #kratur {
            margin: auto;
            width: 70%;

        }
        #ender{
            margin-top: 50px;
            margin-bottom: 100px;
        }

        .gallery-card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .gallery-card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .object-fit-cover {
        object-fit: cover;
    }

    .container {
    max-width: 1000px; /* Adjust as needed */
}

.gallery-card {
    margin-top: 50px;
    padding-top: 10px;
    width: 200px; /* Ensures consistent card size */
    min-height: 180px; /* Prevents uneven heights */
}

.profile-container {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    
    
}


.profile-img {
    
    width: 100%;
    height: 100%;
    object-fit: cover;
}


    </style>
@endsection
