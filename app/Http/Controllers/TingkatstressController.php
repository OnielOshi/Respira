<?php

namespace App\Http\Controllers;
use App\Models\Tingkatstress;
use Illuminate\Http\Request;

class TingkatstressController extends Controller
{
    public function index()
    {
        $stress = Tingkatstress::all();
        return view('tingkat_stress.index', compact('stress'));
    }

    public function create()
    {
        return view('tingkat_stress.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_stress' => 'required|string|max: 4',
            'nama_tingkat_stress' => 'required|string|max: 255',
            'keterangan' => 'required|string',
        ]);

        Tingkatstress::create($request->all());

        return redirect()->route('tingkat_stress.index')
            ->with('success', 'Tingkat Stress berhasil ditambahkan.');
    }

    public function show($kode_stress)
    {
    $tingkatStress = Tingkatstress::findOrFail($kode_stress);
    return view('tingkat_stress.edit', compact('tingkatStress'));
    }


    // UPDATE STRESS QUERY
    public function update(Request $request, $kode_stress)
    {
        $request->validate([
            'kode_stress' => 'required|string|max: 4',
            'nama_tingkat_stress' => 'required|string|max: 255',
            'keterangan' => 'required|string',
        ]);

        $tingkatStress = Tingkatstress::find($kode_stress);
        $tingkatStress->update($request->all());

        return redirect()->route('tingkat_stress.index')
            ->with('success', 'Tingkat Stress berhasil diupdate.');
    }

    // DELETE STRESS QUERY 
    public function destroy($kode_stress)
    {
        $tingkatStress = Tingkatstress::find($kode_stress);
        $tingkatStress->delete();

        return redirect()->route('tingkat_stress.index')
            ->with('success', 'Tingkat Stress berhasil dihapus.');
    } 
}
