@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')


    <div class="body">

        {{-- =========================================================== --}}
        {{-- ================== Sweet Alert Section ==================== --}}
        {{-- =========================================================== --}}
        <div>
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

        {{-- ===================================================================================================== --}}
        {{-- ========================================= Start slider Section ====================================== --}}
        {{-- ===================================================================================================== --}}
        <section class="slider">
            <div class="container_1200">
                <div class="row">
                    <div class="col-md-7">
                        <div class="c_post">
<div class="c_body">
    <h2>الأكاديمية الحديثة لإدارة الإعلانات</h2>
    <h3>نقدّم لكم تدريباً احترافياً يواكب سوق العمل</h3>
    <p>
        نساعدكم على اكتساب مهارات عملية في التخطيط الإعلاني، وصناعة المحتوى،
        وتحليل الحملات لضمان تحقيق أفضل النتائج في عالم التسويق الرقمي.
    </p>
</div>
                            <div class="c_buttn">
                                <a href="{{ route('courses') }}" wire:navigate>الدورات</a>
                                <a href="{{ route('contactUs') }}" wire:navigate>اتصل بنا</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">

                        <div class="">
                            <!-- Swiper pc -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="c_item">
                                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                                </div>
                                            </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
        {{-- ===================================================================================================== --}}
        {{-- ========================================= End slider Section ======================================== --}}
        {{-- ===================================================================================================== --}}




        {{-- ===================================================================================================== --}}
        {{-- ========================================= Start about Section ====================================== --}}
        {{-- ===================================================================================================== --}}
        <section class="about">
    <div class="container_1200">
        <div class="row">
            <div class="col-md-6">
                <div class="c_post">
                    <div class="c_body">
                        <h2>من نحن</h2>
                        <h3>نساعدك على بناء مهارات تفتح لك أبواب النجاح</h3>
                        <p>
                            {{ isset($about->about_us_ar) ? $about->about_us_ar : '
                                <span class="text-danger">Undefined</span>
                            ' }}
                        </p>
                    </div>

                    <div class="c_buttn">
                        <a href="{{ route('aboutUs') }}" wire:navigate>اقرأ المزيد</a>
                    </div>

                    <div class="c_num">
                        <div class="c_item">
                            <div class="c_icon">
                                &#10003;
                            </div>
                            <div class="c_bdu">
                                <span>24/7</span>
                                <p>دعم متواصل</p>
                            </div>
                        </div>

                        <div class="c_item">
                            <div class="c_icon">
                                &#10003;
                            </div>
                            <div class="c_bdu">
                                <span>+30</span>
                                <p>برامج تدريبية</p>
                            </div>
                        </div>

                        <div class="c_item">
                            <div class="c_icon">
                                &#10003;
                            </div>
                            <div class="c_bdu">
                                <span>+3000</span>
                                <p>متدرب ناجح</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="">
                    @if (isset($about->about_us_image) && file_exists($about->about_us_image))
                        <img src="{{ asset($about->about_us_image) }}" loading="lazy">
                    @else
                        <img src="{{ asset('/front_end_style/images/omgs.png') }}" loading="lazy">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

        {{-- ===================================================================================================== --}}
        {{-- ========================================= End about Section ======================================== --}}
        {{-- ===================================================================================================== --}}



        {{-- ===================================================================================================== --}}
        {{-- ========================================= Start courses Section ====================================== --}}
        {{-- ===================================================================================================== --}}
        <style>
        .modern-courses-section {
            background: #f8fafd;
            padding: 60px 0 70px 0;
        }
        .modern-courses-title {
            text-align: center;
            font-size: 2.1rem;
            font-weight: 800;
            color: #203444;
            margin-bottom: 38px;
        }
        .modern-courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
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
        <section class="modern-courses-section">
            <div class="container_1200">
                <div class="modern-courses-title">الدورات</div>
                <div class="modern-courses-grid">
                    @if (isset($courses) && $courses->count() > 0)
                        @foreach ($courses as $index => $course)
                            <div class="modern-course-card">
                                <a href="{{ route('course-details', $course->slug) }}">
                                    @if (isset($course->main_image) && file_exists($course->main_image))
                                        <img class="modern-course-img" src="{{ asset($course->main_image) }}" alt="{{ $course->title_ar }}">
                                    @else
                                        <img class="modern-course-img" src="{{ asset('/front_end_style/images/omgs.png') }}" alt="no image">
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
                                    <a href="{{ route('contactUs') }}" class="modern-course-link">  تفاصيل الدورة </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        {{-- ===================================================================================================== --}}
        {{-- ========================================= End courses Section ======================================== --}}



                {{-- ===================================================================================================== --}}
                {{-- ===================================== Start Call To Action Section =================================== --}}
                {{-- ===================================================================================================== --}}
                <style>
                .call-to-action-section {
                    background: url('/front_end_style/images/cta-bg.png') center center/cover no-repeat;
                    min-height: 260px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 0;
                }
                .cta-container {

                    border-radius: 18px;

                    padding: 0px 32px 28px 0px;
                    max-width: 600px;
                    margin: 132px auto;
                }
                .cta-content h2 {
                    color: #203444;
                    font-size: 2.4rem;
                    font-weight: 800;
                    margin-bottom: 18px;
                }
                .cta-content p {
                    color: #444;
                    font-size: 1.25rem;
                    margin-bottom: 22px;
                }
                .cta-btn {
                    background: #1aaac3;
                    color: #fff;
                    padding: 16px 40px;
                    border-radius: 10px;
                    font-size: 1.25rem;
                    font-weight: 700;
                    text-decoration: none;
                    transition: background 0.18s;
                }
                .cta-btn:hover {
                    background: #0e7a99;
                }
                </style>
                <section class="call-to-action-section">
                    <div class="cta-container">
                        <div class="cta-content">
                            <h2>انضم إلينا اليوم وابدأ رحلتك نحو التميز!</h2>
                            <p>سجّل الآن في دوراتنا وكن جزءًا من مجتمعنا الاحترافي لتطوير مهاراتك وتحقيق أهدافك في عالم التسويق والإعلانات.</p>
                            <a href="{{ route('courses') }}" class="cta-btn">سجّل الآن</a>
                        </div>
                    </div>
                </section>
                {{-- ===================================================================================================== --}}
                {{-- ===================================== End Call To Action Section ===================================== --}}
                {{-- ===================================================================================================== --}}
        {{-- ===================================================================================================== --}}



        {{-- ===================================================================================================== --}}
        {{-- ======================================= Start Our Brands Section ==================================== --}}
        {{-- ===================================================================================================== --}}
        @if ($approved->count() > 0)

            <section class="our_brands">
                <div class="container_750">
                    <div class="c_section_title">
                        <h3>الجهات المعتمدة</h3>
                    </div>
                    <!-- Swiper pc -->
                    <div class="c_bloc">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @if (isset($approved) && $approved->count() > 0)
                                    @foreach ($approved as $app)
                                        <div class="swiper-slide">
                                            <div class="c_item">
                                                @if (isset($app->image) && file_exists($app->image))
                                                    <img src="{{ asset($app->image) }}" loading="lazy">
                                                @else
                                                    <img src="{{ asset('front_end_style/images/parnter.png') }}"
                                                        loading="lazy">
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

                {{-- ===================================================================================================== --}}
        {{-- ======================================== End Our Brands Section ===================================== --}}
        {{-- ===================================================================================================== --}}





        {{-- ===================================================================================================== --}}
        {{-- ======================================= Start Blogs Section ========================================= --}}
        {{-- ===================================================================================================== --}}
        @if(isset($blogs) && $blogs->count() > 0)
        <section class="blogs-section">
            <div class="container_1200">
                <div class="c_section_title">
                    <h3>أحدث المقالات</h3>
                </div>
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-md-4 mb-4">
                            <div class="blog-card" style="background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(32,52,68,0.08);padding:18px;">
                                <div class="blog-image" style="height:280px;overflow:hidden;border-radius:8px;">
                                    @if($blog->image && file_exists(public_path($blog->image)))
                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title_ar }}" style="width:100%;height:100%;object-fit:cover;">
                                    @else
                                        <img src="{{ asset('front_end_style/images/omgs.png') }}" alt="no image" style="width:100%;height:100%;object-fit:cover;">
                                    @endif
                                </div>
                                <div class="blog-content" style="padding-top:12px;">
                                    <h4 style="font-size:1.1rem;font-weight:700;color:#203444;">{{ $blog->title_ar }}</h4>
                                    <p style="font-size:0.98rem;color:#555;min-height:48px;">{{ Str::limit(strip_tags($blog->desc_ar), 70, '...') }}</p>
                                    <a href="#" style="color:#1aaac3;font-weight:600;text-decoration:none;">اقرأ المزيد</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        {{-- ===================================================================================================== --}}
        {{-- ======================================= End Blogs Section =========================================== --}}
        {{-- ===================================================================================================== --}}

    </div>


@endsection
