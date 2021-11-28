@extends('front_end_inners.app_front_end')

@section('content')
    {{-- =========================================================== --}}
    {{-- ================== Sweet Alert Section ==================== --}}
    {{-- =========================================================== --}}
    <div>
        @if (session()->has('success'))
            <script>
                swal("@lang('front_end.great_job') !!!", "{!! Session::get('success') !!}", "success", {
                    button: "OK",
                });
            </script>
        @endif
        @if (session()->has('danger'))
            <script>
                swal("@lang('front_end.ops') !!!", "{!! Session::get('danger') !!}", "error", {
                    button: "Close",
                });
            </script>
        @endif
    </div>

        <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ Auth::check() ? route('welcomeAuth') :  route('welcome') }}">@lang('front_end.home')</a></li>
                            <li><a href="{{ Auth::check() ? route('aboutUsAuth') :  route('aboutUs') }}">@lang('front_end.about_us')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <div class="about_page_section">
        <div class="container">
                <!--about section area -->
                <div class="about_section">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="about_thumb">
                                @if (isset($aboutUs->about_us_image) && $aboutUs->about_us_image && file_exists($aboutUs->about_us_image))
                                    <img src="{{ asset($aboutUs->about_us_image) }}" alt="">
                                @else
                                    <img src="{{ asset('front_end_style/assets/img/about/about1.jpg') }}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="about_content">
                                <h1>@lang('front_end.welcome_to_juman')</h1>
                                @if (Config::get('app.locale') == 'en')
                                    <p>{!! isset($aboutUs->about_us_en) ? $aboutUs->about_us_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                @else
                                    <p>{!! isset($aboutUs->about_us_ar) ? $aboutUs->about_us_ar : '<span style="color: red;">Undefined</span>' !!}</p>
                                @endif
                                {{-- <div class="view__work">
                                    <a href="#">view work </a>
                                </div>   --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--about section end-->

                <!--vission section area -->
                <div class="about_section">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="about_content">
                                <h1>@lang('front_end.our_vision')</h1>
                                @if (Config::get('app.locale') == 'en')
                                    <p>{!! isset($aboutUs->vision_en) ? $aboutUs->vision_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                @else
                                    <p>{!! isset($aboutUs->vision_ar) ? $aboutUs->vision_ar : '<span style="color: red;">Undefined</span>' !!}</p>
                                @endif
                                {{-- <div class="view__work">
                                    <a href="#">view work </a>
                                </div>   --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="about_thumb">
                                @if (isset($aboutUs->vision_image) && $aboutUs->vision_image && file_exists($aboutUs->vision_image))
                                    <img src="{{ asset($aboutUs->vision_image) }}" alt="">
                                @else
                                    <img src="{{ asset('front_end_style/assets/img/about/about1.jpg') }}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!--vission section end-->

                <!--mission section area -->
                <div class="about_section">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="about_thumb">
                                @if (isset($aboutUs->mission_image) && $aboutUs->mission_image && file_exists($aboutUs->mission_image))
                                    <img src="{{ asset($aboutUs->mission_image) }}" alt="">
                                @else
                                    <img src="{{ asset('front_end_style/assets/img/about/about1.jpg') }}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="about_content">
                                <h1>@lang('front_end.our_mission')</h1>
                                @if (Config::get('app.locale') == 'en')
                                    <p>{!! isset($aboutUs->mission_en) ? $aboutUs->mission_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                @else
                                    <p>{!! isset($aboutUs->mission_ar) ? $aboutUs->mission_ar : '<span style="color: red;">Undefined</span>' !!}</p>
                                @endif
                                {{-- <div class="view__work">
                                    <a href="#">view work </a>
                                </div>   --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--mission section end-->

                <!--counterup area -->
                {{-- <div class="counterup_section">
                    <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single_counterup">
                                <div class="counter_img">
                                        <img src="{{ asset('front_end_style/assets/img/about/count.png') }}" alt="">
                                    </div>
                                    <div class="counter_info">
                                        <h2 class="counter_number">2170</h2>
                                        <p>happy customers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single_counterup count-two">
                                    <div class="counter_img">
                                        <img src="{{ asset('front_end_style/assets/img/about/count2.png') }}" alt="">
                                    </div>
                                    <div class="counter_info">
                                        <h2 class="counter_number">8080</h2>
                                        <p>AWARDS won</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single_counterup">
                                    <div class="counter_img">
                                        <img src="{{ asset('front_end_style/assets/img/about/count3.png') }}" alt="">
                                    </div>
                                    <div class="counter_info">
                                        <h2 class="counter_number">2150</h2>
                                        <p>HOURS WORKED</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single_counterup count-two">
                                    <div class="counter_img">
                                        <img src="{{ asset('front_end_style/assets/img/about/count4.png') }}" alt="">
                                    </div>
                                    <div class="counter_info">
                                        <h2 class="counter_number">2170</h2>
                                        <p>COMPLETE PROJECTS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div> --}}
                <!--counterup end-->

                <!--about progress bar -->
                {{-- <div class="about_progressbar">
                    <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="progressbar_inner">
                                <h2>We have Skills to show</h2>
                                    <div class="progress_skill one">
                                        <div class="progress">
                                            <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress_persent">html/css</span>
                                            </div>
                                        </div>
                                        <span class="progress_discount">60%</span>
                                    </div>
                                    <div class="progress_skill two">
                                        <div class="progress">
                                            <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".5s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                                <span class="progress_persent">ecommerce theme </span>
                                            </div>

                                        </div>
                                        <span class="progress_discount">90%</span>
                                    </div>
                                    <div class="progress_skill three">
                                        <div class="progress">
                                            <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                                <span class="progress_persent">Typhography </span>
                                            </div>

                                        </div>
                                        <span class="progress_discount">70%</span>
                                    </div>
                                    <div class="progress_skill four">
                                        <div class="progress">
                                            <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                                <span class="progress_persent">Branding  </span>
                                            </div>

                                        </div>
                                        <span class="progress_discount">80%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="about__img">
                                    <img src="{{ asset('front_end_style/assets/img/about/about2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                </div> --}}
                <!--about progress bar end -->
            </div>
        </div>
    </div>
@endsection
