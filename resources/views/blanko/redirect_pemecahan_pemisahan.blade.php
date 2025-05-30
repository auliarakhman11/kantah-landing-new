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
            <h4>Blanko Permohonan Pemisahan, Pemecahan dan Penggabungan Sertifikat</h4>
            <a href="{{ route('blanko') }}" class="btn btn-warning float-right"><i class="ri-arrow-go-back-fill"></i> Kembali</a>
            <a href="{{ route('pdfPemecahanPemisahan',$id) }}" class="btn btn-success float-right"><i class="ri-file-download-line"></i> Download</a>
            <button type="button" data-bs-toggle="modal" data-bs-target="#qrcode" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</button>
            
          </div>
  
        </div>


        <div class="container-fluid" data-aos="fade-up">

            {{-- <div class="row justify-content-center">
                <div class="col-10 col-md-8">
                    <div class="ratio ratio-16x9">
                        <iframe src="{{ route('viewPeralihanHak',$id) }}" width="100%"></iframe>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row">
                <div class="col-12">
                  <div class="container-responsive">
                    <iframe class="responsive-iframe" src="{{ route('viewPeralihanHak',$id) }}"></iframe>
                  </div>
                </div>
            </div> --}}

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">Halaman 1</button>
                  <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">Halama 2</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">

                    <div class="scroll row justify-content-center">
                        <div class="col-12 col-md-8">
        
                            <table style="width:487.0pt;border-collapse:collapse;border:none;">
                                <tbody>
                                    <tr>
                                        <td style="width: 353.8pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;">
                                            <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-family:"Times New Roman",serif;'>Perihal: Permohonan&nbsp;</span><span style='font-family:"Times New Roman",serif;'>Pemisahan</span><span style='font-family:"Times New Roman",serif;'>&nbsp;</span><span style='font-family:"Times New Roman",serif;'>/</span><span style='font-family:"Times New Roman",serif;'>&nbsp;</span><span style='font-family:"Times New Roman",serif;'>Pemecahan</span><span style='font-family:"Times New Roman",serif;'>&nbsp;/</span></p>
                                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:  38.5pt;'><span style='font-family:"Times New Roman",serif;'>Penggabungan Sertipikat</span></p>
                                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:33.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:5.5pt;'><span style='font-family:"Times New Roman",serif;'>{{ $pemecahan_pemisahan->hak->kd_hak }}. No {{ $pemecahan_pemisahan->no_hak }} /</span></p>
                                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:33.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:5.5pt;'><u><span style='font-family:"Times New Roman",serif;'>Kel.: {{ $pemecahan_pemisahan->kelurahan->nm_kelurahan }}</span></u></p>
                                        </td>
                                        <td style="width: 133.2pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;">
                                            <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-family:"Times New Roman",serif;'>Kepada Yth.<br>&nbsp;Kepala Kantor Pertanahan<br>&nbsp;Kabupaten Banjar<br>&nbsp;di-</span></p>
                                            <p style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:11.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><u><span style='font-family:"Times New Roman",serif;'>MARTAPURA</span></u></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:44.0pt;'><span style='font-family:"Times New Roman",serif;'>Yang bertanda tangan dibawah ini :</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $pemecahan_pemisahan->nama }}</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $pemecahan_pemisahan->pekerjaan }}</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $pemecahan_pemisahan->alamat }}</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Untuk dan atas nama&nbsp; &nbsp; &nbsp; &nbsp;: {{ $pemecahan_pemisahan->nm_kuasa }}</span></p>
                            <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:8.0pt;margin-left:14.2pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-family:"Times New Roman",serif;'>Dengan ini mengajukan permohonan untuk mendapatkan pelayanan dan penyelesaian sebagaimana perihal tersebut diatas, terhadap sebidang tanah yang terletak di jalan {{ $pemecahan_pemisahan->jalan_tanah }}. &nbsp;RT. {{ $pemecahan_pemisahan->rt }}. RW. {{ $pemecahan_pemisahan->rw }}. Kelurahan {{ $pemecahan_pemisahan->kelurahan->nm_kelurahan }} Kecamatan {{ $pemecahan_pemisahan->kecamatan->nm_kecamatan }}. Kabupaten Banjar.</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:14.2pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Tanah tersebut dipergunakan untuk: 
                                @if ($pemecahan_pemisahan->jenis_tanah == 'Non pertanian')
                                Non pertanian/<s>Perumahan</s>
                                @else
                                <s>Non pertanian</s>/Perumahan
                                @endif
                            </span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:14.2pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Sebagai kelengkapan bahan-bahan permohonan, Bersama ini dilampirkan:</span></p>
                            <ol style="list-style-type: decimal;margin-left:20.5px;">
                                <li><span style='font-family:"Times New Roman",serif;'>Permohonan;</span></li>
                                <li><span style='font-family:"Times New Roman",serif;'>Potokopi KTP dan KK Pemilik</span><span style='font-family:"Times New Roman",serif;'>;</span></li>
                                <li><span style='font-family:"Times New Roman",serif;'>Potokopi akta pendirian dan pengesahan badan hukum (Jika pemilik sertipikat badan hukum)</span></li>
                                <li><span style='font-family:"Times New Roman",serif;'>Sertipikat asli</span></li>
                                <li><span style='font-family:"Times New Roman",serif;'>Gambar rencana pemecahan/pemisahan/penggabungan</span></li>
                                <li><span style='font-family:"Times New Roman",serif;'>Potokopi pengesahan siteplan dari BP2T (Badan Pelayanan perizinan terpadu) Kab. Banjar</span></li>
                                <li><span style='font-family:"Times New Roman",serif;'>Potokopi izin lokasi IPPT, bila diperlukan</span></li>
                                <li><span style='font-family:"Times New Roman",serif;'>Surat kuasa. Potokopi KTP dan KK (Penerima kuasa apabila dilakukan);</span></li>
                            </ol>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:36.0pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;margin:0cm;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>Demikian untuk dapat dipertimbangkan dan dapat di proses sebagaimana mestinya.</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:324.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Martapura, {{ $tgl }}<br>&nbsp;Pemohon / Kuasa Pemohon,</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><br></p>
                            <table style="float: left;">
                                <tbody>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                        <td><br></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p><br></p>
        
                        </div>
                        
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">

                    <div class="scroll row justify-content-center">
                        <div class="col-12 col-md-8">

                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;text-align:center;'><strong><u><span style='font-size:19px;font-family:"Times New Roman",serif;'>SURAT PERNYATAAN PEMOHON</span></u></strong></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;text-align:center;'><br></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Yang bertanda tangan di bawah ini</span></p>
                            <ol style="list-style-type: decimal;margin-left:11.3px;">
                                <li style="font-size:12.0pt;"><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Nama</span><span style='margin-left: 250px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->nama }}</span></li>
                                <li style="font-size:12.0pt;"><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Alamat</span><span style='margin-left: 241px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->alamat }}</span></li>
                                <li style="font-size:12.0pt;"><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Bertindak untuk atas nama</span><span style='margin-left: 117px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->nm_kuasa }}</span> <br> <span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>(bila ada surat kuasa)</span></li>
                            </ol>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:21.3pt;font-size:15px;font-family:"Cambria",serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Menerangkan tentang tanah</span><span style="margin-left: 124px;">:</span></p>
                            <ol style="list-style-type: decimal;margin-left:11.3px;">
                                <li><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Luas</span><span style='margin-left: 255px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->luas }}</span></li>
                                <li><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Letak</span><span style='margin-left: 250px; font-family:"Times New Roman",serif;font-size:12.0pt;'>:</span></li>
                            </ol>
                            <ol start="1" style="list-style-type: lower-alpha;margin-left:29.299999999999997px; margin-top: -10px;">
                                <li><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Jalan</span><span style='margin-left: 235px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->jalan_tanah }}</span></li>
                                <li><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Desa/Kelurahan</span><span style='margin-left: 166px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->kelurahan->nm_kelurahan }}</span></li>
                                <li><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Kecamatan</span><span style='margin-left: 197px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->kecamatan->nm_kecamatan }}</span></li>
                                <li><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Kabupaten</span><span style='margin-left: 200px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: Banjar</span></li>
                            </ol>
                            <ol style="list-style-type: undefined;margin-left:11.3px;">
                                <li><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Status/Penguasaan Tanah</span><span style='margin-left: 125px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->hak->nm_hak }}</span></li>
                                <li><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Penggunaan Tanah saat ini</span><span style='margin-left: 117px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->penggunaan_tanah }}</span></li>
                                <li><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Rencana Penggunaan tanah dan</span><span style='margin-left: 85px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->rencana_tanah }}</span><br>
                                    <span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Pemanfaatan Tanah</span>
                                </li>
                            </ol>
                            
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:21.3pt;font-size:15px;font-family:"Cambria",serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;text-align:justify;text-indent:21.3pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Apabila permohonan tersebut dikabulkan saya bersedia memenuhi semua ketentuan dan atau persyaratan dari Pemerintah.</span></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;text-align:justify;text-indent:21.3pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>

                            <div class="square" style="height: 400px; width: 400px; border: solid 1px; border-color: black; float: left;">Sket Lokasi:</div>

                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:100.45pt;font-size:15px;font-family:"Cambria",serif;text-align:center;text-indent:21.3pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Martapura, {{ $tgl }}</span></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:100.45pt;font-size:15px;font-family:"Cambria",serif;text-align:center;text-indent:21.3pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Pemohon</span></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:100.45pt;font-size:15px;font-family:"Cambria",serif;text-align:center;text-indent:21.3pt;'><br></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:100.45pt;font-size:15px;font-family:"Cambria",serif;text-align:center;text-indent:21.3pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:100.45pt;font-size:15px;font-family:"Cambria",serif;text-align:center;text-indent:21.3pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:100.45pt;font-size:15px;font-family:"Cambria",serif;text-align:center;text-indent:21.3pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:100.45pt;font-size:15px;font-family:"Cambria",serif;text-align:center;text-indent:21.3pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:100.45pt;font-size:15px;font-family:"Cambria",serif;text-align:center;text-indent:21.3pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>{{ $pemecahan_pemisahan->nama }}</span></p>
                            <p style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'>&nbsp;</p>

                        </div>
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
                {!! QrCode::size(300)->generate(route('pdfPemecahanPemisahan',$id)); !!}
                <p><strong>No Tiket: {{ $pemecahan_pemisahan->permohonan->no_tiket }}</strong></p>
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