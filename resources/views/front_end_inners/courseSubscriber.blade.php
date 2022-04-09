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
    <div class="c_page_courseSubscriber c_inner_body">
        <div class="c_mainContent">
            <div class="container_1200">
                <div class="c_block">
                    <div class="c_coursubs_Swiper">
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper mySwiper2" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <div class="c_video">
                                            <video  class="bgvid" id="myvideo" muted controls>
                                                <source src="{{ asset('front_end_style/images/testt.mp4') }}" type="video/mp4" />
                                            </video>
                                        </div>
                                        <div class="c_title">
                                            <h4>دورة تصميم واجهة المستخدم 1</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next">التالي<img src="{{ asset('/front_end_style/images/left-arrow.png') }}"></div>
                            <div class="swiper-button-prev"><img src="{{ asset('/front_end_style/images/right-arrow.png') }}">السابق</div>
                        </div>
                        
                    </div>
              
                </div>
            </div>
        </div>
    </div>



@endsection
