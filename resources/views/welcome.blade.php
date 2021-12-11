@extends('front_end_inners.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">

                        @if (isset($sliders) && $sliders->count() > 0)
                            @foreach ($sliders as $slider)
                                <!-- single slide item -->
                                <li>
                                    <div class="seq-model">
                                        @if (isset($slider->image) && file_exists($slider->image))
                                            <img data-seq src="{{ asset($slider->image) }} " alt="Men slide img" />
                                        @else
                                            <img data-seq src="{{ asset('front_end_style/img/slider/1.jpg') }} "
                                                alt="Men slide img" />
                                        @endif
                                    </div>
                                    {{-- <div class="seq-title">
                                    <span data-seq>Save Up to 75% Off</span>
                                    <h2 data-seq>Men Collection</h2>
                                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                </div> --}}
                                </li>
                            @endforeach
                        @else
                            <!-- single slide item -->
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="{{ asset('front_end_style/img/slider/1.jpg') }} "
                                        alt="Men slide img" />
                                </div>
                                <div class="seq-title">
                                    <span data-seq>Save Up to 75% Off</span>
                                    <h2 data-seq>Men Collection</h2>
                                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                </div>
                            </li>
                            <!-- single slide item -->
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="{{ asset('front_end_style/img/slider/2.jpg') }} "
                                        alt="Wristwatch slide img" />
                                </div>
                                <div class="seq-title">
                                    <span data-seq>Save Up to 40% Off</span>
                                    <h2 data-seq>Wristwatch Collection</h2>
                                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                </div>
                            </li>
                            <!-- single slide item -->
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="{{ asset('front_end_style/img/slider/3.jpg') }} "
                                        alt="Women Jeans slide img" />
                                </div>
                                <div class="seq-title">
                                    <span data-seq>Save Up to 75% Off</span>
                                    <h2 data-seq>Jeans Collection</h2>
                                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                </div>
                            </li>
                            <!-- single slide item -->
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="{{ asset('front_end_style/img/slider/4.jpg') }} "
                                        alt="Shoes slide img" />
                                </div>
                                <div class="seq-title">
                                    <span data-seq>Save Up to 75% Off</span>
                                    <h2 data-seq>Exclusive Shoes</h2>
                                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                </div>
                            </li>
                            <!-- single slide item -->
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="{{ asset('front_end_style/img/slider/5.jpg') }} "
                                        alt="Male Female slide img" />
                                </div>
                                <div class="seq-title">
                                    <span data-seq>Save Up to 50% Off</span>
                                    <h2 data-seq>Best Collection</h2>
                                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
    <section id="aa-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                        <div class="row">
                            @if (isset($main_categories_rand[0]))
                                <!-- promo left -->
                                <div class="col-md-5 no-padding">
                                    <div class="aa-promo-left">
                                        <div class="aa-promo-banner">
                                            @if (isset($main_categories_rand[0]->image) && file_exists($main_categories_rand[0]->image))
                                                <img src="{{ asset($main_categories_rand[0]->image) }} " alt="img">
                                            @else
                                                <img src="{{ asset('front_end_style/img/promo-banner-1.jpg') }} "
                                                    alt="img">
                                            @endif
                                            <div class="aa-prom-content">
                                                {{-- <span>75% Off</span> --}}
                                                <h4><a href="#">{{ $main_categories_rand[0]->name_en }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- promo left -->
                                <div class="col-md-5 no-padding">
                                    <div class="aa-promo-left">
                                        <div class="aa-promo-banner">
                                            <img src="{{ asset('front_end_style/img/promo-banner-1.jpg') }} " alt="img">
                                            <div class="aa-prom-content">
                                                <span>75% Off</span>
                                                <h4><a href="#">For Women</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- promo right -->
                            <div class="col-md-7 no-padding">
                                <div class="aa-promo-right">
                                    @if (isset($main_categories_rand) && $main_categories_rand->count() > 0)
                                        @foreach ($main_categories_rand as $key => $main_category)
                                            @if ($key == 0)
                                                @continue
                                            @endif
                                            <div class="aa-single-promo-right">
                                                <div class="aa-promo-banner">
                                                    @if (isset($main_category->image) && file_exists($main_category->image))
                                                        <img src="{{ asset($main_category->image) }} " alt="img">
                                                    @else
                                                        <img src="{{ asset('front_end_style/img/promo-banner-3.jpg') }} "
                                                            alt="img">
                                                    @endif
                                                    <div class="aa-prom-content">
                                                        {{-- <span>Exclusive Item</span> --}}
                                                        <h4><a
                                                                href="#">{{ isset($main_category->name_en) ? $main_category->name_en : '--------' }}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="aa-single-promo-right">
                                            <div class="aa-promo-banner">
                                                <img src="{{ asset('front_end_style/img/promo-banner-3.jpg') }} "
                                                    alt="img">
                                                <div class="aa-prom-content">
                                                    <span>Exclusive Item</span>
                                                    <h4><a href="#">For Men</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aa-single-promo-right">
                                            <div class="aa-promo-banner">
                                                <img src="{{ asset('front_end_style/img/promo-banner-2.jpg') }} "
                                                    alt="img">
                                                <div class="aa-prom-content">
                                                    <span>Sale Off</span>
                                                    <h4><a href="#">On Shoes</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aa-single-promo-right">
                                            <div class="aa-promo-banner">
                                                <img src="{{ asset('front_end_style/img/promo-banner-4.jpg') }} "
                                                    alt="img">
                                                <div class="aa-prom-content">
                                                    <span>New Arrivals</span>
                                                    <h4><a href="#">For Kids</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aa-single-promo-right">
                                            <div class="aa-promo-banner">
                                                <img src="{{ asset('front_end_style/img/promo-banner-5.jpg') }} "
                                                    alt="img">
                                                <div class="aa-prom-content">
                                                    <span>25% Off</span>
                                                    <h4><a href="#">For Bags</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    @if (isset($public_super_categories) && $public_super_categories->count() > 0)
                                        @foreach ($public_super_categories as $key => $superCategory)
                                            <li class="{{ $key == 0 ? 'active' : '' }}"><a
                                                    href="#super_{{ $superCategory->id }}"
                                                    data-toggle="tab">{{ isset($superCategory->name_en) ? $superCategory->name_en : '--------' }}</a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                                        <li><a href="#women" data-toggle="tab">Women</a></li>
                                        <li><a href="#sports" data-toggle="tab">Sports</a></li>
                                        <li><a href="#electronics" data-toggle="tab">Electronics</a></li>
                                    @endif
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    @if (isset($public_super_categories) && $public_super_categories->count() > 0)
                                        @foreach ($public_super_categories as $key => $superCategory)
                                            <!-- Start men product category -->
                                            <div class="tab-pane fade{{ $key == 0 ? ' in active' : '' }}"
                                                id="super_{{ $superCategory->id }}">
                                                <ul class="aa-product-catg">
                                                    @if (isset($superCategory->products) && $superCategory->count() > 0)
                                                        @foreach ($superCategory->products->take(8) as $counter => $product)
                                                            <!-- start single product item -->
                                                            <li>
                                                                <figure>
                                                                    <a class="aa-product-img" href="#">
                                                                        @if (isset($product->image) && file_exists($product->image))
                                                                            <img src="{{ asset($product->image) }} "
                                                                                alt="{{ $product->name_en }}">
                                                                        @else
                                                                            <img src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                                                alt="polo shirt img">
                                                                        @endif
                                                                    </a>
                                                                    <a class="aa-add-card-btn" href="#"><span
                                                                            class="fa fa-shopping-cart"></span>Add To
                                                                        Cart</a>
                                                                    <figcaption>
                                                                        <h4 class="aa-product-title"><a
                                                                                href="#">{{ isset($product->name_en) ? $product->name_en : '--------' }}</a>
                                                                        </h4>
                                                                        @if(isset($product->properties) && $product->properties->count() > 0)
                                                                            @if ($product->on_sale_price_status == 'Active')

                                                                                <span
                                                                                    class="aa-product-price">${{ isset($product->on_sale_price) ? $product->on_sale_price + $product->properties[0]->update_price : '--------' }}</span><span
                                                                                    class="aa-product-price"><del>${{ isset($product->sale_price) ? $product->sale_price + $product->properties[0]->update_price : '--------' }}</del></span>
                                                                            @else
                                                                                <span
                                                                                    class="aa-product-price">${{ isset($product->sale_price) ? $product->sale_price + $product->properties[0]->update_price : '--------' }}</span>
                                                                            @endif
                                                                        @else
                                                                            @if ($product->on_sale_price_status == 'Active')
                                                                                <span
                                                                                    class="aa-product-price">${{ isset($product->on_sale_price) ? $product->on_sale_price : '--------' }}</span><span
                                                                                    class="aa-product-price"><del>${{ isset($product->sale_price) ? $product->sale_price : '--------' }}</del></span>
                                                                            @else
                                                                                <span
                                                                                    class="aa-product-price">${{ isset($product->sale_price) ? $product->sale_price : '--------' }}</span>
                                                                            @endif
                                                                        @endif
                                                                    </figcaption>
                                                                </figure>
                                                                <div class="aa-product-hvr-content">
                                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                                        title="Add to Wishlist"><span
                                                                            class="fa fa-heart-o"></span></a>
                                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                                        title="Compare"><span
                                                                            class="fa fa-exchange"></span></a>
                                                                    <a class="get_item_details" style="cursor: pointer" data-toggle2="tooltip" data-placement="top"
                                                                        title="Quick View" data-toggle="modal"
                                                                        data-target="#quick-view-modal" data-id="{{ $product->id }}"><span
                                                                            class="fa fa-search"></span></a>
                                                                </div>
                                                                @if ($product->on_sale_price_status == 'Active')
                                                                    <!-- product badge -->
                                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <!-- start single product item -->
                                                        <li>
                                                            <figure>
                                                                <a class="aa-product-img" href="#"><img
                                                                        src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                                        alt="polo shirt img"></a>
                                                                <a class="aa-add-card-btn" href="#"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title"><a href="#">Polo
                                                                            T-Shirt</a></h4>
                                                                    <span class="aa-product-price">$45.50</span><span
                                                                        class="aa-product-price"><del>$65.50</del></span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="aa-product-hvr-content">
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add to Wishlist"><span
                                                                        class="fa fa-heart-o"></span></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                                    title="Quick View" data-toggle="modal"
                                                                    data-target="#quick-view-modal"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                            <!-- product badge -->
                                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                        </li>
                                                        <!-- start single product item -->
                                                        <li>
                                                            <figure>
                                                                <a class="aa-product-img" href="#"><img
                                                                        src="{{ asset('front_end_style/img/man/t-shirt-1.png') }} "
                                                                        alt="polo shirt img"></a>
                                                                <a class="aa-add-card-btn" href="#"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title"><a href="#">T-Shirt</a>
                                                                    </h4>
                                                                    <span class="aa-product-price">$45.50</span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="aa-product-hvr-content">
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add to Wishlist"><span
                                                                        class="fa fa-heart-o"></span></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                                    title="Quick View" data-toggle="modal"
                                                                    data-target="#quick-view-modal"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                            <!-- product badge -->
                                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                        </li>
                                                        <!-- start single product item -->
                                                        <li>
                                                            <figure>
                                                                <a class="aa-product-img" href="#"><img
                                                                        src="{{ asset('front_end_style/img/man/polo-shirt-1.png') }} "
                                                                        alt="polo shirt img"></a>
                                                                <a class="aa-add-card-btn" href="#"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title"><a href="#">Polo
                                                                            T-Shirt</a></h4>
                                                                    <span class="aa-product-price">$45.50</span><span
                                                                        class="aa-product-price"><del>$65.50</del></span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="aa-product-hvr-content">
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add to Wishlist"><span
                                                                        class="fa fa-heart-o"></span></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Compare"><span
                                                                        class="fa fa-exchange"></span></a>
                                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                                    title="Quick View" data-toggle="modal"
                                                                    data-target="#quick-view-modal"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                        </li>
                                                        <!-- start single product item -->
                                                        <li>
                                                            <figure>
                                                                <a class="aa-product-img" href="#"><img
                                                                        src="{{ asset('front_end_style/img/man/polo-shirt-4.png') }} "
                                                                        alt="polo shirt img"></a>
                                                                <a class="aa-add-card-btn" href="#"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title"><a href="#">Polo
                                                                            T-Shirt</a></h4>
                                                                    <span class="aa-product-price">$45.50</span><span
                                                                        class="aa-product-price"><del>$65.50</del></span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="aa-product-hvr-content">
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add to Wishlist"><span
                                                                        class="fa fa-heart-o"></span></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Compare"><span
                                                                        class="fa fa-exchange"></span></a>
                                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                                    title="Quick View" data-toggle="modal"
                                                                    data-target="#quick-view-modal"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                            <!-- product badge -->
                                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                        </li>
                                                        <!-- start single product item -->
                                                        <li>
                                                            <figure>
                                                                <a class="aa-product-img" href="#"><img
                                                                        src="{{ asset('front_end_style/img/man/polo-shirt-5.png') }} "
                                                                        alt="polo shirt img"></a>
                                                                <a class="aa-add-card-btn" href="#"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title"><a href="#">T-Shirt</a>
                                                                    </h4>
                                                                    <span class="aa-product-price">$45.50</span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="aa-product-hvr-content">
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add to Wishlist"><span
                                                                        class="fa fa-heart-o"></span></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Compare"><span
                                                                        class="fa fa-exchange"></span></a>
                                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                                    title="Quick View" data-toggle="modal"
                                                                    data-target="#quick-view-modal"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                        </li>
                                                        <!-- start single product item -->
                                                        <li>
                                                            <figure>
                                                                <a class="aa-product-img" href="#"><img
                                                                        src="{{ asset('front_end_style/img/man/polo-shirt-6.png') }} "
                                                                        alt="polo shirt img"></a>
                                                                <a class="aa-add-card-btn" href="#"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title"><a href="#">Polo
                                                                            T-Shirt</a></h4>
                                                                    <span class="aa-product-price">$45.50</span><span
                                                                        class="aa-product-price"><del>$65.50</del></span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="aa-product-hvr-content">
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add to Wishlist"><span
                                                                        class="fa fa-heart-o"></span></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Compare"><span
                                                                        class="fa fa-exchange"></span></a>
                                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                                    title="Quick View" data-toggle="modal"
                                                                    data-target="#quick-view-modal"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                        </li>
                                                        <!-- start single product item -->
                                                        <li>
                                                            <figure>
                                                                <a class="aa-product-img" href="#"><img
                                                                        src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                                        alt="polo shirt img"></a>
                                                                <a class="aa-add-card-btn" href="#"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title"><a href="#">Polo
                                                                            T-Shirt</a></h4>
                                                                    <span class="aa-product-price">$45.50</span><span
                                                                        class="aa-product-price"><del>$65.50</del></span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="aa-product-hvr-content">
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add to Wishlist"><span
                                                                        class="fa fa-heart-o"></span></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Compare"><span
                                                                        class="fa fa-exchange"></span></a>
                                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                                    title="Quick View" data-toggle="modal"
                                                                    data-target="#quick-view-modal"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                            <!-- product badge -->
                                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                        </li>
                                                        <!-- start single product item -->
                                                        <li>
                                                            <figure>
                                                                <a class="aa-product-img" href="#"><img
                                                                        src="{{ asset('front_end_style/img/man/t-shirt-1.png') }} "
                                                                        alt="polo shirt img"></a>
                                                                <a class="aa-add-card-btn" href="#"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title"><a href="#">T-Shirt</a>
                                                                    </h4>
                                                                    <span class="aa-product-price">$45.50</span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="aa-product-hvr-content">
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Add to Wishlist"><span
                                                                        class="fa fa-heart-o"></span></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                                    title="Compare"><span
                                                                        class="fa fa-exchange"></span></a>
                                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                                    title="Quick View" data-toggle="modal"
                                                                    data-target="#quick-view-modal"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                            <!-- product badge -->
                                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                        </li>
                                                    @endif
                                                </ul>
                                                <a class="aa-browse-btn" href="#">Browse all Product <span
                                                        class="fa fa-long-arrow-right"></span></a>
                                            </div>
                                        @endforeach
                                    @else
                                        <!-- Start men product category -->
                                        <div class="tab-pane fade in active" id="men">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/man/t-shirt-1.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/man/polo-shirt-1.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/man/polo-shirt-4.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/man/polo-shirt-5.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/man/polo-shirt-6.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/man/t-shirt-1.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                            </ul>
                                            <a class="aa-browse-btn" href="#">Browse all Product <span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <!-- / men product category -->
                                        <!-- start women product category -->
                                        <div class="tab-pane fade" id="women">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/women/girl-1.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/women/girl-2.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/women/girl-3.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/women/girl-4.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/women/girl-5.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>

                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/women/girl-6.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/women/girl-7.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/women/girl-1.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                            </ul>
                                            <a class="aa-browse-btn" href="#">Browse all Product <span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <!-- / women product category -->
                                        <!-- start sports product category -->
                                        <div class="tab-pane fade" id="sports">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/sports/sport-1.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/sports/sport-2.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/sports/sport-3.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/sports/sport-4.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/sports/sport-5.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/sports/sport-6.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/sports/sport-7.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/sports/sport-8.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- / sports product category -->
                                        <!-- start electronic product category -->
                                        <div class="tab-pane fade" id="electronics">
                                            <ul class="aa-product-catg">
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/electronics/electronic-1.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/electronics/electronic-2.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/electronics/electronic-3.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/electronics/electronic-4.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/electronics/electronic-5.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/electronics/electronic-6.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/electronics/electronic-7.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ asset('front_end_style/img/electronics/electronic-8.png') }} "
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                                </li>
                                            </ul>
                                            <a class="aa-browse-btn" href="#">Browse all Product <span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                        <!-- / electronic product category -->
                                    @endif
                                </div>
                                <!-- quick view modal -->
                                <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <div class="row">
                                                    <!-- Modal view slider -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-slider">
                                                            <div class="simpleLens-gallery-container" id="demo-1">
                                                                <div class="simpleLens-container">
                                                                    <div class="simpleLens-big-image-container">
                                                                        <a class="simpleLens-lens-image"
                                                                            data-lens-image="{{ asset('front_end_style/img/view-slider/large/polo-shirt-1.png') }} ">
                                                                            <img src="{{ asset('front_end_style/img/view-slider/medium/polo-shirt-1.png') }} "
                                                                                class="simpleLens-big-image">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="simpleLens-thumbnails-container">
                                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                        data-lens-image="{{ asset('front_end_style/img/view-slider/large/polo-shirt-1.png') }} "
                                                                        data-big-image="{{ asset('front_end_style/img/view-slider/medium/polo-shirt-1.png') }} ">
                                                                        <img
                                                                            src="{{ asset('front_end_style/img/view-slider/thumbnail/polo-shirt-1.png') }} ">
                                                                    </a>
                                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                        data-lens-image="{{ asset('front_end_style/img/view-slider/large/polo-shirt-3.png') }} "
                                                                        data-big-image="{{ asset('front_end_style/img/view-slider/medium/polo-shirt-3.png') }} ">
                                                                        <img
                                                                            src="{{ asset('front_end_style/img/view-slider/thumbnail/polo-shirt-3.png') }} ">
                                                                    </a>

                                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                        data-lens-image="{{ asset('front_end_style/img/view-slider/large/polo-shirt-4.png') }} "
                                                                        data-big-image="{{ asset('front_end_style/img/view-slider/medium/polo-shirt-4.png') }} ">
                                                                        <img
                                                                            src="{{ asset('front_end_style/img/view-slider/thumbnail/polo-shirt-4.png') }} ">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view content -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-content">
                                                            <h3>T-Shirt</h3>
                                                            <div class="aa-price-block">
                                                                <span class="aa-product-view-price">$34.99</span>
                                                                <p class="aa-product-avilability">Avilability: <span>In
                                                                        stock</span></p>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Officiis animi, veritatis quae repudiandae quod nulla porro
                                                                quidem, itaque quis quaerat!</p>
                                                            <h4>Size</h4>
                                                            <div class="aa-prod-view-size">
                                                                <a href="#">S</a>
                                                                <a href="#">M</a>
                                                                <a href="#">L</a>
                                                                <a href="#">XL</a>
                                                            </div>
                                                            <div class="aa-prod-quantity">
                                                                <form action="">
                                                                    <select name="" id="">
                                                                        <option value="0" selected="1">1</option>
                                                                        <option value="1">2</option>
                                                                        <option value="2">3</option>
                                                                        <option value="3">4</option>
                                                                        <option value="4">5</option>
                                                                        <option value="5">6</option>
                                                                    </select>
                                                                </form>
                                                                <p class="aa-prod-category">
                                                                    Category: <a href="#">Polo T-Shirt</a>
                                                                </p>
                                                            </div>
                                                            <div class="aa-prod-view-bottom">
                                                                <a href="#" class="aa-add-to-cart-btn"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- / quick view modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Products section -->
    <!-- banner section -->
    <section id="aa-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            @if (isset($banner->image_1) && file_exists($banner->image_1))
                                <a href="#"><img src="{{ asset($banner->image_1) }} " alt="fashion banner img"></a>
                            @else
                                <a href="#"><img src="{{ asset('front_end_style/img/fashion-banner.jpg') }} "
                                        alt="fashion banner img"></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                <li><a href="#latest" data-toggle="tab">Latest</a></li>
                                <li><a href="#on_sale" data-toggle="tab">On Sale</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-2.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/man/t-shirt-1.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-3.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/man/polo-shirt-1.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-4.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/man/polo-shirt-4.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-1.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-4.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/man/polo-shirt-4.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-1.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular product category -->

                                <!-- start featured product category -->
                                <div class="tab-pane fade" id="featured">
                                    <ul class="aa-product-catg aa-featured-slider">
                                        @if (isset($recent_products) && $recent_products->count() > 0)
                                            @foreach ($recent_products as $product)
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#">
                                                            @if (isset($product->image) && file_exists($product->image))
                                                                <img src="{{ asset($product->image) }} "
                                                                    alt="polo shirt img">
                                                            @else
                                                                <img src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                                    alt="polo shirt img">
                                                            @endif
                                                        </a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="#">{{ isset($product->name_en) ? $product->name_en : '--------' }}</a>
                                                            </h4>
                                                            @if ($product->on_sale_price_status == 'Active')
                                                                <span
                                                                    class="aa-product-price">${{ isset($product->on_sale_price) ? $product->on_sale_price : '--------' }}</span><span
                                                                    class="aa-product-price"><del>${{ isset($product->sale_price) ? $product->sale_price : '--------' }}</del></span>
                                                            @else
                                                                <span
                                                                    class="aa-product-price">${{ isset($product->sale_price) ? $product->sale_price : '--------' }}</span>
                                                            @endif
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    @if ($product->on_sale_price_status == 'Active')
                                                        <!-- product badge -->
                                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                    @endif
                                                </li>
                                            @endforeach
                                        @else
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/women/girl-2.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/man/t-shirt-1.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                </figure>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/women/girl-3.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/man/polo-shirt-1.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/women/girl-4.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/man/polo-shirt-4.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/women/girl-1.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                        @endif
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / featured product category -->

                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <ul class="aa-product-catg aa-latest-slider">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-2.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/man/t-shirt-1.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-3.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/man/polo-shirt-1.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-4.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/man/polo-shirt-4.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('front_end_style/img/women/girl-1.png') }} "
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                    data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / latest product category -->
                                <!-- start on sale product category -->
                                <div class="tab-pane fade" id="on_sale">
                                    <ul class="aa-product-catg aa-latest-slider">
                                        @if(isset($onSaleProducts) && $onSaleProducts->count() > 0)
                                            @foreach ($onSaleProducts as $product)
                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#">
                                                            @if(isset($product->image) && file_exists($product->image))
                                                                <img src="{{ asset($product->image) }} " alt="polo shirt img">
                                                            @else
                                                                <img src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} " alt="polo shirt img">
                                                            @endif
                                                        </a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">{{ isset($product->name_en) ? $product->name_en : '--------' }}</a></h4>
                                                            @if ($product->on_sale_price_status == 'Active')
                                                                <span
                                                                    class="aa-product-price">${{ isset($product->on_sale_price) ? $product->on_sale_price : '--------' }}</span><span
                                                                    class="aa-product-price"><del>${{ isset($product->sale_price) ? $product->sale_price : '--------' }}</del></span>
                                                            @else
                                                                <span
                                                                    class="aa-product-price">${{ isset($product->sale_price) ? $product->sale_price : '--------' }}</span>
                                                            @endif
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    @if ($product->on_sale_price_status == 'Active')
                                                        <!-- product badge -->
                                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                    @endif
                                                </li>
                                            @endforeach
                                        @else
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/man/polo-shirt-2.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                            class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/women/girl-2.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                            class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/man/t-shirt-1.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                </figure>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                            class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/women/girl-3.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                            class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/man/polo-shirt-1.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                            class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/women/girl-4.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                            class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/man/polo-shirt-4.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                            class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('front_end_style/img/women/girl-1.png') }} "
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                            class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                                        data-toggle="modal" data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                        @endif
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / on sale product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>FREE SHIPPING</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>30 DAYS MONEY BACK</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->
    <!-- Testimonial -->
    <section id="aa-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-testimonial-area">
                        <ul class="aa-testimonial-slider">
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img"
                                        src="{{ asset('front_end_style/img/testimonial-img-2.jpg') }} "
                                        alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>Allison</p>
                                        <span>Designer</span>
                                        <a href="#">Dribble.com</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img"
                                        src="{{ asset('front_end_style/img/testimonial-img-1.jpg') }} "
                                        alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>KEVIN MEYER</p>
                                        <span>CEO</span>
                                        <a href="#">Alphabet</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img"
                                        src="{{ asset('front_end_style/img/testimonial-img-3.jpg') }} "
                                        alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>Luner</p>
                                        <span>COO</span>
                                        <a href="#">Kinatic Solution</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Testimonial -->

    <!-- Latest Blog -->
    <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>LATEST BLOG</h2>
                        <div class="row">
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="{{ asset('front_end_style/img/promo-banner-1.jpg') }} "
                                                alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                            quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.
                                        </p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="{{ asset('front_end_style/img/promo-banner-3.jpg') }} "
                                                alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                            quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.
                                        </p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="{{ asset('front_end_style/img/promo-banner-1.jpg') }} "
                                                alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                            quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.
                                        </p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest Blog -->

    <!-- Client Brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-java.png') }} "
                                        alt="java img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-jquery.png') }} "
                                        alt="jquery img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-html5.png') }} "
                                        alt="html5 img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-css3.png') }} "
                                        alt="css3 img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-wordpress.png') }} "
                                        alt="wordPress img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-joomla.png') }} "
                                        alt="joomla img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-java.png') }} "
                                        alt="java img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-jquery.png') }} "
                                        alt="jquery img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-html5.png') }} "
                                        alt="html5 img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-css3.png') }} "
                                        alt="css3 img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('front_end_style/img/client-brand-wordpress.png') }} "
                                        alt="wordPress img"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client Brand -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $(document).on('click','.get_item_details',function(){
                item_id = $(this).data("id");

                formData = new FormData();
                formData.append('item_id',item_id);

                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: "{{ route('getItemDetails') }}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    if (data['status'] == true) {

                        modal_body = $("#quick-view-modal").find('.modal-body')

                        $("#colors_edit_modal").modal('hide');
                    }
                    else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Ooops',
                            text: data.msg,
                            width: 400,
                        })
                    }
                },
                error: function(data) {
                    // console.log(message);
                    swal({
                            icon: 'error',
                            title: 'please correct The Following :',
                            text:  message,
                            width: 400,
                        });
                }
        });


            });
        });
    </script>


@endsection
