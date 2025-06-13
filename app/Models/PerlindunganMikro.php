<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerlindunganMikro extends Model
{
    use HasFactory;

    protected $table = 'perlindungan_mikro';
    protected $fillable = ['nama', 'nama_produk', 'tanggal_efektif', 'premi', 'masa_polis', 'status'];
}
