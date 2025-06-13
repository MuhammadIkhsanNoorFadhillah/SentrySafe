<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klaim extends Model
{
    use HasFactory;

    protected $table = 'klaim';
    protected $fillable = ['id_polis', 'tanggal_klaim', 'jumlah_klaim', 'status', 'deskripsi'];

}
