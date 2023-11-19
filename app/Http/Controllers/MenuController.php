<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu', [
            // 'posts' => Post::latest()->get(),
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('detailmenu', [
            'product' => $product,
        ]);
    }
}