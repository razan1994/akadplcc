
<!DOCTYPE html>

<html>

<head>
                                        <style>
                                            /* Call To Action Section */
                                            .call-to-action-section {
                                                width: 100vw;
                                                position: relative;
                                                left: 50%;
                                                right: 50%;
                                                margin-left: -50vw;
                                                margin-right: -50vw;
                                                background: linear-gradient(120deg, #203444 0%, #1aaac3 100%);
                                                padding: 64px 0 56px 0;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                box-shadow: 0 4px 32px rgba(32,52,68,0.10);
                                                z-index: 2;
                                            }
                                            .cta-container {
                                                width: 100%;
                                                max-width: 900px;
                                                margin: 0 auto;
                                                text-align: center;
                                                color: #fff;
                                            }
                                            .cta-content h2 {
                                                font-size: 2.5rem;
                                                font-weight: 900;
                                                margin-bottom: 18px;
                                                letter-spacing: 0.5px;
                                                text-shadow: 0 2px 12px rgba(32,52,68,0.10);
                                            }
                                            .cta-content p {
                                                font-size: 1.25rem;
                                                margin-bottom: 32px;
                                                font-weight: 400;
                                                text-shadow: 0 1px 6px rgba(32,52,68,0.08);
                                            }
                                            .cta-btn {
                                                display: inline-block;
                                                background: #fff;
                                                color: #1aaac3;
                                                font-size: 1.2rem;
                                                font-weight: 700;
                                                padding: 14px 44px;
                                                border-radius: 32px;
                                                box-shadow: 0 2px 12px rgba(32,52,68,0.10);
                                                text-decoration: none;
                                                transition: background 0.2s, color 0.2s, box-shadow 0.2s;
                                                border: none;
                                            }
                                            .cta-btn:hover {
                                                background: #203444;
                                                color: #fff;
                                                box-shadow: 0 4px 24px rgba(32,52,68,0.18);
                                            }
                                            @media (max-width: 600px) {
                                                .call-to-action-section {
                                                    padding: 32px 0 24px 0;
                                                }
                                                .cta-content h2 {
                                                    font-size: 1.3rem;
                                                }
                                                .cta-content p {
                                                    font-size: 1rem;
                                                }
                                                .cta-btn {
                                                    font-size: 1rem;
                                                    padding: 10px 24px;
                                                }
                                            }
                                        </style>
                            <style>
                                /* Fixed Social Media Bar - Simple Animation */
                                .fixed-social-bar {
                                    position: absolute;
                                    top: 50%;
                                    right: 18px;
                                    transform: translateY(-50%);
                                    z-index: 9999;
                                    display: flex;
                                    flex-direction: column;
                                    gap: 12px;
                                    opacity: 0;
                                    animation: social-bar-fade-in 1.2s ease forwards;
                                }
                                @keyframes social-bar-fade-in {
                                    from { opacity: 0; }
                                    to { opacity: 1; }
                                }
                                .fixed-social-bar a {
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    width: 44px;
                                    height: 44px;
                                    background: #fff;
                                    border-radius: 50%;
                                    box-shadow: 0 2px 8px rgba(44,62,80,0.10);
                                    color: #203444;
                                    font-size: 1.5rem;
                                    transition: background 0.2s, color 0.2s, box-shadow 0.2s, transform 0.2s;
                                    border: 1px solid #e3e8ee;
                                    text-decoration: none;
                                }
                                .fixed-social-bar a:hover {
                                    background: #1aaac3;
                                    color: #fff;
                                    box-shadow: 0 4px 16px rgba(26,170,195,0.15);
                                    transform: scale(1.12);
                                }
                                .fixed-social-bar a:hover i {
                                    color: #fff;
                                }
                                .fixed-social-bar a i {
                                    color: #203444;
                                    transition: color 0.2s;
                                }
                                @media (max-width: 600px) {
                                    .fixed-social-bar {
                                        left: 6px;
                                        right: auto;
                                        gap: 8px;
                                    }
                                    .fixed-social-bar a {
                                        width: 38px;
                                        height: 38px;
                                        font-size: 1.2rem;
                                    }
                                }
                            </style>
                                    <style>
                                        /* Elegant Section Title Style */
                                        .c_section_title {
                                            display: flex;
                                            align-items: flex-end;
                                            justify-content: center;
                                            margin-bottom: 32px;
                                            position: relative;
                                            padding-bottom: 0.5rem;
                                            text-align: center;
                                        }
                                        .c_section_title h3 {
                                            font-size: 2.2rem;
                                            font-weight: 900;
                                            color: #203444;
                                            margin: 0;
                                            padding: 0 0.5rem 0 0.5rem;
                                            position: relative;
                                            z-index: 1;
                                            letter-spacing: 0.5px;
                                            /* text-shadow: 0 2px 8px rgba(32,52,68,0.08);
                                            border-bottom: 4px solid #1aaac3; */
                                            display: inline-block;
                                            border-radius: 0 0 8px 8px;
                                            background: #fff;
                                            transition: border-color 0.2s, color 0.2s;
                                            text-align: center;
                                        }
                                        .c_section_title h3:hover {
                                            /* border-color: #203444; */
                                            color: #203444 !important;
                                            background: none;
                                            -webkit-background-clip: initial;
                                            -webkit-text-fill-color: initial;
                                            background-clip: initial;
                                            text-fill-color: initial;
                                        }
                                        @media (max-width: 600px) {
                                            .c_section_title {
                                                margin-bottom: 18px;
                                            }
                                            .c_section_title h3 {
                                                font-size: 1.3rem;
                                                padding: 0 0.3rem 0 0.3rem;
                                                border-bottom-width: 2.5px;
                                            }
                                        }
                                    </style>
                            <style>
                            /* Back to Top Button */
                            .back-to-top {
                                position: fixed;
                                bottom: 64px;
                                right: 24px;
                                z-index: 9999;
                                width: 48px;
                                height: 48px;
                                background: #e8dcc4;
                                color: #203444;
                                border-radius: 50%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                font-size: 2rem;
                                box-shadow: 0 4px 24px rgba(32,52,68,0.12);
                                cursor: pointer;
                                opacity: 0;
                                pointer-events: none;
                                transition: opacity 0.3s, background 0.2s, transform 0.2s;
                                border: none;
                                outline: none;
                                animation: backtotop-fadein 0.7s;
                            }
                            .back-to-top.show {
                                opacity: 1;
                                pointer-events: auto;
                                animation: backtotop-bounce 1.2s;
                            }
                            .back-to-top:hover {
                                background: #203444;
                                color: #e8dcc4;
                                transform: translateY(-6px) scale(1.08);
                                box-shadow: 0 8px 32px rgba(32,52,68,0.18);
                            }
                            @media (max-width: 600px) {
                                .back-to-top {
                                    right: 10px;
                                    bottom: 48px;
                                    width: 38px;
                                    height: 38px;
                                    font-size: 1.3rem;
                                }
                            }
                            @keyframes backtotop-bounce {
                                0% { transform: scale(0.7); opacity: 0.2; }
                                60% { transform: scale(1.15); opacity: 1; }
                                80% { transform: scale(0.95); }
                                100% { transform: scale(1); }
                            }
                            @keyframes backtotop-fadein {
                                from { opacity: 0; }
                                to { opacity: 1; }
                            }
                        </style>
                    <style>
                        /* Call To Action Section */
                        .call-to-action-section {
                            width: 100vw;
                            position: relative;
                            left: 50%;
                            right: 50%;
                            margin-left: -50vw;
                            margin-right: -50vw;
                            background: linear-gradient(120deg, #203444 0%, #1aaac3 100%);
                            padding: 64px 0 56px 0;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            box-shadow: 0 4px 32px rgba(32,52,68,0.10);
                            z-index: 2;
                        }
                        .cta-container {
                            width: 100%;
                            max-width: 900px;
                            margin: 0 auto;
                            text-align: center;
                            color: #fff;
                        }
                        .cta-content h2 {
                            font-size: 2.5rem;
                            font-weight: 900;
                            margin-bottom: 18px;
                            letter-spacing: 0.5px;
                            text-shadow: 0 2px 12px rgba(32,52,68,0.10);
                        }
                        .cta-content p {
                            font-size: 1.25rem;
                            margin-bottom: 32px;
                            font-weight: 400;
                            text-shadow: 0 1px 6px rgba(32,52,68,0.08);
                        }
                        .cta-btn {
                            display: inline-block;
                            background: #fff;
                            color: #1aaac3;
                            font-size: 1.2rem;
                            font-weight: 700;
                            padding: 14px 44px;
                            border-radius: 32px;
                            box-shadow: 0 2px 12px rgba(32,52,68,0.10);
                            text-decoration: none;
                            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
                            border: none;
                        }
                        .cta-btn:hover {
                            background: #203444;
                            color: #fff;
                            box-shadow: 0 4px 24px rgba(32,52,68,0.18);
                        }
                        @media (max-width: 600px) {
                            .call-to-action-section {
                                padding: 32px 0 24px 0;
                            }
                            .cta-content h2 {
                                font-size: 1.3rem;
                            }
                            .cta-content p {
                                font-size: 1rem;
                            }
                            .cta-btn {
                                font-size: 1rem;
                                padding: 10px 24px;
                            }
                        }
                    </style>
        <style>
            /* Fixed Social Media Bar */
            .fixed-social-bar {
                position: absolute;
                top: 50%;
                right: 18px;
                transform: translateY(-50%);
                z-index: 9999;
                display: flex;
                flex-direction: column;
                gap: 12px;
            }
            .fixed-social-bar a {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 44px;
                height: 44px;
                background: #fff;
                border-radius: 50%;
                box-shadow: 0 2px 8px rgba(44,62,80,0.10);
                color: #203444;
                font-size: 1.5rem;
                transition: background 0.2s, color 0.2s, box-shadow 0.2s;
                border: 1px solid #e3e8ee;
                text-decoration: none;
            }
            .fixed-social-bar a:hover {
                background: #1aaac3;
                color: #fff;
                box-shadow: 0 4px 16px rgba(26,170,195,0.15);
            }
            .fixed-social-bar a:hover i {
                color: #fff;
            }
            .fixed-social-bar a i {
                color: #203444;
                transition: color 0.2s;
            }
            @media (max-width: 600px) {
                .fixed-social-bar {
                    right: 6px;
                    gap: 8px;
                }
                .fixed-social-bar a {
                    width: 38px;
                    height: 38px;
                    font-size: 1.2rem;
                }
            }
        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="csrf-token" conبشtent="{{ csrf_token() }}"> --}}
    <title>المدرسة الحديثة لادارة الاعلانات </title>
    <link rel="shortcut icon" href="{{ asset('front_end_style/images/faviconlogo.png') }}" type="image/png">


    <link rel="stylesheet" href="{{ asset('front_end_style/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front_end_style/css/main.css') }}">
                <style>
                    /* Elegant Section Title Style */

                                /* Floating WhatsApp Icon - Cleaned and with Text */
                                .floating-whatsapp {
                                    position: fixed;
                                    left: 18px;
                                    bottom: 24px;
                                    z-index: 9999;
                                    background: #fff;
                                    color: #25d366;
                                    min-width: 120px;
                                    height: 44px;
                                    border-radius: 22px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: flex-start;
                                    font-size: 1.3rem;
                                    box-shadow: 0 2px 12px rgba(32,52,68,0.10);
                                    transition: box-shadow 0.2s, transform 0.2s;
                                    text-decoration: none;
                                    padding: 0 16px;
                                    gap: 8px;
                                    animation: whatsapp-shake 1.2s infinite;
                                                                @keyframes whatsapp-shake {
                                                                    0% { transform: translateX(0); }
                                                                    20% { transform: translateX(-4px); }
                                                                    40% { transform: translateX(4px); }
                                                                    60% { transform: translateX(-4px); }
                                                                    80% { transform: translateX(4px); }
                                                                    100% { transform: translateX(0); }
                                                                }
                                }
                                .floating-whatsapp i {
                                    display: inline-block;
                                    font-size: 1.6rem;
                                    vertical-align: middle;
                                    color: #25d366;
                                    margin-right: 8px;
                                }
                                .floating-whatsapp .whatsapp-text {
                                    font-size: 1rem;
                                    font-weight: 500;
                                    color: #203444;
                                    margin-right: 0;
                                    letter-spacing: 0.5px;
                                    white-space: nowrap;
                                    transition: color 0.2s;
                                }
                                .floating-whatsapp:hover {
                                    background: #e8f5e9;
                                    color: #25d366;
                                    box-shadow: 0 4px 20px rgba(32,52,68,0.18);
                                    transform: scale(1.05);
                                }
                                @media (max-width: 600px) {
                                    .floating-whatsapp {
                                        left: 8px;
                                        bottom: 12px;
                                        min-width: 90px;
                                        height: 36px;
                                        font-size: 1rem;
                                        padding: 0 8px;
                                    }
                                    .floating-whatsapp i {
                                        font-size: 1.2rem;
                                        margin-right: 6px;
                                    }
                                    .floating-whatsapp .whatsapp-text {
                                        font-size: 0.85rem;
                                    }
                                }
                            </style>

    <link rel="stylesheet" href="{{ asset('front_end_style/css/more.css') }}">
    <!-- Laravel Mix compiled CSS -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}"> --}}
    <meta name="google-site-verification" content="zBHgCOISHWrCD81xSxrV_A7gKj92xic531u1oe1hRLI" />
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}



    <!-- Link paginate CSS -->
    <link rel="stylesheet" rel="preload" href="{{ asset('front_end_style/css/jquery.paginate.css') }}">
    {{-- <script src="{{ asset('front_end_style/js/jquery.colorbox-min.js') }}"></script> --}}

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('front_end_style/css/swiper-bundle.min.css') }}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Link slick CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    {{--
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous"> --}}

    {{-- ========================================================== --}}
    {{-- =================== Sweet Alert Section ================== --}}
    {{-- ========================================================== --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>
    {{-- ========================================================== --}}
    {{-- =================== Sweet Alert Section ================== --}}
    {{-- ========================================================== --}}
    <link rel="stylesheet" href="{{ asset('front_end_style/css/style.css') }}">

        <style>
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 64px;
            right: 24px;
            z-index: 9999;
            width: 48px;
            height: 48px;
            background: #e8dcc4;
            color: #203444;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 4px 24px rgba(32,52,68,0.12);
            cursor: pointer;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s, background 0.2s, transform 0.2s;
            border: none;
            outline: none;
            animation: backtotop-fadein 0.7s;
        }
        .back-to-top.show {
            opacity: 1;
            pointer-events: auto;
            animation: backtotop-bounce 1.2s;
        }
        .back-to-top:hover {
            background: #203444;
            color: #e8dcc4;
            transform: translateY(-6px) scale(1.08);
            box-shadow: 0 8px 32px rgba(32,52,68,0.18);
        }
        @media (max-width: 600px) {
            .back-to-top {
                right: 10px;
                bottom: 48px;
                width: 38px;
                height: 38px;
                font-size: 1.3rem;
            }
        }
        @keyframes backtotop-bounce {
            0% { transform: scale(0.7); opacity: 0.2; }
            60% { transform: scale(1.15); opacity: 1; }
            80% { transform: scale(0.95); }
            100% { transform: scale(1); }
        }
        @keyframes backtotop-fadein {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTopBtn" title="العودة للأعلى" aria-label="Back to top">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 19V5M12 5L6 11M12 5L18 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
    <script>
        // Back to Top Button
        const backToTopBtn = document.getElementById('backToTopBtn');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
    @stack('styles')

</head>

<body style="direction: rtl !important">

    <!-- Global Animated Bubbles Background -->
    <div class="global-bubbles">
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
        @include('front_end_layout.preloader')


        <!-- ================================================================= -->
        <!-- ==================== Start Header Section ======================= -->
        <!-- ================================================================= -->
        @livewire('frontend.layout.navbar')
        <!-- ================================================================= -->
        <!-- ====================== End Header Section ======================= -->
        <!-- ================================================================= -->

        <!-- ================================================================= -->
        <!-- ==================== Start Content Section ====================== -->
        <!-- ================================================================= -->
        @yield('content')
        <!-- ================================================================ -->
        <!-- ===================== End Content Section ======================= -->
        <!-- ================================================================= -->

        <!-- ================================================================= -->
        <!-- ==================== Start Footer Section ======================= -->
        <!-- ================================================================= -->
        @include('front_end_layout.footer')
        <!-- ================================================================= -->
        <!-- ====================== End Footer Section ======================= -->
        <!-- ================================================================= -->


    </div>

    <!-- Fixed Social Media Bar -->
    <div class="fixed-social-bar">
        <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="mailto:info@example.com" title="Email"><i class="fas fa-envelope"></i></a>
    </div>
    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/" class="floating-whatsapp" target="_blank" title="تواصل معنا">
        <i class="fab fa-whatsapp"></i>
        <span class="whatsapp-text">تواصل معنا</span>
    </a>
</body>

<script src="{{ asset('front_end_style/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('front_end_style/js/popper.min.js') }}"></script>
<script src="{{ asset('front_end_style/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front_end_style/js/custom.js') }}"></script>
<!-- Pagination JS -->
<script src="{{ asset('front_end_style/js/jquery.paginate.js') }}"></script>
<!-- Swiper JS -->
<script src="{{ asset('front_end_style/js/swiper-bundle.min.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- slick JS -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="{{ asset('js/custom.js') }}"></script>

{{-- For The Code Registeration Input --}}
<script>
    // Preloader: Hide on window load, but always hide after 5 seconds as fallback
    function hidePreloader() {
        console.log('[Preloader] hidePreloader called');
        var preloader = document.getElementById('preloader');
        if (preloader) {
            console.log('[Preloader] #preloader exists, fading out');
            $('#preloader').fadeOut('slow');
        } else {
            console.warn('[Preloader] #preloader NOT found');
        }
    }
    window.onload = function() {
        console.log('[Preloader] window.onload fired');
        hidePreloader();
    };
    setTimeout(function() {
        console.log('[Preloader] 5s fallback timeout fired');
        hidePreloader();
    }, 5000);


        $('#codeInput').on('input', function() {
            let code = $(this).val();
            let validationMessage = $('#codeValidationMessage');
            $.ajax({
                url: "{{ route('checkCodeIfExist') }}",
                type: "GET",
                data: {
                    code: code,
                },
                success: function(response) {
                    if (response.status == 'success') {
                        validationMessage.html(response.message);
                        // make the input readonly
                        $('#codeInput').attr('readonly', true);
                        // take the parent of this element and replace class text-danger with text-success
                        validationMessage.parent()
                            .removeClass('text-danger')
                            .addClass('text-success');
                    } else {
                        validationMessage.html(response.message);
                    }
                },
                error: function(err) {
                    $('#codeValidationMessage').html('حدث خطأ ما');
                },
            });
        });
</script>
{{-- swipers --}}
<script>
    // slider swiper
    var swiper = new Swiper('.slider .swiper-container', {
        slidesPerView: 1,
        loop: false,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".slider .swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".slider .swiper-button-next",
            prevEl: ".slider .swiper-button-prev",
        },
    });


    // featured_products swiper
    var swiper = new Swiper('.courses .mySwiper', {
        slidesPerView: 2,
        spaceBetween: 25,
        loop: false,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        grid: {
            rows: 2,
        },
        pagination: {
            el: ".courses .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            200: {
                slidesPerView: 1,
            },
            600: {
                slidesPerView: 2,
            },
            800: {
                slidesPerView: 2,
            },
        }
    });


    var swiper = new Swiper('.our_brands .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 50,
        loop: false,
        pagination: {
            el: ".our_brands .swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            200: {
                slidesPerView: 1,
            },
            600: {
                slidesPerView: 2,
            },
            800: {
                slidesPerView: 4,
            },
        }
    });

    $('.c_slick_sales').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
    });
    // inner swopers

    var swiper = new Swiper('.c_brandas .swiper-container', {
        slidesPerView: 6,
        spaceBetween: 50,
        loop: false,
        pagination: {
            el: ".c_brandas .swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            200: {
                slidesPerView: 1,
            },
            600: {
                slidesPerView: 2,
            },
            800: {
                slidesPerView: 6,
            },
        }
    });


    var swiper = new Swiper(".c_coursubs_Swiper .mySwiper", {
        spaceBetween: 20,
        slidesPerView: 4,
        watchSlidesProgress: true,
        direction: "vertical",
        mousewheel: true,
    });
    var swiper2 = new Swiper(".c_coursubs_Swiper .mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".c_coursubs_Swiper .swiper-button-next",
            prevEl: ".c_coursubs_Swiper .swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>

{{-- paginate --}}
<script>
    $('.data-container').paginate({

        perPage: 6,
        scope: $('div.pagenitems'), // targets all div elements

    });
</script>

<!-- Meta Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '365919791763759');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=365919791763759&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->


@stack('scripts')

</html>
