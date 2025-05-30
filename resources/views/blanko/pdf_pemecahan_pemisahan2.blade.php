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
    <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;text-align:center;'><strong><u><span style='font-size:19px;font-family:"Times New Roman",serif;'>SURAT PERNYATAAN PEMOHON</span></u></strong></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.75pt;font-size:15px;font-family:"Cambria",serif;text-align:center;'><br></p>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Cambria",serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Yang bertanda tangan di bawah ini</span></p>
                            <ol style="list-style-type: decimal;margin-left:11.3px;">
                                <li style="font-size:12.0pt;"><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Nama</span><span style='margin-left: 250px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->nama }}</span></li>
                                <li style="font-size:12.0pt;"><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Alamat</span><span style='margin-left: 241px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->alamat }}</span></li>
                                <li style="font-size:12.0pt;"><span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>Bertindak untuk atas nama</span><span style='margin-left: 117px; font-family:"Times New Roman",serif;font-size:12.0pt;'>: {{ $pemecahan_pemisahan->nm_kuasa }}</span> <br> <span style='font-family:"Times New Roman",serif;font-size:12.0pt;'>(bila ada surat kuasa)</span></li>
                            </ol>
                            <p style='margin-top:.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:21.3pt;font-size:15px;font-family:"Cambria",serif;text-align:justify;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Menerangkan tentang tanah</span><span style="margin-left: 130px;">:</span></p>
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

</body>
</html>

