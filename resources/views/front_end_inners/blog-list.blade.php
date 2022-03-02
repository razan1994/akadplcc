@extends('front_end_inners.app_front_end', ['title' => 'Blogs'])
@section('page_title') {{ 'Roshiita | Blogs' }} @endsection
@section('content')
    <!--Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background1 banner-section" data-image-src="{{ asset('front_end_style/rushetta_images/header_search.jpg') }}">
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
                <h4 class="page-title">Blogs List</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs List</li>
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
						<!--Add lists-->
						<div class="row">
							@if(isset($blogs) && $blogs->count() > 0)
                                @foreach ($blogs as $blog)
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="card overflow-hidden">
                                            <div class="row no-gutters blog-list">
                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                    <div class="item7-card-img">
                                                        @if(isset($blog->redirect_301_en))
                                                            <a href="{{ $blog->redirect_301_en }}"></a>
                                                        @else
                                                            <a href="{{ route('blogs-details',$blog->alias_name_en) }}"></a>
                                                        @endif
                                                        @if(isset($blog->image) && file_exists($blog->image))
                                                            <img src="{{ asset($blog->image) }}" alt="{{ isset($blog->alt_text_en) ? $blog->alt_text_en : 'image' }}"
                                                            class="cover-image" title="{{ isset($blog->image_title_text_en) ? $blog->image_title_text_en : $blog->title_en }}">
                                                        @else
                                                            <img src="{{ asset('front_end_style/assets/images/media/12.jpg') }}" alt="img" class="cover-image">
                                                        @endif
                                                        {{-- <div class="item7-card-text">
                                                            <span class="badge badge-success">Hospital</span>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-12 col-md-12">
                                                    <div class="card-body">
                                                        <div class="item7-card-desc d-flex mb-1">
                                                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>{{ date('Y-m-d',strtotime($blog->created_at)) }}</a>
                                                            {{-- <a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a> --}}
                                                            {{-- <div class="ml-auto">
                                                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                                                            </div> --}}
                                                        </div>
                                                        @if(isset($blog->redirect_301_en))
                                                            <a href="{{ $blog->redirect_301_en }}" class="text-dark"><h4 class="font-weight-semibold mb-3">{{ isset($blog->title_en) ? $blog->title_en : '--------' }}</h4></a>
                                                        @else
                                                            <a href="{{ route('blogs-details',$blog->alias_name_en) }}" class="text-dark"><h4 class="font-weight-semibold mb-3">{{ isset($blog->title_en) ? $blog->title_en : '--------' }}</h4></a>
                                                        @endif
                                                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(isset($blog->desc_en) ? str_replace("&nbsp;",' ',$blog->desc_en) : '--------', 150, $end='...') !!}
                                                        </p>
                                                            @if (\Illuminate\Support\Str::length(isset($blog->desc_en) ? str_replace("&nbsp;",' ',$blog->desc_en) : '--------') > 150)
                                                                {{-- <span id="dots">...</span> --}}
                                                                @if(isset($blog->redirect_301_en))
                                                                    <a href="{{ $blog->redirect_301_en }}" class="btn btn-primary btn-sm mt-4">Read More</a>
                                                                @else
                                                                    <a href="{{ route('blogs-details',$blog->alias_name_en) }}" class="btn btn-primary btn-sm mt-4">Read More</a>
                                                                @endif
                                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="row no-gutters blog-list">
                                            <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="item7-card-img">
                                                    <a href="classified.html"></a>
                                                    <img src="{{ asset('front_end_style/assets/images/media/1.jpg') }}" alt="img" class="cover-image">
                                                    <div class="item7-card-text">
                                                        <span class="badge badge-info">Doctor</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-12 col-md-12">
                                                <div class="card-body">
                                                    <div class="item7-card-desc d-flex mb-1">
                                                        <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2019</a>
                                                        <a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a>
                                                        <div class="ml-auto">
                                                            <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-dark"><h4 class="font-weight-semibold mb-4">Certain circumstances the claims</h4></a>
                                                    <p class="mb-1">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                                    </p>
                                                    <a href="#" class="btn btn-primary btn-sm mt-4">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="row no-gutters blog-list">
                                            <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="item7-card-img">
                                                    <a href="classified.html"></a>
                                                    <img src="{{ asset('front_end_style/assets/images/media/3.jpg') }}" alt="img" class="cover-image">
                                                    <div class="item7-card-text">
                                                        <span class="badge badge-success ">FitnessCenter</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-12 col-md-12">
                                                <div class="card-body">
                                                    <div class="item7-card-desc d-flex mb-1">
                                                        <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2019</a>
                                                        <a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a>
                                                        <div class="ml-auto">
                                                            <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-dark"><h4 class="font-weight-semibold mb-4">At vero eos et accusamus iusto</h4></a>
                                                    <p class="mb-1">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                                    </p>
                                                    <a href="#" class="btn btn-primary btn-sm mt-4">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="row no-gutters blog-list">
                                            <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="item7-card-img">
                                                    <a href="classified.html"></a>
                                                    <img src="{{ asset('front_end_style/assets/images/media/28.jpg') }}" alt="img" class="cover-image">
                                                    <div class="item7-card-text">
                                                        <span class="badge badge-warning">Pharmacy</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-12 col-md-12">
                                                <div class="card-body">
                                                    <div class="item7-card-desc d-flex mb-1">
                                                        <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-13-2019</a>
                                                        <a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a>
                                                        <div class="ml-auto">
                                                            <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>7 Comments</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-dark"><h4 class="font-weight-semibold mb-4">  Nam libero tempore, cum soluta</h4> </a>
                                                    <p class="mb-1">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                                    </p>
                                                    <a href="#" class="btn btn-primary btn-sm mt-4">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="row no-gutters blog-list">
                                            <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="item7-card-img">
                                                    <a href="classified.html"></a>
                                                    <img src="{{ asset('front_end_style/assets/images/media/2.jpg') }}" alt="img" class="cover-image">
                                                    <div class="item7-card-text">
                                                        <span class="badge badge-secondary"> Clinic</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-12 col-md-12">
                                                <div class="card-body ">
                                                    <div class="item7-card-desc d-flex mb-1">
                                                        <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-10-2019</a>
                                                        <a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a>
                                                        <div class="ml-auto">
                                                            <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>1 Comments</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-dark"><h4 class="font-weight-semibold mb-4">  Sed ut perspiciatis unde omnis</h4></a>
                                                    <p class="mb-1">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                                    </p>
                                                    <a href="#" class="btn btn-primary btn-sm mt-4">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="row no-gutters blog-list">
                                            <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="item7-card-img">
                                                    <a href="classified.html"></a>
                                                    <img src="{{ asset('front_end_style/assets/images/media/bb1.jpg') }}" alt="img" class="cover-image">
                                                    <div class="item7-card-text">
                                                        <span class="badge badge-danger">Bloodbank</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-12 col-md-12">
                                                <div class="card-body">
                                                    <div class="item7-card-desc d-flex mb-1">
                                                        <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-01-2019</a>
                                                        <a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a>
                                                        <div class="ml-auto">
                                                            <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>5 Comments</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-dark"><h4 class="font-weight-semibold mb-4">Et harum quidem rerum facilis est</h4></a>
                                                    <p class="mb-1">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                                    </p>
                                                    <a href="#" class="btn btn-primary btn-sm mt-4">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
						</div>
						<div class="center-block text-center">
							<ul class="pagination mb-5 mb-lg-0">
								<li class="page-item page-prev disabled">
									<a class="page-link" href="#" tabindex="-1">Prev</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item page-next">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</div>
						<!--/Add lists-->
					</div>
					{{-- <!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Categories</h3>
							</div>
							<div class="card-body p-0">
								<div class="list-catergory">
									<div class="item-list">
										<ul class="list-group mb-0">
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-hospital-o bg-primary text-primary"></i> Hospitals<span class="badgetext badge badge-pill badge-light mb-0 mt-1 mt-1">14</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-user-md bg-info text-info"></i> Doctors<span class="badgetext badge badge-pill badge-light mb-0 mt-1">25</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-building-o bg-warning text-warning"></i> FitnessCenters
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">74</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-medkit bg-danger text-danger"></i> Pharmacies
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">18</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-stethoscope bg-blue text-blue"></i> Clinics
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">32</span>
												</a>
											</li>
											<li class="list-group-item border-bottom-0">
												<a href="#" class="text-dark">
													<i class="fa fa-heartbeat  bg-pink text-pink"></i> Bloodbanks
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">08</span>
												</a>
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
										<li><a href="#">Treatment</a></li>
										<li><a href="#">Medicine</a></li>
										<li><a href="#">patient</a></li>
										<li><a href="#">Health</a></li>
										<li><a href="#">Medical Care</a></li>
										<li><a href="#">Health Care Manegement</a></li>
										<li><a href="#">Health Care Plans</a></li>
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
												<img src="{{ asset('front_end_style/assets/images/users/female/18.jpg') }}" alt="image" class="avatar brround  mr-2">
												<a href="#" class="time-title p-0 leading-Automatic mt-2">Boris	Nash <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 16</span></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 36</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="{{ asset('front_end_style/assets/images/users/female/10.jpg') }}" alt="image" class="avatar brround  mr-2">
												<a href="#" class="time-title p-0 leading-Automatic mt-2">Lorean Mccants <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 43</span></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 23</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="{{ asset('front_end_style/assets/images/users/male/18.jpg') }}" alt="image" class="avatar brround  mr-2">
												<a href="#" class="time-title p-0 leading-Automatic mt-2">Dewitt Hennessey <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 34</span></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 12</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="{{ asset('front_end_style/assets/images/users/male/8.jpg') }}" alt="image" class="avatar brround  mr-2">
												<a href="#" class="time-title p-0 leading-Automatic mt-2">Archie Overturf <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 12</span></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="{{ asset('front_end_style/assets/images/users/female/21.jpg') }}" alt="image" class="avatar brround  mr-2">
												<a href="#" class="time-title p-0 leading-Automatic mt-2">Barbra Flegle <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ml-auto">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 21</span></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div><!--/Right Side Content--> --}}
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
