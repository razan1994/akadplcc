@extends('admin.layouts.app')

@section('admin_css')
    <link href="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard_files/assets/css/sleek.min.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">
            {{-- =========================================================== --}}
            {{-- ================== Sweet Alert Section ==================== --}}
            {{-- =========================================================== --}}
            <div>
                @if (session()->has('success'))
                    <script>
                        swal("Great Job !!!", "{!! Session::get('success') !!}", "success", {
                            button: "OK",
                        });

                    </script>
                @endif
                @if (session()->has('danger'))
                    <script>
                        swal("oops !!!", "{!! Session::get('danger') !!}", "error", {
                            button: "Close",
                        });

                    </script>
                @endif
            </div>

            {{-- ============================================== --}}
            {{-- ================== Header ==================== --}}
            {{-- ============================================== --}}
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Update Banners</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.banners-index') }}">
                                    <span class="mdi mdi-account-group"></span> Banners
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>

                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.banners-update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                {{-- Banner 1 --}}
                                                <div class="col-md-12">
                                                    <div class="justify-content-between " style="background-color: #7198ee; padding:15px; margin-bottom:15px;">
                                                        <h3 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Banner 1 : (270*510) : </h3>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Banner(270*510) URL --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account"></i> Banner(270*510) URL : <strong class="text-danger"> @error('banner_1_url') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                                </div>
                                                                <input type="url" name="banner_1_url" class="form-control" placeholder="Banner(270*510) URL" value="{{ isset($banner->banner_1_url) ? $banner->banner_1_url : null }}">
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*510) Status --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*510) Status : <strong class="text-danger"> @error('status_1') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account-check"></span>
                                                                </div>
                                                                <select name="status_1" class="custom-select my-1 mr-sm-2 @error('status_1') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select Banner(270*510) Status...</option>
                                                                    <option value="1" @if (isset($banner->status_1) && $banner->status_1 == 'Active') selected @endif>Active</option>
                                                                    <option value="2" @if (isset($banner->status_1) && $banner->status_1 == 'Inactive') selected @endif>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*510) Image Input --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*510) Image Input : <strong class="text-danger"> @error('image_1') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                                </div>
                                                                <input type="file" name="image_1" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        {{-- Banner(270*510) Image Show --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*510) Image Input :
                                                            </label>
                                                            <div class="input-group">
                                                                @if (isset($banner->image_1) && $banner->image_1 && file_exists($banner->image_1))
                                                                    <img src="{{ asset($banner->image_1) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @else
                                                                    <img src="{{ asset('images_default/default.jpg') }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Banner 2 --}}
                                                <div class="col-md-12">
                                                    <div class="justify-content-between " style="background-color: #7198ee; padding:15px; margin-bottom:15px;">
                                                        <h3 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Banner 2 : (570*240) : </h3>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Banner(570*240) URL --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account"></i> Banner(570*240) URL : <strong class="text-danger"> @error('banner_2_url') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                                </div>
                                                                <input type="url" name="banner_2_url" class="form-control" placeholder="Banner(570*240) URL" value="{{ isset($banner->banner_2_url) ? $banner->banner_2_url : null }}">
                                                            </div>
                                                        </div>

                                                        {{-- Banner(570*240) Status --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*240) Status : <strong class="text-danger"> @error('status_2') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account-check"></span>
                                                                </div>
                                                                <select name="status_2" class="custom-select my-1 mr-sm-2 @error('status_2') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select Banner(570*240) Status...</option>
                                                                    <option value="1" @if (isset($banner->status_2) && $banner->status_2 == 'Active') selected @endif>Active</option>
                                                                    <option value="2" @if (isset($banner->status_2) && $banner->status_2 == 'Inactive') selected @endif>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- Banner(570*240) Image Input --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*240) Image Input : <strong class="text-danger"> @error('image_2') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                                </div>
                                                                <input type="file" name="image_2" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        {{-- Banner(570*240) Image Show --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*240) Image Input :
                                                            </label>
                                                            <div class="input-group">
                                                                @if (isset($banner->image_2) && $banner->image_2 && file_exists($banner->image_2))
                                                                    <img src="{{ asset($banner->image_2) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @else
                                                                    <img src="{{ asset('images_default/default.jpg') }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Banner 3 --}}
                                                <div class="col-md-12">
                                                    <div class="justify-content-between " style="background-color: #7198ee; padding:15px; margin-bottom:15px;">
                                                        <h3 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Banner 3 : (270*240) : </h3>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Banner(270*240) URL --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account"></i> Banner(270*240) URL : <strong class="text-danger"> @error('banner_3_url') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                                </div>
                                                                <input type="url" name="banner_3_url" class="form-control" placeholder="Banner(270*240) URL" value="{{ isset($banner->banner_3_url) ? $banner->banner_3_url : null }}">
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*240) Status --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Status : <strong class="text-danger"> @error('status_3') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account-check"></span>
                                                                </div>
                                                                <select name="status_3" class="custom-select my-1 mr-sm-2 @error('status_3') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select Banner(270*240) Status...</option>
                                                                    <option value="1" @if (isset($banner->status_3) && $banner->status_3 == 'Active') selected @endif>Active</option>
                                                                    <option value="2" @if (isset($banner->status_3) && $banner->status_3 == 'Inactive') selected @endif>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*240) Image Input --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Image Input : <strong class="text-danger"> @error('image_3') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                                </div>
                                                                <input type="file" name="image_3" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        {{-- Banner(270*240) Image Show --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Image Input :
                                                            </label>
                                                            <div class="input-group">
                                                                @if (isset($banner->image_3) && $banner->image_3 && file_exists($banner->image_3))
                                                                    <img src="{{ asset($banner->image_3) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @else
                                                                    <img src="{{ asset('images_default/default.jpg') }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Banner 4 --}}
                                                <div class="col-md-12">
                                                    <div class="justify-content-between " style="background-color: #7198ee; padding:15px; margin-bottom:15px;">
                                                        <h3 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Banner 4 : (270*240) : </h3>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Banner(270*240) URL --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account"></i> Banner(270*240) URL : <strong class="text-danger"> @error('banner_4_url') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                                </div>
                                                                <input type="url" name="banner_4_url" class="form-control" placeholder="Banner(270*240) URL" value="{{ isset($banner->banner_4_url) ? $banner->banner_4_url : null }}">
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*240) Status --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Status : <strong class="text-danger"> @error('status_4') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account-check"></span>
                                                                </div>
                                                                <select name="status_4" class="custom-select my-1 mr-sm-2 @error('status_4') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select Banner(270*240) Status...</option>
                                                                    <option value="1" @if (isset($banner->status_4) && $banner->status_4 == 'Active') selected @endif>Active</option>
                                                                    <option value="2" @if (isset($banner->status_4) && $banner->status_4 == 'Inactive') selected @endif>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*240) Image Input --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Image Input : <strong class="text-danger"> @error('image_4') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                                </div>
                                                                <input type="file" name="image_4" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        {{-- Banner(270*240) Image Show --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Image Input :
                                                            </label>
                                                            <div class="input-group">
                                                                @if (isset($banner->image_4) && $banner->image_4 && file_exists($banner->image_4))
                                                                    <img src="{{ asset($banner->image_4) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @else
                                                                    <img src="{{ asset('images_default/default.jpg') }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Banner 5 --}}
                                                <div class="col-md-12">
                                                    <div class="justify-content-between " style="background-color: #7198ee; padding:15px; margin-bottom:15px;">
                                                        <h3 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Banner 5 : (270*240) : </h3>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Banner(270*240) URL --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account"></i> Banner(270*240) URL : <strong class="text-danger"> @error('banner_5_url') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                                </div>
                                                                <input type="url" name="banner_5_url" class="form-control" placeholder="Banner(270*240) URL" value="{{ isset($banner->banner_5_url) ? $banner->banner_5_url : null }}">
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*240) Status --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Status : <strong class="text-danger"> @error('status_5') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account-check"></span>
                                                                </div>
                                                                <select name="status_5" class="custom-select my-1 mr-sm-2 @error('status_5') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select Banner(270*240) Status...</option>
                                                                    <option value="1" @if (isset($banner->status_5) && $banner->status_5 == 'Active') selected @endif>Active</option>
                                                                    <option value="2" @if (isset($banner->status_5) && $banner->status_5 == 'Inactive') selected @endif>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*240) Image Input --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Image Input : <strong class="text-danger"> @error('image_5') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                                </div>
                                                                <input type="file" name="image_5" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        {{-- Banner(270*240) Image Show --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Image Input :
                                                            </label>
                                                            <div class="input-group">
                                                                @if (isset($banner->image_5) && $banner->image_5 && file_exists($banner->image_5))
                                                                    <img src="{{ asset($banner->image_5) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @else
                                                                    <img src="{{ asset('images_default/default.jpg') }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                {{-- Banner 6 --}}
                                                <div class="col-md-12">
                                                    <div class="justify-content-between " style="background-color: #7198ee; padding:15px; margin-bottom:15px;">
                                                        <h3 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Banner 6 : (270*240) : </h3>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Banner(270*240) URL --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account"></i> Banner(270*240) URL : <strong class="text-danger"> @error('banner_6_url') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                                </div>
                                                                <input type="url" name="banner_6_url" class="form-control" placeholder="Banner(270*240) URL" value="{{ isset($banner->banner_6_url) ? $banner->banner_6_url : null }}">
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*240) Status --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Status : <strong class="text-danger"> @error('status_6') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account-check"></span>
                                                                </div>
                                                                <select name="status_6" class="custom-select my-1 mr-sm-2 @error('status_6') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select Banner(270*240) Status...</option>
                                                                    <option value="1" @if (isset($banner->status_6) && $banner->status_6 == 'Active') selected @endif>Active</option>
                                                                    <option value="2" @if (isset($banner->status_6) && $banner->status_6 == 'Inactive') selected @endif>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- Banner(270*240) Image Input --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Image Input : <strong class="text-danger"> @error('image_6') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                                </div>
                                                                <input type="file" name="image_6" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        {{-- Banner(270*240) Image Show --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(270*240) Image Input :
                                                            </label>
                                                            <div class="input-group">
                                                                @if (isset($banner->image_6) && $banner->image_6 && file_exists($banner->image_6))
                                                                    <img src="{{ asset($banner->image_6) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @else
                                                                    <img src="{{ asset('images_default/default.jpg') }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Banner 7 --}}
                                                <div class="col-md-12">
                                                    <div class="justify-content-between " style="background-color: #7198ee; padding:15px; margin-bottom:15px;">
                                                        <h3 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Banner 7 : (570*430) : </h3>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Banner(570*430) URL --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account"></i> Banner(570*430) URL : <strong class="text-danger"> @error('banner_7_url') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                                </div>
                                                                <input type="url" name="banner_7_url" class="form-control" placeholder="Banner(570*430) URL" value="{{ isset($banner->banner_7_url) ? $banner->banner_7_url : null }}">
                                                            </div>
                                                        </div>

                                                        {{-- Banner(570*430) Status --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*430) Status : <strong class="text-danger"> @error('status_7') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account-check"></span>
                                                                </div>
                                                                <select name="status_7" class="custom-select my-1 mr-sm-2 @error('status_7') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select Banner(570*430) Status...</option>
                                                                    <option value="1" @if (isset($banner->status_7) && $banner->status_7 == 'Active') selected @endif>Active</option>
                                                                    <option value="2" @if (isset($banner->status_7) && $banner->status_7 == 'Inactive') selected @endif>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- Banner(570*430) Image Input --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*430) Image Input : <strong class="text-danger"> @error('image_7') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                                </div>
                                                                <input type="file" name="image_7" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        {{-- Banner(570*430) Image Show --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*430) Image Input :
                                                            </label>
                                                            <div class="input-group">
                                                                @if (isset($banner->image_7) && $banner->image_7 && file_exists($banner->image_7))
                                                                    <img src="{{ asset($banner->image_7) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @else
                                                                    <img src="{{ asset('images_default/default.jpg') }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Banner 8 --}}
                                                <div class="col-md-12">
                                                    <div class="justify-content-between " style="background-color: #7198ee; padding:15px; margin-bottom:15px;">
                                                        <h3 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Banner 8 : (570*200) : </h3>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Banner(570*200) URL --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account"></i> Banner(570*200) URL : <strong class="text-danger"> @error('banner_8_url') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                                </div>
                                                                <input type="url" name="banner_8_url" class="form-control" placeholder="Banner(570*200) URL" value="{{ isset($banner->banner_8_url) ? $banner->banner_8_url : null }}">
                                                            </div>
                                                        </div>

                                                        {{-- Banner(570*200) Status --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*200) Status : <strong class="text-danger"> @error('status_8') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account-check"></span>
                                                                </div>
                                                                <select name="status_8" class="custom-select my-1 mr-sm-2 @error('status_8') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select Banner(570*200) Status...</option>
                                                                    <option value="1" @if (isset($banner->status_8) && $banner->status_8 == 'Active') selected @endif>Active</option>
                                                                    <option value="2" @if (isset($banner->status_8) && $banner->status_8 == 'Inactive') selected @endif>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- Banner(570*200) Image Input --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*200) Image Input : <strong class="text-danger"> @error('image_8') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                                </div>
                                                                <input type="file" name="image_8" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        {{-- Banner(570*200) Image Show --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*200) Image Input :
                                                            </label>
                                                            <div class="input-group">
                                                                @if (isset($banner->image_8) && $banner->image_8 && file_exists($banner->image_8))
                                                                    <img src="{{ asset($banner->image_8) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @else
                                                                    <img src="{{ asset('images_default/default.jpg') }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Banner 9 --}}
                                                <div class="col-md-12">
                                                    <div class="justify-content-between " style="background-color: #7198ee; padding:15px; margin-bottom:15px;">
                                                        <h3 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> Banner 9 : (570*200) : </h3>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Banner(570*200) URL --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account"></i> Banner(570*200) URL : <strong class="text-danger"> @error('banner_9_url') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                                </div>
                                                                <input type="url" name="banner_9_url" class="form-control" placeholder="Banner(570*200) URL" value="{{ isset($banner->banner_9_url) ? $banner->banner_9_url : null }}">
                                                            </div>
                                                        </div>

                                                        {{-- Banner(570*200) Status --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*200) Status : <strong class="text-danger"> @error('status_9') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-account-check"></span>
                                                                </div>
                                                                <select name="status_9" class="custom-select my-1 mr-sm-2 @error('status_9') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                                    <option value="">Select Banner(570*200) Status...</option>
                                                                    <option value="1" @if (isset($banner->status_9) && $banner->status_9 == 'Active') selected @endif>Active</option>
                                                                    <option value="2" @if (isset($banner->status_9) && $banner->status_9 == 'Inactive') selected @endif>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- Banner(570*200) Image Input --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*200) Image Input : <strong class="text-danger"> @error('image_9') {{ $message }} @enderror</strong>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                                </div>
                                                                <input type="file" name="image_9" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                        {{-- Banner(570*200) Image Show --}}
                                                        <div class="col-md-6 mb-3">
                                                            <label class="text-dark font-weight-medium mb-3">
                                                                <i class="mdi mdi-account-switch"></i> Banner(570*200) Image Input :
                                                            </label>
                                                            <div class="input-group">
                                                                @if (isset($banner->image_9) && $banner->image_9 && file_exists($banner->image_9))
                                                                    <img src="{{ asset($banner->image_9) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @else
                                                                    <img src="{{ asset('images_default/default.jpg') }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save Updates</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
