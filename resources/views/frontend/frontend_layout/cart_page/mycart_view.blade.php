@include('frontend.frontend_layout.body.style')
<body>
<div class="page-wrapper">
    @include('frontend.frontend_layout.body.header')
{{--{{dd($cart_qty)}}--}}
    @if($cart_qty == 0)
        <div class="body-content">
            <div class="container">
                <div class="my-wishlist-page">
                    <div class="row">
                            <div class="col-md-12 my-wishlist">
                                <div class="table-responsive">
                                    <div class="page-header"  style="background-color: #efefef;border-radius: 20px">
                                        <h1 class="page-title">Your Cart is empty</h1>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @else
    <main class="main cart">
        <div class="page-content pt-8 pb-10 mb-4">
            <div class="step-by">
                <h3 class="title title-step active"><a href="cart.html">1.Shopping Cart</a></h3>
                <h3 class="title title-step"><a href="checkout.html">2.Checkout</a></h3>
                <h3 class="title title-step"><a href="order.html">3.Order Complete</a></h3>
            </div>
            <div class="container mt-7 mb-2">
                <div class="row">
                    <div class="col-lg-8 col-md-12 pr-lg-6">
                        <table class="shop-table cart-table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Colour</th>
                                <th>Size</th>
                                <th>quantity</th>
                                <th>SubTotal</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody id="cartPage">

                            </tbody>
                        </table>


                        <div class="cart-coupon-box pt-5 pb-8">

                            @if (Session::has('coupon'))

                            @else
                                <h4 class="title coupon-title text-capitalize mb-4">Coupon Discount</h4>
                                <form action="#" id="applyCouponField">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--                                    <input type="text" name="coupon_code" class="input-text mb-6" id="coupon_name"--}}
{{--                                           value="" placeholder="Enter coupon code here..." required>--}}
                                    <div class="select-box mb-5">
                                        <select name="coupon_code" class="form-control" id="coupon_name">
                                            <option>--Select Coupon--</option>
                                            @foreach($coupon as $c)
                                            <option value="{{$c->coupon_name}}">{{$c->coupon_name}} ({{$c->coupon_discount}}%)</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-outline" onclick="applyCoupon()">Apply
                                        Coupon
                                    </button>
                                </form>
                            @endif

                        </div>
                    </div>
                    <aside class="col-lg-4 sticky-sidebar-wrapper">
                        <div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
                            <div class="summary mb-4">
                                <h3 class="summary-title">Cart Totals</h3>
                                <table class="total">
                                    @if (Session::has('coupon'))
                                        @if(isset($extracharge[0]->extracharge))
                                            @if($cart_total < 500)
                                                <tr>
                                                    <th>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Subtotal Amount</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">Rs.{{ $cart_total }}</p>
                                                    </td>
                                                </tr>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Coupon Name</h4>
                                                    </td>
                                                    <td>
                                                        <p class=" pt-5"> {{ session()->get('coupon')['coupon_name'] }}
                                                            <button type="submit" onclick="couponRemove()"><i
                                                                    class="fa fa-times"></i></button>
                                                        </p>

                                                    </td>
                                                </tr>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Discount Amount</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">(-)
                                                            Rs. {{ session()->get('coupon')['discount_amount'] }}</p>
                                                    </td>
                                                </tr>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Shipping Charge</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">(+) Rs.{{$extracharge[0]->extracharge}}</p>
                                                    </td>
                                                </tr>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Grand Total Amount</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">
                                                            Rs. {{ session()->get('coupon')['total_amount'] + $extracharge[0]->extracharge}}</p>
                                                    </td>
                                                </tr>
                                                </th>
                                                </tr>
                                            @else
                                                <tr>
                                                    <th>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Subtotal Amount</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">Rs.{{ $cart_total }}</p>
                                                    </td>
                                                </tr>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Coupon Name</h4>
                                                    </td>
                                                    <td>
                                                        <p class=" pt-5"> {{ session()->get('coupon')['coupon_name'] }}
                                                            <button type="submit" onclick="couponRemove()"><i
                                                                    class="fa fa-times"></i></button>
                                                        </p>

                                                    </td>
                                                </tr>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Discount Amount</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">(-)
                                                            Rs. {{ session()->get('coupon')['discount_amount'] }}</p>
                                                    </td>
                                                </tr>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Grand Total Amount</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">
                                                            Rs. {{ session()->get('coupon')['total_amount']}}</p>
                                                    </td>
                                                </tr>
                                                </th>
                                                </tr>
                                            @endif
                                        @else
                                            <tr>
                                                <th>
                                            <tr class="summary-subtotal">
                                                <td>
                                                    <h4 class="summary-subtitle">Subtotal Amount</h4>
                                                </td>
                                                <td>
                                                    <p class="pt-5">Rs.{{ $cart_total }}</p>
                                                </td>
                                            </tr>
                                            <tr class="summary-subtotal">
                                                <td>
                                                    <h4 class="summary-subtitle">Coupon Name</h4>
                                                </td>
                                                <td>
                                                    <p class=" pt-5"> {{ session()->get('coupon')['coupon_name'] }}
                                                        <button type="submit" onclick="couponRemove()"><i
                                                                class="fa fa-times"></i></button>
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr class="summary-subtotal">
                                                <td>
                                                    <h4 class="summary-subtitle">Discount Amount</h4>
                                                </td>
                                                <td>
                                                    <p class="pt-5">(-)
                                                        Rs. {{ session()->get('coupon')['discount_amount'] }}</p>
                                                </td>
                                            </tr>
                                            <tr class="summary-subtotal">
                                                <td>
                                                    <h4 class="summary-subtitle">Grand Total Amount</h4>
                                                </td>
                                                <td>
                                                    <p class="pt-5">
                                                        Rs. {{ session()->get('coupon')['total_amount']}}</p>
                                                </td>
                                            </tr>
                                            </th>
                                            </tr>
                                        @endif
                                    @else

                                        @if(isset($extracharge[0]->extracharge))
                                            @if($cart_total < 500)
                                                <tr>
                                                    <th>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Subtotal</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5"> Rs.{{ $cart_total }}</p>
                                                    </td>
                                                </tr>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Shipping Charge</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">(+) Rs. {{$extracharge[0]->extracharge}}</p>
                                                    </td>
                                                </tr>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Grand Total</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">
                                                            Rs.{{ $cart_total + $extracharge[0]->extracharge }}</p>
                                                    </td>
                                                </tr>
                                                </th>
                                                </tr>
                                            @else
                                                <tr>
                                                    <th>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Subtotal</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">Rs.{{ $cart_total }}</p>
                                                    </td>
                                                </tr>

                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">Grand Total</h4>
                                                    </td>
                                                    <td>
                                                        <p class="pt-5">Rs.{{ $cart_total }}</p>
                                                    </td>
                                                </tr>
                                                </th>
                                                </tr>
                                            @endif
                                        @else
                                            <tr>
                                                <th>
                                            <tr class="summary-subtotal">
                                                <td>
                                                    <h4 class="summary-subtitle">Subtotal</h4>
                                                </td>
                                                <td>
                                                    <p class="pt-5">Rs.{{ $cart_total }}</p>
                                                </td>
                                            </tr>

                                            <tr class="summary-subtotal">
                                                <td>
                                                    <h4 class="summary-subtitle">Grand Total</h4>
                                                </td>
                                                <td>
                                                    <p class="pt-5">Rs.{{ $cart_total }}</p>
                                                </td>
                                            </tr>
                                            </th>
                                            </tr>
                                        @endif
                                    @endif
{{--                                    <thead id="couponCalField">--}}

