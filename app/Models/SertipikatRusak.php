<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertipikatRusak extends Model
{
    use HasFactory;
    protected $table = 'sertipikat_rusak';
    protected $fillable = ['device_id', 'nik', 'nama', 'umur', 'pekerjaan', 'alamat', 'no_tlpn', 'nik_kuasa', 'nama_kuasa', 'umur_kuasa', 'pekerjaan_kuasa', 'alamat_kuasa', 'no_tlpn_kuasa','kecamatan_id','kelurahan_id', 'rw', 'rw','jenis_hak','nomor_hak','alamat_tanah','penggunaan_tanah','tgl'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }

}
