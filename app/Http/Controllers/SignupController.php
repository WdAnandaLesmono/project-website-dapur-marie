<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup', [
            'title' => 'Signup',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:8', 'max:30', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Signup Successfully');
    }
}
