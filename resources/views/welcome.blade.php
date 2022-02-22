@extends('front_end_inners.app_front_end', ['title' => 'Home'])

@section('content')

@section('page_title') Rushetta | Home @endsection

    <!--Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background1 banner-section"
            data-image-src="{{ asset('front_end_style/rushetta_images/header_image_new.jpeg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 style="color: #1d1f35;" class="mb-1">Find the Nearest Medical Facility</h1>

                    </div>
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="item-search-tabs">
                                <div class="item-search-menu">
                                    <ul class="nav">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tab2">Doctors</a>
                                        </li>
                                        <li class="">
                                            <a class="" data-toggle="tab" href="#tab1">Hospitals</a>
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
                                    <div class="tab-pane" id="tab1">
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
                                    <div class="tab-pane active" id="tab2">
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
                                                                Type Of Doctors
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

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Categories</h2>
            </div>
            <div class="row">
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-primary-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a></a>
                                <div class="cat-icon bg-warning-transparent brround text-warning">
                                    <i class="fa fa-tasks"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-2">Specialties</h5>
                                    <p class="badge badge-pill badge-light font-weight-semibold mb-0">
                                        {{ isset($public_specialities_count) ? $public_specialities_count : 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-secondary-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{ route('users-list', 'doctors') }}"></a>
                                <div class="cat-icon bg-secondary-transparent brround text-secondary">
                                    <i class="fa fa-user-md"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-2">Doctors</h5>
                                    <p class="badge badge-pill badge-light font-weight-semibold mb-0">
                                        {{ isset($public_doctors_count) ? $public_doctors_count : 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-primary-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{ route('users-list', 'hospitals') }}"></a>
                                <div class="cat-icon bg-primary-transparent brround text-primary">
                                    <i class="fa fa-hospital-o"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-2">Hospitals</h5>
                                    <p class="badge badge-pill badge-light font-weight-semibold mb-0">
                                        {{ isset($public_hospitals_count) ? $public_hospitals_count : 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-info-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{ route('users-list', 'medical-centers') }}"></a>
                                <div class="cat-icon bg-info-transparent brround text-info">
                                    <i class="fa fa-stethoscope"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-2">Medical Centers</h5>
                                    <p class="badge badge-pill badge-light font-weight-semibold mb-0">
                                        {{ isset($public_medical_centers_count) ? $public_medical_centers_count : 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-success-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{ route('users-list', 'radiology-centers') }}"></a>
                                <div class="cat-icon bg-success-transparent brround text-success">
                                    <i class="fa fa-building-o"></i>
                                </div>
                                <div class="cat-desc">
                                    <h6 class="mb-2">Radiology Centers</h6>
                                    <p class="badge badge-pill  badge-light font-weight-semibold mb-0">
                                        {{ isset($public_radiology_centers_count) ? $public_radiology_centers_count : 0 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-danger-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{ route('users-list', 'pharmacies') }}"></a>
                                <div class="cat-icon bg-danger-transparent brround text-danger">
                                    <i class="fa fa-medkit"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-2">Pharmacies</h5>
                                    <p class="badge badge-pill badge-light font-weight-semibold mb-0">
                                        {{ isset($public_pharmacies_count) ? $public_pharmacies_count : 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-warning-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{ route('users-list', 'labs') }}"></a>
                                <div class="cat-icon bg-primary-transparent brround text-primary">
                                    <i class="fa fa-flask"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-2">Labs</h5>
                                    <p class="badge badge-pill  badge-light font-weight-semibold mb-0">
                                        {{ isset($public_labs_count) ? $public_labs_count : 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-success-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{ route('users-list', 'fitness-centers') }}"></a>
                                <div class="cat-icon bg-danger-transparent brround text-danger">
                                    <i class="fa fa-building-o"></i>
                                </div>
                                <div class="cat-desc">
                                    <h6 class="mb-2">Healthy Gyms</h6>
                                    <p class="badge badge-pill  badge-light font-weight-semibold mb-0">
                                        {{ isset($public_gyms_count) ? $public_gyms_count : 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-warning-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{ route('users-list', 'life-coaches') }}"></a>
                                <div class="cat-icon bg-info-transparent brround text-info">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-2">Life Coaches</h5>
                                    <p class="badge badge-pill  badge-light font-weight-semibold mb-0">
                                        {{ isset($public_life_coaches_count) ? $public_life_coaches_count : 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="card bg-card-light bg-success-card bg-white">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{ route('users-list', 'insurances') }}"></a>
                                <div class="cat-icon bg-success-transparent brround text-success">
                                    <i class="fa fa-building-o"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-2">Insurances</h5>
                                    <p class="badge badge-pill  badge-light font-weight-semibold mb-0">
                                        {{ isset($public_insurance_companies_count) ? $public_insurance_companies_count : 0 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->

    <!--Section-->
    {{-- <section class="sptb section-bg">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>New Registerd</h2>
                <p>Excepteur sint occaecat cupidatat proident deserunt mollit laborum</p>
            </div>
            <div class="owl-carousel owl-carousel-icons2" id="myCarousel1">
                @if (isset($public_doctors) && $public_doctors->count() > 0)
                    @foreach ($public_doctors->take(20) as $key => $doctor)
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning">
                                    <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                                </div>
                                <div class="item-card2-img">
                                    <a href="{{ route('user-details',['doctors',$doctor->alias_name_en]) }}"></a>
                                    <img alt="img" class="cover-image"
                                        src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                </div>
                                <div class="item-card2-icons">
                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                            class="fa fa fa-heart-o"></i></a>
                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="item-card2">
                                        <small class="text-muted">{{ isset($doctor->speciality->name_en) ? $doctor->speciality->name_en : '--------' }}</small>
                                        <a class="text-dark" href="{{ route('user-details',['doctors',$doctor->alias_name_en]) }}">
                                            <h4 class="font-weight-semibold mt-1 mb-1">{{ isset($doctor->name_en) ? $doctor->name_en : '--------' }}
                                                <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                            </h4>
                                        </a>
                                        <p class="text-muted fs-13 mb-1">MBBS, MD, DM, Ph.D</p>
                                        <div class="rating-stars d-inline-flex mb-1">
                                            <input class="rating-value star" name="rating-stars-value" readonly="readonly"
                                                type="number" value="5">
                                            <div class="rating-stars-container mr-2">
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
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>5.0
                                        </div>
                                        <div class="mb-0 mt-0">
                                            <ul class="item-card-features mb-0">
                                                <li class="mb-0"><span class="text-muted"><i
                                                            class="fa fa-map-marker mr-1"></i> Hyderabad</span></li>
                                                <li><span class="text-muted "><i class="fa fa-briefcase mr-1"></i>3 yrs
                                                        Exp</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 btn-appointment">
                                    <div class="btn-group w-100">
                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                            href="{{ route('user-details',['doctors',$doctor->alias_name_en]) }}"><i class="fe fe-eye mr-1"></i> Visit Website</a>
                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0"
                                            href="#" data-target="#exampleModal" data-toggle="modal"><i
                                                class="fe fe-phone mr-1"></i> Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="item">
                        <div class="card mb-0">
                            <div class="power-ribbon power-ribbon-top-left text-warning">
                                <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                            </div>
                            <div class="item-card2-img">
                                <a href="{{ route('user-details',['doctors',$doctor->alias_name_en]) }}"></a>
                                <img alt="img" class="cover-image"
                                    src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                            </div>
                            <div class="item-card2-icons">
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                        class="fa fa fa-heart-o"></i></a>
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="item-card2">
                                    <small class="text-muted">PHYSIOLOGIST</small>
                                    <a class="text-dark" href="{{ route('user-details',['doctors',$doctor->alias_name_en]) }}">
                                        <h4 class="font-weight-semibold mt-1 mb-1">Dr.K.Mary..
                                            <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                        </h4>
                                    </a>
                                    <p class="text-muted fs-13 mb-1">MBBS, MD, DM, Ph.D</p>
                                    <div class="rating-stars d-inline-flex mb-1">
                                        <input class="rating-value star" name="rating-stars-value" readonly="readonly"
                                            type="number" value="5">
                                        <div class="rating-stars-container mr-2">
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
                                            <div class="rating-star sm">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>5.0
                                    </div>
                                    <div class="mb-0 mt-0">
                                        <ul class="item-card-features mb-0">
                                            <li class="mb-0"><span class="text-muted"><i
                                                        class="fa fa-map-marker mr-1"></i> Hyderabad</span></li>
                                            <li><span class="text-muted "><i class="fa fa-briefcase mr-1"></i>3 yrs
                                                    Exp</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 btn-appointment">
                                <div class="btn-group w-100">
                                    <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                        href="{{ route('user-details',['doctors',$doctor->alias_name_en]) }}"><i class="fe fe-eye mr-1"></i> Visit Website</a>
                                    <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0"
                                        href="#" data-target="#exampleModal" data-toggle="modal"><i
                                            class="fe fe-phone mr-1"></i> Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="power-ribbon power-ribbon-top-left text-warning">
                                <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                            </div>
                            <div class="item-card2-img">
                                <a href="fitness-details.html"></a>
                                <img alt="img" class="cover-image"
                                    src="{{ asset('front_end_style/assets/images/media/0-30.jpg') }}">
                            </div>
                            <div class="item-card2-icons">
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                        class="fa fa fa-heart-o"></i></a>
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="item-card2">
                                    <small class="text-muted">FITNESS CENTER</small>
                                    <a class="text-dark" href="fitness-details.html">
                                        <h4 class="font-weight-semibold mt-1 mb-1">Fit Race Club..
                                            <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                        </h4>
                                    </a>
                                    <p class="text-muted fs-13 mb-1"><i class="fa fa-clock-o mr-1"></i>8:00 Am - 11:00 Am
                                    </p>
                                    <div class="rating-stars d-inline-flex mb-1">
                                        <input class="rating-value star" name="rating-stars-value" readonly="readonly"
                                            type="number" value="3">
                                        <div class="rating-stars-container mr-2">
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
                                            <div class="rating-star sm">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>3.0
                                    </div>
                                    <div class="mb-0 mt-0">
                                        <ul class="item-card-features mb-0">
                                            <li class="mb-0"><span class="text-muted"><i
                                                        class="fa fa-map-marker mr-1"></i> Hyderabad</span></li>
                                            <li><span class="text-muted "><i class="fa fa fa-calendar-o mr-1"></i> Mon-
                                                    Fri</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 btn-appointment">
                                <div class="btn-group w-100">
                                    <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                        href="fitness-details.html"><i class="fe fe-eye mr-1"></i> Visit Website</a>
                                    <a
                                        class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                        <div class="call-btn-1">
                                            <i class="fe fe-phone mr-1"></i> Call
                                        </div>
                                        <div class="call-number">
                                            +65 847596 82
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="item-card2-img">
                                <a href="hospital-details.html"></a>
                                <img alt="img" class="cover-image"
                                    src="{{ asset('front_end_style/assets/images/media/0-21.jpg') }}">
                            </div>
                            <div class="item-card2-icons">
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                        class="fa fa fa-heart text-danger"></i></a>
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="item-card2">
                                    <small class="text-muted">HOSPITAL</small>
                                    <a class="text-dark" href="hospital-details.html">
                                        <h4 class="font-weight-semibold mt-1 mb-1">Madlife Hospital..
                                            <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                        </h4>
                                    </a>
                                    <p class="text-muted fs-13 mb-1"><i class="fa fa-clock-o mr-1"></i>9:00 Am - 7:00 Pm
                                    </p>
                                    <div class="rating-stars d-inline-flex mb-1">
                                        <input class="rating-value star" name="rating-stars-value" readonly="readonly"
                                            type="number" value="5">
                                        <div class="rating-stars-container mr-2">
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
                                            <div class="rating-star sm">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>5.0
                                    </div>
                                    <div class="mb-0 mt-0">
                                        <ul class="item-card-features mb-0">
                                            <li class="mb-0"><span class="text-muted"><i
                                                        class="fa fa-map-marker mr-1"></i> Hyderabad</span></li>
                                            <li><span class="text-muted "><i class="fa fa-user-md mr-1"></i>154
                                                    Doctors</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 btn-appointment">
                                <div class="btn-group w-100">
                                    <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                        href="hospital-details.html"><i class="fe fe-eye mr-1"></i> Visit Website</a>
                                    <a
                                        class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                        <div class="call-btn-1">
                                            <i class="fe fe-phone mr-1"></i> Call
                                        </div>
                                        <div class="call-number">
                                            +65 847596 82
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="item-card2-img">
                                <a href="pharmacy-details.html"></a>
                                <img alt="img" class="cover-image"
                                    src="{{ asset('front_end_style/assets/images/media/0-14.jpg') }}">
                            </div>
                            <div class="item-card2-icons">
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                        class="fa fa fa-heart-o"></i></a>
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="item-card2">
                                    <small class="text-muted">PHARMACY</small>
                                    <a class="text-dark" href="pharmacy-details.html">
                                        <h4 class="font-weight-semibold mt-1 mb-1">Brett Pharma..
                                            <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                        </h4>
                                    </a>
                                    <p class="text-muted fs-13 mb-1"><i class="fa fa-clock-o mr-1"></i>9:00 Am - 7:00 Pm
                                    </p>
                                    <div class="rating-stars d-inline-flex mb-1">
                                        <input class="rating-value star" name="rating-stars-value" readonly="readonly"
                                            type="number" value="4">
                                        <div class="rating-stars-container mr-2">
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
                                            <div class="rating-star sm">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>4.3
                                    </div>
                                    <div class="mb-0 mt-0">
                                        <ul class="item-card-features mb-0">
                                            <li class="mb-0"><span class="text-muted"><i
                                                        class="fa fa-map-marker mr-1"></i> Hyderabad</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 btn-appointment">
                                <div class="btn-group w-100">
                                    <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                        href="pharmacy-details.html"><i class="fe fe-eye mr-1"></i> Visit Website</a>
                                    <a
                                        class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                        <div class="call-btn-1">
                                            <i class="fe fe-phone mr-1"></i> Call
                                        </div>
                                        <div class="call-number">
                                            +65 847596 82
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="power-ribbon power-ribbon-top-left text-warning">
                                <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                            </div>
                            <div class="item-card2-img">
                                <a href="hospital-details.html"></a>
                                <img alt="img" class="cover-image"
                                    src="{{ asset('front_end_style/assets/images/media/0-15.jpg') }}">
                            </div>
                            <div class="item-card2-icons">
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                        class="fa fa fa-heart text-danger"></i></a>
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="item-card2">
                                    <small class="text-muted">CLINIC</small>
                                    <a class="text-dark" href="hospital-details.html">
                                        <h4 class="font-weight-semibold mt-1 mb-1">Aesthetic Clinic..
                                            <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                        </h4>
                                    </a>
                                    <p class="text-muted fs-13 mb-1"><i class="fa fa-clock-o mr-1"></i>9:00 Am - 7:00 Pm
                                    </p>
                                    <div class="rating-stars d-inline-flex mb-1">
                                        <input class="rating-value star" name="rating-stars-value" readonly="readonly"
                                            type="number" value="4">
                                        <div class="rating-stars-container mb-1 mr-2">
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
                                            <div class="rating-star sm">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>4.0
                                    </div>
                                    <div class="mb-0 mt-0">
                                        <ul class="item-card-features mb-0">
                                            <li class="mb-0"><span class="text-muted"><i
                                                        class="fa fa-map-marker mr-1"></i> Banglore</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 btn-appointment">
                                <div class="btn-group w-100">
                                    <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                        href="hospital-details.html"><i class="fe fe-eye mr-1"></i> Visit Website</a>
                                    <a
                                        class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                        <div class="call-btn-1">
                                            <i class="fe fe-phone mr-1"></i> Call
                                        </div>
                                        <div class="call-number">
                                            +65 847596 82
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card mb-0">
                            <div class="power-ribbon power-ribbon-top-left text-warning">
                                <span class="bg-warning"><i class="fa fa-bolt"></i></span>
                            </div>
                            <div class="item-card2-img">
                                <a href="bloodbank-details.html"></a>
                                <img alt="img" class="cover-image"
                                    src="{{ asset('front_end_style/assets/images/media/0-1.jpg') }}">
                            </div>
                            <div class="item-card2-icons">
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                        class="fa fa fa-heart text-danger"></i></a>
                                <a class="item-card2-icons-r bg-dark-transparent" href="#"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="item-card2">
                                    <small class="text-muted">BLOODBANK</small>
                                    <a class="text-dark" href="bloodbank-details.html">
                                        <h4 class="font-weight-semibold mt-1 mb-1">City Blood Bank..
                                            <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                        </h4>
                                    </a>
                                    <p class="text-muted fs-13 mb-1"><i class="fa fa-clock-o mr-1"></i>9:00 Am - 6:00 Pm
                                    </p>
                                    <div class="rating-stars d-inline-flex mb-1">
                                        <input class="rating-value star" name="rating-stars-value" readonly="readonly"
                                            type="number" value="4">
                                        <div class="rating-stars-container mb-1 mr-2">
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
                                            <div class="rating-star sm">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>4.0
                                    </div>
                                    <div class="mb-0 mt-0">
                                        <ul class="item-card-features mb-0">
                                            <li class="mb-0"><span class="text-muted"><i
                                                        class="fa fa-map-marker mr-1"></i> Chennai</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 btn-appointment">
                                <div class="btn-group w-100">
                                    <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                        href="bloodbank-details.html"><i class="fe fe-eye mr-1"></i> Visit Website</a>
                                    <a
                                        class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                        <div class="call-btn-1">
                                            <i class="fe fe-phone mr-1"></i> Call
                                        </div>
                                        <div class="call-number">
                                            +65 847596 82
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section> --}}
    <!--Section-->

    <!--Section-->
    <section class="sptb section-bg">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Find your doctor by speciality</h2>
            </div>
            <div class="items-gallery">
                <div class="items-blog-tab text-center">
                    <div class="items-blog-tab-heading row">
                        <div class="col-12">
                            <ul class="nav items-blog-tab-menu specialities-ul">
                                @if (isset($public_specialities) && $public_specialities->count() > 0)
                                    @foreach ($public_specialities as $key => $speciality)
                                        <li class="">
                                            <a class="{{ $key == 0 ? 'active show' : '' }}" data-toggle="tab"
                                                href="#tab1-{{ $speciality->id }}">{{ isset($speciality->name_en) ? $speciality->name_en : '--------' }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        @if (isset($public_specialities) && $public_specialities->count() > 0)
                            @foreach ($public_specialities->take(8) as $index => $specialityTab)
                                <div class="tab-pane {{ $index == 0 ? 'active' : '' }} "
                                    id="tab1-{{ $specialityTab->id }}">
                                    <div class="owl-carousel owl-carousel-icons2"
                                        id="myCarousel{{ $specialityTab->id }}">
                                        @if (isset($specialityTab->doctorsRandomTwelve) && $specialityTab->doctorsRandomTwelve->count() > 0)
                                            @foreach ($specialityTab->doctorsRandomTwelve as $counter => $doctor)
                                                <div class="item">
                                                    <div class="card mb-0">
                                                        <div class="power-ribbon power-ribbon-top-left text-warning">
                                                            <span class="bg-warning"><i
                                                                    class="fa fa-bolt"></i></span>
                                                        </div>
                                                        <div class="item-card2-img">
                                                            <a
                                                                href="{{ route('user-details', ['doctors', $doctor->doctor->alias_name_en]) }}"></a>
                                                            @if (isset($doctor->doctor->profile_photo_path) && file_exists($doctor->doctor->profile_photo_path))
                                                                <img alt="img" class="cover-image spec-doc-img"
                                                                    src="{{ asset($doctor->doctor->profile_photo_path) }}">
                                                            @else
                                                                <img alt="img" class="cover-image spec-doc-img"
                                                                    src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                            @endif
                                                        </div>
                                                        <div class="item-card2-icons">
                                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                                    class="fa fa fa-heart-o"></i></a>
                                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                                    class="fa fa-share-alt"></i></a>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="item-card2">
                                                                <small
                                                                    class="text-muted">{{ isset($doctor->doctor->speciality->name_en) ? $doctor->doctor->speciality->name_en : '--------' }}</small>
                                                                <a class="text-dark"
                                                                    href="{{ route('user-details', ['doctors', $doctor->doctor->alias_name_en]) }}">
                                                                    <h4 class="font-weight-semibold mt-1 mb-1">
                                                                        {{ isset($doctor->doctor->name_en) ? $doctor->doctor->name_en : '--------' }}
                                                                        <i
                                                                            class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                                    </h4>
                                                                </a>
                                                                <p class="text-muted fs-13 mb-1">MBBS, MD, DM, Ph.D</p>
                                                                <div class="rating-stars d-inline-flex mb-1">
                                                                    <input class="rating-value star"
                                                                        name="rating-stars-value" readonly="readonly"
                                                                        type="number" value="5">
                                                                    <div class="rating-stars-container mr-2">
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
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>5.0
                                                                </div>
                                                                <div class="mb-0 mt-0">
                                                                    <ul class="item-card-features mb-0">
                                                                        <li class="mb-0"><span
                                                                                class="text-muted"><i
                                                                                    class="fa fa-map-marker mr-1"></i>
                                                                                Hyderabad</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer p-0 btn-appointment">
                                                            <div class="btn-group w-100">
                                                                <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                                    href="{{ route('user-details', ['doctors', $doctor->doctor->alias_name_en]) }}"><i
                                                                        class="fe fe-eye mr-1"></i> Visit Website</a>
                                                                <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0"
                                                                    href="#" data-target="#exampleModal"
                                                                    data-toggle="modal"><i class="fe fe-phone mr-1"></i>
                                                                    Appointment</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Top Rated List</h2>
            </div>
            <div class="items-gallery">
                <div class="items-blog-tab text-center">
                    <div class="items-blog-tab-heading row">
                        <div class="col-12">
                            <ul class="nav items-blog-tab-menu">
                                <li class="">
                                    <a class="active show" data-toggle="tab" href="#tab-doctors">Doctors</a>
                                </li>
                                <li>
                                    <a class="" data-toggle="tab" href="#tab-hospitals">Hospitals</a>
                                </li>
                                <li>
                                    <a class="" data-toggle="tab" href="#tab-medicals">Medical Center</a>
                                </li>
                                <li>
                                    <a class="" data-toggle="tab" href="#tab-radiology">Radiology Center</a>
                                </li>
                                <li>
                                    <a class="" data-toggle="tab" href="#tab-labs">Labs</a>
                                </li>
                                <li>
                                    <a class="" data-toggle="tab" href="#tab-insurances">Insurance
                                        Companies</a>
                                </li>
                                <li>
                                    <a class="" data-toggle="tab" href="#tab-pharmacies">Pharmacies</a>
                                </li>
                                <li>
                                    <a class="" data-toggle="tab" href="#tab-gyms">Gyms</a>
                                </li>
                                <li>
                                    <a class="" data-toggle="tab" href="#tab-life_couches">Life Coaches</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content list-container">
                        <div class="tab-pane active " id="tab-doctors">
                            <div class="row">
                                @if (isset($public_doctors) && $public_doctors->count() > 0)
                                    @foreach ($public_doctors as $index => $category)
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a
                                                        href="{{ route('user-details', ['doctors', $category->alias_name_en]) }}"></a>
                                                    @if (isset($category->profile_photo_path) && file_exists($category->profile_photo_path))
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset($category->profile_photo_path) }}">
                                                    @else
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                    @endif
                                                    <div class="tag-text">
                                                        <span class="bg-dark tag-option">Doctor</span>
                                                    </div>
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa fa-heart-o"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <a class="text-dark"
                                                            href="{{ route('user-details', ['doctors', $category->alias_name_en]) }}">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">
                                                                {{ isset($category->name_en) ? $category->name_en : '--------' }}
                                                                <i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1"><i
                                                                class="fa fa-user-md text-muted mr-2"></i>MBBS, MD, DM,
                                                            Ph.D
                                                        </p>
                                                        <div class="rating-stars d-inline-flex mb-1">
                                                            <input class="rating-value star" name="rating-stars-value"
                                                                readonly="readonly" type="number" value="3">
                                                            <div class="rating-stars-container mr-2">
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
                                                                <div class="rating-star sm">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>3.2
                                                        </div>
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0"><span class="text-muted"><i
                                                                            class="fa fa-map-marker mr-1"></i>
                                                                        Hyderabad</span>
                                                                </li>
                                                                <li><span class="text-muted "><i
                                                                            class="fa fa-briefcase mr-1"></i>2 yrs
                                                                        Exp</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                            href="{{ route('user-details', ['doctors', $category->alias_name_en]) }}"><i
                                                                class="fe fe-eye mr-1"></i> Visit
                                                            Website</a>
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0"
                                                            href="#" data-target="#exampleModal" data-toggle="modal"><i
                                                                class="fe fe-phone mr-1"></i> Appointment</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-hospitals">
                            <div class="row">
                                @if (isset($public_hospitals) && $public_hospitals->count() > 0)
                                    @foreach ($public_hospitals as $index => $category)
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a
                                                        href="{{ route('user-details', ['hospitals', $category->alias_name_en]) }}"></a>
                                                    @if (isset($category->profile_photo_path) && file_exists($category->profile_photo_path))
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset($category->profile_photo_path) }}">
                                                    @else
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                    @endif
                                                    <div class="tag-text">
                                                        <span class="bg-dark tag-option">Hospital</span>
                                                    </div>
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa fa-heart text-danger"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <a class="text-dark"
                                                            href="{{ route('user-details', ['hospitals', $category->alias_name_en]) }}">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">
                                                                {{ isset($category->name_en) ? $category->name_en : '--------' }}
                                                                <i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1">359 N. Edgefield Dr. West Roxbury,
                                                            MA
                                                            02132....</p>
                                                        <div class="rating-stars d-inline-flex mb-1">
                                                            <input class="rating-value star" name="rating-stars-value"
                                                                readonly="readonly" type="number" value="5">
                                                            <div class="rating-stars-container mr-2">
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
                                                                <div class="rating-star sm">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>5.0
                                                        </div>
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0"><span class="text-muted"><i
                                                                            class="fa fa-map-marker mr-1"></i>Hyderabad</span>
                                                                </li>
                                                                <li><span class="text-muted "><i
                                                                            class="fa fa-user-md mr-1"></i>154
                                                                        Doctors</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                            href="{{ route('user-details', ['hospitals', $category->alias_name_en]) }}"><i
                                                                class="fe fe-eye mr-1"></i> Visit
                                                            Website</a>
                                                        <a
                                                            class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                            <div class="call-btn-1">
                                                                <i class="fe fe-phone mr-1"></i> Call
                                                            </div>
                                                            <div class="call-number">
                                                                +65 847596 82
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-medicals">
                            <div class="row">
                                @if (isset($public_medical_centers) && $public_medical_centers->count() > 0)
                                    @foreach ($public_medical_centers as $index => $category)
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a
                                                        href="{{ route('user-details', ['medical-centers', $category->alias_name_en]) }}"></a>
                                                    @if (isset($category->profile_photo_path) && file_exists($category->profile_photo_path))
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset($category->profile_photo_path) }}">
                                                    @else
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                    @endif
                                                    <div class="tag-text">
                                                        <span class="bg-dark tag-option">Medical Center</span>
                                                    </div>
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa fa-heart text-danger"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <a class="text-dark"
                                                            href="{{ route('user-details', ['medical-centers', $category->alias_name_en]) }}">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">
                                                                {{ isset($category->name_en) ? $category->name_en : '--------' }}
                                                                <i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1">359 N. Edgefield Dr. West Roxbury,
                                                            MA
                                                            02132....</p>
                                                        <div class="rating-stars d-inline-flex mb-1">
                                                            <input class="rating-value star" name="rating-stars-value"
                                                                readonly="readonly" type="number" value="5">
                                                            <div class="rating-stars-container mr-2">
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
                                                                <div class="rating-star sm">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>5.0
                                                        </div>
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0"><span class="text-muted"><i
                                                                            class="fa fa-map-marker mr-1"></i>Hyderabad</span>
                                                                </li>
                                                                <li><span class="text-muted "><i
                                                                            class="fa fa-user-md mr-1"></i>154
                                                                        Doctors</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                            href="{{ route('user-details', ['medical-centers', $category->alias_name_en]) }}"><i
                                                                class="fe fe-eye mr-1"></i> Visit
                                                            Website</a>
                                                        <a
                                                            class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                            <div class="call-btn-1">
                                                                <i class="fe fe-phone mr-1"></i> Call
                                                            </div>
                                                            <div class="call-number">
                                                                +65 847596 82
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-radiology">
                            <div class="row">
                                @if (isset($public_radiology_centers) && $public_radiology_centers->count() > 0)
                                    @foreach ($public_radiology_centers as $index => $category)
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a
                                                        href="{{ route('user-details', ['radiology-centers', $category->alias_name_en]) }}"></a>
                                                    @if (isset($category->profile_photo_path) && file_exists($category->profile_photo_path))
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset($category->profile_photo_path) }}">
                                                    @else
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                    @endif
                                                    <div class="tag-text">
                                                        <span class="bg-dark tag-option">Radiology Center</span>
                                                    </div>
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa fa-heart text-danger"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <a class="text-dark"
                                                            href="{{ route('user-details', ['radiology-centers', $category->alias_name_en]) }}">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">
                                                                {{ isset($category->name_en) ? $category->name_en : '--------' }}
                                                                <i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1">359 N. Edgefield Dr. West Roxbury,
                                                            MA
                                                            02132....</p>
                                                        <div class="rating-stars d-inline-flex mb-1">
                                                            <input class="rating-value star" name="rating-stars-value"
                                                                readonly="readonly" type="number" value="5">
                                                            <div class="rating-stars-container mr-2">
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
                                                                <div class="rating-star sm">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>5.0
                                                        </div>
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0"><span class="text-muted"><i
                                                                            class="fa fa-map-marker mr-1"></i>Hyderabad</span>
                                                                </li>
                                                                <li><span class="text-muted "><i
                                                                            class="fa fa-user-md mr-1"></i>154
                                                                        Doctors</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                            href="{{ route('user-details', ['radiology-centers', $category->alias_name_en]) }}"><i
                                                                class="fe fe-eye mr-1"></i> Visit
                                                            Website</a>
                                                        <a
                                                            class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                            <div class="call-btn-1">
                                                                <i class="fe fe-phone mr-1"></i> Call
                                                            </div>
                                                            <div class="call-number">
                                                                +65 847596 82
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-labs">
                            <div class="row">
                                @if (isset($public_labs) && $public_labs->count() > 0)
                                    @foreach ($public_labs as $index => $category)
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a
                                                        href="{{ route('user-details', ['labs', $category->alias_name_en]) }}"></a>
                                                    @if (isset($category->profile_photo_path) && file_exists($category->profile_photo_path))
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset($category->profile_photo_path) }}">
                                                    @else
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                    @endif
                                                    <div class="tag-text">
                                                        <span class="bg-dark tag-option">Lab</span>
                                                    </div>
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa fa-heart text-danger"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <a class="text-dark"
                                                            href="{{ route('user-details', ['labs', $category->alias_name_en]) }}">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">
                                                                {{ isset($category->name_en) ? $category->name_en : '--------' }}
                                                                <i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1">359 N. Edgefield Dr. West Roxbury,
                                                            MA
                                                            02132....</p>
                                                        <div class="rating-stars d-inline-flex mb-1">
                                                            <input class="rating-value star" name="rating-stars-value"
                                                                readonly="readonly" type="number" value="5">
                                                            <div class="rating-stars-container mr-2">
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
                                                                <div class="rating-star sm">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>5.0
                                                        </div>
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0"><span class="text-muted"><i
                                                                            class="fa fa-map-marker mr-1"></i>Hyderabad</span>
                                                                </li>
                                                                <li><span class="text-muted "><i
                                                                            class="fa fa-user-md mr-1"></i>154
                                                                        Doctors</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                            href="{{ route('user-details', ['labs', $category->alias_name_en]) }}"><i
                                                                class="fe fe-eye mr-1"></i> Visit
                                                            Website</a>
                                                        <a
                                                            class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                            <div class="call-btn-1">
                                                                <i class="fe fe-phone mr-1"></i> Call
                                                            </div>
                                                            <div class="call-number">
                                                                +65 847596 82
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-insurances">
                            <div class="row">
                                @if (isset($public_insurance_companies) && $public_insurance_companies->count() > 0)
                                    @foreach ($public_insurance_companies as $index => $category)
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a
                                                        href="{{ route('user-details', ['insurances', $category->alias_name_en]) }}"></a>
                                                    @if (isset($category->profile_photo_path) && file_exists($category->profile_photo_path))
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset($category->profile_photo_path) }}">
                                                    @else
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                    @endif
                                                    <div class="tag-text">
                                                        <span class="bg-dark tag-option">Insurance Company</span>
                                                    </div>
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa fa-heart text-danger"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <a class="text-dark"
                                                            href="{{ route('user-details', ['insurances', $category->alias_name_en]) }}">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">
                                                                {{ isset($category->name_en) ? $category->name_en : '--------' }}
                                                                <i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1">359 N. Edgefield Dr. West Roxbury,
                                                            MA
                                                            02132....</p>
                                                        <div class="rating-stars d-inline-flex mb-1">
                                                            <input class="rating-value star" name="rating-stars-value"
                                                                readonly="readonly" type="number" value="5">
                                                            <div class="rating-stars-container mr-2">
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
                                                                <div class="rating-star sm">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>5.0
                                                        </div>
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0"><span class="text-muted"><i
                                                                            class="fa fa-map-marker mr-1"></i>Hyderabad</span>
                                                                </li>
                                                                <li><span class="text-muted "><i
                                                                            class="fa fa-user-md mr-1"></i>154
                                                                        Doctors</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                            href="{{ route('user-details', ['insurances', $category->alias_name_en]) }}"><i
                                                                class="fe fe-eye mr-1"></i> Visit
                                                            Website</a>
                                                        <a
                                                            class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                            <div class="call-btn-1">
                                                                <i class="fe fe-phone mr-1"></i> Call
                                                            </div>
                                                            <div class="call-number">
                                                                +65 847596 82
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-pharmacies">
                            <div class="row">
                                @if (isset($public_pharmacies) && $public_pharmacies->count() > 0)
                                    @foreach ($public_pharmacies as $index => $category)
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a
                                                        href="{{ route('user-details', ['pharmacies', $category->alias_name_en]) }}"></a>
                                                    @if (isset($category->profile_photo_path) && file_exists($category->profile_photo_path))
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset($category->profile_photo_path) }}">
                                                    @else
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                    @endif
                                                    <div class="tag-text">
                                                        <span class="bg-dark tag-option">Pharmacy</span>
                                                    </div>
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa fa-heart text-danger"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <a class="text-dark"
                                                            href="{{ route('user-details', ['pharmacies', $category->alias_name_en]) }}">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">
                                                                {{ isset($category->name_en) ? $category->name_en : '--------' }}
                                                                <i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1">359 N. Edgefield Dr. West Roxbury,
                                                            MA
                                                            02132....</p>
                                                        <div class="rating-stars d-inline-flex mb-1">
                                                            <input class="rating-value star" name="rating-stars-value"
                                                                readonly="readonly" type="number" value="5">
                                                            <div class="rating-stars-container mr-2">
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
                                                                <div class="rating-star sm">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>5.0
                                                        </div>
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0"><span class="text-muted"><i
                                                                            class="fa fa-map-marker mr-1"></i>Hyderabad</span>
                                                                </li>
                                                                <li><span class="text-muted "><i
                                                                            class="fa fa-user-md mr-1"></i>154
                                                                        Doctors</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                            href="{{ route('user-details', ['pharmacies', $category->alias_name_en]) }}"><i
                                                                class="fe fe-eye mr-1"></i> Visit
                                                            Website</a>
                                                        <a
                                                            class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                            <div class="call-btn-1">
                                                                <i class="fe fe-phone mr-1"></i> Call
                                                            </div>
                                                            <div class="call-number">
                                                                +65 847596 82
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-gyms">
                            <div class="row">
                                @if (isset($public_gyms) && $public_gyms->count() > 0)
                                    @foreach ($public_gyms as $index => $category)
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a
                                                        href="{{ route('user-details', ['fitness-centers', $category->alias_name_en]) }}"></a>
                                                    @if (isset($category->profile_photo_path) && file_exists($category->profile_photo_path))
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset($category->profile_photo_path) }}">
                                                    @else
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                    @endif
                                                    <div class="tag-text">
                                                        <span class="bg-dark tag-option">Gym</span>
                                                    </div>
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa fa-heart text-danger"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <a class="text-dark"
                                                            href="{{ route('user-details', ['fitness-centers', $category->alias_name_en]) }}) }}">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">
                                                                {{ isset($category->name_en) ? $category->name_en : '--------' }}
                                                                <i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1">359 N. Edgefield Dr. West Roxbury,
                                                            MA
                                                            02132....</p>
                                                        <div class="rating-stars d-inline-flex mb-1">
                                                            <input class="rating-value star" name="rating-stars-value"
                                                                readonly="readonly" type="number" value="5">
                                                            <div class="rating-stars-container mr-2">
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
                                                                <div class="rating-star sm">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>5.0
                                                        </div>
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0"><span class="text-muted"><i
                                                                            class="fa fa-map-marker mr-1"></i>Hyderabad</span>
                                                                </li>
                                                                <li><span class="text-muted "><i
                                                                            class="fa fa-user-md mr-1"></i>154
                                                                        Doctors</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                            href="{{ route('user-details', ['fitness-centers', $category->alias_name_en]) }}"><i
                                                                class="fe fe-eye mr-1"></i> Visit
                                                            Website</a>
                                                        <a
                                                            class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                            <div class="call-btn-1">
                                                                <i class="fe fe-phone mr-1"></i> Call
                                                            </div>
                                                            <div class="call-number">
                                                                +65 847596 82
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-life_couches">
                            <div class="row">
                                @if (isset($public_life_coaches) && $public_life_coaches->count() > 0)
                                    @foreach ($public_life_coaches as $index => $category)
                                        <div class="col-lg-6 col-md-12 col-xl-3">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a
                                                        href="{{ route('user-details', ['life-coaches', $category->alias_name_en]) }}"></a>
                                                    @if (isset($category->profile_photo_path) && file_exists($category->profile_photo_path))
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset($category->profile_photo_path) }}">
                                                    @else
                                                        <img alt="img" class="cover-image spec-doc-img"
                                                            src="{{ asset('front_end_style/assets/images/media/0-33.jpg') }}">
                                                    @endif
                                                    <div class="tag-text">
                                                        <span class="bg-dark tag-option">Life Coach</span>
                                                    </div>
                                                </div>
                                                <div class="item-card2-icons">
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa fa-heart text-danger"></i></a>
                                                    <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                            class="fa fa-share-alt"></i></a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card2">
                                                        <a class="text-dark"
                                                            href="{{ route('user-details', ['life-coaches', $category->alias_name_en]) }}">
                                                            <h4 class="font-weight-semibold mt-1 mb-1">
                                                                {{ isset($category->name_en) ? $category->name_en : '--------' }}
                                                                <i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mb-1">359 N. Edgefield Dr. West Roxbury,
                                                            MA
                                                            02132....</p>
                                                        <div class="rating-stars d-inline-flex mb-1">
                                                            <input class="rating-value star" name="rating-stars-value"
                                                                readonly="readonly" type="number" value="5">
                                                            <div class="rating-stars-container mr-2">
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
                                                                <div class="rating-star sm">
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>5.0
                                                        </div>
                                                        <div class="mb-0 mt-0">
                                                            <ul class="item-card-features mb-0">
                                                                <li class="mb-0"><span class="text-muted"><i
                                                                            class="fa fa-map-marker mr-1"></i>Hyderabad</span>
                                                                </li>
                                                                <li><span class="text-muted "><i
                                                                            class="fa fa-user-md mr-1"></i>154
                                                                        Doctors</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                            href="{{ route('user-details', ['life-coaches', $category->alias_name_en]) }}"><i
                                                                class="fe fe-eye mr-1"></i> Visit
                                                            Website</a>
                                                        <a
                                                            class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                            <div class="call-btn-1">
                                                                <i class="fe fe-phone mr-1"></i> Call
                                                            </div>
                                                            <div class="call-number">
                                                                +65 847596 82
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                {{-- <div class="col-lg-6 col-md-12 col-xl-3">
                                    <div class="card">
                                        <div class="item-card7-imgs">
                                            <a href="bloodbank-details.html"></a>
                                            <img alt="img" class="cover-image"
                                                src="{{ asset('front_end_style/assets/images/media/0-1.jpg') }}">
                                            <div class="tag-text">
                                                <span class="bg-dark tag-option">BloodBank</span>
                                            </div>
                                        </div>
                                        <div class="item-card2-icons">
                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                    class="fa fa fa-heart-o"></i></a>
                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                    class="fa fa-share-alt"></i></a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-card2">
                                                <a class="text-dark" href="bloodbank-details.html">
                                                    <h4 class="font-weight-semibold mt-1 mb-1">BloodSource..
                                                        <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                    </h4>
                                                </a>
                                                <p class="text-muted fs-13 mb-1">323 Fifth Ave. Canandaigua, NY
                                                    14424......</p>
                                                <div class="rating-stars d-inline-flex mb-1 mr-3">
                                                    <input class="rating-value star" name="rating-stars-value"
                                                        readonly="readonly" type="number" value="4">
                                                    <div class="rating-stars-container mr-2">
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
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>4.7
                                                </div>
                                                <div class="mb-0 mt-0">
                                                    <ul class="item-card-features mb-0">
                                                        <li class="mb-0"><span class="text-muted"><i
                                                                    class="fa fa-map-marker mr-1"></i> Chennai</span>
                                                        </li>
                                                        <li><span class="text-muted "><i
                                                                    class="fa fa-clock-o mr-1"></i>11 Am - 6 Pm</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0 btn-appointment">
                                            <div class="btn-group w-100">
                                                <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                    href="hospital-details.html"><i class="fe fe-eye mr-1"></i> Visit
                                                    Website</a>
                                                <a
                                                    class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                    <div class="call-btn-1">
                                                        <i class="fe fe-phone mr-1"></i> Call
                                                    </div>
                                                    <div class="call-number">
                                                        +65 847596 82
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-xl-3">
                                    <div class="card">
                                        <div class="item-card7-imgs">
                                            <a href="bloodbank-details.html"></a>
                                            <img alt="img" class="cover-image"
                                                src="{{ asset('front_end_style/assets/images/media/0-2.jpg') }}">
                                            <div class="tag-text">
                                                <span class="bg-dark tag-option">BloodBank</span>
                                            </div>
                                        </div>
                                        <div class="item-card2-icons">
                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                    class="fa fa fa-heart text-danger"></i></a>
                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                    class="fa fa-share-alt"></i></a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-card2">
                                                <a class="text-dark" href="bloodbank-details.html">
                                                    <h4 class="font-weight-semibold mt-1 mb-1">Florida Blood Center..
                                                        <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                    </h4>
                                                </a>
                                                <p class="text-muted fs-13 mb-1">82 Clinton Street. Sun Prairie, WI
                                                    53590....</p>
                                                <div class="rating-stars d-inline-flex mb-1">
                                                    <input class="rating-value star" name="rating-stars-value"
                                                        readonly="readonly" type="number" value="4">
                                                    <div class="rating-stars-container mr-2">
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
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>4.7
                                                </div>
                                                <div class="mb-0 mt-0">
                                                    <ul class="item-card-features mb-0">
                                                        <li class="mb-0"><span class="text-muted"><i
                                                                    class="fa fa-map-marker mr-1"></i>
                                                                Hyderabad</span></li>
                                                        <li><span class="text-muted "><i
                                                                    class="fa fa-clock-o mr-1"></i>9 Am - 4 Pm</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0 btn-appointment">
                                            <div class="btn-group w-100">
                                                <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                    href="hospital-details.html"><i class="fe fe-eye mr-1"></i> Visit
                                                    Website</a>
                                                <a
                                                    class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                    <div class="call-btn-1">
                                                        <i class="fe fe-phone mr-1"></i> Call
                                                    </div>
                                                    <div class="call-number">
                                                        +65 847596 82
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-xl-3">
                                    <div class="card">
                                        <div class="item-card7-imgs">
                                            <a href="bloodbank-details.html"></a>
                                            <img alt="img" class="cover-image"
                                                src="{{ asset('front_end_style/assets/images/media/0-3.jpg') }}">
                                            <div class="tag-text">
                                                <span class="bg-dark tag-option">BloodBank</span>
                                            </div>
                                        </div>
                                        <div class="item-card2-icons">
                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                    class="fa fa fa-heart-o"></i></a>
                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                    class="fa fa-share-alt"></i></a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-card2">
                                                <a class="text-dark" href="bloodbank-details.html">
                                                    <h4 class="font-weight-semibold mt-1 mb-1">Central Blood Bank...
                                                        <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                    </h4>
                                                </a>
                                                <p class="text-muted fs-13 mb-1">714 Bowman Street. North Miami Beach,
                                                    FL 33160.....</p>
                                                <div class="rating-stars d-inline-flex mb-1">
                                                    <input class="rating-value star" name="rating-stars-value"
                                                        readonly="readonly" type="number" value="4">
                                                    <div class="rating-stars-container mr-2">
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
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>4.7
                                                </div>
                                                <div class="mb-0 mt-0">
                                                    <ul class="item-card-features mb-0">
                                                        <li class="mb-0"><span class="text-muted"><i
                                                                    class="fa fa-map-marker mr-1"></i> Chennai</span>
                                                        </li>
                                                        <li><span class="text-muted "><i
                                                                    class="fa fa-clock-o mr-1"></i>10 Am - 5 Pm</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0 btn-appointment">
                                            <div class="btn-group w-100">
                                                <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                    href="hospital-details.html"><i class="fe fe-eye mr-1"></i> Visit
                                                    Website</a>
                                                <a
                                                    class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                    <div class="call-btn-1">
                                                        <i class="fe fe-phone mr-1"></i> Call
                                                    </div>
                                                    <div class="call-number">
                                                        +65 847596 82
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-xl-3">
                                    <div class="card">
                                        <div class="item-card7-imgs">
                                            <a href="bloodbank-details.html"></a>
                                            <img alt="img" class="cover-image"
                                                src="{{ asset('front_end_style/assets/images/media/0-4.jpg') }}">
                                            <div class="tag-text">
                                                <span class="bg-dark tag-option">BloodBank</span>
                                            </div>
                                        </div>
                                        <div class="item-card2-icons">
                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                    class="fa fa fa-heart text-danger"></i></a>
                                            <a class="item-card2-icons-r bg-dark-transparent" href="#"><i
                                                    class="fa fa-share-alt"></i></a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-card2">
                                                <a class="text-dark" href="bloodbank-details.html">
                                                    <h4 class="font-weight-semibold mt-1 mb-1">Regional Blood Bank...
                                                        <i class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                    </h4>
                                                </a>
                                                <p class="text-muted fs-13 mb-1">323 Fifth Ave. Canandaigua, NY
                                                    14424...</p>
                                                <div class="rating-stars d-inline-flex mb-1">
                                                    <input class="rating-value star" name="rating-stars-value"
                                                        readonly="readonly" type="number" value="4">
                                                    <div class="rating-stars-container mr-2">
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
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>4.0
                                                </div>
                                                <div class="mb-0 mt-0">
                                                    <ul class="item-card-features mb-0">
                                                        <li class="mb-0"><span class="text-muted"><i
                                                                    class="fa fa-map-marker mr-1"></i>
                                                                Hyderabad</span></li>
                                                        <li><span class="text-muted "><i
                                                                    class="fa fa-clock-o mr-1"></i>10 Am - 5 Pm</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0 btn-appointment">
                                            <div class="btn-group w-100">
                                                <a class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-left-0 border-right-0"
                                                    href="hospital-details.html"><i class="fe fe-eye mr-1"></i> Visit
                                                    Website</a>
                                                <a
                                                    class="w-50 btn btn-outline-light p-2 border-top-0 border-bottom-0 border-right-0 call-btn">
                                                    <div class="call-btn-1">
                                                        <i class="fe fe-phone mr-1"></i> Call
                                                    </div>
                                                    <div class="call-number">
                                                        +65 847596 82
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->

    <!--Statistics-->
    <section>
        <div class="about-1 cover-image sptb bg-background-color"
            data-image-src="{{ asset('front_end_style/assets/images/banners/banner4.jpg') }}">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status md-mb-0">
                                <div class="counter-icon">
                                    <i class="icon icon-trophy"></i>
                                </div>
                                <h5 class="font-weight-normal">Total Awards</h5>
                                <h2 class="counter mb-0">569</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status-1 md-mb-0">
                                <div class="counter-icon text-warning">
                                    <i class="icon icon-people"></i>
                                </div>
                                <h5 class="font-weight-normal">Total Experts</h5>
                                <h2 class="counter mb-0">1765</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status md-mb-0">
                                <div class="counter-icon text-primary">
                                    <i class="icon icon-globe"></i>
                                </div>
                                <h5 class="font-weight-normal">Total Countries</h5>
                                <h2 class="counter mb-0">1846</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status">
                                <div class="counter-icon text-success">
                                    <i class="icon icon-emotsmile"></i>
                                </div>
                                <h5 class="font-weight-normal">Happy Customers</h5>
                                <h2 class="counter mb-0">7253</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest Articles</h2>
            </div>
            <div class="row">
                @if(isset($blogs) && $blogs->count() > 0)
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-12 col-xl-4">
                            <div class="card">
                                <div class="item7-card-img">
                                    @if(isset($blog->redirect_301_en))
                                        <a href="{{ $blog->redirect_301_en }}"></a>
                                    @else
                                        <a href="{{ route('blogs-details',$blog->alias_name_en) }}"></a>
                                    @endif
                                    @if(isset($blog->image) && file_exists($blog->image))
                                        <img src="{{ asset($blog->image) }}" alt="img"
                                        class="cover-image">
                                    @else
                                        <img src="{{ asset('front_end_style/assets/images/media/photos/1.jpg') }}" alt="img"
                                        class="cover-image">
                                    @endif
                                </div>
                                <div class="card-body p-4">
                                    @if(isset($blog->redirect_301_en))
                                        <a href="{{ $blog->redirect_301_en }}" class="text-dark">
                                    @else
                                        <a href="{{ route('blogs-details',$blog->alias_name_en) }}" class="text-dark">
                                    @endif
                                        <h4>{{ isset($blog->title_en) ? $blog->title_en : '--------' }}</h4>
                                    </a>
                                    <p>{!! \Illuminate\Support\Str::limit(isset($blog->desc_en) ? str_replace("&nbsp;",' ',$blog->desc_en) : '--------', 70, $end='...') !!}
                                        @if (\Illuminate\Support\Str::length(isset($blog->desc_en) ? str_replace("&nbsp;",' ',$blog->desc_en) : '--------') > 70)
                                            {{-- <span id="dots">...</span> --}}
                                            @if(isset($blog->redirect_301_en))
                                                <a href="{{ $blog->redirect_301_en }}" class="text-primary font-weight-bold">more</a>
                                            @else
                                                <a href="{{ route('blogs-details',$blog->alias_name_en) }}" class="text-primary font-weight-bold">more</a>
                                            @endif
                                        @endif</p>
                                    {{-- <div class="d-flex">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="likes"><i
                                                class="fe fe-heart text-muted mr-2"></i>0</a>
                                        <div class="ml-auto">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="share"><i
                                                    class="fe fe-share-2 text-muted mr-2"></i></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-4 col-md-12 col-xl-4">
                        <div class="card">
                            <div class="item7-card-img">
                                <a href="articles.html"></a>
                                <img src="{{ asset('front_end_style/assets/images/media/photos/2.jpg') }}" alt="img"
                                    class="cover-image">
                            </div>
                            <div class="card-body p-4">
                                <a href="articles.html" class="text-dark">
                                    <h4>Exercise Fit for a good health</h4>
                                </a>
                                <p class="fs-13 text-muted">Gym Trainer</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum </p>
                                <div class="d-flex">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="likes"><i
                                            class="fe fe-heart text-muted mr-2"></i>8</a>
                                    <div class="ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="share"><i
                                                class="fe fe-share-2 text-muted mr-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xl-4">
                        <div class="card">
                            <div class="item7-card-img">
                                <a href="articles.html"></a>
                                <img src="{{ asset('front_end_style/assets/images/media/photos/3.jpg') }}" alt="img"
                                    class="cover-image">
                            </div>
                            <div class="card-body p-4">
                                <a href="articles.html" class="text-dark">
                                    <h4>Skin Crae and Repair , Healthy Skin</h4>
                                </a>
                                <p class="fs-13 text-muted">Dr.Dr.M.Angela. Dermatologist</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum </p>
                                <div class="d-flex">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="likes"><i
                                            class="fe fe-heart text-muted mr-2"></i>5</a>
                                    <div class="ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="share"><i
                                                class="fe fe-share-2 text-muted mr-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <a href="{{ route('blogs-list') }}" class="btn btn-primary">Show More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!--/Section-->

    <!--Section-->
    <section class="sptb position-relative pattern">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2 class="text-white position-relative">Testimonials</h2>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel testimonial-owl-carousel" id="myCarousel">
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title">Elizabeth</h3>
                                        <div class="rating-stars mb-3">
                                            <input class="rating-value star" name="rating-stars-value" readonly="readonly"
                                                type="number" value="4">
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
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-white-80"><i class="fa fa-quote-left text-white-80"></i>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                                            officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet,
                                            consectetur adipisicing
                                            elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam
                                            labore sit, aspernatur praesentium iste impedit quidem dolor veniam.</p>
                                        <a href="testimonial.html" class="btn btn-secondary btn-lg">View all
                                            Testimonials</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <div class="testimonia-data">
                                            <div class="owl-controls clickable">
                                                <div class="owl-pagination">
                                                    <div class="owl-page">
                                                        <span class=""></span>
                                                    </div>
                                                    <div class="owl-page active">
                                                        <span class=""></span>
                                                    </div>
                                                    <div class="owl-page">
                                                        <span class=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="title">williamson</h3>
                                            <div class="rating-stars mb-3">
                                                <input class="rating-value star" name="rating-stars-value"
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
                                            <p class="text-white-80"><i class="fa fa-quote-left"></i> Duis aute
                                                irure reprehenderit quia voluptas sit aspernatur aut odit aut fugit, sed
                                                quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                                nesciunt. Neque porro quisquam
                                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                                sed quia non numquam eius modi tempora incidunt ut labore.</p>
                                        </div>
                                        <a href="testimonial.html" class="btn btn-secondary btn-lg">View all
                                            Testimonials</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page active">
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonia-data">
                                            <h3 class="title">Sophie Carr</h3>
                                            <div class="rating-stars mb-3">
                                                <input class="rating-value star" name="rating-stars-value"
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
                                            <p class="text-white-80"><i class="fa fa-quote-left"></i> Duis aute
                                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                sunt in culpa qui officia
                                                deserunt mollit anim id est laborum. usantium doloremque laudantium.</p>
                                        </div>
                                        <a href="testimonial.html" class="btn btn-secondary btn-lg">View all
                                            Testimonials</a>
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

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Our Clinets</h2>
            </div>
            <div id="small-categories" class="owl-carousel client-carousel">
                <div class="item">
                    <div class="client-img">
                        <img src="{{ asset('front_end_style/assets/images/clients/1.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="client-img">
                        <img src="{{ asset('front_end_style/assets/images/clients/2.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="client-img">
                        <img src="{{ asset('front_end_style/assets/images/clients/3.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="client-img">
                        <img src="{{ asset('front_end_style/assets/images/clients/4.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="client-img">
                        <img src="{{ asset('front_end_style/assets/images/clients/5.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="client-img">
                        <img src="{{ asset('front_end_style/assets/images/clients/6.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="client-img">
                        <img src="{{ asset('front_end_style/assets/images/clients/7.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="client-img">
                        <img src="{{ asset('front_end_style/assets/images/clients/8.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->

    <!--Section-->
    <section class="sptb section-bg">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Best Rated Locations</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <a href="#"></a>
                                    <div class="card overflow-hidden border-0">
                                        <div class="card-img">
                                            <img src="{{ asset('front_end_style/assets/images/media/locations/3.jpg') }}"
                                                alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o mr-1"></i>
                                                689 </div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="">44,327<span class="item-subtext"><i
                                                        class="fa fa-map-marker mr-1 text-secondary"></i>GERMANY</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <a href="#"></a>
                                    <div class="card overflow-hidden border-0">
                                        <div class="card-img">
                                            <img src="{{ asset('front_end_style/assets/images/media/locations/6.jpg') }}"
                                                alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o mr-1"></i>
                                                491 </div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="">52,145<span class="item-subtext"><i
                                                        class="fa fa-map-marker mr-1 text-secondary"></i>
                                                    LONDON</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <a href="#"></a>
                                    <div class="card overflow-hidden border-0">
                                        <div class="card-img">
                                            <img src="{{ asset('front_end_style/assets/images/media/locations/1.jpg') }}"
                                                alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o mr-1"></i>
                                                729 </div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="">63,263<span class="item-subtext"><i
                                                        class="fa fa-map-marker text-secondary mr-1"></i>AUSTERLIA</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <a href="#"></a>
                                    <div class="card overflow-hidden border-0">
                                        <div class="card-img">
                                            <img src="{{ asset('front_end_style/assets/images/media/locations/2.jpg') }}"
                                                alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o mr-1"></i>
                                                567 </div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="">36,485<span class="item-subtext"><i
                                                        class="fa fa-map-marker text-secondary mr-1"></i>CHICAGO</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-md-6">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <a href="#"></a>
                                    <div class="card overflow-hidden border-0">
                                        <div class="card-img">
                                            <img src="{{ asset('front_end_style/assets/images/media/locations/8.jpg') }}"
                                                alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o mr-1"></i>
                                                209 </div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="">64,825<span class="item-subtext"><i
                                                        class="fa fa-map-marker text-secondary mr-1"></i>WASHINGTON</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <a href="#"></a>
                                    <div class="card overflow-hidden border-0">
                                        <div class="card-img">
                                            <img src="{{ asset('front_end_style/assets/images/media/locations/5.jpg') }}"
                                                alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o mr-1"></i>
                                                567 </div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="">73,5345<span class="item-subtext"><i
                                                        class="fa fa-map-marker text-secondary mr-1"></i>JAPAN</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <a href="#"></a>
                                    <div class="card overflow-hidden border-0">
                                        <div class="card-img">
                                            <img src="{{ asset('front_end_style/assets/images/media/locations/7.jpg') }}"
                                                alt="img" class="cover-image">
                                        </div>
                                        <div class="item-tags">
                                            <div class="bg-secondary tag-option"><i class="fa fa fa-heart-o mr-1"></i>
                                                567 </div>
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="">64,825<span class="item-subtext"><i
                                                        class="fa fa-map-marker text-secondary mr-1"></i>CANADA</span>
                                            </h4>
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
    <!--Section-->

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest News</h2>
            </div>
            <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
                @if(isset($news) && $news->count() > 0)
                    @foreach ($news as $new)
                        <div class="item">
                            <div class="card mb-0">
                                <div class="item7-card-img">
                                    @if(isset($new->redirect_301_en))
                                        <a href="{{ $new->redirect_301_en }}"></a>
                                    @else
                                        <a href="{{ route('news-details',$new->alias_name_en) }}"></a>
                                    @endif
                                    @if(isset($new->redirect_301_en))
                                        <a href="{{ $new->redirect_301_en }}"></a>
                                    @else
                                        <a href="{{ route('news-details',$new->alias_name_en) }}"></a>
                                    @endif
                                    @if(isset($new->image) && file_exists($new->image))
                                        <img src="{{ asset($new->image) }}" alt="img"
                                        class="cover-image">
                                    @else
                                        <img src="{{ asset('front_end_style/assets/images/media/photos/1.jpg') }}" alt="img"
                                        class="cover-image">
                                    @endif
                                </div>
                                <div class="card-body p-4">
                                    <div class="item7-card-desc d-flex mb-2">
                                        <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>{{ date('Y-m-d',strtotime($new->created_at)) }}</a>
                                        {{-- <div class="ml-auto">
                                            <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                                        </div> --}}
                                    </div>
                                    @if(isset($new->redirect_301_en))
                                        <a href="{{ $new->redirect_301_en }}" class="text-dark">
                                    @else
                                        <a href="{{ route('news-details',$new->alias_name_en) }}" class="text-dark">
                                    @endif
                                        <h4>{{ isset($new->title_en) ? $new->title_en : '--------' }}</h4>
                                    </a>
                                    <p>{!! \Illuminate\Support\Str::limit(isset($new->desc_en) ? str_replace("&nbsp;",' ',$new->desc_en) : '--------', 70, $end='...') !!}
                                        @if (\Illuminate\Support\Str::length(isset($new->desc_en) ? str_replace("&nbsp;",' ',$new->desc_en) : '--------') > 70)
                                            {{-- <span id="dots">...</span> --}}
                                            @if(isset($new->redirect_301_en))
                                                <a href="{{ $new->redirect_301_en }}" class="text-primary font-weight-bold">more</a>
                                            @else
                                                <a href="{{ route('news-details',$new->alias_name_en) }}" class="text-primary font-weight-bold">more</a>
                                            @endif
                                        @endif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <a href="{{ route('news-list') }}" class="btn btn-primary">Show More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <!--/Section-->
@endsection
