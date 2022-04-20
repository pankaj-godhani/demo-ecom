@include('frontend.frontend_layout.body.style')
@include('frontend.frontend_layout.body.header')

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
<div class="body-content">
    <div class="container">
        <div class="my-wishlist-page">
            <div class="row">
                @if($wishlists->isNotEmpty())
                <div class="col-md-12 my-wishlist">
                    <div class="table-responsive">
                        <div class="page-header" style="background-color: #faf8f5">
                            <h1 class="page-title">Wishlist</h1>
                        </div>
                        <nav class="breadcrumb-nav has-border">
                            <div class="container">
                                <ul class="breadcrumb">
                                    <li><a href="demo1.html">Home</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li>Wishlist</li>
                                </ul>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="page-content pt-10 mt-0 pb-10 mb-8">

                                <table class="shop-table wishlist-table  mb-3 text-center">
                                    <thead>
                                    <tr>
                                        <th><span>Product</span></th>
                                        <th class="product_name_en"><span>Name</span></th>
                                        <th class="product-price"><span>Price</span></th>
                                        <th class="product-stock-status"><span>Stock status</span></th>
                                        <th class="product-add-to-cart">Actions</th>
                                        <th class="product-remove"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="wishlist-items-wrapper">
                                    @foreach ($wishlists as $wish)

                                        @foreach ($wish->products as $product )
                                            <tr>

                                                <td class="product-thumbnail">
                                                    <a href="product-simple.html">
                                                        <figure>
                                                            <img src="{{ asset($product->product_thumbnail) }}"
                                                                 width="100" height="125"
                                                                 alt="product">
                                                        </figure>
                                                    </a>
                                                </td>
                                                {{--                                                @if ($product->discount_price == NULL)--}}
                                                <input type="hidden" class="product_name{{$product->id}}"
                                                       value="{{$product->product_name_en}}">
                                                <input type="hidden" class="product_color{{$product->id}}"
                                                       value="{{$product->product_color_en}}">
                                                <input type="hidden" class="product_size{{$product->id}}"
                                                       value="{{$product->product_size_en}}">
                                                <input type="hidden" class="product_qty{{$product->id}}"
                                                       value="{{$product->product_qty}}">
                                                <input type="hidden" class="product_id{{$product->id}}"
                                                       value="{{$product->id}}">
                                                <input class="old-price{{$product->id}}" id="old_price{{$product->id}}"
                                                       type="hidden" value="{{$product->selling_price}} Rs.">
                                                <input type="hidden" class="new-price" id="new-price{{$product->id}}" type="hidden"
                                                       value="{{$product->discount_price}} Rs.">
                                                <input type="hidden" class="product-short-desc" id="description{{$product->id}}"
                                                       value="{{$product->short_description_en}}">
                                                <input type="hidden" class="product_color" id="color{{$product->id}}"
                                                       value="{{$product->product_color_en}}">
                                                <input type="hidden" class="product_size" id="size{{$product->id}}"
                                                       value="{{$product->product_size_en}}">
                                                <input type="hidden" class="product_tag" id="tag{{$product->id}}"
                                                       value="{{$product->product_tags_en}}">
                                                <input type="hidden" class="product_category" id="category{{$product->id}}"
                                                       value="{{$product->category->category_name_en}}">
                                                <input type="hidden" class="product_image" id="image{{$product->id}}"
                                                       value="{{asset('')}}{{$product->product_thumbnail}}">
                                                <input type="hidden" class="product_qty" id="qty{{$product->id}}"
                                                       value="{{$product->product_qty}}">

                                                <td class="product-name">
                                                    <a href="#"
                                                       class="product_name">{{ $product->product_name_en }}</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">{{ $product->discount_price }} Rs.</span>
                                                </td>
                                                {{--                                                @endif--}}
                                                <td class="product-stock-status">
                                                    <span class="wishlist-in-stock">In Stock</span>
                                                </td>


                                                <td class="product-add-to-cart">
                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                    <a href="#"
                                                       class="btn-product btn-quickview btn btn-dim btn-outline mr-1"
                                                       id="quick_view" data="{{$product->id}}"
                                                       data-modal-toggle="productViewModal" onclick="productView({{$product->id}})">QUICK
                                                        VIEW </a>
                                                    <a href="#" class="btn-product btn-cart btn btn-dim"
                                                       id="addcart" data="{{$product->id}}"
                                                    >ADD TO CART</a>
                                                </td>
                                                <td>
                                                    <button type="button" class="" onclick="removeWishlist(this.id)"
                                                            id={{$wish->id }} ><i class="fa fa-times"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="col-md-12 my-wishlist">
                        <div class="table-responsive">
                            <div class="page-header"  style="background-color: #efefef;border-radius: 20px">
                                <h1 class="page-title">Your wishlist is empty</h1>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>





@include('frontend.frontend_layout.body.script')
<script>
    $(document).ready(function () {
        $(document).on('click', '#addcart', function () {
            var data = $(this).attr('data');
            var product_name = $('.product_name' + data).val();
            var id = $('.product_id' + data).val();
            var product_color = $('.product_color' + data).val();
            var product_size = $('.product_size' + data).val();
            var product_qty = $('.product_qty' + data).val();

            console.log(data + " " + product_name + " " + product_color + " " + product_size + " " + product_qty);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                dataType: 'json',
                data: {
                    color: product_color,
                    size: product_size,
                    qty: product_qty,
                    product_name: product_name,
                },

                url: '/cart/data/store/' + id,
                success: function (data) {
                    console.log(data);
                    miniCart()
                    // $('#closeModal').click();
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            title: data.success,
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            title: data.error,
                        })
                    }
                }

            })
        });
    })


</script>
@include('frontend.frontend_layout.body.footer')



































