@extends('front_end_layout.app_front_end', [
    'title' => 'دورات التسويق الرقمي والإعلانات | علي خضير',
])

@section('content')

    <style>
        :root {
            --ak-primary: #1aaac3;
            --ak-primary-dark: #0e7a99;
            --ak-dark: #203444;
            --ak-text: #5f6870;
            --ak-light: #f8fafd;
            --ak-soft: #f6fbfc;
            --ak-gold: #b49125;
            --ak-border: #e7edf1;
            --ak-radius: 18px;
            --ak-shadow: 0 10px 35px rgba(32, 52, 68, 0.08);
        }

        /* =========================
                           Shared
                        ========================== */
        .ak-section {
            padding: 85px 0;
        }

        .ak-section-title {
            margin-bottom: 34px;
        }

        .ak-section-title.center {
            text-align: center;
        }

        .ak-section-title .eyebrow {
            display: inline-block;
            color: var(--ak-primary);
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .ak-section-title h2 {
            color: var(--ak-dark);
            font-size: 34px;
            font-weight: 800;
            line-height: 1.5;
            margin: 0 0 10px;
        }

        .ak-section-title p {
            color: var(--ak-text);
            font-size: 15px;
            line-height: 2;
            margin: 0;
        }

        /* =========================
                           Hero
                        ========================== */
        .slider.ak-hero {
            position: relative;
            overflow: hidden;
            padding: 75px 0;
        }

        .ak-hero .row {
            align-items: center;
        }

        .ak-hero-content {
            direction: rtl;
        }

        .ak-hero-kicker {
            display: inline-block;
            padding: 7px 14px;
            margin-bottom: 14px;
            border: 1px solid rgba(26, 170, 195, .22);
            border-radius: 50px;
            background: rgba(26, 170, 195, .07);
            color: var(--ak-primary);
            font-size: 13px;
            font-weight: 700;
        }

        .ak-hero-title {
            color: var(--ak-dark);
            font-size: 32px;
            font-weight: 800;
            line-height: 1.5;
            margin: 0 0 12px;
        }

        .ak-hero-subtitle {
            color: var(--ak-primary);
            font-size: 25px;
            font-weight: 800;
            line-height: 1.7;
            margin: 0 0 16px;
        }

        .ak-hero-description {
            max-width: 720px;
            color: var(--ak-text);
            font-size: 16px;
            line-height: 2;
            margin-bottom: 22px;
        }

        .ak-hero-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }

        .ak-hero-feature {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 12px;
            background: #fff;
            border: 1px solid var(--ak-border);
            border-radius: 10px;
            color: #56616a;
            font-size: 13px;
            box-shadow: 0 4px 16px rgba(32, 52, 68, .04);
        }

        .ak-hero-feature i {
            color: var(--ak-primary);
            font-style: normal;
            font-weight: 800;
        }

        .ak-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .ak-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 155px;
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none !important;
            transition: .25s ease;
        }

        .ak-btn-primary {
            color: #fff !important;
            background: var(--ak-dark);
            border: 1px solid var(--ak-dark);
        }

        .ak-btn-primary:hover {
            background: var(--ak-primary);
            border-color: var(--ak-primary);
            transform: translateY(-2px);
        }

        .ak-btn-outline {
            color: var(--ak-dark) !important;
            background: #fff;
            border: 1px solid var(--ak-dark);
        }

        .ak-btn-outline:hover {
            color: #fff !important;
            background: var(--ak-dark);
            transform: translateY(-2px);
        }

        .ak-hero-image {
            max-width: 520px;
            margin: 0 auto;
        }

        .ak-hero-image img {
            display: block;
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        /* =========================
                           Trainer
                        ========================== */
        .trainer-about {
            padding: 85px 0;
        }

        .trainer-about-row {
            align-items: flex-start !important;
        }

        .trainer-content,
        .trainer-image-wrapper {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }

        .trainer-content .c_body {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }

        .trainer-heading {
            margin-bottom: 17px;
        }

        .trainer-heading .eyebrow {
            color: var(--ak-primary);
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 7px;
        }

        .trainer-heading h2 {
            color: var(--ak-dark);
            font-size: 32px;
            font-weight: 800;
            line-height: 1.45;
            margin: 0 0 7px;
        }

        .trainer-position {
            display: block;
            color: #344957;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.9;
        }

        .trainer-school {
            display: block;
            color: var(--ak-primary);
            font-size: 13px;
            font-weight: 700;
            margin-top: 2px;
        }

        .trainer-bio {
            margin: 0 0 18px;
        }

        .trainer-bio p {
            color: var(--ak-text);
            font-size: 15px;
            line-height: 2.15;
            text-align: justify;
            margin: 0;
        }

        .trainer-bio strong {
            color: var(--ak-dark);
            font-weight: 800;
        }

        .trainer-accreditation {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 0 0 18px;
            padding: 13px 15px;
            border: 1px solid rgba(180, 145, 37, .30);
            border-radius: 10px;
            background: rgba(212, 175, 55, .07);
        }

        .trainer-accreditation-icon {
            width: 39px;
            height: 39px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 39px;
            border-radius: 50%;
            background: rgba(212, 175, 55, .12);
            font-size: 18px;
        }

        .trainer-accreditation-content {
            line-height: 1.6;
        }

        .trainer-accreditation-content .label {
            color: #60686f;
            font-size: 12px;
            font-weight: 600;
        }

        .trainer-accreditation-content strong {
            color: var(--ak-gold);
            font-size: 12px;
            direction: ltr;
            display: inline-block;
        }

        .trainer-accreditation-content small {
            display: block;
            color: #999;
            font-size: 10px;
            direction: ltr;
        }

        .trainer-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-bottom: 17px;
        }

        .trainer-skill {
            padding: 6px 11px;
            border: 1px solid rgba(26, 170, 195, .26);
            border-radius: 50px;
            background: rgba(26, 170, 195, .06);
            color: var(--ak-primary);
            font-size: 11px;
            font-weight: 700;
            direction: ltr;
        }

        .trainer-quote {
            margin: 0 0 20px;
            padding: 13px 16px;
            border-right: 3px solid var(--ak-primary);
            border-radius: 7px;
            background: rgba(26, 170, 195, .06);
            color: var(--ak-dark);
            font-size: 13px;
            font-weight: 700;
            line-height: 1.9;
        }

        .trainer-image-wrapper {
            position: relative;
            width: 100%;
            max-width: 500px;
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .trainer-image-wrapper>img {
            display: block;
            width: 100%;
            height: 512px;
            object-fit: cover;
            border-radius: 28px;
        }

        .trainer-experience-badge {
            position: absolute;
            right: -18px;
            bottom: 90px;
            min-width: 115px;
            padding: 13px 14px;
            text-align: center;
            border-radius: 12px;
            background: #fff;
            box-shadow: var(--ak-shadow);
        }

        .trainer-experience-badge strong {
            display: block;
            color: var(--ak-primary);
            font-size: 25px;
            font-weight: 800;
            line-height: 1;
        }

        .trainer-experience-badge span {
            display: block;
            color: var(--ak-dark);
            font-size: 10px;
            font-weight: 700;
            margin-top: 5px;
        }

        /* =========================
                           Courses
                        ========================== */
        .modern-courses-section {
            padding: 85px 0;
            background: var(--ak-light);
        }

        .modern-courses-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
        }

        .modern-course-card {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            min-height: 100%;
            border: 1px solid #edf1f4;
            border-radius: var(--ak-radius);
            background: #fff;
            box-shadow: 0 7px 25px rgba(32, 52, 68, .07);
            transition: .25s ease;
        }

        .modern-course-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(26, 170, 195, .13);
        }

        .modern-course-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            background: #eaf2f7;
        }

        .modern-course-content {
            display: flex;
            flex: 1;
            flex-direction: column;
            padding: 20px;
        }

        .modern-course-content h3 {
            color: var(--ak-dark);
            font-size: 18px;
            font-weight: 800;
            line-height: 1.7;
            margin: 0 0 8px;
        }

        .modern-course-content p {
            color: #66717a;
            font-size: 13px;
            line-height: 1.9;
            margin-bottom: 16px;
        }

        .modern-course-meta {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-top: auto;
            margin-bottom: 10px;
        }

        .modern-course-teacher-img {
            width: 36px;
            height: 36px;
            object-fit: cover;
            border: 2px solid rgba(26, 170, 195, .45);
            border-radius: 50%;
        }

        .modern-course-teacher-name {
            color: var(--ak-primary);
            font-size: 13px;
            font-weight: 700;
        }

        .modern-course-time {
            color: #8a9399;
            font-size: 12px;
            margin-bottom: 15px;
        }

        .modern-course-link {
            display: inline-flex;
            align-items: center;
            width: fit-content;
            color: var(--ak-primary);
            font-size: 13px;
            font-weight: 800;
            text-decoration: none !important;
        }

        .modern-course-link:hover {
            color: var(--ak-primary-dark);
        }

        /* =========================
                           Brands
                        ========================== */
        .ak-brands {
            padding: 70px 0;
            background: #fff;
        }

        .ak-brands .our_brands {
            padding: 0;
        }

        /* =========================
                           Blogs
                        ========================== */
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
            color: var(--ak-dark);
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
            color: var(--ak-primary);
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
        }

        /* =========================
                           CTA
                        ========================== */
        .call-to-action-section {
            position: relative;
            min-height: 360px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 20px;
            text-align: center;
            background:
                linear-gradient(rgba(255, 255, 255, 0.25),
                    rgba(255, 255, 255, 0.25)),
                url('/front_end_style/images/cta-bg.png') center center / cover no-repeat;
        }

        .cta-container {
            width: 100%;
            max-width: 950px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        .cta-content {
            width: 100%;
            max-width: 750px;
            margin: 0 auto;
            padding: 0;
            background: transparent !important;
            border: none;
            box-shadow: none;
            backdrop-filter: none;
            text-align: center;
        }

        .cta-content h2 {
            color: var(--ak-dark);
            font-size: 36px;
            font-weight: 800;
            line-height: 1.5;
            margin: 0 0 14px;
            text-align: center;
        }

        .cta-content p {
            max-width: 680px;
            margin: 0 auto 25px;
            color: #4f5c65;
            font-size: 16px;
            line-height: 2;
            text-align: center;
        }

        .cta-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 170px;
            padding: 13px 30px;
            border-radius: 50px;
            background: var(--ak-primary);
            color: #fff !important;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none !important;
            box-shadow: 0 8px 25px rgba(26, 170, 195, 0.25);
            transition: all .3s ease;
        }

        .cta-btn:hover {
            background: var(--ak-primary-dark);
            color: #fff !important;
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(26, 170, 195, 0.35);
        }

        /* =========================
                           Responsive
                        ========================== */
        @media (max-width: 991px) {
            .ak-hero-title {
                font-size: 34px;
            }

            .ak-hero-subtitle {
                font-size: 21px;
            }

            .trainer-image-wrapper>img {
                height: 470px;
            }

            .modern-courses-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 767px) {

            .ak-section,
            .trainer-about,
            .modern-courses-section,
            .blogs-section {
                padding: 60px 0;
            }

            .slider.ak-hero {
                padding: 55px 0;
            }

            .ak-hero .row {
                flex-direction: column-reverse;
            }

            .ak-hero-content {
                margin-top: 30px;
                text-align: right;
            }

            .ak-hero-title {
                font-size: 28px;
            }

            .ak-hero-subtitle {
                font-size: 19px;
            }

            .ak-hero-description {
                font-size: 14px;
            }

            .ak-hero-features {
                gap: 7px;
            }

            .ak-hero-feature {
                width: 100%;
            }

            .ak-hero-actions {
                flex-direction: column;
            }

            .ak-btn {
                width: 100%;
            }

            .trainer-about-row {
                flex-direction: column-reverse;
            }

            .trainer-image-wrapper {
                margin-bottom: 35px !important;
                max-width: 430px;
            }

            .trainer-image-wrapper>img {
                height: auto;
                max-height: 520px;
            }

            .trainer-bio p {
                text-align: right;
            }

            .trainer-experience-badge {
                right: 12px;
                bottom: 15px;
            }

            .modern-courses-grid {
                grid-template-columns: 1fr;
            }

            .ak-section-title h2 {
                font-size: 27px;
            }

            .call-to-action-section {
                min-height: 320px;
                padding: 60px 20px;
            }

            .cta-content {
                padding: 0;
            }

            .cta-content h2 {
                font-size: 27px;
                line-height: 1.6;
            }

            .cta-content p {
                font-size: 14px;
                line-height: 1.9;
            }

            .cta-btn {
                min-width: 160px;
                padding: 12px 25px;
            }
        }

        /* =====================================================
                   WHY LEARN WITH US
                ===================================================== */

        .why-learn-section {
            padding: 85px 0;
        }


        /* Grid */

        .why-learn-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 22px;
        }


        /* Card */

        .why-learn-card {
            position: relative;

            background: #fff;

            border: 1px solid #edf1f4;

            border-radius: 18px;

            padding: 28px 25px;

            box-shadow: 0 7px 25px rgba(32, 52, 68, 0.06);

            transition: all 0.3s ease;

            overflow: hidden;
        }


        /* Top Line */

        .why-learn-card::before {
            content: "";

            position: absolute;

            top: 0;
            right: 0;

            width: 0;
            height: 3px;

            background: #1aaac3;

            transition: width 0.3s ease;
        }


        .why-learn-card:hover::before {
            width: 100%;
        }


        .why-learn-card:hover {
            transform: translateY(-6px);

            box-shadow: 0 15px 35px rgba(26, 170, 195, 0.12);

            border-color: rgba(26, 170, 195, 0.20);
        }


        /* Icon */

        .why-learn-icon {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(26, 170, 195, 0.08);

            border: 1px solid rgba(26, 170, 195, 0.15);

            border-radius: 14px;

            font-size: 24px;

            margin-bottom: 18px;

            transition: all 0.3s ease;
        }


        .why-learn-card:hover .why-learn-icon {
            background: #1aaac3;

            transform: rotate(-3deg) scale(1.05);
        }


        /* Title */

        .why-learn-card h3 {
            color: #203444;

            font-size: 18px;

            font-weight: 800;

            line-height: 1.6;

            margin-bottom: 10px;
        }


        /* Text */

        .why-learn-card p {
            color: #68737b;

            font-size: 13px;

            line-height: 2;

            margin: 0;
        }


        .why-learn-card p strong {
            color: #203444;

            font-weight: 800;
        }


        /* =====================================================
                   Bottom Box
                ===================================================== */

        .why-learn-bottom {
            margin-top: 35px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            padding: 20px 24px;

            background: #fff;

            border: 1px solid #e9eef1;

            border-right: 4px solid #1aaac3;

            border-radius: 12px;

            box-shadow: 0 5px 20px rgba(32, 52, 68, 0.05);
        }


        .why-learn-bottom strong {
            display: block;

            color: #203444;

            font-size: 15px;

            font-weight: 800;

            margin-bottom: 4px;
        }


        .why-learn-bottom span {
            color: #6b747b;

            font-size: 13px;
        }


        .why-learn-bottom a {
            flex-shrink: 0;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 145px;

            padding: 11px 22px;

            background: #203444;

            color: #fff !important;

            border-radius: 50px;

            font-size: 13px;

            font-weight: 700;

            text-decoration: none;

            transition: all 0.3s ease;
        }


        .why-learn-bottom a:hover {
            background: #1aaac3;

            transform: translateY(-2px);
        }


        /* =====================================================
                   Tablet
                ===================================================== */

        @media (max-width: 991px) {

            .why-learn-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        /* =====================================================
                   Mobile
                ===================================================== */

        @media (max-width: 767px) {

            .why-learn-section {
                padding: 60px 0;
            }

            .why-learn-grid {
                grid-template-columns: 1fr;

                gap: 15px;
            }

            .why-learn-card {
                padding: 22px 20px;
            }

            .why-learn-bottom {
                flex-direction: column;

                align-items: flex-start;
            }

            .why-learn-bottom a {
                width: 100%;
            }

        }

        /* =====================================================
                   Photo & Video Gallery
                ===================================================== */
        .ak-gallery-section {
            padding: 80px 0;
            background: #fff;
        }

        .ak-gallery-grid {
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-right: -50vw;
            margin-left: -50vw;
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 0;
            overflow: hidden;
            background: #eef3f5;
        }

        .ak-gallery-item {
            position: relative;
            width: 100%;
            aspect-ratio: 1.38 / 1;
            margin: 0;
            padding: 0;
            overflow: hidden;
            border: 0;
            background: #e9eef1;
            cursor: pointer;
        }

        .ak-gallery-item img,
        .ak-gallery-item video {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform .45s ease, filter .45s ease;
        }

        .ak-gallery-item::after {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(180deg, transparent 45%, rgba(15, 38, 50, .48));
            opacity: 0;
            transition: opacity .3s ease;
        }

        .ak-gallery-item:hover img,
        .ak-gallery-item:hover video {
            transform: scale(1.06);
            filter: brightness(.88);
        }

        .ak-gallery-item:hover::after {
            opacity: 1;
        }

        .ak-gallery-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            width: 52px;
            height: 52px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, .75);
            border-radius: 50%;
            background: rgba(255, 255, 255, .92);
            color: var(--ak-primary);
            box-shadow: 0 8px 25px rgba(0, 0, 0, .18);
            font-size: 17px;
            transform: translate(-50%, -50%);
            transition: transform .25s ease, background .25s ease;
        }

        .ak-gallery-item:hover .ak-gallery-icon {
            background: #fff;
            transform: translate(-50%, -50%) scale(1.1);
        }

        .ak-gallery-lightbox {
            position: fixed;
            inset: 0;
            z-index: 10050;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 30px;
            background: rgba(12, 25, 34, .94);
        }

        .ak-gallery-lightbox.is-open {
            display: flex;
        }

        .ak-gallery-lightbox-content {
            max-width: min(1100px, 94vw);
            max-height: 88vh;
            position: relative;
        }

        .ak-gallery-lightbox-content img,
        .ak-gallery-lightbox-content video {
            display: block;
            max-width: 100%;
            max-height: 88vh;
            margin: auto;
            border-radius: 10px;
            object-fit: contain;
        }

        .ak-gallery-close {
            position: fixed;
            top: 20px;
            left: 24px;
            z-index: 2;
            width: 44px;
            height: 44px;
            border: 1px solid rgba(255, 255, 255, .35);
            border-radius: 50%;
            background: rgba(255, 255, 255, .12);
            color: #fff;
            font-size: 25px;
            line-height: 1;
            cursor: pointer;
        }

        @media (max-width: 991px) {
            .ak-gallery-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 767px) {
            .ak-gallery-section {
                padding: 60px 0;
            }

            .ak-gallery-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .ak-gallery-item {
                aspect-ratio: 1 / 1;
            }

            .ak-gallery-icon {
                width: 44px;
                height: 44px;
            }
        }

        @media (max-width: 420px) {
            .ak-gallery-grid {
                grid-template-columns: 1fr;
            }

            .ak-gallery-item {
                aspect-ratio: 1.35 / 1;
            }
        }
    </style>

    <div class="body">

        {{-- =========================================================
        Sweet Alert
    ========================================================== --}}
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


        {{-- =========================================================
        Hero
    ========================================================== --}}
        <section class="slider ak-hero">
            <div class="container_1200">
                <div class="row">

                    <div class="col-md-7">
                        <div class="ak-hero-content">

                            <span class="ak-hero-kicker">
                                المدرسة الحديثة لإدارة الاعلانات
                            </span>

                            <h1 class="ak-hero-title">
                                تعلم التسويق الرقمي وإدارة الإعلانات باحتراف
                            </h1>

                            <h2 class="ak-hero-subtitle">
                                مع المدرب والمستشار التسويقي علي خضير
                            </h2>

                            <p class="ak-hero-description">
                                طوّر مهاراتك من خلال تدريب عملي مبني على أكثر من
                                <strong>10 سنوات من الخبرة</strong>
                                في التسويق الرقمي والإعلانات المدفوعة، وتعلّم كيف تبني الاستراتيجية،
                                تصنع المحتوى، تدير الحملات وتقرأ النتائج بطريقة عملية قابلة للتطبيق.
                            </p>

                            <div class="ak-hero-features">
                                <div class="ak-hero-feature">
                                    <i>✓</i>
                                    <span><strong>+10 سنوات</strong> خبرة عملية</span>
                                </div>

                                <div class="ak-hero-feature">
                                    <i>✓</i>
                                    <span>تدريب <strong>عملي وتطبيقي</strong></span>
                                </div>

                                <div class="ak-hero-feature">
                                    <i>✓</i>
                                    <span>برامج <strong>للأفراد والشركات</strong></span>
                                </div>
                            </div>

                            <div class="ak-hero-actions">
                                <a href="{{ route('courses') }}" wire:navigate class="ak-btn ak-btn-primary">
                                    استكشف الدورات
                                </a>

                                <a href="{{ route('contactUs') }}" wire:navigate class="ak-btn ak-btn-outline">
                                    تواصل معنا
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="ak-hero-image  d-none d-md-flex">
                            <img src="{{ asset('/front_end_style/images/omgs.png') }}"
                                alt="علي خضير - التدريب في التسويق الرقمي والإعلانات" loading="eager">
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- =========================================================
        Trainer
    ========================================================== --}}
        <section class="about trainer-about">
            <div class="container_1200">
                <div class="row trainer-about-row">

                    <div class="col-md-6">
                        <div class="c_post trainer-content">
                            <div class="c_body">

                                <div class="trainer-heading">
                                    <div class="eyebrow">عن المدرب</div>

                                    <h2>علي خضير</h2>

                                    <span class="trainer-position">
                                        خبير تسويق رقمي • مستشار إعلانات مدفوعة
                                    </span>

                                    <span class="trainer-school">
                                        مؤسس مدرسة علي خضير للإعلانات الذكية
                                    </span>
                                </div>

                                <div class="trainer-bio">
                                    <p>
                                        <strong>علي خضير</strong> خبير متخصص في
                                        <strong>التسويق الرقمي والإعلانات المدفوعة</strong>
                                        بخبرة تتجاوز <strong>10 سنوات</strong> في إدارة الحملات الإعلانية
                                        عبر منصات <strong>Meta، Google، YouTube، LinkedIn وSnapchat</strong>
                                        في عدة أسواق عربية. طوّر <strong>منهجية AK</strong> التي تجمع بين
                                        أفضل الممارسات العالمية والفهم العميق للمستهلك العربي، وساعد مئات
                                        الشركات والمسوقين على تطوير استراتيجياتهم التسويقية وتحقيق نمو مستدام
                                        وعائدات حقيقية.
                                    </p>
                                </div>

                                <div class="trainer-accreditation">
                                    <span class="trainer-accreditation-icon">🏛️</span>

                                    <div class="trainer-accreditation-content">
                                        <span class="label">معتمد من</span>
                                        <strong> Oxford College of Training — UK | Internationally Accredited</strong>
                                    </div>
                                </div>

                                <div class="trainer-skills">
                                    <span class="trainer-skill">🎯 Meta Ads</span>
                                    <span class="trainer-skill">🔍 Google Ads</span>
                                    <span class="trainer-skill">🤖 AI Marketing</span>
                                    <span class="trainer-skill">📊 Funnels</span>
                                    <span class="trainer-skill">⚡ Gen Z Strategy</span>
                                    <span class="trainer-skill">🚀 Scaling</span>
                                </div>

                                <div class="trainer-quote">
                                    "الإعلان الحديث لا يبيع منتجاً — يبيع تحولاً في حياة شخص ما"
                                </div>

                            </div>

                            <div class="c_buttn">
                                <a href="{{ route('aboutUs') }}" wire:navigate>
                                    تعرف أكثر على المدرب
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="trainer-image-wrapper">

                            @if (isset($about->about_us_image) && file_exists($about->about_us_image))
                                <img src="{{ asset($about->about_us_image) }}"
                                    alt="علي خضير - خبير التسويق الرقمي ومستشار الإعلانات المدفوعة" loading="lazy">
                            @else
                                <img src="{{ asset('/front_end_style/images/omgs.png') }}"
                                    alt="علي خضير - خبير التسويق الرقمي ومستشار الإعلانات المدفوعة" loading="lazy">
                            @endif

                            <div class="trainer-experience-badge">
                                <strong>10+</strong>
                                <span>سنوات خبرة</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>





        {{-- =========================================================
        Courses
    ========================================================== --}}
        <section class="modern-courses-section">
            <div class="container_1200">

                <div class="ak-section-title center">
                    <span class="eyebrow">تعلم وطبّق</span>
                    <h2>الدورات التدريبية</h2>
                    <p>
                        برامج عملية تساعدك على تطوير مهاراتك في التسويق الرقمي والإعلانات
                        وتحويل المعرفة إلى نتائج قابلة للقياس.
                    </p>
                </div>

                <div class="modern-courses-grid">

                    @if (isset($courses) && $courses->count() > 0)
                        @foreach ($courses as $course)
                            <article class="modern-course-card">

                                <a href="{{ route('course-details', $course->slug) }}">
                                    @if (isset($course->main_image) && file_exists($course->main_image))
                                        <img class="modern-course-img" src="{{ asset($course->main_image) }}"
                                            alt="{{ $course->title_ar }}" loading="lazy">
                                    @else
                                        <img class="modern-course-img" src="{{ asset('/front_end_style/images/omgs.png') }}"
                                            alt="{{ $course->title_ar ?? 'دورة تدريبية' }}" loading="lazy">
                                    @endif
                                </a>

                                <div class="modern-course-content">

                                    <h3>
                                        <a href="{{ route('course-details', $course->slug) }}"
                                            style="color: inherit; text-decoration: none;">
                                            {!! $course->title_ar ?? 'Undefined' !!}
                                        </a>
                                    </h3>

                                    <p>
                                        {!! \Illuminate\Support\Str::limit(
                                            isset($course->short_description) ? str_replace('&nbsp;', ' ', strip_tags($course->short_description)) : '--------',
                                            100,
                                            '...',
                                        ) !!}
                                    </p>

                                    <div class="modern-course-meta">
                                        @if (isset($course->teacher_image) && file_exists($course->teacher_image))
                                            <img class="modern-course-teacher-img"
                                                src="{{ asset($course->teacher_image) }}" loading="lazy"
                                                alt="{{ $course->teacher_ar ?? 'المدرب' }}">
                                        @else
                                            <img class="modern-course-teacher-img"
                                                src="{{ asset('/front_end_style/images/omgs.png') }}" loading="lazy"
                                                alt="{{ $course->teacher_ar ?? 'المدرب' }}">
                                        @endif

                                        <span class="modern-course-teacher-name">
                                            {!! $course->teacher_ar ?? 'Undefined' !!}
                                        </span>
                                    </div>

                                    <div class="modern-course-time">
                                        <i class="far fa-clock"></i>

                                        @if (isset($course->section_count) && isset($course->section_time))
                                            <span>
                                                {{ ceil(($course->section_count * $course->section_time) / 60) }}
                                                ساعة
                                            </span>
                                        @else
                                            <span>المدة غير محددة</span>
                                        @endif
                                    </div>

                                    <a href="{{ route('course-details', $course->slug) }}" class="modern-course-link">
                                        تفاصيل الدورة
                                    </a>

                                </div>

                            </article>
                        @endforeach
                    @else
                        <div style="grid-column: 1 / -1; text-align:center; color:#777;">
                            لا توجد دورات متاحة حالياً.
                        </div>
                    @endif

                </div>
            </div>
        </section>


        {{-- Photo & Video Gallery from database --}}
        @if (isset($galleryItems) && $galleryItems->count() > 0)
            <section class="ak-gallery-section" id="gallery">
                <div class="container_1200">
                    <div class="ak-section-title center">
                        <span class="eyebrow">لحظات من دوراتنا</span>
                        <h2>معرض الصور والفيديوهات</h2>
                        <p>شاهد جانباً من أجواء التدريب والتطبيق العملي وتجارب المتدربين.</p>
                    </div>
                </div>

                <div class="ak-gallery-grid">
                    @foreach ($galleryItems as $item)
                        <button type="button" class="ak-gallery-item" data-gallery-type="{{ $item->type }}"
                            data-gallery-src="{{ asset($item->file_path) }}"
                            aria-label="فتح {{ $item->title_ar ?: 'عنصر من المعرض' }}">
                            @if ($item->type === 'video')
                                <img src="{{ $item->poster_path ? asset($item->poster_path) : asset('front_end_style/images/omgs.png') }}"
                                    alt="{{ $item->title_ar ?: 'فيديو من المعرض' }}" loading="lazy"
                                    onerror="this.onerror=null;this.src='{{ asset('front_end_style/images/omgs.png') }}';">
                                <span class="ak-gallery-icon" aria-hidden="true"><i class="fas fa-play"></i></span>
                            @else
                                <img src="{{ asset($item->file_path) }}" alt="{{ $item->title_ar ?: 'صورة من المعرض' }}"
                                    loading="lazy"
                                    onerror="this.onerror=null;this.src='{{ asset('front_end_style/images/omgs.png') }}';">
                                <span class="ak-gallery-icon" aria-hidden="true"><i
                                        class="fas fa-search-plus"></i></span>
                            @endif
                        </button>
                    @endforeach
                </div>
            </section>
        @endif

        <div class="ak-gallery-lightbox" id="akGalleryLightbox" role="dialog" aria-modal="true"
            aria-label="عارض الصور والفيديوهات" aria-hidden="true">
            <button type="button" class="ak-gallery-close" aria-label="إغلاق">&times;</button>
            <div class="ak-gallery-lightbox-content"></div>
        </div>

        <section class="why-learn-section">
            <div class="container_1200">

                <div class="ak-section-title center">
                    <span class="eyebrow">لماذا نحن؟</span>

                    <h2>لماذا تتعلم معنا؟</h2>

                    <p>
                        لأن التدريب الحقيقي لا يعتمد على المعلومات النظرية فقط،
                        بل على الفهم والتطبيق والتحليل واتخاذ القرار الصحيح.
                    </p>
                </div>


                <div class="why-learn-grid">

                    {{-- Card 1 --}}
                    <div class="why-learn-card">

                        <div class="why-learn-icon">
                            🎯
                        </div>

                        <h3>
                            خبرة عملية
                        </h3>

                        <p>
                            تعلّم من خبرة عملية تتجاوز
                            <strong>10 سنوات</strong>
                            في التسويق الرقمي وإدارة الحملات الإعلانية
                            والعمل في عدة أسواق عربية.
                        </p>

                    </div>


                    {{-- Card 2 --}}
                    <div class="why-learn-card">

                        <div class="why-learn-icon">
                            🚀
                        </div>

                        <h3>
                            تدريب عملي وتطبيقي
                        </h3>

                        <p>
                            نركز على التطبيق الحقيقي من خلال تحليل السوق،
                            بناء الاستراتيجيات، إعداد الحملات وقراءة النتائج،
                            وليس على الجانب النظري فقط.
                        </p>

                    </div>


                    {{-- Card 3 --}}
                    <div class="why-learn-card">

                        <div class="why-learn-icon">
                            🧠
                        </div>

                        <h3>
                            منهجية AK
                        </h3>

                        <p>
                            منهجية تدريبية تجمع بين أفضل الممارسات العالمية
                            والفهم العميق لسلوك المستهلك العربي لتحويل المعرفة
                            إلى خطوات عملية قابلة للتطبيق.
                        </p>

                    </div>


                    {{-- Card 4 --}}
                    <div class="why-learn-card">

                        <div class="why-learn-icon">
                            📊
                        </div>

                        <h3>
                            قرارات مبنية على البيانات
                        </h3>

                        <p>
                            تعلّم كيف تقرأ أرقام الحملات ومؤشرات الأداء،
                            وتحدد نقاط القوة والضعف وتتخذ قرارات تسويقية
                            مبنية على النتائج.
                        </p>

                    </div>


                    {{-- Card 5 --}}
                    <div class="why-learn-card">

                        <div class="why-learn-icon">
                            🌍
                        </div>

                        <h3>
                            فهم السوق العربي
                        </h3>

                        <p>
                            المحتوى التدريبي يراعي طبيعة المستهلك العربي
                            واختلاف الأسواق، بدل الاعتماد على استراتيجيات
                            عامة قد لا تناسب السوق المحلي.
                        </p>

                    </div>


                    {{-- Card 6 --}}
                    <div class="why-learn-card">

                        <div class="why-learn-icon">
                            🤖
                        </div>

                        <h3>
                            التسويق والذكاء الاصطناعي
                        </h3>

                        <p>
                            اكتشف كيف تستفيد من أدوات الذكاء الاصطناعي
                            في البحث، صناعة المحتوى، تحليل البيانات
                            وتسريع العمل التسويقي دون فقدان الجانب الاستراتيجي.
                        </p>

                    </div>

                </div>


                {{-- Bottom CTA --}}
                <div class="why-learn-bottom">

                    <div>
                        <strong>
                            هدفنا ليس أن تحفظ المعلومة...
                        </strong>

                        <span>
                            هدفنا أن تعرف كيف تستخدمها وتطبقها في السوق الحقيقي.
                        </span>
                    </div>

                    <a href="{{ route('courses') }}" wire:navigate>
                        استكشف الدورات
                    </a>

                </div>

            </div>
        </section>


        {{-- =========================================================
        Approved / Partners
    ========================================================== --}}
        @if (isset($approved) && $approved->count() > 0)
            <section class="ak-brands">
                <div class="container_1200">

                    <div class="ak-section-title center">
                        <span class="eyebrow">الثقة والاعتماد</span>
                        <h2>الجهات المعتمدة</h2>
                    </div>

                    <section class="our_brands">
                        <div class="container_750">
                            <div class="c_bloc">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                        @foreach ($approved as $app)
                                            <div class="swiper-slide">
                                                <div class="c_item">
                                                    @if (isset($app->image) && file_exists($app->image))
                                                        <img src="{{ asset($app->image) }}" loading="lazy"
                                                            alt="جهة معتمدة">
                                                    @else
                                                        <img src="{{ asset('front_end_style/images/parnter.png') }}"
                                                            loading="lazy" alt="جهة معتمدة">
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </section>
        @endif


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
                                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title_ar }}"
                                                loading="lazy">
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


        {{-- =========================================================
        CTA - Keep it last
    ========================================================== --}}
        <section class="call-to-action-section">
            <div class="cta-container">
                <div class="cta-content">

                    <h2>
                        جاهز تطور مهاراتك في التسويق والإعلانات؟
                    </h2>

                    <p>
                        ابدأ رحلتك مع مدرسة علي خضير للإعلانات الذكية وتعلّم من خبرة عملية
                        تساعدك على بناء مهارات تستطيع تطبيقها فعلياً في سوق العمل.
                    </p>

                    <a href="{{ route('courses') }}" wire:navigate class="cta-btn">
                        استكشف الدورات
                    </a>

                </div>
            </div>
        </section>

    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = document.getElementById('akGalleryLightbox');
            if (!lightbox) return;

            const content = lightbox.querySelector('.ak-gallery-lightbox-content');
            const closeButton = lightbox.querySelector('.ak-gallery-close');

            function closeGallery() {
                const video = content.querySelector('video');
                if (video) video.pause();
                content.innerHTML = '';
                lightbox.classList.remove('is-open');
                lightbox.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

            document.querySelectorAll('.ak-gallery-item').forEach(function(item) {
                item.addEventListener('click', function() {
                    const type = item.dataset.galleryType;
                    const src = item.dataset.gallerySrc;

                    content.innerHTML = type === 'video' ?
                        '<video src="' + src + '" controls autoplay playsinline></video>' :
                        '<img src="' + src + '" alt="صورة من المعرض">';

                    lightbox.classList.add('is-open');
                    lightbox.setAttribute('aria-hidden', 'false');
                    document.body.style.overflow = 'hidden';
                    closeButton.focus();
                });
            });

            closeButton.addEventListener('click', closeGallery);
            lightbox.addEventListener('click', function(event) {
                if (event.target === lightbox) closeGallery();
            });
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && lightbox.classList.contains('is-open')) closeGallery();
            });
        });
    </script>
@endpush
