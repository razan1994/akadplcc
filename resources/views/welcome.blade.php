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
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                        </div>
                        <div class="c_buttn">
                            <a href="#">الدورات</a>
                            <a href="#">اتصل بنا</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">

                    <div class="c_imgs">
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                        </div>
                                    </div>
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
                <div class="col-md-7">
                    <div class="c_post">
                        <div class="c_body">
                            <h2>نبذة عنا</h2>
                            <h3>تعلم مهارات جديدة
                                تقدم في حياتك المهنية</h3>
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
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
                <div class="col-md-5">

                    <div class="c_image">
                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                                    <div class="swiper-slide">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                            </div>
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص  </p>
                                                </div>
                                                <div class="c_buttn">
                                                    <div class="c_tech">
                                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                                         <span>الدورات</span>
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
                <div class="c_item">
                    <div class="c_body">
                        <h4>احصل على خصم 50%</h4>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي </p>
                    </div>
                </div>
                <div class="c_item">
                    <div class="c_body">
                        <h4>احصل على خصم 50%</h4>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي </p>
                    </div>
                </div>
                <div class="c_item">
                    <div class="c_body">
                        <h4>احصل على خصم 50%</h4>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي </p>
                    </div>
                </div>
                <div class="c_item">
                    <div class="c_body">
                        <h4>احصل على خصم 50%</h4>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي </p>
                    </div>
                </div>
                <div class="c_item">
                    <div class="c_body">
                        <h4>احصل على خصم 50%</h4>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي </p>
                    </div>
                </div>
                <div class="c_item">
                    <div class="c_body">
                        <h4>احصل على خصم 50%</h4>
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي </p>
                    </div>
                </div>
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
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="c_item">
                                        <img src="{{ asset('front_end_style/images/parnter.png') }}">
                                    </div>
                                </div>
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
