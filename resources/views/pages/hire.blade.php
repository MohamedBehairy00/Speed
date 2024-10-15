@extends('Shared.headHirng')

@section('content')


    <!-- {Start Hire Us Section} -->
    <div class="nav_hire">
        <section class="container contact-hireus ">
            <h1 class="CONTACTUS-hireus">Hiring</h1>
            <p class="breadcrumb-hireus ">HOME &rarr; Hiring</p>
        </section>
    </div>
    <!-- {End Hire Us Section} -->

    <!-- {Start Hiring } -->
    <div class="container py-5">
    
        <div class="row mt-3 mb-3">

            <!-- Job Listing Card -->
            <div class="col-lg-4 col-md-12 col-12 job-card wow animate__animated animate__zoomIn ">
                <div class=" text-center shadow">
                    <div class=" card-body bg-light">
                        <div class="d-flex justify-content-between mb-3 align-items-center text-start">
                            <img src="{{ asset('assets/images/circle.png') }}" alt="Job Image" class="img-fluid"
                                style="max-width: 150px; height: auto;">
                        </div>
                        <h6 class="card-title bebas-neue-regular text-dark text-start">Sales Executive</h6>
                        <div class="mt-3 mb-3 text-start">
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Time-Joib align-middle">Full time</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Onsite align-middle">On-Site</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Level align-middle">Mid-Level</p>
                            </div>
                        </div>
                        <p class="card-text   text-start">Conduct market research, seek out new sales opportunities, set up
                            meetings with potential clients, Negotiate/close deals and handle complaints or objections.</p>
                        <div class="pt-4">
                            <a href="#" class="btn btn-primary btn-lg text-center BTN hiring-btn"
                                data-bs-toggle="modal" data-bs-target="#applyModal">APPLY NOW</a>
                            <a href="https://wa.me/+201009870077"
                                class="btn btn-success btn-lg text-center BTN ">WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Listing Card -->
            <div class="col-lg-4 col-md-12 col-12 job-card wow animate__animated animate__zoomIn  ">
                <div class="text-center shadow">
                    <div class=" card-body bg-light">
                        <div class="d-flex justify-content-between mb-3 align-items-center text-start">
                            <img src="{{ asset('assets/images/circle.png') }}" alt="Job Image" class="img-fluid"
                                style="max-width: 150px; height: auto;">
                        </div>
                        <h6 class="card-title bebas-neue-regular text-dark text-start">Media buyer</h6>
                        <div class="mt-3 mb-3 text-start">
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Time-Joib align-middle">Full time</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Onsite align-middle">On-Site</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Level align-middle">Mid-Level</p>
                            </div>
                        </div>
                        <p class="card-text  text-start">Develop effective media buying strategies, negotiate ad space and
                            time slots with various media outlets, participate in media planning & craft effective campaigns.
                        </p>
                        <div class="pt-4">
                            <a href="#" class="btn btn-primary btn-lg text-center BTN hiring-btn"
                                data-bs-toggle="modal" data-bs-target="#applyModal">APPLY NOW</a>
                            <a href="https://wa.me/+201009870077"
                                class="btn btn-success btn-lg text-center BTN ">WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Listing Card -->
            <div class="col-lg-4 col-md-12 col-12 job-card wow animate__animated animate__zoomIn  ">
                <div class="text-center shadow">
                    <div class=" card-body bg-light">
                        <div class="d-flex justify-content-between mb-3 align-items-center text-start">
                            <img src="{{ asset('assets/images/circle.png') }}" alt="Job Image" class="img-fluid"
                                style="max-width: 150px; height: auto;">
                        </div>
                        <h6 class="card-title bebas-neue-regular text-dark text-start">Graphic Designer </h6>
                        <div class="mt-3 mb-3 text-start">
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Time-Joib align-middle">Full time</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Onsite align-middle">On-Site</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Level align-middle">Mid-Level</p>
                            </div>
                        </div>
                        <p class="card-text  text-start">-Proficiency in graphic design software (Photoshop, illustrator,
                            aftereffects, InDesign), keen eye for aesthetics and details ,Ability to work methodically and
                            meet deadlines.</p>
                            <div class="pt-4">
                                <a href="#" class="btn btn-primary btn-lg text-center BTN hiring-btn"
                                    data-bs-toggle="modal" data-bs-target="#applyModal">APPLY NOW</a>
                                <a href="https://wa.me/+201009870077"
                                    class="btn btn-success btn-lg text-center BTN ">WHATSAPP</a>
                            </div>
                    </div>
                </div>
            </div>



        </div>
        <div class="row mt-3 mb-3">
            <!-- Job Listing Card -->
            <div class="col-lg-4 col-md-12 col-12 job-card wow animate__animated animate__zoomIn  ">
                <div class=" text-center shadow">
                    <div class=" card-body bg-light">
                        <div class="d-flex justify-content-between mb-3 align-items-center text-start">
                            <img src="{{ asset('assets/images/circle.png') }}" alt="Job Image" class="img-fluid"
                                style="max-width: 150px; height: auto;">
                        </div>
                        <h6 class="card-title bebas-neue-regular text-dark text-start">Marketing coordinator</h6>
                        <div class="mt-3 mb-3 text-start">
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Time-Joib align-middle">Full time</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Onsite align-middle">On-Site</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Level align-middle">Mid-Level</p>
                            </div>
                        </div>
                        <p class="card-text  text-start">The Link between management teams and to develop, coordinate
                            &execute marketing campaigns and track sales data to achieve the goals of the campaign.</p>
                        <div class="pt-4">
                            <a href="#" class="btn btn-primary btn-lg text-center BTN hiring-btn"
                                data-bs-toggle="modal" data-bs-target="#applyModal">APPLY NOW</a>
                            <a href="https://wa.me/+201009870077"
                                class="btn btn-success btn-lg text-center BTN ">WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Listing Card -->
            <div class="col-lg-4 col-md-12 col-12 job-card wow animate__animated animate__zoomIn  ">
                <div class=" text-center shadow">
                    <div class=" card-body bg-light">
                        <div class="d-flex justify-content-between mb-3 align-items-center text-start">
                            <img src="{{ asset('assets/images/circle.png') }}" alt="Job Image" class="img-fluid"
                                style="max-width: 150px; height: auto;">
                        </div>
                        <h6 class="card-title bebas-neue-regular text-dark text-start">Marketing manager</h6>
                        <div class="mt-3 mb-3 text-start">
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Time-Joib align-middle">Full time</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Onsite align-middle">On-Site</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Level align-middle">Mid-Level</p>
                            </div>
                        </div>
                        <p class="card-text  text-start">Managing the marketing department's staff, Coordinate with the
                            sales, public relations, production departments & analyze the final metrics.</p>
                        <div class="pt-4">
                            <a href="#" class="btn btn-primary btn-lg text-center BTN hiring-btn"
                                data-bs-toggle="modal" data-bs-target="#applyModal">APPLY NOW</a>
                            <a href="https://wa.me/+201009870077"
                                class="btn btn-success btn-lg text-center BTN ">WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Listing Card -->
            <div class="col-lg-4 col-md-12 col-12 job-card wow animate__animated animate__zoomIn  ">
                <div class=" text-center shadow">
                    <div class=" card-body bg-light">
                        <div class="d-flex justify-content-between mb-3 align-items-center text-start">
                            <img src="{{ asset('assets/images/circle.png') }}" alt="Job Image" class="img-fluid"
                                style="max-width: 150px; height: auto;">
                        </div>
                        <h6 class="card-title bebas-neue-regular text-dark text-start">Sales Team Leader</h6>
                        <div class="mt-3 mb-3 text-start">
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Time-Joib align-middle">Full time</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Onsite align-middle">On-Site</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Level align-middle">Mid-Level</p>
                            </div>
                        </div>
                        <p class="card-text  text-start">Assist Managers in Sales Strategy Development , Keep Informed of
                            New Products and Services, and Coach the Sales Team, Set Sales Targets and Motivate Sales Team,
                            Prepare Sales Reports.</p>
                        <div class="pt-4">
                            <a href="#" class="btn btn-primary btn-lg text-center BTN hiring-btn "
                                data-bs-toggle="modal" data-bs-target="#applyModal">APPLY NOW</a>
                            <a href="https://wa.me/+201009870077"
                                class="btn btn-success btn-lg text-center BTN  ">WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <!-- Job Listing Card -->
            <div class="col-lg-4 col-md-12 col-12 job-card wow animate__animated animate__zoomIn  ">
                <div class=" text-center shadow">
                    <div class=" card-body bg-light">
                        <div class="d-flex justify-content-between mb-3 align-items-center text-start">
                            <img src="{{ asset('assets/images/circle.png') }}" alt="Job Image" class="img-fluid"
                                style="max-width: 150px; height: auto;">
                        </div>
                        <h6 class="card-title bebas-neue-regular text-dark text-start">Content creator</h6>
                        <div class="mt-3 mb-3 text-start">
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Time-Joib align-middle">Full time</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Onsite align-middle">On-Site</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Level align-middle">Mid-Level</p>
                            </div>
                        </div>
                        <p class="card-text  text-start">Develop and execute creative content strategy ,write content for
                            social media ,conduct in-depth research on industry related topics&implement best practices for
                            SEO.</p>
                        <div class="pt-4">
                            <a href="#" class="btn btn-primary btn-lg text-center BTN hiring-btn"
                                data-bs-toggle="modal" data-bs-target="#applyModal">APPLY NOW</a>
                            <a href="https://wa.me/+201009870077"
                                class="btn btn-success btn-lg text-center BTN ">WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Listing Card -->
            <div class="col-lg-4 col-md-12 col-12 job-card wow animate__animated animate__zoomIn  ">
                <div class=" text-center shadow">
                    <div class=" card-body bg-light">
                        <div class="d-flex justify-content-between mb-3 align-items-center text-start">
                            <img src="{{ asset('assets/images/circle.png') }}" alt="Job Image" class="img-fluid"
                                style="max-width: 150px; height: auto;">
                        </div>
                        <h6 class="card-title bebas-neue-regular text-dark text-start">Digital Marketer</h6>
                        <div class="mt-3 mb-3 text-start">
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Time-Joib align-middle">Full time</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Onsite align-middle">On-Site</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Level align-middle">Mid-Level</p>
                            </div>
                        </div>
                        <p class="card-text  text-start">Campaign Management: Plan, execute& monitor marketing campaigns
                            analytics& Social Medi Management.
                            SEO& SEM: Optimize website content for search engine.</p>
                        <div class="pt-4">
                            <a href="#" class="btn btn-primary btn-lg text-center BTN hiring-btn"
                                data-bs-toggle="modal" data-bs-target="#applyModal">APPLY NOW</a>
                            <a href="https://wa.me/+201009870077"
                                class="btn btn-success btn-lg text-center BTN ">WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Listing Card -->
            <div class="col-lg-4 col-md-12 col-12 job-card wow animate__animated animate__zoomIn   ">
                <div class=" text-center shadow">
                    <div class=" card-body bg-light">
                        <div class="d-flex justify-content-between mb-3 align-items-center text-start">
                            <img src="{{ asset('assets/images/circle.png') }}" alt="Job Image" class="img-fluid"
                                style="max-width: 150px; height: auto;">
                        </div>
                        <h6 class="card-title bebas-neue-regular text-dark text-start">Web Developer</h6>
                        <div class="mt-3 mb-3 text-start  d-flex align-items-center">
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Time-Joib align-middle">Full time</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Onsite align-middle">On-Site</p>
                            </div>
                            <div class="gray-box2 d-inline-block text-center me-2">
                                <p class="Level align-middle">Mid-Level</p>
                            </div>
                        </div>
                        <p class="card-text  text-start">Full-Stack Developer responsible for tasks such as back-end and
                            front-end software development, and utilizing Cascading Style Sheets (CSS) to create dynamic and
                            responsive web.</p>
                        <div class="pt-4">
                            <a href="#" class="btn btn-primary btn-lg text-center BTN hiring-btn"
                                data-bs-toggle="modal" data-bs-target="#applyModal">APPLY NOW</a>
                            <a href="https://wa.me/+201009870077"
                                class="btn btn-success btn-lg text-center BTN ">WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <!-- {End Hiring } -->



    <!--{Start Form Hiring} -->
