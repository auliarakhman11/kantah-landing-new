<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkkpr extends Model
{
    use HasFactory;

    protected $table = 'pkkpr';
    protected $fillable = ['device_id', 'nik', 'nama', 'umur', 'pekerjaan', 'alamat', 'nib', 'no_sk', 'tgl_sk', 'no_tlpn', 'nik_kuasa', 'nama_kuasa', 'umur_kuasa', 'pekerjaan_kuasa', 'alamat_kuasa', 'no_tlpn_kuasa', 'no_surat_kuasa', 'tgl_surat_kuasa', 'kecamatan_id', 'kelurahan_id', 'status_tanah', 'nomor_hak', 'rencana_tanah', 'penggunaan_tanah', 'kbli', 'luas_tanah', 'tgl'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }
}
