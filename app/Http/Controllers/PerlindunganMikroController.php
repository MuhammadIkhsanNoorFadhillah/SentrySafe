<?php

namespace App\Http\Controllers;

use App\Models\PerlindunganMikro;
use Illuminate\Http\Request;

class PerlindunganMikroController extends Controller
{
    public function show()
    {
        $list_mikro =  PerlindunganMikro::all();
        return view('admin.perlindunganmikro.show', ['list_mikro' => $list_mikro]);
    }
}
