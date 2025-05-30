<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kantah Kab. Banjar - {{ $title }}</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('img/Logo_BPN-KemenATR.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('jobaway') }}/css/font-awesome-all.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/flaticon.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/owl.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/animate.css" rel="stylesheet">
    {{-- <link href="{{ asset('jobaway') }}/css/nice-select.css" rel="stylesheet"> --}}
    <link href="{{ asset('jobaway') }}/css/odometer.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/elpath.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/color.css" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/rtl.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/header.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/banner.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/page-title.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/service.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/clients.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/about.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/chooseus.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/contact.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/industries.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/job.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/process.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/faq.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/training.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/pricing.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/download.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/testimonial.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/news.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/subscribe.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/module-css/footer.css" rel="stylesheet">
    <link href="{{ asset('jobaway') }}/css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sweetalert2') }}/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="icon-27"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        {{-- <div class="txt-loading">
                            <span data-text-preloader="K" class="letters-loading">
                                K
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="y" class="letters-loading">
                                y
                            </span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- page-direction -->
        {{-- <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div> --}}
        <!-- page-direction end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box">
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('jobaway') }}/images/logo.png"
                                alt=""></a></figure>
                    <div class="close-search"><span class="icon-27"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="Type your keyword and hit" required>
                                    <button type="submit"><i class="icon-1"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        @include('template._navbar')
        <!-- main-header end -->





        @yield('content')


        <!-- subscribe-style-two -->
        <section class="subscribe-style-two">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape-box">
                        <div class="shape-1"
                            style="background-image: url({{ asset('jobaway') }}/images/shape/shape-8.png);"></div>
                        <div class="shape-2"
                            style="background-image: url({{ asset('jobaway') }}/images/shape/shape-9.png);"></div>
                    </div>
                    <div class="text-box">
                        <h2><i>Melayani, Profesional, Terpercaya</i></span></h2>
                    </div>
                    <figure class="logo-box"><a href=""><img style="max-height: 70px;"
                                src="{{ asset('img/Logo_BPN-KemenATR.png') }}" alt=""></a></figure>
                    <div class="form-inner">

                        {{-- <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required>
                                <button type="submit" class="theme-btn btn-one">Subscribe</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-style-two end -->


        <!-- main-footer -->
        <footer class="main-footer home-2">
            {{-- <div class="widget-section p_relative pt_80 pb_100">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget mr_30">
                                <figure class="footer-logo mb_20"><a href="index.html"><img
                                            src="{{ asset('jobaway') }}/images/logo.png" alt=""></a></figure>
                                <p>Since 2018, JobAway has connecting hospitality workers to thousands of business,
                                    private events and universities.</p>
                                <div class="download-btn">
                                    <a href="about.html" class="apple-store">
                                        <img src="{{ asset('jobaway') }}/images/icons/icon-4.png" alt="">
                                        <span>Download on</span>
                                        App Store
                                    </a>
                                    <a href="about.html" class="play-store">
                                        <img src="{{ asset('jobaway') }}/images/icons/icon-5.png" alt="">
                                        <span>Get it on</span>
                                        Google Play
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>For Workers</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Find Work</a></li>
                                        <li><a href="index.html">Jobs in Dubai</a></li>
                                        <li><a href="index.html">Jobs in Virginia</a></li>
                                        <li><a href="index.html">Jobs in California</a></li>
                                        <li><a href="index.html">Jobs in Alaska</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>For Business</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Merchandising</a></li>
                                        <li><a href="index.html">Hospitality Staff</a></li>
                                        <li><a href="index.html">General Labour</a></li>
                                        <li><a href="index.html">Car Drivers</a></li>
                                        <li><a href="index.html">Bus Driver</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Company</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="index.html">Career</a></li>
                                        <li><a href="index.html">Partners</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="index.html">Clients</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Help & Support</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="faq.html">General FAQ</a></li>
                                        <li><a href="index.html">Support Center</a></li>
                                        <li><a href="index.html">Privacy Policy</a></li>
                                        <li><a href="index.html">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner">
                        <div class="copyright">
                            <p>Copyright &copy; 2025 <a href="">Kantor Pertanahan Kabupaten Banjar</a> All
                                rights reserved.</p>
                        </div>
                        <ul class="social-links">
                            {{-- <li>
                                <h5>@kantahkabbanjar</h5>
                            </li> --}}

                            <li><a href="https://wa.me/+6281944233016"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.instagram.com/kantahkabupatenbanjar?igsh=eDRyeDdxNXZxcnB6"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="https://x.com/kantahkabbanjar?t=b6KIf6X3-oNZc57nlp0ZxA&s=08"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/share/1AYAAPcs8s/"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li><a href="https://youtube.com/@kantahkabbanjar?si=dIn1mizCt6F3chjd"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('jobaway') }}/js/jquery.js"></script>
    <script src="{{ asset('jobaway') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('jobaway') }}/js/owl.js"></script>
    <script src="{{ asset('jobaway') }}/js/wow.js"></script>
    <script src="{{ asset('jobaway') }}/js/validation.js"></script>
    <script src="{{ asset('jobaway') }}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('jobaway') }}/js/appear.js"></script>
    <script src="{{ asset('jobaway') }}/js/isotope.js"></script>
    <script src="{{ asset('jobaway') }}/js/parallax-scroll.js"></script>
    {{-- <script src="{{ asset('jobaway') }}/js/jquery.nice-select.min.js"></script> --}}
    <script src="{{ asset('jobaway') }}/js/scrolltop.min.js"></script>
    <script src="{{ asset('jobaway') }}/js/gsap.js"></script>
    <script src="{{ asset('jobaway') }}/js/ScrollTrigger.js"></script>
    <script src="{{ asset('jobaway') }}/js/SplitText.js"></script>
    <script src="{{ asset('jobaway') }}/js/language.js"></script>
    <script src="{{ asset('jobaway') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('jobaway') }}/js/lenis.min.js"></script>
    <script src="{{ asset('jobaway') }}/js/odometer.js"></script>
    <script src="{{ asset('jobaway') }}/js/jquery.lettering.min.js"></script>
    <script src="{{ asset('jobaway') }}/js/jquery.circleType.js"></script>

    <!-- main-js -->
    <script src="{{ asset('jobaway') }}/js/script.js"></script>
    <script src="{{ asset('sweetalert2') }}/sweetalert2/sweetalert2.min.js"></script>

    @yield('script')

</body><!-- End of .page_wrapper -->

</html>
