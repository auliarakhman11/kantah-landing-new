<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peningkatan extends Model
{
    use HasFactory;

    protected $table = 'peningkatan';
    protected $fillable = ['pemohon_id','permohonan_id','nama','pekerjaan','alamat','nama_kuasa','pekerjaan_kuasa','alamat_kuasa','jalan_tanah','kelurahan_id','kecamatan_id','no_hak','tgl_hak','nik','tahun_sppt','no_hak1','tgl_hak1','jalan_hak1','no_hak2','tgl_hak2','jalan_hak2','no_hak3','tgl_hak3','jalan_hak3','no_hak4','tgl_hak4','jalan_hak4'];


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
