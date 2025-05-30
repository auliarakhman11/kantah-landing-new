<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranPertama extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran_pertama';
    protected $fillable = ['device_id', 'nik', 'nama', 'umur', 'pekerjaan', 'alamat', 'no_tlpn', 'nik_kuasa', 'nama_kuasa', 'umur_kuasa', 'pekerjaan_kuasa', 'alamat_kuasa', 'no_tlpn_kuasa', 'kecamatan_id', 'kelurahan_id', 'rw', 'rt', 'alamat_tanah', 'kohir', 'persil', 'kelas', 'luas', 'alas_hak', 'penggunaan_tanah', 'utara', 'timur', 'selatan', 'barat', 'tgl'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }
}
