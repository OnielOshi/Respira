<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Relasi;
use App\Models\Tingkatstress;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gejalas = Gejala::all();
        return view('diagnosa', compact('gejalas'));
    }

    public function processDiagnosis(Request $request)
    {
        // Ambil input gejala yang dikirimkan
        $gejalaInput = $request->input('gejala');

        // Inisialisasi array untuk menyimpan hasil CF untuk setiap penyakit
        $cfResults = [];

        // Ambil daftar tingkat stress (penyakit)
        $tingkatStresses = Tingkatstress::all();

        foreach ($tingkatStresses as $tingkatStress) {
            // Inisialisasi faktor kepastian (certainty factor) untuk penyakit ini
            $cfCombine = 0;

            // Ambil semua gejala yang berhubungan dengan penyakit ini
            $relasiGejalas = Relasi::where('kode_stress', $tingkatStress->kode_stress)->get();

            foreach ($relasiGejalas as $relasi) {
                $gejalaId = $relasi->kode_gejala;

                if (isset($gejalaInput[$gejalaId]) && $gejalaInput[$gejalaId] == 'iya') {
                    $mb = $relasi->mb;
                    $md = $relasi->md;

                    // Hitung CF untuk gejala ini
                    $cf = $mb - $md;
                }
                else {
                    $cf = 0;
                }
                // Gabungkan dengan CF sebelumnya
                $cfCombine = $cfCombine + $cf * (1 - $cfCombine);
            }

            // Simpan hasil untuk penyakit ini
            $cfResults[$tingkatStress->kode_stress] = $cfCombine;
        }

        // Kembalikan hasil ke view
        return view('diagnosa_result', compact('cfResults'));
    }
}