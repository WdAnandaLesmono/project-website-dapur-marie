<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add_cart(Request $request, $id)
    {
        $user = Auth::user();

        $product = product::find($id);

        $cart = new cart;
        $cart->user_id = $user->id;
        $cart->product_id = $product->id;
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->back()->with('success', 'Product has been added to cart');
    }

    public function show_cart()
    {
        $id = Auth::user()->id;

        $cart = cart::where('user_id', '=', $id)->with('product')->get();

        return view('cart', compact('cart'));
    }

    public function remove_cart($id)
    {
        $cart = cart::find($id);

        $cart->delete();

        return redirect()->back()->with('success', 'Product has been deleted');
    }
}
