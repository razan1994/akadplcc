<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="@yield('meta_title')">
    <meta name="description" content="@yield('meta_desc')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta property="title" content="@yield('meta_title')">
    <meta property="description" content="@yield('meta_desc')">
    <meta property="keywords" content="@yield('meta_keywords')">
    <meta name="author" content="Target Point TPT">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('front_end_style/assets/images/brand/favicon.ico') }}" type="image/x-icon') }}" />
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('front_end_style/assets/images/brand/favicon.ico') }}" />

    <!-- Title -->
    <title>@yield('page_title')</title>

    <!-- Bootstrap Css -->
    <link href="{{ asset('front_end_style/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('front_end_style/assets/css/style.css') }}" rel="stylesheet">

    <!--Icons  Css -->
    <link href="{{ asset('front_end_style/assets/css/icons.css') }}" rel="stylesheet">

    <!--Select2 Css -->
    <link href="{{ asset('front_end_style/assets/plugins/select2/select2.min.css') }}" rel="stylesheet">

    <!-- Owl Theme css-->
    <link href="{{ asset('front_end_style/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <!-- Date Picker Css -->
    <link href="{{ asset('front_end_style/assets/plugins/date-picker/spectrum.css') }}" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{ asset('front_end_style/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}"
        rel="stylesheet">

    <!--Color-Skin Css -->
    <link href="{{ asset('front_end_style/assets/color-skins/color10.css') }}" id="theme" media="all"
        rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Sweet Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>
    <div>
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
    <!--Loader-->
    <div id="global-loader">
        <img alt="loader" class="loader-img" src="{{ asset('front_end_style/assets/images/loader.svg') }}">
    </div>
    <!--/Loader-->

    <!-- Header-main -->
    <div class="header-main header-style1">

        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-4 col-7">
                        <div class="top-bar-left d-flex">
                            <div class="clearfix">
                                <ul class="socials">
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i
                                                class="fa-brands fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i
                                                class="fa-brands fa-google"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix">
                                <ul class="contact">
                                    <li class="d-lg-none">
                                        <a class="callnumber text-dark" href="#"><span><i class="fa fa-phone mr-1"></i>:
                                                {{ isset($public_contact->phone) ? $public_contact->phone : '--------' }}</span></a>
                                    </li>
                                    {{-- <li class="select-country">
                                        <select class="form-control select2-flag-search"
                                            data-placeholder="Select Country">
                                            <option value="UM">
                                                United States of America
                                            </option>
                                            <option value="AF">
                                                Afghanistan
                                            </option>
                                            <option value="AL">
                                                Albania
                                            </option>
                                            <option value="AD">
                                                Andorra
                                            </option>
                                            <option value="AG">
                                                Antigua and Barbuda
                                            </option>
                                            <option value="AU">
                                                Australia
                                            </option>
                                            <option value="AM">
                                                Armenia
                                            </option>
                                            <option value="AO">
                                                Angola
                                            </option>
                                            <option value="AR">
                                                Argentina
                                            </option>
                                            <option value="AT">
                                                Austria
                                            </option>
                                            <option value="AZ">
                                                Azerbaijan
                                            </option>
                                            <option value="BA">
                                                Bosnia and Herzegovina
                                            </option>
                                            <option value="BB">
                                                Barbados
                                            </option>
                                            <option value="BD">
                                                Bangladesh
                                            </option>
                                            <option value="BE">
                                                Belgium
                                            </option>
                                            <option value="BF">
                                                Burkina Faso
                                            </option>
                                            <option value="BG">
                                                Bulgaria
                                            </option>
                                            <option value="BH">
                                                Bahrain
                                            </option>
                                            <option value="BJ">
                                                Benin
                                            </option>
                                            <option value="BN">
                                                Brunei
                                            </option>
                                            <option value="BO">
                                                Bolivia
                                            </option>
                                            <option value="BT">
                                                Bhutan
                                            </option>
                                            <option value="BY">
                                                Belarus
                                            </option>
                                            <option value="CD">
                                                Congo
                                            </option>
                                            <option value="CA">
                                                Canada
                                            </option>
                                            <option value="CF">
                                                Central African Republic
                                            </option>
                                            <option value="CI">
                                                Cote d'Ivoire
                                            </option>
                                            <option value="CL">
                                                Chile
                                            </option>
                                            <option value="CM">
                                                Cameroon
                                            </option>
                                            <option value="CN">
                                                China
                                            </option>
                                            <option value="CO">
                                                Colombia
                                            </option>
                                            <option value="CU">
                                                Cuba
                                            </option>
                                            <option value="CV">
                                                Cabo Verde
                                            </option>
                                            <option value="CY">
                                                Cyprus
                                            </option>
                                            <option value="DJ">
                                                Djibouti
                                            </option>
                                            <option value="DK">
                                                Denmark
                                            </option>
                                            <option value="DM">
                                                Dominica
                                            </option>
                                            <option value="DO">
                                                Dominican Republic
                                            </option>
                                            <option value="EC">
                                                Ecuador
                                            </option>
                                            <option value="EE">
                                                Estonia
                                            </option>
                                            <option value="ER">
                                                Eritrea
                                            </option>
                                            <option value="ET">
                                                Ethiopia
                                            </option>
                                            <option value="FI">
                                                Finland
                                            </option>
                                            <option value="FJ">
                                                Fiji
                                            </option>
                                            <option value="FR">
                                                France
                                            </option>
                                            <option value="GA">
                                                Gabon
                                            </option>
                                            <option value="GD">
                                                Grenada
                                            </option>
                                            <option value="GE">
                                                Georgia
                                            </option>
                                            <option value="GH">
                                                Ghana
                                            </option>
                                            <option value="GH">
                                                Ghana
                                            </option>
                                            <option value="HN">
                                                Honduras
                                            </option>
                                            <option value="HT">
                                                Haiti
                                            </option>
                                            <option value="HU">
                                                Hungary
                                            </option>
                                            <option value="ID">
                                                Indonesia
                                            </option>
                                            <option value="IE">
                                                Ireland
                                            </option>
                                            <option value="IL">
                                                Israel
                                            </option>
                                            <option value="IN">
                                                India
                                            </option>
                                            <option value="IQ">
                                                Iraq
                                            </option>
                                            <option value="IR">
                                                Iran
                                            </option>
                                            <option value="IS">
                                                Iceland
                                            </option>
                                            <option value="IT">
                                                Italy
                                            </option>
                                            <option value="JM">
                                                Jamaica
                                            </option>
                                            <option value="JO">
                                                Jordan
                                            </option>
                                            <option value="JP">
                                                Japan
                                            </option>
                                            <option value="KE">
                                                Kenya
                                            </option>
                                            <option value="KG">
                                                Kyrgyzstan
                                            </option>
                                            <option value="KI">
                                                Kiribati
                                            </option>
                                            <option value="KW">
                                                Kuwait
                                            </option>
                                            <option value="KZ">
                                                Kazakhstan
                                            </option>
                                            <option value="LA">
                                                Laos
                                            </option>
                                            <option value="LB">
                                                Lebanons
                                            </option>
                                            <option value="LI">
                                                Liechtenstein
                                            </option>
                                            <option value="LR">
                                                Liberia
                                            </option>
                                            <option value="LS">
                                                Lesotho
                                            </option>
                                            <option value="LT">
                                                Lithuania
                                            </option>
                                            <option value="LU">
                                                Luxembourg
                                            </option>
                                            <option value="LV">
                                                Latvia
                                            </option>
                                            <option value="LY">
                                                Libya
                                            </option>
                                            <option value="MA">
                                                Morocco
                                            </option>
                                            <option value="MC">
                                                Monaco
                                            </option>
                                            <option value="MD">
                                                Moldova
                                            </option>
                                            <option value="ME">
                                                Montenegro
                                            </option>
                                            <option value="MG">
                                                Madagascar
                                            </option>
                                            <option value="MH">
                                                Marshall Islands
                                            </option>
                                            <option value="MK">
                                                Macedonia (FYROM)
                                            </option>
                                            <option value="ML">
                                                Mali
                                            </option>
                                            <option value="MM">
                                                Myanmar (formerly Burma)
                                            </option>
                                            <option value="MN">
                                                Mongolia
                                            </option>
                                            <option value="MR">
                                                Mauritania
                                            </option>
                                            <option value="MT">
                                                Malta
                                            </option>
                                            <option value="MV">
                                                Maldives
                                            </option>
                                            <option value="MW">
                                                Malawi
                                            </option>
                                            <option value="MX">
                                                Mexico
                                            </option>
                                            <option value="MZ">
                                                Mozambique
                                            </option>
                                            <option value="NA">
                                                Namibia
                                            </option>
                                            <option value="NG">
                                                Nigeria
                                            </option>
                                            <option value="NO">
                                                Norway
                                            </option>
                                            <option value="NP">
                                                Nepal
                                            </option>
                                            <option value="NR">
                                                Nauru
                                            </option>
                                            <option value="NZ">
                                                New Zealand
                                            </option>
                                            <option value="OM">
                                                Oman
                                            </option>
                                            <option value="PA">
                                                Panama
                                            </option>
                                            <option value="PF">
                                                Paraguay
                                            </option>
                                            <option value="PG">
                                                Papua New Guinea
                                            </option>
                                            <option value="PH">
                                                Philippines
                                            </option>
                                            <option value="PK">
                                                Pakistan
                                            </option>
                                            <option value="PL">
                                                Poland
                                            </option>
                                            <option value="QA">
                                                Qatar
                                            </option>
                                            <option value="RO">
                                                Romania
                                            </option>
                                            <option value="RU">
                                                Russia
                                            </option>
                                            <option value="RW">
                                                Rwanda
                                            </option>
                                            <option value="SA">
                                                Saudi Arabia
                                            </option>
                                            <option value="SB">
                                                Solomon Islands
                                            </option>
                                            <option value="SC">
                                                Seychelles
                                            </option>
                                            <option value="SD">
                                                Sudan
                                            </option>
                                            <option value="SE">
                                                Sweden
                                            </option>
                                            <option value="SG">
                                                Singapore
                                            </option>
                                            <option value="TG">
                                                Togo
                                            </option>
                                            <option value="TH">
                                                Thailand
                                            </option>
                                            <option value="TJ">
                                                Tajikistan
                                            </option>
                                            <option value="TL">
                                                Timor-Leste
                                            </option>
                                            <option value="TM">
                                                Turkmenistan
                                            </option>
                                            <option value="TN">
                                                Tunisia
                                            </option>
                                            <option value="TO">
                                                Tonga
                                            </option>
                                            <option value="TR">
                                                Turkey
                                            </option>
                                            <option value="TT">
                                                Trinidad and Tobago
                                            </option>
                                            <option value="TW">
                                                Taiwan
                                            </option>
                                            <option value="UA">
                                                Ukraine
                                            </option>
                                            <option value="UG">
                                                Uganda
                                            </option>
                                            <option value="UY">
                                                Uruguay
                                            </option>
                                            <option value="UZ">
                                                Uzbekistan
                                            </option>
                                            <option value="VA">
                                                Vatican City (Holy See)
                                            </option>
                                            <option value="VE">
                                                Venezuela
                                            </option>
                                            <option value="VN">
                                                Vietnam
                                            </option>
                                            <option value="VU">
                                                Vanuatu
                                            </option>
                                            <option value="YE">
                                                Yemen
                                            </option>
                                            <option value="ZM">
                                                Zambia
                                            </option>
                                            <option value="ZW">
                                                Zimbabwe
                                            </option>
                                        </select>
                                    </li> --}}
                                    <li class="dropdown">
                                        <a class="text-dark" data-toggle="dropdown" href="#"><span>Language <i
                                                    class="fa fa-caret-down text-muted"></i></span></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">English</a>
                                            <a class="dropdown-item" href="#">Arabic</a>
                                            {{-- <a class="dropdown-item" href="#">German</a>
                                            <a class="dropdown-item" href="#">Greek</a>
                                            <a class="dropdown-item" href="#">Vehiclenish</a> --}}
                                        </div>
                                    </li>
                                    {{-- <li class="dropdown">
                                        <a class="text-dark" data-toggle="dropdown" href="#"><span>Currency <i
                                                    class="fa fa-caret-down text-muted"></i></span></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">USD</a>
                                            <a class="dropdown-item" href="#">EUR</a>
                                            <a class="dropdown-item" href="#">INR</a>
                                            <a class="dropdown-item" href="#">GBP</a>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-8 col-5">
                        <div class="top-bar-right">
                            <ul class="custom">

                                @if (Auth::guard('doctor')->check() || Auth::guard('hospital')->check() || Auth::guard('radiology_center')->check() || Auth::guard('medical_center')->check() || Auth::guard('lab')->check() || Auth::guard('patient')->check())
                                    <li>
                                        <a href="{{ route('front-logout') }}" class="text-dark"
                                            style="cursor: pointer;"><i class="icon icon-power"></i>
                                            <span>Logout</span></a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="text-dark" data-toggle="dropdown" href="#"><i
                                                class="fa fa-bell mr-1"></i> <span>Notifications</span></a>
                                        <div
                                            class="dropdown-menu dropdown-menu-right dropdown-menu-arrow dropdown-menu-arrow-notifications">
                                            {{-- @if (isset(auth()->user()->notifications) &&
    auth()->user()->notifications->count() > 0)
                                            @else
                                                <div class="col-md-12" style="text-align: center">
                                                    <h3 class="text-danger"> No Notifications...</h3>
                                                </div>
                                            @endif --}}
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a class="text-dark" data-toggle="dropdown" href="#"><i
                                                class="fa fa-home mr-1"></i> <span>My Profile</span></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            @if (Auth::guard('doctor')->check())
                                                <a class="dropdown-item"
                                                    href="{{ route('doctor.doctor-dashboard') }}"><i
                                                        class="dropdown-icon icon icon-user"></i> My Profile</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-bell"></i>Notifications</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-power"></i> Log out</a>
                                            @endif
                                            @if (Auth::guard('patient')->check())
                                                <a class="dropdown-item"
                                                    href="{{ route('patient.patient-profile') }}"><i
                                                        class="dropdown-icon icon icon-user"></i> My Profile</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-bell"></i>Notifications</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-power"></i> Log out</a>
                                            @endif
                                            @if (Auth::guard('hospital')->check())
                                                <a class="dropdown-item"
                                                    href="{{ route('hospital.hospital-dashboard') }}"><i
                                                        class="dropdown-icon icon icon-user"></i> My Profile</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-bell"></i>Notifications</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-power"></i> Log out</a>
                                            @endif
                                            @if (Auth::guard('radiology_center')->check())
                                                <a class="dropdown-item"
                                                    href="{{ route('radiology_center.radiology-dashboard') }}"><i
                                                        class="dropdown-icon icon icon-user"></i> My Profile</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-bell"></i>Notifications</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-power"></i> Log out</a>
                                            @endif
                                            @if (Auth::guard('medical_center')->check())
                                                <a class="dropdown-item"
                                                    href="{{ route('medical_center.medical-dashboard') }}"><i
                                                        class="dropdown-icon icon icon-user"></i> My Profile</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-bell"></i>Notifications</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-power"></i> Log out</a>
                                            @endif
                                            @if (Auth::guard('lab')->check())
                                                <a class="dropdown-item" href="{{ route('lab.lab-dashboard') }}"><i
                                                        class="dropdown-icon icon icon-user"></i> My Profile</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-bell"></i>Notifications</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="dropdown-icon icon icon-power"></i> Log out</a>
                                            @endif
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <a class="text-dark" data-target="#loginRegisterModal" data-toggle="modal"
                                            style="cursor: pointer;"><i class="fa fa-user mr-1"></i>
                                            <span>Register/Login</span></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Top Bar-->

        <!-- Horizontal Header -->
        <div class="horizontal-header clearfix">
            <div class="container">
                <a class="animated-arrow" id="horizontal-navtoggle"><span></span></a>
                <a class="smllogo mobile-logo" href="index.html"></a>
                <a class="callusbtn" href="tel:245-6325-3256"><i aria-hidden="true" class="fa fa-phone"></i></a>
            </div>
        </div>
        <!-- /Horizontal Header -->

        <!-- Horizontal Menu -->
        <div class="sticky">
            <div class="horizontal-main clearfix">
                <div class="horizontal-mainwrapper container clearfix">
                    <div class="desktoplogo">
                        <a href="{{ route('welcome') }}"><img
                                src="{{ asset('front_end_style/rushetta_images/latest_logo_new.png') }}"
                                alt="header"></a>
                    </div>
                    <div class="desktoplogo-1">
                        <a href="{{ route('welcome') }}"><img
                                src="{{ asset('front_end_style/rushetta_images/latest_logo_new.png') }}"
                                alt="header"></a>
                    </div>
                    <nav class="horizontalMenu clearfix d-md-flex">
                        <ul class="horizontalMenu-list">
                            <li aria-haspopup="true">
                                <a href="{{ route('welcome') }}">Home </a>
                                {{-- <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="index.html">Home-Default</a></li>
                                    <li aria-haspopup="true"><a href="index-text.html">Home Text</a></li>
                                    <li aria-haspopup="true"><a href="index-slides.html">Home Slides</a></li>
                                    <li aria-haspopup="true"><a href="index-video.html">Home Video</a></li>
                                    <li aria-haspopup="true"><a href="index-animation.html">Home Animation</a></li>
                                    <li aria-haspopup="true"><a href="index-map.html">Home Map</a></li>
                                    <li aria-haspopup="true"><a href="index-intro-page.html">Home Intro Page</a></li>
                                    <li aria-haspopup="true"><a href="index-popup-login.html">Home Pop-up login</a></li>
                                    <li aria-haspopup="true"><a href="index-banner.html">Home Banner</a></li>
                                </ul> --}}
                            </li>
                            <li aria-haspopup="true">
                                <a href="{{ route('aboutUs') }}">About Us</a>
                            </li>
                            {{-- <li aria-haspopup="true">
                                <a href="widgets.html">Widgets</a>
                            </li> --}}
                            {{-- <li aria-haspopup="true">
                                <a class="active" href="#">Pages <span class="fe fe-chevron-down"></span></a>
                                <div class="horizontal-megamenu clearfix">
                                    <div class="container">
                                        <div class="megamenu-content">
                                            <div class="row">
                                                <ul class="col link-list">
                                                    <li class="title">Listing pages</li>
                                                    <li><a href="page-list.html">Page List</a></li>
                                                    <li><a href="page-list-right.html">Page List Right</a></li>
                                                    <li><a href="page-list-map.html">Page Map List</a></li>
                                                    <li><a href="page-list-map2.html">Page Map List 02</a></li>
                                                    <li><a href="page-list-map3.html">Page Map List 03</a></li>
                                                </ul>
                                                <ul class="col link-list">
                                                    <li class="title">Other pages</li>
                                                    <li><a href="ad-posts.html">Ad Posts</a></li>
                                                    <li><a href="edit-posts.html">Edit Posts</a></li>
                                                    <li><a href="ad-posts2.html">Ad Posts2</a></li>
                                                    <li><a href="edit-posts2.html">Edit Posts2</a></li>
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="categories.html">Categories</a></li>
                                                    <li><a href="testimonial.html">Testimonial</a></li>
                                                    <li><a href="inovice.html">Invoice</a></li>
                                                </ul>
                                                <ul class="col link-list">
                                                    <li class="title">User pages</li>
                                                    <li><a href="userprofile.html">User Profile</a> </li>
                                                    <li><a href="userprofile2.html">User Profile 2</a></li>
                                                    <li><a href="mydash.html">My Dashboard</a></li>
                                                    <li><a href="myads.html">Ads</a></li>
                                                    <li><a href="myfavorite.html">Favorite Ads</a></li>
                                                    <li><a href="settings.html">Settings</a></li>
                                                    <li><a href="tips.html">Tips</a></li>
                                                </ul>
                                                <ul class="col link-list">
                                                    <li class="title">User pages</li>
                                                    <li><a href="manged.html">Manged Ads</a></li>
                                                    <li><a href="payments.html">Payments</a></li>
                                                    <li><a href="orders.html">Orders</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="usersall.html">User Lists</a></li>
                                                </ul>
                                                <ul class="col link-list">
                                                    <li class="title">Headers & Footer Pages</li>
                                                    <li><a href="header-style1.html">Header Style 01</a></li>
                                                    <li><a href="header-style2.html">Header Style 02</a></li>
                                                    <li><a href="header-style3.html">Header Style 03</a></li>
                                                    <li><a href="header-style4.html">Header Style 04</a></li>
                                                    <li><a href="footer-style.html">Footer Style 01</a></li>
                                                    <li><a href="footer-style2.html">Footer Style 02</a></li>
                                                    <li><a href="footer-style3.html">Footer Style 03</a></li>
                                                    <li><a href="footer-style4.html">Footer Style 04</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            <li aria-haspopup="true">
                                <a href="#">Categories <span class="fe fe-chevron-down"></span></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'doctors') }}">Doctors</a>
                                        {{-- <ul class="sub-menu">
                                            <li><a href="hospitals-list.html">Hospital List</a></li>
                                            <li><a href="hospitals-list-right.html">Hospital List Right</a></li>
                                            <li><a href="hospital-details.html">Hospital Details</a></li>
                                            <li><a href="hospital-details-02.html">Hospital Details 02</a></li>
                                            <li><a href="hospital-details-right.html">Hospital Details Right</a></li>
                                        </ul> --}}
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'hospitals') }}">Hospitals</a>
                                        {{-- <ul class="sub-menu">
                                            <li><a href="doctors-list.html">Doctors List</a></li>
                                            <li><a href="doctors-list-right.html">Doctors List Right</a></li>
                                            <li><a href="doctor-details.html">Doctor Details</a></li>
                                            <li><a href="doctor-details2.html">Doctor Details 2</a></li>
                                            <li><a href="doctor-details-right.html">Doctor Details Right</a></li>
                                        </ul> --}}
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'medical-centers') }}">Medical Centers</a>
                                        {{-- <ul class="sub-menu">
                                            <li><a href="fitness-list.html">Fitness List</a></li>
                                            <li><a href="fitness-list-right.html">Fitness List Right</a></li>
                                            <li><a href="fitness-details.html">Fitness Details</a></li>
                                            <li><a href="fitness-details2.html">Fitness Details02</a></li>
                                            <li><a href="fitness-details-right.html">Fitness Details Right</a></li>
                                        </ul> --}}
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'radiology-centers') }}">Radiology
                                            Centers</a>
                                        {{-- <ul class="sub-menu">
                                            <li><a href="pharmacy-list.html">Pharmacy List</a></li>
                                            <li><a href="pharmacy-list-right.html">Pharmacy List Right</a></li>
                                            <li><a href="pharmacy-details.html">Pharmacy Details</a></li>
                                            <li><a href="pharmacy-details2.html">Pharmacy Details02</a></li>
                                            <li><a href="pharmacy-details-right.html">Pharmacy Details Right</a></li>
                                        </ul> --}}
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'labs') }}">Labs</a>
                                        {{-- <ul class="sub-menu">
                                            <li><a href="bloodbank-list.html">BloodBank List</a></li>
                                            <li><a href="bloodbank-list-right.html">BloodBank List Right</a></li>
                                            <li><a href="bloodbank-details.html">BloodBank Details</a></li>
                                            <li><a href="bloodbank-details-right.html">BloodBank Details Right</a></li>
                                        </ul> --}}
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'insurances') }}">Insurance Companies</a>
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'pharmacies') }}">Pharmacies</a>
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'fitness-centers') }}">Healthy Gyms</a>
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'life-coaches') }}">Life Coaches</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li aria-haspopup="true">
                                <a href="#">Custom Pages <span class="fe fe-chevron-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="login-2.html">Login 02</a></li>
                                    <li><a href="forgot.html">Forgot Password</a></li>
                                    <li><a href="lockscreen.html">Lock Screen</a></li>
                                    <li><a href="underconstruction.html">UnderConstruction</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li> --}}
                            <li aria-haspopup="true">
                                <a href="{{ route('blogs-list') }}">Blogs </a>

                            </li>
                            <li aria-haspopup="true">
                                <a href="{{ route('news-list') }}">Latest News </a>
                            </li>
                            <li aria-haspopup="true">
                                <a href="{{ route('contactUs') }}">Contact Us </a>
                            </li>
                            <li aria-haspopup="true" id="search_btn" style="display: none;">
                                <a href="#search_collapse" data-toggle="collapse" role="button" aria-expanded="false"
                                    aria-controls="search_collapse"><i class="fa fa-search"></i></a>
                            </li>
                            {{-- <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
                                <span>
                                    <a href="ad-posts.html" class="btn btn-secondary btn-block mb-lg-0"><i
                                            class="icon icon-plus mr-1 text-white"></i>Add Your Post</a>
                                </span>
                            </li> --}}
                        </ul>
                        {{-- <ul class="mb-0">
                            <li aria-haspopup="true" class="d-none d-lg-block ">
                                <span>
                                    <a href="ad-posts.html" class="btn btn-danger btn-block mb-lg-0"><i
                                            class="fe fe-plus-circle mr-1 text-white"></i>Add Your Post</a>
                                </span>
                            </li>
                        </ul> --}}
                    </nav>
                </div>
            </div>
        </div>
        <!-- /Horizontal Menu -->

    </div>
    <!-- /Header-main -->
    {{-- =================================================================================================================== --}}
    {{-- ================================================ Start Content Area =============================================== --}}
    {{-- =================================================================================================================== --}}
    @yield('content')
    {{-- =================================================================================================================== --}}
    {{-- ================================================== End Content Area =============================================== --}}
    {{-- =================================================================================================================== --}}
    <!--Section-->
    {{-- <section class="sptb section-bg">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Download Apps</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-wrap">
                        <div class="btn-list">
                            <a href="#" class="btn btn-primary btn-lg mb-sm-0"><i
                                    class="fa fa-apple fa-1x mr-2"></i> App Store</a>
                            <a href="#" class="btn btn-secondary btn-lg mb-sm-0"><i
                                    class="fa fa-android fa-1x mr-2"></i> Google Play</a>
                            <a href="#" class="btn btn-info btn-lg mb-0"><i class="fa fa-windows fa-1x mr-2"></i>
                                Windows</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--/Section-->

    <!--Footer Section-->
    <section>
        <footer class="text-white footer-bg">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-12">
                            <h6>About</h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto mt-0">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="javascript:;">Our Team</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Contact US</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Faq</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Careers</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-12">
                            <h6>Resources</h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto mt-0">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="javascript:;">Search Doctor</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Search Hospital</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Search Clinic</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Search Fitnesscenter</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Search BloodBank</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-12">
                            <h6>More</h6>
                            <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                            <div class="clearfix"></div>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="javascript:;">Help</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Terms and Services</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Book Appointments</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Subscribers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h6>Contact</h6>
                            <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                            <ul class="list-unstyled mb-0 contact-footer">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    {{ isset($public_contact->address_en) ? $public_contact->address_en : '--------' }}
                                </li>
                                <li>
                                    <i
                                        class="fa fa-envelope "></i>{{ isset($public_contact->email) ? $public_contact->email : '--------' }}
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>+
                                    {{ isset($public_contact->phone) ? $public_contact->phone : '--------' }}
                                </li>
                                <li>
                                    <i class="fa fa-print"></i>+
                                    {{ isset($public_contact->fax) ? $public_contact->fax : '--------' }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h6>Subscribe</h6>
                            <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                            <div class="clearfix"></div>
                            <div class="input-group w-100">
                                <input class="form-control br-tl-3 br-bl-3" placeholder="Email" type="text">
                                <div class="input-group-append">
                                    <button class="btn btn-primary br-tr-3 br-br-3" type="button">Subscribe</button>
                                </div>
                            </div>
                            <h6 class="mt-5">Follow Us</h6>
                            <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                            <ul class="list-unstyled list-inline follow-footer">
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm"><i class="fa-brands fa-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-white p-0">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center">
                            Copyright © 2019 <a class="fs-14 text-white-50" href="#">Medz</a>. Designed by <a
                                class="fs-14 text-white-50" href="https://www.spruko.com/"> Spruko Technologies
                                Pvt.Ltd </a> All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--Footer Section-->

    <!-- Popup Login-->
    <div class="modal" id="book_visit_modal">
        <div class="modal-dialog modal-lg modal-appoint" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Make an Appointment</h5><button
                        aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body" id="appointment_body">

                </div>
                {{-- <div class="modal-footer">
                    <div class="">
                        <a class="btn btn-orange btn-block" href="#">Book Appointment</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>



    <div class="modal fade" id="rating_modal">
        <div class="modal-dialog modal-lg modal-appoint" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rating</h5><button aria-label="Close"
                        class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">×</span></button>
                </div>
                <form action="{{ route('patient.rateUser') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="rating_value" id="rating_value">
                    <input type="hidden" name="rating_user_type" id="rating_user_type">
                    <input type="hidden" name="rating_user_id" id="rating_user_id">
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center" style="font-size: 25pt;">
                            <div class="rating-star sm star_rate" id="star_1" data-val="1"> <i class="fa fa-star"></i> </div>
                            <div class="rating-star sm star_rate" id="star_2" data-val="2"> <i class="fa fa-star"></i> </div>
                            <div class="rating-star sm star_rate" id="star_3" data-val="3"> <i class="fa fa-star"></i> </div>
                            <div class="rating-star sm star_rate" id="star_4" data-val="4"> <i class="fa fa-star"></i> </div>
                            <div class="rating-star sm star_rate" id="star_5" data-val="5"> <i class="fa fa-star"></i> </div>
                        </div>
                        <div class="input-group w-100 mt-7">
                            <label for="" class="w-100">Leave A Message</label>
                            <textarea class="form-control" name="rating_message" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <div class="modal" id="loginRegisterModal">
        <div class="modal-dialog modal-lg modal-appoint" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register/Login</h5><button aria-label="Close"
                        class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12 register-right">
                            <ul class="nav nav-tabs nav-justified mb-5 p-2 border" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active m-1" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link m-1" id="profile-tab" data-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="single-page  w-100  p-0">
                                        <div class="wrapper wrapper2">
                                            <div class="card-body">
                                                <div class="btn-list text-center">
                                                    <a href="https://www.facebook.com/"
                                                        class="btn btn-icon btn-facebook">
                                                        <span class="fa-brands fa-facebook"></span>
                                                    </a>
                                                    <a href="https://www.google.com/gmail/"
                                                        class="btn btn-icon btn-google">
                                                        <span class="fa fa-google bg-google"></span>
                                                    </a>
                                                    <a href="https://twitter.com/" class="btn  btn-icon btn-twitter">
                                                        <span class="fa-brands fa-twitter bg-twitter"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr class="divider">
                                            <form action="{{ route('front-login') }}" method="POST"
                                                enctype="multipart/form-data" id="login" class="card-body"
                                                tabindex="500">
                                                @csrf
                                                <div class="mail">
                                                    <small class="text-danger">@error('email')
                                                            {{ $message }}
                                                        @enderror</small>
                                                    <input type="text" name="email">
                                                    <label>Mail or Phone</label>
                                                </div>
                                                <div class="passwd">
                                                    <small class="text-danger">@error('password')
                                                            {{ $message }}
                                                        @enderror</small>
                                                    <input type="password" name="password">
                                                    <label>Password</label>
                                                </div>
                                                <div class="submit">
                                                    <button class="btn btn-primary btn-block"
                                                        type="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="single-page w-100  p-0">
                                        <div class="wrapper wrapper2">
                                            <div class="card-body">
                                                <div class="btn-list text-center">
                                                    <a href="https://www.facebook.com/"
                                                        class="btn btn-icon btn-facebook">
                                                        <span class="fa-brands fa-facebook"></span>
                                                    </a>
                                                    <a href="https://www.google.com/gmail/"
                                                        class="btn btn-icon btn-google">
                                                        <span class="fa fa-google bg-google"></span>
                                                    </a>
                                                    <a href="https://twitter.com/" class="btn  btn-icon btn-twitter">
                                                        <span class="fa-brands fa-twitter bg-twitter"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr class="divider">
                                            <form action="{{ route('front-register') }}" method="POST"
                                                enctype="multipart/form-data" id="Register" class="card-body"
                                                tabindex="500">
                                                @csrf
                                                <div class="col-md-12 row">
                                                    <small class="text-danger">@error('user_type')
                                                            {{ $message }}
                                                        @enderror</small>
                                                    <div class="col-md-6 row">
                                                        <label for="#patient"
                                                            style="cursor: pointer;font-size:12pt">Patient</label>
                                                        <input type="radio" name="user_type" value="1" id="patient"
                                                            style="height:20px;margin-top: -2%;">
                                                    </div>
                                                    <div class="col-md-6 row">
                                                        <label for="#institution"
                                                            style="cursor: pointer;font-size:12pt">Institution</label>
                                                        <input type="radio" name="user_type" value="2" id="institution"
                                                            style="height:20px;margin-left: 28%;margin-top: -2%;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="padding: 0;top:10px;display:none"
                                                    id="select_type_div">
                                                    <small class="text-danger">@error('institution_type')
                                                            {{ $message }}
                                                        @enderror</small>
                                                    <label for="#institution_type" style="cursor: pointer;">Institution
                                                        Type</label>
                                                    <select name="institution_type" class="form-control"
                                                        id="institution_type">
                                                        <option value="Doctor">Doctor</option>
                                                        <option value="Hospital">Hospital</option>
                                                        <option value="Medical Center">Medical Center</option>
                                                        <option value="Radiology Center">Radiology Center</option>
                                                        <option value="Lab">Lab</option>
                                                    </select>
                                                </div>
                                                <hr style="font-weight: 900">
                                                <div class="name">
                                                    <small class="text-danger">@error('name')
                                                            {{ $message }}
                                                        @enderror</small>
                                                    <input type="text" name="name">
                                                    <label>Name</label>
                                                </div>
                                                <div class="mail">
                                                    <small class="text-danger">@error('email')
                                                            {{ $message }}
                                                        @enderror</small>
                                                    <input type="text" name="email">
                                                    <label>Mail or Phone</label>
                                                </div>
                                                <div class="passwd">
                                                    <small class="text-danger">@error('password')
                                                            {{ $message }}
                                                        @enderror</small>
                                                    <input type="password" name="password">
                                                    <label>Password</label>
                                                </div>
                                                <div class="passwd">
                                                    <input type="password" name="password_confirmation">
                                                    <label>Confirm Password</label>
                                                </div>
                                                <div class="submit">
                                                    <button class="btn btn-primary btn-block"
                                                        type="submit">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popup Login-->

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JQuery js-->
    <script src="{{ asset('front_end_style/assets/js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('front_end_style/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('front_end_style/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--JQueryVehiclerkline Js-->
    <script src="{{ asset('front_end_style/assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- Circle Progress Js-->
    <script src="{{ asset('front_end_style/assets/js/circle-progress.min.js') }}"></script>

    <!-- Star Rating Js-->
    {{-- <script src="{{ asset('front_end_style/assets/plugins/rating/jquery.rating-stars.js') }}"></script> --}}

    <!--Counters -->
    <script src="{{ asset('front_end_style/assets/plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ asset('front_end_style/assets/plugins/counters/waypoints.min.js') }}"></script>
    <script src="{{ asset('front_end_style/assets/plugins/counters/numeric-counter.js') }}"></script>

    <!--Owl Carousel js -->
    <script src="{{ asset('front_end_style/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>

    <!--Horizontal Menu-->
    <script src="{{ asset('front_end_style/assets/plugins/horizontal/horizontal.js') }}"></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{ asset('front_end_style/assets/js/jquery.touchSwipe.min.js') }}"></script>

    <!--Select2 js -->
    <script src="{{ asset('front_end_style/assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('front_end_style/assets/js/select2.js') }}"></script>

    <!-- Datepicker js -->
    <script src="{{ asset('front_end_style/assets/plugins/date-picker/spectrum.js') }}"></script>
    <script src="{{ asset('front_end_style/assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ asset('front_end_style/assets/plugins/date-picker/datepicker.js') }}"></script>

    <!-- sticky Js-->
    <script src="{{ asset('front_end_style/assets/js/sticky.js') }}"></script>

    <!-- Cookie js -->
    <script src="{{ asset('front_end_style/assets/plugins/cookie/jquery.ihavecookies.js') }}"></script>
    <script src="{{ asset('front_end_style/assets/plugins/cookie/cookie.js') }}"></script>

    <!-- Custom scroll bar Js-->
    <script src="{{ asset('front_end_style/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}">
    </script>

    <!--Showmore Js-->
    <script src="{{ asset('front_end_style/assets/js/jquery.showmore.js') }}"></script>
    <script src="{{ asset('front_end_style/assets/js/showmore.js') }}"></script>

    <!-- Swipe Js-->
    <script src="{{ asset('front_end_style/assets/js/swipe.js') }}"></script>

    <!--Owl-Carousel Js-->
    <script src="{{ asset('front_end_style/assets/js/owl-carousel.js') }}"></script>

    <!-- Custom Js-->
    <script src="{{ asset('front_end_style/assets/js/custom.js') }}"></script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#patient, #institution").change(function() {
                if ($("#patient").is(":checked")) {
                    $("#select_type_div").css('display', 'none');
                } else if ($("#institution").is(":checked")) {
                    $("#select_type_div").css('display', '');
                }
            });
        });


        $(document).on('click', '.book_appointment_cls', function() {

            user_id = $(this).data('id');
            user_type = $(this).data('type');

            var formData = new FormData();
            formData.append('user_type', user_type);
            formData.append('user_id', user_id);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: "{{ route('appointmentData') }}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    if (data.status == true) {
                        $("#appointment_body").html('');
                        $("#appointment_body").html(data.output);


                        const swiper = new Swiper(".swiper-container", {
                            direction: 'vertical',
                            navigation: {
                                nextEl: '.swiper-button-prev',
                                prevEl: '.swiper-button-next'
                            },
                            effect: "coverflow",
                            scrollbar: '.swiper-scrollbar',
                            initialSlide: 3,
                            scrollbarHide: true,
                            slidesPerView: 7,
                            centeredSlides: true,
                            freeMode: true,
                            spaceBetween: 1,
                            slideToClickedSlide: true,
                            loop: false,
                            mousewheel: true,
                            speed: 600,

                            // autoplay: {
                            //     delay: 3000
                            // },

                            coverflowEffect: {
                                rotate: 10,
                                stretch: 0,
                                depth: 20,
                                modifier: 1,
                                slideShadows: true
                            },

                            breakpoints: {
                                320: {
                                    slidesPerView: 7
                                },
                                560: {
                                    slidesPerView: 7
                                },
                                990: {
                                    slidesPerView: 7
                                }
                            },

                            // pagination: {
                            //     el: ".swiper-pagination",
                            //     clickable: true
                            // },

                            // navigation: {
                            //     nextEl: ".swiper-button-next",
                            //     prevEl: ".swiper-button-prev"
                            // }


                        });


                        $("#book_visit_modal").modal('show');

                    }
                },
                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });
                }
            });

        });
    </script>

    <script>
        const swiper = new Swiper(".swiper-container", {
            direction: 'vertical',
            navigation: {
                nextEl: '.swiper-button-prev',
                prevEl: '.swiper-button-next'
            },
            effect: "coverflow",
            scrollbar: '.swiper-scrollbar',
            initialSlide: 3,
            scrollbarHide: true,
            slidesPerView: 7,
            centeredSlides: true,
            freeMode: true,
            spaceBetween: 1,
            slideToClickedSlide: true,
            loop: false,
            mousewheel: true,
            speed: 600,

            // autoplay: {
            //     delay: 3000
            // },

            coverflowEffect: {
                rotate: 10,
                stretch: 0,
                depth: 20,
                modifier: 1,
                slideShadows: true
            },

            breakpoints: {
                320: {
                    slidesPerView: 7
                },
                560: {
                    slidesPerView: 7
                },
                990: {
                    slidesPerView: 7
                }
            },

            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true
            // },

            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev"
            // }


        });




        const swiper2 = new Swiper(".swiper-container-main", {
            direction: 'horizontal',
            // effect: "coverflow",
            centeredSlides: true,
            // slidesPerView: 1,
            loop: true,
            speed: 600,

            autoplay: {
                delay: 3000
            },

            breakpoints: {
                320: {
                    slidesPerView: 3
                },
                560: {
                    slidesPerView: 3
                },
                990: {
                    slidesPerView: 3
                }
            },

            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true
            // },

            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev"
            // }
        });
        $('.btn-check').change(function() {

            slide = $(this).val();
            selector = $(this).data('selector');
            radio = $('input[name=time]:checked').val();
            if (radio != undefined && radio != null && radio != "") {
                $('.swiper-slide').css('background', '#b9b9b9');
                $('.slide_' + selector).css('background', 'blue');
            }
        });
    </script>
    @if(Auth::guard('patient')->check())
        <script>
                    $('.rating-star').mouseenter(function(){
                num = $(this).data('val');
                $('.rating-star').css('color','');
                $('.fa-star').css('color','');
                for(i=0;i<=num;i++){
                    $('#star_'+i).css('color','#ffe000');
                }
            });

            $('.rating-star').mouseleave(function(){
                $('.rating-star').css('color','');
            });

            $('.rating-star').click(function(){
                num = $(this).data('val');
                $('.rating-star').css('color','');
                for(i=0;i<=num;i++){
                    in_star = $('#star_'+i).find('.fa-star');
                    in_star.css('color','#ffe000 !important');
                }

                $("#rating_value").val(num);
            });


            // $('rating-star').mouseleave(resetRatingStars);

            $(document).on('click', '.user_rate', function() {
                user_id = $(this).data('user_id');
                user_type = $(this).data('user_type');

                $("#rating_user_type").val(user_type);
                $("#rating_user_id").val(user_id);

                $("#rating_modal").modal('show');
            });
        </script>
    @endif

</body>

</html>
