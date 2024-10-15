@extends('Shared.head')


@section('content')
    {{-- {Start Show Reel} --}}
    <div style="padding:56.25% 0 0 0;position:relative;"><iframe width="100%" height="100%" src="https://app.videas.fr/embed/media/023275fa-c87f-4373-9735-7bb9a9751833/?autoplay=1&loop=1&controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" style="position: absolute; top: 0; left: 0" referrerpolicy="unsafe-url"></iframe></div>
    {{-- {End Show Reel} --}}




    <!-- {Start Services (Section One)}-->

    <div class="background">

        <div class="BBOY py-5">

            <div class="container my-5  ">

                <!-- paragrapgh -->

                <div class="row text-center mb-5 wow animate__animated animate__zoomIn">
                    <h1 class="strategy-title bebas-neue-regular">Get to know us</h1>

                    <p class="lead strategy-description">
                        Speed is your go-to partner for staying ahead of the game. Since 2002, we’ve been trailblazing in marketing and advertising production, helping businesses like yours outpace the competition. With our expertise, you can carve out your niche in the market. We offer 360° marketing strategies tailored to your growth because with Speed, it’s always your time to shine.
                    </p>
                </div>
                <br>

                <!-- Marketing -->


                <div class="row mb-4 d-flex justify-content-around  Marketing-m">

                    <div class="col-4 content-section ">
                        <a class="header_font text-start tracking-in-contract-bck-top wow animate__animated animate__zoomIn Links-a bebas-neue-regular"
                            href="{{ url('marketing') }}">
                            MARKETING</a>
                        <ul class="text-start li-style">

                            <li class="marketing-consultancy wow animate__animated animate__zoomIn "><a
                                    href="/marketing/#Marketing-consultancy" class="Links-a">
                                    Marketing Consultancy
                                </a>
                            </li>
                            <li class="marketing-consultancy wow animate__animated animate__zoomIn "><a
                                    href="/marketing/#Digital-Marketing" class="Links-a">
                                    Digital Marketing
                                </a>
                            </li>

                            <li class="marketing-consultancy wow animate__animated animate__zoomIn "><a
                                    href="/marketing/#Event-Solutions" class="Links-a">
                                    Event Solutions
                                </a>
                            </li>
                            <li class="marketing-consultancy wow animate__animated animate__zoomIn "><a
                                    href="/marketing/#Giveaways" class="Links-a">
                                    Giveaways
                                </a>
                            </li>
                        </ul>
                    </div>




                    <!-- SVG -->


                    <div class="col-md-4 mb-4 mb-md-0   wow animate__animated animate__zoomIn ">
                        <!-- Inserting a GIF image using the <img> tag -->
                        <img src="{{ asset('assets/images/Prod_Icon_V2_ALPHA.gif') }}" class="GIF-Animation"
                            alt="Description of the GIF">

                    </div>





                </div>
                <!-- paragrapgh -->
                <div class="row text-center mt-5 mb-5 p-h-m">
                    <p class="lead strategy-description wow animate__animated animate__zoomIn ">
                        The heart of your brand is rooted in a solid marketing plan and strategy. We're here to help you elevate your brand's value and make it shine as industry masters!
                    </p>
                </div>


                <!-- Branding  -->


                <div class="row mb-4 d-flex justify-content-around mb-5 Marketing-m">




                    <!-- SVG -->


                    <div class="col-md-4 mb-4 mb-md-0  wow animate__animated animate__zoomIn ">
                        <!-- Inserting a GIF image using the <img> tag -->
                        <img src="{{ asset('assets/images/Prod_Icon_V2_ALPHA.gif') }}" class="GIF-Animation"
                            alt="Description of the GIF">
                    </div>

                    <!-- paragrapgh -->

                    <div class=" col-4  content-section  ">
                        <a class="header_font text-start tracking-in-contract-bck-top wow animate__animated animate__zoomIn Links-a bebas-neue-regular"
                            href="{{ url('branding') }}">
                            Branding</a>
                        <ul class="text-start li-style-2">

                            <li class="marketing-consultancy wow animate__animated animate__zoomIn "><a
                                    href="/branding/#Brand-Identity-Development" class="Links-a">
                                    Brand Identity Development
                                </a>
                            </li>
                            <li class="marketing-consultancy wow animate__animated animate__zoomIn "><a
                                    href="/branding/#Booths-and-Display-Solutions" class="Links-a">
                                    Booths and Display Solutions
                                </a>
                            </li>
                            <li class="marketing-consultancy wow animate__animated animate__zoomIn "><a
                                    href="/branding/#Signage-Solutions" class="Links-a">
                                    Signage Solutions
                                </a>
                            </li>
                            <li class="marketing-consultancy wow animate__animated animate__zoomIn "><a
                                    href="/branding/#Printing-Solutions" class="Links-a">
                                    Printing Solutions
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="row text-center mt-5 ">
                    <p class="lead strategy-description wow animate__animated animate__zoomIn ">
                        Branding isn’t just about visuals; it’s the whole package—your voice, values, and customer experience. It’s about telling your story and consistently delivering on your promises. Ready to explore this further?
                    </p>
                </div>

            </div>
        </div>

        <!-- {End Services (Section One)}-->




        <!-- {Start Services (Section Two) }-->


        <div class="BBOY-2 py-5">


            <div class="container my-5">

                <!-- Production  -->


                <div class="row mb-4 d-flex justify-content-around mb-5 Marketing-m">

                    <!-- paragrapgh -->


                    <div class="col-4 content-section-2">
                        <a class="header_font-2 text-start tracking-in-contract-bck-top wow animate__animated animate__zoomIn Links-a2 bebas-neue-regular"
                            href="{{ url('production') }}">
                            Production
                        </a>
                        <ul class="text-start li-style-2">
                            <li class="marketing-consultancy2 wow animate__animated animate__zoomIn">
                                <a href="/production/#Tv&R" class="Links-a2">TV & Radio Commercials</a>
                            </li>
                            <li class="marketing-consultancy2 wow animate__animated animate__zoomIn">
                                <a href="/production/#Commercial-photography" class="Links-a2">Commercial Photography</a>
                            </li>
                            <li class="marketing-consultancy2 wow animate__animated animate__zoomIn">
                                <a href="/production/#M&I&V" class="Links-a2">Motion & Infographic Videos</a>
                            </li>
                            <li class="marketing-consultancy2 wow animate__animated animate__zoomIn">
                                <a href="/production/#Podcasts" class="Links-a2">Podcasts</a>
                            </li>
                        </ul>
                    </div>


                    <!-- SVG -->


                    <div class="col-md-4 mb-4 mb-md-0  wow animate__animated animate__zoomIn ">
                        <!-- Inserting a GIF image using the <img> tag -->
                        <img src="{{ asset('assets/images/Prod_Icon_V2_ALPHA.gif') }}" class="GIF-Animation"
                            alt="Description of the GIF">
                    </div>




                </div>

                <div class="row text-center mt-5 mb-5 p-h-m">
                    <p class="lead strategy-description wow animate__animated animate__zoomIn ">
                        Whether it’s videos or images, we’ve got your back, weaving a rich tapestry of content that hooks audiences and keeps them coming back for more!

                    </p>
                </div>


                <!-- IT-Developers  -->


                <div class="row mb-4 d-flex justify-content-around mb-5 Marketing-m">




                    <!-- SVG -->


                    <div class="col-md-4 mb-4 mb-md-0  wow animate__animated animate__zoomIn ">
                        <!-- Inserting a GIF image using the <img> tag -->
                        <img src="{{ asset('assets/images/Prod_Icon_V2_ALPHA.gif') }}" class="GIF-Animation"
                            alt="Description of the GIF">
                    </div>



                    <!-- paragrapgh -->


                    <div class=" col-4  content-section-2 ">

                        <a class="header_font-3 text-start tracking-in-contract-bck-top wow animate__animated animate__zoomIn Links-a2 bebas-neue-regular"
                            href="{{ url('technology') }}">
                            Technology</a>
                        <ul class="text-start li-style-2 mt-2">
                            <li class="marketing-consultancy2 wow animate__animated animate__zoomIn">
                                <a href="/technology/#Website" class="Links-a2">Website Development</a>
                            </li>
                            <li class="marketing-consultancy2 wow animate__animated animate__zoomIn">
                                <a href="/technology/#Mobile-App" class="Links-a2">Mobile App Development</a>
                            </li>
                            <li class="marketing-consultancy2 wow animate__animated animate__zoomIn">
                                <a href="/technology/#Website" class="Links-a2">Custom Web System </a>
                            </li>
                            <li class="marketing-consultancy2 wow animate__animated animate__zoomIn">
                                <a href="/technology/#UI-UX" class="Links-a2">UI & UX Designer </a>
                            </li>
                        </ul>

                    </div>


                </div>


                <div class="row text-center mt-5 ">
                    <p class="lead strategy-description wow animate__animated animate__zoomIn ">
                        From UI to UX, get the ball rolling with our web development team. In today’s digital landscape, having a strong online presence is a must!

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- {End Services (Section Two) }-->








    <!-- {Start Latest Work Section} -->
    <section class="latest-work pt-5">
        <div class="container text-start">
            <h2 class="section-title-last-work wow animate__animated animate__zoomIn bebas-neue-regular">LATEST WORK</h2>
            <p class="section-description-last-work wow animate__animated animate__zoomIn">We provide innovative and
                unique
                ideas for our projects to execute the perfect-match plan for your business and reach your target
                audience...</p>
            <div class="row">
                <!-- Work Item 1 -->
                <div class="col-md-4 mb-4 wow animate__animated animate__zoomIn ">
                    <div class="work-item">
                        <img src="{{ asset('assets/images/superjet.png') }}" alt="Work 1" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="work-description">
                            <h3 class="FONT_HEADER wow animate__animated animate__zoomIn bebas-neue-regular">Super Jet</h3>
                            <p class="FONT wow animate__animated animate__zoomIn">Developing a website for Superjet
                                transportation Company to facilitate the service</p>
                        </div>
                    </div>
                </div>

                <!-- Work Item 2 -->
                <div class="col-md-4 mb-4 wow animate__animated animate__zoomIn ">
                    <div class="work-item-2">
                        <img src="{{ asset('assets/images/selema.png') }}" alt="Work 2" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="work-description">
                            <h3 class="FONT_HEADER wow animate__animated animate__zoomIn bebas-neue-regular">Selema Gold
                            </h3>
                            <p class="FONT wow animate__animated animate__zoomIn">Putting and implementing the whole
                                digital marketing strategy and plan for Selema Gold</p>
                        </div>
                    </div>
                </div>

                <!-- Work Item 3 -->
                <div class="col-md-4 mb-4 wow animate__animated animate__zoomIn ">
                    <div class="work-item-3">
                        <img src="{{ asset('assets/images/mosafer.png') }}" alt="Work 3" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="work-description">
                            <h3 class="FONT_HEADER wow animate__animated animate__zoomIn bebas-neue-regular">Al Mosafer
                            </h3>
                            <p class="FONT wow animate__animated animate__zoomIn">We create an amazing event for Al
                                Mosafer with 4 different venues & full media coverage</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--{End Latest Work Section} -->

    {{-- {{START LOGOS}} --}}
    <div style="padding: 70px 0px">
        <div class="text-center">
            <h1 class="header-logo bebas-neue-regular" style="margin:15px 0px ">They trust our technology, <span
                    style="color:red">will you?</span></h1>
        </div>
        <div class="logo-container">
            <div class="logoss">
                <!-- Logos repeated twice for seamless effect -->
                <img src="{{ asset('assets/images/LOGOS_Artboard 117-06.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-07.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-08.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-09.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-10.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-11.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-12.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-14.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-15.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-16.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-17.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-18.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-19.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-21.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-22.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-24.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS_Artboard 117-06.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-07.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-08.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-09.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-10.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-11.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-12.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-14.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-15.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-16.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-17.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-18.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-19.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-21.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-22.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-24.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS_Artboard 117-06.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-07.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-08.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-09.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-10.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-11.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-12.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-14.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-15.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-16.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-17.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-18.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-19.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-21.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-22.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-24.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS_Artboard 117-06.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-07.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-08.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-09.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-10.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-11.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-12.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-14.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-15.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-16.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-17.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-18.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-19.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-21.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-22.png') }}" alt="Work 1" class="img-fluid">
                <img src="{{ asset('assets/images/LOGOS-24.png') }}" alt="Work 1" class="img-fluid">
            </div>
        </div>
    </div>
    {{-- {{END LOGOS}} --}}







    <!-- {Start Section Team} -->
    {{-- <div class=" body-ceo">
        <div class="container about-section">
            <div class="image-container">
                <img src="{{ asset('assets/images/mr-wael-11.png') }}" alt="About Image">
            </div>
            <div class="text-container">
                <h1 class="bebas-neue-regular">Message From CEO</h1>
                <p>
                    The sky is the limit” should be a business motto especially when it comes to advertising. We at Speed
                    see that everyday is a challenge that measures our flexibility to learn the ongoing trends, technologies,
                    tactics, approaches and consumer studies. Allowing us to consistently offer top notch services to our
                    clients and achieving a new milestone in our story
                </p>
            </div>
        </div>
    </div> --}}
    <section class="about-container">
        <div class="about-wrapper">
          <div class="about-image">
            <img src="{{ asset('assets/images/mr-wael-11.png') }}" alt="About Image" >
        </div>
          <div class="about-content">
            <h2 class="about-title bebas-neue-regular">Message From CEO </h2>
            <hr class="about-line">
            <p class="about-text">
                “The sky is the limit” should be a business motto especially when it comes to advertising. We at Speed see that everyday is a challenge that measures our flexibility to learn the ongoing trends, technologies, tactics, approaches and consumer studies. Allowing us to consistently offer top notch services to our clients and achieving a new milestone in our story.


            <p class="about-contact">
              <span class="contact-icon">📞</span> +1 (234) 567-8910
            </p>
          </div>
        </div>
      </section>
    <!-- {End Section Team} -->
@endsection
































