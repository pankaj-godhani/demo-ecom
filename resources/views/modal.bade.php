<div id="productViewModal" aria-hidden="true"
     class="hidden fixed right-0 left-0 top-8 z-50 justify-center items-center h-modal md:h-full md:inset-0"
     style="margin-top: 50px;">
    <div class="w-13 items-center h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" style="padding: 20px;">
            <div class="flex justify-end p-2">
                <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="productViewModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>


            <div class="page-content">
                <div class="container">
                    <div class="product product-single product-simple row mb-8">
                        <div class="col-md-7">
                            <td class="product-thumbnail">
                                <a href="product-simple.html">
                                    <figure>
                                        <img id="pimage">
                                    </figure>
                                </a>
                            </td>
                        </div>

                        <div class="col-md-5">
                            <div class="product-details">
                                <input type="hidden" name="" id="product_id" value="{{ $product->id }}"
                                       min="1">
                                <h2 class="pro_name" id="pname"></h2>
                                <hr>

                                <li class="list-group-item">Price: <strong class="text-danger">BDT
                                        <span id="price"></span>
                                    </strong>
                                    <del id="oldprice"></del>
                                </li>
                                <li class="list-group-item">Stock:
                                    <span id="Instock" class="bdage bdage-pill badge-success"
                                          style="background: green; color: white"></span>
                                    <span id="Outofstock" class="bdage bdage-pill badge-danger"
                                          style="background: red; color: white"></span>
                                </li>


                                <div class="form-group" id="colorArea">
                                    <label for="color">Choose Color</label>
                                    <select class="form-control" id="color" name="color">
                                        <option>--Select Color--</option>
                                    </select>
                                </div>
                                <div class="form-group" id="sizeArea">
                                    <label for="size">Choose Size</label>
                                    <select class="form-control" id="size" name="size">
                                        <option>--Select Size--</option>
                                    </select>
                                </div>
                                <div class="product-form product-qty pt-1 pb-4">
                                    <div class="product-form-group">
                                        <div class="input-group">
                                            <button class="quantity-minus p-icon-minus-solid"></button>
                                            <input class="quantity form-control" id="product_qty" type="number"
                                                   min="1"
                                                   max="1000000">
                                            <button class="quantity-plus p-icon-plus-solid"></button>
                                        </div>
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-primary" onclick="addToCart()"><i
                                                class="p-icon-cart-solid"></i> ADD TO CART
                                        </button>
                                    </div>
                                </div>
                                <hr class="product-divider">


                                <div class="product-meta">
                                    <label>CATEGORIES:</label><a href="#"
                                                                 id="category">{{$product->category->category_name_en}}</a><br>
                                    <label>sku:</label><a href="#" id="pcode">{{$product->product_code}}</a><br>
                                    <label>tag:</label><a href="#"
                                                          id="product_tag">{{$product->product_tags_en}}</a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
