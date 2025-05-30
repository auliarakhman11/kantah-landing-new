@extends('template.master')
@section('content')
<main id="main">
    <section id="about-us" class="about-us mt-5">
        <div class="container" data-aos="fade-up">
    
          <div class="row content">
            <div class="col-8" data-aos="fade-right mb-3">
              <h5>Pengajuan Pengukuran Ulang</h5>
            </div>
            <div class="col-4" data-aos="fade-right mb-3">
                <a href="{{ route('Persyaratan') }}" class="float-right mt-2"><i class="ri-arrow-left-circle-line" style="color: #29cc61;"></i> Kembali</a>
                <a href="{{ route('PpuPdf') }}" class="btn btn-sm btn-success btn-rounded float-right mt-3">Download</a>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              {{-- <p><b><u>Pencatatan Pelunasan BPHTB/PPH</u></b></p> --}}
              <ul>
                <li><i class="ri-check-double-line"></i> FC Sertipikat Pemilik/FC Sertipikat Tetangga Yang Berbatasan Langsung 1 Lbr</li>
                <li><i class="ri-check-double-line"></i> Asli & FC KTP & KK Pemilik Sertipikat</li>
                <li><i class="ri-check-double-line"></i> Untuk Pemohon Sertipikat Hilang : Melampirkan Surat Pengantar Dari RT atau Kelurahan/Desa</li>
                <li><i class="ri-check-double-line"></i> Surat Kuasa Bermeterai (Jika Yang Mendaftar Bukan Pemilik Tanah)</li>
                <li><i class="ri-check-double-line"></i> FC KTP & KK Penerima Kuasa 1 lbr</li>
                <li><i class="ri-check-double-line"></i> Foto Lokasi Dengan Aplikasi Geotag (Bagikan Via Email pendaftaran.kantahkab.banjar@gmail.com)</li>
              </ul>
              {{-- <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p> --}}
            </div>            

          </div>
    
        </div>
      </section><!-- End About Us Section -->
</main>

@endsection
@section('script')
    
@endsection
<!-- ======= About Us Section ======= -->