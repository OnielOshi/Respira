<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Diagnosa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminDashboard()
    {
        $userCount = User::count();
        $diagnosaCount = Diagnosa::count();
        $diagnoses = Diagnosa::with('user')->get();

        return view('dashboard.index', compact('userCount', 'diagnosaCount', 'diagnoses'));
    }
}
