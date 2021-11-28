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
                            <li><a href="{{ Auth::check() ? route('cartAuth') :  route('cart') }}">@lang('front_end.cart_page')</a></li>
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
                            <form action="{{ Auth::check() ? route('updateCartQuantityAuth') :  route('updateCartQuantity') }}" method="GET">
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
                                                <th class="product_remove">@lang('front_end.delete')</th>
                                                <th class="product_thumb">@lang('front_end.image')</th>
                                                <th class="product_name">@lang('front_end.product')</th>
                                                <th class="product_quantity">@lang('front_end.quantity')</th>
                                                <th class="product-price">@lang('front_end.unit_price')</th>
                                                <th class="product-price">@lang('front_end.sub_total')</th>
                                                <th class="product_total">@lang('front_end.total')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($public_customer_carts) && $public_customer_carts->count())
                                                @foreach ($public_customer_carts as $public_customer_cart)
                                                    <input type="hidden" name="product_ids[]" value="{{ isset($public_customer_cart->product_id) ? $public_customer_cart->product_id : 0 }}">
                                                    <tr>
                                                        <td class="product_remove"><a class="confirm" href="{{ Auth::check() ? route('deleteFromCartAuth', $public_customer_cart->id) :  route('deleteFromCart', $public_customer_cart->id) }}"><i class="fa fa-trash"></i></a></td>
                                                        <td class="product_thumb">
                                                            <a href="{{ Auth::check() ? route('productDetailsAuth', $public_customer_cart->product_id) :  route('productDetails', $public_customer_cart->product_id) }}">
                                                                @if (isset($public_customer_cart->product->image) && $public_customer_cart->product->image && file_exists($public_customer_cart->product->image))
                                                                    <img src="{{ asset($public_customer_cart->product->image) }}" alt="" width="90">
                                                                @else
                                                                    <img src="{{ asset('front_end_style/assets/img/s-product/product.jpg') }}" alt="">
                                                                @endif
                                                            </a>
                                                        </td>
                                                        <td class="product_name">
                                                            @if (Config::get('app.locale') == 'en')
                                                                <a href="{{ Auth::check() ? route('productDetailsAuth', $public_customer_cart->product_id) :  route('productDetails', $public_customer_cart->product_id) }}">{!! isset($public_customer_cart->product->name_en) ? $public_customer_cart->product->name_en : '<span style="color: red;">Undefined</span>' !!}</a>
                                                            @else
                                                                <a href="{{ Auth::check() ? route('productDetailsAuth', $public_customer_cart->product_id) :  route('productDetails', $public_customer_cart->product_id) }}">{!! isset($public_customer_cart->product->name_ar) ? $public_customer_cart->product->name_ar : '<span style="color: red;">Undefined</span>' !!}</a>
                                                            @endif
                                                        </td>
                                                        <td class="product_quantity">
                                                            <label>@lang('front_end.quantity')</label>
                                                            <input min="1" max="100" value="{{ isset($public_customer_cart->quantity) ? $public_customer_cart->quantity : 0 }}" type="number" name="quantity[]">
                                                        </td>
                                                        @if ($public_customer_cart->product->on_sale_price_status == 'Active')
                                                            <td class="product-price">{!! isset($public_customer_cart->product->on_sale_price) ? $public_customer_cart->product->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</td>
                                                            <td class="product_total">{!! isset($public_customer_cart->quantity) && isset($public_customer_cart->product->on_sale_price) ? $public_customer_cart->quantity * $public_customer_cart->product->on_sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</td>
                                                            <td class="product_total">{!! isset($public_customer_cart->quantity) && isset($public_customer_cart->product->on_sale_price) ? $public_customer_cart->quantity * $public_customer_cart->product->on_sale_price + (($public_customer_cart->quantity * $public_customer_cart->product->on_sale_price) * 15) / 100 . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</td>
                                                        @else
                                                            <td class="product-price">{!! isset($public_customer_cart->product->sale_price) ? $public_customer_cart->product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</td>
                                                            <td class="product_total">{!! isset($public_customer_cart->quantity) && isset($public_customer_cart->product->sale_price) ? $public_customer_cart->quantity * $public_customer_cart->product->sale_price . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</td>
                                                            <td class="product_total">{!! isset($public_customer_cart->quantity) && isset($public_customer_cart->product->sale_price) ? $public_customer_cart->quantity * $public_customer_cart->product->sale_price + (($public_customer_cart->quantity * $public_customer_cart->product->sale_price) * 15) / 100 . '<small> SAR</small>' : '<span style="color: red;">Undefined</span>' !!}</td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart_submit">
                                    <button type="submit">@lang('front_end.update_cart')</button>
                                </div>
                            </form>
                        </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        {{-- =========================================================================== --}}
                        {{-- ============================ Promo Code Section =========================== --}}
                        {{-- =========================================================================== --}}
                        <div class="col-lg-12 col-md-6">
                            <div class="coupon_code left">
                                <h3>@lang('front_end.copoun')</h3>
                                @if (isset($usedPromoCode))
                                    <div class="coupon_inner">
                                        @if (isset($usedPromoCode->promoCode->promo_value))
                                            @if ($usedPromoCode->promoCode->promo_type == 'Percentage')
                                                <h4>@lang('front_end.greate_copoun') <strong style="color: green;"> {{ number_format($usedPromoCode->promoCode->promo_value, 0) }} %</strong> discount coupon that will be used</h4>
                                            @else
                                                <h4>@lang('front_end.greate_copoun') <strong style="color: green;"> {{ $usedPromoCode->promoCode->promo_value }} SAR</strong>@lang('front_end.discount_coupon_that_will_be_used')</h4>
                                            @endif
                                        @else
                                            <span style="color: red;">@lang('front_end.undefined')</span>
                                        @endif
                                    </div>
                                @else
                                    <form action="{{ route('applyPromoCode') }}" method="POST">
                                        @csrf
                                        <div class="coupon_inner">
                                            <p>@lang('front_end.enter_copoun')</p>
                                            <input placeholder="@lang('front_end.coupon_code')" type="text" name="promo_code">
                                            <button type="submit">@lang('front_end.apply_copoun')</button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
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
                                   <div class="checkout_btn">
                                       @if (isset($orderDetails->product_id))
                                            <a href="{{ Auth::check() ? route('checkoutAuth', $orderDetails->product_id) :  route('checkout', $orderDetails->product_id) }}">Proceed to Checkout</a>
                                       @endif
                                   </div>
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
                                       <p class="cart_amount">{{ isset($public_customer_carts->endTotal) ? $public_customer_carts->endTotal : 0 }} <small> @lang('front_end.sar')</small></p>
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
                                    <div class="cart_subtotal">
                                       <p>@lang('front_end.discount') :</p>
                                        @if (isset($usedPromoCode->promoCode->promo_value))
                                            @if ($usedPromoCode->promoCode->promo_type == 'Percentage')
                                                <p class="cart_amount"> {!! number_format($usedPromoCode->promoCode->promo_value, 0) !!} <small> %</small></p>
                                            @else
                                                <p class="cart_amount"> {!! $usedPromoCode->promoCode->promo_value !!} <small>@lang('front_end.sar')</small></p>
                                            @endif
                                        @else
                                            <span>0</span>
                                        @endif
                                    </div>
                                   <div class="cart_subtotal">
                                        <p>@lang('front_end.total') :</p>
                                        @if (isset($usedPromoCode->promoCode->promo_type) && isset($usedPromoCode->promoCode->promo_value))
                                            @if ($usedPromoCode->promoCode->promo_type == 'Percentage')
                                                <p class="cart_amount">{{ isset($public_customer_carts->endTotal) ? ($public_customer_carts->endTotal + ($public_customer_carts->endTotal * 15) / 100) - (($public_customer_carts->endTotal + ($public_customer_carts->endTotal * 15) / 100) * $usedPromoCode->promoCode->promo_value) / 100 + 25 : 0 }} <small> @lang('front_end.sar')</small></p>
                                            @else
                                                <p class="cart_amount">{{ isset($public_customer_carts->endTotal) ? ($public_customer_carts->endTotal + ($public_customer_carts->endTotal * 15) / 100) - $usedPromoCode->promoCode->promo_value + 25 : 0 }} <small> @lang('front_end.sar')</small></p>
                                            @endif
                                        @else
                                            <p class="cart_amount">{{ isset($public_customer_carts->endTotal) ? $public_customer_carts->endTotal + ($public_customer_carts->endTotal * 15) / 100 + 25 : 0 }} <small> @lang('front_end.sar')</small></p>
                                        @endif
                                   </div>
                                   <div class="checkout_btn">
                                       @if (isset($public_customer_cart->product_id))
                                       <a href="" id="before_checkout_btn" title="Review Product" data-toggle="modal" data-target="#before_checkout">@lang('front_end.proceed_to_checkout')</a>
                                            {{-- <a href="{{ Auth::check() ? route('checkoutAuth', $public_customer_cart->product_id) :  route('checkout', $public_customer_cart->product_id) }}">Proceed to Checkout</a> --}}
                                       @endif
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->

        </div>
    </div>
    <!--shopping cart area end -->

    {{-- Added By : Mohammed Salah --}}

    {{-- add shipping location modal --}}
    @if (isset($public_customer_cart->product_id))
    <div class="c_reviess_modal">
        <div class="modal fade" id="before_checkout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content" style="text-align: center;font-size: 12pt;font-weight: 900">

                    <div class="modal-header">
                        <h5 class="modal-title">@lang('front_end.add_shipping_address') :</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form id="modal_location_form" action="{{ Auth::check() ? route('checkoutAuth', $public_customer_cart->product_id) :  route('checkout', $public_customer_cart->product_id) }}"  method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="product_id" value="#">
                                    <input type="hidden" id="check_value" name="check_value" @if(!isset(auth()->user()->locations) || auth()->user()->locations->count() == 0) value="2" @else value="1" @endif>
                                <ul class="nav nav-tabs" id="adress_tab_modal" role="tablist">
                                    @if(isset(auth()->user()->locations) && auth()->user()->locations->count() > 0)
                                    <li class="nav-item">
                                    <a class="nav-link active" id="addresses_selector" data-toggle="tab" href="#addresses" role="tab" aria-controls="home" aria-selected="true">@lang('front_end.select_address')</a>
                                    </li>
                                    @endif
                                    <li class="nav-item">
                                    <a class="nav-link @if(!isset(auth()->user()->locations) || auth()->user()->locations->count() == 0) active @endif" id="add_location_selector" data-toggle="tab" href="#add_location_tab" role="tab" aria-controls="profile" @if(!isset(auth()->user()->locations) || auth()->user()->locations->count() == 0) aria-selected="true" @endif>@lang('front_end.add_address')</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    @if(isset(auth()->user()->locations) && auth()->user()->locations->count() > 0)
                                    <div class="tab-pane fade show active" id="addresses" role="tabpanel" aria-labelledby="home-tab">

                                        {{-- <style>
                                            input:checked + label {
                                            background-color:#23b1a5;
                                            color: #fff;
                                            width: 100% !important;
                                            box-shadow: $activeShadow;
                                            border-color: $teal2;
                                            z-index: 1;
                                        }
                                        .rd-btn:hover{
                                            width: 100% !important;
                                        }
                                        .tab-content > .tab-pane.active{
                                            margin-top: 2%;
                                        }
                                        </style> --}}
                                        @foreach (auth()->user()->locations as $key => $location)
                                            <div class="col-md-10" style="text-align: left; max-width: 100% !important;">
                                                <input type="radio" class="btn-check" name="location_id" id="success-outlined{{ $location->id }}" value="{{ $location->id }}" autocomplete="off" style="display: none">
                                                <label class="btn btn-outline-primary rd-btn" for="success-outlined{{ $location->id }}" style="font-weight: 900;width: 75%; text-align:left;">
                                                    @lang('front_end.country') : {{ $location->country }}
                                                    <br>
                                                    @lang('front_end.city') : {{ $location->city }}
                                                    <br>
                                                    @lang('front_end.city') : {{ $location->retail }}
                                                    <br>
                                                    @lang('front_end.retail') : {{ $location->address_2 }}
                                                    <br>
                                                    @lang('front_end.phone') : {{ $location->phone }}
                                                    <br>
                                                    @lang('front_end.extra_phone') : {{ $location->phone_extra }}
                                                </label>
                                            </div>
                                        @endforeach

                                    </div>
                                    @endif

                                    <div class="tab-pane fade @if(!isset(auth()->user()->locations) || auth()->user()->locations->count() == 0) show active @endif" id="add_location_tab" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="col-md-10">
                                            <label for="validationServer01">
                                                @lang('front_end.shipping_country') : <strong class="text-danger"> * @error('shipping_country') ( {{ $message }} ) @enderror</strong>
                                            </label>
                                            <div class="input-group">

                                                <select name="shipping_country" id="shipping_country" style="margin-bottom: 2%;" class="form-control @error('shipping_country') is-invalid @enderror">
                                                    <option value="-1">@lang('front_end.country') ...</option>
                                                    <option value="KSA" selected>@lang('front_end.ksa')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <label for="validationServer01">
                                                @lang('front_end.shipping_city') : <strong class="text-danger"> * @error('shipping_city') ( {{ $message }} ) @enderror</strong>
                                            </label>
                                            <div class="input-group">

                                                <select id="shiping_city" name="shipping_city" style="margin-bottom: 2%;" class="form-control @error('shipping_city') is-invalid @enderror">
                                                    <option value="-1">@lang('front_end.city') ...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <label for="validationServer01">
                                                @lang('front_end.shipping_retail') : <strong class="text-danger"> * @error('shipping_retail') ( {{ $message }} ) @enderror</strong>
                                            </label>
                                            <div class="input-group">

                                                <select id="shiping_retails" name="shipping_retail" style="margin-bottom: 2%;" class="form-control @error('shipping_retail') is-invalid @enderror">
                                                    <option value="-1">@lang('front_end.retail') ...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <label for="">
                                                @lang('front_end.shipping_address') : <strong class="text-danger"> * @error('shipping_address') ( {{ $message }} ) @enderror</strong>
                                            </label>
                                            <div class="input-group">
                                                    <textarea placeholder="@lang('front_end.shipping_address')" id="shipping_address" style="margin-bottom: 2%;" name="shipping_address" class="form-control" >{{ old('shipping_address') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <label for="">
                                                @lang('front_end.phone_number') : <strong class="text-danger"> * @error('shipping_phone') ( {{ $message }} ) @enderror</strong>
                                            </label>
                                            <div class="input-group">
                                                <input placeholder="@lang('front_end.phone_number')" id="shiping_phone" name="shipping_phone" style="margin-bottom: 2%;" class="form-control" value="{{ old('shipping_phone') }}"/>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <label for="">
                                                @lang('front_end.extra_phone_number') : <strong class="text-danger"> @error('phone_extra') ( {{ $message }} ) @enderror</strong>
                                            </label>
                                            <div class="input-group">
                                                <input placeholder="@lang('front_end.extra_phone_number')" id="phone_extra" name="phone_extra" style="margin-bottom: 2%;" class="form-control" value="{{ old('phone_extra') }}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer modal_add_to_cart">
                                    <a id="checkOut_modal" class="c_submit btn btn-primary">@lang('front_end.proceed_to_checkout')</a>
                                </div>
                            </form>

                        </div>

                </div>
            </div>
        </div>
    </div>
    @endif
    {{-- add shipping location modal --}}

    {{-- Jquery CDN --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- End CDN --}}

    {{-- Start Of Script --}}
    <script>

        $(document).ready(function(){


            cities_arr = [];
            retails_arr = [];

        $("#before_checkout_btn").on('click',function(){


            $.get("{{ route('get_shipping_cities') }}", function(data) {

                if(data.status == true){
                    $("#shiping_city").html('');
                    html = '<option value="-1">@lang("front_end.city") ...</option>';
                    for (let index = 0; index < data.cities.length; index++) {

                        cities_arr.push(data.cities[index]['routCode']);

                        html +='<option value="'+data.cities[index]['routCode']+'">'+data.cities[index]['rCity']+'</option>';
                    }
                    $("#shiping_city").html(html);
                }
            });

        });



        $("#shiping_city").on('change',function(){

            city =  $("#shiping_city").val();

            $.ajax({
                url: "{{ route('get_city_retails') }}",
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    city: city,
                },
                success: function(data) {
                    if (data['status'] == true) {
                        $("#shiping_retails").html('');
                        html_second = '<option value="-1">@lang("front_end.retail") ...</option>';
                        for (let key = 0; key < data.retails.length; key++) {

                            retails_arr.push(data.retails[key]['rAddrAr']);

                            html_second +='<option value="'+data.retails[key]['rAddrAr']+'">'+data.retails[key]['rAddrAr']+'</option>';
                        }
                        $("#shiping_retails").html(html_second);

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: '@lang("front_end.ops")...',
                            text: "عذرًا ، حدث خطأ ما !!",
                            width: 400,
                        })
                        // alert('عذرًا ، حدث خطأ ما !!');
                    }
                },
                error: function(data) {
                    alert(data.responseText);
                }
            });

        });




            $(document).on("submit","#modal_location_form",function(e){
                e.preventDefault();
            });


            $("#checkOut_modal").on('click',function(){

                check = $("#check_value").val();
                tab = $('#adress_tab_modal').find('.active').attr('id')

                if(tab == "addresses_selector"){

                    radio = $('input[name=location_id]:checked').val();
                    if(radio == undefined || radio == null || radio == ""){
                        swal("@lang('front_end.ops') !!!", "@lang('front_end.select_address_error')", "error", {
                            button: "Close",
                        });
                    }
                    else{
                        if(check != null || check != "" || check != undefined){

                            $("#modal_location_form").get(0).submit();
                            // document.getElementById("modal_location_form").submit();

                        }
                    }
                }

                else if(tab == "add_location_selector"){

                    country = $("#shipping_country").val();
                    city = $("#shiping_city").val();
                    retails = $("#shiping_retails").val();
                    address = $("#shipping_address").val();
                    phone = $("#shiping_phone").val();




                    if(country == "-1" || country == undefined){
                        swal("@lang('front_end.ops') !!!", "@lang('front_end.select_country_error')", "error", {
                            button: "Close",
                        });
                    }
                    else if(city == "-1" || city == undefined){
                        swal("@lang('front_end.ops') !!!", "@lang('front_end.select_city_error')", "error", {
                            button: "Close",
                        });
                    }
                    else if(retails == "-1" || retails == undefined){
                        swal("@lang('front_end.ops') !!!", "@lang('front_end.select_retail_error')", "error", {
                            button: "Close",
                        });
                    }

                    else if(!jQuery.inArray(country, cities_arr)){
                        swal("@lang('front_end.ops') !!!", "@lang('front_end.select_city_error')", "error", {
                            button: "Close",
                        });
                    }
                    else if(!jQuery.inArray(retails, retails_arr)){
                        swal("@lang('front_end.ops') !!!", "@lang('front_end.select_retail_error')", "error", {
                            button: "Close",
                        });
                    }


                    else if(address == "" || address == undefined){
                        swal("@lang('front_end.ops') !!!", "@lang('front_end.add_address_error')", "error", {
                            button: "Close",
                        });
                    }
                    else if(phone == "" || phone == undefined){
                        swal("@lang('front_end.ops') !!!", "@lang('front_end.add_phone_error')", "error", {
                            button: "Close",
                        });
                    }
                    else{

                        if(check != null || check != "" || check != undefined){

                            $("#modal_location_form").get(0).submit();
                            // document.getElementById("modal_location_form").submit();
                        }
                    }

                }

            });



            $("#addresses_selector").on('click',function(){
                $("#check_value").val(1);
            });

            $("#add_location_selector").on('click',function(){
                $("#check_value").val(2);
            });


        });

    </script>
    {{-- By : Mohammed Salah --}}

@endsection
