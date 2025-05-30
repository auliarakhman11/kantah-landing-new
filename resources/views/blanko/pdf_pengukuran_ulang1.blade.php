<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>