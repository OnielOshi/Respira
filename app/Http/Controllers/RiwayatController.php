<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tingkatstress;
use App\Models\Diagnosa;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
{   
    // Ambil diagnosa terbaru untuk pengguna yang sedang login
    $diagnosa = Diagnosa::where('user_id', auth()->user()->id)
                               ->latest()
                               ->first();

    return view('riwayat', compact('diagnosa'));
}
}
