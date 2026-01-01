@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Appointment')

@section('content')
    <div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="assets/images/banner/breadcrumb.jpg">
        <span class="circle-shape-1 rounded-circle position-absolute"></span>
        <span class="circle-shape-2 rounded-circle position-absolute"></span>
        <span class="circle-shape-3 rounded-circle position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h1 class="text-white mb-3 display-2 fw-bold">Appointment</h1>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="appointment-section pt-100 pb-100">
        <div class="container">
            <div class="bg-light-white rounded-4 app-box">
                <div class="row align-items-center g-4">
                    <div class="col-xl-5 col-lg-6">
                        <div class="image-wrapper">
                            <img src="assets/images/about/ab-1.jpg" alt="not found" class="img-fluid rounded-start-4">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="app-form-wrapper ps-sm-4">
                            <h4 class="mb-5">Make An Appointment</h4>
                            <form class="app-form">
                                <div class="d-flex align-items-center double-input gap-4">
                                    <div class="input-field">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="input-field">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="input-field position-relative clearfix mt-4">
                                    <select class="nice_select">
                                        <option>Select Service</option>
                                        <option>UI/UX Design</option>
                                        <option>Web Development</option>
                                        <option>App Development</option>
                                        <option>MLM Development</option>
                                        <option>Game Development</option>
                                        <option>Graphics Design</option>
                                        <option>SEO Optimization</option>
                                        <option>Digital Marketing</option>
                                        <option>Cloud Whatsapp Solutions</option>
                                        <option>ERP Solutions</option>
                                        <option>CRM Solutions</option>
                                        <option>E-Commerce Solutions</option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center double-input gap-4 mt-4">
                                    <div class="input-field">
                                        <input type="date">
                                    </div>
                                    <div class="input-field">
                                        <input type="time">
                                    </div>
                                </div>
                                <div class="input-field mt-4">
                                    <button type="submit" class="template-btn primary-btn">Submit Message</button>
                                </div>
                            </form>
                        </div>
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
                        <img src="assets/c01.png" class="mb-3 imas01">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="assets/c02.png" class="mb-3 imas01">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="assets/c03.png" class="mb-3 imas01">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="assets/c04.png" class="mb-3 imas01">
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
                        <img src="assets/c01.png" class="mb-3 imas02">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="assets/c02.png" class="mb-3 imas02">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="assets/c03.png" class="mb-3 imas02">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="assets/c04.png" class="mb-3 imas02">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



