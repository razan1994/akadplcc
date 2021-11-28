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
                            <li><a href="{{ Auth::check() ? route('faqsAuth') :  route('faqs') }}">@lang('front_end.frequently_questions')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--faq area start-->
<div class="faq_area">
    <div class="container">
        <div class="faq_content_area">
            <div class="row">
                <div class="col-12">
                    <div class="faq_content_wrapper">
                        <h4>@lang('front_end.frequently_asked')</h4>
                    </div>
                </div>
            </div>
        </div>
        <!--Accordion area-->
        <div class="accordion_area">
            <div class="row">
                <div class="col-12">
                    <div id="accordion" class="card__accordion">
                    @if (isset($faqs))
                        @foreach ($faqs as $key => $faq)
                            <div class="card  card_dipult">
                                {{-- Header --}}
                                <div class="card-header card_accor" id="headingTwo">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_{{ $faq->id }}" aria-expanded="false" aria-controls="collapseTwo">
                                        @if (Config::get('app.locale') == 'en')
                                            {!! isset($faq->title_en) ? $faq->title_en : '<span style="color: red;">Undefined</span>' !!}
                                        @else
                                            {!! isset($faq->title_ar) ? $faq->title_ar : '<span style="color: red;">Undefined</span>' !!}
                                        @endif
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                {{-- Body --}}
                                <div id="collapse_{{ $faq->id }}" class="collapse {{ $key == 0 ? 'show' : ''}}" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        @if (Config::get('app.locale') == 'en')
                                            <p>{!! isset($faq->answer_en) ? $faq->answer_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                        @else
                                            <p>{!! isset($faq->answer_ar) ? $faq->answer_ar : '<span style="color: red;">Undefined</span>' !!}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
        <!--Accordion area end-->
    </div>
</div>
<!--faq area end-->
@endsection
