<?php

namespace App\Http\Controllers;
use App\Models\Tingkatstress;
use App\Models\Relasi;
use Illuminate\Http\Request;

class TingkatstressController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('home')->with('error', 'Unauthorized access.');
        } else {
        $stress = Tingkatstress::all();
        return view('tingkat_stress.index', compact('stress'));
        }
    }

    public function create()
    {
        return view('tingkat_stress.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'kode_stress' => 'required|string|max:4',
        'nama_tingkat_stress' => 'required|string|max:255',
        'keterangan' => 'required|string',
    ]);

    // Lakukan pengecekan apakah kode_stress sudah ada sebelumnya
    $existingTingkatStress = Tingkatstress::where('kode_stress', $request->kode_stress)->first();

    if ($existingTingkatStress) {
        return back()->with('error', 'Kode Tingkat Stress sudah ada.')->withInput();
    }

    // Jika validasi berhasil dan kode_stress belum ada, lanjutkan untuk menyimpan data
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
        'kode_stress' => 'required|string|max:4',
        'nama_tingkat_stress' => 'required|string|max:255',
        'keterangan' => 'required|string',
    ]);

    // Periksa apakah kode_stress sudah ada di database, kecuali yang sedang diupdate
    $existingTingkatStress = Tingkatstress::where('kode_stress', $request->kode_stress)
                                           ->where('kode_stress', '!=', $kode_stress)
                                           ->first();

    if ($existingTingkatStress) {
        return back()->with('error', 'Kode Tingkat Stress sudah ada.')->withInput();
    }

    $tingkatStress = Tingkatstress::find($kode_stress);
    $tingkatStress->update($request->all());

    return redirect()->route('tingkat_stress.index')
        ->with('success', 'Tingkat Stress berhasil diupdate.');
}


    // DELETE STRESS QUERY 
    public function destroy($kode_stress)
    {
    // Temukan tingkat stress berdasarkan $kode_stress
    $tingkatStress = Tingkatstress::find($kode_stress);

    // Hapus semua relasi yang terkait dengan tingkat stress ini
    $relasiGejalas = Relasi::where('kode_stress', $tingkatStress->kode_stress)->get();

    foreach ($relasiGejalas as $relasi) {
        $relasi->delete();
    }

    // Setelah menghapus relasi, hapus tingkat stress itu sendiri
    $tingkatStress->delete();

    return redirect()->route('tingkat_stress.index')
        ->with('success', 'Tingkat Stress beserta relasi gejala berhasil dihapus.');
    }
}
