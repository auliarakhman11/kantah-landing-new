<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerubahanHakPenurunan extends Model
{
    use HasFactory;
    protected $table = 'perubahan_hak_penurunan';
    protected $fillable = ['device_id','nik','nama','umur','pekerjaan','alamat','no_tlpn','warga_negara','ttl','nik_kuasa','nama_kuasa','umur_kuasa','pekerjaan_kuasa','alamat_kuasa','warga_negara_kuasa','no_tlpn_kuasa','ttl_kuasa','kecamatan_id','kelurahan_id','alamat_tanah','nomor_hak','tgl_hak','tahun_sppt','nomor_surat_kuasa','tgl_surat_kuasa','nomor_su','tgl_su','nib','tgl','luas'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }
}
