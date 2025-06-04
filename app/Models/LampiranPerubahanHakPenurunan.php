<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranPerubahanHakPenurunan extends Model
{
    use HasFactory;
    protected $table = 'lampiran_perubahan_hak_penurunan';
    protected $fillable = ['permohonan_id', 'nm_lampiran'];
}
