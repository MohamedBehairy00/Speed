@extends('Shared.head')

@section('content')
    {{-- Start MARKETING --}}

    <div class="service-1-cover">

        <section class="container contact-service-1  ">
            <div class="content-service1 text-start  ">
                <h1 class=" wow animate__animated animate__fadeInDown ">MARKETING</h1>
                <p class=" wow animate__animated animate__fadeInDown">Your brand’s presence deserves a plan as unique as it is. As a master in marketing strategy, we’re here to boost your brand’s value and visibility.
                </p>
            </div>

        </section>


    </div>

    {{-- End MARKETING --}}



    {{-- Start  Marketing-consultancy --}}

    <div class="container py-5 " id="Marketing-consultancy">
        <div class="text-content-service1">
            <h1 class="wow animate__animated animate__fadeInDown">Marketing consultancy</h1>
            <p class="wow animate__animated animate__fadeInDown">  Our industry expertise is at your service, ensuring your business thrives and grows with smart, data-driven strategies.</p>

        </div>
        <div class="text-center">
            <img src="{{ asset('assets/images/marketing-02.png') }}" class="wow animate__animated animate__zoomIn MC-IMAGE">
        </div>



    </div>

    <div class="text-center py-5 ">
        <button id="open-gallery-button" class="btn btn-danger py-2 ">See more </button>

        <div id="gallery-modal" class="modal-button">
            <div class="modal-content-button">
                <span class="modal-close-button">&times;</span>
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
    {{-- End  Marketing-consultancy --}}





    <!-- {Start Digital Marketing} -->
  <div id="Digital-Marketing">
        <div class="container">
            <div class="text-center mx-auto Events-S wow animate__animated animate__zoomIn text-start">
                <div class="row">
                    <h2 class="header_social-m">Digital Marketing</h2>
                </div>

                <div class="row mt-4">
                    <span class="col-12 p_social-m">   We leverage online platforms to deploy effective marketing strategies that connect with your audience, turning browsers into loyal customers.

                </div>
            </div>
        </div>
        <div class="row justify-content-around Social-Media-Divs">
            <!-- Selema -->
            <div class="work-item-social-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 wow animate__animated animate__zoomIn mb-4">
                <img src="{{ asset('assets/images/Selema-.png') }}" alt="Work 1" class="img-fluid work-item-image">
                <div class="overlay-social-Selema"></div>
                <div class="work-description-Social">
                    <h3 class="FONT_HEADER-Social"> Selema Gold</h3>
                    <p class="FONT-social">Putting and Implementing the whole digital marketing strategy and
                        plan for Selema Gold</p>
                </div>
            </div>
            <!-- Work Item 2 -->
            <div class="work-item-social-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 wow animate__animated animate__zoomIn mb-4">
                <img src="{{ asset('assets/images/Super-jet.png') }}" alt="Work 2" class="img-fluid work-item-image">
                <div class="overlay-social-Super-jet"></div>
                <div class="work-description-Social">
                    <h3 class="FONT_HEADER-Social">Super Jet</h3>
                    <p class="FONT-social">Developing a website for Superjet transportation Company to facilitate the
                        service</p>
                </div>
            </div>
            <!-- Work Item 3 -->
            <div class="work-item-social-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 wow animate__animated animate__zoomIn mb-4">
                <img src="{{ asset('assets/images/Starky.png') }}" alt="Work 3" class="img-fluid work-item-image">
                <div class="overlay-social-Starky"></div>
                <div class="work-description-Social">
                    <h3 class="FONT_HEADER-Social">Project 3</h3>
                    <p class="FONT-social">Putting and implementing the whole digital marketing strategy and plan for Selema
                        Gold</p>
                </div>
            </div>
            <!-- Work Item 4 -->
            <div class="work-item-social-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 wow animate__animated animate__zoomIn mb-4">
                <img src="{{ asset('assets/images/gastec.png') }}" alt="Work 4" class="img-fluid work-item-image">
                <div class="overlay-social-gastec"></div>
                <div class="work-description-Social">
                    <h3 class="FONT_HEADER-Social">Project 4</h3>
                    <p class="FONT-social">Putting and implementing the whole digital marketing strategy and plan for Selema
                        Gold</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-around Social-Media-Divs">
            <!-- Selema -->
            <div class="work-item-social-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 wow animate__animated animate__zoomIn mb-4">
                <img src="{{ asset('assets/images/Selema-.png') }}" alt="Work 1" class="img-fluid work-item-image">
                <div class="overlay-social-Selema"></div>
                <div class="work-description-Social">
                    <h3 class="FONT_HEADER-Social"> Selema Gold</h3>
                    <p class="FONT-social">Putting and Implementing the whole digital marketing strategy and
                        plan for Selema Gold</p>
                </div>
            </div>
            <!-- Work Item 2 -->
            <div class="work-item-social-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 wow animate__animated animate__zoomIn mb-4">
                <img src="{{ asset('assets/images/Super-jet.png') }}" alt="Work 2" class="img-fluid work-item-image">
                <div class="overlay-social-Super-jet"></div>
                <div class="work-description-Social">
                    <h3 class="FONT_HEADER-Social">Super Jet</h3>
                    <p class="FONT-social">Developing a website for Superjet transportation Company to facilitate the
                        service</p>
                </div>
            </div>
            <!-- Work Item 3 -->
            <div class="work-item-social-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 wow animate__animated animate__zoomIn mb-4">
                <img src="{{ asset('assets/images/Starky.png') }}" alt="Work 3" class="img-fluid work-item-image">
                <div class="overlay-social-Starky"></div>
                <div class="work-description-Social">
                    <h3 class="FONT_HEADER-Social">Project 3</h3>
                    <p class="FONT-social">Putting and implementing the whole digital marketing strategy and plan for Selema
                        Gold</p>
                </div>
            </div>
            <!-- Work Item 4 -->
            <div class="work-item-social-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 wow animate__animated animate__zoomIn mb-4">
                <img src="{{ asset('assets/images/gastec.png') }}" alt="Work 4" class="img-fluid work-item-image">
                <div class="overlay-social-gastec"></div>
                <div class="work-description-Social">
                    <h3 class="FONT_HEADER-Social">Project 4</h3>
                    <p class="FONT-social">Putting and implementing the whole digital marketing strategy and plan for Selema
                        Gold</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center py-5 ">
        <button id="open-gallery-button-DM" class="btn btn-danger py-2 ">See more </button>

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

    <!-- {End Digital Marketing} -->






    <!-- Start Events Services-->
    <div class="body-Events-Services" id="Event-Solutions">
        <div class="container p-1">
            <div class="text-center  Events-S wow animate__animated animate__zoomIn">
                <h2 class="header_social-m">Event Solutions</h2>
                <div class="row mt-4">
                    <span class="col-12 p_social-m">We bring the 'wow' factor to your events. With strategic planning, creativity, and flawless execution, we make sure no detail is overlooked.

                </div>
            </div>


            <div class="container my-4">
                <div class="row g-3">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card-ev text-center">
                            <img src="{{ asset('assets/images/branding page-07.png') }}" class="card-img-top image-ev" alt="Almosafer 1">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card-ev text-center">
                            <img src="{{ asset('assets/images/branding page-08.png') }}" class="card-img-top image-ev" alt="Almosafer 2">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card-ev text-center">
                            <img src="{{ asset('assets/images/branding page-09.png') }}" class="card-img-top image-ev" alt="Almosafer 3">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card-ev text-center">
                            <img src="{{ asset('assets/images/branding page-10.png') }}" class="card-img-top image-ev" alt="Almosafer 4">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card-ev text-center">
                            <img src="{{ asset('assets/images/branding page-11.png') }}" class="card-img-top image-ev" alt="Almosafer 5">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card-ev text-center">
                            <img src="{{ asset('assets/images/branding page-12.png') }}" class="card-img-top image-ev" alt="Almosafer 6">
                        </div>
                    </div>
                </div>
            </div>



            <div class="text-center py-5 ">
                <button id="open-gallery-button-SE" class="btn btn-danger py-2 ">See more </button>

                <div id="gallery-modal-SE" class="modal-button">
                    <div class="modal-content-button">
                        <span class="modal-close-button-SE">&times;</span>
                        <div id="image-container">
                            <img src="{{ asset('assets/images/selema.png') }}" class="img-button">

                            <!-- Add more images here as needed -->
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- End Events Services-->


    <!--Start  Giveaways Section -->
    <div class="Cover_Givaway py-5" id="Giveaways">
        <div class="container  wow animate__animated animate__fadeInDown">
            <div class="text-center">
                <h2 class="header_givaways">Giveaways</h2>
                <div class="row text-center">
                    <div class="col-lg-8 col-md-10 col-sm-12 col-12 mx-auto">
                        <p class="p-givaway-m">  Need to leave a lasting impression? From thermal mugs to wooden products, our giveaways keep your brand in your clients' hands—literally.
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <!-- Giveaways Animation -->
        <div class="body-givaway-animation">
            <div class="gallery">
                <div class="gallery-container">
                    <img src="{{ asset('assets/images/selema.png') }}" class="gallery-item gallery-item-1"
                        data-index="1">
                    <img src="{{ asset('assets/images/mosafer.png') }}" class="gallery-item gallery-item-2"
                        data-index="2">
                    <img src="{{ asset('assets/images/superjet.png') }}" class="gallery-item gallery-item-3"
                        data-index="3">
                    <img src="{{ asset('assets/images/selema.png') }}" class="gallery-item gallery-item-4"
                        data-index="4">
                    <img src="{{ asset('assets/images/mosafer.png') }}" class="gallery-item gallery-item-5"
                        data-index="5">
                    <img src="{{ asset('assets/images/superjet.png') }}" class="gallery-item gallery-item-6"
                        data-index="6">
                    <img src="{{ asset('assets/images/mosafer.png') }}" class="gallery-item gallery-item-7"
                        data-index="7">
                </div>
            </div>
        </div>
    </div>

    <!--Start  Giveaways Section -->

    <!--Start Button Giveaways Section -->

    <div class="text-center pb-5 Cover_Givaway">
        <div class="button-contactuss  mx-auto wow animate__animated animate__fadeInUp ">
            <button id="show-images-button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                See more
            </button>
        </div>
        <div id="image-modal" class="modal-button">
            <div class="modal-content-button">
                <span class="close-button">&times;</span>
                <div id="image-container">
                    <img src="{{ asset('assets/images/selema.png') }}" class="img-button">
                    <img src="{{ asset('assets/images/mosafer.png') }}" class="img-button">
                    <img src="{{ asset('assets/images/superjet.png') }}" class="img-button">
                    <img src="{{ asset('assets/images/selema.png') }}" class="img-button">
                    <img src="{{ asset('assets/images/mosafer.png') }}" class="img-button">
                    <img src="{{ asset('assets/images/superjet.png') }}" class="img-button">
                    <img src="{{ asset('assets/images/selema.png') }}" class="img-button">
                    <img src="{{ asset('assets/images/mosafer.png') }}" class="img-button">
                    <!-- Add more images here -->
                </div>
            </div>
        </div>

    </div>

    <!--End Button Giveaways Section -->




    <!--Start Giveaways Animation Java Script -->

    <script>
        const slides = document.querySelectorAll('.gallery-item');
        const totalSlides = slides.length;
        let currentIndex = 0;

        function moveToNextSlide() {
            slides.forEach((slide, index) => {
                slide.className = `gallery-item gallery-item-${index + 1}`;
            });

            currentIndex = (currentIndex + 1) % totalSlides;

            slides.forEach((slide, index) => {
                const slideIndex = (index + currentIndex) % totalSlides;
                slide.className = `gallery-item gallery-item-${slideIndex + 1}`;
            });
        }

        setInterval(moveToNextSlide, 1500);
    </script>

    <!--End Giveaways Animation Java Script -->


    <!--Statr Giveaways Button Java Script -->


    <script>
        // Get modal and button elements
        const modal = document.getElementById('image-modal');
        const btn = document.getElementById('show-images-button');
        const closeBtn = document.querySelector('.close-button');

        // Show the modal when the button is clicked
        btn.addEventListener('click', function() {
            modal.style.display = 'block';
        });

        // Close the modal when the close button is clicked
        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        // Close the modal if the user clicks outside of the modal content
        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>

    <script>
        // Get modal and button elements
        const galleryModal = document.getElementById('gallery-modal');
        const galleryBtn = document.getElementById('open-gallery-button');
        const galleryCloseBtn = document.querySelector('.modal-close-button');

        // Show the modal when the button is clicked
        galleryBtn.addEventListener('click', function() {
            galleryModal.style.display = 'block';
        });

        // Close the modal when the close button is clicked
        galleryCloseBtn.addEventListener('click', function() {
            galleryModal.style.display = 'none';
        });

        // Close the modal if the user clicks outside of the modal content
        window.addEventListener('click', function(event) {
            if (event.target === galleryModal) {
                galleryModal.style.display = 'none';
            }
        });
    </script>



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


<script>
    // Get modal and button elements
    const galleryModalll = document.getElementById('gallery-modal-SE');
    const galleryBtnnn = document.getElementById('open-gallery-button-SE');
    const galleryCloseBtnnn = document.querySelector('.modal-close-button-SE');

    // Show the modal when the button is clicked
    galleryBtnnn.addEventListener('click', function() {
        galleryModalll.style.display = 'block';
    });

    // Close the modal when the close button is clicked
    galleryCloseBtnnn.addEventListener('click', function() {
        galleryModalll.style.display = 'none';
    });

    // Close the modal if the user clicks outside of the modal content
    window.addEventListener('click', function(event) {
        if (event.target === galleryModalll) {
            galleryModalll.style.display = 'none';
        }
    });
</script>
@endsection


