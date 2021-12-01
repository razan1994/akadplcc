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
                    <h1><i class="mdi mdi-playlist-edit"></i> Update Product Information</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <i class="mdi mdi-home"></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.products-index') }}">
                                    <i class="mdi mdi-account-group"></i> All Product
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-playlist-edit"></i> Edit</li>
                        </ol>
                    </nav>
                </div>

                {{-- ============================================== --}}
                {{-- =================== Body ===================== --}}
                {{-- ============================================== --}}
                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                                        {{-- <h2 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> طلبات سحب الرصيد : </h2> --}}
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.products-update', [$product->id]) }}" method="POST"
                                            id="updateForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <input type="hidden" id="old_main" value="{{ old('main_category_id') ? old('main_category_id') : $product->main_category_id }}">
                                                <input type="hidden" id="old_sub" value="{{ old('sub_category_id') ? old('sub_category_id') : $product->sub_category_id }}">
                                                {{-- Name AR --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Name AR : <strong class="text-danger"> * @error('name_ar') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="name_ar"
                                                            class="form-control @error('name_ar') is-invalid @enderror" id="validationServer01" placeholder="Name AR" value="{{ isset($product->name_ar) ? $product->name_ar : null }}">
                                                    </div>
                                                </div>

                                                {{-- Name EN --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Name EN : <strong class="text-danger"> * @error('name_en') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="name_en" class="form-control @error('name_ar') is-invalid @enderror" id="validationServer01" placeholder="Name EN"
                                                            value="{{ isset($product->name_en) ? $product->name_en : null }}">
                                                    </div>
                                                </div>

                                                {{-- Super Category --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account-switch"></i> Super Category : <strong class="text-danger"> * @error('super_category_id') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="super_category_id" id="super_category_id" class="custom-select my-1 mr-sm-2 @error('super_category_id') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                            <option value="">Select Category...</option>
                                                            @if (isset($categories))
                                                                @foreach ($categories as $category)
                                                                    <option data-icon="fa fa-sitemap" value="{{ $category->id }}" @if ($product->super_category_id == $category->id) selected @endif> {{ $category->name_en }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- Main Category --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Main Category : <strong
                                                            class="text-danger"> * @error('main_category_id') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <select name="main_category_id" id="main_category_id" class="form-control" required>
                                                            <option value="">Select Main Category....</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Sub Category --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Sub Category : <strong
                                                            class="text-danger"> * @error('sub_category_id') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <select name="sub_category_id" id="sub_category_id" class="form-control" required>
                                                            <option value="">Select Sub Category....</option>
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
                                                        placeholder="Weight" value="{{ isset($product->weight) ? $product->weight : null }}">
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
                                                            <option value="1" @if (isset($product->weight_unit) && $product->weight_unit == 'G') selected @endif>G</option>
                                                            <option value="2" @if (isset($product->weight_unit) && $product->weight_unit == 'KG') selected @endif>KG</option>
                                                            <option value="3" @if (isset($product->weight_unit) && $product->weight_unit == 'Piece') selected @endif>Piece</option>
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
                                                        placeholder="Sale Price" value="{{ isset($product->sale_price) ? $product->sale_price : null }}">
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
                                                            <option value="1" @if ($product->on_sale_price_status == 'Active') selected @endif>Active</option>
                                                            <option value="2" @if ($product->on_sale_price_status == 'Inactive') selected @endif>Inactive</option>
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
                                                        placeholder="On Sale Price" value="{{ isset($product->on_sale_price) ? $product->on_sale_price : $product->on_sale_price }}">
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
                                                        placeholder="Available Quantity" value="{{ $product->quantity_available }}">
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
                                                        placeholder="Limit Quantity" value="{{ $product->quantity_limit }}">
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
                                                        <textarea style="width: 90% !important" name="main_description_ar" class="form-control" rows="5">{{ isset($product->main_description_ar) ? $product->main_description_ar : null }}</textarea>
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
                                                        <textarea style="width: 90% !important" name="main_description_en" class="form-control" rows="5">{{ isset($product->main_description_en) ? $product->main_description_en : null }}</textarea>
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
                                                        <textarea style="width: 90% !important" name="sub_description_ar" class="form-control" rows="5">{{ isset($product->sub_description_ar) ? $product->sub_description_ar : null }}</textarea>
                                                    </div>
                                                </div>

                                                {{-- Sub Description EN --}}
                                                <div class="col-12">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        Sub Description EN : <strong class="text-danger"> * @error('sub_description_en') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open" id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea style="width: 90% !important" name="sub_description_en" class="form-control" rows="5">{{ isset($product->sub_description_en) ? $product->sub_description_en : null }}</textarea>
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
                                                        <textarea style="width: 90% !important" name="ingredient_ar" class="form-control" rows="5">{{ isset($product->ingredient_ar) ? $product->ingredient_ar : null }}</textarea>
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
                                                        <textarea style="width: 90% !important" name="ingredient_en" class="form-control " rows="5">{{ isset($product->ingredient_en) ? $product->ingredient_en : null }}</textarea>
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
                                                        <textarea style="width: 90% !important" name="benefit_ar" class="form-control" rows="5">{{ isset($product->benefit_ar) ? $product->benefit_ar : null }}</textarea>
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
                                                        <textarea style="width: 90% !important" name="benefit_en" class="form-control" rows="5">{{ isset($product->benefit_en) ? $product->benefit_en : null }}</textarea>
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
                                                            <option value="1" @if (isset($product->status) && $product->status == 'Active') selected @endif>Active</option>
                                                            <option value="2" @if (isset($product->status) && $product->status == 'Inactive') selected @endif>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Image Filed --}}
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

                                                {{-- Display Image --}}
                                                <div class="col-md-12 mb-3">
                                                    @if (isset($product->image))
                                                        @if ($product->image && file_exists($product->image))
                                                            <img src="{{ asset($product->image) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                        @else
                                                            <img src="{{ asset('front_end_style/images/default.png') }}" width="100" height="100">
                                                        @endif
                                                    @else
                                                        <img src="{{ asset('front_end_style/images/default.png') }}" width="100" height="70">
                                                    @endif
                                                </div>

                                            </div>

                                            {{-- Button --}}
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-content-save-all"></i> Save Updates</button>
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
        <script>
            $(document).ready(function(){
                super_id = $("#super_category_id").val();
                if(super_id != ""){
                    setTimeout(() => {
                        getMainCategories();
                    }, 500);
                }


                    setTimeout(() => {
                        main_id = $("#main_category_id").val();
                        if(main_id !== ""){
                            getSubCategories();
                        }

                    }, 1000);
            });

            $(document).on("change","#super_category_id",function(){

                getMainCategories();

            });

            $(document).on("change","#main_category_id",function(){

                getSubCategories();

            });

            function getMainCategories(){

                super_category_id = $("#super_category_id").val();

                formData = new FormData();
                formData.append('super_category_id',super_category_id);

                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: "{{ route('super_admin.getMainCategories') }}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    if (data['status'] == true) {
                        old_main = $("#old_main").val();
                        // console.log(old_main);
                        $("#main_category_id").html('');
                        html = '<option value="">Select Main Category....</option>';
                        for (let key = 0; key < data.mainCategories.length; key++) {
                            // console.log(data.mainCategories[key]['id']);
                            if(old_main == data.mainCategories[key]['id']){
                                html +='<option value="'+data.mainCategories[key]['id']+'" selected>'+data.mainCategories[key]['name_en']+'</option>';
                            }
                            else{
                                html +='<option value="'+data.mainCategories[key]['id']+'">'+data.mainCategories[key]['name_en']+'</option>';
                            }
                        }
                        $("#main_category_id").html(html);

                    }
                },
                error: function(data) {

                }
            });
            }


            function getSubCategories(){

                main_category_id = $("#main_category_id").val();

                formData = new FormData();
                formData.append('main_category_id',main_category_id);

                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: "{{ route('super_admin.getSubCategories') }}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    if (data['status'] == true) {
                        old_sub = $("#old_sub").val();
                        // console.log(old_main);
                        $("#sub_category_id").html('');
                        html = '<option value="">Select Sub Category....</option>';
                        for (let key = 0; key < data.subCategories.length; key++) {
                            // console.log(data.mainCategories[key]['id']);
                            if(old_sub == data.subCategories[key]['id']){
                                html +='<option value="'+data.subCategories[key]['id']+'" selected>'+data.subCategories[key]['name_en']+'</option>';
                            }
                            else{
                                html +='<option value="'+data.subCategories[key]['id']+'">'+data.subCategories[key]['name_en']+'</option>';
                            }
                        }
                        $("#sub_category_id").html(html);

                    }
                },
                error: function(data) {

                }
            });
            }
        </script>
    @endsection
