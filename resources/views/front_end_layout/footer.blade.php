<div class="overflow-hidden footer hidePrint">
    <div class="c_main_footer">
        <div class="container_1200">
            <div class="row">
                <div class="col-md">
                    <div class="logofooter">
                        <a href="{{ route('welcome') }}">
                            <img alt="" loading="lazy" src="{{ asset('front_end_style/images/logo.png') }}">
                        </a>
                    </div>
                    <div class="c_parg">
                        <p>
                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                        </p>
                    </div>
                </div>

                <div class="col-md">
                    <div class="c-title">
                        <h3>القائمة الرئيسية</h3>
                    </div>
                    <div class="c-body">
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}">الرئيسية</a>
                            </li>
                            <li>
                                <a href="{{ route('aboutUs') }}">عن الموقع</a>
                            </li>
                            <li>
                                <a href="{{ route('courses') }}">الدورات</a>
                            </li>
                            <li>
                                <a href="{{ route('researches') }}">الأبحاث</a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}"> الأخبار</a>
                            </li>
                            <li>
                                <a href="">اتصل بنا</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="c-title">
                        <h3>احدث الدورات</h3>
                    </div>
                    <div class="c-body">
                        <ul>
                            @foreach ($latestCourses as $course)
                                <li><a
                                        href="{{ route('course-details', encrypt($course->id)) }}">{{ $course->title_ar }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="c-title">
                        <h3><a href="#"> تواصل معنا</a></h3>
                    </div>
                    <div class="c-body">
                        <ul>
                            <li><a href="tel:{{ $contactUs->phone }}"><i class="fas fa-phone-alt"></i>
                                    {{ $contactUs->phone }} </a></li>
                            <li><a href="mailto:{{ $contactUs->email }}"><i class="fas fa-envelope"></i>
                                    {{ $contactUs->email }} </a></li>
                        </ul>
                        <ul class="c_social">
                            <li><a href="https://web.facebook.com/kanaffcom" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href=" https://www.instagram.com/kanaffcom" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/kanaffcom" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/%D9%83%D9%86%D9%81-%D8%A7%D9%84%D9%85%D8%B9%D8%B1%D9%81%D8%A9-810920235/"
                                    target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCGjCh3T9mePQ5SDA1zSc1bA" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="pt-4 pb-0 text-white row bg-dark">
        <div class="text-center col">
            <p>جميع الحقوق محفوظة - <a href="{{ route('welcome') }}" class="text-white text-decoration-none">
                    كنف المعرفة
                </a>
                {{-- current year --}}
                {{ date('Y') }} ©
            </p>

            <p>Powered by
                <a href="https://smartzone-jo.com/en" class="text-white underline text-decoration-none fw-bold"
                    target="_blank" style="color: #f8f9fa; text-decoration: underline !important; font-weight: bold;">
                    Smart Zone
                </a>
            </p>
        </div>
    </div>
</div>
