
@include('frontend.frontend_layout.body.style')

<body>
<div class="page-wrapper">
@include('frontend.frontend_layout.body.header')
<!-- End Header -->
    <main class="main checkout">
        <div class="page-content pt-8 pb-10 mb-4">
            <div class="step-by pr-4 pl-4">
                <h3 class="title title-step"><a href="cart.html">1. Shopping Cart</a></h3>
                <h3 class="title title-step active"><a href="checkout.html">2. Checkout</a></h3>
                <h3 class="title title-step"><a href="order.html">3. Order Complete</a></h3>
            </div>
            <div class="container mt-7">
                <form action="{{ route('checkout.store') }}" method="POST" class="form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7 mb-6 mb-lg-0 check-detail">
                            <h3 class="title text-left mt-3 mb-6">Shipping Address</h3>
                            <div class="row">

                                <div class="col-xs-6">
                                    <label>Name*</label>
                                    <input type="text" class="form-control unicase-form-control text-input"
                                           id="shippingName" placeholder="Enter your name here"
                                           name="shipping_name" value="{{ Auth::user()->name }}">
                                    @error('shipping_name')
                                    <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xs-6">
                                    <label>Email*</label>
                                    <input type="email" class="form-control unicase-form-control text-input"
                                           id="shippingEmail" placeholder="Enter your email here"
                                           name="shipping_email" value="{{ Auth::user()->email }}">
                                    @error('shipping_email')
                                    <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>Postcode / ZIP*</label>
                                    <input type="text" class="form-control unicase-form-control text-input"
                                           id="shippingPostCode" placeholder="Enter your name here"
                                           name="shipping_postCode">
                                    @error('shipping_postCode')
                                    <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-xs-6">
                                    <label>Phone*</label>
                                    <input type="text" class="form-control unicase-form-control text-input"
                                           id="shippingPhone" placeholder="Enter your phone number"
                                           name="shipping_phone" value="{{ Auth::user()->phone_number }}">
                                    @error('shipping_phone')
                                    <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <label>Shipping Addres</label>
                            <textarea name="shipping_address" id="" cols="30" rows="5"
                                      class="form-control unicase-form-control text-input"
                                      id="shippingAddrees"
                                      placeholder="">{{ Auth::user()->address }}</textarea>
                            @error('shipping_address')
                            <p style="color: red; margin-top: -20px">{{ $message }}</p>
                            @enderror


                            <label>Country / Region*</label>
                            <div class="select-box">
                                <select class="custom-select form-control unicase-form-control"
                                        aria-label="Division Select" name="division_id">
                                    <option selected>Select Country Name</option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}">
                                            {{ $division->division_name }}</option>
                                    @endforeach
                                </select>
                                @error('division_id')
                                <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                @enderror
                            </div>

                            <label>State*</label>
                            <div class="select-box">
                                <select class="custom-select form-control unicase-form-control"
                                        aria-label="District Select" name="district_id">
                                    <option selected="" disabled="">Select State Name</option>
                                </select>
                                @error('district_id')
                                <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                @enderror
                            </div>
                            <label>City*</label>
                            <div class="select-box">
                                <select class="custom-select form-control unicase-form-control"
                                        aria-label="State Select" name="state_id">
                                    <option selected="" disabled="">Select City Name</option>
                                </select>
                                @error('state_id')
                                <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                @enderror
                            </div>


                            <label>Shipping Notes</label>
                            <textarea name="shipping_notes" id="" cols="30" rows="5"
                                      class="form-control unicase-form-control text-input"
                                      id="shippingNotes" placeholder="any Shipping notes"></textarea>
                            @error('shipping_notes')
                            <p style="color: red; margin-top: -20px">{{ $message }}</p>
                            @enderror

                        </div>
                        <aside class="col-lg-5 sticky-sidebar-wrapper  pl-lg-6">
                            <div class="sticky-sidebar" data-sticky-options="{'bottom': 50}">
                                <div class="summary pt-5">
                                    <h3 class="title">Your Checkout Progress</h3>
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
                                                            style="height: 50px; width: 50px;" alt=""></div>
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <div class="product-name">{{$cart -> name}}
                                                        ×&nbsp;{{$cart -> qty}}</div>
                                                </td>

                                                <td>
                                                    <div class="product-name">{{$cart->total}}</div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

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
                                    <div class="payment accordion radio-type pb-5">
                                        <h4 class="summary-subtitle ls-m pb-3">Select Payment Method</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="radio" name="payment_method" id="" value="stripe">
                                                <label for="">Stripe</label>
                                                <img src="{{ asset('frontend/assets/images/payments/4.png') }}" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="payment_method" id="" value="card">
                                                <label for="">Razorpay</label>
                                                <img src="{{ asset('frontend/assets/images/payments/razorPay.jpeg') }}" width="50px" height="30px" alt="">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="payment_method" id="" value="cod">
                                                <label for="">COD</label>
                                                <img src="{{ asset('frontend/assets/images/payments/6.png') }}"  alt="">
                                            </div>
                                            @error('payment_method')
                                            <p style="color: red; margin-top: 20px">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dim btn-block mt-6">
                                        Order Confirm
                                    </button>
                                </div>
                            </div>
                        </aside>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- End Main -->
