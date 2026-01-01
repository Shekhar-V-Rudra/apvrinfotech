@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - E-Commerce Solutions')

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
                        <li>E-Commerce Solutions</li>
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
                    <img src="{{ asset('apvr/assets/ecom.gif') }}" alt="about" class="image01">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="exp-content-right">
                    <span class="cr-subtitle position-relative primary-text-color fw-semibold">E-Commerce Solutions</span>
                    <h2 class="mt-4 mb-3 man001">Smart Solutions for <span class="primary-bg-light primary-text-color">
                        Online Selling Success
                    </span></h2>
                    <p class="mb-20">
                        E-commerce solutions are advanced tools and platforms that empower businesses to sell products and services online efficiently. These solutions include everything from an online storefront and shopping cart to secure payment gateways and inventory management systems.
                    </p>

                    <p class="mb-40">
                        Beyond sales, modern e-commerce platforms often provide marketing features and customer management tools, helping businesses promote their products, track customer interactions, and build lasting relationships. By streamlining the entire online sales process, these solutions enable businesses to reach more customers and operate seamlessly in the digital marketplace.
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
                <h2 class="mb-5 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color">Ecommerce</span> Solutions & Services</h2>
            </div>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100">
                    <span class="icon-wrapper"> 
                        <img src="{{ asset('apvr/assets/ecommerce.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Ecommerce SEO</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Our SEO specialists optimize your top-selling products using a comprehensive on-page and off-page eCommerce SEO strategy to drive organic traffic. For omni-channel retailers, we also offer Local SEO services to increase foot traffic to your physical stores.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.1s">
                    <span class="icon-wrapper"> 
                        <img src="{{ asset('apvr/assets/eppc.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Ecommerce PPC Ads</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We create tailored PPC campaigns that maximize ROI and reduce acquisition costs for your products. By integrating Google Shopping and Facebook Ads, we deliver highly targeted campaigns that drive measurable results.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                    <span class="icon-wrapper"> 
                        <img src="{{ asset('apvr/assets/ecan.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Ecommerce Analytics</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Analytics is critical to understanding if you're Ecommerce marketing campaigns are delivering the right results. We combine our expertise with Ecommerce Analytics & Conversion Rate Optimization to offer in-depth analysis and practical solutions.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.3s">
                    <span class="icon-wrapper"> 
                        <img src="{{ asset('apvr/assets/ewde.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Ecommerce Website Designing</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        We take the time to understand your target audience and deliver eCommerce website design services tailored to your industry, ensuring a seamless, engaging, and conversion-focused online store.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.4s">
                    <span class="icon-wrapper"> 
                        <img src="{{ asset('apvr/assets/ewde01.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">Ecommerce Website Development</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Our eCommerce website development services are designed to meet the highest standards of performance, security, scalability, and user experience, delivering a robust and reliable online store.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hm2-service-box text-center text-lg-start wow fadeInUp" data-wow-delay="0.5s">
                    <span class="icon-wrapper"> 
                        <img src="{{ asset('apvr/assets/aso.png') }}" alt="icon" class="img-fluid">
                    </span>
                    <h6 class="mt-32">App Store Optimization (ASO)</h6>
                    <p class="mb-32 mt-4 fw-medium">
                        Maximize your app's visibility and downloads on both Apple and Google Play stores. Our ASO services optimize your mobile app for search, rankings, and user engagement to drive more installs and active users.
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
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Our Ecommerce Solutions & Services</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Ecommerce SEO</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Ecommerce PPC Ads</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Ecommerce Analytics</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Ecommerce Website Designing</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Ecommerce Website Development</span>
                <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>App Store Optimization (ASO)</span>
            </div>
        </div>
    </div>
</div>

@endsection
