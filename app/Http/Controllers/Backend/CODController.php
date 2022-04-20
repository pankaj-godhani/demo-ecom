<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Eextracharge;
use Illuminate\Support\Facades\Mail;
use Cart;
use Illuminate\Support\Facades\Auth;

class CODController extends Controller
{
    public function codOrder(Request $request)
    {

        $extracharge = Eextracharge::all();

        if(Session::has('coupon')){
            if (isset($extracharge[0]->extracharge)){
                if (round(Cart::total()) < 500){
                    $total_amount = Session::get('coupon')['total_amount'] + $extracharge[0]->extracharge;
                }else{
                    $total_amount = Session::get('coupon')['total_amount'];
                }
            }else{
                $total_amount = Session::get('coupon')['total_amount'];
            }
        }else{
            if (isset($extracharge[0]->extracharge)){
                if (round(Cart::total()) < 500){
                    $total_amount = round(Cart::total() + $extracharge[0]->extracharge );
                }else{
                    $total_amount = round(Cart::total());
                }
            }else{
                $total_amount = round(Cart::total());
            }
        }


        // Order Service Area
        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'division_id' => $request->input('division_id'),
            'district_id' => $request->input('district_id'),
            'state_id' => $request->input('state_id'),
            'name' => $request->input('shipping_name'),
            'email' => $request->input('shipping_email'),
            'phone' => $request->input('shipping_phone'),
            'post_code' => $request->input('shipping_postCode'),
            'notes' => $request->input('shipping_notes'),
            'address' => $request->input('shipping_address'),
            'payment_type' => 'Cash On Delivery',
            'payment_method' => 'COD',
            'transaction_id' =>  '',
            'currency' => 'usd',
            'amount' => $total_amount,
            'order_number' => random_int(100000, 999999),
            'address' => $request->input('shipping_address'),
            'address' => $request->input('shipping_address'),
            'invoice_number' => 'AAF'.mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            'status' => 'pending',
            'created_at' => Carbon::now(),
        ]);

         // Start Send Email
            $invoice = Order::findOrFail($order_id);
            $carts = Cart::content();
            $cart_total =  round(Cart::total());
            $extracharge = Eextracharge::all();

            $data = [
                'invoice_no' => $invoice->invoice_number,
                'amount' => $total_amount,
                'name' => $invoice->name,
                'email' => $invoice->email,
                'product_details' => $carts,
                'post_code'=>$invoice->post_code,
                'phone'=>$invoice->phone,
                'order_date'=>$invoice->order_date,
                'address'=>$invoice->address,
                'cart_total'=>$cart_total,
                'extracharge'=>$extracharge,
            ];

            Mail::to($invoice->email)->send(new OrderMail($data));

            // End Send Email


        // Cart Service Area
        $carts = Cart::content();
        foreach ($carts as $key => $cart) {
            OrderItem::create([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'color' => $cart->options->color,
                'size' => $cart->options->size,
                'qty' => $cart->qty,
                'unit_price' => $cart->price,
            ]);
        }

        // After OrderItem Store forget coupon
        if(Session::has('coupon')){
            Session::forget('coupon');
        }

        // Then Destroy cart
//        Cart::destroy();

        $notification = array(
			'message' => 'Your Order Place Successfully',
			'alert-type' => 'success'
		);

        return redirect()->route('ordercompleterazorpay',compact('order_id'))->with($notification);

    } // end method
    public function ordercomplete($order_id)
    {

        $categories = Category::with(['subcategory', 'subsubcategory', 'products'])->orderBy('category_name_en', 'ASC')->get();
        $invoice = Order::findOrFail($order_id);

        $carts = Cart::content();

        return view('frontend.order.ordercomplete',compact('categories', 'invoice','carts'));

    }

    public function delete(){
        Cart::destroy();
        return redirect()->route('home');
    }
}
