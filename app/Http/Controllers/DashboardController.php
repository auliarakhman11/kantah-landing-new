<?php

namespace App\Http\Controllers;

use App\Models\FormulirPeralihanHak;
use App\Models\FormulirRoya;
use App\Models\GantiNamaHt;
use App\Models\GantiNamaSertipikat;
use App\Models\MergerHakTanggungan;
use App\Models\PelunasanBphtb;
use App\Models\PenataanBatas;
use App\Models\PendaftaranKedua;
use App\Models\PendaftaranKetiga;
use App\Models\PendaftaranPertama;
use App\Models\PerubahanHakPeningkatan;
use App\Models\PerubahanHakPenurunan;
use App\Models\PisahPecahGabung;
use App\Models\SertipikatHilang;
use App\Models\SertipikatRusak;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $all = [];

        $pendaftaran1 = PendaftaranPertama::with(['kecamatan','kelurahan'])->get();
        foreach ($pendaftaran1 as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Pendaftaran Tanah Pertamakali I'
            ];
        }

        $pendaftaran2 = PendaftaranKedua::with(['kecamatan','kelurahan'])->get();
        foreach ($pendaftaran2 as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Pendaftaran Tanah Pertamakali II'
            ];
        }

        $pendaftaran3 = PendaftaranKetiga::with(['kecamatan','kelurahan'])->get();
        foreach ($pendaftaran3 as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Pendaftaran Tanah Pertamakali III'
            ];
        }

        $peralihan_hak = FormulirPeralihanHak::with(['kecamatan','kelurahan'])->get();
        foreach ($peralihan_hak as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Peralihan Hak'
            ];
        }

        $ganti_nama_ht = GantiNamaHt::with(['kecamatan','kelurahan'])->get();
        foreach ($ganti_nama_ht as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Ganti Nama Hak Tanggungan'
            ];
        }

        $ganti_nama_sertipikat = GantiNamaSertipikat::with(['kecamatan','kelurahan'])->get();
        foreach ($ganti_nama_sertipikat as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Ganti Nama Sertipikat'
            ];
        }

        $merger_hak_tanggungan = MergerHakTanggungan::with(['kecamatan','kelurahan'])->get();
        foreach ($merger_hak_tanggungan as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Merger Hak Tanggungan'
            ];
        }

        $pisah_pecah_gabung = PisahPecahGabung::with(['kecamatan','kelurahan'])->get();
        foreach ($pisah_pecah_gabung as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Pisah Pecah Gabung'
            ];
        }

        $penataan_batas = PenataanBatas::with(['kecamatan','kelurahan'])->get();
        foreach ($penataan_batas as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Penataan Batas'
            ];
        }

        $pelunasan_bphtb = PelunasanBphtb::with(['kecamatan','kelurahan'])->get();
        foreach ($pelunasan_bphtb as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Pencatatan Pelunasan BPHTB'
            ];
        }

        $peningkatan = PerubahanHakPeningkatan::with(['kecamatan','kelurahan'])->get();
        foreach ($peningkatan as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Perubahan Hak Peningkatan'
            ];
        }

        $penurunan = PerubahanHakPenurunan::with(['kecamatan','kelurahan'])->get();
        foreach ($penurunan as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Perubahan Hak Penurunan'
            ];
        }

        $roya = FormulirRoya::with(['kecamatan','kelurahan'])->get();
        foreach ($roya as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Roya'
            ];
        }

        $sertipikat_rusak = SertipikatRusak::with(['kecamatan','kelurahan'])->get();
        foreach ($sertipikat_rusak as $d ) {
            $all [] = [
                'nik' => $d->nik,
                'nama' => $d->nama,
                'umur' => $d->umur,
                'pekerjaan' => $d->pekerjaan,
                'alamat' => $d->alamat,
                'no_tlpn' => $d->no_tlpn,
                'tgl' => $d->tgl,
                'nm_kecamatan' => $d->kecamatan ? $d->kecamatan->nm_kecamatan : '',
                'nm_kelurahan' => $d->kelurahan ? $d->kelurahan->nm_kelurahan : '',
                'alamat_tanah' => $d->alamat_tanah,
                'jenis_hak' => $d->jenis_hak ? 'Hak '. $d->jenis_hak : '',
                'nomor_hak' => $d->nomor_hak ? $d->nomor_hak : '',
                'permohonan' => 'Sertipikat Pengganti Karena Rusak, Lama'
            ];
        }

        return view('dashboard.index',[
            'title' => 'Dashboard | Kantah Banjar',
            'pendaftaran1' => $pendaftaran1,
            'pendaftaran2' => $pendaftaran2,
            'pendaftaran3' => $pendaftaran3,
            'peralihan_hak' => $peralihan_hak,
            'ganti_nama_ht' => $ganti_nama_ht,
            'ganti_nama_sertipikat' => $ganti_nama_sertipikat,
            'merger_hak_tanggungan' => $merger_hak_tanggungan,
            'pisah_pecah_gabung' => $pisah_pecah_gabung,
            'penataan_batas' => $penataan_batas,
            'pelunasan_bphtb' => $pelunasan_bphtb,
            'peningkatan' => $peningkatan,
            'penurunan' => $penurunan,
            'roya' => $roya,
            'sertipikat_rusak' => $sertipikat_rusak,
            'all' => collect($all)->sortBy('tgl')->reverse()->toArray(),
        ]);
    }
}