{{--                                    </thead>--}}
                                </table>
                                <a href="{{route('checkout-page')}}" class="btn btn-dim btn-checkout btn-block">Proceed to
                                    checkout</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
    @endif
    @include('frontend.frontend_layout.body.footer')
</div>

@include('frontend.frontend_layout.body.script')
<script>
    function cart() {
        $.ajax({
            type: 'GET',
            url: '/my-cart/list',
            dataType: 'json',
            success: function (response) {
                var rows = ""
                $.each(response.carts, function (key, value) {
                    rows += `<tr>
                                <td class="col-md-2"><img src="/${value.options.image} " alt="imga" style="width:60px; height:60px;"></td>
                                <td class="col-md-2">
                                    <div class="product-name"><a href="#">${value.name}</a></div>
                                    <div class="price">Rs. ${value.price}</div>
                                </td>
                                <td class="col-md-2">${value.options.color == null ? `<span>...</span>`:`<strong>${value.options.color}</strong>`}</td>

                                <td class="col-md-2">${value.options.size == null ? `<span>...</span>`:`<strong>${value.options.size}</strong>`}</td>

                                <td class="product-quantity">
                                    <div class="input-group">
                                                            <button class="quantity-minus p-icon-minus-solid"  id="${value.rowId}" onclick="cartDecrement(this.id)"></button>
                                                            <input class="form-control" type="number" min="1"
                                                                   max="1000000" value="${value.qty}">
                                                            <button class="quantity-plus p-icon-plus-solid" id="${value.rowId}" onclick="cartIncrement(this.id)"></button>
                                                        </div>
                                                    </td>
                                </td>
                                <td class="col-md-2"><strong>Rs. ${value.subtotal}</strong></td>

                                <td class="col-md-1 close-btn">
                                    <button type="submit" class="" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                            `
                });
                $('#cartPage').html(rows);
                $('.summary-subtotal-price').text('Rs.' + (response.cart_total))

            }
        });
    }

    cart();

    function cartRemove(id) {
        $.ajax({
            type: 'GET',
            url: '/remove/from-cart/' + id,
            dataType: 'json',
            success: function (data) {
                cart();
                miniCart();
                couponCalField();
                $('#applyCouponField').show();
                $('#coupon_name').val('');
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                } else {
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                location.reload(true);
                // End Message
            }
        });
    }

    function cartIncrement(id) {
        console.log(id);
        $.ajax({
            type: 'GET',
            url: '/add/in-cart/' + id,
            dataType: 'json',
            success: function (data) {
                cart();
                miniCart();
                couponCalField();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                } else {
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                location.reload();
                // End Message
            }
        });
    }

    function cartDecrement(id) {
        $.ajax({
            type: 'GET',
            url: '/reduce/from-cart/' + id,
            dataType: 'json',
            success: function (data) {
                cart();
                miniCart();
                couponCalField();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                } else {
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                location.reload();
                // End Message
            }
        });
    }
</script>
</body>
<!-- Mirrored from d-themes.com/html/panda/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:15:23 GMT -->
</html>



