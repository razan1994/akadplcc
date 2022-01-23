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
									<a href="{{ route('doctor.doctor-dashboard') }}" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">{{ $auth->name_en }}</h4></a>
								</div>
							</div>
							<aside class="app-sidebar doc-sidebar my-dash">
								<div class="app-sidebar__user clearfix">
									<ul class="side-menu">
										<li data-toggle="tab" href="#tab1" class="active" style="cursor: pointer">
											<a class="side-menu__item"><i class="icon icon-user"></i><span class="side-menu__label ml-2">Edit Profile</span></a>
										</li>
										<li data-toggle="tab" href="#tab2" style="cursor: pointer">
											<a class="side-menu__item"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Week Plan</span></a>
										</li>

                                        <li data-toggle="tab" href="#tab3" style="cursor: pointer">
											<a class="side-menu__item"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Certificates</span></a>
										</li>

										<li data-toggle="tab" href="#tab4" style="cursor: pointer">
											<a class="side-menu__item" ><i class="icon icon-power"></i><span class="side-menu__label ml-2">Logout</span></a>
										</li>
									</ul>
								</div>
							</aside>
						</div>
					</div>
                    <div class="tab-content col-xl-9 col-lg-12 col-md-12">
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Profile</h3>
                                    </div>
                                    <form action="" id="createForm">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Speciality</label>
                                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" name="speciality_id" id="speciality_id" data-placeholder="Select">
                                                                <option>--Select--</option>
                                                                @foreach ($public_specialities as $speciality)
                                                                    <option value="{{ $speciality->id }}">{{ $speciality->name_en }}</option>
                                                                @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Name AR</label>
                                                        <input type="text" name="name_ar" class="form-control" placeholder="Doctor Name In Arabic">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Name EN</label>
                                                        <input type="text" name="name_en" class="form-control" placeholder="Doctor Name In English">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Email address</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Phone Number</label>
                                                        <input type="number" name="phone" class="form-control" placeholder="Number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Gender</label>
                                                    <div class="radio-group">
                                                        <div class="row col-md-12">
                                                        <label for="male" style="width: 25%;cursor:pointer">Male
                                                            <input type="radio" name="gender" value="1" id="male" placeholder="Number">
                                                        </label>
                                                        <label for="female" style="width: 25%;cursor:pointer">Female
                                                            <input type="radio" name="gender" value="2" id="female" placeholder="Number">
                                                        </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Languages</label>
                                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" name="language_id" id="language_id" data-placeholder="Select" multiple>
                                                                <option>--Select--</option>
                                                                @foreach ($public_languages as $language)
                                                                    <option value="{{ $language->id }}">{{ $language->name_en }}</option>
                                                                @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Country</label>
                                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" name="country_id" id="country_id" data-placeholder="Select">
                                                                <option>--Select--</option>
                                                                @foreach ($public_countries as $country)
                                                                    <option value="{{ $country->id }}">{{ $country->name_en }}</option>
                                                                @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Region</label>
                                                        <select class="form-control select2 select2-show-search border-bottom-0 w-100 select2-show-search" id="region_id" data-placeholder="Select">
                                                            <optgroup label="Categories">
                                                                <option>--Select--</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Address AR</label>
                                                        <input type="text" name="address_ar" class="form-control" placeholder="Address In Arabic">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Address EN</label>
                                                        <input type="text" name="address_en" class="form-control" placeholder="Address In English">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Overview AR</label>
                                                        <textarea rows="5" class="form-control" name="overview_ar" placeholder="Enter Overviw In Arabic"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Overview EN</label>
                                                        <textarea rows="5" class="form-control" name="overview_en" placeholder="Enter Overviw In English"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0">
                                                        <label class="form-label">Upload Image</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="example-file-input-custom">
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
                        <div id="tab2" class="tab-pane fade">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Week Plan</h3>
                                    </div>
                                    <form action="" id="createForm">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="week_plan[]" type="checkbox" value="saterday" id="saterday">
                                                            <label class="form-check-label" style="cursor:pointer;" for="saterday">
                                                                Saterday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From :</label>
                                                            <input class="form-control" type="time" id="appt" name="saterday_from"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To :</label>
                                                            <input class="form-control" type="time" id="appt" name="saterday_to"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="week_plan[]" type="checkbox" value="sunday" id="sunday">
                                                            <label class="form-check-label" style="cursor:pointer;" for="sunday">
                                                                Sunday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From :</label>
                                                            <input class="form-control" type="time" id="appt" name="sunday_from"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To :</label>
                                                            <input class="form-control" type="time" id="appt" name="sunday_to"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="week_plan[]" type="checkbox" value="monday" id="monday">
                                                            <label class="form-check-label" style="cursor:pointer;" for="monday">
                                                                Monday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From :</label>
                                                            <input class="form-control" type="time" id="appt" name="monday_from"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To :</label>
                                                            <input class="form-control" type="time" id="appt" name="monday_to"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="week_plan[]" type="checkbox" value="tuseday" id="tuseday">
                                                            <label class="form-check-label" style="cursor:pointer;" for="tuseday">
                                                                Tuseday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From :</label>
                                                            <input class="form-control" type="time" id="appt" name="tuseday_from"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To :</label>
                                                            <input class="form-control" type="time" id="appt" name="tuseday_to"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="week_plan[]" type="checkbox" value="wednsday" id="wednsday">
                                                            <label class="form-check-label" style="cursor:pointer;" for="wednsday">
                                                                Wednsday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From :</label>
                                                            <input class="form-control" type="time" id="appt" name="wednsday_from"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To :</label>
                                                            <input class="form-control" type="time" id="appt" name="wednsday_to"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="week_plan[]" type="checkbox" value="thursday" id="thursday">
                                                            <label class="form-check-label" style="cursor:pointer;" for="thursday">
                                                                Thursday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From :</label>
                                                            <input class="form-control" type="time" id="appt" name="thursday_from"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To :</label>
                                                            <input class="form-control" type="time" id="appt" name="thursday_to"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="week_plan[]" type="checkbox" value="friday" id="friday">
                                                            <label class="form-check-label" style="cursor:pointer;" for="friday">
                                                                Friday
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 row" style="margin-top: 1%">
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">From :</label>
                                                            <input class="form-control" type="time" id="appt" name="friday_from"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">To :</label>
                                                            <input class="form-control" type="time" id="appt" name="friday_to"
                                                                min="08:00" max="24:00" value="08:00" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="appt">Every :</label>
                                                            <select class="form-control" name="every" id="every">
                                                                @for($i = 10; $i <= 120 ; $i +=10)
                                                                    <option value="{{ $i }}">{{ $i }} Minutes</option>
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
                        <div id="tab3" class="tab-pane fade">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Certificates</h3>
                                    </div>
                                    <form action="" id="createForm">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Name AR</label>
                                                        <input type="text" name="name_ar" class="form-control" placeholder="Doctor Name In Arabic">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Name EN</label>
                                                        <input type="text" name="name_en" class="form-control" placeholder="Doctor Name In English">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Add Certificate</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <div class="col-xl-9 col-lg-12 col-md-12">
                                nnnnnnnnnnnnnnnnnn
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
                    console.log('foooooooooooo');
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
