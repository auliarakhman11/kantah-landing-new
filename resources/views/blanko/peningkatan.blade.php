@extends('template.master')
@section('content')

      <!-- ======= Hero Section ======= -->

  <main id="main">

    <section id="features" class="features mt-5">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h4>Blanko Permohonan Peningkatan</h4>
            {{-- <p>Informasi persyaratan berkas Kantor Pertanhan Kabupaten Banjar</p> --}}
            <a href="{{ route('blanko') }}" class="btn btn-sm btn-success"><i class="ri-arrow-left-fill"></i> Kembali</a>
            
            
          </div>

        </div>

        <div class="container-fluid" data-aos="fade-up">
            <form id="post_permohonan">
                <div class="row">
                    <input type="hidden" name="terdaftar" id="terdaftar">
                    <input type="hidden" name="pemohon_id" id="pemohon_id">
    
                    <div class="col-12">
                        <p>Yang bertanda tangan dibawah ini :</p>
                    </div>
    
                    <div class="col-6 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                    </div>
    
    
                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
                        </div>
                    </div>
    
                    <div class="col-12 col-md-6 mt-2">
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" required>
                        </div>
                    </div>

                    <div class="col-12">
                        <p>Dalam hal ini bertindak untuk dan atas nama serta selaku kuasa dari :</p>
                    </div>

                    <div class="col-6 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama_kuasa" id="nama" >
                        </div>
                    </div>
    
    
                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan_kuasa" id="pekerjaan" >
                        </div>
                    </div>
    
                    <div class="col-12 col-md-6 mt-2">
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat_kuasa" id="alamat" >
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <p>Dengan ini mengajukan permohonan perubahan hak atas sebidang tanah untuk perumahan yang terletak di:</p>
                    </div>
    
                    <div class="col-12 col-md-6 mt-2">
                        <div class="form-group">
                            <label for="">Jalan</label>
                            <input type="text" class="form-control" name="jalan_tanah" id="jalan_tanah" required>
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
                            <label for="">Desa/Kelurahan</label>
                            <select name="kelurahan_id" class="form-control" id="kelurahan_id" required>
                                <option value="">-Pilih Kelurahan-</option>
                                @foreach ($kelurahan as $kl)
                                    <option value="{{ $kl->id }}">{{ $kl->nm_kelurahan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <p>Yang semula terdaftar sebagai Milik Hak Guna Bangunan</p>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Nomor:</label>
                            <input type="text" class="form-control" name="no_hak" id="no_hak" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Tanggal:</label>
                            <input type="date" class="form-control" name="tgl_hak" id="tgl_hak" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" class="form-control" name="nik" id="nik" required>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-2">
                        <div class="form-group">
                            <label for="">Tahun SPPT-Pbb</label>
                            <input type="text" class="form-control" name="tahun_sppt" id="tahun_sppt" required>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <h3 class="text-center"><b><u>SURAT PENYATAAN</u></b></h3>
                    </div>

                    <div class="col-12 mt-2">
                        <p style="text-align: justify;">- Dengan perolehan Hak Milik yang kami mohon ini, akan mempunyai Hak Milik atas tanah untuk Rumah Tinggal tidak lebih dari 5 (lima) bidang yang seluruhnya meliputi luas tidak lebih dari 5000 (lima ribu) M<sup>2</sup>. <br><br>
                        - Hak Milik atas tanah untuk Rumah Tinggal yang kami punyai pada waktu ini adalah:
                        </p>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <td>1. HM No.</td>
                                        <td><input type="text" class="form-control form-control-sm" name="no_hak1"></td>
                                        <td>/</td>
                                        <td><input type="date" class="form-control form-control-sm" name="tgl_hak1"></td>
                                        <td>Terletak di</td>
                                        <td><input type="text" class="form-control form-control-sm" name="jalan_hak1"></td>
                                    </tr>

                                    <tr>
                                        <td>2. HM No.</td>
                                        <td><input type="text" class="form-control form-control-sm" name="no_hak2"></td>
                                        <td>/</td>
                                        <td><input type="date" class="form-control form-control-sm" name="tgl_hak2"></td>
                                        <td>Terletak di</td>
                                        <td><input type="text" class="form-control form-control-sm" name="jalan_hak2"></td>
                                    </tr>

                                    <tr>
                                        <td>3. HM No.</td>
                                        <td><input type="text" class="form-control form-control-sm" name="no_hak3"></td>
                                        <td>/</td>
                                        <td><input type="date" class="form-control form-control-sm" name="tgl_hak3"></td>
                                        <td>Terletak di</td>
                                        <td><input type="text" class="form-control form-control-sm" name="jalan_hak3"></td>
                                    </tr>

                                    <tr>
                                        <td>4. HM No.</td>
                                        <td><input type="text" class="form-control form-control-sm" name="no_hak4"></td>
                                        <td>/</td>
                                        <td><input type="date" class="form-control form-control-sm" name="tgl_hak4"></td>
                                        <td>Terletak di</td>
                                        <td><input type="text" class="form-control form-control-sm" name="jalan_hak4"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

    

                    <div class="col-12 col-md-6">
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
                $('#jalan_tanah').val(data.jalan_tanah);
                $('#no_hak').val(data.no_hak);
                $('#kewarganegaraan').val(data.kewarganegaraan);
                $('#nik').val(data.nik);
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
                        url:"{{ route('inputPeningkatan') }}",
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


                                window.location.href = "redirect-peningkatan/"+data.permohonan_id;                        
                        },
                        error: function (err) { //jika error tampilkan error pada console
                                    console.log(err);
                                    
                                }
                    });

                });


      });
    </script>
@endsection