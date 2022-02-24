@extends('front_end_inners.app_front_end', ['title' => 'Blogs'])
@section('page_title') {{ isset($blog->title_en) ? $blog->title_en : null }} @endsection
@section('meta_title'){!! isset($blog->seo_title_en) ? $blog->seo_title_en : 'Roshiita website' !!}@endsection
@section('meta_desc'){!! isset($blog->meta_desc_ar) ? $blog->meta_desc_ar : 'roshiita website find your doctor' !!}@endsection
@section('meta_keywords'){{ isset($blog->keywords_en) ? $blog->keywords_en : 'roshiita,docotors,doctor' }}@endsection
@section('content')
		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="{{ asset('front_end_style/assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Blogs</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Blog Details</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
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
                                            title="{{ isset($blog->image_title_text_en) ? $blog->image_title_text_en : $blog->title_en }}">
                                    @else
									    <img alt="img" class="w-100" src="{{ asset('front_end_style/assets/images/media/28.jpg') }}">
                                    @endif
								</div>
								<div class="item7-card-desc d-flex mb-2 mt-3">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>{{ date('Y-m-d',strtotime($blog->created_at)) }}</a>
								</div>
                                <h2 class="font-weight-semibold">{{ isset($blog->h2_en) ? $blog->h2_en : '--------' }}</h2></a>
								<p>{!! isset($blog->desc_en) ? $blog->desc_en : '--------' !!}</p>
							</div>
						</div>
					</div>
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
