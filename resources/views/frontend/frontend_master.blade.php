
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<!-- Meta -->--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">--}}
{{--<meta name="description" content="">--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--<meta name="author" content="">--}}
{{--<meta name="keywords" content="MediaCenter, Template, eCommerce">--}}
{{--<meta name="robots" content="all">--}}
{{--<title>@yield('title')</title>--}}

{{--@include('frontend.frontend_layout.body.style')--}}

{{--</head>--}}
{{--<body class="cnt-home">--}}
{{--<!--  HEADER  -->--}}
{{--@include('frontend.frontend_layout.body.header')--}}
{{--<!--  HEADER : END  -->--}}
{{--@if (request()->routeIs('home'))--}}
{{--@else--}}
{{--  @include('frontend.frontend_layout.body.breadcrumb')--}}
{{--@endif--}}

{{--@yield('frontend_content')--}}

{{--<!--  FOOTER  -->--}}
{{--@include('frontend.frontend_layout.body.footer')--}}
{{--<!--  FOOTER : END -->--}}

{{--@include('frontend.frontend_layout.body.script')--}}



{{--<script type="text/javascript">--}}
{{--    $.ajaxSetup({--}}
{{--        headers: {--}}
{{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--        }--}}
{{--    })--}}
{{--    // start product view with Modal--}}
{{--    function productView(id){--}}
{{--        $.ajax({--}}
{{--            type: 'GET',--}}
{{--            url: '/product/view/modal/'+id,--}}
{{--            dataType: 'json',--}}
{{--            success: function(data){--}}
{{--                $('#pname').text(data.product.product_name_en);--}}
{{--                $('#pcode').text(data.product.product_code);--}}
{{--                $('#category').text(data.product.category.category_name_en);--}}
{{--                $('#brand').text(data.product.brand.brand_name_en);--}}
{{--                $('#pimage').attr('src', '/'+data.product.product_thumbnail);--}}

{{--                $('#product_id').val(id);--}}
{{--                $('#product_qty').val(1);--}}

{{--                //product price--}}
{{--                if(data.product.discount_price == null){--}}
{{--                    $('#price').text(data.product.selling_price);--}}
{{--                    $('#oldprice').text('');--}}
{{--                }else{--}}
{{--                    $('#price').text(data.product.discount_price);--}}
{{--                    $('#oldprice').text(data.product.selling_price);--}}
{{--                }--}}

{{--                // product stock--}}
{{--                if(data.product.product_qty > 0)--}}
{{--                {--}}
{{--                    $('#Outofstock').text('');--}}
{{--                    $('#Instock').text('In Stock');--}}
{{--                }else{--}}
{{--                    $('#Instock').text('');--}}
{{--                    $('#Outofstock').text('OUT of Stock');--}}
{{--                }--}}

{{--                // color and size--}}
{{--                $('select[name="color"]').empty();--}}
{{--                $.each(data.colors_en, function(key,value){--}}
{{--                    $('select[name="color"]').append('<option value=" '+value+' ">'+value+'</option>')--}}
{{--                    if(data.colors_en == ""){--}}
{{--                        $('#colorArea').hide()--}}
{{--                    }else{--}}
{{--                        $('#colorArea').show()--}}
{{--                    }--}}
{{--                })--}}
{{--                $('select[name="size"]').empty();--}}
{{--                $.each(data.size_en, function(key,value){--}}
{{--                    $('select[name="size"]').append('<option value=" '+value+' ">'+value+'</option>')--}}
{{--                    if(data.size_en == ""){--}}
{{--                        $('#sizeArea').hide()--}}
{{--                    }else{--}}
{{--                        $('#sizeArea').show()--}}
{{--                    }--}}
{{--                })--}}
{{--            }--}}
{{--        })--}}
{{--    }--}}

{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
