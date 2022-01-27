<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Medz - Medical Directory HTML Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="appointments, booking, bootstrap list template,  directory listing html template,  directory website template, doctor directory, doctor search, health template, healthcare directory, hospital,  html css templates, html directory listing, listing, medical bootstrap template, medical directory, medical html template , medical template,  medical web templates, medical website templates, pharma website templates, responsive html template,template html css, online directory website,  html5 template, themeforest html,  online directory, simple html templates ">
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

        {{-- Sweet Alert --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>

</head>

<body>

    <!--Loader-->
    <div id="global-loader">
        <img alt="" class="loader-img" src="{{ asset('front_end_style/assets/images/loader.svg') }}">
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
                                        <a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix">
                                <ul class="contact">
                                    <li class="d-lg-none">
                                        <a class="callnumber text-dark" href="#"><span><i class="fa fa-phone mr-1"></i>:
                                                +425 345 8765</span></a>
                                    </li>
                                    <li class="select-country">
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
                                    </li>
                                    <li class="dropdown">
                                        <a class="text-dark" data-toggle="dropdown" href="#"><span>Language <i
                                                    class="fa fa-caret-down text-muted"></i></span></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">English</a>
                                            <a class="dropdown-item" href="#">Arabic</a>
                                            <a class="dropdown-item" href="#">German</a>
                                            <a class="dropdown-item" href="#">Greek</a>
                                            <a class="dropdown-item" href="#">Vehiclenish</a>
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
                                <li>
                                    <a class="text-dark" data-target="#loginRegisterModal" data-toggle="modal"
                                        style="cursor: pointer;"><i class="fa fa-user mr-1"></i>
                                        <span>Register/Login</span></a>
                                </li>
                                {{-- <li>
                                    <a class="text-dark" href="login.html"><i class="fa fa-sign-in mr-1"></i>
                                        <span>Login</span></a>
                                </li> --}}
                                <li class="dropdown">
                                    <a class="text-dark" data-toggle="dropdown" href="#"><i class="fa fa-bell mr-1"></i> <span>Notifications</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow dropdown-menu-arrow-notifications">
                                        <a class="dropdown-item" href="mydash.html"><i class="dropdown-icon icon icon-user"></i> My Profile</a>
                                        <a class="dropdown-item" href="#"><i class="dropdown-icon icon icon-speech"></i> Inbox</a>
                                        <a class="dropdown-item" href="#"><i class="dropdown-icon icon icon-bell"></i> Notifications</a>
                                        {{-- <a class="dropdown-item" href="mydash.html"><i class="dropdown-icon icon icon-settings"></i> Account Settings</a> --}}
                                        <a class="dropdown-item" href="#"><i class="dropdown-icon icon icon-power"></i> Log out</a>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="text-dark" data-toggle="dropdown" href="#"><i  class="fa fa-home mr-1"></i> <span>My Dashboard</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        @if(Auth::guard('doctor')->check())
                                            <a class="dropdown-item" href="{{ route('doctor.doctor-dashboard') }}"><i class="dropdown-icon icon icon-user"></i> My Profile</a>
                                            <a class="dropdown-item" href="#"><i class="dropdown-icon icon icon-speech"></i> Inbox</a>
                                            <a class="dropdown-item" href="#"><i class="dropdown-icon icon icon-bell"></i>Notifications</a>
                                            <a class="dropdown-item" href="#"><i class="dropdown-icon icon icon-power"></i> Log out</a>
                                        @endif
                                    </div>
                                </li>
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
                        <a href="index.html"><img src="{{ asset('front_end_style/assets/images/brand/logo1.png') }}"
                                alt=""></a>
                    </div>
                    <div class="desktoplogo-1">
                        <a href="index.html"><img src="{{ asset('front_end_style/assets/images/brand/logo1.png') }}"
                                alt=""></a>
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
                                        <a href="{{ route('users-list', 'radiology-centers') }}">Radiology Centers</a>
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
                                        <a href="{{ route('users-list', 'fitness-centers') }}">Gyms</a>
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="{{ route('users-list', 'life-coaches') }}">Life Coaches</a>
                                    </li>
                                </ul>
                            </li>
                            <li aria-haspopup="true">
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
                            </li>
                            <li aria-haspopup="true">
                                <a href="#">Blog <span class="fe fe-chevron-down"></span></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true">
                                        <a href="#">Blog Grid <i
                                                class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid.html">Blog Grid Left</a></li>
                                            <li><a href="blog-grid-right.html">Blog Grid Right</a></li>
                                            <li><a href="blog-grid-center.html">Blog Grid Center</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="#">Blog List <i
                                                class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list.html">Blog List Left</a></li>
                                            <li><a href="blog-list-right.html">Blog List Right</a></li>
                                            <li><a href="blog-list-center.html">Blog List Center</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true">
                                        <a href="#">Blog Details <i
                                                class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-details.html">Blog Details Left</a></li>
                                            <li><a href="blog-details-right.html">Blog Details Right</a></li>
                                            <li><a href="blog-details-center.html">Blog Details Center</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li aria-haspopup="true">
                                <a href="contact.html">Contact Us </a>
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
                                    <i class="fa fa-map-marker"></i> 22 S. Rock Creek StreetSan Carlos, Uniontown CA
                                    94070, USA
                                </li>
                                <li>
                                    <i class="fa fa-envelope "></i>info12323@example.com
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>+ 01 234 567 88
                                </li>
                                <li>
                                    <i class="fa fa-print"></i>+ 01 234 567 89
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
                                    <a class="btn-floating btn-sm"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm"><i class="fa fa-linkedin"></i></a>
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
    <div class="modal" id="exampleModal">
        <div class="modal-dialog modal-lg modal-appoint" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Make an Appointment</h5><button
                        aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Your Name</label>
                                <input class="form-control" placeholder="Enter Your Name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Your Email</label>
                                <input class="form-control" placeholder="Enter your Email" type="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Your Number</label>
                                <input class="form-control" placeholder="Enter your Phone Number" type="number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Gender</label>
                                <select class="form-control select2" name="user[hour]">
                                    <option value="">Male</option>
                                    <option value="0">Female</option>
                                    <option value="1">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Select Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div>
                                    </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY"
                                        type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select City</label>
                                <select class="form-control custom-select select2-show-search" name="city">
                                    <option selected value="0">Select City</option>
                                    <option value="1">Hyderabad</option>
                                    <option value="2">Mumbai</option>
                                    <option value="3">Delhi</option>
                                    <option value="4">Bangalore</option>
                                    <option value="5">Ahmedabad</option>
                                    <option value="6">Chennai</option>
                                    <option value="7">Kolkata</option>
                                    <option value="8">Lucknow</option>
                                    <option value="9">Jaipur</option>
                                    <option value="10">Bhopal</option>
                                    <option value="11">Visakhapatnam</option>
                                    <option value="12">Patna</option>
                                    <option value="13">Srinagar</option>
                                    <option value="14">Lucknow</option>
                                    <option value="15">Bhubaneswar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Hospital</label>
                                <select class="form-control custom-select select2-show-search" name="Hospital">
                                    <option selected value="0">Select Hospital</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Specialist</label>
                                <select class="form-control custom-select select2-show-search" name="Specialist">
                                    <option selected value="0">Select Specialist</option>
                                    <option value="1">Cardiologist</option>
                                    <option value="2">Neurosurgeon</option>
                                    <option value="3">Orthopaedic Surgeon</option>
                                    <option value="4">Oncologist</option>
                                    <option value="5">Neurologist</option>
                                    <option value="6">Gastroenterologist</option>
                                    <option value="7">ENT</option>
                                    <option value="8">Dentist</option>
                                    <option value="9">Psychiatrist</option>
                                    <option value="10">Urologist</option>
                                    <option value="11">Gynecologist</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Slot</label>
                                <select class="form-control custom-select select2-show-search" name="Slot">
                                    <option selected value="0">Select Hospital</option>
                                    <option value="1">Moring</option>
                                    <option value="2">Afternoon</option>
                                    <option value="3">Evening</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="">
                        <a class="btn btn-orange btn-block" href="#">Book Appointment</a>
                    </div>
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
                                                        <span class="fa fa-facebook "></span>
                                                    </a>
                                                    <a href="https://www.google.com/gmail/"
                                                        class="btn btn-icon btn-google">
                                                        <span class="fa fa-google bg-google"></span>
                                                    </a>
                                                    <a href="https://twitter.com/" class="btn  btn-icon btn-twitter">
                                                        <span class="fa fa-twitter bg-twitter"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr class="divider">
                                            <form action="{{ route('front-login') }}" method="POST"
                                                enctype="multipart/form-data" id="login" class="card-body"
                                                tabindex="500">
                                                @csrf
                                                <div class="mail">
                                                    <input type="email" name="email">
                                                    <label>Mail or Phone</label>
                                                </div>
                                                <div class="passwd">
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
                                                        <span class="fa fa-facebook "></span>
                                                    </a>
                                                    <a href="https://www.google.com/gmail/"
                                                        class="btn btn-icon btn-google">
                                                        <span class="fa fa-google bg-google"></span>
                                                    </a>
                                                    <a href="https://twitter.com/" class="btn  btn-icon btn-twitter">
                                                        <span class="fa fa-twitter bg-twitter"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr class="divider">
                                            <form id="Register" class="card-body" tabindex="500">
                                                <div class="col-md-12 row">
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
                                                <hr style="font-weight: 900">
                                                <div class="name">
                                                    <input type="text" name="name">
                                                    <label>Name</label>
                                                </div>
                                                <div class="mail">
                                                    <input type="email" name="mail">
                                                    <label>Mail or Username</label>
                                                </div>
                                                <div class="passwd">
                                                    <input type="password" name="password">
                                                    <label>Password</label>
                                                </div>
                                                <div class="submit">
                                                    <a class="btn btn-primary btn-block" href="#">Register</a>
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
    <script src="{{ asset('front_end_style/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

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


    <script>
        $(document).ready(function() {
            $("#patient, #institution").change(function() {
                if ($("#patient").is(":checked")) {
                    alert('eeeeeeee');
                } else if ($("#institution").is(":checked")) {
                    alert('bbbbbbbbb');
                } else
                    alert('NaaaaaaaaaaaaN');
            });
        });
    </script>
</body>

</html>
