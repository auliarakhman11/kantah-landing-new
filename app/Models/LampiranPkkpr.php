<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranPkkpr extends Model
{
    use HasFactory;
    protected $table = 'lampiran_pkkpr';
    protected $fillable = ['permohonan_id', 'nm_lampiran'];
}
