@extends('front_end_inners.app_front_end', ['title' => 'Blogs'])
@section('page_title') {{ 'Rushetta | Blogs' }} @endsection
@section('meta_title'){!! isset($blog->seo_title_en) ? $blog->seo_title_en : 'Rushetta website' !!}@endsection
@section('meta_desc'){!! isset($blog->meta_desc_ar) ? $blog->meta_desc_ar : 'rushetta website find your doctor' !!}@endsection
@section('meta_keywords'){{ isset($blog->keywords_en) ? $blog->keywords_en : 'rushetta,docotors,dctor' }}@endsection
@section('content')
    <!--Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background1 banner-section" data-image-src="{{ asset('front_end_style/assets/images/banners/banner1.jpg') }}">
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
                                            <a data-toggle="tab" href="#tab2">Doctors</a>
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
                                                    <input class="form-control border" placeholder="Search Location" type="text">
                                                    <span><i class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                        <input class="form-control border" placeholder="Search Location" type="text"> <span><i
                                                                    class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                        <input class="form-control border" placeholder="Search Location" type="text"> <span><i
                                                                    class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                        <input class="form-control border" placeholder="Search Location" type="text"> <span><i
                                                                    class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                        <input class="form-control border" placeholder="Search Location" type="text"> <span><i
                                                                    class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                        <input class="form-control border" placeholder="Search Location" type="text"> <span><i
                                                                    class="fa fa-crosshairs  location-gps mr-1"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                                                    <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
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
                <h4 class="page-title">Blog Details</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('blogs-list') }}">Blogs</a></li>
                    <li class="breadcrumb-item">Blog Details</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ isset($blog->title_en) ? $blog->title_en : '--------' }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-10 col-lg-10 col-md-12 d-block mx-auto">
						<div class="card">
                            <div class="cart-title col-xl-12 p-3"><a class="text-dark" href="#">
								<h1 class="font-weight-semibold">{{ isset($blog->title_en) ? $blog->title_en : '--------' }}</h1></a></div>
							<div class="card-body">
								<div class="item7-card-img">
                                    @if(isset($blog->image) && file_exists($blog->image))
									    <img alt="img" class="w-100" src="{{ asset($blog->image) }}" alt="{{ isset($blog->alt_text_en) ? $blog->alt_text_ar : 'image' }}"
                                            title="{{ isset($blog->image_title_text_en) ? $blog->image_title_text_en : 'image' }}">
                                    @else
									    <img alt="img" class="w-100" src="{{ asset('front_end_style/assets/images/media/28.jpg') }}">
                                    @endif
									{{-- <div class="item7-card-text">
										<span class="badge badge-info">Doctor</span>
									</div> --}}
								</div>
								<div class="item7-card-desc d-flex mb-2 mt-3">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>{{ date('Y-m-d',strtotime($blog->created_at)) }}</a>
									{{-- <div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
									</div> --}}
								</div>
                                <h2 class="font-weight-semibold">{{ isset($blog->h2_en) ? $blog->h2_en : '--------' }}</h2></a>
								<p>{!! isset($blog->desc_en) ? $blog->desc_en : '--------' !!}</p>
							</div>
						</div>
						{{-- <div class="card">
							<div class="card-header">
								<h3 class="card-title">Comments</h3>
							</div>
							<div class="card-body p-0">
								<div class="media mt-0 p-5">
									<div class="d-flex mr-3">
										<a href="#"><img alt="64x64" class="media-object brround" src="{{ asset('front_end_style/assets/images/users/male/1.jpg') }}"></a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott <span class="fs-14 ml-0" data-original-title="verified" data-placement="top" data-toggle="tooltip" title=""><i class="fa fa-check-circle-o text-success"></i></span> <span class="fs-14 ml-2">4.5 <i class="fa fa-star text-yellow"></i></span></h5><small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i class=" ml-3 fa fa-clock-o"></i> 13.00 <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
										<p class="font-13 mb-2 mt-2">Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et nostrud exercitation ullamco laboris commodo consequat.</p><a class="mr-2" href="#"><span class="badge badge-primary">Helpful</span></a> <a class="mr-2" data-target="#Comment" data-toggle="modal" href=""><span class="">Comment</span></a> <a class="mr-2" data-target="#report" data-toggle="modal" href=""><span class="">Report</span></a>
										<div class="media mt-5">
											<div class="d-flex mr-3">
												<a href="#"><img alt="64x64" class="media-object brround" src="{{ asset('front_end_style/assets/images/users/female/2.jpg') }}"></a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ml-0" data-original-title="verified" data-placement="top" data-toggle="tooltip" title=""><i class="fa fa-check-circle-o text-success"></i></span></h5><small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st <i class=" ml-3 fa fa-clock-o"></i> 6.00 <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
												<p class="font-13 mb-2 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris commodo Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.</p><a data-target="#Comment" data-toggle="modal" href=""><span class="badge badge-default">Comment</span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="media p-5 border-top mt-0">
									<div class="d-flex mr-3">
										<a href="#"><img alt="64x64" class="media-object brround" src="{{ asset('front_end_style/assets/images/users/male/3.jpg') }}"></a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold">Edward <span class="fs-14 ml-0" data-original-title="verified" data-placement="top" data-toggle="tooltip" title=""><i class="fa fa-check-circle-o text-success"></i></span> <span class="fs-14 ml-2">4 <i class="fa fa-star text-yellow"></i></span></h5><small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i class=" ml-3 fa fa-clock-o"></i> 16.35 <i class=" ml-3 fa fa-map-marker"></i> UK</small>
										<p class="font-13 mb-2 mt-2">Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et nostrud exercitation ullamco laboris commodo consequat.</p><a class="mr-2" href="#"><span class="badge badge-primary">Helpful</span></a> <a class="mr-2" data-target="#Comment" data-toggle="modal" href=""><span class="">Comment</span></a> <a class="mr-2" data-target="#report" data-toggle="modal" href=""><span class="">Report</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Write Your Comments</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input class="form-control" id="name1" placeholder="Your Name" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" id="email" placeholder="Email Address" type="email">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="example-textarea-input" placeholder="Write Your Comment" rows="6"></textarea>
								</div><a class="btn btn-primary" href="#">Submit</a>
							</div>
						</div> --}}
					</div>
					{{-- <!--Rightside Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="input-group">
									<input class="form-control br-tl-3 br-bl-3" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn btn-primary br-tr-3 br-br-3" type="button">Search</button>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Categories</h3>
							</div>
							<div class="card-body p-0">
								<div class="list-catergory">
									<div class="item-list">
										<ul class="list-group mb-0">
											<li class="list-group-item">
												<a class="text-dark" href="#"><i class="fa fa-hospital-o bg-primary text-primary"></i> Hospitals<span class="badgetext badge badge-pill badge-light mb-0 mt-1 mt-1">14</span></a>
											</li>
											<li class="list-group-item">
												<a class="text-dark" href="#"><i class="fa fa-user-md bg-info text-info"></i> Doctors<span class="badgetext badge badge-pill badge-light mb-0 mt-1">25</span></a>
											</li>
											<li class="list-group-item">
												<a class="text-dark" href="#"><i class="fa fa-building-o bg-warning text-warning"></i> FitnessCenters <span class="badgetext badge badge-pill badge-light mb-0 mt-1">74</span></a>
											</li>
											<li class="list-group-item">
												<a class="text-dark" href="#"><i class="fa fa-medkit bg-danger text-danger"></i> Pharmacies <span class="badgetext badge badge-pill badge-light mb-0 mt-1">18</span></a>
											</li>
											<li class="list-group-item">
												<a class="text-dark" href="#"><i class="fa fa-stethoscope bg-blue text-blue"></i> Clinics <span class="badgetext badge badge-pill badge-light mb-0 mt-1">32</span></a>
											</li>
											<li class="list-group-item border-bottom-0">
												<a class="text-dark" href="#"><i class="fa fa-heartbeat bg-pink text-pink"></i> Bloodbanks <span class="badgetext badge badge-pill badge-light mb-0 mt-1">08</span></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Popular Tags</h3>
							</div>
							<div class="card-body">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li>
											<a href="#">Treatment</a>
										</li>
										<li>
											<a href="#">Medicine</a>
										</li>
										<li>
											<a href="#">patient</a>
										</li>
										<li>
											<a href="#">Health</a>
										</li>
										<li>
											<a href="#">Medical Care</a>
										</li>
										<li>
											<a href="#">Health Care Manegement</a>
										</li>
										<li>
											<a href="#">Health Care Plans</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Blog Authors</h3>
							</div>
							<div class="card-body p-0">
								<ul class="vertical-scroll">
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img alt="image" class="avatar brround mr-2" src="{{ asset('front_end_style/assets/images/users/female/18.jpg') }}"> <a class="time-title p-0 leading-Automatic mt-2" href="#">Boris Nash <i class="icon icon-check text-success fs-12 ml-1" data-original-title="verified" data-placement="top" data-toggle="tooltip" title=""></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a data-original-title="Articles" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 16</span></a> <a data-original-title="Likes" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 36</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img alt="image" class="avatar brround mr-2" src="{{ asset('front_end_style/assets/images/users/female/10.jpg') }}"> <a class="time-title p-0 leading-Automatic mt-2" href="#">Lorean Mccants <i class="icon icon-check text-success fs-12 ml-1" data-original-title="verified" data-placement="top" data-toggle="tooltip" title=""></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a data-original-title="Articles" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 43</span></a> <a data-original-title="Likes" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 23</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img alt="image" class="avatar brround mr-2" src="{{ asset('front_end_style/assets/images/users/male/18.jpg') }}"> <a class="time-title p-0 leading-Automatic mt-2" href="#">Dewitt Hennessey <i class="icon icon-check text-success fs-12 ml-1" data-original-title="verified" data-placement="top" data-toggle="tooltip" title=""></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a data-original-title="Articles" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 34</span></a> <a data-original-title="Likes" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 12</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img alt="image" class="avatar brround mr-2" src="{{ asset('front_end_style/assets/images/users/male/8.jpg') }}"> <a class="time-title p-0 leading-Automatic mt-2" href="#">Archie Overturf <i class="icon icon-check text-success fs-12 ml-1" data-original-title="verified" data-placement="top" data-toggle="tooltip" title=""></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a data-original-title="Articles" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 12</span></a> <a data-original-title="Likes" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img alt="image" class="avatar brround mr-2" src="{{ asset('front_end_style/assets/images/users/female/21.jpg') }}"> <a class="time-title p-0 leading-Automatic mt-2" href="#">Barbra Flegle <i class="icon icon-check text-success fs-12 ml-1" data-original-title="verified" data-placement="top" data-toggle="tooltip" title=""></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a data-original-title="Articles" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 21</span></a> <a data-original-title="Likes" data-placement="top" data-toggle="tooltip" href="#" title=""><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--/Rightside Content--> --}}
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
							<h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
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

@endsection
