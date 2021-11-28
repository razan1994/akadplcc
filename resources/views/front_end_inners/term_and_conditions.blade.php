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
                            <li><a href="{{ Auth::check() ? route('termsAndConditionsAuth') :  route('termsAndConditions') }}">@lang('front_end.terms_conditions')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

<!--blog body area start-->
<div class="main_blog_area blog_details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog_details_wrapper">
                    <div class="single_blog">
                        <div class="blog_title">
                            <h2><a href="{{ Auth::check() ? route('termsAndConditionsAuth') :  route('termsAndConditions') }}">@lang('front_end.terms_conditions')</a></h2>
                        </div>

                        @if (isset($termsAndConditions) && $termsAndConditions->count() > 0)
                            @foreach ($termsAndConditions as $termsAndCondition)
                                <div class="blog_content">
                                    <div class="post_content">
                                        @if (Config::get('app.locale') == 'en')
                                            <blockquote><p>{!! isset($termsAndCondition->term_and_condition_title_en) ? $termsAndCondition->term_and_condition_title_en : '<small style="color: red;">Undefined</small>' !!}</p></blockquote>
                                            <p>{!! isset($termsAndCondition->term_and_condition_des_en) ? $termsAndCondition->term_and_condition_des_en : '<small style="color: red;">Undefined</small>' !!}</p>
                                        @else
                                            <blockquote><p>{!! isset($termsAndCondition->term_and_condition_title_ar) ? $termsAndCondition->term_and_condition_title_ar : '<small style="color: red;">Undefined</small>' !!}</p></blockquote>
                                            <p>{!! isset($termsAndCondition->term_and_condition_des_ar) ? $termsAndCondition->term_and_condition_des_ar : '<small style="color: red;">Undefined</small>' !!}</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog section area end-->


@endsection
