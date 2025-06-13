<?php

namespace App\Http\Controllers;

use App\Models\Klaim;
use Illuminate\Http\Request;

class KlaimController extends Controller
{
    public function show()
    {
        // $data_layout = [
        //     'title' => 'Halaman Klaim'
        // ];

        $list_klaim =  Klaim::all();
        // View::share($data_layout);
        return view('admin.klaim.show', ['list_klaim' => $list_klaim]);
    }
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
     * Display the specified resource.
     */


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
