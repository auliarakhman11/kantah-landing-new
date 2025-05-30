@extends('template.master')
@section('content')

      <!-- ======= Hero Section ======= -->

      <style>
        .scroll {
        overflow-x: auto;
        height:600px;
        overflow-y: scroll;
        }
      </style>

  <main id="main">

    <section id="features" class="features mt-5">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Blanko Peningkatan</h2>
            {{-- <p>Informasi persyaratan berkas Kantor Pertanhan Kabupaten Banjar</p> --}}
            <a href="{{ route('blanko') }}" class="btn btn-warning float-right"><i class="ri-arrow-go-back-fill"></i> Kembali</a>
            <a href="{{ route('pdfPeningkatan',$id) }}" class="btn btn-success float-right"><i class="ri-file-download-line"></i> Download</a>
            {{-- <a href="#qrcode" data-toggle="modal" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</a> --}}
            <button type="button" data-bs-toggle="modal" data-bs-target="#qrcode" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</button>
            
        </div>
  
        </div>

        <div class="container-fluid" data-aos="fade-up">
            

            <div class="scroll row justify-content-center">
                <div class="col-12 col-md-8">

                    <p style="float:right">Martapura, {{ $tgl }}<br>Kepada Yth.<br>Kepala Kantor Pertanahan<br>Kabupaten Banjar<br>Di Martapura<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                    <div style="float:left">
                        <p>Dengan Hormat,<br>&nbsp;Yang bertanda tangan dibawah ini :</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;: {{ $peningkatan->nama }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: {{ $peningkatan->pekerjaan }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tempat Tinggal&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: {{ $peningkatan->nama }}</p>
                        <p>Dalam hal ini bertindak untuk dan atas nama serta selaku kuasa dari :</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: {{ $peningkatan->nama_kuasa }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Pekerjaan&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{ $peningkatan->pekerjaan_kuasa }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tempat Tinggal&nbsp; &nbsp; &nbsp; &nbsp; :</p>
                        <p>Dengan ini mengajukan permohonan perubahan hak Milik sebidang tanah untuk perumahan yang terletak di : {{ $peningkatan->alamat_kuasa }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Jalan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peningkatan->jalan_tanah }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Desa/Kelurahan&nbsp; &nbsp; &nbsp; &nbsp;: {{ $peningkatan->kelurahan->nm_kelurahan }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kecamatan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $peningkatan->kecamatan->nm_kecamatan }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kabupaten&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : Banjar</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Provinsi&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;: Kalimantan Selatan</p>
                        <p style="text-align: justify;">Yang semula terdaftar sebagai Hak Guna Bangunan Nomor {{ $peningkatan->no_hak }} Tanggal {{ date("d-m-Y", strtotime($peningkatan->tgl_hak)) }} Berdasarkan Keputusan Menteri Negara Agraria / Kepala Badan Pertanahan Nasional No 1339/SK-HK.02/X/2022 Tanggal 22 Oktober 1997 Tentang Pemberian Hak Milik Atas Tanah Untuk Rumah Sangat Sederhana (RSS) Dan Rumah Sederhana (RS).</p>
                        <ol>
                            <li>Sertipikat Hak Guna Bangunan Nomor {{ $peningkatan->no_hak }} Tanggal {{ date("d-m-Y", strtotime($peningkatan->tgl_hak)) }}</li>
                            <li>Fotocopy Kartu Tanda Penduduk (KTP) NIK {{ $peningkatan->nik }}</li>
                            <li>Fotocopy SPPT PBB Tahun {{ $peningkatan->tahun_sppt }}</li>
                            <li>Surat Pernyataan dari pemohon bahwa dengan perolehan Hak Milik ini bersangkutan akan mempunyai Hak Milik atas tanah untuk rumah tinggal tidak lebih dari 5 (lima) bidang yang seluruhnya meliputi luas tidak lebih dari 5000 (lima ribu) M&sup2;</li>
                            <li>IMB.</li>
                            <li>Kelengkapan Badan Hukum <strong>(Hak Milik ke Hak Guna Bangunan)</strong></li>
                        </ol>
                        <p>&nbsp; &nbsp; &nbsp;&nbsp;Untuk permohonan pendaftaran perubahan hak atas tanah tersebut, kami bersedia memenuhi kewajiban yang ditetapkan oleh pemerintah.</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Hormat Kami</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;({{ $peningkatan->nama }})</p></div>

                </div>
                
            </div>

            <hr><hr>

            <div class="scroll row justify-content-center">
                <div class="col-12 col-md-8">

                    <div style="float: left;">
                        <center><p><strong><u>SURAT PERNYATAAN</u></strong></p></center>
                        <p>Yang bertanda tangan dibawah ini:</p>
                        <p>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peningkatan->nama }}</p>
                        <p>Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peningkatan->pekerjaan }}</p>
                        <p>Tempat Tinggal &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: {{ $peningkatan->alamat }}</p>
                        <p>&nbsp;</p>
                        <p>Dengan ini menyatakan:</p>
                        <ul>
                            <li>Dengan perolehan Hak Milik yang kami mohon ini, akan mempunyai Hak Milik atas tanah untuk Rumah Tinggall tidak lebih dari 5 (lima) bidang yang seharusnya meliputi luas tidak lebih dari 5.000 (lima ribu) M&sup2;.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <ul>
                            <li>Hak Milik atas tanah untuk Rumah Tinggal yang kami punya pada waktu ini adalah:</li>
                        </ul>
                        <p>&nbsp;</p>
                        <ol>
                            <li>HM No. :{{ $peningkatan->no_hak1 ? $peningkatan->no_hak1 : '.....' }} &ndash; {{ $peningkatan->tgl_hak1 ? date("d-m-Y", strtotime($peningkatan->tgl_hak1)) : '.....' }} / terletak di Jalan {{ $peningkatan->jalan_hak1 }}</li>
                            <li>HM No. :{{ $peningkatan->no_hak2 ? $peningkatan->no_hak2 : '.....' }} &ndash; {{ $peningkatan->tgl_hak2 ? date("d-m-Y", strtotime($peningkatan->tgl_hak2)) : '.....' }} / terletak di Jalan {{ $peningkatan->jalan_hak2 }}</li>
                            <li>HM No. :{{ $peningkatan->no_hak3 ? $peningkatan->no_hak3 : '.....' }} &ndash; {{ $peningkatan->tgl_hak3 ? date("d-m-Y", strtotime($peningkatan->tgl_hak3)) : '.....' }} / terletak di Jalan {{ $peningkatan->jalan_hak3 }}</li>
                            <li>HM No. :{{ $peningkatan->no_hak4 ? $peningkatan->no_hak4 : '.....' }} &ndash; {{ $peningkatan->tgl_hak4 ? date("d-m-Y", strtotime($peningkatan->tgl_hak4)) : '.....' }} / terletak di Jalan {{ $peningkatan->jalan_hak4 }}</li>
                        </ol>
                        <p>&nbsp;</p>
                        <p style="text-align: justify;">Demikian pernyataan ini dibuat dengan sebenarnya dan apabila ternyata tidak benar kami bersedia dituntut di Pengadilan sesuai ketentuan Perundang-undangan yang berlaku menyangkut penggunaan keterangan palsu untuk suatu permohonan resmi.</p>
                        <p>&nbsp;</p></div>

                    <div style="float: right;">
                        <p><center>Martapura, {{ $tgl }}</center></p>
                        <p><center>Yang Membuat Pernyataan,</center></p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        
                        <p><center>Materai</center></p>
                        <p>&nbsp;</p>
                        <p><center>{{ $peningkatan->nama }}</center></p>
                    </div>

                </div>
                
            </div>

            


        </div>

        
        
      </section><!-- End Features Section -->

    <!-- ======= Our Clients Section ======= -->
    

  </main><!-- End #main -->

<div class="modal" id="qrcode" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">QR Code</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="visible-print text-center">
                {!! QrCode::size(300)->generate(route('pdfPeningkatan',$id)); !!}
                <p><strong>No Tiket: {{ $peningkatan->permohonan->no_tiket }}</strong></p>
            </div>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-primary" id="btn_isi_data">Ya</button>
        </div> --}}
      </div>
    </div>
  </div>



  

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