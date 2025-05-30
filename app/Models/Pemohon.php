<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    use HasFactory;
    protected $table = 'pemohon';
    protected $fillable = ['nama', 'nik', 'umur', 'pekerjaan', 'alamat', 'no_tlpn'];
}
