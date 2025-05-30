<?php

namespace App\Http\Controllers;

use App\Models\Hak;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\PemecahanPemisahan;
use App\Models\Pemohon;
use App\Models\PengukuranUlang;
use App\Models\Peningkatan;
use App\Models\PeralihanHak;
use App\Models\Permohonan;
use App\Models\Pertamakali;
use App\Models\Ptp;
use App\Models\Roya;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use iio\libmergepdf\Merger;
use Illuminate\Support\Str;


class BlankoController extends Controller
{
    public function index()
    {
        return view('blanko.index',[
            'title' => 'Kantah Banjar',
        ]);
    }

    public function historyBlanko($id)
    {
        $dt_permohonan = Permohonan::where('pemohon_id',$id)->get();
        return view('blanko.history',[
            'title' => 'Kantah Banjar',
            'dt_permohonan' => $dt_permohonan
        ]);

    }

    public function getKelurahan($id)
    {
        $dt_kelurahan = Kelurahan::where('kecamatan_id',$id)->get();
        foreach($dt_kelurahan as $d){
            echo '<option value="'.$d->id.'|'.$d->nm_kelurahan.'">'.$d->nm_kelurahan.'</option>';
        }
    }

    public function getKecamatan($id)
    {
        $dt_kelurahan = Kelurahan::where('id',$id)->first();
        echo $dt_kelurahan->kecamatan_id;
    }

    //peralihan hak

    public function peralihanHak()
    {
        return view('blanko.peralihan_hak',[
            'title' => 'Kantah Banjar',
            'hak' => Hak::all(),
            'kecamatan' => Kecamatan::all(),
            'kelurahan' => Kelurahan::all(),
        ]);
    }

