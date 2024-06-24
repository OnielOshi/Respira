<?php

namespace App\Http\Controllers;

use App\Models\Relasi;
use App\Models\Tingkatstress;
use App\Models\Gejala;
use Illuminate\Http\Request;

class RelasiController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'Unauthorized access.');
        } else {
            $relasis = Relasi::all();
            return view('relasi.index', compact('relasis'));
        }
    }

    public function create()
    {
        $stress = Tingkatstress::all();
        $gejalas = Gejala::all();
        return view('relasi.create', compact('stress', 'gejalas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_stress' => 'required|string|max: 4',
            'kode_gejala' => 'required|string|max: 4',
            'mb' => 'required|numeric',
            'md' => 'required|numeric',
        ]);

        Relasi::create($request->all());

        return redirect()->route('relasi.index')
            ->with('success', 'Relasi berhasil ditambahkan.');
    }

    // FORM EDIT RELASI
    public function show($id)
    {
        $relasi = Relasi::findOrFail($id);
        $stress = Tingkatstress::all();
        $gejalas = Gejala::all();
        return view('relasi.edit', compact('stress', 'gejalas', 'relasi'));
    }

    // UPDATE RELASI QUERY
    public function update(Request $request, $id)
    {
        $relasi = Relasi::findOrFail($id);

        $request->validate([
            'kode_stress' => 'required|string|max: 4',
            'kode_gejala' => 'required|string|max: 4',
            'mb' => 'required|numeric',
            'md' => 'required|numeric',
        ]);

        $relasi->update($request->all());

        return redirect()->route('relasi.index')
            ->with('success', 'Relasi berhasil diperbarui.');
    }

    // DELETE RELASI QUERY
    public function destroy($id)
    {
        $relasi = Relasi::findOrFail($id);
        $relasi->delete();

        return redirect()->route('relasi.index')
            ->with('success', 'Relasi berhasil dihapus.');
    }
}
