<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function index()
    {
        return view('editprofile', [
            'title' => 'Edit Profile'
        ]);
    }

    public function updateUsername(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
        ]);

        User::where('id', auth()->user()->id)->update($validatedData);
        return redirect()->back()->with('success', 'Username has been updated');
    }

    public function updatePassword(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required',
        ]);

        User::where('id', auth()->user()->id)->update($validatedData);
        return redirect()->back()->with('success', 'Password has been updated');
    }
    
}
