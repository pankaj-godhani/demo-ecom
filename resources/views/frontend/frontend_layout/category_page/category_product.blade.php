{{--@extends('frontend.frontend_master')--}}

{{--@section('title')--}}
{{--    Al Araf Fashion - SubCategory Product--}}
{{--@endsection--}}

{{--@section('frontend_content')--}}
{{--    <div class="body-content outer-top-xs">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3 sidebar">--}}
{{--                    <!-- ================================== TOP NAVIGATION ================================== -->--}}
{{--                    @include('frontend.frontend_layout.body.side-menu')--}}
{{--                    <!-- /.side-menu -->--}}
{{--                    <!-- ================================== TOP NAVIGATION : END ================================== -->--}}
{{--                    @include('frontend.frontend_layout.category_page.shop-by-widget')--}}
{{--                    <!-- /.sidebar-module-container -->--}}
{{--                </div>--}}
{{--                <!-- /.sidebar -->--}}
{{--                <div class="col-md-9">--}}
{{--                    <!-- ========================================== SECTION – HERO ========================================= -->--}}

{{--                    <div id="category" class="category-carousel hidden-xs">--}}
{{--                        <div class="item">--}}
{{--                            <div class="image"> <img src="{{ asset('frontend') }}/assets/images/banners/cat-banner-1.jpg"--}}
{{--                                    alt="" class="img-responsive"> </div>--}}
{{--                            <div class="container-fluid">--}}
{{--                                <div class="caption vertical-top text-left">--}}
{{--                                    <div class="big-text"> Big Sale </div>--}}
{{--                                    <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>--}}
{{--                                    <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur--}}
{{--                                        adipiscing elit </div>--}}
{{--                                </div>--}}
{{--                                <!-- /.caption -->--}}
{{--                            </div>--}}
{{--                            <!-- /.container-fluid -->--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="clearfix filters-container m-t-10">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col col-sm-6 col-md-2">--}}
{{--                                <div class="filter-tabs">--}}
{{--                                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">--}}
{{--                                        <li class="active"> <a data-toggle="tab" href="#grid-container"><i--}}
{{--                                                    class="icon fa fa-th-large"></i>Grid</a> </li>--}}
{{--                                        <li><a data-toggle="tab" href="#list-container"><i--}}
{{--                                                    class="icon fa fa-th-list"></i>List</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <!-- /.filter-tabs -->--}}
{{--                            </div>--}}
{{--                            <!-- /.col -->--}}
{{--                            <div class="col col-sm-12 col-md-6">--}}
{{--                                <div class="col col-sm-3 col-md-6 no-padding">--}}
{{--                                    <div class="lbl-cnt"> <span class="lbl">Sort by</span>--}}
{{--                                        <div class="fld inline">--}}
{{--                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">--}}
{{--                                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">--}}
{{--                                                    Position <span class="caret"></span> </button>--}}
{{--                                                <ul role="menu" class="dropdown-menu">--}}
{{--                                                    <li role="presentation"><a href="#">position</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">Price:Lowest first</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">Price:HIghest first</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">Product Name:A to Z</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.fld -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.lbl-cnt -->--}}
{{--                                </div>--}}
{{--                                <!-- /.col -->--}}
{{--                                <div class="col col-sm-3 col-md-6 no-padding">--}}
{{--                                    <div class="lbl-cnt"> <span class="lbl">Show</span>--}}
{{--                                        <div class="fld inline">--}}
{{--                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">--}}
{{--                                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1--}}
{{--                                                    <span class="caret"></span> </button>--}}
{{--                                                <ul role="menu" class="dropdown-menu">--}}
{{--                                                    <li role="presentation"><a href="#">1</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">2</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">3</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">4</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">5</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">6</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">7</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">8</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">9</a></li>--}}
{{--                                                    <li role="presentation"><a href="#">10</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- /.fld -->--}}
{{--                                    </div>--}}
{{--                                    <!-- /.lbl-cnt -->--}}
{{--                                </div>--}}
{{--                                <!-- /.col -->--}}
{{--                            </div>--}}
{{--                            <!-- /.col -->--}}
{{--                            <div class="col col-sm-6 col-md-4 text-right">--}}
{{--                                --}}{{-- <div class="pagination-container">--}}
{{--                                    <ul class="list-inline list-unstyled">--}}
{{--                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}
{{--                                        <li><a href="#">1</a></li>--}}
{{--                                        <li class="active"><a href="#">2</a></li>--}}
{{--                                        <li><a href="#">3</a></li>--}}
{{--                                        <li><a href="#">4</a></li>--}}
{{--                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                    <!-- /.list-inline -->--}}
{{--                                </div> --}}
{{--                                <!-- /.pagination-container -->--}}
{{--                            </div>--}}
{{--                            <!-- /.col -->--}}
{{--                        </div>--}}
{{--                        <!-- /.row -->--}}
{{--                    </div>--}}
{{--                    <div class="search-result-container ">--}}
{{--                        <div id="myTabContent" class="tab-content category-list">--}}
{{--                            <div class="tab-pane active" id="grid-container">--}}
{{--                                <div class="category-product">--}}
{{--                                    <div class="row">--}}
{{--                                        @foreach ($subsubcategory_products as $product)--}}
{{--                                        <div class="col-sm-6 col-md-4 wow fadeInUp animated"--}}
{{--                                            style="visibility: visible; animation-name: fadeInUp;">--}}
{{--                                            <div class="products">--}}
{{--                                                <div class="product">--}}
{{--                                                    <div class="product-image">--}}
{{--                                                        <div class="image"> <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img--}}
{{--                                                                    src="{{ asset($product->product_thumbnail) }}"--}}
{{--                                                                    alt=""></a> </div>--}}
{{--                                                        <!-- /.image -->--}}

{{--                                                    @php--}}
{{--                                                        $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100--}}
{{--                                                    @endphp--}}
{{--                                                    @if ($product->discount_price == NULL)--}}
{{--                                                        <div class="tag new"><span>New</span></div>--}}
{{--                                                    @else--}}
{{--                                                        <div class="tag new"><span>{{ round($discount_amount) }}%</span></div>--}}
{{--                                                    @endif--}}
{{--                                                    <!-- /.product-image -->--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product-info text-left">--}}
{{--                                                        <h3 class="name"><a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}">--}}
{{--                                                            @if (session()->get('language') == 'bangla')--}}
{{--                                                                {{ $product->product_name_bn }}--}}
{{--                                                            @else--}}
{{--                                                                {{ $product->product_name_en }}--}}
{{--                                                            @endif--}}
{{--                                                        </a>--}}
{{--                                                        </h3>--}}
{{--                                                        <div class="rating rateit-small rateit"><button id="rateit-reset-2"--}}
{{--                                                                data-role="none" class="rateit-reset"--}}
{{--                                                                aria-label="reset rating" aria-controls="rateit-range-2"--}}
{{--                                                                style="display: none;"></button>--}}
{{--                                                            <div id="rateit-range-2" class="rateit-range" tabindex="0"--}}
{{--                                                                role="slider" aria-label="rating" aria-owns="rateit-reset-2"--}}
{{--                                                                aria-valuemin="0" aria-valuemax="5" aria-valuenow="4"--}}
{{--                                                                aria-readonly="true" style="width: 70px; height: 14px;">--}}
{{--                                                                <div class="rateit-selected"--}}
{{--                                                                    style="height: 14px; width: 56px;"></div>--}}
{{--                                                                <div class="rateit-hover" style="height:14px"></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="description"></div>--}}
{{--                                                        <div class="product-price">--}}
{{--                                                            @if ($product->discount_price == NULL)--}}
{{--                                                            <span class="price">${{ $product->selling_price }}</span>--}}
{{--                                                            @else--}}
{{--                                                            <span class="price">${{ $product->discount_price }}</span>--}}
{{--                                                            <span class="price-before-discount">${{ $product->selling_price }}</span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                        <!-- /.product-price -->--}}

{{--                                                    </div>--}}
{{--                                                    <!-- /.product-info -->--}}
{{--                                                    <div class="cart clearfix animate-effect">--}}
{{--                                                        <div class="action">--}}
{{--                                                            <ul class="list-unstyled">--}}
{{--                                                                <li class="add-cart-button btn-group">--}}
{{--                                                                    <button class="btn btn-primary icon"--}}
{{--                                                                        data-toggle="dropdown" type="button"> <i--}}
{{--                                                                            class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                                    <button class="btn btn-primary cart-btn"--}}
{{--                                                                        type="button">Add to cart</button>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="lnk wishlist"> <a class="add-to-cart"--}}
{{--                                                                        href="detail.html" title="Wishlist"> <i--}}
{{--                                                                            class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                                <li class="lnk"> <a class="add-to-cart" href="detail.html"--}}
{{--                                                                        title="Compare"> <i class="fa fa-signal"></i> </a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- /.action -->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- /.cart -->--}}
{{--                                                </div>--}}
{{--                                                <!-- /.product -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.products -->--}}
{{--                                        </div>--}}
{{--                                        @endforeach--}}
{{--                                        <!-- /.item -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.row -->--}}
{{--                                </div>--}}
{{--                                <!-- /.category-product -->--}}

{{--                            </div>--}}
{{--                            <!-- /.tab-pane -->--}}

{{--                            <div class="tab-pane" id="list-container">--}}
{{--                                <div class="category-product">--}}
{{--                                    @foreach ($subsubcategory_products as $product)--}}
{{--                                    <div class="category-product-inner wow fadeInUp animated"--}}
{{--                                        style="visibility: visible; animation-name: fadeInUp;">--}}
{{--                                        <div class="products">--}}
{{--                                            <div class="product-list product">--}}
{{--                                                <div class="row product-list-row">--}}
{{--                                                    <div class="col col-sm-4 col-lg-4">--}}
{{--                                                        <div class="product-image">--}}
{{--                                                            <div class="image"> <img--}}
{{--                                                                    src="{{ asset($product->product_thumbnail) }}"--}}
{{--                                                                    alt=""> </div>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- /.product-image -->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- /.col -->--}}
{{--                                                    <div class="col col-sm-8 col-lg-8">--}}
{{--                                                        <div class="product-info">--}}
{{--                                                            <h3 class="name"><a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}">--}}
{{--                                                                @if (session()->get('language') == 'bangla')--}}
{{--                                                                {{ $product->product_name_bn }}--}}
{{--                                                                @else--}}
{{--                                                                {{ $product->product_name_en }}--}}
{{--                                                                @endif--}}
{{--                                                            </a>--}}
{{--                                                            </h3>--}}
{{--                                                            <div class="rating rateit-small rateit"><button--}}
{{--                                                                    id="rateit-reset-14" data-role="none"--}}
{{--                                                                    class="rateit-reset" aria-label="reset rating"--}}
{{--                                                                    aria-controls="rateit-range-14"--}}
{{--                                                                    style="display: none;"></button>--}}
{{--                                                                <div id="rateit-range-14" class="rateit-range" tabindex="0"--}}
{{--                                                                    role="slider" aria-label="rating"--}}
{{--                                                                    aria-owns="rateit-reset-14" aria-valuemin="0"--}}
{{--                                                                    aria-valuemax="5" aria-valuenow="4" aria-readonly="true"--}}
{{--                                                                    style="width: 70px; height: 14px;">--}}
{{--                                                                    <div class="rateit-selected"--}}
{{--                                                                        style="height: 14px; width: 56px;"></div>--}}
{{--                                                                    <div class="rateit-hover" style="height:14px"></div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product-price">--}}
{{--                                                                @if ($product->discount_price == NULL)--}}
{{--                                                                    <span class="price">${{ $product->selling_price }}</span>--}}
{{--                                                                @else--}}
{{--                                                                    <span class="price">${{ $product->discount_price }}</span>--}}
{{--                                                                    <span class="price-before-discount">${{ $product->selling_price }}</span>--}}
{{--                                                                @endif--}}
{{--                                                            </div>--}}
{{--                                                            <!-- /.product-price -->--}}
{{--                                                            <div class="description m-t-10">--}}
{{--                                                                @if (session()->get('language') == 'bangla')--}}
{{--                                                                {{ $product->short_description_bn }}--}}
{{--                                                                @else--}}
{{--                                                                {{ $product->short_description_en }}--}}
{{--                                                                @endif--}}
{{--                                                            </div>--}}
{{--                                                            <div class="cart clearfix animate-effect">--}}
{{--                                                                <div class="action">--}}
{{--                                                                    <ul class="list-unstyled">--}}
{{--                                                                        <li class="add-cart-button btn-group">--}}
{{--                                                                            <button class="btn btn-primary icon"--}}
{{--                                                                                data-toggle="dropdown" type="button"> <i--}}
{{--                                                                                    class="fa fa-shopping-cart"></i>--}}
{{--                                                                            </button>--}}
{{--                                                                            <button class="btn btn-primary cart-btn"--}}
{{--                                                                                type="button">Add to cart</button>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="lnk wishlist"> <a class="add-to-cart"--}}
{{--                                                                                href="detail.html" title="Wishlist"> <i--}}
{{--                                                                                    class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                                        <li class="lnk"> <a class="add-to-cart"--}}
{{--                                                                                href="detail.html" title="Compare"> <i--}}
{{--                                                                                    class="fa fa-signal"></i> </a> </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                                <!-- /.action -->--}}
{{--                                                            </div>--}}
{{--                                                            <!-- /.cart -->--}}

{{--                                                        </div>--}}
{{--                                                        <!-- /.product-info -->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- /.col -->--}}
{{--                                                </div>--}}
{{--                                                <!-- /.product-list-row -->--}}
{{--                                                @php--}}
{{--                                                $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100--}}
{{--                                                @endphp--}}
{{--                                                @if ($product->discount_price == NULL)--}}
{{--                                                    <div class="tag new"><span>New</span></div>--}}
{{--                                                @else--}}
{{--                                                    <div class="tag new"><span>{{ round($discount_amount) }}%</span></div>--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-list -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.products -->--}}
{{--                                    </div>--}}
{{--                                    @endforeach--}}
{{--                                    <!-- /.category-product-inner -->--}}

{{--                                </div>--}}
{{--                                <!-- /.category-product -->--}}
{{--                            </div>--}}
{{--                            <!-- /.tab-pane #list-container -->--}}
{{--                        </div>--}}
{{--                        <!-- /.tab-content -->--}}
{{--                        <div class="clearfix filters-container">--}}
{{--                            <div class="text-right">--}}
{{--                                <div class="pagination-container">--}}
{{--                                    <ul class="list-inline list-unstyled">--}}
{{--                                        {{ $subsubcategory_products->links() }}--}}
{{--                                    </ul>--}}
{{--                                    <!-- /.list-inline -->--}}
{{--                                </div>--}}
{{--                                <!-- /.pagination-container -->--}}
{{--                            </div>--}}
{{--                            <!-- /.text-right -->--}}

{{--                        </div>--}}
{{--                        <!-- /.filters-container -->--}}

{{--                    </div>--}}
{{--                    <!-- /.search-result-container -->--}}

{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}
{{--            <!--  BRANDS CAROUSEL  -->--}}
{{--            @include('frontend.frontend_layout.home_page.brands-carousel')--}}
{{--            <!-- /.logo-slider -->--}}
{{--            <!--  BRANDS CAROUSEL : END  -->--}}
{{--        </div>--}}
{{--        <!-- /.container -->--}}

{{--    </div>--}}
{{--@endsection--}}



    <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d-themes.com/html/panda/product-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:14:21 GMT -->
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

    <script>
        WebFontConfig = {
            google: {families: ['Josefin Sans:300,400,500,600,700']}
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

    <link rel="stylesheet" type="text/css"
          href="{{asset('frontend')}}/assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('frontend')}}/assets/vendor/photoswipe/default-skin/default-skin.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/style.min.css">
</head>

<body>
<div class="page-wrapper">
    @include('frontend.frontend_layout.body.header')

    <main class="main">
        <div class="page-content">
            <div class="row cols-xxl-4 cols-xl-4 cols-lg-3 cols-md-4 cols-2 justify-content-center" id="products-row">
                @if($category_products->isNotEmpty())
                    @foreach ($category_products as $products)
                        <div class="text-center  mt-10 mb-10">
                            <figure class="">
                                <a  href="{{ route('frontend-product-details',['id' => $products->id, 'slug' => $products->product_slug_en]) }}">
                                    <img src="{{asset('')}}{{$products->product_thumbnail}}" alt="product"
                                         width="280" height="360">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h5 class="product-name">
                                    <a href="product-simple.html" class="product_name{{$products->id}}">
                                        {{$products->product_name_en}}
                                    </a>
                                </h5>
                                @if($products->discount_price)
                                    <span class="product-price">
                            <span class="price{{$products->id}}">{{$products->discount_price}} Rs.</span>
                        </span>
                                @else
                                    <span class="product-price">
                            <span class="price{{$products->id}}">{{$products->selling_price}} Rs.</span>
                        </span>
                                @endif
                                <br>
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
                                    $discount_amount = (($products->selling_price-$products->discount_price)/($products->selling_price))*100
                                @endphp
                                @if ($products->discount_price == NULL)
                                    <div class="tag new"><span>New</span></div>
                                @else
                                    <div class="tag new"><span>{{ round($discount_amount) }}%</span></div>
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

    @include('frontend.frontend_layout.body.footer')
</div>
<!-- Sticky Footer -->
{{--<div class="sticky-footer sticky-content fix-bottom">--}}
{{--    <a href="demo1.html" class="sticky-link">--}}
{{--        <i class="p-icon-home"></i>--}}
{{--        <span>Home</span>--}}
{{--    </a>--}}
{{--    <a href="shop.html" class="sticky-link">--}}
{{--        <i class="p-icon-category"></i>--}}
{{--        <span>Categories</span>--}}
{{--    </a>--}}
{{--    <a href="wishlist.html" class="sticky-link">--}}
{{--        <i class="p-icon-heart-solid"></i>--}}
{{--        <span>Wishlist</span>--}}
{{--    </a>--}}
{{--    <a href="account.html" class="sticky-link">--}}
{{--        <i class="p-icon-user-solid"></i>--}}
{{--        <span>Account</span>--}}
{{--    </a>--}}
{{--    <div class="header-search hs-toggle dir-up">--}}
{{--        <a href="#" class="search-toggle sticky-link">--}}
{{--            <i class="p-icon-search-solid"></i>--}}
{{--            <span>Search</span>--}}
{{--        </a>--}}
{{--        <form action="#" class="form-simple">--}}
{{--            <input type="text" name="search" autocomplete="off" placeholder="Search your keyword..." required/>--}}
{{--            <button class="btn btn-search" type="submit">--}}
{{--                <i class="p-icon-search-solid"></i>--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Scroll Top -->--}}
{{--<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="p-icon-arrow-up"></i>--}}
{{--    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">--}}
{{--        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"--}}
{{--                r="34" style="stroke-dasharray: 108.881, 400;"></circle>--}}
{{--    </svg>--}}
{{--</a>--}}

{{--<!-- MobileMenu -->--}}
{{--<div class="mobile-menu-wrapper">--}}
{{--    <div class="mobile-menu-overlay">--}}
{{--    </div>--}}
{{--    <!-- End Overlay -->--}}
{{--    <a class="mobile-menu-close" href="#"><i class="p-icon-times"></i></a>--}}
{{--    <!-- End CloseButton -->--}}
{{--    <div class="mobile-menu-container scrollable">--}}
{{--        <form action="#" class="inline-form">--}}
{{--            <input type="search" name="search" autocomplete="off" placeholder="Search your keyword..." required/>--}}
{{--            <button class="btn btn-search" type="submit">--}}
{{--                <i class="p-icon-search-solid"></i>--}}
{{--            </button>--}}
{{--        </form>--}}
{{--        <!-- End Search Form -->--}}
{{--        <ul class="mobile-menu mmenu-anim">--}}
{{--            <li>--}}
{{--                <a href="demo1.html">Home</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="shop.html" class="active">Shop</a>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            Shop Layouts--}}
{{--                        </a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="shop-list.html">Shop list</a></li>--}}
{{--                            <li><a href="shop-3-cols.html">3 Columns mode</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="shop-4-cols.html">4 Columns mode</a></li>--}}
{{--                            <li><a href="shop-5-cols.html">5 Columns mode</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="shop-6-cols.html">6 Columns mode</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            Shop Variations--}}
{{--                        </a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="shop-left-sidebar.html">With left sidebar</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="shop-full-width.html">Full width</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="shop-horizontal-filter.html">Horizontal filter</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            Product Details--}}
{{--                        </a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="product-simple.html">Default</a></li>--}}
{{--                            <li><a href="product-gallery.html">Gallery</a></li>--}}
{{--                            <li><a href="product-sticky.html">Sticky info</a></li>--}}
{{--                            <li><a href="product-full.html">Full width</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            Woo Subpages--}}
{{--                        </a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="cart.html">Cart</a></li>--}}
{{--                            <li><a href="checkout.html">Checkout</a></li>--}}
{{--                            <li><a href="wishlist.html">Wishlist</a></li>--}}
{{--                            <li><a href="account.html">My account</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#">Elements</a>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="#">Elements 1</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="element-accordions.html">Accordion</a></li>--}}
{{--                            <li><a href="element-alerts.html">Alert & Notification</a></li>--}}
{{--                            <li><a href="element-banner.html">Banner--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-banner-effect.html">Banner Effect--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-blog.html">Blog</a></li>--}}
{{--                            <li><a href="element-button.html">Button</a></li>--}}
{{--                            <li><a href="element-columns.html">Columns--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-countdown.html">Countdown</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Elements 2</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="element-creative-grid.html">Creative Grid</a></li>--}}
{{--                            <li><a href="element-counter.html">Counter--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-entrance-effect.html">Entrance Effect--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-mouse-tracking.html">Mouse Tracking Effect--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-hotspot.html">Hotspot--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-icon-box.html">Icon Box</a></li>--}}
{{--                            <li><a href="element-icons.html">Icon Library</a></li>--}}
{{--                            <li><a href="element-image-box.html">Image box--}}
{{--                                </a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Elements 3</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="element-image-gallery.html">Image Gallery</a></li>--}}
{{--                            <li><a href="element-categories.html">Category</a></li>--}}
{{--                            <li><a href="element-products.html">Products--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-product-banner.html">Products + Banner--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-product-tabs.html">Product Tab--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li><a href="element-section.html">Section Divider--}}

{{--                                </a></li>--}}
{{--                            <li><a href="element-slider.html">Slider--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-social.html">Social Icons--}}
{{--                                </a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Elements 4</a>--}}
{{--                        <ul>--}}
{{--                            <li><a href="element-tabs.html">Tabs--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-testimonial.html">Testimonial--}}

{{--                                </a></li>--}}
{{--                            <li><a href="element-title.html">Title</a></li>--}}
{{--                            <li><a href="element-typography.html">Typography--}}
{{--                                </a></li>--}}
{{--                            <li><a href="element-video.html">Video</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="blog.html">Blog</a>--}}
{{--                <ul>--}}
{{--                    <li><a href="blog.html">Classic</a></li>--}}
{{--                    <li><a href="blog-single.html">Single Post</a></li>--}}
{{--                    <li><a href="blog-2-grid.html">Grid 2 Columns</a></li>--}}
{{--                    <li><a href="blog-3-grid.html">Grid 3 Columns</a></li>--}}
{{--                    <li><a href="blog-4-grid.html">Grid 4 Columns</a></li>--}}
{{--                    <li><a href="blog-sidebar.html">Grid Sidebar</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#">Pages</a>--}}
{{--                <ul>--}}
{{--                    <li><a href="about.html">About Us</a></li>--}}
{{--                    <li><a href="contact.html">Contact Us</a></li>--}}
{{--                    <li><a href="account.html">My Account</a></li>--}}
{{--                    <li><a href="faq.html">Faqs</a></li>--}}
{{--                    <li><a href="error.html">Error 404</a></li>--}}
{{--                    <li><a href="coming.html">Coming Soon</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li><a href="https://d-themes.com/buynow/pandahtml/">Buy Panda!</a></li>--}}
{{--        </ul>--}}
{{--        <!-- End MobileMenu -->--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Plugins JS File -->
<script src="{{asset('frontend')}}/assets/vendor/jquery/jquery.min.js"></script>
<!-- Main JS File -->
<script src="{{asset('frontend')}}/assets/js/main.min.js"></script>
@include('frontend.frontend_layout.body.script')
</body>


<!-- Mirrored from d-themes.com/html/panda/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:15:23 GMT -->
</html>
