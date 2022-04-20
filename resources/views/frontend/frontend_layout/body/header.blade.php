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
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        @if($categories)
                        @foreach($categories as $cat)
                        <li class="">
                            <a href="{{ route('category.products', ['id' => $cat->id, 'slug' => $cat->category_name_en]) }}">{{$cat->category_name_en}}</a>
                            <div class="megamenu">
                                <div class="row">
                                     @foreach ($cat->subcategory as $subcategory)
                                    <div class="col-6 col-sm-4">
                                        <h4 class="menu-title title-underline">
                                            <a href="{{ route('subcategory.products', ['id' => $subcategory->id, 'slug' => $subcategory->subcategory_slug_en]) }}">
                                            <span>{{ $subcategory->subcategory_name_en }}</span></a>
                                        </h4>
                                        <ul>
                                            @foreach ($subcategory->subsubcategory as $subsubcategory)
                                               <li><a href="{{ route('subsubcategory.products', ['id' => $subsubcategory->id, 'slug' => $subsubcategory->subsubcategory_slug_en]) }}">{{ $subsubcategory->subsubcategory_name_en }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endforeach
                                    <!-- End Megamenu -->
                                </div>
                            </div>
                        </li>
                        @endforeach
                            @endif
                    </ul>
                </nav>
            </div>
            <div class="header-right">

                <div class="dropdown switcher d-md-show mr-2">
                    <a href="#"><i class="p-icon-user-solid"></i></a>
                    <ul class="dropdown-box">
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


{{--                <a href="{{ route('listWishlist') }}" class="wishlist" title="Wishlist">--}}
{{--                    <i class="p-icon-heart-solid">--}}
{{--                        <span class="cart-count count">{{\App\Models\Wishlist::all()->count()}}</span>--}}
{{--                    </i>--}}
{{--                </a>--}}
                <div class="dropdown cart-dropdown off-canvas mr-2 mr-lg-4">
                    <a href="{{ route('listWishlist') }}">
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
                    <!-- End Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
</header>
