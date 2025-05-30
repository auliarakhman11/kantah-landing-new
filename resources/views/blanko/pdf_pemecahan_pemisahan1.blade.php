<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peralihan Hak</title>
    {{-- <link rel="stylesheet" href="{{ public_path('css') }}/bootstrap.min.css"> --}}

    {{-- <link href="{{asset('company')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('company')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('company')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{asset('company')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet"> --}}
    
    <style>
        
    .huruf {
        font-family: 'Times New Roman';
        font-size: 11px;
    }
    </style>
</head>
<body>
    
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

</body>
</html>

