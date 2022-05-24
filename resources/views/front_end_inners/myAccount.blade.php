@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')

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
    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="inner-top">

        <div class="c_title_top">
            <div class="container_1200">
                <div class="title_page">
                    <h1>الملف الشخصي</h1>
                </div>
            </div>
        </div>
        <div class="c-breadcrumps">
            <div class="container_1200">
            <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>الملف الشخصي</a></p>
            </div>
        </div>
    </div>

    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="c_page_profile c_inner_body">
        <div class="container_1200">
            <div class="c_mainContent">
                <div class="c-right">
                    <div class="quieq_tap">
                        <ul class="nav nav-tabs menu_contact" id="myTab" role="tablist">
                            <li class="nav-item c_logic">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#prof1" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    الصفحة الشخصية
                                </a>
                            </li>
                            <li class="nav-item c_logic">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#prof2" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    الابحاث
                                </a>
                            </li>
                            <li class="nav-item c_logic">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#prof3" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    شهاداتي
                                </a>
                            </li>
                            <li class="nav-item c_logic">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#prof4" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    السيرة الذاتية
                                </a>
                            </li>
                            <li class="nav-item c_logoutoic">
                                <a class="nav-link" id="home-tab" href="#" aria-controls="home" aria-selected="true">
                                    تسجيل الخروج
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="c-left">
                    <div class="tab-content" id="myTabContent">
                        <div role="tabpanel" class="tab-pane fade active show" id="prof1">
                            <form class="c_editInfo" action=""
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    {{-- User Image --}}
                                    {{-- <div class="form-group c_imgchosee col-md-12">
                                        <label>
                                            <div class="c_imgUp">
                                                <input type="file" id="img" name="profile_photo_path" accept="image/*">

                                                @if (auth()->user()->profile_photo_path && file_exists(auth()->user()->profile_photo_path))
                                                    <img src="{{ asset(auth()->user()->profile_photo_path) }}" width="100"
                                                        height="100" style="border-radius: 10px; border:solid 1px black;">
                                                @else
                                                    <img src="{{ asset('front_end_style/images/profilesf.png') }}">
                                                @endif
                                            </div>
                                            <div class="c_editm">
                                                <img src="{{ asset('front_end_style/images/edit7.png') }}">
                                            </div>
                                        </label>
                                        <span>{{ auth()->user()->name_ar }}</span>
                                    </div> --}}


                                    {{-- Name --}}
                                    <div class="form-group col-md-6 col-xs-12">
                                        <label>الاسم الرباعي  </label>
                                        <input type="text" value="" name="name_ar" class=""
                                            placeholder="" id="name_ar">
                                    </div>

                                    {{-- Username --}}
                                    <div class="form-group col-md-6 col-xs-12">
                                        <label>اسم المستخدم </label>
                                        <input type="text" value="" name="username" class=""
                                            placeholder="" id="username">
                                    </div>

                                    {{-- E-mail --}}
                                    <div class="form-group col-md-6 col-xs-12">
                                        <label>البريد الالكتروني </label>
                                        <input type="email" value="" name="email" class=""
                                            placeholder="" id="email">
                                    </div>

                                    {{-- Phone --}}
                                    <div class="form-group col-md-6 col-xs-12">
                                        <label>رقم الهاتف </label>
                                        <input type="text" value="" name="phone" class=""
                                            placeholder="" id="phone">
                                    </div>

                                    {{-- Button --}}
                                    <div class="c_btnn col-md-12">
                                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="prof2">
                            <div class="c_research">
                                <div class="row">
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                                <div class="c_body">
                                                    <h3>هناك حقيقة  </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                                <div class="c_body">
                                                    <h3>هناك حقيقة  </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                                <div class="c_body">
                                                    <h3>هناك حقيقة  </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                                <div class="c_body">
                                                    <h3>هناك حقيقة  </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                                <div class="c_body">
                                                    <h3>هناك حقيقة  </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="prof3">
                            <div class="c_certifcate">
                                <div class="c_add_certif">
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة  </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="prof4">
                            <div class="c_certifcate">
                                <div class="c_add_certif">
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <a href="{{ route('student.cv-first') }}">
                                                    <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <a href="{{ route('student.cv-second') }}">
                                                    <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <a href="{{ route('student.cv-third') }}">
                                                    <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
