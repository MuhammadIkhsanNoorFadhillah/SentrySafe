<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiPelangganController extends Controller
{
    public function kebijakan()
    {
        return view('informasi-pelanggan.kebijakan');
    }

    public function klaim()
    {
        return view('informasi-pelanggan.klaim');
    }

    public function pelanggan()
    {
        return view('informasi-pelanggan.pelanggan');
    }

    public function penagihan()
    {
        return view('informasi-pelanggan.penagihan');
    }
}
