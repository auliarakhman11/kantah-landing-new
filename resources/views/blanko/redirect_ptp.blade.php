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
            <h2>Blanko Permohonan Pertimbangan Teknis Pertanahan (PTP)</h2>
            {{-- <p>Informasi persyaratan berkas Kantor Pertanhan Kabupaten Banjar</p> --}}
            <a href="{{ route('blanko') }}" class="btn btn-warning float-right"><i class="ri-arrow-go-back-fill"></i> Kembali</a>
            <a href="{{ route('pdfPtp',$id) }}" class="btn btn-success float-right"><i class="ri-file-download-line"></i> Download</a>
            {{-- <a href="#qrcode" data-toggle="modal" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</a> --}}
            <button type="button" data-bs-toggle="modal" data-bs-target="#qrcode" class="btn btn-info float-right"><i class="ri-qr-code-fill"></i> QR Code</button>
            
        </div>
  
        </div>

        <div class="container-fluid mt-5" data-aos="fade-up">
            

            <div class="scroll row justify-content-center">
                <div class="col-8"><p><u><i>Halaman 1</i></u></p></div>
                <div class="col-12 col-md-8">

                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:5.0pt;margin-right:39.15pt;margin-bottom:.0001pt;margin-left:43.4pt;text-align:center;'>PERMOHONAN&nbsp;PERTIMBANGAN&nbsp;TEKNIS&nbsp;PERTANAHAN</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;'><span style="font-size:16px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.4pt;'><span style="font-size:18px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;'>Kepada&nbsp;Yth.</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:1.65pt;margin-right:215.85pt;margin-bottom:.0001pt;margin-left:15.0pt;line-height:115%;'>Kepala&nbsp;Kantor&nbsp;Pertanahan&nbsp;Kabupaten&nbsp;Banjar</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:1.65pt;margin-right:215.85pt;margin-bottom:.0001pt;margin-left:15.0pt;line-height:115%;'>&nbsp;di-</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.3pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:36.0pt;'>tempat</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.05pt;'><span style="font-size:18px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-left:43.0pt;'>Yang&nbsp;bertandatangan&nbsp;di&nbsp;bawah&nbsp;ini:</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:1.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{ $ptp->nama }}</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:1.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'>Nomor Induk Kependududkan (NIK)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $ptp->nik }}</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:1.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'>Nomor Induk Berusaha (NIB)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $ptp->no_nib }}</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:1.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{ $ptp->alamat }}</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:1.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'>Bertindak untuk dan atas nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $ptp->nama_kuasa }}</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.25pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:14.2pt;line-height:150%;'><em><span style="font-size:13px;line-height:150%;">*)&nbsp;</span></em><em><span style="font-size:13px;line-height:150%;">untuk pemohon pelaku usaha</span></em></p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.25pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:14.2pt;'><em><span style="font-size:13px;">&nbsp;</span></em></p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'>dengan&nbsp;ini mengajukan permohonan&nbsp;Pertimbangan Teknis&nbsp;Pertanahan&nbsp;dalam&nbsp;rangka:&nbsp;<span style="font-size:9px;line-height:150%;">*)</span></p>
                    <ol style="list-style-type: decimal;">
                        <li><span style="line-height:150%;font-size:14px;">Persetujuan&nbsp;atau&nbsp;Penolakan&nbsp;Izin&nbsp;Lokasi,</span></li>
                        <li><span style="line-height:150%;font-size:14px;">Pemberian/Perpanjangan&nbsp;atau&nbsp;Pembaharuan&nbsp;Hak&nbsp;Atas&nbsp;Tanah,</span></li>
                        <li><span style="line-height:150%;font-size:14px;">Penegasan&nbsp;Status&nbsp;dan&nbsp;Rekomendasi&nbsp;Penguasaan&nbsp;Tanah&nbsp;Timbul,</span></li>
                        <li><span style="line-height:150%;font-size:14px;">Perubahan,&nbsp;Penggunaan&nbsp;dan&nbsp;Pemanfaatan&nbsp;Tanah.</span></li>
                    </ol>
                    <p style='margin:0cm;font-size:15px;font-family:"Cambria",serif;margin-top:1.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'><span style="font-size:9px;line-height:150%;">*)&nbsp;</span><em><span style="font-size:13px;line-height:150%;">pilih&nbsp;salah&nbsp;satu</span></em></p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:2.5pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'>untuk keperluan {{ $ptp->keperluan }}</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.05pt;'><span style="font-size:18px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.05pt;margin-right:0cm;margin-bottom:1.9pt;margin-left:15.0pt;'>dengan keterangan sebagai berikut:</p>
                    <table style="border: none;margin-left:5.4pt;border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td colspan="2" style="width: 173.15pt;padding: 0cm;height: 13.3pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:10.0pt;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:14px;">1.&nbsp;Letak&nbsp;tanah&nbsp;yang&nbsp;dimohon</span></p>
                                </td>
                                <td style="width: 275.9pt;padding: 0cm;height: 13.3pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:19.95pt;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:14px;">:</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 47pt;padding: 0cm;height: 14.15pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:  6.25pt;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;text-align:  right;'><span style="font-size:14px;">a.</span></p>
                                </td>
                                <td style="width: 126.15pt;padding: 0cm;height: 14.15pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.0pt;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:14px;">Jalan, nomor, RT/RW </span></p>
                                </td>
                                <td style="width: 275.9pt;padding: 0cm;height: 14.15pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:19.95pt;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:14px;">: {{ $ptp->jalan_tanah }}, RT {{ $ptp->rt }} RW {{ $ptp->rw }}</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 47pt;padding: 0cm;height: 14.2pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:  5.85pt;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;text-align:  right;'><span style="font-size:14px;">b.</span></p>
                                </td>
                                <td style="width: 126.15pt;padding: 0cm;height: 14.2pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.0pt;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:14px;">Desa/Kelurahan</span></p>
                                </td>
                                <td style="width: 275.9pt;padding: 0cm;height: 14.2pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:19.95pt;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:14px;">: {{ $ptp->kelurahan->nm_kelurahan }}</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 47pt;padding: 0cm;height: 21.9pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:  6.8pt;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;text-align:  right;line-height:11.45pt;'><span style="font-size:14px;">c.</span></p>
                                </td>
                                <td style="width: 126.15pt;padding: 0cm;height: 21.9pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.0pt;font-size:15px;font-family:"Cambria",serif;line-height:11.45pt;'><span style="font-size:14px;">Kecamatan</span></p>
                                </td>
                                <td style="width: 275.9pt;padding: 0cm;height: 21.9pt;vertical-align: top;">
                                    <p style='margin-top:.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:19.95pt;font-size:15px;font-family:"Cambria",serif;line-height:11.45pt;'><span style="font-size:14px;">: {{ $ptp->kecamatan->nm_kecamatan }}</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-left:15.0pt;line-height:150%;'>2.&nbsp; &nbsp; &nbsp;Luas tanah yang dimohon&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $ptp->luas }}</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:2.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'>3.&nbsp; &nbsp; &nbsp;Status/penguasaan tanah&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $ptp->hak->nm_hak }}</p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:1.7pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:15.0pt;line-height:150%;'>4. &nbsp; &nbsp; Penggunaan tanah saat ini&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $ptp->penggunaan_tanah }}</p>

                </div>
                
            </div>


            <div class="scroll row justify-content-center">
                <div class="col-8"><p><u><i>Halaman 2</i></u></p></div>
                <div class="col-12 col-md-8">

                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.2pt;'><span style="font-size:11px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Cambria",serif;margin-top:4.95pt;margin-right:0cm;margin-bottom:1.2pt;margin-left:15.0pt;'><span style="font-size:13px;">Sebagai kelengkapan permohonan, bersama ini kami lampirkan:</span></p>
                    <table style="margin-left:14.4pt;border-collapse:collapse;border:none;">
                        <tbody>
                            <tr>
                                <td style="width: 28pt;border: 1pt solid black;background: rgb(241, 241, 241);padding: 0cm;height: 12.2pt;vertical-align: top;">
                                    <p style='margin-top:.1pt;margin-right:  4.1pt;margin-bottom:.0001pt;margin-left:5.3pt;font-size:15px;font-family:"Cambria",serif;text-align:  center;line-height:11.1pt;'><span style="font-size:13px;color:black;">No.</span></p>
                                </td>
                                <td style="width: 180.05pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;background: rgb(241, 241, 241);padding: 0cm;height: 12.2pt;vertical-align: top;">
                                    <p style='margin-top:.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:44.1pt;font-size:15px;font-family:"Cambria",serif;line-height:11.1pt;'><span style="font-size:13px;color:black;">Jenis&nbsp;Permohonan</span></p>
                                </td>
                                <td style="width: 253.05pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;background: rgb(241, 241, 241);padding: 0cm;height: 12.2pt;vertical-align: top;">
                                    <p style='margin-top:.1pt;margin-right:  109.3pt;margin-bottom:.0001pt;margin-left:109.35pt;font-size:15px;font-family:"Cambria",serif;text-align:center;line-height:11.1pt;'><span style="font-size:13px;color:black;">Syarat</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 28pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 140.4pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:3.95pt;margin-bottom:.0001pt;margin-left:5.3pt;font-size:15px;font-family:"Cambria",serif;text-align:center;line-height:11.0pt;'><span style="font-size:13px;">1.</span></p>
                                </td>
                                <td style="width: 180.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 140.4pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.05pt;font-size:15px;font-family:"Cambria",serif;line-height:98%;'><span style="font-size:13px;line-height:98%;">Persetujuan atau Penolakan Izin Lokasi</span></p>
                                </td>
                                <td style="width: 253.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 140.4pt;vertical-align: top;">
                                    <div style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'>
                                        <ol style="margin-bottom:0cm;list-style-type: decimal;">
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Nomor Induk Berusaha</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Keputusan Pemberian Izin Lokasi dan Lampirannya</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Surat  Pernyataan Pemenuhan Komitmen atau Tanpa Komitmen</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="line-height:101%;font-size:13px;">Peta yang memuat koordinat polygon batas lokasi yang dimohon</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="line-height:100%;font-size:13px;">Rencana kegiatan usaha atau rencana penggunaan dan pemanfaatan tanah</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="line-height:100%;font-size:13px;">Pernyataan mengenai letak dan luas tanah yang sudah dikuasai oleh pelaku usaha dan pelaku usaha lain yang merupakan satu grup</span></li>
                                        </ol>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td style="width: 28pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 187.25pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:3.95pt;margin-bottom:.0001pt;margin-left:5.3pt;font-size:15px;font-family:"Cambria",serif;text-align:center;line-height:11.0pt;'><span style="font-size:13px;">2.</span></p>
                                </td>
                                <td style="width: 180.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 187.25pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:4.75pt;margin-bottom:.0001pt;margin-left:5.05pt;font-size:15px;font-family:"Cambria",serif;line-height:96%;'><span style="font-size:13px;line-height:96%;">Pemberian/Perpanjangan atau Pembaharuan Hak Atas Tanah</span></p>
                                </td>
                                <td style="width: 253.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 187.25pt;vertical-align: top;">
                                    <div style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'>
                                        <ol style="margin-bottom:0cm;list-style-type: decimal;">
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Surat Kuasa, apabila dikuasakan</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Fotokopi Kartu Tanda Penduduk</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Fotokopi Nomor Pokok Wajib Pajak</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Fotokopi Akta Pendirian dan Pengesahan Badan Hukum, untuk pemohon badan hukum</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="line-height:96%;font-size:13px;">Fotokopi Izin Usaha, untuk pemohon badan hukum</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Peta yang memuat koordinat polygon batas letak lokasi</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="line-height:101%;font-size:13px;">Rencana kegiatan usaha atau rencana penggunaan dan pemanfaatan tanah</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Pernyataan mengenai letak dan luas tanah yang sudah dikuasai oleh pelaku usaha dan pelaku usaha lain yang merupakan satu</span></li>
                                        </ol>
                                        
                                    </div>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:21.1pt;font-size:15px;font-family:"Cambria",serif;line-height:10.9pt;'><span style="font-size:13px;">grup,&nbsp;untuk&nbsp;pemohon&nbsp;badan&nbsp;hukum</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 28pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 187.45pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:3.95pt;margin-bottom:.0001pt;margin-left:5.3pt;font-size:15px;font-family:"Cambria",serif;text-align:center;line-height:11.0pt;'><span style="font-size:13px;">3.</span></p>
                                </td>
                                <td style="width: 180.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 187.45pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:4.75pt;margin-bottom:.0001pt;margin-left:5.05pt;font-size:15px;font-family:"Cambria",serif;line-height:98%;'><span style="font-size:13px;line-height:98%;">Penegasan Status dan Rekomendasi Penguasaan Tanah</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:5.05pt;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Timbul</span></p>
                                </td>
                                <td style="width: 253.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 187.45pt;vertical-align: top;">
                                    <div style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'>
                                        <ol style="margin-bottom:0cm;list-style-type: decimal;">
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Surat&nbsp;Kuasa,&nbsp;apabila&nbsp;dikuasakan</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Fotokopi&nbsp;Kartu&nbsp;Tanda&nbsp;Penduduk</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Fotokopi&nbsp;Nomor&nbsp;Pokok&nbsp;Wajib&nbsp;Pajak</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="line-height:100%;font-size:13px;">Fotokopi&nbsp;Akta&nbsp;Pendirian&nbsp;dan&nbsp;Pengesahan&nbsp;Badan&nbsp;Hukum,&nbsp;untuk&nbsp;pemohon&nbsp;badan&nbsp;hukum</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="line-height:101%;font-size:13px;">Fotokopi Izin Usaha, untuk pemohon badan&nbsp;hukum</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="line-height:98%;font-size:13px;">Peta&nbsp;yang&nbsp;memuat&nbsp;koordinat&nbsp;polygon&nbsp;batas&nbsp;letak&nbsp;lokasi</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Rencana&nbsp;kegiatan&nbsp;usaha&nbsp;atau&nbsp;rencana&nbsp;penggunaan&nbsp;dan&nbsp;pemanfaatan&nbsp;tanah</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Pernyataan&nbsp;mengenai&nbsp;letak&nbsp;dan&nbsp;luas&nbsp;tanah&nbsp;yang&nbsp;sudah&nbsp;dikuasai&nbsp;oleh&nbsp;pelaku&nbsp;usaha&nbsp;dan&nbsp;pelaku&nbsp;usaha&nbsp;lain&nbsp;yang&nbsp;merupakan&nbsp;satu</span></li>
                                        </ol>
                                    </div>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:21.1pt;font-size:15px;font-family:"Cambria",serif;line-height:11.15pt;'><span style="font-size:13px;">grup,&nbsp;untuk&nbsp;pemohon&nbsp;badan&nbsp;hukum</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 28pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 81.55pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:3.95pt;margin-bottom:.0001pt;margin-left:5.3pt;font-size:15px;font-family:"Cambria",serif;text-align:center;line-height:11.0pt;'><span style="font-size:13px;">4.</span></p>
                                </td>
                                <td style="width: 180.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 81.55pt;vertical-align: top;">
                                    <p style='margin-top:0cm;margin-right:4.75pt;margin-bottom:.0001pt;margin-left:5.05pt;font-size:15px;font-family:"Cambria",serif;line-height:96%;'><span style="font-size:13px;line-height:96%;">Perubahan Penggunaan dan Pemanfaatan Tanah</span></p>
                                </td>
                                <td style="width: 253.05pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 81.55pt;vertical-align: top;">
                                    <div style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'>
                                        <ol style="margin-bottom:0cm;list-style-type: decimal;">
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Surat&nbsp;Kuasa,&nbsp;apabila&nbsp;dikuasakan,</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Fotokopi&nbsp;Kartu&nbsp;Tanda&nbsp;Penduduk,</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Fotokopi&nbsp;Nomor&nbsp;Pokok&nbsp;Wajib&nbsp;Pajak,</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="line-height:96%;font-size:13px;">Peta&nbsp;yang&nbsp;memuat&nbsp;koordinat&nbsp;polygon&nbsp;batas&nbsp;letak&nbsp;lokasi,</span></li>
                                            <li style='margin:0cm;font-size:15px;font-family:"Cambria",serif;'><span style="font-size:13px;">Rencana&nbsp;kegiatan&nbsp;usaha&nbsp;atau&nbsp;rencana&nbsp;penggunaan&nbsp;dan&nbsp;pemanfaatan&nbsp;tanah.</span></li>
                                        </ol>
                                        
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.05pt;'>&nbsp;</p>
                    <p style='margin:0cm;font-size:15px;font-family:"Cambria",serif;margin-top:.05pt;margin-right:1.45pt;margin-bottom:.0001pt;margin-left:22.2pt;text-indent:20.75pt;line-height:115%;'><span style="font-size:13px;line-height:115%;">Demikian&nbsp;permohonan&nbsp;ini&nbsp;kami&nbsp;sampaikan,&nbsp;dan&nbsp;kami&nbsp;bertanggungjawab&nbsp;atas&nbsp;kebenaran&nbsp;persyaratan&nbsp;yang&nbsp;dilampirkan&nbsp;di&nbsp;atas.</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Cambria",serif;margin-top:0cm;margin-right:39.15pt;margin-bottom:.0001pt;margin-left:318.1pt;text-align:center;line-height:11.65pt;'><span style="font-size:13px;">Martapura, {{ $tgl }}</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Cambria",serif;margin-top:1.85pt;margin-right:34.25pt;margin-bottom:.0001pt;margin-left:318.1pt;text-align:center;'><span style="font-size:13px;">Pemohon,</span></p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.05pt;'><span style="font-size:17px;">&nbsp;</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Cambria",serif;margin-top:0cm;margin-right:39.05pt;margin-bottom:.0001pt;margin-left:318.1pt;text-align:center;'><span style="font-size:13px;">({{ $ptp->nama_kuasa ? $ptp->nama_kuasa : $ptp->nama }})</span></p>
                    <p style='margin:0cm;font-size:14px;font-family:"Cambria",serif;margin-top:.5pt;'><span style="font-size:7px;">&nbsp;</span></p>
                    
                </div>
            </div>


            <div class="scroll row justify-content-center">
                <div class="col-8"><p><u><i>Halaman 3</i></u></p></div>
                <div class="col-12 col-md-8">

                    <h1 style='margin-top:3.85pt;margin-right:35.05pt;margin-bottom:0cm;margin-left:28.0pt;text-align:center;font-size:19px;font-family:"Arial",sans-serif;line-height:16.1pt;'><span style='font-size:21px;font-family:"Times New Roman",serif;'>Proposal Rencana Kegiatan</span></h1>
                    <h1 style='margin-top:3.85pt;margin-right:35.05pt;margin-bottom:0cm;margin-left:28.0pt;text-align:center;font-size:19px;font-family:"Arial",sans-serif;line-height:16.1pt;'><span style='font-size:21px;font-family:"Times New Roman",serif;'>Pengajuan Pertimbangan Teknis Pertanahan</span></h1>
                    <h1 style='margin-top:3.85pt;margin-right:35.05pt;margin-bottom:0cm;margin-left:28.0pt;text-align:center;font-size:19px;font-family:"Arial",sans-serif;line-height:16.1pt;'><span style='font-size:21px;font-family:"Times New Roman",serif;'>Perubahan Penggunaan dan Pemanfaatan Tanah</span></h1>
                    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:35.05pt;margin-bottom:.0001pt;margin-left:28.05pt;text-align:center;line-height:9.2pt;'><br></p>
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
                    <p><span style='font-size:11px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <p><br></p>
                    <p style='margin:0cm;font-size:16px;font-family:"Arial MT",sans-serif;margin-top:.3pt;'><span style='font-size:15px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        <ol style="margin-bottom:0cm;list-style-type: upper-roman;margin-left:119.6px;">
                            <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                                <span style='font-family:"Times New Roman",serif;font-size:16px;'>Maksud / Rencana Kegiatan</span>
                                
                                <table style="border-collapse:collapse;border:none;">
                                    <tbody>
                                        <tr>
                                            <td style="width: 109.7pt;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Rencana Kegiatan</span></p>
                                            </td>
                                            <td style="width: 276.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:22.7pt;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>: {{ $ptp->keperluan }}</span></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </li>

                            <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                                <span style='font-family:"Times New Roman",serif;font-size:16px;'>Letak dan Luas Tanah</span>
                                <table style="border-collapse:collapse;border:none;">
                                    <tbody>
                                        <tr>
                                            <td style="width: 109.7pt;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Alamat</span></p>
                                            </td>
                                            <td style="width: 276.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:22.7pt;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>: {{ $ptp->jalan_tanah }}</span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 109.7pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Desa / Kelurahan</span></p>
                                            </td>
                                            <td style="width: 276.4pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:22.7pt;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>: {{ $ptp->kelurahan->nm_kelurahan }}</span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 109.7pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Kecamatan</span></p>
                                            </td>
                                            <td style="width: 276.4pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:22.7pt;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>: {{ $ptp->kecamatan->nm_kecamatan }}</span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 109.7pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Kabupaten</span></p>
                                            </td>
                                            <td style="width: 276.4pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:22.7pt;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>: Banjar</span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 109.7pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Luas</span></p>
                                            </td>
                                            <td style="width: 276.4pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:22.7pt;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>: {{ $ptp->luas }}</span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 109.7pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>No Sertifikat</span></p>
                                            </td>
                                            <td style="width: 276.4pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:22.7pt;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>: {{ $ptp->no_hak }}</span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 109.7pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Atas Nama</span></p>
                                            </td>
                                            <td style="width: 276.4pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                                <p style='margin-top:6.05pt;margin-right:22.7pt;margin-bottom:.0001pt;margin-left:0cm;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>: {{ $ptp->nm_sertifikat }}</span></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </li>

                            <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                                <span style='line-height:150%;font-family:"Times New Roman",serif;font-size:16px;'>Pengajuan Pertimbangan Teknis Pertanahan</span>
                                <p style='margin-top:6.05pt;margin-right:22.7pt;margin-bottom:.0001pt;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;line-height:150%;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Dengan ini Saya mengajukan Pertimbangan Teknis Pertanahan dalam rangka Perubahan Penggunaan dan Pemanfaatan Tanah dari Tanah Pertanian ke Non Pertanian. Saya akan menggunakan tanah tersebut sesuai dengan Arahan Fungsi Kawasan dan akan melakukan Kegiatan sesuai dengan yang dimohonkan setelah memenuhi persyaratan yang diatur oleh Perundang-undangan yang berlaku serta bertanggungjawab atas segala akibat yang ditimbulkan sebeb pelaksanan kegiatan yang dimohon.</span></p>
                                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:13.65pt;margin-bottom:.0001pt;margin-left:282.45pt;text-align:center;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:13.65pt;margin-bottom:.0001pt;margin-left:282.45pt;text-align:center;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Martapura, {{ $tgl }}</span></p>
                                <p style='margin:0cm;font-size:16px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;font-size:16px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;font-size:16px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:13.55pt;margin-bottom:.0001pt;margin-left:282.45pt;text-align:center;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>({{ $ptp->nama_kuasa ? $ptp->nama_kuasa : $ptp->nama }})</span></p>
                                <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:13.55pt;margin-bottom:.0001pt;margin-left:282.45pt;text-align:center;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Pemohon</span></p>
                            </li>

                        </ol>
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
                {!! QrCode::size(300)->generate(route('pdfPtp',$id)); !!}
                <p><strong>No Tiket: {{ $ptp->permohonan->no_tiket }}</strong></p>
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