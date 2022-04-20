{{--<section class="grey-section category-section pt-10 pb-6">--}}
{{--    <div class="container-fluid pt-8 pb-7">--}}
{{--        <h2 class="text-center mb-8">--}}
{{--            Top Categories of the Month--}}
{{--        </h2>--}}
{{--        <div class="row cols-2 cols-md-3 cols-lg-6 cols-xxl-8 justify-content-center">--}}
{{--            @foreach ($categories as $category)--}}
{{--                <div class="category">--}}
{{--                    <a href="">--}}
{{--                        <figure>--}}
{{--                            <img src="{{$category->category_image}}" alt="category" width="178"--}}
{{--                                 height="195">--}}
{{--                        </figure>--}}
{{--                    </a>--}}
{{--                    <div class="category-content">--}}
{{--                        <h6 class="category-name"><a href="shop.html">{{$category->category_name_en}}</a>--}}
{{--                        </h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<div class="container">
    <section class="mt-3">
        <h2 class="text-center mb-7">Hot Deals</h2>
        <div class="owl-carousel owl-theme owl-nav-outer slider-brand row cols-lg-4 cols-md-3 cols-2"
             data-owl-options="{
                            'nav': true,
                            'dots': false,
                            'margin': 20,
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2,
                                    'autoplay': true,
                                    'nav': false
                                },
                                '768': {
                                    'items': 3,
                                    'nav': false
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
            @php
                $hot_deals_products = App\Models\Product::where('hot_deals', 1)
                    ->where('discount_price','!=',NULL)->latest()->limit(6)->get();
            @endphp
            @foreach($hot_deals_products as $new_product)
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            @php
                                $discount_amount = (($new_product->selling_price-$new_product->discount_price)/($new_product->selling_price))*100
                            @endphp
                            @if ($new_product->discount_price == NULL)
                                <div class="tag new"><span>New</span></div>
                            @else
                                <div class="tag new"><span>{{ round($discount_amount) }}% off</span></div>
                            @endif
                            <a href="{{ route('frontend-product-details',['id' => $new_product->id, 'slug' => $new_product->product_slug_en]) }}">
                                <img src="{{asset('')}}{{$new_product->product_thumbnail}}" alt="product"
                                     style="border: 1px solid #e3e2e2; padding: 5px;border-radius: 10px"
                                     width="295"
                                     height="369"/>
                            </a>
                        </figure>
                        <div class="product-action-vertical">
                            <input type="hidden" name="" class="product_id{{ $new_product->id }}"
                                   value="{{ $new_product->id }}" min="1">
                            <input type="hidden" name="" class="product_color{{ $new_product->id }}"
                                   value="{{$new_product->product_color_en}}" min="1">
                            <input type="hidden" name="" class="product_size{{ $new_product->id }}"
                                   value="{{$new_product->product_size_en}}" min="1">
                            <input type="hidden" name="" class="product_qty{{ $new_product->id }}"
                                   value="{{$new_product->product_qty}}" min="1">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            {{--                            <a href="#" type="submit" onclick="addToCart()"  data-toggle="modal" data-target="#addCartModal"  data="{{$new_product->id}}" class="btn-product-icon" style="background: #0b0b0b;"--}}
                            {{--                               id="addcart" title="Add to Cart"  >--}}
                            {{--                                <i class="p-icon-cart-solid"></i>--}}
                            {{--                            </a>--}}
                            {{--                             data-toggle="modal" data-target="#addCartModal" btn-cart--}}
                            <a href="#" class="btn-product-icon btn-wishlist" onclick="addToWishlist(this.id)"
                               id="{{$new_product->id}}" style="background: #0b0b0b ;" title="Add to Wishlist">
                                <i class="p-icon-heart-solid"></i>
                            </a>
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            {{--                            <a href="#" class="btn-product-icon btn-quickview btn-dim" style="background: #0b0b0b ;" title="Quick View" data-modal-toggle="product-modal">--}}
                            {{--                                <i class="p-icon-search-solid" ></i>--}}
                            {{--                            </a>--}}
                            {{--                            <a href="#"--}}
                            {{--                               class="btn-product btn-quickview btn btn-dim btn-uotline mr-1"--}}
                            {{--                               data-modal-toggle="product-modal">QUICK--}}
                            {{--                                VIEW</a>--}}
                        </div>
                        <div class="product-details">
                            {{--                            <div class="ratings-container">--}}
                            {{--                                <div class="ratings-full">--}}
                            {{--                                    <span class="ratings" style="width:60%"></span>--}}
                            {{--                                    <span class="tooltiptext tooltip-top"></span>--}}
                            {{--                                </div>--}}
                            {{--                                <a href="product-simple.html#content-reviews"--}}
                            {{--                                   class="rating-reviews hash-scroll">(12)</a>--}}
                            {{--                            </div>--}}
                            <h5 class="product-name">
                                <a href="#">
                                  {{ substr($new_product->product_name_en, 0, 34) }}
                                </a>
                            </h5>
                            <div class="product-price">
                                <ins class="new-price">{{$new_product->selling_price}} Rs.</ins>
                            </div>
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
                        </div>
                    </div>
                    <!-- End .product -->
                </div>
            @endforeach
        </div>
        <!-- End .row -->
    </section>


</div>
<div class="container">
    <section class="mt-3">
        <h2 class="text-center mb-7">Special Deals</h2>
        <div class="owl-carousel owl-theme owl-nav-outer slider-brand row cols-lg-4 cols-md-3 cols-2"
             data-owl-options="{
                            'nav': true,
                            'dots': false,
                            'margin': 20,
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2,
                                    'autoplay': true,
                                    'nav': false
                                },
                                '768': {
                                    'items': 3,
                                    'nav': false
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
            @php
                $special_deals_products = App\Models\Product::where('special_deals', 1)->latest()->limit(5)->get();
            @endphp
            @foreach($special_deals_products as $new_product)
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            @php
                                $discount_amount = (($new_product->selling_price-$new_product->discount_price)/($new_product->selling_price))*100
                            @endphp
                            @if ($new_product->discount_price == NULL)
                                <div class="tag new"><span>New</span></div>
                            @else
                                <div class="tag new"><span>{{ round($discount_amount) }}% off</span></div>
                            @endif
                            <a href="{{ route('frontend-product-details',['id' => $new_product->id, 'slug' => $new_product->product_slug_en]) }}">
                                <img src="{{asset('')}}{{$new_product->product_thumbnail}}" alt="product"
                                     style="border: 1px solid #e3e2e2; padding: 5px;border-radius: 10px"
                                     width="295"
                                     height="369"/>
                            </a>
                        </figure>
                        <div class="product-action-vertical">
                            <input type="hidden" name="" class="product_id{{ $new_product->id }}"
                                   value="{{ $new_product->id }}" min="1">
                            <input type="hidden" name="" class="product_color{{ $new_product->id }}"
                                   value="{{$new_product->product_color_en}}" min="1">
                            <input type="hidden" name="" class="product_size{{ $new_product->id }}"
                                   value="{{$new_product->product_size_en}}" min="1">
                            <input type="hidden" name="" class="product_qty{{ $new_product->id }}"
                                   value="{{$new_product->product_qty}}" min="1">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            {{--                            <a href="#" type="submit" onclick="addToCart()"  data-toggle="modal" data-target="#addCartModal"  data="{{$new_product->id}}" class="btn-product-icon" style="background: #0b0b0b;"--}}
                            {{--                               id="addcart" title="Add to Cart"  >--}}
                            {{--                                <i class="p-icon-cart-solid"></i>--}}
                            {{--                            </a>--}}
                            {{--                             data-toggle="modal" data-target="#addCartModal" btn-cart--}}
                            <a href="#" class="btn-product-icon btn-wishlist" onclick="addToWishlist(this.id)"
                               id="{{$new_product->id}}" style="background: #0b0b0b ;" title="Add to Wishlist">
                                <i class="p-icon-heart-solid"></i>
                            </a>
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            {{--                            <a href="#" class="btn-product-icon btn-quickview btn-dim" style="background: #0b0b0b ;" title="Quick View" data-modal-toggle="product-modal">--}}
                            {{--                                <i class="p-icon-search-solid" ></i>--}}
                            {{--                            </a>--}}
                            {{--                            <a href="#"--}}
                            {{--                               class="btn-product btn-quickview btn btn-dim btn-uotline mr-1"--}}
                            {{--                               data-modal-toggle="product-modal">QUICK--}}
                            {{--                                VIEW</a>--}}
                        </div>
                        <div class="product-details">
                            {{--                            <div class="ratings-container">--}}
                            {{--                                <div class="ratings-full">--}}
                            {{--                                    <span class="ratings" style="width:60%"></span>--}}
                            {{--                                    <span class="tooltiptext tooltip-top"></span>--}}
                            {{--                                </div>--}}
                            {{--                                <a href="product-simple.html#content-reviews"--}}
                            {{--                                   class="rating-reviews hash-scroll">(12)</a>--}}
                            {{--                            </div>--}}
                            <h5 class="product-name">
                                <a href="#">
                                    {{ substr($new_product->product_name_en, 0, 34) }}
                                </a>
                            </h5>
                            <div class="product-price">
                                <ins class="new-price">{{$new_product->selling_price}} Rs.</ins>
                            </div>
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
                        </div>
                    </div>
                    <!-- End .product -->
                </div>
            @endforeach
        </div>
        <!-- End .row -->
    </section>


</div>
<div class="container">
    <section class="mt-3">
        <h2 class="text-center mb-7"> Special Offer</h2>
        <div class="owl-carousel owl-theme owl-nav-outer slider-brand row cols-lg-4 cols-md-3 cols-2"
             data-owl-options="{
                            'nav': true,
                            'dots': false,
                            'margin': 20,
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2,
                                    'autoplay': true,
                                    'nav': false
                                },
                                '768': {
                                    'items': 3,
                                    'nav': false
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
            @php
                $special_offer_products = App\Models\Product::where('special_offer', 1)->latest()->limit(5)->get();
            @endphp
            @foreach($special_offer_products as $new_product)
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            @php
                                $discount_amount = (($new_product->selling_price-$new_product->discount_price)/($new_product->selling_price))*100
                            @endphp
                            @if ($new_product->discount_price == NULL)
                                <div class="tag new"><span>New</span></div>
                            @else
                                <div class="tag new"><span>{{ round($discount_amount) }}% off</span></div>
                            @endif
                            <a href="{{ route('frontend-product-details',['id' => $new_product->id, 'slug' => $new_product->product_slug_en]) }}">
                                <img src="{{asset('')}}{{$new_product->product_thumbnail}}" alt="product"
                                     style="border: 1px solid #e3e2e2; padding: 5px;border-radius: 10px"
                                     width="295"
                                     height="369"/>
                            </a>
                        </figure>
                        <div class="product-action-vertical">
                            <input type="hidden" name="" class="product_id{{ $new_product->id }}"
                                   value="{{ $new_product->id }}" min="1">
                            <input type="hidden" name="" class="product_color{{ $new_product->id }}"
                                   value="{{$new_product->product_color_en}}" min="1">
                            <input type="hidden" name="" class="product_size{{ $new_product->id }}"
                                   value="{{$new_product->product_size_en}}" min="1">
                            <input type="hidden" name="" class="product_qty{{ $new_product->id }}"
                                   value="{{$new_product->product_qty}}" min="1">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            {{--                            <a href="#" type="submit" onclick="addToCart()"  data-toggle="modal" data-target="#addCartModal"  data="{{$new_product->id}}" class="btn-product-icon" style="background: #0b0b0b;"--}}
                            {{--                               id="addcart" title="Add to Cart"  >--}}
                            {{--                                <i class="p-icon-cart-solid"></i>--}}
                            {{--                            </a>--}}
                            {{--                             data-toggle="modal" data-target="#addCartModal" btn-cart--}}
                            <a href="#" class="btn-product-icon btn-wishlist" onclick="addToWishlist(this.id)"
                               id="{{$new_product->id}}" style="background: #0b0b0b ;" title="Add to Wishlist">
                                <i class="p-icon-heart-solid"></i>
                            </a>
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            {{--                            <a href="#" class="btn-product-icon btn-quickview btn-dim" style="background: #0b0b0b ;" title="Quick View" data-modal-toggle="product-modal">--}}
                            {{--                                <i class="p-icon-search-solid" ></i>--}}
                            {{--                            </a>--}}
                            {{--                            <a href="#"--}}
                            {{--                               class="btn-product btn-quickview btn btn-dim btn-uotline mr-1"--}}
                            {{--                               data-modal-toggle="product-modal">QUICK--}}
                            {{--                                VIEW</a>--}}
                        </div>
                        <div class="product-details">
                            {{--                            <div class="ratings-container">--}}
                            {{--                                <div class="ratings-full">--}}
                            {{--                                    <span class="ratings" style="width:60%"></span>--}}
                            {{--                                    <span class="tooltiptext tooltip-top"></span>--}}
                            {{--                                </div>--}}
                            {{--                                <a href="product-simple.html#content-reviews"--}}
                            {{--                                   class="rating-reviews hash-scroll">(12)</a>--}}
                            {{--                            </div>--}}
                            <h5 class="product-name">
                                <a href="#">
                                    {{ substr($new_product->product_name_en, 0, 34) }}
                                </a>
                            </h5>
                            <div class="product-price">
                                <ins class="new-price">{{$new_product->selling_price}} Rs.</ins>
                            </div>
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
                        </div>
                    </div>
                    <!-- End .product -->
                </div>
            @endforeach
        </div>
        <!-- End .row -->
    </section>


</div>
{{--<div class="container">--}}
{{--    <section class="mt-3">--}}
{{--        <h2 class="text-center mb-7">Featured products</h2>--}}
{{--        <div class="owl-carousel owl-theme owl-nav-outer slider-brand row cols-lg-4 cols-md-3 cols-2"--}}
{{--             data-owl-options="{--}}
{{--                            'nav': true,--}}
{{--                            'dots': false,--}}
{{--                            'margin': 20,--}}
{{--                            'loop': false,--}}
{{--                            'responsive': {--}}
{{--                                '0': {--}}
{{--                                    'items': 2,--}}
{{--                                    'autoplay': true,--}}
{{--                                    'nav': false--}}
{{--                                },--}}
{{--                                '768': {--}}
{{--                                    'items': 3,--}}
{{--                                    'nav': false--}}
{{--                                },--}}
{{--                                '992': {--}}
{{--                                    'items': 4--}}
{{--                                }--}}
{{--                            }--}}
{{--                        }">--}}
{{--            @php--}}
{{--                $featured_products = App\Models\Product::where('featured', 1)--}}
{{--                 ->latest()--}}
{{--                 ->limit(6)--}}
{{--                 ->get();--}}
{{--            @endphp--}}
{{--            @foreach($featured_products as $new_product)--}}
{{--                <div class="product-wrap">--}}
{{--                    <div class="product text-center">--}}
{{--                        <figure class="product-media">--}}
{{--                            @php--}}
{{--                                $discount_amount = (($new_product->selling_price-$new_product->discount_price)/($new_product->selling_price))*100--}}
{{--                            @endphp--}}
{{--                            @if ($new_product->discount_price == NULL)--}}
{{--                                <div class="tag new"><span>New</span></div>--}}
{{--                            @else--}}
{{--                                <div class="tag new"><span>{{ round($discount_amount) }}% off</span></div>--}}
{{--                            @endif--}}
{{--                            <a href="{{ route('frontend-product-details',['id' => $new_product->id, 'slug' => $new_product->product_slug_en]) }}">--}}
{{--                                <img src="{{asset('')}}{{$new_product->product_thumbnail}}" alt="product" style="border: 1px solid #e3e2e2; padding: 5px;border-radius: 10px"--}}
{{--                                     width="295"--}}
{{--                                     height="369"/>--}}
{{--                            </a>--}}
{{--                        </figure>--}}
{{--                        <div class="product-action-vertical">--}}
{{--                            <input type="hidden" name="" class="product_id{{ $new_product->id }}"  value="{{ $new_product->id }}" min="1">--}}
{{--                            <input type="hidden" name="" class="product_color{{ $new_product->id }}"  value="{{$new_product->product_color_en}}" min="1">--}}
{{--                            <input type="hidden" name="" class="product_size{{ $new_product->id }}"  value="{{$new_product->product_size_en}}" min="1">--}}
{{--                            <input type="hidden" name="" class="product_qty{{ $new_product->id }}"  value="{{$new_product->product_qty}}" min="1">--}}
{{--                            <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--                            --}}{{--                            <a href="#" type="submit" onclick="addToCart()"  data-toggle="modal" data-target="#addCartModal"  data="{{$new_product->id}}" class="btn-product-icon" style="background: #0b0b0b;"--}}
{{--                            --}}{{--                               id="addcart" title="Add to Cart"  >--}}
{{--                            --}}{{--                                <i class="p-icon-cart-solid"></i>--}}
{{--                            --}}{{--                            </a>--}}
{{--                            --}}{{--                             data-toggle="modal" data-target="#addCartModal" btn-cart--}}
{{--                            <a href="#" class="btn-product-icon btn-wishlist" onclick="addToWishlist(this.id)" id="{{$new_product->id}}" style="background: #0b0b0b ;" title="Add to Wishlist">--}}
{{--                                <i class="p-icon-heart-solid"></i>--}}
{{--                            </a>--}}
{{--                            <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--                            --}}{{--                            <a href="#" class="btn-product-icon btn-quickview btn-dim" style="background: #0b0b0b ;" title="Quick View" data-modal-toggle="product-modal">--}}
{{--                            --}}{{--                                <i class="p-icon-search-solid" ></i>--}}
{{--                            --}}{{--                            </a>--}}
{{--                            --}}{{--                            <a href="#"--}}
{{--                            --}}{{--                               class="btn-product btn-quickview btn btn-dim btn-uotline mr-1"--}}
{{--                            --}}{{--                               data-modal-toggle="product-modal">QUICK--}}
{{--                            --}}{{--                                VIEW</a>--}}
{{--                        </div>--}}
{{--                        <div class="product-details">--}}
{{--                            <div class="ratings-container">--}}
{{--                                <div class="ratings-full">--}}
{{--                                    <span class="ratings" style="width:60%"></span>--}}
{{--                                    <span class="tooltiptext tooltip-top"></span>--}}
{{--                                </div>--}}
{{--                                <a href="product-simple.html#content-reviews"--}}
{{--                                   class="rating-reviews hash-scroll">(12)</a>--}}
{{--                            </div>--}}
{{--                            <h5 class="product-name">--}}
{{--                                <a href="#">--}}
{{--                                    {{$new_product->product_name_en}}--}}
{{--                                </a>--}}
{{--                            </h5>--}}
{{--                            <div class="product-price">--}}
{{--                                <ins class="new-price">{{$new_product->selling_price}} Rs.</ins>--}}
{{--                            </div>--}}
{{--                            <style>--}}
{{--                                .tag {--}}
{{--                                    font-size: 10px;--}}
{{--                                    font-weight: 700;--}}
{{--                                    text-transform: uppercase;--}}
{{--                                    border-radius: 20px;--}}
{{--                                    color: #fff;--}}
{{--                                    text-align: center;--}}
{{--                                }--}}
{{--                                .tag.new {--}}
{{--                                    background: #fca03d;--}}
{{--                                }--}}
{{--                            </style>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End .product -->--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <!-- End .row -->--}}
{{--    </section>--}}
{{--</div>--}}
<div class="container">
    <section class="mt-3">
        <h2 class="text-center mb-7">Featured products</h2>
        <div class="owl-carousel owl-theme owl-nav-outer slider-brand row cols-lg-4 cols-md-3 cols-2"
             data-owl-options="{
                            'nav': true,
                            'dots': false,
                            'margin': 20,
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2,
                                    'autoplay': true,
                                    'nav': false
                                },
                                '768': {
                                    'items': 3,
                                    'nav': false
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
            @php
                $featured_products = App\Models\Product::where('featured', 1)
                 ->latest()
                 ->limit(6)
                 ->get();
            @endphp
            @foreach($featured_products as $product)
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            @php
                                $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                            @endphp
                            @if ($product->discount_price == NULL)
                                <div class="tag new"><span>New</span></div>
                            @else
                                <div class="tag new"><span>{{ round($discount_amount) }}% off</span></div>
                            @endif
                            <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                <img src="{{asset('')}}{{$product->product_thumbnail}}"  alt="product"
                                     style="border: 1px solid #e3e2e2; padding: 5px;border-radius: 10px"
                                     width="295"
                                     height="369"/>
                            </a>
                        </figure>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist" onclick="addToWishlist(this.id)"
                               id="{{$product->id}}" style="background: #0b0b0b ;" title="Add to Wishlist">
                                <i class="p-icon-heart-solid"></i>
                            </a>
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                        </div>
                        </figure>
                        <div class="product-details">
                            <h5 class="product-name">
                                <a href="#">
                                    {{ substr($new_product->product_name_en, 0, 25) }}
                                </a>
                            </h5>
                            <div class="product-price">
                                <ins class="new-price">{{$new_product->selling_price}} Rs.</ins>
                            </div>
                        </div>
                    </div>
                    <!-- End .product -->
                </div>
            @endforeach
        </div>
        <!-- End .row -->
    </section>


</div>
