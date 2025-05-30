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
              <h3>Persyaratan Perubahan Hak (Penurunan)</h3>
            </div>
            <div class="col-4" data-aos="fade-right mb-3">
                <a href="{{ route('Persyaratan') }}" class="float-right"><i class="ri-arrow-left-circle-line" style="color: #29cc61;"></i> Kembali</a>
            </div>

            <div class="col-7"></div>
            <div class="col-5" data-aos="fade-right mb-3"><a href="{{ route('IpptPdf') }}" class="btn btn-sm btn-success btn-rounded float-right"><i class="ri-file-download-line" ></i> Download PDF</a></div>

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli & Fotokopi</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Pemilik Sertipikat (Legalisir Discapil/Notaris)</li>
                <li><i class="ri-check-double-line"></i> FC PBB Tahun Berjalan</li>
                <li><i class="ri-check-double-line"></i> FC Perjanjian Pengikatan Jual Beli (PPJB) (Legalisir Notaris)</li>
                <li><i class="ri-check-double-line"></i> Surat Pernyataan (Alasan Kenapa Diturunkan) <br> EX: Mau Dijual/Dipecah/Dipisah</li>
                <li><i class="ri-check-double-line"></i> Luas > 1 Ha = Ijin Lokasi <br> Luas < 1 Ha = IPPT</li>
                <li><i class="ri-check-double-line"></i> Blanko Permohonan Yang Sudah Diisi dan Ditandatangani Oleh Pemohon</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermatrai Asli (Jika Dikuasakan)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa</li>
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