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
    <div class="c_page_newsInner  c_inner_body">
        <div class="container_1200">
            <div class="c_mainContent">
                <div class="c_block">


                        <div class="c_mainNews">
                            <div class="c_item">
                                <div class="c_image">
                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                </div>
                                <div class="c_deatlis">
                                    <div class="c_date">
                                        <span>27/2/2022</span>
                                    </div>
                                    <div class="c_title">
                                        <h2>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                        </h2>
                                    </div>

                                    <div class="c_body">
                                        <p>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهيهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي  
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    <div class="c_relatedNews">
                        <div class="c_totl">
                            <h2>أخبار ذات صلة</h2>
                        </div>
                                <div class="c_itms">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                
                                    <div class="c_body">
                                        <div class="c_title">
                                            <h2>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                            </h2>
                                        </div>
                                        <div class="c_date">
                                            <span>27/2/2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_itms">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                
                                    <div class="c_body">
                                        <div class="c_title">
                                            <h2>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                            </h2>
                                        </div>
                                        <div class="c_date">
                                            <span>27/2/2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_itms">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                
                                    <div class="c_body">
                                        <div class="c_title">
                                            <h2>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                            </h2>
                                        </div>
                                        <div class="c_date">
                                            <span>27/2/2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_itms">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                
                                    <div class="c_body">
                                        <div class="c_title">
                                            <h2>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                            </h2>
                                        </div>
                                        <div class="c_date">
                                            <span>27/2/2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_itms">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                
                                    <div class="c_body">
                                        <div class="c_title">
                                            <h2>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                            </h2>
                                        </div>
                                        <div class="c_date">
                                            <span>27/2/2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_itms">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                
                                    <div class="c_body">
                                        <div class="c_title">
                                            <h2>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                            </h2>
                                        </div>
                                        <div class="c_date">
                                            <span>27/2/2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_itms">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                
                                    <div class="c_body">
                                        <div class="c_title">
                                            <h2>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                            </h2>
                                        </div>
                                        <div class="c_date">
                                            <span>27/2/2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_itms">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                
                                    <div class="c_body">
                                        <div class="c_title">
                                            <h2>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                            </h2>
                                        </div>
                                        <div class="c_date">
                                            <span>27/2/2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_itms">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                
                                    <div class="c_body">
                                        <div class="c_title">
                                            <h2>
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة 
                                            </h2>
                                        </div>
                                        <div class="c_date">
                                            <span>27/2/2022</span>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
