@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Career')

@section('content')
    <div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="assets/images/banner/breadcrumb.jpg">
        <span class="circle-shape-1 rounded-circle position-absolute"></span>
        <span class="circle-shape-2 rounded-circle position-absolute"></span>
        <span class="circle-shape-3 rounded-circle position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h1 class="text-white mb-3 display-2 fw-bold">Career</h1>
                        <ul>
                            <li><a href='{{ url('/') }}'>Home</a></li>
                            <li>Career</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Career Header Section -->
    <section class="career-header-section ptb-100 position-relative">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="career-feature-box text-center p-5 h-100">
                        <div class="career-icon mb-4">
                            <i class="fa-solid fa-heart fa-3x primary-text-color"></i>
                        </div>
                        <h3 class="mb-4 fw-bold">Excel</h3>
                        <p class="mb-0">Constantly evolving together: learning and thriving as a united company and individuals.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="career-feature-box text-center p-5 h-100">
                        <div class="career-icon mb-4">
                            <i class="fa-solid fa-graduation-cap fa-3x primary-text-color"></i>
                        </div>
                        <h3 class="mb-4 fw-bold">Develop</h3>
                        <p class="mb-0">Unlock Your Hidden Potential: Empower yourself through lifelong learning.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="career-feature-box text-center p-5 h-100">
                        <div class="career-icon mb-4">
                            <i class="fa-solid fa-chart-line fa-3x primary-text-color"></i>
                        </div>
                        <h3 class="mb-4 fw-bold">Advance</h3>
                        <p class="mb-0">Passion fuels our purpose, driving growth every step of the way.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Openings Section -->
    <section class="current-openings-section ptb-100 bg-light-white">
        <div class="container">
            <div class="text-center mb-5">
                <span class="cr-subtitle position-relative primary-text-color fw-semibold">JOIN OUR TEAM</span>
                <h2 class="mt-4 mb-5">Current Openings</h2>
            </div>
            <div class="row g-4">
                <!-- Job Listing 1 -->
                <div class="col-lg-6 col-md-6">
                    <div class="job-card bg-white p-4 rounded-3 h-100">
                        <h4 class="job-title mb-3 fw-bold">Business Development Executive</h4>
                        <div class="job-details mb-3">
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-users me-1"></i> Vacancy: 3
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-briefcase me-1"></i> Full time
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-calendar-days me-1"></i> Exp. 0-2 Years
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-location-dot me-1"></i> Surat
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="template-btn primary-btn w-100 text-center">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job Listing 2 -->
                <div class="col-lg-6 col-md-6">
                    <div class="job-card bg-white p-4 rounded-3 h-100">
                        <h4 class="job-title mb-3 fw-bold">UI/UX Designer</h4>
                        <div class="job-details mb-3">
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-users me-1"></i> Vacancy: 2
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-briefcase me-1"></i> Full time
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-calendar-days me-1"></i> Exp. 1-3 Years
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-location-dot me-1"></i> Surat
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="template-btn primary-btn w-100 text-center">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job Listing 3 -->
                <div class="col-lg-6 col-md-6">
                    <div class="job-card bg-white p-4 rounded-3 h-100">
                        <h4 class="job-title mb-3 fw-bold">PHP Laravel Developer</h4>
                        <div class="job-details mb-3">
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-users me-1"></i> Vacancy: 3
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-briefcase me-1"></i> Full time
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-calendar-days me-1"></i> Exp. 0-1 Year
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-location-dot me-1"></i> Surat
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="template-btn primary-btn w-100 text-center">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job Listing 4 -->
                <div class="col-lg-6 col-md-6">
                    <div class="job-card bg-white p-4 rounded-3 h-100">
                        <h4 class="job-title mb-3 fw-bold">WordPress Developer</h4>
                        <div class="job-details mb-3">
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-users me-1"></i> Vacancy: 2
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-briefcase me-1"></i> Full time
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-calendar-days me-1"></i> Exp. 0-2 Years
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-location-dot me-1"></i> Surat
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="template-btn primary-btn w-100 text-center">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job Listing 5 -->
                <div class="col-lg-6 col-md-6">
                    <div class="job-card bg-white p-4 rounded-3 h-100">
                        <h4 class="job-title mb-3 fw-bold">React JS Developer</h4>
                        <div class="job-details mb-3">
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-users me-1"></i> Vacancy: 2
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-briefcase me-1"></i> Full time
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-calendar-days me-1"></i> Exp. 0-2 Years
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-location-dot me-1"></i> Surat
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="template-btn primary-btn w-100 text-center">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job Listing 6 -->
                <div class="col-lg-6 col-md-6">
                    <div class="job-card bg-white p-4 rounded-3 h-100">
                        <h4 class="job-title mb-3 fw-bold">Digital Marketing Executive</h4>
                        <div class="job-details mb-3">
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-users me-1"></i> Vacancy: 2
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-briefcase me-1"></i> Full time
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-calendar-days me-1"></i> Exp. 1-3 Years
                            </span>
                            <span class="job-badge me-2 mb-2 d-inline-block">
                                <i class="fa-solid fa-location-dot me-1"></i> Surat
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="template-btn primary-btn w-100 text-center">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('head')
<style>
    .career-header-section {
        background: #fff;
    }
    .career-feature-box {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
    }
    .career-feature-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        border-color: transparent;
    }
    .career-icon {
        display: inline-block;
        transition: transform 0.3s ease;
    }
    .career-feature-box:hover .career-icon {
        transform: scale(1.1);
    }
    .career-feature-box h3 {
        color: #13114C;
        font-size: 2rem;
        font-weight: 700;
    }
    .career-feature-box p {
        color: #666;
        line-height: 1.8;
        font-size: 1.05rem;
    }
    .job-card {
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
    }
    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        border-color: transparent;
    }
    .job-title {
        color: #13114C;
        font-size: 1.5rem;
    }
    .job-badge {
        background: #f8f9fa;
        padding: 6px 12px;
        border-radius: 5px;
        font-size: 0.9rem;
        color: #333;
        font-weight: 500;
    }
    .job-badge i {
        color: #5044EB;
    }
    .job-details {
        min-height: 60px;
    }
</style>
@endpush

