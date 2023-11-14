<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    public function create() {
        return view('admin.menu');
    }
}
