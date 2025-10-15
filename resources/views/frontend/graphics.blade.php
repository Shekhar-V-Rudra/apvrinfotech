@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Graphics Design')

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
                            <li>Graphics Designing</li>
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
                        <img src="assets/graphics.gif" alt="Graphics" class="image01">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="exp-content-right">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold">Graphics Designing</span>
                        <h2 class="mt-4 mb-3 man001"> Bring Your Website to Life with Expert <span class="primary-bg-light primary-text-color">Graphics Design</span></h2>
                        <p class="mb-40">Our expert graphic design services transform your website into a visually engaging and impactful experience. We ensure your brand message is communicated clearly and your online presence stands out.</p>
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
                    <h2 class="mb-5 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color"> Graphics Design</span> Services</h2>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp">
                        <span class="icon-wrapper"><img src="assets/fast.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">FAST & Creative Graphic Design Services</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        <span class="icon-wrapper"><img src="assets/logo.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Logo Design to Brand Marketing Graphics</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp" data-wow-delay="0.2s">
                        <span class="icon-wrapper"><img src="assets/weblink.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Website & Mobile UI/UX Graphic Design Services</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp" data-wow-delay="0.3s">
                        <span class="icon-wrapper"><img src="assets/digitalads.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Digital Ads & Social Media Graphic Design Services</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp" data-wow-delay="0.4s">
                        <span class="icon-wrapper"><img src="assets/marketing.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Marketing & Sales Graphic Design Materials</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp" data-wow-delay="0.5s">
                        <span class="icon-wrapper"><img src="assets/int.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Interactive Design & Animation</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



