@extends('template.master')
@section('content')
      <!-- ======= Hero Section ======= -->
  {{-- <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('company')}}/assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Company</span></h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{asset('company')}}/assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Lorem Ipsum Dolor</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{asset('company')}}/assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Sequi ea ut et est quaerat</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero --> --}}

  <main id="main">

    <section id="features" class="features mt-5">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Info Persyaratan</h2>
            <p>Informasi persyaratan berkas Kantor Pertanhan Kabupaten Banjar</p>
            <div class="row justify-content-center mt-2">
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Cari.." id="cari">
                </div>
              </div>
            </div>
            
          </div>
  
          <div class="row">
            <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Persyaratan Peralihan Hak</small>
                <a href="{{ route('Pph') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Persyaratan Peralihan Hak</h3>
                
              </div>
            </a>
            </div>

            <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Persyaratan Permohonan Sertifikat</small>
                <a href="{{ route('pps') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Persyaratan Permohonan Sertifikat</h3>
                
              </div>
            </a>
            </div>

            {{-- <div class="col-lg-3 col-md-4">
              <a href="{{ route('PphDisabilitas') }}">
                <div class="icon-box">
                  
                  <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                  <h3 style="color: black;">Persyaratan Peralihan Hak (Disabilitas)</h3>
                  
                </div>
              </a>
            </div> --}}

            <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Persyaratan IPPT (Izin Perubahan Penggunaan Tanah)</small>
                <a href="{{ route('Ippt') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Persyaratan IPPT (Izin Perubahan Penggunaan Tanah)</h3>
                
              </div>
            </a>
            </div>

            <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Persyaratan Pencatatan Pelunasan BPHTB/PPH</small>
              <a href="{{ route('Bphtb') }}">
            <div class="icon-box">
              
              <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
              <h3 style="color: black;">Persyaratan Pencatatan Pelunasan BPHTB/PPH</h3>
              
            </div>
          </a>
          </div>

          <div class="col-lg-3 col-md-4 col_list">
            <small style="font-size: 0.1px;">Pengajuan</small>
          <a href="{{ route('pengajuan') }}">
            <div class="icon-box">
              
              <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
              <h3 style="color: black;">Pengajuan</h3>
              
            </div>
          </a>
        </div>

          {{-- <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Pengajuan Surat Keterangan Pendaftaran Tanah (SKPT)</small>
            <a href="{{ route('Skpt') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Pengajuan Surat Keterangan Pendaftaran Tanah (SKPT)</h3>
                
              </div>
            </a>
          </div> --}}

          {{-- <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Pengajuan Permohonan Sertifikat Pengganti Karena Hilang</small>
            <a href="{{ route('Psp') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Pengajuan Permohonan Sertifikat Pengganti Karena Hilang</h3>
                
              </div>
            </a>
          </div> --}}

          {{-- <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Pengajuan Pengukuran Ulang</small>
            <a href="{{ route('Ppu') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Pengajuan Pengukuran Ulang</h3>
                
              </div>
            </a>
          </div> --}}

          <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Persyaratan Permohonan Pemecahan, Pemisahan, Penggabungan</small>
            <a href="{{ route('Pppp') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Persyaratan Permohonan Pemecahan, Pemisahan, Penggabungan</h3>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Persyaratan Perubahan Hak (Hak Guna Bangunan Ke Hak Milik)</small>
            <a href="{{ route('RubahHak') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Persyaratan Perubahan Hak (Hak Guna Bangunan Ke Hak Milik)</h3>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Persyaratan Roya</small>
            <a href="{{ route('roya') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Persyaratan Roya</h3>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Persyaratan Perubahan Hak (Penurunan)</small>
            <a href="{{ route('penurunan') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Persyaratan Perubahan Hak (Penurunan)</h3>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Ganti Nama Sertifikat</small>
            <a href="{{ route('lelang') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Ganti Nama Sertifikat</h3>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Persyaratan Pengecekan Sertipikat</small>
            <a href="{{ route('pengecekan') }}">
              <div class="icon-box">
                
                <i class="ri-file-list-3-line" style="color: #29cc61;"></i>
                <h3 style="color: black;">Persyaratan Pengecekan Sertipikat</h3>
                
              </div>
            </a>
          </div>
            
          </div>
  
        </div>
      </section><!-- End Features Section -->

    <!-- ======= Our Clients Section ======= -->

  </main><!-- End #main -->
@endsection

@section('script')
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
@endsection