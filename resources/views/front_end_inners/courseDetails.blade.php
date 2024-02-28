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
                        <div class="c_left card">
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
                                <div class="card-body">
                                    {{-- <div class="">
                                        <span>السعر : </span>
                                        <span>
                                            @if (isset($course->price) && $course->price > 0)
                                                {{ $course->price }} د.أ
                                            @else
                                                مجانا
                                            @endif
                                        </span>
                                    </div> --}}
                                    <div class="h-0 py-3 c_btn_subscribe">
                                        <!-- Button trigger modal -->
                                        @auth('student')
                                            @if ($isUserRegisterationActive)
                                                {{-- if the user is registered in "KANAF" --}}
                                                @if (auth('student')->user()->courses->contains($course->id))
                                                    <a href="{{ route('student.course-sections', encrypt($course->id)) }}">
                                                        متابعة الدورة
                                                    </a>
                                                @else
                                                    <a href="{{ route('student.register-course', encrypt($course->id)) }}">
                                                        اشترك في الدورة
                                                    </a>
                                                @endif
                                            @else
                                                <a href="#" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    اشترك في المنصة
                                                </a>
                                            @endif
                                        @endauth

                                        @guest('student')
                                            <a href="#" data-toggle="modal" data-target="#loginn">
                                                تسجيل الدخول
                                            </a>
                                        @endguest
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            اشتراك في المنصة
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('student.paypal.create') }}" method="GET">
                                                        <div class="modal-body">
                                                            <div class="form-row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="mb-3 text-dark font-weight-medium"
                                                                        for="validationServer01">سعر الاشتارك:
                                                                    </label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span
                                                                                class="input-group-text mdi mdi-format-title"
                                                                                id="inputGroupPrepend2"></span>
                                                                        </div>
                                                                        <input type="text" name="amount"
                                                                            class="form-control @error('amount') is-invalid @enderror"
                                                                            id="validationServer01" placeholder="amount"
                                                                            value="{{ old('amount', $public_values['registeration_amount']) }}"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary"
                                                                style="background: #67328f !important">
                                                                اشترك
                                                            </button>
                                                        </div>
                                                    </form>
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
