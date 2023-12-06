<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function cash_order()
    {
        $user = Auth::user();
        $userid = $user->id;

        $data=cart::where('user_id', '=', $userid)->get();

        foreach($data as $data) 
        {
            $order = new order;
            $order->quantity = $data->quantity;
            $order->product_id = $data->product_id;
            $order->user_id = $data->user_id;
            $order->payment_status = 'Cash On Delivery';
            $order->delivery_status = 'Processing';

            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }

        return redirect()->back()->with('success', 'Product is in process');
    }
}
