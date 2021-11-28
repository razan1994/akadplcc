@extends('admin.layouts.app')

@section('admin_css')
    <link href="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard_files/assets/css/sleek.min.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">

            <div class="breadcrumb-wrapper breadcrumb-contacts">
                {{-- ============================================== --}}
                {{-- ================== Header ==================== --}}
                {{-- ============================================== --}}
                <div>
                    <h1><i class="mdi mdi-playlist-plus"></i> Add New Product</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}"> <i class="mdi mdi-home"></i> Dashboard </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.products-index') }}"> <i class="mdi mdi-account-group"></i> All Products </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-playlist-plus"></i> Add New Product</li>
                        </ol>
                    </nav>
                </div>

                {{-- ============================================== --}}
                {{-- ==================== Body ==================== --}}
                {{-- ============================================== --}}
                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.products-store') }}" method="POST"
                                            enctype="multipart/form-data" id="createForm">
                                            @csrf
                                            <div class="form-row">

                                                {{-- Name AR --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Name AR : <strong class="text-danger"> * @error('name_ar') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" id="validationServer01" placeholder="Name AR"
                                                            value="{{ old('name_ar') }}">
                                                    </div>
                                                </div>

                                                {{-- Name EN --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Name EN : <strong
                                                            class="text-danger"> * @error('name_en') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="name_en"
                                                            class="form-control @error('name_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Name EN"
                                                            value="{{ old('name_en') }}">
                                                    </div>
                                                </div>

                                                {{-- Category --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account-switch"></i> Category : <strong class="text-danger"> * @error('category_id') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="category_id" class="custom-select my-1 mr-sm-2 @error('category_id') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                            <option value="">Select Category...</option>
                                                            @if (isset($categories))
                                                                @foreach ($categories as $category)
                                                                    <option data-icon="fa fa-sitemap" value="{{ $category->id }}" @if (old('category_id') == $category->id) selected @endif> {{ $category->name_en }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Weight --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Weight : <strong class="text-danger"> * @error('weight') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="number" name="weight" step="0.01" class="form-control @error('weight') is-invalid @enderror" id="validationServer01"
                                                        placeholder="Weight" value="{{ (old('weight') !== null) ? old('weight') : 0 }}">
                                                    </div>
                                                </div>

                                                {{-- Weight Unit --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account-switch"></i> Weight Unit : <strong class="text-danger"> * @error('weight_unit') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="weight_unit" class="custom-select my-1 mr-sm-2 @error('weight_unit') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                            <option value="">Select Weight Unit...</option>
                                                            <option value="1" @if (old('weight_unit') == '1') selected @endif>ML</option>
                                                            <option value="2" @if (old('weight_unit') == '2') selected @endif>KG</option>
                                                            <option value="3" @if (old('weight_unit') == '3') selected @endif>G</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                {{-- Sale Price --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Sale Price : <strong class="text-danger"> * @error('sale_price') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="number" name="sale_price" step="0.001" class="form-control @error('sale_price') is-invalid @enderror" id="validationServer01"
                                                        placeholder="Sale Price" value="{{ (old('sale_price') !== null) ? old('sale_price') : 0 }}">
                                                    </div>
                                                </div>

                                                {{-- On Sale Price Status --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account-switch"></i> On Sale Price Status : <strong class="text-danger"> * @error('on_sale_price_status') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="on_sale_price_status" class="custom-select my-1 mr-sm-2 @error('on_sale_price_status') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                            <option value="">Select Status...</option>
                                                            <option value="1" @if (old('on_sale_price_status') == '1') selected @endif>Active</option>
                                                            <option value="2" @if (old('on_sale_price_status') == '2') selected @endif>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                 {{-- On Sale Price --}}
                                                 <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> On Sale Price : <strong class="text-danger"> * @error('on_sale_price') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="number" name="on_sale_price" step="0.001" class="form-control @error('on_sale_price') is-invalid @enderror" id="validationServer01"
                                                        placeholder="On Sale Price" value="{{ (old('on_sale_price') !== null) ? old('on_sale_price') : 0 }}">
                                                    </div>
                                                </div>

                                                {{-- Available Quantity --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Available Quantity : <strong class="text-danger"> * @error('quantity_available') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="number" name="quantity_available" step="1" class="form-control @error('quantity_available') is-invalid @enderror" id="validationServer01"
                                                        placeholder="Available Quantity" value="{{ (old('quantity_available') !== null) ? old('quantity_available') : 0 }}">
                                                    </div>
                                                </div>
                                                
                                                {{-- Limit Quantity --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Limit Quantity : <strong class="text-danger"> * @error('quantity_limit') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="number" name="quantity_limit" step="1" class="form-control @error('quantity_limit') is-invalid @enderror" id="validationServer01"
                                                        placeholder="Limit Quantity" value="{{ (old('quantity_limit') !== null) ? old('quantity_limit') : 0 }}">
                                                    </div>
                                                </div>

                                                {{-- Main Description AR --}}
                                                <div class="col-12">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        Main Description AR : <strong class="text-danger"> * @error('main_description_ar') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea style="width: 90% !important" name="main_description_ar" class="form-control" rows="5">{{ old('main_description_ar') }}</textarea>
                                                    </div>
                                                </div>

                                                {{-- Main Description EN --}}
                                                <div class="col-12">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        Main Description EN : <strong class="text-danger"> * @error('main_description_en') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea style="width: 90% !important" name="main_description_en" class="form-control" rows="5">{{ old('main_description_en') }}</textarea>
                                                    </div>
                                                </div>

                                                {{-- Sub Description AR --}}
                                                <div class="col-12">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        Sub Description AR : <strong class="text-danger"> * @error('sub_description_ar') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea style="width: 90% !important" name="sub_description_ar" class="form-control" rows="5">{{ old('sub_description_ar') }}</textarea>
                                                    </div>
                                                </div>

                                                {{-- Sub Description EN --}}
                                                <div class="col-12">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        Sub Description EN : <strong class="text-danger"> * @error('sub_description_en') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea style="width: 90% !important" name="sub_description_en" class="form-control" rows="5">{{ old('sub_description_en') }}</textarea>
                                                    </div>
                                                </div>

                                                {{-- Ingredient AR --}}
                                                <div class="col-12">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        Ingredient AR : <strong class="text-danger"> * @error('ingredient_ar') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea style="width: 90% !important" name="ingredient_ar" class="form-control" rows="5">{{ old('ingredient_ar') }}</textarea>
                                                    </div>
                                                </div>

                                                {{-- Ingredient EN --}}
                                                <div class="col-12">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        Ingredient EN : <strong class="text-danger"> * @error('ingredient_en') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea style="width: 90% !important" name="ingredient_en" class="form-control " rows="5">{{ old('ingredient_en') }}</textarea>
                                                    </div>
                                                </div>

                                                {{-- Benefit AR --}}
                                                <div class="col-12">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        Benefit AR : <strong class="text-danger"> * @error('benefit_ar') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea style="width: 90% !important" name="benefit_ar" class="form-control" rows="5">{{ old('benefit_ar') }}</textarea>
                                                    </div>
                                                </div>

                                                {{-- Benefit EN --}}
                                                <div class="col-12">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        Benefit EN : <strong class="text-danger"> * @error('benefit_en') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea style="width: 90% !important" name="benefit_en" class="form-control" rows="5">{{ old('benefit_en') }}</textarea>
                                                    </div>
                                                </div>

                                                {{-- Status --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account-switch"></i> Status : <strong class="text-danger"> * @error('status') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="status" class="custom-select my-1 mr-sm-2 @error('status') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                            <option value="">Select Status...</option>
                                                            <option value="1" @if (old('status') == '1') selected @endif>Active</option>
                                                            <option value="2" @if (old('status') == '2') selected @endif>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Image --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-image"></i> Image : <strong class="text-danger"> @error('image')* ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-image"></span>
                                                        </div>
                                                        <input type="file" name="image" class="form-control" id="validationServer01" placeholder="Image">
                                                    </div>
                                                </div>

                                            </div>
                                            {{-- Button --}}
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-playlist-plus"></i> Add</button>
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

    @section('admin_javascript')
      
    @endsection
