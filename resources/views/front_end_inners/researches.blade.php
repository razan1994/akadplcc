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
                    <h1>المكتبة الرقمية</h1>
                </div>
            </div>
            <div class="c-breadcrumps">
                <div class="container_1200">
                    <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>المكتبة الرقمية</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <style>
        ```css
        /* =========================
       Blogs
    ========================= */

        .blogs-section {
            padding: 85px 0;
            background: #fff;
        }

        .ak-blog-card {
            height: 100%;
            overflow: hidden;
            border: 1px solid #edf1f4;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 6px 22px rgba(32, 52, 68, .07);
            transition: .25s ease;
        }

        .ak-blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 32px rgba(32, 52, 68, .11);
        }

        .ak-blog-image {
            height: 240px;
            overflow: hidden;
        }

        .ak-blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ak-blog-content {
            padding: 18px;
        }

        .ak-blog-content h4 {
            color: #203444;
            font-size: 17px;
            font-weight: 800;
            line-height: 1.7;
            margin-bottom: 8px;
        }

        .ak-blog-content p {
            color: #69737b;
            font-size: 13px;
            line-height: 1.9;
            min-height: 50px;
            margin-bottom: 10px;
        }

        .ak-blog-content a {
            color: #1aaac3;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
        }

        .ak-blog-content a:hover {
            color: #0e7a99;
        }

        /* =========================
       Responsive
    ========================= */

        @media (max-width: 767px) {
            .blogs-section {
                padding: 60px 0;
            }

            .ak-blog-image {
                height: 220px;
            }

            .ak-blog-content {
                padding: 16px;
            }

            .ak-blog-content h4 {
                font-size: 16px;
            }
        }

        ``` .researches-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
            margin: 32px 0 40px 0;
            animation: fadeInUp 1.1s;
        }

        .research-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 4px 24px rgba(32, 52, 68, 0.10);
            padding: 28px 22px 22px 22px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: box-shadow 0.2s, transform 0.2s;
            min-height: 320px;
            position: relative;
        }

        .research-card:hover {
            box-shadow: 0 8px 32px rgba(26, 170, 195, 0.16);
            transform: translateY(-6px) scale(1.02);
        }

        .research-card .research-img {
            width: 100%;
            max-width: 120px;
            max-height: 120px;
            object-fit: contain;
            border-radius: 12px;
            margin-bottom: 18px;
            align-self: center;
            animation: fadeIn 1.2s;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .research-card h3 {
            font-size: 1.18rem;
            font-weight: 800;
            color: #203444;
            margin-bottom: 10px;
        }

        .research-card p {
            font-size: 1.02rem;
            color: #444;
            margin-bottom: 18px;
            min-height: 44px;
        }

        .research-card .download-btn {
            display: inline-block;
            background: linear-gradient(120deg, #1aaac3 0%, #203444 100%);
            color: #fff;
            border-radius: 32px;
            padding: 10px 32px;
            font-size: 1.08rem;
            font-weight: 700;
            text-decoration: none;
            transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
            box-shadow: 0 2px 12px rgba(32, 52, 68, 0.10);
            margin-top: auto;
            animation: pulseBtn 1.5s infinite alternate;
        }

        .research-card .download-btn:hover {
            background: #203444;
            color: #fff;
            transform: scale(1.04);
        }

        @keyframes pulseBtn {
            0% {
                box-shadow: 0 2px 12px rgba(32, 52, 68, 0.10);
            }

            100% {
                box-shadow: 0 6px 24px rgba(26, 170, 195, 0.18);
            }
        }
    </style>
    {{-- =========================================================
        Blogs
    ========================================================== --}}
    @if (isset($blogs) && $blogs->count() > 0)
        <section class="blogs-section">
            <div class="container_1200">

                <div class="ak-section-title center">
                    <span class="eyebrow">محتوى يساعدك تتطور</span>
                    <h2>أحدث المقالات</h2>
                    <p>
                        مقالات وأفكار عملية في التسويق الرقمي والإعلانات وتطوير الأداء.
                    </p>
                </div>

                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 mb-4">

                            <article class="ak-blog-card">

                                <div class="ak-blog-image">
                                    @if ($blog->image && file_exists(public_path($blog->image)))
                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title_ar }}" loading="lazy">
                                    @else
                                        <img src="{{ asset('front_end_style/images/omgs.png') }}"
                                            alt="{{ $blog->title_ar ?? 'مقال' }}" loading="lazy">
                                    @endif
                                </div>

                                <div class="ak-blog-content">

                                    <h4>{{ $blog->title_ar }}</h4>

                                    <p>
                                        {{ \Illuminate\Support\Str::limit(strip_tags($blog->desc_ar), 100, '...') }}
                                    </p>

                                    <a href="#">
                                        اقرأ المزيد
                                    </a>

                                </div>

                            </article>

                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif
@endsection
