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
                            <li><a href="{{ Auth::check() ? route('categoriesAuth') :  route('categories') }}">@lang('front_end.our_categories')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--services img area-->
    <div class="services_gallery mt-60">
        <div class="container">
            <div class="row">
                @if (isset($public_categories))
                    @foreach ($public_categories as $public_category)
                        <div class="col-lg-4 col-md-6">
                            <div class="single_services">
                                <div class="services_thumb">
                                    @if (isset($public_category->image) && $public_category->image && file_exists($public_category->image))
                                        <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}"><img src="{{ asset($public_category->image) }}" alt=""></a>
                                    @else
                                        <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}"><img src="{{ asset('front_end_style/assets/img/product/product25.jpg') }}" alt=""></a>
                                    @endif
                                </div>
                                <div class="services_content">
                                    @if (Config::get('app.locale') == 'en')
                                        <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}"><h3>{!! isset($public_category->name_en) ? $public_category->name_en : '<span style="color: red;">Undefined</span>' !!} ( <span style="color: #23b1a5;">{!! isset($public_category->products) ? $public_category->products->count() : 0 !!}</span> )</h3></a>
                                        <p>{!! isset($public_category->description_en) ? \Illuminate\Support\Str::limit($public_category->description_en, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                    @else
                                        <a href="{{ Auth::check() ? route('productsAuth' , ['category_id' => $public_category->id]) : route('products', ['category_id' => $public_category->id]) }}"><h3>{!! isset($public_category->name_ar) ? $public_category->name_ar : '<span style="color: red;">Undefined</span>' !!} ( <span style="color: #23b1a5;">{!! isset($public_category->products) ? $public_category->products->count() : 0 !!}</span> )</h3></a>
                                        <p>{!! isset($public_category->description_ar) ? \Illuminate\Support\Str::limit($public_category->description_ar, 250, $end='...') : '<span style="color: red;">Undefined</span>' !!}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-4 col-md-6">
                        <div class="single_services">
                            <div class="services_thumb">
                                <img src="{{ asset('front_end_style/assets/img/product/product25.jpg') }}" alt="">
                            </div>
                            <div class="services_content">
                                <h3>@lang('front_end.category_name')</h3>
                                <p>@lang('front_end.category_description')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_services">
                            <div class="services_thumb">
                                <img src="{{ asset('front_end_style/assets/img/product/product25.jpg') }}" alt="">
                            </div>
                            <div class="services_content">
                                <h3>@lang('front_end.category_name')</h3>
                                <p>@lang('front_end.category_description')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_services">
                            <div class="services_thumb">
                                <img src="{{ asset('front_end_style/assets/img/product/product25.jpg') }}" alt="">
                            </div>
                            <div class="services_content">
                                <h3>@lang('front_end.category_name')</h3>
                                <p>@lang('front_end.category_description')</p>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
     <!--services img end-->

@endsection
