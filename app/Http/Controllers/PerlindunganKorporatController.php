<?php

namespace App\Http\Controllers;

use App\Models\SolusiKorporat;
use Illuminate\Http\Request;

class PerlindunganKorporatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $list_korporat =  SolusiKorporat::all();
        return view('admin.solusikorporat.show', ['list_korporat' => $list_korporat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
