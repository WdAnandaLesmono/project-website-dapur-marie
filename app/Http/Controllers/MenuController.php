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
            'title' => 'Menu',
            'products' => Product::oldest()->filter()->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('detailmenu', [
            'title' => 'Detail Menu',
            'product' => $product,
        ]);
    }
}
