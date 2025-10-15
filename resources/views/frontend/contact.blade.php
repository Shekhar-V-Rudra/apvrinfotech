@extends('frontend.layouts.master')

@section('title', 'Apvr Infotech - Contact Us')

@section('content')
    <div class="breadcrumb-section position-relative z-1 overflow-hidden" data-background="assets/images/banner/breadcrumb.jpg">
        <span class="circle-shape-1 rounded-circle position-absolute"></span>
        <span class="circle-shape-2 rounded-circle position-absolute"></span>
        <span class="circle-shape-3 rounded-circle position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h1 class="text-white mb-3 display-2 fw-bold">Contact Us</h1>
                        <ul>
                            <li><a href='{{ url('/') }}'>Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="head02 mt-5 mb-5">Our Office Locations</h3>
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-4 mb-3">
                <div class="card carda01 mb-5">
                    <div class="d-flex flex-row justify-content-center">
                        <img src="assets/surat.png" class="card-ima" alt="Surat">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title card-title01">Surat</h5>
                        <h6 class="card-title card-title02">Office Address</h6>
                        <p class="card-text card-text01">Surat (Regd.Office): J-162, Japan Market, Near Delhi Gate, Surat., Gujarat - 395003</p>
                        <p class="card-text01"><i class="fa-solid fa-envelope pe-2"></i>info@apvrinfotech.com</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 d-none">
                <div class="card carda01 mb-5">
                    <div class="d-flex flex-row justify-content-center">
                        <img src="assets/mumbai.png" class="card-ima" alt="Mumbai">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title card-title01">Mumbai</h5>
                        <h6 class="card-title card-title02">Office Address</h6>
                        <p class="card-text card-text01">Mumbai (Sales.Office): 205, Parikh Commercial Centre, Agashi Rd, Gokul Twp, Virar East, Virar, Maharashtra - 401303</p>
                        <p class="card-text01"><i class="fa-solid fa-envelope pe-2"></i>info@apvrinfotech.com</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 d-none">
                <div class="card carda01 mb-5">
                    <div class="d-flex flex-row justify-content-center">
                        <img src="assets/mathura.png" class="card-ima mt-1" alt="Mathura">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title card-title01">Mathura</h5>
                        <h6 class="card-title card-title02">Office Address</h6>
                        <p class="card-text card-text01">Mathura (Regd.Office): C3 moholi pura in behind of BSA Engineering College, Mathura, Uttar Predesh-281001</p>
                        <p class="card-text01"><i class="fa-solid fa-envelope pe-2"></i>info@apvrinfotech.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-form-area ptb-100 bg-light-white position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ct-left">
                        <span class="cr-subtitle position-relative fw-semibold primary-text-color">Get In Touch</span>
                        <h2 class="mt-4 mb-5">You can connect with us when need help!</h2>
                        <form class="ct-contact-form" action="#" method="post">
                            @csrf
                            <div class="d-flex align-items-center gap-3">
                                <div class="input-field position-relative width-half">
                                    <input type="text" name="name" placeholder="Your Name" class="theme-input" required>
                                </div>
                                <div class="input-field position-relative width-half">
                                    <input type="email" name="email" placeholder="Email Address" class="theme-input" required>
                                </div>
                            </div>
                            <div class="mt-4">
                                <select class="nice_select" name="service">
                                    <option>Select Desire Service</option>
                                    <option value="ui">UI/UX Design</option>
                                    <option value="web">Web Development</option>
                                    <option value="app">App Development</option>
                                    <option value="mlm">MLM Development</option>
                                    <option value="game">Game Development</option>
                                    <option value="graphics">Graphics Design</option>
                                    <option value="seo">SEO Optimization</option>
                                    <option value="digital">Digital Marketing</option>
                                    <option value="cloud">Cloud Whatsapp Solutions</option>
                                    <option value="erp">ERP Solutions</option>
                                    <option value="crm">CRM Solutions</option>
                                    <option value="ivr">IVR Solutions</option>
                                    <option value="ecom">E-Commerce Solutions</option>
                                </select>
                            </div>
                            <textarea class="theme-input mt-4" name="comment" placeholder="Type Your Message" rows="5"></textarea>
                            <button type="submit" class="template-btn primary-btn mt-4">Send Message Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1767.8670995295256!2d72.83914117840618!3d21.20065388520899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e57fadebedb%3A0x299a6196f6240624!2sJapan%20Market%2C%20Begampura%2C%20Surat%2C%20Gujarat%20395003!5e1!3m2!1sen!2sin!4v1760520653913!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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


