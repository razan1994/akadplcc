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
                        <h3>@lang('front_end.shop')</h3>
                        <ul>
                            <li><a href="{{ Auth::check() ? route('welcomeAuth') :  route('welcome') }}">@lang('front_end.home')</a></li>
                            <li><a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}">@lang('front_end.products')</a></li>
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
                {{-- ======================================= Search Section (Filters) ================================= --}}
                {{-- ================================================================================================== --}}
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_list widget_filter">
                            <h2>@lang('front_end.price')</h2>
                            <form action="{{ Auth::check() ? route('productsAuth') : route('products') }}" method="GET">
                                <div id="slider-range"></div>
                                <button type="submit">@lang('front_end.filter')</button>
                                <input type="text" name="text" id="amount" />
                            </form>
                        </div>
                        {{-- <div class="widget_list">
                            <h2>Weight :</h2>
                            <ul>
                                <li>
                                    <a href="#">Weight 1 : <span>( 1 <small> KG</small> )</span></a>
                                </li>
                                <li>
                                    <a href="#"> Weight 2 : <span>( 2 <small> KG</small> )</span></a>
                                </li>
                                <li>
                                    <a href="#">Weight 3 : <span>( 3 <small> KG</small> )</span></a>
                                </li>
                                <li>
                                    <a href="#"> Weight 4 : <span>( 4 <small> KG</small> )</span></a>
                                </li>

                            </ul>
                        </div> --}}
                        <div class="widget_list widget_categories">
                            <a href="{{ Auth::check() ? route('productsAuth') : route('products') }}"><h2>@lang('front_end.categories') ( {{ isset($public_categories) ? $public_categories->count() : 0 }} )</h2></a>
                            <ul>
                                @if (isset($public_categories))
                                    @foreach ($public_categories as $public_category)
                                        <li>
                                            @if (Config::get('app.locale') == 'en')
                                                <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}">{!! isset($public_category->name_en) ? $public_category->name_en : '<span style="color: red;">Undefined</span>' !!}<span> ( {!! isset($public_category->products) ? $public_category->products->count() : 0 !!} )</span></a>
                                            @else
                                                <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}">{!! isset($public_category->name_ar) ? $public_category->name_ar : '<span style="color: red;">Undefined</span>' !!}<span> ( {!! isset($public_category->products) ? $public_category->products->count() : 0 !!} )</span></a>
                                            @endif
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        {{-- <div class="shop_sidebar_banner">
                            <a href="#"><img src="{{ asset('front_end_style/assets/img/bg/banner31.jpg') }}" alt=""></a>
                        </div> --}}
                    </aside>
                    <!--sidebar widget end-->
                </div>

                {{-- ================================================================================================== --}}
                {{-- ======================================== Product List Section ==================================== --}}
                {{-- ================================================================================================== --}}
                <div class="col-lg-9 col-md-12">
                    <div class="shop_banner">
                        <img src="{{ asset('front_end_style/images/product_photo.jpg') }}" alt="">
                    </div>

                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>
                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>
                            <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        <div class="page_amount">
                            <p>@lang('front_end.showing1_9')</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                     <div class="row shop_wrapper">
                        @if (isset($products))
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">
                                                @if (isset($product->image) && $product->image && file_exists($product->image))
                                                    <img src="{{ asset($product->image) }}" alt="">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/product/product1.jpg') }}" alt="">
                                                @endif
                                            </a>
                                            <a class="secondary_img" href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">
                                                @if (isset($product->image) && $product->image && file_exists($product->image))
                                                    <img src="{{ asset($product->image) }}" alt="">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/product/product2.jpg') }}" alt="">
                                                @endif
                                            </a>
                                            <div class="label_product">
                                                @if (isset($product->quantity_available) && $product->quantity_available > 0)
                                                    <span class="label_sale">@lang('front_end.new')</span>
                                                @else
                                                    <span class="label_sale">@lang('front_end.out_of_stock')</span>
                                                @endif
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    @if (isset($product->quantity_available) && $product->quantity_available > 0)
                                                        <li class="add_to_cart"><a href="{{ Auth::check() ? route('addToCartAuth', [isset($product->id) ? $product->id : 0, 'quantity' => 1]) : route('addToCart', [isset($product->id) ? $product->id : 0, 'quantity' => 1]) }}" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    @endif
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box_{{ isset($product->id) ? $product->id : 0 }}" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="product_name">
                                                @if (Config::get('app.locale') == 'en')
                                                    <h4><a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}</a></h4>
                                                @else
                                                    <h4><a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a></h4>
                                                @endif
                                            </div>
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
                                            <div class="price-container">
                                                <div class="price_box">
                                                    @if ($product->on_sale_price_status == 'Active')
                                                        <span class="current_price">{!! isset($product->on_sale_price) ? $product->on_sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        <span class="old_price">{!! isset($product->sale_price) ? $product->sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    @else
                                                        <span class="current_price">{!! isset($product->sale_price) ? $product->sale_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    @endif
                                                </div>
                                                <div class="wishlist_btn">
                                                    @if (Auth::check())
                                                        <a href="{{ Auth::check() ? route('productWishlistStore', $product->id) : route('welcome') }}" title="wishlist">
                                                            {!! isset($product->checkWishlistByAuthUser) && $product->checkWishlistByAuthUser->count() == 1 ? '<i class="ion-android-favorite"></i>' : '<i class="ion-android-favorite-outline"></i>' !!}
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
                                                <h4>
                                                    @if (Config::get('app.locale') == 'en')
                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                    @else
                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                    @endif
                                                </h4>
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
                                                @if ($product->on_sale_price_status == 'Active')
                                                    <span class="current_price">{!! isset($product->on_sale_price) ? $product->on_sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    <span class="old_price">{!! isset($product->sale_price) ? $product->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @else
                                                    <span class="current_price">{!! isset($product->sale_price) ? $product->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @endif
                                            </div>
                                            <div class="product_desc">
                                                @if (Config::get('app.locale') == 'en')
                                                    <p>{!! isset($product->main_description_en) ? \Illuminate\Support\Str::limit($product->main_description_en, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                @else
                                                    <p>{!! isset($product->main_description_ar) ? \Illuminate\Support\Str::limit($product->main_description_ar, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                @endif
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="{{ Auth::check() ? route('addToCartAuth', [isset($product->id) ? $product->id : 0, 'quantity' => 1]) : route('addToCart', [isset($product->id) ? $product->id : 0, 'quantity' => 1]) }}" title="add to cart">@lang('front_end.add_to_cart')</a></li>
                                                    {{-- <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li> --}}
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box_{{ isset($product->id) ? $product->id : 0 }}" title="Quick View"><i class="ion-eye"></i></a></li>
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
    @if (isset($products))
        @foreach ($products as $product)
            <div class="modal fade" id="modal_box_{{ isset($product->id) ? $product->id : 0 }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                @if (isset($product->productImages) && $product->productImages->count() > 0)
                                                    @foreach ($product->productImages as $key => $productImage)
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
                                                    @if (isset($product->productImages) && $product->productImages->count() > 0)
                                                        @foreach ($product->productImages as $productImage)
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
                                                    <h2>{!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}</h2>
                                                @else
                                                    <h2>{!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}</h2>
                                                @endif
                                            </div>
                                            <div class="modal_price mb-10">
                                                @if ($product->on_sale_price_status == 'Active')
                                                    <span class="current_price">{!! isset($product->on_sale_price) ? $product->on_sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    <span class="old_price">{!! isset($product->sale_price) ? $product->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @else
                                                    <span class="current_price">{!! isset($product->sale_price) ? $product->sale_price . '<small> '.trans("front_end.sar").'</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @endif
                                            </div>
                                            <div class="modal_description mb-15">
                                                <h4>@lang('front_end.description') :</h4>
                                                @if (Config::get('app.locale') == 'en')
                                                    <p>{!! isset($product->main_description_en) ? \Illuminate\Support\Str::limit($product->main_description_en, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                @else
                                                    <p>{!! isset($product->main_description_ar) ? \Illuminate\Support\Str::limit($product->main_description_ar, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                @endif
                                            </div>
                                            <div class="variants_selects">
                                                <div class="variants_color">
                                                    <h2>@lang('front_end.the_weight') : {!! isset($product->weight) ? $product->weight . '<small> '. $product->weight_unit .'</small>' : '<span style="color: red;">Undefined</span>' !!}</h2>
                                                </div>
                                                <hr>
                                                <div class="modal_add_to_cart">
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
