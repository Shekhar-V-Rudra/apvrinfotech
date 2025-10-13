<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Apvr Infotech')</title>
    <base href="{{ asset('apvr') }}/">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/fancybox.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.webp">
    <script src="../kit.fontawesome.com/021c70449c.js" crossorigin="anonymous"></script>
    @stack('head')
</head>
<body>

    <div class="preloader">
        <div class="loader">
            <svg class="pl" viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" stroke-linecap="round" stroke-width="16" transform="rotate(-90,64,64)">
                    <circle class="pl__ring" r="56" cx="64" cy="64" stroke="#ddd" />
                    <circle class="pl__worm pl__worm--moving" r="56" cx="64" cy="64" stroke="currentColor" stroke-dasharray="22 307.86 22" data-worm />
                </g>
                <g data-particles></g>
            </svg>
        </div>
    </div>

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <header class="header-section position-relative z-2 header-style-2 header-sticky">
        <div class="container">
            <div class="infobar py-2 d-none d-lg-block">
                <div class="row g-4 align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-7">
                        <div class="infobar-content d-flex align-items-center">
                            <a href="tel:+91 99099971138" class="mb-0 fs-sm fw-semibold"><span class="me-2"><i class="fa-solid fa-phone"></i></span>+91 99099971138</a>
                            <p class="fs-sm mb-0 fw-semibold"><span class="me-2"><i class="fa-solid fa-location-dot"></i></span>
                                 Surat</p>
                            <a href="mailto:info@apvrinfotech.com" class="fw-semibold fs-sm"><span class="me-2"><i class="fa-solid fa-envelope"></i></span>info@apvrinfotech.com</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="d-flex align-items-center justify-content-end gap-5 infobar-right info-small-dark">
                            <div class="language-switcher" style="visibility: hidden !important;">
                                <select class="nice_select">
                                </select>
                            </div>
                            <div class="info-social border-left">
                                <a href="https://www.facebook.com/Apvrinfotech" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/apvr_infotech" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/apvrinfotech" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.linkedin.com/company/apvrinfotech" target="_blank"><i class="fa-solid fa-paper-plane"></i></a>
                                <a href="https://x.com/Apvr_infotech" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crete-navbar bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <div class="logo-wrapper">
                            <a href='{{ url('/') }}'><img src="assets/header-logo.webp" alt="logo" class="img-fluid logo368"></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-9 d-none d-lg-block">
                        <nav class="crete-navmenu text-center ps-xl-5">
                            <ul>
                                <li>
                                    <a href='{{ url('/') }}'>Home</a>
                                </li>
                                <li>
                                    <a href='{{ url('/apvr/about.html') }}'>About Us</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0)">Services</a>
                                    <ul class="submenu-wrapper">
                                        <li><a href="#">UI/UX Design</a></li>
                                        <li><a href="#">Graphics Design</a></li>
                                        <li><a href="#">Web Development</a></li>
                                        <li><a href="#">App Development</a></li>
                                        <li><a href="#">E-Commerce Solutions</a></li>
                                        <li><a href="#">Digital Marketing</a></li>
                                        <li><a href="#">AI & ML</a></li>
                                        <li><a href="#">DevOps Services</a></li>
                                        <li><a href="#">Cloud Computing</a></li>
                                        <li><a href="#">QA & Testing</a></li>
                                        <li><a href="#">Support & Maintenance</a></li>
                                        <li><a href="#">Staff Augmentation</a></li>
                                    </ul>
                                </li>
                                <li><a href='{{ url('/apvr/projects.html') }}'>Our Portfolio</a></li>
                                <li><a href='{{ url('/apvr/contact.html') }}'>Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-lg-1 col-6">
                        <div class="text-end d-flex align-items-center justify-content-end header-right gap-3">
                            <a class='template-btn primary-btn d-none d-sm-block d-lg-none d-xl-block text-center' href='{{ url('/apvr/contact.html') }}'>Download Brochure</a>
                            <button type="button" class="header-toggle mobile-menu-toggle d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu">
        <a href="javascript:void(0)" class="close"><i class="fas fa-xmark"></i></a>
        <a href='{{ url('/') }}'><img src="assets/header-logo.webp" alt="logo" class="img-fluid logo368"></a>
        <ul class="mobile-nav-menu">
            <li><a href='{{ url('/') }}'>Home</a></li>
            <li><a href='{{ url('/apvr/about.html') }}'>About Us</a></li>
            <li class="has-submenu">
                <a href="javascript:void(0)">Services</a>
                <i class="fas fa-angle-down"></i>
                <ul class="submenu-wrapper">
                    <li><a href="#">UI/UX Design</a></li>
                    <li><a href="#">Graphics Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">App Development</a></li>
                    <li><a href="#">E-Commerce Solutions</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">AI & ML</a></li>
                    <li><a href="#">DevOps Services</a></li>
                    <li><a href="#">Cloud Computing</a></li>
                    <li><a href="#">QA & Testing</a></li>
                    <li><a href="#">Support & Maintenance</a></li>
                    <li><a href="#">Staff Augmentation</a></li>
                </ul>
            </li>
            <li><a href='{{ url('/apvr/projects.html') }}'>Our Portfolio</a></li>
            <li><a href='{{ url('/apvr/contact.html') }}'>Contact Us</a></li>
        </ul>
    </div>

    @yield('content')

    <a href="https://wa.me/message/KAWLLL72YC5EM1" target="_blank">
        <img src="assets/whatsapp.png" class="whatsapp01">
    </a>

    <footer class="footer-style-2 overflow-hidden position-relative z-1">
        <span class="circle-shape-1 position-absolute z--1 rounded-circle"></span>
        <span class="circle-shape-2 position-absolute z--1 rounded-circle"></span>
        <div class="footer-bottom pt-100">
            <div class="container position-relative z-1">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget text-widget">
                            <img src="assets/flogo.webp" alt="logo" class="img-fluid logo368">
                            <p class="my-32 text-white">
                                Explore our holistic approach for your business needs, covering strategy, implementation, and optimization for maximum impact.
                            </p>
                            <div class="footer-social">
                                <a href="https://www.facebook.com/Apvrinfotech" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/Apvr_infotech" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/company/apvrinfotech" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/apvr_infotech"  target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget nav-widget">
                            <h6 class="widget-title">Quick Links</h6>
                            <ul class="footer-links">
                                <li><a href='{{ url('/') }}'>Home</a></li>
                                <li><a href='{{ url('/apvr/about.html') }}'>About Us</a></li>
                                <li><a href='{{ url('/apvr/contact.html') }}'>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget nav-widget">
                            <h6 class="widget-title">Services</h6>
                            <ul class="footer-links">
                                <li><a href="#">UI/UX Design</a></li>
                                <li><a href="#">Graphics Design</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">App Development</a></li>
                                <li><a href="#">E-Commerce Solutions</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">AI & ML</a></li>
                                <li><a href="#">DevOps Services</a></li>
                                <li><a href="#">Cloud Computing</a></li>
                                <li><a href="#">QA & Testing</a></li>
                                <li><a href="#">Support & Maintenance</a></li>
                                <li><a href="#">Staff Augmentation</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget nav-widget">
                            <h6 class="widget-title">Digital Products</h6>
                            <ul class="footer-links">
                                <li><a href='#'>Cloud Whatsapp Solutions</a></li>
                                <li><a href='#'>ERP Solutions</a></li>
                                <li><a href='#'>CRM Solutions</a></li>
                                <li><a href='#'>IVR Solutions</a></li>
                                <li><a href='#'>E-Commerce Solutions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright mt-60 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p class="mb-0 text-white">&copy;{{ date('Y') }} Apvr Infotech. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright-links">
                            <a href='#'>Privacy & Policy</a>
                            <a href='#'>Terms & Services</a>
                            <a href='#'>Refund Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button type="button" class="scroll-top-btn"><i class="fa-solid fa-angle-up"></i></button>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/progress-bar.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/tilt-js.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/isotop.min.js"></script>
    <script src="assets/js/script.js"></script>
    @stack('scripts')
</body>
</html>


