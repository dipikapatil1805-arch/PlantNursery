<?php

namespace App\Http\Controllers;

use App\Models\Cart;

class CartController extends Controller
{
    public function add($id)
    {
        Cart::create([
            'plant_id' => $id,
            'quantity' => 1,
        ]);

        return redirect('/')->with('success', 'Plant added to cart successfully!');
    }

    public function index()
    {
        $cartItems = Cart::with('plant')->get();

        return view('cart.index', compact('cartItems'));
    }
    public function remove($id)
    {
    Cart::findOrFail($id)->delete();

    return redirect()->route('cart.index')
                     ->with('success', 'Plant removed from cart.');
    }
    public function messages()
    {
    $contacts = Contact::latest()->get();

    return view('contacts.index', compact('contacts'));
    }
}
    