<?php

namespace App\Http\Controllers;

use App\Models\SolusiKorporat;
use Illuminate\Http\Request;

class SolusiKoporatController extends Controller
{
    public function show()
    {
        $list_korporat =  SolusiKorporat::all();
        return view('admin.solusikorporat.show', ['list_korporat' => $list_korporat]);
    }
}
