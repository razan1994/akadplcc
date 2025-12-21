    @if (session()->has('success'))
        <script>
            swal("تم الإرسال!", "{{ session('success') }}", "success", {
                button: "حسناً",
            });
        </script>
    @endif
@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')



    <div class="body_inner">

        <!-- ================================================================================================== -->
        <!-- ======================================== inner-top =============================================== -->
        <!-- ================================================================================================== -->
        <div class="inner-top">

            <div class="c_title_top">
                <div class="container_1200">
                    <div class="title_page">
                        <h1>اتصل بنا</h1>
                    </div>
                </div>
            </div>
            <div class="c-breadcrumps">
                <div class="container_1200">
                <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>اتصل بنا</a></p>
                </div>
            </div>
        </div>
        <!-- ================================================================================================== -->
        <!-- ======================================== inner-top =============================================== -->
        <!-- ================================================================================================== -->

        <!-- ================================================================================================== -->
        <!-- ======================================== content about us ======================================== -->
        <!-- ================================================================================================== -->

        <style>
            .contact-hero {
                min-height: 340px;
                background: linear-gradient(120deg, #203444 0%, #1aaac3 100%);
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                border-radius: 0 0 32px 32px;
                margin-bottom: 32px;
                box-shadow: 0 4px 32px rgba(32,52,68,0.10);
                animation: fadeInDown 1.1s;
            }
            @keyframes fadeInDown {
                0% { opacity: 0; transform: translateY(-40px); }
                100% { opacity: 1; transform: translateY(0); }
            }
            .contact-card {
                background: #fff;
                border-radius: 24px;
                box-shadow: 0 4px 32px rgba(32,52,68,0.10);
                padding: 40px 32px 32px 32px;
                margin-bottom: 48px;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                gap: 32px;
                animation: fadeInUp 1.2s;
            }
            @keyframes fadeInUp {
                0% { opacity: 0; transform: translateY(40px); }
                100% { opacity: 1; transform: translateY(0); }
            }
            .contact-form {
                flex: 1 1 340px;
                min-width: 320px;
                padding: 0 12px;
            }
            .contact-form input, .contact-form textarea {
                border-radius: 12px;
                border: 1px solid #e3e8ee;
                padding: 14px 16px;
                margin-bottom: 18px;
                width: 100%;
                font-size: 1.1rem;
                background: #f8fafd;
                transition: border 0.2s, box-shadow 0.2s;
            }
            .contact-form input:focus, .contact-form textarea:focus {
                border: 1.5px solid #1aaac3;
                box-shadow: 0 2px 12px rgba(26,170,195,0.08);
                outline: none;
            }
            .contact-form textarea {
                min-height: 110px;
                resize: vertical;
            }
            .contact-form button {
                background: linear-gradient(120deg, #1aaac3 0%, #203444 100%);
                color: #fff;
                border: none;
                border-radius: 32px;
                padding: 14px 44px;
                font-size: 1.2rem;
                font-weight: 700;
                box-shadow: 0 2px 12px rgba(32,52,68,0.10);
                transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
                cursor: pointer;
                margin-top: 8px;
                animation: pulseBtn 1.5s infinite alternate;
            }
            @keyframes pulseBtn {
                0% { box-shadow: 0 2px 12px rgba(32,52,68,0.10); transform: scale(1); }
                100% { box-shadow: 0 6px 24px rgba(26,170,195,0.18); transform: scale(1.04); }
            }
            .contact-info {
                flex: 1 1 260px;
                min-width: 260px;
                padding: 0 12px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 18px;
                animation: fadeInUp 1.5s;
            }
            .contact-info ul {
                list-style: none;
                padding: 0;
                margin: 0 0 18px 0;
            }
            .contact-info li {
                margin-bottom: 10px;
                font-size: 1.1rem;
            }
            .contact-info a {
                color: #1aaac3;
                text-decoration: none;
                transition: color 0.2s;
            }
            .contact-info a:hover {
                color: #203444;
            }
            .contact-info img {

                width: 100%;
                border-radius: 18px;

                margin-top: 18px;
                animation: floatImg 2.5s infinite alternate;
            }
            @keyframes floatImg {
                0% { transform: translateY(0); }
                100% { transform: translateY(-12px); }
            }
            @media (max-width: 900px) {
                .contact-card { flex-direction: column; padding: 32px 8px; }
                .contact-info, .contact-form { min-width: 0; width: 100%; }
            }
        </style>

        <div class="container_1200">
            <div class="contact-card">
                <div class="contact-form">
                    <h1 style="font-size:2.1rem;font-weight:900;letter-spacing:1px; margin-bottom: 8px;">اتصل بنا</h1>
                    <p style="font-size:1.1rem;margin-bottom:18px;opacity:0.92;">نحن هنا لمساعدتك! يرجى ملء النموذج أو التواصل عبر المعلومات أدناه.</p>
                    <div style="display: flex; gap: 18px; flex-wrap: wrap; margin-bottom: 18px; justify-content: flex-start;">
                        <a href="tel:{{ isset($contact->phone) ? $contact->phone : 'Undefined' }}" style="color:#1aaac3; display: flex; align-items: center; gap: 6px; font-size: 1.08rem; text-decoration: none; background: #f8fafd; border-radius: 8px; padding: 8px 16px;">
                            <i class="fas fa-phone-alt"></i> {{ isset($contact->phone) ? $contact->phone : 'Undefined' }}
                        </a>
                        <a href="mailto:{{ isset($contact->email) ? $contact->email : 'Undefined' }}" style="color:#1aaac3; display: flex; align-items: center; gap: 6px; font-size: 1.08rem; text-decoration: none; background: #f8fafd; border-radius: 8px; padding: 8px 16px;">
                            <i class="fas fa-envelope"></i> {{ isset($contact->email) ? $contact->email : 'Undefined' }}
                        </a>
                    </div>
                    <form action="{{ route('contactReauest') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" placeholder="الاسم" required>
                        <input type="text" name="phone" placeholder="رقم الهاتف" required>
                        <input type="email" name="email" placeholder="البريد الإلكتروني" required style="text-align:right;">
                        <textarea name="message" placeholder="اكتب رسالتك هنا..." required></textarea>
                        <button type="submit">ارسل</button>
                    </form>
                </div>
                <div class="contact-info">
                    <img src="{{ asset('/front_end_style/images/contactus.png') }}" alt="اتصل بنا">
                </div>
            </div>
        </div>

    </div>

@endsection
