@extends('front_end_inners.app_front_end', ['title' => 'Contact Us'])
@section('page_title') {{ 'Roshiita | Contact Us' }} @endsection
@section('content')

		<!--Breadcrumb-->
		<div>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Contact Us</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--Contact-->
		<div class="sptb bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row text-white">
							<div class="col-lg-6 col-md-12">
								<div class="card border-0">
									<div class="support-service bg-primary border-0 br-2">
										<i class="fa fa-phone"></i>
										<h6>+{{ isset($public_contact->phone) ? $public_contact->phone : '--------' }}</h6>
										<P>Free Support!</P>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card border-0">
									<div class="support-service bg-secondary border-0 br-2">
										<i class="fa fa-print"></i>
										<h6>{{ isset($public_contact->fax) ? $public_contact->fax : '--------' }}</h6>
										<p>Contact Fax</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card border-0 mb-lg-0">
                                    <div class="support-service bg-danger border-0 br-2">
                                        <i class="fa fa-map-marker"></i>
										<h6>{{ isset($public_contact->address_en) ? $public_contact->address_en : '--------' }}</h6>
                                        <p>Our Address</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card border-0 mb-0">
									<div class="support-service bg-orange border-0 br-2">
										<i class="fa fa-envelope-o"></i>
										<h6>{{ isset($public_contact->email) ? $public_contact->email : '--------' }}</h6>
										<p>Support us!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact-->

		<!--Contact-->
		<div class="sptb">
			<div class="container">
				<div class="row">
				    {{-- <div class="col-lg-6 col-xl-6  col-md-12">
					    <div class="map1">
							<div class="map-header-layer" id="map2"></div>
						</div>
					</div> --}}
				    <div class="col-lg-12 col-xl-12 col-md-12">
						<div class="card mb-0">
                            <form action="{{ route('contactUsRequest') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" class="form-control" id="name1" placeholder="Your Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Contact-->

    @endsection
