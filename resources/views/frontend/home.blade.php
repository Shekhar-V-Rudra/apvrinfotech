@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Home')

@section('content')
    <section class="hm2-hero-section position-relative z-1 overflow-hidden">
        <img src="assets/images/shapes/hero-shape.webp" alt="hero shape" class="hero-shape position-absolute z--1 end-0 top-0">
        <img src="assets/images/shapes/hero-shape-blue.png" alt="hero shape" class="blue hero-shape position-absolute z--1 end-0 top-0">
        <img src="assets/images/shapes/hero-shape-purple.png" alt="hero shape" class="purple hero-shape position-absolute z--1 end-0 top-0">
        <img src="assets/images/shapes/hero-shape-red.png" alt="hero shape" class="red hero-shape position-absolute z--1 end-0 top-0">
        <img src="assets/images/shapes/hero-shape-green.png" alt="hero shape" class="green hero-shape position-absolute z--1 end-0 top-0">
        <img src="assets/images/shapes/hero-shape-orange.png" alt="hero shape" class="orange hero-shape position-absolute z--1 end-0 top-0">
        <img src="assets/images/shapes/blur-layer.png" alt="layer blur" class="position-absolute start-0 top-0 z--1">
        <span class="circle-shape-1 position-absolute z--1" data-parallax='{"y": 60}'></span>
        <span class="circle-shape-2 position-absolute z--1" data-parallax='{"x": 80}'></span>
        <span class="circle-shape-3 position-absolute z--1" data-parallax='{"y": -60}'></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-10">
                    <div class="hm2-hero-content">
                        <h1 class="display-2 fw-bold mb-4 wow fadeInUp">Transform your vision with  <span class="primary-bg-light primary-text-color px-2">IT Innovation</span></h1>
                        <p class="mb-5 lead fw-medium wow fadeInUp" data-wow-delay="0.2s">
                            Transform your ideas into powerful digital experiences with our expert team. We craft high-performance websites, intuitive mobile apps, and result-driven marketing strategies to help your business grow faster
                        </p>
                        <div class="d-flex align-items-center gap-4 flex-wrap">
                            <a class='template-btn primary-btn wow fadeInUp' data-wow-delay='0.3s' href='#'>Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="hero-image">
                        <img src="assets/images/home-2/hero-man.png" alt="hero man" class="hero-man">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


