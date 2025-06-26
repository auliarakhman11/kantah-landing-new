<header class="main-header header-style-two">
    <!-- header-top -->
    {{-- <div class="header-top">
        <div class="outer-container">
            <div class="top-inner">
                <ul class="info">
                    <li>
                        <img src="{{ asset('jobaway') }}/images/icons/icon-6.png" alt="">
                        Call: <a href="tel:912345432">+91 (234) 5432</a>
                    </li>
                    <li>
                        <img src="{{ asset('jobaway') }}/images/icons/icon-7.png" alt="">
                        Mail: <a href="mailto:jobinfo@example.com">jobinfo@example.com</a>
                    </li>
                </ul>
                <p><span>Latest News:</span> Fusce neque CEO egestas cursu magna sapien</p>
                <div class="right-column">
                    <div class="language-picker js-language-picker mr_30" data-trigger-class="btn btn--subtle">
                        <form action="index-2.html" class="language-picker__form">
                            <label for="language-picker-select">Select your language</label>
                            <select name="language-picker-select" id="language-picker-select">
                                <option lang="de" value="deutsch">DE</option>
                                <option lang="en" value="english" selected>EN</option>
                                <option lang="fr" value="francais">FR</option>
                                <option lang="it" value="italiano">IT</option>
                            </select>
                        </form>
                    </div>
                    <ul class="social-links">
                        <li><span>Share:</span></li>
                        <li><a href="index-2.html"><i class="icon-22"></i></a></li>
                        <li><a href="index-2.html"><i class="icon-23"></i></a></li>
                        <li><a href="index-2.html"><i class="icon-24"></i></a></li>
                        <li><a href="index-2.html"><i class="icon-25"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-container">
            <div class="outer-box">
                <figure class="logo-box"><a href=""><img style="max-height: 70px;"
                            src="{{ asset('img/Logo_BPN-KemenATR.png') }}" alt=""></a></figure>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                {{-- <li class="current dropdown"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                        <li><a href="index-3.html">Home Three</a></li>
                                        <li><a href="index-4.html">Home Four</a></li>
                                        <li><a href="index-5.html">Home Five</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown"><a href="index.html">Solutions</a>
                                    <ul>
                                        <li><a href="service.html">Our Solutions</a></li>
                                        <li><a href="service-details.html">Executive Search</a></li>
                                        <li><a href="service-details-2.html">Training Session</a></li>
                                        <li><a href="service-details-3.html">Career Growth</a></li>
                                        <li><a href="service-details-4.html">Payroll Services</a></li>
                                        <li><a href="service-details-5.html">Workforce System</a></li>
                                        <li><a href="service-details-6.html">Temporary Jobs</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="index.html">Pages</a>
                                    <ul>
                                        <li class="dropdown"><a href="index.html">Job</a>
                                            <ul>
                                                <li><a href="job.html">Place Job</a></li>
                                                <li><a href="job-2.html">Job Seekers</a></li>
                                                <li><a href="job-3.html">Job Openings</a></li>
                                                <li><a href="job-4.html">Job Apply</a></li>
                                                <li><a href="job-details.html">Job Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Portfolio</a>
                                            <ul>
                                                <li><a href="portfolio.html">Portfolio 3 column</a></li>
                                                <li><a href="portfolio-2.html">Portfolio 2 column</a></li>
                                                <li><a href="portfolio-3.html">Portfolio Masonry</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="testimonial.html">Testimonials</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="signup.html">Sing Up</a></li>
                                        <li><a href="error.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="index.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Grid</a></li>
                                        <li><a href="blog-2.html">Blog Standard</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route('home') }}"><u>Beranda</u></a></li>
                                <li><a href="{{ route('dashboard') }}"><u>Dashboard</u></a></li>
                                {{-- <li><a href="{{ route('riwayatPengisian') }}"><u>Riwayat Pengisian Blanko</u></a></li> --}}
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content">
                    {{-- <div class="search-btn mr_20"><button class="search-toggler"><i class="icon-1"></i></button></div>
                    <div class="link-box mr_20"><a href="login.html">Log In</a></div>
                    <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get Started</a></div> --}}
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="index.html"><img style="max-height: 70px;"
                            src="{{ asset('img/Logo_BPN-KemenATR.png') }}" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="menu-right-content">
                    {{-- <div class="search-btn mr_20"><button class="search-toggler"><i class="icon-1"></i></button>
                    </div>
                    <div class="link-box mr_20"><a href="login.html">Log In</a></div>
                    <div class="btn-box"><a href="index.html" class="theme-btn btn-one">Get Started</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="{{ asset('img/Logo_BPN-KemenATR.png') }}"
                    style="max-height: 50px;" alt="" title=""></a></div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Informasi kontak</h4>
            {{-- <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul> --}}
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="https://wa.me/+6281944233016"><span class="fab fa-whatsapp"></span></a></li>
                <li><a href="https://x.com/kantahkabbanjar?t=b6KIf6X3-oNZc57nlp0ZxA&s=08"><span
                            class="fab fa-twitter"></span></a></li>
                <li><a href="https://www.facebook.com/share/1AYAAPcs8s/"><span
                            class="fab fa-facebook-square"></span></a></li>
                <li><a href="https://www.instagram.com/kantahkabupatenbanjar?igsh=eDRyeDdxNXZxcnB6"><span
                            class="fab fa-instagram"></span></a></li>
                <li><a href="https://youtube.com/@kantahkabbanjar?si=dIn1mizCt6F3chjd"><span
                            class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->
