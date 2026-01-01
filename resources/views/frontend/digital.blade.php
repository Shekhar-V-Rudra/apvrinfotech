@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Digital Marketing')

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
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Digital Marketing</li>
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
                        <img src="assets/digital.gif" alt="Digital Marketing" class="image01">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="exp-content-right">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold">Digital Marketing</span>
                        <h2 class="mt-4 mb-3 man001"> Expand Your Business with <span class="primary-bg-light primary-text-color">Data-Driven Marketing</span> Solutions</h2>
                        <p class="mb-20">We focus on measurable results through SEO and digital marketing strategies that drive new customers to your website.</p>
                        <p class="mb-40">We work across industries and sizes, offering custom website development and comprehensive digital marketing strategies to expand reach and achieve growth.</p>
                        <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                            <a class='template-btn primary-btn' href="{{ url('/contact') }}">Know More</a>
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
                    <h2 class="mb-5 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color"> Digital Marketing</span> Services</h2>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100">
                        <span class="icon-wrapper"><img src="assets/smm.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Social Media Marketing</h6>
                        <p class="mb-32 mt-4 fw-medium">Expand your reach and engage your audience with targeted campaigns.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.1s">
                        <span class="icon-wrapper"><img src="assets/ecm.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">E-Commerce Marketing</h6>
                        <p class="mb-32 mt-4 fw-medium">Promote products, boost sales, and optimize your e-commerce SEO.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper"><img src="assets/emm.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Email Marketing</h6>
                        <p class="mb-32 mt-4 fw-medium">Design personalized newsletters that drive engagement and action.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.3s">
                        <span class="icon-wrapper"><img src="assets/wh.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Web Hosting</h6>
                        <p class="mb-32 mt-4 fw-medium">Secure, reliable hosting with monitoring, backups, and optimization.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.4s">
                        <span class="icon-wrapper"><img src="assets/cw.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Content Writing</h6>
                        <p class="mb-32 mt-4 fw-medium">High-quality content aligned with market trends and SEO standards.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.5s">
                        <span class="icon-wrapper"><img src="assets/orm.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Online Reputation Management</h6>
                        <p class="mb-32 mt-4 fw-medium">Generate, monitor, and manage reviews to build customer trust.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



