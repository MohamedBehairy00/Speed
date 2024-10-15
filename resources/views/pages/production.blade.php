@extends('Shared.head')

@section('content')



        <!--{Start Production} -->

        <div class="service-3-cover">
            <section class="container contact-service-1  ">
                <div class="content-service1 text-start  ">
                    <h1 class=" wow animate__animated animate__fadeInDown"> Production</h1>
                    <p class=" wow animate__animated animate__fadeInDown">Bringing your ideas to life is what we do best. We blend creativity with professionalism to produce content that propels your brand forward.
                    </p>
                </div>

            </section>


        </div>

        <!--{End Production} -->


        <!-- {Start TV & Radio commercials} -->
        <div class="container body-TV py-5" id="Tv&R">
            <div class="row video-section">
                <div class="col-12 description-m-i text-center">
                    <h1 >TV & Radio commercials</h1>
                    <p >Our ads are more than just pretty visuals and spots —they tell stories that connect, using state-of-the-art gear in fully equipped studios to make it happen.
                    </p>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <div id="videoCarousel" class="carousel slide video-container" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe class="w-100 h-100"
                                   src="https://app.videas.fr/embed/media/720842a5-4240-4a48-b5bb-2d42e8a46ede/?autoplay=1&loop=1&controls=0"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen referrerpolicy="unsafe-url"></iframe>


                            </div>
                            <div class="carousel-item">
                                <iframe class="w-100 h-100"
                                    src="https://app.videas.fr/embed/media/d35bf4ab-255d-4daf-9b2d-5466576c6351/?autoplay=1&loop=1&controls=0"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen referrerpolicy="unsafe-url"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe class="w-100 h-100"
                                    src="https://app.videas.fr/embed/media/1ac4cc2a-b7cb-420c-a04d-82d15de57ab8/?autoplay=1&loop=1&controls=0"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen referrerpolicy="unsafe-url"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe class="w-100 h-100"
                                    src="https://app.videas.fr/embed/media/c4dfd7f0-6bd5-47b4-a20f-fc627aae1c9f/?autoplay=1&loop=1&controls=0"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen referrerpolicy="unsafe-url"></iframe>
                            </div>
                            
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- {End TV & Radio commercials} -->

        <!-- {Start Commercial Photography} -->
        <div class="Commercial-P container py-5" id="Commercial-photography">
            <div class="row align-items-center ">
                <!-- Text Content -->
                <div class="text-content-SERVICE3 col-lg-6 col-md-12 text-start">
                    <h1 class="wow animate__animated animate__fadeInUp">Commercial Photography</h1>
                    <p class="wow animate__animated animate__fadeInUp ">
                        We deliver high-quality images that speak to your audience, ensuring your message is captured with precision.

                    </p>

                </div>
                <!-- Image -->
                <div
                    class="col-lg-6 col-md-12 mb-4 mb-lg-0 image-placeholder-C-P-P wow animate__animated animate__fadeInUp text-end">
                    <img src="{{ asset('assets/images/website-speed2.png') }}"
                        class="wow animate__animated animate__zoomIn img-fluid" alt="Commercial Photography">
                </div>
            </div>
            <div class="text-center pt-4">
                <button id="open-gallery-button-DM" class="btn btn-danger ">See more </button>

                <div id="gallery-modal-DM" class="modal-button">
                    <div class="modal-content-button">
                        <span class="modal-close-button-DM">&times;</span>
                        <div id="image-container">
                            <img src="{{ asset('assets/images/selema.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/mosafer.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/superjet.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/selema.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/mosafer.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/superjet.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/selema.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/mosafer.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/superjet.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/selema.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/mosafer.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/superjet.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/selema.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/mosafer.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/superjet.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/selema.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/mosafer.png') }}" class="img-button">
                            <img src="{{ asset('assets/images/superjet.png') }}" class="img-button">
                            <!-- Add more images here as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- {End Commercial Photography} -->

        <!-- {Start Motion & Infographic videos }-->
        <div class="container section-tv-radio py-5" id="M&I&V">
            <div class="row video-wrapper">
                <div class="col-12 description-m-i text-center">
                    <h1>Motion & Infographic Videos</h1>
                    <p>  Turning complex data into fun, easy-to-digest videos is our forte. After all, communication is key.
                    </p>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <div id="videoCarousel" class="carousel slide video-container " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe class="w-100 h-100"
                                    src="https://app.videas.fr/embed/media/96f4d832-4533-4804-90e3-c3f5684e74a6/?autoplay=1&loop=1&controls=0"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen referrerpolicy="unsafe-url"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe class="w-100 h-100"
                                    src="https://app.videas.fr/embed/media/96f4d832-4533-4804-90e3-c3f5684e74a6/?autoplay=1&loop=1&controls=0"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen referrerpolicy="unsafe-url"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe class="w-100 h-100"
                                    src="https://app.videas.fr/embed/media/96f4d832-4533-4804-90e3-c3f5684e74a6/?autoplay=1&loop=1&controls=0"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen referrerpolicy="unsafe-url"></iframe>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- {End Motion & Infographic videos }-->


        <!-- { Start Podcasts} -->

        <div class="Cover_F-Section" id="Podcasts">
            <section class="container py-5">
                <div class="col-12 description-m-i text-center">
                    <h1>Podcasts</h1>
                    <p>  We create compelling content in podcast form, helping you reach a wider audience and leave a lasting impact.
                    </p>
                </div>

                <div class="text-center mx-auto">
                    <img src="{{ asset('assets/images/podcast-04.png') }}"
                    class="wow animate__animated animate__zoomIn img-fluid" width="70%"  >
                </div>
            </section>
        </div>
        <!-- { End Podcasts} -->
        <script>
            // Get modal and button elements
            const galleryModall = document.getElementById('gallery-modal-DM');
            const galleryBtnn = document.getElementById('open-gallery-button-DM');
            const galleryCloseBtnn = document.querySelector('.modal-close-button-DM');

            // Show the modal when the button is clicked
            galleryBtnn.addEventListener('click', function() {
                galleryModall.style.display = 'block';
            });

            // Close the modal when the close button is clicked
            galleryCloseBtnn.addEventListener('click', function() {
                galleryModall.style.display = 'none';
            });

            // Close the modal if the user clicks outside of the modal content
            window.addEventListener('click', function(event) {
                if (event.target === galleryModall) {
                    galleryModall.style.display = 'none';
                }
            });
        </script>

    @endsection
