@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - DevOps Services')

@section('content')

<div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="{{ asset('apvr/assets/images/banner/breadcrumb.jpg') }}">
    <span class="circle-shape-1 rounded-circle position-absolute"></span>
    <span class="circle-shape-2 rounded-circle position-absolute"></span>
    <span class="circle-shape-3 rounded-circle position-absolute"></span>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h1 class="text-white mb-3 display-2 fw-bold">Digital Products</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>DevOps Services</li>
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
                    <img src="{{ asset('apvr/assets/erp.gif') }}" alt="about" class="image01">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="exp-content-right">
                    <span class="cr-subtitle position-relative primary-text-color fw-semibold">DevOps Services</span>
                    <h2 class="mt-4 mb-3" style="font-size: 40px;">Ready to Transform Your Software Delivery with <span class="primary-bg-light primary-text-color">
                        DevOps?
                    </span></h2>
                    <p class="mb-20">
                        Our DevOps services streamline your development lifecycle, enabling faster releases, improved collaboration, and higher quality software. From continuous integration and deployment (CI/CD) to automated testing, infrastructure as code, and cloud-native solutions, we help your teams deliver value consistently and efficiently.
                    </p>

                    <p class="mb-40">
                        We empower businesses to embrace a culture of continuous improvement and collaboration. By integrating development, operations, and quality assurance, our DevOps solutions reduce downtime, enhance system reliability, and accelerate time-to-market, ensuring your software evolves seamlessly with your business needs.
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
                        <h2 class="mb-0 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color">DevOps</span> Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="hm2-service-slider slider-spacing mt-60">
                <div class="hm2-service-box">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/ecs.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">DevOps Consulting Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Our DevOps consulting services provide expert guidance on transforming your software delivery process. As a trusted DevOps consultant, we analyze your current workflows, identify bottlenecks, and create a strategic roadmap for DevOps implementation.
                    </p>
                </div>
                <div class="hm2-service-box">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/ces.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">DevOps Implementation Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Our DevOps implementation services help businesses smoothly transition to automated, integrated, and optimized workflows. We handle the technical complexities of implementing DevOps practices across your organization, ensuring efficiency and reliability.
                    </p>
                </div>
                <div class="hm2-service-box">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/eis.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">DevOps Automation Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        As specialists in DevOps automation services, we build robust, scalable pipelines that eliminate manual steps, reduce errors, and accelerate delivery cycles. Our automation solutions can cut deployment time by up to 80%, boosting efficiency across your organization.
                    </p>
                </div>
                <div class="hm2-service-box">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/ead.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">DevOps Managed Services</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Our DevOps managed services provide continuous support, monitoring, and ongoing optimization for your infrastructure and pipelines. Let our experts handle the day-to-day management and operational complexities while you focus on innovation and strategic growth.
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
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Our DevOps Solutions</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>DevOps Consulting Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>DevOps Implementation Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>DevOps Automation Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>DevOps Managed Services</span>
            </div>
        </div>
    </div>
</div>

<section class="service-section ptb-100 bg-light-white">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-0 mt-4 mb-5 wow fadeInUp">Our DevOps Management Services Approach</h2>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/cwd.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Assessment</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We analyze your current workflows and technology stack
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.1s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/cb.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Strategy</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Our experts design a tailored DevOps roadmap and implementation plan
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/wf.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Implementation</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Our skilled team builds and integrates your DevOps toolchain
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.3s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/mad.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Automation</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We create CI/CD pipelines and infrastructure as code solutions
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.4s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/wad.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Monitoring</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Implement proactive monitoring and observability
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.5s">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/pd.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Optimization</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Continuous improvement of your DevOps processes
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="d-block d-lg-none">
    <div class="brands-container pt-5 pb-5">
        <div class="container">
            <h4 class="mt-4 mb-32" style="text-align: center !important; color: #13114C !important;">Our Global Achievments</h4>
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

<div class="d-lg-block d-none">
    <div class="brands-container pt-5 pb-5">
        <div class="container">
            <h4 class="mt-4 mb-32" style="text-align: center !important; color: #13114C !important;">Our Global Achievments</h4>
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
