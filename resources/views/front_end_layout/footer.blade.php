<div class="overflow-hidden footer hidePrint footer-bg-full" style="background: #fbf7f5;">
    <div class="c_main_footer">
        <div class="container_1200">
            <div class="row">

                <div class="col-md">
                    <div class="logofooter">
                        <a href="{{ route('welcome') }}" wire:navigate>
                            <img alt="" loading="lazy" src="{{ asset('front_end_style/images/logo.png') }}">
                        </a>
                    </div>

                    <div class="c_parg">
                        <p>
                            نسعى إلى تقديم تجربة تعليمية متكاملة تواكب التطورات الحديثة في عالم التسويق والإعلانات.
                            نركز على بناء مهارات عملية حقيقية تساعد المتدربين على التميز، وصناعة محتوى مؤثر،
                            وإدارة الحملات باحترافية للوصول إلى أفضل النتائج. رؤيتنا أن نصبح الشريك الأول
                            لكل من يبحث عن تطوير مهاراته وفتح آفاق جديدة في حياته المهنية.
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
                                <a href="{{ route('welcome') }}" wire:navigate>الرئيسية</a>
                            </li>

                            <li>
                                <a href="{{ route('aboutUs') }}" wire:navigate>عن المنصة</a>
                            </li>

                            <li>
                                <a href="{{ route('courses') }}" wire:navigate>الدورات</a>
                            </li>

                            <li>
                                <a href="{{ route('researches') }}" wire:navigate>المكتبة الرقمية</a>
                            </li>

                            <li>
                                <a href="{{ route('news') }}" wire:navigate>المدونة</a>
                            </li>

                            <li>
                                <a href="{{ route('contactUs') }}" wire:navigate>اتصل بنا</a>
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
                                <li>
                                    <a href="{{ route('course-details', $course->slug) }}" wire:navigate>
                                        {{ $course->title_ar }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="c-title">
                        <h3>تواصل معنا</h3>
                    </div>

                    <div class="c-body">

                        @if ($contactUs)
                            <ul>
                                <li>
                                    <a href="tel:{{ $contactUs->phone }}">
                                        <i class="fas fa-phone-alt"></i>
                                        {{ $contactUs->phone }}
                                    </a>
                                </li>

                                <li>
                                    <a href="mailto:{{ $contactUs->email }}">
                                        <i class="fas fa-envelope"></i>
                                        {{ $contactUs->email }}
                                    </a>
                                </li>
                            </ul>
                        @endif

                        <ul class="c_social">
                            <li>
                                <a href="https://web.facebook.com/kanaffcom" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/kanaffcom" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://twitter.com/kanaffcom" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/in/%D9%83%D9%86%D9%81-%D8%A7%D9%84%D9%85%D8%B9%D8%B1%D9%81%D8%A9-810920235/"
                                    target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/channel/UCGjCh3T9mePQ5SDA1zSc1bA" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="pt-4 pb-0 text-white row bg-dark">
        <div class="text-center col">
            <p>
                جميع الحقوق محفوظة -
                <a href="{{ route('welcome') }}" class="text-white text-decoration-none">
                    الأكاديمية الحديثة لإدارة الإعلانات
                </a>

                {{ date('Y') }} ©
            </p>
        </div>
    </div>
</div>
