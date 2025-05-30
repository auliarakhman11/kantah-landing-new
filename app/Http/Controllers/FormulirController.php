<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Pemohon;
use App\Models\PendaftaranPertama;
use Illuminate\Http\Request;

class FormulirController extends Controller
{

    public function getKelurahan($kecamatan_id)
    {
        if ($kecamatan_id == 0) {
            $dt_kelurahan = Kelurahan::orderBy('kecamatan_id', 'ASC')->get();
        } else {
            $dt_kelurahan = Kelurahan::where('kecamatan_id', $kecamatan_id)->get();
        }

        echo '<option data-display="Kelurahan/Desa" value="">Kelurahan/Desa</option>';
        foreach ($dt_kelurahan as $d) {
            echo '<option value="' . $d->id . '|' . $d->kecamatan_id . '">' . $d->nm_kelurahan . ' (' . $d->kecamatan->nm_kecamatan . ')</option>';
        }
    }

    public function getDataPemohon($nik)
    {
        $data = Pemohon::where('nik', $nik)->first();
        if ($data) {
            return response()->json($data);
        } else {
            return false;
        }
    }

    public function riwayatPengisian()
    {
        return view('riwayat.index', [
            'title' => 'Riwayat Pengisian Blanko',
        ]);
    }

    public function pendaftaranPertama()
    {
        return view('pendaftaran_pertama.index', [
            'title' => 'Pendaftaran Pertama Kali',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addPendaftaranPertama(Request $request)
    {
        if ($request->device_id >= 1) {
            $device_id = $request->device_id;
        } else {
            $device = Device::create(['tgl' => date('Y-m-d')]);
            $device_id = $device->id;
        }

        $check_pemohon = Pemohon::where('nik', $request->nik)->first();
        if ($check_pemohon) {
            Pemohon::where('id', $check_pemohon->id)->update([
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
            ]);
        }

        if (strlen($request->nik_kuasa) == 16) {
            $check_kuasa = Pemohon::where('nik', $request->nik_kuasa)->first();
            if ($check_kuasa) {
                Pemohon::where('id', $check_kuasa->id)->update([
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = PendaftaranPertama::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'rw' => $request->rw,
            'rt' => $request->rt,
            'alamat_tanah' => $request->alamat_tanah,
            'kohir' => $request->kohir,
            'persil' => $request->persil,
            'kelas' => $request->kelas,
            'luas' => $request->luas,
            'alas_hak' => $request->alas_hak,
            'penggunaan_tanah' => $request->penggunaan_tanah,
            'utara' => $request->utara,
            'timur' => $request->timur,
            'selatan' => $request->selatan,
            'barat' => $request->barat,
            'tgl' => date('Y-m-d')
        ]);

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewPendaftaranPertama(Request $request)
    {
        $berkas = PendaftaranPertama::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('pendaftaran_pertama.view', [
                'title' => 'Pendaftaran Pertama Kali',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadPendaftaranPertama(Request $request)
    {
        $berkas = PendaftaranPertama::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/FormulirPendaftaranSertipikatTahap1.docx'));
            ///home/u1721841/public_html/coba.kantahkabbanjar.com/FormulirPendaftaranSertipikatTahap1.docx

            $templateProcessor->setValues([
                'nama' => $berkas->nama_kuasa ? $berkas->nama_kuasa : $berkas->nama,
                'pekerjaan' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan_kuasa : $berkas->pekerjaan,
                'alamat' => $berkas->alamat_kuasa ? $berkas->alamat_kuasa : $berkas->alamat,
                'nama_kuasa' => $berkas->nama_kuasa ? $berkas->nama : '-',
                'nm_pemilik' => $berkas->nama,
                'umur_pemilik' => $berkas->umur,
                'nik_pemilik' => $berkas->nik,
                'pekerjaan_pemilik' => $berkas->pekerjaan,
                'alamat_pemilik' => $berkas->alamat,
                'kohir' => $berkas->kohir ? $berkas->kohir : '.......',
                'persil' => $berkas->persil ? $berkas->persil : '.......',
                'kelas' => $berkas->kelas ? $berkas->kelas : '.......',
                'luas' => $berkas->luas,
                'alamat_tanah' => $berkas->alamat_tanah,
                'rw' => $berkas->rw,
                'rt' => $berkas->rt,
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,
                'penggunaan_tanah' => $berkas->penggunaan_tanah,
                'alas_hak' => $berkas->alas_hak,
                'utara' => $berkas->utara,
                'timur' => $berkas->timur,
                'selatan' => $berkas->selatan,
                'barat' => $berkas->barat,

            ]);

            // header("Content-Description: File Transfer");
            // header("Content-Disposition: attachment; filename=Formulir Pendaftaran Sertipikat Tahap 1.docx");
            // header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
            // header('Content-Transfer-Encoding: binary');
            // header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            // header('Expires: 0');

            // $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($templateProcessor, 'Word2007');
            // $xmlWriter->save("php://output");

            // $templateProcessor->saveAs('php://output');
            $pathToSave = public_path('hasil') . '/FormulirPendaftaranSertipikatTahap1'.$request->id.'.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }
}
