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
                    <h1>الدورات</h1>
                </div>
            </div>
        </div>
        <div class="c-breadcrumps">
            <div class="container_1200">
            <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>الدورات</a></p>
            </div>
        </div>
    </div>

    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="c_page_courses c_inner_body">
        <div class="c_mainContent">
            <div class="container_1200">
                <div class="c_block">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="c_item">
                                <div class="c_image">
                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                </div>
                                <div class="c_post">
                                    <div class="c_body">
                                        <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                    </div>
                                    <div class="c_buttn">
                                        <div class="c_tech">
                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            <span>الاستاذ حمزة</span>
                                        </div>
                                        <a href="#">اتصل بنا</a>
                                    </div>
                                    <div class="c_time">
                                        <i class="far fa-clock"></i>
                                        <span>18 ساعة</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="c_item">
                                <div class="c_image">
                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                </div>
                                <div class="c_post">
                                    <div class="c_body">
                                        <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                    </div>
                                    <div class="c_buttn">
                                        <div class="c_tech">
                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            <span>الاستاذ حمزة</span>
                                        </div>
                                        <a href="#">اتصل بنا</a>
                                    </div>
                                    <div class="c_time">
                                        <i class="far fa-clock"></i>
                                        <span>18 ساعة</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="c_item">
                                <div class="c_image">
                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                </div>
                                <div class="c_post">
                                    <div class="c_body">
                                        <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                    </div>
                                    <div class="c_buttn">
                                        <div class="c_tech">
                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            <span>الاستاذ حمزة</span>
                                        </div>
                                        <a href="#">اتصل بنا</a>
                                    </div>
                                    <div class="c_time">
                                        <i class="far fa-clock"></i>
                                        <span>18 ساعة</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="c_item">
                                <div class="c_image">
                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                </div>
                                <div class="c_post">
                                    <div class="c_body">
                                        <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                    </div>
                                    <div class="c_buttn">
                                        <div class="c_tech">
                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            <span>الاستاذ حمزة</span>
                                        </div>
                                        <a href="#">اتصل بنا</a>
                                    </div>
                                    <div class="c_time">
                                        <i class="far fa-clock"></i>
                                        <span>18 ساعة</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="c_item">
                                <div class="c_image">
                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                </div>
                                <div class="c_post">
                                    <div class="c_body">
                                        <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                    </div>
                                    <div class="c_buttn">
                                        <div class="c_tech">
                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            <span>الاستاذ حمزة</span>
                                        </div>
                                        <a href="#">اتصل بنا</a>
                                    </div>
                                    <div class="c_time">
                                        <i class="far fa-clock"></i>
                                        <span>18 ساعة</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="c_item">
                                <div class="c_image">
                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                </div>
                                <div class="c_post">
                                    <div class="c_body">
                                        <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                    </div>
                                    <div class="c_buttn">
                                        <div class="c_tech">
                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            <span>الاستاذ حمزة</span>
                                        </div>
                                        <a href="#">اتصل بنا</a>
                                    </div>
                                    <div class="c_time">
                                        <i class="far fa-clock"></i>
                                        <span>18 ساعة</span>
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
