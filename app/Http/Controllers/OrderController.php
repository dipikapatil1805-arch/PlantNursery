<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;

class OrderController extends Controller
{
    public function create()
    {
        $cartItems = Cart::with('plant')->get();

        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item->plant->price * $item->quantity;
        }

        return view('orders.create', compact('cartItems', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'email' => 'required|email',
        ]);

        Order::create([
            'customer_name' => $request->customer_name,
            'email' => $request->email,
            'total_amount' => $request->total_amount,
            'status' => 'Pending',
        ]);

        Cart::truncate();

        return redirect()->route('orders.index')
            ->with('success', '🎉 Order placed successfully!');
    }

    public function index()
    {
        $orders = Order::latest()->get();

        return view('orders.index', compact('orders'));
    }
    public function show($id)
   {
    $order = Order::findOrFail($id);

    return view('orders.show', compact('order'));
    }
}