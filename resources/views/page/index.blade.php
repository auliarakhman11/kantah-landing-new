@extends('template.master')
@section('content')
    <!-- banner-section -->
    <section class="banner-section banner-style-two p_relative">
        <div class="shape" style="background-image: url({{ asset('jobaway') }}/images/shape/shape-5.png);">
        </div>
        <div class="pattern-layer-2" style="background-image: url({{ asset('jobaway') }}/images/shape/shape-4.png);"></div>
        <div class="bg-layer" style="background-image: url({{ asset('img/loket1.jpg') }});">
        </div>
        <div class="outer-container">
            <div class="content-box">
                <h2>Selamat Datang di Website Kantor Pertanahan Kabupaten Banjar</h2>
                <p>Website yang menyajikan persyaratan dan pengisian formulir permohonan pertanahan</p>
                {{-- <div class="btn-box">
                    <a href="index.html" class="theme-btn btn-one mr_20"><span>Find Works</span></a>
                    <a href="index.html" class="theme-btn banner-btn">Hire Talents Now</a>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- clients-style-two -->
    {{-- <section class="clients-style-two centred pt_110 pb_120">
        <div class="auto-container">
            <div class="title-text">
                <h3>Melayani, Profesional, Terpercaya</h3>
            </div>
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="clients-logo"><a href=""><img style="max-height: 100px;"
                            src="{{ asset('img/foto 1.png') }}" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href=""><img style="max-height: 100px;"
                            src="{{ asset('img/foto 2.png') }}" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href=""><img style="max-height: 100px;"
                            src="{{ asset('img/foto 3.png') }}" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href=""><img style="max-height: 100px;"
                            src="{{ asset('img/foto 2.png') }}" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href=""><img style="max-height: 100px;"
                            src="{{ asset('img/foto 1.png') }}" alt=""></a>
                </figure>
            </div>
        </div>
    </section> --}}
    <!-- clients-style-two end -->


    <!-- about-style-two -->
    {{-- <section class="about-style-two">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box mr_80">
                            <div class="sec-title pb_20 sec-title-animation animation-style2">
                                <span class="sub-title mb_10 title-animation">About us</span>
                                <h2 class="title-animation">The Leading Hospitality Staffing <span>Platform</span>
                                </h2>
                            </div>
                            <div class="text-box">
                                <p>This staffing platform provides access to a diverse pool of qualified candidates
                                    with specialized skills in areas such as hospitality management.</p>
                                <ul class="list-style-one clearfix">
                                    <li>This helps businesses maintain service excellence</li>
                                    <li>This scalability allows businesses to adjust staffing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div class="video_block_two">
                        <div class="video-box t_120 z_1 p_relative ml_40 mr_60 centred">
                            <div class="video-inner"
                                style="background-image: url({{ asset('jobaway') }}/images/resource/video-4.jpg);">
                                <div class="video-content">
                                    <div class="curve-text">
                                        <span
                                            class="curved-circle">watch&nbsp;&nbsp;the&nbsp;&nbsp;video&nbsp;&nbsp;right&nbsp;&nbsp;now&nbsp;&nbsp;</span>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                                        class="lightbox-image video-btn" data-caption=""><i class="icon-8"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- about-style-two end -->


    <!-- chooseus-section -->
    <section class="chooseus-section alternat-2 pt_120 pb_90">
        <div class="auto-container">
            <div class="sec-title pb_30 sec-title-animation animation-style2">
                <h2 class="title-animation mb-2">Persyaratan Permohonan</h2>
                <span class="sub-title title-animation">Memberikan informasi tentang berkas pendukung dan persyaratan
                    permohonan pertanahan</span>
            </div>
            <div class="inner-container">
                <div class="row clearfix">
                    {{-- <div class="col-lg-3 col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-4"></i></div>
                                <h3><a href="index.html">Retain Top Talent</a></h3>
                                <p>Providing clear career paths and growth opportunities is key to retaining top
                                    talent.</p>
                                <div class="link"><a href="index.html">Learn More<i class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('Pph') }}">Persyaratan Peralihan Hak</a></h5>

                                <div class="link"><a href="{{ route('Pph') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('pps') }}">Persyaratan Permohonan Sertifikat</a></h5>

                                <div class="link"><a href="{{ route('pps') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('Ippt') }}">Persyaratan IPPT (Izin Perubahan Penggunaan Tanah)</a>
                                </h5>

                                <div class="link"><a href="{{ route('Ippt') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('Bphtb') }}">Persyaratan Pencatatan Pelunasan BPHTB/PPH</a></h5>

                                <div class="link"><a href="{{ route('Bphtb') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('pengajuan') }}">Pengajuan</a></h5>

                                <div class="link"><a href="{{ route('pengajuan') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('Pppp') }}">Persyaratan Permohonan Pemecahan, Pemisahan,
                                        Penggabungan</a></h5>

                                <div class="link"><a href="{{ route('Pppp') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('RubahHak') }}">Persyaratan Perubahan Hak (Hak Guna Bangunan Ke Hak
                                        Milik)</a></h5>

                                <div class="link"><a href="{{ route('RubahHak') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('roya') }}">Persyaratan Roya</a></h5>

                                <div class="link"><a href="{{ route('roya') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('penurunan') }}">Persyaratan Perubahan Hak (Penurunan)</a></h5>

                                <div class="link"><a href="{{ route('penurunan') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('lelang') }}">Ganti Nama Sertifikat</a></h5>

                                <div class="link"><a href="{{ route('lelang') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 col-sm-6 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box" style="min-height: 120px; padding: 20px;">

                                <h5><a href="{{ route('pengecekan') }}">Persyaratan Pengecekan Sertipikat</a></h5>

                                <div class="link"><a href="{{ route('pengecekan') }}">Lihat Selengkapnya<i
                                            class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-6"></i></div>
                                <h3><a href="index.html">Improve Employee</a></h3>
                                <p>Invest in employee training and development programs to enhance skills and
                                    knowledge.</p>
                                <div class="link"><a href="index.html">Learn More<i class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


    <!-- industries-style-two -->
    <section class="industries-style-two pt_120 pb_90 mb_20">
        <div class="pattern-layer" style="background-image: url({{ asset('jobaway') }}/images/shape/shape-3.png);"></div>
        <div class="auto-container">
            <div class="sec-title light centred pb_30 sec-title-animation animation-style2">
                <h2 class="title-animation">Pengisian Blanko Permohonan</h2>
                <span class="sub-title mt-3 title-animation">Pengisian Blanko/Form pemohonan pertanahan online</span>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('pendaftaranPertama') }}">Pendaftaran Sertipikat Tahap 1</a></h5>
                            <p>Permohonan Pengukuran dan Pemetaan Kadastral</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('pendaftaranKedua') }}">Pendaftaran Sertipikat Tahap 2</a></h5>
                            <p>Permohonan SK Pemberian Hak</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('pendaftaranKetiga') }}">Pendaftaran Sertipikat Tahap 3</a></h5>
                            <p>Permohonan Pendaftaran SK Hak</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('formulirPeralihanHak') }}">Peralihan Hak</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('gantiNamaHt') }}">Ganti Nama Pemegang Hak Tanggungan</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('gantiNamaSertipikat') }}">Ganti Nama Sertipikat</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('mergerHakTanggungan') }}">Merger Hak Tanggungan</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('pisahPecahGabung') }}">Pemisahan, Pemecahan, Penggabungan</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('penataanBatas') }}">Penataan Batas</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('pelunasanBphtb') }}">Pencatatan Pelunasan BPHTB</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="">Perubahan Hak Peningkatan</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="">Perubahan Hak Penurunan</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="">PKKPR untuk Kegiatan Non Berusaha</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="">PTP Penyelenggaraan Kebijakan Penggunaan dan Pemanfaatan Tanah</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('FormulirRoya') }}">Roya</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="">Sertipikat Pengganti Karena Hilang</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h5><a href="{{ route('sertipikatRusak') }}">Sertipikat Pengganti Karena Rusak, Lama</a></h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-10"></i></div>
                            <h3><a href="index.html">Hospitality</a></h3>
                            <p>2256 Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-11"></i></div>
                            <h3><a href="index.html">Kitchen</a></h3>
                            <p>1408 Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-12"></i></div>
                            <h3><a href="index.html">Retail</a></h3>
                            <p>1740 Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-13"></i></div>
                            <h3><a href="index.html">Events</a></h3>
                            <p>3948 Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-14"></i></div>
                            <h3><a href="index.html">Labor</a></h3>
                            <p>2984 Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-15"></i></div>
                            <h3><a href="index.html">Driving</a></h3>
                            <p>4509 Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                    <div class="industries-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-16"></i></div>
                            <h3><a href="index.html">Caretaker</a></h3>
                            <p>1039 Staffs</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- industries-style-two end -->


    <!-- dueal-section -->
    {{-- <section class="dueal-section pt_120 pb_120">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box mr_100">
                            <div class="sec-title pb_35 sec-title-animation animation-style2">
                                <span class="sub-title mb_10 title-animation">The Process</span>
                                <h2 class="title-animation">How it Works</h2>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <span class="count-text">1</span>
                                    <h3><a href="index-2.html">Sign up, It's Free!</a></h3>
                                    <p>Our team will set up your account and help you build job to easy-to-use web
                                        dashboard.</p>
                                </div>
                                <div class="single-item">
                                    <span class="count-text">2</span>
                                    <h3><a href="index-2.html">Find best Deals and Invest</a></h3>
                                    <p>Create and post anywhere from 1-100 job openings with just a few clicks.
                                        customize your own.</p>
                                </div>
                                <div class="single-item">
                                    <span class="count-text">3</span>
                                    <h3><a href="index-2.html">Get you profit back</a></h3>
                                    <p>View bios, reviews, and rosters before workers arrive on the job, and post
                                        reviews and pay, effortlessly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box">
                            <div class="sec-title pb_30 sec-title-animation animation-style2">
                                <span class="sub-title mb_10 title-animation">General Faqs</span>
                                <h2 class="title-animation">Frequently Asked Questions</h2>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>How Can I Prepare for an Interview?</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p>To prepare for an interview, research the company, understand the job
                                                role and responsibilities, and prepare questions to ask the
                                                interviewer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>Hiring Managers and Candidates?</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>To prepare for an interview, research the company, understand the job
                                                role and responsibilities, and prepare questions to ask the
                                                interviewer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>Clarifying Recruitment Concepts?</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>To prepare for an interview, research the company, understand the job
                                                role and responsibilities, and prepare questions to ask the
                                                interviewer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>Employers look for in candidates?</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>To prepare for an interview, research the company, understand the job
                                                role and responsibilities, and prepare questions to ask the
                                                interviewer.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- dueal-section end -->


    <!-- training-section -->
    {{-- <section class="training-section">
        <div class="auto-container">
            <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                <span class="sub-title mb_10 title-animation">Training</span>
                <h2 class="title-animation">Recent Workshops</h2>
            </div>
        </div>
        <div class="inner-container clearfix">
            <div class="training-block-one">
                <div class="inner-box"
                    style="background-image: url({{ asset('jobaway') }}/images/resource/training-1.jpg);">
                    <div class="video-content mb_150 centred">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn"
                            data-caption=""><i class="icon-8"></i></a>
                    </div>
                    <div class="text-box">
                        <h3><a href="job-details.html">Business Intelligence and Data Analytics</a></h3>
                        <div class="link"><a href="job-details.html">Find Works<img
                                    src="{{ asset('jobaway') }}/images/icons/icon-8.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="training-block-one">
                <div class="inner-box"
                    style="background-image: url({{ asset('jobaway') }}/images/resource/training-2.jpg);">
                    <div class="video-content mb_150 centred">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn"
                            data-caption=""><i class="icon-8"></i></a>
                    </div>
                    <div class="text-box">
                        <h3><a href="job-details.html">Information Technology Management</a></h3>
                        <div class="link"><a href="job-details.html">Find Works<img
                                    src="{{ asset('jobaway') }}/images/icons/icon-8.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="training-block-one">
                <div class="inner-box"
                    style="background-image: url({{ asset('jobaway') }}/images/resource/training-3.jpg);">
                    <div class="video-content mb_150 centred">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn"
                            data-caption=""><i class="icon-8"></i></a>
                    </div>
                    <div class="text-box">
                        <h3><a href="job-details.html">Public Policy and Management</a></h3>
                        <div class="link"><a href="job-details.html">Find Works<img
                                    src="{{ asset('jobaway') }}/images/icons/icon-8.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="training-block-one">
                <div class="inner-box"
                    style="background-image: url({{ asset('jobaway') }}/images/resource/training-4.jpg);">
                    <div class="video-content mb_150 centred">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn"
                            data-caption=""><i class="icon-8"></i></a>
                    </div>
                    <div class="text-box">
                        <h3><a href="job-details.html">Mathematics and its Applications</a></h3>
                        <div class="link"><a href="job-details.html">Find Works<img
                                    src="{{ asset('jobaway') }}/images/icons/icon-8.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- training-section end -->


    <!-- pricing-section -->
    {{-- <section class="pricing-section pt_120 pb_90">
        <div class="pattern-layer" style="background-image: url({{ asset('jobaway') }}/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                <span class="sub-title mb_10 title-animation">Pricing</span>
                <h2 class="title-animation">Pricing Plans</h2>
            </div>
            <div class="tabs-box">
                <ul class="tab-btns tab-buttons">
                    <li class="tab-btn active-btn" data-tab="#tab-1">Monthly</li>
                    <li class="tab-btn" data-tab="#tab-2">Yearly</li>
                </ul>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3>Starter plan</h3>
                                            <h2>$19.00</h2>
                                            <span>Per Month</span>
                                        </div>
                                        <div class="table-content mb_40">
                                            <p>For new comer to the industry trying out for an unlimited period.</p>
                                            <ul class="list-item">
                                                <li><i class="icon-26"></i>Advantage on the list</li>
                                                <li><i class="icon-26"></i>Live Tutorial</li>
                                                <li><i class="icon-26"></i>Expert Advice Plan</li>
                                                <li><i class="icon-27"></i>Weekly Workshop</li>
                                                <li><i class="icon-27"></i>Auto Apply to new Job</li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="index-2.html">Start Free Trial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3>Basic plan</h3>
                                            <h2>$39.00</h2>
                                            <span>Per Month</span>
                                        </div>
                                        <div class="table-content mb_40">
                                            <p>For new comer to the industry trying out for an unlimited period.</p>
                                            <ul class="list-item">
                                                <li><i class="icon-26"></i>Advantage on the list</li>
                                                <li><i class="icon-26"></i>Live Tutorial</li>
                                                <li><i class="icon-26"></i>Expert Advice Plan</li>
                                                <li><i class="icon-27"></i>Weekly Workshop</li>
                                                <li><i class="icon-27"></i>Auto Apply to new Job</li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="index-2.html">Start Free Trial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3>Advanced plan</h3>
                                            <h2>$59.00</h2>
                                            <span>Per Month</span>
                                        </div>
                                        <div class="table-content mb_40">
                                            <p>For new comer to the industry trying out for an unlimited period.</p>
                                            <ul class="list-item">
                                                <li><i class="icon-26"></i>Advantage on the list</li>
                                                <li><i class="icon-26"></i>Live Tutorial</li>
                                                <li><i class="icon-26"></i>Expert Advice Plan</li>
                                                <li><i class="icon-27"></i>Weekly Workshop</li>
                                                <li><i class="icon-27"></i>Auto Apply to new Job</li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="index-2.html">Start Free Trial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3>Starter plan</h3>
                                            <h2>$119.00</h2>
                                            <span>Per Year</span>
                                        </div>
                                        <div class="table-content mb_40">
                                            <p>For new comer to the industry trying out for an unlimited period.</p>
                                            <ul class="list-item">
                                                <li><i class="icon-26"></i>Advantage on the list</li>
                                                <li><i class="icon-26"></i>Live Tutorial</li>
                                                <li><i class="icon-26"></i>Expert Advice Plan</li>
                                                <li><i class="icon-27"></i>Weekly Workshop</li>
                                                <li><i class="icon-27"></i>Auto Apply to new Job</li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="index-2.html">Start Free Trial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3>Basic plan</h3>
                                            <h2>$239.00</h2>
                                            <span>Per Year</span>
                                        </div>
                                        <div class="table-content mb_40">
                                            <p>For new comer to the industry trying out for an unlimited period.</p>
                                            <ul class="list-item">
                                                <li><i class="icon-26"></i>Advantage on the list</li>
                                                <li><i class="icon-26"></i>Live Tutorial</li>
                                                <li><i class="icon-26"></i>Expert Advice Plan</li>
                                                <li><i class="icon-27"></i>Weekly Workshop</li>
                                                <li><i class="icon-27"></i>Auto Apply to new Job</li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="index-2.html">Start Free Trial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3>Advanced plan</h3>
                                            <h2>$359.00</h2>
                                            <span>Per Year</span>
                                        </div>
                                        <div class="table-content mb_40">
                                            <p>For new comer to the industry trying out for an unlimited period.</p>
                                            <ul class="list-item">
                                                <li><i class="icon-26"></i>Advantage on the list</li>
                                                <li><i class="icon-26"></i>Live Tutorial</li>
                                                <li><i class="icon-26"></i>Expert Advice Plan</li>
                                                <li><i class="icon-27"></i>Weekly Workshop</li>
                                                <li><i class="icon-27"></i>Auto Apply to new Job</li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="index-2.html">Start Free Trial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- pricing-section end -->


    <!-- download-section -->
    {{-- <section class="download-section pb_120">
        <div class="auto-container">
            <div class="inner-container">
                <div class="pattern-layer"
                    style="background-image: url({{ asset('jobaway') }}/images/shape/shape-6.png);"></div>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('jobaway') }}/images/resource/book-1.png"
                                    alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h2>The 2024 guide for Optimal Content <span>Management</span></h2>
                            <ul class="list-item mb_30">
                                <li>Start by explaining the fundamental concepts of talent acquisition.</li>
                                <li> Provide guidance on crafting clear and compelling job descriptions that
                                    accurately reflect.</li>
                                <li>Practical tips for conducting effective interviews, including types of interview
                                    questions interview formats.</li>
                            </ul>
                            <button type="button" class="theme-btn btn-one">Download E-book</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- download-section end -->


    <!-- testimonial-section -->
    {{-- <section class="testimonial-section pt_120 pb_90">
        <div class="pattern-layer" style="background-image: url({{ asset('jobaway') }}/images/shape/shape-3.png);"></div>
        <div class="auto-container">
            <div class="sec-title light centred pb_60 sec-title-animation animation-style2">
                <span class="sub-title mb_10 title-animation">Testimonials</span>
                <h2 class="title-animation">Words From Our Partners</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="shape"
                            style="background-image: url({{ asset('jobaway') }}/images/shape/shape-7.png);"></div>
                        <div class="icon-box"><img src="{{ asset('jobaway') }}/images/icons/icon-10.png" alt="">
                        </div>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="{{ asset('jobaway') }}/images/resource/testimonial-1.png"
                                    alt=""></figure>
                            <h4>Ashitaka Dai</h4>
                            <span class="designation">Art Director</span>
                        </div>
                        <p>Company and was impressed by the main personalized approach of their recruitment team.
                            They kept me informed at every stage and ensured that I had all</p>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="shape"
                            style="background-image: url({{ asset('jobaway') }}/images/shape/shape-7.png);"></div>
                        <div class="icon-box"><img src="{{ asset('jobaway') }}/images/icons/icon-10.png" alt="">
                        </div>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="{{ asset('jobaway') }}/images/resource/testimonial-2.png"
                                    alt=""></figure>
                            <h4>Franklin Bailey</h4>
                            <span class="designation">Sale Manager</span>
                        </div>
                        <p>Recently I went through their recruitment process with Jobaway Company, and I was
                            impressed by how the smooth and efficient these were.</p>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="shape"
                            style="background-image: url({{ asset('jobaway') }}/images/shape/shape-7.png);"></div>
                        <div class="icon-box"><img src="{{ asset('jobaway') }}/images/icons/icon-10.png" alt="">
                        </div>
                        <div class="author-box">
                            <figure class="thumb-box"><img src="{{ asset('jobaway') }}/images/resource/testimonial-3.png"
                                    alt=""></figure>
                            <h4>Evan Clement</h4>
                            <span class="designation">Mahager, Cypertech</span>
                        </div>
                        <p>I had a fantastic experience throughout the recruitment process with Jobaway team. The
                            communication was clear, interview process was well-organized</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- testimonial-section end -->


    <!-- news-section -->
    {{-- <section class="news-section pt_120 pb_90">
        <div class="auto-container">
            <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                <span class="sub-title mb_10 title-animation">Media</span>
                <h2 class="title-animation">Latest News</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('jobaway') }}/images/news/news-4.jpg" alt=""></a>
                                </figure>
                                <figure class="overlay-image"><a href="blog-details.html"><img
                                            src="{{ asset('jobaway') }}/images/news/news-4.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <span class="category">Business</span>
                                <h3><a href="blog-details.html">Create a series of blog posts discussing common
                                        interview</a></h3>
                                <ul class="post-info">
                                    <li>By <a href="blog-details.html">Alex Beniwal</a></li>
                                    <li><span>March 20, 2023</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('jobaway') }}/images/news/news-5.jpg" alt=""></a>
                                </figure>
                                <figure class="overlay-image"><a href="blog-details.html"><img
                                            src="{{ asset('jobaway') }}/images/news/news-5.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <span class="category">Analytics</span>
                                <h3><a href="blog-details.html">Explore the concept of personal branding and its
                                        impact on</a></h3>
                                <ul class="post-info">
                                    <li>By <a href="blog-details.html">Alex Beniwal</a></li>
                                    <li><span>March 19, 2023</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('jobaway') }}/images/news/news-6.jpg" alt=""></a>
                                </figure>
                                <figure class="overlay-image"><a href="blog-details.html"><img
                                            src="{{ asset('jobaway') }}/images/news/news-6.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <span class="category">Business</span>
                                <h3><a href="blog-details.html">Feature interviews with employees from top
                                        companies</a></h3>
                                <ul class="post-info">
                                    <li>By <a href="blog-details.html">Alex Beniwal</a></li>
                                    <li><span>March 18, 2023</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- news-section end -->

    <!-- google-map -->
    <section class="google-map pb_20 mt-6">
        <div class="auto-container">
            <div class="inner-container">
                <iframe
                    src="https://maps.google.com/maps?q=kantor%20pertanahan%20kabupaten%20banjar&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="100%" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <!-- google-map end -->
@endsection

{{-- @section('script')
    <script>
        $(document).ready(function() {

            $(document).on('keyup', '#cari', function() {
                var value = $(this).val().toLowerCase();
                $(".col_list").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
                // alert('ya');
            });

        });
    </script>
@endsection --}}
