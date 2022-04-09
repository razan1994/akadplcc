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
                    <h1>الأخبار</h1>
                </div>
            </div>
            <div class="c-breadcrumps">
                <div class="container_1200">
                <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>الأخبار</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="c_page_news c_inner_body">
        <div class="c_mainContent">
            <div class="container_1200">
                <div class="c_block">
                    <div class="row data-container">
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
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
                                        <a href="#">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pagination-container"></div>
                </div>
            </div>
        </div>
    </div>



@endsection
