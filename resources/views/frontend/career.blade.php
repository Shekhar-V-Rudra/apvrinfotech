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
                            <li><a href="{{ url('/') }}">Home</a></li>
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
                @forelse($careers as $career)
                    <div class="col-lg-6 col-md-6">
                        <div class="job-card bg-white p-4 rounded-3 h-100">
                            <h4 class="job-title mb-3 fw-bold">{{ $career->job_title }}</h4>
                            <div class="job-details mb-3">
                                <span class="job-badge me-2 mb-2 d-inline-block">
                                    <i class="fa-solid fa-users me-1"></i> Vacancy: {{ $career->vacancy }}
                                </span>
                                <span class="job-badge me-2 mb-2 d-inline-block">
                                    <i class="fa-solid fa-briefcase me-1"></i> {{ $career->job_type }}
                                </span>
                                @if($career->experience)
                                    <span class="job-badge me-2 mb-2 d-inline-block">
                                        <i class="fa-solid fa-calendar-days me-1"></i> Exp. {{ $career->experience }}
                                    </span>
                                @endif
                                @if($career->location)
                                    <span class="job-badge me-2 mb-2 d-inline-block">
                                        <i class="fa-solid fa-location-dot me-1"></i> {{ $career->location }}
                                    </span>
                                @endif
                            </div>
                            <a href="javascript:void(0)" class="template-btn primary-btn w-100 text-center">Apply Now</a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5">
                            <p class="text-muted">No job openings available at the moment. Please check back later.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

