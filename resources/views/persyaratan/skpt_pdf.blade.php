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
                  <h3>Pengajuan Surat Keterangan Pendaftaran Tanah (SKPT)</h3>                  
                  <h5 class="text-warning">Biaya : Rp. 50.000</h5>
                  @if ($active->aktif)
                  <h5 class="text-success">Estimasi Waktu 4 Hari Kerja*</h5>
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
                    <li><i class="ri-check-double-line"></i> FC Sertipikat Pemilik/FC Sertipikat Tetangga Yang Berbatasan Langsung 1 Lbr</li>
                    <li><i class="ri-check-double-line"></i> Asli & FC KTP & KK Pemilik Sertipikat</li>
                    <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai (Jika Yang Mendaftar Bukan Pemilik Tanah)</li>
                    <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa 1 lbr</li>
                    <li><i class="ri-check-double-line"></i> Keterangan kehilangan dari RT/Kelurahan (Lokasi Hilang)</li>
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