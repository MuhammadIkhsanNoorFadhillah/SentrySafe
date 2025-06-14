<?php

namespace App\Http\Controllers;

use App\Models\PerlindunganSyariah;
use Illuminate\Http\Request;

class PerlindunganSyariahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $list_syariah =  PerlindunganSyariah::all();
        return view('admin.perlindungansyariah.show', ['list_syariah' => $list_syariah]);
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
