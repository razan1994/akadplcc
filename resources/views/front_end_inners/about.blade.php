@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')



    <div class="body_inner">

        <!-- ================================================================================================== -->
        <!-- ======================================== inner-top =============================================== -->
        <!-- ================================================================================================== -->
        <div class="inner-top">

            <div class="c_title_top">
                <div class="container_1200">
                    <div class="title_page">
                        <h1>عن الموقع</h1>
                    </div>
                </div>
            </div>
            <div class="c-breadcrumps">
                <div class="container_1200">
                <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>عن الموقع</a></p>
                </div>
            </div>
        </div>
        <!-- ================================================================================================== -->
        <!-- ======================================== inner-top =============================================== -->
        <!-- ================================================================================================== -->

        <!-- ================================================================================================== -->
        <!-- ======================================== content about us ======================================== -->
        <!-- ================================================================================================== -->
        <div class="c_page_about c_inner_body" id="mainContent">

            <div class="c_section_1">
                <div class="container_1200">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c_post">
                                <div class="c_body">
                                    <h2>نبذة عنا</h2>
                                    <h3>تعلم مهارات جديدة
                                        تقدم في حياتك المهنية</h3>
                                    <p>
                                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعيا هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ َ 
                                    </p>
                                </div>
                                <div class="c_num">
                                    <div class="c_item">
                                        <div class="c_icon">
                                            &#10003; 
                                            {{-- check mark  --}}
                                        </div>
                                        <div class="c_bdu">
                                            <span>24/7</span>
                                            <p>الدعم الفني</p>
                                        </div>
                                    </div>
                                    <div class="c_item">
                                        <div class="c_icon">
                                            &#10003;
                                            {{-- check mark  --}}
                                        </div>
                                        <div class="c_bdu">
                                            <span>+30</span>
                                            <p>دورة تعليمية</p>
                                        </div>
                                    </div>
                                    <div class="c_item">
                                        <div class="c_icon">
                                            &#10003;
                                            {{-- check mark  --}}
                                        </div>
                                        <div class="c_bdu">
                                            <span>+30</span>
                                            <p>الدعم الفني</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
        
                            <div class="c_imgs">

                                <div class="c_bgimg c_bg_1">
                                    <img src="{{ asset('front_end_style/images/bg1slider.png') }}">
                                </div>
                                <div class="c_item">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                </div>
        
                                <div class="c_bgimg c_bg_2">
                                    <img src="{{ asset('front_end_style/images/bg2slider.png') }}">
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>

            <div class="c_section_2">
                <div class="container_1200">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c_item">
                                <div class="c_title">
                                    <img src="{{ asset('front_end_style/images/binoculars.png') }}">
                                    <h4>رؤيتنا</h4>
                                </div>
                                <div class="c_body">
                                    <div class="c_feg">
                                        <p>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلكللنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك  
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c_item">
                                <div class="c_title">
                                    <img src="{{ asset('front_end_style/images/target.png') }}">
                                    <h4>مهمتنا</h4>
                                </div>
                                <div class="c_body">
                                    <div class="c_feg">
                                        <p>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلكللنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك  
                                        </p>
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
