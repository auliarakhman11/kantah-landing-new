<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengukuranUlang extends Model
{
    use HasFactory;

    protected $table = 'pengukuran_ulang';
    protected $fillable = ['pemohon_id','permohonan_id','nama','umur','pekerjaan','nik','alamat','nama_kuasa','jalan_tanah','rt','rw','jenis_tanah','kelurahan_id','kecamatan_id','no_hak','no_persil','kelas','luas','utara','timur','selatan','barat'];


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
