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
                  <h5>Persyaratan Permohonan Sertifikat</h5>
                  @if ($active->aktif)
                  <h6 class="text-success">Estimasi Waktu 97 Hari Kerja*</h6>
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
                    <li><i class="ri-check-double-line"></i> Foto copy KTP & KK Sesuai Alas Hak 2 Lbr (Memperlihatkan Yang Asli)</li>
                    <li><i class="ri-check-double-line"></i> Alas Hak (Asli & FC Yang Leges Kelurahan 1 Lbr)</li>
                    <p><b>"Surat Keterangan Dari Pemohon Bahwa Tanah Tersebut Bukan Tanah Sengketa & Bukan hutang Piutang" (Asli & FC Legalisir Kelurahan 1 Lbr)</b></p>
                    <li><i class="ri-check-double-line"></i> SPPFBT</li>
                    <li><i class="ri-check-double-line"></i> Riwayat Perolehan Tanah
                        <ul>
                            <li>A. Jual Beli : Kwitansi Asli & FC 1 Lbr</li>
                            <li>B. Waris : 
                                <ul>
                                    <li>a. Surat Kematian (FC Leges Kelurahan 2 Lbr)</li>
                                    <li>b. FC KTP & KK Ahli Waris</li>
                                    <li>c. Surat Pernyataan Waris (Asli & FC Legalisir Kelurahan 1 Lbr)</li>
                                    <li>d. Surat Keterangan Waris Oleh Desa (Asli & FC Legalisir Kelurahan 1 Lbr)</li>
                                    <li>c. Surat Penyerahan Hak Waris (Asli & FC Legalisir Kelurahan 1 Lbr)</li>
                                </ul>
                            </li>
                            <li>C. Hibah : Surat Pernyataan/Keteragan Hibah (Asli & FC Legalisir Kelurahan 1 Lbr)</li>
                        </ul>
                    </li>
    
                    <li><i class="ri-check-double-line"></i> FC Alas Hak Pemilik Sebelumnya Legalisir Kelurahan 2 Lbr</li>
                    <li><i class="ri-check-double-line"></i> Surat Keterangan Alas Hak Pemilik Sebelumnya Sudah Ditarik Oleh Kelurahan (Asli & FC Legalisir Kelurahan 2 Lbr)</li>
                    <li><i class="ri-check-double-line"></i> Surat Keterangan "Jika Belum Pernah Dibuatkan Alas Hak" (Asli & FC Legalisir Kelurahan 1 Lbr)</li>
                    <li><i class="ri-check-double-line"></i> FC NPWP "Jika Transaksi Jual Beli diatas 60 Juta" 1 Lbr</li>
                    <li><i class="ri-check-double-line"></i> SPPT PBB Tahun Berjalan (Asli & FC 1 Lbr)</li>
                    <li><i class="ri-check-double-line"></i> Foto lokasi Dengan Empat Sudut Terlihat Patok & Akses Jalan (Foto diprint/Cetak)</li>
                    <li><i class="ri-check-double-line"></i> Foto Lokasi Dengan Aplikasi Foto Geotag (Bagikan Via Email: <br> <u><b>pendaftaran.kantahkab.banjar@gmail.com</b></u> )</li>
                    <li><i class="ri-check-double-line"></i> Surat Kuasa Bermatrai Asli</li>
                    <li><i class="ri-check-double-line"></i> FC KTP & KK Kuasa 2 Lbr</li>
                    
                    
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