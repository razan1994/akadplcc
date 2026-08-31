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
    <style>
    .modern-courses-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 32px;
        margin: 32px 0 40px 0;
    }
    .modern-course-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(32,52,68,0.10);
        padding: 0 0 22px 0;
        display: flex;
        flex-direction: column;
        transition: box-shadow 0.18s, transform 0.18s;
        min-height: 420px;
        position: relative;
        overflow: hidden;
    }
    .modern-course-card:hover {
        box-shadow: 0 8px 32px rgba(26,170,195,0.16);
        transform: translateY(-6px) scale(1.02);
    }
    .modern-course-img {
        width: 100%;
        height: 210px;
        object-fit: cover;
        border-radius: 18px 18px 0 0;
        background: #eaf2f7;
    }
    .modern-course-content {
        padding: 22px 22px 0 22px;
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
    }
    .modern-course-content h3 {
        font-size: 1.18rem;
        font-weight: 800;
        color: #203444;
        margin-bottom: 10px;
    }
    .modern-course-content p {
        font-size: 1.02rem;
        color: #444;
        margin-bottom: 18px;
        min-height: 44px;
    }
    .modern-course-meta {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 10px;
    }
    .modern-course-teacher-img {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #1aaac3;
        background: #f8fafd;
    }
    .modern-course-teacher-name {
        font-size: 1rem;
        color: #1aaac3;
        font-weight: 700;
    }
    .modern-course-time {
        font-size: 0.98rem;
        color: #888;
        margin-bottom: 10px;
    }
    .modern-course-prices {
        display: flex;
        align-items: baseline;
        gap: 10px;
        margin: 8px 0;
        color: #203444;
        font-weight: 700;
    }
    .modern-course-prices del {
        color: #999;
        font-size: 0.95rem;
    }
    .modern-course-prices strong {
        color: #1aaac3;
        font-size: 1.15rem;
    }
    .modern-course-payments {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 8px;
    }
    .modern-course-payment-link {
        color: #203444;
        border: 1px solid #1aaac3;
        border-radius: 6px;
        padding: 7px 10px;
        font-size: 0.9rem;
        text-decoration: none;
    }
    .modern-course-payment-link:hover {
        color: #fff;
        background: #1aaac3;
    }
    .modern-course-link {
        display: flex;
        align-items: center;
        justify-content: normal;
        width: 70%;
        margin: 24px 0 0 auto;
        background: transparent;
        color: #1aaac3;
        border-radius: 10px;
        padding: 14px 0 14px 12px;
        font-size: 1.15rem;
        font-weight: 700;
        text-align: right;
        text-decoration: none;
        transition: color 0.18s, box-shadow 0.18s, transform 0.18s;
        box-shadow: none;
        letter-spacing: 0.5px;
        gap: 8px;
    }
    .modern-course-link:hover {
        color: #0e7a99;
        transform: scale(1.04);
    }
    </style>
    <div class="container_1200">
        <div class="modern-courses-grid">
            @if (isset($courses) && $courses->count() > 0)
                @foreach ($courses as $index => $course)
                    <div class="modern-course-card">
                        <a href="{{ route('course-details', $course->slug) }}" wire:navigate>
                            @if (isset($course->main_image) && file_exists($course->main_image))
                                <img class="modern-course-img" src="{{ asset($course->main_image) }}" loading="lazy" alt="{{ $course->title_ar }}">
                            @else
                                <img class="modern-course-img" src="{{ asset('/front_end_style/images/omgs.png') }}" loading="lazy" alt="no image">
                            @endif
                        </a>
                        <div class="modern-course-content">
                            <h3><a href="{{ route('course-details', $course->slug) }}" style="color:inherit;text-decoration:none;">{!! isset($course->title_ar) ? $course->title_ar : 'Undefined' !!}</a></h3>
                            <p>{!! \Illuminate\Support\Str::limit(isset($course->short_description) ? str_replace('&nbsp;', ' ', $course->short_description) : '--------', 70, $end = '...') !!}</p>
                            <div class="modern-course-meta">
                                @if (isset($course->teacher_image) && file_exists($course->teacher_image))
                                    <img class="modern-course-teacher-img" src="{{ asset($course->teacher_image) }}" loading="lazy" alt="teacher">
                                @else
                                    <img class="modern-course-teacher-img" src="{{ asset('/front_end_style/images/omgs.png') }}" loading="lazy" alt="teacher">
                                @endif
                                <span class="modern-course-teacher-name">{!! isset($course->teacher_ar) ? $course->teacher_ar : 'Undefined' !!}</span>
                            </div>
                            <div class="modern-course-time">
                                <i class="far fa-clock"></i>
                                @if (isset($course->section_count) && isset($course->section_time))
                                    <span> ساعة {{ ceil(($course->section_count * $course->section_time) / 60) }}</span>
                                @else
                                    <span>Undefined</span>
                                @endif
                            </div>
                            <div class="modern-course-prices">
                                @if ($course->price_before_discount !== null && $course->price_after_discount !== null && (float) $course->price_before_discount > (float) $course->price_after_discount)
                                    <del>{{ number_format((float) $course->price_before_discount, 2) }} د.أ</del>
                                    <strong>{{ number_format((float) $course->price_after_discount, 2) }} د.أ</strong>
                                @else
                                    <strong>{{ number_format((float) ($course->price_after_discount ?? $course->price), 2) }} د.أ</strong>
                                @endif
                            </div>
                            @if ($course->course_payment_link || $course->certificate_payment_link)
                                <div class="modern-course-payments">
                                    @if ($course->course_payment_link)
                                        <a href="{{ $course->course_payment_link }}" class="modern-course-payment-link" target="_blank" rel="noopener">شراء الدورة</a>
                                    @endif
                                    @if ($course->certificate_payment_link)
                                        <a href="{{ $course->certificate_payment_link }}" class="modern-course-payment-link" target="_blank" rel="noopener">شراء الشهادة</a>
                                    @endif
                                </div>
                            @endif
                            <a href="{{ route('contactUs') }}" class="modern-course-link">اتصل بنا <span style="font-size:1.2em;display:inline-block;transform:rotate(180deg);">&#8592;</span></a>
                        </div>
                    </div>
                @endforeach
            @else
                @for ($i = 0; $i < 6; $i++)
                    <div class="modern-course-card">
                        <img class="modern-course-img" src="{{ asset('/front_end_style/images/omgs.png') }}" alt="no image">
                        <div class="modern-course-content">
                            <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص </p>
                            <div class="modern-course-meta">
                                <img class="modern-course-teacher-img" src="{{ asset('/front_end_style/images/omgs.png') }}">
                                <span class="modern-course-teacher-name">الاستاذ حمزة</span>
                            </div>
                            <div class="modern-course-time">
                                <i class="far fa-clock"></i>
                                <span>18 ساعة</span>
                            </div>
                            <a href="#" class="modern-course-link"> تفاصيل الدورة </a>
                        </div>
                    </div>
                @endfor
            @endif
        </div>
        <div class="d-flex justify-content-center" style="margin-top:32px;">
            {!! $courses->links() !!}
        </div>
    </div>



@endsection
