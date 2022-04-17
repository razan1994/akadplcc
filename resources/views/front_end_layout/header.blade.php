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
                    <li><a href="#" data-toggle="modal" data-target="#loginn">تسجيل جديد </a></li>
                    <li><a href="#" data-toggle="modal" data-target="#loginn">تسجيل الدخول</a></li>
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
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-12" >
                                            <label>البريد الالكتروني او رقم الهاتف</label>
                                            <input class="form-control" name="email" type="text" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>كلمة المرور</label>
                                            <input class="form-control" name="password" type="password" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                                <label class="custom-control-label" for="newaccount">تذكرني</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="btn btn-lg btn-primary c_butnns">تسجيل الدخول</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="regiesterf">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>الاسم الرباعي</label>
                                            <input class="form-control" name="name" type="text" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>اسم المستخدم</label>
                                            <input class="form-control" name="username" type="text" placeholder="">
                                        </div>

                                        <div class="form-group col-md-12" >
                                            <label>البريد الالكتروني</label>
                                            <input class="form-control" name="mail" type="mail" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>رقم الهاتف </label>
                                            <input class="form-control" name="phone" type="text" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>كلمة المرور</label>
                                            <input class="form-control" name="password" type="password" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label> اعادة كلمة المرور </label>
                                            <input class="form-control" name="rpassword" type="password" placeholder="">
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
