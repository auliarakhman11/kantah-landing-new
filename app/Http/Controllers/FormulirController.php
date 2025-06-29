<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\FormulirPeralihanHak;
use App\Models\FormulirRoya;
use App\Models\GantiNamaHt;
use App\Models\GantiNamaSertipikat;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Lampiran;
use App\Models\LampiranFormulirRoya;
use App\Models\LampiranGantiNamaHt;
use App\Models\LampiranGantiNamaSertipikat;
use App\Models\LampiranMergerHakTanggungan;
use App\Models\LampiranPelunasanBphtb;
use App\Models\LampiranPerubahanHakPenurunan;
use App\Models\MergerHakTanggungan;
use App\Models\PelunasanBphtb;
use App\Models\Pemohon;
use App\Models\PenataanBatas;
use App\Models\PendaftaranKedua;
use App\Models\PendaftaranKetiga;
use App\Models\PendaftaranPertama;
use App\Models\PerubahanHakPeningkatan;
use App\Models\PerubahanHakPenurunan;
use App\Models\PisahPecahGabung;
use App\Models\SertipikatHilang;
use App\Models\SertipikatRusak;
use App\Models\TanahLainnya;
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
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
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
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
            $pathToSave = public_path('hasil') . '/FormulirPendaftaranSertipikatTahap1' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function pendaftaranKedua()
    {
        return view('pendaftaran_kedua.index', [
            'title' => 'Pendaftaran Kedua',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addPendaftaranKedua(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = PendaftaranKedua::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'agama' => $request->agama,
            'tgl_lahir' => $request->tgl_lahir,
            'warga_negara' => $request->warga_negara,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'warga_negara_kuasa' => $request->warga_negara_kuasa,
            'no_surat_kuasa' => $request->no_surat_kuasa,
            'tgl_surat_kuasa' => $request->tgl_surat_kuasa,
            'nama_bh' => $request->nama_bh,
            'alamat_bh' => $request->alamat_bh,
            'akta_pendirian_bh' => $request->akta_pendirian_bh,
            'pengesahan_bh' => $request->pengesahan_bh,
            'nib_bh' => $request->nib_bh,
            'bidang_usaha' => $request->bidang_usaha,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'rw' => $request->rw,
            'rt' => $request->rt,
            'alamat_tanah' => $request->alamat_tanah,
            'luas' => $request->luas,
            'alas_hak' => $request->alas_hak,
            'penggunaan_tanah' => $request->penggunaan_tanah,
            'jenis_hak' => $request->jenis_hak,
            'utara' => $request->utara,
            'timur' => $request->timur,
            'selatan' => $request->selatan,
            'barat' => $request->barat,
            'perolehan_tanah' => $request->perolehan_tanah,
            'tahun_perolehan' => $request->tahun_perolehan,
            'tgl_pbt' => $request->tgl_pbt,
            'no_pbt' => $request->no_pbt,
            'nib' => $request->nib,
            'jenis_tanah' => $request->jenis_tanah,
            'rencana_penggunaan' => $request->rencana_penggunaan,
            'ket_penggunaan' => $request->ket_penggunaan,
            'nama_saksi1' => $request->nama_saksi1,
            'umur_saksi1' => $request->umur_saksi1,
            'pekerjaan_saksi1' => $request->pekerjaan_saksi1,
            'alamat_saksi1' => $request->alamat_saksi1,
            'nama_saksi2' => $request->nama_saksi2,
            'umur_saksi2' => $request->umur_saksi2,
            'pekerjaan_saksi2' => $request->pekerjaan_saksi2,
            'alamat_saksi2' => $request->alamat_saksi2,
            'tgl' => date('Y-m-d')
        ]);

        $nama_alamat = $request->nama_alamat;
        $letak_tanah = $request->letak_tanah;
        $jenis_hak_lain = $request->jenis_hak_lain;
        $luas_lain = $request->luas_lain;

        for ($count = 0; $count < count($nama_alamat); $count++) {
            TanahLainnya::create([
                'permohonan_id' => $berkas->id,
                'nama_alamat' => $nama_alamat[$count],
                'letak_tanah' => $letak_tanah[$count],
                'jenis_hak_lain' => $jenis_hak_lain[$count],
                'luas_lain' => $luas_lain[$count],
            ]);
        }

        $nm_lampiran = $request->nm_lampiran;

        for ($count = 0; $count < count($nm_lampiran); $count++) {
            Lampiran::create([
                'permohonan_id' => $berkas->id,
                'nm_lampiran' => $nm_lampiran[$count],
            ]);
        }

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }


    public function viewPendaftaranKedua(Request $request)
    {
        $berkas = PendaftaranKedua::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('pendaftaran_kedua.view', [
                'title' => 'Pendaftaran Kedua',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }


    public function downloadPendaftaranKedua(Request $request)
    {
        $berkas = PendaftaranKedua::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/FormulirPendaftaranSertipikatTahap2.docx'));
            ///home/u1721841/public_html/coba.kantahkabbanjar.com/FormulirPendaftaranSertipikatTahap1.docx

            $lampiran = Lampiran::where('permohonan_id', $request->id)->get();

            foreach ($lampiran as $key => $l) {
                ${'lampiran' . ($key + 1)} = $l->nm_lampiran;
            }

            $tanah_lainnya = TanahLainnya::where('permohonan_id', $request->id)->get();
            $jumlah_bidang = 0;
            foreach ($tanah_lainnya as $key => $t) {
                if ($t->nama_alamat) {
                    $jumlah_bidang++;
                }
                ${'no' . ($key + 1)} = $t->nama_alamat ? $key + 1 : '';
                ${'nama_alamat' . ($key + 1)} = $t->nama_alamat ? $t->nama_alamat : '';
                ${'letak_tanah' . ($key + 1)} = $t->nama_alamat ? $t->letak_tanah : '';
                ${'jenis_hak_lain' . ($key + 1)} = $t->nama_alamat ? $t->jenis_hak_lain : '';
                ${'luas' . ($key + 1)} = $t->nama_alamat ? $t->luas_lain : '';
            }

            $templateProcessor->setValues([
                'nama' => $berkas->nama_kuasa ? $berkas->nama_kuasa : $berkas->nama,
                'pekerjaan' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan_kuasa : $berkas->pekerjaan,
                'alamat' => $berkas->alamat_kuasa ? $berkas->alamat_kuasa : $berkas->alamat,
                'nik' => $berkas->nik_kuasa ? $berkas->nik_kuasa : $berkas->nik,
                'umur' => $berkas->umur_kuasa ? $berkas->umur_kuasa : $berkas->umur,
                'agama' => $berkas->agama,
                'tgl_lahir' => $berkas->tgl_lahir ? date("d-m-Y", strtotime($berkas->tgl_lahir)) : '',
                'warga_negara' => $berkas->warga_negara_kuasa ? $berkas->warga_negara_kuasa : $berkas->warga_negara,
                'nama_kuasa' => $berkas->nama_kuasa ? $berkas->nama : '-',
                'nm_pemilik' => $berkas->nama,
                'umur_pemilik' => $berkas->umur,
                'nik_pemilik' => $berkas->nik,
                'pekerjaan_pemilik' => $berkas->pekerjaan,
                'alamat_pemilik' => $berkas->alamat,
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

                'warga_negara_pemilik' => $berkas->warga_negara,
                'jenis_hak' => $berkas->jenis_hak,
                'no_surat_kuasa' => $berkas->no_surat_kuasa ? $berkas->no_surat_kuasa : '……………………………',
                'tgl_surat_kuasa' => $berkas->tgl_surat_kuasa ? date("d-m-Y", strtotime($berkas->tgl_surat_kuasa)) : '………………..',

                'nama_bh' => $berkas->nama_bh ? $berkas->nama_bh : '',
                'alamat_bh' => $berkas->alamat_bh ? $berkas->alamat_bh : '',
                'akta_pendirian_bh' => $berkas->akta_pendirian_bh ? $berkas->akta_pendirian_bh : '',
                'pengesahan_bh' => $berkas->pengesahan_bh ? $berkas->pengesahan_bh : '',
                'nib_bh' => $berkas->nib_bh ? $berkas->nib_bh : '',
                'bidang_usaha' => $berkas->bidang_usaha ? $berkas->bidang_usaha : '',

                'tgl_pbt' => $berkas->tgl_pbt ? date("d-m-Y", strtotime($berkas->tgl_pbt)) : '',
                'no_pbt' => $berkas->no_pbt,
                'nib' => $berkas->nib,

                'jenis_tanah' => $berkas->jenis_tanah,
                'rencana_penggunaan' => $berkas->rencana_penggunaan,
                'ket_penggunaan' => $berkas->ket_penggunaan,

                'perolehan_tanah' => $berkas->perolehan_tanah,
                'tahun_perolehan' => $berkas->tahun_perolehan,

                'nama_saksi1' => $berkas->nama_saksi1,
                'umur_saksi1' => $berkas->umur_saksi1,
                'pekerjaan_saksi1' => $berkas->pekerjaan_saksi1,
                'alamat_saksi1' => $berkas->alamat_saksi1,
                'nama_saksi2' => $berkas->nama_saksi2,
                'umur_saksi2' => $berkas->umur_saksi2,
                'pekerjaan_saksi2' => $berkas->pekerjaan_saksi2,
                'alamat_saksi2' => $berkas->alamat_saksi2,

                'lampiran1' => $lampiran1,
                'lampiran2' => $lampiran2,
                'lampiran3' => $lampiran3,
                'lampiran4' => $lampiran4,
                'lampiran5' => $lampiran5,
                'lampiran6' => $lampiran6,
                'lampiran7' => $lampiran7,
                'lampiran8' => $lampiran8,
                'lampiran9' => $lampiran9,
                'lampiran10' => $lampiran10,

                'no1' => $no1,
                'no2' => $no2,
                'no3' => $no3,
                'no4' => $no4,
                'no5' => $no5,

                'nama_alamat1' => $nama_alamat1,
                'nama_alamat2' => $nama_alamat2,
                'nama_alamat3' => $nama_alamat3,
                'nama_alamat4' => $nama_alamat4,
                'nama_alamat5' => $nama_alamat5,

                'letak_tanah1' => $letak_tanah1,
                'letak_tanah2' => $letak_tanah2,
                'letak_tanah3' => $letak_tanah3,
                'letak_tanah4' => $letak_tanah4,
                'letak_tanah5' => $letak_tanah5,

                'jenis_hak_lain1' => $jenis_hak_lain1,
                'jenis_hak_lain2' => $jenis_hak_lain2,
                'jenis_hak_lain3' => $jenis_hak_lain3,
                'jenis_hak_lain4' => $jenis_hak_lain4,
                'jenis_hak_lain5' => $jenis_hak_lain5,

                'luas1' => $luas1,
                'luas2' => $luas2,
                'luas3' => $luas3,
                'luas4' => $luas4,
                'luas5' => $luas5,

                'jumlah_bidang' => $jumlah_bidang > 0 ? $jumlah_bidang : '-',

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
            $pathToSave = public_path('hasil') . '/FormulirPendaftaranSertipikatTahap2' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function pendaftaranKetiga()
    {
        return view('pendaftaran_ketiga.index', [
            'title' => 'Pendaftaran Ketiga',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addPendaftaranKetiga(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = PendaftaranKetiga::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'rw' => $request->rw,
            'rt' => $request->rt,
            'alamat_tanah' => $request->alamat_tanah,
            'penggunaan_tanah' => $request->penggunaan_tanah,
            'tgl' => date('Y-m-d')
        ]);

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewPendaftaranKetiga(Request $request)
    {
        $berkas = PendaftaranKetiga::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('pendaftaran_ketiga.view', [
                'title' => 'Pendaftaran Ketiga',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadPendaftaranKetiga(Request $request)
    {
        $berkas = PendaftaranKetiga::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/FormulirPendaftaranSertipikatTahap3.docx'));
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
                'alamat_tanah' => $berkas->alamat_tanah,
                'rw' => $berkas->rw,
                'rt' => $berkas->rt,
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,
                'penggunaan_tanah' => $berkas->penggunaan_tanah,

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
            $pathToSave = public_path('hasil') . '/FormulirPendaftaranSertipikatTahap3' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function gantiNamaHt()
    {
        return view('ganti_nama_ht.index', [
            'title' => 'Ganti Nama Pemegang Hak Tanggungan',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addgantiNamaHt(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = GantiNamaHt::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'no_surat_kuasa' => $request->no_surat_kuasa,
            'tgl_surat_kuasa' => $request->tgl_surat_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'jenis_hak' => $request->jenis_hak,
            'nomor_hak' => $request->nomor_hak,
            'tgl' => date('Y-m-d')
        ]);

        $nm_lampiran = $request->lampiran;

        for ($count = 0; $count < count($nm_lampiran); $count++) {
            LampiranGantiNamaHt::create([
                'permohonan_id' => $berkas->id,
                'nm_lampiran' => $nm_lampiran[$count],
            ]);
        }

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }


    public function viewGantiNamaHt(Request $request)
    {
        $berkas = GantiNamaHt::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('ganti_nama_ht.view', [
                'title' => 'Ganti Nama Pemegang Hak Tanggungan',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }


    public function downloadGantiNamaHt(Request $request)
    {
        $berkas = GantiNamaHt::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/GantiNamaPemegangHT.docx'));
            ///home/u1721841/public_html/coba.kantahkabbanjar.com/FormulirPendaftaranSertipikatTahap1.docx


            $lampiran = LampiranGantiNamaHt::where('permohonan_id', $request->id)->get();

            foreach ($lampiran as $key => $l) {
                ${'lampiran' . ($key + 1)} = $l->nm_lampiran;
            }

            $templateProcessor->setValues([
                'nama' => $berkas->nama_kuasa ? $berkas->nama_kuasa : $berkas->nama,
                'pekerjaan' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan_kuasa : $berkas->pekerjaan,
                'alamat' => $berkas->alamat_kuasa ? $berkas->alamat_kuasa : $berkas->alamat,
                'umur' => $berkas->umur_kuasa ? $berkas->umur_kuasa : $berkas->umur,
                'nik' => $berkas->nik_kuasa ? $berkas->nik_kuasa : $berkas->nik,
                'nama_kuasa' => $berkas->nama_kuasa ? $berkas->nama : '-',
                'umur_kuasa' => $berkas->umur_kuasa ? $berkas->umur : '-',
                'pekerjaan_kuasa' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan : '-',
                'nik_kuasa' => $berkas->nik_kuasa ? $berkas->nik : '-',
                'alamat_kuasa' => $berkas->alamat_kuasa ? $berkas->alamat : '-',
                'no_surat_kuasa' => $berkas->no_surat_kuasa ? $berkas->no_surat_kuasa : '-',
                'tgl_surat_kuasa' => $berkas->tgl_surat_kuasa ? date("d-m-Y", strtotime($berkas->tgl_surat_kuasa)) : '-',
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,
                'jenis_hak' => $berkas->jenis_hak,
                'nomor_hak' => $berkas->nomor_hak,

                'lampiran1' => $lampiran1,
                'lampiran2' => $lampiran2,
                'lampiran3' => $lampiran3,
                'lampiran4' => $lampiran4,
                'lampiran5' => $lampiran5,
                'lampiran6' => $lampiran6,
                'lampiran7' => $lampiran7,

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
            $pathToSave = public_path('hasil') . '/GantiNamaPemegangHT' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }


    public function gantiNamaSertipikat()
    {
        return view('ganti_nama_sertipikat.index', [
            'title' => 'Ganti Nama Sertipikat',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addGantiNamaSertipikat(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = GantiNamaSertipikat::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'no_surat_kuasa' => $request->no_surat_kuasa,
            'tgl_surat_kuasa' => $request->tgl_surat_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'jenis_hak' => $request->jenis_hak,
            'nomor_hak' => $request->nomor_hak,
            'tgl' => date('Y-m-d')
        ]);

        $nm_lampiran = $request->lampiran;

        for ($count = 0; $count < count($nm_lampiran); $count++) {
            LampiranGantiNamaSertipikat::create([
                'permohonan_id' => $berkas->id,
                'nm_lampiran' => $nm_lampiran[$count],
            ]);
        }

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }


    public function viewGantiNamaSertipikat(Request $request)
    {
        $berkas = GantiNamaSertipikat::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('ganti_nama_sertipikat.view', [
                'title' => 'Ganti Nama Sertipikat',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadGantiNamaSertipikat(Request $request)
    {
        $berkas = GantiNamaSertipikat::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/GantiNamaSertipikat.docx'));
            ///home/u1721841/public_html/coba.kantahkabbanjar.com/FormulirPendaftaranSertipikatTahap1.docx


            $lampiran = LampiranGantiNamaSertipikat::where('permohonan_id', $request->id)->get();

            foreach ($lampiran as $key => $l) {
                ${'lampiran' . ($key + 1)} = $l->nm_lampiran;
            }

            $templateProcessor->setValues([
                'nama' => $berkas->nama_kuasa ? $berkas->nama_kuasa : $berkas->nama,
                'pekerjaan' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan_kuasa : $berkas->pekerjaan,
                'alamat' => $berkas->alamat_kuasa ? $berkas->alamat_kuasa : $berkas->alamat,
                'umur' => $berkas->umur_kuasa ? $berkas->umur_kuasa : $berkas->umur,
                'nik' => $berkas->nik_kuasa ? $berkas->nik_kuasa : $berkas->nik,
                'nama_kuasa' => $berkas->nama_kuasa ? $berkas->nama : '-',
                'umur_kuasa' => $berkas->umur_kuasa ? $berkas->umur : '-',
                'pekerjaan_kuasa' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan : '-',
                'nik_kuasa' => $berkas->nik_kuasa ? $berkas->nik : '-',
                'alamat_kuasa' => $berkas->alamat_kuasa ? $berkas->alamat : '-',
                'no_surat_kuasa' => $berkas->no_surat_kuasa ? $berkas->no_surat_kuasa : '-',
                'tgl_surat_kuasa' => $berkas->tgl_surat_kuasa ? date("d-m-Y", strtotime($berkas->tgl_surat_kuasa)) : '-',
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,
                'jenis_hak' => $berkas->jenis_hak,
                'nomor_hak' => $berkas->nomor_hak,

                'lampiran1' => $lampiran1,
                'lampiran2' => $lampiran2,
                'lampiran3' => $lampiran3,
                'lampiran4' => $lampiran4,
                'lampiran5' => $lampiran5,
                'lampiran6' => $lampiran6,
                'lampiran7' => $lampiran7,

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
            $pathToSave = public_path('hasil') . '/GantiNamaSertipikat' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function mergerHakTanggungan()
    {
        return view('merger_hak_tanggungan.index', [
            'title' => 'Merger Hak Tanggungan',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addMergerHakTanggungan(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = MergerHakTanggungan::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'no_surat_kuasa' => $request->no_surat_kuasa,
            'tgl_surat_kuasa' => $request->tgl_surat_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'jenis_hak' => $request->jenis_hak,
            'nomor_hak' => $request->nomor_hak,
            'tgl' => date('Y-m-d')
        ]);

        $nm_lampiran = $request->lampiran;

        for ($count = 0; $count < count($nm_lampiran); $count++) {
            LampiranMergerHakTanggungan::create([
                'permohonan_id' => $berkas->id,
                'nm_lampiran' => $nm_lampiran[$count],
            ]);
        }

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewMergerHakTanggungan(Request $request)
    {
        $berkas = MergerHakTanggungan::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('merger_hak_tanggungan.view', [
                'title' => 'Merger Hak Tanggungan',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadMergerHakTanggungan(Request $request)
    {
        $berkas = MergerHakTanggungan::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/MergerHakTanggungan.docx'));
            ///home/u1721841/public_html/coba.kantahkabbanjar.com/FormulirPendaftaranSertipikatTahap1.docx


            $lampiran = LampiranMergerHakTanggungan::where('permohonan_id', $request->id)->get();

            foreach ($lampiran as $key => $l) {
                ${'lampiran' . ($key + 1)} = $l->nm_lampiran;
            }

            $templateProcessor->setValues([
                'nama' => $berkas->nama_kuasa ? $berkas->nama_kuasa : $berkas->nama,
                'pekerjaan' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan_kuasa : $berkas->pekerjaan,
                'alamat' => $berkas->alamat_kuasa ? $berkas->alamat_kuasa : $berkas->alamat,
                'umur' => $berkas->umur_kuasa ? $berkas->umur_kuasa : $berkas->umur,
                'nik' => $berkas->nik_kuasa ? $berkas->nik_kuasa : $berkas->nik,
                'nama_kuasa' => $berkas->nama_kuasa ? $berkas->nama : '-',
                'umur_kuasa' => $berkas->umur_kuasa ? $berkas->umur : '-',
                'pekerjaan_kuasa' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan : '-',
                'nik_kuasa' => $berkas->nik_kuasa ? $berkas->nik : '-',
                'alamat_kuasa' => $berkas->alamat_kuasa ? $berkas->alamat : '-',
                'no_surat_kuasa' => $berkas->no_surat_kuasa ? $berkas->no_surat_kuasa : '-',
                'tgl_surat_kuasa' => $berkas->tgl_surat_kuasa ? date("d-m-Y", strtotime($berkas->tgl_surat_kuasa)) : '-',
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,
                'jenis_hak' => $berkas->jenis_hak,
                'nomor_hak' => $berkas->nomor_hak,

                'lampiran1' => $lampiran1,
                'lampiran2' => $lampiran2,
                'lampiran3' => $lampiran3,
                'lampiran4' => $lampiran4,
                'lampiran5' => $lampiran5,
                'lampiran6' => $lampiran6,
                'lampiran7' => $lampiran7,

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
            $pathToSave = public_path('hasil') . '/MergerHakTanggungan' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }


    public function pelunasanBphtb()
    {
        return view('pelunasan_bphtb.index', [
            'title' => 'Pencatatan Pelunasan BPHTB',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }


    public function addPelunasanBphtb(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = PelunasanBphtb::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'no_surat_kuasa' => $request->no_surat_kuasa,
            'tgl_surat_kuasa' => $request->tgl_surat_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'jenis_hak' => $request->jenis_hak,
            'nomor_hak' => $request->nomor_hak,
            'tgl' => date('Y-m-d')
        ]);

        $nm_lampiran = $request->lampiran;

        for ($count = 0; $count < count($nm_lampiran); $count++) {
            LampiranPelunasanBphtb::create([
                'permohonan_id' => $berkas->id,
                'nm_lampiran' => $nm_lampiran[$count],
            ]);
        }

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewPelunasanBphtb(Request $request)
    {
        $berkas = PelunasanBphtb::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('pelunasan_bphtb.view', [
                'title' => 'Pencatatan Pelunasan BPHTB',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadPelunasanBphtb(Request $request)
    {
        $berkas = PelunasanBphtb::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/PelunasanBphtb.docx'));
            ///home/u1721841/public_html/coba.kantahkabbanjar.com/FormulirPendaftaranSertipikatTahap1.docx


            $lampiran = LampiranPelunasanBphtb::where('permohonan_id', $request->id)->get();

            foreach ($lampiran as $key => $l) {
                ${'lampiran' . ($key + 1)} = $l->nm_lampiran;
            }

            $templateProcessor->setValues([
                'nama' => $berkas->nama_kuasa ? $berkas->nama_kuasa : $berkas->nama,
                'pekerjaan' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan_kuasa : $berkas->pekerjaan,
                'alamat' => $berkas->alamat_kuasa ? $berkas->alamat_kuasa : $berkas->alamat,
                'umur' => $berkas->umur_kuasa ? $berkas->umur_kuasa : $berkas->umur,
                'nik' => $berkas->nik_kuasa ? $berkas->nik_kuasa : $berkas->nik,
                'nama_kuasa' => $berkas->nama_kuasa ? $berkas->nama : '-',
                'umur_kuasa' => $berkas->umur_kuasa ? $berkas->umur : '-',
                'pekerjaan_kuasa' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan : '-',
                'nik_kuasa' => $berkas->nik_kuasa ? $berkas->nik : '-',
                'alamat_kuasa' => $berkas->alamat_kuasa ? $berkas->alamat : '-',
                'no_surat_kuasa' => $berkas->no_surat_kuasa ? $berkas->no_surat_kuasa : '-',
                'tgl_surat_kuasa' => $berkas->tgl_surat_kuasa ? date("d-m-Y", strtotime($berkas->tgl_surat_kuasa)) : '-',
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,
                'jenis_hak' => $berkas->jenis_hak,
                'nomor_hak' => $berkas->nomor_hak,

                'lampiran1' => $lampiran1,
                'lampiran2' => $lampiran2,
                'lampiran3' => $lampiran3,
                'lampiran4' => $lampiran4,
                'lampiran5' => $lampiran5,
                'lampiran6' => $lampiran6,
                'lampiran7' => $lampiran7,

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
            $pathToSave = public_path('hasil') . '/PelunasanBphtb' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function formulirRoya()
    {
        return view('formulir_roya.index', [
            'title' => 'Roya',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addFormulirRoya(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = FormulirRoya::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'no_surat_kuasa' => $request->no_surat_kuasa,
            'tgl_surat_kuasa' => $request->tgl_surat_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'jenis_hak' => $request->jenis_hak,
            'nomor_hak' => $request->nomor_hak,
            'tgl' => date('Y-m-d')
        ]);

        $nm_lampiran = $request->lampiran;

        for ($count = 0; $count < count($nm_lampiran); $count++) {
            LampiranFormulirRoya::create([
                'permohonan_id' => $berkas->id,
                'nm_lampiran' => $nm_lampiran[$count],
            ]);
        }

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewFormulirRoya(Request $request)
    {
        $berkas = FormulirRoya::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('formulir_roya.view', [
                'title' => 'Roya',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }


    public function downloadFormulirRoya(Request $request)
    {
        $berkas = FormulirRoya::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/FormulirRoya.docx'));
            ///home/u1721841/public_html/coba.kantahkabbanjar.com/FormulirPendaftaranSertipikatTahap1.docx


            $lampiran = LampiranFormulirRoya::where('permohonan_id', $request->id)->get();

            foreach ($lampiran as $key => $l) {
                ${'lampiran' . ($key + 1)} = $l->nm_lampiran;
            }

            $templateProcessor->setValues([
                'nama' => $berkas->nama_kuasa ? $berkas->nama_kuasa : $berkas->nama,
                'pekerjaan' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan_kuasa : $berkas->pekerjaan,
                'alamat' => $berkas->alamat_kuasa ? $berkas->alamat_kuasa : $berkas->alamat,
                'umur' => $berkas->umur_kuasa ? $berkas->umur_kuasa : $berkas->umur,
                'nik' => $berkas->nik_kuasa ? $berkas->nik_kuasa : $berkas->nik,
                'nama_kuasa' => $berkas->nama_kuasa ? $berkas->nama : '-',
                'umur_kuasa' => $berkas->umur_kuasa ? $berkas->umur : '-',
                'pekerjaan_kuasa' => $berkas->pekerjaan_kuasa ? $berkas->pekerjaan : '-',
                'nik_kuasa' => $berkas->nik_kuasa ? $berkas->nik : '-',
                'alamat_kuasa' => $berkas->alamat_kuasa ? $berkas->alamat : '-',
                'no_surat_kuasa' => $berkas->no_surat_kuasa ? $berkas->no_surat_kuasa : '-',
                'tgl_surat_kuasa' => $berkas->tgl_surat_kuasa ? date("d-m-Y", strtotime($berkas->tgl_surat_kuasa)) : '-',
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,
                'jenis_hak' => $berkas->jenis_hak,
                'nomor_hak' => $berkas->nomor_hak,

                'lampiran1' => $lampiran1,
                'lampiran2' => $lampiran2,
                'lampiran3' => $lampiran3,
                'lampiran4' => $lampiran4,
                'lampiran5' => $lampiran5,
                'lampiran6' => $lampiran6,
                'lampiran7' => $lampiran7,

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
            $pathToSave = public_path('hasil') . '/FormulirRoya' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function formulirPeralihanHak()
    {
        return view('peralihan_hak.index', [
            'title' => 'Peralihan Hak',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addFormulirPeralihanHak(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = FormulirPeralihanHak::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'rw' => $request->rw,
            'rt' => $request->rt,
            'alamat_tanah' => $request->alamat_tanah,
            'jenis_hak' => $request->jenis_hak,
            'nomor_hak' => $request->nomor_hak,
            'penggunaan_tanah' => $request->penggunaan_tanah,
            'tgl' => date('Y-m-d')
        ]);

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewFormulirPeralihanHak(Request $request)
    {
        $berkas = FormulirPeralihanHak::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('peralihan_hak.view', [
                'title' => 'Peralihan Hak',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }


    public function downloadFormulirPeralihanHak(Request $request)
    {
        $berkas = FormulirPeralihanHak::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/PeralihanHak.docx'));
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
                'alamat_tanah' => $berkas->alamat_tanah,
                'rw' => $berkas->rw,
                'rt' => $berkas->rt,
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,
                'penggunaan_tanah' => $berkas->penggunaan_tanah,
                'jenis_hak' => $berkas->jenis_hak,
                'nomor_hak' => $berkas->nomor_hak,

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
            $pathToSave = public_path('hasil') . '/PeralihanHak' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function sertipikatRusak()
    {
        return view('sertipikat_rusak.index', [
            'title' => 'Sertipikat Pengganti Karena Hilang',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addSertipikatRusak(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = SertipikatRusak::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'rw' => $request->rw,
            'rt' => $request->rt,
            'alamat_tanah' => $request->alamat_tanah,
            'jenis_hak' => $request->jenis_hak,
            'nomor_hak' => $request->nomor_hak,
            'penggunaan_tanah' => $request->penggunaan_tanah,
            'tgl' => date('Y-m-d')
        ]);

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewSertipikatRusak(Request $request)
    {
        $berkas = SertipikatRusak::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('sertipikat_rusak.view', [
                'title' => 'Sertipikat Pengganti Karena Hilang',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadSertipikatRusak(Request $request)
    {
        $berkas = SertipikatRusak::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/sertipikatRusak.docx'));
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
                'alamat_tanah' => $berkas->alamat_tanah,
                'rw' => $berkas->rw,
                'rt' => $berkas->rt,
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,
                'penggunaan_tanah' => $berkas->penggunaan_tanah,
                'jenis_hak' => $berkas->jenis_hak,
                'nomor_hak' => $berkas->nomor_hak,

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
            $pathToSave = public_path('hasil') . '/sertipikatRusak' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function penataanBatas()
    {
        return view('penataan_batas.index', [
            'title' => 'Penataan Batas',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addPenataanBatas(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = PenataanBatas::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
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

    public function viewPenataanBatas(Request $request)
    {
        $berkas = PenataanBatas::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('penataan_batas.view', [
                'title' => 'Penataan Batas',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadPenataanBatas(Request $request)
    {
        $berkas = PenataanBatas::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/PenataanBatas.docx'));
            ///home/u1721841/public_html/coba.kantahkabbanjar.com/PenataanBatas.docx

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
            $pathToSave = public_path('hasil') . '/PenataanBatas' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function pisahPecahGabung()
    {
        return view('pisah_pecah_gabung.index', [
            'title' => 'Pemisahan, Pemecahan, Penggabungan',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addPisahPecahGabung(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = PisahPecahGabung::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
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
            'rencana_penggunaan_tanah' => $request->rencana_penggunaan_tanah,
            'jenis_hak' => $request->jenis_hak,
            'nomor_hak' => $request->nomor_hak,
            'utara' => $request->utara,
            'timur' => $request->timur,
            'selatan' => $request->selatan,
            'barat' => $request->barat,
            'tgl' => date('Y-m-d')
        ]);

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewPisahPecahGabung(Request $request)
    {
        $berkas = PisahPecahGabung::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('pisah_pecah_gabung.view', [
                'title' => 'Pemisahan, Pemecahan, Penggabungan',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadPisahPecahGabung(Request $request)
    {
        $berkas = PisahPecahGabung::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {
            // $url = "https://coba.kantahkabbanjar.com/formulir/FormulirPendaftaranSertipikatTahap1.docx";
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/PisahPecahGabung.docx'));
            ///home/u1721841/public_html/coba.kantahkabbanjar.com/PisahPecahGabung.docx

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
                'rencana_penggunaan_tanah' => $berkas->rencana_penggunaan_tanah,
                'jenis_hak' => $berkas->jenis_hak,
                'nomor_hak' => $berkas->nomor_hak,
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
            $pathToSave = public_path('hasil') . '/PisahPecahGabung' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function perubahanHakPeningkatan()
    {
        return view('perubahan_hak_peningkatan.index', [
            'title' => 'Perubahan Hak Peningkatan',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addPerubahanHakPeningkatan(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = PerubahanHakPeningkatan::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'tgl_lahir' => $request->tgl_lahir,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'warga_negara' => $request->warga_negara,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'warga_negara_kuasa' => $request->warga_negara_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'alamat_tanah' => $request->alamat_tanah,
            'nomor_hak' => $request->nomor_hak,
            'tgl_hak' => $request->tgl_hak,
            'tahun_sppt' => $request->tahun_sppt,
            'tgl' => date('Y-m-d')
        ]);

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewPerubahanHakPeningkatan(Request $request)
    {
        $berkas = PerubahanHakPeningkatan::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('perubahan_hak_peningkatan.view', [
                'title' => 'Perubahan Hak Peningkatan',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadPerubahanHakPeningkatan(Request $request)
    {
        $berkas = PerubahanHakPeningkatan::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {

            if ($berkas->nama_kuasa) {
                $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/PeningkatanHakKuasa.docx'));
            } else {
                $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/PeningkatanHakPrioritas.docx'));
            }




            $templateProcessor->setValues([
                'nama' => $berkas->nama,
                'nik' => $berkas->nik,
                'warga_negara' => $berkas->warga_negara,
                'tgl_lahir' => $berkas->tgl_lahir ? date("d-m-Y", strtotime($berkas->tgl_lahir)) : '',
                'pekerjaan' => $berkas->pekerjaan,
                'alamat' => $berkas->alamat,
                'nama_kuasa' => $berkas->nama_kuasa,
                'pekerjaan_kuasa' => $berkas->pekerjaan_kuasa,
                'alamat_kuasa' => $berkas->alamat_kuasa,
                'alamat_tanah' => $berkas->alamat_tanah,
                'nomor_hak' => $berkas->nomor_hak,
                'tgl_hak' => $berkas->tgl_hak ? date("d-m-Y", strtotime($berkas->tgl_hak)) : '',
                'tahun_sppt' => $berkas->tahun_sppt,
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,

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
            $pathToSave = public_path('hasil') . '/PeningkatanHak' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function perubahanHakPenurunan()
    {
        return view('perubahan_hak_penurunan.index', [
            'title' => 'Perubahan Hak Penurunan',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }

    public function addPerubahanHakPenurunan(Request $request)
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
                'no_tlpn' => $request->no_tlpn,
            ]);
        } else {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'no_tlpn' => $request->no_tlpn,
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
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            } else {
                Pemohon::create([
                    'nik' => $request->nik_kuasa,
                    'nama' => $request->nama_kuasa,
                    'umur' => $request->umur_kuasa,
                    'pekerjaan' => $request->pekerjaan_kuasa,
                    'alamat' => $request->alamat_kuasa,
                    'no_tlpn' => $request->no_tlpn_kuasa,
                ]);
            }
        }

        $kelurahan_id = explode('|', $request->kelurahan_id);
        $berkas = PerubahanHakPenurunan::create([
            'device_id' => $device_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'ttl' => $request->ttl,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'warga_negara' => $request->warga_negara,
            'nik_kuasa' => $request->nik_kuasa,
            'nama_kuasa' => $request->nama_kuasa,
            'umur_kuasa' => $request->umur_kuasa,
            'pekerjaan_kuasa' => $request->pekerjaan_kuasa,
            'alamat_kuasa' => $request->alamat_kuasa,
            'no_tlpn_kuasa' => $request->no_tlpn_kuasa,
            'ttl_kuasa' => $request->ttl_kuasa,
            'nomor_surat_kuasa' => $request->nomor_surat_kuasa,
            'tgl_surat_kuasa' => $request->tgl_surat_kuasa,
            'warga_negara' => $request->warga_negara,
            'warga_negara_kuasa' => $request->warga_negara_kuasa,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $kelurahan_id[0],
            'alamat_tanah' => $request->alamat_tanah,
            'luas' => $request->luas,
            'nomor_hak' => $request->nomor_hak,
            'tgl_hak' => $request->tgl_hak,
            'tahun_sppt' => $request->tahun_sppt,
            'nomor_su' => $request->nomor_su,
            'tgl_su' => $request->tgl_su,
            'nib' => $request->nib,
            'tgl' => date('Y-m-d')
        ]);

        $nm_lampiran = $request->lampiran;

        for ($count = 0; $count < count($nm_lampiran); $count++) {
            LampiranPerubahanHakPenurunan::create([
                'permohonan_id' => $berkas->id,
                'nm_lampiran' => $nm_lampiran[$count],
            ]);
        }

        return response()->json(['id' => $berkas->id, 'device_id' => $device_id]);
    }

    public function viewPerubahanHakPenurunan(Request $request)
    {
        $berkas = PerubahanHakPenurunan::where('id', $request->id)->where('device_id', $request->device_id)->first();

        if ($berkas) {
            return view('perubahan_hak_penurunan.view', [
                'title' => 'Perubahan Hak Penurunan',
                'berkas' => $berkas,
                'id' => $request->id,
                'device_id' => $request->device_id,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function downloadPerubahanHakPenurunan(Request $request)
    {
        $berkas = PerubahanHakPenurunan::where('id', $request->id)->where('device_id', $request->device_id)->first();
        if ($berkas) {

            if ($berkas->nama_kuasa) {
                $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/PenurunanHakKuasa.docx'));
            } else {
                $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(public_path('formulir/PenurunanHakPrioritas.docx'));
            }


            $lampiran = LampiranPerubahanHakPenurunan::where('permohonan_id', $request->id)->get();

            foreach ($lampiran as $key => $l) {
                ${'lampiran' . ($key + 1)} = $l->nm_lampiran;
            }

            $templateProcessor->setValues([
                'nama' => $berkas->nama,
                'nik' => $berkas->nik,
                'warga_negara' => $berkas->warga_negara,
                'ttl' => $berkas->ttl,
                'umur' => $berkas->umur,
                'pekerjaan' => $berkas->pekerjaan,
                'alamat' => $berkas->alamat,
                'nama_kuasa' => $berkas->nama_kuasa,
                'pekerjaan_kuasa' => $berkas->pekerjaan_kuasa,
                'alamat_kuasa' => $berkas->alamat_kuasa,
                'warga_negara_kuasa' => $berkas->warga_negara_kuasa,
                'nomor_surat_kuasa' => $berkas->nomor_surat_kuasa,
                'tgl_surat_kuasa' => $berkas->tgl_surat_kuasa ? date("d-m-Y", strtotime($berkas->tgl_surat_kuasa)) : '',
                'ttl_kuasa' => $berkas->ttl_kuasa,
                'umur_kuasa' => $berkas->umur_kuasa,
                'nik_kuasa' => $berkas->nik_kuasa,
                'alamat_tanah' => $berkas->alamat_tanah,
                'luas' => $berkas->luas,
                'nomor_hak' => $berkas->nomor_hak,
                'tgl_hak' => $berkas->tgl_hak ? date("d-m-Y", strtotime($berkas->tgl_hak)) : '',
                'nomor_su' => $berkas->nomor_su,
                'nib' => $berkas->nib,
                'tahun_sppt' => $berkas->tahun_sppt,
                'tgl_su' => $berkas->tgl_su ? date("d-m-Y", strtotime($berkas->tgl_su)) : '',
                'kelurahan' => $berkas->kelurahan->nm_kelurahan,
                'kecamatan' => $berkas->kecamatan->nm_kecamatan,

                'lampiran1' => $lampiran1,
                'lampiran2' => $lampiran2,
                'lampiran3' => $lampiran3,
                'lampiran4' => $lampiran4,
                'lampiran5' => $lampiran5,
                'lampiran6' => $lampiran6,
                'lampiran7' => $lampiran7,

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
            $pathToSave = public_path('hasil') . '/PenurunanHak' . $request->id . '.docx';
            $templateProcessor->saveAs($pathToSave);
            return response()->file($pathToSave);
        } else {
            return redirect(route('home'));
        }
    }

    public function pkkpr()
    {
        return view('pkkpr.index', [
            'title' => 'Perubahan Hak Penurunan',
            'kecamatan' => Kecamatan::orderBy('nm_kecamatan', 'ASC')->get(),
            'kelurahan' => Kelurahan::orderBy('kecamatan_id', 'ASC')->get(),
        ]);
    }
}
