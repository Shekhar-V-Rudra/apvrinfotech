@extends('frontend.layouts.master')
@section('title', 'Apvr Infotech - Support & Maintenance')
@section('content')

<!-- Breadcrumb Section -->
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
                        <li>Software Maintenance and Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Experience Section -->
<section class="exp-section ptb-100 overflow-hidden">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="image-wrapper">
                    <img src="{{ asset('apvr/assets/crm.gif') }}" alt="about" class="image01">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="exp-content-right">
                    <span class="cr-subtitle position-relative primary-text-color fw-semibold">Software Maintenance and Support</span>
                    <h2 class="mt-4 mb-3" style="font-size: 40px;">Sustaining Excellence Through <span class="primary-bg-light primary-text-color">Continuous Support</span></h2>
                    <p class="mb-20">
                        Our team ensures that your software evolves with your business. Through regular maintenance, performance checks, and prompt technical support, we keep your systems reliable and future-ready. We don't just fix issues—we optimize, improve, and future-proof your digital infrastructure.
                    </p>
                    <p class="mb-40">
                        With our dedicated support team available to assist you at every step, we guarantee fast response times, clear communication, and long-term reliability. By continuously improving your software's functionality and security, we help your business maintain a competitive edge in an ever-changing digital landscape.
                    </p>
                    <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                        <a class='template-btn primary-btn' href='{{ route("contact") }}'>Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Benefits Section -->
<section class="cr2-brand-n-service bg-light-white pt-100 position-relative z-1 overflow-hidden">
    <span class="circle-shape-1 rounded-circle position-absolute z--1"></span>
    <span class="circle-shape-2 rounded-circle position-absolute z--1"></span>

    <div class="hm2-service-section pb-100 overflow-hidden">
        <div class="container position-relative z-1">
            <img src="{{ asset('apvr/assets/images/shapes/net-vector.png') }}" class="position-absolute net-vector top-0 end-0 z--1" alt="vector">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="text-center">
                        <h2 class="mb-0 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color">Service</span> Benefits</h2>
                    </div>
                </div>
            </div>
            <div class="hm2-service-slider slider-spacing mt-60">
                <div class="hm2-service-box">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/cc.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">SLA-Backed Resolution Timelines</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Guaranteed timely issue resolution with clearly defined SLA-backed response and resolution timelines to ensure uninterrupted business operations.
                    </p>
                </div>
                <div class="hm2-service-box">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/sa.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Automated Updates & Patch Management</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Seamlessly deliver automated updates and patch management to keep your software secure, stable, and always up to date.
                    </p>
                </div>
                <div class="hm2-service-box">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/se.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Multi-Timezone Support Availability</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Round-the-clock support across multiple time zones to ensure uninterrupted assistance whenever and wherever you need it.
                    </p>
                </div>
                <div class="hm2-service-box">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/co.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Custom Escalation Paths and Workflows</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Tailored escalation paths and workflows designed to ensure swift issue resolution and transparent communication at every support level.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ticker Section -->
<div class="hm3-ticker-section position-relative overflow-hidden z-1 hm3-light-bg">
    <span class="ticker-shape"></span>
    <div class="ur-ticker-box overflow-hidden">
        <div class="ur-ticker-wrapper primary-bg-color">
            <div class="ur-ticker">
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Our Service Benefits</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>SLA-Backed Resolution Timelines</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Automated Updates & Patch Management</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Multi-Timezone Support Availability</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Custom Escalation Paths and Workflows</span>
            </div>
        </div>
    </div>
</div>

<!-- Help Section -->
<section class="service-section ptb-100 bg-light-white">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-0 mt-4 mb-5 wow fadeInUp">How Can We Help You?</h2>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/sca.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Ongoing Technical Support</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Consistent, multi-tier (L1 - L4) technical assistance to resolve user issues, system errors, and operational challenges through expert troubleshooting and fast, structured responses.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.1s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/sec.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Release & Deployment Management</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Optimize software updates through scheduled deployments and rollback planning. Achieve stable releases and faster rollouts without compromising system integrity or UX.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/gdpr.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Monitoring & Issue Tracking</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Let us implement real-time systems with proactive alerting and incident tracking to quickly identify issues, reduce downtime, and provide visibility into your system's health.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/gdpr.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Infrastructure & DevOps Support</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Support your environments with DevOps best practices, CI/CD pipelines, and Infrastructure Code for consistent deployment and a reliable foundation for software operations.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/gdpr.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Compliance & Documentation</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We help you maintain thorough technical documentation and compliance records to support audits, onboarding, and internal standards with regulatory and operational requirements.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/gdpr.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Vendor & Third-Party Coordination</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Make sure your external dependencies are stable, secure, and monitored. Our team manages integrations and communication with third-party vendors and APIs to resolve issues efficiently.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Global Achievements Section - Mobile -->
<div class="d-block d-lg-none">
    <div class="brands-container pt-5 pb-5">
        <div class="container">
            <h4 class="mt-4 mb-32" style="text-align: center !important; color: #13114C !important;">Our Global Achievements</h4>
            <div class="row">
                <div class="col-6 col-md-3">
                    <img src="{{ asset('apvr/assets/c01.png') }}" class="mb-3 imas01">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('apvr/assets/c02.png') }}" class="mb-3 imas01">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('apvr/assets/c03.png') }}" class="mb-3 imas01">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('apvr/assets/c04.png') }}" class="mb-3 imas01">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Global Achievements Section - Desktop -->
<div class="d-lg-block d-none">
    <div class="brands-container pt-5 pb-5">
        <div class="container">
            <h4 class="mt-4 mb-32" style="text-align: center !important; color: #13114C !important;">Our Global Achievements</h4>
            <div class="row">
                <div class="col-6 col-md-3">
                    <img src="{{ asset('apvr/assets/c01.png') }}" class="mb-3 imas02">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('apvr/assets/c02.png') }}" class="mb-3 imas02">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('apvr/assets/c03.png') }}" class="mb-3 imas02">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{ asset('apvr/assets/c04.png') }}" class="mb-3 imas02">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
