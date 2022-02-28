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
								<li class="breadcrumb-item active text-white" aria-current="page">Categories</li>
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
								<h3 class="card-title">Categories</h3>
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
									<a href="{{ route('medical_equipment.medical_equipment-dashboard') }}" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">{{ $auth->name_en }}</h4></a>
								</div>
							</div>
							<aside class="app-sidebar doc-sidebar my-dash">
								<div class="app-sidebar__user clearfix">
									<ul class="side-menu">
										<li style="cursor: pointer">
											<a class="side-menu__item" href="{{ route('medical_equipment.medical_equipment-dashboard','medical_equipmentUpdateProfile') }}"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Edit Profile</span></a>
										</li>
                                        <li style="cursor: pointer">
											<a class="side-menu__item" href="{{ route('medical_equipment.medical_equipment-dashboard','gallery') }}"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Gallery</span></a>
										</li>
                                        <li @if(old('name_en') == null && old('name_ar') == null) class="active" @endif style="cursor: pointer">
											<a class="side-menu__item" href="{{ route('medical_equipment.medical_equipment-categories') }}"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Categories</span></a>
										</li>
                                        <li data-toggle="tab" href="#createCategory" @if(old('name_en') != null || old('name_ar') != null) class="active" @endif style="cursor: pointer">
                                            <a class="side-menu__item"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Add Categories</span></a>
                                        </li>
                                        <li @if(old('name_en') == null && old('name_ar') == null) class="active" @endif style="cursor: pointer">
											<a class="side-menu__item" href="{{ route('medical_equipment.medical_equipment-products') }}"><i class="fa fa-angle-right mr-2"></i><span class="side-menu__label ml-2">Products</span></a>
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
                        <div id="categories" class="tab-pane fade @if(old('name_en') == null && old('name_ar') == null) active in @endif">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Categories</h3>
                                    </div>
                                    <div class="col-md-12 p-1 mt-2">
                                        <table class="table table-bordered" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th>Category Name EN</th>
                                                    <th>Category Name AR</th>
                                                    <th>Status</th>
                                                    <th>Control</th>
                                                </tr>
                                                </thead>
                                            <tbody>
                                                @if(isset($categories) && $categories->count() > 0)
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td style="text-align: center">{{ $category->name_en }}</td>
                                                        <td style="text-align: center">{{ $category->name_ar }}</td>
                                                        <td style="text-align: center">{{ $category->status }}</td>
                                                        <td style="text-align: center"><a class="btn btn-success btn-sm" href="{{ route('medical_equipment.medical_equipment-edit-category',encrypt($category->id)) }}"><i class="fa fa-edit"></i></a></td>
                                                    </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="3" style="text-align: center"><h4 class="tex-danger"> No Categories ...</h4></td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div id="createCategory" class="tab-pane fade @if(old('name_en') != null || old('name_ar') != null) active in @endif">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Categories</h3>
                                    </div>
                                    <div class="col-md-12 p-1 mt-2">
                                        <form action="{{ route('medical_equipment.medical_equipment-store-category') }}" method="POST" class="form">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Name EN <span class="text-danger">* @error('name_en'){{ $message }}@enderror</span></label>
                                                            <input type="text" name="name_en" class="form-control" placeholder="Medical Equipment Name In English" value="{{ old('name_en') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Name AR <span class="text-danger">* @error('name_ar'){{ $message }}@enderror</span></label>
                                                            <input type="text" name="name_ar" class="form-control" placeholder="Medical Equipment Name In Arabic" value="{{ old('name_ar') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-secondary">Add</button>
                                            </div>
                                        </form>
                                </div>
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
