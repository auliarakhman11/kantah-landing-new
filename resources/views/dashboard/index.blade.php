@extends('template.master')
@section('content')

<<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- job-form-section -->

    <style>
        .scrolling-wrapper{
            overflow-x: auto;
            height:650px;
            overflow-y: scroll;
        }
    </style>
    <section class="job-form-section pt_120 pb_120 mb-5">
        <div class="auto-container">
            <div class="sec-title centred pb_70 light sec-title-animation animation-style2">
                {{-- <span class="sub-title mb_10 title-animation">REQUEST NEEDED TALENT</span> --}}
                <h2 class="title-animation">Daftar Pengisian Blanko Online</h2>
                <p class="title-animation">Memuat daftar Pengisian Blanko yang dilakukan pemohon secara online</p>
            </div>
            <form id="form_permohonan">
                @csrf
                <input type="hidden" name="device_id" id="device_id" value="">
                <div class="row clearfix">

                    <div class="col-12 form-column">
                        <div class="form-inner">
                            <div class="scrolling-wrapper">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active" style="font-size: 10px;" id="v-pills-all-tab" data-toggle="pill" data-target="#v-pills-all" type="button" role="tab" aria-controls="v-pills-all" aria-selected="true">All</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-pendaftaran1-tab" data-toggle="pill" data-target="#v-pills-pendaftaran1" type="button" role="tab" aria-controls="v-pills-pendaftaran1" aria-selected="false">Pendaftaran Tanah Pertamakali I</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-pendaftaran2-tab" data-toggle="pill" data-target="#v-pills-pendaftaran2" type="button" role="tab" aria-controls="v-pills-pendafataran2" aria-selected="false">Pendaftaran Tanah Pertamakali II</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-pendaftaran3-tab" data-toggle="pill" data-target="#v-pills-pendaftaran3" type="button" role="tab" aria-controls="v-pills-pendaftaran3" aria-selected="false">Pendaftaran Tanah Pertamakali III</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-peralihan_hak-tab" data-toggle="pill" data-target="#v-pills-peralihan_hak" type="button" role="tab" aria-controls="v-pills-peralihan_hak" aria-selected="false">Peralihan Hak</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-ganti_nama_ht-tab" data-toggle="pill" data-target="#v-pills-ganti_nama_ht" type="button" role="tab" aria-controls="v-pills-ganti_nama_ht" aria-selected="false">Ganti Nama Pemegang Hak Tanggungan</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-ganti_nama_sertipikat-tab" data-toggle="pill" data-target="#v-pills-ganti_nama_sertipikat" type="button" role="tab" aria-controls="v-pills-ganti_nama_sertipikat" aria-selected="false">Ganti Nama Sertipikat</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-merger_hak_tanggungan-tab" data-toggle="pill" data-target="#v-pills-merger_hak_tanggungan" type="button" role="tab" aria-controls="v-pills-merger_hak_tanggungan" aria-selected="false">Merger Hak Tanggungan</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-pisah_pecah_gabung-tab" data-toggle="pill" data-target="#v-pills-pisah_pecah_gabung" type="button" role="tab" aria-controls="v-pills-pisah_pecah_gabung" aria-selected="false">Pemisahan, Pemecahan, Penggabungan</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-penataan_batas-tab" data-toggle="pill" data-target="#v-pills-penataan_batas" type="button" role="tab" aria-controls="v-pills-penataan_batas" aria-selected="false">Penataan Batas</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-pelunasan_bphtb-tab" data-toggle="pill" data-target="#v-pills-pelunasan_bphtb" type="button" role="tab" aria-controls="v-pills-pelunasan_bphtb" aria-selected="false">Pencatatan Pelunasan BPHTB</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-peningkatan-tab" data-toggle="pill" data-target="#v-pills-peningkatan" type="button" role="tab" aria-controls="v-pills-peningkatan" aria-selected="false">Perubahan Hak Peningkatan</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-penurunan-tab" data-toggle="pill" data-target="#v-pills-penurunan" type="button" role="tab" aria-controls="v-pills-penurunan" aria-selected="false">Perubahan Hak Penurunan</button>
                                            <button class="nav-link" style="font-size: 9px;" id="v-pills-sertipikat_rusak-tab" data-toggle="pill" data-target="#v-pills-sertipikat_rusak" type="button" role="tab" aria-controls="v-pills-sertipikat_rusak" aria-selected="false">Sertipikat Pengganti Karena Rusak, Lama</button>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Blanko</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        @foreach ($all as $d)
                                                            <tr>
                                                                <td>{{ $no++ }}</td>
                                                                <td>{{ $d['permohonan'] }}</td>
                                                                <td>{{ $d['nik'] }}</td>
                                                                <td>{{ $d['nama'] }}</td>
                                                                <td>{{ $d['umur'] }}</td>
                                                                <td>{{ $d['pekerjaan'] }}</td>
                                                                <td>{{ $d['alamat'] }}</td>
                                                                <td>{{ $d['no_tlpn'] }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d['tgl'])) }}</td>
                                                                <td>{{ $d['nm_kecamatan'] }}</td>
                                                                <td>{{ $d['nm_kelurahan'] }}</td>
                                                                <td>{{ $d['alamat_tanah'] }}</td>
                                                                <td>{{ $d['jenis_hak'] }}</td>
                                                                <td>{{ $d['nomor_hak'] }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="v-pills-pendaftaran1" role="tabpanel" aria-labelledby="v-pills-pendaftaran1-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($pendaftaran1 as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-pendaftaran2" role="tabpanel" aria-labelledby="v-pills-pendaftaran2-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($pendaftaran2 as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-pendaftaran3" role="tabpanel" aria-labelledby="v-pills-pendaftaran3-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($pendaftaran3 as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-peralihan_hak" role="tabpanel" aria-labelledby="v-pills-peralihan_hak-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($peralihan_hak as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-ganti_nama_ht" role="tabpanel" aria-labelledby="v-pills-ganti_nama_ht-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($ganti_nama_ht as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-ganti_nama_sertipikat" role="tabpanel" aria-labelledby="v-pills-ganti_nama_sertipikat-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($ganti_nama_sertipikat as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-merger_hak_tanggungan" role="tabpanel" aria-labelledby="v-pills-merger_hak_tanggungan-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($merger_hak_tanggungan as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-pisah_pecah_gabung" role="tabpanel" aria-labelledby="v-pills-pisah_pecah_gabung-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($pisah_pecah_gabung as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-penataan_batas" role="tabpanel" aria-labelledby="v-pills-penataan_batas-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($penataan_batas as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-pelunasan_bphtb" role="tabpanel" aria-labelledby="v-pills-pelunasan_bphtb-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($pelunasan_bphtb as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-peningkatan" role="tabpanel" aria-labelledby="v-pills-peningkatan-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($peningkatan as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-penurunan" role="tabpanel" aria-labelledby="v-pills-penurunan-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($penurunan as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-roya" role="tabpanel" aria-labelledby="v-pills-roya-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($roya as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-sertipikat_rusak" role="tabpanel" aria-labelledby="v-pills-sertipikat_rusak-tab">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-striped">
                                                    <thead style="font-size: 10px;">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>NIK</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                            <th>Telpn</th>
                                                            <th>Tanggal</th>
                                                            <th>Kecamatan</th>
                                                            <th>Desa/Kelurahan</th>
                                                            <th>Alamat tanah</th>
                                                            <th>Jenis Hak</th>
                                                            <th>Nomor Hak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 8px;">
                                                        @foreach ($sertipikat_rusak as $index => $d)
                                                            <tr>
                                                                <td>{{ $index+1 }}</td>
                                                                <td>{{ $d->nik }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->umur }}</td>
                                                                <td>{{ $d->pekerjaan }}</td>
                                                                <td>{{ $d->alamat }}</td>
                                                                <td>{{ $d->no_tlpn }}</td>
                                                                <td>{{ date("d/m/Y", strtotime($d->tgl)) }}</td>
                                                                <td>{{ $d->kecamatan ? $d->kecamatan->nm_kecamatan : '' }}</td>
                                                                <td>{{ $d->kelurahan ? $d->kelurahan->nm_kelurahan : '' }}</td>
                                                                <td>{{ $d->alamat_tanah ? $d->alamat_tanah : '' }}</td>
                                                                <td>{{ $d->jenis_hak ? 'Hak '. $d->jenis_hak : '' }}</td>
                                                                <td>{{ $d->nomor_hak ? $d->nomor_hak : '' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="title-box">

                                <h3>Data Diri Pemilik Tanah</h3>
                                
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">NIK</label>
                                    <input type="text" name="nik" id="nik" minlength="16" maxlength="16"
                                        required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" id="nama" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Umur</label>
                                    <input type="text" name="umur" id="umur" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Perkerjaan</label>
                                    <input type="text" name="pekerjaan" id="pekerjaan" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">No Telepon</label>
                                    <input type="text" name="no_tlpn" id="no_tlpn" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="alamat" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                   

                </div>
            </form>
        </div>
    </section>
    <!-- job-form-section end -->
@endsection
@section('script')
    <script>
        var device_id = localStorage.getItem("deviceId");
        $('#device_id').val(device_id ? device_id : '');

        function getKecamatan(data) {
            const dt_kecamatan_id = data.value;
            if (dt_kecamatan_id == '') {
                $('#kecamatan_id').val('');
            } else {
                const kecamatan_id = dt_kecamatan_id.split("|");
                $('#kecamatan_id').val(kecamatan_id[1]);
            }

        }

        function getKelurahan(kecamatan_id) {
            $('#kelurahan_id').html('');
            const d_kecamatan_id = kecamatan_id.value == '' ? 0 : kecamatan_id.value;
            $.get('getKelurahan/' + d_kecamatan_id, function(data) {
                $('#kelurahan_id').html(data);
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $(document).ready(function() {

            $(document).on('keyup', '#nik', function(event) {
                var nik = $(this).val();
                if (nik.length == 16) {
                    $.get('getDataPemohon/' + nik, function(data) {
                        if (data) {
                            $('#nama').val(data.nama);
                            $('#umur').val(data.umur);
                            $('#pekerjaan').val(data.pekerjaan);
                            $('#alamat').val(data.alamat);
                            $('#no_tlpn').val(data.no_tlpn);
                        }
                    });

                }
            });

            $(document).on('keyup', '#nik_kuasa', function(event) {
                var nik = $(this).val();
                if (nik.length == 16) {
                    $.get('getDataPemohon/' + nik, function(data) {
                        if (data) {
                            $('#nama_kuasa').val(data.nama);
                            $('#umur_kuasa').val(data.umur);
                            $('#pekerjaan_kuasa').val(data.pekerjaan);
                            $('#alamat_kuasa').val(data.alamat);
                            $('#no_tlpn_kuasa').val(data.no_tlpn);
                        }
                    });

                }
            });

            $(document).on('submit', '#form_permohonan', function(event) {
                event.preventDefault();

                $('#btn_input_permohnan').attr('disabled', true);
                $('#btn_input_permohnan').html('Loading..');


                $.ajax({
                    url: "{{ route('addPendaftaranPertama') }}",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {

                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            icon: 'success',
                            title: 'Data Berhasil Diinput'
                        });

                        $('#form_permohonan').trigger("reset");

                        localStorage.setItem("deviceId", data.device_id);

                        window.location.href = "{{ route('viewPendaftaranPertama') }}?id=" +
                            data.id + "&device_id=" + data.device_id;


                    },
                    error: function(data) { //jika error tampilkan error pada console
                        console.log('Error:', data);
                        $("#btn_input_berkas").removeAttr("disabled");
                        $('#btn_input_berkas').html('Buat Formulir'); //tombol
                    }
                });

            });
        });
    </script>
@endsection
<!-- ======= About Us Section ======= -->
