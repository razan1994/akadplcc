@extends('front_end_inners.app_front_end')

@section('content')
    {{-- =================================================================================================================== --}}
    {{-- =============================================== Start Slider Area ================================================= --}}
    {{-- =================================================================================================================== --}}

        {{-- =========================================================== --}}
        {{-- ================== Sweet Alert Section ==================== --}}
        {{-- =========================================================== --}}
        <div>
            @if (session()->has('success'))
                <script>
                    swal("@lang('front_end.great_job') !!!", "{!! Session::get('success') !!}", "success", {
                        button: "OK",
                    });
                </script>
            @endif
            @if (session()->has('danger'))
                <script>
                    swal("@lang('front_end.ops') !!!", "{!! Session::get('danger') !!}", "error", {
                        button: "Close",
                    });
                </script>
            @endif
        </div>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ Auth::check() ? route('welcomeAuth') :  route('welcome') }}">@lang('front_end.home')</a></li>
                            <li>
                                @if (Config::get('app.locale') == 'en')
                                    <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                @else
                                    <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <div class="product_container">
        <div class="container">
            <div class="product_container_inner mb-60">
                {{-- ===================================================================== --}}
                {{-- ======================== All Error Messages ========================= --}}
                {{-- ===================================================================== --}}
                @if ($errors->any())
                    <div class="c_personalInformation card col-md-12">
                        <div class="mt-3">
                            <div class="alert alert-danger">
                                <h3>@lang('front_end.correct_errors') : </h3>
                                <hr>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>- {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                <!--product details start-->
                <div class="product_details mb-60">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                           <div class="product-details-tab">
                                <div id="img-1" class="zoomWrapper single-zoom">
                                    <a href="#">
                                        @if (isset($product->image) && $product->image && file_exists($product->image))
                                            <img id="zoom1" src="{{ asset($product->image) }}" data-zoom-image="{{ asset($product->image) }}" alt="big-1">
                                        @else
                                            <img id="zoom1" src="{{ asset('front_end_style/assets/img/product/productbig1.jpg') }}" data-zoom-image="{{ asset('front_end_style/assets/img/product/productbig1.jpg') }}" alt="big-1">
                                        @endif
                                    </a>
                                </div>
                                <div class="single-zoom-thumb">
                                    <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                        @if (isset($product->productImages) && $product->productImages->count() > 0)
                                            @foreach ($product->productImages as $key => $productImage)
                                                <li>
                                                    @if (isset($productImage->image) && $productImage->image && file_exists($productImage->image))
                                                        <a href="#" class="elevatezoom-gallery {{ $key == 0 ? 'active' : '' }}" data-update="" data-image="{{ asset($productImage->image) }}" data-zoom-image="{{ asset($productImage->image) }}">
                                                            <img src="{{ asset($productImage->image) }}" alt="">
                                                        </a>
                                                    @else
                                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('front_end_style/assets/img/product/productbig2.jpg') }}" data-zoom-image="{{ asset('front_end_style/assets/img/product/productbig2.jpg') }}">
                                                            <img src="{{ asset('front_end_style/assets/img/product/productbig2.jpg') }}" alt="zo-th-1"/>
                                                        </a>
                                                    @endif
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product_d_right">
                               {{-- <form action="#"> --}}

                                    <h1>
                                        @if (Config::get('app.locale') == 'en')
                                            {!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}
                                        @else
                                            {!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}
                                        @endif
                                    </h1>
                                    <div class="product_nav">
                                        <ul>
                                            <li class="add_to_cart">
                                                @if (Auth::check())
                                                    @if ($product->productReviewByCustomer->count() > 0)
                                                        <a href="" title="Review Product" data-toggle="modal"><i class="fas fa-star"></i></a>
                                                    @else
                                                        <a href="" title="Review Product" data-toggle="modal" data-target="#ratCUst"><i class="far fa-star"></i></a>
                                                    @endif
                                                @else
                                                    <a href="#" title="Review Product"><i class="far fa-star"></i></a>
                                                @endif
                                            </li>
                                            <li class="add_to_cart">
                                                @if (Auth::check())
                                                    <a href="{{ Auth::check() ? route('productWishlistStore', $product->id) : route('welcome') }}" title="Add To Wishlist">
                                                        {!! isset($product->checkWishlistByAuthUser) && $product->checkWishlistByAuthUser->count() == 1 ? '<i class="fas fa-heart"></i>' : '<i class="ion-android-favorite-outline"></i>' !!}
                                                    </a>
                                                @else
                                                    <a href="#" title="Add To Wishlist">
                                                        <i class="ion-android-favorite-outline"></i>{{-- <i class="fas fa-heart"></i> --}}
                                                    </a>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product_rating">
                                        {{-- <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            0.00 / 5.00
                                        </ul> --}}
                                        {{-- Reviews --}}
                                        <div class="c_review">
                                            <fieldset class="rate">
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 5) class="c_check_star" @endif id="rating10" name="rating" value="10"/><label for="rating10" title="5 stars"></label>
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 4.5) class="c_check_star" @endif id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 4) class="c_check_star" @endif id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 3.5) class="c_check_star" @endif id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 3) class="c_check_star" @endif id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 2.5) class="c_check_star" @endif id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 2) class="c_check_star" @endif id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 1.5) class="c_check_star" @endif id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 1) class="c_check_star" @endif id="rating2" name="rating" value="2"  /><label for="rating2" title="1 star"></label>
                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 0.5) class="c_check_star" @endif id="rating1" name="rating" value="1"  /><label class="half" for="rating1" title="1/2 star"></label>
                                            </fieldset>
                                            <div class="c_rat_num">
                                                <span>{!! isset($product->id) ? number_format(singleRealProductReview($product->id), 2) : '<span style="color:red;">Undefined</span>' !!}/5</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price_box">
                                        @if (isset($product->on_sale_price_status) && $product->on_sale_price_status == 'Active')
                                            <span class="current_price">{!! isset($product->on_sale_price) ? $product->on_sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                            <span class="old_price">{!! isset($product->sale_price) ? $product->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                        @else
                                            <span class="current_price">{!! isset($product->sale_price) ? $product->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                        @endif

                                    </div>
                                    <div class="product_desc">
                                        <p>
                                            @if (Config::get('app.locale') == 'en')
                                                {!! isset($product->main_description_en) ? $product->main_description_en : '<span style="color: red;">Undefined</span>' !!}
                                            @else
                                                {!! isset($product->main_description_ar) ? $product->main_description_ar : '<span style="color: red;">Undefined</span>' !!}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="product_variant color">
                                        <h3>@lang('front_end.available_options')</h3>
                                    </div>

                                    {{-- <div class="product_variant quantity">
                                        <label>quantity</label>
                                        <input min="0" max="100" value="1" type="number">
                                    </div> --}}
                                     <div class="action_links">
                                        <ul>
                                            @if (isset($public_product->quantity_available) && $public_product->quantity_available > 0)
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i>@lang('front_end.add_to_cart')</a></li>
                                            @endif
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_meta">
                                        <span>@lang('front_end.category') :
                                            @if (Config::get('app.locale') == 'en')
                                                <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $product->category->id]) : route('products', ['category_id' => $product->category->id]) }}">{!! isset($product->category->name_en) ? $product->category->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                            @else
                                                <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $product->category->id]) : route('products', ['category_id' => $product->category->id]) }}">{!! isset($product->category->name_ar) ? $product->category->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                            @endif
                                        </span>
                                    </div>
                                    <div class="product_meta">
                                        <span>@lang('front_end.weight') : <a href="#">{!! isset($product->weight) ? $product->weight . '<small> '. $product->weight_unit .'</small>' : '<span style="color: red;">Undefined</span>' !!}</a></span>
                                    </div>

                                    <div class="modal_add_to_cart">
                                        {{-- @if (isset($public_product->quantity_available) && $public_product->quantity_available > 0) --}}
                                        @if (isset($product->quantity_available) && $product->quantity_available > 0)
                                            <form method="GET" action="{{ Auth::check() ? route('addToCartAuth', [isset($product->id) ? $product->id : 0]) : route('addToCart', [isset($product->id) ? $product->id : 0]) }}">
                                                <input min="1" max="100" step="1" value="1" type="number" name="quantity">
                                                <button type="submit">@lang('front_end.add_to_cart')</button>
                                                <p><strong class="text-danger"> @error('quantity') ( {{ $message }} ) @enderror</strong></p>
                                            </form>
                                        @else
                                            <h4 style="color:red;">@lang('front_end.out_of_stock')</h4>
                                        @endif
                                    </div>


                                {{-- </form> --}}
                                <div class="priduct_social">
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--product details end-->

                <!--product info start-->
                <div class="product_d_info">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_d_inner">
                                <div class="product_info_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#sub_description" role="tab" aria-controls="sub_description" aria-selected="false">@lang('front_end.description')</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#ingredients" role="tab" aria-controls="ingredients" aria-selected="false">@lang('front_end.ingredients')</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#benefits" role="tab" aria-controls="benefits" aria-selected="false">@lang('front_end.benefits')</a>
                                        </li>
                                        <li>
                                           <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">@lang('front_end.reviews') ( {{ isset($product->productReviews) && $product->productReviews->count() > 0 ? $product->productReviews->count() : 0 }} )</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    {{-- Sub Description --}}
                                    <div class="tab-pane fade show active" id="sub_description" role="tabpanel" >
                                        <div class="product_info_content">
                                            @if (Config::get('app.locale') == 'en')
                                                <p>{!! isset($product->sub_description_en) ? $product->sub_description_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                            @else
                                                <p>{!! isset($product->sub_description_ar) ? $product->sub_description_ar : '<span style="color: red;">Undefined</span>' !!}</p>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Ingredients --}}
                                    <div class="tab-pane fade" id="ingredients" role="tabpanel">
                                        <div class="product_info_content">
                                            @if (Config::get('app.locale') == 'en')
                                                <p>{!! isset($product->ingredient_en) ? $product->ingredient_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                            @else
                                                <p>{!! isset($product->ingredient_ar) ? $product->ingredient_ar : '<span style="color: red;">Undefined</span>' !!}</p>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Benefits --}}
                                    <div class="tab-pane fade" id="benefits" role="tabpanel">
                                        <div class="product_info_content">
                                            @if (Config::get('app.locale') == 'en')
                                                <p>{!! isset($product->benefit_en) ? $product->benefit_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                            @else
                                                <p>{!! isset($product->benefit_ar) ? $product->benefit_ar : '<span style="color: red;">Undefined</span>' !!}</p>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Reviews --}}
                                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                                        <div class="reviews_wrapper">
                                            <h2>{{ isset($product->productReviews) && $product->productReviews->count() > 0 ? $product->productReviews->count() : 0 }} @lang('front_end.product_reviews')
                                                @if (Config::get('app.locale') == 'en')
                                                    <strong>{!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}</strong>
                                                @else
                                                    <strong>{!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}</strong>
                                                @endif
                                            </h2>
                                            @if (Auth::check())
                                                @if ($product->productReviewByCustomer->count() == 0)
                                                    <div class="modal-footer modal_add_to_cart">
                                                        <a id="checkOut_modal" class="c_submit btn btn-primary" title="Review Product" data-toggle="modal" data-target="#ratCUst">
                                                            @lang('front_end.review_here')
                                                        </a>
                                                    </div>
                                                @endif
                                            @else
                                                <a href="#" title="Review Product"><i class="far fa-star"></i></a>
                                            @endif
                                            {{-- Review Box --}}
                                            @if (isset($product->productReviews) && $product->productReviews->count() > 0)
                                                @foreach ($product->productReviews->sortByDesc('created_at') as $productReview)
                                                    <div class="reviews_comment_box">
                                                        <div class="comment_thmb">
                                                            @if (isset($productReview->customer->profile_photo_path))
                                                                @if ($productReview->customer->profile_photo_path && file_exists($productReview->customer->profile_photo_path))
                                                                    <img src="{{ asset($productReview->customer->profile_photo_path) }}" width="47" alt="image">
                                                                @else
                                                                    <img src="{{ asset('front_end_style/assets/img/blog/comment2.jpg') }}" alt="">
                                                                @endif
                                                            @else
                                                                <img src="{{ asset('front_end_style/assets/img/blog/comment2.jpg') }}" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="comment_text">
                                                            <div class="reviews_meta">
                                                                <div class="star_rating">
                                                                    <div class="c_review">
                                                                        <fieldset class="rate">
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 5) class="c_check_star" @endif id="rating10" name="rating" value="10"/><label for="rating10" title="5 stars"></label>
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 4.5) class="c_check_star" @endif id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 4) class="c_check_star" @endif id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 3.5) class="c_check_star" @endif id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 3) class="c_check_star" @endif id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 2.5) class="c_check_star" @endif id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 2) class="c_check_star" @endif id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 1.5) class="c_check_star" @endif id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 1) class="c_check_star" @endif id="rating2" name="rating" value="2"  /><label for="rating2" title="1 star"></label>
                                                                            <input type="" @if(singleProductReviewStarsNumber($productReview->review_value) == 0.5) class="c_check_star" @endif id="rating1" name="rating" value="1"  /><label class="half" for="rating1" title="1/2 star"></label>
                                                                        </fieldset>
                                                                        <div class="c_rat_num">
                                                                            <span>{!! isset($productReview->review_value) ? $productReview->review_value : '<span style="color:red;">Undefined</span>' !!}/5</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @if (Config::get('app.locale') == 'en')
                                                                    <p><strong>{{ isset($productReview->customer->name_en) ? $productReview->customer->name_en : 'Undefined' }} </strong>- <small> {{ isset($productReview->created_at) ? $productReview->created_at->diffForHumans() : 'Undefined' }}</small></p>
                                                                @else
                                                                    <p><strong>{{ isset($productReview->customer->name_ar) ? $productReview->customer->name_ar : 'Undefined' }} </strong>- <small> {{ isset($productReview->created_at) ? $productReview->created_at->diffForHumans() : 'Undefined' }}</small></p>
                                                                @endif
                                                                <span>{{ isset($productReview->review_note) ? $productReview->review_note : '' }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product info end-->
            </div>

            {{-- ===================================================================== --}}
            {{-- ======================= Start Related Products ====================== --}}
            {{-- ===================================================================== --}}
            <div class="product_wrapper special_products mb-60">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style4">
                                <h3>@lang('front_end.related_products')</h3>
                        </div>
                        <div class="row product_slick_row4">
                            <div class="product_owl_row4 owl-carousel">
                                @if (isset($product->category->products) && $product->category->products->count() > 0 )
                                    @foreach ($product->category->products as $relatedProduct)
                                        @if ($relatedProduct->id != $product->id)
                                            <div class="col-lg-3">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="{{ Auth::check() ? route('productDetailsAuth', $relatedProduct->id) :  route('productDetails', $relatedProduct->id) }}">
                                                            @if (isset($relatedProduct->image) && $relatedProduct->image && file_exists($relatedProduct->image))
                                                                <img src="{{ asset($relatedProduct->image) }}" alt="">
                                                            @else
                                                                <img src="{{ asset('front_end_style/assets/img/product/product1.jpg') }}" alt="">
                                                            @endif
                                                        </a>
                                                        <a class="secondary_img" href="{{ Auth::check() ? route('productDetailsAuth', $relatedProduct->id) :  route('productDetails', $relatedProduct->id) }}">
                                                            @if (isset($relatedProduct->image) && $relatedProduct->image && file_exists($relatedProduct->image))
                                                                <img src="{{ asset($relatedProduct->image) }}" alt="">
                                                            @else
                                                                <img src="{{ asset('front_end_style/assets/img/product/product2.jpg') }}" alt="">
                                                            @endif
                                                        </a>
                                                        <div class="label_product">
                                                            @if (isset($relatedProduct->quantity_available) && $relatedProduct->quantity_available > 0)
                                                                <span class="label_sale">@lang('front_end.new')</span>
                                                            @else
                                                                <span class="label_sale">@lang('front_end.out_of_stock')</span>
                                                            @endif
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                @if (isset($relatedProduct->quantity_available) && $relatedProduct->quantity_available > 0)
                                                                    <li class="add_to_cart"><a href="{{ Auth::check() ? route('addToCartAuth', [isset($relatedProduct->id) ? $relatedProduct->id : 0, 'quantity' => 1]) : route('addToCart', [isset($relatedProduct->id) ? $relatedProduct->id : 0, 'quantity' => 1]) }}" title="add to cart"><i class="ion-bag"></i></a></li>
                                                                @endif
                                                                <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box_{{ isset($relatedProduct->id) ? $relatedProduct->id : 0 }}" title="Quick View"><i class="ion-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_name">
                                                            <h4><a href="{{ Auth::check() ? route('productDetailsAuth', $relatedProduct->id) :  route('productDetails', $relatedProduct->id) }}">{!! isset($relatedProduct->name_en) ? $relatedProduct->name_en : '<span style="color: red;">Undefined</span>' !!}</a></h4>
                                                        </div>
                                                        {{-- <div class="product_rating">
                                                            <ul>
                                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                            </ul>
                                                        </div> --}}
                                                        <div class="c_review">
                                                            <fieldset class="rate">
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 5) class="c_check_star" @endif id="rating10" name="rating" value="10"/><label for="rating10" title="5 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 4.5) class="c_check_star" @endif id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 4) class="c_check_star" @endif id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 3.5) class="c_check_star" @endif id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 3) class="c_check_star" @endif id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 2.5) class="c_check_star" @endif id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 2) class="c_check_star" @endif id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 1.5) class="c_check_star" @endif id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 1) class="c_check_star" @endif id="rating2" name="rating" value="2"  /><label for="rating2" title="1 star"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($relatedProduct->id)) == 0.5) class="c_check_star" @endif id="rating1" name="rating" value="1"  /><label class="half" for="rating1" title="1/2 star"></label>
                                                            </fieldset>
                                                            <div class="c_rat_num">
                                                                <span>{!! isset($relatedProduct->id) ? number_format(singleRealProductReview($relatedProduct->id), 2) : '<span style="color:red;">Undefined</span>' !!}/5</span>
                                                            </div>
                                                        </div>
                                                        <div class="price-container">
                                                            <div class="price_box">
                                                                @if ($relatedProduct->on_sale_price_status == 'Active')
                                                                    <span class="current_price">{!! isset($relatedProduct->on_sale_price) ? $relatedProduct->on_sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                                    <span class="old_price">{!! isset($relatedProduct->sale_price) ? $relatedProduct->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                                @else
                                                                    <span class="current_price">{!! isset($relatedProduct->sale_price) ? $relatedProduct->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                                @endif
                                                            </div>
                                                            <div class="wishlist_btn">
                                                                @if (Auth::check())
                                                                    <a href="{{ Auth::check() ? route('productWishlistStore', $relatedProduct->id) : route('welcome') }}" title="wishlist">
                                                                        {!! isset($relatedProduct->checkWishlistByAuthUser) && $relatedProduct->checkWishlistByAuthUser->count() == 1 ? '<i class="ion-android-favorite"></i>' : '<i class="ion-android-favorite-outline"></i>' !!}
                                                                    </a>
                                                                @else
                                                                    <a href="#" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ===================================================================== --}}
            {{-- ======================= End Related Products ======================== --}}
            {{-- ===================================================================== --}}

            <!--product area start-->
            {{-- <div class="product_wrapper upsell_products">
                <div class="row">
                        <div class="col-12">
                            <div class="section_title title_style4">
                                <h3>upsell products</h3>
                            </div>
                            <div class="row product_slick_row4">
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product24.jpg') }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product23.jpg') }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">new</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.html">Pendant, Made of White Pl...</a></h4>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-container">
                                                 <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a href="wishlist.html" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product22.jpg') }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product21.jpg') }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">new</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.html">Swirl 1 Medium Pendant La...</a></h4>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-container">
                                                 <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a href="wishlist.html" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product20.jpg') }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product19.jpg') }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">new</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.html">Vitra Sunburst Clock pret...</a></h4>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-container">
                                                 <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a href="wishlist.html" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product18.jpg') }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product17.jpg') }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">new</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.html">Light Inverted Pendant Qu...</a></h4>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-container">
                                                 <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a href="wishlist.html" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product16.jpg') }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product15.jpg') }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">new</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.html">Poly and Bark Eames Style...</a></h4>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-container">
                                                 <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a href="wishlist.html" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product14.jpg') }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product13.jpg') }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">new</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.html">Le Klint Carronade Pendel...</a></h4>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-container">
                                                 <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a href="wishlist.html" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product12.jpg') }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product11.jpg') }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">new</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.html">JWDA Penant Lamp Brshed S...</a></h4>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-container">
                                                 <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a href="wishlist.html" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product10.jpg') }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product9.jpg') }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">new</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.html">Suspensions Aplomb Large ...</a></h4>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-container">
                                                 <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a href="wishlist.html" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product8.jpg') }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset('front_end_style/assets/img/product/product7.jpg') }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">new</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4><a href="product-details.html">Ipoly and Bark Eames Styl...</a></h4>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price-container">
                                                 <div class="price_box">
                                                    <span class="current_price">$65.00</span>
                                                    <span class="old_price">$70.00</span>
                                                </div>
                                                <div class="wishlist_btn">
                                                    <a href="wishlist.html" title="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> --}}
            <!--product area end-->
        </div>
    </div>

    {{-- =================================================================================================================== --}}
    {{-- ========================================== Start Product Review Modal Area ======================================== --}}
    {{-- =================================================================================================================== --}}
    <div class="c_reviess_modal">
        <div class="modal fade" id="ratCUst" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content modal_add_to_cart" style="text-align: center">
                    <form action="{{ route('customer.productReview') }}" method="POST" enctype="multipart/form-data" class="">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <input type="hidden">
                        <div class="modal-header">
                            <h5 class="modal-title">@lang('front_end.product_review') :</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="rating">
                                <input id="rating-5" type="radio" name="review_value" value="5" /><label for="rating-5"><i class="fas fa-3x fa-star"></i></label>
                                <input id="rating-4" type="radio" name="review_value" value="4" /><label for="rating-4"><i class="fas fa-3x fa-star"></i></label>
                                <input id="rating-3" type="radio" name="review_value" value="3" /><label for="rating-3"><i class="fas fa-3x fa-star"></i></label>
                                <input id="rating-2" type="radio" name="review_value" value="2" /><label for="rating-2"><i class="fas fa-3x fa-star"></i></label>
                                <input id="rating-1" type="radio" name="review_value" value="1" /><label for="rating-1"><i class="fas fa-3x fa-star"></i></label>
                            </div>
                            <div class="c_textType">
                                {{-- Notes : --}}
                                <div class="c_tupemessge">
                                    <textarea placeholder="@lang('front_end.your_message')" id="comment" name="review_note" class="form-control2" >{{ old('message') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer modal_add_to_cart">
                            <button type="submit" class="c_submit btn btn-primary">@lang('front_end.send_your_review')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- =================================================================================================================== --}}
    {{-- =========================================== End Product Review Modal Area ========================================= --}}
    {{-- =================================================================================================================== --}}

    {{-- =================================================================================================================== --}}
    {{-- ============================================ Start Products Modal Area ============================================ --}}
    {{-- =================================================================================================================== --}}
    @if (isset($product->category->products) && $product->category->products->count() > 0)
        @foreach ($product->category->products as $relatedProduct)
            @if ($relatedProduct->id != $product->id)
                <div class="modal fade" id="modal_box_{{ isset($relatedProduct->id) ? $relatedProduct->id : 0 }}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal_body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                            <div class="modal_tab">
                                                <div class="tab-content product-details-large">
                                                    @if (isset($relatedProduct->productImages) && $relatedProduct->productImages->count() > 0)
                                                        @foreach ($relatedProduct->productImages as $key => $productImage)
                                                            <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }} " id="tab_{{ $productImage->id }}" role="tabpanel">
                                                                <div class="modal_tab_img">
                                                                    @if (isset($productImage->image) && $productImage->image && file_exists($productImage->image))
                                                                        <a href="#"><img src="{{ asset($productImage->image) }}" alt=""></a>
                                                                    @else
                                                                        <a href="#"><img src="{{ asset('front_end_style/assets/img/product/product1.jpg') }}" alt=""></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="modal_tab_button">
                                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                                        @if (isset($relatedProduct->productImages) && $relatedProduct->productImages->count() > 0)
                                                            @foreach ($relatedProduct->productImages as $productImage)
                                                                <li>
                                                                    <a class="nav-link active" data-toggle="tab" href="#tab_{{ $productImage->id }}" role="tab" aria-controls="tab1" aria-selected="false">
                                                                        @if (isset($productImage->image) && $productImage->image && file_exists($productImage->image))
                                                                            <img src="{{ asset($productImage->image) }}" alt="">
                                                                        @else
                                                                            <img src="{{ asset('front_end_style/assets/img/s-product/product.jpg') }}" alt="">
                                                                        @endif
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-12">
                                            <div class="modal_right">
                                                <div class="modal_title mb-10">
                                                    <h2>{!! isset($relatedProduct->name_en) ? $relatedProduct->name_en : '<span style="color: red;">Undefined</span>' !!}</h2>
                                                </div>
                                                <div class="modal_price mb-10">
                                                    @if ($relatedProduct->on_sale_price_status == 'Active')
                                                        <span class="current_price">{!! isset($relatedProduct->on_sale_price) ? $relatedProduct->on_sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        <span class="old_price">{!! isset($relatedProduct->sale_price) ? $relatedProduct->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    @else
                                                        <span class="current_price">{!! isset($relatedProduct->sale_price) ? $relatedProduct->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    @endif
                                                </div>
                                                <div class="modal_description mb-15">
                                                    <h4>@lang('front_end.description') :</h4>
                                                    @if (Config::get('app.locale') == 'en')
                                                        <p>{!! isset($relatedProduct->main_description_en) ? \Illuminate\Support\Str::limit($relatedProduct->main_description_en, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                    @else
                                                        <p>{!! isset($relatedProduct->main_description_ar) ? \Illuminate\Support\Str::limit($relatedProduct->main_description_ar, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                    @endif
                                                </div>
                                                <div class="variants_selects">
                                                    <div class="variants_color">
                                                        <h2>@lang('front_end.the_weight') : {!! isset($relatedProduct->weight) ? $relatedProduct->weight . '<small> '. $relatedProduct->weight_unit .'</small>' : '<span style="color: red;">Undefined</span>' !!}</h2>
                                                    </div>
                                                    <hr>
                                                    <div class="modal_add_to_cart">
                                                        @if (isset($relatedProduct->quantity_available) && $relatedProduct->quantity_available > 0)
                                                            <form method="GET" action="{{ Auth::check() ? route('addToCartAuth', [isset($relatedProduct->id) ? $relatedProduct->id : 0]) : route('addToCart', [isset($product->id) ? $product->id : 0]) }}">
                                                                <input min="1" max="100" step="1" value="1" type="number" name="quantity">
                                                                <button type="submit">@lang('front_end.add_to_cart')</button>
                                                                <p><strong class="text-danger"> @error('quantity') ( {{ $message }} ) @enderror</strong></p>
                                                            </form>
                                                        @else
                                                            <h4 style="color:red;">@lang('front_end.out_of_stock')</h4>
                                                        @endif
                                                    </div>
                                                </div>
                                                {{-- <div class="modal_social">
                                                    <h2>Share this product</h2>
                                                    <div class="addthis_inline_share_toolbox"></div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
    {{-- =================================================================================================================== --}}
    {{-- ============================================== End Products Modal Area ============================================ --}}
    {{-- =================================================================================================================== --}}
@endsection
