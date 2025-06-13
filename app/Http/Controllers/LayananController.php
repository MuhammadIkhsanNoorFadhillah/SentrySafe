<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function formulir()
    {
        return view('layanan.formulir');
    }


    public function kreditKumpulan()
    {
        return view('layanan.servis.kreditkumpulan');
    }

    public function online()
    {
        return view('layanan.servis.online');
    }

    public function perlindunganIndividu()
    {
        return view('layanan.servis.perlindunganindividu');
    }

    public function perlindunganMikro()
    {
        return view('layanan.servis.perlindunganmikro');
    }

    public function perlindunganPrestige()
    {
        return view('layanan.servis.perlindunganprestige');
    }

    public function perlindunganSyariah()
    {
        return view('layanan.servis.perlindungansyariah');
    }

    public function solusiKorporat()
    {
        return view('layanan.servis.solusikorporat');
    }
}
