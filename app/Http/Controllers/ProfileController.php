<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'. $user->id,
            'notelp' => 'required|string|max:13',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
        
        if ($request->hasFile('foto')) {
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('build/assets/img'), $imageName);
            $validatedData['foto'] = $imageName;
        }
        
        if ($request->password) {
            $validatedData['password'] = Hash::make($request->password);
        } else {
            unset($validatedData['password']);
        }
        
        $user->update($validatedData);

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }

    // public function changePassword(Request $request)
    // {
    //     $request->validate([
    //         'password' => 'required|string',
    //         'newpassword' => 'required|string|min:8|confirmed',
    //     ]);

    //     $user = Auth::user();

    //     // Validasi password saat ini
    //     if (!Hash::check($request->password, $user->password)) {
    //         return redirect()->back()->withErrors(['password' => 'Current password is incorrect']);
    //     }

    //     // Update password baru
    //     $user->fill([
    //         'password' => Hash::make($request->newpassword),
    //     ])->save();

    //     return redirect()->route('profile')->with('success', 'Password changed successfully');
    // }
}
