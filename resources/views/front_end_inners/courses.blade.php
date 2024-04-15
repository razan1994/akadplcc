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
                <p><a href="{{ route('welcome') }}" wire:navigate>الرئيسية</a> <span>»</span> <a>الدورات</a></p>
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
                        @if (isset($courses) && $courses->count() > 0)
                            @foreach ($courses as $index => $course)
                                <div class="col-md-6 col-xs-12">
                                    <div class="c_item">
                                        <a href="{{ route('course-details', $course->slug) }}" wire:navigate>
                                            <div class="c_image">
                                                @if (isset($course->main_image) && file_exists($course->main_image))
                                                    <img src="{{ asset($course->main_image) }}">
                                                @else
                                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                @endif
                                            </div>
                                        </a>
                                        <div class="c_post">
                                            <div class="c_body">
                                                <a href="{{ route('course-details', $course->slug) }}" wire:navigate>
                                                    <h3>{!! isset($course->title_ar) ? $course->title_ar : 'Undefined' !!}</h3>
                                                </a>
                                                <p>{!! \Illuminate\Support\Str::limit(
                                                    isset($course->desc_ar) ? str_replace('&nbsp;', ' ', $course->desc_ar) : '--------',
                                                    70,
                                                    $end = '...',
                                                ) !!}</p>
                                            </div>
                                            <div class="c_buttn">
                                                <div class="c_tech">
                                                    @if (isset($course->teacher_image) && file_exists($course->teacher_image))
                                                        <img src="{{ asset($course->teacher_image) }}">
                                                    @else
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                    @endif
                                                    <span>{!! isset($course->teacher_ar) ? $course->teacher_ar : 'Undefined' !!}</span>
                                                </div>
                                                <a href="#">اتصل بنا</a>
                                            </div>
                                            <div class="c_time">
                                                <i class="far fa-clock"></i>
                                                @if (isset($course->section_count) && isset($course->section_time))
                                                    <span> ساعة
                                                        {{ ceil(($course->section_count * $course->section_time) / 60) }}</span>
                                                @else
                                                    <span>Undefined</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-md-6 col-xs-12">
                                    <div class="c_item">
                                        <div class="c_image">
                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                        </div>
                                        <div class="c_post">
                                            <div class="c_body">
                                                <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                                                    القارئ عن التركيز على الشكل الخارجي للنص </p>
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
                            @endfor
                        @endif
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $courses->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
