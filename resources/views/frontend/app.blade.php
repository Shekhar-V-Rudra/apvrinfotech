@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - App Development')

@section('content')
    <div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="assets/images/banner/breadcrumb.jpg">
        <span class="circle-shape-1 rounded-circle position-absolute"></span>
        <span class="circle-shape-2 rounded-circle position-absolute"></span>
        <span class="circle-shape-3 rounded-circle position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h1 class="text-white mb-3 display-2 fw-bold">Services</h1>
                        <ul>
                            <li><a href='{{ url('/') }}'>Home</a></li>
                            <li>App Development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="exp-section ptb-100 overflow-hidden">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/app.gif" alt="App Development" class="image01">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="exp-content-right">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold">App Development</span>
                        <h2 class="mt-4 mb-3 man001"> <span class="primary-bg-light primary-text-color"> Mobile App Development </span> for Your Business?</h2>
                        <p class="mb-40">We guide businesses through native and hybrid app development with end-to-end design, integration, and development services focused on scalability and performance.</p>
                        <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                            <a class='template-btn primary-btn' href='{{ url('/contact') }}'>Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cr2-brand-n-service bg-light-white pt-100 position-relative z-1 overflow-hidden">
        <span class="circle-shape-1 rounded-circle position-absolute z--1"></span>
        <span class="circle-shape-2 rounded-circle position-absolute z--1"></span>
        <div class="hm2-service-section pb-100 overflow-hidden">
            <div class="container position-relative z-1">
                <img src="assets/images/shapes/net-vector.png" class="position-absolute net-vector top-0 end-0 z--1" alt="vector">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="text-center">
                            <h2 class="mb-0 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color"> Technologies</span> for App Development</h2>
                        </div>
                    </div>
                </div>
                <div class="hm2-service-slider slider-spacing mt-60">
                    <div class="hm2-service-box h-100">
                        <span class="icon-wrapper"><img src="assets/java.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Java</h6>
                        <p class="mb-32 mt-4 fw-medium">Develop web, mobile, and enterprise applications with robust, feature-rich Java.</p>
                    </div>
                    <div class="hm2-service-box h-100">
                        <span class="icon-wrapper"><img src="assets/kotlin.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Kotlin</h6>
                        <p class="mb-32 mt-4 fw-medium">Modern language interoperable with Java for efficient, scalable apps.</p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/swift.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Swift</h6>
                        <p class="mb-32 mt-4 fw-medium">Fast, type-safe language for iOS, macOS, and watchOS app development.</p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/react.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">React Native</h6>
                        <p class="mb-32 mt-4 fw-medium">Build interactive, reusable components for cross-platform mobile apps.</p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/xcode.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Xcode</h6>
                        <p class="mb-32 mt-4 fw-medium">Complete workflow for designing, coding, testing, and debugging iOS apps.</p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/flutter.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Flutter</h6>
                        <p class="mb-32 mt-4 fw-medium">Open-source framework for Android, iOS, and web using a single codebase.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



