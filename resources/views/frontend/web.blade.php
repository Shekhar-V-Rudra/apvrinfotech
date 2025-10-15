@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Web Development')

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
                            <li>Web Development</li>
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
                        <img src="assets/web.gif" alt="Web Development" class="image01">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="exp-content-right">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold">Web Development</span>
                        <h2 class="mt-4 mb-3 man001"> Innovative <span class="primary-bg-light primary-text-color">Web Development</span> Focused on Your Success</h2>
                        <p class="mb-40">We build responsive, visually engaging, performance-driven websites that enhance engagement and support growth. Our solutions align to your brand and business goals.</p>
                        <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                            <a class='template-btn primary-btn' href='{{ url('/contact') }}'>Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section ptb-100 bg-light-white">
        <div class="container">
            <div class="col-xl-12">
                <div class="text-center">
                    <h2 class="mb-5 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color"> Web Development</span> Services</h2>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100">
                        <span class="icon-wrapper"><img src="assets/webad.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Web application Development</h6>
                        <p class="mb-32 mt-4 fw-medium">From concept and design to integration and support, we deliver complete web application solutions tailored to your needs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.1s">
                        <span class="icon-wrapper"><img src="assets/ewd.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Ecommerce Web Development</h6>
                        <p class="mb-32 mt-4 fw-medium">Build powerful online stores with seamless shopping and integrations to your operations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper"><img src="assets/jwd.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Java Web Development</h6>
                        <p class="mb-32 mt-4 fw-medium">Secure, scalable, and high-performing Java web solutions tailored to your business.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.3s">
                        <span class="icon-wrapper"><img src="assets/mwd.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Magento Web Development</h6>
                        <p class="mb-32 mt-4 fw-medium">Develop and scale your online store with Magento and optional WordPress integration.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.4s">
                        <span class="icon-wrapper"><img src="assets/wd.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">WordPress Development</h6>
                        <p class="mb-32 mt-4 fw-medium">Robust, scalable, and user-friendly WordPress solutions for your web presence.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.5s">
                        <span class="icon-wrapper"><img src="assets/csutomwd.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Custom Web Development</h6>
                        <p class="mb-32 mt-4 fw-medium">Cross-platform custom web solutions designed precisely for your unique requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



