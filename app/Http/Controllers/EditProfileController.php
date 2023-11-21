<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function index()
    {
        return view('editprofile');
    }

    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
        ]);

        User::where('id', auth()->user()->id)->update($validatedData);
        return redirect('/editprofile')->with('success', 'Username has been updated');
    }
    // public function editProfile() {
    //     return view('admin.menu.edit', [
    //         'product' => Product::find($id),
    //         'categories' => Category::all()
    //     ]);
    // }
}
