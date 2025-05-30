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
                {{-- <div class="col-4" data-aos="fade-right mb-3">
                    <a href="{{ route('Persyaratan') }}" class="float-right mt-2"><i class="ri-arrow-left-circle-line" style="color: #29cc61;"></i> Kembali</a>
                    <a href="{{ route('SkptPdf') }}" class="btn btn-sm btn-success btn-rounded float-right mt-3">Download</a>
                </div> --}}
                @if ($active->aktif)
                <div class="col-12">
                  <small class="text-success">Jika berkas persyaratan pemohon lengkap</small>  
                </div>
                @endif
                
    
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                  {{-- <p><b><u>Pencatatan Pelunasan BPHTB/PPH</u></b></p> --}}
                  <ul>
                    <li><i class="ri-check-double-line"></i> FC Sertifikat Pemilik/FC Sertifikat Tetangga Yang Berbatasan Langsung 1 Lbr</li>
                    <li><i class="ri-check-double-line"></i> Asli & FC KTP & KK Pemilik Sertifikat</li>
                    <li><i class="ri-check-double-line"></i> Surat Kuasa Bermatrai (Jika Yang Mendaftar Bukan Pemilik Tanah)</li>
                    <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa 1 lbr</li>
                    <li><i class="ri-check-double-line"></i> Keterangan kehilangan dari RT/Kelurahan (Lokasi Hilang)</li>
                  </ul>
                  {{-- <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p> --}}
                </div>            
    
              </div>
    
              <br>
              <div class="row content">
                <div class="col-12" data-aos="fade-right mb-3">
                  <h3>Pengajuan Permohonan Sertipikat Pengganti Karena Hilang</h3>
                  <h5 class="text-warning">Biaya : Rp. 350.000</h5>
    
                  @if ($active->aktif)
                      <h5 class="text-success"> Estimasi Waktu 5 Hari Kerja*</h5>
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
    
                    <li><i class="ri-check-double-line"></i> Apabila Pemilik Sertipikat Sudah Meninggal Dunia, Lengkapi Dengan
                    <br>&nbsp;&nbsp;&nbsp;- Surat Kematian (FC Yang dilegalisir Kelurahan 2 Lbr)
                    <br>&nbsp;&nbsp;&nbsp;- FC KTP & KK Ahli Waris
                    <br>&nbsp;&nbsp;&nbsp;- Surat Pernyataan Waris (Asli dan FC dilegalisir Kelurahan)
                    <br>&nbsp;&nbsp;&nbsp;- Surat Keterangan Waris oleh Desa (Asli dan FC dilegalisir Kelurahan)
                    <br>&nbsp;&nbsp;&nbsp;- Surat Penyerahan Waris (Asli dan FC dilegalisir Kelurahan)
                    </li>
    
                    <li><i class="ri-check-double-line"></i> Surat Keterangan Pendaftaran Tanah (SKPT) Dari BPN</li>
                    <li><i class="ri-check-double-line"></i> Surat Keterangan Kehilangan Dari Kepolisian (Setelah SKPT)</li>
    
                    <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai (Jika Yang Mendaftar Bukan Pemilik Tanah)</li>
                    <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa 1 lbr</li>
                  </ul>
                  {{-- <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p> --}}
                </div>            
    
              </div>
    <br>
    
              <div class="row content">
                <div class="col-12" data-aos="fade-right mb-3">
                  <h3>Pengajuan Pengukuran Ulang</h3>
                </div>
    
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                  {{-- <p><b><u>Pencatatan Pelunasan BPHTB/PPH</u></b></p> --}}
                  <ul>
                    <li><i class="ri-check-double-line"></i> FC Sertipikat Pemilik/FC Sertipikat Tetangga Yang Berbatasan Langsung 1 Lbr</li>
                    <li><i class="ri-check-double-line"></i> Asli & FC KTP & KK Pemilik Sertipikat</li>
                    <li><i class="ri-check-double-line"></i> Untuk Pemohon Sertipikat Hilang : Melampirkan Surat Pengantar Dari RT atau Kelurahan/Desa</li>
                    <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai (Jika Yang Mendaftar Bukan Pemilik Tanah)</li>
                    <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa 1 lbr</li>
                    <li><i class="ri-check-double-line"></i> Foto Lokasi Dengan Aplikasi Geotag (Bagikan Via Email pendaftaran.kantahkab.banjar@gmail.com)</li>
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