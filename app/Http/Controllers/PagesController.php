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
        $user = Auth::user();
        $products = DB::table('products')->join('cart', 'products.id', '=', 'cart.product_id')->distinct()->get();
        $user->cart = $products->count();
        $user->save();

        return view('sites.cart', compact('products'));
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
            $user = Auth::user();
            $user->cart += 1;
            $user->save();
        }

        return redirect(route('showCart'));
    }

    public function deleteCart(Request $request)
    {
        Cart::destroy($request->id);
        $user = Auth::user();
        $user->cart -= 1;
        $user->save();

        return redirect(route('showCart'));
    }

    public function checkout()
    {
        return view('sites.checkout');
    }
}
