<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="float:right">
        <p >Martapura, {{ $tgl }}<br>Kepada Yth.<br>Kepala Kantor Pertanahan<br>Kabupaten Banjar<br>Di Martapura<br>&nbsp; &nbsp; &nbsp;&nbsp;</p></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
                    <div >
                        <p>Dengan Hormat,<br>&nbsp;Yang bertanda tangan dibawah ini :</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;: {{ $peningkatan->nama }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: {{ $peningkatan->pekerjaan }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tempat Tinggal&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: {{ $peningkatan->nama }}</p>
                        <p>Dalam hal ini bertindak untuk dan atas nama serta selaku kuasa dari :</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: {{ $peningkatan->nama_kuasa }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Pekerjaan&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{ $peningkatan->pekerjaan_kuasa }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tempat Tinggal&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; :</p>
                        <p>Dengan ini mengajukan permohonan perubahan hak Milik sebidang tanah untuk perumahan yang terletak di : {{ $peningkatan->alamat_kuasa }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Jalan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peningkatan->jalan_tanah }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Desa/Kelurahan&nbsp; &nbsp; &nbsp; &nbsp;: {{ $peningkatan->kelurahan->nm_kelurahan }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kecamatan &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $peningkatan->kecamatan->nm_kecamatan }}</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Kabupaten &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : Banjar</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Provinsi  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;: Kalimantan Selatan</p>
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
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Hormat Kami</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;({{ $peningkatan->nama }})</p></div>

</body>
</html>