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
              <h3>Persyaratan Permohonan Pemecahan, Pemisahan, Penggabungan</h3>
              @if ($active->aktif)
              <h5 class="text-success">Estimasi Waktu 15 Hari Kerja*</h5>
              @endif
            </div>

            @if ($active->aktif)
            <div class="col-12">
              <small class="text-success">Jika berkas persyaratan pemohon lengkap</small>  
            </div>
            @endif

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              {{-- <p><b><u>Pencatatan Pelunasan BPHTB/PPH</u></b></p> --}}
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> Asli & FC Akta Pendirian dan Pengesahan Badan Hukum</li>
                <li><i class="ri-check-double-line"></i> Gambar Rencana Pemisahan/Pemecahan</li>
                <li><i class="ri-check-double-line"></i> FC Pengesahan Siteplan dan Sitepaln Dari Pemerintah Kabupaten Atau Kota (Untuk Badan Hukum)</li>
                <li><i class="ri-check-double-line"></i> Penyelenggaraan Kebijakan Penggunaan dan Pemanfaatan Tanah (Jika Tanah Pertanian)</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai Asli (Jika Dikuasakan)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa</li>
                <li><i class="ri-check-double-line"></i> Pemecahan/Pemisahan Tanah Perorangan lebih dari 5 Bidang hanya Untuk Pewarisan</li>

              </ul>
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