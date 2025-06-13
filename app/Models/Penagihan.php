<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penagihan extends Model
{
    use HasFactory;

    protected $table = 'penagihan';
    protected $fillable = ['id_polis', 'tanggal_penagihan', 'jumlah_penagihan', 'status'];
}
