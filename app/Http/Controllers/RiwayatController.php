<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tingkatstress;
use App\Models\Diagnosa;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Ambil diagnosa terakhir
        $latestDiagnosa = Diagnosa::where('user_id', auth()->id())
            ->latest('waktu_diagnosa')
            ->first();

        // Ambil 10 diagnosa terakhir untuk chart
        $diagnoses = Diagnosa::where('user_id', auth()->id())
            ->orderBy('waktu_diagnosa', 'asc')
            ->take(10)
            ->get();

        // Format data untuk chart
        $data = [];
        $categories = ['Tidak Stress', 'Stress Rendah', 'Stress Sedang', 'Stress Tinggi'];

        // Inisialisasi array untuk menyimpan data sesuai kategori
        $categoryData = [
            'Tidak Stress' => [],
            'Stress Rendah' => [],
            'Stress Sedang' => [],
            'Stress Tinggi' => [],
        ];

        // Populate data untuk setiap kategori
        foreach ($diagnoses as $index => $diagnosis) {
            $categoryData['Tidak Stress'][] = [
                'x' => $diagnosis->waktu_diagnosa, // Ambil waktu diagnosa dari database
                'y' => $diagnosis->persentase_penyakit_1,
            ];

            $categoryData['Stress Rendah'][] = [
                'x' => $diagnosis->waktu_diagnosa,
                'y' => $diagnosis->persentase_penyakit_2,
            ];

            $categoryData['Stress Sedang'][] = [
                'x' => $diagnosis->waktu_diagnosa,
                'y' => $diagnosis->persentase_penyakit_3,
            ];

            $categoryData['Stress Tinggi'][] = [
                'x' => $diagnosis->waktu_diagnosa,
                'y' => $diagnosis->persentase_penyakit_4,
            ];
        }

        // Format data sesuai dengan struktur yang diperlukan oleh chart
        foreach ($categories as $category) {
            $data[] = [
                'name' => $category,
                'data' => $categoryData[$category],
            ];
        }


        // Kirim data diagnosa dan data chart ke view 'riwayat'
        return view('riwayat', compact('latestDiagnosa', 'data'));
    }
}
