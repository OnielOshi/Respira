<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function admindex()
    {
        $user = Auth::user();
        return view('dashboard.admprofile', compact('user'));
    }

    public function update(Request $request){
        $id = Auth::id();
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'. $user->id,
            'notelp' => 'required|string|max:13',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        
        $user->fill($validatedData);
        $user->update($validatedData);

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }

    public function changePassword(Request $request)
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        // Validate the request data
        $validatedData = $request->validate([
            'password' => 'required',
            'newpassword' => 'required|min:8|confirmed',
        ]);

        // Check if the current password matches
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'The current password is incorrect']);
        }

        // Update the user's password
        $user->password = Hash::make($request->newpassword);
        $user->save();

        // Redirect back with a success message
        return back()->with('success', 'Password changed successfully.');
    }
}
