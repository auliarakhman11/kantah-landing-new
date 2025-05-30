<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersyaratanController extends Controller
{
    public function index()
    {
        return view('persyaratan.index', [
            'title' => 'Persyaratan Peralihan Hak',
        ]);
    }

    public function Pph()
    {
        return view('persyaratan.pph', [
            'title' => 'Izin Perubahan Penggunaan Tanah',
            // 'active' => DB::table('component_active')->select('*')->first(),
        ]);
    }

    public function PphDisabilitas()
    {
        return view('persyaratan.pph_disabilitas', [
            'title' => 'Kantah Banjar',
        ]);
    }

    public function Ippt()
    {
        return view('persyaratan.ippt', [
            'title' => 'Izin Perubahan Penggunaan Tanah (IPPT)',
            // 'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function Bphtb()
    {
        return view('persyaratan.bphtb', [
            'title' => 'Persyaratan Pencatatan Pelunasan BPHTB/PPH',
            // 'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function Skpt()
    {
        return view('persyaratan.skpt', [
            'title' => 'Kantah Banjar',
            'active' => DB::table('component_active')->select('*')->first(),
        ]);
    }

    public function Psp()
    {
        return view('persyaratan.psp', [
            'title' => 'Kantah Banjar',
            'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function Ppu()
    {
        return view('persyaratan.ppu', [
            'title' => 'Kantah Banjar',
        ]);
    }

    public function Pppp()
    {
        return view('persyaratan.pppp', [
            'title' => 'Pemecahan, Pemisahan, Penggabungan',
            // 'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function RubahHak()
    {
        return view('persyaratan.rubah_hak', [
            'title' => 'Persyaratan Perubahan Hak (Hak Guna Bangunan Ke Hak Milik)',
            // 'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function roya()
    {
        return view('persyaratan.roya', [
            'title' => 'Persyaratan Roya',
            // 'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function penurunan()
    {
        return view('persyaratan.penurunan', [
            'title' => 'Penurunan',
            // 'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function lelang()
    {
        return view('persyaratan.lelang', [
            'title' => 'Ganti Nama Sertifikat',
            // 'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function pengecekan()
    {
        return view('persyaratan.pengecekan', [
            'title' => 'Persyaratan Pengecekan Sertipikat',
            // 'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function pps()
    {
        return view('persyaratan.pps', [
            'title' => 'Persyaratan Permohonan Sertifikat',
            // 'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function pengajuan()
    {
        return view('persyaratan.pengajuan', [
            'title' => 'Pengajuan',
            'active' => DB::table('component_active')->select('*')->first()
        ]);
    }

    public function pengajuanPdf()
    {
        return response()->download('/home/u1721841/public_html/kantahkabbanjar.com/permohonan/FORMULIR Roya, SKPT, Pencatatan.pdf');
    }

    public function ppsPdf()
    {
        // $pdf = Pdf::loadView('persyaratan.pps_pdf',['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4','portrait');
        // return $pdf->download('Persyaratan Permohonan Sertifikat.pdf');
        return response()->download('/home/u1721841/public_html/kantahkabbanjar.com/permohonan/Permohonan Hak.pdf');
    }

    public function royaPdf()
    {
        // $pdf = Pdf::loadView('persyaratan.roya_pdf',['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4','portrait');
        // return $pdf->download('Persyaratan Roya.pdf');
        return response()->download('/home/u1721841/public_html/kantahkabbanjar.com/permohonan/FORMULIR Roya, SKPT, Pencatatan.pdf');
    }

    public function PphPdf()
    {
        // $pdf = Pdf::loadView('persyaratan.pph_pdf',['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4','portrait');
        // return $pdf->download('Persyaratan Peralihan Hak.pdf');
        return response()->download('/home/u1721841/public_html/kantahkabbanjar.com/permohonan/Peralihan Hak.pdf');
    }

    public function PphDisabilitasPdf()
    {
        $pdf = Pdf::loadView('persyaratan.pph_disabilitas_pdf')->setPaper('a4', 'portrait');
        return $pdf->download('Persyaratan Peralihan Hak (Disabilitas).pdf');
    }

    public function IpptPdf()
    {
        $pdf = Pdf::loadView('persyaratan.ippt_pdf', ['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4', 'portrait');
        return $pdf->download('Persyaratan IPPT.pdf');
    }

    public function BphtbPdf()
    {
        $pdf = Pdf::loadView('persyaratan.bphtd_pdf', ['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4', 'portrait');
        return $pdf->download('Persyaratan Pencatatan Pelunasan BPHTB/PPH.pdf');
    }

    public function SkptPdf()
    {
        $pdf = Pdf::loadView('persyaratan.skpt_pdf', ['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4', 'portrait');
        return $pdf->download('Pengajuan Surat Keterangan Pendaftaran Tanah (SKPT).pdf');
    }

    public function PspPdf()
    {
        $pdf = Pdf::loadView('persyaratan.psp_pdf', ['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4', 'portrait');
        return $pdf->download('Pengajuan Permohonan Sertifikat Pengganti Karena Hilang.pdf');
    }

    public function PpuPdf()
    {
        $pdf = Pdf::loadView('persyaratan.ppu_pdf')->setPaper('a4', 'portrait');
        return $pdf->download('Pengajuan Pengukuran Ulang.pdf');
    }

    public function PpppPdf()
    {
        // $pdf = Pdf::loadView('persyaratan.pppp_pdf',['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4','portrait');
        // return $pdf->download('Persyaratan Permohonan Pemecahan, Pemisahan, Penggabungan.pdf');
        return response()->download('/home/u1721841/public_html/kantahkabbanjar.com/permohonan/SURAT PERNYATAAN PEMOHON pemisahan dan pemecahan.pdf');
    }

    public function RubahHakPdf()
    {
        // $pdf = Pdf::loadView('persyaratan.rubah_hak_pdf',['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4','portrait');
        // return $pdf->download('Persyaratan Perubahan Hak (Hak Guna Bangunan Ke Hak Milik).pdf');
        return response()->download('/home/u1721841/public_html/kantahkabbanjar.com/permohonan/Form Peningkatan Hak Prioritas.pdf');
    }

    public function RubahHakKuasaPdf()
    {
        // $pdf = Pdf::loadView('persyaratan.rubah_hak_pdf',['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4','portrait');
        // return $pdf->download('Persyaratan Perubahan Hak (Hak Guna Bangunan Ke Hak Milik).pdf');
        return response()->download('/home/u1721841/public_html/kantahkabbanjar.com/permohonan/Form Peningkatan Hak Kuasa.pdf');
    }

    public function penurunanPdf()
    {
        $pdf = Pdf::loadView('persyaratan.penurunan_pdf', ['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4', 'portrait');
        return $pdf->download('Persyaratan Perubahan Hak (Penurunan).pdf');
    }

    public function lelangPdf()
    {
        // $pdf = Pdf::loadView('persyaratan.lelang_pdf',['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4','portrait');
        // return $pdf->download('Ganti Nama Sertifikat.pdf');
        return response()->download('/home/u1721841/public_html/kantahkabbanjar.com/permohonan/FORMULIR Roya, SKPT, Pencatatan.pdf');
    }

    public function pengecekanPdf()
    {
        // $pdf = Pdf::loadView('persyaratan.pengecekan_pdf',['active' => DB::table('component_active')->select('*')->first()])->setPaper('a4','portrait');
        // return $pdf->download('Persyaratan Peralihan Hak.pdf');
        return response()->download('/home/u1721841/public_html/kantahkabbanjar.com/permohonan/FORMULIR Roya, SKPT, Pencatatan.pdf');
    }
}
