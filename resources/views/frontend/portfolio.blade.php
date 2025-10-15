@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Projects')

@section('content')
    <div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="assets/images/banner/breadcrumb.jpg">
        <span class="circle-shape-1 rounded-circle position-absolute"></span>
        <span class="circle-shape-2 rounded-circle position-absolute"></span>
        <span class="circle-shape-3 rounded-circle position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h1 class="text-white mb-3 display-2 fw-bold">Our Portfolio</h1>
                        <ul>
                            <li><a href='{{ url('/') }}'>Home</a></li>
                            <li>Our Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="project-section ptb-100">
        <div class="container">
            <div class="text-center">
                <span class="cr-subtitle position-relative primary-text-color fw-semibold">OUR WORK</span>
                <h2 class="mt-4 mb-5 man001"> Our <span class="primary-bg-light primary-text-color">Creative</span> Works</h2>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <ul class="nav nav-tabs cr-about-tab-control">
                    <li><a href="#about" class="active" data-bs-toggle="tab">All</a></li>
                    <li><a href="#mission" data-bs-toggle="tab">Website</a></li>
                    <li><a href="#vission" data-bs-toggle="tab">Mobile App</a></li>
                    <li><a href="#graphics" data-bs-toggle="tab">Graphic Design</a></li>
                </ul>
            </div>
            <div class="tab-content mt-5">
                @php
                    $projectsAll = [
                        ['img' => 'assets/portfolio01.png', 'title' => 'Product Website', 'cat' => 'Product Services'],
                        ['img' => 'assets/portfolio02.png', 'title' => 'EvrinOcean Website', 'cat' => 'ERP Services'],
                        ['img' => 'assets/portfolio03.png', 'title' => 'Ecommerce Website', 'cat' => 'Product Services'],
                        ['img' => 'assets/portfolio04.png', 'title' => 'Gaming Website', 'cat' => 'Gaming Services'],
                        ['img' => 'assets/portfolio05.png', 'title' => 'Chat Website', 'cat' => 'Communication Services'],
                        ['img' => 'assets/portfolio06.png', 'title' => 'Shopping Website', 'cat' => 'Product Services'],
                        ['img' => 'assets/portfolio07.png', 'title' => 'ECommerce Website', 'cat' => 'Product Services'],
                        ['img' => 'assets/portfolio08.png', 'title' => 'Vedvidyarthi Website', 'cat' => 'Educational Services'],
                        ['img' => 'assets/portfolio09.png', 'title' => 'Anaj Bank App', 'cat' => 'Mobile Application'],
                        ['img' => 'assets/portfolio10.png', 'title' => 'Nexatel Website', 'cat' => 'Internet Services'],
                        ['img' => 'assets/portfolio11.png', 'title' => 'UGOCash Website', 'cat' => 'Business Services'],
                        ['img' => 'assets/portfolio12.png', 'title' => 'WhatsappStore', 'cat' => 'Ecommerce Services'],
                        ['img' => 'assets/portfolio13.png', 'title' => 'Yamikart Mobile App', 'cat' => 'Online Book Store'],
                        ['img' => 'assets/portfolio14.png', 'title' => 'FirstBazaar Mobile App', 'cat' => 'Ecommerce Services'],
                        ['img' => 'assets/portfolio15.png', 'title' => 'Hospital Website', 'cat' => 'Health Services'],
                        ['img' => 'assets/portfolio16.png', 'title' => 'Advertisement Website', 'cat' => 'Digital Marketing'],
                        ['img' => 'assets/portfolio17.png', 'title' => 'Academy Website', 'cat' => 'Educational Services'],
                        ['img' => 'assets/portfolio18.png', 'title' => 'Arion Healthcare', 'cat' => 'Health Services'],
                        ['img' => 'assets/portfolio19.png', 'title' => 'Ashirwad Plastics', 'cat' => 'Business Services'],
                        ['img' => 'assets/portfolio20.png', 'title' => 'VickyFinance Mobile App', 'cat' => 'Finance Services'],
                    ];
                    $projectsWeb = array_filter($projectsAll, fn($p) => str_contains(strtolower($p['title']), 'website'));
                    $projectsApp = array_filter($projectsAll, fn($p) => str_contains(strtolower($p['title']), 'app'));
                    $projectsGraphics = array_filter($projectsAll, fn($p) => in_array($p['title'], ['Product Website','EvrinOcean Website','Ecommerce Website','Gaming Website','Chat Website','IVR Website','Evrinocean Website','Vedvidyarthi Website','BDGGAME Website','Nexatel Website','UGOCash Website','WhatsappStore']));
                @endphp

                <div class="tab-pane fade show active" id="about">
                    <div class="row g-4">
                        @foreach($projectsAll as $project)
                            <div class="col-lg-3 col-sm-6">
                                <div class="pp-project-card rounded-3 overflow-hidden position-relative z-1">
                                    <img src="{{ $project['img'] }}" alt="project" class="img-fluid">
                                    <a href="{{ url('/apvr/project-details.html') }}" class="explore-btn"><i class="fas fa-eye"></i></a>
                                    <div class="project-content">
                                        <h6 class="mb-2 text-white">{{ $project['title'] }}</h6>
                                        <span class="fw-semibold text-uppercase text-white fs-sm">{{ $project['cat'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade" id="mission">
                    <div class="row g-4">
                        @foreach($projectsWeb as $project)
                            <div class="col-lg-3 col-sm-6">
                                <div class="pp-project-card rounded-3 overflow-hidden position-relative z-1">
                                    <img src="{{ $project['img'] }}" alt="project" class="img-fluid">
                                    <a href="{{ url('/apvr/project-details.html') }}" class="explore-btn"><i class="fas fa-eye"></i></a>
                                    <div class="project-content">
                                        <h6 class="mb-2 text-white">{{ $project['title'] }}</h6>
                                        <span class="fw-semibold text-uppercase text-white fs-sm">{{ $project['cat'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade" id="vission">
                    <div class="row g-4">
                        @foreach($projectsApp as $project)
                            <div class="col-lg-3 col-sm-6">
                                <div class="pp-project-card rounded-3 overflow-hidden position-relative z-1">
                                    <img src="{{ $project['img'] }}" alt="project" class="img-fluid">
                                    <a href="{{ url('/apvr/project-details.html') }}" class="explore-btn"><i class="fas fa-eye"></i></a>
                                    <div class="project-content">
                                        <h6 class="mb-2 text-white">{{ $project['title'] }}</h6>
                                        <span class="fw-semibold text-uppercase text-white fs-sm">{{ $project['cat'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade" id="graphics">
                    <div class="row g-4">
                        @foreach($projectsGraphics as $project)
                            <div class="col-lg-3 col-sm-6">
                                <div class="pp-project-card rounded-3 overflow-hidden position-relative z-1">
                                    <img src="{{ $project['img'] }}" alt="project" class="img-fluid">
                                    <a href="{{ url('/apvr/project-details.html') }}" class="explore-btn"><i class="fas fa-eye"></i></a>
                                    <div class="project-content">
                                        <h6 class="mb-2 text-white">{{ $project['title'] }}</h6>
                                        <span class="fw-semibold text-uppercase text-white fs-sm">{{ $project['cat'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                    <div class="col-12 col-md-4">
                        <img src="assets/c01.png" class="mb-3 w-100">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c02.png" class="mb-3 w-100">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c04.png" class="mb-3 w-100">
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
                    <div class="col-12 col-md-4">
                        <img src="assets/c01.png" class="mb-3 imas02">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c02.png" class="mb-3 imas02">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="assets/c04.png" class="mb-3 imas02">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


