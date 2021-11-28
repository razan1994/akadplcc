@extends('front_end_inners.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')

    {{-- =========================================================== --}}
    {{-- ================== Sweet Alert Section ==================== --}}
    {{-- =========================================================== --}}
    <div id="alert_div">
        @if (session()->has('success'))
            <script>
                swal("Great Job !!!", "{!! Session::get('success') !!}", "success", {
                    button: "OK",
                });
            </script>
        @endif
        @if (session()->has('danger'))
            <script>
                swal("Oops !!!", "{!! Session::get('danger') !!}", "error", {
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
                            <li><a href="{{ route('welcome') }}">home</a></li>
                            <li><a href="{{ route('customer.loginRegister') }}">login/register</a></li>
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
                <div class="col-lg-12 col-md-6">
                    <div class="account_form">
                        <h2>Super Admin login :</h2>
                        <form method="POST" action="{{ route('super_admin.login.submit') }}">
                            @csrf
                            <p>
                                <label>Email : <strong class="text-danger"> * @error('email') ( {{ $message }} ) @enderror</strong></label>
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />
                            </p>

                            <p class="mt-4">
                                <label>Password : <strong class="text-danger"> * @error('password') ( {{ $message }} ) @enderror</strong></label>
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />
                            </p>


                            
                            {{-- <p>
                                <label>Email : <strong class="text-danger"> * @error('email_login') ( {{ $message }} ) @enderror</strong></label>
                                <input type="text" name="email_login">
                             </p>
                             <p>   
                                <label>Password : <strong class="text-danger"> * @error('password_login') ( {{ $message }} ) @enderror</strong></label>
                                <input type="password" name="password_login">
                             </p> --}}
                            <div class="login_submit">
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">login</button>
                                
                            </div>
                        </form>
                     </div>    
                </div>
                <!--login area start-->
            </div>
        </div>    
    </div>
    <!-- customer login end -->


</body>




@endsection
