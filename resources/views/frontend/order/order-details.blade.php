
@include('frontend.frontend_layout.body.style')
@include('frontend.frontend_layout.body.header')

<div class="body-content">
    <div class="container">
        <div class="my-wishlist-page">
            <div class="row">
                <div class="col-md-12 my-wishlist">
                    <div class="table-responsive">
                        <div class="page-header" style="background-color: #faf8f5">
                            <h1 class="page-title">Order Details</h1>
                        </div>
                        <nav class="breadcrumb-nav has-border">
                            <div class="container">
                                <ul class="breadcrumb">
                                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                                    <li><a href="{{ route('user.profile') }}">My Profile</a></li>
                                    <li><a href="{{ route('user.orders') }}">Order History</a></li>
                                    <li><a href="{{ route('user.cancel-orders') }}">Return Orders</a></li>
                                    <li><a href="{{ route('user.return-orders') }}">Cancel Orders</a></li>
                                    <li>Order Details</li>
                                </ul>
                            </div>
                        </nav>
                        <div class="container">

                            <div class="row mt-3">
                                <div class="col-md-6">

                                    <aside class="sticky-sidebar-wrapper">
                                        <div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
                                            <div class="summary mb-4">
                                                <h3 class="summary-title">Shipping Details</h3>
                                                <table class="total">
                                                    <tr>
                                                        <th>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4>Shipping Name : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->name }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> Shipping Phone : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->phone }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> Shipping Email : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->email }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> Country : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->division->division_name }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> State : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->district->district_name }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> City : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->state->state_name }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> Post Code : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->post_code }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> Order Date : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2"> {{ $order->order_date }}</p>
                                                        </td>
                                                    </tr>


                                                    </th>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </aside>

                                </div> <!-- // end col md -6 -->
                                <div class="col-md-6">
                                    <aside class="sticky-sidebar-wrapper">
                                        <div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
                                            <div class="summary mb-4">
                                                <h3 class="summary-title"> Invoice : {{ $order->invoice_number }}</h3>
                                                <table class="total">
                                                    @if ($order->status == 'pending')

                                                    @else

                                                        @if($order->status == "return")
                                                            <tr class="summary-subtotal">
                                                                <td>
                                                                    <h4> Cancel Date: </h4>
                                                                </td>
                                                                <td>
                                                                    <p class="mt-2"> {{ $order->cancel_date }}</p>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @if($order->status == "confirmed")
                                                            <tr class="summary-subtotal">
                                                                <td>
                                                                    <h4> Confirmed Date: </h4>
                                                                </td>
                                                                <td>
                                                                    <p class="mt-2"> {{ $order->confirmed_date }}</p>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @if($order->status == "processing")
                                                            <tr class="summary-subtotal">
                                                                <td>
                                                                    <h4> Processing Date: </h4>
                                                                </td>
                                                                <td>
                                                                    <p class="mt-2"> {{ $order->processing_date }}</p>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @if($order->status == "picked")
                                                            <tr class="summary-subtotal">
                                                                <td>
                                                                    <h4> Picked Date: </h4>
                                                                </td>
                                                                <td>
                                                                    <p class="mt-2"> {{ $order->picked_date }}</p>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @if($order->status == "shipped")
                                                            <tr class="summary-subtotal">
                                                                <td>
                                                                    <h4> Shipped Date: </h4>
                                                                </td>
                                                                <td>
                                                                    <p class="mt-2"> {{ $order->shipped_date }}</p>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @if($order->status == "delivered")
                                                            <tr class="summary-subtotal">
                                                                <td>
                                                                    <h4> Delivered Date: </h4>
                                                                </td>
                                                                <td>
                                                                    <p class="mt-2"> {{ $order->delivered_date }}</p>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        @if($order->status == "cancel")
                                                            <tr class="summary-subtotal">
                                                                <td>
                                                                    <h4> Return Date: </h4>
                                                                </td>
                                                                <td>
                                                                    <p class="mt-2"> {{ $order->return_date }}</p>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endif
                                                    <tr>
                                                        <th>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4>Name : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->user->name }} </p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4>Phone : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->user->phone_number }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> Payment Type : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->payment_method }}</p>
                                                        </td>
                                                    </tr>
                                                    @if($order->transaction_id)
                                                        <tr class="summary-subtotal">
                                                            <td>
                                                                <h4> Tranx ID : </h4>
                                                            </td>
                                                            <td>
                                                                <p class="mt-2">{{ $order->transaction_id }}</p>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4>Invoice : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">{{ $order->invoice_number }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> Order Total : </h4>
                                                        </td>
                                                        <td>
                                                            <p class="mt-2">Rs. {{ $order->amount }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4> Order : </h4>
                                                        </td>
                                                        <td>

                                                            <p class="mt-2">
                                                                @if ($order->status == 'pending')
                                                                    <span
                                                                        class="bg-blue-100 text-blue-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-blue-200 dark:text-blue-800">{{ $order->status }}</span>
                                                                @elseif ($order->status == 'confirmed')
                                                                    <span
                                                                        class="bg-gray-300 text-gray-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-gray-700 dark:text-gray-300">{{$order->status}}</span>
                                                                @elseif ($order->status == 'processing')
                                                                    <span
                                                                        class="bg-purple-100 text-purple-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-purple-200 dark:text-purple-900">{{$order->status}}</span>
                                                                @elseif ($order->status == 'picked')
                                                                    <span
                                                                        class="bg-yellow-100 text-yellow-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-yellow-200 dark:text-yellow-900">{{$order->status}}</span>
                                                                @elseif ($order->status == 'shipped')
                                                                    <span
                                                                        class="bg-gray-100 text-gray-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-gray-700 dark:text-gray-300">{{$order->status}}</span>
                                                                @elseif ($order->status == 'delivered')
                                                                    <span
                                                                        class="bg-green-100 text-green-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-green-200 dark:text-green-900">{{$order->status}}</span>
                                                                @elseif ($order->status == 'return')
                                                                    <span
                                                                        class="bg-red-100 text-red-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-red-200 dark:text-red-900">Cancel</span>
                                                                @elseif ($order->status == 'cancel')
                                                                    <span
                                                                        class="bg-red-100 text-red-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-red-200 dark:text-red-900">Return</span>
                                                                @else
                                                                    {{--                                                                    <span--}}
                                                                    {{--                                                                        class="bg-red-100 text-red-800 text-xl font-semibold mr-2 px-4 py-4 rounded dark:bg-red-200 dark:text-red-900">{{ $order->status }}</span>--}}
                                                                @endif
                                                            </p>
                                                        </td>
                                                    </tr>

                                                    </th>
                                                    </tr>

                                                </table>

                                            </div>
                                        </div>
                                    </aside>
                                </div> <!-- // 2ND end col md -5 -->
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr class="text-center"
                                                style="background: #ff9c28; font-weight: 700;  color: white ; border: 10px solid #ff9c28;">
                                                <td class="col-md-1">
                                                    <label for=""> Image</label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for=""> Product Name </label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for=""> Product Code</label>
                                                </td>
                                                <td class="col-md-1">
                                                    <label for=""> Color </label>
                                                </td>
                                                <td class="col-md-1">
                                                    <label for=""> Size </label>
                                                </td>
                                                <td class="col-md-1">
                                                    <label for=""> Quantity </label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for=""> Price </label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for=""> Action </label>
                                                </td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($orderItems as $item)
                                                <tr class="text-center">
                                                    <td class="col-md-1">
                                                        <label for=""><img
                                                                src="{{ asset( $item->product->product_thumbnail ) }}"
                                                                height="70px;" width="90px;"> </label>
                                                    </td>
                                                    <td class="col-md-2">
                                                        <label for=""> {{ $item->product->product_name_en }}</label>
                                                    </td>
                                                    <td class="col-md-2">
                                                        <label for=""> {{ $item->product->product_code }}</label>
                                                    </td>
                                                    <td class="col-md-1">
                                                        <label for=""> {{ $item->color }}</label>
                                                    </td>
                                                    <td class="col-md-1">
                                                        <label for=""> {{ $item->size }}</label>
                                                    </td>
                                                    <td class="col-md-1">
                                                        <label for=""> {{ $item->qty }}</label>
                                                    </td>

                                                    <td class="col-md-2">
                                                        <label for="">
                                                            Rs. {{ $item->unit_price * $item->qty }}  </label>
                                                    </td>

                                                    @php
                                                        $file = App\Models\Product::where('id', $item->product_id)->first();
                                                    @endphp

                                                    <td class="col-md-2">
                                                        @if ($order->status == 'pending')
                                                            <a class="">
                                                               <span
                                                                   class="b text-orange-800 text-xl font-semibold mr-2 px-4 py-4 rounded  dark:text-orange-900">No File</span>
                                                            </a>
                                                        @elseif($order->status != 'pending')
                                                            <a target="_blank" class="btn btn-danger"
                                                               href="{{ asset('upload/pdf/' . $file->digital_file) }}">
                                                                <i class="fa fa-download"></i> Inovice
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- / end col md 8 -->
                            </div> <!-- // END ORDER ITEM ROW -->

                            @if ($order->status == 'return')
                                <div
                                    class="bg-red-100 border-t border-b border-red-500 text-red-700 pt-4 text-center mt-4"
                                    role="alert">
                                    <p class=" font-bold">You order Cancel successfully</p>
                                </div>
                            @elseif($order->status == 'cancel')
                                <div
                                    class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 pt-4 text-center mt-4"
                                    role="alert">
                                    <p class=" font-bold">You Have send return request for this product</p>
                                </div>
                            @elseif($order->status == 'pending')
                                @php
                                    $order = App\Models\Order::where('id', $order->id)
                                        ->where('return_reason', '=', null)
                                        ->first();
                                @endphp
                                @if ($order)
                                    <form action="{{ route('return.order', $order->id) }}" class="mt-5" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <h3> Order Return Reason:</h3>
                                            <textarea name="return_reason" id="" class="form-control" cols="30"
                                                      rows="05">Return Reason</textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <h4>Video Link :</h4>
                                            <input type="file"  name="return_reason_video" value="">
                                        </div>
                                        <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded mt-2">
                                            Order Return
                                        </button>
                                    </form>
                                @endif
                            @endif
                            @if ($order->status == 'delivered')
                                <div
                                    class="bg-green-100 border-t border-b border-green-500 text-green-700 pt-4 text-center mt-4"
                                    role="alert">
                                    <p class=" font-bold">Your order Delivered</p>
                                </div>
                            @else
{{--                                @php--}}
{{--                                    $order = App\Models\Order::where('id', $order->id)--}}
{{--                                        ->where('return_reason', '=', null)--}}
{{--                                        ->first();--}}
{{--                                @endphp--}}
{{--                                @if ($order)--}}
{{--                                    <form action="{{ route('return.order', $order->id) }}" class="mt-5" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <div class="form-group">--}}
{{--                                            <h3> Order Return Reason:</h3>--}}
{{--                                            <textarea name="return_reason" id="" class="form-control" cols="30"--}}
{{--                                                      rows="05">Return Reason</textarea>--}}
{{--                                        </div>--}}
{{--                                        <button type="submit"--}}
{{--                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded mt-2">--}}
{{--                                            Order Return--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                @else--}}

{{--                                    <div--}}
{{--                                        class="bg-red-100 border-t border-b border-red-500 text-red-700 pt-4 text-center mt-4"--}}
{{--                                        role="alert">--}}
{{--                                        <p class=" font-bold">You Have send return request for this product</p>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                            @endif

                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.frontend_layout.body.script')

@include('frontend.frontend_layout.body.footer')
