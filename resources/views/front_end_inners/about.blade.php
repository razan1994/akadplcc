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
                        <h1>عن المنصة</h1>
                    </div>
                </div>
            </div>
            <div class="c-breadcrumps">
                <div class="container_1200">
                    <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>عن المنصة</a></p>
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
                        <div class="col-md-12">
                            <div class="c_post">
                                <div class="c_body">
                                    <h2>نبذة عنا</h2>
                                    <h3>تعلم مهارات جديدة
                                        تقدم في حياتك المهنية</h3>
                                    <p>
                                        {{ $about->about_us_ar }}
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
                    </div>
                </div>
            </div>

            <div class="c_section_2">
                <div class="container_1200">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c_item">
                                <div class="c_title">
                                    <span class="icon-vision">
                                        <svg width="48" height="48" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="32" cy="32" rx="24" ry="16" stroke="#1aaac3" stroke-width="4" fill="none"/>
                                            <circle cx="32" cy="32" r="6" fill="#1aaac3"/>
                                        </svg>
                                    </span>
                                    <h4>رؤيتنا</h4>
                                </div>
                                <div class="c_body">
                                    <div class="c_feg">
                                        <p>
                                            {{ $about->vision_ar }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c_item">
                                <div class="c_title">
                                    <span class="icon-mission">
                                        <svg width="48" height="48" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="28" stroke="#1aaac3" stroke-width="4" fill="none"/>
                                            <path d="M32 16 L32 48" stroke="#1aaac3" stroke-width="4" stroke-linecap="round"/>
                                            <path d="M32 32 L44 24" stroke="#1aaac3" stroke-width="4" stroke-linecap="round"/>
                                        </svg>
                                    </span>
                                    <h4>مهمتنا</h4>
                                </div>
                                <div class="c_body">
                                    <div class="c_feg">
                                        <p>
                                            {{ $about->mission_ar }}
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
