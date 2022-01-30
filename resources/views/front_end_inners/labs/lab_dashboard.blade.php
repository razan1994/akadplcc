@extends('front_end_inners.app_front_end', ['title' => 'About Us'])

@section('content')

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">My Dashboard</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">My Dashboard</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Breadcrumb-->

		<!-- Section -->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">My Dashboard</h3>
							</div>
							<div class="card-body text-center item-user">
								<div class="profile-pic">
									<div class="profile-pic-img">
										<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
                                        @if(isset($auth->profile_photo_path) && file_exists($auth->profile_photo_path))
	    									<img src="{{ asset($auth->profile_photo_path) }}" class="brround" alt="user">
										@else
                                            <img src="{{ asset('front_end_style/assets/images/users/female/17.jpg') }}" class="brround" alt="user">
                                        @endif
									</div>
									<a href="{{ route('lab.lab-dashboard') }}" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">{{ $auth->name_en }}</h4></a>
								</div>
							</div>
							<aside class="app-sidebar doc-sidebar my-dash">
								<div class="app-sidebar__user clearfix">
									<ul class="side-menu">
										<li data-toggle="tab" href="#profiletab" @if(isset($active))@if($active == "labUpdateProfile" || $active == null) class="active" @endif @else class="active" @endif style="cursor: pointer">
											<a class="side-menu__item"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Edit Profile</span></a>
										</li>
										<li data-toggle="tab" href="#weekPlantab" @if(isset($active))@if($active == "labWeekPlan") class="active" @endif @endif style="cursor: pointer">
											<a class="side-menu__item"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Week Plan</span></a>
										</li>
                                        <li data-toggle="tab" href="#gallery" @if(isset($active))@if($active == "gallery") class="active" @endif @endif style="cursor: pointer">
											<a class="side-menu__item"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Gallery</span></a>
										</li>
										<li>
											<a href="{{ route('front-logout') }}" class="side-menu__item" ><i class="icon icon-power"></i><span class="side-menu__label ml-2">Logout</span></a>
										</li>
									</ul>
								</div>
							</aside>
						</div>
					</div>
                    <div class="tab-content col-xl-9 col-lg-12 col-md-12">
                        <div id="profiletab" class="tab-pane fade @if(isset($active))@if($active == "labUpdateProfile" || $active == null) active in @endif @else active in @endif">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Profile</h3>
                                    </div>
                                    <form action="{{ route('lab.lab-update-profile',$auth->id) }}" method="POST" enctype="multipart/form-data" id="createForm">
                                        @csrf
                                        <input type="hidden" name="" id="region_id_old_value" value="{{ $auth->region_id }}">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Name AR <span class="text-danger">* @error('name_ar'){{ $message }}@enderror</span></label>
                                                        <input type="text" name="name_ar" class="form-control" placeholder="lab Name In Arabic" value="{{ $auth->name_ar }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Name EN <span class="text-danger">* @error('name_en'){{ $message }}@enderror</span></label>
                                                        <input type="text" name="name_en" class="form-control" placeholder="lab Name In English" value="{{ $auth->name_en }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Email address <span class="text-danger">* @error('email'){{ $message }}@enderror</span></label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $auth->email }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Phone Number <span class="text-danger">* @error('phone'){{ $message }}@enderror</span></label>
                                                        <input type="number" name="phone" class="form-control" placeholder="Number" value="{{ $auth->phone }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Password <span class="text-danger"> @error('password'){{ $message }}@enderror</span></label>
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Confirm Password <span class="text-danger"> @error('password'){{ $message }}@enderror</span></label>
                                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Country <span class="text-danger"> @error('country_id'){{ $message }}@enderror</span></label>
                                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" name="country_id" id="country_id" data-placeholder="Select">
                                                                <option value="">--Select--</option>
                                                                @foreach ($public_countries as $country)
                                                                    <option value="{{ $country->id }}" @if($auth->country_id == $country->id) selected @endif>{{ $country->name_en }}</option>
                                                                @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Region <span class="text-danger"> @error('region_id'){{ $message }}@enderror</span></label>
                                                        <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" name="region_id" id="region_id" data-placeholder="Select">
                                                            <optgroup label="Categories">
                                                                <option>--Select--</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Address AR <span class="text-danger"> @error('address_ar'){{ $message }}@enderror</span></label>
                                                        <input type="text" name="address_ar" class="form-control" placeholder="Address In Arabic" value="{{ $auth->address_ar }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Address EN <span class="text-danger"> @error('address_en'){{ $message }}@enderror</span></label>
                                                        <input type="text" name="address_en" class="form-control" placeholder="Address In English" value="{{ $auth->address_en }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Overview AR <span class="text-danger"> @error('overview_ar'){{ $message }}@enderror</span></label>
                                                        <textarea rows="5" class="form-control" name="overview_ar" placeholder="Enter Overviw In Arabic">{!! $auth->user_description_en !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Overview EN <span class="text-danger"> @error('overview_en'){{ $message }}@enderror</span></label>
                                                        <textarea rows="5" class="form-control" name="overview_en" placeholder="Enter Overviw In English">{!! $auth->user_description_ar !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0">
                                                        <label class="form-label">Upload Image <span class="text-danger"> @error('profile_photo_path'){{ $message }}@enderror</span></label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="profile_photo_path">
                                                            <label class="custom-file-label">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-secondary">Updated Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="weekPlantab" class="tab-pane fade @if(isset($active))@if($active == "labWeekPlan") active in @endif @endif">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Week Plan</h3>
                                    </div>
                                    <form action="{{ route('lab.update-lab-week-plan',$auth->id) }}" method="POST" enctype="multipart/form-data" id="createForm">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            @if(isset($auth->weekPlan))
                                                                @if(isset($auth->weekPlan->active_days) && in_array('saterday',explode(',',$auth->weekPlan->active_days)))
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="saterday" id="saterday" checked>
                                                                @else
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="saterday" id="saterday">
                                                                @endif
                                                            @else
                                                                <input class="form-check-input" name="active_days[]" type="checkbox" value="saterday" id="saterday">
                                                            @endif
                                                            <label class="form-check-label" style="cursor:pointer;" for="saterday">
                                                                Saterday <span style="color: red">@error('active_days') {{ $message }} @enderror</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <br>
                                                        <span style="color: red">@error('every_saterday') {{ $message }} @enderror</span>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From : <span style="color: red">@error('saterday_from') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="saterday_from"
                                                                    value="{{ isset($auth->weekPlan->saterday_from) ? $auth->weekPlan->saterday_from : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="saterday_from"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To : <span style="color: red">@error('saterday_to') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="saterday_to"
                                                                    value="{{ isset($auth->weekPlan->saterday_to) ? $auth->weekPlan->saterday_to : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="saterday_to"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every_saterday" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                @if(isset($auth->weekPlan))
                                                                    <option value="{{ $i }}" @if(isset($auth->weekPlan->every_saterday) && $auth->weekPlan->every_saterday == $i) selected @endif >{{ $i }} Minutes</option>
                                                                @else
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endif
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            @if(isset($auth->weekPlan))
                                                                @if(isset($auth->weekPlan->active_days) && in_array('sunday',explode(',',$auth->weekPlan->active_days)))
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="sunday" id="sunday" checked>
                                                                @else
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="sunday" id="sunday">
                                                                @endif
                                                            @else
                                                                <input class="form-check-input" name="active_days[]" type="checkbox" value="sunday" id="sunday">
                                                            @endif
                                                            <label class="form-check-label" style="cursor:pointer;" for="sunday">
                                                                Sunday <span style="color: red">@error('active_days') {{ $message }} @enderror</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <br>
                                                        <span style="color: red">@error('every_sunday') {{ $message }} @enderror</span>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From : <span style="color: red">@error('sunday_from') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="sunday_from"
                                                                    value="{{ isset($auth->weekPlan->sunday_from) ? $auth->weekPlan->sunday_from : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="sunday_from"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To : <span style="color: red">@error('sunday_to') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="sunday_to"
                                                                    value="{{ isset($auth->weekPlan->sunday_to) ? $auth->weekPlan->sunday_to : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="sunday_to"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every_sunday" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                @if(isset($auth->weekPlan))
                                                                    <option value="{{ $i }}" @if(isset($auth->weekPlan->every_sunday) && $auth->weekPlan->every_sunday == $i) selected @endif >{{ $i }} Minutes</option>
                                                                @else
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endif
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            @if(isset($auth->weekPlan))
                                                                @if(isset($auth->weekPlan->active_days) && in_array('monday',explode(',',$auth->weekPlan->active_days)))
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="monday" id="monday" checked>
                                                                @else
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="monday" id="monday">
                                                                @endif
                                                            @else
                                                                <input class="form-check-input" name="active_days[]" type="checkbox" value="monday" id="monday">
                                                            @endif
                                                            <label class="form-check-label" style="cursor:pointer;" for="monday">
                                                                Monday <span style="color: red">@error('active_days') {{ $message }} @enderror</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <br>
                                                        <span style="color: red">@error('every_monday') {{ $message }} @enderror</span>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From : <span style="color: red">@error('monday_from') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="monday_from"
                                                                    value="{{ isset($auth->weekPlan->monday_from) ? $auth->weekPlan->monday_from : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="monday_from"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To : <span style="color: red">@error('monday_to') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="monday_to"
                                                                    value="{{ isset($auth->weekPlan->monday_to) ? $auth->weekPlan->monday_to : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="monday_to"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every_monday" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                @if(isset($auth->weekPlan))
                                                                    <option value="{{ $i }}" @if(isset($auth->weekPlan->every_monday) && $auth->weekPlan->every_monday == $i) selected @endif >{{ $i }} Minutes</option>
                                                                @else
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endif
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            @if(isset($auth->weekPlan))
                                                                @if(isset($auth->weekPlan->active_days) && in_array('tuseday',explode(',',$auth->weekPlan->active_days)))
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="tuseday" id="tuseday" checked>
                                                                @else
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="tuseday" id="tuseday">
                                                                @endif
                                                            @else
                                                                <input class="form-check-input" name="active_days[]" type="checkbox" value="tuseday" id="tuseday">
                                                            @endif
                                                            <label class="form-check-label" style="cursor:pointer;" for="tuseday">
                                                                Tuseday <span style="color: red">@error('active_days') {{ $message }} @enderror</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <br>
                                                        <span style="color: red">@error('every_tuseday') {{ $message }} @enderror</span>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From : <span style="color: red">@error('tuseday_from') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="tuseday_from"
                                                                    value="{{ isset($auth->weekPlan->tuseday_from) ? $auth->weekPlan->tuseday_from : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="tuseday_from"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To : <span style="color: red">@error('tuseday_to') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="tuseday_to"
                                                                    value="{{ isset($auth->weekPlan->tuseday_to) ? $auth->weekPlan->tuseday_to : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="tuseday_to"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every_tuseday" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                @if(isset($auth->weekPlan))
                                                                    <option value="{{ $i }}" @if(isset($auth->weekPlan->every_tuseday) && $auth->weekPlan->every_tuseday == $i) selected @endif >{{ $i }} Minutes</option>
                                                                @else
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endif
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            @if(isset($auth->weekPlan))
                                                                @if(isset($auth->weekPlan->active_days) && in_array('wednsday',explode(',',$auth->weekPlan->active_days)))
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="wednsday" id="wednsday" checked>
                                                                @else
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="wednsday" id="wednsday">
                                                                @endif
                                                            @else
                                                                <input class="form-check-input" name="active_days[]" type="checkbox" value="wednsday" id="wednsday">
                                                            @endif
                                                            <label class="form-check-label" style="cursor:pointer;" for="wednsday">
                                                                Wednsday <span style="color: red">@error('active_days') {{ $message }} @enderror</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <br>
                                                        <span style="color: red">@error('every_wednsday') {{ $message }} @enderror</span>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From : <span style="color: red">@error('wednsday_from') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="wednsday_from"
                                                                    value="{{ isset($auth->weekPlan->wednsday_from) ? $auth->weekPlan->wednsday_from : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="wednsday_from"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To : <span style="color: red">@error('wednsday_to') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="wednsday_to"
                                                                    value="{{ isset($auth->weekPlan->wednsday_to) ? $auth->weekPlan->wednsday_to : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="wednsday_to"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every_wednsday" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                @if(isset($auth->weekPlan))
                                                                    <option value="{{ $i }}" @if(isset($auth->weekPlan->every_wednsday) && $auth->weekPlan->every_wednsday == $i) selected @endif >{{ $i }} Minutes</option>
                                                                @else
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endif
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            @if(isset($auth->weekPlan))
                                                                @if(isset($auth->weekPlan->active_days) && in_array('thursday',explode(',',$auth->weekPlan->active_days)))
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="thursday" id="thursday" checked>
                                                                @else
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="thursday" id="thursday">
                                                                @endif
                                                            @else
                                                                <input class="form-check-input" name="active_days[]" type="checkbox" value="thursday" id="thursday">
                                                            @endif
                                                            <label class="form-check-label" style="cursor:pointer;" for="thursday">
                                                                Thursday <span style="color: red">@error('active_days') {{ $message }} @enderror</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <br>
                                                        <span style="color: red">@error('every_thursday') {{ $message }} @enderror</span>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From : <span style="color: red">@error('thursday_from') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="thursday_from"
                                                                    value="{{ isset($auth->weekPlan->thursday_from) ? $auth->weekPlan->thursday_from : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="thursday_from"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To : <span style="color: red">@error('thursday_to') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="thursday_to"
                                                                    value="{{ isset($auth->weekPlan->thursday_to) ? $auth->weekPlan->thursday_to : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="thursday_to"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every_thursday" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                @if(isset($auth->weekPlan))
                                                                    <option value="{{ $i }}" @if(isset($auth->weekPlan->every_thursday) && $auth->weekPlan->every_thursday == $i) selected @endif >{{ $i }} Minutes</option>
                                                                @else
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endif
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            @if(isset($auth->weekPlan))
                                                                @if(isset($auth->weekPlan->active_days) && in_array('friday',explode(',',$auth->weekPlan->active_days)))
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="friday" id="friday" checked>
                                                                @else
                                                                    <input class="form-check-input" name="active_days[]" type="checkbox" value="friday" id="friday">
                                                                @endif
                                                            @else
                                                                <input class="form-check-input" name="active_days[]" type="checkbox" value="friday" id="friday">
                                                            @endif
                                                            <label class="form-check-label" style="cursor:pointer;" for="friday">
                                                                Friday <span style="color: red">@error('active_days') {{ $message }} @enderror</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <br>
                                                        <span style="color: red">@error('every_friday') {{ $message }} @enderror</span>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From : <span style="color: red">@error('friday_from') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="friday_from"
                                                                    value="{{ isset($auth->weekPlan->friday_from) ? $auth->weekPlan->friday_from : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="friday_from"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To : <span style="color: red">@error('friday_to') {{ $message }} @enderror</span></label>
                                                            @if(isset($auth->weekPlan))
                                                                <input class="form-control" type="time" id="appt" name="friday_to"
                                                                    value="{{ isset($auth->weekPlan->friday_to) ? $auth->weekPlan->friday_to : '08:00'}}" required>
                                                            @else
                                                                <input class="form-control" type="time" id="appt" name="friday_to"
                                                                     value="08:00" required>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every_friday" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                @if(isset($auth->weekPlan))
                                                                    <option value="{{ $i }}" @if(isset($auth->weekPlan->every_friday) && $auth->weekPlan->every_friday == $i) selected @endif >{{ $i }} Minutes</option>
                                                                @else
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endif
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-secondary">Updated Plan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="gallery" class="tab-pane fade @if(isset($active))@if($active == "gallery") active in @endif @endif">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Gallery</h3>
                                    </div>
                                    <form action="{{ route('lab.lab-store-images') }}" method="POST" enctype="multipart/form-data" id="createForm">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Images <label for="" class="text-danger">* @error('image') {{ $message }} @enderror</label></label>
                                                        <input type="file" name="image[]" class="form-control" placeholder="Images" multiple>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                        <div class="card-footer">
                                            @if(isset($auth->images) && $auth->images->count() > 0)
                                                <div class="col-md-12 row">
                                                    @foreach ($auth->images as $image)
                                                        @if(isset($image->image) && file_exists($image->image))
                                                            <div class="col-md-4" style="height: 250px;padding:2%">
                                                                <img src="{{ asset($image->image) }}" style="width: 100%;height: 90%;" alt="">
                                                                    <a href="{{ route('lab.lab-delete-image',$image->id) }}" class="btn btn-danger btn-md" style="width: 100%"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @else
                                            <h3 class="text-danger">No Images</h3>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.min.js"></script>

        <script>


            $(document).ready(function() {
                    setTimeout(() => {
                        getRegions();
                    }, 500);


                $(document.body).on("change","#country_id",function(){
                    // console.log('foooooooooooo');
                    getRegions();
                });

            });



            function getRegions() {
                var formData = new FormData($('#createForm')[0]);
                $.ajax({
                    type: 'post',
                    url: "{{ route('frontGetRegions') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(data) {
                        if (data.status == true) {
                            var selectRegions = '<option value="">Choose the region ... </option>';
                            var name ="Nothing Selected..";
                            for (var key in data.regions) {
                                // skip loop if the property is from prototype
                                if (!data.regions.hasOwnProperty(key)) continue;

                                var obj = data.regions[key];
                                // alert(obj.id);
                                for (var prop in obj) {
                                    // skip loop if the property is from prototype
                                    if (!obj.hasOwnProperty(prop)) continue;

                                    // your code
                                    var region_id_old_value = $("#region_id_old_value").val();

                                    if (region_id_old_value) {
                                        if (obj.id == region_id_old_value) {
                                            name = obj.name_ar;
                                            selectRegions += '<option value="' + obj.id + '" selected>' + obj.name_ar + '</option>';
                                        } else {
                                            selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                                                '</option>';
                                        }
                                    } else {
                                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                                            '</option>';
                                    }
                                    break;
                                }
                            }
                            $('#region_id').html(selectRegions);

                            // $('.selectpicker').selectpicker('refresh');
                            // $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                            // // alert(name);
                            // $selected_value.text(name);
                        }

                    },
                    error: function(reject) {
                        var response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function(key, val) {
                            $("#" + key + "_error").text(val[0]);
                        });
                    }
                });
            }
        </script>

@endsection
