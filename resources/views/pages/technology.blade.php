@extends('Shared.head')

@section('content')


        <!--  {Start IT - Development} -->

        <div class="service-4-cover">
        <section class="container contact-service-1  ">
            <div class="content-service1 text-start  ">
                <h1 class=" wow animate__animated animate__fadeInDown"> Technology</h1>
                <p class=" wow animate__animated animate__fadeInDown"> In today’s world, your digital presence is everything. Our web development team delivers top-tier
                    solutions from UI/UX to mobile apps.</p>
            </div>

        </section>


    </div>
        <!--  {End IT - Development} -->


    <!--  {Start Website & Digital Product Design} -->
    <div class="Cover_F-Section" id="Website">
        <section class="container  py-5">
            <div class="text-content-service1">
                <h1 class="wow animate__animated animate__fadeInDown"> Website & Digital Product Design</h1>
                <p class="wow animate__animated animate__fadeInDown"> Want a website that wows? Our dynamic web design and development team ensures your online
                    presence is as impressive as your business.</p>
            </div>


        </section>
        <div class="wrapper my-5">
            <div class="card-row">
                <div class="card-col text-center ">
                    <div class="card-box">
                        <h5 class="card-title">Website Development</h5>
                        <p class="card-text">We build websites that range from straightforward static pages to intricate web applications, all tailored to meet your specific needs and goals.</p>
                    </div>
                </div>
                <div class="card-col text-center">
                    <div class="card-box">
                        <h5 class="card-title">Responsive Design</h5>
                        <p class="card-text">We create web pages that adapt seamlessly to any screen size, ensuring they look great and work like a charm on all devices.</p>
                    </div>
                </div>
                <div class="card-col text-center">
                    <div class="card-box">
                        <h5 class="card-title">SEO</h5>
                        <p class="card-text">We keep your business on the up and up with SEO strategies that put you ahead in search rankings and attract the right crowd.</p>
                    </div>
                </div>
                <div class="card-col text-center">
                    <div class="card-box">
                        <h5 class="card-title">Custom Web System</h5>
                        <p class="card-text"> We build custom web systems tailored to your business needs, providing unique functionality and a seamless user experience. With our solutions, your vision will come to life.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center py-5">
            <img src="{{ asset('assets/images/web page-03.png') }}" class="wow animate__animated animate__zoomIn MC-IMAGE3">
        </div>
    </div>
<!--  {End Website & Digital Product Design} -->


    <!-- {Start Mobile App} -->
    <div class="cover-mobile-a py-5" id="Mobile-App">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="text-content-SERVICE3 col-lg-6 col-md-12 text-start">
                <h1 class="wow animate__animated animate__fadeInUp">Mobile App</h1>
                <p class="wow animate__animated animate__fadeInUp ">
                    With our mobile app solutions, you’ll have the tools you need to engage customers on the go, keeping
                    them connected to your brand.
                </p>
            </div>
             <!-- Image -->
             <div
             class="col-lg-6 col-md-12 mb-4 mb-lg-0 image-placeholder-C-P-P wow animate__animated animate__fadeInUp text-end">
             <img src="{{ asset('assets/images/web page-04.png') }}"
                 class="wow animate__animated animate__zoomIn img-fluid" alt="Commercial Photography">
         </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 feature-card-container text-center  w-auto">
                <div class="feature-card">
                    <h5 class="fw-bold">Cross-Platform Development</h5>
                    <p>Our team develops apps that run smoothly on both iOS and Android, maximizing reach and ensuring consistent performance across all devices. Your app will be ready to make its mark.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 feature-card-container text-center  w-auto">
                <div class="feature-card">
                    <h5 class="fw-bold">User-Centered Design</h5>
                    <p>We craft intuitive, user-friendly interfaces that ensure engaging and efficient experiences for your app’s users. Your app will hit the ground running and truly connect with its audience.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 feature-card-container text-center  w-auto">
                <div class="feature-card">
                    <h5 class="fw-bold">High Performance</h5>
                    <p>We fine-tune app performance using efficient data management and image compression, guaranteeing seamless and fast user interactions. Your app will be running like clockwork.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 feature-card-container text-center  w-auto">
                <div class="feature-card">
                    <h5 class="fw-bold">API</h5>
                    <p>We seamlessly integrate third-party APIs to enhance your app’s functionality, allowing your app to hit the ground running and go the extra mile.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- {End Mobile App} -->


      <!--{Start UI & UX design} -->

      <div class="py-5" id="UI-UX">
        <section class="container">
            <div class="text-content-service-ux-ui text-center">
                <h1 class="wow animate__animated animate__fadeInDown">UI & UX design</h1>
                <p class="wow animate__animated animate__fadeInDown">  Weelevate visual appeal and streamline navigation to ensure users can easily find their way around. With
                    our intuitive design, every interaction becomes a walk in the park!</p>
            </div>
            <div class="text-center ">
                <img src="{{ asset('assets/images/ux-ui.png') }}" class="wow animate__animated animate__zoomIn MC-IMAGE3" />
            </div>

        </section>
    </div>

<!--{End UI & UX design} -->


    @endsection
