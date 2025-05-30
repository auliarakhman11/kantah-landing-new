<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
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
        <p>&nbsp;</p>
    </div>

    <div style="float: right;">
        <p><center>Martapura, {{ $tgl }}</center> <br> <center>Yang Membuat Pernyataan,</center></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        
        <p><center>Materai</center></p>
        <p>&nbsp;</p>
        <p><center>{{ $peningkatan->nama }}</center></p>
    </div>
</body>
</html>