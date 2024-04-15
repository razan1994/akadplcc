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
                    <h1>المدونة</h1>
                </div>
            </div>
            <div class="c-breadcrumps">
                <div class="container_1200">
                    <p><a href="{{ route('welcome') }}" wire:navigate>الرئيسية</a> <span>»</span> <a>المدونة</a></p>
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
                        @if (isset($news) && $news->count() > 0)
                            @foreach ($news as $index => $new)
                                <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
                                    <div class="c_item">
                                        <a href="{{ route('news-details', $new->slug) }}" wire:navigate>
                                            <div class="c_image">
                                                @if (isset($new->image) && file_exists($new->image))
                                                    <img src="{{ asset($new->image) }}">
                                                @else
                                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                @endif
                                            </div>
                                        </a>
                                        <div class="c_post">
                                            <div class="c_body">
                                                <h3>{!! isset($new->title_ar) ? $new->title_ar : 'Undefined' !!} </h3>
                                                <p>{!! \Illuminate\Support\Str::limit(
                                                    isset($new->desc_ar) ? str_replace('&nbsp;', ' ', $new->desc_ar) : '--------',
                                                    70,
                                                    $end = '...',
                                                ) !!}</p>
                                            </div>
                                            <div class="c_buttn">
                                                <a href="{{ route('news-details', $new->slug) }}" wire:navigate>اقرأ
                                                    المزيد</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
                                <div class="c_item">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                    <div class="c_post">
                                        <div class="c_body">
                                            <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
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
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                                التركيز على الشكل الخارجي للنص </p>
                                        </div>
                                        <div class="c_buttn">
                                            <a href="#">اقرأ المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $news->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
