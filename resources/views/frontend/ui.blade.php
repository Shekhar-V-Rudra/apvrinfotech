@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - UI/UX Design')

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
                            <li>UI/UX Design</li>
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
                        <img src="assets/ui.gif" alt="UI/UX" class="image01">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="exp-content-right">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold">UI/UX Design</span>
                        <h2 class="mt-4 mb-3 man001"> Transforming Ideas into <span class="primary-bg-light primary-text-color">User-Centric Designs</span></h2>
                        <p class="mb-40">
                            UI (User Interface) and UX (User Experience) design are essential for creating impactful digital products and websites. By studying user behavior and preferences, we craft designs that are visually appealing and ensure smooth, intuitive interactions for a superior user experience.
                        </p>
                        <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                            <a class='template-btn primary-btn' href='{{ url('/contact') }}'>Learn More</a>
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
                <img src="assets/images/shapes/net-vector.png" class="position-absolute net-vector top-0 end-0 z--1" alt="vector">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="text-center">
                            <h2 class="mb-0 mt-4 wow fadeInUp">Our <span class="primary-bg-light primary-text-color"> UI/UX Design</span> Process</h2>
                        </div>
                    </div>
                </div>
                <div class="hm2-service-slider slider-spacing mt-60">
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/ui.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Product Definition</h6>
                        <p class="mb-32 mt-4 fw-medium">Before developing a product, it’s crucial to understand the full context and establish a solid foundation. All stakeholders collaborate to define the project scope, team structure, communication methods, and user expectations.</p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/web.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Research</h6>
                        <p class="mb-32 mt-4 fw-medium">After defining the product, designers conduct in-depth research considering both users and the market. Stakeholders gather insights through various methods, analyze qualitative data, and ensure a clear understanding of user needs and product challenges.</p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/app.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Analysis</h6>
                        <p class="mb-32 mt-4 fw-medium">In this phase, designers carefully analyze the insights gathered during research. They define user groups, outline key features, visualize the product’s final appearance, and map the business workflows to ensure a solid foundation.</p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/graphic.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Design</h6>
                        <p class="mb-32 mt-4 fw-medium">Designers begin creating components, from information architecture to the user interface and experience design. All stakeholders actively participate in sketching and developing wireframes.</p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/seo.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Validation or Testing</h6>
                        <p class="mb-32 mt-4 fw-medium">Once the design is complete, every element undergoes thorough testing to verify it meets user needs. Insights from testers and end users are gathered to confirm the interface functions smoothly.</p>
                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper"><img src="assets/digital.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Launch</h6>
                        <p class="mb-32 mt-4 fw-medium">After testing, the product is ready to hand over to development for full implementation, with continued validation to ensure a smooth launch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section ptb-100 bg-light-white">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-0 mt-4 mb-5 wow fadeInUp">Our UI/UX Design Services</h2>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100">
                        <span class="icon-wrapper"><img src="assets/cwd.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Personalized Web Design</h6>
                        <p class="mb-32 mt-4 fw-medium">Personalized website solutions tailored to your business with smart UI and UX designs for a seamless user experience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.1s">
                        <span class="icon-wrapper"><img src="assets/cb.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Brand Identity Design</h6>
                        <p class="mb-32 mt-4 fw-medium">Cohesive brand identities that communicate your brand’s personality and make a lasting impression.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                        <span class="icon-wrapper"><img src="assets/wf.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Wireframe Design</h6>
                        <p class="mb-32 mt-4 fw-medium">Detailed wireframes that map out structure and flow with user needs at the forefront.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.3s">
                        <span class="icon-wrapper"><img src="assets/mad.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Mobile App Design</h6>
                        <p class="mb-32 mt-4 fw-medium">Visually appealing and highly functional mobile app designs focused on usability and performance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.4s">
                        <span class="icon-wrapper"><img src="assets/wad.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Web App Design</h6>
                        <p class="mb-32 mt-4 fw-medium">Designing engaging and performant web applications that align with your goals.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.5s">
                        <span class="icon-wrapper"><img src="assets/pd.png" alt="icon" class="img-fluid"></span>
                        <h6 class="mt-32">Product Design</h6>
                        <p class="mb-32 mt-4 fw-medium">End-to-end UI/UX product design delivering authentic experiences that strengthen brand loyalty.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



