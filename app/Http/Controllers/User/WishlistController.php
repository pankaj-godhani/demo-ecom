<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request, $product_id)
    {

        if (Auth::check()) {
            $exists = Wishlist::where('user_id', Auth::id())->where('product_id', $product_id)->first();
            if (!$exists) {
                Wishlist::create([
                    'user_id' => Auth::id(),
                    'product_id' => $product_id,
                ]);
                return response()->json([
                    'success' => 'Product added to your wishlist',
                ]);
//                return redirect()->back()->with('success', 'Product added to your wishlist');

            } else {
//                return redirect()->back()->with('error', 'Product alreay exits to your wishlist');
                return response()->json([
                    'error' => 'Product alreay exits to your wishlist',
                ]);
            }

        } else {
            $exists = Wishlist::where('product_id', $product_id)->first();
            if (!$exists) {
                Wishlist::create([
                    'product_id' => $product_id,
                ]);
                return response()->json([
                    'success' => 'Product added to your wishlist',
                ]);
//                return redirect()->back()->with('success', 'Product added to your wishlist');
            } else {
//                return redirect()->back()->with('error', 'Product alreay exits to your wishlist');
                return response()->json([
                    'error' => 'Product alreay exits to your wishlist',
                ]);

            }
        }
    }

    public function listWishList()
    {
        $categories = Category::with(['subcategory','subsubcategory'])->orderBy('category_name_en', 'ASC')->get();
        $reviews = Review::with(['users','products'])->get();
        $product = Product::with(['images','category'])->get();

//        dd($product);
        if(Auth::check()){
            $wishlist = Wishlist::where('user_id', Auth::id())->latest();

            if (isset($wishlist->user_id)) {
                $wishlists = Wishlist::with(['products'])->where('user_id', Auth::id())->latest()->paginate(5);
            }else{
                $wishlists = Wishlist::with(['products'])->latest()->paginate(5);
            }

        }else{
            $wishlists = Wishlist::with(['products'])->latest()->paginate(5);
        }

        return view('frontend.frontend_layout.wishlist_page.wishlist_list', compact('wishlists','categories','reviews'));
    }

    public function removefromWishList($wish_id)
    {
        if(Auth::check()){
            $wishlist = Wishlist::where('user_id', Auth::id())->latest();
            if (isset($wishlist->user_id)) {
                Wishlist::where('user_id', Auth::id())->where('id', $wish_id)->delete();
                return response()->json([
                    'success' => 'Successfully removed from you wishlist'
                ], 200);
            }else{
                Wishlist::where('id', $wish_id)->delete();
                return response()->json([
                    'success' => 'Successfully removed from you wishlist'
                ], 200);
            }
        }
        else{
            Wishlist::where('id',$wish_id)->delete();
            return response()->json([
                'success' => 'Successfully removed from you wishlist'
            ]);
        }
    }
}
