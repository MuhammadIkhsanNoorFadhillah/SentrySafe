<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerlindunganSyariah extends Model
{
    use HasFactory;

    protected $table = 'perlindungan_syariah';
    protected $fillable = ['nama', 'nama_produk', 'tanggal_efektif', 'premi', 'masa_polis', 'status'];
}
