
@include('frontend.frontend_layout.body.style')
<header class="header">
    <div class="header-middle has-center sticky-header fix-top sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle" title="Mobile Menu">
                    <i class="p-icon-bars-solid"></i>
                </a>
                <a href="{{route('home')}}" class="logo">
                    <img src="{{ asset('frontend') }}/assets/images/logo.png" alt="logo" width="171" height="41">
                </a>
                <!-- End of Divider -->
            </div>
            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="active">
                            <a href="{{route('remove-cart')}}">Home</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="dropdown switcher d-md-show mr-2">
                    <a href="#"><i class="p-icon-user-solid"></i></a>
                    <ul class="dropdown-box">
                        {{--                                <li><a href="#" style="font-weight: bold;font-size: 15px"><i class="p-icon-user-solid mr-2"></i>Login</a></li>--}}
                        @auth
                            <li><a href="{{ route('user.logout') }}" style="font-weight: bold;font-size: 15px"><i
                                        class="icon fa fa-user mr-2"></i>User Logout</a></li>
                            <li><a href="#" style="font-weight: bold;font-size: 15px"><i
                                        class="p-icon-user-solid mr-2"></i>profile</a></li>
                        @else
                            <li><a href="{{ route('login') }}" style="font-weight: bold;font-size: 15px"><i
                                        class="icon fa fa-lock mr-2"></i>Login/Register</a></li>
                        @endauth

                    </ul>
                </div>
                <a href="{{ route('listWishlist') }}" class="wishlist" title="Wishlist">
                    <i class="p-icon-heart-solid"></i>
                </a>

                <div class="dropdown cart-dropdown off-canvas mr-0 mr-lg-2">
                    <a href="{{ route('myCartView') }}" class="cart-toggle link">
                        <i class="p-icon-cart-solid">
                            <span class="cart-count count" id="cartQty"></span>
                        </i>
                    </a>
                    <div class="canvas-overlay"></div>
                    <div class="dropdown-box">
                        <div class="canvas-header">
                            <h4 class="canvas-title">Shopping Cart</h4>
                            <a href="#" class="btn btn-dark btn-link btn-close">close<i
                                    class="p-icon-arrow-long-right"></i><span class="sr-only">Cart</span></a>
                        </div>
                        <div class="products scrollable">
                            <div id="miniCart">

                            </div>
                            <!-- End of Cart Product -->
                        </div>
                        <!-- End of Products  -->
                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="summary-subtotal-price"></span>
                        </div>
                        <!-- End of Cart Total -->
                        <div class="cart-action">
                            <a href="{{route('myCartView')}}" class="btn btn-outline btn-dim mb-2">View
                                Cart</a>
                            <a href="checkout.html" class="btn btn-dim"><span>Go To Checkout</span></a>
                        </div>
                        <!-- End of Cart Action -->
                    </div>
                    <!-- End Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
</header>

<main class="main order">
    <div class="page-content pt-8 pb-10 mb-10">
        <div class="step-by pr-4 pl-4">
            <h3 class="title title-step"><a href="{{route('myCartView')}}">1.Shopping Cart</a></h3>
            <h3 class="title title-step"><a href="{{route('checkout-page')}}">2.Checkout</a></h3>
            <h3 class="title title-step active"><a href="order.html">3.Order Complete</a></h3>
        </div>
        <div class="container mt-7">
            <div class="order-message">
                <div class="icon-box d-inline-flex align-items-center">
                    <div class="icon-box-icon mb-0">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                             enable-background="new 0 0 50 50" xml:space="preserve">
                                    <g>
                                        <path fill="none" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="bevel" stroke-miterlimit="10" d="
                        											M33.3,3.9c-2.7-1.1-5.6-1.8-8.7-1.8c-12.3,0-22.4,10-22.4,22.4c0,12.3,10,22.4,22.4,22.4c12.3,0,22.4-10,22.4-22.4
                        											c0-0.7,0-1.4-0.1-2.1"></path>
                                        <polyline fill="none" stroke-width="3" stroke-linecap="round"
                                                  stroke-linejoin="bevel" stroke-miterlimit="10" points="
                        											48,6.9 24.4,29.8 17.2,22.3 	"></polyline>
                                    </g>
                                </svg>
                    </div>
                    <h3 class="icon-box-title">Thank you. Your Order has been received.</h3>
                </div>
            </div>
            <div class="order-results row cols-xl-6 cols-md-3 cols-sm-2 mt-10 pt-2 mb-4">
                    <div class="overview-item">
                    <span>Order number</span>
                        <label>{{$invoice->order_number}}</label>
                </div>
                <div class="overview-item">
                    <span>Status</span>
                    <label>{{$invoice->status}}</label>
                </div>
                <div class="overview-item">
                    <span>Date</span>
                    <label>{{$invoice->order_date}}</label>
                </div>

                <div class="overview-item">
                    <span>Email</span>
                    <label>{{$invoice->email}}</label>
                </div>
                <div class="overview-item">

                    <span>Total</span>
                    <label>{{ $invoice->amount}}</label>
                </div>
                <div class="overview-item">
                    <span>Payment method:</span>
                    <label>{{$invoice->payment_type}}</label>
                </div>
            </div>
            <h2 class="detail-title mb-6">Order Details</h2>
            <div class="order-details">
                <table class="order-details-table">
                    <thead>
                    <tr class="summary-subtotal">
                        <td>
                            <h3 class="summary-subtitle">Your Order</h3>
                        </td>
                        <td></td>
                    </tr>
                    <tr class="summary-subtotal">
                        <td class="product-subtitle">Product</td>
                        <td></td>
                        <td class="product-subtitle">Name</td>
                        <td class="product-subtitle">Qty</td>
                        <td class="product-subtitle">Price</td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($carts as $cart)
                        <tr class="summary-subtotal">
                            <td>
                                <div class="product-name"><img
                                        src="{{ asset($cart->options->image) }}"
                                        style="height: 50px; width: 50px;" alt=""></div>
                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="product-name">{{$cart -> name}}</div>
                            </td>
                            <td>
                                <div class="product-name">{{$cart -> qty}}</div>
                            </td>

                            <td>
                                <div class="product-name">{{$cart -> price}}</div>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="summary-subtotal">
                        <td>
                            <h4 class="summary-subtitle">Subtotal:</h4>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="summary-value font-weight-normal">{{ $invoice->amount}}</td>
                    </tr>
                    <tr class="summary-subtotal">
                        <td>
                            <h4 class="summary-subtitle">Payment method:</h4>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="summary-value">{{ $invoice->payment_type}}</td>
                    </tr>
                    <tr class="summary-subtotal">
                        <td>
                            <h4 class="summary-subtitle">Total:</h4>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <p class="summary-total-price">{{ $invoice->amount}}</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


@include('frontend.frontend_layout.body.script')

@include('frontend.frontend_layout.body.footer')


