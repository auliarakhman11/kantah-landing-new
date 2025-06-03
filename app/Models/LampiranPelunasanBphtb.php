<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranPelunasanBphtb extends Model
{
    use HasFactory;
    protected $table = 'lampiran_pelunasan_bphtb';
    protected $fillable = ['permohonan_id', 'nm_lampiran'];
}
