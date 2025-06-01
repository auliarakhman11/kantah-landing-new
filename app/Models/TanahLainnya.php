<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanahLainnya extends Model
{
    use HasFactory;

    protected $table = 'tanah_lainnya';
    protected $fillable = ['permohonan_id', 'nama_alamat', 'letak_tanah', 'jenis_hak_lain', 'luas_lain'];
}
