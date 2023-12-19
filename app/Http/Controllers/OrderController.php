<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function cash_order()
    {
        $user = Auth::user();
        $userid = $user->id;

        $data = cart::where('user_id', '=', $userid)->get();

        foreach ($data as $data) {
            $order = new order;
            $order->quantity = $data->quantity;
            $order->product_id = $data->product_id;
            $order->user_id = $data->user_id;
            $order->payment_status = 'Cash On Delivery';
            $order->delivery_status = 'Being Delivered';

            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }

        return redirect()->back()->with('success', 'Product is in the process of delivery');
    }

    public function show_order()
    {
        return view('admin/orders', [
            'title' => 'Orders',
            'orders' => Order::all(),
        ]);
    }

    public function show_completed()
    {
        return view('admin/completed', [
            'title' => 'Completed',
            'orders' => Order::all(),
        ]);
    }

    public function wallet_order(Request $request)
    {
        $user = Auth::user();
        $userid = $user->id;

        $data = cart::where('user_id', '=', $userid)->get();

        foreach ($data as $data) {
            $order = new order;
            $order->quantity = $data->quantity;
            $order->product_id = $data->product_id;
            $order->user_id = $data->user_id;
            $order->payment_status = 'E-Wallet';
            $order->delivery_status = 'Processing';

            $order->save();

            $validatedData = $request->validate(['image' => 'image|file|max:1024',]);
            if ($request->file('image')) {
                $imagePath = $request->file('image')->store('product-images');
                $order->image = $imagePath;
                $order->save();
            }

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }

        return redirect()->back()->with('success', 'Product is in process');
    }

    public function verify_delivery(Request $request)
    {
        $orderId = $request->input('order_id');
        Order::where('id', $orderId)->update(['delivery_status' => 'Being Delivered']);
        return redirect()->back()->with('success', 'Payment successfully verified, product is in the process of delivery');
    }

    public function complete_delivery(Request $request)
    {
        $orderId = $request->input('order_id');
        Order::where('id', $orderId)->update(['delivery_status' => 'Completed']);
        return redirect()->back()->with('success', 'Completed');
    }

    public function cancel_delivery(Request $request)
    {
        $orderId = $request->input('order_id');
        Order::where('id', $orderId)->update(['delivery_status' => 'Canceled']);
        return redirect()->back()->with('success', 'Canceled');
    }
}
