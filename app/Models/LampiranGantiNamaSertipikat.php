<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranGantiNamaSertipikat extends Model
{
    use HasFactory;
    protected $table = 'lampiran_ganti_nama_sertipikat';
    protected $fillable = ['permohonan_id', 'nm_lampiran'];
}
