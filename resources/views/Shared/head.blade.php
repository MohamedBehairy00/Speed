<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'Speed Advertising Agency' }}</title>
    <link rel="icon" href="{{ asset('assets/images/logo -03.png') }}" sizes="32x32">
    <!-- Google Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href=" {{ asset('assets/lib/bootstrap-5.2.3-dist/css/bootstrap.min.css') }} ">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('assets/css/fontawesome.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script id="CaptchaScript" src="https://t-captcha.gjacky.com/Captcha.js"></script>

</head>
<body>
    <!--{Start Spinner}  -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!--{End Spinner  }-->

    <!-- {Start Header} -->
    <nav class="navbar navbar-expand-lg bebas-neue-regular sticky-top sNav">
        <div class="container-fluid d-flex justify-content-between" id="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img class="Logoo " src="{{ asset('assets/images/logo -03.png') }}">
            </a>
            <button style="background-color:white !important" class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto marginUL">
                    <li class="nav-item  active LinksHeader">
                        <a class="nav-link text-light " aria-current="page" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown LinksHeader">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="servicesDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item " href="{{ url('marketing') }}">MARKETING</a></li>
                            <li><a class="dropdown-item " href="{{ url('branding') }}">Branding</a></li>
                            <li><a class="dropdown-item " href="{{ url('production') }}">Production</a>
                            </li>
                            <li><a class="dropdown-item " href="{{ url('technology') }}">
                                    Technology</a></li>
                        </ul>
                    </li>
                    <li class="nav-item LinksHeader">
                        <a class="nav-link text-light " href="{{ url('aboutus') }}">About</a>
                    </li>
                    <li class="nav-item LinksHeader">
                        <a class="nav-link text-light " href="{{ route('hire.index') }}">Hiring</a>
                    </li>
                    <li class="nav-item LinksHeader">
                        <a class="nav-link text-light " href="{{ route('contactus.index') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- {End Header} -->



    {{-- {Start Content} --}}

    @yield('content')
    {{-- {End Content} --}}

    <div class="bg-button-fixed-call fade-in" id="contactInfo">
        <div class="contact-from-buttonfixed">
            <p class="close-buttonn">&times;</p>
            <p>speed@speed-advertising.com</p>
            <p>hr@speed-advertising.com</p>
            <p>+2 01006874248</p>
            <p>+2 01009870077</p>
        </div>
    </div>
    <!-- Start fixed button -->
    <div class="fixed-buttons">
        <a href="#" class="hover-button-fixed moving-automatic">
            <img src="{{ asset('assets/images/maill.png') }}" alt="Email Icon" class="btnfixedd">
        </a>
        <a href="#" class="hover-button-fixed" data-bs-toggle="modal" data-bs-target="#applyModal">
            <img src="{{ asset('assets/images/call.png') }}" alt="Call Icon" class="btnfixedd">
        </a>
        <a href="https://wa.me/+201009870077" class="hover-button-fixed">
            <img   src="{{ asset('assets/images/whatsapp-.png') }}" alt="WhatsApp Icon" class="btnfixedd">
        </a>
    </div>




<!-- Error Notification Card -->
<div id="customErrorOverlay" class="custom-overlay d-none">
    <div class="custom-error-card custom-shadow">
        <h5 class="custom-error-title">Oops! Something went wrong</h5>
        <ul id="customErrorMessages" class="custom-error-messages"></ul>
        <button id="closeCustomErrorCard" class="custom-btn custom-btn-danger mt-3">Close</button>
    </div>
</div>

<!-- Success Notification Banner -->
<div id="customSuccessBanner" class="custom-success-banner d-none">
    <span id="customSuccessMessage"></span>
    <button type="button" class="custom-btn-close custom-btn-close-white" id="closeCustomSuccessBanner" aria-label="Close"></button>
</div>



    <!-- Form Page -->
    <div class="modal fade bg-btn-color" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-4 background-form-alert-fixedbutton">
                <div class="modal-header border-0 d-inline-block">
                    <h2 class="modal-title w-100 text-center bebas-neue-regular " id="applyModalLabel">Get in touch</h2>
                    <p class="w-100 text-center bebas-neue-regular ">Say hello, ask a question, or just drop by for a
                        chat</p>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form action="{{ route('create.store') }}" method="POST" id="applyForm" onsubmit="return handleSubmit(event)">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="applicantName" class="form-label">FULL NAME</label>
                                <input type="text" name="name"
                                    class="form-control form-control-lg custom-input-fixedbutton" id="applicantName"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="applicantEmail" class="form-label">COMPANY NAME</label>
                                <input type="text" name="company"
                                    class="form-control form-control-lg custom-input-fixedbutton" id="applicantEmail"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="applicantAddress" class="form-label">YOUR MAIL</label>
                                <input type="email" name="email"
                                    class="form-control form-control-lg custom-input-fixedbutton"
                                    id="applicantAddress" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="applicantPhone" class="form-label">PHONE</label>
                                <input type="number" name="phone"
                                    class="form-control form-control-lg custom-input-fixedbutton" id="applicantPhone"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="coverLetter" class="form-label">MESSAGE</label>
                            <textarea class="form-control form-control-lg custom-input-fixedbutton" id="coverLetter" rows="4"
                                name="message"></textarea>
                        </div>
                    </form>
                </div>
                <div id="captchaContainer"></div>

                <div class="modal-footer border-0 justify-content-center">
                    <button type="submit" form="applyForm" class="btn  btn-lg w-100 button-form-fixed">SEND</button>
                </div>
            </div>
        </div>
    </div>
    <!--{End fixed button} -->


    <!-- {Start Footer Section} -->
    <footer class="footer">
        <div class="PADDING">
            <div class="row align-items-center ">
                <!-- Left Column: Logo/Tagline -->
                <div class="col-md-4  Logo_Fotter_Posstion">
                    <img src="{{ asset('assets/images/SPEED-.png') }}" alt="" class="Logo_Fotter ">
                </div>

                <!-- Center Column: Quick Links -->
                <div class="col-md-4 text-center">
                    <h3 class="footer-heading2">QUICK LINK</h3>
                    <ul class="footer-links d-flex justify-content-between">
                        <li><a href="{{ route('home.index') }}" class="">HOME</a></li>
                        <li><a href="{{ url('aboutus') }}" class="">ABOUT</a></li>
                        <li><a href="{{ route('contactus.index') }}" class="">Contact Us</a></li>
                        <li><a href="{{ route('hire.index') }}" class="">HIREING</a></li>
                    </ul>
                </div>
                <!-- Right Column: Social Media & Contact Info -->
                <div class="col-md-4 Logo_Fotter_Posstion SAYHELLO">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/speedadvertisingagency?mibextid=ZbWKwL"><img
                                src="{{ asset('assets/images/facebook.png') }}" class="Logo_Fotter_icone "></a>
                        <a href="https://www.linkedin.com/company/speed-advertising-agency/"><img
                                src="{{ asset('assets/images/in.png') }}" class="Logo_Fotter_icone "></a>
                        <a href="https://www.instagram.com/speedadvertisingagency?igsh=MWtiMHZ1dWY5OTA3ZA=="><img
                                src="{{ asset('assets/images/insta.png') }}" class="Logo_Fotter_icone "></a>
                        <a href="https://www.tiktok.com/@speedadvertisingagency?_t=8ozsa3Z6cSI&_r=1"><img
                                src="{{ asset('assets/images/tiktok.png') }}" class="Logo_Fotter_icone "></a>
                        <a href="https://x.com/SpeedAdvertisi1?t=1djj2a5zS_22OMTrer_a-Q&s=09"><img
                                src="{{ asset('assets/images/x.png') }}" class="Logo_Fotter_icone "></a>
                    </div>
                    <p class="footer-contact ">speed@speed-advertising.com</p>
                    <p class="footer-copyright ">Copyright &copy; 2024 SPEED</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- {Start Footer Section} -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- WOW.js for triggering animations on scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!--  Javascript -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <link rel="stylesheet" href=" {{ asset('assets/lib/wow/wow.main') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/lib/tempusdominus/js/moment.min.js') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/lib/waypoints/waypoints.min.js') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/lib/waypoints/waypoints.min.js') }} ">
    </script>
    <script>
        // Initialize WOW.js
        new WOW().init();
    </script>

    <script>
        let lastScrollTop = 0;
        const navbar = document.querySelector('.sNav');

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                // Scrolling down
                navbar.style.top = '-100px'; // Hide the header
            } else {
                // Scrolling up
                navbar.style.top = '0'; // Show the header
            }
            lastScrollTop = scrollTop;
        });
    </script>
    <script>
        (function($) {
            "use strict";

            // Spinner
            var spinner = function() {
                setTimeout(function() {
                    if ($('#spinner').length > 0) {
                        $('#spinner').removeClass('show');
                    }
                }, 1);
            };
            spinner();

        })(jQuery);
        </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactInfo = document.getElementById('contactInfo');
            contactInfo.style.display = 'none'; // Initially hidden

            // Toggle contact info on click of the mail icon
            document.querySelector('.hover-button-fixed').addEventListener('click', function(e) {
                e.preventDefault();
                if (contactInfo.style.display === 'block') {
                    contactInfo.classList.remove('fade-in');
                    contactInfo.classList.add('fade-out');
                    setTimeout(() => {
                        contactInfo.style.display = 'none';
                    }, 500); // Match the transition time
                } else {
                    contactInfo.style.display = 'block';
                    setTimeout(() => {
                        contactInfo.classList.remove('fade-out');
                        contactInfo.classList.add('fade-in');
                    }, 10); // Small delay to trigger CSS transition
                }
            });

            // Close button functionality
            document.querySelector('.close-buttonn').addEventListener('click', function() {
                contactInfo.classList.remove('fade-in');
                contactInfo.classList.add('fade-out');
                setTimeout(() => {
                    contactInfo.style.display = 'none';
                }, 500);
            });
        });
    </script>
    <script>
        var appId = '2033864629';
        var captchaInitialized = false;

        var jsBridgeCallback = function (res) {
            var result = {};
            if (res && res.ret === 0) {
                result = { ret: res.ret, msg: 'success', randstr: res.randstr, ticket: res.ticket };
                document.getElementById('applyForm').dataset.ticket = res.ticket;
                document.getElementById('errorMessage').innerText = '';
            } else {
                result = { ret: res.ret, msg: 'cancel', randstr: null, ticket: null };
                document.getElementById('errorMessage').innerText = 'Captcha verification failed. Please try again.';
            }
        }

        function handleSubmit(event) {
        event.preventDefault(); // Prevent form submission to handle CAPTCHA first

        // Check if CAPTCHA is initialized
        if (!captchaInitialized) {
            document.getElementById('captchaContainer').style.display = 'block';
            initializeCaptcha(); // Initialize CAPTCHA if not yet initialized
        } else {
            // Get the CAPTCHA ticket
            var ticket = document.getElementById('applyForm').dataset.ticket;

            // If the ticket is missing, show an error message
            if (!ticket) {
                document.getElementById('errorMessage').innerText = 'Please complete the captcha first.';
                return;
            }

            // If ticket is available, submit the form
            document.getElementById('applyForm').submit(); // Submit the form manually after CAPTCHA success
        }
    }
        function initializeCaptcha() {
            captchaInitialized = true;
            var options = { needFeedBack: false };

            try {
                var captcha = new Captcha(appId, jsBridgeCallback, options);
                captcha.show();
            } catch (error) {
                jsBridgeCallback({ ret: 1, msg: 'error' });
            }
        }
    </script>
    <script>
        window.onload = function() {
            // Check for any errors and display them in the centered card
            @if ($errors->any())
                let errorList = '';
                @foreach ($errors->all() as $error)
                    errorList += '<li>{{ $error }}</li>';
                @endforeach
                document.getElementById('customErrorMessages').innerHTML = errorList;
                document.getElementById('customErrorOverlay').classList.remove('d-none');
            @endif

            // Check for a success message and display it as a slide-down banner
            @if (session('success'))
                let successMessage = "{{ session('success') }}";
                document.getElementById('customSuccessMessage').innerText = successMessage;
                let successBanner = document.getElementById('customSuccessBanner');
                successBanner.classList.remove('d-none');
                successBanner.classList.add('custom-slide-down'); // Add slide-down animation

                setTimeout(() => {
                    successBanner.classList.add('custom-slide-up'); // Slide up after 5 seconds
                    setTimeout(() => successBanner.classList.add('d-none'), 500); // Hide after animation
                }, 5000);
            @endif

            // Close error card on button click
            document.getElementById('closeCustomErrorCard').onclick = function() {
                document.getElementById('customErrorOverlay').classList.add('d-none');
            }

            // Close success banner on button click
            document.getElementById('closeCustomSuccessBanner').onclick = function() {
                document.getElementById('customSuccessBanner').classList.add('d-none');
            }
        }
    </script>
</body>
