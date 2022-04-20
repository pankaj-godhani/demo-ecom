
<style>
    .search-box{
        width: fit-content;
        height: fit-content;
        position: relative;
    }
    .input-search::placeholder{
        color:rgba(255,255,255,.5);
        font-size: 15px;
        letter-spacing: 2px;
        font-weight: 50;
    }
    .btn-search{
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
        color:#ffffff ;
        background-color:transparent;
        pointer-events: painted;
    }
    .btn-search ~ .input-search{
        width: 500px;
        border-radius: 0px;
        /*background-color: transparent;*/
        border-bottom:1px solid rgba(255,255,255,.5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }
    .input-search{
        width: 300px;
        border-radius: 0px;
        background-color: transparent;
        border-bottom:1px solid rgba(255,255,255,.5);
        transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
    }
</style>

<header class="header header-transparent">
    <div class="sticky-content-wrapper" style="height: 109.094px;">
        <div class="header-middle has-center sticky-header fix-top sticky-content fixed"
             style="margin-top: 0px; z-index: 1060;">
            <div class="container-fluid">
                <div class="header-left">
                    <a href="#" class="mobile-menu-toggle">
                        <i class="p-icon-bars-solid"></i>
                    </a>
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('frontend')}}/assets/images/logo-dark.png" alt="logo" width="171" height="41">
                    </a>
                </div>
                <div class="header-center d-flex"><div class="search-box">
                        <form action="{{ route('search') }}" method="GET">
                        <button class="btn-search" type="submit"><i class="fas fa-search"></i></button>
                        <input type="text" class="input-search" name="search" placeholder="Type to Search...">
                        </form>
                    </div>
                </div>
                <div class="header-right">
                        <div class="dropdown switcher d-md-show mr-5">
                            <a href="#"><i class="p-icon-user-solid"></i></a>
                            <ul class="dropdown-box">
                                @auth
                                    <li><a href="{{ route('user.logout') }}" style="font-weight: bold;font-size: 15px"><i class="icon fa fa-user mr-2"></i>User Logout</a></li>
                                    <li><a href="{{ route('user.profile') }}" style="font-weight: bold;font-size: 15px"><i class="p-icon-user-solid mr-2"></i>profile</a></li>
                                @else
                                    <li><a href="{{ route('login') }}" style="font-weight: bold;font-size: 15px"><i class="icon fa fa-lock mr-2"></i>Login/Register</a></li>
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
    </div>
</header>
