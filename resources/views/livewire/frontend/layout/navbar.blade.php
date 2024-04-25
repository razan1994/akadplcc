<div>
    @if (session()->has('login_error'))
        <script>
            swal("Oops !!!", "{!! Session::get('login_error') !!}", "error", {
                button: "Close",
            });
        </script>
    @endif

    {{-- check for $errors --}}
    @if ($errors->any())
        <script>
            // Function to format errors as an unordered list
            function formatErrors(errors) {
                let html = '<ul style="text-align: right;">';
                errors.forEach(error => {
                    html += '<li>' + error + '</li>';
                });
                html += '</ul>';
                return html;
            }

            // Extract errors and format them
            let errors = {!! json_encode($errors->all()) !!};
            let errorHtml = formatErrors(errors);


            // Show SweetAlert with formatted errors
            swal({
                title: "حدث خطأ !!!",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: errorHtml
                    }
                },
                icon: "error",
                button: "إغلاق",
            });
        </script>
    @endif


    <div class="header hidePrint">
        <div class="c_top_header">
            <div class="container_1200">
                <div class="c_menus_top">

                    <ul class="c_social">
                        <li><a href="https://web.facebook.com/kanaffcom" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                        </li>
                        <li>
                            <a href=" https://www.instagram.com/kanaffcom" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/kanaffcom" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/%D9%83%D9%86%D9%81-%D8%A7%D9%84%D9%85%D8%B9%D8%B1%D9%81%D8%A9-810920235/"
                                target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCGjCh3T9mePQ5SDA1zSc1bA" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="c_one">
                        @if (Auth::guard('student')->check())
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
                        <a href="{{ route('welcome') }}" wire:navigate>
                            <img src="{{ asset('front_end_style/images/logo.png') }}" loading="lazy">
                        </a>
                    </div>


                    {{-- ====================== Toggle Button Section ==================== --}}
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    {{-- ========================== Menu Section ========================= --}}
                    <div class="text-center c_main_menu collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="px-2 nav-link" href="{{ route('welcome') }}" wire:navigate>الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="px-2 nav-link" href="{{ route('aboutUs') }}" wire:navigate>عن المنصة</a>
                            </li>
                            <li class="nav-item">
                                <a class="px-2 nav-link" href="{{ route('courses') }}" wire:navigate>الدورات</a>
                            </li>
                            @if (count($categories) > 0 && !empty($categories))
                                <li class="nav-item">
                                    <a class="px-2 nav-link" href="{{ route('news') }}" wire:navigate>
                                        المدونة
                                    </a>
                                    <div class="subMenu">
                                        <div class="row" style="gap: 25px; flex-wrap: wrap">
                                            @foreach ($categories as $category)
                                                <div class="col-2">
                                                    <span
                                                        class="gap-2 text-underline font-weight-bold d-flex align-items-center">
                                                        {{ $category->name }}
                                                    </span>
                                                    <ul>
                                                        @foreach ($category->activeChildrens as $subCategory)
                                                            <li>
                                                                <a href="{{ route('news', $subCategory->slug) }}"
                                                                    wire:navigate>
                                                                    {{ $subCategory->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="px-2 nav-link" href="{{ route('researches') }}" wire:navigate> المكتبة
                                    الرقمية</a>
                            </li>
                            <li class="nav-item">
                                <a class="px-2 nav-link" href="{{ route('contactUs') }}" wire:navigate>اتصل بنا</a>
                            </li>
                        </ul>
                    </div>

                    {{-- ========================== Right Menu ========================= --}}
                    <div class="c_search position-relative">
                        <form action="" enctype="multipart/form-data" class="my-2 form-inline c_serch my-lg-0">
                            @csrf
                            <button class="my-2 btn btn-outline-success my-sm-0" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <input class="form-control" type="search" placeholder="ابحث عن دورات"
                                wire:model.live='searchText'>
                            @if ($searchResult && $searchText != '')
                                <div class="position-absolute" id="searchResult">
                                    <ul class="list-group">
                                        @foreach ($searchResult as $result)
                                            <li class="list-group">
                                                <a href="{{ route('course-details', $result->slug) }}" wire:navigate
                                                    class="list-group-item list-group-item-action">
                                                    {{ $result->title_ar }} </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (count($searchResult) == 0 && $searchText != '')
                                <div class="position-absolute" id="searchResult">
                                    <ul class="list-group">
                                        <li class="list-group"
                                            style="background-color: #f8f9fa; color: #000; text-align: center; padding :10px">
                                            لا توجد نتائج
                                        </li>
                                    </ul>
                                </div>
                            @endif

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
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#loginf"
                                            role="tab" aria-controls="home" aria-selected="true">
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
                                            <div class="form-group col-md-12">
                                                <label>البريد الالكتروني او رقم الهاتف</label>
                                                <input class="form-control" name="email" type="text"
                                                    placeholder="">
                                                @if (session()->has('login_error'))
                                                    <span class="text-danger"> {{ Session::get('login_error') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>كلمة المرور</label>
                                                <input class="form-control" name="password" type="password"
                                                    placeholder="">
                                                @if (session()->has('login_error'))
                                                    <span class="text-danger"> {{ Session::get('login_error') }}
                                                    </span>
                                                @endif
                                            </div>
                                            {{-- <div class="col-md-12 d-flex justify-content-center">
                                            <a href="{{ route('social-auth', 'google') }}"
                                                style="background: #ea4537;padding: 2%;"
                                                class="btn btn-icon btn-google">
                                                <span class="fab fa-google" style="color: #ffff"></span> الدخول
                                                عبر
                                                جوجل
                                            </a>
                                        </div> --}}
                                            <div class="form-group col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="newaccount">
                                                    <label class="custom-control-label"
                                                        for="newaccount">تذكرني</label>
                                                </div>
                                            </div>
                                            <div class="pt-4 form-group col-md-12">
                                                <button class="btn btn-lg btn-primary c_butnns">تسجيل الدخول</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="regiesterf">
                                    <form method="POST" action="{{ route('student.register') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>الاسم الاول <span class="text-danger">* @error('first_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </label>
                                                <input class="form-control" name="first_name" type="text" required
                                                    value="{{ old('first_name') }}" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>الاسم الثاني <span class="text-danger"> @error('mid_first_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </label>
                                                <input class="form-control" name="mid_first_name" type="text"
                                                    value="{{ old('mid_first_name') }}" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>الاسم الثالث <span class="text-danger"> @error('mid_last_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </label>
                                                <input class="form-control" name="mid_last_name" type="text"
                                                    value="{{ old('mid_last_name') }}" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>الاسم الرابع <span class="text-danger">* @error('last_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </label>
                                                <input class="form-control" name="last_name" type="text" required
                                                    value="{{ old('last_name') }}" placeholder="">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>البريد الالكتروني <span class="text-danger">* @error('email')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </label>
                                                <input class="form-control" name="email" type="email"
                                                    value="{{ old('email') }}" placeholder="" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>رقم الهاتف <span class="text-danger">* @error('phone')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </label>
                                                <input class="form-control" name="phone" type="text" required
                                                    value="{{ old('phone') }}" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>رمز الإحالة <span class="text-danger"> @error('code')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </label>
                                                <input class="form-control" name="referral_code" type="text"
                                                    id="codeInput" value="{{ old('referral_code') }}"
                                                    placeholder="">
                                                <span class="text-danger">
                                                    <small id="codeValidationMessage">اذا كنت تملك رمز الإحالة يمكنك
                                                        ادخاله
                                                        هنا</small>
                                                </span>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>كلمة المرور <span class="text-danger">* @error('password')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </label>
                                                <input class="form-control" name="password" type="password" required
                                                    placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label> اعادة كلمة المرور <span class="text-danger">*
                                                        @error('password')
                                                            {{ $message }}
                                                        @enderror
                                                    </span></label>
                                                <input class="form-control" name="password_confirmation"
                                                    type="password" required placeholder="">
                                            </div>
                                            <ol style="font-size: 12px" class="text-info">
                                                <li>
                                                    كلمة المرور يجب ان تحتوي على حروف كبيرة وصغيرة وارقام
                                                </li>
                                                <li>
                                                    كلمة المرور يجب ان تكون اكثر من 8 حروف
                                                </li>
                                                <li>
                                                    كلمة المرور يجب ان تحتوي على رموز
                                                </li>
                                            </ol>
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

    @if (auth('student')->check() && !auth('student')->user()->email_verified_at)
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center justify-content-between"
            role="alert">
            <form action="{{ route('verification.send') }}" method="post"
                class="w-full d-flex justify-content-between align-items-center">
                @csrf
                <p class="m-0">
                    <strong>تنبيه !</strong> يجب عليك تفعيل البريد الالكتروني الخاص بك
                    <br>
                </p>

                <button>
                    إعادة ارسال رابط التفعيل
                </button>
            </form>
        </div>
    @endif

</div>
