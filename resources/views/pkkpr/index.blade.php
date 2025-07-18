@extends('template.master')
@section('content')
    <!-- job-form-section -->
    <section class="job-form-section pt_120 pb_120 mb-5">
        <div class="auto-container">
            <div class="sec-title centred pb_70 light sec-title-animation animation-style2">
                {{-- <span class="sub-title mb_10 title-animation">REQUEST NEEDED TALENT</span> --}}
                <h2 class="title-animation">PKKPR untuk Kegiatan Non Berusaha</h2>
                {{-- <p class="title-animation">Permohonan Pengukuran dan Pemetaan Kadastral</p> --}}
            </div>
            <form id="form_permohonan">
                @csrf
                <input type="hidden" name="device_id" id="device_id" value="">
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="title-box">
                                {{-- <div class="icon-box"><i class="icon-39"></i></div> --}}
                                <h3>Data Diri Pemilik Tanah</h3>
                                {{-- <p>Please fill out your contact person details here.</p> --}}
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

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Nomor Induk Berusaha (NIB)</label>
                                    <small>untuk pemohon Pelaku Usaha yang sudah memiliki NIB</small>
                                    <input type="text" name="nib">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Nomor Anggaran dasar perusahaan / SK pengesahan</label>
                                    <small>khusus untuk pemohon badan hukum</small>
                                    <input type="text" name="no_sk">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Tanggal Anggaran dasar perusahaan / SK pengesahan</label>
                                    <small>khusus untuk pemohon badan hukum</small>
                                    <input type="date" class="form-control" name="tgl_sk">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="alamat" required></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <div class="title-box">
                                {{-- <div class="icon-box"><i class="icon-39"></i></div> --}}
                                <h3>Data Diri Kuasa <span style="font-size: 15px;">(Kosongkan apabila tidak
                                        dikuasakan)</span></h3>
                                {{-- <p>Kosongkan apabila tidak dikuasakan</p> --}}
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">NIK Kuasa</label>
                                    <input type="text" name="nik_kuasa" id="nik_kuasa" minlength="16" maxlength="16">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Nama Kuasa</label>
                                    <input type="text" name="nama_kuasa" id="nama_kuasa">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Umur Kuasa</label>
                                    <input type="text" name="umur_kuasa" id="umur_kuasa">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Perkerjaan Kuasa</label>
                                    <input type="text" name="pekerjaan_kuasa" id="pekerjaan_kuasa">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">No Telepon Kuasa</label>
                                    <input type="text" name="no_tlpn_kuasa" id="no_tlpn_kuasa">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Nomor Surat kuasa</label>
                                    <input type="text" name="nomor_surat_kuasa">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="">Tanggal Surat kuasa</label>
                                    <input type="text" name="tgl_surat_kuasa">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label for="">Alamat Kuasa</label>
                                    <textarea name="alamat_kuasa" id="alamat_kuasa"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 form-column">
                        <div class="form-inner">
                            <div class="title-box">
                                {{-- <div class="icon-box"><i class="icon-39"></i></div> --}}
                                <h3>Data Tanah</h3>
                                {{-- <p>Kosongkan apabila tidak dikuasakan</p> --}}
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6 col-12 form-group">
                                    <label for="">Kecamatan</label>
                                    <select class="form-control" name="kecamatan_id" id="kecamatan_id"
                                        onchange="getKelurahan(this);" required>
                                        <option value="">Pilih Kecamatan</option>
                                        @foreach ($kecamatan as $k)
                                            <option value="{{ $k->id }}">{{ $k->nm_kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <label for="">Kelurahan</label>
                                    <select class="form-control " name="kelurahan_id" id="kelurahan_id"
                                        onchange="getKecamatan(this);" required>
                                        <option value="">Pilih kelurahan</option>
                                        @foreach ($kelurahan as $kl)
                                            <option value="{{ $kl->id }}|{{ $kl->kecamatan_id }}">
                                                {{ $kl->nm_kelurahan }} ({{ $kl->kecamatan->nm_kecamatan }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 col-6 form-group">
                                    <label for="">Rencana Kegiatan/Penggunaan dan Pemanfaatan Tanah</label>
                                    <input type="text" name="rencana_tanah" required>
                                </div>

                                <div class="col-md-6 col-6 form-group">
                                    <label for="">Penggunaan Tanah Saat Ini</label>
                                    <input type="text" name="penggunaan_tanah" required>
                                </div>

                                <div class="col-md-6 col-6 form-group">
                                    <label for="">Nomor Hak</label>
                                    <input type="number" name="nomor_hak" class="form-control" required="">
                                </div>

                                <div class="col-md-6 col-6 form-group">
                                    <label for="">Kode dan nama KBLI</label>
                                    <small>Klasifikasi Baku Lapangan usaha Indonesia (untuk pemohon pelaku usaha) </small>
                                    <input type="text" name="kbli">
                                </div>

                                <div class="col-md-6 col-6 form-group">
                                    <label for="">Status/penguasaan tanah </label>
                                    <input type="text" name="status_tanah" required>
                                </div>

                                <div class="col-md-6 col-6 form-group">
                                    <label for="">Luas Tanah</label>
                                    <input type="text" name="luas_tanah" required>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label for="">Alamat Tanah</label>
                                    <textarea name="alamat_tanah" id="alamat_tanah"></textarea>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 form-column">
                        <div class="form-inner">
                            <div class="title-box">
                                {{-- <div class="icon-box"><i class="icon-39"></i></div> --}}
                                <h3>Untuk melengkapi permohonan dimaksud, Bersama ini kami lampirkan</h3>
                                {{-- <p>Kosongkan apabila tidak dikuasakan</p> --}}
                            </div>
                            <div class="row">

                                <div class="mt-2 col-1">1</div>
                                <div class="mt-2 col-11">
                                    <input type="text" name="lampiran[]" class="form-control">
                                </div>

                                <div class="mt-2 col-1">2</div>
                                <div class="mt-2 col-11">
                                    <input type="text" name="lampiran[]" class="form-control">
                                </div>

                                <div class="mt-2 col-1">3</div>
                                <div class="mt-2 col-11">
                                    <input type="text" name="lampiran[]" class="form-control">
                                </div>

                                <div class="mt-2 col-1">4</div>
                                <div class="mt-2 col-11">
                                    <input type="text" name="lampiran[]" class="form-control">
                                </div>

                                <div class="mt-2 col-1">5</div>
                                <div class="mt-2 col-11">
                                    <input type="text" name="lampiran[]" class="form-control">
                                </div>

                                <div class="mt-2 col-1">6</div>
                                <div class="mt-2 col-11">
                                    <input type="text" name="lampiran[]" class="form-control">
                                </div>

                                <div class="mt-2 col-1">7</div>
                                <div class="mt-2 col-11">
                                    <input type="text" name="lampiran[]" class="form-control">
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-12 form-column">
                        <div class="form-inner">
                            <div class="title-box">
                                {{-- <div class="icon-box"><i class="icon-39"></i></div> --}}
                                {{-- <h3>Data Tanah</h3> --}}
                                {{-- <p>Kosongkan apabila tidak dikuasakan</p> --}}
                            </div>
                            <div class="row clearfix justify-content-center">

                                <div class="col-lg-5 col-md-12 col-sm-12 right-column">

                                    <div class="form-group message-btn">
                                        <button type="submit" id="btn_input_permohnan" class="theme-btn btn-one">Buat
                                            Formulir</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>





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
                    url: "{{ route('addGantiNamaSertipikat') }}",
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

                        window.location.href = "{{ route('viewGantiNamaSertipikat') }}?id=" +
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
