<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from d-themes.com/html/panda/demo5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:13:28 GMT -->
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Panda - Ultimate eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Panda - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('frontend')}}/assets/images/icons/favicon.png">
    <!-- Preload Font -->

    <link rel="preload" href="{{asset('frontend')}}/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2"
          as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{asset('frontend')}}/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2"
          as="font" type="font/woff2"
          crossorigin="anonymous">

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>


    <script>
        WebFontConfig = {
            google: {families: ['Josefin Sans:300,400,600,700']}
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendor/animate/animate.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('frontend')}}/assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/demo5.min.css">
</head>

<style>
    .search-box {
        width: fit-content;
        height: fit-content;
        position: relative;
    }

    .input-search::placeholder {
        color: rgba(255, 255, 255, .5);
        font-size: 15px;
        letter-spacing: 2px;
        font-weight: 50;
    }

    .btn-search {
        width: 50px;
        height: 50px;
        border-style: none;
        font-size: 20px;
        font-weight: bold;
        outline: none;
        cursor: pointer;
        border-radius: 50%;
        position: absolute;
        right: 0px;
        color: #ffffff;
        background-color: transparent;
        pointer-events: painted;
    }

    .btn-search ~ .input-search {
        width: 500px;
        border-radius: 0px;
        /*background-color: transparent;*/
        border-bottom: 1px solid rgba(255, 255, 255, .5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }

    .input-search {
        width: 300px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom: 1px solid rgba(255, 255, 255, .5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }
</style>
<body class="home">
<div class="page-wrapper">

    <header class="header header-dark">
        <div class="header-middle has-border has-center sticky-header fix-top sticky-content bg-dark">
            <div class="container-fluid">
                <div class="header-left d-xxl-show">
                    <a href="#" class="mobile-menu-toggle">
                        <i class="p-icon-bars-solid"></i>
                    </a>
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('frontend')}}/assets/images/logo-dark.png" alt="logo" width="171" height="41">
                    </a>
                </div>
                <div class="header-center header-full-product">
                    <div class="search-box">
                        <form action="{{ route('search') }}" method="GET">
                            <button class="btn-search" type="submit"><i class="fas fa-search"></i></button>
                            <input type="text" class="input-search" name="search" placeholder="Type to Search...">
                        </form>
                    </div>
                </div>
                <div class="header-right">
                                        <div class="dropdown login-dropdown off-canvas">
                    <div class="dropdown switcher d-md-show mr-5">
                        <a href="#"><i class="p-icon-user-solid"></i></a>
                        <ul class="dropdown-box">
                                                            <li><a href="#" style="font-weight: bold;font-size: 15px"><i class="p-icon-user-solid mr-2"></i>Login</a></li>
                            @auth
                                <li><a href="{{ route('user.logout') }}" style="font-weight: bold;font-size: 15px"><i
                                            class="icon fa fa-user mr-2"></i>User Logout</a></li>
                                <li><a href="{{ route('user.profile') }}" style="font-weight: bold;font-size: 15px"><i
                                            class="p-icon-user-solid mr-2"></i>profile</a></li>
                            @else
                                <li><a href="{{ route('login') }}" style="font-weight: bold;font-size: 15px"><i
                                            class="icon fa fa-lock mr-2"></i>Login/Register</a></li>
                            @endauth

                        </ul>
                    </div>

                    <div class="dropdown cart-dropdown off-canvas mr-2 mr-lg-4">
                        <a href="{{ route('listWishlist') }}" >
                            <i class="p-icon-heart-solid" style="font-size: 1.65em;margin: 1px 2px 0 0">
                                <span class="cart-count count">{{\App\Models\Wishlist::all()->count()}}</span>
                            </i>
                        </a>
                    </div>
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
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="page-header mb-5 mt-5" style="background-color: #efefef;border-radius: 20px">
                    <h1 class="page-title">All Product <span style="font-size: 20px">( {{$product_count}} Items )</span> </h1>
                </div>
            </div>
            <div class="row cols-xxl-4 cols-xl-4 cols-lg-3 cols-md-4 cols-2 mb-5 justify-content-center" id="products-row">
                @if($new_products)
                    @foreach($new_products as $product)
                        <div class="product shadow-media text-center">
                            <style>
                                .tag {
                                    font-size: 10px;
                                    font-weight: 700;
                                    text-transform: uppercase;
                                    border-radius: 20px;
                                    color: #fff;
                                    text-align: center;
                                }
                                .tag.new {
                                    background: #fca03d;
                                }
                            </style>
                            @php
                                $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                            @endphp
                            @if ($product->discount_price == NULL)
                                <div class="tag new"><span>New</span></div>
                            @else
                                <div class="tag new"><span>{{ round($discount_amount) }}%</span></div>
                            @endif
                            <figure class="">

                                <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    <img src="{{asset('')}}{{$product->product_thumbnail}}" alt="product"
                                         width="280" height="360">
                                </a>
                                <div class="product-action-vertical">
                                    <input type="hidden" name="" class="product_id{{ $product->id }}"  value="{{ $product->id }}" min="1">
                                    <input type="hidden" name="" class="product_color{{ $product->id }}"  value="{{$product->product_color_en}}" min="1">
                                    <input type="hidden" name="" class="product_size{{ $product->id }}"  value="{{$product->product_size_en}}" min="1">
                                    <input type="hidden" name="" class="product_qty{{ $product->id }}"  value="{{$product->product_qty}}" min="1">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a href="#" class="btn-product-icon btn-wishlist" onclick="addToWishlist(this.id)" id="{{$product->id}}" style="background: #0b0b0b ;" title="Add to Wishlist">
                                        <i class="p-icon-heart-solid"></i>
                                    </a>
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                                <a href="#" class="btn-product-icon btn-quickview btn-dim" style="background: #0b0b0b ;" title="Quick View" data-modal-toggle="product-modal">
                                                                    <i class="p-icon-search-solid" ></i>
                                                                </a>
                                                                <a href="#"
                                                                   class="btn-product btn-quickview btn btn-dim btn-uotline mr-1"
                                                                   data-modal-toggle="product-modal">QUICK
                                                                    VIEW</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h5 class="product-name">
                                    <a href="product-simple.html" class="product_name{{$product->id}}">
                                        {{$product->product_name_en}}
                                    </a>
                                </h5>
                                @if($product->discount_price)
                                    <span class="product-price">
                            <span class="price{{$product->id}}">{{$product->discount_price}} Rs.</span>
                        </span>
                                @else
                                    <span class="product-price">
                            <span class="price{{$product->id}}">{{$product->selling_price}} Rs.</span>
                        </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>
@yield('content')
<!-- End Main -->
@include('frontend.user.footer')
<!-- End Footer -->
</div>

<!-- Main JS File -->
<script src="{{asset('frontend')}}/assets/js/main.min.js"></script>
@include('frontend.frontend_layout.body.script')
</body>


<!-- Mirrored from d-themes.com/html/panda/demo5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:13:33 GMT -->
</html>
