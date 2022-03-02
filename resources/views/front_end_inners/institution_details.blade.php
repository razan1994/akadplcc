@extends('front_end_inners.app_front_end', ['title' => 'About Us'])
@section('page_title')
    {{ 'Rushetta | ' . isset($user->name_en) ? $user->name_en : '--------' }}
@endsection

@section('content')
    <!--Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background1 banner-section"
            data-image-src="{{ asset('front_end_style/rushetta_images/header_search.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="mb-1" style="color: #1d1f35;">Find the Nearest Medical Facility</h1>
                        <p>It is a long established fact that a reader will be distracted by the when looking at its
                            layout.</p>
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
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search"
                                                        name="country_id" id="country_id_hospital"
                                                        data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                        @foreach ($public_countries as $country)
                                                            <option value="{{ Str::upper($country->country_key) }}"
                                                                data-id="{{ $country->id }}"
                                                                @if ($country->id == 111) selected @endif>
                                                                {{ $country->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select
                                                        class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search"
                                                        name="region_id" id="region_id_hospital">
                                                        <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_hospital_btn"
                                                        style="cursor: pointer;"
                                                        href="{{ route('front-search-hospital') }}"><i
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
                                                    <select
                                                        class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search"
                                                        name="country_id" id="speciality_id_doctor"
                                                        data-placeholder="Select">
                                                        <option value="Speciality">Speciality</option>
                                                        @foreach ($public_main_specialities as $speciality)
                                                            <option value="{{ $speciality->id }}"
                                                                data-id="{{ $speciality->id }}">
                                                                {{ $speciality->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search"
                                                        name="country_id" id="country_id_doctor" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                        @foreach ($public_countries as $country)
                                                            <option value="{{ Str::upper($country->country_key) }}"
                                                                data-id="{{ $country->id }}"
                                                                @if ($country->id == 111) selected @endif>
                                                                {{ $country->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <select
                                                        class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search"
                                                        name="region_id" id="region_id_doctor">
                                                        <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_doctor_btn"
                                                        style="cursor: pointer;"
                                                        href="{{ route('front-search-doctor') }}"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border"
                                                        placeholder="Search Fitness Center Name" type="text"
                                                        name="search_gym" id="search_gym">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search"
                                                        name="country_id" id="country_id_gym" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                        @foreach ($public_countries as $country)
                                                            <option value="{{ Str::upper($country->country_key) }}"
                                                                data-id="{{ $country->id }}"
                                                                @if ($country->id == 111) selected @endif>
                                                                {{ $country->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select
                                                        class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search"
                                                        name="region_id" id="region_id_gym">
                                                        <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_gym_btn"
                                                        style="cursor: pointer;"
                                                        href="{{ route('front-search-gym') }}"><i
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
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search"
                                                        name="country_id" id="country_id_pharmacy"
                                                        data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                        @foreach ($public_countries as $country)
                                                            <option value="{{ Str::upper($country->country_key) }}"
                                                                data-id="{{ $country->id }}"
                                                                @if ($country->id == 111) selected @endif>
                                                                {{ $country->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select
                                                        class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search"
                                                        name="region_id" id="region_id_pharmacy">
                                                        <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_pharmacy_btn"
                                                        style="cursor: pointer;"
                                                        href="{{ route('front-search-pharmacy') }}"><i
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
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search"
                                                        name="country_id" id="country_id_life_coach"
                                                        data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                        @foreach ($public_countries as $country)
                                                            <option value="{{ Str::upper($country->country_key) }}"
                                                                data-id="{{ $country->id }}"
                                                                @if ($country->id == 111) selected @endif>
                                                                {{ $country->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select
                                                        class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search"
                                                        name="region_id" id="region_id_life_coach">
                                                        <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_life_coach_btn"
                                                        style="cursor: pointer;"
                                                        href="{{ route('front-search-life-coach') }}"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab7">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border"
                                                        placeholder="Search Medical Center Name" type="text"
                                                        name="search_medical_center" id="search_medical_center">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search"
                                                        name="country_id" id="country_id_medical_center"
                                                        data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                        @foreach ($public_countries as $country)
                                                            <option value="{{ Str::upper($country->country_key) }}"
                                                                data-id="{{ $country->id }}"
                                                                @if ($country->id == 111) selected @endif>
                                                                {{ $country->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select
                                                        class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search"
                                                        name="region_id" id="region_id_medical_center">
                                                        <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_medical_center_btn"
                                                        style="cursor: pointer;"
                                                        href="{{ route('front-search-medical-center') }}"><i
                                                            class="fa fa-search"></i> Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab8">
                                        <div class="search-background">
                                            <div class="form row no-gutters">
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 location">
                                                    <input class="form-control border"
                                                        placeholder="Search Radiology Center Name" type="text"
                                                        name="search_radiology_center" id="search_radiology_center">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search"
                                                        name="country_id" id="country_id_radiology_center"
                                                        data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                        @foreach ($public_countries as $country)
                                                            <option value="{{ Str::upper($country->country_key) }}"
                                                                data-id="{{ $country->id }}"
                                                                @if ($country->id == 111) selected @endif>
                                                                {{ $country->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select
                                                        class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search"
                                                        name="region_id" id="region_id_radiology_center">
                                                        <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14"
                                                        id="search_radiology_center_btn" style="cursor: pointer;"
                                                        href="{{ route('front-search-radiology-center') }}"><i
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
                                                    <select class="form-control border-bottom-0 w-100 select2-flag-search"
                                                        name="country_id" id="country_id_lab" data-placeholder="Select">
                                                        <option value="country">Country</option>
                                                        @foreach ($public_countries as $country)
                                                            <option value="{{ Str::upper($country->country_key) }}"
                                                                data-id="{{ $country->id }}"
                                                                @if ($country->id == 111) selected @endif>
                                                                {{ $country->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <select
                                                        class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search"
                                                        name="region_id" id="region_id_lab">
                                                        <option>Region</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-orange fs-14" id="search_lab_btn"
                                                        style="cursor: pointer;"
                                                        href="{{ route('front-search-lab') }}"><i
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
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <!--Classified Description-->
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="item-det mb-4">
                                <a href="#" class="text-dark">
                                    <h3>{{ isset($user->name_en) ? $user->name_en : '--------' }}</h3>
                                </a>
                                <div class=" d-flex">
                                    <ul class="d-flex mb-0">
                                        <li class="mr-5"><a href="#" class="icons"><i
                                                    class="fa fa-hospital-o text-muted mr-1"></i>{{ ucfirst($user_type) }}</a>
                                        </li>
                                        <li class="mr-5"><a href="#" class="icons"><i
                                                    class="icon icon-location-pin text-muted mr-1"></i>{{ isset($user->country) ? $user->country->name_en : '--------' }}
                                                | {{ isset($user->region) ? $user->region->name_en : '--------' }}</a>
                                        </li>
                                        {{-- <li class="mr-5"><a href="#" class="icons"><i class="icon icon-calendar text-muted mr-1"></i> 5 hours ago</a></li> --}}
                                        <li class="mr-5"><a href="#" class="icons"><i
                                                    class="icon icon-eye text-muted mr-1"></i>
                                                {{ isset($user->view_counter) ? $user->view_counter : 0 }}</a></li>
                                    </ul>
                                    <div class="rating-stars d-flex mr-5">
                                        <div class="rating-stars-container mr-2">
                                            <div class="rating-star  user_rate sm" data-val="1"
                                                data-user_type="{{ $user_type }}"
                                                data-user_id="{{ encrypt($user->id) }}"
                                                @if (isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if ($user->reviews->sum('rating_value') / $user->reviews->count() >= 1) style="color:#ffe000;" @endif
                                                @endif>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star  user_rate sm" data-val="2"
                                                data-user_type="{{ $user_type }}"
                                                data-user_id="{{ encrypt($user->id) }}"
                                                @if (isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if ($user->reviews->sum('rating_value') / $user->reviews->count() >= 2) style="color:#ffe000;" @endif
                                                @endif>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star  user_rate sm" data-val="3"
                                                data-user_type="{{ $user_type }}"
                                                data-user_id="{{ encrypt($user->id) }}"
                                                @if (isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if ($user->reviews->sum('rating_value') / $user->reviews->count() >= 3) style="color:#ffe000;" @endif
                                                @endif>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star  user_rate sm" data-val="4"
                                                data-user_type="{{ $user_type }}"
                                                data-user_id="{{ encrypt($user->id) }}"
                                                @if (isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if ($user->reviews->sum('rating_value') / $user->reviews->count() >= 4) style="color:#ffe000;" @endif
                                                @endif>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-star  user_rate sm" data-val="5"
                                                data-user_type="{{ $user_type }}"
                                                data-user_id="{{ encrypt($user->id) }}"
                                                @if (isset($user->reviews) && $user->reviews->sum('rating_value') > 0) @if ($user->reviews->sum('rating_value') / $user->reviews->count() >= 5) style="color:#ffe000;" @endif
                                                @endif>
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
                                        @if (isset($user->images) && $user->images->count() > 0)
                                            @foreach ($user->images as $key => $image)
                                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                    @if (isset($image->image) && file_exists($image->image))
                                                        <img src="{{ asset($image->image) }}" alt="img">
                                                    @else
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/1.jpg') }}"
                                                            alt="img">
                                                    @endif
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="carousel-item active"><img
                                                    src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/1.jpg') }}"
                                                    alt="img"> </div>
                                            <div class="carousel-item"> <img
                                                    src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/2.jpg') }}"
                                                    alt="img"> </div>
                                            <div class="carousel-item"> <img
                                                    src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/3.jpg') }}"
                                                    alt="img"> </div>
                                            <div class="carousel-item"> <img
                                                    src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/4.jpg') }}"
                                                    alt="img"> </div>
                                            <div class="carousel-item"> <img
                                                    src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/5.jpg') }}"
                                                    alt="img"> </div>
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
                                            @if (isset($user->images) && $user->images->count() > 0)
                                                @foreach ($user->images->chunk(5) as $key => $images)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                        @foreach ($images as $index => $image)
                                                            <div data-target="#carousel"
                                                                data-slide-to="{{ $index }}"
                                                                class="thumb">
                                                                @if (isset($image->image) && file_exists($image->image))
                                                                    <img src="{{ asset($image->image) }}" alt="img"
                                                                        style="height: 175px;">
                                                                @else
                                                                    <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/01.jpg') }}"
                                                                        alt="img">
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="carousel-item active">
                                                    <div data-target="#carousel" data-slide-to="0" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/01.jpg') }}"
                                                            alt="img"></div>
                                                    <div data-target="#carousel" data-slide-to="1" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/02.jpg') }}"
                                                            alt="img"></div>
                                                    <div data-target="#carousel" data-slide-to="2" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/03.jpg') }}"
                                                            alt="img"></div>
                                                    <div data-target="#carousel" data-slide-to="3" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/04.jpg') }}"
                                                            alt="img"></div>
                                                    <div data-target="#carousel" data-slide-to="4" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/05.jpg') }}"
                                                            alt="img"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div data-target="#carousel" data-slide-to="0" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/01.jpg') }}"
                                                            alt="img"></div>
                                                    <div data-target="#carousel" data-slide-to="1" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/02.jpg') }}"
                                                            alt="img"></div>
                                                    <div data-target="#carousel" data-slide-to="2" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/03.jpg') }}"
                                                            alt="img"></div>
                                                    <div data-target="#carousel" data-slide-to="3" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/04.jpg') }}"
                                                            alt="img"></div>
                                                    <div data-target="#carousel" data-slide-to="4" class="thumb">
                                                        <img src="{{ asset('front_end_style/assets/images/media/gallery/hosiptals/05.jpg') }}"
                                                            alt="img"></div>
                                                </div>
                                            @endif
                                        </div>
                                        <a class="carousel-control-prev" href="#thumbcarousel" role="button"
                                            data-slide="prev">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#thumbcarousel" role="button"
                                            data-slide="next">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($user_type == 'medical-equipments' || $user_type == 'medicine-company')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Products</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($products as $key => $product)
                                        <div class="col-lg-6 col-md-6 col-xl-4">
                                            <div class="card overflow-hidden" style="height: 100%;">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="#"></a>
                                                        @if (isset($product->image) && file_exists($product->image))
                                                            <img alt="img" class="cover-image"
                                                                src="{{ asset($product->image) }}">
                                                        @else
                                                            <img alt="img" class="cover-image"
                                                                src="{{ asset('front_end_style/assets/images/media/doctors/2.jpg') }}">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card9">
                                                        <a class="text-dark" href="#">
                                                            <h4 class="font-weight-bold mb-1">
                                                                {{ isset($product->name_en) ? $product->name_en : '--------' }}<i
                                                                    class="ion-checkmark-circled  text-success fs-14 ml-1"></i>
                                                            </h4>
                                                        </a>
                                                        <p class="text-muted fs-13 mt-0">{!! \Illuminate\Support\Str::limit(isset($product->description_en) ? str_replace('&nbsp;', ' ', $product->description_en) : '--------', 70, $end = '...') !!}</p>

                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 btn-appointment">
                                                    <div class="btn-group w-100">
                                                        <a href="#"
                                                            class="btn btn-outline-light w-33 p-2 border-top-0 border-right-0 border-bottom-0"><i
                                                                class="fe fe-eye  mr-1"></i>View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-center">
                                    {!! $products->onEachSide(2)->links() !!}
                                </div>
                            </div>
                        </div>
                    @elseif($user_type == 'radiology-centers' || $user_type == 'medical-centers')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Examinations</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-top mb-0">
                                        <thead>
                                            <tr>
                                                <th>Examination Name</th>
                                                <th>Examination cost</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>First</td>
                                                <td>10.00</td>
                                            </tr>
                                            <tr>
                                                <td>Second</td>
                                                <td>15.00</td>
                                            </tr>
                                            <tr>
                                                <td>Third</td>
                                                <td>5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Fourth</td>
                                                <td>20.00</td>
                                            </tr>
                                            <tr>
                                                <td>Fifth</td>
                                                <td>7.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Overview</h3>
                            </div>
                            <div class="card-body">
                                <p>{!! $user->user_description_en !!}</p>
                            </div>
                        </div>
                    @endif

                </div>
                <!--Right Side Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        {{-- <div class="card-header">
								<h3 class="card-title">Posted By</h3>
							</div> --}}
                        <div class="card-body  item-user">
                            <div class="profile-pic mb-0">
                                @if (isset($user->profile_photo_path) && file_exists($user->profile_photo_path))
                                    <img src="{{ asset($user->profile_photo_path) }}" class="brround avatar-xxl"
                                        alt="user">
                                @else
                                    <img src="{{ asset('front_end_style/assets/images/users/female/17.jpg') }}"
                                        class="brround avatar-xxl" alt="user">
                                @endif
                                <div>
                                    <a href="userprofile.html" class="text-dark">
                                        <h4 class="mt-3 mb-1 font-weight-semibold">
                                            {{ isset($user->name_en) ? $user->name_en : '--------' }}</h4>
                                    </a>
                                    <span class="text-muted">Member Since
                                        {{ isset($user->created_at) ? $user->created_at->diffForHumans() : '--------' }}</span>
                                    {{-- <h6 class="mt-2 mb-0"><a href="userprofile.html" class="btn btn-primary btn-sm">See All Ads</a></h6> --}}
                                </div>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-4">Contact Info</h4>
                            <div>
                                <h6><span class="font-weight-semibold"><i class="fa fa-map-marker mr-2 mb-2"></i></span><a
                                        href="#" class="text-body">
                                        {{ isset($user->address_en) ? $user->address_en : '--------' }}</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a
                                        href="#" class="text-body">
                                        {{ isset($user->email) ? $user->email : '--------' }}</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3  mb-2"></i></span><a
                                        href="#"
                                        class="text-body">{{ isset($user->phone) ? $user->phone : '--------' }}</a>
                                </h6>
                                {{-- <h6><span class="font-weight-semibold"><i class="fa fa-link mr-3 "></i></span><a href="#" class="text-body">http://spruko.com/</a></h6> --}}
                            </div>
                            {{-- <div class=" item-user-icons mt-4">
                                <a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                            </div> --}}
                        </div>
                        {{-- <div class="card-footer">
                            <div class="text-left btn-list">
                                <a href="#" class="btn  btn-secondary"><i class="fa fa-envelope"></i> Chat</a>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i
                                        class="fa fa-user"></i> Contact Me</a>
                                <a href="#" class="btn  btn-info"><i class="fa fa-share"></i> Share</a>
                            </div>
                        </div> --}}
                    </div>
                    @if ($user_type == 'medical-equipments' || $user_type == 'medicine-company' || $user_type == 'medical-centers' || $user_type == 'radiology-centers')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Overview</h3>
                            </div>
                            <div class="card-body product-filter-desc">
                                <p>{!! $user->user_description_en !!}</p>
                            </div>
                        </div>
                        @if ($user_type == 'medical-equipments' || $user_type == 'medicine-company')
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Categories</h3>
                                </div>
                                <div class="card-body product-filter-desc">
                                    <div class="product-tags clearfix">
                                        <ul class="list-unstyled mb-0">
                                            @if (isset($user->categories) && $user->categories->count() > 0)
                                                @foreach ($user->categories as $category)
                                                    <li>
                                                        <a href="#">{{ $category->name_en }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif

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
@endsection
