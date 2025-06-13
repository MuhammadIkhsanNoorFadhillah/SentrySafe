<?php

namespace App\Http\Controllers;

use App\Models\PerlindunganIndividu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PerlindunganIndividuController extends Controller
{
    public function show()
    {
        $list_individu =  PerlindunganIndividu::all();
        return view('admin.perlindunganindividu.show', ['list_individu' => $list_individu]);
    }
    public function create()
    {
        $individu = PerlindunganIndividu::all();
        return view('admin.perlindunganindividu.create', compact('individu'));
    }

    public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nama_produk' => 'required|string|max:255',
        'tanggal_efektif' => 'required|date',
        'premi' => 'required|numeric',
        'masa_polis' => 'required|integer',
        'status' => 'required|string|max:255',
    ]);

    // Menyimpan data ke database
    PerlindunganIndividu::create($validated);

    // Redirect atau response lainnya
    return redirect()->route('admin.perlindunganindividu.show');
}

    public function edit(string $id)
    {
        $individu = PerlindunganIndividu::find($id);
        return view('admin.perlindunganindividu.edit',compact('individu'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'nama_produk' => 'required',
            'tanggal_efektif' => 'required',
            'premi' => 'required',
            'masa_polis' => 'required',
            'status' => 'required',
        ]);

        $individu = PerlindunganIndividu::findOrFail($id);
        $individu->update($request->all());

        return redirect(route('admin.perlindunganindividu.show'))->with('pesan', 'Data Berhasil Diperbaharui');
    }

    public function destroy(string $id): RedirectResponse
    {
        PerlindunganIndividu::find($id)->delete();
        return redirect(route('admin.perlindunganindividu.show'))->with('pesan', 'Data Terhapus');
    }
}



