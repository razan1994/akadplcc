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
                    <h1>المكتبة الرقمية</h1>
                </div>
            </div>
            <div class="c-breadcrumps">
                <div class="container_1200">
                    <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>المكتبة الرقمية</a></p>
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
                    <div class="row">
                        @if (isset($researches) && $researches->count() > 0)
                            @foreach ($researches as $index => $research)
                                <div id="i_show_num" class="col-md-6 pagenitems">
                                    <div class="c_item">
                                        <div>
                                            <div class="c_image">
                                                @if (isset($research->image) && file_exists($research->image))
                                                    <img src="{{ asset($research->image) }}"
                                                        alt="{{ isset($research->title) ? $research->title : 'Undefined' }}"
                                                        title="{{ isset($research->title) ? $research->title : 'Undefined' }}"
                                                        loading="lazy"
                                                        style="object-fit: contain; object-position: center;">
                                                @else
                                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="c_post">
                                            <div class="c_body">
                                                <h3>{!! isset($research->title) ? $research->title : 'Undefined' !!} </h3>
                                                <p>{!! \Illuminate\Support\Str::limit(
                                                    isset($research->description) ? str_replace('&nbsp;', ' ', $research->description) : '--------',
                                                    70,
                                                    $end = '...',
                                                ) !!}</p>
                                            </div>
                                            @if (auth('student')->check())
                                                @if (isset($research->file) && file_exists($research->file))
                                                    <div class="c_buttn">
                                                        <a href="{{ route('student.downloadResearch', $research->id) }}">
                                                            تحميل الملف
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="c_buttn">
                                                        <a href="#">
                                                            لا يوجد ملف
                                                        </a>
                                                    </div>
                                                @endif
                                            @else
                                                <div class="c_buttn">
                                                    <a href="#" data-toggle="modal" data-target="#loginn">
                                                        تحميل الملف
                                                    </a>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @for ($i = 0; $i < 10; $i++)
                                <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
                                    <div class="c_item">
                                        <div class="c_image">
                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                        </div>
                                        <div class="c_post">
                                            <div class="c_body">
                                                <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                                                    القارئ عن
                                                    التركيز على الشكل الخارجي للنص </p>
                                            </div>
                                            <div class="c_buttn">
                                                <a href="#">اقرأ المزيد</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @endif
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $researches->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
