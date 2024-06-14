<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tingkatstress;
use App\Models\Diagnosa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //     public function index()
    // {   
    //     $user = Auth::user(); 
    //     $latestDiagnose = $user->diagnoses()
    //                            ->orderByDesc('waktu_diagnosa')
    //                            ->first();

    //     return view('riwayat', compact('diagnosa'));
    // }
    public function index()
    {
        return view('riwayat');
    }
}
