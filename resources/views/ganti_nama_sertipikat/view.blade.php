@extends('template.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- service-section -->
    <section class="service-section centred pt_110 pb_90">
        <div class="auto-container">
            <div class="sec-title pb_60 sec-title-animation animation-style2">
                {{-- <span class="sub-title mb_10 title-animation">What We Provide</span> --}}
                <h2 class="title-animation">Formulir Ganti Nama Sertipikat berhasil dibuat!</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#modal_qr_code" data-toggle="modal"><img
                                            src="{{ asset('img/QrCode.png') }}" alt=""></a>
                                </figure>
                                <figure class="overlay-image"><a href="#modal_qr_code" data-toggle="modal"><img
                                            src="{{ asset('img/QrCode.png') }}" alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#modal_qr_code" data-toggle="modal">Scan QR Code</a></h3>
                                <p>Untuk mengarahkan pemohon ke halaman website hanya dengan
                                    memindai kode tersebut menggunakan perangkat mobile.</p>
                                <div class="btn-box"><a href="#modal_qr_code" data-toggle="modal" class="theme-btn btn-one">
                                        Lihat</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a
                                        href="{{ route('downloadGantiNamaSertipikat', ['id' => $id, 'device_id' => $device_id]) }}"><img
                                            src="{{ asset('img/msword.png') }}" alt=""></a>
                                </figure>
                                <figure class="overlay-image"><a
                                        href="{{ route('downloadGantiNamaSertipikat', ['id' => $id, 'device_id' => $device_id]) }}"><img
                                            src="{{ asset('img/msword.png') }}" alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h3><a
                                        href="{{ route('downloadGantiNamaSertipikat', ['id' => $id, 'device_id' => $device_id]) }}">Download
                                        Formulir</a></h3>
                                <p>Fitur download formulir dengan format dokumen agar mudah diakses dan dimodifikasi.</p>
                                <div class="btn-box"><a
                                        href="{{ route('downloadGantiNamaSertipikat', ['id' => $id, 'device_id' => $device_id]) }}"
                                        class="theme-btn btn-one">
                                        Download</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#modal_skm" data-toggle="modal"><img
                                            src="{{ asset('img/skm.png') }}" alt=""></a>
                                </figure>
                                <figure class="overlay-image"><a href="#modal_skm" data-toggle="modal"><img
                                            src="{{ asset('img/skm.png') }}" alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#modal_skm" data-toggle="modal">Survey Kepuasan Masyarakat</a></h3>
                                <p>Berfungsi untuk mengukur sejauh mana masyarakat merasa puas
                                    dengan layanan atau produk yang kami berikan.</p>
                                <div class="btn-box"><a href="#modal_skm" data-toggle="modal" class="theme-btn btn-one">
                                        Kunjungi</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- service-section end -->

    <div class="modal fade" id="modal_qr_code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Scan QR Code</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="visible-print text-center">
                        {!! QrCode::size(300)->generate(route('downloadGantiNamaSertipikat', ['id' => $id, 'device_id' => $device_id])) !!}
                        {{-- <p><strong>No Tiket: {{ $pemecahan_pemisahan->permohonan->no_tiket }}</strong></p> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_skm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Survey Kepuasan Masyarakat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="visible-print text-center">
                        {!! QrCode::size(300)->generate('https://csms.atrbpn.go.id/ly/3ckN0uxm') !!}
                        {{-- <p><strong>No Tiket: {{ $pemecahan_pemisahan->permohonan->no_tiket }}</strong></p> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    <a href="https://csms.atrbpn.go.id/ly/3ckN0uxm" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $(document).ready(function() {


        });
    </script>
@endsection
<!-- ======= About Us Section ======= -->
