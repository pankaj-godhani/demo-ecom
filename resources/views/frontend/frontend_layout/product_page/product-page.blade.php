@include('frontend.frontend_layout.body.style')
<body>


<div class="page-wrapper">
@include('frontend.frontend_layout.body.header')

<!-- End Header -->
    <main class="main single-product">
        <nav class="breadcrumb-nav">
            <div class="container">
                <div class="product-navigation">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="product-simple.html">Products</a></li>
                        <li>{{$product->product_name_en}}</li>
                    </ul>
                    <div class="product-image-nav">
                        <a href="#" class="product-nav product-nav-prev">
                            <figure>
                                <img
                                    src="{{asset('frontend')}}/assets/images/products/product-single/navigation/prev.jpg"
                                    width="150"
                                    height="150" alt="nav-prev">
                            </figure>
                            <i class="p-icon-arrow-long-left"></i>
                        </a>
                        <a href="#" class="product-nav product-nav-next">
                            <figure>
                                <img
                                    src="{{asset('frontend')}}/assets/images/products/product-single/navigation/next.jpg"
                                    width="150"
                                    height="150" alt="nav-next">

                            </figure>
                            <i class="p-icon-arrow-long-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="page-content">
            <div class="container">
                <div class="product product-single product-simple row mb-8">
                    <div class="col-md-7">
                        <div class="preview col">

                            <div class="app-figure" id="zoom-fig">

                                <a id="Zoom-1" class="MagicZoom"
                                   href="{{asset('')}}{{$product->product_thumbnail}}"
                                   data-zoom-image-2x="{{asset('')}}{{$product->product_thumbnail}}"
                                   data-image-2x="{{asset('')}}{{$product->product_thumbnail}}"
                                >

                                    <img class="zoom-img"
                                         src="{{asset('')}}{{$product->	product_thumbnail}}"
                                         srcset="{{asset('')}}{{$product->	product_thumbnail}}" alt=""/>
                                </a>

                                <div class="selectors">

                                    <a data-zoom-id="Zoom-1"
                                       href="{{asset('')}}{{$product->	product_thumbnail}}"
                                       data-image="{{asset('')}}{{$product->	product_thumbnail}}"
                                       data-zoom-image-2x="{{asset('')}}{{$product->	product_thumbnail}}"
                                       data-image-2x="{{asset('')}}{{$product->	product_thumbnail}}"
                                    >
                                        <img
                                            src="{{asset('')}}{{$product->	product_thumbnail}}"
                                            srcset="{{asset('')}}{{$product->	product_thumbnail}}" alt=""
                                            height="100px" width="100px"/>

                                    </a>

                                    @foreach($product->images as $img)
                                        <a
                                            data-zoom-id="Zoom-1"
                                            href="{{asset('')}}{{$img->photo_name}}"
                                            data-image="{{asset('')}}{{$img->photo_name}}"
                                            data-zoom-image-2x="{{asset('')}}{{$img->photo_name}}"
                                            data-image-2x="{{asset('')}}{{$img->photo_name}}"
                                        >
                                            <img
                                                srcset="{{asset('')}}{{$img->photo_name}}"
                                                src="{{asset('')}}{{$img->photo_name}}" height="100px" width="100px"/>
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="product-details">
                            <h1 class="product-name" id="pname">{{$product->product_name_en}}</h1>
                            <div STYLE="color:orange;">

                                {{--    {{dd($reviews->where('produc->product_idt_id',$product->id)->sum('rating')/$reviews->where('product_id',$product->id)->count())}}--}}
                                @php
                                    $total = \App\Models\Review::where('product_id',$product->id)->get();

                                @endphp

                                @if(count($total))
                                    @php
                                        $total_review =
                                        \App\Models\Review::where('product_id',$product->id)->sum('rating')/$reviews->where('product_id',$product->id)->count();
                                    @endphp
                                @endif

                                @for($x = 5; $x > 0; $x--)
                                    @if(count($total))
                                        @php
                                            if($total_review > 0.5){
                                                echo '<i class="fas fa-star "></i>';
                                            }elseif($total_review <= 0 ){
                                                echo '<i class="far fa-star"></i>';
                                            }else{
                                                echo '<i class="fas fa-star-half-alt"></i>';
                                            }
                                            $total_review--;
                                        @endphp
                                    @endif
                                @endfor
                                <div class="tag new">
                                    @if(count($total))

                                        {{$total_review =
                                        \App\Models\Review::where('product_id',$product->id)->sum('rating')/$reviews->where('product_id',$product->id)->count()}} Rating
                                    @else
                                        {{ $reviews->where('product_id',$product->id)->count() }} Rating
                                    @endif
                                </div>
                                {{--                    {{dd($reviews->where('product_id',$product->id)->count())}}--}}

                                <a href="#content-reviews" class="link-to-tab rating-reviews">(
                                    {{ $reviews->where('product_id',$product->id)->count()}}
                                    Customer
                                    Reviews )</a>
                            </div>
                            <p class="product-price mb-1">
                                @if($product->discount_price)
                                    <del class="old-price">{{$product->selling_price}} Rs.</del>
                                @endif
                                @if($product->discount_price)
                                    <ins class="new-price">{{$product->discount_price}} Rs.</ins>
                                @else
                                    <ins class="new-price">{{$product->selling_price}} Rs.</ins>
                                @endif
                            </p>
                            <p class="product-short-desc">{{$product->short_description_en}}
                            </p>

                            <div class="product-form product-unit mb-0 pt-0">
                                @if ($product->product_size_en == NULL)
                                @else
                                    <label>Select Size</label>
                                    <div class="product-form-group pt-1">
                                        <div class="product-variations mb-1">
                                            @if($size_en)
                                                @foreach ($size_en as $item)
                                                    <a href="{{ ucwords($item) }}" class="size" >{{ ucwords($item) }}</a>
                                                @endforeach
                                            @else

                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="product-form product-unit mb-0 pt-0">
                                @if ($product->product_color_en == NULL)
                                @else

                                    <label>Select Color</label>
                                    <div class="product-form-group pt-1">
                                        <div class="product-variations mb-1">
                                            @foreach ($colors_en as $item)
                                                <a href="{{ ucwords($item) }}" class="color">{{ ucwords($item) }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="product-form product-qty pt-1 pb-2">
                                <div class="product-form-group">
                                    <div class="input-group">
                                        <button class="quantity-minus p-icon-minus-solid"></button>
                                        <input class="quantity form-control" id="product_qty" type="number" min="1"
                                               max="1000000" value="{{$product->qty}}">
                                        <button class="quantity-plus p-icon-plus-solid"></button>
                                    </div>
                                    <input type="hidden" name="" id="product_id" value="{{ $product->id }}" min="1">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-primary" onclick="addToCart()"><i
                                            class="p-icon-cart-solid"></i> ADD TO CART
                                    </button>
                                </div>
                            </div>


                            <div class="product-action pb-1">
                                {{--                                <a href="#" class="btn-product btn-compare mr-5"    ><i--}}
                                {{--                                        class="p-icon-compare-solid"></i>ADD--}}
                                {{--                                    TO COMPARE</a>--}}


                                <a href="" onclick="addToWishlist(this.id)" id="{{$product->id}}"
                                   class="btn-product btn-wishlist"><i class="p-icon-heart-solid"></i>
                                    ADD TO WISHLIST</a>

                            </div>
                            <hr class="product-divider">

                            <div class="product-meta">
                                <label>CATEGORIES:</label><a href="#"
                                                             id="category">{{$product->category->category_name_en}}</a><br>
                                <label>sku:</label><a href="#" id="pcode">{{$product->product_code}}</a><br>
                                <label>tag:</label><a href="#">{{$product->product_tags_en}}</a><br>
                                {{--                                <label>size:</label><a href="#" id="size">{{$product->product_size_en}}</a><br>--}}
                                {{--                                <label>Colour:</label><a href="#" id="color">{{$product->product_color_en}}</a><br>--}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-content">
                    <div class="content-description">
                        <h2 class="title title-line title-underline mb-lg-8">
                                <span>
                                    Description
                                </span>
                        </h2>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                                <div class="overlay-dark">
                                    <figure>
                                        <img src="{{asset('')}}{{$product->product_thumbnail}}"
                                             alt="product-banner" width="400" height="200"
                                             style="background-color: #526e45;">
                                    </figure>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 col-lg-6 with-content-index pt-3 pt-md-0 content-index-1 pl-2 pl-lg-7">
                                <h4 class="content-subtitle">
                                    About this Product
                                </h4>
                                <p class="mb-3">
                                    {{$product->long_description_en}}
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="content-specification mt-10 pt-3">
                        <h2 class="title title-line title-underline">
                                <span>
                                    Specifications
                                </span>
                        </h2>
                        <ul class="list-none">
                            <li><label>WEIGHT</label>
                                <p>5 kg</p>
                            </li>
                            <li><label>DIMENSIONS</label>
                                <p>10 × 10 × 10 cm</p>
                            </li>
                            <li><label>WEIGHT UNIT</label>
                                <p>1KG, 1LB, 500G, Bound, Each</p>
                            </li>
                        </ul>
                    </div>
                    <div class="content-reviews pt-9" id='content-reviews'>
                        <div class="with-toolbox">
                            <h2 class="title title-line title-underline mb-8">
                                    <span>
                                        Customer Reviews
                                    </span>
                            </h2>
                        </div>
                        <div class="row pb-10">
                            <div class="col-lg-4 mb-4 sticky-sidebar-wrapper">
                                <div class="sticky-sidebar pb-3" data-sticky-options="{'paddingOffsetTop': 90}">
                                    <div class="avg-rating-container">
                                        @if(count($total))
                                            <mark style="color: orange">{{$total_review}}</mark>
                                        @else
                                            <mark style="color: orange"> {{ $reviews->where('product_id',$product->id)->count()}}</mark>
                                        @endif
                                        <div class="avg-rating">
                                            <span class="avg-rating-title">Average Rating</span>
                                            <div style="color: orange;">
                                                @for($x = 5; $x > 0; $x--)
                                                    @if(count($total))
                                                        @php
                                                            if($total_review > 0.5){
                                                                echo '<i class="fas fa-star "></i>';
                                                            }elseif($total_review <= 0 ){
                                                                echo '<i class="far fa-star"></i>';
                                                            }else{
                                                                echo '<i class="fas fa-star-half-alt"></i>';
                                                            }
                                                            $total_review--;
                                                        @endphp
                                                    @endif
                                                @endfor
                                            </div>
                                            <span class="rating-reviews">({{ $reviews->where('product_id',$product->id)->count()}} Reviews) </span>

                                        </div>
                                    </div>

                                    <button
                                        class=" text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-400 font-medium rounded-lg text-xl px-5 py-5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                                        type="button" data-modal-toggle="authentication-modal">
                                        Submit Reviews
                                    </button>
                                </div>
                            </div>


                            <div class="col-lg-8 comments border-no">
                                <ul class="comments-list">
                                    <li>
                                        <div class="comment">
                                            <div class="comment-body mt-2 mt-sm-0">


                                                @foreach($reviews as $review)
                                                    @if($review->product_id == $product->id)
                                                        <div class="comment-user">
                                                            <span
                                                                class="font-weight-semi-bold  text-dim">by {{$review->name}}</span><br>
                                                            <span class="  text-dim"> {{$review->email}}</span>
                                                        </div>
                                                        <div class="comment-description">
                                                            {{$review->title}}
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>{{$review->comment}}</p>
                                                        </div>
                                                        <div class="feeling mt-5">
                                                            <button
                                                                class="btn btn-link text-capitalize btn-icon-left btn-slide-up btn-infinite like">
                                                                <i class="fa fa-thumbs-up mb-1"></i>
                                                                Helpful (<span class="count">0</span>)
                                                            </button>
                                                            <button
                                                                class="btn btn-link text-capitalize btn-icon-left btn-slide-down btn-infinite unlike">
                                                                <i class="fa fa-thumbs-down mb-1"></i>
                                                                Unhelpful (<span class="count">0</span>)
                                                            </button>
                                                        </div>
                                                        <hr>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <!-- End  Comments -->
                    </div>
                </div>
            </div>
        </div>


        <!-- Review Modal -->

        <div id="authentication-modal" aria-hidden="true"
             class="hidden fixed right-0 left-0 top-8 z-50 justify-center items-center h-modal md:h-full md:inset-0"
             style="margin-top: 200px;">
            <div class="w-13 items-center h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" style="padding: 20px;">
                    <div class="flex justify-end p-2">
                        <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-toggle="authentication-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <h4 class="review-title mb-3">Submit Your Review</h4>
                    <form action="{{url('review_add')}}" method="post">
                        @csrf
                        <div class="ratings-container">
                            <h6 class=" mb-0">Your Rating Of This Product</h6>
                            <div class="rating-css">
                                {{--                                <div class="star-icon">--}}
                                <input type="radio" value="1" name="product_rating" checked id="rating1">
                                <label for="rating1" class="fa fa-star"></label>
                                <input type="radio" value="2" name="product_rating" id="rating2">
                                <label for="rating2" class="fa fa-star"></label>
                                <input type="radio" value="3" name="product_rating" id="rating3">
                                <label for="rating3" class="fa fa-star"></label>
                                <input type="radio" value="4" name="product_rating" id="rating4">
                                <label for="rating4" class="fa fa-star"></label>
                                <input type="radio" value="5" name="product_rating" id="rating5">
                                <label for="rating5" class="fa fa-star"></label>
                                {{--                                </div>--}}
                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <div class="col-12 mb-4">
                                <input type="text" name="title" placeholder="Your TItle Here..." required="">
                            </div>
                            <div class="col-12 mb-4">
                                <textarea required="" name="review" placeholder="Write Your Review Here..."></textarea>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" name="name" placeholder="Your Name *" required="">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="email" name="email" placeholder="Your Email Address *" required="">
                            </div>
                        </div>
                        <div class="form-checkbox justify-content-center mb-6">
                            <input type="checkbox" class="custom-checkbox" id="review-popup" name="review-popup"
                                   required="">
                            <label for="review-popup">Save my name, email, and website in this browser for the next time
                                1
                                comment.</label>
                        </div>
                        <button type="submit" class="btn btn-dim text-uppercase" name="submit" value="submit">Submit
                            Review
                        </button>
                    </form>
                </div>
            </div>
        </div>


        <div class="container">
            <section class="mt-3">
                <h2 class="text-center mb-7">Related Products</h2>
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
                    @foreach( $related_products as $new_product)
                        <div class="product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    @php
                                        $discount_amount = (($new_product->selling_price-$new_product->discount_price)/($new_product->selling_price))*100
                                    @endphp
                                    @if ($new_product->discount_price == NULL)
                                        <div class="tag new"><span>New</span></div>
                                    @else
                                        <div class="tag new"><span>{{ round($discount_amount) }}%off</span></div>
                                    @endif
                                    <a href="{{ route('frontend-product-details',['id' => $new_product->id, 'slug' => $new_product->product_slug_en]) }}">
                                        <img src="{{asset('')}}{{$new_product->product_thumbnail}}" alt="product"
                                             width="295"
                                             height="369"/>
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

                                    </div>

                                </figure>
                                <div class="product-details">
                                    <h5 class="product-name">
                                        <a href="#">
                                            {{$new_product->product_name_en}}
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
    </main>
    <!-- End Main -->
    @include('frontend.frontend_layout.body.footer')
</div>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prettify/188.0.0/prettify.min.js"></script>
<script>try {
        prettyPrint();
    } catch (e) {
    }</script>
@include('frontend.frontend_layout.body.script')

</body>
</html>

