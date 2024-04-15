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
    <div class="c_page_newsInner c_inner_body">
        <div class="container_1200">
            <div class="c_mainContent">
                <div class="c_block">


                    <div class="c_mainNews">
                        <div class="c_item">
                            <div class="c_image">
                                @if (isset($news->image) && file_exists($news->image))
                                    <img src="{{ asset($news->image) }}">
                                @else
                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                @endif
                            </div>
                            <div class="c_deatlis">
                                <div class="c_date">
                                    <span>{{ date('Y-M-d', strtotime($news->created_at)) }}</span>
                                </div>
                                <div class="c_title">
                                    <h2>
                                        {!! isset($news->title_ar) ? $news->title_ar : 'Undefined' !!}
                                    </h2>
                                </div>

                                <div class="c_body">
                                    <p>
                                        {!! isset($news->desc_ar) ? $news->desc_ar : 'Undefined' !!}
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                    @if (isset($relateds) && $relateds->count() > 0)
                        <div class="c_relatedNews">
                            <div class="c_totl">
                                <h2>أخبار ذات صلة</h2>
                            </div>
                            @foreach ($relateds as $related)
                                <div class="c_itms">
                                    <div class="c_image">
                                        @if (isset($related->image) && file_exists($related->image))
                                            <a href="{{ route('news-details', $related->slug) }}" wire:navigate>
                                                <img src="{{ asset($related->image) }}">
                                            </a>
                                        @else
                                            <a href="{{ route('news-details', $related->id) }}" wire:navigate>
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </a>
                                        @endif
                                    </div>

                                    <div class="c_body">
                                        <div class="c_title">
                                            <a href="{{ route('news-details', $related->slug) }}" wire:navigate>
                                                <h2>
                                                    {!! isset($related->title_ar) ? $related->title_ar : 'Undefined' !!}
                                                </h2>
                                            </a>
                                        </div>
                                        <div class="c_date">
                                            <span>{{ date('Y-M-d', strtotime($related->created_at)) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
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
                    @endif
                </div>
            </div>
        </div>
    </div>



@endsection
