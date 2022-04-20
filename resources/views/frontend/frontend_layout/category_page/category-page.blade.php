@include('frontend.frontend_layout.body.style')
<body>
<div class="page-wrapper">
    @include('frontend.frontend_layout.body.header')

    <main class="main mb-xl-10">
        <nav class="breadcrumb-nav">
            <div class="container">
                <div class="product-navigation">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">category</a></li>
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
        <div class="product-content container">
            <div class="content-description">
                <h2 class="title title-line title-underline mb-lg-8">
                                <span>
                                    Category
                                </span>
                </h2>
                <div class="row">
                    <div class="align-middle">
                        <div class=""><h5 class="content-subtitle">
                                {{$category->category_name_en}}
                            </h5>
                            <figure>
                                        <img src="{{asset('')}}{{$category->category_image}}"
                                             alt="product-banner" width="300" height="200"
                                             style="background-color: #526e45;">
                            </figure>


                            <figure>
                                {{dd($category->products)}}
{{--                                @foreach($category->products as $product)--}}
                                    <a href="{{ route('subcategory.products', ['id' => $category->products->id,'slug' =>$category->products->product_slug_en]) }}">
                                    View Related Product
                                    </a>
{{--                                @endforeach--}}
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('frontend.frontend_layout.body.footer')
</div>
@include('frontend.frontend_layout.body.sticky_footer')
@include('frontend.frontend_layout.body.script')
{{--<!-- Plugins JS File -->--}}
{{--<script src="{{asset('frontend')}}/assets/vendor/jquery/jquery.min.js"></script>--}}
{{--<!-- Main JS File -->--}}
{{--<script src="{{asset('frontend')}}/assets/js/main.min.js"></script>--}}
</body>


<!-- Mirrored from d-themes.com/html/panda/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:15:23 GMT -->
</html>
