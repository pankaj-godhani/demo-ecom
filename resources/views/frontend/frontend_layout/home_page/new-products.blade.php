
<style>
    .best-product *, :after, :before {
        text-align: -webkit-center !important;
    }
</style>
<div class="best-product">
    <div class="container">
        <h2 class="title title-line title-underline mb-6">
            <span>Best Selling</span>
        </h2>
        <div class="row cols-xxl-4 cols-xl-4 cols-lg-3 cols-md-4 cols-2 justify-content-center" id="products-row">
            @if($new_products)
                @foreach($new_products as $product)
                    <div class="product shadow-media text-center">
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
                                <img src="{{$product->product_thumbnail}}" alt="product"
                                     width="280" height="360">
                            </a>
                            <div class="product-action-vertical">
                                <input type="hidden" name="" class="product_id{{ $product->id }}"
                                       value="{{ $product->id }}" min="1">
                                <input type="hidden" name="" class="product_color{{ $product->id }}"
                                       value="{{$product->product_color_en}}" min="1">
                                <input type="hidden" name="" class="product_size{{ $product->id }}"
                                       value="{{$product->product_size_en}}" min="1">
                                <input type="hidden" name="" class="product_qty{{ $product->id }}"
                                       value="{{$product->product_qty}}" min="1">
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <a href="#" class="btn-product-icon btn-wishlist" onclick="addToWishlist(this.id)"
                                   id="{{$product->id}}" style="background: #0b0b0b ;" title="Add to Wishlist">
                                    <i class="p-icon-heart-solid"></i>
                                </a>
                                <a href="#" class="btn-product-icon btn-quickview btn-dim" id="quickview"
                                   data="{{$product->id}}" data-modal-toggle="product-modal"
                                   style="background: #0b0b0b ;">
                                    <i class="p-icon-search-solid"></i>
                                </a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h5 class="product-name">
                                <a href="#" class="product_name{{$product->id}}">
                                    {{ substr($product->product_name_en, 0, 25) }}
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
        {{--        <div class="text-center mt-4">--}}
        {{--            <a class="btn btn-dark btn-load" href="ajax/ajax-products-demo5.html" data-load-to="#products-row"--}}
        {{--               data-load-type="load">Load More</a>--}}
        {{--        </div>--}}
        <div class="text-center mt-4">
            <a class="btn btn-dark" href="{{route('view_all_product')}}">View All</a>
        </div>






{{--            @foreach ($allproduct as $product )--}}
{{--                <tr>--}}
{{--                    <input type="hidden" class="name{{$product->id}}"--}}
{{--                           value="{{$product->product_name_en}}">--}}
{{--                    <input type="hidden" class="product_color{{$product->id}}"--}}
{{--                           value="{{$product->product_color_en}}">--}}
{{--                    <input type="hidden" class="product_size{{$product->id}}"--}}
{{--                           value="{{$product->product_size_en}}">--}}
{{--                    <input type="hidden" class="product_qty{{$product->id}}"--}}
{{--                           value="{{$product->product_qty}}">--}}
{{--                    <input type="hidden" class="product_id{{$product->id}}"--}}
{{--                           value="{{$product->id}}">--}}
{{--                    <input class="old-price{{$product->id}}" id="old_price{{$product->id}}"--}}
{{--                           type="hidden" value="{{$product->selling_price}} Rs.">--}}
{{--                    <input type="hidden" class="new-price" id="new-price{{$product->id}}" type="hidden"--}}
{{--                           value="{{$product->discount_price}} Rs.">--}}
{{--                    <input type="hidden" class="product-short-desc" id="description{{$product->id}}"--}}
{{--                           value="{{$product->short_description_en}}">--}}
{{--                    <input type="hidden" class="product_color" id="color{{$product->id}}"--}}
{{--                           value="{{$product->product_color_en}}">--}}
{{--                    <input type="hidden" class="product_size" id="size{{$product->id}}"--}}
{{--                           value="{{$product->product_size_en}}">--}}
{{--                    <input type="hidden" class="product_tag" id="tag{{$product->id}}"--}}
{{--                           value="{{$product->product_tags_en}}">--}}
{{--                    <input type="hidden" class="product_category" id="category{{$product->id}}"--}}
{{--                           value="{{$product->category->category_name_en}}">--}}
{{--                    <input type="hidden" class="product_image" id="image{{$product->id}}"--}}
{{--                           value="{{asset('')}}{{$product->product_thumbnail}}">--}}
{{--                    <input type="hidden" class="product_qty" id="qty{{$product->id}}"--}}
{{--                           value="{{$product->product_qty}}">--}}
{{--                </tr>--}}
{{--            @endforeach--}}




    </div>
</div>


