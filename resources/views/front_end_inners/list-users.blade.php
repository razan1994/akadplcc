@extends('front_end_inners.app_front_end', ['title' => $user_type])
@section('page_title') {{ 'Rushetta | ' . isset($user_type) ? str_replace('-', '', $user_type) : '--------' }} @endsection
@section('content')
    <!--Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background1 banner-section collapse" id="search_collapse"
            data-image-src="{{ asset('front_end_style/assets/images/banners/banner1.jpg') }}">
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
                <h4 class="page-title">{{ ucfirst($user_type) }} List</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ ucfirst($user_type) }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($user_type) }} List</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <!--Add lists-->
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class=" mb-lg-0">
                        <div class="">
                            <div class="item2-gl d-list">
                                <div class="col-sm-12 col-md-12 mb-0">
                                    <div class="form-group">
                                        <input type="text" name="search" id="search" class="form-control"
                                            placeholder="search..."
                                            data-type="{{ isset($user_type) ? $user_type : 'Undefined' }}"
                                            data-grid="tab_11">
                                    </div>
                                </div>
                                <div class=" mb-0">
                                    <div class="">
                                        <div class="p-5 bg-white item2-gl-nav d-flex">
                                            {{-- <h6 class="mb-0 mt-2">Showing 1 to 10 of 30 entries</h6> --}}

                                            <ul class="nav item2-gl-menu ml-auto">
                                                <li class="">
                                                    <a href="#tab-11" class="active show" data-toggle="tab"
                                                        title="List style"><i class="fa fa-list"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#tab-12" data-toggle="tab" class=""
                                                        title="Grid"><i class="fa fa-th"></i></a>
                                                </li>
                                            </ul>
                                            <div class="d-flex select2-sm">
                                                <label class="mr-2 mt-1 mb-sm-1">Sort By:</label>
                                                <select name="item" class="form-control select2">
                                                    <option value="1">Latest</option>
                                                    <option value="2">Oldest</option>
                                                    <option value="3">Price:Low-to-High</option>
                                                    <option value="5">Price:Hight-to-Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (isset($users) && $users->count() > 0)
                                    <div class="tab-content" id="tab_content">
                                        <div class="tab-pane active" id="tab-11">
                                            @foreach ($users as $key => $user)
                                                <div class="card overflow-hidden">
                                                    <div class="d-md-flex">
                                                        <div class="item-card9-img doctor-details">
                                                            <div class="item-card9-imgs doctors">
                                                                <a
                                                                    href="{{ route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]) }}"></a>
                                                                <div
                                                                    class="power-ribbon power-ribbon-top-left text-warning">
                                                                    <span class="bg-warning"><i
                                                                            class="fa fa-bolt"></i></span></div>
                                                                @if (isset($user->profile_photo_path) && file_exists($user->profile_photo_path))
                                                                    <img alt="img" class="cover-image h-200"
                                                                        src="{{ asset($user->profile_photo_path) }}">
                                                                @else
                                                                    <img alt="img" class="cover-image h-200"
                                                                        src="{{ asset('front_end_style/assets/images/media/doctors/2.jpg') }}">
                                                                @endif
                                                            </div>
                                                            <div class="item-card9-icons">
                                                                <a href="#" class="item-card9-icons1 item-icon-bg"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="wishlist"><i
                                                                        class="fa fa fa-heart-o"></i></a>
                                                                <a href="#" class="item-card9-icons1 bg-purple"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="Share"><i
                                                                        class="fa fa-share-alt"></i></a>
                                                            </div>
                                                            <div class="item-overly-trans">
                                                                <div class="rating-stars d-flex">
                                                                    <span class="text-white mr-1"></span> <input
                                                                        class="rating-value star" name="rating-stars-value"
                                                                        readonly="readonly" type="number" value="3">
                                                                    <div class="rating-stars-container">
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card border-0 mb-0">
                                                            <div class="card-body">
                                                                <div class="item-card9">
                                                                    <span
                                                                        class="badge badge-dark fs-12 mb-2">{{ ucfirst($user_type) }}</span>
                                                                    <a class="text-dark"
                                                                        href="{{ route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]) }}">
                                                                        <h4 class="font-weight-bold mt-1 mb-1">
                                                                            {{ isset($user->name_en) ? $user->name_en : '--------' }}<i
                                                                                class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                                        </h4>
                                                                    </a>
                                                                    @if ($user_type == 'doctors')
                                                                        @if(isset($user->specialities) && $user->specialities->count() > 0)
                                                                        @foreach ($user->specialities->take(3) as $speciality)
                                                                            <span class="text-muted fs-13 mt-0"><i
                                                                                class="fa fa-user-md text-muted mr-2"></i>{{ isset($speciality->speciality->name_en) ? $speciality->speciality->name_en : '--------' }}</span>
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                    <div class="item-card9-desc mb-0 mt-2">
                                                                        <span class="mr-4"><i
                                                                                class="fa fa-map-marker text-muted mr-1"></i>
                                                                            {{ isset($user->country_id) ? $user->country->name_en : 'Not Set' }}
                                                                            /
                                                                            {{ isset($user->region_id) ? $user->region->name_en : 'Not Set' }}</span>
                                                                        @if (isset($user->weekPlan->active_days) && count(explode(',', $user->weekPlan->active_days)) > 0)
                                                                            <li style="list-style-type: none;"><span><i
                                                                                        class="fa fa-calendar-o mr-1 text-muted"></i>{{ explode(',', $user->weekPlan->active_days)[0] }}
                                                                                    |
                                                                                    {{ explode(',', $user->weekPlan->active_days)[count(explode(',', $user->weekPlan->active_days)) - 1] }}</span>
                                                                            </li>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="item-card9-footer btn-appointment">
                                                                    <div class="btn-group w-100">
                                                                        <a href="{{ route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]) }}"
                                                                            class="btn btn-outline-light w-33 p-2 border-top-0 border-right-0 border-bottom-0"><i
                                                                                class="fe fe-eye  mr-1"></i>View
                                                                            Profile</a>
                                                                        <a href="#"
                                                                            class="btn btn-outline-light w-34 p-2 border-top-0 border-right-0 border-bottom-0"
                                                                            data-target="#exampleModal"
                                                                            data-toggle="modal"><i
                                                                                class="fe fe-phone  mr-1"></i>Appointment</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="tab-pane" id="tab-12">
                                            <div class="row" id="tabRow-12">
                                                @foreach ($users as $key => $user)
                                                    <div class="col-lg-6 col-md-6 col-xl-4">
                                                        <div class="card overflow-hidden" style="height: 96%;">
                                                            <div class="item-card9-img">
                                                                <div class="item-card9-imgs">
                                                                    <a
                                                                        href="{{ route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]) }}"></a>
                                                                    <div
                                                                        class="power-ribbon power-ribbon-top-left text-warning">
                                                                        <span class="bg-warning"><i
                                                                                class="fa fa-bolt"></i></span></div>
                                                                    @if (isset($user->profile_photo_path) && file_exists($user->profile_photo_path))
                                                                        <img alt="img" class="cover-image"
                                                                            src="{{ asset($user->profile_photo_path) }}">
                                                                    @else
                                                                        <img alt="img" class="cover-image"
                                                                            src="{{ asset('front_end_style/assets/images/media/doctors/2.jpg') }}">
                                                                    @endif
                                                                </div>
                                                                <div class="item-card9-icons">
                                                                    <a href="#" class="item-card9-icons1 item-icon-bg"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="wishlist"><i
                                                                            class="fa fa fa-heart-o"></i></a>
                                                                    <a href="#" class="item-card9-icons1 bg-purple"
                                                                        data-toggle="tooltip" title=""
                                                                        data-original-title="Share"><i
                                                                            class="fa fa-share-alt"></i></a>
                                                                </div>
                                                                <div class="item-overly-trans">
                                                                    <div class="rating-stars d-flex">
                                                                        <span class="text-white mr-1">3.3</span> <input
                                                                            class="rating-value star"
                                                                            name="rating-stars-value" readonly="readonly"
                                                                            type="number" value="3">
                                                                        <div class="rating-stars-container">
                                                                            <div class="rating-star sm ">
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="rating-star sm ">
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="rating-star sm ">
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="rating-star sm ">
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <div class="rating-star sm ">
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-overly-trans">
                                                                    <span
                                                                        class="badge badge-dark">{{ ucfirst($user_type) }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="item-card9">
                                                                    <a class="text-dark"
                                                                        href="{{ route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]) }}">
                                                                        <h4 class="font-weight-bold mb-1">
                                                                            {{ isset($user->name_en) ? $user->name_en : '--------' }}<i
                                                                                class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                                        </h4>
                                                                    </a>
                                                                    @if ($user_type == 'doctors')
                                                                        @if(isset($user->specialities) && $user->specialities->count() > 0)
                                                                        @foreach ($user->specialities->take(3) as $speciality)
                                                                            <p class="text-muted fs-13 mt-0"><i
                                                                                class="fa fa-user-md text-muted mr-2"></i>{{ isset($speciality->speciality->name_en) ? $speciality->speciality->name_en : '--------' }}</p>
                                                                            @endforeach
                                                                        @endif
                                                                    @endif
                                                                    <div class="mb-0 mt-2">
                                                                        <ul class="item-card-features mb-0">
                                                                            <li><span><i
                                                                                        class="fa fa-map-marker mr-1 text-muted"></i>
                                                                                    {{ isset($user->country_id) ? $user->country->name_en : 'Not Set' }}
                                                                                    /
                                                                                    {{ isset($user->region_id) ? $user->region->name_en : 'Not Set' }}</span>
                                                                            </li>
                                                                            @if (isset($user->weekPlan->active_days) && count(explode(',', $user->weekPlan->active_days)) > 0)
                                                                                <li><span><i
                                                                                            class="fa fa-calendar-o mr-1 text-muted"></i>{{ explode(',', $user->weekPlan->active_days)[0] }}
                                                                                        |
                                                                                        {{ explode(',', $user->weekPlan->active_days)[count(explode(',', $user->weekPlan->active_days)) - 1] }}</span>
                                                                                </li>
                                                                            @endif

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0 btn-appointment">
                                                                <div class="btn-group w-100">
                                                                    <a href="{{ route('user-details', [isset($user_type) ? $user_type : '--------', $user->alias_name_en]) }}"
                                                                        class="btn btn-outline-light w-33 p-2 border-top-0 border-right-0 border-bottom-0"><i
                                                                            class="fe fe-eye  mr-1"></i>View Profile</a>
                                                                    <a href="#"
                                                                        class="btn btn-outline-light w-34 p-2 border-top-0 border-right-0 border-bottom-0"
                                                                        data-target="#exampleModal" data-toggle="modal"><i
                                                                            class="fe fe-phone  mr-1"></i>Appointment</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center">
                                {!! $users->onEachSide(2)->links() !!}
                                {{-- <ul class="pagination mb-lg-0 mb-5">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="#" tabindex="-1">Prev</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Add lists-->
                <!--Right Side Content-->
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="card">
                        <form>
                            <div class="card-header">
                                <h3 class="card-title">Specialities</h3>
                            </div>
                            <div class="card-body">
                                <div class="" id="container">
                                    <div class="filter-product-checkboxs">
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox1"
                                                value="option1">
                                            <span class="custom-control-label">
                                                <span class="text-dark">Cardiologist<span
                                                        class="label label-light float-right">14</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox2"
                                                value="option2">
                                            <span class="custom-control-label">
                                                <span class="text-dark">Gynecologist<span
                                                        class="label label-light float-right">22</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox3"
                                                value="option3">
                                            <span class="custom-control-label">
                                                <span class="text-dark">physiologist<span
                                                        class="label label-light float-right">78</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox4"
                                                value="option3">
                                            <span class="custom-control-label">
                                                <span class="text-dark">Neurologist<span
                                                        class="label label-light float-right">35</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox5"
                                                value="option3">
                                            <span class="custom-control-label">
                                                <span class="text-dark">Neurosurgeon<span
                                                        class="label label-light float-right">23</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox6"
                                                value="option3">
                                            <span class="custom-control-label">
                                                <span class="text-dark">Dermatologist<span
                                                        class="label label-light float-right">14</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox7"
                                                value="option3">
                                            <span class="custom-control-label">
                                                <span class="text-dark">Dentist<span
                                                        class="label label-light float-right">45</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox7"
                                                value="option3">
                                            <span class="custom-control-label">
                                                <span class="text-dark">ENT surgeon<span
                                                        class="label label-light float-right">34</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox7"
                                                value="option3">
                                            <span class="custom-control-label">
                                                <span class="text-dark">Infertility Spacialist<span
                                                        class="label label-light float-right">12</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox7"
                                                value="option3">
                                            <span class="custom-control-label">
                                                <span class="text-dark">Orthopedic surgeon<span
                                                        class="label label-light float-right">18</span></span>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" name="checkbox7"
                                                value="option3">
                                            <span class="custom-control-label">
                                                <span class="text-dark">Epidemiologist<span
                                                        class="label label-light float-right">02</span></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header border-top">
                                <h3 class="card-title">Rating</h3>
                            </div>
                            <div class="card-body">
                                <select id="inputState" class="form-control nice-select">
                                    <option>1 Star and higher</option>
                                    <option>2 Star and higher</option>
                                    <option>3 Star and higher</option>
                                    <option>4 Star and higher</option>
                                    <option>5 Star and higher</option>
                                </select>
                            </div>
                            <div class="card-header border-top">
                                <h3 class="card-title">Fees Range</h3>
                            </div>
                            <div class="card-body">
                                <h6>
                                    <label for="price">Fees Range:</label>
                                    <input type="text" id="price">
                                </h6>
                                <div id="mySlider"></div>
                            </div>
                            <div class="card-footer">
                                <button href="#" class="btn btn-secondary btn-block">Apply Filter</button>
                            </div>
                        </form>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Shares</h3>
                        </div>
                        <div class="card-body product-filter-desc">
                            <div class="product-filter-icons text-center">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                <a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Right Side Content-->
            </div>
        </div>
    </section>
    <!--/Section-->

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
                        <input type="text" class="form-control input-lg " placeholder="Enter your Email">
                        <div class="input-group-append ">
                            <button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Newsletter-->

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            $("#search_btn").css('display', '');

            $("#search").on('keyup', function() {

                user_type = $(this).data('type');
                grid = $(this).data('grid');
                search = $(this).val();

                var formData = new FormData();
                formData.append('user_type', user_type);
                formData.append('grid', grid);
                formData.append('search', search);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: "{{ route('searchUser') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(data) {
                        if (data.status == true) {
                            $("#tab-11").html('');
                            $("#tabRow-12").html('');

                            $("#tab-11").html(data.output);
                            $("#tabRow-12").html(data.output_second);

                            var ratingOptions = {
                                selectors: {
                                    starsSelector: '.rating-stars',
                                    starSelector: '.rating-star',
                                    starActiveClass: 'is--active',
                                    starHoverClass: 'is--hover',
                                    starNoHoverClass: 'is--no-hover',
                                    targetFormElementSelector: '.rating-value'
                                }
                            };
                            $(".rating-stars").ratingStars(ratingOptions);
                        }
                    },
                    error: function(reject) {
                        var response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function(key, val) {
                            $("#" + key + "_error").text(val[0]);
                        });
                    }
                });

            })

        });
    </script>
@endsection
