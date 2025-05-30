<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptp extends Model
{
    use HasFactory;

    protected $table = 'ptp';
    protected $fillable = ['pemohon_id','permohonan_id','nama','alamat','nik','no_nib','nama_kuasa','keperluan','jalan_tanah','rt','rw','kelurahan_id','kecamatan_id','luas','hak_id','penggunaan_tanah','no_hak','nm_sertifikat'];

    public function hak()
    {
        return $this->belongsTo(Hak::class,'hak_id','id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class,'kecamatan_id','id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class,'kelurahan_id','id');
    }

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class,'permohonan_id','id');
    }
}
