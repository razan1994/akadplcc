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
                    <h1>Add New Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.news_blogs-index') }}">
                                    <i class="far fa-newspaper"></i></span> All Blogs
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"> Add New</li>
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
                                    <div class="card-header card-header-border-bottom">
                                        <h2> Add New Blog :</h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.news_blogs-store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"> Title AR <strong
                                                            class="text-danger"> * @error('title_ar') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="title_ar"
                                                            class="form-control @error('title_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Title AR"
                                                            value="{{ old('title_ar') }}">
                                                    </div>
                                                </div>

                                                {{-- Title EN --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">Titl EN <strong
                                                            class="text-danger"> * @error('title_en') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Titl_EN"
                                                            value="{{ old('title_en') }}">
                                                    </div>
                                                </div>

                                                {{-- Main Image --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"> Image <strong
                                                            class="text-danger">
                                                            * @error('image') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="image" class="form-control"
                                                            id="validationServer01" placeholder="image">
                                                    </div>
                                                </div>

                                                {{-- Status --}}
                                                <div class="col-md-12 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"> Status
                                                        <strong class="text-danger"> * @error('status') - {{ $message }} @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="status" class="selectpicker" data-live-search="true" data-width="88%"
                                                            id="inlineFormCustomSelectPref">
                                                            <option value="" selected>Choose...</option>
                                                            <option value="1" @if (old('status') == '1') selected @endif>Active</option>
                                                            <option value="2" @if (old('status') == '2') selected @endif>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- alt text Ar --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">Alt Text Ar <strong
                                                            class="text-danger"> * @error('alt_text_ar') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="alt_text_ar" class="form-control @error('alt_text_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Alt Text Ar"
                                                            value="{{ old('alt_text_ar') }}">
                                                    </div>
                                                </div>
                                                {{-- alt text En --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">Alt Text En <strong
                                                            class="text-danger"> * @error('alt_text_en') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="alt_text_en" class="form-control @error('alt_text_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Alt Text EN"
                                                            value="{{ old('alt_text_en') }}">
                                                    </div>
                                                </div>
                                                {{-- image title text Ar --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">Image Title Text AR <strong
                                                            class="text-danger"> * @error('image_title_text_ar') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="image_title_text_ar" class="form-control @error('image_title_text_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Image Titl Text Ar"
                                                            value="{{ old('image_title_text_ar') }}">
                                                    </div>
                                                </div>
                                                {{-- image title text En --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">Image Title Text En <strong
                                                            class="text-danger"> * @error('image_title_text_en') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="image_title_text_en" class="form-control @error('image_title_text_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Image Titl Text En"
                                                            value="{{ old('image_title_text_en') }}">
                                                    </div>
                                                </div>

                                                {{-- @lang('front_end.News_Blog_Details_AR') --}}
                                                <div class="col-md-12 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" > Blog Details AR :
                                                        <strong class="text-danger"> * @error('desc_ar') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <textarea id="desc_ar" name="desc_ar" class="form-control ">{{ old('desc_ar') }}</textarea>
                                                </div>

                                                {{-- @lang('front_end.News_Blog_Details_EN') --}}
                                                <div class="col-md-12 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" > Blog Details EN :
                                                        <strong class="text-danger">* @error('desc_en') - {{ $message }}@enderror</strong>
                                                    </label>
                                                    <textarea id="desc_en" name="desc_en" class="form-control" rows="10">{{ old('desc_en') }}</textarea>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <div class="input-group">
                                                        <button class="btn btn-primary" type="submit">Add</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ========================================================== --}}
    {{-- ================ Advance Text Area Section =============== --}}
    {{-- ========================================================== --}}
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

    <script>
            CKEDITOR.replace( 'desc_ar');
            CKEDITOR.replace( 'desc_en');
    </script>
    {{-- ========================================================== --}}
    {{-- ================ Advance Text Area Section =============== --}}
    {{-- ========================================================== --}}
@endsection
