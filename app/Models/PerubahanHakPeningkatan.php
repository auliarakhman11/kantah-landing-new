<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerubahanHakPeningkatan extends Model
{
    use HasFactory;
    protected $table = 'perubahan_hak_peningkatan';
    protected $fillable = ['device_id','nik','nama','umur','pekerjaan','alamat','no_tlpn','warga_negara','tgl_lahir','nik_kuasa','nama_kuasa','umur_kuasa','pekerjaan_kuasa','alamat_kuasa','no_tlpn_kuasa','warga_negara_kuasa','kecamatan_id','kelurahan_id','alamat_tanah','nomor_hak','tgl_hak','tahun_sppt','tgl'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }
}
