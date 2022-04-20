{{--<!-- For demo purposes – can be removed on production -->--}}

{{--<!-- For demo purposes – can be removed on production : End -->--}}
{{--<!-- JavaScripts placed at the end of the document so the pages load faster -->--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/bootstrap-hover-dropdown.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/echo.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/jquery.easing-1.3.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/bootstrap-slider.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/jquery.rateit.min.js"></script>--}}
{{--<script type="text/javascript" src="{{ asset('frontend') }}/assets/js/lightbox.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/bootstrap-select.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>--}}
{{--<script src="{{ asset('frontend') }}/assets/js/scripts.js"></script>--}}
{{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>--}}

{{-- custom toastr script --}}
{{--<script>--}}
{{--@if (Session::has('message'))--}}
{{--    let type = "{{ Session::get('alert-type', 'info') }}";--}}
{{--    switch (type) {--}}
{{--        case 'info':--}}
{{--            toastr.info("{{ Session::get('message') }}")--}}
{{--            break;--}}
{{--        case 'success':--}}
{{--            toastr.success("{{ Session::get('message') }}")--}}
{{--            break;--}}
{{--        case 'warning':--}}
{{--            toastr.warning("{{ Session::get('message') }}")--}}
{{--            break;--}}
{{--        case 'error':--}}
{{--            toastr.error("{{ Session::get('message') }}")--}}
{{--            break;--}}
{{--        default:--}}
{{--            break;--}}
{{--    }--}}
{{--@endif--}}
{{--</script>--}}
{{--@yield('frontend_script')--}}

<!-- Plugins JS File -->
<script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/sticky/sticky.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/elevatezoom/jquery.elevatezoom.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<!-- Main JS File -->
<script src="{{asset('frontend/assets/js/main.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{--<link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js" />--}}
{{--<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>--}}

<script>
    @if (Session::has('message'))
    let type = "{{ Session::get('alert-type', 'info') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}")
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}")
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}")
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}")
            break;
        default:
            break;
    }
    @endif
</script>

