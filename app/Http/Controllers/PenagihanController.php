<?php

namespace App\Http\Controllers;

use App\Models\Penagihan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PenagihanController extends Controller
{
    public function show()
    {
        // $data_layout = [
        //     'title' => 'Halaman Penagihan'
        // ];

        $list_penagihan =  Penagihan::all();
        // View::share($data_layout);
        return view('admin.penagihan.show', ['list_penagihan' => $list_penagihan]);
    }
    public function edit(string$id)
    {
        $penagihan = Penagihan::find($id);
        return view('admin.penagihan.edit', compact('penagihan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_polis' => 'required',
            'tanggal_penagihan' => 'required|date',
            'jumlah_penagihan' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $penagihan = Penagihan::findOrFail($id);
        $penagihan->update($request->all());

    return redirect()->route('penagihan.show')->with('success', 'Penagihan updated successfully');
    }

    public function destroy($id)
    {
        $penagihan = Penagihan::findOrFail($id);
        $penagihan->delete();

        return redirect()->route('penagihan.index')->with('success', 'Penagihan deleted successfully');
    }

    public function create()
{
    return view('admin.penagihan.create');
}

    public function store(Request $request)
    {
        $request->validate([
            'id_polis' => 'required',
            'tanggal_penagihan' => 'required|date',
            'jumlah_penagihan' => 'required|numeric',
            'status' => 'required|string',
        ]);

        Penagihan::create([
            'id_polis' => $request->id_polis,
            'tanggal_penagihan' => $request->tanggal_penagihan,
            'jumlah_penagihan' => $request->jumlah_penagihan,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.penagihan.show')->with('success', 'Penagihan added successfully');
    }

}
