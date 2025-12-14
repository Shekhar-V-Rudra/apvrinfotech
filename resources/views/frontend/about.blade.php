@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - About Us')

@section('content')
    <div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="assets/images/banner/breadcrumb.jpg">
        <span class="circle-shape-1 rounded-circle position-absolute"></span>
        <span class="circle-shape-2 rounded-circle position-absolute"></span>
        <span class="circle-shape-3 rounded-circle position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h1 class="text-white mb-3 display-2 fw-bold">About Company</h1>
                        <ul>
                            <li><a href='{{ url('/') }}'>Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section ptb-100 overflow-hidden">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-xl-6">
                    <div class="about-content-left position-relative">
                        <img src="assets/images/about/ab-2.png" alt="feature-image" class="img-fluid">
                        <div class="position-absolute ab-years-box wow fadeInUp">
                            <h3 class="mb-0">6+</h3>
                            <p class="mb-0">Years<br>Of Experince</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-content-right">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold">More About Our Company</span>
                        <h2 class="mt-4 mb-5">Strengthening Businesses with IT Innovation</h2>
                        <p class="mb-32">
                            Apvr Infotech is a versatile creative agency dedicated to designing and delivering impactful campaigns and projects for our clients. We offer end-to-end services including brand strategy, advertising, graphic design, web development, and more, helping businesses convey their message with clarity and creativity.
                        </p>
                        <div class="cta-box bg-white rounded-3 theme-shadow">
                            <div class="d-flex gap-3 flex-wrap flex-sm-nowrap">
                                <span class="icon-wrapper primary-bg-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.8203 1.30469C20.3789 1.82031 20.3789 2.72266 19.8203 3.23828L8.82031 14.2383C8.30469 14.7969 7.40234 14.7969 6.88672 14.2383L1.38672 8.73828C0.828125 8.22266 0.828125 7.32031 1.38672 6.80469C1.90234 6.24609 2.80469 6.24609 3.32031 6.80469L7.83203 11.3164L17.8867 1.30469C18.4023 0.746094 19.3047 0.746094 19.8203 1.30469Z" fill="#5044EB"/>
                                    </svg>
                                </span>
                                <div>
                                    <h6 class="mb-20">Top IT Solutions Partner 2025</h6>
                                    <p class="mb-0">
                                        Discover the perfect blend of innovation and technology with our customized IT services, built to drive business growth in 2025 and the future.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-4 mt-40 flex-wrap">
                                <a class='template-btn primary-btn' href='{{ url('/appointment') }}'>Meet with Us</a>
                                <a href="tel:+9199099971138">
                                    <div class="cta-call-btn d-flex align-items-center gap-2">
                                        <span class="icon-tel rounded-circle">
                                            <span class="primary-bg-color rounded-circle w-100 h-100 d-inline-flex align-items-center justify-content-center text-white">
                                                <i class="fa-solid fa-phone"></i>
                                            </span>
                                        </span>
                                        <div>
                                            <span class="fs-sm fw-medium mb-2 d-block text-color">Call Us 24/7</span>
                                            <h5 class="mb-0 fs-20">+91 99099971138</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="exp-section ptb-100 overflow-hidden">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/about/ab-3.jpg" alt="about" class="img-fluid rounded-4">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="exp-content-right">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold">Unique Quality Of Our Team</span>
                        <h2 class="mt-4 mb-5">We Deliver Exceptional <span class="primary-bg-light primary-text-color">customer satisfaction</span></h2>
                        <p class="mb-40">
                            Our dedication to quality ensures that every client experiences outstanding service, with their needs fulfilled and expectations surpassed in every engagement.
                        </p>
                        <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                            <a class='template-btn primary-btn' href='{{ url('/contact') }}'>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Global Achievements Section - Mobile -->
    <div class="d-block d-lg-none">
        <div class="brands-container pt-5 pb-5">
            <div class="container">
                <h4 class="mt-4 mb-32" style="text-align: center !important; color: #13114c !important;">Our Global Achievments</h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="assets/c01.png" class="mb-3 w-100" />
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c02.png" class="mb-3 w-100" />
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c04.png" class="mb-3 w-100" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Global Achievements Section - Desktop -->
    <div class="d-lg-block d-none">
            <div class="brands-container pt-5 pb-5">
                <div class="container">
                    <h4 class="mt-4 mb-32" style="text-align: center !important; color: #13114C !important;">Our Global Achievments</h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="assets/c01.png" class="mb-3 imas02">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c02.png" class="mb-3 imas02">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c04.png" class="mb-3 imas02">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


