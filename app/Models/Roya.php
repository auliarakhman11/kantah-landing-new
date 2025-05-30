<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roya extends Model
{
    use HasFactory;

    protected $table = 'roya';
    protected $fillable = ['pemohon_id','permohonan_id','nama','umur','pekerjaan','nik','alamat','nama_kuasa','umur_kuasa','pekerjaan_kuasa','nik_kuasa','alamat_kuasa','no_surat_kuasa','tgl_surat_kuasa','jalan_tanah','kelurahan_id','kecamatan_id','no_hak'];


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
