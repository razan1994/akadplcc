@if (session()->has('login_error'))
<script>
    swal("Oops !!!", "{!! Session::get('login_error') !!}", "error", {
        button: "Close",
    });

</script>
@endif

<div class="header">
    <div class="c_top_header">
        <div class="container_1200">
            <div class="c_menus_top">

                <ul class="c_social">
                    <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <ul class="c_one">
                    @if(Auth::guard('student')->check())
                        <li><a href="{{ route('student.student-profile') }}">الملف الشخصي</a></li>
                    @else
                        <li><a href="#" data-toggle="modal" data-target="#loginn">تسجيل جديد </a></li>
                        <li><a href="#" data-toggle="modal" data-target="#loginn">تسجيل الدخول</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="c_main_header">
        <div class="container_1200">
            <nav class="navbar navbar-expand-lg navbar-light">

                {{-- =========================== Logo Section ======================== --}}
                <div class="logo col-md-3 col-xs-12">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('front_end_style/images/logo.png') }}">
                    </a>
                </div>


                {{-- ====================== Toggle Button Section ==================== --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- ========================== Menu Section ========================= --}}
                <div class="c_main_menu collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome') }}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutUs') }}">عن الموقع</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('courses') }}">الدورات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">الجهات المعتمدة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news') }}"> الأخبار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactUs') }}">اتصل بنا</a>
                        </li>
                    </ul>
                </div>

                {{-- ========================== Right Menu ========================= --}}
                <div class="c_search">
                    <form action="" enctype="multipart/form-data" class="form-inline c_serch my-2 my-lg-0">
                        @csrf
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <input class="form-control" type="search" name="search_text" value="" placeholder="ابحث في المنصة" aria-label="Search">

                    </form>
                </div>

            </nav>
        </div>

    </div>


    {{-- login popup  --}}
    <div class="c_login_modal">
        <!-- Modal -->
        <div class="c-m-blocks modal fade" id="loginn" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="quieq_tap" id="quieq_tap">
                            <ul class="nav nav-tabs menu_contact" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab"
                                        href="#loginf" role="tab" aria-controls="home" aria-selected="true">
                                        تسجيل الدخول
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#regiesterf"
                                        role="tab" aria-controls="home" aria-selected="true">
                                        تسجيل حساب
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content" id="myTabContent">
                            <div role="tabpanel" class="tab-pane active show" id="loginf">
                                <form action="{{ route('student.login') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-12" >
                                            <label>البريد الالكتروني او رقم الهاتف</label>
                                            <input class="form-control" name="email" type="text" placeholder="">
                                            @if(session()->has('login_error'))
                                               <span class="text-danger"> {{ Session::get('login_error') }} </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>كلمة المرور</label>
                                            <input class="form-control" name="password" type="password" placeholder="">
                                            @if(session()->has('login_error'))
                                               <span class="text-danger"> {{ Session::get('login_error') }} </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                                <label class="custom-control-label" for="newaccount">تذكرني</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('social-auth' , 'facebook') }}" style="background: #1877f2;padding: 2%;"
                                            class="btn btn-icon btn-facebook">
                                            <span class="fab fa-facebook" style="color: #ffff"></span> الدخول عبر الفيسبوك
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                            <a href="{{ route('social-auth' , 'google') }}" style="background: #ea4537;padding: 2%;"
                                                class="btn btn-icon btn-google">
                                                <span class="fab fa-google" style="color: #ffff"></span> الدخول عبر جوجل
                                            </a>

                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="btn btn-lg btn-primary c_butnns">تسجيل الدخول</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="regiesterf">
                                <form method="POST" action="{{ route('student.register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>الاسم الاول <span class="text-danger">* @error('first_name') {{ $message }} @enderror</span></label>
                                            <input class="form-control" name="first_name" type="text" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>الاسم الثاني <span class="text-danger"> @error('mid_first_name') {{ $message }} @enderror</span></label>
                                            <input class="form-control" name="mid_first_name" type="text" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>الاسم الثالث <span class="text-danger"> @error('mid_last_name') {{ $message }} @enderror</span></label>
                                            <input class="form-control" name="mid_last_name" type="text" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>الاسم الرابع <span class="text-danger">* @error('last_name') {{ $message }} @enderror</span></label>
                                            <input class="form-control" name="last_name" type="text" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>اسم المستخدم <span class="text-danger">* @error('username') {{ $message }} @enderror</span></label>
                                            <input class="form-control" name="username" type="text" placeholder="">
                                        </div>

                                        <div class="form-group col-md-12" >
                                            <label>البريد الالكتروني <span class="text-danger">* @error('email') {{ $message }} @enderror</span></label>
                                            <input class="form-control" name="email" type="mail" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>رقم الهاتف <span class="text-danger">* @error('phone') {{ $message }} @enderror</span></label>
                                            <input class="form-control" name="phone" type="text" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>كلمة المرور <span class="text-danger">* @error('password') {{ $message }} @enderror</span></label>
                                            <input class="form-control" name="password" type="password" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label> اعادة كلمة المرور <span class="text-danger">* @error('password') {{ $message }} @enderror</span></label>
                                            <input class="form-control" name="password_confirmation" type="password" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="btn btn-lg btn-primary c_butnns">تسجيل حساب</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
    </div>

</div>
