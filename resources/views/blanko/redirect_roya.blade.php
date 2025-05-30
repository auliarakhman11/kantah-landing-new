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
            <h2>Blanko Roya, SKPT, Pencatatan, Pengecekan, IPPT</h2>
            {{-- <p>Informasi persyaratan berkas Kantor Pertanhan Kabupaten Banjar</p> --}}
            <a href="{{ route('blanko') }}" class="btn btn-warning float-right"><i class="ri-arrow-go-back-fill"></i> Kembali</a>
            <a href="{{ route('pdfRoya',$id) }}" class="btn btn-success float-right"><i class="ri-file-download-line"></i> Download</a>
            {{-- <a href="#qrcode" data-toggle="modal" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</a> --}}
            <button type="button" data-bs-toggle="modal" data-bs-target="#qrcode" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</button>
            
        </div>
  
        </div>

        <div class="container-fluid" data-aos="fade-up">
            

            <div class="scroll row justify-content-center">
                <div class="col-12 col-md-8">

                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:382.75pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:107%;font-family:"Times New Roman",serif;'>Martapura, {{ $tgl }}<br>Kepada Yth.<br>Kepala Kantor Pertanahan<br>Kabupaten Banjar<br>Di Martapura<br>&nbsp; &nbsp; &nbsp;&nbsp;</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:107%;font-family:"Times New Roman",serif;'>Dengan Hormat,<br>&nbsp;Yang bertanda tangan dibawah ini :</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->nama }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Umur  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $roya->umur }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->pekerjaan }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; No KTP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->nik }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->alamat }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:107%;font-family:"Times New Roman",serif;'>Dalam hal ini bertindak untuk dan atas nama diri sendiri / selaku kuasa dari :</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->nama_kuasa }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Umur &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $roya->umur_kuasa }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->pekerjaan_kuasa }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; No KTP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->nik_kuasa }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->alamat_kuasa }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Berdasarkan surat kuasa nomor {{ $roya->no_surat_kuasa ? $roya->no_surat_kuasa : '......................' }} tanggal {{ $roya->tgl_surat_kuasa ? $roya->tgl_surat_kuasa : '..........................' }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Dengan ini mengajukan permohonan:</span></p>
                  <ol style="list-style-type: decimal;">
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>Pengukuran &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 8. &nbsp; Pemecahan / Penggabungan Hak</span></li>
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>Konversi / Pendaftaran Hak &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9. &nbsp; Pendaftaran Hak Tanggungan</span></li>
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>Pendaftaran Hak Milik Sarusun &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10. Roya atas Hak Tanggungan</span></li>
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>Pendaftaran Tanah Wakaf &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 11. Penerbitan Sertifikat Pengganti</span></li>
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>Pendaftaran Peralihan Hak &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 12. Surat Keterangan Pendaftaran Tanah</span></li>
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>Pendaftaran Pemindahan Hak &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;13. Pengecekan Sertifikat</span></li>
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>Pendaftaran Perubahan Hak &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 14. Pencatatan</span></li>
                  </ol>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Atas bidang tanah hak / tanah Negara:</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Terletak di &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->jalan_tanah }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kecamatan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $roya->kecamatan->nm_kecamatan }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kabupaten &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Banjar</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nomor Hak &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $roya->no_hak }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Untuk melengkapi permohonan dimaksud, bersama ini kami lampirkan</span></p>
                  <ol style="list-style-type: decimal;">
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>.......................................................................................................................................</span></li>
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>.......................................................................................................................................</span></li>
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>.......................................................................................................................................</span></li>
                      <li><span style='font-family:"Times New Roman",serif;font-size:16px;'>.......................................................................................................................................</span></li>
                  </ol>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:18.0pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:18.0pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:18.0pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Martapura, {{ $tgl }}</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:18.0pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hormat Kami</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                  <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>

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
                {!! QrCode::size(300)->generate(route('pdfRoya',$id)); !!}
                <p><strong>No Tiket: {{ $roya->permohonan->no_tiket }}</strong></p>
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