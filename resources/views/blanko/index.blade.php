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
            <h2>Pengisian Blanko Permohonan</h2>
            <p>Pengisian Blanko/Form pemohonan pertanahan online</p>
            <div class="row justify-content-center mt-2">
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Cari.." id="cari">
                </div>
              </div>
              {{-- <div class="col-3 col-md-1">
                <a href="" class="btn btn-success" id="btn-history">History</a>
              </div> --}}
            </div>
            
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-4 col_list">
              <small style="font-size: 0.1px;">Blanko Permohonan Peralihan Hak</small>
                <a href="{{ route('peralihanHak') }}">
              <div class="icon-box">
                
                <i class="ri-newspaper-fill" style="color: #29cc61;"></i>
                <h3 style="color: black;">Blanko Permohonan Peralihan Hak</h3>
                
              </div>
            </a>
            </div>

            <div class="col-lg-4 col-md-4 col_list">
              <small style="font-size: 0.1px;">Blanko Permohonan Pemisahan, Pemecahan dan Penggabungan Sertifikat</small>
                <a href="{{ route('pemecahanPemisahan') }}">
              <div class="icon-box">
                
                <i class="ri-newspaper-fill" style="color: #29cc61;"></i>
                <h3 style="color: black;">Blanko Permohonan Pemisahan, Pemecahan dan Penggabungan Sertifikat</h3>
                
              </div>
            </a>
            </div>

            <div class="col-lg-4 col-md-4 col_list">
              <small style="font-size: 0.1px;">Blanko Permohonan Peningkatan</small>
                <a href="{{ route('peningkatan') }}">
              <div class="icon-box">
                
                <i class="ri-newspaper-fill" style="color: #29cc61;"></i>
                <h3 style="color: black;">Blanko Permohonan Peningkatan</h3>
                
              </div>
            </a>
            </div>

            <div class="col-lg-4 col-md-4 col_list">
              <small style="font-size: 0.1px;">Blanko Permohonan Roya, SKPT, Pencatatan, Pengecekan, IPPT</small>
                <a href="{{ route('royaInput') }}">
              <div class="icon-box">
                
                <i class="ri-newspaper-fill" style="color: #29cc61;"></i>
                <h3 style="color: black;">Blanko Permohonan Roya, SKPT, Pencatatan, Pengecekan, IPPT</h3>
                
              </div>
            </a>
            </div>

            <div class="col-lg-4 col-md-4 col_list">
              <small style="font-size: 0.1px;">Blanko Permohonan Pengukuran Ulang</small>
                <a href="{{ route('pengukuranUlang') }}">
              <div class="icon-box">
                
                <i class="ri-newspaper-fill" style="color: #29cc61;"></i>
                <h3 style="color: black;">Blanko Permohonan Pengukuran Ulang</h3>
                
              </div>
            </a>
            </div>

            <div class="col-lg-4 col-md-4 col_list">
              <small style="font-size: 0.1px;">Blanko Permohonan Pertimbangan Teknis Pertanahan (PTP)</small>
                <a href="{{ route('ptp') }}">
              <div class="icon-box">
                
                <i class="ri-newspaper-fill" style="color: #29cc61;"></i>
                <h3 style="color: black;">Blanko Permohonan Pertimbangan Teknis Pertanahan (PTP)</h3>
                
              </div>
            </a>
            </div>

            <div class="col-lg-4 col-md-4 col_list">
              <small style="font-size: 0.1px;">Blanko Permohonan Sertifikat Pertamakali</small>
                <a href="{{ route('pertamakali') }}">
              <div class="icon-box">
                
                <i class="ri-newspaper-fill" style="color: #29cc61;"></i>
                <h3 style="color: black;">Blanko Permohonan Sertifikat Pertamakali</h3>
                
              </div>
            </a>
            </div>

            {{-- <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Blanko Permohonan Sertifikat Tahap 2</small>
                <a href="">
              <div class="icon-box">
                
                <i class="ri-newspaper-fill" style="color: #29cc61;"></i>
                <h3 style="color: black;">Blanko Permohonan Sertifikat Tahap 2</h3>
                
              </div>
            </a>
            </div>

            <div class="col-lg-3 col-md-4 col_list">
              <small style="font-size: 0.1px;">Blanko Permohonan Sertifikat Tahap 3</small>
                <a href="">
              <div class="icon-box">
                
                <i class="ri-newspaper-fill" style="color: #29cc61;"></i>
                <h3 style="color: black;">Blanko Permohonan Sertifikat Tahap 3</h3>
                
              </div>
            </a>
            </div> --}}



            
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

        // const pemohon_id = localStorage.getItem('pemohon_id');

        // if(!pemohon_id){
        //     $('#btn-history').hide();
        //   }else{
        //     var id_pemohon = "{{ Crypt::encryptString("+ pemohon_id +") }}";

        //     $('#btn-history').attr("href",id_pemohon);
        //   }

        

      });
    </script>
@endsection