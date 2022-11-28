<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\pets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function cartList()
    {
        $cartItems = Cart::get()->where('user_id' , Auth::user()->id);
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        Cart::create([
            'pet_id' => $request->pet_id,
            'user_id' => $request->user_id,
            'name' => $request->name,
            'color' => $request->color,
            'quantity' => $request->quantity,
            'type' => $request->type,
            'image' => $request->image
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        $res = Cart::where('id', $request->id)->delete();

        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::truncate();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