    public function inputPeralihanHak(Request $request)
    {
        $rt = sprintf("%03d", $request->rt);
        $rw = sprintf("%03d", $request->rw);
        $no_hak = sprintf("%05d", $request->no_hak);
        $no_tiket = date('dmy').'1'.strtoupper(Str::random(5));
        if($request->terdaftar){

            $permohonan = Permohonan::create([
                'pemohon_id' => $request->pemohon_id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 1,
                'no_tiket' => $no_tiket,
            ]);

            PeralihanHak::create([
                'pemohon_id' => $request->pemohon_id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'jenis' => $request->jenis,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'nm_kuasa' => $request->nm_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jenis_tanah' => $request->jenis_tanah,
                'jalan_tanah' => $request->jalan_tanah,
            ]);

            $response = [
                'pemohon_id' => $request->pemohon_id,
                'auth' => true,
                'status' => true,
                'peralihan_hak_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }else{
            $pemohon = Pemohon::create([
                'tgl' => date('Y-m-d')
            ]);

            

            $permohonan = Permohonan::create([
                'pemohon_id' => $pemohon->id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 1,
                'no_tiket' => $no_tiket,
            ]);


            PeralihanHak::create([
                'pemohon_id' => $pemohon->id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'jenis' => $request->jenis,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'nm_kuasa' => $request->nm_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jenis_tanah' => $request->jenis_tanah,
                'jalan_tanah' => $request->jalan_tanah,
            ]);

            $response = [
                'pemohon_id' => $pemohon->id,
                'auth' => false,
                'status' => true,
                'peralihan_hak_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }
        
    }

    public function getDataPemohon($id,$pelayanan_id)
    {
        $dt_pemohon = Permohonan::where('pemohon_id',$id)->where('pelayanan_id',$pelayanan_id)->orderBy('id','DESC')->first();
        if($dt_pemohon){
            return response()->json($dt_pemohon);
        }else{
            $dt_pemohon = Permohonan::where('pemohon_id',$id)->orderBy('id','DESC')->first();
            return response()->json($dt_pemohon);
        }
        
    }

    public function redirectPeralihanHak($id)
    {
        $peralihan_hak = PeralihanHak::where('permohonan_id',$id)->with(['hak','kecamatan','kelurahan','permohonan'])->first();
        return view('blanko.redirect_peralihan_hak',[
            'title' => 'Kantah Banjar',
            'id' => $id,
            'peralihan_hak' => $peralihan_hak,
            'tgl' => Carbon::parse($peralihan_hak->created_at)->translatedFormat('d F Y'),
        ]);
    }

    public function pdfPeralihanHak($id)
    {
        $peralihan_hak = PeralihanHak::where('permohonan_id',$id)->with(['hak','kecamatan','kelurahan'])->first();
        $pdf = Pdf::loadView('blanko.pdf_peralihan_hak',[
            'peralihan_hak' => $peralihan_hak,
            'tgl' => Carbon::parse($peralihan_hak->created_at)->translatedFormat('d F Y')
        ])->setPaper('a4','portrait');
        return $pdf->download('Peralihan Hak.pdf');
        // return $pdf->stream();
    }

    // public function viewPeralihanHak($id)
    // {
    //     $peralihan_hak = PeralihanHak::where('id',$id)->with(['hak','kecamatan','kelurahan'])->first();
    //     return view('blanko.pdf_peralihan_hak',[
    //         'title' => 'Kantah Banjar',
    //         'peralihan_hak' => $peralihan_hak,
    //         'tgl' => Carbon::parse($peralihan_hak->created_at)->translatedFormat('d F Y'),
    //     ]);
    // }

    //end peralihan hak

    //pemecahan pemisahan
    public function pemecahanPemisahan()
    {
        return view('blanko.pemecahan_pemisahan',[
            'title' => 'Kantah Banjar',
            'hak' => Hak::all(),
            'kecamatan' => Kecamatan::all(),
            'kelurahan' => Kelurahan::all(),
        ]);
    }

    public function inputPemecahanPemisahan(Request $request)
    {
        $rt = sprintf("%03d", $request->rt);
        $rw = sprintf("%03d", $request->rw);
        $no_hak = sprintf("%05d", $request->no_hak);
        $no_tiket = date('dmy').'2'.strtoupper(Str::random(5));
        if($request->terdaftar){

            $permohonan = Permohonan::create([
                'pemohon_id' => $request->pemohon_id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 2,
                'no_tiket' => $no_tiket,
            ]);

            PemecahanPemisahan::create([
                'pemohon_id' => $request->pemohon_id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'jenis' => $request->jenis,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'nm_kuasa' => $request->nm_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jenis_tanah' => $request->jenis_tanah,
                'jalan_tanah' => $request->jalan_tanah,
                'luas' => $request->luas,
                'penggunaan_tanah' => $request->penggunaan_tanah,
                'rencana_tanah' => $request->rencana_tanah,
            ]);

            $response = [
                'pemohon_id' => $request->pemohon_id,
                'auth' => true,
                'status' => true,
                'pemecahan_pemisahan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }else{
            $pemohon = Pemohon::create([
                'tgl' => date('Y-m-d')
            ]);

            

            $permohonan = Permohonan::create([
                'pemohon_id' => $pemohon->id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 2,
                'no_tiket' => $no_tiket,
            ]);


            PemecahanPemisahan::create([
                'pemohon_id' => $pemohon->id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'jenis' => $request->jenis,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'nm_kuasa' => $request->nm_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jenis_tanah' => $request->jenis_tanah,
                'jalan_tanah' => $request->jalan_tanah,
                'luas' => $request->luas,
                'penggunaan_tanah' => $request->penggunaan_tanah,
                'rencana_tanah' => $request->rencana_tanah,
            ]);

            $response = [
                'pemohon_id' => $pemohon->id,
                'auth' => false,
                'status' => true,
                'pemecahan_pemisahan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }
        
    }

    public function redirectPemecahanPemisahan($id)
    {
        $pemecahan_pemisahan = PemecahanPemisahan::where('permohonan_id',$id)->with(['hak','kecamatan','kelurahan','permohonan'])->first();
        return view('blanko.redirect_pemecahan_pemisahan',[
            'title' => 'Kantah Banjar',
            'id' => $id,
            'pemecahan_pemisahan' => $pemecahan_pemisahan,
            'tgl' => Carbon::parse($pemecahan_pemisahan->created_at)->translatedFormat('d F Y'),
        ]);
    }

    public function pdfPemecahanPemisahan($id)
    {
        $pemecahan_pemisahan = PemecahanPemisahan::where('permohonan_id',$id)->with(['hak','kecamatan','kelurahan'])->first();
        $tgl = Carbon::parse($pemecahan_pemisahan->created_at)->translatedFormat('d F Y');
        $m = new Merger();

        $dompdf = Pdf::loadView('blanko.pdf_pemecahan_pemisahan1',[
            'pemecahan_pemisahan' => $pemecahan_pemisahan,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());
        unset($dompdf);

        $dompdf = Pdf::loadView('blanko.pdf_pemecahan_pemisahan2',[
            'pemecahan_pemisahan' => $pemecahan_pemisahan,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());

        file_put_contents('Pemecahan Pemisahan.pdf', $m->merge());

        return response()->download('Pemecahan Pemisahan.pdf');
        // return response()->file('ba.pdf');
    }
    //end pemecahan pemisahan

    //peningkatan
    public function peningkatan()
    {
        return view('blanko.peningkatan',[
            'title' => 'Kantah Banjar',
            'hak' => Hak::all(),
            'kecamatan' => Kecamatan::all(),
            'kelurahan' => Kelurahan::all(),
        ]);
    }

    public function inputPeningkatan(Request $request)
    {
        $no_hak = sprintf("%05d", $request->no_hak);
        $no_hak1 = $request->no_hak1 ? sprintf("%05d", $request->no_hak1) : '';
        $no_hak2 = $request->no_hak2 ? sprintf("%05d", $request->no_hak2) : '';
        $no_hak3 = $request->no_hak3 ? sprintf("%05d", $request->no_hak3) : '';
        $no_hak4 = $request->no_hak4 ? sprintf("%05d", $request->no_hak4) : '';
        $no_tiket = date('dmy').'5'.strtoupper(Str::random(5));
        if($request->terdaftar){

            $permohonan = Permohonan::create([
                'pemohon_id' => $request->pemohon_id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 5,
                'no_tiket' => $no_tiket,
            ]);

            Peningkatan::create([
                'pemohon_id' => $request->pemohon_id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
                'alamat_kuasa' => $request->alamat_kuasa,
                'jalan_tanah' => $request->jalan_tanah,
                'tgl_hak' => $request->tgl_hak,
                'nik' => $request->nik,
                'tahun_sppt' => $request->tahun_sppt,
                'no_hak1' => $no_hak1,
                'tgl_hak1' => $request->tgl_hak1,
                'jalan_hak1' => $request->jalan_hak1,
                'no_hak2' => $no_hak2,
                'tgl_hak2' => $request->tgl_hak2,
                'jalan_hak2' => $request->jalan_hak2,
                'no_hak3' => $no_hak3,
                'tgl_hak3' => $request->tgl_hak3,
                'jalan_hak3' => $request->jalan_hak3,
                'no_hak4' => $no_hak4,
                'tgl_hak4' => $request->tgl_hak4,
                'jalan_hak4' => $request->jalan_hak4,
            ]);

            $response = [
                'pemohon_id' => $request->pemohon_id,
                'auth' => true,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }else{
            $pemohon = Pemohon::create([
                'tgl' => date('Y-m-d')
            ]);

            

            $permohonan = Permohonan::create([
                'pemohon_id' => $pemohon->id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 5,
                'no_tiket' => $no_tiket,
            ]);


            Peningkatan::create([
                'pemohon_id' => $pemohon->id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
                'alamat_kuasa' => $request->alamat_kuasa,
                'jalan_tanah' => $request->jalan_tanah,
                'tgl_hak' => $request->tgl_hak,
                'nik' => $request->nik,
                'tahun_sppt' => $request->tahun_sppt,
                'no_hak1' => $request->no_hak1,
                'tgl_hak1' => $request->tgl_hak1,
                'jalan_hak1' => $request->jalan_hak1,
                'no_hak2' => $request->no_hak2,
                'tgl_hak2' => $request->tgl_hak2,
                'jalan_hak2' => $request->jalan_hak2,
                'no_hak3' => $request->no_hak3,
                'tgl_hak3' => $request->tgl_hak3,
                'jalan_hak3' => $request->jalan_hak3,
                'no_hak4' => $request->no_hak4,
                'tgl_hak4' => $request->tgl_hak4,
                'jalan_hak4' => $request->jalan_hak4,
            ]);

            $response = [
                'pemohon_id' => $pemohon->id,
                'auth' => true,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }
        
    }

    public function redirectPeningkatan($id)
    {
        $peningkatan = Peningkatan::where('permohonan_id',$id)->with(['kecamatan','kelurahan','permohonan'])->first();
        return view('blanko.redirect_peningkatan',[
            'title' => 'Kantah Banjar',
            'id' => $id,
            'peningkatan' => $peningkatan,
            'tgl' => Carbon::parse($peningkatan->created_at)->translatedFormat('d F Y'),
        ]);
    }

    public function pdfPeningkatan($id)
    {
        $peningkatan = Peningkatan::where('permohonan_id',$id)->with(['kecamatan','kelurahan'])->first();
        $tgl = Carbon::parse($peningkatan->created_at)->translatedFormat('d F Y');
        $m = new Merger();

        $dompdf = Pdf::loadView('blanko.pdf_peningkatan1',[
            'peningkatan' => $peningkatan,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());
        unset($dompdf);

        $dompdf = Pdf::loadView('blanko.pdf_peningkatan2',[
            'peningkatan' => $peningkatan,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());

        file_put_contents('Peningkatan.pdf', $m->merge());

        return response()->download('Peningkatan.pdf');
        // return response()->file('ba.pdf');
    }
    //end peningkatan

    //roya
    public function roya()
    {
        return view('blanko.roya',[
            'title' => 'Kantah Banjar',
            'kecamatan' => Kecamatan::all(),
            'kelurahan' => Kelurahan::all(),
        ]);
    }

    public function inputRoya(Request $request)
    {
        $no_hak = sprintf("%05d", $request->no_hak);

        $no_tiket = date('dmy').'6'.strtoupper(Str::random(5));
        if($request->terdaftar){

            $permohonan = Permohonan::create([
                'pemohon_id' => $request->pemohon_id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 6,
                'no_tiket' => $no_tiket,
            ]);

            Roya::create([
                'pemohon_id' => $request->pemohon_id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'umur_kuasa' => $request->umur_kuasa,
                'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
                'nik_kuasa' => $request->nik_kuasa,
                'alamat_kuasa' => $request->alamat_kuasa,
                'no_surat_kuasa' => $request->no_surat_kuasa,
                'tgl_surat_kuasa' => $request->tgl_surat_kuasa,
                'jalan_tanah' => $request->jalan_tanah,
            ]);

            $response = [
                'pemohon_id' => $request->pemohon_id,
                'auth' => true,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }else{
            $pemohon = Pemohon::create([
                'tgl' => date('Y-m-d')
            ]);

            

            $permohonan = Permohonan::create([
                'pemohon_id' => $pemohon->id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 6,
                'no_tiket' => $no_tiket,
            ]);


            Roya::create([
                'pemohon_id' => $pemohon->id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'umur_kuasa' => $request->umur_kuasa,
                'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
                'nik_kuasa' => $request->nik_kuasa,
                'alamat_kuasa' => $request->alamat_kuasa,
                'no_surat_kuasa' => $request->no_surat_kuasa,
                'tgl_surat_kuasa' => $request->tgl_surat_kuasa,
                'jalan_tanah' => $request->jalan_tanah,
            ]);

            $response = [
                'pemohon_id' => $pemohon->id,
                'auth' => true,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }
        
    }

    public function redirectRoya($id)
    {
        $roya = Roya::where('permohonan_id',$id)->with(['kecamatan','kelurahan','permohonan'])->first();
        return view('blanko.redirect_roya',[
            'title' => 'Kantah Banjar',
            'id' => $id,
            'roya' => $roya,
            'tgl' => Carbon::parse($roya->created_at)->translatedFormat('d F Y'),
        ]);
    }

    public function pdfRoya($id)
    {
        $roya = Roya::where('permohonan_id',$id)->with(['kecamatan','kelurahan'])->first();
        $pdf = Pdf::loadView('blanko.pdf_roya',[
            'roya' => $roya,
            'tgl' => Carbon::parse($roya->created_at)->translatedFormat('d F Y')
        ])->setPaper('a4','portrait');
        return $pdf->download('Permohonan.pdf');
        // return $pdf->stream();
    }

    //endroya

    //pengkuran ulang
    public function pengukuranUlang()
    {
        return view('blanko.pengukuran_ulang',[
            'title' => 'Kantah Banjar',
            'kecamatan' => Kecamatan::all(),
            'kelurahan' => Kelurahan::all(),
        ]);
    }

    public function inputPengukuranUlang(Request $request)
    {
        $rt = sprintf("%03d", $request->rt);
        $rw = sprintf("%03d", $request->rw);
        $no_hak = sprintf("%05d", $request->no_hak);
        $no_tiket = date('dmy').'2'.strtoupper(Str::random(5));
        if($request->terdaftar){

            $permohonan = Permohonan::create([
                'pemohon_id' => $request->pemohon_id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 3,
                'no_tiket' => $no_tiket,
            ]);

            PengukuranUlang::create([
                'pemohon_id' => $request->pemohon_id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jenis_tanah' => $request->jenis_tanah,
                'jalan_tanah' => $request->jalan_tanah,
                'luas' => $request->luas,
                'umur' => $request->umur,
                'nik' => $request->nik,
                'no_persil' => $request->no_persil,
                'kelas' => $request->kelas,
                'utara' => $request->utara,
                'timur' => $request->timur,
                'selatan' => $request->selatan,
                'barat' => $request->barat,
            ]);

            $response = [
                'pemohon_id' => $request->pemohon_id,
                'auth' => true,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }else{
            $pemohon = Pemohon::create([
                'tgl' => date('Y-m-d')
            ]);

            

            $permohonan = Permohonan::create([
                'pemohon_id' => $pemohon->id,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 3,
                'no_tiket' => $no_tiket,
            ]);


            PemecahanPemisahan::create([
                'pemohon_id' => $pemohon->id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jenis_tanah' => $request->jenis_tanah,
                'jalan_tanah' => $request->jalan_tanah,
                'luas' => $request->luas,
                'umur' => $request->umur,
                'nik' => $request->nik,
                'no_persil' => $request->no_persil,
                'kelas' => $request->kelas,
                'utara' => $request->utara,
                'timur' => $request->timur,
                'selatan' => $request->selatan,
                'barat' => $request->barat,
            ]);

            $response = [
                'pemohon_id' => $pemohon->id,
                'auth' => false,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }
        
    }

    public function redirectPengukuranUlang($id)
    {
        $pengukuran_ulang = PengukuranUlang::where('permohonan_id',$id)->with(['kecamatan','kelurahan','permohonan'])->first();
        return view('blanko.redirect_pengukuran_ulang',[
            'title' => 'Kantah Banjar',
            'id' => $id,
            'pengukuran_ulang' => $pengukuran_ulang,
            'tgl' => Carbon::parse($pengukuran_ulang->created_at)->translatedFormat('d F Y'),
        ]);
    }

    public function pdfPengukuranUlang($id)
    {
        $pengukuran_ulang = PengukuranUlang::where('permohonan_id',$id)->with(['kecamatan','kelurahan'])->first();
        $tgl = Carbon::parse($pengukuran_ulang->created_at)->translatedFormat('d F Y');
        $m = new Merger();

        $dompdf = Pdf::loadView('blanko.pdf_pengukuran_ulang1',[
            'pengukuran_ulang' => $pengukuran_ulang,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());
        unset($dompdf);

        $dompdf = Pdf::loadView('blanko.pdf_pengukuran_ulang2',[
            'pengukuran_ulang' => $pengukuran_ulang,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());
        unset($dompdf);

        $dompdf = Pdf::loadView('blanko.pdf_pengukuran_ulang3',[
            'pengukuran_ulang' => $pengukuran_ulang,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());

        file_put_contents('pengukuran_ulang.pdf', $m->merge());

        return response()->download('pengukuran_ulang.pdf');
        // return response()->file('ba.pdf');
    }
    //end pengkuran ulang

    //ptp
    public function ptp()
    {
        return view('blanko.ptp',[
            'title' => 'Kantah Banjar',
            'hak' => Hak::all(),
            'kecamatan' => Kecamatan::all(),
            'kelurahan' => Kelurahan::all(),
        ]);
    }

    public function inputPtp(Request $request)
    {
        $rt = sprintf("%03d", $request->rt);
        $rw = sprintf("%03d", $request->rw);
        $no_hak = sprintf("%05d", $request->no_hak);
        $no_tiket = date('dmy').'2'.strtoupper(Str::random(5));
        if($request->terdaftar){

            $permohonan = Permohonan::create([
                'pemohon_id' => $request->pemohon_id,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 4,
                'no_tiket' => $no_tiket,
            ]);

            Ptp::create([
                'pemohon_id' => $request->pemohon_id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jalan_tanah' => $request->jalan_tanah,
                'luas' => $request->luas,
                'nik' => $request->nik,
                'no_nib' => $request->no_nib,
                'keperluan' => $request->keperluan,
                'hak_id' => $request->hak_id,
                'penggunaan_tanah' => $request->penggunaan_tanah,
                'nm_sertifikat' => $request->nm_sertifikat,
            ]);

            $response = [
                'pemohon_id' => $request->pemohon_id,
                'auth' => true,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }else{
            $pemohon = Pemohon::create([
                'tgl' => date('Y-m-d')
            ]);

            

            $permohonan = Permohonan::create([
                'pemohon_id' => $pemohon->id,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'hak_id' => $request->hak_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 4,
                'no_tiket' => $no_tiket,
            ]);


            Ptp::create([
                'pemohon_id' => $pemohon->id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jalan_tanah' => $request->jalan_tanah,
                'luas' => $request->luas,
                'nik' => $request->nik,
                'no_nib' => $request->no_nib,
                'keperluan' => $request->keperluan,
                'hak_id' => $request->hak_id,
                'penggunaan_tanah' => $request->penggunaan_tanah,
                'nm_sertifikat' => $request->nm_sertifikat,
            ]);

            $response = [
                'pemohon_id' => $pemohon->id,
                'auth' => false,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }
        
    }

    public function redirectPtp($id)
    {
        $ptp = Ptp::where('permohonan_id',$id)->with(['kecamatan','kelurahan','permohonan'])->first();
        return view('blanko.redirect_ptp',[
            'title' => 'Kantah Banjar',
            'id' => $id,
            'ptp' => $ptp,
            'tgl' => Carbon::parse($ptp->created_at)->translatedFormat('d F Y'),
        ]);
    }

    public function pdfPtp($id)
    {
        $ptp = Ptp::where('permohonan_id',$id)->with(['kecamatan','kelurahan'])->first();
        $tgl = Carbon::parse($ptp->created_at)->translatedFormat('d F Y');
        $m = new Merger();

        $dompdf = Pdf::loadView('blanko.pdf_ptp1',[
            'ptp' => $ptp,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());
        unset($dompdf);

        $dompdf = Pdf::loadView('blanko.pdf_ptp2',[
            'ptp' => $ptp,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());
        unset($dompdf);

        $dompdf = Pdf::loadView('blanko.pdf_ptp3',[
            'ptp' => $ptp,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());

        file_put_contents('ptp.pdf', $m->merge());

        return response()->download('ptp.pdf');
        // return response()->file('ba.pdf');
    }
    //end ptp

    //pertamakali
    public function pertamakali()
    {
        return view('blanko.pertamakali',[
            'title' => 'Kantah Banjar',
            'kecamatan' => Kecamatan::all(),
            'kelurahan' => Kelurahan::all(),
        ]);
    }

    public function inputPertamakali(Request $request)
    {
        $rt = sprintf("%03d", $request->rt);
        $rw = sprintf("%03d", $request->rw);
        $no_hak = sprintf("%05d", $request->no_hak);
        $no_tiket = date('dmy').'2'.strtoupper(Str::random(5));
        if($request->terdaftar){

            $permohonan = Permohonan::create([
                'pemohon_id' => $request->pemohon_id,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 7,
                'no_tiket' => $no_tiket,
            ]);

            Pertamakali::create([
                'pemohon_id' => $request->pemohon_id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jalan_tanah' => $request->jalan_tanah,
                'luas' => $request->luas,
                'nik' => $request->nik,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'no_persil' => $request->no_persil,
                'kelas' => $request->kelas,
                'utara' => $request->utara,
                'timur' => $request->timur,
                'selatan' => $request->selatan,
                'barat' => $request->barat,
                'jenis_tanah' => $request->jenis_tanah,
            ]);

            $response = [
                'pemohon_id' => $request->pemohon_id,
                'auth' => true,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }else{
            $pemohon = Pemohon::create([
                'tgl' => date('Y-m-d')
            ]);

            

            $permohonan = Permohonan::create([
                'pemohon_id' => $pemohon->id,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'rt' => $rt,
                'rw' => $rw,
                'kelurahan_id' => $request->kelurahan_id,
                'kecamatan_id' => $request->kecamatan_id,
                'no_hak' => $no_hak,
                'jalan_tanah' => $request->jalan_tanah,
                'pelayanan_id' => 7,
                'no_tiket' => $no_tiket,
            ]);


            Pertamakali::create([
                'pemohon_id' => $pemohon->id,
                'permohonan_id' => $permohonan->id,
                'kecamatan_id' => $request->kecamatan_id,
                'kelurahan_id' => $request->kelurahan_id,
                'no_hak' => $no_hak,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nama_kuasa' => $request->nama_kuasa,
                'rt' => $rt,
                'rw' => $rw,
                'jalan_tanah' => $request->jalan_tanah,
                'luas' => $request->luas,
                'nik' => $request->nik,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'no_persil' => $request->no_persil,
                'kelas' => $request->kelas,
                'utara' => $request->utara,
                'timur' => $request->timur,
                'selatan' => $request->selatan,
                'barat' => $request->barat,
                'jenis_tanah' => $request->jenis_tanah,
            ]);

            $response = [
                'pemohon_id' => $pemohon->id,
                'auth' => false,
                'status' => true,
                'permohonan_id' => $permohonan->id,
            ];
    
            return response()->json($response);

        }
        
    }

    public function redirectPertamakali($id)
    {
        $pertamakali = Pertamakali::where('permohonan_id',$id)->with(['kecamatan','kelurahan','permohonan'])->first();
        return view('blanko.redirect_pertamakali',[
            'title' => 'Kantah Banjar',
            'id' => $id,
            'pertamakali' => $pertamakali,
            'tgl' => Carbon::parse($pertamakali->created_at)->translatedFormat('d F Y'),
        ]);
    }

    public function pdfPertamakali($id)
    {
        $pertamakali = Pertamakali::where('permohonan_id',$id)->with(['kecamatan','kelurahan'])->first();
        $tgl = Carbon::parse($pertamakali->created_at)->translatedFormat('d F Y');
        $m = new Merger();

        $dompdf = Pdf::loadView('blanko.pdf_pertamakali1',[
            'pertamakali' => $pertamakali,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());
        unset($dompdf);

        $dompdf = Pdf::loadView('blanko.pdf_pertamakali2',[
            'pertamakali' => $pertamakali,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());
        unset($dompdf);

        $dompdf = Pdf::loadView('blanko.pdf_pertamakali3',[
            'pertamakali' => $pertamakali,
            'tgl' => $tgl,
            ])->setPaper('a4','portrait');
        $m->addRaw($dompdf->output());

        file_put_contents('pertamakali.pdf', $m->merge());

        return response()->download('pertamakali.pdf');
        // return response()->file('ba.pdf');
    }
    //end pertamakali


    public function testWord()
    {
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('blanko/Permohonan PKKPR Utk Kegiatan Non Berusaha.docx'));


        $templateProcessor->setValues([
            'nama' => 'Aulia Rakhman',
            'nik' => '2343242343242342',
            'nib' => '74646',
            'alamat' => 'Jalanan aja ouuyyy',
            'an' => 'wkwkwk',
            'no_sk' => '17/SKP/UP/2025',
            'tgl' => date('d/m/Y'),
        ]);

        header("Content-Disposition: attachment; filename=PKKPR Utk Kegiatan Non Berusaha.docx");

        $templateProcessor->saveAs('php://output');

    }
    

}
