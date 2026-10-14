@extends('front_end_layout.app_front_end', ['title' => 'المكتبة الرقمية'])

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

    <!-- =========================
         Inner Top / Breadcrumbs
    ========================= -->

    <div class="inner-top">
        <div class="c_title_top">
            <div class="container_1200">
                <div class="title_page">
                    <h1>المكتبة الرقمية</h1>
                </div>
            </div>

            <div class="c-breadcrumps">
                <div class="container_1200">
                    <p>
                        <a href="{{ route('welcome') }}">الرئيسية</a>
                        <span>»</span>
                        <a href="javascript:void(0)">المكتبة الرقمية</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        :root {
            --blog-primary: #1aaac3;
            --blog-primary-dark: #0e7a99;
            --blog-dark: #203444;
            --blog-text: #687780;
            --blog-bg: #f7fafc;
            --blog-border: #e7edf1;
            --blog-radius: 18px;
            --blog-shadow: 0 8px 28px rgba(32, 52, 68, .07);
        }

        /* =========================
                   Blogs Section
                ========================= */

        .blogs-section {
            position: relative;
            padding: 80px 0 90px;
            background:
                radial-gradient(circle at 5% 5%,
                    rgba(26, 170, 195, .07),
                    transparent 28%),
                var(--blog-bg);
            direction: rtl;
        }

        .blogs-section *,
        .blogs-section *::before,
        .blogs-section *::after {
            box-sizing: border-box;
        }

        .blogs-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* =========================
                   Section Heading
                ========================= */

        .blogs-heading {
            max-width: 700px;
            margin: 0 auto 42px;
            text-align: center;
        }

        .blogs-heading .eyebrow {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 13px;
            padding: 8px 17px;
            border: 1px solid rgba(26, 170, 195, .22);
            border-radius: 50px;
            background: rgba(26, 170, 195, .08);
            color: var(--blog-primary-dark);
            font-size: 13px;
            font-weight: 800;
        }

        .blogs-heading .eyebrow::before {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--blog-primary);
        }

        .blogs-heading h2 {
            margin: 0 0 13px;
            color: var(--blog-dark);
            font-size: 34px;
            font-weight: 800;
            line-height: 1.5;
        }

        .blogs-heading p {
            max-width: 600px;
            margin: 0 auto;
            color: var(--blog-text);
            font-size: 15px;
            line-height: 2;
        }

        .blogs-heading-line {
            display: block;
            width: 65px;
            height: 4px;
            margin: 19px auto 0;
            border-radius: 10px;
            background: linear-gradient(90deg,
                    var(--blog-primary),
                    var(--blog-dark));
        }

        /* =========================
                   Blogs Grid
                ========================= */

        .blogs-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 26px;
            align-items: stretch;
        }

        /* =========================
                   Blog Card
                ========================= */

        .ak-blog-card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: 100%;
            overflow: hidden;
            border: 1px solid var(--blog-border);
            border-radius: var(--blog-radius);
            background: #fff;
            box-shadow: var(--blog-shadow);
            transition:
                transform .3s ease,
                box-shadow .3s ease,
                border-color .3s ease;
            animation: blogFadeUp .55s ease both;
        }

        .ak-blog-card:hover {
            transform: translateY(-7px);
            border-color: rgba(26, 170, 195, .35);
            box-shadow: 0 18px 42px rgba(32, 52, 68, .12);
        }

        /* =========================
                   Blog Image
                ========================= */

        .ak-blog-image {
            position: relative;
            width: 100%;
            height: 235px;
            overflow: hidden;
            background: #eaf2f5;
        }

        .ak-blog-image::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg,
                    transparent 55%,
                    rgba(22, 43, 56, .16));
            pointer-events: none;
        }

        .ak-blog-image img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }

        .ak-blog-card:hover .ak-blog-image img {
            transform: scale(1.06);
        }

        /* =========================
                   Blog Content
                ========================= */

        .ak-blog-content {
            display: flex;
            flex: 1;
            flex-direction: column;
            align-items: flex-start;
            padding: 23px 22px 21px;
            text-align: right;
        }

        .ak-blog-content h4 {
            display: -webkit-box;
            width: 100%;
            overflow: hidden;
            margin: 0 0 12px;
            color: var(--blog-dark);
            font-size: 18px;
            font-weight: 800;
            line-height: 1.8;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .ak-blog-content p {
            display: -webkit-box;
            width: 100%;
            min-height: 75px;
            overflow: hidden;
            margin: 0 0 20px;
            color: var(--blog-text);
            font-size: 13px;
            font-weight: 400;
            line-height: 1.95;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
        }

        /* =========================
                   Read More Button
                ========================= */

        .ak-blog-content a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: auto;
            padding: 10px 18px;
            border: 1px solid rgba(26, 170, 195, .24);
            border-radius: 50px;
            background: rgba(26, 170, 195, .07);
            color: var(--blog-primary-dark);
            font-size: 13px;
            font-weight: 800;
            text-decoration: none !important;
            transition:
                background .25s ease,
                color .25s ease,
                border-color .25s ease,
                transform .25s ease;
        }

        .ak-blog-content a::after {
            content: "←";
            font-size: 17px;
            line-height: 1;
            transition: transform .25s ease;
        }

        .ak-blog-content a:hover {
            transform: translateY(-2px);
            border-color: var(--blog-primary);
            background: var(--blog-primary);
            color: #fff;
        }

        .ak-blog-content a:hover::after {
            transform: translateX(-3px);
        }

        /* =========================
                   Empty State
                ========================= */

        .blogs-empty {
            padding: 55px 20px;
            border: 1px dashed #cddce2;
            border-radius: var(--blog-radius);
            background: #fff;
            text-align: center;
        }

        .blogs-empty-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 65px;
            height: 65px;
            margin: 0 auto 17px;
            border-radius: 50%;
            background: rgba(26, 170, 195, .09);
            color: var(--blog-primary-dark);
            font-size: 28px;
        }

        .blogs-empty h3 {
            margin: 0 0 8px;
            color: var(--blog-dark);
            font-size: 20px;
            font-weight: 800;
        }

        .blogs-empty p {
            margin: 0;
            color: var(--blog-text);
            font-size: 14px;
            line-height: 1.9;
        }

        /* =========================
                   Animation
                ========================= */

        @keyframes blogFadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
                   Tablet
                ========================= */

        @media (max-width: 991px) {
            .blogs-section {
                padding: 65px 0 75px;
            }

            .blogs-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 22px;
            }

            .blogs-heading {
                margin-bottom: 32px;
            }

            .blogs-heading h2 {
                font-size: 30px;
            }

            .ak-blog-image {
                height: 225px;
            }

            .ak-blog-content {
                padding: 20px;
            }
        }

        /* =========================
                   Mobile
                ========================= */

        @media (max-width: 575px) {
            .blogs-section {
                padding: 48px 0 55px;
            }

            .blogs-container {
                padding: 0 16px;
            }

            .blogs-grid {
                grid-template-columns: minmax(0, 1fr);
                gap: 22px;
            }

            .blogs-heading {
                margin-bottom: 27px;
            }

            .blogs-heading .eyebrow {
                margin-bottom: 10px;
                padding: 7px 13px;
                font-size: 12px;
            }

            .blogs-heading h2 {
                font-size: 26px;
                line-height: 1.6;
            }

            .blogs-heading p {
                font-size: 13px;
                line-height: 1.9;
            }

            .ak-blog-image {
                height: 225px;
            }

            .ak-blog-content {
                padding: 20px;
            }

            .ak-blog-content h4 {
                font-size: 17px;
            }

            .ak-blog-content p {
                min-height: auto;
                margin-bottom: 18px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .ak-blog-card,
            .ak-blog-image img,
            .ak-blog-content a {
                animation: none;
                transition: none;
            }
        }
    </style>

    {{-- =========================
         Digital Library / Blogs
    ========================== --}}

    <section class="blogs-section">
        <div class="blogs-container">

            <div class="blogs-heading">
                <span class="eyebrow">المكتبة الرقمية</span>

                <h2>أحدث المقالات</h2>

                <p>
                    اكتشف أحدث المقالات والمعلومات والأفكار التي تساعدك
                    على اكتساب المعرفة والاستفادة من المحتوى الرقمي.
                </p>

                <span class="blogs-heading-line"></span>
            </div>

            @if (isset($blogs) && $blogs->count() > 0)
                <div class="blogs-grid">
                    @foreach ($blogs as $blog)
                        <article class="ak-blog-card" style="animation-delay: {{ min($loop->index * 0.08, 0.4) }}s;">

                            <div class="ak-blog-image">
                                @if ($blog->image && file_exists(public_path($blog->image)))
                                    <img src="{{ asset($blog->image) }}"
                                        alt="{{ $blog->title_ar ?? 'مقال من المكتبة الرقمية' }}" loading="lazy">
                                @else
                                    <img src="{{ asset('front_end_style/images/omgs.png') }}"
                                        alt="{{ $blog->title_ar ?? 'مقال من المكتبة الرقمية' }}" loading="lazy">
                                @endif
                            </div>

                            <div class="ak-blog-content">

                                <h4>
                                    {{ $blog->title_ar }}
                                </h4>

                                <p>
                                    {{ \Illuminate\Support\Str::limit($blog->desc_ar) }}
                                </p>

                                <a href="#">
                                    اقرأ المزيد
                                </a>

                            </div>

                        </article>
                    @endforeach
                </div>
            @else
                <div class="blogs-empty">
                    <div class="blogs-empty-icon">✦</div>

                    <h3>لا توجد مقالات حاليًا</h3>

                    <p>
                        سيتم عرض المقالات الجديدة هنا فور إضافتها.
                    </p>
                </div>
            @endif

        </div>
    </section>

@endsection
