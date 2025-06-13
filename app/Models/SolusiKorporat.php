<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolusiKorporat extends Model
{
    use HasFactory;

    protected $table = 'solusi_korporat';
    protected $fillable = ['nama_produk', 'tanggal_efektif', 'premi', 'masa_polis', 'status'];
}
