@extends('front_end_inners.app_front_end', ['title' => 'News'])
@section('page_title') {{ isset($new->title_en) ? $new->title_en : null }} @endsection
@section('meta_title'){!! isset($new->seo_title_en) ? $new->seo_title_en : 'Roshiita website' !!}@endsection
@section('meta_desc'){!! isset($new->meta_desc_ar) ? $new->meta_desc_ar : 'roshiita website find your doctor' !!}@endsection
@section('meta_keywords'){{ isset($new->keywords_en) ? $new->keywords_en : 'roshiita,docotors,doctor' }}@endsection
@section('content')
		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="{{ asset('front_end_style/assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">LatestNews</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">News Details</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->
    <!--Breadcrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">Latest News Details</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('news-list') }}">Latest News</a></li>
                    <li class="breadcrumb-item">Latest News Details</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ isset($new->title_en) ? $new->title_en : '--------' }}</li>
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
								<h1 class="font-weight-semibold">{{ isset($new->title_en) ? $new->title_en : '--------' }}</h1></a></div>
							<div class="card-body">
								<div class="item7-card-img">
                                    @if(isset($new->image) && file_exists($new->image))
									    <img alt="img" class="w-100" src="{{ asset($new->image) }}" alt="{{ isset($new->alt_text_en) ? $new->alt_text_ar : 'image' }}"
                                            title="{{ isset($new->image_title_text_en) ? $new->image_title_text_en : $new->title_en }}">
                                    @else
									    <img alt="img" class="w-100" src="{{ asset('front_end_style/assets/images/media/28.jpg') }}">
                                    @endif
									{{-- <div class="item7-card-text">
										<span class="badge badge-info">Doctor</span>
									</div> --}}
								</div>
								<div class="item7-card-desc d-flex mb-2 mt-3">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>{{ date('Y-m-d',strtotime($new->created_at)) }}</a>
									{{-- <div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
									</div> --}}
								</div>
                                <h2 class="font-weight-semibold">{{ isset($new->h2_en) ? $new->h2_en : '--------' }}</h2></a>
								<p>{!! isset($new->desc_en) ? $new->desc_en : '--------' !!}</p>
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
								<h3 class="card-title">new Authors</h3>
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
