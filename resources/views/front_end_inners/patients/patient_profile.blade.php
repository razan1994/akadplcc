@extends('front_end_inners.app_front_end', ['title' => 'About Us'])
@section('content')

<!--Breadcrumb-->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="{{ asset('front_end_style/assets/images/banners/banner2.jpg') }}">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Patient Profile</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Patient Profile</li>
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
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="card">
                    <div class="item-user">
                        <div class="profile-pic wideget-user-img mb-0 pt-3">
                            @if(isset($auth->profile_photo_path) && file_exists($auth->profile_photo_path))
                                <img src="{{ asset($auth->profile_photo_path) }}" class="brround" alt="user" width="250px">
                            @else
                                <img src="{{ asset('front_end_style/assets/images/users/female/17.jpg') }}" class="brround" alt="user">
                            @endif
                        </div>
                    </div>
                    <div class="card-body item-user text-center">
                        <div class="ml-1">
                            <a href="userprofile.html" class="text-dark">
                                <h4 class="mt-0 mb-2 font-weight-bold">{{ isset($auth->name_en) ? $auth->name_en : '--------' }}<i class="ion-checkmark-circled text-success fs-14 ml-1"></i></h4>
                            </a>
                        </div>
                    </div>
                    <div class="card-body item-user">
                        <h4 class="mb-4">Contact Info</h4>
                        <div>
                        <h6><span class="font-weight-semibold"><i class="fa fa-map-marker mr-2 mb-2"></i></span><a href="#" class="text-body">{{ isset($auth->country->name_en) ? $auth->country->name_en : '--------' }} | {{ isset($auth->region->name_en) ? $auth->region->name_en : '--------' }}</a></h6>
                            <h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body">{{ isset($auth->email) ? $auth->email : '--------' }}</a></h6>
                            <h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3  mb-2"></i></span><a href="#" class="text-body">{{ isset($auth->phone) ? $auth->phone : '--------' }}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class=" mb-5">
                    <div class="wideget-user-tab wideget-user-tab3">
                        <div class="tab-menu-heading">
                            <div class="tabs-menu1">
                                <ul class="nav">
                                    <li class=""><a href="#tab-5" class="active" data-toggle="tab">Reservations</a></li>
                                    <li><a href="#tab-6" data-toggle="tab" class="">Edit Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="border-0">
                        <div class="tab-content  border-left border-right details-tab-content bg-white">
                            <div class="tab-pane active" id="tab-5">
                                <div class=" p-5">
                                    <h3 class="card-title mb-3">Personal Details</h3>
                                    <ul class="usertab-list mb-4">
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold">Full Name :</span> Mariane Galeon</a></li>
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold">Location :</span> USA</a></li>
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold">Languages :</span> English, German,Vehiclenish.</a></li>
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold">Website :</span>smithabgd.com</a></li>
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold">Email :</span> georgemestayer@gmail.com</a></li>
                                        <li><a href="#" class="text-dark"><span class="font-weight-semibold">Phone :</span> +125 254 3562 </a></li>
                                    </ul>
                                    <h3 class="card-title mb-3">Biography</h3>
                                    <div class="mb-0">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                            in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                        <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble
                                            thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane userprof-tab" id="tab-6">
                                <div class=" p-5">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Email address</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Phone Number</label>
                                                <input type="number" class="form-control" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Postal Code</label>
                                                <input type="number" class="form-control" placeholder="ZIP Code">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="form-label">Country</label>
                                                <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" data-placeholder="Select">
															<optgroup label="Categories">
																<option>--Select--</option>
																<option value="1">Germany</option>
																<option value="2">2BHK Homes</option>
																<option value="3">Canada</option>
																<option value="4">Usa</option>
																<option value="5">Afghanistan</option>
																<option value="6">Albania</option>
																<option value="7">China</option>
																<option value="8">Denmark</option>
																<option value="9">Finland</option>
																<option value="10">India</option>
																<option value="11">Kiribati</option>
																<option value="12">Kuwait</option>
																<option value="13">Mexico</option>
																<option value="14">Pakistan</option>
															</optgroup>
														</select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Upload Image</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="example-file-input-custom">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-7">
                                <div class="media mt-0 p-5">
                                    <div class="d-flex mr-3">
                                        <a href="#"><img class="media-object brround" alt="64x64" src="{{ asset('front_end_style/assets/images/users/male/1.jpg') }}"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
                                            <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
                                            <span class="fs-14 ml-2"> 4.5
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star-half-o text-yellow"></i>
													</span>
                                        </h5>
                                        <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 13.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
                                        <p class="font-13  mb-2 mt-2">
                                            Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et nostrud exercitation ullamco laboris commodo consequat.
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
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris commodo Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.
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
                                            <span class="fs-14 ml-2"> 4
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star text-yellow"></i>
														<i class="fa fa-star-o text-yellow"></i>
												</span>
                                        </h5>
                                        <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 16.35  <i class=" ml-3 fa fa-map-marker"></i> UK</small>
                                        <p class="font-13  mb-2 mt-2">
                                            Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et nostrud exercitation ullamco laboris commodo consequat.
                                        </p>
                                        <a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
                                        <a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span >Comment</span></a>
                                        <a href="" class="mr-2" data-toggle="modal" data-target="#report"><span >Report</span></a>
                                    </div>
                                </div>
                                <div class="p-5 border-top">
                                    <h3 class="card-title">Leave a reply</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name1" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email Coursedress">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea>
                                    </div>
                                    <a href="#" class="btn btn-primary">Send Reply</a>
                                </div>
                            </div>
                            <div class="tab-pane userprof-tab" id="tab-8">
                                <div class="p-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name2" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email1" placeholder="Email Coursedress">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea>
                                    </div>
                                    <a href="#" class="btn btn-primary">Send Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white br-bl-2 br-br-2 border-left border-right border-bottom">
                            <div class="icons">
                                <a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Share</a>
                                <a href="#" class="btn btn-danger icons" data-toggle="modal" data-target="#report"><i class="icon icon-exclamation mr-1"></i> Report Abuse</a>
                                <a href="#" class="btn btn-primary icons"><i class="icon icon-heart  mr-1"></i> 678</a>
                                <a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  mr-1"></i> Print</a>
                            </div>
                        </div>
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
