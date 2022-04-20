
@include('frontend.frontend_layout.body.style')
@include('frontend.frontend_layout.body.header')

<div class="body-content">
    <div class="container">
        <div class="my-wishlist-page">
            <div class="row">
                <div class="col-md-12 my-wishlist">
                    <div class="table-responsive">
                        <nav class="breadcrumb-nav has-border">
                            <div class="container">
                                <ul class="breadcrumb">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('checkout-page')}}">CheckOut</a></li>
                                    <li>Cash On Delivery</li>
                                </ul>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="page-content pt-10 mt-0 pb-10 mb-8">
                                <div class="checkout-box ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- checkout-progress-sidebar -->
                                            <div class="checkout-progress-sidebar ">
                                                <div class="panel-group">
                                                    <div class="panel panel-default">

                                                        <div class="">
                                                            <ul class="nav nav-checkout-progress list-unstyled">
                                                                <table class="order-sidebar">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th></th>
                                                                        <th>Product</th>
                                                                        <th>price</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($carts as $cart)
                                                                        <tr class="summary-subtotal">
                                                                            <td>
                                                                                <div class="product-name"><img
                                                                                        src="{{ asset($cart->options->image) }}"
                                                                                        style="height: 50px; width: 50px;"
                                                                                        alt=""></div>
                                                                            </td>
                                                                            <td>
                                                                            </td>
                                                                            <td>
                                                                                <div
                                                                                    class="product-name">{{$cart -> name}}
                                                                                    ×&nbsp;{{$cart -> qty}}</div>
                                                                            </td>

                                                                            <td>
                                                                                <div
                                                                                    class="product-name">{{$cart->total}}</div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <div class="panel-heading mb-5">
                                                                    <h3 class="unicase-checkout-title">Your Shopping
                                                                        Amount</h3>
                                                                </div>
                                                                <li>
                                                                    @if (Session::has('coupon'))
                                                                        @if(isset($extracharge[0]->extracharge))
                                                                            @if($cart_total < 500)
                                                                                <strong>SubTotal : </strong>
                                                                                Rs.{{ $cart_total }}
                                                                                <hr>
                                                                                <strong>Coupon Name
                                                                                    : </strong> {{ session()->get('coupon')['coupon_name'] }}
                                                                                ( {{ session()->get('coupon')['coupon_discount'] }}
                                                                                %)
                                                                                <hr>
                                                                                <strong>Coupon Discount :
                                                                                </strong>
                                                                                Rs.{{ session()->get('coupon')['discount_amount'] }}
                                                                                <hr>
                                                                                <strong>Shipping Charge :
                                                                                </strong>
                                                                                (+) Rs. {{$extracharge[0]->extracharge}}
                                                                                <hr>
                                                                                <strong>Grand Total : </strong>
                                                                                Rs.{{ session()->get('coupon')['total_amount'] + $extracharge[0]->extracharge }}
                                                                                <hr>

                                                                            @else
                                                                                <strong>SubTotal : </strong>
                                                                                Rs.{{ $cart_total }}
                                                                                <hr>
                                                                                <strong>Coupon Name
                                                                                    : </strong> {{ session()->get('coupon')['coupon_name'] }}
                                                                                ( {{ session()->get('coupon')['coupon_discount'] }}
                                                                                %)
                                                                                <hr>
                                                                                <strong>Coupon Discount :
                                                                                </strong>
                                                                                Rs.{{ session()->get('coupon')['discount_amount'] }}
                                                                                <hr>
                                                                                <strong>Grand Total : </strong>
                                                                                Rs.{{ session()->get('coupon')['total_amount'] }}
                                                                                <hr>
                                                                            @endif
                                                                        @else
                                                                            <strong>SubTotal : </strong>
                                                                            Rs.{{ $cart_total }}
                                                                            <hr>
                                                                            <strong>Coupon Name
                                                                                : </strong> {{ session()->get('coupon')['coupon_name'] }}
                                                                            ( {{ session()->get('coupon')['coupon_discount'] }}
                                                                            %)
                                                                            <hr>
                                                                            <strong>Coupon Discount :
                                                                            </strong>
                                                                            Rs.{{ session()->get('coupon')['discount_amount'] }}
                                                                            <hr>
                                                                            <strong>Grand Total : </strong>
                                                                            Rs.{{ session()->get('coupon')['total_amount'] }}
                                                                            <hr>
                                                                        @endif
                                                                    @else

                                                                        @if(isset($extracharge[0]->extracharge))
                                                                            @if($cart_total < 500)
                                                                                <strong>SubTotal : </strong>
                                                                                Rs.{{ $cart_total }}
                                                                                <hr>
                                                                                <strong>Shipping charge : </strong>
                                                                                (+) Rs. {{$extracharge[0]->extracharge}}
                                                                                <hr>
                                                                                <strong>Grand Total : </strong>
                                                                                Rs.{{ $cart_total + $extracharge[0]->extracharge}}
                                                                                <hr>
                                                                            @else
                                                                                <strong>SubTotal : </strong>
                                                                                Rs.{{ $cart_total }}
                                                                                <hr>
                                                                                <strong>Grand Total : </strong>
                                                                                Rs.{{ $cart_total }}
                                                                                <hr>
                                                                            @endif
                                                                        @else
                                                                            <strong>SubTotal : </strong>
                                                                            Rs.{{ $cart_total }}
                                                                            <hr>
                                                                            <strong>Grand Total : </strong>
                                                                            Rs.{{ $cart_total }}
                                                                            <hr>
                                                                        @endif
                                                                    @endif
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- checkout-progress-sidebar -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-progress-sidebar">
                                                <div class="panel-group">
                                                    <div class="mb-5">
                                                        <img src="{{ asset('frontend/assets/images/payments/razorPay.jpeg') }}" height="500px" width="300px" alt="">
                                                    </div>
                                                    <form action="{{ route('razorpay.payment.store') }}"
                                                          style="font-size: 15px;" class="btn btn-sm btn-primary"
                                                          method="POST">
                                                        @csrf
                                                        <input type="hidden" name="txn_id"
                                                               value="{{$txnid}}">
                                                        <input type="hidden" name="shipping_name"
                                                               value="{{ $data['shipping_name'] }}">
                                                        <input type="hidden" name="shipping_email"
                                                               value="{{ $data['shipping_email'] }}">
                                                        <input type="hidden" name="shipping_phone"
                                                               value="{{ $data['shipping_phone'] }}">
                                                        <input type="hidden" name="shipping_postCode"
                                                               value="{{ $data['shipping_postCode'] }}">
                                                        <input type="hidden" name="division_id"
                                                               value="{{ $data['division_id'] }}">
                                                        <input type="hidden" name="district_id"
                                                               value="{{ $data['district_id'] }}">
                                                        <input type="hidden" name="state_id"
                                                               value="{{ $data['state_id'] }}">
                                                        <input type="hidden" name="shipping_address"
                                                               value="{{ $data['shipping_address'] }}">
                                                        <input type="hidden" name="shipping_notes"
                                                               value="{{ $data['shipping_notes'] }}">
                                                        <script
                                                            src="https://checkout.razorpay.com/v1/checkout.js"
                                                            data-key="{{ env('RAZORPAY_KEY') }}"
                                                            @if (Session::has('coupon'))
                                                            @if(isset($extracharge[0]->extracharge))
                                                            @if($cart_total < 500)
                                                            data-amount="{{ (session()->get('coupon')['total_amount'] + $extracharge[0]->extracharge) * 100 }}"

                                                            @else
                                                            data-amount="{{ session()->get('coupon')['total_amount'] * 100 }}"
                                                            @endif
                                                            @else
                                                            data-amount="{{ session()->get('coupon')['total_amount'] * 100 }}"
                                                            @endif
                                                            @else

                                                            @if(isset($extracharge[0]->extracharge))
                                                            @if($cart_total < 500)
                                                            data-amount="{{ ($cart_total+ $extracharge[0]->extracharge) *100 }}"
                                                            @else
                                                            data-amount="{{ $cart_total*100}}"
                                                            @endif
                                                            @else
                                                            data-amount="{{ $cart_total*100}}"
                                                            @endif
                                                            @endif
                                                            data-buttontext="Pay Now"
                                                            data-name="Ecommerce.com"
                                                            data-description="Rozorpay"
                                                            data-image="http://127.0.0.1:8000/frontend/assets/images/logo.png"
                                                            data-prefill.name="name"
                                                            data-prefill.email="email"
                                                            data-theme.color="#ff7529">
                                                        </script>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('frontend.frontend_layout.body.script')

