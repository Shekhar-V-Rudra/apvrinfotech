@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Download Brochure')

@section('content')
    <div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="assets/images/banner/breadcrumb.jpg">
        <span class="circle-shape-1 rounded-circle position-absolute"></span>
        <span class="circle-shape-2 rounded-circle position-absolute"></span>
        <span class="circle-shape-3 rounded-circle position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h1 class="text-white mb-3 display-2 fw-bold">Download Brochure</h1>
                        <ul>
                            <li><a href='{{ url('/') }}'>Home</a></li>
                            <li>Brochure</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Get Our Company Profile</h2>
                    <p class="mb-5">Download our latest brochure to explore our services, expertise, and case studies.</p>
                    <a class='template-btn primary-btn' href='{{ asset('apvr/assets/doc/Apvr-Infotech-Brochure.pdf') }}' target="_blank">Download PDF</a>
                </div>
            </div>
        </div>
    </section>
@endsection


