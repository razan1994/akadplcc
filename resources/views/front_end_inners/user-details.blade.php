@extends('front_end_inners.app_front_end', ['title' => 'Doctor Details'])
@section('page_title')
    {{ 'Rushetta | ' . isset($user->name_en) ? $user->name_en : '--------' }}
@endsection

@section('content')
    <!--Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background1 banner-section collapse" id="search_collapse"
            data-image-src="{{ asset('front_end_style/rushetta_images/head_2.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="mb-1">Find the Nearest Medical Facility</h1>

                    </div>
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="item-search-tabs">
                                <div class="item-search-menu">
                                    <ul class="nav">
                                        <li class="">
                                            <a class="active" data-toggle="tab" href="#tab1">Hospitals</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab2">{{ ucfirst($user_type) }}</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab3">FitnesCenters</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab4">Pharmacies</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab5">Clinics</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab6">Blood Banks</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content index-search-select">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                    <input class="form-control border" placeholder="Search Location"
                                                        type="text">
                                                    <span><i class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Type Of Hospitals
                                                            </option>
                                                            <option value="1">
                                                                Women's hospitals
                                                            </option>
                                                            <option value="2">
                                                                Children's hospitals
                                                            </option>
                                                            <option value="4">
                                                                Cardiac hospitals.
                                                            </option>
                                                            <option value="5">
                                                                Cancer Hosptals
                                                            </option>
                                                            <option value="5">
                                                                Diagnostic centers
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="">
                                                            <option>
                                                                Distance
                                                            </option>
                                                            <option value="1">
                                                                3km
                                                            </option>
                                                            <option value="2">
                                                                6km
                                                            </option>
                                                            <option value="3">
                                                                9km
                                                            </option>
                                                            <option value="4">
                                                                10km
                                                            </option>
                                                            <option value="5">
                                                                20km
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Max Fees
                                                            </option>
                                                            <option value="1">
                                                                $10k
                                                            </option>
                                                            <option value="2">
                                                                $10k-$20K
                                                            </option>
                                                            <option value="3">
                                                                $20K-$30K
                                                            </option>
                                                            <option value="4">
                                                                $30K-$40K
                                                            </option>
                                                            <option value="5">
                                                                $40K-$50K
                                                            </option>
                                                            <option value="6">
                                                                $50K-$60K
                                                            </option>
                                                            <option value="7">
                                                                $60K-$70K
                                                            </option>
                                                            <option value="8">
                                                                $70k-$80K
                                                            </option>
                                                            <option value="9">
                                                                $80K &lt; Above
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" href="#"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control border" placeholder="Search Location"
                                                            type="text"> <span><i
                                                                class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Type Of {{ ucfirst($user_type) }}
                                                            </option>
                                                            <option value="1">
                                                                Dentist
                                                            </option>
                                                            <option value="2">
                                                                Gynecologist
                                                            </option>
                                                            <option value="4">
                                                                Physiotherapist
                                                            </option>
                                                            <option value="5">
                                                                Neurosurgeon
                                                            </option>
                                                            <option value="5">
                                                                Neurologist
                                                            </option>
                                                            <option value="5">
                                                                Infertility Specialist
                                                            </option>
                                                            <option value="5">
                                                                Cardiologist
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="">
                                                            <option>
                                                                Distance
                                                            </option>
                                                            <option value="1">
                                                                3km
                                                            </option>
                                                            <option value="2">
                                                                6km
                                                            </option>
                                                            <option value="3">
                                                                9km
                                                            </option>
                                                            <option value="4">
                                                                10km
                                                            </option>
                                                            <option value="5">
                                                                20km
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Max Fees
                                                            </option>
                                                            <option value="1">
                                                                $10k
                                                            </option>
                                                            <option value="2">
                                                                $10k-$20K
                                                            </option>
                                                            <option value="3">
                                                                $20K-$30K
                                                            </option>
                                                            <option value="4">
                                                                $30K-$40K
                                                            </option>
                                                            <option value="5">
                                                                $40K-$50K
                                                            </option>
                                                            <option value="6">
                                                                $50K-$60K
                                                            </option>
                                                            <option value="7">
                                                                $60K-$70K
                                                            </option>
                                                            <option value="8">
                                                                $70k-$80K
                                                            </option>
                                                            <option value="9">
                                                                $80K &lt; Above
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" href="#"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control border" placeholder="Search Location"
                                                            type="text"> <span><i
                                                                class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Fitness Centers
                                                            </option>
                                                            <option value="1">
                                                                Aerobic Centers
                                                            </option>
                                                            <option value="2">
                                                                Yoga Centers
                                                            </option>
                                                            <option value="4">
                                                                Dance Centers
                                                            </option>
                                                            <option value="5">
                                                                Pilates Centers
                                                            </option>
                                                            <option value="5">
                                                                Gyms
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="">
                                                            <option>
                                                                Distance
                                                            </option>
                                                            <option value="1">
                                                                3km
                                                            </option>
                                                            <option value="2">
                                                                6km
                                                            </option>
                                                            <option value="3">
                                                                9km
                                                            </option>
                                                            <option value="4">
                                                                10km
                                                            </option>
                                                            <option value="5">
                                                                20km
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Max Fees
                                                            </option>
                                                            <option value="1">
                                                                $10k
                                                            </option>
                                                            <option value="2">
                                                                $10k-$20K
                                                            </option>
                                                            <option value="3">
                                                                $20K-$30K
                                                            </option>
                                                            <option value="4">
                                                                $30K-$40K
                                                            </option>
                                                            <option value="5">
                                                                $40K-$50K
                                                            </option>
                                                            <option value="6">
                                                                $50K-$60K
                                                            </option>
                                                            <option value="7">
                                                                $60K-$70K
                                                            </option>
                                                            <option value="8">
                                                                $70k-$80K
                                                            </option>
                                                            <option value="9">
                                                                $80K &lt; Above
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" href="#"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control border" placeholder="Search Location"
                                                            type="text"> <span><i
                                                                class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Pharmacies
                                                            </option>
                                                            <option value="1">
                                                                Retail pharmacy
                                                            </option>
                                                            <option value="2">
                                                                Hospital pharmacy
                                                            </option>
                                                            <option value="4">
                                                                Clinic pharmacy
                                                            </option>
                                                            <option value="5">
                                                                Home care pharmacy
                                                            </option>
                                                            <option value="5">
                                                                Mail order pharmacy
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="">
                                                            <option>
                                                                Distance
                                                            </option>
                                                            <option value="1">
                                                                3km
                                                            </option>
                                                            <option value="2">
                                                                6km
                                                            </option>
                                                            <option value="3">
                                                                9km
                                                            </option>
                                                            <option value="4">
                                                                10km
                                                            </option>
                                                            <option value="5">
                                                                20km
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Max price
                                                            </option>
                                                            <option value="1">
                                                                $10k
                                                            </option>
                                                            <option value="2">
                                                                $10k-$20K
                                                            </option>
                                                            <option value="3">
                                                                $20K-$30K
                                                            </option>
                                                            <option value="4">
                                                                $30K-$40K
                                                            </option>
                                                            <option value="5">
                                                                $40K-$50K
                                                            </option>
                                                            <option value="6">
                                                                $50K-$60K
                                                            </option>
                                                            <option value="7">
                                                                $60K-$70K
                                                            </option>
                                                            <option value="8">
                                                                $70k-$80K
                                                            </option>
                                                            <option value="9">
                                                                $80K &lt; Above
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" href="#"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control border" placeholder="Search Location"
                                                            type="text"> <span><i
                                                                class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Clinics
                                                            </option>
                                                            <option value="1">
                                                                Physiotherapy Clinics
                                                            </option>
                                                            <option value="2">
                                                                Dental Clinics
                                                            </option>
                                                            <option value="4">
                                                                Walk-in Urgent Care Clinics
                                                            </option>
                                                            <option value="5">
                                                                Chiropractor Clinics
                                                            </option>
                                                            <option value="5">
                                                                Rehabilitation Clinics
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="">
                                                            <option>
                                                                Distance
                                                            </option>
                                                            <option value="1">
                                                                3km
                                                            </option>
                                                            <option value="2">
                                                                6km
                                                            </option>
                                                            <option value="3">
                                                                9km
                                                            </option>
                                                            <option value="4">
                                                                10km
                                                            </option>
                                                            <option value="5">
                                                                20km
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Max Fees
                                                            </option>
                                                            <option value="1">
                                                                $10k
                                                            </option>
                                                            <option value="2">
                                                                $10k-$20K
                                                            </option>
                                                            <option value="3">
                                                                $20K-$30K
                                                            </option>
                                                            <option value="4">
                                                                $30K-$40K
                                                            </option>
                                                            <option value="5">
                                                                $40K-$50K
                                                            </option>
                                                            <option value="6">
                                                                $50K-$60K
                                                            </option>
                                                            <option value="7">
                                                                $60K-$70K
                                                            </option>
                                                            <option value="8">
                                                                $70k-$80K
                                                            </option>
                                                            <option value="9">
                                                                $80K &lt; Above
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" href="#"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0 location">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control border" placeholder="Search Location"
                                                            type="text"> <span><i
                                                                class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Blood Banks
                                                            </option>
                                                            <option value="1">
                                                                Central Blood Center
                                                            </option>
                                                            <option value="2">
                                                                San Diego Blood Bank
                                                            </option>
                                                            <option value="4">
                                                                Delta Blood Bank
                                                            </option>
                                                            <option value="5">
                                                                Heartland Blood Centers
                                                            </option>
                                                            <option value="5">
                                                                Florida’s Blood Centers
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="">
                                                            <option>
                                                                Distance
                                                            </option>
                                                            <option value="1">
                                                                3km
                                                            </option>
                                                            <option value="2">
                                                                6km
                                                            </option>
                                                            <option value="3">
                                                                9km
                                                            </option>
                                                            <option value="4">
                                                                10km
                                                            </option>
                                                            <option value="5">
                                                                20km
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                                        data-placeholder="Select">
                                                        <optgroup label="Categories">
                                                            <option>
                                                                Available Bloodgroups
                                                            </option>
                                                            <option value="1">
                                                                A negative
                                                            </option>
                                                            <option value="2">
                                                                A positive
                                                            </option>
                                                            <option value="3">
                                                                B negative
                                                            </option>
                                                            <option value="4">
                                                                B positive
                                                            </option>
                                                            <option value="5">
                                                                AB negative
                                                            </option>
                                                            <option value="6">
                                                                AB positive
                                                            </option>
                                                            <option value="7">
                                                                O negative
                                                            </option>
                                                            <option value="8">
                                                                O positive
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" href="#"><i
                                                            class="fa fa-search"></i> Search</a>
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
        </div>
    </section>
    <!--/Section-->
    <!--Breadcrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">{{ ucfirst($user_type) }}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{ ucfirst($user_type) }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ isset($user->name_en) ? $user->name_en : '--------' }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="card">
                        <div class="item-user">
                            <div class="profile-pic wideget-user-img mb-0 pt-3">
                                @if (isset($user->profile_photo_path) && file_exists($user->profile_photo_path))
                                    <img src="{{ asset($user->profile_photo_path) }}" class="w-150 h-150 br-2"
                                        alt="user">
                                @else
                                    <img src="{{ asset('front_end_style/assets/images/media/doctors/2.jpg') }}"
                                        class="w-150 h-150 br-2" alt="user">
                                @endif
                            </div>
                        </div>
                        <div class="card-body item-user text-center">
                            <div class="ml-1">
                                <a href="#" class="text-dark">
                                    <h4 class="mt-0 mb-2 font-weight-bold">
                                        {{ isset($user->username) ? $user->username : '--------' }}<i
                                            class="ion-checkmark-circled  text-success fs-14 ml-1"></i></h4>
                                </a>
                                <span
                                    class="text-gray">{{ isset($user->speciality->name_en) ? $user->speciality->name_en : '--------' }}</span><br>
                                <span class="text-muted">Member Since
                                    {{ isset($user->created_at) ? $user->created_at->diffForHumans() : '--------' }}</span><br>
                                <div class="rating-stars d-inline-flex mb-2 mr-3">
                                    <input type="number" readonly="readonly" class="rating-value star"
                                        name="rating-stars-value" value="4">
                                    <div class="rating-stars-container mr-2">
                                        <div class="rating-star sm "> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star sm "> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star sm "> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star sm "> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star sm"> <i class="fa fa-star"></i> </div>
                                    </div>
                                </div>
                                <h6 class="mt-2 mb-0 btn-list">
                                    <a href="#"
                                        class="btn btn-secondary btn-sm">{{ isset($user->view_counter) ? $user->view_counter : '0' }}
                                        Views</a>
                                    {{-- <a href="#" class="btn btn-info btn-sm">850 Patients</a> --}}
                                </h6>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-4">{{ ucfirst($user_type) }} Info</h4>
                            <div>
                                <h6><span class="font-weight-semibold"><i class="fa fa-map-marker mr-2 mb-2"></i></span><a
                                        href="#" class="text-body">
                                        {{ isset($user->country->name_en) ? $user->country->name_en : '--------' }} /
                                        {{ isset($user->region->name_en) ? $user->region->name_en : '--------' }}</a>
                                </h6>
                                <h4><span class="font-weight-semibold"><i class="fa fa-book mr-3 mb-2"></i></span><a
                                        href="#" class="text-body">Languages :</a></h4>
                                <div class="card-body product-filter-desc" style="padding: 0 !important;">
                                    <div class="product-tags clearfix">
                                        <ul class="list-unstyled mb-0">
                                            @if (isset($languages) && count($languages) > 0)
                                                @foreach ($languages as $lang)
                                                    <li>
                                                        <a>{{ $lang }}</a>
                                                    </li>
                                                @endforeach
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=" item-user-icons mt-4">
                                {{-- <a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a> --}}
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-list text-left">
                                {{-- <a href="#" class="btn  btn-primary"><i class="fa fa-envelope"></i> Chat</a>
									<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#contact"><i class="fa fa-user"></i> Contact Me</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="mb-5">
                        <div class="wideget-user-tab wideget-user-tab3">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu1">
                                    <ul class="nav">
                                        <li class=""><a href="#tab-5" class="active"
                                                data-toggle="tab">Informations</a></li>
                                        <li><a href="#tab-6" data-toggle="tab" class="">Education</a></li>
                                        <li><a href="#tab-7" data-toggle="tab" class="">Consultation Fees</a>
                                        </li>
                                        <li><a href="#tab-8" data-toggle="tab" class="">Reviews</a></li>
                                        @if(Auth::guard('patient')->check())
                                        <li><a href="#tab-9" data-toggle="tab" class="">Book Appointment</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="border-0">
                            <div class="tab-content  border-left border-right details-tab-content bg-white">
                                <div class="tab-pane active" id="tab-5">
                                    <div class=" p-5">
                                        <div class="mb-4">
                                            <p>{!! isset($user->user_description_en) ? $user->user_description_en : null !!}</p>
                                        </div>
                                        @if ($user_type == 'doctors')
                                            @if (isset($user->certificates) && $user->certificates->count() > 0)
                                                <h3 class="card-title mb-3">Certificates</h3>
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12">
                                                        <ul class="list-unstyled widget-spec mb-0">
                                                            @foreach ($user->certificates as $certificate)
                                                                <li class="">
                                                                    <a href="#" class="text-dark"><i
                                                                            class="fa fa fa-graduation-cap mr-2"></i>{{ $certificate->name_en }}
                                                                        | {{ $certificate->institution_name_en }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane userprof-tab" id="tab-6">
                                    <div class=" p-5">
                                        <div class="mb-4">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                                praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias
                                                excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                                qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who
                                                are so beguiled and demoraliz the charms of pleasure of the moment, so
                                                blinded by desire, that they cannot foresee the pain and trouble thena bound
                                                to ensue; and equal blame belongs to those who fail in their duty through
                                                weakness of will, which is the same as saying through shrinking from toil
                                                and pain.</p>
                                        </div>
                                        <h3 class="card-title mb-3">Curriculum</h3>
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12">
                                                <ul class="list-unstyled widget-spec mb-0">
                                                    <li class="">
                                                        <a href="#" class="text-dark"><i
                                                                class="fa fa fa-graduation-cap mr-2"></i>Pre Medical
                                                            College - M.D(Obstetrics & gynecology)</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="text-dark"><i
                                                                class="fa fa-graduation-cap  mr-2"></i>Wish Medical College
                                                            - M.S(Obstetrics & gynecology)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane userprof-tab" id="tab-7">
                                    <div class=" p-5">
                                        <div class="list-id">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered border-top mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Service Visit</th>
                                                                    <th>Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Maternal-fetal medicine</td>
                                                                    <td>$15</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Reproductive endocrinology and infertility</td>
                                                                    <td>$18</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Female pelvic medicine and reconstructive surgery
                                                                    </td>
                                                                    <td>$18</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Menopausal</td>
                                                                    <td>$21</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Laparoscopic surgery</td>
                                                                    <td>$17</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pediatric and adolescent gynecology</td>
                                                                    <td>$15</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-8">
                                    <div class="media mt-0 p-5">
                                        <div class="d-flex mr-3">
                                            <a href="#"><img class="media-object brround" alt="64x64"
                                                    src="{{ asset('front_end_style/assets/images/users/male/1.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
                                                <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top"
                                                    title="verified"><i
                                                        class="fa fa-check-circle-o text-success"></i></span>
                                                <span class="fs-14 ml-2"> 4.5
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star-half-o text-yellow"></i>
                                                </span>
                                            </h5>
                                            <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i
                                                    class=" ml-3 fa fa-clock-o"></i> 13.00 <i
                                                    class=" ml-3 fa fa-map-marker"></i> Brezil</small>
                                            <p class="font-13  mb-2 mt-2">
                                                Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum
                                                quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                                modi tempora incidunt ut labore et nostrud exercitation ullamco laboris
                                                commodo consequat.
                                            </p>
                                            <a href="#" class="mr-2"><span
                                                    class="badge badge-primary">Helpful</span></a>
                                            <a href="" class="mr-2" data-toggle="modal"
                                                data-target="#Comment"><span>Comment</span></a>
                                            <a href="" class="mr-2" data-toggle="modal"
                                                data-target="#report"><span>Report</span></a>
                                            <div class="media mt-5">
                                                <div class="d-flex mr-3">
                                                    <a href="#"> <img class="media-object brround" alt="64x64"
                                                            src="{{ asset('front_end_style/assets/images/users/female/2.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span
                                                            class="fs-14 ml-0" data-toggle="tooltip"
                                                            data-placement="top" title="verified"><i
                                                                class="fa fa-check-circle-o text-success"></i></span></h5>
                                                    <small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st
                                                        <i class=" ml-3 fa fa-clock-o"></i> 6.00 <i
                                                            class=" ml-3 fa fa-map-marker"></i> Brezil</small>
                                                    <p class="font-13  mb-2 mt-2">
                                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        commodo Sed ut perspiciatis unde omnis iste natus error sit
                                                        voluptatem accusantium laboriosam, nisi ut aliquid ex ea commodi
                                                        consequatur consequat.
                                                    </p>
                                                    <a href="" data-toggle="modal" data-target="#Comment"><span
                                                            class="badge badge-default">Comment</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media p-5 border-top mt-0">
                                        <div class="d-flex mr-3">
                                            <a href="#"> <img class="media-object brround" alt="64x64"
                                                    src="{{ asset('front_end_style/assets/images/users/male/3.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1 font-weight-semibold">Edward
                                                <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top"
                                                    title="verified"><i
                                                        class="fa fa-check-circle-o text-success"></i></span>
                                                <span class="fs-14 ml-2"> 4
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star text-yellow"></i>
                                                    <i class="fa fa-star-o text-yellow"></i>
                                                </span>
                                            </h5>
                                            <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i
                                                    class=" ml-3 fa fa-clock-o"></i> 16.35 <i
                                                    class=" ml-3 fa fa-map-marker"></i> UK</small>
                                            <p class="font-13  mb-2 mt-2">
                                                Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum
                                                quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                                                modi tempora incidunt ut labore et nostrud exercitation ullamco laboris
                                                commodo consequat.
                                            </p>
                                            <a href="#" class="mr-2"><span
                                                    class="badge badge-primary">Helpful</span></a>
                                            <a href="" class="mr-2" data-toggle="modal"
                                                data-target="#Comment"><span>Comment</span></a>
                                            <a href="" class="mr-2" data-toggle="modal"
                                                data-target="#report"><span>Report</span></a>
                                        </div>
                                    </div>
                                    <div class="p-5 border-top">
                                        <h3 class="card-title">Leave a reply</h3>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name1" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Email Coursedress">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="example-textarea-input" rows="6"
                                                placeholder="Comment"></textarea>
                                        </div>
                                        <a href="#" class="btn btn-primary">Send Reply</a>
                                    </div>
                                </div>
                                @if(Auth::guard('patient')->check())
                                <div class="tab-pane" id="tab-9">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Book a Visit</h3>
                                        </div>
                                        <form action="{{ route('patient.book-appointment') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ encrypt($user->id) }}">
                                            <input type="hidden" name="user_type" value="{{ $user_type }}">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" name="first_name" class="form-control" placeholder="Enter Your Name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Age</label>
                                                    <input type="number" name="age" class="form-control" placeholder="Enter your age">
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" placeholder="Enter your Email">
                                                </div> --}}
                                                <div class="form-group">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" name="phone" class="form-control" placeholder="Enter your Phone Number">
                                                </div>
                                                <div class="form-group">
                                                    <style>
                                                        .carousel-item {
                                                        transition-duration: 0.3s !important;
                                                        }
                                                    </style>
                                                    <label class="form-label">Date / Time</label>
                                                    <div class="row gutters-xs">
                                                        <div class="col-md-12 row d-flex justify-content-center">
                                                            <div id="carouselExampleIndicators" class="carousel slide carousel-multi-item" data-wrap="false" data-ride="carousel" data-interval="false" touch="true">
                                                                <ol class="carousel-indicators">
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                                </ol>
                                                                <div class="carousel-inner" role="listbox">
                                                                    @if(isset($user->chunked_plan) && count($user->chunked_plan) > 0)
                                                                        @foreach ($user->chunked_plan as $index => $chunked_days)
                                                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                                <div class="row" style="height: 70%;">
                                                                                    @foreach ($chunked_days as $key => $day)
                                                                                    @if(count($chunked_days) == 4)
                                                                                    <div class="col-xs-12 col-sm-6 col-md-4" style="height: 100%;">
                                                                                        @elseif(count($chunked_days) == 3)
                                                                                        <div class="col-xs-12 col-sm-6 col-md-4" style="height: 100%;">
                                                                                            @elseif(count($chunked_days) == 2)
                                                                                            <div class="col-xs-12 col-sm-6 col-md-6" style="height: 100%;;">
                                                                                            @elseif(count($chunked_days) == 1)
                                                                                            <div class="col-xs-12 col-sm-6 col-md-12" style="height: 100%;">
                                                                                            @endif
                                                                                            <a class="btn btn-success time-date rs-btn">{{ $day['day'] }} {{ date('m-d',strtotime($day['date'])) }}</a>
                                                                                            <div class="swiper-container">
                                                                                                <button class="swiper-button-prev"><i class="fa-solid fa-angle-down"></i></button>
                                                                                                <div class="swiper-wrapper">
                                                                                                    @php
                                                                                                    $start_time = $day['from'];
                                                                                                    $diff1 =strtotime($day['from']);
                                                                                                    $diff2 =strtotime($day['to']);
                                                                                                    $diff3 = $diff2 - $diff1;
                                                                                                    @endphp
                                                                                                    @for ($i = 0 ; $i < $diff3 ; $i+=$day['every'])
                                                                                                        <div class="swiper-slide slide_{{ $index }}_{{ $key }}_{{ $i }}">
                                                                                                            <input type="radio" class="btn-check" name="time" data-selector="{{ $index }}_{{ $key }}_{{ $i }}" id="success-outlined_{{ $index }}_{{ $key }}_{{ $i }}" value="{{ date('Y-m-d',strtotime($day['date'])) }} {{ date("h:i A",strtotime($start_time)) }}" autocomplete="off" style="display: none">
                                                                                                            <label class="btn rd-btn c_labelbreord" for="success-outlined_{{ $index }}_{{ $key }}_{{ $i }}">
                                                                                                                {{ date("h:i A",strtotime($start_time)) }}
                                                                                                                @php
                                                                                                                $start_time = date("H:i:s", strtotime($day['every']." Minutes", strtotime($start_time)));
                                                                                                                @endphp

                                                                                                            </label>
                                                                                                        </div>
                                                                                                        @if($start_time >= $day['to'])
                                                                                                            @break
                                                                                                        @endif
                                                                                                    @endfor
                                                                                                </div>
                                                                                                <button class="swiper-button-next"><i class="fa-solid fa-angle-up"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                                <span class="fa-solid fa-angle-left" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                                <span class="fa-solid fa-angle-right" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <div class="">
                                                    <button type="submit" class="btn  btn-primary">Fix Appointment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="card-footer bg-white br-bl-2 br-br-2 border-left border-right border-bottom">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-success icons"><i class="icon icon-note mr-1"></i> Book A
                                        Visit</a>
                                    <a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Share</a>
                                    <a href="#" class="btn btn-danger icons" data-toggle="modal" data-target="#report"><i
                                            class="icon icon-exclamation mr-1"></i> Report Abuse</a>
                                    <a href="#" class="btn btn-primary icons"><i class="icon icon-heart  mr-1"></i>
                                        678</a>
                                    <a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  mr-1"></i>
                                        Print</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/ Section-->

    <!-- Newsletter-->
    <section class="sptb section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-6 col-md-12">
                    <div class="sub-newsletter">
                        <h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter
                        </h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 col-md-12">
                    <div class="input-group sub-input mt-1">
                        <input class="form-control input-lg" placeholder="Enter your Email" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-lg br-tr-3 br-br-3" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Newsletter-->

    <!-- Message Modal -->
    <div class="modal" id="contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="examplecontactLongTitle">Send Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="contact-name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="contact-email" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-0">
                        <textarea class="form-control" name="example-textarea-input" rows="6"
                            placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Send</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Message Modal -->

    <!--Comment Modal -->
    <div class="modal" id="Comment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleCommentLongTitle">Leave a Comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="Comment-name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="Comment-email" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-0">
                        <textarea class="form-control" name="example-textarea-input" rows="6"
                            placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Send</button>
                </div>
            </div>
        </div>
    </div>
    <!--/Comment Modal -->

    <!-- Report Modal -->
    <div class="modal" id="report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="examplereportLongTitle">Report Abuse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="report-name" placeholder="Enter url">
                    </div>
                    <div class="form-group">
                        <select name="country" id="select-countries2" class="form-control custom-select">
                            <option value="1" selected>Categories</option>
                            <option value="2">Vehiclem</option>
                            <option value="3">Identity Theft</option>
                            <option value="4">Online Shopping Fraud</option>
                            <option value="5">Service Providers</option>
                            <option value="6">Phishing</option>
                            <option value="7">Spyware</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="report-email" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-0">
                        <textarea class="form-control" name="example-textarea-input" rows="6"
                            placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Report Modal -->

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script>
    <script>
        // var enabledDates = new Array('2020-01-12', '2020-01-16', '2020-01-18', '2020-01-30', '2020-02-05', '2020-02-10');
        // var enabledDates = new Array($("#allowed").val());
        var enabledDates = $('.allowed').map(function() {
            return $(this).val()
        }).get();

        $(document).ready(function() {
            $(function() {
                $("#appointmentDate").datepicker({
                    todayHighlight: true,
                    dateFormat: 'yy-mm-dd',
                    multidate: true,
                    startDate: new Date(),
                    minDate: 3,
                    beforeShowDay: enableAllTheseDays
                });

            });


            function enableAllTheseDays(date) {
                arr = [1, 2, 3];
                var day = date.getDay();
                return [(arr.indexOf(day) != -1)];
            }
        })
    </script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper-container", {
            direction: 'vertical',
            navigation: {
                nextEl: '.swiper-button-prev',
                prevEl: '.swiper-button-next'
            },
            effect: "coverflow",
            scrollbar: '.swiper-scrollbar',
            initialSlide : 3,
            scrollbarHide: true,
            slidesPerView: 7,
            centeredSlides: true,
            freeMode: true,
            spaceBetween: 1,
            slideToClickedSlide: true,
            loop: false,
            mousewheel:true,
            speed:600,

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


            // $('.swiper-slide').click(function(){
            //     $('.swiper-slide').css('background','#b9b9b9');
            //     $(this).css('background','blue');
            // });

            // swiper.on('transitionEnd', function(e) {
            //     // alert(this.activeIndex);
            //     $('.swiper-slide').css('background','');
            //     if (this.activeIndex == 1) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 2) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 3) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 4) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 5) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 6) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 7) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 8) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 9) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 10) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            //     if (this.activeIndex == 11) {
            //         $('.swiper-slide-active').css('background','green');
            //     }
            // });


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

            // coverflowEffect: {
            //     rotate: 50,
            //     stretch: 0,
            //     // depth: 100,
            //     modifier: 1,
            //     slideShadows: true
            // },

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
        $('.btn-check').change(function(){

        slide = $(this).val();
        selector = $(this).data('selector');
        radio = $('input[name=time]:checked').val();
            if(radio != undefined && radio != null && radio != ""){
                $('.swiper-slide').css('background','#b9b9b9');
                $('.slide_'+selector).css('background','blue');
            }
        });
    </script>

@endsection
