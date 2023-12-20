<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function show_category(Category $category)
    {
        return view('menu', [
            'title' => 'Menu',
            'categories' => Category::all(),
            'products' => $category->products,
        ]);
    }
}
