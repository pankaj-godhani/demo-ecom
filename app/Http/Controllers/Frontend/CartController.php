<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ShipDivision;
//use App\Models\Cart;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {

        $product = Product::findOrFail($id);

//        return response() ->json($product);
        if(Session::has('coupon')){
            Session::forget('coupon');
        }
          $cart =  Cart::add([
                'id' => $id,
                'name' => $product->product_name_en,
                'qty' => $request->qty,
                'price' =>($product->discount_price == null) ? $product->selling_price :$product->discount_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_thumbnail,
                    'size' => $request->size,
                    'color' => $request->color,
                    ]
            ]);
            return response()->json(['success' => 'Successfully added on your cart',$cart],200);

    }

    public function getMiniCart()
    {
        $carts = Cart::content();
        $count = Cart::count();
        $cart_qty = Cart::count();
        $cart_total = Cart::total();

        return response()->json([
            'carts' => $carts,
            'cart_qty' => $cart_qty,
            'count' =>$count,
            'cart_total' => round($cart_total),
        ], 200);
    }

    public function removeMiniCart($rowId)
    {
        Cart::remove($rowId);
        return response()->json(['success' => 'Product Remove from Cart'],200);
    }

}
