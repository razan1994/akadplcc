@extends('front_end_inners.app_front_end', ['title' => 'Doctor Details'])
@section('page_title')
    {{ 'Rushetta | ' . isset($user->name_en) ? $user->name_en : '--------' }}
@endsection

@section('content')
    <!--Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background1 banner-section collapse" id="search_collapse"
            data-image-src="{{ asset('front_end_style/rushetta_images/header_search.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="mb-1" style="color: #1d1f35;">Find the Nearest Medical Facility</h1>

                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="item-search-tabs">
                                <div class="item-search-menu">
                                    <ul class="nav">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tab2">Doctors</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab4">Pharmacies</a>
                                        </li>
                                        <li class="">
                                            <a class="" data-toggle="tab" href="#tab1">Hospitals</a>
                                        </li>

                                        <li>
                                            <a data-toggle="tab" href="#tab3">Fitnes Centers</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab5">Life Coaches</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab1">Medical Equipment</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab7">Medical Centers</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab8">Radiology Centers</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab9">Labs</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content index-search-select">
                                    <div class="tab-pane" id="tab1">
                                        <div class="search-background">
                                                <div class="form row no-gutters">
                                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                            <input class="form-control border" placeholder="Search Hospital Name"
                                                                type="text" name="search_hospital" id="search_hospital">
                                                        </div>
                                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                            <select class="form-control border-bottom-0 w-100 select2-flag-search" name="country_id" id="country_id_hospital" data-placeholder="Select">
                                                                <option value="country">Country</option>
                                                                    @foreach ($public_countries as $country)
                                                                        <option value="{{ Str::upper($country->country_key) }}" data-id="{{ $country->id }}" @if($country->id == 111) selected @endif>{{ $country->name_en }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                            <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="region_id" id="region_id_hospital">
                                                                    <option>Region</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                            <a class="btn btn-block btn-orange fs-14" id="search_hospital_btn" style="cursor: pointer;" href="{{ route('front-search-hospital') }}"><i
                                                                    class="fa fa-search"></i> Search</a>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="tab2">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border" placeholder="Search Doctor Name"
                                                        type="text" name="search_doctor" id="search_doctor">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="country_id" id="speciality_id_doctor" data-placeholder="Select">
                                                        <option value="Speciality">Speciality</option>
                                                        @foreach ($public_main_specialities as $speciality)
                                                            <option value="{{ $speciality->id }}" data-id="{{ $speciality->id }}">{{ $speciality->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search" name="country_id" id="country_id_doctor" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                        @foreach ($public_countries as $country)
                                                            <option value="{{ Str::upper($country->country_key) }}" data-id="{{ $country->id }}" @if($country->id == 111) selected @endif>{{ $country->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="region_id" id="region_id_doctor">
                                                        <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_doctor_btn" style="cursor: pointer;" href="{{ route('front-search-doctor') }}"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border" placeholder="Search Fitness Center Name"
                                                        type="text" name="search_gym" id="search_gym">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search" name="country_id" id="country_id_gym" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                            @foreach ($public_countries as $country)
                                                                <option value="{{ Str::upper($country->country_key) }}" data-id="{{ $country->id }}" @if($country->id == 111) selected @endif>{{ $country->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="region_id" id="region_id_gym">
                                                            <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_gym_btn" style="cursor: pointer;" href="{{ route('front-search-gym') }}"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border" placeholder="Search Pharmacy Name"
                                                        type="text" name="search_pharmacy" id="search_pharmacy">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search" name="country_id" id="country_id_pharmacy" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                            @foreach ($public_countries as $country)
                                                                <option value="{{ Str::upper($country->country_key) }}" data-id="{{ $country->id }}" @if($country->id == 111) selected @endif>{{ $country->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="region_id" id="region_id_pharmacy">
                                                            <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_pharmacy_btn" style="cursor: pointer;" href="{{ route('front-search-pharmacy') }}"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border" placeholder="Search Life Coach Name"
                                                        type="text" name="search_life_coach" id="search_life_coach">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search" name="country_id" id="country_id_life_coach" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                            @foreach ($public_countries as $country)
                                                                <option value="{{ Str::upper($country->country_key) }}" data-id="{{ $country->id }}" @if($country->id == 111) selected @endif>{{ $country->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="region_id" id="region_id_life_coach">
                                                            <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_life_coach_btn" style="cursor: pointer;" href="{{ route('front-search-life-coach') }}"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab7">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border" placeholder="Search Medical Center Name"
                                                        type="text" name="search_medical_center" id="search_medical_center">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search" name="country_id" id="country_id_medical_center" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                            @foreach ($public_countries as $country)
                                                                <option value="{{ Str::upper($country->country_key) }}" data-id="{{ $country->id }}" @if($country->id == 111) selected @endif>{{ $country->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="region_id" id="region_id_medical_center">
                                                            <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_medical_center_btn" style="cursor: pointer;" href="{{ route('front-search-medical-center') }}"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab8">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border" placeholder="Search Radiology Center Name"
                                                        type="text" name="search_radiology_center" id="search_radiology_center">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search" name="country_id" id="country_id_radiology_center" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                            @foreach ($public_countries as $country)
                                                                <option value="{{ Str::upper($country->country_key) }}" data-id="{{ $country->id }}" @if($country->id == 111) selected @endif>{{ $country->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="region_id" id="region_id_radiology_center">
                                                            <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_radiology_center_btn" style="cursor: pointer;" href="{{ route('front-search-radiology-center') }}"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab9">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border" placeholder="Search Lab Name"
                                                        type="text" name="search_lab" id="search_lab">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search" name="country_id" id="country_id_lab" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                            @foreach ($public_countries as $country)
                                                                <option value="{{ Str::upper($country->country_key) }}" data-id="{{ $country->id }}" @if($country->id == 111) selected @endif>{{ $country->name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="region_id" id="region_id_lab">
                                                            <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_lab_btn" style="cursor: pointer;" href="{{ route('front-search-lab') }}"><i
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
                                    <div class="rating-stars-container mr-2">
                                        <div class="rating-star  user_rate sm " data-val="1" data-user_type="{{ $user_type }}" data-user_id="{{ encrypt($user->id) }}"
                                            @if(isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if(($user->reviews->sum('rating_value') / $user->reviews->count()) >= 1) style="color:#ffe000;" @endif @endif> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star  user_rate sm " data-val="2" data-user_type="{{ $user_type }}" data-user_id="{{ encrypt($user->id) }}"
                                            @if(isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if(($user->reviews->sum('rating_value') / $user->reviews->count()) >= 2) style="color:#ffe000;" @endif @endif> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star  user_rate sm " data-val="3" data-user_type="{{ $user_type }}" data-user_id="{{ encrypt($user->id) }}"
                                            @if(isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if(($user->reviews->sum('rating_value') / $user->reviews->count()) >= 3) style="color:#ffe000;" @endif @endif> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star  user_rate sm " data-val="4" data-user_type="{{ $user_type }}" data-user_id="{{ encrypt($user->id) }}"
                                            @if(isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if(($user->reviews->sum('rating_value') / $user->reviews->count()) >= 4) style="color:#ffe000;" @endif @endif> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star  user_rate sm" data-val="5" data-user_type="{{ $user_type }}" data-user_id="{{ encrypt($user->id) }}"
                                            @if(isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if(($user->reviews->sum('rating_value') / $user->reviews->count()) >= 5) style="color:#ffe000;" @endif @endif> <i class="fa fa-star"></i> </div>
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
                            <h4 class="mb-4">{{ ucfirst($user_type) }} Information</h4>
                            <div>
                                <h6><span class="font-weight-semibold"><i class="fa fa-map-marker mr-2 mb-2"></i></span><a
                                        href="#" class="text-body">
                                        {{ isset($user->country->name_en) ? $user->country->name_en : '--------' }} /
                                        {{ isset($user->region->name_en) ? $user->region->name_en : '--------' }}</a>
                                </h6>
                                @if (isset($languages) && count($languages) > 0)
                                <h4><span class="font-weight-semibold"><i class="fa fa-book mr-3 mb-2"></i></span><a
                                    href="#" class="text-body">Languages :</a></h4>
                                <div class="card-body product-filter-desc" style="padding: 0 !important;">
                                    <div class="product-tags clearfix">
                                        <ul class="list-unstyled mb-0">
                                            @foreach ($languages as $lang)
                                            <li>
                                                <a>{{ $lang }}</a>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                @endif
                                @if(isset($user->visit_fees) && $user->visit_fees != null)
                                    <h6><span class="font-weight-semibold"><i class="fa fa-money mr-2 mb-2"></i></span><a
                                            href="#" class="text-body">
                                            {{ $user->visit_fees }}</a>
                                    </h6>
                                @endif
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
                                        {{-- <li><a href="#tab-6" data-toggle="tab" class="">Education</a></li> --}}
                                        @if ($user_type == 'doctors')
                                        <li><a href="#tab-7" data-toggle="tab" class="">Consultation Fees</a>
                                        </li>
                                        @endif
                                        {{-- <li><a href="#tab-8" data-toggle="tab" class="">Reviews</a></li> --}}
                                        @if(Auth::guard('patient')->check())
                                        <li><a href="#tab-9" data-toggle="tab" class="">Book Appointment</a></li>
                                        @elseif(!Auth::check())
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
                                        <h3 class="card-title mb-3">Address</h3>
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12">
                                                <ul class="list-unstyled widget-spec mb-0">
                                                        <li class="">
                                                            <a href="#" class="text-dark"><i
                                                                    class="fa fa fa-graduation-cap mr-2"></i>{{ $user->country->name_en }}
                                                                | {{ $user->country->name_ar }} | {{ $user->address_en }}</a>
                                                        </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="tab-pane userprof-tab" id="tab-6">
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
                                </div> --}}
                                @if ($user_type == 'doctors')
                                <div class="tab-pane userprof-tab" id="tab-7">
                                    <div class=" p-5">
                                        <div class="list-id">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered border-top mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Consultant Name</th>
                                                                    <th>Fees</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if(isset($user->consultants) && $user->consultants->count() > 0)
                                                                @foreach ($user->consultants as $consultant)
                                                                <tr>
                                                                    <td>{{ isset($consultant->name_en) ? $consultant->name_en : '--------' }}</td>
                                                                    <td>{{ isset($consultant->consultant_fees) ? $consultant->consultant_fees : '--------' }}</td>
                                                                </tr>
                                                                @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="2"><h3 class="text-danger">No Consultants Added</h3></td>
                                                                </tr>
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

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
                                                    <button type="submit" class="btn  btn-primary">Book Now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @elseif(!Auth::check())
                                <div class="tab-pane" id="tab-9">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Book a Visit</h3>
                                        </div>
                                        <div class="tab-pane" id="tab-9">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Book a Visit</h3>
                                                </div>
                                                <form action="{{ route('book-appointment-guest') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ encrypt($user->id) }}">
                                                    <input type="hidden" name="user_type" value="{{ $user_type }}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
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
                                                            <button type="submit" class="btn  btn-primary">Book Now</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="card-footer bg-white br-bl-2 br-br-2 border-left border-right border-bottom">
                                <div class="btn-list">
                                    <a class="btn btn-success icons book_appointment_cls" data-type="{{ encrypt($user_type) }}" data-id="{{ encrypt($user->id) }}" style="cursor: pointer">
                                        <i class="icon icon-note mr-1"></i> Book A Visit</a>
                                    {{-- <a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Share</a> --}}
                                    <a href="#" class="btn btn-danger icons" data-toggle="modal" data-target="#report"><i
                                            class="icon icon-exclamation mr-1"></i> Report Abuse</a>
                                    {{-- <a href="#" class="btn btn-primary icons"><i class="icon icon-heart  mr-1"></i>
                                        678</a> --}}
                                    {{-- <a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  mr-1"></i>
                                        Print</a> --}}
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

    {{-- <!-- Message Modal -->
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
    <!-- /Message Modal --> --}}

    {{-- <!--Comment Modal -->
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
    <!--/Comment Modal --> --}}

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




@endsection
