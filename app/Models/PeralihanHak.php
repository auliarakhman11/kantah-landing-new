<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeralihanHak extends Model
{
    use HasFactory;
    protected $table = 'peralihan_hak';
    protected $fillable = ['pemohon_id','permohonan_id','kecamatan_id','kelurahan_id','jenis','hak_id','no_hak','nama','pekerjaan','alamat','nm_kuasa','rt','rw','jenis_tanah','jalan_tanah'];

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