<script>

    $(document).ready(function(){
        $( document ).on('click','#addcart',  function() {

            var data = $(this).attr('data');
            var product_name = $('.name' + data).val();
            var id = $('.product_id' + data).val();
            var product_color = $('.product_color' + data).val();
            var product_size = $('.product_size' + data).val();
            var product_qty = $('.product_quanty' + data).val();

            console.log(product_qty);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                dataType: 'json',
                data:{
                    color: product_color,
                    size:product_size,
                    qty: product_qty,
                    product_name: product_name,
                },

                url: '/cart/data/store/'+id,
                success: function(data){
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
                    if($.isEmptyObject(data.error)){
                        Toast.fire({
                            type:'success',
                            title: data.success,
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            title:data.error,
                        })
                    }
                }

            })
        });
    })

    function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var size = $('.active.size').attr("href");
        var color= $('.active.color').attr("href");

        var qty = $('#product_qty').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: 'json',
            data:{
                color : color,
                size : size,
                qty : qty,
                product_name : product_name,
            },

            url: '/cart/data/store/'+id,
            success: function(data){
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
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title:data.error,
                    })
                }
            }
        })
    }
    function miniCart(){
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/product/mini/cart',
            success: function(response){
                $('span[id="cartSubTotal"]').text(response.cart_total);
                $('span[id="cartQty"]').text(response.cart_qty);
                var miniCart = "";
                $.each(response.carts, function(key,value){
                    miniCart += `
                    <div class="cart-item product-summary">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="image">
                                    <a href="#"><img src="/${value.options.image}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <h3 class="name"><a href="index.php?page-detail">${value.name}</a></h3>
                                <div class="price">Rs. ${value.subtotal}</div>
                            </div>
                            <div class="col-xs-1 action"> <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button> </div>
                        </div>
                    </div>
                    <!-- /.cart-item -->
                    <div class="clearfix"></div>
                    <hr>
                    `;
                });
                $('#miniCart').html(miniCart);
                $('.summary-subtotal-price').text('Rs.'+(response.cart_total))
            }
        })
    }
    miniCart();
    function miniCartRemove(rowId){
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/minicart/product-remove/'+rowId,
            success: function(data){
                miniCart();
                //start message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title:data.error,
                    })
                }
                //end message
            }
        });
    }
    function addToWishlist(id){

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            dataType: 'json',
            url:'/add/product/to-wishlist/'+id,
            success: function(data){
                //start message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        icon: 'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title:data.error,
                    })
                }
                //end message
            }
        });
    }

    function removeWishlist(wish_id){

        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/remove/from-wishlist/'+wish_id,
            success: function(data){

                location.reload();
                //start message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title:data.error,
                    })
                }
                //end message
            }
        });
    }

    function applyCoupon(){
        var coupon_name = $('#coupon_name').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: 'json',
            data: {coupon_name: coupon_name},
            url: '/coupon/apply/',
            success: function(recv_data) {
                if(data.validity == true){
                    $('#applyCouponField').hide();
                }
                couponCalField();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(recv_data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: recv_data.success
                    })
                } else {
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: recv_data.error
                    })
                }
                location.reload(true);

                // End Message
            }
        });
    }
    //END applyCoupon

    //START coupon Calcluation
    function couponCalField(){
        $.ajax({
            type: 'GET',
            url: "{{ url('/coupon-calculation') }}",
            dataType: 'json',
            success: function(data){
                miniCart();
                // cart();
                if(data.total){
                    $('#couponCalField').html(
                        `<tr>
                                    <th>
                                   <tr class="summary-subtotal">
                                        <td>
                                            <h4 class="summary-subtitle">Subtotal</h4>
                                        </td>
                                        <td>
                                            <p class="summary-subtotal-price">Rs. ${data.total}</p>
                                        </td>
                                    </tr>
                                   <tr class="summary-subtotal">
                                        <td>
                                            <h4 class="summary-subtitle">Grand Total</h4>
                                        </td>
                                        <td>
                                            <p class="summary-subtotal-price">Rs. ${data.total}</p>
                                        </td>
                                    </tr>

                                    </th>
                            </tr>`
                    )
                }else{
                    $('#couponCalField').html(
                        `<tr>
                               <th>
                                    <tr class="summary-subtotal">
                                        <td>
                                            <h4 class="summary-subtitle">Subtotal Amount</h4>
                                        </td>
                                        <td>
                                            <p class="">Rs. ${data.subtotal}</p>
                                        </td>
                                    </tr>
                                    <tr class="summary-subtotal">
                                        <td>
                                            <h4 class="summary-subtitle">Coupon Name</h4>
                                        </td>
                                        <td>
                                            <p class="mr-5"> ${data.coupon_name} <button type="submit" onclick="couponRemove()"><i class="fa fa-times"></i></button></p>

                                        </td>
                                    </tr>
                                   <tr class="summary-subtotal">
                                        <td>
                                            <h4 class="summary-subtitle">Discount Amount</h4>
                                        </td>
                                        <td>
                                            <p class="">Rs. ${data.discount_amount}</p>
                                        </td>
                                    </tr>
                                    <tr class="summary-subtotal">
                                        <td>
                                            <h4 class="summary-subtitle">Grand Total Amount</h4>
                                        </td>
                                        <td>
                                            <p class="">Rs. ${data.total_amount}</p>
                                        </td>
                                    </tr>

                               </th>
                        </tr>
                            `
                    )
                }
            }
        });
    }
    couponCalField();
    //END coupon Calcluation

    // Start coupon remove
    // End coupon remove
    function couponRemove(){
        $.ajax({
            type: 'GET',
            url: "{{ url('/coupon-remove') }}",
            dataType: 'json',
            success: function(data){
                couponCalField();
                $('#applyCouponField').show();
                $('#coupon_name').val('');
                //location.reload();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                } else {
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                location.reload(true);
                // End Message
            }
        });
    }

</script>
<script>
    $(document).on('click', '#quickview', function () {

        var data = $(this).attr('data');
        var product_name = $('.name' + data).val();
        var id = $('.product_id' + data).val();
        var oldprice = $('#old_price' + data).val();
        var newPrice = $('#new-price' + data).val();
        var description = $('#description' + data).val();
        var product_qty = $('#qty' + data).val();
        var color = $('#color' + data).val();
        var size = $('#size' + data).val();
        var tag = $('#tag' + data).val();
        var category = $('#category' + data).val();
        var image = $('#image' + data).val();
        var code = $('#code' + data).val();

        console.log(color);

        var newchar = ' ';
        const  mystring = color.split(',').join(newchar);

        var newword = ' ';
        mystring1 = size.split(',').join(newword);



        // console.log(mystring[0]);



        // const numbers = [1, 2, 3, 4, 5];
        // $.each(numbers, function(index, value){
        //     console.log(`${index}: ${value}`);
        // });



        // var myStr = color;
        // myStr = myStr.replace(/,/g, "");
        // console.log(myStr);

        // var names = color;
        // var nameArr = names.split(',');
        // console.log(nameArr);
        // console.log(nameArr[0]);
        // console.log(nameArr[1]);
        // console.log(nameArr[2]);
        $('#addcart').attr('data',id);
        $('#p_id').val(id);
        $('#pro_name').text(product_name);
        $('#old_price').text(oldprice);
        $('#new_price').text(newPrice);
        $('#description').text(description);
        $('#product_quanty').val(product_qty);

        $('#product_tag').text(tag);
        $('#product_category').text(category);
        $('#productimage').attr('src', image);
        $('#product_code').text(code);
        $('#color').text(mystring);
        $('#size').text(mystring1);
        // $('#product_color').val(myStr)




        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: 'json',
            data: {
                color: color,
                size: size,
                product_name: product_name,
            },

            url: '/product/detail/' + id,
            success: function (data) {
                // console.log(data);
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


</script>
