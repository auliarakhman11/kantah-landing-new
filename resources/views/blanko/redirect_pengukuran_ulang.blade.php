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
            <h2>Blanko Pengkuran Ulang</h2>
            {{-- <p>Informasi persyaratan berkas Kantor Pertanhan Kabupaten Banjar</p> --}}
            <a href="{{ route('blanko') }}" class="btn btn-warning float-right"><i class="ri-arrow-go-back-fill"></i> Kembali</a>
            <a href="{{ route('pdfPengukuranUlang',$id) }}" class="btn btn-success float-right"><i class="ri-file-download-line"></i> Download</a>
            {{-- <a href="#qrcode" data-toggle="modal" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</a> --}}
            <button type="button" data-bs-toggle="modal" data-bs-target="#qrcode" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</button>
            
        </div>
  
        </div>

        <div class="container-fluid" data-aos="fade-up">
            

            <div class="scroll row justify-content-center">
                <div class="col-12 col-md-8">

                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:347.3pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-347.3pt;'><span style='font-family:"Times New Roman",serif;'>Perihal : Permohonan Pengukuran Ulang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kepada Yth.Kepala Kantor Pertanahan<br>&nbsp;Kabupaten Banjar<br>&nbsp;di-</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:347.3pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-347.3pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<u>MARTAPURA</u></span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Yang bertanda tangan dibawah ini :</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $pengukuran_ulang->nama }}</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $pengukuran_ulang->pekerjaan }}</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $pengukuran_ulang->alamat }}</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Untuk dan atas nama&nbsp; &nbsp; &nbsp; &nbsp;: {{ $pengukuran_ulang->nama_kuasa }}</span></p>
                    <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:8.0pt;margin-left:14.2pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-family:"Times New Roman",serif;'>Dengan ini mengajukan permohonan untuk mendapatkan pelayanan dan penyelesaian sebagaimana perihal tersebut diatas, terhadap sebidang tanah yang terletak di {{ $pengukuran_ulang->jalan_tanah }}. RT. {{ $pengukuran_ulang->rt }}. RW. {{ $pengukuran_ulang->rw }}. Kelurahan {{ $pengukuran_ulang->kelurahan->nm_kelurahan }} Kecamatan {{ $pengukuran_ulang->kecamatan->nm_kecamatan }}. Kabupaten Banjar.</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:14.2pt;line-height:200%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;Tanah tersebut dipergunakan untuk : 
                        @if ($pengukuran_ulang->jenis_tanah == 'Non Pertanian')
                        Non pertanian/<s>Perumahan</s>
                        @else
                        <s>Non pertanian</s>/Perumahan
                        @endif
                    </span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:14.2pt;line-height:200%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Sebagai kelengkapan bahan-bahan permohonan, Bersama ini dilampirkan:</span></p>
                    <ol style="list-style-type: decimal;margin-left:20.5px;">
                        <li><span style='font-family:"Times New Roman",serif;'>Permohonan;</span></li>
                        <li><span style='font-family:"Times New Roman",serif;'>Asli Sertipikat;</span></li>
                        <li><span style='font-family:"Times New Roman",serif;'>Fotocopy KTP &amp; KK (memperlihatkan yang asli);</span></li>
                        <li><span style='font-family:"Times New Roman",serif;'>Surat Kuasa dan Fotocopy KTP Penerima Kuasa;</span></li>
                        <li><span style='font-family:"Times New Roman",serif;'>Foto lokasi tanah menggunakan aplikasi <strong>Foto Geotag.<br> (Dibagikan melalui email : <u>pendaftaran.kantahkab.banjar@gmail.com</u>)</strong></span></li>
                    </ol>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>Demikian untuk dapat dipertimbangkan dan dapat di proses sebagaimana mestinya.</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Martapura, {{ $tgl }}<br>Pemohon / Kuasa Pemohon,</span></p>
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
                    </table>
                    <p><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<u>{{ $pengukuran_ulang->nama_kuasa ?  $pengukuran_ulang->nama_kuasa : $pengukuran_ulang->nama}}</u></span></p>

                </div>
                
            </div>

            <hr><hr>

            <div class="scroll row justify-content-center">
                <div class="col-12 col-md-8">

                    <p style='margin-top:0cm;margin-right:16.55pt;margin-bottom:.0001pt;margin-left:5.3pt;font-size:15px;font-family:"Cambria",serif;text-align:center;'>SURAT&nbsp;PERNYATAAN</p>
                    <p style='margin-top:2.0pt;margin-right:16.55pt;margin-bottom:.0001pt;margin-left:5.45pt;font-size:15px;font-family:"Cambria",serif;text-align:center;'>PEMASANGAN&nbsp;TANDA&nbsp;BATAS&nbsp;DAN&nbsp;PERSETUJUAN&nbsp;PEMILIK&nbsp;YANG&nbsp;BERBATASAN</p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:17px;">&nbsp;</span></p>
                    <p style='margin-top:.55pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:18px;">&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:11.3pt;font-size:15px;font-family:"Cambria",serif;'>Yang&nbsp;bertanda&nbsp;tangan&nbsp;di&nbsp;bawah&nbsp;ini:</p>
                    <p style='margin-top:.3pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:19px;">&nbsp;</span></p>
                    <p style='margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:11.3pt;font-size:15px;font-family:"Cambria",serif;'>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $pengukuran_ulang->nama }}</p>
                    <p style='margin-top:1.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:11.3pt;font-size:15px;font-family:"Cambria",serif;'>Umur&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $pengukuran_ulang->umur }}</p>
                    <p style='margin-top:2.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:11.3pt;font-size:15px;font-family:"Cambria",serif;'>NIK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $pengukuran_ulang->nik }}</p>
                    <p style='margin-top:2.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:11.3pt;font-size:15px;font-family:"Cambria",serif;'>Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{ $pengukuran_ulang->pekerjaan }}</p>
                    <p style='margin-top:1.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:11.3pt;font-size:15px;font-family:"Cambria",serif;'>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : {{ $pengukuran_ulang->alamat }}</p>

                    <p style='margin-top:.3pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:19px;">&nbsp;</span></p>
                    <p style='margin-top:2.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:11.3pt;font-size:15px;font-family:"Cambria",serif;'>Adalah&nbsp;pemilik&nbsp;tanah&nbsp;Kohir&nbsp;No. {{ $pengukuran_ulang->no_hak }} Persil {{ $pengukuran_ulang->no_persil ? $pengukuran_ulang->no_persil : '..............................' }} Kelas {{ $pengukuran_ulang->kelas ? $pengukuran_ulang->kelas : '..............................' }} seluas&plusmn; {{ $pengukuran_ulang->luas }} m<sup style="font-size: 9px;">2</sup> yang&nbsp;terletak&nbsp;di {{ $pengukuran_ulang->jalan_tanah }} Desa/Kelurahan {{ $pengukuran_ulang->kelurahan->nm_kelurahan }} Kecamatan {{ $pengukuran_ulang->kecamatan->nm_kecamatan }} Kabupaten Banjar berdasarkan&nbsp;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;......................................</p>

                    
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:11.3pt;font-size:15px;font-family:"Cambria",serif;'>&nbsp;</p>
                    <p style='margin-top:.3pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:19px;">&nbsp;</span></p>
                    <p style='margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:11.3pt;font-size:15px;font-family:"Cambria",serif;text-align:justify;'>Dengan&nbsp;ini&nbsp;menyatakan&nbsp;bahwa&nbsp;tanah&nbsp;tersebut:</p>
                    <ol style="list-style-type: decimal; font-size:15px;">
                        <li style="font-size:15px;">Telah dipasang patok/tanda batas;</li>
                        <li style="font-size:15px;">Terhadap patok yang yang dipasang tersebut tidak ada pihak yang berkeberatan;</li>
                        <li style="font-size:15px;">Apabila ternyata luas hasil ukur lebih kecil dari luas yang tertulis pada alas hak/akta peralihan hak/surat-surat lain dalam berkas permohonan sertipikat, kami menerima luas hasil ukuran petugas Kantor Pertanahan;&nbsp;</li>
                    </ol>
                    <p style='margin-top:4.95pt;margin-right:29.4pt;margin-bottom:.0001pt;margin-left:11.15pt;font-size:15px;font-family:"Cambria",serif;text-align:justify;line-height:115%;'>Demikian Surat Pernyataan ini saya buat dengan sebenarnya dengan penuh&nbsp;tanggung&nbsp;jawab&nbsp;dan&nbsp;saya&nbsp;bersedia&nbsp;mengangkat&nbsp;sumpah&nbsp;bila&nbsp;diperlukan,&nbsp;apabila pernyataan ini tidak benar saya bersedia dituntut di hadapan pihak&nbsp;yang&nbsp;berwenang.</p>
                    <p style='margin-top:.5pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:11.15pt;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:18px;">&nbsp;</span></p>
                    <table style="border: none;margin-left:12.15pt;border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td style="width: 221.65pt;padding: 0cm;height: 28.75pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;line-height:12.85pt;'>Menyetujui&nbsp;pemilik&nbsp;yang&nbsp;berbatasan:<br>&nbsp;</p>
                                    <p style='margin-top:1.95pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>Sebelah&nbsp;Utara:</p>
                                </td>
                                <td style="width: 204.7pt;padding: 0cm;height: 28.75pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:16.55pt;font-size:15px;font-family:"Cambria",serif;line-height:12.85pt;'>Martapura , {{ $tgl }}</p>
                                    <p style='margin-top:1.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:37.55pt;font-size:15px;font-family:"Cambria",serif;'>Yang membuat pernyataan</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 221.65pt;padding: 0cm;height: 29.65pt;vertical-align: top;">
                                    <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</p>
                                    <p style='margin-top:1.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>({{ $pengukuran_ulang->utara }})</p>
                                </td>
                                <td rowspan="5" style="width: 204.7pt;padding: 0cm;height: 29.65pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'>&nbsp;</p>
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
                                    </table>&nbsp;<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size: 13px;">Materai 10.000</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:17px;">&nbsp;</span></p>
                                    <p style='margin-top:.3pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:17px;">&nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:18.95pt;margin-bottom:.0001pt;margin-left:20pt;font-size:15px;font-family:"Cambria",serif;text-align:center;'>{{ $pengukuran_ulang->nama_kuasa ?  $pengukuran_ulang->nama_kuasa : $pengukuran_ulang->nama}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 221.65pt;padding: 0cm;height: 14.85pt;vertical-align: top;">
                                    <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>Sebelah&nbsp;Timur:</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 221.65pt;padding: 0cm;height: 29.65pt;vertical-align: top;">
                                    <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</p>
                                    <p style='margin-top:2.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>({{ $pengukuran_ulang->timur }})</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 221.65pt;padding: 0cm;height: 14.8pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>Sebelah&nbsp;Selatan:</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 221.65pt;padding: 0cm;height: 29.75pt;vertical-align: top;">
                                    <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</p>
                                    <p style='margin-top:2.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>({{ $pengukuran_ulang->selatan }})</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 221.65pt;padding: 0cm;height: 14.8pt;vertical-align: top;">
                                    <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>Sebelah&nbsp;Barat:</p>
                                </td>
                                <td style="width: 204.7pt;padding: 0cm;height: 14.8pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 221.65pt;padding: 0cm;height: 37.1pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</p>
                                    <p style='margin-top:1.95pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>({{ $pengukuran_ulang->barat }})</p>
                                </td>
                                <td style="width: 204.7pt;padding: 0cm;height: 37.1pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p><br></p>

                </div>
                
            </div>

            <div class="scroll row justify-content-center">
                <div class="col-12 col-md-8">

                    <table style="border: none;margin-left:12.15pt;border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td style="width: 426.35pt;padding: 0cm;height: 66.85pt;vertical-align: top;">
                                    <p style='margin-top:8.35pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;line-height:113%;'><strong><em>*melampirkan fotokopi&nbsp;KTP&nbsp;para&nbsp;pihak yang bersebelahan/ berbatasan&nbsp;atau&nbsp;diketahui&nbsp;oleh&nbsp;Kepala&nbsp;Desa/Lurah</em></strong></p>
                                    <p style='margin-top:.45pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:17px;">&nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'><strong>SKETSA&nbsp;BIDANG&nbsp;TANAH</strong></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="border: none;margin-left:12.15pt;border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td style="padding: 0cm;height: 99.1pt;vertical-align: top;">
                                    <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;'>Informasi&nbsp;Sketsa:</p>
                                    <div style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'>
                                        <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left:23.1px;">
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'>Harus&nbsp;ada&nbsp;alamat&nbsp;jelas;</li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'>Gambaran&nbsp;lokasi&nbsp;tetangga&nbsp;batas;</li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'>Lokasi&nbsp;relatif&nbsp;dari&nbsp;tempat&nbsp;umum&nbsp;(contoh:&nbsp;Masjid,&nbsp;SPBU,&nbsp;dan&nbsp;lain-lain)&nbsp;atau&nbsp;unsur&nbsp;geografis&nbsp;(jalan,&nbsp;sungai,&nbsp;jembatan).</li>
                                        </ol>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    

                    <div class="square" style="height: 400px; width: 800px; border: solid 1px; border-color: black; float: left;">Kolom Gambar Sketsa Bidang:</div>
                    <p style='margin-top:5cm;margin-right:17.8pt;margin-bottom:.0001pt;margin-left:350pt;font-size:15px;font-family:"Cambria",serif;text-indent:22.9pt;line-height:  107%;'>Mengetahui <br> Kepala&nbsp;Desa/Lurah,</p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:17px;">&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:17px;">&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:17px;">&nbsp;</span></p>
                    <p style='margin-top:11.4pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:345pt;font-size:15px;font-family:"Cambria",serif;line-height:12.0pt;'>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</p>

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
                {!! QrCode::size(300)->generate(route('pdfPengukuranUlang',$id)); !!}
                <p><strong>No Tiket: {{ $pengukuran_ulang->permohonan->no_tiket }}</strong></p>
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