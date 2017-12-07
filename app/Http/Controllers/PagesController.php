<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function showCart()
    {
        $products = DB::table('products')->join('cart', 'products.id', '=', 'cart.product_id')->distinct()->get();
        $count = $products->count();

        return view('sites.cart', compact('products', 'count'));
    }

    public function addToCart(Request $request)
    {
        $cart = Cart::where('product_id', '=', $request->id)->first();
        if ($cart != null) {
            $cart->quantity += $request->quantity;
            $cart->save();
        }

        else {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $request->id;
            $cart->quantity = $request->quantity;
            $cart->save();
        }

        return redirect(route('showCart'));
    }

    public function deleteCart(Request $request)
    {
        $cart = Cart::where('product_id', '=', $request->id)->first();
        Cart::destroy($cart->id);

        return redirect(route('showCart'));
    }
}
