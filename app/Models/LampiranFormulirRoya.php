<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranFormulirRoya extends Model
{
    use HasFactory;
    protected $table = 'lampiran_formulir_roya';
    protected $fillable = ['permohonan_id', 'nm_lampiran'];
}
