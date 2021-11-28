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
                            <li><a href="{{ route('welcome') }}">@lang('front_end.home')</a></li>
                            <li><a href="{{ route('customer.loginRegister') }}">@lang('front_end.login_register')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>@lang('front_end.login')</h2>
                        <form action="{{ route('customer.login') }}" method="POST">
                            @csrf
                            <p>
                                <label>@lang('front_end.email') : <strong class="text-danger"> * @error('email_login') ( {{ $message }} ) @enderror</strong></label>
                                <input type="text" name="email_login">
                             </p>
                             <p>
                                <label>@lang('front_end.password') : <strong class="text-danger"> * @error('password_login') ( {{ $message }} ) @enderror</strong></label>
                                <input type="password" name="password_login">
                             </p>
                            <div class="login_submit">
                               {{-- <a href="#">Lost your password?</a> --}}
                                <label for="remember">
                                    {{-- <input id="remember" type="checkbox"> --}}
                                    {{-- @lang('front_end.remember_me') --}}
                                </label>
                                <button type="submit">@lang('front_end.login')</button>

                            </div>
                        </form>
                     </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>@lang('front_end.register')</h2>
                        <form action="{{ route('customer.register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p>
                                <label>@lang('front_end.name_ar') : <strong class="text-danger"> * @error('name_ar') ( {{ $message }} ) @enderror</strong></label>
                                <input type="text" name="name_ar">
                            </p>
                            <p>
                                <label>@lang('front_end.name_en') : <strong class="text-danger"> * @error('name_en') ( {{ $message }} ) @enderror</strong></label>
                                <input type="text" name="name_en">
                            </p>
                            <p>
                                <label>@lang('front_end.user_name') : <strong class="text-danger"> * @error('username') ( {{ $message }} ) @enderror</strong></label>
                                <input type="text" name="username">
                            </p>
                            <p>
                                <label>@lang('front_end.email') : <strong class="text-danger"> * @error('email') ( {{ $message }} ) @enderror</strong></label>
                                <input type="text" name="email">
                            </p>
                            <p>
                                <label>@lang('front_end.phone') : <strong class="text-danger"> * @error('phone') ( {{ $message }} ) @enderror</strong></label>
                                <input type="text" name="phone">
                            </p>
                            <p>
                                <label>@lang('front_end.password') : <strong class="text-danger"> * @error('password') ( {{ $message }} ) @enderror</strong></label>
                                <input type="password" name="password">
                            </p>
                            <p>
                                <label>@lang('front_end.confirm_password') : <strong class="text-danger"> * @error('password_confirmation') ( {{ $message }} ) @enderror</strong></label>
                                <input type="password" name="password_confirmation">
                            </p>
                            <p>
                                <label>@lang('front_end.profile_image') : <strong class="text-danger"> @error('profile_photo_path') ( {{ $message }} ) @enderror</strong></label>
                                <input type="file" name="profile_photo_path">
                            </p>
                            <div class="login_submit">
                                <button type="submit">@lang('front_end.register')</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
@endsection
