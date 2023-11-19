<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            // 'posts' => Post::latest()->get(),
            'products' => Product::all(),
        ]);
    }

    public function show(Product $product)
    {
        return view('home', [
            'product' => $product,
        ]);
    }
}
