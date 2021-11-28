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
                        <h3>@lang('front_end.wishlist')</h3>
                        <ul>
                            <li><a href="{{ Auth::check() ? route('welcomeAuth') :  route('welcome') }}">@lang('front_end.home')</a></li>
                            <li><a href="{{ Auth::check() ? route('productWishlistShow') :  route('welcome') }}">@lang('front_end.wishlist')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="row">
                {{-- ================================================================================================== --}}
                {{-- ======================================== Product List Section ==================================== --}}
                {{-- ================================================================================================== --}}
                <div class="col-lg-12 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    {{-- <div class="shop_title">
                        <h1>Our Products</h1>
                    </div> --}}
                    {{-- <div class="shop_banner">
                        <img src="{{ asset('front_end_style/images/product_photo.jpg') }}" alt="">
                    </div> --}}

                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>
                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>
                            <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        {{-- <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">
                                    <option selected value="1">Sort by average rating</option>
                                    <option  value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div> --}}
                        <div class="page_amount">
                            <p>@lang('front_end.showing1_9')</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                     <div class="row shop_wrapper">
                        @if (isset($productWishlists))
                            @foreach ($productWishlists as $productWishlist)
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ Auth::check() ? route('productDetailsAuth', $productWishlist->product->id) :  route('productDetails', $productWishlist->product->id) }}">
                                                @if (isset($productWishlist->product->image) && $productWishlist->product->image && file_exists($productWishlist->product->image))
                                                    <img src="{{ asset($productWishlist->product->image) }}" alt="">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/product/product1.jpg') }}" alt="">
                                                @endif
                                            </a>
                                            <a class="secondary_img" href="{{ Auth::check() ? route('productDetailsAuth', $productWishlist->product->id) :  route('productDetails', $productWishlist->product->id) }}">
                                                @if (isset($productWishlist->product->image) && $productWishlist->product->image && file_exists($productWishlist->product->image))
                                                    <img src="{{ asset($productWishlist->product->image) }}" alt="">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/product/product2.jpg') }}" alt="">
                                                @endif
                                            </a>
                                            <div class="label_product">
                                                @if (isset($productWishlist->product->quantity_available) && $productWishlist->product->quantity_available > 0)
                                                    <span class="label_sale">@lang('front_end.new')</span>
                                                @else
                                                    <span class="label_sale">@lang('front_end.out_of_stock')</span>
                                                @endif
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    @if (isset($productWishlist->product->quantity_available) && $productWishlist->product->quantity_available > 0)
                                                        <li class="add_to_cart"><a href="{{ Auth::check() ? route('addToCartAuth', [isset($productWishlist->product->id) ? $productWishlist->product->id : 0, 'quantity' => 1]) : route('addToCart', [isset($productWishlist->product->id) ? $productWishlist->product->id : 0, 'quantity' => 1]) }}" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    @endif
                                                    {{-- <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li> --}}
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box_{{ isset($productWishlist->product->id) ? $productWishlist->product->id : 0 }}" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="product_name">
                                                @if (Config::get('app.locale') == 'en')
                                                    <h4><a href="{{ Auth::check() ? route('productDetailsAuth', $productWishlist->product->id) :  route('productDetails', $productWishlist->product->id) }}">{!! isset($productWishlist->product->name_en) ? $productWishlist->product->name_en : '<span style="color: red;">Undefined</span>' !!}</a></h4>
                                                @else
                                                    <h4><a href="{{ Auth::check() ? route('productDetailsAuth', $productWishlist->product->id) :  route('productDetails', $productWishlist->product->id) }}">{!! isset($productWishlist->product->name_ar) ? $productWishlist->product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a></h4>
                                                @endif
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
                                            {{-- Reviews --}}
                                            <div class="c_review">
                                                <fieldset class="rate">
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 5) class="c_check_star" @endif id="rating10" name="rating" value="10"/><label for="rating10" title="5 stars"></label>
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 4.5) class="c_check_star" @endif id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 4) class="c_check_star" @endif id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 3.5) class="c_check_star" @endif id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 3) class="c_check_star" @endif id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 2.5) class="c_check_star" @endif id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 2) class="c_check_star" @endif id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 1.5) class="c_check_star" @endif id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 1) class="c_check_star" @endif id="rating2" name="rating" value="2"  /><label for="rating2" title="1 star"></label>
                                                    <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($productWishlist->product->id)) == 0.5) class="c_check_star" @endif id="rating1" name="rating" value="1"  /><label class="half" for="rating1" title="1/2 star"></label>
                                                </fieldset>
                                                <div class="c_rat_num">
                                                    <span>{!! isset($productWishlist->product->id) ? number_format(singleRealProductReview($productWishlist->product->id), 2) : '<span style="color:red;">Undefined</span>' !!}/5</span>
                                                </div>
                                            </div>
                                            <div class="price-container">
                                                <div class="price_box">
                                                    @if ($productWishlist->product->on_sale_price_status == 'Active')
                                                        <span class="current_price">{!! isset($productWishlist->product->on_sale_price) ? $productWishlist->product->on_sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        <span class="old_price">{!! isset($productWishlist->product->sale_price) ? $productWishlist->product->sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    @else
                                                        <span class="current_price">{!! isset($productWishlist->product->sale_price) ? $productWishlist->product->sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    @endif
                                                </div>
                                                <div class="wishlist_btn">
                                                    @if (Auth::check())
                                                        <a href="{{ Auth::check() ? route('productWishlistStore', $productWishlist->product->id) : route('welcome') }}" title="wishlist">
                                                            {!! isset($productWishlist->product->checkWishlistByAuthUser) && $productWishlist->product->checkWishlistByAuthUser->count() == 1 ? '<i class="ion-android-favorite"></i>' : '<i class="ion-android-favorite-outline"></i>' !!}
                                                        </a>
                                                    @else
                                                        <a href="#" title="wishlist">
                                                            <i class="ion-android-favorite-outline"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="product_name">
                                                @if (Config::get('app.locale') == 'en')
                                                    <h4><a href="{{ Auth::check() ? route('productDetailsAuth', $productWishlist->product->id) :  route('productDetails', $productWishlist->product->id) }}">{!! isset($productWishlist->product->name_en) ? $productWishlist->product->name_en : '<span style="color: red;">Undefined</span>' !!}</a></h4>
                                                @else
                                                    <h4><a href="{{ Auth::check() ? route('productDetailsAuth', $productWishlist->product->id) :  route('productDetails', $productWishlist->product->id) }}">{!! isset($productWishlist->product->name_ar) ? $productWishlist->product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a></h4>
                                                @endif
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
                                            <div class="price_box">
                                                @if ($productWishlist->product->on_sale_price_status == 'Active')
                                                    <span class="current_price">{!! isset($productWishlist->product->on_sale_price) ? $productWishlist->product->on_sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    <span class="old_price">{!! isset($productWishlist->product->sale_price) ? $productWishlist->product->sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @else
                                                    <span class="current_price">{!! isset($productWishlist->product->sale_price) ? $productWishlist->product->sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @endif
                                            </div>
                                            <div class="product_desc">
                                                <p>{!! isset($productWishlist->product->main_description_en) ? \Illuminate\Support\Str::limit($productWishlist->product->main_description_en, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="{{ Auth::check() ? route('addToCartAuth', [isset($productWishlist->product->id) ? $productWishlist->product->id : 0, 'quantity' => 1]) : route('addToCart', [isset($productWishlist->product->id) ? $productWishlist->product->id : 0, 'quantity' => 1]) }}" title="add to cart">@lang('front_end.add_to_cart')</a></li>
                                                    {{-- <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li> --}}
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box_{{ isset($productWishlist->product->id) ? $productWishlist->product->id : 0 }}" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#" title="wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                </ul>
                                            </div>
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
    <!--shop  area end-->

    {{-- =================================================================================================================== --}}
    {{-- ============================================ Start Products Modal Area ============================================ --}}
    {{-- =================================================================================================================== --}}
    @if (isset($productWishlists))
        @foreach ($productWishlists as $productWishlist)
            <div class="modal fade" id="modal_box_{{ isset($productWishlist->product->id) ? $productWishlist->product->id : 0 }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                @if (isset($productWishlist->product->productImages) && $productWishlist->product->productImages->count() > 0)
                                                    @foreach ($productWishlist->product->productImages as $key => $productImage)
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
                                                    @if (isset($productWishlist->product->productImages) && $productWishlist->product->productImages->count() > 0)
                                                        @foreach ($productWishlist->product->productImages as $productImage)
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
                                                @if (Config::get('app.locale') == 'en')
                                                    <h2>{!! isset($productWishlist->product->name_en) ? $productWishlist->product->name_en : '<span style="color: red;">Undefined</span>' !!}</h2>
                                                @else
                                                    <h2>{!! isset($productWishlist->product->name_ar) ? $productWishlist->product->name_ar : '<span style="color: red;">Undefined</span>' !!}</h2>
                                                @endif
                                            </div>
                                            <div class="modal_price mb-10">
                                                @if ($productWishlist->product->on_sale_price_status == 'Active')
                                                    <span class="current_price">{!! isset($productWishlist->product->on_sale_price) ? $productWishlist->product->on_sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    <span class="old_price">{!! isset($productWishlist->product->sale_price) ? $productWishlist->product->sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @else
                                                    <span class="current_price">{!! isset($productWishlist->product->sale_price) ? $productWishlist->product->sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @endif
                                            </div>
                                            <div class="modal_description mb-15">
                                                <h4>@lang('front_end.description') :</h4>
                                                @if (Config::get('app.locale') == 'en')
                                                    <p>{!! isset($productWishlist->product->main_description_en) ? \Illuminate\Support\Str::limit($productWishlist->product->main_description_en, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                @else
                                                    <p>{!! isset($productWishlist->product->main_description_ar) ? \Illuminate\Support\Str::limit($productWishlist->product->main_description_ar, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                @endif
                                            </div>
                                            <div class="variants_selects">
                                                <div class="variants_color">
                                                    <h2>@lang('front_end.the_weight') : {!! isset($productWishlist->product->weight) ? $productWishlist->product->weight . '<small> '. $productWishlist->product->weight_unit .'</small>' : '<span style="color: red;">Undefined</span>' !!}</h2>
                                                </div>
                                                <hr>
                                                <div class="modal_add_to_cart">
                                                    @if (isset($productWishlist->product->quantity_available) && $productWishlist->product->quantity_available > 0)
                                                        <form method="GET" action="{{ Auth::check() ? route('addToCartAuth', [isset($productWishlist->product->id) ? $productWishlist->product->id : 0]) : route('addToCart', [isset($productWishlist->product->id) ? $productWishlist->product->id : 0]) }}">
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
        @endforeach
    @endif
    {{-- =================================================================================================================== --}}
    {{-- ============================================== End Products Modal Area ============================================ --}}
    {{-- =================================================================================================================== --}}
@endsection
