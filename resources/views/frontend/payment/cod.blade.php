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
                                                        <div class="panel-heading">

                                                        </div>
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
                                            <div class="checkout-progress-sidebar ">
                                                <div class="panel-group">
                                                    <form action="{{ route('cod.order') }}" method="post"
                                                          id="payment-form">
                                                        @csrf
                                                        <div class="form-row">
                                                            <img
                                                                src="{{ asset('frontend/assets/images/payments/cash.png') }}"
                                                                alt="">
                                                            <label for="card-element">

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
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <button class="btn btn-primary">Confirm Order</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
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


