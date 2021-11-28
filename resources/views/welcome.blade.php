@extends('front_end_inners.app_front_end')

@section('content')

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

    {{-- =================================================================================================================== --}}
    {{-- =============================================== Start Slider Area ================================================= --}}
    {{-- =================================================================================================================== --}}
    <section class="slider_section">
        <div class="slider_area owl-carousel">
            @if (isset($sliders))
                @foreach ($sliders as $slider)
                    <div class="single_slider d-flex align-items-center"
                        @if (isset($slider->image) && $slider->image && file_exists($slider->image))
                            data-bgimg="{{ asset($slider->image) }}"
                        @else
                            data-bgimg="{{ asset('front_end_style/assets/img/slider/slider1.jpg') }}"
                        @endif
                    >
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider_content">
                                    @if (Config::get('app.locale') == 'en')
                                        <h1>{!! isset($slider->title_ar) ? $slider->title_en : '<span style="color: red;">Undefined</span>' !!}</h1>
                                        <p>{!! isset($slider->description_en) ? $slider->description_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                    @else
                                        <h1>{!! isset($slider->title_ar) ? $slider->title_ar : '<span style="color: red;">Undefined</span>' !!}</h1>
                                        <p>{!! isset($slider->description_ar) ? $slider->description_ar : '<span style="color: red;">Undefined</span>' !!}</p>
                                    @endif
                                    <a href="{{ Auth::check() ? route('productsAuth') : route('products') }}">@lang('front_end.shop_now')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </section>
    {{-- =================================================================================================================== --}}
    {{-- ================================================ End Slider Area ================================================== --}}
    {{-- =================================================================================================================== --}}

    {{-- =================================================================================================================== --}}
    {{-- =============================================== Start Banner Area ================================================= --}}
    {{-- =================================================================================================================== --}}
    <div class="banner_area pt-30 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    {{-- Banner 1 --}}
                    <div class="single_banner">
                        <div class="banner_thumb">
                            @if (isset($banner->status_1) && $banner->status_1 == 'Active')
                                @if ($banner->banner_1_url)
                                    <a href="{{ isset($banner->banner_1_url) ? $banner->banner_1_url : '#' }}"
                                        target="_blank">
                                        @if (isset($banner) && $banner->image_1 && file_exists($banner->image_1))
                                            <img src="{{ asset($banner->image_1) }}" width="auto">
                                        @else
                                            <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                        @endif
                                    </a>
                                @else
                                    <a>
                                        @if (isset($banner) && $banner->image_1 && file_exists($banner->image_1))
                                            <img src="{{ asset($banner->image_1) }}" width="auto">
                                        @else
                                            <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                        @endif
                                    </a>
                                @endif
                                <div class="banner_text">
                                    @if ($banner->banner_1_url)
                                        <a href="{{ isset($banner->banner_1_url) ? $banner->banner_1_url : '#' }}" target="_blank">@lang('front_end.view')</a>
                                    @endif
                                </div>
                            @else
                                <a href="#">
                                    <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                </a>
                                <div class="banner_text">
                                    <a href="#">@lang('front_end.view')</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="row">
                        {{-- Banner 2 --}}
                        <div class="col-12">
                            <div class="single_banner mb-30">
                                <div class="banner_thumb">
                                    @if (isset($banner->status_2) && $banner->status_2 == 'Active')
                                        @if ($banner->banner_2_url)
                                            <a href="{{ isset($banner->banner_2_url) ? $banner->banner_2_url : '#' }}" target="_blank">
                                                @if (isset($banner) && $banner->image_2 && file_exists($banner->image_2))
                                                    <img src="{{ asset($banner->image_2) }}" width="auto">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                                @endif
                                            </a>
                                        @else
                                            <a>
                                                @if (isset($banner) && $banner->image_2 && file_exists($banner->image_2))
                                                    <img src="{{ asset($banner->image_2) }}" width="auto">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                                @endif
                                            </a>
                                        @endif
                                        <div class="banner_text">
                                            @if ($banner->banner_2_url)
                                                <a href="{{ isset($banner->banner_2_url) ? $banner->banner_2_url : '#' }}" target="_blank">@lang('front_end.view')</a>
                                            @endif
                                        </div>
                                    @else
                                        <a href="#">
                                            <img src="{{ asset('front_end_style/assets/img/bg/banner2.jpg') }}" alt="">
                                        </a>
                                        <div class="banner_text">
                                            <a href="#">@lang('front_end.view')</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Banner 4 --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    @if (isset($banner->status_4) && $banner->status_4 == 'Active')
                                        @if ($banner->banner_4_url)
                                            <a href="{{ isset($banner->banner_4_url) ? $banner->banner_4_url : '#' }}" target="_blank">
                                                @if (isset($banner) && $banner->image_4 && file_exists($banner->image_4))
                                                    <img src="{{ asset($banner->image_4) }}" width="auto">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                                @endif
                                            </a>
                                        @else
                                            <a>
                                                @if (isset($banner) && $banner->image_4 && file_exists($banner->image_4))
                                                    <img src="{{ asset($banner->image_4) }}" width="auto">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                                @endif
                                            </a>
                                        @endif
                                        <div class="banner_text">
                                            @if ($banner->banner_4_url)
                                                <a href="{{ isset($banner->banner_4_url) ? $banner->banner_4_url : '#' }}" target="_blank">@lang('front_end.view')</a>
                                            @endif
                                        </div>
                                    @else
                                        <a href="#">
                                            <img src="{{ asset('front_end_style/assets/img/bg/banner4.jpg') }}" alt="">
                                        </a>
                                        <div class="banner_text">
                                            <a href="#">@lang('front_end.view')</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Banner 5 --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    @if (isset($banner->status_5) && $banner->status_5 == 'Active')
                                        @if ($banner->banner_5_url)
                                            <a href="{{ isset($banner->banner_5_url) ? $banner->banner_5_url : '#' }}" target="_blank">
                                                @if (isset($banner) && $banner->image_5 && file_exists($banner->image_5))
                                                    <img src="{{ asset($banner->image_5) }}" width="auto">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                                @endif
                                            </a>
                                        @else
                                            <a>
                                                @if (isset($banner) && $banner->image_5 && file_exists($banner->image_5))
                                                    <img src="{{ asset($banner->image_5) }}" width="auto">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                                @endif
                                            </a>
                                        @endif
                                        <div class="banner_text">
                                            @if ($banner->banner_5_url)
                                                <a href="{{ isset($banner->banner_5_url) ? $banner->banner_5_url : '#' }}" target="_blank">@lang('front_end.view')</a>
                                            @endif
                                        </div>
                                    @else
                                        <a href="#">
                                            <img src="{{ asset('front_end_style/assets/img/bg/banner5.jpg') }}" alt="">
                                        </a>
                                        <div class="banner_text">
                                            <a href="#">@lang('front_end.view')</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="banner_sidebar">
                        {{-- Banner 3 --}}
                        <div class="single_banner mb-30">
                            <div class="banner_thumb">
                                @if (isset($banner->status_3) && $banner->status_3 == 'Active')
                                    @if ($banner->banner_3_url)
                                        <a href="{{ isset($banner->banner_3_url) ? $banner->banner_3_url : '#' }}" target="_blank">
                                            @if (isset($banner) && $banner->image_3 && file_exists($banner->image_3))
                                                <img src="{{ asset($banner->image_3) }}" width="auto">
                                            @else
                                                <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                            @endif
                                        </a>
                                    @else
                                        <a>
                                            @if (isset($banner) && $banner->image_3 && file_exists($banner->image_3))
                                                <img src="{{ asset($banner->image_3) }}" width="auto">
                                            @else
                                                <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                            @endif
                                        </a>
                                    @endif
                                    <div class="banner_text">
                                        @if ($banner->banner_3_url)
                                            <a href="{{ isset($banner->banner_3_url) ? $banner->banner_3_url : '#' }}" target="_blank">@lang('front_end.view')</a>
                                        @endif
                                    </div>
                                @else
                                    <a href="#">
                                        <img src="{{ asset('front_end_style/assets/img/bg/banner3.jpg') }}" alt="">
                                    </a>
                                    <div class="banner_text">
                                        <a href="#">@lang('front_end.view')</a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- Banner 6 --}}
                        <div class="single_banner">
                            <div class="banner_thumb">
                                @if (isset($banner->status_6) && $banner->status_6 == 'Active')
                                    @if ($banner->banner_6_url)
                                        <a href="{{ isset($banner->banner_6_url) ? $banner->banner_6_url : '#' }}" target="_blank">
                                            @if (isset($banner) && $banner->image_6 && file_exists($banner->image_6))
                                                <img src="{{ asset($banner->image_6) }}" width="auto">
                                            @else
                                                <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                            @endif
                                        </a>
                                    @else
                                        <a>
                                            @if (isset($banner) && $banner->image_6 && file_exists($banner->image_6))
                                                <img src="{{ asset($banner->image_6) }}" width="auto">
                                            @else
                                                <img src="{{ asset('front_end_style/assets/img/bg/banner1.jpg') }}" alt="">
                                            @endif
                                        </a>
                                    @endif
                                    <div class="banner_text">
                                        @if ($banner->banner_6_url)
                                            <a href="{{ isset($banner->banner_6_url) ? $banner->banner_6_url : '#' }}" target="_blank">@lang('front_end.view')</a>
                                        @endif
                                    </div>
                                @else
                                    <a href="#">
                                        <img src="{{ asset('front_end_style/assets/img/bg/banner7.jpg') }}" alt="">
                                    </a>
                                    <div class="banner_text">
                                        <a href="#">@lang('front_end.view')</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- =================================================================================================================== --}}
    {{-- ================================================ End Banner Area ================================================== --}}
    {{-- =================================================================================================================== --}}

    {{-- =================================================================================================================== --}}
    {{-- =============================================== Start Category Area =============================================== --}}
    {{-- =================================================================================================================== --}}
    <div class="featured_category pt-70 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title title_style3">
                        <h3><a href="{{ Auth::check() ? route('categoriesAuth') : route('categories') }}">@lang('front_end.our_categories')</a></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="featured_container_four featured_column4 owl-carousel">
                    @if (isset($public_categories))
                        @foreach ($public_categories as $public_category)
                            <div class="col-lg-3">
                                <div class="single_featured">
                                    <div class="featured_thumb">
                                        @if (isset($public_category->image) && $public_category->image && file_exists($public_category->image))
                                            <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}"><img src="{{ asset($public_category->image) }}" alt=""></a>
                                        @else
                                            <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}"><img src="{{ asset('front_end_style/assets/img/product/product25.jpg') }}" alt=""></a>
                                        @endif
                                    </div>
                                    <div class="featured_content">
                                        <div class="featured_name">
                                            @if (Config::get('app.locale') == 'en')
                                                <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}">{!! isset($public_category->name_en) ? $public_category->name_en : '<span style="color: red;">Undefined</span>' !!} ( <span
                                                        style="color: #23b1a5;">{!! isset($public_category->products) ? $public_category->products->count() : 0 !!}</span> ) </a>
                                            @else
                                                <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}">{!! isset($public_category->name_ar) ? $public_category->name_ar : '<span style="color: red;">Undefined</span>' !!} ( <span
                                                        style="color: #23b1a5;">{!! isset($public_category->products) ? $public_category->products->count() : 0 !!}</span> ) </a>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="featured_name">
                                            <a>@lang('front_end.overview') :</a>
                                        </div>
                                        <div class="sub_featured_categorie">
                                            @if (Config::get('app.locale') == 'en')
                                                <p>{!! isset($public_category->description_en) ? \Illuminate\Support\Str::limit($public_category->description_en, 99, $end = '...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                            @else
                                                <p>{!! isset($public_category->description_ar) ? \Illuminate\Support\Str::limit($public_category->description_ar, 99, $end = '...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="featured_name">
                                            <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}">@lang('front_end.latest_products') :</a>
                                        </div>
                                        <div class="sub_featured_categorie">
                                            <ul>
                                                @if (isset($public_category->takeFourProducts))
                                                    @foreach ($public_category->takeFourProducts as $product)
                                                        <li>
                                                            @if (Config::get('app.locale') == 'en')
                                                                <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) : route('productDetails', $product->id) }}">{!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                            @else
                                                                <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) : route('productDetails', $product->id) }}">{!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                @endif
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
    {{-- =================================================================================================================== --}}
    {{-- ================================================ End Category Area ================================================ --}}
    {{-- =================================================================================================================== --}}

    {{-- =================================================================================================================== --}}
    {{-- ============================================== Start Products Area ================================================ --}}
    {{-- =================================================================================================================== --}}
    <section class="product_area pb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h3>@lang('front_end.new_products')</h3>
                        <p>@lang('front_end.browse_the_collection')
                        </p>
                    </div>
                </div>
            </div>
            <div class="product_wrapper">
                <div class="row product_slick_column4">
                    <div class="product_owl_column4 owl-carousel">
                        @if (isset($public_products))
                            @foreach ($public_products as $public_product)
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img"
                                                href="{{ Auth::check() ? route('productDetailsAuth', $public_product->id) : route('productDetails', $public_product->id) }}">
                                                @if (isset($public_product->image) && $public_product->image && file_exists($public_product->image))
                                                    <img src="{{ asset($public_product->image) }}" alt="">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/product/product1.jpg') }}" alt="">
                                                @endif
                                            </a>
                                            <a class="secondary_img"
                                                href="{{ Auth::check() ? route('productDetailsAuth', $public_product->id) : route('productDetails', $public_product->id) }}">
                                                @if (isset($public_product->image) && $public_product->image && file_exists($public_product->image))
                                                    <img src="{{ asset($public_product->image) }}" alt="">
                                                @else
                                                    <img src="{{ asset('front_end_style/assets/img/product/product2.jpg') }}" alt="">
                                                @endif
                                            </a>
                                            <div class="label_product">
                                                @if (isset($public_product->quantity_available) && $public_product->quantity_available > 0)
                                                    <span class="label_sale">@lang('front_end.new')</span>
                                                @else
                                                    <span class="label_sale">@lang('front_end.out_of_stock')</span>
                                                @endif
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    @if (isset($public_product->quantity_available) && $public_product->quantity_available > 0)
                                                        <li class=""><a href="{{ Auth::check() ? route('addToCartAuth', [isset($public_product->id) ? $public_product->id : 0, 'quantity' => 1]) : route('addToCart', [isset($public_product->id) ? $public_product->id : 0, 'quantity' => 1]) }}" title="add to cart"><i class="ion-bag"></i></a></li>
                                                    @endif
                                                    {{-- <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-shuffle-strong"></i></a></li> --}}
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box_{{ isset($public_product->id) ? $public_product->id : 0 }}" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_name">
                                                <h4>
                                                    @if (Config::get('app.locale') == 'en')
                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $public_product->id) : route('productDetails', $public_product->id) }}">{!! isset($public_product->name_en) ? $public_product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                    @else
                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $public_product->id) : route('productDetails', $public_product->id) }}">{!! isset($public_product->name_ar) ? $public_product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                    @endif
                                                </h4>
                                            </div>
                                            <div class="product_rating">
                                                {{-- Reviews --}}
                                                <div class="c_review">
                                                    <fieldset class="rate">
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 5) class="c_check_star" @endif id="rating10" name="rating" value="10"/><label for="rating10" title="5 stars"></label>
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 4.5) class="c_check_star" @endif id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 4) class="c_check_star" @endif id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 3.5) class="c_check_star" @endif id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 3) class="c_check_star" @endif id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 2.5) class="c_check_star" @endif id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 2) class="c_check_star" @endif id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 1.5) class="c_check_star" @endif id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 1) class="c_check_star" @endif id="rating2" name="rating" value="2"  /><label for="rating2" title="1 star"></label>
                                                        <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($public_product->id)) == 0.5) class="c_check_star" @endif id="rating1" name="rating" value="1"  /><label class="half" for="rating1" title="1/2 star"></label>
                                                    </fieldset>
                                                    <div class="c_rat_num">
                                                        <span>{!! isset($public_product->id) ? number_format(singleRealProductReview($public_product->id), 2) : '<span style="color:red;">Undefined</span>' !!}/5</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="price-container">
                                                <div class="price_box">
                                                    @if ($public_product->on_sale_price_status == 'Active')
                                                        <span class="current_price">{!! isset($public_product->on_sale_price) ? $public_product->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        <span class="old_price">{!! isset($public_product->sale_price) ? $public_product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    @else
                                                        <span class="current_price">{!! isset($public_product->sale_price) ? $public_product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    @endif
                                                </div>
                                                <div class="wishlist_btn">
                                                    @if (Auth::check())
                                                        <a href="{{ Auth::check() ? route('productWishlistStore', $public_product->id) : route('welcome') }}" title="wishlist">
                                                            {!! isset($public_product->checkWishlistByAuthUser) && $public_product->checkWishlistByAuthUser->count() == 1 ? '<i class="ion-android-favorite"></i>' : '<i class="ion-android-favorite-outline"></i>' !!}
                                                        </a>
                                                    @else
                                                        <a href="#" title="wishlist">
                                                            <i class="ion-android-favorite-outline"></i>
                                                        </a>
                                                    @endif
                                                </div>
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
    </section>
    {{-- =================================================================================================================== --}}
    {{-- =============================================== End Products Area ================================================= --}}
    {{-- =================================================================================================================== --}}

    <!--deals section area css here-->
    {{-- <section class="deals_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="deals_carousel owl-carousel">
                        <div class="product_caption">
                            <div class="product_name">
                                <a href="#">Boconi</a>
                            </div>
                            <div class="product_title">
                                <h3><a href="product-details.html">Poly and Bark Vortex Side...</a></h3>
                            </div>
                            <div class="product_desc">
                                <p>
                                    Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR
                                    category', while we're not typically too concerned with marketing talk this
                                    particular statement is clearly pretty accurate. The EOS 5D is unlike any previous
                                    digital SLR in that it combines a full-frame (35 mm sized) hig..</p>
                            </div>
                            <div class="product_sale">
                                <span>Sale - 20% off</span>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                            <div class="product_button">
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                        <div class="product_caption">
                            <div class="product_name">
                                <a href="#">Buxton</a>
                            </div>
                            <div class="product_title">
                                <h3><a href="product-details.html">Light Inverted Pendant Qu...</a></h3>
                            </div>
                            <div class="product_desc">
                                <p>
                                    Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR
                                    category', while we're not typically too concerned with marketing talk this
                                    particular statement is clearly pretty accurate. The EOS 5D is unlike any previous
                                    digital SLR in that it combines a full-frame (35 mm sized) hig..</p>
                            </div>
                            <div class="product_sale">
                                <span>Sale - 12% off</span>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2022/12/15"></div>
                            </div>
                            <div class="product_button">
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="deals_banner">
                        <img src="{{ asset('front_end_style/assets/img/bg/banner8.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--deals section area css end-->

    <!--shipping area css here-->
    <section class="shipping_area">
        <div class="container">
            <div class="shipping_inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="ion-android-plane"></i>
                            </div>
                            <div class="shipping_content">
                                <h2>@lang('front_end.days_shipping')</h2>
                                {{-- <p>Natural Therapeutic cosmetic products</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="ion-social-dropbox"></i>
                            </div>
                            <div class="shipping_content">
                                <h2>@lang('front_end.natural_therapeutic')</h2>
                                {{-- <p>GMP and ISO certificate</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="ion-load-a"></i>
                            </div>
                            <div class="shipping_content">
                                <h2>@lang('front_end.customer_support')</h2>
                                {{-- <p>Reach their personal goals set</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="ion-trophy"></i>
                            </div>
                            <div class="shipping_content">
                                <h2>@lang('front_end.gmp_and_iso')</h2>
                                {{-- <p>Healthy food and drink 2019</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping area css end-->

    <!--on sale Product area start-->
    <section class="product_area pb-50 pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 d-flex align-items-center">
                    <div class="section_title title_style1">
                        <h3>@lang('front_end.on_sale_products')</h3>
                        <p> @lang('front_end.browse_the_collection')
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="product_wrapper">
                        <div class="row product_slick_column3">
                            <div class="product_owl_column3 owl-carousel">
                                @if (isset($onSaleProducts))
                                    @foreach ($onSaleProducts as $onSaleProduct)
                                        <div class="col-lg-3">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    @if (isset($onSaleProduct->image) && $onSaleProduct->image && file_exists($onSaleProduct->image))
                                                        <a class="primary_img" href="{{ Auth::check() ? route('productDetailsAuth', $onSaleProduct->id) : route('productDetails', $onSaleProduct->id) }}"><img src="{{ asset($onSaleProduct->image) }}" alt=""></a>
                                                        <a class="secondary_img" href="{{ Auth::check() ? route('productDetailsAuth', $onSaleProduct->id) : route('productDetails', $onSaleProduct->id) }}"><img src="{{ asset($onSaleProduct->image) }}" alt=""></a>
                                                    @else
                                                        <a class="primary_img" href="{{ Auth::check() ? route('productDetailsAuth', $onSaleProduct->id) : route('productDetails', $onSaleProduct->id) }}"><img src="{{ asset('front_end_style/assets/img/product/product1.jpg') }}" alt=""></a>
                                                        <a class="secondary_img" href="{{ Auth::check() ? route('productDetailsAuth', $onSaleProduct->id) : route('productDetails', $onSaleProduct->id) }}"><img src="{{ asset('front_end_style/assets/img/product/product2.jpg') }}" alt=""></a>
                                                    @endif
                                                    <div class="label_product">
                                                        @if (isset($onSaleProduct->quantity_available) && $onSaleProduct->quantity_available > 0)
                                                            <span class="label_sale">@lang('front_end.new')</span>
                                                        @else
                                                            <span class="label_sale">@lang('front_end.out_of_stock')</span>
                                                        @endif
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            @if (isset($onSaleProduct->quantity_available) && $onSaleProduct->quantity_available > 0)
                                                                <li class="add_to_cart"><a href="{{ Auth::check() ? route('addToCartAuth', [isset($onSaleProduct->id) ? $onSaleProduct->id : 0, 'quantity' => 1]) : route('addToCart', [isset($onSaleProduct->id) ? $onSaleProduct->id : 0, 'quantity' => 1]) }}" title="add to cart"><i class="ion-bag"></i></a></li>
                                                            @endif
                                                            <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box_{{ isset($onSaleProduct->id) ? $onSaleProduct->id : 0 }}" title="Quick View"><i class="ion-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4>
                                                            @if (Config::get('app.locale') == 'en')
                                                                <a href="{{ Auth::check() ? route('productDetailsAuth', $onSaleProduct->id) : route('productDetails', $onSaleProduct->id) }}">{!! isset($onSaleProduct->name_en) ? $onSaleProduct->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                            @else
                                                                <a href="{{ Auth::check() ? route('productDetailsAuth', $onSaleProduct->id) : route('productDetails', $onSaleProduct->id) }}">{!! isset($onSaleProduct->name_ar) ? $onSaleProduct->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                            @endif
                                                        </h4>
                                                    </div>
                                                    <div class="product_rating">
                                                        {{-- Reviews --}}
                                                        <div class="c_review">
                                                            <fieldset class="rate">
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 5) class="c_check_star" @endif id="rating10" name="rating" value="10"/><label for="rating10" title="5 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 4.5) class="c_check_star" @endif id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 4) class="c_check_star" @endif id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 3.5) class="c_check_star" @endif id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 3) class="c_check_star" @endif id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 2.5) class="c_check_star" @endif id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 2) class="c_check_star" @endif id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 1.5) class="c_check_star" @endif id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 1) class="c_check_star" @endif id="rating2" name="rating" value="2"  /><label for="rating2" title="1 star"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($onSaleProduct->id)) == 0.5) class="c_check_star" @endif id="rating1" name="rating" value="1"  /><label class="half" for="rating1" title="1/2 star"></label>
                                                            </fieldset>
                                                            <div class="c_rat_num">
                                                                <span>{!! isset($onSaleProduct->id) ? number_format(singleRealProductReview($onSaleProduct->id), 2) : '<span style="color:red;">Undefined</span>' !!}/5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-container">
                                                        <div class="price_box">
                                                            @if ($onSaleProduct->on_sale_price_status == 'Active')
                                                                <span class="current_price">{!! isset($onSaleProduct->on_sale_price) ? $onSaleProduct->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                                <span class="old_price">{!! isset($onSaleProduct->sale_price) ? $onSaleProduct->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                            @else
                                                                <span class="current_price">{!! isset($onSaleProduct->sale_price) ? $onSaleProduct->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                            @endif
                                                        </div>
                                                        <div class="wishlist_btn">
                                                            @if (Auth::check())
                                                                <a href="{{ Auth::check() ? route('productWishlistStore', $onSaleProduct->id) : route('welcome') }}" title="wishlist">
                                                                    {!! isset($onSaleProduct->checkWishlistByAuthUser) && $onSaleProduct->checkWishlistByAuthUser->count() == 1 ? '<i class="ion-android-favorite"></i>' : '<i class="ion-android-favorite-outline"></i>' !!}
                                                                </a>
                                                            @else
                                                                <a href="#" title="wishlist">
                                                                    <i class="ion-android-favorite-outline"></i>
                                                                </a>
                                                            @endif
                                                        </div>
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
        </div>
    </section>
    <!--on sale Product area end-->

    <!--banner area start-->
    <div class="banner_area pb-80">
        <div class="container">
            <div class="row">
                {{-- Banner 7 --}}
                <div class="col-lg-6 col-md-12">
                    @if (isset($banner->status_7) && $banner->status_7 == 'Active')
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ isset($banner->banner_7_url) ? $banner->banner_7_url : '#' }}" target="_blank">
                                    @if (isset($banner) && $banner->image_7 && file_exists($banner->image_7))
                                        <img src="{{ asset($banner->image_7) }}" width="auto">
                                    @else
                                        <img src="{{ asset('front_end_style/assets/img/bg/banner9.jpg') }}" alt="">
                                    @endif
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="{{ asset('front_end_style/assets/img/bg/banner9.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="banner_sidebar">
                        {{-- Banner 8 --}}
                        <div class="single_banner mb-30">
                            @if (isset($banner->status_8) && $banner->status_8 == 'Active')
                                <div class="single_banner">
                                    <div class="banner_thumb">
                                        <a href="{{ isset($banner->banner_8_url) ? $banner->banner_8_url : '#' }}" target="_blank">
                                            @if (isset($banner) && $banner->image_8 && file_exists($banner->image_8))
                                                <img src="{{ asset($banner->image_8) }}" width="auto">
                                            @else
                                                <img src="{{ asset('front_end_style/assets/img/bg/banner10.jpg') }}" alt="">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="single_banner">
                                    <div class="banner_thumb">
                                        <a href="#"><img src="{{ asset('front_end_style/assets/img/bg/banner10.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            @endif
                        </div>
                        {{-- Banner 9 --}}
                        @if (isset($banner->status_9) && $banner->status_9 == 'Active')
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="{{ isset($banner->banner_9_url) ? $banner->banner_9_url : '#' }}" target="_blank">
                                        @if (isset($banner) && $banner->image_9 && file_exists($banner->image_9))
                                            <img src="{{ asset($banner->image_9) }}" width="auto">
                                        @else
                                            <img src="{{ asset('front_end_style/assets/img/bg/banner11.jpg') }}" alt="">
                                        @endif
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#"><img src="{{ asset('front_end_style/assets/img/bg/banner11.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--best seller area start-->
    <section class="product_area pb-50 pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 d-flex align-items-center">
                    <div class="section_title title_style1">
                        <h3>@lang('front_end.best_sellers')</h3>
                        <p> @lang('front_end.browse_the_collection')</p>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="product_wrapper">
                        <div class="row product_slick_column3">
                            <div class="product_owl_column31 owl-carousel">
                                @if (isset($bestSellers))
                                    @foreach ($bestSellers as $bestSeller)
                                        <div class="col-lg-3">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    @if (isset($bestSeller->product->image) && $bestSeller->product->image && file_exists($bestSeller->product->image))
                                                        <a class="primary_img" href="{{ Auth::check() ? route('productDetailsAuth', $bestSeller->product->id) : route('productDetails', $bestSeller->product->id) }}"><img src="{{ asset($bestSeller->product->image) }}" alt=""></a>
                                                        <a class="secondary_img" href="{{ Auth::check() ? route('productDetailsAuth', $bestSeller->product->id) : route('productDetails', $bestSeller->product->id) }}"><img src="{{ asset($bestSeller->product->image) }}" alt=""></a>
                                                    @else
                                                        <a class="primary_img" href="{{ Auth::check() ? route('productDetailsAuth', $bestSeller->product->id) : route('productDetails', $bestSeller->product->id) }}"><img src="{{ asset('front_end_style/assets/img/product/product1.jpg') }}" alt=""></a>
                                                        <a class="secondary_img" href="{{ Auth::check() ? route('productDetailsAuth', $bestSeller->product->id) : route('productDetails', $bestSeller->product->id) }}"><img src="{{ asset('front_end_style/assets/img/product/product2.jpg') }}" alt=""></a>
                                                    @endif
                                                    <div class="label_product">
                                                        @if (isset($bestSeller->product->quantity_available) && $bestSeller->product->quantity_available > 0)
                                                            <span class="label_sale">@lang('front_end.new')</span>
                                                        @else
                                                            <span class="label_sale">@lang('front_end.out_of_stock')</span>
                                                        @endif
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            @if (isset($bestSeller->product->quantity_available) && $bestSeller->product->quantity_available > 0)
                                                                <li class="add_to_cart"><a href="{{ Auth::check() ? route('addToCartAuth', [isset($bestSeller->product->id) ? $bestSeller->product->id : 0, 'quantity' => 1]) : route('addToCart', [isset($bestSeller->product->id) ? $bestSeller->product->id : 0, 'quantity' => 1]) }}" title="add to cart"><i class="ion-bag"></i></a></li>
                                                            @endif
                                                            <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box_{{ isset($bestSeller->product->id) ? $bestSeller->product->id : 0 }}" title="Quick View"><i class="ion-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4>
                                                            @if (Config::get('app.locale') == 'en')
                                                                <a href="{{ Auth::check() ? route('productDetailsAuth', $bestSeller->product->id) : route('productDetails', $bestSeller->product->id) }}">{!! isset($bestSeller->product->name_en) ? $bestSeller->product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                            @else
                                                                <a href="{{ Auth::check() ? route('productDetailsAuth', $bestSeller->product->id) : route('productDetails', $bestSeller->product->id) }}">{!! isset($bestSeller->product->name_ar) ? $bestSeller->product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                            @endif
                                                        </h4>
                                                    </div>
                                                    <div class="product_rating">
                                                        {{-- Reviews --}}
                                                        <div class="c_review">
                                                            <fieldset class="rate">
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 5) class="c_check_star" @endif id="rating10" name="rating" value="10"/><label for="rating10" title="5 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 4.5) class="c_check_star" @endif id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 4) class="c_check_star" @endif id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 3.5) class="c_check_star" @endif id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 3) class="c_check_star" @endif id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 2.5) class="c_check_star" @endif id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 2) class="c_check_star" @endif id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 1.5) class="c_check_star" @endif id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 1) class="c_check_star" @endif id="rating2" name="rating" value="2"  /><label for="rating2" title="1 star"></label>
                                                                <input type="" @if(singleProductReviewStarsNumber(singleRealProductReview($bestSeller->product->id)) == 0.5) class="c_check_star" @endif id="rating1" name="rating" value="1"  /><label class="half" for="rating1" title="1/2 star"></label>
                                                            </fieldset>
                                                            <div class="c_rat_num">
                                                                <span>{!! isset($bestSeller->product->id) ? number_format(singleRealProductReview($bestSeller->product->id), 2) : '<span style="color:red;">Undefined</span>' !!}/5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="price-container">
                                                        <div class="price_box">
                                                            @if ($bestSeller->product->on_sale_price_status == 'Active')
                                                                <span class="current_price">{!! isset($bestSeller->product->on_sale_price) ? $bestSeller->product->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                                <span class="old_price">{!! isset($bestSeller->product->sale_price) ? $bestSeller->product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                            @else
                                                                <span class="current_price">{!! isset($bestSeller->product->sale_price) ? $bestSeller->product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                            @endif
                                                        </div>
                                                        <div class="wishlist_btn">
                                                            @if (Auth::check())
                                                                <a href="{{ Auth::check() ? route('productWishlistStore', $bestSeller->product->id) : route('welcome') }}" title="wishlist">
                                                                    {!! isset($bestSeller->product->checkWishlistByAuthUser) && $bestSeller->product->checkWishlistByAuthUser->count() == 1 ? '<i class="ion-android-favorite"></i>' : '<i class="ion-android-favorite-outline"></i>' !!}
                                                                </a>
                                                            @else
                                                                <a href="#" title="wishlist">
                                                                    <i class="ion-android-favorite-outline"></i>
                                                                </a>
                                                            @endif
                                                        </div>
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
        </div>
    </section>
    <!--best seller area end-->

    <!--blog area start-->
    {{-- <section class="blog_area mb-75">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h3>From Our Blog </h3>
                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                            formas.</p>
                    </div>
                </div>
                <div class="blog_gallery blog_column3 owl-carousel">
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{ asset('front_end_style/assets/img/blog/blog1.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h4><a href="blog-details.html">At wisi enim ad minim veniam.</a></h4>
                                <span>June 28, 2019 <a href="#">ecommerce</a></span>
                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                    lacus
                                    eget est</p>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{ asset('front_end_style/assets/img/blog/blog2.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h4><a href="blog-details.html">Bt wisi enim ad minim veniam.</a></h4>
                                <span>June 28, 2019 <a href="#">ecommerce</a></span>
                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                    lacus
                                    eget est</p>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{ asset('front_end_style/assets/img/blog/blog3.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h4><a href="blog-details.html">Ct wisi enim ad minim veniam.</a></h4>
                                <span>June 28, 2019 <a href="#">ecommerce</a></span>
                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                    lacus
                                    eget est</p>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{ asset('front_end_style/assets/img/blog/blog2.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h4><a href="blog-details.html">Bt wisi enim ad minim veniam.</a></h4>
                                <span>June 28, 2019 <a href="#">ecommerce</a></span>
                                <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                    lacus
                                    eget est</p>
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--blog area end-->

    <!--testimonial area start-->
    {{-- <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <div class="testimonial_container testimonial_active owl-carousel">
                        <div class="single_testimonial">
                            <div class="testimonial_thumb">
                                <a href="#"><img src="{{ asset('front_end_style/assets/img/about/testimonial.jpg') }}" alt=""></a>
                            </div>
                            <div class="testimonial_content">
                                <h3><a href="#">Rebecka Filson</a></h3>
                                <i class="ion-quote"></i>
                                <p>This is Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque
                                    felis lorem, pulvinar sed eros n..</p>
                            </div>
                        </div>
                        <div class="single_testimonial">
                            <div class="testimonial_thumb">
                                <a href="#"><img src="{{ asset('front_end_style/assets/img/about/testimonial1.jpg') }}" alt=""></a>
                            </div>
                            <div class="testimonial_content">
                                <h3><a href="#">Nathanael Jaworski</a></h3>
                                <i class="ion-quote"></i>
                                <p>This is Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque
                                    felis lorem, pulvinar sed eros n..</p>
                            </div>
                        </div>
                        <div class="single_testimonial">
                            <div class="testimonial_thumb">
                                <a href="#"><img src="{{ asset('front_end_style/assets/img/about/testimonial2.jpg') }}" alt=""></a>
                            </div>
                            <div class="testimonial_content">
                                <h3><a href="#">Magdalena Valencia</a></h3>
                                <i class="ion-quote"></i>
                                <p>This is Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque
                                    felis lorem, pulvinar sed eros n..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--testimonial area end-->

    <!--brand newsletter area start-->
    {{-- <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="{{ asset('front_end_style/assets/img/brand/brand.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{ asset('front_end_style/assets/img/brand/brand1.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{ asset('front_end_style/assets/img/brand/brand2.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{ asset('front_end_style/assets/img/brand/brand3.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{ asset('front_end_style/assets/img/brand/brand4.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{ asset('front_end_style/assets/img/brand/brand5.png') }}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{ asset('front_end_style/assets/img/brand/brand1.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--brand area end-->

    {{-- =================================================================================================================== --}}
    {{-- ============================================ Start Products Modal Area ============================================ --}}
    {{-- =================================================================================================================== --}}
    @if (isset($public_products))
        @foreach ($public_products as $public_product)
            <div class="modal fade" id="modal_box_{{ isset($public_product->id) ? $public_product->id : 0 }}"
                tabindex="-1" role="dialog" aria-hidden="true">
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
                                                @if (isset($public_product->productImages) && $public_product->productImages->count() > 0)
                                                    @foreach ($public_product->productImages as $key => $productImage)
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
                                                    @if (isset($public_product->productImages) && $public_product->productImages->count() > 0)
                                                        @foreach ($public_product->productImages as $productImage)
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
                                                <h2>{!! isset($public_product->name_en) ? $public_product->name_en : '<span style="color: red;">Undefined</span>' !!}</h2>
                                            </div>
                                            <div class="modal_price mb-10">
                                                @if ($public_product->on_sale_price_status == 'Active')
                                                    <span class="current_price">{!! isset($public_product->on_sale_price) ? $public_product->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                    <span class="old_price">{!! isset($public_product->sale_price) ? $public_product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @else
                                                    <span class="current_price">{!! isset($public_product->sale_price) ? $public_product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                @endif
                                            </div>
                                            <div class="modal_description mb-15">
                                                <h4>@lang('front_end.description') :</h4>
                                                @if (Config::get('app.locale') == 'en')
                                                    <p>{!! isset($public_product->main_description_en) ? \Illuminate\Support\Str::limit($public_product->main_description_en, 250, $end = '...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                @else
                                                    <p>{!! isset($public_product->main_description_ar) ? \Illuminate\Support\Str::limit($public_product->main_description_ar, 250, $end = '...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                                @endif
                                            </div>
                                            <div class="variants_selects">
                                                <div class="variants_color">
                                                    <h2>@lang('front_end.the_weight') : {!! isset($public_product->weight) ? $public_product->weight . '<small> ' . $public_product->weight_unit . '</small>' : '<span style="color: red;">Undefined</span>' !!}</h2>
                                                </div>
                                                <div class="modal_add_to_cart">
                                                    <hr>
                                                    @if (isset($public_product->quantity_available) && $public_product->quantity_available > 0)
                                                        <form method="GET"
                                                            action="{{ Auth::check() ? route('addToCartAuth', [isset($public_product->id) ? $public_product->id : 0]) : route('addToCart', [isset($public_product->id) ? $public_product->id : 0]) }}">
                                                            <input min="1" max="100" step="1" value="1" type="number"
                                                                name="quantity">
                                                            <button type="submit">@lang('front_end.add_to_cart')</button>
                                                            <p><strong class="text-danger"> @error('quantity') (
                                                                    {{ $message }} ) @enderror</strong></p>
                                                        </form>
                                                    @else
                                                        <div class="variants_color">
                                                            <h2 style="color: red;">@lang('front_end.note_stock')</h2>
                                                        </div>
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