{{--product modal--}}
{{--<div id="product-modal" aria-hidden="true"--}}
{{--     class="hidden fixed right-0 left-0 top-8 z-50 justify-center items-center h-modal md:h-full md:inset-0"--}}
{{--     style="margin-top: 50px;">--}}
{{--    <div class="w-13 items-center h-full">--}}
{{--        <!-- Modal content -->--}}
{{--        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" style="padding: 20px;">--}}
{{--            <div class="flex justify-end p-2">--}}
{{--                <button type="button"--}}
{{--                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"--}}
{{--                        data-modal-toggle="product-modal">--}}
{{--                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path fill-rule="evenodd"--}}
{{--                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"--}}
{{--                              clip-rule="evenodd"></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}

{{--            @if(isset($product))--}}
{{--                <div class="page-content">--}}
{{--                    <div class="container">--}}
{{--                        <div class="product product-single product-simple row mb-8">--}}
{{--                            <div class="col-md-7">--}}
{{--                                <td class="product-thumbnail">--}}
{{--                                    <a href="product-simple.html">--}}
{{--                                        <figure>--}}
{{--                                            <img id="productimage">--}}
{{--                                        </figure>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </div>--}}

{{--                            <div class="col-md-5">--}}
{{--                                <div class="product-details">--}}
{{--                                    <h2 class="pro_name product_name" id="pro_name"></h2>--}}
{{--                                    <hr>--}}

{{--                                    <p class="product-price mb-1">--}}
{{--                                        @if($product->discount_price)--}}
{{--                                            <del class="old-price" id="old_price"></del>--}}
{{--                                        @endif--}}
{{--                                        @if($product->discount_price)--}}
{{--                                            <ins class="new-price" id="new_price"></ins>--}}
{{--                                        @else--}}
{{--                                            <ins class="new-price" id="new_price"></ins>--}}
{{--                                        @endif--}}
{{--                                    </p>--}}

{{--                                    --}}{{--                                    <div class="row mb-3">--}}
{{--                                    --}}{{--                                        <div class="col-xs-5 mr-4">--}}
{{--                                    --}}{{--                                            <div class="form-group">--}}
{{--                                    --}}{{--                                                @if ($product->product_color_en == NULL)--}}
{{--                                    --}}{{--                                                @else--}}
{{--                                    --}}{{--                                                    <select class="form-control" class="color" id="color" name="color">--}}
{{--                                    --}}{{--                                                        <option selected="" disabled>--Select color--</option>--}}
{{--                                    --}}{{--                                                        @foreach ($colors_en as $item)--}}
{{--                                    --}}{{--                                                            <option value="{{ $item }}">{{ ucwords($item)}}</option>--}}
{{--                                    --}}{{--                                                        @endforeach--}}
{{--                                    --}}{{--                                                    </select>--}}
{{--                                    --}}{{--                                                @endif--}}
{{--                                    --}}{{--                                            </div>--}}
{{--                                    --}}{{--                                        </div>--}}
{{--                                    --}}{{--                                        <div class="col-xs-5">--}}
{{--                                    --}}{{--                                            <div class="form-group">--}}
{{--                                    --}}{{--                                                @if ($product->product_size_en == NULL)--}}
{{--                                    --}}{{--                                                @else--}}
{{--                                    --}}{{--                                                    <select name="" class="form-control" class="size" id="size" name="size">--}}
{{--                                    --}}{{--                                                        <option selected="" disabled>--Select size--</option>--}}
{{--                                    --}}{{--                                                        @foreach ($size_en as $item)--}}
{{--                                    --}}{{--                                                            <option value="{{ $item }}"> {{ ucwords($item) }}</option>--}}
{{--                                    --}}{{--                                                        @endforeach--}}
{{--                                    --}}{{--                                                    </select>--}}
{{--                                    --}}{{--                                                @endif--}}
{{--                                    --}}{{--                                            </div>--}}
{{--                                    --}}{{--                                        </div>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <div class="col-xs-5 mr-4">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="text" id="product_color">--}}
{{--                                                --}}{{--                                                @if ($product->product_color_en == NULL)--}}
{{--                                                --}}{{--                                                @else--}}
{{--                                                --}}{{--                                                    <select class="form-control" class="color" id="product_color" name="color">--}}
{{--                                                --}}{{--                                                        <option selected="" disabled>--Select color--</option>--}}
{{--                                                --}}{{--                                                        @foreach ($colors_en as $item)--}}
{{--                                                --}}{{--                                                            <option value="{{ $item }}">{{ ucwords($item)}}</option>--}}
{{--                                                --}}{{--                                                        @endforeach--}}
{{--                                                --}}{{--                                                    </select>--}}
{{--                                                --}}{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xs-5">--}}
{{--                                            <div class="form-group">--}}

{{--                                                --}}{{--                                                @if ($product->product_size_en == NULL)--}}
{{--                                                --}}{{--                                                @else--}}
{{--                                                --}}{{--                                                    <select name="" class="form-control" class="size" id="size" name="size">--}}
{{--                                                --}}{{--                                                        <option selected="" disabled>--Select size--</option>--}}
{{--                                                --}}{{--                                                        @foreach ($size_en as $item)--}}
{{--                                                --}}{{--                                                            <option value="{{ $item }}"> {{ ucwords($item) }}</option>--}}
{{--                                                --}}{{--                                                        @endforeach--}}
{{--                                                --}}{{--                                                    </select>--}}
{{--                                                --}}{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="product-form product-qty pt-1 pb-4">--}}
{{--                                        <div class="product-form-group">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <button class="quantity-minus p-icon-minus-solid"></button>--}}
{{--                                                <input class="quantity form-control" id="product_qty" type="number"--}}
{{--                                                       min="1"--}}
{{--                                                       max="1000000">--}}
{{--                                                <button class="quantity-plus p-icon-plus-solid"></button>--}}
{{--                                            </div>--}}
{{--                                            <input type="hidden" name="" id="product_id" value="{{ $product->id }}"--}}
{{--                                                   min="1">--}}
{{--                                            <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--                                            <button type="submit" class="btn btn-primary" onclick="addToCart()"><i--}}
{{--                                                    class="p-icon-cart-solid"></i> ADD TO CART--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <hr class="product-divider">--}}

{{--                                    <div class="product-meta">--}}
{{--                                        <label>CATEGORIES:</label><a href="#"--}}
{{--                                                                     id="product_category">{{$product->category->category_name_en}}</a><br>--}}
{{--                                        <label>sku:</label><a href="#" id="">{{$product->product_code}}</a><br>--}}
{{--                                        <label>tag:</label><a href="#"--}}
{{--                                                              id="product_tag">{{$product->product_tags_en}}</a><br>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}




