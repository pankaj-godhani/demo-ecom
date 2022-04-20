


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
                @if($subsubcategory_products->isNotEmpty())
                    @foreach ($subsubcategory_products as $products)
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


<!-- Plugins JS File -->
<script src="{{asset('frontend')}}/assets/vendor/jquery/jquery.min.js"></script>
<!-- Main JS File -->
<script src="{{asset('frontend')}}/assets/js/main.min.js"></script>
@include('frontend.frontend_layout.body.script')
</body>


<!-- Mirrored from d-themes.com/html/panda/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:15:23 GMT -->
</html>