@include('frontend.frontend_layout.body.footer')
<!-- End Footer -->
</div>
<!-- Sticky Footer -->
<div class="sticky-footer sticky-content fix-bottom">
    <a href="demo1.html" class="sticky-link">
        <i class="p-icon-home"></i>
        <span>Home</span>
    </a>
    <a href="shop.html" class="sticky-link">
        <i class="p-icon-category"></i>
        <span>Categories</span>
    </a>
    <a href="wishlist.html" class="sticky-link">
        <i class="p-icon-heart-solid"></i>
        <span>Wishlist</span>
    </a>
    <a href="account.html" class="sticky-link">
        <i class="p-icon-user-solid"></i>
        <span>Account</span>
    </a>
    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="p-icon-search-solid"></i>
            <span>Search</span>
        </a>
        <form action="#" class="form-simple">
            <input type="text" name="search" autocomplete="off" placeholder="Search your keyword..." required/>
            <button class="btn btn-search" type="submit">
                <i class="p-icon-search-solid"></i>
            </button>
        </form>
    </div>
</div>
<!-- Scroll Top -->
<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="p-icon-arrow-up"></i>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 108.881, 400;"></circle>
    </svg>
</a>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
                    PhotoSwipe keeps only 3 of them in the DOM to save memory.
                    Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                <div class="pswp__preloader">
                    <div class="loading-spin"></div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
            <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- MobileMenu -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay">
    </div>
    <!-- End Overlay -->
    <a class="mobile-menu-close" href="#"><i class="p-icon-times"></i></a>
    <!-- End CloseButton -->
    <div class="mobile-menu-container scrollable">
        <form action="#" class="inline-form">
            <input type="search" name="search" autocomplete="off" placeholder="Search your keyword..." required/>
            <button class="btn btn-search" type="submit">
                <i class="p-icon-search-solid"></i>
            </button>
        </form>
        <!-- End Search Form -->
        <ul class="mobile-menu mmenu-anim">
            <li>
                <a href="demo1.html">Home</a>
            </li>
            <li>
                <a href="shop.html" class="active">Shop</a>
                <ul>
                    <li>
                        <a href="#">
                            Shop Layouts
                        </a>
                        <ul>
                            <li><a href="shop-list.html">Shop list</a></li>
                            <li><a href="shop-3-cols.html">3 Columns mode</a>
                            </li>
                            <li><a href="shop-4-cols.html">4 Columns mode</a></li>
                            <li><a href="shop-5-cols.html">5 Columns mode</a>
                            </li>
                            <li><a href="shop-6-cols.html">6 Columns mode</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Shop Variations
                        </a>
                        <ul>
                            <li><a href="shop-left-sidebar.html">With left sidebar</a>
                            </li>
                            <li><a href="shop-full-width.html">Full width</a>
                            </li>
                            <li><a href="shop-horizontal-filter.html">Horizontal filter</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Product Details
                        </a>
                        <ul>
                            <li><a href="product-simple.html">Default</a></li>
                            <li><a href="product-gallery.html">Gallery</a></li>
                            <li><a href="product-sticky.html">Sticky info</a></li>
                            <li><a href="product-full.html">Full width</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Woo Subpages
                        </a>
                        <ul>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="account.html">My account</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Elements</a>
                <ul>
                    <li>
                        <a href="#">Elements 1</a>
                        <ul>
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alert & Notification</a></li>
                            <li><a href="element-banner.html">Banner
                                </a></li>
                            <li><a href="element-banner-effect.html">Banner Effect
                                </a></li>
                            <li><a href="element-blog.html">Blog</a></li>
                            <li><a href="element-button.html">Button</a></li>
                            <li><a href="element-columns.html">Columns
                                </a></li>
                            <li><a href="element-countdown.html">Countdown</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Elements 2</a>
                        <ul>
                            <li><a href="element-creative-grid.html">Creative Grid</a></li>
                            <li><a href="element-counter.html">Counter
                                </a></li>
                            <li><a href="element-entrance-effect.html">Entrance Effect
                                </a></li>
                            <li><a href="element-mouse-tracking.html">Mouse Tracking Effect
                                </a></li>
                            <li><a href="element-hotspot.html">Hotspot
                                </a></li>
                            <li><a href="element-icon-box.html">Icon Box</a></li>
                            <li><a href="element-icons.html">Icon Library</a></li>
                            <li><a href="element-image-box.html">Image box
                                </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Elements 3</a>
                        <ul>
                            <li><a href="element-image-gallery.html">Image Gallery</a></li>
                            <li><a href="element-categories.html">Category</a></li>
                            <li><a href="element-products.html">Products
                                </a></li>
                            <li><a href="element-product-banner.html">Products + Banner
                                </a></li>
                            <li><a href="element-product-tabs.html">Product Tab
                                </a>
                            </li>
                            <li><a href="element-section.html">Section Divider

                                </a></li>
                            <li><a href="element-slider.html">Slider
                                </a></li>
                            <li><a href="element-social.html">Social Icons
                                </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Elements 4</a>
                        <ul>
                            <li><a href="element-tabs.html">Tabs
                                </a></li>
                            <li><a href="element-testimonial.html">Testimonial

                                </a></li>
                            <li><a href="element-title.html">Title</a></li>
                            <li><a href="element-typography.html">Typography
                                </a></li>
                            <li><a href="element-video.html">Video</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="blog.html">Blog</a>
                <ul>
                    <li><a href="blog.html">Classic</a></li>
                    <li><a href="blog-single.html">Single Post</a></li>
                    <li><a href="blog-2-grid.html">Grid 2 Columns</a></li>
                    <li><a href="blog-3-grid.html">Grid 3 Columns</a></li>
                    <li><a href="blog-4-grid.html">Grid 4 Columns</a></li>
                    <li><a href="blog-sidebar.html">Grid Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Pages</a>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="account.html">My Account</a></li>
                    <li><a href="faq.html">Faqs</a></li>
                    <li><a href="error.html">Error 404</a></li>
                    <li><a href="coming.html">Coming Soon</a></li>
                </ul>
            </li>
            <li><a href="https://d-themes.com/buynow/pandahtml/">Buy Panda!</a></li>
        </ul>
        <!-- End MobileMenu -->
    </div>
</div>
<!-- Plugins JS File -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="division_id"]').on('change', function () {
            var division_id = $(this).val();
            if (division_id) {
                $.ajax({
                    url: "{{ url('/division/district/ajax') }}/" + division_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="state_id"]').html('');
                        var d = $('select[name="district_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="district_id"]').append(
                                '<option value="' + value.id + '">' + value
                                    .district_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="district_id"]').on('change', function () {
            var district_id = $(this).val();
            if (district_id) {
                $.ajax({
                    url: "{{ url('/district/state/ajax') }}/" + district_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        var d = $('select[name="state_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="state_id"]').append('<option value="' +
                                value.id + '">' + value.state_name + '</option>'
                            );
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>


@include('frontend.frontend_layout.body.script')
</body>


<!-- Mirrored from d-themes.com/html/panda/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:14:54 GMT -->
</html>