@include('frontend.frontend_layout.body.footer')


{{--    <!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <title>Laravel - Razorpay Payment Gateway Integration</title>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="app">--}}
{{--    <main class="py-4">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 offset-3 col-md-offset-6">--}}

{{--                    @if($message = Session::get('error'))--}}
{{--                        <div class="alert alert-danger alert-dismissible fade in" role="alert">--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                <span aria-hidden="true">×</span>--}}
{{--                            </button>--}}
{{--                            <strong>Error!</strong> {{ $message }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    @if($message = Session::get('success'))--}}
{{--                        <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                <span aria-hidden="true">×</span>--}}
{{--                            </button>--}}
{{--                            <strong>Success!</strong> {{ $message }}--}}
{{--                        </div>--}}
{{--@endif--}}
{{--                        <div class="card card-default">--}}
{{--                            <div class="card-header">--}}
{{--                                Laravel - Razorpay Payment Gateway Integration--}}
{{--                            </div>--}}

{{--                            <div class="card-body text-center">--}}
{{--                                <form action="{{ route('razorpay.payment.store') }}" method="POST" >--}}
{{--                                    @csrf--}}
{{--                                    <script src="https://checkout.razorpay.com/v1/checkout.js"--}}
{{--                                            data-key="{{ env('RAZORPAY_KEY') }}"--}}
{{--                                            data-amount="1000"--}}
{{--                                            data-buttontext="Pay 10 INR"--}}
{{--                                            data-name="ItSolutionStuff.com"--}}
{{--                                            data-description="Rozerpay"--}}
{{--                                            data-image="https://www.itsolutionstuff.com/frontTheme/images/logo.png"--}}
{{--                                            data-prefill.name="name"--}}
{{--                                            data-prefill.email="email"--}}
{{--                                            data-theme.color="#ff7529">--}}
{{--                                    </script>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </main>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
