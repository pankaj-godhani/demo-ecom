
    <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d-themes.com/html/panda/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:15:23 GMT -->
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Panda - Ultimate eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Panda - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('frontend')}}/assets/images/icons/favicon.png">
    <!-- Preload Font -->

    <link rel="preload" href="{{asset('frontend')}}/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{asset('frontend')}}/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">

    <script>
        WebFontConfig = {
            google: { families: [ 'Josefin Sans:300,400,500,600,700' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>


    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendor/animate/animate.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/style.min.css">
</head>
<body>
<div class="page-wrapper">
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
                                <a href="{{route('home')}}">Home</a>
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

    <!-- End Header -->
    <main class="main">
        <div class="page-header" style="background-color: #f9f8f4">
            <h1 class="page-title">My Account</h1>
        </div>
        <nav class="breadcrumb-nav has-border">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="demo1.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li>My account</li>
                </ul>
            </div>
        </nav>
        <div class="page-content">
            <div class="container pt-8 pb-10">
                <div class="login-popup mx-auto pl-6 pr-6 pb-9">
                    <div class="form-box">
                        <div class="tab tab-nav-underline tab-nav-boxed">
                            <ul class="nav nav-tabs nav-fill align-items-center justify-content-center mb-4">
                                <li class="nav-item">
                                    <a class="nav-link active lh-1 ls-normal" href="#signin-1">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#register-1" class="nav-link lh-1 ls-normal">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="signin-1">
                                    <form class="register-form outer-top-xs" role="form" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                                        </div>
                                        @error('email')
                                        <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                            <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                                        </div>
                                        @error('password')
                                        <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                        @enderror
                                        <div class="radio outer-xs">
                                            <label>
                                                <input type="radio" name="remember" id="optionsRadios2" value="option2">Remember me!
                                            </label>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="forgot-password pull-right">Forgot your Password?</a>
                                            @endif
                                        </div><br>
                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                                    </form>

                                </div>
                                <div class="tab-pane" id="register-1">
                                    <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
                                        </div>
                                        @error('email')
                                        <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                            <input type="text" name="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                                        </div>
                                        @error('name')
                                        <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                                            <input type="text" name="phone_number" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                                        </div>
                                        @error('phone_number')
                                        <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label class="info-title" for="address">Address <span>*</span></label>
                                            <input type="text" name="address" class="form-control unicase-form-control text-input" id="address">
                                        </div>
                                        @error('address')
                                        <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
                                            <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                                        </div>
                                        @error('password')
                                        <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                                            <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                                        </div>
                                        @error('password_confirmation')
                                        <p style="color: red; margin-top: -20px">{{ $message }}</p>
                                        @enderror
                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main -->
@include('frontend.frontend_layout.body.footer')
    <!-- End Footer -->
</div>
<!-- Sticky Footer -->
@include('frontend.frontend_layout.body.sticky_footer')
 @include('frontend.frontend_layout.body.script')
</body>
</html>

