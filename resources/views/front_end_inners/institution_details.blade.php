@extends('front_end_inners.app_front_end', ['title' => 'About Us'])
@section('page_title') {{ 'Rushetta | '.isset($user->name_en) ? $user->name_en : '--------' }} @endsection

@section('content')
    <!--Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background1 banner-section"
            data-image-src="{{ asset('front_end_style/rushetta_images/last_header.png') }}">
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
						<li class="breadcrumb-item active" aria-current="page">{{ isset($user->name_en) ? $user->name_en : '--------' }}</li>
					</ol>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">
						<!--Classified Description-->
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="item-det mb-4">
									<a href="#" class="text-dark"><h3 >{{ isset($user->name_en) ? $user->name_en : '--------' }}</h3></a>
									<div class=" d-flex">
										<ul class="d-flex mb-0">
											<li class="mr-5"><a href="#" class="icons"><i class="fa fa-hospital-o text-muted mr-1"></i>{{ ucfirst($user_type) }}</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i>{{ isset($user->country) ? $user->country->name_en : '--------' }} | {{ isset($user->region) ? $user->region->name_en : '--------' }}</a></li>
											{{-- <li class="mr-5"><a href="#" class="icons"><i class="icon icon-calendar text-muted mr-1"></i> 5 hours ago</a></li> --}}
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-eye text-muted mr-1"></i> {{ isset($user->view_counter) ? $user->view_counter : 0 }}</a></li>
										</ul>
										<div class="rating-stars d-flex mr-5">
											<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" id="rating-stars-value" value="4">
											<div class="rating-stars-container mr-2">
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
											</div> 4.0
										</div>
										{{-- <div class="d-flex">
											<span><i class="fa fa-heart text-danger mr-1"></i>135</span>
										</div> --}}
									</div>
								</div>
								<div class="product-slider">
									<div id="carousel" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
                                            @if(isset($user->images) && $user->images->count() > 0)
                                                @foreach ($user->images as $key => $image)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                        @if(isset($image->image) && file_exists($image->image))
                                                            <img src="{{ asset($image->image) }}" alt="img" style="height: 600px;">
                                                        @else
                                                            <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/1.jpg') }}" alt="img">
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="carousel-item active"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/1.jpg') }}" alt="img"> </div>
                                                <div class="carousel-item"> <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/2.jpg') }}" alt="img"> </div>
                                                <div class="carousel-item"> <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/3.jpg') }}" alt="img"> </div>
                                                <div class="carousel-item"> <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/4.jpg') }}" alt="img"> </div>
                                                <div class="carousel-item"> <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/5.jpg') }}" alt="img"> </div>
                                            @endif
										</div>
										<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
											<i class="fa fa-angle-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
									<div class="clearfix">
										<div id="thumbcarousel" class="carousel slide" data-interval="false">
											<div class="carousel-inner">
                                                @if(isset($user->images) && $user->images->count() > 0)
                                                    @foreach ($user->images->chunk(5) as $key => $images)
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                            @foreach ($images as $index => $image)
                                                            <div data-target="#carousel" data-slide-to="{{ $index }}" class="thumb">
                                                                @if(isset($image->image) && file_exists($image->image))
                                                                    <img src="{{ asset($image->image) }}" alt="img" style="height: 175px;">
                                                                @else
                                                                    <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/01.jpg') }}" alt="img">
                                                                @endif
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="carousel-item active">
                                                        <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/01.jpg') }}" alt="img"></div>
                                                        <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/02.jpg') }}" alt="img"></div>
                                                        <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/03.jpg') }}" alt="img"></div>
                                                        <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/04.jpg') }}" alt="img"></div>
                                                        <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/05.jpg') }}" alt="img"></div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/01.jpg') }}" alt="img"></div>
                                                        <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/02.jpg') }}" alt="img"></div>
                                                        <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/03.jpg') }}" alt="img"></div>
                                                        <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/04.jpg') }}" alt="img"></div>
                                                        <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/05.jpg') }}" alt="img"></div>
                                                    </div>
                                                @endif
											</div>
											<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
												<i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
											<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Description</h3>
							</div>
							<div class="card-body">
								<div class="mb-4">
									<p>{!! isset($user->user_description_en) ? $user->user_description_en : '--------' !!}</p>

								</div>
								<h4 class="mb-2 mt-5">Specifications</h4>
								<div class="row">
									<div class="col-xl-12 col-md-12">
										<div class="table-responsive">
											<table class="table row table-borderless w-100 m-0 text-nowrap ">
												<tbody class="col-lg-12 col-xl-6 p-0">
													<tr>
														<td><i class="fa fa-user-md mr-1 text-muted"></i> Qualified Doctors</td>
													</tr>
													<tr>
														<td><i class="fa fa fa-ambulance mr-1 text-muted"></i> Emergency Services</td>
													</tr>
													<tr>
														<td><i class="fa fa fa-wheelchair-alt mr-1 text-muted"></i> All advanced Equipment</td>
													</tr>
												</tbody>
												<tbody class="col-lg-12 col-xl-6 p-0">
													<tr>
														<td><i class="fa fa-flask mr-1 text-muted"></i> Lab Facilities</td>
													</tr>
													<tr>
														<td><i class="fa fa-heartbeat mr-1 text-muted"></i> Advanced Treatments</td>
													</tr>
													<tr>
														<td><i class="fa fa fa-medkit mr-1 text-muted"></i> Advanced Medicine</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							{{-- <div class="pt-4 pb-4 pl-5 pr-5 border-top border-top">
								<div class="list-id">
									<div class="row">
										<div class="col">
											<a class="mb-0">PublisherID : <span class="mb-0 font-weight-bold">#8256358</span></a>
										</div>
										<div class="col col-auto">
											Posted By <a class="mb-0 font-weight-bold">Individual</a> / 21st Dec 2019
										</div>
									</div>
								</div>
							</div> --}}
							<div class="card-footer">
								<div class="btn-list">
									<a href="#" class="btn btn-danger icons" data-toggle="modal" data-target="#report"><i class="icon icon-exclamation mr-1"></i> Report Abuse</a>
									<a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Share Ad</a>
									<a href="#" class="btn btn-primary icons"><i class="icon icon-heart  mr-1"></i> 678</a>
									<a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  mr-1"></i> Print</a>
								</div>
							</div>
						</div>
						<!--Comments-->
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Rating And Reviews</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="mb-4">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>5</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-success w-100">9,232</div>
											</div>
										</div>
										<div class="mb-4">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>4</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-info w-80">8,125</div>
											</div>
										</div>
										<div class="mb-4">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>  3</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-primary w-60">6,263</div>
											</div>
										</div>
										<div class="mb-4">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>  2</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-secondary w-30">3,463</div>
											</div>
										</div>
										<div class="mb-5">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>  1</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-orange w-20">1,456</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="media mt-0 p-5">
                                    <div class="d-flex mr-3">
                                        <a href="#"><img class="media-object brround" alt="64x64" src="{{ asset('front_end_style/assets/images/users/male/1.jpg') }}"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
											<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
											<span class="fs-14 ml-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
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
												   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris   commodo Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.
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
										<span class="fs-14 ml-2"> 4 <i class="fa fa-star text-yellow"></i></span>
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
							</div>
						</div>
						<!--/Comments-->
						<div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Leave a reply</h3>
							</div>
							<div class="card-body">
								<div>
									<div class="form-group">
										<input type="text" class="form-control" id="name1" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="email" placeholder="Email Address">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea>
									</div>
									<a href="#" class="btn btn-primary">Send Reply</a>
								</div>
							</div>
						</div>
					</div>
					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							{{-- <div class="card-header">
								<h3 class="card-title">Posted By</h3>
							</div> --}}
							<div class="card-body  item-user">
								<div class="profile-pic mb-0">
                                    @if(isset($user->profile_photo_path) && file_exists($user->profile_photo_path))
									    <img src="{{ asset($user->profile_photo_path) }}" class="brround avatar-xxl" alt="user">
                                    @else
									    <img src="{{ asset('front_end_style/assets/images/users/female/17.jpg') }}" class="brround avatar-xxl" alt="user">
                                    @endif
									<div>
										<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">{{ isset($user->name_en) ? $user->name_en : '--------' }}</h4></a>
										<span class="text-muted">Member Since {{ isset($user->created_at) ? $user->created_at->diffForHumans() : '--------' }}</span>
										{{-- <h6 class="mt-2 mb-0"><a href="userprofile.html" class="btn btn-primary btn-sm">See All Ads</a></h6> --}}
									</div>
								</div>
							</div>
							<div class="card-body item-user">
								<h4 class="mb-4">Contact Info</h4>
								<div>
									<h6><span class="font-weight-semibold"><i class="fa fa-map-marker mr-2 mb-2"></i></span><a href="#" class="text-body"> {{ isset($user->address_en) ? $user->address_en : '--------' }}</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body"> {{ isset($user->email) ? $user->email : '--------' }}</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3  mb-2"></i></span><a href="#" class="text-body">{{ isset($user->phone) ? $user->phone : '--------' }}</a></h6>
									{{-- <h6><span class="font-weight-semibold"><i class="fa fa-link mr-3 "></i></span><a href="#" class="text-body">http://spruko.com/</a></h6> --}}
								</div>
								<div class=" item-user-icons mt-4">
									<a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
							<div class="card-footer">
								<div class="text-left btn-list">
									<a href="#" class="btn  btn-secondary"><i class="fa fa-envelope"></i> Chat</a>
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
									<a href="#" class="btn  btn-info"><i class="fa fa-share"></i> Share</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Keywords</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li>
											<a href="#">medical care</a>
										</li>
										<li>
											<a href="#">Treatments</a>
										</li>
										<li>
											<a href="#">medicine</a>
										</li>
										<li>
											<a href="#">health</a>
										</li>
										<li>
											<a href="#">patient</a>
										</li>
										<li>
											<a href="#">healthcare management</a>
										</li>
										<li>
											<a href="#">health care plans</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
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
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Map location</h3>
							</div>
							<div class="card-body">
								<div class="map-header">
									<div class="map-header-layer" id="map2"></div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Search Ads</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" id="search-text" placeholder="What are you looking for?">
								</div>
								<div class="form-group">
									<select name="country" id="select-countries" class="form-control custom-select select2-show-search">
										<option value="1" selected>All Categories</option>
										<option value="2">Childrens Hospitals</option>
										<option value="3">Diagnostic Centers</option>
										<option value="4">Cancer Hospitals</option>
										<option value="5">Gynic Hospitals</option>
										<option value="6">Cardiac Hospitals</option>
										<option value="7">Womens Hospitals</option>
									</select>
								</div>
								<div >
									<a href="#" class="btn  btn-primary">Search</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Latest Posts</h3>
							</div>
							<div class="card-body pb-3">
								<div class="rated-products">
									<ul class="vertical-scroll mb-0">
										<li class="item">
											<div class="media m-0 mt-0 p-5">
												<img alt="img" class="mr-4" src="{{ asset('front_end_style/assets/images/media/20.jpg') }}">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Safewest Hospital</h4><span class="rated-products-ratings"><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></span>
													<div class="">
														<a class="btn-link" href="#">View Details</a>
													</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img alt="img" class="mr-4" src="{{ asset('front_end_style/assets/images/media/21.jpg') }}">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Angelwalk Hospital</h4><span class="rated-products-ratings"><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star-o text-warning"></i></span>
													<div class="">
														<a class="btn-link" href="#">View Details</a>
													</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img alt="img" class=" mr-4" src="{{ asset('front_end_style/assets/images/media/22.jpg') }}">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Hope Hospital</h4><span class="rated-products-ratings"><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star-half-o text-warning"></i></span>
													<div class="">
														<a class="btn-link" href="#">View Details</a>
													</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img alt="img" class=" mr-4" src="{{ asset('front_end_style/assets/images/media/23.jpg') }}">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Highland Hospital</h4><span class="rated-products-ratings"><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star-half-o text-warning"></i> <i class="fa fa-star-o text-warning"></i></span>
													<div class="">
														<a class="btn-link" href="#">View Details</a>
													</div>
												</div>
											</div>
										</li>
										<li class="item mb-0">
											<div class="media mb-0 p-5 mt-0">
												<img alt="img" class=" mr-4" src="{{ asset('front_end_style/assets/images/media/12.jpg') }}">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Newlife Hospital</h4><span class="rated-products-ratings"><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star-o text-warning"></i> <i class="fa fa-star-o text-warning"></i></span>
													<div class="">
														<a class="btn-link" href="#">View Details</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>
		<!--/Section -->

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

@endsection
