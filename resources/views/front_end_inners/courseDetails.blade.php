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
                    <h1>صفحة الدورة</h1>
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
                                    <h4>دورة تصميم واجهة المستخدم</h4>
                                </div>
                                <div class="c_body">
                                    <p>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                                            الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ
                                            -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.
                                            العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص،
                                            وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث.
                                            على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة،
                                            وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.


                                    </p>
                                </div>
                                <div class="c_tafsell">
                                    <div class="c_itme">
                                        <p><img src="{{ asset('front_end_style/images/clock.png') }}">
                                            <label>مدة الدورة   : </label>
                                            <span>  اسبوعين  </span>
                                        </p>
                                    </div>
                                    <div class="c_itme">
                                        <p><img src="{{ asset('front_end_style/images/clock.png') }}">
                                            <label>مدة الحصة   : </label>
                                            <span>  ساعة ونص  </span>
                                        </p>
                                    </div>
                                    <div class="c_itme">
                                        <p><img src="{{ asset('front_end_style/images/clock.png') }}">
                                            <label>عدد الحصص    : </label>
                                            <span>  8  </span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="c_left">
                            <div class="c_box_subscribe">
                                <div class="c_video">
                                    <video  class="bgvid" id="myvideo" muted controls>
                                        <source src="{{ asset('front_end_style/images/AfterEffectsss.mp4') }}" type="video/mp4" />
                                    </video>
                                </div>
                                <div class="c_btn_subscribe">
                                    <a href="#">اشترك</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c_brandas">
                <div class="container_1033">
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
            </div>

            <div class="c_info2">
                <div class="container_1200">
                    <div class="c_block">
                        <div class="c_right">
                            <div class="c_box_show">
                                <div class="c_bloc">
                                    <div class="c_img">
                                            <img src="{{ asset('front_end_style/images/SHADA.png') }}">
                                    </div>
                                    <div class="c_btn_subscribe">
                                        <a href="#">اشترك</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="c_left">
                            <div class="c_itm_prof">
                                <div class="c_img">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                </div>
                                <div class="c_bdy">
                                    <span>الاستاذ حمزة</span>
                                    <h6>لوريم ايبسوم</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
