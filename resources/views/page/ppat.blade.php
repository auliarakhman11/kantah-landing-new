@extends('template.master')
@section('content')

<?php header('Access-Control-Allow-Origin: *'); ?>
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
            
            
          </div>
  
          <div id="ppat"></div>
  
        </div>
      </section><!-- End Features Section -->

    <!-- ======= Our Clients Section ======= -->

  </main><!-- End #main -->
@endsection

@section('script')
    <script>
      $(document).ready(function() {

        // $(document).on('keyup', '#cari', function() {
        //     var value = $(this).val().toLowerCase();
        //     $(".col_list").filter(function() {
        //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //     });
        //     // alert('ya');
        // });

        function detail(){ 
            $.ajax({ 
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '//intranet.atrbpn.go.id/modulWebsite/ajax/daftarPPATDetail.php', // the url where we want to POST
            data        : {'kd'  : '7t/bqmS/AWG1at6ZzW54cVYFuDvC7e11qhREU4AQCr32HiVxHn6deo8rGmFvgtkY',
                            'yd' : '3vdlYvnShyjLRM4D/EhVj7lOIyVc6mGAZ2z+zsq6E+juQ+vycYX7zacBgfIpchy9'},  
            success: function(data) {   
                $("#ppat").html(data);   
            }
            }); 
            
        };

        detail();

      });
    </script>
@endsection