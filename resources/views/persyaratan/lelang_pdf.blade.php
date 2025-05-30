<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persyaratan Peralihan Hak</title>
    {{-- <link rel="stylesheet" href="{{ public_path('css') }}/bootstrap.min.css"> --}}

    {{-- <link href="{{asset('company')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('company')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('company')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{asset('company')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet"> --}}

    <style>
        
    .huruf {
        /* font-family: 'Times New Roman'; */
        font-size: 13px;
    }
    </style>
</head>
<body>
  <main id="main" class="huruf">
    <section id="about-us" class="about-us mt-5">
        <div class="container" data-aos="fade-up">
    
          <div class="row content">
            <div class="col-8" data-aos="fade-right mb-3">
              <h3>Ganti Nama Sertifikat</h3>
              <h5 class="text-warning">Biaya : Rp. 50.000</h5>
              @if ($active->aktif)
              <h3 class="text-success">Estimasi Waktu 5 Hari Kerja*</h3>
              @endif
              
            </div>
            @if ($active->aktif)
            <div class="col-12">
              <small class="text-success">Jika berkas persyaratan pemohon lengkap</small>  
            </div>
            @endif
            

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> FC KTP Terdahulu</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Terbaru</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai Asli (Jika Dikuasakan)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa</li>
              </ul>
              <p class="fst-italic">* Kecuali untuk Hapus Hak Tanggungan Cukup Lampirkan Persyaratan Hapus Hak Tanggungan/Roya</p>
              {{-- <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p> --}}
            </div>

          </div>
    
        </div>
      </section><!-- End About Us Section -->
</main>
</body>
</html>