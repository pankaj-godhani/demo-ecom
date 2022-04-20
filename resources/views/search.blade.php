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

{{--    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />--}}
{{--    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>--}}


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
                    {{--                    <div class="dropdown login-dropdown off-canvas">--}}
                    <div class="dropdown switcher d-md-show mr-5">
                        <a href="#"><i class="p-icon-user-solid"></i></a>
                        <ul class="dropdown-box">
                            {{--                                <li><a href="#" style="font-weight: bold;font-size: 15px"><i class="p-icon-user-solid mr-2"></i>Login</a></li>--}}
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
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <main class="main">
        <div class="page-content">
            <div class="row cols-xxl-4 cols-xl-4 cols-lg-3 cols-md-4 cols-2 " id="products-row">
            @if($posts->isNotEmpty())
                @foreach ($posts as $post)
                    <div class="text-center mt-10 mb-10">
                        <figure class="">
                            <a  href="{{ route('frontend-product-details',['id' => $post->id, 'slug' => $post->product_slug_en]) }}">
                                <img src="{{$post->product_thumbnail}}" alt="product"
                                     width="280" height="360">
                            </a>
                        </figure>
                        <div class="product-details">
                            <h5 class="product-name">
                                <a href="product-simple.html" class="product_name{{$post->id}}">
                                    {{$post->product_name_en}}
                                </a>
                            </h5>
                            @if($post->discount_price)
                                <span class="product-price">
                            <span class="price{{$post->id}}">{{$post->discount_price}} Rs.</span>
                        </span>
                            @else
                                <span class="product-price">
                            <span class="price{{$post->id}}">{{$post->selling_price}} Rs.</span>
                        </span>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <div
                    class="bg-gray-100 border-t border-b border-gray-500 text-gray-700 pt-10 pb-5 text-center mt-10 mb-10"
                    role="alert" style="font-size: 40px">
                    <p class="font-bold">No Product Found</p>
                </div>
            @endif
            </div>
        </div>
    </main>
@yield('content')
<!-- End Main -->
@include('frontend.user.footer')
<!-- End Footer -->
</div>


{{--<!-- Main JS File -->--}}
<script src="{{asset('frontend')}}/assets/js/main.min.js"></script>
@include('frontend.frontend_layout.body.script')
</body>



</html>
