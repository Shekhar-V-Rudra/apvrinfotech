@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - AI & Machine Learning')

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
                        <li>Artificial Intelligence & Machine Learning</li>
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
                    <img src="{{ asset('apvr/assets/mlm.gif') }}" alt="about" class="image01">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="exp-content-right">
                    <span class="cr-subtitle position-relative primary-text-color fw-semibold">Artificial Intelligence & Machine Learning</span>
                    <h2 class="mt-4 mb-3 man001">Shaping the Future with Tailored <span class="primary-bg-light primary-text-color">
                        AI & ML Services
                    </span></h2>
                    <p class="mb-20">
                        At Apvr Infotech, we design intelligent systems and develop algorithms that evolve, adapt, and drive meaningful business transformation. Our AI and ML solutions go beyond conventional automation, helping you identify patterns, extract actionable insights, and make data-driven decisions in real time.
                    </p>

                    <p class="mb-40">From predictive maintenance in manufacturing to AI-powered chatbots in customer support and risk assessment in finance, our solutions are crafted to enhance human intelligence and unlock your business's full potential. We offer tailored AI and ML development services that prioritize speed, precision, and compliance across every stage of implementation.</p>

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
                        <h2 class="mb-0 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color">AI & ML Solutions</span></h2>
                    </div>
                </div>
            </div>
            <div class="hm2-service-slider slider-spacing mt-60">
                <div class="hm2-service-box h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/admin.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">AI Strategy & Consulting</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We uncover high-ROI AI opportunities through deep discovery and craft a scalable, tailored roadmap. Our approach ensures seamless implementation and measurable business impact.
                    </p>
                </div>
                <div class="hm2-service-box h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/staff.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Machine Learning Model Development</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We build ML pipelines that automate data processing and model training, delivering adaptive solutions integrated seamlessly into your workflows.
                    </p>
                </div>
                <div class="hm2-service-box h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/email.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Predictive Analytics & Forecasting</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We use ML-driven predictive analytics to forecast key metrics and provide prescriptive insights for optimal decision-making.
                    </p>
                </div>
                <div class="hm2-service-box h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/mlmw.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Natural Language Processing (NLP)</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Our NLP solutions help systems understand and respond to human language, automating workflows and powering intelligent chatbots.
                    </p>
                </div>
                <div class="hm2-service-box h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/pgi.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Computer Vision</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We build advanced AI systems for image and video analysis, enabling automated inspection, facial recognition, and real-time security with high accuracy and edge deployment.
                    </p>
                </div>
                <div class="hm2-service-box h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/amo.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">AI for Business Process Automation</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Our AI automation enhances RPA with cognitive capabilities, enabling systems to make decisions, interpret documents, and act autonomously.
                    </p>
                </div>
                <div class="hm2-service-box h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/tds.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">AI on Cloud & Edge</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We ensure seamless model integration and real-time deployment on cloud or edge, using FastAPI/Flask, TorchServe/TensorFlow Serving, Docker, and Kubernetes.
                    </p>
                </div>
                <div class="hm2-service-box h-100">
                    <span class="icon-wrapper">
                        <img src="{{ asset('apvr/assets/pls.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">AI Risk, Ethics & Compliance Consulting</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We help businesses build responsible AI systems that address ethical, legal, and regulatory challenges while ensuring compliance and public trust.
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
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>What We Offer</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>AI Strategy & Consulting</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Machine Learning Model Development</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Predictive Analytics & Forecasting</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Natural Language Processing (NLP)</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Computer Vision</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>AI for Business Process Automation</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>AI on Cloud & Edge</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>AI Risk, Ethics & Compliance Consulting</span>
            </div>
        </div>
    </div>
</div>
@endsection
