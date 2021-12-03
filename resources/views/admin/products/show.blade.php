@extends('admin.layouts.app')

{{-- @section('admin_css')
    <link href="{{ asset('resources/dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('resources/dashboard_files/assets/css/sleek.min.css') }}">
@endsection --}}

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">
    {{-- ============================================== --}}
    {{-- ================== Header ==================== --}}
    {{-- ============================================== --}}
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1><i class="mdi mdi-account-multiple"></i> Product Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.dashboard') }}">
                            <i class="mdi  mdi-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.products-index') }}">
                            <i class="mdi  mdi-account-multiple"></i> All Products
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"><i class="mdi  mdi-account-multiple"></i> Product Details
                    </li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('super_admin.products-create') }}" class="mb-1 btn btn-primary"><i
                    class="mdi mdi-playlist-plus"></i> Add New </a>
            <a href="{{ route('super_admin.products-edit', $product->id) }}" class="mb-1 btn btn-success"><i
                    class="mdi mdi-playlist-edit"></i> Edit This Product </a>
        </div>
    </div>

    <div class="bg-white border rounded">
        <div class="row no-gutters">

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
                        swal("Oops !!!", "{!! Session::get('danger') !!}", "error", {
                            button: "Close",
                        });
                    </script>
                @endif
            </div>

            {{-- ================================================================================================= --}}
            {{-- ========================================= Left Section ========================================== --}}
            {{-- ================================================================================================= --}}
            <div class="col-lg-4 col-xl-3">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                    <div class="card text-center widget-profile px-0 border-0">
                        <div class="card-img mx-auto rounded-circle">
                            @if (isset($product->image))
                                @if ($product->image && file_exists($product->image))
                                    <img src="{{ asset($product->image) }}" width="100" alt="Image">
                                @else
                                    <img src="{{ asset('front_end_style/images/default.png') }}" width="100" alt="Image">
                                @endif
                            @else
                                <img src="{{ asset('front_end_style/images/default.png') }}" width="100" alt="Image">
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="py-2 text-dark"> {!! isset($product->name_en) ? $product->name_en : "<span style='color:red;'>Undefined</span>" !!}</h5>
                            <a class="btn btn-primary btn-pill btn-sm my-4"
                                href="{{ isset($product->id) ? route('super_admin.products-edit', [$product->id]) : '#' }}">Update
                                Product <i class="mdi mdi-playlist-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ================================================================================================= --}}
            {{-- ========================================== Right Section ========================================= --}}
            {{-- ================================================================================================= --}}
            <div class="col-lg-8 col-xl-9">
                <div class="profile-content-right py-5">
                    {{-- ================================================================================================= --}}
                    {{-- ===================================== Tabs Titles Section ======================================= --}}
                    {{-- ================================================================================================= --}}
                    <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                        {{-- Product Info Tab Title --}}
                        <li class="nav-item">
                            <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#tab_1" role="tab"
                                aria-controls="timeline" aria-selected="true"> Product Info</a>
                        </li>

                        {{-- Product Images Tab Title --}}
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab_2" role="tab"
                                aria-controls="profile" aria-selected="false"> Product Images</a>
                        </li>

                        {{-- Product Orders Tab Title --}}
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab_3" role="tab"
                                aria-controls="profile" aria-selected="false"> Product Orders</a>
                        </li>

                        {{-- Product Reviews Tab Title --}}
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab_4" role="tab"
                                aria-controls="profile" aria-selected="false"> Product Reviews</a>
                        </li>
                    </ul>

                    {{-- ================================================================================================= --}}
                    {{-- ===================================== Tabs Bodies Section ======================================= --}}
                    {{-- ================================================================================================= --}}
                    <div class="tab-content px-3 px-xl-5" id="myTabContent">

                        {{-- ============================================== --}}
                        {{-- ============= All Error Messages ============= --}}
                        {{-- ============================================== --}}
                        <div class="mt-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <h3>Please correct the following errors : </h3>
                                    <hr>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>- {{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        {{-- ============================================================================== --}}
                        {{-- =========================== Product Info Tab Body ============================ --}}
                        {{-- ============================================================================== --}}
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="timeline-tab">

                            {{-- ============================================== --}}
                            {{-- ============= Statistics Counters ============ --}}
                            {{-- ============================================== --}}
                            @if (isset($product))
                                <div class="row mt-4">
                                    {{-- Pendding Orders --}}
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="card card-mini mb-4">
                                            <div class="card-body">
                                                <h2 class="mb-1">
                                                    {{ isset($penddingOrders) ? $penddingOrders->count() : 0 }} orders
                                                </h2>
                                                <h5 style="color: orange;"><i class="mdi mdi-star mdi-spin"></i> Pendding
                                                    Orders In Admin
                                                </h5>
                                                <div class="chartjs-wrapper">
                                                    <canvas id="barChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Accept Orders --}}
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="card card-mini  mb-4">
                                            <div class="card-body">
                                                <h2 class="mb-1">
                                                    {{ isset($acceptedOrders) ? $acceptedOrders->count() : 0 }} orders
                                                </h2>
                                                <h5 style="color: green;"><i class="mdi mdi-star mdi-spin"></i> Accept
                                                    Orders In Admin
                                                </h5>
                                                <div class="chartjs-wrapper">
                                                    <canvas id="dual-line"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- ================================================= --}}
                            {{-- ============= Main Product Counters ============= --}}
                            {{-- ================================================= --}}
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="media widget-media p-4 bg-white border">
                                        <div class="icon rounded-circle mr-4 bg-primary">
                                            <i class="mdi mdi-timer-sand text-white mdi-spin"></i>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h4 class="text-primary mb-2">
                                                {{ isset($product->cartOperations) ? $product->cartOperations->count() : 0 }}
                                            </h4>
                                            <p>All Orders in This Product</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="media widget-media p-4 bg-white border">
                                        <div class="icon rounded-circle bg-success mr-4">
                                            <i class="mdi mdi-timer-sand text-white mdi-spin"></i>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h4 class="text-primary mb-2">
                                                {{ isset($deliveryOrders) ? $deliveryOrders->count() : 0 }}
                                            </h4>
                                            <p>Orders in Delivery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ================================================= --}}
                            {{-- =========== Main Product Information ============ --}}
                            {{-- ================================================= --}}
                            <div class="media mt-3 profile-timeline-media">
                                <div class="media-body">
                                    <h3 class="py-3 text-dark"><i class="mdi mdi-information"></i> Main Product Information
                                        :</h3>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><i class="mdi mdi-account"></i> Name EN : <span
                                                        style="color:blue;">{!! isset($product->name_en) ? $product->name_en : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-account"></i> Name AR : <span
                                                        style="color:blue;">{!! isset($product->name_ar) ? $product->name_ar : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-account"></i> Super Category AR : <span
                                                        style="color:blue;">{!! isset($product->superCategory->name_ar) ? $product->superCategory->name_ar : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-account"></i> Super Category EN : <span
                                                        style="color:blue;">{!! isset($product->superCategory->name_en) ? $product->superCategory->name_en : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-account"></i> Main Category AR : <span
                                                        style="color:blue;">{!! isset($product->mainCategory->name_ar) ? $product->mainCategory->name_ar : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-account"></i> Main Category EN : <span
                                                        style="color:blue;">{!! isset($product->mainCategory->name_en) ? $product->mainCategory->name_en : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-account"></i> Sub Category AR : <span
                                                        style="color:blue;">{!! isset($product->subCategory->name_ar) ? $product->subCategory->name_ar : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-account"></i> Sub Category EN : <span
                                                        style="color:blue;">{!! isset($product->subCategory->name_en) ? $product->subCategory->name_en : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-phone"></i> Sale Price : <span
                                                        style="color:blue;">{!! isset($product->sale_price) ? $product->sale_price : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-email"></i> On Sale Price Status : <span
                                                        style="color:blue;">{!! isset($product->on_sale_price_status) ? $product->on_sale_price_status : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-phone"></i> Available Quantity : <span
                                                        style="color:blue;">{!! isset($product->quantity_available) ? $product->quantity_available : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-email"></i> Limit Quantity : <span
                                                        style="color:blue;">{!! isset($product->quantity_limit) ? $product->quantity_limit : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-phone"></i> On Sale Price : <span
                                                        style="color:blue;">{!! isset($product->on_sale_price) ? $product->on_sale_price : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-phone"></i> Status : <span
                                                        style="color:blue;">{!! isset($product->status) ? $product->status : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-account-multiple"></i> Weight : <span
                                                        style="color:blue;">{!! isset($product->weight) ? $product->weight . '<small> ' . $product->weight_unit . '</small>' : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-phone"></i> Number of Orders : <span
                                                        style="color:blue;">{!! isset($product->cartOperations) ? $product->cartOperations->count() . ' orders' : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-clock-outline mdi-spin"></i> Added Since : <span
                                                        style="color:blue;">{!! isset($product->created_at) ? $product->created_at->diffForHumans() : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-clock-outline mdi-spin"></i> Date & Time of Addtion :
                                                    <span style="color:blue;">{!! isset($product->created_at) ? date('Y.d.m / h:i A', strtotime($product->created_at)) : '<span style="color:red;">Undefined</span>' !!}</span>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>

                                    {{-- ================================================= --}}
                                    {{-- ============== Product Description ============== --}}
                                    {{-- ================================================= --}}
                                    <h3 class="py-3 text-dark"><i class="mdi mdi-information"></i> Product Main Description
                                        AR/EN :</h3>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><span style="color:blue;">{!! isset($product->main_description_en) ? $product->main_description_en : '<span style="color:red;">Undefined</span>' !!}</th>
                                            </tr>
                                            <tr>
                                                <th><span style="color:blue;">{!! isset($product->main_description_ar) ? $product->main_description_ar : '<span style="color:red;">Undefined</span>' !!}</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <h3 class="py-3 text-dark"><i class="mdi mdi-information"></i> Product Sub Description
                                        AR/EN :</h3>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><span style="color:blue;">{!! isset($product->sub_description_en) ? $product->sub_description_en : '<span style="color:red;">Undefined</span>' !!}</th>
                                            </tr>
                                            <tr>
                                                <th><span style="color:blue;">{!! isset($product->sub_description_ar) ? $product->sub_description_ar : '<span style="color:red;">Undefined</span>' !!}</th>
                                            </tr>
                                        </thead>
                                    </table>

                                </div>
                            </div>


                        </div>

                        {{-- ============================================================================== --}}
                        {{-- ========================== Product Images Tab Body =========================== --}}
                        {{-- ============================================================================== --}}
                        <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="mt-5">
                                {{-- ============================================== --}}
                                {{-- ============= Topic Other Images ============= --}}
                                {{-- ============================================== --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-default" style="background-color:rgb(236, 233, 233);">
                                            <div class="card-body">
                                                {{-- Card Header : --}}
                                                <div class="card-header card-header-border-bottom"
                                                    style="background-color: #4c84ff;">
                                                    <h2 style="color:white;">Product Other Images :</h2>
                                                </div>
                                                {{-- Card Body : --}}
                                                <div class="card-body">
                                                    {{-- Add Other Images Form --}}
                                                    <form
                                                        action="{{ route('super_admin.products-addImages', $product->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">

                                                        <div class="form-row">
                                                            {{-- Product Other Images Input --}}
                                                            <div class="col-md-6 mb-3">
                                                                <label class="text-dark font-weight-medium mb-3"
                                                                    for="validationServer01">Product Other Images : <strong
                                                                        class="text-danger"> * </strong></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text mdi mdi-cloud-upload"></span>
                                                                    </div>
                                                                    <input type="file" name="product_other_images[]"
                                                                        class="form-control" id="validationServer01"
                                                                        multiple>
                                                                </div>
                                                            </div>

                                                            {{-- Button --}}
                                                            <div class="col-md-6 mb-3">
                                                                <label class="text-dark font-weight-medium mb-3"
                                                                    for="validationServer01">Save Product Other Images :
                                                                </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text mdi mdi-upload"></span>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-success btn-sm form-control">Upload
                                                                        Images </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="card-img mx-auto rounded-circle">
                                                    <hr>
                                                    @if (isset($product) && $product->productImages->count() > 0)
                                                        <div class="row">
                                                            @foreach ($product->productImages as $productImage)
                                                                @if (isset($productImage->image) && $productImage->image && file_exists($productImage->image))
                                                                    <div class="col-md-4">
                                                                        <img src="{{ asset($productImage->image) }}"
                                                                            class="img-thumbnail image-preview"
                                                                            alt="Topic Other Image"
                                                                            style="border:double 3px black; margin-bottom:5px; margin-top:5px;">
                                                                        <a href="{{ route('super_admin.products-deleteImages', $productImage->id) }}"
                                                                            class="confirm btn btn-danger btn-sm"><i
                                                                                class="fa fa-trash"></i> Delete
                                                                            image</a>
                                                                    </div>
                                                                @else
                                                                    <div class="col-md-4">
                                                                        <img src="{{ asset('front_end_style/images/default.png') }}"
                                                                            class="img-thumbnail image-preview"
                                                                            alt="Topic Other Image"
                                                                            style="border:double 3px black; margin-bottom:5px; margin-top:5px;">
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @else
                                                        <h3 style="color:red;">No images uploaded</h3>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ============================================================================== --}}
                        {{-- ========================= Product Orders Tab Body ============================ --}}
                        {{-- ============================================================================== --}}
                        <div class="tab-pane fade" id="tab_3" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <table id="hoverable-data-table_1" class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th><i class="mdi mdi-account-question"></i> Post Title</th>
                                                    <th><i class="mdi mdi-account-question"></i> Post Since</th>
                                                    <th><i class="mdi mdi-account-question"></i> Post Date/Time
                                                    </th>
                                                    <th><i class="mdi mdi-account-question"></i> Post Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- Super Admin --}}
                                                @if (isset($activitylogs))
                                                    @if ($activitylogs->count() > 0)
                                                        @foreach ($activitylogs->sortBy('created_at') as $index => $activitylog)
                                                            <tr>
                                                                <td>{!! isset($activitylog->activity_key_type) ? $activitylog->activity_key_type : "<span style='color:red;'>Undefined</span>" !!}</td>
                                                                <td>{!! isset($activitylog->created_at) ? $activitylog->created_at->diffForHumans() : "<span style='color:red;'>Undefined</span>" !!}</td>
                                                                {{-- <td>{!! (isset($activitylog->created_at) ?  date('Y.d.m / h:i A', strtotime($activitylog->created_at)) : "<span style='color:red;'>Undefined</span>") !!}</td> --}}
                                                                <td>{!! isset($activitylog->created_at) ? $activitylog->created_at : "<span style='color:red;'>Undefined</span>" !!}</td>
                                                                <td>
                                                                    @if (isset($activitylog->id) && isset($activitylog->related_id) && isset($activitylog->model_name))
                                                                        <a href="{{ route('super_admin.activity_logs-show', [$activitylog->id]) }}"
                                                                            title="Show"
                                                                            class="mb-1 btn btn-sm btn-primary"><i
                                                                                class="mdi mdi-eye"></i> View
                                                                            Details</a>
                                                                    @endif
                                                                    {{-- {!! isset($activitylog->related_id) && isset($activitylog->model_name) ? $activitylog->related_id : "<span style='color:red;'>Undefined</span>" !!} --}}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- ============================================================================== --}}
                        {{-- ========================= Product Reviews Tab Body =========================== --}}
                        {{-- ============================================================================== --}}
                        <div class="tab-pane fade" id="tab_4" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col-xl-12">
                                        {{-- ============================================================================== --}}
                                        {{-- ============================ Reviews Result Section ========================== --}}
                                        {{-- ============================================================================== --}}
                                        <div class="c_total_reviews">
                                            <div class="c_block">
                                                <div class="row">
                                                    <div class="col-md-3 c_right">
                                                        <div class="c_nimber_ttol">
                                                            <span>{!! isset($product->id) ? number_format(singleRealProductReview($product->id), 2) : '<span style="font-size:30pt; color:red;">Undefined</span>' !!}</span>
                                                        </div>
                                                        {{-- Reviews --}}
                                                        <div class="c_review">
                                                            <div class="c_newstarr">
                                                                @if (singleProductReviewStarsNumber(singleRealProductReview($product->id)) >= 1)
                                                                    <label for="rating-5"><i
                                                                            class="fas fa-3x fa-star"></i></label>
                                                                @elseif(singleProductReviewStarsNumber(singleRealProductReview($product->id))
                                                                    == 0.5)
                                                                    <label for="rating-5"><i
                                                                            class="fas fa-star-half-alt"></i></label>
                                                                @else
                                                                    <label for="rating-5"><i
                                                                            class="far fa-star"></i></label>
                                                                @endif
                                                                @if (singleProductReviewStarsNumber(singleRealProductReview($product->id)) >= 2)
                                                                    <label for="rating-4"><i
                                                                            class="fas fa-3x fa-star"></i></label>
                                                                @elseif(singleProductReviewStarsNumber(singleRealProductReview($product->id))
                                                                    == 1.5)
                                                                    <label for="rating-4"><i
                                                                            class="fas fa-star-half-alt"></i></label>
                                                                @else
                                                                    <label for="rating-4"><i
                                                                            class="far fa-star"></i></label>
                                                                @endif
                                                                @if (singleProductReviewStarsNumber(singleRealProductReview($product->id)) >= 3)
                                                                    <label for="rating-3"><i
                                                                            class="fas fa-3x fa-star"></i></label>
                                                                @elseif(singleProductReviewStarsNumber(singleRealProductReview($product->id))
                                                                    == 2.5)
                                                                    <label for="rating-3"><i
                                                                            class="fas fa-star-half-alt"></i></label>
                                                                @else
                                                                    <label for="rating-3"><i
                                                                            class="far fa-star"></i></label>
                                                                @endif
                                                                @if (singleProductReviewStarsNumber(singleRealProductReview($product->id)) >= 4)
                                                                    <label for="rating-2"><i
                                                                            class="fas fa-3x fa-star"></i></label>
                                                                @elseif(singleProductReviewStarsNumber(singleRealProductReview($product->id))
                                                                    == 3.5)
                                                                    <label for="rating-2"><i
                                                                            class="fas fa-star-half-alt"></i></label>
                                                                @else
                                                                    <label for="rating-2"><i
                                                                            class="far fa-star"></i></label>
                                                                @endif
                                                                @if (singleProductReviewStarsNumber(singleRealProductReview($product->id)) == 5)
                                                                    <label for="rating-1"><i
                                                                            class="fas fa-3x fa-star"></i></label>
                                                                @elseif(singleProductReviewStarsNumber(singleRealProductReview($product->id))
                                                                    == 4.5)
                                                                    <label for="rating-1"><i
                                                                            class="fas fa-star-half-alt"></i></label>
                                                                @else
                                                                    <label for="rating-1"><i
                                                                            class="far fa-star"></i></label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="c_num_reveiws">
                                                            <span>Reviews:
                                                                {{ isset($product->productReviews) ? $product->productReviews->count() : 0 }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 c_left">
                                                        <ul>
                                                            <li>
                                                                <span>5</span>
                                                                <div class="c_progress">
                                                                    <div class="c_bar"
                                                                        style="width:{{ number_format(productReviewPercentageDetails($product->id, 5), 2) }}%">
                                                                        <p class="c_percent"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="c_nespam">
                                                                    {{ number_format(productReviewPercentageDetails($product->id, 5), 2) }}%
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>4</span>
                                                                <div class="c_progress">
                                                                    <div class="c_bar"
                                                                        style="width:{{ number_format(productReviewPercentageDetails($product->id, 4), 2) }}%">
                                                                        <p class="c_percent"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="c_nespam">
                                                                    {{ number_format(productReviewPercentageDetails($product->id, 4), 2) }}%
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>3</span>
                                                                <div class="c_progress">
                                                                    <div class="c_bar" style="width:10%">
                                                                        <p class="c_percent"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="c_nespam">
                                                                    {{ number_format(productReviewPercentageDetails($product->id, 3), 2) }}%
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>2</span>
                                                                <div class="c_progress">
                                                                    <div class="c_bar"
                                                                        style="width:{{ number_format(productReviewPercentageDetails($product->id, 2), 2) }}%">
                                                                        <p class="c_percent"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="c_nespam">
                                                                    {{ number_format(productReviewPercentageDetails($product->id, 2), 2) }}%
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>1</span>
                                                                <div class="c_progress">
                                                                    <div class="c_bar"
                                                                        style="width:{{ number_format(productReviewPercentageDetails($product->id, 1), 2) }}%">
                                                                        <p class="c_percent"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="c_nespam">
                                                                    {{ number_format(productReviewPercentageDetails($product->id, 1), 2) }}%
                                                                </div>
                                                            </li>

                                                        </ul>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if (isset($product->productReviews))
                                            @foreach ($product->productReviews as $productReview)
                                                <div class="media widget-media bg-white border">
                                                    <div class="col-md-4">
                                                        @if (isset($productReview->customer->profile_photo_path))
                                                            @if ($productReview->customer->profile_photo_path && file_exists($productReview->customer->profile_photo_path))
                                                                <img src="{{ asset($productReview->customer->profile_photo_path) }}"
                                                                    width="100" alt="Image">
                                                            @else
                                                                <img src="{{ asset('front_end_style/images/profilesf.png') }}"
                                                                    width="100" alt="Image">
                                                            @endif
                                                        @else
                                                            <img src="{{ asset('front_end_style/images/profilesf.png') }}"
                                                                width="100" alt="Image">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4 class="text-primary mb-2">
                                                            {!! isset($productReview->customer->name_en) ? $productReview->customer->name_en : '<small>Undefined</small>' !!}</h4>
                                                        <p>Customer Review : {!! isset($productReview->review_value) ? $productReview->review_value : '<small>Undefined</small>' !!}</p>
                                                        {!! isset($productReview->review_note) ? '<hr><p>' . $productReview->review_note . '</p>' : '' !!}
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c_reviess_modal">
        <div class="modal fade" id="properties_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content" style="text-align: center;font-size: 12pt;font-weight: 900">

                    <div class="modal-header">
                        <h5 class="modal-title">@lang('front_end.add_shipping_address') :</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form id="modal_location_form" action=""  method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="container mt-5">
                                        <select class="selectpicker" multiple aria-label="Default select example" data-live-search="true">
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                          <option value="4">Four</option>
                                          <option value="5">five</option>
                                          <option value="6">sex</option>
                                          <option value="7">seven</option>
                                          <option value="8">eight</option>
                                          <option value="9">nine</option>
                                          <option value="10">ten</option>
                                        </select>
                                      </div>
                                <div class="modal-footer modal_add_to_cart">
                                    <a id="properties_add" class="c_submit btn btn-primary" style="cursor: pointer;color: #fff"><i
                                        class="mdi mdi-playlist-plus"></i>Add</a>
                                </div>
                            </form>

                        </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>

@endsection

@section('admin_javascript')
    <script>
        jQuery(document).ready(function() {
            jQuery('#hoverable-data-table_1').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
                "order": [
                    [2, "desc"]
                ]
            });
            jQuery('#hoverable-data-table_2').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
                "order": [
                    [2, "desc"]
                ]
            });
            jQuery('#hoverable-data-table_3').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
                "order": [
                    [2, "desc"]
                ]
            });
        });
    </script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}">
    </script>

@endsection
