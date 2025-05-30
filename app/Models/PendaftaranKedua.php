<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranKedua extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_kedua';
    protected $fillable = ['device_id', 'nik', 'nama', 'umur', 'pekerjaan', 'alamat', 'no_tlpn', 'warga_negara', 'nik_kuasa', 'nama_kuasa', 'umur_kuasa', 'pekerjaan_kuasa', 'alamat_kuasa', 'no_tlpn_kuasa', 'no_surat_kuasa', 'tgl_surat_kuasa', 'warga_negara_kuasa', 'nama_bh', 'alamat_bh', 'akta_pendirian_bh', 'pengesahan_bh', 'nib_bh', 'bidang_usaha', 'jenis_hak', 'kelurahan_id', 'kecamatan_id', 'alamat_tanah', 'rt', 'rw', 'luas', 'alas_hak', 'tahun_penguasaan', 'perolehan_tanah', 'tahun_perolehan', 'penggunaan_tanah', 'tgl_pbt', 'no_pbt', 'nib', 'utara', 'timur', 'selatan', 'barat', 'jenis_tanah', 'rencana_penggunaan', 'ket_penggunaan', 'nama_saksi1', 'umur_saksi1', 'pekerjaan_saksi1', 'alamat_saksi1', 'nama_saksi2', 'umur_saksi2', 'pekerjaan_saksi2', 'alamat_saksi2', 'tgl'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }
}
