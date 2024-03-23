<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kanaf</title>
    <link rel="shortcut icon" href="{{ asset('front_end_style/images/faviconlogo.png') }}" type="image/png">


    <link rel="stylesheet" href="{{ asset('front_end_style/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/more.css') }}">



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

    @stack('styles')

</head>

<body>
    @yield('content')
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
    $(document).ready(function() {
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
