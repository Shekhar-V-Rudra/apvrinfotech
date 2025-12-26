@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Staff Augmentation')

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
                            <li>Staff Augmentation</li>

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
                        <img src="assets/ui.gif" alt="about" class="image01">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="exp-content-right">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold">Staff Augmentation</span>
                        <h2 class="mt-4 mb-3 man001"> Your developers and ours <span class="primary-bg-light primary-text-color">
                            Integrated
                        </span>Services</h2>
                        <p class="mb-20">

Staff augmentation is a flexible hiring strategy that provides you with skilled professionals to fill skill gaps or expand your teams without the cost or commitment of full-time hires. Need to tackle technical debt or support complex projects? We give you the expert tech talent you need—when you need it.
                        </p>

                        <p class="mb-40">
                            Apvr Infotech is a leading IT staff augmentation agency with numerous staffing solutions on demand. Our clients get relevant staffing support without overpaying for redundant recruitment stages. Remote developers will join the in-house development processes, assisting your staff in desktop, mobile, or web product development, giving you the support and assistance you need right now.
                        </p>

                        <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                            <a class='template-btn primary-btn' href='{{ url('/contact') }}'>Get a Free Demo</a>

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
            <div class="container  position-relative z-1">
                <img src="assets/images/shapes/net-vector.png" class="position-absolute net-vector top-0 end-0 z--1" alt="vector">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="text-center">

                <h2 class="mb-5 mt-4 wow fadeInUp"><span class="primary-bg-light primary-text-color"> Staff Augmentation </span> Services</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100">
                            <span class="icon-wrapper">
                                <img src="assets/mg.png" alt="icon" class="img-fluid">
                            </span>
                            <h6 class="mt-32">RECLAIM DELIVERY SPEED</h6>
                            <p class="mb-32 mt-4 fw-medium">

Close talent gaps in 7–10 days. Keep delivery on track with seasoned engineers who help the team maintain momentum without burning out core staff.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.1s">
                            <span class="icon-wrapper">
                                <img src="assets/pcg.png" alt="icon" class="img-fluid">
                            </span>
                            <h6 class="mt-32">EXTEND YOUR TEAM</h6>
                            <p class="mb-32 mt-4 fw-medium">

Access senior-level talent without delay or the legal weight of full-time hires. Scale engineering capacity instantly, without payroll overhead or recruiting friction.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="hm2-service-box text-center text-lg-start wow fadeInUp h-100" data-wow-delay="0.2s">
                            <span class="icon-wrapper">
                                <img src="assets/cas.png" alt="icon" class="img-fluid">
                            </span>
                            <h6 class="mt-32">STAY FOCUSED</h6>
                            <p class="mb-32 mt-4 fw-medium">

Reinforce internal teams with pros who bring domain-specific expertise from day one. Preserve in-house knowledge without slowing down to onboard or train.
                            </p>

                        </div>
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
                    <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>Staff Augmentation Services</span>
                    <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>RECLAIM DELIVERY SPEED</span>
                    <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>EXTEND YOUR TEAM</span>
                    <span class="text-white text-uppercase"><i class="fas fa-star me-2"></i>STAY FOCUSED</span>

                </div>
            </div>
        </div>
    </div>



    <section class="service-section ptb-100 bg-light-white">
        <div class="container">
            <div class="text-center">

                <h2 class="mb-0 mt-4 mb-5 wow fadeInUp">Our Staff Augmentation Process</h2>
                        </div>
            <div class="row justify-content-center g-4">
                <div class="hm2-service-slider slider-spacing mt-60">
                    <div class="hm2-service-box h-100">
                        <span class="icon-wrapper">
                            <img src="assets/ur.png" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">
                                    Tell your requirements  </h6>
                        <p class="mb-32 mt-4 fw-medium">


                                        Share your augmentation needs, including relevant tech stack, team size, and staffing period. The more details we have, the faster we’ll connect you with the ideal candidates.
                        </p>

                    </div>
                    <div class="hm2-service-box h-100">
                        <span class="icon-wrapper">
                            <img src="assets/uni.png" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">
                                    Choose developers  </h6>
                        <p class="mb-32 mt-4 fw-medium">

                                        We provide ready-to-go teams for urgent staff needs. However, if you want to get a custom-recruited developer for long-lasting collaboration, you can participate in selecting and interviewing.
                        </p>

                    </div>
                    <div class="hm2-service-box">
                        <span class="icon-wrapper">
                            <img src="assets/html5.png" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">

Hire remote developers </h6>
                        <p class="mb-32 mt-4 fw-medium">

                                        Staff augmentation includes full integration with your in-house team, thus ensuring successful collaboration. Brief your hires on project details and assign responsibilities to each team member.

                    </div>

                    <div class="hm2-service-box">
                        <span class="icon-wrapper">
                            <img src="assets/sw.png" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">
                                    Manage extended team </h6>
                        <p class="mb-32 mt-4 fw-medium">

                                        The extended team aligns with your schedule and uses your project tools. We can also provide a part-time or full-time Project Manager to handle team management.
                        </p>

                    </div>



                     <div class="hm2-service-box">
                        <span class="icon-wrapper">
                            <img src="assets/sw.png" alt="icon" class="img-fluid">
                        </span>
                        <h6 class="mt-32">


                                    Get your project delivered  </h6>
                        <p class="mb-32 mt-4 fw-medium">




We monitor the project closely to ensure your requirements are met. The result is a robust, high-quality digital solution delivered on time and aligned with your goals.
                        </p>

                    </div>



                </div>
            </div>
        </div>
    </section>
@endsection