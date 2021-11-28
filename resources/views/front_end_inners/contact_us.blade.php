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
                                <li><a href="{{ Auth::check() ? route('contactUsAuth') :  route('contactUs') }}">@lang('front_end.contact_us')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->

        <div class="home_contact_wrapper">
            <div class="container">
                 <!--contact map start-->
                <div class="contact_map">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="map-area">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        {{-- <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> --}}
                                        {{-- <a href="https://123movies-to.org"></a> --}}

                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d950654.0411026033!2d38.65066584889885!3d21.449189882213837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d01fb1137e59%3A0xe059579737b118db!2sJeddah%20Saudi%20Arabia!5e0!3m2!1sen!2sjo!4v1637219398803!5m2!1sen!2sjo" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        {{-- <style>.mapouter{position:relative;text-align:right;height:600px;width:1080px;}</style> --}}
                                        {{-- <a href="https://www.embedgooglemap.net">embedgooglemap.net</a> --}}
                                        {{-- <style>.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:1080px;}</style> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--contact map end-->

                <!--contact area start-->
                <div class="contact_area">
                    <div class="row">
                            <div class="col-lg-6 col-md-12">
                               <div class="contact_message content">
                                    <h3>@lang('front_end.contact_us')</h3>
                                     {{-- <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p> --}}
                                    <ul>
                                        <li><i class="fa fa-fax"></i>  @lang('front_end.address') :
                                            @if (Config::get('app.locale') == 'en')
                                                {!! isset($contactUs->address_en) ? $contactUs->address_en : '<span style="color: red;">Undefined</span>' !!}
                                            @else
                                                {!! isset($contactUs->address_ar) ? $contactUs->address_ar : '<span style="color: red;">Undefined</span>' !!}
                                            @endif
                                        </li>
                                        <li><i class="fa fa-phone"></i> {!! isset($contactUs->phone) ? $contactUs->phone : '<span style="color: red;">Undefined</span>' !!}</li>
                                        <li><i class="fa fa-envelope"></i> <a href="#">{!! isset($contactUs->email) ? $contactUs->email : '<span style="color: red;">Undefined</span>' !!}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                               <div class="contact_message">
                                    <h3>@lang('front_end.send_us_message')</h3>
                                    <form method="POST" action="{{ Auth::check() ? route('contactUsRequestAuth') :  route('contactUsRequest') }}">
                                        @csrf
                                        <p>
                                           <label> @lang('front_end.your_name') : <strong class="text-danger"> * @error('full_name') ( {{ $message }} ) @enderror</strong></label>
                                            <input name="full_name" placeholder="@lang('front_end.your_name')" type="text" value="{{ old('full_name') }}">
                                        </p>
                                        <p>
                                           <label>  @lang('front_end.your_email') : <strong class="text-danger"> * @error('email') ( {{ $message }} ) @enderror</strong></label>
                                            <input name="email" placeholder="@lang('front_end.your_email')" type="email" value="{{ old('email') }}">
                                        </p>
                                        <p>
                                           <label>  @lang('front_end.your_phone') : <strong class="text-danger"> * @error('phone') ( {{ $message }} ) @enderror</strong></label>
                                            <input name="phone" placeholder="@lang('front_end.your_phone')" type="text" value="{{ old('phone') }}">
                                        </p>
                                        <p>
                                           <label>  @lang('front_end.subject') : <strong class="text-danger"> * @error('subject') ( {{ $message }} ) @enderror</strong></label>
                                            <input name="subject" placeholder="@lang('front_end.subject')" type="text" value="{{ old('subject') }}">
                                        </p>
                                        <div class="contact_textarea">
                                            <label>  @lang('front_end.your_message') : <strong class="text-danger"> * @error('message') ( {{ $message }} ) @enderror</strong></label>
                                            <textarea placeholder="@lang('front_end.your_message')" name="message" class="form-control2" >{{  old('message') }}</textarea>
                                        </div>
                                        <button type="submit"> @lang('front_end.send_your_message')</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                </div>
                <!--contact area end-->
            </div>
        </div>

@endsection
