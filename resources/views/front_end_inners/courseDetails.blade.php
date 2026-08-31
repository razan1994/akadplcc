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
                <div class="c-breadcrumps">
                    <div class="container_1200">
                        <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>
                                {!! isset($course->title_ar) ? $course->title_ar : 'Undefined' !!}
                            </a></p>
                    </div>
                </div>
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
                                    <div class="mb-3 course-prices">
                                        <span>السعر : </span>
                                        @if (
                                            $course->price_before_discount !== null &&
                                                $course->price_after_discount !== null &&
                                                (float) $course->price_before_discount > (float) $course->price_after_discount)
                                            <del class="mx-2 text-muted">{{ number_format((float) $course->price_before_discount, 2) }}
                                                د.أ</del>
                                            <strong>{{ number_format((float) $course->price_after_discount, 2) }}
                                                د.أ</strong>
                                        @else
                                            <strong>{{ number_format((float) ($course->price_after_discount ?? $course->price), 2) }}
                                                د.أ</strong>
                                        @endif
                                    </div>
                                    @if ($course->course_payment_link || $course->certificate_payment_link)
                                        <div class="mb-3 d-flex flex-wrap" style="gap: 8px;">
                                            @if ($course->course_payment_link)
                                                <a href="{{ $course->course_payment_link }}" class="btn btn-primary"
                                                    target="_blank" rel="noopener">شراء الدورة</a>
                                            @endif
                                            @if ($course->certificate_payment_link)
                                                <a href="{{ $course->certificate_payment_link }}"
                                                    class="btn btn-outline-primary" target="_blank" rel="noopener">شراء
                                                    الشهادة</a>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="h-0 py-3 c_btn_subscribe">
                                        <!-- Button trigger modal -->
                                        @auth('student')
                                            @if ($isUserRegisterationActive)
                                                {{-- if the user is registered in "KANAF" --}}
                                                @if (auth('student')->user()->courses->contains($course->id))
                                                    <a href="{{ route('student.course-sections', $course->slug) }}"
                                                        wire:navigate>
                                                        متابعة الدورة
                                                    </a>
                                                @else
                                                    <a href="{{ route('student.register-course', $course->slug) }}">
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
                                                    <div class="modal-body">
                                                        <form action="{{ route('student.paypal.create') }}" method="GET"
                                                            id="paypalForm">
                                                        </form>

                                                        <form action="{{ route('student.subscribe-using-points') }}"
                                                            method="GET" id="pointsForm">
                                                        </form>

                                                        {{-- <input type="text" name="amount"
                                                        class="form-control @error('amount') is-invalid @enderror"
                                                        id="validationServer01" placeholder="amount"
                                                        value="{{ old('amount', $public_values['registeration_amount']) }}"
                                                        disabled> --}}

                                                        <p>
                                                            رسوم الاشتراك في المنصة
                                                            <strong>
                                                                {{ $public_values['registeration_amount'] }} دولار
                                                            </strong>
                                                            /
                                                            <strong>
                                                                10 د.أ
                                                            </strong>
                                                        </p>
                                                        <br>
                                                        <p>
                                                            مدة الاشتراك تكون عام من لحظة التسجيل.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer flex-column">
                                                        <p>
                                                            ادفع من خلال :
                                                        </p>
                                                        <div class="w-100 d-flex justify-content-around">
                                                            <button type="button" class="btn btn-primary" id="paypalBtn">
                                                                PAYPAL
                                                            </button>

                                                            <button type="button" class="btn btn-primary" id="walletBtn"
                                                                data-toggle="modal" data-target="#walletsSubscribeModal">
                                                                المحافظ الالكترونية
                                                            </button>

                                                            <button type="button" class="btn btn-primary" id="pointsBtn">
                                                                نقاطي
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal fade" id="walletsSubscribeModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            طلب الاشتراك من خلال المحافظ الالكترونية
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('student.store-subscription-request') }}"
                                                        method="POST">
                                                        <div class="modal-body">

                                                            @csrf
                                                            <div class="form-row">
                                                                {{-- Name --}}
                                                                <div class="form-group col-12">
                                                                    <label for="validationServer01">الاسم</label>
                                                                    <input type="text" name="name"
                                                                        class="form-control @error('name') is-invalid @enderror"
                                                                        id="validationServer01" placeholder="الاسم"
                                                                        value="{{ old('name', auth('student')?->user()?->name) }}"
                                                                        required>
                                                                    @error('name')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                {{-- email --}}
                                                                <div class="form-group col-12">
                                                                    <label for="validationServer01">البريد
                                                                        الالكتروني</label>
                                                                    <input type="email" name="email"
                                                                        class="form-control @error('email') is-invalid @enderror"
                                                                        id="validationServer01"
                                                                        placeholder="البريد الالكتروني"
                                                                        value="{{ old('email', auth('student')?->user()?->email) }}"
                                                                        required>
                                                                    @error('email')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                {{-- phone --}}
                                                                <div class="form-group col-12">
                                                                    <label for="validationServer01">رقم الهاتف</label>
                                                                    <input type="text" name="phone"
                                                                        class="form-control @error('phone') is-invalid @enderror"
                                                                        id="validationServer01" placeholder="رقم الهاتف"
                                                                        value="{{ old('phone', auth('student')?->user()?->phone) }}"
                                                                        required>
                                                                    @error('phone')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>


                                                                {{-- payment wallet --}}
                                                                <div class="form-group col-12">
                                                                    <label for="validationServer01">المحفظة
                                                                        الالكترونية</label>
                                                                    <select class="form-control" id="wallet_id"
                                                                        name="wallet_id">
                                                                        <option value="0" disabled selected>اختر
                                                                            المحفظة الالكترونية</option>
                                                                        @foreach ($paymentWallets as $wallet)
                                                                            <option value="{{ $wallet->id }}">
                                                                                {{ $wallet->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                {{-- message --}}
                                                                <div class="form-group col-12">
                                                                    <label for="validationServer01">رسالة</label>
                                                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="validationServer01"
                                                                        placeholder="رسالة">{{ old('message') }}</textarea>
                                                                    @error('message')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <small>
                                                                    <strong>
                                                                        الرجاء التأكد من البيانات قبل عملية الطلب
                                                                    </strong>
                                                                    <br>
                                                                    <strong>
                                                                        سيتم التواصل معكم بعد الطلب في اقرب وقت
                                                                    </strong>
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-primary">
                                                                طلب
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

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // when clicl on paypalBtn submit thr paypalForm
        $(document).ready(function() {
            $('#paypalBtn').click(function(e) {
                e.preventDefault();
                $('#paypalForm').submit()
            });

            $('#pointsBtn').click(function(e) {
                e.preventDefault();
                $('#pointsForm').submit()
            });
        });
    </script>
@endpush
