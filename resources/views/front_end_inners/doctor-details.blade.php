@extends('front_end_inners.app_front_end', ['title' => 'About Us'])

@section('content')

    <!--Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background1 banner-section"
            data-image-src="{{ asset('front_end_style/assets/images/banners/banner1.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="mb-1">Find the Nearest Medical Facility</h1>
                        <p>It is a long established fact that a reader will be distracted by the when looking at its
                            layout.</p>
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
		<!--Breadcrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">Doctors</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Categories</a></li>
						<li class="breadcrumb-item"><a href="#">Doctors</a></li>
						<li class="breadcrumb-item active" aria-current="page">Doctors Details2</li>
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
									<img src="{{ asset('front_end_style/assets/images/media/doctors/2.jpg') }}" class="w-150 h-150 br-2" alt="user">
								</div>
							</div>
							<div class="card-body item-user text-center">
								 <div class="ml-1">
									<a href="#" class="text-dark">
									   <h4 class="mt-0 mb-2 font-weight-bold">Dr. Julia<i class="ion-checkmark-circled  text-success fs-14 ml-1"></i></h4>
									</a>
									<span class="text-gray">Gynecologist</span><br>
									<span class="text-muted">Member Since November 2010</span><br>
									<div class="rating-stars d-inline-flex mb-2 mr-3">
										<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
										<div class="rating-stars-container mr-2">
											<div class="rating-star sm "> <i class="fa fa-star"></i> </div>
											<div class="rating-star sm "> <i class="fa fa-star"></i> </div>
											<div class="rating-star sm "> <i class="fa fa-star"></i> </div>
											<div class="rating-star sm "> <i class="fa fa-star"></i> </div>
											<div class="rating-star sm"> <i class="fa fa-star"></i> </div>
										</div>
										4.0
									</div>
									<h6 class="mt-2 mb-0 btn-list">
										<a href="#" class="btn btn-secondary btn-sm">1245 Views</a>
										<a href="#" class="btn btn-info btn-sm">850 Patients</a>
									</h6>
								 </div>
							</div>
							<div class="card-body item-user">
								<h4 class="mb-4">Contact Info</h4>
								<div>
									<h6><span class="font-weight-semibold"><i class="fa fa-map-marker mr-2 mb-2"></i></span><a href="#" class="text-body"> 7981 Aspen,  USA</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body"> smith@yourdomain.com</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3  mb-2"></i></span><a href="#" class="text-body"> 0-235-657-24587</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-link mr-3 "></i></span><a href="#" class="text-body">http://spruko.com/</a></h6>
								</div>
								<div class=" item-user-icons mt-4">
									<a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
							<div class="card-footer">
								<div class="btn-list text-left">
									<a href="#" class="btn  btn-primary"><i class="fa fa-envelope"></i> Chat</a>
									<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
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
											<li class=""><a href="#tab-5" class="active" data-toggle="tab">Description</a></li>
											<li><a href="#tab-6" data-toggle="tab" class="">Education</a></li>
											<li><a href="#tab-7" data-toggle="tab" class="">Consultation Fees</a></li>
											<li><a href="#tab-8" data-toggle="tab" class="">Reviews</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="border-0">
								<div class="tab-content  border-left border-right details-tab-content bg-white">
									<div class="tab-pane active" id="tab-5">
										<div class=" p-5">
											<div class="mb-4">
												<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
											</div>
											<h3 class="card-title mb-3">Specifications</h3>
											<div class="row">
												<div class="col-xl-12 col-md-12">
													<ul class="list-unstyled widget-spec mb-0">
														<li class="">
															<a href="#" class="text-dark"><i class="fa fa-caret-right mr-2"></i>Maternal-fetal medicine</a>
														</li>
														<li class="">
															<a href="#" class="text-dark"><i class="fa fa-caret-right mr-2"></i>Female pelvic medicine and reconstructive surgery</a>
														</li>
														<li class="">
															<a href="#" class="text-dark"><i class="fa fa-caret-right mr-2"></i>Reproductive endocrinology and infertility</a>
														</li>
														<li class="">
															<a href="#" class="text-dark"><i class="fa fa-caret-right mr-2"></i>Menopausal</a>
														</li>
														<li class="">
															<a href="#" class="text-dark"><i class="fa fa-caret-right mr-2"></i>Laparoscopic surgery</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane userprof-tab" id="tab-6">
										<div class=" p-5">
											<div class="mb-4">
												<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
											</div>
											<h3 class="card-title mb-3">Curriculum</h3>
											<div class="row">
												<div class="col-xl-12 col-md-12">
													<ul class="list-unstyled widget-spec mb-0">
														<li class="">
															<a href="#" class="text-dark"><i class="fa fa fa-graduation-cap mr-2"></i>Pre Medical College - M.D(Obstetrics & gynecology)</a>
														</li>
														<li class="">
															<a href="#" class="text-dark"><i class="fa fa-graduation-cap  mr-2"></i>Wish Medical College - M.S(Obstetrics & gynecology)</a>
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
																		<td>Female pelvic medicine and reconstructive surgery</td>
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
												<a href="#"><img class="media-object brround" alt="64x64" src="{{ asset('front_end_style/assets/images/users/male/1.jpg') }}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
													<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
													<span class="fs-14 ml-2"> 4.5
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star-half-o text-yellow"></i>
													</span>
												</h5>
												<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 13.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
												<p class="font-13  mb-2 mt-2">
												   Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
												<a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span >Comment</span></a>
												<a href="" class="mr-2" data-toggle="modal" data-target="#report"><span >Report</span></a>
												<div class="media mt-5">
													<div class="d-flex mr-3">
														<a href="#"> <img class="media-object brround" alt="64x64" src="{{ asset('front_end_style/assets/images/users/female/2.jpg') }}"> </a>
													</div>
													<div class="media-body">
														<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
														<small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st  <i class=" ml-3 fa fa-clock-o"></i> 6.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
														<p class="font-13  mb-2 mt-2">
														   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris   commodo Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium  laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.
														</p>
														<a href="" data-toggle="modal" data-target="#Comment"><span class="badge badge-default">Comment</span></a>
													</div>
												</div>
											</div>
										</div>
										<div class="media p-5 border-top mt-0">
											<div class="d-flex mr-3">
												<a href="#"> <img class="media-object brround" alt="64x64" src="{{ asset('front_end_style/assets/images/users/male/3.jpg') }}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">Edward
												<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
												<span class="fs-14 ml-2"> 4
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star-o text-yellow"></i>
												</span>
												</h5>
												<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 16.35  <i class=" ml-3 fa fa-map-marker"></i> UK</small>
												<p class="font-13  mb-2 mt-2">
												   Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
												<a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span >Comment</span></a>
												<a href="" class="mr-2" data-toggle="modal" data-target="#report"><span >Report</span></a>
											</div>
										</div>
										<div class="p-5 border-top">
											<h3 class="card-title">Leave a reply</h3>
											<div class="form-group">
												<input type="text" class="form-control" id="name1" placeholder="Your Name">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" id="email" placeholder="Email Coursedress">
											</div>
											<div class="form-group">
												<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea>
											</div>
											<a href="#" class="btn btn-primary">Send Reply</a>
										</div>
									</div>
								</div>
								<div class="card-footer bg-white br-bl-2 br-br-2 border-left border-right border-bottom">
									<div class="btn-list">
										<a href="#" class="btn btn-success icons"><i class="icon icon-note mr-1"></i> Book A Visit</a>
										<a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Share</a>
										<a href="#" class="btn btn-danger icons" data-toggle="modal" data-target="#report"><i class="icon icon-exclamation mr-1"></i> Report Abuse</a>
										<a href="#" class="btn btn-primary icons"><i class="icon icon-heart  mr-1"></i> 678</a>
										<a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  mr-1"></i> Print</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Book a Visit</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label">First Name</label>
									<input type="text" class="form-control"  placeholder="Enter Your Name">
								</div>
								<div class="form-group">
									<label class="form-label">Last Name</label>
									<input type="text" class="form-control" placeholder="Enter Last Name">
								</div>
								<div class="form-group">
									<label class="form-label">Age</label>
									<input type="text" class="form-control" placeholder="Enter your age">
								</div>
								<div class="form-group">
									<label class="form-label">Email</label>
									<input type="email" class="form-control" placeholder="Enter your Email">
								</div>
								<div class="form-group">
									<label class="form-label">Phone Number</label>
									<input type="number" class="form-control" placeholder="Enter your Phone Number">
								</div>
								<div class="form-group">
									<label class="form-label">Fix Appointemnt Date</label>
									<input class="form-control fc-datepicker" placeholder="Appointment Date" type="text">
								</div>
								<div class="form-group">
									<label class="form-label">Time</label>
									<div class="row gutters-xs">
										<div class="col-6">
											<select name="user[hour]" class="form-control select2">
												<option value="">0</option>
												<option value="0">1</option>
												<option value="1">2</option>
												<option value="2">3</option>
												<option value="3">4</option>
												<option value="4">5</option>
												<option value="5">6</option>
												<option selected="selected" value="6">7</option>
												<option value="7">8</option>
												<option value="8">9</option>
												<option value="9">10</option>
												<option value="10">11</option>
												<option value="11">12</option>
												<option value="12">13</option>
												<option value="13">14</option>
												<option value="14">15</option>
												<option value="15">16</option>
												<option value="16">17</option>
												<option value="17">18</option>
												<option value="18">19</option>
												<option value="19">20</option>
												<option value="20">21</option>
												<option value="21">22</option>
												<option value="22">23</option>
											</select>
										</div>
										<div class="col-6">
											<select name="user[minute]" class="form-control select2">
												<option value="">Minutes</option>
												<option value="0">00</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option selected="selected" value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
												<option value="32">32</option>
												<option value="33">33</option>
												<option value="34">34</option>
												<option value="35">35</option>
												<option value="36">36</option>
												<option value="37">37</option>
												<option value="38">38</option>
												<option value="39">39</option>
												<option value="40">40</option>
												<option value="41">41</option>
												<option value="42">42</option>
												<option value="43">43</option>
												<option value="44">44</option>
												<option value="45">45</option>
												<option value="46">46</option>
												<option value="47">47</option>
												<option value="48">48</option>
												<option value="49">49</option>
												<option value="50">50</option>
												<option value="51">51</option>
												<option value="52">52</option>
												<option value="53">53</option>
												<option value="54">54</option>
												<option value="55">55</option>
												<option value="56">56</option>
												<option value="57">57</option>
												<option value="58">58</option>
												<option value="59">59</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<select name="country" id="select-countries" class="form-control custom-select select2-show-search">
										<option value="0" selected> All Categories</option>
										<option value="1"> Out Patient</option>
										<option value="11"> General Checkup</option>
										<option value="2"> Maternal-fetal medicine</option>
										<option value="3"> Reproductive endocrinology and infertility</option>
										<option value="4"> Female pelvic medicine and reconstructive surgery</option>
										<option value="5"> Menopausal</option>
										<option value="6"> Laparoscopic surgery</option>
										<option value="7"> Pediatric and adolescent gynecology</option>
									</select>
								</div>
							</div>
							<div class="card-footer">
								<div class="">
									<a href="#" class="btn  btn-primary">Fix Appointment</a>
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

		<!-- Message Modal -->
		<div class="modal" id="contact" tabindex="-1" role="dialog"  aria-hidden="true">
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
							<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
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
		<div class="modal" id="Comment" tabindex="-1" role="dialog"  aria-hidden="true">
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
							<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
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
		<div class="modal" id="report" tabindex="-1" role="dialog"  aria-hidden="true">
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
							<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
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

    @endsection

