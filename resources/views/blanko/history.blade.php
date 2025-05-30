@extends('template.master')
@section('content')

      <!-- ======= Hero Section ======= -->

  <main id="main">

    <section id="features" class="features mt-5">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>History Pembuatan Blanko Permohonan</h2>
            {{-- <p>Informasi persyaratan berkas Kantor Pertanhan Kabupaten Banjar</p> --}}
            
            
          </div>
          <a href="{{ route('blanko') }}" class="btn btn-sm btn-success"><i class="ri-arrow-left-fill"></i> Kembali</a>
        </div>

        

        <div class="container-fluid" data-aos="fade-up">

        </div>

        {{-- <div class="row justify-content-center">
            <div class="col-10 col-md-8">
                <div class="ratio ratio-16x9">
                    <iframe src="{{ route('viewPeralihanHak') }}" allowfullscreen></iframe>
                </div>
            </div>
        </div> --}}
        
      </section><!-- End Features Section -->

    <!-- ======= Our Clients Section ======= -->
    

  </main><!-- End #main -->



  

@endsection

@section('script')
    <script>

    $(document).ready(function () {
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