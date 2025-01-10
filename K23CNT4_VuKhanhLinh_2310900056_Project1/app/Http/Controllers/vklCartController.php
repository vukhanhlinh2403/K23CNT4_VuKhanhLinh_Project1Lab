<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class vklCartController extends Controller
{
    public function vklAddToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $productName = $request->input('product_name');
        
        $cart = Session::get('cart', []);
        
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            $cart[$productId] = [
                'name' => $productName,
                'quantity' => 1
            ];
        }

        Session::put('cart', $cart);
        return response()->json(['cart_count' => count($cart)]);
    }
}
