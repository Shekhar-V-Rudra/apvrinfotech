@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - QA & Testing')

@section('content')

<div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="{{ asset('apvr/assets/images/banner/breadcrumb.jpg') }}">
    <span class="circle-shape-1 rounded-circle position-absolute"></span>
    <span class="circle-shape-2 rounded-circle position-absolute"></span>
    <span class="circle-shape-3 rounded-circle position-absolute"></span>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h1 class="text-white mb-3 display-2 fw-bold">Services</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>QA & Testing</li>
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
                    <img src="{{ asset('apvr/assets/qa-testing.gif') }}" alt="about" class="image01">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="exp-content-right">
                    <span class="cr-subtitle position-relative primary-text-color fw-semibold">Quality Assurance and Testing</span>
                    <h2 class="mt-4 mb-3 man001">End-to-End <span class="primary-bg-light primary-text-color">
                        Software Testing
                    </span> Services</h2>
                    <p class="mb-20">
                        Our End-to-End Software Testing Services ensure your applications perform flawlessly across every stage of the development lifecycle. From initial requirement analysis to final deployment, we conduct comprehensive testing to validate functionality, performance, security, and usability. Our expert QA team uses a combination of manual and automated testing techniques to identify defects early, reduce rework, and enhance product quality.
                    </p>

                    <p class="mb-40">
                        We focus on delivering reliable, scalable, and high-performing software that meets both user expectations and business objectives. By leveraging modern testing tools and frameworks, we simulate real-world conditions to detect potential issues before they impact your users. With our continuous testing approach, we help you accelerate time-to-market, minimize risks, and maintain a seamless user experience across devices and platforms.
                    </p>

                    <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                        <a class='template-btn primary-btn' href='{{ route("contact") }}'>Learn More</a>
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
            <img src="{{ asset('apvr/assets/images/shapes/net-vector.png') }}" class="position-absolute net-vector top-0 end-0 z--1" alt="vector">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="text-center">
                        <h2 class="mb-5 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color">Testing</span> Services</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/exploratory.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Exploratory Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Give us your app and we'll tell you where it breaks!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.1s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/automated.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Automation Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Our tried and testing methodologies that will help you save both time and cost.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/functional.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Functional Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Attain release readiness and a seamless user experience with robust functional testing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/mobile-app.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Mobile App Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Optimize your apps for Android/iOS platform for seamless user experience.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/ui-ux.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">UI/UX Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Let's evaluate the user experience and interface of your app, shall we?
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/load.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Performance/Load Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Performance and load testing ensure your software handles high traffic smoothly.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/uat.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">UAT/Release Auditing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Augment your software release effectiveness with comprehensive UAT and release auditing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/ai-ml.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">AI/ML Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Help you assess the intelligence of your algorithms, ML models & data to ensure your product maintains optimal functionality.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/security.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Security Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Let's evaluate your security mechanisms and discover Vulnerabilities, threats beforehand with a proactive approach.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/dfarms.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Testing on Device Farms</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Optimize your app's performance across a spectrum of devices.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/accessibility.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Accessibility Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Testing the relative ease of usage of an application on UX/UI and frontend capabilities.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/dfrag.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Device Fragmentation Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Understand, test & optimize your software's performance across browsers and devices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="hm3-ticker-section position-relative overflow-hidden z-1 hm3-light-bg">
    <span class="ticker-shape"></span>
    <div class="ur-ticker-box overflow-hidden">
        <div class="ur-ticker-wrapper primary-bg-color">
            <div class="ur-ticker">
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Our Testing Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Exploratory Testing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Automation Testing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Functional Testing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Mobile App Testing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>UI/UX Testing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Performance/Load Testing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>UAT/Release Auditing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>AI/ML Testing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Security Testing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Testing on Device Farms</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Accessibility Testing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Device Fragmentation Testing</span>
            </div>
        </div>
    </div>
</div>

<section class="service-section ptb-100 bg-light-white">
    <div class="container">
        <div class="hm2-service-section pb-100 overflow-hidden">
            <div class="container position-relative z-1">
                <img src="{{ asset('apvr/assets/images/shapes/net-vector.png') }}" class="position-absolute net-vector top-0 end-0 z--1" alt="vector">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="text-center">
                            <h2 class="mb-0 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color">Engagement</span> Models</h2>
                        </div>
                    </div>
                </div>
                <div class="hm2-service-slider slider-spacing mt-60">
                    <div class="hm2-service-box">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/pbased.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Project-Based Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Leverage comprehensive and tailored testing solutions with our Project-Based Testing service, where every aspect of your project is thoroughly tested for functionality, performance, and security.
                        </p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/mtesting.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Managed Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            From planning and execution to monitoring and reporting, streamline your testing efforts, optimize resources, and achieve higher software quality with our managed testing services.
                        </p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/product-testing.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Products in Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Whether it is Mobile or Desktop Applications, our Products Testing Services undergoes rigorous Testing, designed to meet your highest expectations.
                        </p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper">
                            <img src="{{ asset('apvr/assets/advisory.webp') }}" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">Advisory & Consulting</h6>
                        <p class="mb-32 mt-4 fw-medium">
                            Through tailored recommendations and actionable plans, empower your testing process and elevate your software quality with our expert Advisory & Consulting Testing Services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
