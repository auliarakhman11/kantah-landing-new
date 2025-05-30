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
              <h3>Persyaratan Peralihan Hak</h3>
              <h5 class="text-warning">Biaya : Rp. 50.000</h5>
              @if ($active->aktif)
              <h5 class="text-success">Estimasi Waktu 5 Hari Kerja</h5>
              @endif
            </div>
            @if ($active->aktif)
            <div class="col-12">
              <small class="text-success">* Jika berkas persyaratan pemohon lengkap <br>
                * Jika pejabat dan petugas yang menandatangani tidak sedang tugas luar
              </small>  
            </div>
            @endif                       

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p><b><u>Peralihan Hak - Jual Beli</u></b></p>
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> Akta Jual Beli (Dari Notaris)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penjual</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Pembeli</li>
                <li><i class="ri-check-double-line"></i> SPPT PBB Tahun Berjalan</li>
                <li><i class="ri-check-double-line"></i> BPHTB</li>
                <li><i class="ri-check-double-line"></i> SSP(Surat Setoran Pajak) + Validasi</li>
                <li><i class="ri-check-double-line"></i> NPWP</li>
                <li><i class="ri-check-double-line"></i> Kartu Jaminan Kesehatan Nasional (JKN)</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai Asli (Jika Dikuasakan)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa</li>
              </ul>
              {{-- <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p> --}}
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p><b><u>Peralihan Hak - Waris</u></b></p>
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> Surat Kematian 1 Lembar Asli & FC</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Seluruh Ahli Waris 1 Lembar Legalisir Kelurahan</li>
                <li><i class="ri-check-double-line"></i> Surat Pernyataan Waris 1 Lembar Asli & FC Di Legalisir Kelurahan</li>
                <li><i class="ri-check-double-line"></i> Surat Keterangan Waris Dari Desa 1 Lembar Asli & FC Di Legalisir Kelurahan</li>
                <li><i class="ri-check-double-line"></i> SPPT PBB Tahun Berjalan</li>
                <li><i class="ri-check-double-line"></i> BPHTB</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai Asli (Jika Dikuasakan)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa</li>
                
              </ul>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p><b><u>Peralihan Hak - Pembagian Hak Bersama</u></b></p>
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> Akta Pembagian Hak Bersama (Dari Notaris)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Pemberi Hak</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Hak</li>
                <li><i class="ri-check-double-line"></i> SPPT PBB Tahun Berjalan</li>
                <li><i class="ri-check-double-line"></i> BPHTB</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai Asli (Jika Dikuasakan)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa</li>
                
              </ul>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p><b><u>Peralihan Hak - Hibah</u></b></p>
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> Akta Hibah (Dari Notaris)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Pemberi Hibah</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Hibah</li>
                <li><i class="ri-check-double-line"></i> SPPT PBB Tahun Berjalan</li>
                <li><i class="ri-check-double-line"></i> BPHTB</li>
                <li><i class="ri-check-double-line"></i> SSP (Surat Setoran Pajak) (Jika Ada)</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai Asli (Jika Dikuasakan)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa</li>
              </ul>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p><b><u>Peralihan Hak - Lelang</u></b></p>
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> Akta Pembagian Hak Bersama (Dari Notaris)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Pemberi Hak</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Hak</li>
                <li><i class="ri-check-double-line"></i> SPPT PBB Tahun Berjalan</li>
                <li><i class="ri-check-double-line"></i> BPHTB</li>
                <li><i class="ri-check-double-line"></i> SSP (Surat Setoran Pajak) (Jika Ada)</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai Asli (Jika Dikuasakan)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa</li>
              </ul>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p><b><u>Persyaratan Balik Nama Lelang</u></b></p>
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> Surat Kematian 1 Lembar Asli & FC</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Seluruh Ahli Waris 1 Lembar Legalisir Kelurahan</li>
                <li><i class="ri-check-double-line"></i> Surat Pernyataan Waris 1 Lembar Asli & FC Di Legalisir Kelurahan</li>
                <li><i class="ri-check-double-line"></i> Surat Keterangan Waris Dari Desa 1 Lembar Asli & FC Di Legalisir Kelurahan</li>
                <li><i class="ri-check-double-line"></i> SPPT PBB Tahun Berjalan</li>
                <li><i class="ri-check-double-line"></i> BPHTB</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai Asli (Jika Dikuasakan)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa</li>
                
              </ul>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p><b><u>Ganti Nama Pemegang Hak Tanggungan</u></b></p>
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> Sertipikat Hak Tanggungan</li>
                <li><i class="ri-check-double-line"></i> Surat Pengantar Dari PPAT ke BPN</li>
                <li><i class="ri-check-double-line"></i> Surat Pengantar Dari Bank ke PPAT</li>
                <li><i class="ri-check-double-line"></i> Akta Peleburan & Pengesahan Badan Hukum</li>
                <li><i class="ri-check-double-line"></i> KTP Notaris</li>
                <li><i class="ri-check-double-line"></i> KTP Dari Pihak Bank</li>
              </ul>
              <p class="fst-italic">* Kecuali untuk Hapus Hak Tanggungan Cukup Lampirkan Persyaratan Hapus Hak Tanggungan/Roya</p>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p><b><u>Merger Hak Tanggungan</u></b></p>
              <ul>
                <li><i class="ri-check-double-line"></i> Sertipikat Asli</li>
                <li><i class="ri-check-double-line"></i> Sertipikat Hak Tanggungan</li>
                <li><i class="ri-check-double-line"></i> Surat Pengantar Dari PPAT ke BPN</li>
                <li><i class="ri-check-double-line"></i> Surat Pengantar Dari Bank ke PPAT</li>
                <li><i class="ri-check-double-line"></i> Akta Peleburan & Pengesahan Badan Hukum</li>
                <li><i class="ri-check-double-line"></i> KTP Notaris</li>
                <li><i class="ri-check-double-line"></i> KTP Dari Pihak Bank</li>
              </ul>
              <p class="fst-italic">* Kecuali untuk Hapus Hak Tanggungan Cukup Lampirkan Persyaratan Hapus Hak Tanggungan/Roya</p>
            </div>

          </div>
    
        </div>
      </section><!-- End About Us Section -->
</main>
</body>
</html>