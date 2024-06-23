<?php

namespace App\Http\Controllers;
use App\Models\Gejala;
use App\Models\Relasi;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('gejala.index', compact('gejalas'));
    }

    public function create()
    {
        return view('gejala.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_gejala' => 'required|string|max: 4',
            'nama_gejala' => 'required|string|max: 255',
        ]);

        Gejala::create($request->all());

        return redirect()->route('gejala.index')
            ->with('success', 'Gejala berhasil ditambahkan.');
    }

    // FORM EDIT GEJALA 
    public function show($kode_gejala)
    {
        $gejala = Gejala::findOrFail($kode_gejala);
        return view('gejala.edit', compact('gejala'));
    }

    // UPDATE GEJALA QUERY
    public function update(Request $request, $kode_gejala)
    {
        $gejala = Gejala::findOrFail($kode_gejala);

        $request->validate([
            'kode_gejala' => 'required|string|max: 4',
            'nama_gejala' => 'required|string|max: 255',
        ]);

        $gejala->update($request->all());

        return redirect()->route('gejala.index')
            ->with('success', 'Gejala berhasil diperbarui.');
    }

    // DELETE GEJALA QUERY
    public function destroy($kode_gejala)
{
    $gejala = Gejala::findOrFail($kode_gejala);

    // Hapus semua relasi yang terkait dengan gejala ini
    $relasiGejalas = Relasi::where('kode_gejala', $gejala->kode_gejala)->get();

    foreach ($relasiGejalas as $relasi) {
        $relasi->delete();
    }

    // Hapus gejala itu sendiri
    $gejala->delete();

    return redirect()->route('gejala.index')
        ->with('success', 'Gejala beserta relasi berhasil dihapus.');
}

}
