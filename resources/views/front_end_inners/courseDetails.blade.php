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
                    <h1>صفحة الدورة</h1>
                </div>
            </div>
        </div>
        <div class="c-breadcrumps">
            <div class="container_1200">
                <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>صفحة الدورة</a></p>
            </div>
        </div>
    </div>

    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="c_page_courseDetails c_inner_body">
        <div class="c_mainContent">
            <div class="c_info">
                <div class="container_1200">
                    <div class="c_block">
                        <div class="c_right">
                            <div class="c_itms">
                                <div class="c_title">
                                    <h4>{!! isset($course->title_ar) ? $course->title_ar : 'Undefined' !!}</h4>
                                </div>
                                <div class="c_body">
                                    <p>
                                        {!! isset($course->desc_ar) ? $course->desc_ar : 'Undefined' !!}
                                    </p>
                                </div>
                                <div class="c_tafsell">
                                    <div class="c_itme">
                                        <p>
                                            <img src="{{ asset('front_end_style/images/clock.png') }}">
                                            <label>مدة الدورة : </label>
                                            @if (isset($course->section_count) && isset($course->section_time))
                                                <span> ساعة
                                                    {{ ceil(($course->section_count * $course->section_time) / 60) }}</span>
                                            @else
                                                <span>Undefined</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="c_itme">
                                        <p><img src="{{ asset('front_end_style/images/clock.png') }}">
                                            <label>مدة الحصة : </label>
                                            <span> {{ isset($course->section_time) ? $course->section_time : 'Undefined' }}
                                            </span>
                                        </p>
                                    </div>
                                    <div class="c_itme">
                                        <p><img src="{{ asset('front_end_style/images/clock.png') }}">
                                            <label>عدد الحصص : </label>
                                            <span>
                                                {{ isset($course->section_count) ? $course->section_count : 'Undefined' }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="c_left">
                            <div class="c_box_subscribe">
                                <div class="c_video">
                                    @if (isset($course->main_video) && file_exists($course->main_video))
                                        <video class="bgvid" id="myvideo" muted controls>
                                            <source src="{{ asset($course->main_video) }}" type="video/mp4" />
                                        </video>
                                    @else
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    @endif
                                </div>
                                <div class="c_btn_subscribe">
                                    <a href="{{ route('course-sections', encrypt($course->id)) }}">اشترك</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="c_brandas">
                <div class="container_1033">
                    <div class="c_section_title">
                        <h3>الجهات المعتمدة</h3>
                    </div>
                    <!-- Swiper pc -->
                    <div class="c_bloc">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                        </div>
                                    </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="c_info2">
                <div class="container_1200">
                    <div class="c_block">
                        <div class="c_right">
                            <div class="c_box_show">
                                <div class="c_bloc">
                                    <div class="c_img">
                                        <img src="{{ asset('front_end_style/images/SHADA.png') }}">
                                    </div>
                                    <div class="c_btn_subscribe">
                                        <a href="#">اشترك</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="c_left">
                            <div class="c_itm_prof">
                                <div class="c_img">
                                    @if (isset($course->teacher_image) && file_exists($course->teacher_image))
                                        <img src="{{ asset($course->teacher_image) }}">
                                    @else
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    @endif
                                </div>
                                <div class="c_bdy">
                                    <span>{!! isset($course->teacher_ar) ? $course->teacher_ar : 'Undefined' !!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
