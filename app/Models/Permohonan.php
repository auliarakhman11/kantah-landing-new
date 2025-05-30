<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;
    protected $table = 'permohonan';
    protected $fillable = ['no_tiket','pemohon_id','kecamatan_id','kelurahan_id','nama','umur','nik','pekerjaan','alamat','rt','rw','kewarganegaraan','agama','hak_id','no_hak','jalan_tanah','pelayanan_id'];

    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class,'pelayanan_id','id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class,'kecamatan_id','id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class,'kelurahan_id','id');
    }

    public function pemohon()
    {
        return $this->belongsTo(Pemohon::class,'pemohon_id','id');
    }


}
