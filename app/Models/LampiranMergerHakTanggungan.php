<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranMergerHakTanggungan extends Model
{
    use HasFactory;
    protected $table = 'lampiran_merger_hak_tanggungan';
    protected $fillable = ['permohonan_id', 'nm_lampiran'];
}
