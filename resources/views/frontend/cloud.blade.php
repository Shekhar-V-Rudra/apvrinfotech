@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Cloud Computing')

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
                        <li>Cloud Computing</li>
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
                    <img src="{{ asset('apvr/assets/cloud.gif') }}" alt="about" class="image01">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="exp-content-right">
                    <span class="cr-subtitle position-relative primary-text-color fw-semibold">Cloud Computing</span>
                    <h2 class="mt-4 mb-3 man001">Empowering Businesses Through Intelligent <span class="primary-bg-light primary-text-color">
                        Cloud Innovation
                    </span></h2>
                    <p class="mb-20">
                        In an era defined by digital transformation, Apvr Infotech stands at the forefront of cloud innovation, unlocking unparalleled freedom and agility for businesses. Our comprehensive cloud solutions are designed to help enterprises navigate the complexities of multi-cloud and hybrid cloud environments, ensuring seamless adoption, integration, and management.
                    </p>

                    <p class="mb-40">
                        From leading global hyperscalers to our proprietary CloudInfinit platform, Apvr Infotech delivers the flexibility, scalability, and reliability required to accelerate innovation and achieve measurable business outcomes.
                    </p>

                    <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                        <a class='template-btn primary-btn' href='{{ route("contact") }}'>Know More</a>
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
                <h2 class="mb-5 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color">Service</span> Offerings</h2>
            </div>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/cloud.webp') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">CloudInfinit Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Leverage virtualization, massive scalability, enterprise security, and intelligent management to carry out business seamlessly on a larger scale with our flagship solutions.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.1s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/hyper.webp') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Hyperscale Partner Cloud Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Benefit from the agility of hyperscale clouds, such as rapid provisioning, self-service orchestration, and spend management, for a consistent experience.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/content.webp') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Content Delivery Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Deliver high-performance websites and applications with simplified edge-to-cloud solutions for content delivery.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.3s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/migration.webp') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Advisory & Migration Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Discover, analyze, migrate, secure, and optimize applications from customer data centers to hybrid or multi-cloud with automation and assurance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.4s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/multi-cloud.webp') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Multi Cloud Management Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Get ahead in your multi-cloud journey with right-fit hybrid IT solutions – a one-stop platform for enabling any cloud anywhere.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.5s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/hybrid.webp') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Hybrid Cloud Managed Security Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Secure your organization's critical data, assets, and applications through advanced threat-hunting solutions across multiple clouds.
                    </p>
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
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Our Service Offerings</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>CloudInfinit Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Hyperscale Partner Cloud Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Content Delivery Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Advisory & Migration Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Multi Cloud Management Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Hybrid Cloud Managed Security Services</span>
            </div>
        </div>
    </div>
</div>

@endsection