<div class="modal fade bg-btn-color " id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content p-4 background-form-alert">
        <div class="modal-header-hire border-0 d-inline-block">
            <h6 class="modal-title w-100 text-center bebas-neue-regular" id="applyModalLabel">Join The Team</h6>
            <p class="w-100 text-center bebas-neue-regular">Apply For This Position</p>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">



            <form action="{{ route('createhiring.store') }}" method="POST" id="applyForm" enctype="multipart/form-data" onsubmit="return handleSubmit(event)">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-3">
                        <label for="applicantName" class="form-label">Name</label>
                        <input type="hidden" name="job_name" id="jobName" value="">
                        <input type="text" class="form-control form-control-lg custom-input"
                            id="applicantName" name="Name" value="{{ old('Name') }}" required>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-3">
                        <label for="applicantEmail" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg custom-input"
                            id="applicantEmail" name="Email" value="{{ old('Email') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-3">
                        <label for="applicantAddress" class="form-label">Address</label>
                        <input type="text" class="form-control form-control-lg custom-input"
                            id="applicantAddress" name="Address" value="{{ old('Address') }}" required>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-3">
                        <label for="applicantPhone" class="form-label">Phone</label>
                        <input type="number" class="form-control form-control-lg custom-input"
                            id="applicantPhone" name="Phone" value="{{ old('Phone') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                        <label for="applicantResume" class="form-label">C.V</label>
                        <input type="file" class="form-control form-control-lg custom-input"
                            id="applicantResume" name="cv" value="{{ old('cv') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                        <label for="coverLetter" value="{{ old('name') }}" class="form-label">Comments</label>
                        <textarea class="form-control form-control-lg custom-input" id="coverLetter" rows="4" name="Comments">{{ old('Comments') }}</textarea>
                    </div>
                </div>
            </form>
        </div>
        <div id="captchaContainer"></div>
        <div class="modal-footer border-0 justify-content-center">
            <button type="submit" form="applyForm" class="btn btn-danger btn-lg w-100 button-form-hiring">SEND</button>
        </div>
    </div>
</div>
</div>
    <!--{End Form Hiring} -->


    @endsection

