<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerlindunganIndividu extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'perlindungan_individu';
        protected $fillable = [
            'nama', 'nama_produk', 'tanggal_efektif', 'premi', 'masa_polis', 'status',
        ];

}
