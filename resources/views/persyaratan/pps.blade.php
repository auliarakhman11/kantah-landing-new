@extends('template.master')
@section('content')
    <section class="about-style-two mt-2 mb-3">
        <div class="auto-container">
            <div class="row">

                <div class="col-12 content-column">

                    <div class="btn-box mb-3">
                        <a href="/" class="theme-btn btn-one"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>

                    <div class="content_block_one">
                        <div class="content-box mr_80">
                            <div class="sec-title pb_20 sec-title-animation animation-style2">
                                <h2 class="title-animation">Persyaratan Permohonan Sertifikat</h2>
                            </div>

                        </div>
                    </div>
                </div>

                <dxiv class="col-12 content-column mb-5">
                    <div class="content_block_one">
                        <div class="content-box mr_80">
                            <div class="sec-title pb_20 sec-title-animation animation-style2">
                                <span class="sub-title mb_10 title-animation">Riwayat Perolehan Tanah Jual Beli</span>
                            </div>
                            <div class="text-box">
                                {{-- <p>This staffing platform provides access to a diverse pool of qualified candidates with
                              specialized skills in areas such as hospitality management.</p> --}}
                                <ul class="list-style-one clearfix">
                                    <li>Foto copy KTP & KK Sesuai Alas Hak 2 Lbr (Memperlihatkan Yang Asli)</li>
                                    <li>Alas Hak (Asli & FC Yang Leges Kelurahan 1 Lbr)
                                        <br>
                                        <i>"Surat Keterangan Dari Pemohon Bahwa Tanah Tersebut Bukan Tanah Sengketa & Bukan
                                            hutang Piutang" (Asli & FC Legalisir Kelurahan 1 Lbr)"</i>
                                    </li>
                                    <li>Surat Pernyataan Penguasaan Fisik Bidang Tanah (SPPFBT)</li>
                                    <li>Kwitansi Asli & FC 1 Lbr</li>
                                    <li>FC Alas Hak Pemilik Sebelumnya Legalisir Kelurahan 2 Lbr</li>
                                    <li>Surat Keterangan Alas Hak Pemilik Sebelumnya Sudah Ditarik Oleh Kelurahan (Asli & FC
                                        Legalisir Kelurahan 2 Lbr)</li>
                                    <li>Surat Keterangan "Jika Belum Pernah Dibuatkan Alas Hak" (Asli & FC Legalisir
                                        Kelurahan 1 Lbr)</li>
                                    <li>FC NPWP "Jika Transaksi Jual Beli diatas 60 Juta" 1 Lbr</li>
                                    <li>SPPT PBB Tahun Berjalan (Asli & FC 1 Lbr)</li>
                                    <li>Foto lokasi Dengan Empat Sudut Terlihat Patok & Akses Jalan (Foto diprint/Cetak)
                                    </li>
                                    <li>Foto Lokasi Dengan Aplikasi Foto Geotag (Bagikan Via Email:
                                        <u><b>pendaftaran.kantahkab.banjar@gmail.com</b></u> )
                                    </li>
                                    <li>Surat Kuasa Bermatrai Asli</li>
                                    <li>FC KTP & KK Kuasa 2 Lbr</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </dxiv>


                <div class="col-12 content-column mb-5">
                    <div class="content_block_one">
                        <div class="content-box mr_80">
                            <div class="sec-title pb_20 sec-title-animation animation-style2">
                                <span class="sub-title mb_10 title-animation">Riwayat Perolehan Tanah Waris</span>
                            </div>
                            <div class="text-box">
                                {{-- <p>This staffing platform provides access to a diverse pool of qualified candidates with
                            specialized skills in areas such as hospitality management.</p> --}}
                                <ul class="list-style-one clearfix">
                                    <li>Foto copy KTP & KK Sesuai Alas Hak 2 Lbr (Memperlihatkan Yang Asli)</li>
                                    <li>Alas Hak (Asli & FC Yang Leges Kelurahan 1 Lbr)
                                        <br>
                                        <i>"Surat Keterangan Dari Pemohon Bahwa Tanah Tersebut Bukan Tanah Sengketa & Bukan
                                            hutang Piutang" (Asli & FC Legalisir Kelurahan 1 Lbr)"</i>
                                    </li>
                                    <li>Surat Pernyataan Penguasaan Fisik Bidang Tanah (SPPFBT)</li>
                                    <li>Surat Kematian (FC Leges Kelurahan 2 Lbr)</li>
                                    <li>FC KTP & KK Ahli Waris</li>
                                    <li>Surat Pernyataan Waris (Asli & FC Legalisir Kelurahan 1 Lbr)</li>
                                    <li>Surat Keterangan Waris Oleh Desa (Asli & FC Legalisir Kelurahan 1 Lbr)</li>
                                    <li>Surat Penyerahan Hak Waris (Asli & FC Legalisir Kelurahan 1 Lbr)</li>
                                    <li>FC Alas Hak Pemilik Sebelumnya Legalisir Kelurahan 2 Lbr</li>
                                    <li>Surat Keterangan Alas Hak Pemilik Sebelumnya Sudah Ditarik Oleh Kelurahan (Asli & FC
                                        Legalisir Kelurahan 2 Lbr)</li>
                                    <li>Surat Keterangan "Jika Belum Pernah Dibuatkan Alas Hak" (Asli & FC Legalisir
                                        Kelurahan 1 Lbr)</li>
                                    <li>FC NPWP "Jika Transaksi Jual Beli diatas 60 Juta" 1 Lbr</li>
                                    <li>SPPT PBB Tahun Berjalan (Asli & FC 1 Lbr)</li>
                                    <li>Foto lokasi Dengan Empat Sudut Terlihat Patok & Akses Jalan (Foto diprint/Cetak)
                                    </li>
                                    <li>Foto Lokasi Dengan Aplikasi Foto Geotag (Bagikan Via Email:
                                        <u><b>pendaftaran.kantahkab.banjar@gmail.com</b></u> )
                                    </li>
                                    <li>Surat Kuasa Bermatrai Asli</li>
                                    <li>FC KTP & KK Kuasa 2 Lbr</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 content-column mb-5">
                    <div class="content_block_one">
                        <div class="content-box mr_80">
                            <div class="sec-title pb_20 sec-title-animation animation-style2">
                                <span class="sub-title mb_10 title-animation">Riwayat Perolehan Tanah Jual Beli</span>
                            </div>
                            <div class="text-box">
                                {{-- <p>This staffing platform provides access to a diverse pool of qualified candidates with
                            specialized skills in areas such as hospitality management.</p> --}}
                                <ul class="list-style-one clearfix">
                                    <li>Foto copy KTP & KK Sesuai Alas Hak 2 Lbr (Memperlihatkan Yang Asli)</li>
                                    <li>Alas Hak (Asli & FC Yang Leges Kelurahan 1 Lbr)
                                        <br>
                                        <i>"Surat Keterangan Dari Pemohon Bahwa Tanah Tersebut Bukan Tanah Sengketa & Bukan
                                            hutang Piutang" (Asli & FC Legalisir Kelurahan 1 Lbr)"</i>
                                    </li>
                                    <li>Surat Pernyataan Penguasaan Fisik Bidang Tanah (SPPFBT)</li>
                                    <li>Surat Pernyataan/Keteragan Hibah (Asli & FC Legalisir Kelurahan 1 Lbr)</li>
                                    <li>FC Alas Hak Pemilik Sebelumnya Legalisir Kelurahan 2 Lbr</li>
                                    <li>Surat Keterangan Alas Hak Pemilik Sebelumnya Sudah Ditarik Oleh Kelurahan (Asli & FC
                                        Legalisir Kelurahan 2 Lbr)</li>
                                    <li>Surat Keterangan "Jika Belum Pernah Dibuatkan Alas Hak" (Asli & FC Legalisir
                                        Kelurahan 1 Lbr)</li>
                                    <li>FC NPWP "Jika Transaksi Jual Beli diatas 60 Juta" 1 Lbr</li>
                                    <li>SPPT PBB Tahun Berjalan (Asli & FC 1 Lbr)</li>
                                    <li>Foto lokasi Dengan Empat Sudut Terlihat Patok & Akses Jalan (Foto diprint/Cetak)
                                    </li>
                                    <li>Foto Lokasi Dengan Aplikasi Foto Geotag (Bagikan Via Email:
                                        <u><b>pendaftaran.kantahkab.banjar@gmail.com</b></u> )
                                    </li>
                                    <li>Surat Kuasa Bermatrai Asli</li>
                                    <li>FC KTP & KK Kuasa 2 Lbr</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {



            $(document).on('click', '#lanjutkan', function() {
                var luas = $('#luas').val();
                var jenis_tanah = $('#jenis_tanah').val();

                if (!luas || !jenis_tanah || luas == 0) {
                    var html =
                        '<div class="alert alert-danger" role="alert"><b>Inputan tidak boleh Kosong!!!</b></div>';
                    $('#hasil').html(html);
                } else {
                    if (jenis_tanah == 1) {
                        var t_pengukuran = 100;
                        var t_pemeriksaan = 20;
                    } else {
                        var t_pengukuran = 200;
                        var t_pemeriksaan = 40;
                    }
                    var tarif_pengukuran = luas * t_pengukuran + 100000;
                    var tarif_pemeriksaan = luas * t_pemeriksaan + 350000;
                    var tarif_pendaftaran = 50000;
                    var tarif = tarif_pengukuran + tarif_pemeriksaan + tarif_pendaftaran;

                    var html = '<div class="alert alert-success" role="alert"><b>Estimasi Biaya : ' + tarif
                        .toLocaleString('en-US') +
                        '</b> <br>Teridiri dari: <br><table><tr><td>- Tarif Pengukuran</td><td>=</td><td>' +
                        luas + ' x ' + t_pengukuran +
                        ' + 100,000</td></tr><tr><td>- Tarif Pemeriksaan</td><td>=</td><td>' + luas +
                        ' x ' + t_pemeriksaan +
                        ' + 350,000</td></tr><tr><td>- Tarif Pendaftaran</td><td>=</td><td>' +
                        tarif_pendaftaran.toLocaleString('en-US') +
                        '</td></tr></table><i><u>Catatan : Biaya diatas belum termasuk biaya transportasi, akomodasi dan konsumsi yang dibebankan kepada pemohon (Pasal 21 Peraturan Pemerintah nomor 128 Tahun 2015)</u></i></div>';

                    $('#hasil').html(html);
                }

            });


        });
    </script>
@endsection
<!-- ======= About Us Section ======= -->
