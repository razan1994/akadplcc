<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>المدرسة الحديثة لإدارة الإعلانات</title>

    <link rel="shortcut icon" href="{{ asset('front_end_style/images/faviconlogo.png') }}" type="image/png">

    {{-- =========================================================
        Main Styles
    ========================================================== --}}
    <link rel="stylesheet" href="{{ asset('front_end_style/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/more.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/style.css') }}">

    {{-- Pagination --}}
    <link rel="stylesheet" href="{{ asset('front_end_style/css/jquery.paginate.css') }}">

    {{-- Swiper --}}
    <link rel="stylesheet" href="{{ asset('front_end_style/css/swiper-bundle.min.css') }}">

    {{-- Slick --}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    {{-- Google Verification --}}
    <meta name="google-site-verification" content="zBHgCOISHWrCD81xSxrV_A7gKj92xic531u1oe1hRLI">

    {{-- SweetAlert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>

    <style>
        :root {
            --ak-primary: #1aaac3;
            --ak-primary-dark: #0e7a99;
            --ak-dark: #203444;
            --ak-light: #f8fafd;
            --ak-beige: #e8dcc4;
            --ak-whatsapp: #25d366;
            --ak-shadow: 0 8px 28px rgba(32, 52, 68, 0.12);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            direction: rtl !important;
        }

        /* =====================================================
           Section Title
        ===================================================== */
        .c_section_title {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            position: relative;
            margin-bottom: 32px;
            padding-bottom: .5rem;
            text-align: center;
        }

        .c_section_title h3 {
            display: inline-block;
            position: relative;
            z-index: 1;
            margin: 0;
            padding: 0 .5rem;
            color: var(--ak-dark);
            background: transparent;
            border-radius: 0 0 8px 8px;
            font-size: 2.2rem;
            font-weight: 900;
            letter-spacing: .5px;
            text-align: center;
        }

        /* =====================================================
           CTA
        ===================================================== */
        .call-to-action-section {
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
            padding: 64px 20px 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(120deg, var(--ak-dark) 0%, var(--ak-primary) 100%);
            box-shadow: 0 4px 32px rgba(32, 52, 68, .10);
            z-index: 2;
        }

        .cta-container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            color: #fff;
            text-align: center;
        }

        .cta-content {
            max-width: 760px;
            margin: 0 auto;
        }

        .cta-content h2 {
            margin-bottom: 18px;
            color: #fff;
            font-size: 2.5rem;
            font-weight: 900;
            line-height: 1.5;
        }

        .cta-content p {
            margin: 0 auto 32px;
            color: rgba(255, 255, 255, .92);
            font-size: 1.15rem;
            line-height: 2;
        }

        .cta-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 44px;
            border: 0;
            border-radius: 32px;
            background: #fff;
            color: var(--ak-primary) !important;
            box-shadow: 0 2px 12px rgba(32, 52, 68, .10);
            font-size: 1.1rem;
            font-weight: 700;
            text-decoration: none !important;
            transition: background .2s ease,
                color .2s ease,
                box-shadow .2s ease,
                transform .2s ease;
        }

        .cta-btn:hover {
            background: var(--ak-dark);
            color: #fff !important;
            box-shadow: 0 4px 24px rgba(32, 52, 68, .18);
            transform: translateY(-2px);
        }

        /* =====================================================
           Fixed Social Media
        ===================================================== */
        .fixed-social-bar {
            position: fixed;
            top: 50%;
            right: 18px;
            z-index: 9998;
            display: flex;
            flex-direction: column;
            gap: 10px;
            transform: translateY(-50%);
            opacity: 0;
            animation: socialBarFadeIn .8s ease forwards;
        }

        .fixed-social-bar a {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e3e8ee;
            border-radius: 50%;
            background: #fff;
            color: var(--ak-dark);
            box-shadow: 0 2px 10px rgba(44, 62, 80, .10);
            font-size: 1.25rem;
            text-decoration: none !important;
            transition: background .2s ease,
                color .2s ease,
                box-shadow .2s ease,
                transform .2s ease;
        }

        .fixed-social-bar a i {
            color: inherit;
        }

        .fixed-social-bar a:hover {
            background: var(--ak-primary);
            color: #fff;
            box-shadow: 0 5px 18px rgba(26, 170, 195, .20);
            transform: scale(1.10);
        }

        @keyframes socialBarFadeIn {
            from {
                opacity: 0;
                transform: translateY(-50%) translateX(12px);
            }

            to {
                opacity: 1;
                transform: translateY(-50%) translateX(0);
            }
        }

        /* =====================================================
           Floating WhatsApp
        ===================================================== */
        .floating-whatsapp {
            position: fixed;
            left: 18px;
            bottom: 22px;
            z-index: 9999;
            min-width: 128px;
            height: 46px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 0 16px;
            border: 1px solid rgba(37, 211, 102, .22);
            border-radius: 30px;
            background: #fff;
            color: var(--ak-whatsapp) !important;
            box-shadow: var(--ak-shadow);
            text-decoration: none !important;
            transition: transform .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }

        .floating-whatsapp i {
            color: var(--ak-whatsapp);
            font-size: 1.45rem;
        }

        .floating-whatsapp .whatsapp-text {
            color: var(--ak-dark);
            font-size: .9rem;
            font-weight: 700;
            white-space: nowrap;
        }

        .floating-whatsapp:hover {
            background: #f2fff6;
            box-shadow: 0 8px 26px rgba(37, 211, 102, .20);
            transform: translateY(-3px);
        }

        /* =====================================================
           Back To Top
        ===================================================== */
        .back-to-top {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 9999;
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 0;
            border-radius: 50%;
            background: var(--ak-beige);
            color: var(--ak-dark);
            box-shadow: var(--ak-shadow);
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transform: translateY(10px);
            transition: opacity .3s ease,
                visibility .3s ease,
                background .2s ease,
                color .2s ease,
                transform .2s ease;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translateY(0);
        }

        .back-to-top:hover {
            background: var(--ak-dark);
            color: var(--ak-beige);
            transform: translateY(-4px);
        }

        /* =====================================================
           Responsive
        ===================================================== */
        @media (max-width: 767px) {
            .c_section_title {
                margin-bottom: 20px;
            }

            .c_section_title h3 {
                font-size: 1.45rem;
            }

            .call-to-action-section {
                padding: 44px 18px 38px;
            }

            .cta-content h2 {
                font-size: 1.55rem;
            }

            .cta-content p {
                font-size: .95rem;
                margin-bottom: 24px;
            }

            .cta-btn {
                padding: 11px 28px;
                font-size: .95rem;
            }

            .fixed-social-bar {
                right: 7px;
                gap: 7px;
            }

            .fixed-social-bar a {
                width: 38px;
                height: 38px;
                font-size: 1rem;
            }

            .floating-whatsapp {
                left: 10px;
                bottom: 12px;
                min-width: 44px;
                width: 44px;
                height: 44px;
                padding: 0;
            }

            .floating-whatsapp .whatsapp-text {
                display: none;
            }

            .floating-whatsapp i {
                font-size: 1.3rem;
            }

            .back-to-top {
                right: 10px;
                bottom: 12px;
                width: 42px;
                height: 42px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    {{-- =========================================================
        Global Background
    ========================================================== --}}
    <div class="global-bubbles" aria-hidden="true">
        <span class="g-bubble"></span>
        <span class="g-bubble"></span>
        <span class="g-bubble"></span>
        <span class="g-bubble"></span>
        <span class="g-bubble"></span>
        <span class="g-bubble"></span>
        <span class="g-bubble"></span>
        <span class="g-bubble"></span>
    </div>

    <div class="wrapper_1400">

        {{-- Preloader --}}
        @include('front_end_layout.preloader')

        {{-- Header --}}
        @livewire('frontend.layout.navbar')

        {{-- Page Content --}}
        <main>
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('front_end_layout.footer')

    </div>

    {{-- =========================================================
    Floating Social Links
    Replace the placeholder URLs with the real accounts.
========================================================== --}}
    <div class="fixed-social-bar d-none d-md-flex" aria-label="روابط التواصل الاجتماعي">

        <a href="https://www.facebook.com/akadsschool" target="_blank" rel="noopener noreferrer" title="Facebook" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="https://www.youtube.com/@alikhdeirads" target="_blank" rel="noopener noreferrer" title="YouTube" aria-label="YouTube">
            <i class="fab fa-youtube"></i>
        </a>

        <a href="https://www.instagram.com/alikhdeirads/" target="_blank" rel="noopener noreferrer" title="Instagram"
            aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="mailto:info@example.com" title="Email" aria-label="Email">
            <i class="fas fa-envelope"></i>
        </a>

    </div>

    {{-- =========================================================
        Floating WhatsApp
        Add the real WhatsApp number after https://wa.me/
    ========================================================== --}}
    <a href="https://wa.me/" class="floating-whatsapp" target="_blank" rel="noopener noreferrer"
        title="تواصل معنا عبر واتساب" aria-label="تواصل معنا عبر واتساب">
        <i class="fab fa-whatsapp"></i>
        <span class="whatsapp-text">تواصل معنا</span>
    </a>

    {{-- Back To Top --}}
    <button type="button" class="back-to-top" id="backToTopBtn" title="العودة للأعلى" aria-label="العودة للأعلى">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path d="M12 19V5M12 5L6 11M12 5L18 11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>


    {{-- =========================================================
        JavaScript Libraries
    ========================================================== --}}
    <script src="{{ asset('front_end_style/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('front_end_style/js/popper.min.js') }}"></script>
    <script src="{{ asset('front_end_style/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_end_style/js/custom.js') }}"></script>

    {{-- Pagination --}}
    <script src="{{ asset('front_end_style/js/jquery.paginate.js') }}"></script>

    {{-- Swiper --}}
    <script src="{{ asset('front_end_style/js/swiper-bundle.min.js') }}"></script>

    {{-- Slick --}}
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    {{-- Project Custom JS --}}
    <script src="{{ asset('js/custom.js') }}"></script>


    {{-- =========================================================
        Page Utilities
    ========================================================== --}}
    <script>
        $(function() {

            /* ---------------------------------------------
               Preloader
            --------------------------------------------- */
            function hidePreloader() {
                const preloader = $('#preloader');

                if (preloader.length) {
                    preloader.fadeOut('slow');
                }
            }

            $(window).on('load', hidePreloader);

            setTimeout(hidePreloader, 5000);


            /* ---------------------------------------------
               Registration Code Validation
            --------------------------------------------- */
            $('#codeInput').on('input', function() {
                const code = $(this).val();
                const validationMessage = $('#codeValidationMessage');

                $.ajax({
                    url: "{{ route('checkCodeIfExist') }}",
                    type: "GET",
                    data: {
                        code: code
                    },
                    success: function(response) {
                        validationMessage.html(response.message);

                        if (response.status === 'success') {
                            $('#codeInput').attr('readonly', true);

                            validationMessage
                                .parent()
                                .removeClass('text-danger')
                                .addClass('text-success');
                        }
                    },
                    error: function() {
                        validationMessage.html('حدث خطأ ما');
                    }
                });
            });


            /* ---------------------------------------------
               Back To Top
            --------------------------------------------- */
            const backToTopBtn = document.getElementById('backToTopBtn');

            if (backToTopBtn) {
                const toggleBackToTop = function() {
                    backToTopBtn.classList.toggle('show', window.scrollY > 300);
                };

                window.addEventListener('scroll', toggleBackToTop, {
                    passive: true
                });

                toggleBackToTop();

                backToTopBtn.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }


            /* ---------------------------------------------
               Pagination
            --------------------------------------------- */
            if ($('.data-container').length && $.fn.paginate) {
                $('.data-container').paginate({
                    perPage: 6,
                    scope: $('div.pagenitems')
                });
            }


            /* ---------------------------------------------
               Slick
            --------------------------------------------- */
            if ($('.c_slick_sales').length && $.fn.slick) {
                $('.c_slick_sales').slick({
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    arrows: false,
                    dots: true
                });
            }

        });


        /* =================================================
           Swipers
        ================================================= */
        document.addEventListener('DOMContentLoaded', function() {

            if (typeof Swiper === 'undefined') {
                return;
            }

            if (document.querySelector('.slider .swiper-container')) {
                new Swiper('.slider .swiper-container', {
                    slidesPerView: 1,
                    loop: false,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false
                    },
                    pagination: {
                        el: '.slider .swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.slider .swiper-button-next',
                        prevEl: '.slider .swiper-button-prev'
                    }
                });
            }

            if (document.querySelector('.courses .mySwiper')) {
                new Swiper('.courses .mySwiper', {
                    slidesPerView: 2,
                    spaceBetween: 25,
                    loop: false,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false
                    },
                    grid: {
                        rows: 2
                    },
                    pagination: {
                        el: '.courses .swiper-pagination',
                        clickable: true
                    },
                    breakpoints: {
                        200: {
                            slidesPerView: 1
                        },
                        600: {
                            slidesPerView: 2
                        },
                        800: {
                            slidesPerView: 2
                        }
                    }
                });
            }

            if (document.querySelector('.our_brands .swiper-container')) {
                new Swiper('.our_brands .swiper-container', {
                    slidesPerView: 4,
                    spaceBetween: 50,
                    loop: false,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false
                    },
                    pagination: {
                        el: '.our_brands .swiper-pagination',
                        clickable: true
                    },
                    breakpoints: {
                        200: {
                            slidesPerView: 1
                        },
                        600: {
                            slidesPerView: 2
                        },
                        800: {
                            slidesPerView: 4
                        }
                    }
                });
            }

            if (document.querySelector('.c_brandas .swiper-container')) {
                new Swiper('.c_brandas .swiper-container', {
                    slidesPerView: 6,
                    spaceBetween: 50,
                    loop: false,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false
                    },
                    pagination: {
                        el: '.c_brandas .swiper-pagination',
                        clickable: true
                    },
                    breakpoints: {
                        200: {
                            slidesPerView: 1
                        },
                        600: {
                            slidesPerView: 2
                        },
                        800: {
                            slidesPerView: 6
                        }
                    }
                });
            }

            if (
                document.querySelector('.c_coursubs_Swiper .mySwiper') &&
                document.querySelector('.c_coursubs_Swiper .mySwiper2')
            ) {
                const courseThumbs = new Swiper('.c_coursubs_Swiper .mySwiper', {
                    spaceBetween: 20,
                    slidesPerView: 4,
                    watchSlidesProgress: true,
                    direction: 'vertical',
                    mousewheel: true
                });

                new Swiper('.c_coursubs_Swiper .mySwiper2', {
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.c_coursubs_Swiper .swiper-button-next',
                        prevEl: '.c_coursubs_Swiper .swiper-button-prev'
                    },
                    thumbs: {
                        swiper: courseThumbs
                    }
                });
            }

        });
    </script>


    {{-- =========================================================
        Meta Pixel
    ========================================================== --}}
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;

            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) :
                    n.queue.push(arguments);
            };

            if (!f._fbq) f._fbq = n;

            n.push = n;
            n.loaded = true;
            n.version = '2.0';
            n.queue = [];

            t = b.createElement(e);
            t.async = true;
            t.src = v;

            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);

        }(
            window,
            document,
            'script',
            'https://connect.facebook.net/en_US/fbevents.js'
        );

        fbq('init', '365919791763759');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=365919791763759&ev=PageView&noscript=1" alt="">
    </noscript>

    @stack('scripts')

</body>

</html>
