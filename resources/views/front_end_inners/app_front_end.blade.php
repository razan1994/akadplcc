<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@lang('front_end.juman_dead_sea')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front_end_style/assets/img/icon/fav-icon.png') }}">

    {{-- =================================================================================================================== --}}
    {{-- ===================================================== CSS Area ==================================================== --}}
    {{-- =================================================================================================================== --}}
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('front_end_style/assets/css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('front_end_style/assets/css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap.min.css') }}"> --}}
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('front_end_style/css/font.css') }}">
    <!-- Arabic Or English Files -->
    @if (Config::get('app.locale') == 'ar')
    <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/language.css') }}">
    @endif

    {{-- Sweet Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

        <style>
            .c_subdropdonmn{
                height: 540px;
                overflow: auto;
            }
            /* width */
            .c_subdropdonmn::-webkit-scrollbar {
                width: 8px;
            }
            /* Track */
            .c_subdropdonmn::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px #23b1a5 ;
                border-radius: 0px;
            }
            /* Handle */
            .c_subdropdonmn::-webkit-scrollbar-thumb {
                background: #23b1a5 ;
                border-radius: 1px;
            }
            /* Handle on hover */
            .c_subdropdonmn::-webkit-scrollbar-thumb:hover {
                background: #23b1a5aa ;
            }
        </style>
</head>

<body>

    {{-- =================================================================================================================== --}}
    {{-- ================================================ Start Header Area ================================================ --}}
    {{-- =================================================================================================================== --}}
    <header class="header_area header_depult">
        <!--header container start-->
        <div class="header_container sticky-header">
            <div class="container">
                <div class="header_container_inner container_position">
                    <div class="logo">
                        <a href="{{ Auth::check() ? route('welcomeAuth') :  route('welcome') }}"><img src="{{ asset('front_end_style/images/logo_big_size.png') }}" alt=""></a>
                    </div>
                    <div class="header_container_right">
                        <div class="main_menu menu_depult_color">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{ Auth::check() ? route('welcomeAuth') :  route('welcome') }}">@lang('front_end.home')</a></li>
                                    <li class="mega_items"><a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}"> @lang('front_end.shop')</a>
                                        <div class="mega_menu">
                                            <ul class="mega_menu_inner">
                                                @if (isset($public_categories[0]->takeFourProducts))
                                                    <li>
                                                        @if (Config::get('app.locale') == 'en')
                                                            <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_categories[0]->id]) : route('products', ['category_id' => $public_categories[0]->id]) }}">{!! isset($public_categories[0]->name_en) ? $public_categories[0]->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @else
                                                            <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_categories[0]->id]) : route('products', ['category_id' => $public_categories[0]->id]) }}">{!! isset($public_categories[0]->name_ar) ? $public_categories[0]->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @endif
                                                        <ul>
                                                            @foreach ($public_categories[0]->takeFourProducts as $product)
                                                                <li>
                                                                    @if (Config::get('app.locale') == 'en')
                                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                                    @else
                                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                                    @endif
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endif
                                                @if (isset($public_categories[1]->takeFourProducts))
                                                    <li>
                                                        @if (Config::get('app.locale') == 'en')
                                                            <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_categories[1]->id]) : route('products', ['category_id' => $public_categories[1]->id]) }}">{!! isset($public_categories[1]->name_en) ? $public_categories[1]->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @else
                                                            <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_categories[1]->id]) : route('products', ['category_id' => $public_categories[1]->id]) }}">{!! isset($public_categories[1]->name_ar) ? $public_categories[1]->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @endif
                                                        <ul>
                                                            @foreach ($public_categories[1]->takeFourProducts as $product)
                                                                <li>
                                                                    @if (Config::get('app.locale') == 'en')
                                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                                    @else
                                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                                    @endif
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endif
                                                @if (isset($public_categories[2]->takeFourProducts))
                                                    <li>
                                                        @if (Config::get('app.locale') == 'en')
                                                            <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_categories[2]->id]) : route('products', ['category_id' => $public_categories[2]->id]) }}">{!! isset($public_categories[2]->name_en) ? $public_categories[2]->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @else
                                                            <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_categories[2]->id]) : route('products', ['category_id' => $public_categories[2]->id]) }}">{!! isset($public_categories[2]->name_ar) ? $public_categories[2]->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @endif
                                                        <ul>
                                                            @foreach ($public_categories[2]->takeFourProducts as $product)
                                                                <li>
                                                                    @if (Config::get('app.locale') == 'en')
                                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_en) ? $product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                                    @else
                                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $product->id) :  route('productDetails', $product->id) }}">{!! isset($product->name_ar) ? $product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                                    @endif
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endif
                                                <li><img src="{{ asset('front_end_style/images/menu_shop_image.jpg') }}" alt=""></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{ Auth::check() ? route('faqsAuth') :  route('faqs') }}"> @lang('front_end.faq')</a></li>
                                    <li><a href="{{ Auth::check() ? route('aboutUsAuth') :  route('aboutUs') }}"> @lang('front_end.about_us')</a></li>
                                    <li><a href="{{ Auth::check() ? route('contactUsAuth') :  route('contactUs') }}"> @lang('front_end.contact_us')</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header_block_right block_depult_color">
                            <ul>
                                <li class="search_bar"><a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                                </li>
                                  <li class="c_lang_top">
                                 {{-- <div class="c_btnlang"> --}}
                                            <div class="btn-group c_lang">
                                                <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    @if (Config::get('app.locale') == 'en')
                                                        <img src="{{ asset('front_end_style/images/United_Kingdom.png') }}" alt="">
                                                    @else
                                                        <img src="{{ asset('front_end_style/images/Saudi_Arabia.png') }}" alt="">
                                                    @endif
                                                </a>
                                                <div class="dropdown-menu">
                                                    <ul class="language_bar_chooser">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                            @if($localeCode == LaravelLocalization::getCurrentLocale())
                                                                <li class="active">
                                                                    <img class="flag flag-{{$localeCode}}"/>
                                                                </li>
                                                            @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
                                                                <li>
                                                                    <a rel="alternate" hreflang="{{$localeCode}}" href="{{$url}}">
                                                                        <img class="flag flag-{{$localeCode}}"/>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        {{-- </div> --}}

                                      
                                </li>
                                <li class="mini_cart_wrapper"><a href="javascript:void(0)"><i class="ion-bag"></i> <span>{{ isset($public_customer_carts) && $public_customer_carts->count() ? $public_customer_carts->count() : 0 }}</span></a>
                                    <!--mini cart-->
                                    @if (isset($public_customer_carts) && $public_customer_carts->count())
                                        <div class="mini_cart c_subdropdonmn">
                                            @foreach ($public_customer_carts as $public_customer_cart)
                                                <div class="cart_item">
                                                    <div class="cart_img">
                                                        @if (isset($public_customer_cart->product->image) && $public_customer_cart->product->image && file_exists($public_customer_cart->product->image))
                                                            <a href="{{ Auth::check() ? route('productDetailsAuth', $public_customer_cart->product_id) :  route('productDetails', $public_customer_cart->product_id) }}"><img src="{{ asset($public_customer_cart->product->image) }}" alt=""></a>
                                                        @else
                                                            <a href="#"><img src="{{ asset('front_end_style/assets/img/s-product/product.jpg') }}" alt=""></a>
                                                        @endif
                                                    </div>
                                                    <div class="cart_info">
                                                        @if (Config::get('app.locale') == 'en')
                                                            <a href="{{ Auth::check() ? route('productDetailsAuth', $public_customer_cart->product_id) :  route('productDetails', $public_customer_cart->product_id) }}">{!! isset($public_customer_cart->product->name_en) ? $public_customer_cart->product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @else
                                                            <a href="{{ Auth::check() ? route('productDetailsAuth', $public_customer_cart->product_id) :  route('productDetails', $public_customer_cart->product_id) }}">{!! isset($public_customer_cart->product->name_ar) ? $public_customer_cart->product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @endif
                                                        <span class="quantity">Qty : {!! isset($public_customer_cart->quantity) ? $public_customer_cart->quantity : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        @if ($public_customer_cart->product->on_sale_price_status == 'Active')
                                                            <span class="quantity"> @lang('front_end.unit_price') : {!! isset($public_customer_cart->product->on_sale_price) ? $public_customer_cart->product->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                            <span class="price_cart">@lang('front_end.total') : {!! isset($public_customer_cart->quantity) && isset($public_customer_cart->product->on_sale_price) ? $public_customer_cart->quantity * $public_customer_cart->product->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        @else
                                                            <span class="quantity">@lang('front_end.unit_price') : {!! isset($public_customer_cart->product->sale_price) ? $public_customer_cart->product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                            <span class="price_cart">@lang('front_end.total') : {!! isset($public_customer_cart->quantity) && isset($public_customer_cart->product->sale_price) ? $public_customer_cart->quantity * $public_customer_cart->product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        @endif
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a class="confirm" href="{{ Auth::check() ? route('deleteFromCartAuth', $public_customer_cart->id) :  route('deleteFromCart', $public_customer_cart->id) }}"><i class="ion-android-close"></i></a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>@lang('front_end.sub_total')</span>
                                                    <span class="price">{{ isset($public_customer_carts->endTotal) ? $public_customer_carts->endTotal : 0 }} <small> @lang('front_end.sar')</small></span>
                                                </div>
                                            </div>

                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                     <a href="{{ Auth::check() ? route('cartAuth') :  route('cart') }}">@lang('front_end.view_cart')</a>
                                                     {{-- <a href="checkout.html">Checkout</a> --}}
                                                 </div>
                                             </div>
                                        </div>
                                    @endif
                                    <!--mini cart end-->
                                </li>
                              
                                <li class="setting_container"><a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!--header container end-->
        </div>
    </header>
    {{-- =================================================================================================================== --}}
    {{-- ================================================= End Header Area ================================================= --}}
    {{-- =================================================================================================================== --}}

    {{-- =================================================================================================================== --}}
    {{-- =============================================== Start Setting Area ================================================ --}}
    {{-- =================================================================================================================== --}}
    <div class="setting_wrapper">
        <div class="setting_close_btn">
            <i class="ion-android-close btn-close"></i>
        </div>
        <div class="logo">
            <a href="{{ Auth::check() ? route('welcome') : route('welcomeAuth') }}"><img src="{{ asset('front_end_style/images/jumanlogo.png') }}" alt=""></a>
        </div>
        <div class="header_description">
            <p>@lang('front_end.juman_international')</p>
        </div>
        <div class="top_links">
            <ul>
                {{-- <li><span>Currency</span>
                    <ul class="sub_links">
                        <li><a href="#">EUR</a></li>
                        <li><a href="#">GBP</a></li>
                        <li><a class="active" href="#">USD</a></li>
                    </ul>
                </li> --}}
                {{-- <li><span>Language</span>
                    <ul class="sub_links">
                        <li><a class="active" href="#"> English</a></li>
                        <li><a href="#"> French</a></li>
                    </ul>
                </li> --}}
                @if (Auth::check())
                    <li>
                        <span>@lang('front_end.my_account') :</span>
                        <ul class="sub_links">
                            <li><strong> @lang('front_end.my_name') </strong> :
                                @if (Config::get('app.locale') == 'en')
                                    {{ auth()->user()->name_en }}
                                @else
                                    {{ auth()->user()->name_ar }}
                                @endif
                            </li>
                            <li><strong> @lang('front_end.my_email') </strong> : {{ auth()->user()->email }}</li>
                            <li><strong> @lang('front_end.my_phone') </strong> : {{ auth()->user()->phone }}</li>
                        </ul>
                        <hr>
                        <span>@lang('front_end.settings') :</span>
                        <ul class="sub_links">
                            <li><a href="{{ route('customer.profile') }}">@lang('front_end.my_profile')</a></li>
                            <li><a href="{{ route('customer.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('front_end.logout')</a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li><span>@lang('front_end.my_account')</span>
                        <ul class="sub_links">
                            <li><a href="{{ route('customer.loginRegister') }}"> @lang('front_end.register')</a></li>
                            <li><a href="{{ route('customer.loginRegister') }}"> @lang('front_end.login')</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        {{-- <div class="setting_social">
            <ul>
                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
            </ul>
        </div> --}}
    </div>
    {{-- =================================================================================================================== --}}
    {{-- ================================================= End Setting Area ================================================ --}}
    {{-- =================================================================================================================== --}}

    {{-- =================================================================================================================== --}}
    {{-- =============================================== Start Search Area ================================================= --}}
    {{-- =================================================================================================================== --}}
    <div class="dropdown_search">
        <div class="search_close_btn">
            <i class="ion-android-close btn-close"></i>
        </div>
        <div class="search_container">
            <form action="{{ Auth::check() ? route('productsAuth') : route('products') }}">
                <input placeholder="@lang('front_end.search_by_product_name')" type="text" name="product_name" value="{{ Request::get('product_name') }}">
                <button type="submit"><i class="ion-ios-search-strong"></i></button>
            </form>
        </div>
    </div>
    {{-- =================================================================================================================== --}}
    {{-- ================================================= End Search Area ================================================= --}}
    {{-- =================================================================================================================== --}}

    {{-- =================================================================================================================== --}}
    {{-- ============================================ Start Mobile Menu Area =============================================== --}}
    {{-- =================================================================================================================== --}}
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>@lang('front_end.menu')</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        {{-- Search Section --}}
                        <div class="header_block_right">
                            <ul>
                                <li class="search_bar"><a href="javascript:void(0)"><i
                                            class="ion-ios-search-strong"></i></a>
                                    <div class="dropdown_search">
                                        <div class="search_close_btn">
                                            <i class="ion-android-close btn-close"></i>
                                        </div>
                                        <div class="search_container">
                                            <form action="#">
                                                <input placeholder="I’m shopping for..." type="text">
                                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="mini_cart_wrapper"><a href="javascript:void(0)"><i
                                            class="ion-bag"></i> <span>{{ isset($public_customer_carts) && $public_customer_carts->count() ? $public_customer_carts->count() : 0 }}</span></a>

                                    <!--mini cart-->
                                    @if (isset($public_customer_carts) && $public_customer_carts->count())
                                        <div class="mini_cart">
                                            @foreach ($public_customer_carts as $public_customer_cart)
                                                <div class="cart_item">
                                                    <div class="cart_img">
                                                        @if (isset($public_customer_cart->product->image) && $public_customer_cart->product->image && file_exists($public_customer_cart->product->image))
                                                            <a href="{{ Auth::check() ? route('productDetailsAuth', $public_customer_cart->product_id) :  route('productDetails', $public_customer_cart->product_id) }}"><img src="{{ asset($public_customer_cart->product->image) }}" alt=""></a>
                                                        @else
                                                            <a href="#"><img src="{{ asset('front_end_style/assets/img/s-product/product.jpg') }}" alt=""></a>
                                                        @endif
                                                    </div>
                                                    <div class="cart_info">
                                                        @if (Config::get('app.locale') == 'en')
                                                            <a href="{{ Auth::check() ? route('productDetailsAuth', $public_customer_cart->product_id) :  route('productDetails', $public_customer_cart->product_id) }}">{!! isset($public_customer_cart->product->name_en) ? $public_customer_cart->product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @else
                                                            <a href="{{ Auth::check() ? route('productDetailsAuth', $public_customer_cart->product_id) :  route('productDetails', $public_customer_cart->product_id) }}">{!! isset($public_customer_cart->product->name_ar) ? $public_customer_cart->product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @endif
                                                        <span class="quantity">@lang('front_end.qty') : {!! isset($public_customer_cart->quantity) ? $public_customer_cart->quantity : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        @if ($public_customer_cart->product->on_sale_price_status == 'Active')
                                                            <span class="quantity"> @lang('front_end.unit_price') : {!! isset($public_customer_cart->product->on_sale_price) ? $public_customer_cart->product->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                            <span class="price_cart">@lang('front_end.total') : {!! isset($public_customer_cart->quantity) && isset($public_customer_cart->product->on_sale_price) ? $public_customer_cart->quantity * $public_customer_cart->product->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        @else
                                                            <span class="quantity">@lang('front_end.unit_price') : {!! isset($public_customer_cart->product->sale_price) ? $public_customer_cart->product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                            <span class="price_cart">@lang('front_end.total') : {!! isset($public_customer_cart->quantity) && isset($public_customer_cart->product->sale_price) ? $public_customer_cart->quantity * $public_customer_cart->product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</span>
                                                        @endif
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a class="confirm" href="{{ Auth::check() ? route('deleteFromCartAuth', $public_customer_cart->id) :  route('deleteFromCart', $public_customer_cart->id) }}"><i class="ion-android-close"></i></a>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>@lang('front_end.sub_total')</span>
                                                    <span class="price">{{ isset($public_customer_carts->endTotal) ? $public_customer_carts->endTotal : 0 }} <small> @lang('front_end.sar')</small></span>
                                                </div>
                                            </div>

                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                     <a href="{{ Auth::check() ? route('cartAuth') :  route('cart') }}">@lang('front_end.view_cart')</a>
                                                     {{-- <a href="checkout.html">Checkout</a> --}}
                                                 </div>
                                             </div>
                                        </div>
                                    @endif
                                    <!--mini cart end-->
                                </li>
                                <li class="setting_container"><a href="javascript:void(0)"><i
                                            class="ion-navicon"></i></a>
                                    <div class="setting_wrapper">
                                        <div class="setting_close_btn">
                                            <i class="ion-android-close btn-close"></i>
                                        </div>
                                        <div class="logo">
                                            <a href="{{ Auth::check() ? route('welcome') : route('welcomeAuth') }}"><img src="{{ asset('front_end_style/images/jumanlogo.png') }}" alt=""></a>
                                        </div>
                                        <div class="header_description">
                                            <p>@lang('front_end.juman_international')</p>
                                        </div>
                                        <div class="top_links">
                                            <ul>
                                                {{-- <li><span>Currency</span>
                                                    <ul class="sub_links">
                                                        <li><a href="#">EUR</a></li>
                                                        <li><a href="#">GBP</a></li>
                                                        <li><a class="active" href="#">USD</a></li>
                                                    </ul>
                                                </li> --}}
                                                {{-- <li><span>Language</span>
                                                    <ul class="sub_links">
                                                        <li><a class="active" href="#"> English</a></li>
                                                        <li><a href="#"> French</a></li>
                                                    </ul>
                                                </li> --}}

                                                @if (Auth::check())
                                                    <li>
                                                        <span>@lang('front_end.my_account') :</span>
                                                        <ul class="sub_links">
                                                            @if (Config::get('app.locale') == 'en')
                                                                <li><strong> @lang('front_end.my_name') </strong> : {{ auth()->user()->name_en }}</li>
                                                            @else
                                                                <li><strong> @lang('front_end.my_name') </strong> : {{ auth()->user()->name_ar }}</li>
                                                            @endif
                                                            <li><strong> @lang('front_end.my_email') </strong> : {{ auth()->user()->email }}</li>
                                                            <li><strong> @lang('front_end.my_phone') </strong> : {{ auth()->user()->phone }}</li>
                                                        </ul>
                                                        <hr>
                                                        <span>@lang('front_end.settings') :</span>
                                                        <ul class="sub_links">
                                                            <li><a href="{{ route('customer.profile') }}"> @lang('front_end.my_profile')</a></li>
                                                            <li><a href="{{ route('customer.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> @lang('front_end.logout')</a></li>
                                                        </ul>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                @else
                                                    <li><span>@lang('front_end.my_account')</span>
                                                        <ul class="sub_links">
                                                            <li><a href="{{ route('customer.loginRegister') }}"> @lang('front_end.register')</a></li>
                                                            <li><a href="{{ route('customer.loginRegister') }}"> @lang('front_end.login')</a></li>
                                                        </ul>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="setting_social">
                                            <ul>
                                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="https://twitter.com/jumandeadsea_sa"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="https://www.snapchat.com/add/juman.deadsea?share_id=QkYwMkM3&locale=en_SA@calendar=gregorian"><i class="ion-social-snapchat"></i></a></li>
                                                <li><a href="https://www.instagram.com/juman.deadsea.sa/"><i class="ion-social-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        {{-- Main Menu --}}
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="{{ Auth::check() ? route('welcomeAuth') :  route('welcome') }}">@lang('front_end.home')</a>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}">@lang('front_end.shop')</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ Auth::check() ? route('faqsAuth') :  route('faqs') }}">@lang('front_end.faq')</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ Auth::check() ? route('aboutUsAuth') :  route('aboutUs') }}">@lang('front_end.about_us')</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ Auth::check() ? route('contactUsAuth') :  route('contactUs') }}"> @lang('front_end.contact_us')</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ Auth::check() ? route('privacyPoliciesAuth') :  route('privacyPolicies') }}">@lang('front_end.privacy_policies')</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ Auth::check() ? route('termsAndConditionsAuth') :  route('termsAndConditions') }}">@lang('front_end.terms_conditions')</a>
                                </li>

                                @if (Auth::check())
                                    <li>
                                        <span>@lang('front_end.my_account') :</span>
                                        <ul class="sub_links">
                                            @if (Config::get('app.locale') == 'en')
                                                <li><strong> @lang('front_end.my_name') </strong> : {{ auth()->user()->name_en }}</li>
                                            @else
                                                <li><strong> @lang('front_end.my_name') </strong> : {{ auth()->user()->name_ar }}</li>
                                            @endif
                                            <li><strong> @lang('front_end.my_email') </strong> : {{ auth()->user()->email }}</li>
                                            <li><strong> @lang('front_end.my_phone') </strong> : {{ auth()->user()->phone }}</li>
                                        </ul>
                                        <hr>
                                        <span>@lang('front_end.settings') :</span>
                                        <ul class="sub_links">
                                            <li><a href="{{ route('customer.profile') }}"> @lang('front_end.my_profile')</a></li>
                                            <li><a href="{{ route('customer.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> @lang('front_end.logout')</a></li>
                                        </ul>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <ul class="sub_links">
                                            <li><a href="{{ route('customer.loginRegister') }}">@lang('front_end.register')</a></li>
                                            <li><a href="{{ route('customer.loginRegister') }}">@lang('front_end.login')</a></li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@juman.sa.com</a></span>
                            <span><a href="#"><i class="fa fa-envelope-o"></i> +966551505178</a></span>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="https://twitter.com/jumandeadsea_sa" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="https://www.snapchat.com/add/juman.deadsea?share_id=QkYwMkM3&locale=en_SA@calendar=gregorian" target="_blank"><i class="ion-social-snapchat"></i></a></li>
                                <li><a href="https://www.instagram.com/juman.deadsea.sa/" target="_blank"><i class="ion-social-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- =================================================================================================================== --}}
    {{-- ============================================== End Mobile Menu Area =============================================== --}}
    {{-- =================================================================================================================== --}}

    {{-- =================================================================================================================== --}}
    {{-- ================================================ Start Content Area =============================================== --}}
    {{-- =================================================================================================================== --}}
    @yield('content')
    {{-- =================================================================================================================== --}}
    {{-- ================================================== End Content Area =============================================== --}}
    {{-- =================================================================================================================== --}}


    {{-- =================================================================================================================== --}}
    {{-- ================================================ Start Footer Area ================================================ --}}
    {{-- =================================================================================================================== --}}
    <footer class="footer_widgets">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="widgets_container contact_us">
                            <a href="{{ Auth::check() ? route('welcome') : route('welcomeAuth') }}"><img src="{{ asset('front_end_style/images/jumanlogo.png') }}" alt=""></a>
                            <div class="footer_contact">
                                <ul>
                                    <li><i class="ion-ios-location"></i><span>@lang('front_end.address')</span> @lang('front_end.address_loc')</li>
                                    <li><i class="ion-ios-telephone"></i><span>@lang('front_end.call_us') : </span> +966551505178</li>
                                    <li><i class="ion-android-mail"></i><span>@lang('front_end.email') : </span> info@juman.sa.com</li>
                                    <li>
                                        {{-- <div class="c_btnlang"> --}}
                                            <div class="btn-group c_lang">
                                                <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    @if (Config::get('app.locale') == 'en')
                                                        English
                                                    @else
                                                        العربية
                                                    @endif
                                                </a>
                                                <div class="dropdown-menu">
                                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        {{-- </div> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="widgets_container widget_menu">
                            <h3>@lang('front_end.menu')</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="{{ Auth::check() ? route('welcomeAuth') :  route('welcome') }}">@lang('front_end.home')</a></li>
                                    <li><a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}">@lang('front_end.shop')</a></li>
                                    <li><a href="{{ Auth::check() ? route('faqsAuth') :  route('faqs') }}">@lang('front_end.faq')</a></li>
                                    <li><a href="{{ Auth::check() ? route('aboutUsAuth') :  route('aboutUs') }}">@lang('front_end.about_us')</a></li>
                                    <li><a href="{{ Auth::check() ? route('contactUsAuth') :  route('contactUs') }}"> @lang('front_end.contact_us')</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widgets_container widget_menu">
                            <h3>@lang('front_end.control')</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="{{ Auth::check() ? route('privacyPoliciesAuth') :  route('privacyPolicies') }}"> @lang('front_end.privacy_policies')</a></li>
                                    <li><a href="{{ Auth::check() ? route('termsAndConditionsAuth') :  route('termsAndConditions') }}"> @lang('front_end.terms_conditions')</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-4">
                        <div class="widgets_container widget_newsletter">
                            <h3>@lang('front_end.news_letter')</h3>
                            <div class="newsletter_desc">
                                <p>@lang('front_end.join') <strong>69.000+ @lang('front_end.subscribers')</strong>@lang('front_end.every_monday')</p>
                            </div>
                            <div class="newsletter_form">
                                <form action="#">
                                    <input placeholder="@lang('front_end.email')" type="text">
                                    <button type="submit"><i class="ion-android-mail"></i></button>
                                </form>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/jumandeadsea_sa" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="https://www.snapchat.com/add/juman.deadsea?share_id=QkYwMkM3&locale=en_SA@calendar=gregorian" target="_blank"><i class="ion-social-snapchat"></i></a></li>
                                    <li><a href="https://www.instagram.com/juman.deadsea.sa/" target="_blank"><i class="ion-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-lg-3 col-md-6 offset-md-3 offset-lg-0">
                        <div class="widgets_container">
                            <h3>@lang('front_end.juman_images')</h3>
                            <div class="instagram_gallery">
                                <div class="single_instagram">
                                    <a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}"><img src="{{ asset('front_end_style/images/juman_footer_1.jpg') }}" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}"><img src="{{ asset('front_end_style/images/juman_footer_2.jpg') }}" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}"><img src="{{ asset('front_end_style/images/juman_footer_3.jpg') }}" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}"><img src="{{ asset('front_end_style/images/juman_footer_4.jpg') }}" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}"><img src="{{ asset('front_end_style/images/juman_footer_5.jpg') }}" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="{{ Auth::check() ? route('productsAuth') :  route('products') }}"><img src="{{ asset('front_end_style/images/juman_footer_6.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright_area">
                            <p>@lang('front_end.copyright') &copy; 2021 <a href="https://al-mizen.netlify.app/index.html" target="_blank"> @lang('front_end.almizen') </a> @lang('front_end.all_right_reserved')</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="footer_payment text-right">
                            <a><img src="{{ asset('front_end_style/assets/img/icon/payment_method.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- =================================================================================================================== --}}
    {{-- ================================================== End Footer Area ================================================ --}}
    {{-- =================================================================================================================== --}}

    {{-- =================================================================================================================== --}}
    {{-- ========================================== Start News Letter Popup Area =========================================== --}}
    {{-- =================================================================================================================== --}}
    {{-- <div class="newletter-popup">
        <div id="boxes" class="newletter-container">
            <div id="dialog" class="window">
                <div id="popup2">
                    <span class="b-close"><span>close</span></span>
                </div>
                <div class="box">
                    <div class="newletter-title">
                        <h2>Sign up For Send Newsletter?</h2>
                    </div>
                    <div class="box-content newleter-content">
                        <label class="newletter-label">Enter your email address to subscribe our notification of our
                            new post &amp; features by email.</label>
                        <div id="frm_subscribe">
                            <form name="subscribe" id="subscribe_popup">
                                <!-- <span class="required">*</span><span>Enter you email address here...</span>-->
                                <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail"
                                    placeholder="Enter you email address here...">
                                <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                                <div id="notification"></div>
                                <a class="theme-btn-outlined"
                                    onclick="email_subscribepopup()"><span>Subscribe</span></a>
                            </form>
                            <div class="subscribe-bottom">
                                <input type="checkbox" id="newsletter_popup_dont_show_again">
                                <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                            </div>
                        </div>
                        <!-- /#frm_subscribe -->
                    </div>
                    <!-- /.box-content -->
                </div>
            </div>

        </div>
        <!-- /.box -->
    </div> --}}
    {{-- =================================================================================================================== --}}
    {{-- ============================================ End News Letter Popup Area =========================================== --}}
    {{-- =================================================================================================================== --}}


    {{-- =================================================================================================================== --}}
    {{-- ================================================== Start JS Area ================================================== --}}
    {{-- =================================================================================================================== --}}
    <script src="{{ asset('front_end_style/assets/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('front_end_style/assets/js/main.js') }}"></script>
    {{-- <script src="{{ asset('front_end_style/assets/js/bootstrap.min.js') }}"></script> --}}

    {{-- ========================================================== --}}
    {{-- =============== Social Media Share Section =============== --}}
    {{-- ========================================================== --}}
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-606aaa29219f1def"></script>
    {{-- ========================================================== --}}
    {{-- =============== Social Media Share Section =============== --}}

    <script src="{{ asset('js/custom.js') }}"></script>

    {{-- =================================================================================================================== --}}
    {{-- =================================================== End JS Area =================================================== --}}
    {{-- =================================================================================================================== --}}
</body>

</html>
