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

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ Auth::check() ? route('welcomeAuth') :  route('welcome') }}">@lang('front_end.home')</a></li>
                            <li><a href="{{ Auth::check() ? route('showOrderDetailsAuth', $cartSale->id) :  route('showOrderDetails', $cartSale->id) }}">@lang('front_end.show_order_details')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                {{-- ============================================== --}}
                                {{-- ============= All Error Messages ============= --}}
                                {{-- ============================================== --}}
                                <div class="mt-3">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <h3>@lang('front_end.correct_errors') : </h3><hr>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>- {{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>

                                <table>
                                    <thead>
                                        <tr>
                                            {{-- <th class="product_remove">Delete</th> --}}
                                            <th class="product_thumb">@lang('front_end.image')</th>
                                            <th class="product_name">@lang('front_end.product')</th>
                                            <th class="product_quantity">@lang('front_end.quantity')</th>
                                            <th class="product-price">@lang('front_end.unit_price')</th>
                                            <th class="product_total">@lang('front_end.sub_total')</th>
                                            <th class="product_total">@lang('front_end.total')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($cartSale) && $cartSale->count())
                                            @foreach ($cartSale->cartOperations as $cartOperation)
                                                <tr>
                                                    {{-- <td class="product_remove"><a class="confirm" href="{{ Auth::check() ? route('deleteFromCartAuth', $cartOperation->id) :  route('deleteFromCart', $cartOperation->id) }}""><i class="fa fa-trash-o"></i></a></td> --}}
                                                    <td class="product_thumb">
                                                        <a href="{{ Auth::check() ? route('productDetailsAuth', $cartOperation->product_id) :  route('productDetails', $cartOperation->product_id) }}">
                                                            @if (isset($cartOperation->product->image) && $cartOperation->product->image && file_exists($cartOperation->product->image))
                                                                <img src="{{ asset($cartOperation->product->image) }}" alt="" width="90">
                                                            @else
                                                                <img src="{{ asset('front_end_style/assets/img/s-product/product.jpg') }}" alt="">
                                                            @endif
                                                        </a>
                                                    </td>
                                                    <td class="product_name">
                                                        @if (Config::get('app.locale') == 'en')
                                                            <a href="{{ Auth::check() ? route('productDetailsAuth', $cartOperation->product_id) :  route('productDetails', $cartOperation->product_id) }}">{!! isset($cartOperation->product->name_en) ? $cartOperation->product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @else
                                                            <a href="{{ Auth::check() ? route('productDetailsAuth', $cartOperation->product_id) :  route('productDetails', $cartOperation->product_id) }}">{!! isset($cartOperation->product->name_ar) ? $cartOperation->product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                        @endif
                                                    </td>
                                                    <td class="product_quantity">
                                                        <label>{{ isset($cartOperation->quantity) ? $cartOperation->quantity : 0 }}</label>
                                                    </td>
                                                    <td class="product-price">{!! isset($cartOperation->unit_price) ? $cartOperation->unit_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</td>
                                                    <td class="product_total">{!! isset($cartOperation->quantity) && isset($cartOperation->unit_price) ? $cartOperation->quantity * $cartOperation->unit_price . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</td>
                                                    <td class="product_total">{!! isset($cartOperation->quantity) && isset($cartOperation->unit_price) ? $cartOperation->quantity * $cartOperation->unit_price + (($cartOperation->quantity * $cartOperation->unit_price) * 15) / 100 . '<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        {{-- <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div> --}}

                        {{-- =========================================================================== --}}
                        {{-- ========================== Customer Details Section ======================= --}}
                        {{-- =========================================================================== --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>@lang('front_end.customer_details')</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>@lang('front_end.name') :</p>
                                        @if (Config::get('app.locale') == 'en')
                                            <p class="cart_amount">{!! isset(auth()->user()->name_en) ? auth()->user()->name_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                        @else
                                            <p class="cart_amount">{!! isset(auth()->user()->name_ar) ? auth()->user()->name_ar : '<span style="color: red;">Undefined</span>' !!}</p>
                                        @endif
                                   </div>
                                   <hr>
                                   <div class="cart_subtotal ">
                                       <p>@lang('front_end.email') :</p>
                                       <p class="cart_amount">{!! isset(auth()->user()->email) ? auth()->user()->email : '<span style="color: red;">Undefined</span>' !!}</p>
                                   </div>
                                   <div class="cart_subtotal">
                                       <p>@lang('front_end.phone') :</p>
                                       <p class="cart_amount">{!! isset(auth()->user()->phone) ? auth()->user()->phone : '<span style="color: red;">Undefined</span>' !!}</p>
                                   </div>
                                   {{-- <div class="cart_subtotal">
                                       <p>@lang('') :</p>
                                        @if (isset($cartSale->delivery_status))
                                            @if ($cartSale->delivery_status == 'Pendding')
                                                <p class="cart_amount" style="color:red">{!! $cartSale->delivery_status !!}</p>
                                            @elseif($cartSale->delivery_status == 'In Progress')
                                                <p class="cart_amount" style="color:rgba(182, 121, 7, 0.87)">{!! $cartSale->delivery_status !!}</p>
                                            @elseif($cartSale->delivery_status == 'Received')
                                                <p class="cart_amount" style="color:green">{!! $cartSale->delivery_status !!}</p>
                                            @endif
                                        @else
                                            <p class="cart_amount">------</p>
                                        @endif
                                   </div> --}}
                                    @if (isset($tracking) && $tracking->count() > 0)
                                        <div class="cart_subtotal">
                                            <p>@lang('front_end.shipping_status') :</p>
                                                    <p class="cart_amount">{{ $tracking['Activity'] }}</p>


                                        </div>
                                        <div class="cart_subtotal">
                                            <p>@lang('front_end.shipping_tracking_num') :</p>
                                                    <p class="cart_amount">{{ $tracking['awbNo'] }}</p>


                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- =========================================================================== --}}
                        {{-- ============================= Cart Totals Section ========================= --}}
                        {{-- =========================================================================== --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>@lang('front_end.cart_totals')</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>@lang('front_end.sub_total') :</p>
                                       <p class="cart_amount">{!! isset($cartSale->sub_total) ? $cartSale->sub_total .'<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</p>
                                   </div>
                                   <hr>
                                   <div class="cart_subtotal ">
                                       <p>@lang('front_end.tax') :</p>
                                       <p class="cart_amount"> 15 %</p>
                                   </div>
                                   <div class="cart_subtotal ">
                                        <p>@lang('front_end.delivery_fees') :</p>
                                        <p class="cart_amount"> 25 <small>@lang('front_end.sar')</small></p>
                                    </div>
                                   <div class="cart_subtotal ">
                                       <p>@lang('front_end.discount') :</p>
                                       <p class="cart_amount"> {!! isset($cartSale->discount) ? $cartSale->discount .'<small> '.trans('front_end.sar').'</small>' : 0 . '<small> SAR</small>' !!}</p>
                                   </div>
                                   <div class="cart_subtotal">
                                       <p>@lang('front_end.total') :</p>
                                       <p class="cart_amount">{!! isset($cartSale->total) ? $cartSale->total + 25 .'<small> '.trans('front_end.sar').'</small>' : '<span style="color: red;">Undefined</span>' !!}</p>
                                   </div>
                                   <div class="cart_subtotal">
                                        <p>@lang('front_end.payment_status') :</p>
                                        @if (isset($cartSale->payment_status))
                                            @if ($cartSale->payment_status == 'Pendding')
                                                <p class="cart_amount" style="color:rgba(182, 121, 7, 0.87);">{!! $cartSale->payment_status !!}</p>
                                            @elseif($cartSale->payment_status == 'Accepted')
                                                <p class="cart_amount" style="color:green;">{!! $cartSale->payment_status !!}</p>
                                            @elseif($cartSale->payment_status == 'Rejected')
                                                <p class="cart_amount" style="color:red;">{!! $cartSale->payment_status !!}</p>
                                            @endif
                                        @else
                                            <p class="cart_amount">------</p>
                                        @endif
                                   </div>
                                   @if (isset($cartSale->payment_status))
                                        @if ($cartSale->payment_status == 'Pendding')
                                            <div class="cart_subtotal">
                                                <p>@lang('front_end.to_pay_invoice') :</p>
                                                <p class="cart_amount" style="color:green;"><a href="{{ isset($cartSale->invoice_url) ? $cartSale->invoice_url : '#' }}" target="_blank">@lang('front_end.click_pay')</a></p>
                                            </div>
                                        @elseif($cartSale->payment_status == 'Accepted')
                                            <div class="cart_subtotal">
                                                <p>@lang('front_end.to_view_invoice') :</p>
                                                <p class="cart_amount" style="color:green;"><a href="{{ isset($cartSale->invoice_url) ? $cartSale->invoice_url : '#' }}" target="_blank">@lang('front_end.click_view')</a></p>
                                            </div>
                                        @endif
                                   @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->

        </div>
    </div>
    <!--shopping cart area end -->

@endsection
