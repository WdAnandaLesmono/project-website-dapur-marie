<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $id = Auth::user()->id;

        $product = cart::where('user_id', '=', $id)->with('product')->get();

        return view('profile', compact('product'), [
            'title' => 'Profile'
        ]);
    }

    public function show_order()
    {
        $id = Auth::user()->id;

        $product = Order::where('user_id', '=', $id)->with('product')->get();

        return view('profile', compact('product'), [
            'title' => 'Profile'
        ]);
    }

    public function remove_cart($id)
    {
        $cart = cart::find($id);

        $cart->delete();

        return redirect('/profile')->with('success', 'Product has been deleted');
    }
}
