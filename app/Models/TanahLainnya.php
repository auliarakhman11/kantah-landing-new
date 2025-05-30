<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanahLainnya extends Model
{
    use HasFactory;

    protected $table = 'tanah_lainnya';
    protected $fillable = ['permohonan_id', 'atas_nama', 'alamat', 'kelurahan', 'kecamatan', 'jenis_hak', 'luas', 'keterangan'];
}
