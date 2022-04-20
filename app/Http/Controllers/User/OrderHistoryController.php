<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends Controller
{
    public function orderHistory()
    {
        $categories = Category::with(['subcategory','subsubcategory'])->orderBy('category_name_en', 'ASC')->get();
        $orders = Order::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        return view('frontend.order.order-history', compact('orders','categories'));
    }
}
