<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Panda - Ultimate eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Panda - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <link rel="icon" type="image/png" href="{{asset('frontend/assets/images/icons/favicon.png')}}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/demo5.min.css')}}">

    <style>
        .product-wrap *, :after, :before {
            text-align: -webkit-center !important;
        }
        .mfp-fade.mfp-bg{
            opacity: 0 !important;
        }
        .phpdebugbar-openhandler-overlay > .z-40 {
            z-index: 0 !important;
        }

        .phpdebugbar-openhandler-overlay > .bg-gray-900 {
            background-color: unset !important;
        }
    </style>

</head>

<body class="home">
<div class="page-wrapper">
@include('frontend.user.header')
<!-- End Header -->
    <main class="main">
        <div class="page-content">
            <section class="intro-section">
                <div
                    class="owl-carousel owl-theme intro-slide animation-slider owl-nav-inner owl-nav-arrow row cols-1 gutter-no"
                    data-owl-options="{
                                    'nav': false,
                                    'dots': false,
                                    'loop': false,
                                    'items': 1,
                                    'margin': 0,
                                    'responsive': {
                                        '992': {
                                            'nav': true
                                        }
                                    }
                                }">
                    <div class="intro-slider1 banner banner-fixed">
                        <h2
                            class="p-absolute x-50 text-uppercase font-weight-bold banner-title lh-1 mb-0 text-center">
                            Organic
                        </h2>
                        <div class="floating-template p-absolute x-50">
                            <figure class="floating" data-options='{"invertX":true,"invertY":false}'
                                    data-floating-depth="0.5">
                                <img src="{{asset('frontend')}}/assets/images/demos/demo5/intro-float.png" width="756"
                                     height="649"
                                     alt="intro-float1" class="layer"/>
                            </figure>
                        </div>
                        <div class="banner-content x-50 pl-xl-9">
                            <h3 class="banner-descri text-uppercase mb-lg-8 pl-2">
                                <span class="desc-line"></span>
                                New arrivals</h3>
                            <h2 class="banner-subtitle text-white lh-1 mb-0 text-center">
                                Organic Products
                            </h2>
                            <p class="font-weight-light text-right mb-0 ls-normal">STARTING AT <span
                                    class="text-primary font-weight-normal pl-1">$8.00</span></p>
                        </div>
                    </div>
                    <div class="intro-slider2 banner banner-fixed">
                        <figure class="h-100 kenBurnsToLeft duration">
                            <img src="{{asset('frontend')}}/assets/images/demos/demo5/intro-banner2.jpg" class="h-100"
                                 alt="intro-banner2"
                                 width="1903" height="980" style="background-color: #333;">
                        </figure>
                        <div class="container">
                            <div class="banner-content text-right y-50">
                                <h3 class="banner-descri text-uppercase lh-1 text-left slide-animate mb-5"
                                    data-animation-options="{'name': 'fadeInDownShorter', 'duration': '1.2s'}">
                                    <span class="desc-line mr-4"></span>TOP weekly seller</h3>
                                <h2 class="banner-title text-capitalize text-primary mb-5 slide-animate"
                                    data-animation-options="{'name': 'fadeInDownShorter', 'duration': '1.2s', 'delay': '.2s'}">
                                    100%<span class="text-white title-content">Organic</span><br>
                                    <span class="text-white">panda Coffee</span>
                                </h2>
                                <a href="demo6-shop.html" class="btn btn-primary-dark slide-animate"
                                   data-animation-options="{'name': 'fadeInDownShorter', 'duration': '1.2s', 'delay': '.6s'}">SHop
                                    now<i class="p-icon-arrow-long-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('frontend.user.sidebar')
            @include('frontend.frontend_layout.home_page.category')
        </div>
    </main>

@include('frontend.user.footer')
</div>
@include('frontend.frontend_layout.body.script')
</body>
</html>
