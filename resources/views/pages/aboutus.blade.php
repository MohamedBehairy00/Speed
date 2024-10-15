@extends('Shared.head')

@section('content')
    <div class="aboutus-cover">

        {{-- Start Header Paragrapgh --}}

        <section class="container contact-aboutus  wow animate__animated animate__zoomIn">
            <h1 class="CONTACTUS-about">About Us</h1>
            <p class="breadcrumb-about">Home &rarr; ABOUT</p>
        </section>

        {{-- End Header Paragrapgh --}}

    </div>


    <!-- End Header -->


    {{-- Start OUR AGENCY --}}

    <div class="body-about-content0 p-5">
        <section class="agency container wow animate__animated animate__zoomIn">
            <h1 class="bebas-neue-regular">OUR AGENCY</h1>
            <div class="Pabout">
                <p class="Ppabout">OUR JOURNEY BEGAN IN 2002, SINCE THEN, WE'VE
                    GROWN INTO A POWERHOUSE OF EXPERTISE IN ADVERTISING, EXPERIENCE, MEDIA, PUBLIC RELATIONS, SOCIAL
                    MEDIA, INFLUENCE, AND CONSULTING.</p>
            </div>
            <div class="stats d-flex justify-content-around wow animate__animated animate__zoomIn">
                <div class="stat-item">
                    <div class="MOBILEVIEW">
                        <h2 class="counter" id="employees">0</h2>
                        <img src="{{ asset('assets/images/Plus.png') }}" alt="Plus" class="Plus">
                    </div>
                    <p>Employees</p>
                </div>
                <div class="stat-item">
                    <div class="MOBILEVIEW2">
                        <h2 class="counter h2Mobileview2" id="experience">0</h2>
                        <img src="{{ asset('assets/images/Plus.png') }}" alt="Plus" class="Plus2">
                    </div>
                    <p>Years Experience</p>
                </div>
                <div class="stat-item">
                    <div class="MOBILEVIEW3">
                        <h2 class="counter h3Mobileview3" id="clients">0</h2>
                        <img src="{{ asset('assets/images/Plus.png') }}" alt="Plus" class="Plus3">
                    </div>
                    <p>HAPPY CLIENTS</p>
                </div>
            </div>
        </section>
    </div>

    {{-- End OUR AGENCY --}}

    {{-- Start mission & VISION --}}

    <section class=" container">
        <div class="mission wow animate__animated animate__zoomIn ">
            <h1 class="bebas-neue-regular">OUR MISSION</h1>
            <p>We’re here to empower your business in the digital age with data-driven solutions that drive results. Our mission is simple: help you grow, stay competitive, and thrive.
            </p>
        </div>
    </section>

    <section class=" container d-flex justify-content-between Vision2">
        <div class="vision wow animate__animated animate__zoomIn ">
            <h1 class="bebas-neue-regular">OUR VISION</h1>
            <p>We aim to be the best at what we do—achieving extraordinary results for our clients through creative execution, strategic planning, and a relentless commitment to success.</p>
        </div>
        <img src="{{ asset('assets/images/c-hair.png') }}" alt="Vision Icon"
            class="vision-icon wow animate__animated animate__zoomIn">
    </section>
    </div>
    {{-- End mission & VISION --}}

    <div class="container py-5">
        <h1 class="row mx-auto ouer-sis-h1 py-5">OUR SISTER COMPANIES</h1>
        <div class="row imges-sis-company">
            <img src="{{ asset('assets/images/sisters logos-10.png') }}" alt="Vision Icon"
                class=" wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/images/sisters logos-11.png') }}" alt="Vision Icon"
                class=" wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/images/sisters logos-12.png') }}" alt="Vision Icon"
                class=" wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/images/sisters logos-13.png') }}" alt="Vision Icon"
                class=" wow animate__animated animate__zoomIn">
            <img src="{{ asset('assets/images/sisters logos-14.png') }}" alt="Vision Icon"
                class=" wow animate__animated animate__zoomIn">

        </div>
    </div>
@endsection
