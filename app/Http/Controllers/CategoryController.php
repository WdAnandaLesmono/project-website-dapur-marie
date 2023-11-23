<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Category $category)
    {
        return view('category', [
            'title' => 'Menu',
            'categories' => Category::all(),
            'products' => $category->products,
        ]);
    }
}
