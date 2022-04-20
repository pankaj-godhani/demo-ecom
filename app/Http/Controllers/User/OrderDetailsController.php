<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Eextracharge;
use App\Models\Order;
use App\Models\Category;
use App\Models\OrderItem;
use Carbon\Carbon;
use Input;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrderDetailsController extends Controller
{
    public function userOrderDetails($order_id)
    {
        $categories = Category::with(['subcategory', 'subsubcategory', 'products'])->orderBy('category_name_en', 'ASC')->get();
        $order = Order::whereId($order_id)->where('user_id', Auth::id())
            ->with(['user', 'division', 'district', 'state'])
            ->first();
        $orderItems = OrderItem::where('order_id', $order->id)
            ->with('product')
            ->orderBy('id', 'DESC')->get();

            //return $orderItems;
        return view('frontend.order.order-details', compact(
            'order',
            'orderItems',
            'categories'
        ));
    }

    public function userInvoiceDownload($order_id)
    {
        $order = Order::whereId($order_id)->where('user_id', Auth::id())->first();
        $extracharge = Eextracharge::all();
        $orderItems = OrderItem::where('order_id', $order->id)->with('product')->orderBy('id', 'DESC')->get();
        $unit_price_sum = OrderItem::where('order_id', $order->id)->sum('unit_price');
        $total =    DB::table("order_items")->where('order_id', $order->id)->sum(DB::raw('unit_price * qty'));




        $pdf = PDF::loadView('frontend.order.invoice-download', compact('order','orderItems','unit_price_sum','extracharge','total'))
            ->setPaper('a4')
            ->setOptions([
                'tempDir' => public_path(),
                'chroot' => public_path(),
            ]);
        return $pdf->download('invoice.pdf');
    }

    public function returnOrder(Request $request, $order_id)
    {

        if($request->file('return_reason_video')){
            $save_url = $request->file('return_reason_video')->store('videos', ['disk' =>'my_files']);
            Order::findOrFail($order_id)->update([
                'return_reason_video' => $save_url,
                'status' => 'cancel',
                'cancel_date' => Carbon::now()->format('d F Y'),
                'return_reason' => $request->return_reason,
            ]);
        }


//        Order::findOrFail($order_id)->update([
//            'status' => 'cancel',
//            'cancel_date' => Carbon::now()->format('d F Y'),
//            'return_reason' => $request->return_reason,
//        ]);

        $notification = array(
            'message' => 'Return Request Send Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function returnOrderList()
    {
        $categories = Category::with(['subcategory','subsubcategory'])->orderBy('category_name_en', 'ASC')->get();
        $orders = Order::where('user_id',Auth::id())
        ->where('return_reason','!=',NULL)
        ->where('status','=', 'return')
        ->orderBy('id','DESC')->get();
        return view('frontend.order.order-history',compact('orders','categories'));
    }
    public function cancelOrderList()
    {
        $categories = Category::with(['subcategory','subsubcategory'])->orderBy('category_name_en', 'ASC')->get();
        $orders = Order::where('user_id',Auth::id())
        ->where('return_reason','!=',NULL)
        ->where('status','cancel')
        ->orderBy('id','DESC')->get();
        return view('frontend.order.order-history',compact('orders','categories'));
    }
}
