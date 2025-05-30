@extends('template.master')
@section('content')
    <section class="about-style-two mt-2 mb-3 p-5">
        <div class="auto-container">
            <div class="row">

                <div class="col-12 content-column">

                    <div class="btn-box mb-3">
                        <a href="/" class="theme-btn btn-one"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>

                    <div class="content_block_one">
                        <div class="content-box mr_80">
                            <div class="sec-title pb_20 sec-title-animation animation-style2">
                                <h2 class="title-animation">Persyaratan Permohonan Pemecahan, Pemisahan, Penggabungan</h2>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 content-column mb-5">
                    <div class="content_block_one">
                        <div class="content-box mr_80">
                            {{-- <div class="sec-title pb_20 sec-title-animation animation-style2">
                          <span class="sub-title mb_10 title-animation">Peralihan Hak - Jual Beli</span>
                      </div> --}}
                            <div class="text-box">
                                {{-- <p>This staffing platform provides access to a diverse pool of qualified candidates with
                              specialized skills in areas such as hospitality management.</p> --}}
                                <ul class="list-style-one clearfix">
                                    <li>Sertipikat Asli</li>
                                    <li>Asli & FC Akta Pendirian dan Pengesahan Badan Hukum</li>
                                    <li>Gambar Rencana Pemisahan/Pemecahan</li>
                                    <li>FC Pengesahan Siteplan dan Sitepaln Dari Pemerintah Kabupaten Atau Kota (Untuk Badan
                                        Hukum)</li>
                                    <li>Penyelenggaraan Kebijakan Penggunaan dan Pemanfaatan Tanah (Jika Tanah Pertanian)
                                    </li>
                                    <li>Surat Kuasa Bermeterai Asli (Jika Dikuasakan)</li>
                                    <li>FC KTP & KK Penerima Kuasa</li>
                                    <li>Pemecahan/Pemisahan Tanah Perorangan lebih dari 5 Bidang hanya Untuk Pewarisan</li>
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
            var tarif = 0;
            var tarif_pengukuran = 0;
            var tarif_pendaftaran = 0;
            var l_tanah = 0;
            $(document).on('submit', '#form_simulasi_biaya', function(event) {
                event.preventDefault();

                $('#table_simulasi').show();
                var luas = $('#luas').val();
                var jenis_tanah = $('#jenis_tanah').val();
                var jumlah = $('#jumlah').val();

                if (jenis_tanah == 1) {
                    var t_pengukuran = 100;
                    var penggunaan = 'Pertanian';
                } else {
                    var t_pengukuran = 200;
                    var penggunaan = 'Non Pertanian';
                }
                var sub_pengkuran = (luas * t_pengukuran + 100000) * jumlah
                var sub_pendaftaran = 50000 * jumlah
                tarif_pengukuran += sub_pengkuran;
                tarif_pendaftaran += sub_pendaftaran;
                tarif += sub_pendaftaran + sub_pengkuran;
                l_tanah += parseInt(luas);

                var html = '<div class="alert alert-success" role="alert"><b>Luas Tanah : ' + l_tanah +
                    ' m<sup>2</sup></b> <br> <b>Estimasi Biaya : ' + tarif.toLocaleString('en-US') +
                    '</b> <br>Teridiri dari: <br><table><tr><td>- Tarif Pengukuran</td><td>=</td><td>' +
                    tarif_pengukuran.toLocaleString('en-US') +
                    '</td></tr><tr><td>- Tarif Pendaftaran</td><td>=</td><td>' + tarif_pendaftaran
                    .toLocaleString('en-US') +
                    '</td></tr></table><i><u>Catatan : Biaya diatas belum termasuk biaya transportasi, akomodasi dan konsumsi yang dibebankan kepada pemohon (Pasal 21 Peraturan Pemerintah nomor 128 Tahun 2015)</u></i></div>';
                $('#hasil').html(html);

                var html_code = '<tr>';
                html_code += '<td>' + jumlah + '</td>';
                html_code += '<td>' + luas + '</td>';
                html_code += '<td>' + penggunaan + '</td>';
                html_code += '</tr>';

                $('#tb_simulasi').append(html_code);

            });

            $(document).on('click', '#reset', function() {
                tarif = 0;
                tarif_pengukuran = 0;
                tarif_pendaftaran = 0;

                $('#hasil').html('');
                $('#tb_simulasi').html('');
                $('#table_simulasi').hide();
            });



        });
    </script>
@endsection
<!-- ======= About Us Section ======= -->
