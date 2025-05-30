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
            <h2>Blanko Peralihan Hak</h2>
            {{-- <p>Informasi persyaratan berkas Kantor Pertanhan Kabupaten Banjar</p> --}}
            <a href="{{ route('blanko') }}" class="btn btn-warning float-right"><i class="ri-arrow-go-back-fill"></i> Kembali</a>
            <a href="{{ route('pdfPeralihanHak',$id) }}" class="btn btn-success float-right"><i class="ri-file-download-line"></i> Download</a>
            {{-- <a href="#qrcode" data-toggle="modal" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</a> --}}
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
            <div class="scroll row justify-content-center">
                <div class="col-12 col-md-8">

                    <table style="width:487.0pt;border-collapse:collapse;border:none;">
                        <tbody>
                            <tr>
                                <td style="width: 353.8pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;">
                                    <table style="width:487.0pt;border-collapse:collapse;border:none;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 353.8pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;">
                                                    <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-family:"Times New Roman",serif;'>Perihal : Permohonan Peralihan Hak</span></p>
                                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:  38.5pt;'><span style='font-family:"Times New Roman",serif;'>Jual Beli/Hibah/Waris/</span></p>
                                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:  38.5pt;'><span style='font-family:"Times New Roman",serif;'>Lelang/Tukar Menukar/</span></p>
                                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:  38.5pt;'><span style='font-family:"Times New Roman",serif;'>Pembagian Hak Bersama/</span></p>
                                                    {{-- <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:  38.5pt;'><span style='font-family:"Times New Roman",serif;'>Balik Nama</span></p> --}}
                                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:33.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:5.5pt;'><span style='font-family:"Times New Roman",serif;'>{{ $peralihan_hak->hak->kd_hak }}. No {{ $peralihan_hak->no_hak }} /</span></p>
                                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:33.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:5.5pt;'><u><span style='font-family:"Times New Roman",serif;'>Kel. : {{ $peralihan_hak->kelurahan->nm_kelurahan }}</span></u></p>
                                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:33.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:5.5pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                                </td>
                                                <td style="width: 133.2pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;">
                                                    <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:left;'><span style='font-family:"Times New Roman",serif;'>Kepada Yth.<br>&nbsp;Kepala Kantor Pertanahan<br>&nbsp;Kabupaten Banjar<br>&nbsp;di-</span></p>
                                                    <p style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:11.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><u><span style='font-family:"Times New Roman",serif;'>MARTAPURA</span></u></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:44.0pt;'><span style='font-family:"Times New Roman",serif;'>Yang bertanda tangan dibawah ini :</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peralihan_hak->nama }}</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peralihan_hak->pekerjaan }}</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peralihan_hak->alamat }}</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Untuk dan atas nama&nbsp; &nbsp; &nbsp; &nbsp;: {{ $peralihan_hak->nm_kuasa }}</span></p>
                                    <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:8.0pt;margin-left:14.2pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-family:"Times New Roman",serif; text-align: justify;'>Dengan ini mengajukan permohonan untuk mendapatkan pelayanan dan penyelesaian sebagaimana perihal tersebut diatas, terhadap sebidang tanah yang terletak di Jalan {{ $peralihan_hak->jalan_tanah }} RT. {{ $peralihan_hak->rt }} RW. {{ $peralihan_hak->rw }} Kelurahan {{ $peralihan_hak->kelurahan->nm_kelurahan }} Kecamatan {{ $peralihan_hak->kecamatan->nm_kecamatan }} Kabupaten Banjar.</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:14.2pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Tanah tersebut dipergunakan Untuk : 
                                    @if ($peralihan_hak->jenis_tanah == 'Non Pertanian')
                                    Non pertanian/<s>Perumahan</s>
                                    @else
                                    <s>Non pertanian</s>/Perumahan
                                    @endif
                                        
                                    </span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:36.0pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;margin:0cm;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>Demikian untuk dapat dipertimbangkan dan dapat di proses sebagaimana mestinya.</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:324.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:297.7pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Martapura, {{ $tgl }}</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:297.7pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Pemohon / Kuasa Pemohon,</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><br></p>
                                    <table style="float: left">
                                        <tbody>
                                            <tr>
                                                <td><br></td>
                                            </tr>
                                            <tr>
                                                <td><br></td>
                                                <td><br></td>
                                            </tr>
                                        </tbody>
                                    </table><span style='font-family:"Times New Roman",serif;'>&nbsp;</span>
                                    <p><br></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
                                </td>
                                <td style="width: 133.2pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;"><br></td>
                            </tr>
                        </tbody>
                    </table>
                    <p><br></p>
                    <p><br></p>

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
                {!! QrCode::size(300)->generate(route('pdfPeralihanHak',$id)); !!}
                <p><strong>No Tiket: {{ $peralihan_hak->permohonan->no_tiket }}</strong></p>
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