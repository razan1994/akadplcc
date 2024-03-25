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
                                <h2>منصة كنف المعرفة</h2>
                                <h3>نوفر لكم تجربة تعليمية متميزة</h3>
                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                    الشكل الخارجي للنص </p>
                            </div>
                            <div class="c_buttn">
                                <a href="#">الدورات</a>
                                <a href="#">اتصل بنا</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">

                        <div class="c_imgs">

                            <div class="c_bgimg c_bg_1">
                                <img src="{{ asset('front_end_style/images/bg1slider.png') }}" loading="lazy">
                            </div>
                            <!-- Swiper pc -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @if (isset($sliders) && $sliders->count() > 0)
                                        @foreach ($sliders as $slider)
                                            <div class="swiper-slide">
                                                <div class="c_item">
                                                    <div class="c_image">
                                                        @if (isset($slider->image) && file_exists($slider->image))
                                                            <img src="{{ asset($slider->image) }}" loading="lazy">
                                                        @else
                                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}"
                                                                loading="lazy">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="swiper-slide">
                                            <div class="c_item">
                                                <div class="c_image">
                                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c_item">
                                                <div class="c_image">
                                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="c_item">
                                                <div class="c_image">
                                                    <img src="{{ asset('/front_end_style/images/omgs.png') }}"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div class="c_bgimg c_bg_2">
                                <img src="{{ asset('front_end_style/images/bg2slider.png') }}" loading="lazy">
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
                                <h2>نبذة عنا</h2>
                                <h3>تعلم مهارات جديدة
                                    تقدم في حياتك المهنية</h3>
                                <p>{{ isset($about->about_us_ar) ? $about->about_us_ar : '<span class="text-danger">Undefined</span>' }}
                                </p>
                            </div>
                            <div class="c_buttn">
                                <a href="#">اقرأ المزيد</a>
                            </div>
                            <div class="c_num">
                                <div class="c_item">
                                    <div class="c_icon">
                                        &#10003;
                                        {{-- check mark  --}}
                                    </div>
                                    <div class="c_bdu">
                                        <span>24/7</span>
                                        <p>الدعم الفني</p>
                                    </div>
                                </div>
                                <div class="c_item">
                                    <div class="c_icon">
                                        &#10003;
                                        {{-- check mark  --}}
                                    </div>
                                    <div class="c_bdu">
                                        <span>+30</span>
                                        <p>دورة تعليمية</p>
                                    </div>
                                </div>
                                <div class="c_item">
                                    <div class="c_icon">
                                        &#10003;
                                        {{-- check mark  --}}
                                    </div>
                                    <div class="c_bdu">
                                        <span>+30</span>
                                        <p>الدعم الفني</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="c_image">
                            @if (isset($about->about_us_image) && file_exists($about->about_us_image))
                                <img src="{{ asset($about->about_us_image) }}" loading="lazy">
                            @else
                                <img src="{{ asset('/front_end_style/images/omgs.png') }}" loading="lazy">
                            @endif
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
        <section class="courses">
            <div class="container_1200">

                <div class="c_section_title">
                    <h3>الدورات</h3>
                </div>
                <div class="c_blocks">
                    <!-- Swiper pc -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @if (isset($courses) && $courses->count() > 0)
                                @foreach ($courses as $index => $course)
                                    <div class="swiper-slide">
                                        <div class="c_item">

                                            <div class="c_image">
                                                <a href="{{ route('course-details', encrypt($course->id)) }}">
                                                    @if (isset($course->main_image) && file_exists($course->main_image))
                                                        <img src="{{ asset($course->main_image) }}" loading="lazy">
                                                    @else
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}"
                                                            loading="lazy">
                                                    @endif
                                                </a>
                                            </div>

                                            <div class="c_post">
                                                <div class="c_body">
                                                    <a href="{{ route('course-details', encrypt($course->id)) }}">
                                                        <h3>{!! isset($course->title_ar) ? $course->title_ar : 'Undefined' !!}</h3>
                                                    </a>
                                                    <p>
                                                        {!! \Illuminate\Support\Str::limit(
                                                            isset($course->desc_ar) ? str_replace('&nbsp;', ' ', $course->desc_ar) : '--------',
                                                            70,
                                                            $end = '...',
                                                        ) !!}
                                                        {!! $course->desc_ar !!}
                                                    </p>
                                                </div>
                                                <div class="c_buttn flex-column flex-lg-row">
                                                    <div class="c_tech">
                                                        @if (isset($course->teacher_image) && file_exists($course->teacher_image))
                                                            <img src="{{ asset($course->teacher_image) }}" loading="lazy">
                                                        @else
                                                            <img src="{{ asset('/front_end_style/images/omgs.png') }}"
                                                                loading="lazy">
                                                        @endif
                                                        <span>{!! isset($course->teacher_ar) ? $course->teacher_ar : 'Undefined' !!}</span>
                                                    </div>
                                                    <a href="#">اتصل بنا</a>
                                                </div>
                                                <div class="c_time">
                                                    <i class="far fa-clock"></i>
                                                    @if (isset($course->section_count) && isset($course->section_time))
                                                        <span> ساعة
                                                            {{ ceil(($course->section_count * $course->section_time) / 60) }}</span>
                                                    @else
                                                        <span>Undefined</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}" loading="lazy">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                                                        القارئ عن التركيز على الشكل الخارجي للنص </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}"
                                                            loading="lazy">
                                                        <span>الاستاذ حمزة</span>
                                                    </div>
                                                    <a href="#">اتصل بنا</a>
                                                </div>
                                                <div class="c_time">
                                                    <i class="far fa-clock"></i>
                                                    <span>18 ساعة</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            @endif
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

        </section>
        {{-- ===================================================================================================== --}}
        {{-- ========================================= End courses Section ======================================== --}}
        {{-- ===================================================================================================== --}}


        {{-- ===================================================================================================== --}}
        {{-- ========================================= Start sales Section ====================================== --}}
        {{-- ===================================================================================================== --}}
        <section class="sales">
            <div class="container_1200">
                <div class="c_slick_sales">

                    @forelse ($banners as $banner)
                        <div class="c_item">
                            @if (isset($banner->image) && file_exists($banner->image))
                                <img src="{{ asset($banner->image) }}" loading="lazy">
                            @else
                                <img src="{{ asset('front_end_style/images/parnter.png') }}" loading="lazy">
                            @endif
                        </div>
                    @empty
                        @for ($i = 0; $i < 5; $i++)
                            <div class="c_item">
                                <div class="c_body">
                                    <h4>احصل على خصم 50%</h4>
                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي </p>
                                </div>
                            </div>
                        @endfor
                    @endforelse ()
                </div>
            </div>
        </section>
        {{-- ===================================================================================================== --}}
        {{-- ========================================= End sales Section ======================================== --}}
        {{-- ===================================================================================================== --}}


        {{-- ===================================================================================================== --}}
        {{-- ======================================= Start Our Brands Section ==================================== --}}
        {{-- ===================================================================================================== --}}
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
                            @else
                                @for ($i = 0; $i < 8; $i++)
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <img src="{{ asset('front_end_style/images/parnter.png') }}"
                                                loading="lazy" />
                                        </div>
                                    </div>
                                @endfor
                            @endif
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        {{-- ===================================================================================================== --}}
        {{-- ======================================== End Our Brands Section ===================================== --}}
        {{-- ===================================================================================================== --}}

    </div>


@endsection
