@extends('template.master')
@section('content')

      <!-- ======= Hero Section ======= -->

  <main id="main">

    <section id="features" class="features mt-5">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Blanko Permohonan Petimbangan Teknis Pertanahan (PTP)</h2>
            {{-- <p>Informasi persyaratan berkas Kantor Pertanhan Kabupaten Banjar</p> --}}
            
            <a href="{{ route('blanko') }}" class="btn btn-sm btn-success"><i class="ri-arrow-left-fill"></i> Kembali</a>
          </div>
         
        </div>

        

        <div class="container-fluid" data-aos="fade-up">
            <form id="post_permohonan">
                <div class="row">
                    <input type="hidden" name="terdaftar" id="terdaftar">
                    <input type="hidden" name="pemohon_id" id="pemohon_id">

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Nomor Induk Kependududkan</label>
                            <input type="text" class="form-control" name="nik" id="nik" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Nomor Induk Berusaha</label>
                            <input type="text" class="form-control" name="no_nib" id="no_nib" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Bertindak untuk dan Atas Nama</label>
                            <input type="text" class="form-control" name="nama_kuasa">
                        </div>
                    </div>

                    <div class="col-12">
                        <p>Dengan ini mengajukan permohonan Pertimbangan Teknis Pertanahan dalam rangka:</p>
                        <p>1. Persetujuan atau Penolakan Izin Lokasi; <br>
                            2. Pemberian/Perpanjangan atau Pembaharuan Hak Atas Tanah; <br>
                            3. Penegasan Status dan Rekomendasi Penguasaan Tanah Timbul; <br>
                            4. Perubahan, Penggunaan dan Pemanfaatan Tanah.
                        </p>
                    </div>

                    <div class="col-12 col-md-6 mt-2">
                        <div class="form-group">
                            <label for="">Untuk Keperluan</label>
                            <input type="text" class="form-control" name="keperluan" required>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="mt-4"><u>Letak Tanah</u></p>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="">Jalan</label>
                            <input type="text" class="form-control" name="jalan_tanah" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="">RT</label>
                            <input type="text" class="form-control" name="rt" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="">RW</label>
                            <input type="text" class="form-control" name="rw" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <select name="kecamatan_id" class="form-control" id="kecamatan_id" required>
                                <option value="">-Pilih Kelurahan-</option>
                                @foreach ($kecamatan as $kc)
                                    <option value="{{ $kc->id }}">{{ $kc->nm_kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
    
                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Kelurahan</label>
                            <select name="kelurahan_id" class="form-control" id="kelurahan_id" required>
                                <option value="">-Pilih Kelurahan-</option>
                                @foreach ($kelurahan as $kl)
                                    <option value="{{ $kl->id }}">{{ $kl->nm_kelurahan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Luas</label>
                            <input type="text" class="form-control" name="luas" required>
                        </div>
                    </div>
    
                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Status/Penguasaan Tanah</label>
                            <select name="hak_id" class="form-control" id="hak_id" required>
                                <option value="">-Pilih-</option>
                                @foreach ($hak as $h)
                                <option value="{{ $h->id }}">{{ $h->nm_hak }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
    
                    <div class="col-12 col-md-6 mt-2">
                        <div class="form-group">
                            <label for="">Penggunaan Tanah Saat Ini</label>
                            <input type="text" class="form-control" name="penggunaan_tanah" id="penggunaan_tanah" required>
                        </div>
                    </div>    
                    
    
                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">No Sertifikat</label>
                            <input type="text" class="form-control" name="no_hak" id="no_hak" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Sertifikat Atas Nama</label>
                            <input type="text" class="form-control" name="nm_sertifikat" id="nm_sertifikat" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-success float-right mt-4" id="lanjut">Lanjut</button>
                    </div>
    
                </div>
                
            </form>
        </div>

        {{-- <div class="row justify-content-center">
            <div class="col-10 col-md-8">
                <div class="ratio ratio-16x9">
                    <iframe src="{{ route('viewPeralihanHak') }}" allowfullscreen></iframe>
                </div>
            </div>
        </div> --}}
        
      </section><!-- End Features Section -->

    <!-- ======= Our Clients Section ======= -->
    

  </main><!-- End #main -->



  <div class="modal" id="isi_data" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Isi Form Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Data identitas diri anda sudah tersimpan di sistem, Apakah anda ingin mengisi blanko permohonan dengan data yang tersedia?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-primary" id="btn_isi_data">Ya</button>
        </div>
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

        // $(document).on('keyup', '#cari', function() {
        //     var value = $(this).val().toLowerCase();
        //     $(".col_list").filter(function() {
        //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //     });
        //     // alert('ya');
        // });

        // $.get('pdf-peralihan-hak', function (data) {        
        //       $('#pdf-viewer').attr('data',data);
        //     });

        
        const pemohon_id = localStorage.getItem('pemohon_id');

        if(pemohon_id){
            $('#terdaftar').val(1);
            $('#isi_data').modal('show');
            $('#pemohon_id').val(pemohon_id);
        }else{
            $('#terdaftar').val(0);
        }

        $(document).on('click', '#btn_isi_data', function() {

            $.get('get-data-pemohon/' + pemohon_id + '/1', function (data) {        
                $('#kecamatan_id').val(data.kecamatan_id);
                $('#kelurahan_id').val(data.kelurahan_id);
                $('#nama').val(data.nama);
                $('#pekerjaan').val(data.pekerjaan);
                $('#alamat').val(data.alamat);
                $('#rt').val(data.rt);
                $('#rw').val(data.rw);
                $('#jalan_tanah').val(data.jalan_tanah);
                $('#hak_id').val(data.hak_id);
                $('#no_hak').val(data.no_hak);
            });

            $('#isi_data').modal('hide');
           
        });

        $(document).on('change', '#kecamatan_id', function() {
            var kecamatan_id = $(this).val();
            if(kecamatan_id){
              $.get('get-kelurahan/' + kecamatan_id, function (data) {        
              $('#kelurahan_id').html(data);
            });
            }else{
              $('#kelurahan_id').html('<option value="">Pilih Kelurahan/Desa..</option>');
            }
        });

        $(document).on('change', '#kelurahan_id', function() {
            var kelurahan_id = $(this).val();
            if(kelurahan_id){
                $.get('get-kecamatan/' + kelurahan_id, function (data) {        
                    $('#kecamatan_id').val(data);
                });
            }
        });


        $(document).on('submit', '#post_permohonan', function(event) {
                event.preventDefault();

                    $('#lanjut').attr('disabled',true);
                    $('#lanjut').html('Loading..');

                    
                    $.ajax({
                        url:"{{ route('inputPtp') }}",
                        method: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            $("#lanjut").removeAttr("disabled");
                            $('#lanjut').html('Lanjut'); //tombol

                            if(!data.auth){
                                localStorage.setItem('pemohon_id', data.pemohon_id);
                            }

                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                icon: 'success',
                                title: 'Data berhasil diinput'
                                });

                                // console.log(data);


                                window.location.href = "redirect-ptp/"+data.permohonan_id;                        
                        },
                        error: function (err) { //jika error tampilkan error pada console
                                    console.log(err);
                                    
                                }
                    });

                });


      });
    </script>
@endsection