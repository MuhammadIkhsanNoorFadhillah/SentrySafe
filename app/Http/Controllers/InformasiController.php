<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function pengetahuan()
    {
        return view('informasi.pengetahuan');
    }

    public function produk()
    {
        return view('informasi.produk');
    }

    public function promo()
    {
        return view('informasi.promo');
    }
}
